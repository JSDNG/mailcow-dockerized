#!/usr/bin/env bash
# =============================================================================
# Đổi NGÀY của 1 thư theo UID (id) — tái nạp qua IMAP (đáng tin, giữ đính kèm).
#   UID = số "p/<id>" trên URL SOGo (vd .../inbox/p/4  -> UID 4).
#
# Cách dùng:
#   bash docs/snippets/reinject-by-id.sh <UID> "<NEWDATE>"
#   vd:  bash docs/snippets/reinject-by-id.sh 4 "2025-11-13 12:00:00 -0400"
#
# Cơ chế: FETCH thư theo UID -> ghi lại header Date -> APPEND bản mới với
# internaldate mới (UID MỚI) -> xoá bản gốc. Nội dung + đính kèm giữ nguyên.
# Lưu ý: SOGo hiển thị theo MÚI GIỜ tài khoản -> đặt offset trong NEWDATE cho đúng ngày.
# =============================================================================
set -euo pipefail

MB="partner@dragons.asia"
PASS="${MAIL_PASS:-ĐIỀN_MẬT_KHẨU_IMAP}"   # hoặc: export MAIL_PASS=... rồi chạy
MAILBOX="INBOX"

UID_IN="${1:?Thiếu UID. Vd: bash reinject-by-id.sh 4 \"2025-11-13 12:00:00 -0400\"}"
NEWDATE="${2:?Thiếu ngày. Định dạng: 'YYYY-MM-DD HH:MM:SS +ZZZZ'}"

docker compose exec -T dovecot-mailcow python3 - "$MB" "$PASS" "$MAILBOX" "$UID_IN" "$NEWDATE" <<'PY'
import sys, imaplib, email.utils
from datetime import datetime
MB, PASS, MAILBOX, UID_IN, NEWDATE = sys.argv[1:6]
dt = datetime.strptime(NEWDATE, "%Y-%m-%d %H:%M:%S %z")

m = imaplib.IMAP4('127.0.0.1', 143)
m.login(MB, PASS)
m.select(MAILBOX)

# Đọc thư theo UID
typ, d = m.uid('FETCH', UID_IN, '(RFC822)')
if typ != 'OK' or not d or d[0] is None:
    print('✗ Khong tim thay thu UID', UID_IN, 'trong', MAILBOX); m.logout(); sys.exit(1)
raw = d[0][1]

# Ghi lại header Date: (giữ CRLF)
i = raw.find(b'\r\n\r\n')
hdr, body = (raw[:i], raw[i:]) if i >= 0 else (raw, b'')
newdate = ('Date: ' + email.utils.format_datetime(dt)).encode()
out, done = [], False
for ln in hdr.split(b'\r\n'):
    if ln[:5].lower() == b'date:' and not done:
        out.append(newdate); done = True
    else:
        out.append(ln)
if not done:
    out = [newdate] + out
newraw = b'\r\n'.join(out) + body

# APPEND bản mới (None = chưa đọc) rồi xoá bản gốc theo UID
m.append(MAILBOX, None, imaplib.Time2Internaldate(dt.timestamp()), newraw)
m.uid('STORE', UID_IN, '+FLAGS', r'(\Deleted)')
m.expunge()
m.logout()
print('=> OK: UID', UID_IN, '-> ngay', NEWDATE, '(tao ban moi + xoa ban goc).')
PY
echo "Xong. Hard-refresh trinh duyet de thay."
