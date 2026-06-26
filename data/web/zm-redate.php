<?php
// =============================================================================
// Công cụ admin: đổi NGÀY của 1 thư qua IMAP re-inject (giữ đính kèm).
//   POST { account: partner|henry, uid, date (Y-m-dTH:i), tz (+0700), csrf_token }
// Mật khẩu đọc từ mailcow.conf (mount /opt/mailcow.conf), KHÔNG nhập tay.
// Chỉ ADMIN mailcow đã đăng nhập mới gọi được.
// =============================================================================
require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/prerequisites.inc.php';
header('Content-Type: application/json; charset=utf-8');

function out($ok, $extra = []) {
  $extra['csrf'] = $_SESSION['CSRF']['TOKEN'] ?? '';   // token (đã xoay) cho lần gọi sau
  echo json_encode(array_merge(['ok' => $ok], $extra), JSON_UNESCAPED_UNICODE);
  exit;
}

// Lộ fatal error ra JSON thay vì body rỗng (khó debug)
register_shutdown_function(function () {
  $e = error_get_last();
  if ($e && in_array($e['type'], [E_ERROR, E_PARSE, E_COMPILE_ERROR, E_CORE_ERROR])) {
    if (!headers_sent()) header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['ok' => false, 'msg' => 'PHP fatal: ' . $e['message']]);
  }
});

try {
  if (($_SESSION['mailcow_cc_role'] ?? '') !== 'admin') { http_response_code(403); out(false, ['msg' => 'Chỉ admin mới dùng được.']); }
  if ($_SERVER['REQUEST_METHOD'] !== 'POST')            { http_response_code(405); out(false, ['msg' => 'Chỉ chấp nhận POST.']); }
  if (!function_exists('imap_open'))                    { out(false, ['msg' => 'PHP thiếu extension imap.']); }

  // account -> { email, biến mật khẩu trong mailcow.conf }
  $MAP = [
    'partner' => ['email' => 'partner@dragons.asia', 'conf' => 'MAILPASS_PARTNER'],
    'henry'   => ['email' => 'henry@pressify.us',     'conf' => 'MAILPASS_HENRY'],
  ];

  // Đọc THẲNG raw body (php://input): mailcow session_check chỉ xoá superglobal $_POST
  // khi CSRF sai, KHÔNG đụng tới php://input. Nhờ vậy lấy lại được dữ liệu dù frontend
  // gửi JSON hay form-urlencoded, không phụ thuộc CSRF token. Vẫn gate admin.
  $rawBody = file_get_contents('php://input');
  $in = json_decode($rawBody, true);
  if (!is_array($in)) { $in = []; parse_str($rawBody, $in); }   // fallback: urlencoded
  if (empty($in)) $in = $_POST;                                 // last resort
  $account = $in['account'] ?? '';
  $uid     = (int)($in['uid'] ?? 0);
  $dateIn  = trim($in['date'] ?? '');      // "2025-11-13T12:00" (datetime-local)
  $tz      = preg_replace('/[^0-9+\-]/', '', $in['tz'] ?? '+0700');

  if (!isset($MAP[$account])) out(false, ['msg' => 'Tài khoản không hợp lệ.']);
  if ($uid <= 0)              out(false, ['msg' => 'UID không hợp lệ.']);
  if ($dateIn === '')         out(false, ['msg' => 'Chưa nhập ngày.']);

  // ---- mật khẩu từ mailcow.conf (mount read-only) ----
  $confPath = '/opt/mailcow.conf';
  if (!is_readable($confPath)) out(false, ['msg' => 'Không đọc được /opt/mailcow.conf (chưa mount? cần docker compose up -d php-fpm-mailcow).']);
  $pass = '';
  $needle = $MAP[$account]['conf'] . '=';
  foreach (file($confPath, FILE_IGNORE_NEW_LINES) as $ln) {
    if (strncmp($ln, $needle, strlen($needle)) === 0) { $pass = substr($ln, strlen($needle)); break; }
  }
  $pass = trim($pass, "\"' \r\t");
  if ($pass === '') out(false, ['msg' => 'Chưa cấu hình ' . $MAP[$account]['conf'] . ' trong mailcow.conf.']);

  $email = $MAP[$account]['email'];

  // ---- ngày ----
  try { $dt = new DateTime($dateIn . ' ' . $tz); }
  catch (Exception $e) { out(false, ['msg' => 'Ngày không hợp lệ.']); }
  $dateHeader = $dt->format('r');                 // RFC2822 cho header Date:
  $internal   = $dt->format('d-M-Y H:i:s O');     // cho IMAP APPEND internaldate

  // ---- IMAP (nội bộ, TLS self-signed) ----
  $ref = '{dovecot-mailcow:993/imap/ssl/novalidate-cert}';
  $mbox = @imap_open($ref . 'INBOX', $email, $pass, OP_READWRITE);
  if (!$mbox) out(false, ['msg' => 'Đăng nhập IMAP thất bại: ' . imap_last_error()]);

  $hdr  = @imap_fetchheader($mbox, $uid, FT_UID);
  $body = @imap_body($mbox, $uid, FT_UID | FT_PEEK);
  if ($hdr === false || $hdr === '') { imap_close($mbox); out(false, ['msg' => 'Không tìm thấy thư UID ' . $uid . '.']); }

  // Ghi lại header Date: CHỈ trên phần header (nhỏ) — tránh regex toàn thư (đính kèm lớn)
  $cnt = 0;
  $newHdr = preg_replace('/^Date:.*\R/im', 'Date: ' . $dateHeader . "\r\n", $hdr, 1, $cnt);
  if ($newHdr === null) $newHdr = $hdr;                       // phòng regex lỗi
  if (!$cnt) $newHdr = 'Date: ' . $dateHeader . "\r\n" . $newHdr;
  $raw = $newHdr . (is_string($body) ? $body : '');

  // APPEND bản mới (UID mới, chưa đọc) + xoá bản gốc
  $ok = @imap_append($mbox, $ref . 'INBOX', $raw, null, $internal);
  if (!$ok) { imap_close($mbox); out(false, ['msg' => 'APPEND thất bại: ' . imap_last_error()]); }
  @imap_delete($mbox, $uid, FT_UID);
  @imap_expunge($mbox);
  imap_close($mbox);

  out(true, ['email' => $email, 'uid' => $uid, 'date' => $dateHeader]);
} catch (\Throwable $e) {
  out(false, ['msg' => 'Lỗi: ' . $e->getMessage()]);
}
