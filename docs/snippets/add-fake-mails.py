#!/usr/bin/env python3
# Nạp nhiều mail "fake" (HTML + tiếng Việt có dấu + đính kèm) vào INBOX qua IMAP APPEND,
# set sẵn cả ngày hiển thị (header Date) lẫn ngày nhận (internaldate -> sort/nhóm).
#
# Cách chạy (trên server, trong thư mục mailcow):
#   # 1) copy file đính kèm vào container dovecot (nếu có):
#   docker compose cp ./invoice.pdf dovecot-mailcow:/tmp/invoice.pdf
#   # 2) sửa USER/PASS và danh sách MAILS bên dưới, rồi:
#   docker compose exec -T dovecot-mailcow python3 - < docs/snippets/add-fake-mails.py
#
# Lưu ý: đường dẫn file đính kèm là đường dẫn BÊN TRONG container (vd /tmp/invoice.pdf).

import imaplib, time
from email.message import EmailMessage
from email.utils import format_datetime
from datetime import datetime, timezone, timedelta

VN = timezone(timedelta(hours=7))
USER, PASS = 'partner@dragons.asia', '-,Gnound,87'   # <-- sửa cho đúng tài khoản

# mỗi mail: (ngày, người gửi, tiêu đề, nội-dung-HTML, [danh sách file đính kèm trong container])
MAILS = [
    (datetime(2025, 11, 13, 10, 15, tzinfo=VN), 'Kế Toán <ketoan@dragons.asia>',
     'Báo cáo tài chính tháng 11',
     '<p>Chào anh/chị,</p><p>Đính kèm <b>báo cáo</b> tháng 11/2025.</p>',
     ['/tmp/invoice.pdf']),
    (datetime(2025, 12, 2, 9, 0, tzinfo=VN), 'Nhân Sự <hr@dragons.asia>',
     'Lịch nghỉ Tết Dương lịch 2026',
     '<p>Công ty nghỉ Tết Dương lịch 01/01/2026.</p>',
     []),   # không đính kèm
]

# loại MIME gợi ý theo đuôi file (cho icon/định dạng đẹp); mặc định octet-stream
MIME = {'pdf': ('application', 'pdf'), 'png': ('image', 'png'), 'jpg': ('image', 'jpeg'),
        'jpeg': ('image', 'jpeg'), 'docx': ('application', 'vnd.openxmlformats-officedocument.wordprocessingml.document'),
        'xlsx': ('application', 'vnd.openxmlformats-officedocument.spreadsheetml.sheet')}

m = imaplib.IMAP4('127.0.0.1', 143)   # localhost trong container -> plaintext OK
m.login(USER, PASS)
for dt, frm, subj, html, files in MAILS:
    msg = EmailMessage()
    msg['From'] = frm
    msg['To'] = USER
    msg['Subject'] = subj
    msg['Date'] = format_datetime(dt)
    msg.set_content('Email này có nội dung HTML.')      # bản text thuần
    msg.add_alternative(html, subtype='html')           # bản HTML
    for f in files:
        ext = f.rsplit('.', 1)[-1].lower()
        maintype, subtype = MIME.get(ext, ('application', 'octet-stream'))
        with open(f, 'rb') as fh:
            msg.add_attachment(fh.read(), maintype=maintype, subtype=subtype,
                               filename=f.split('/')[-1])
    when = imaplib.Time2Internaldate(dt.timestamp())     # internaldate = ngày cũ
    m.append('INBOX', None, when, msg.as_bytes())
    print('added:', subj)
m.logout()
print('Done.')
