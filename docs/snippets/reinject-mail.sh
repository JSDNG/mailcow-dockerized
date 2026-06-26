#!/usr/bin/env bash
# =============================================================================
# Đổi NGÀY của 1 thư (chọn theo Subject) một cách ĐÁNG TIN — qua IMAP:
#   1) đọc thư gốc, ghi lại header Date: -> ngày cũ
#   2) APPEND một bản SAO vào INBOX với internaldate = ngày cũ (message UID MỚI)
#   3) xoá bản gốc
# => Vì là message mới hoàn toàn nên SOGo hiển thị đúng ngày (không vướng cache,
#    không phụ thuộc mtime/tên file Maildir). Giữ nguyên nội dung + đính kèm.
#
# Dùng: điền PASS + chỉnh SUBJECT/NEWDATE rồi chạy trong thư mục mailcow:
#       bash docs/snippets/reinject-mail.sh
# (Không commit mật khẩu thật vào git.)
# =============================================================================
set -euo pipefail

MB="partner@dragons.asia"
PASS="ĐIỀN_MẬT_KHẨU_IMAP"               # mật khẩu IMAP của tài khoản
SUBJECT="Zoho Relay Test"                # tiêu đề thư cần đổi (khớp một phần, không phân biệt hoa/thường)
NEWDATE="2025-11-13 10:15:00 +0700"      # ngày mới: 'YYYY-MM-DD HH:MM:SS +ZZZZ'

docker compose exec -T dovecot-mailcow python3 - "$MB" "$PASS" "$SUBJECT" "$NEWDATE" <<'PY'
import sys, imaplib, email.utils
from datetime import datetime
MB, PASS, SUBJECT, NEWDATE = sys.argv[1:5]
dt = datetime.strptime(NEWDATE, "%Y-%m-%d %H:%M:%S %z")

m = imaplib.IMAP4('127.0.0.1', 143)      # localhost trong container -> plaintext OK
m.login(MB, PASS)
m.select('INBOX')

typ, data = m.uid('SEARCH', None, 'SUBJECT', '"%s"' % SUBJECT)
uids = (data[0] or b'').split()
if not uids:
    print('✗ Khong tim thay thu co subject:', SUBJECT); m.logout(); sys.exit(1)
uid = uids[-1]                            # bản mới nhất khớp subject
print('Tim thay UID:', uid.decode())

typ, d = m.uid('FETCH', uid, '(RFC822)')
raw = d[0][1]

# Ghi lại header Date: (giữ CRLF chuẩn từ FETCH)
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

# APPEND bản mới (None = chưa đọc; đổi thành r'(\Seen)' neu muon da doc)
m.append('INBOX', None, imaplib.Time2Internaldate(dt.timestamp()), newraw)
# Xoá bản gốc
m.uid('STORE', uid, '+FLAGS', r'(\Deleted)')
m.expunge()
m.logout()
print('=> OK: da tao ban moi ngay', NEWDATE, '& xoa ban goc.')
PY
echo "Xong. Hard-refresh trinh duyet (Cmd/Ctrl+Shift+R) de thay."
