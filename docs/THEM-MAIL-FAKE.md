# Thêm mail "fake" (có đính kèm) vào hộp thư + chỉnh ngày

Hướng dẫn thêm thư mẫu vào mailbox để hộp thư trông đầy/đủ dài để cuộn, có **đính kèm**,
hiển thị **ngày cũ**. Đây là **thư thật trong Dovecot** (không phải lớp overlay JS) → bật/tắt
giao diện Zoho vẫn còn.

> Ví dụ dùng tài khoản `partner@dragons.asia`. Đổi lại cho đúng tài khoản của bạn.

---

## 0. Hiểu trước khi làm (quan trọng)
- **Email KHÔNG nằm trong DB SQL** của mailcow. SQL (`mysql-mailcow`) chỉ chứa cấu hình
  (mailbox, domain, alias, quota…). **Nội dung thư nằm trong Dovecot/Maildir** (volume `vmail`).
- Mỗi thư có **2 "ngày"**:
  - **Header `Date:`** bên trong thư → cái **SOGo HIỂN THỊ** (ngày bạn thấy trong danh sách).
  - **INTERNALDATE** (ngày Dovecot nhận) → dùng để **sắp xếp / nhóm theo tháng**. Với Maildir,
    Dovecot lấy internaldate = **mtime của file** thư.
- Vì vậy để có "mail ngày cũ", ta chỉnh **cả hai**: header `Date:` và `mtime` file, rồi reindex.

---

## Cách A — Gửi qua UI rồi chỉnh ngày  (khuyên dùng khi cần ĐÍNH KÈM)
Ý tưởng: để **webmail lo phần khó** (dựng MIME, đính kèm, HTML, tiếng Việt có dấu), ta **chỉ
chỉnh ngày** bằng vài lệnh.

### Bước 1 — Soạn & gửi qua webmail
1. Vào webmail, bấm **Mail Mới** (soạn thư).
2. **To:** chính địa chỉ của bạn (`partner@dragons.asia`).
3. Gõ tiêu đề/nội dung, **đính kèm file** (kéo-thả hoặc nút kẹp giấy).
4. **Gửi.** → Thư vào **INBOX** với **ngày = hiện tại**. (Sẽ có thêm 1 bản trong **Sent** — kệ hoặc xoá sau.)

### Bước 2 — Chỉnh ngày bằng lệnh (trên server, trong thư mục mailcow)
```bash
cd /opt/app-cty/mailcow-dockerized

# Ngày mới muốn hiển thị + ngày cho sort:
NEWDATE="Thu, 13 Nov 2025 10:15:00 +0700"
MTIME="2025-11-13 10:15:00"

# (2a) Lấy file MỚI NHẤT trong INBOX — chính là thư bạn vừa gửi
F=$(docker compose exec -T dovecot-mailcow sh -c \
  "ls -t /var/vmail/*/partner/cur/* /var/vmail/*/partner/new/* 2>/dev/null | head -1")
echo "file: $F"        # phải in ra 1 đường dẫn; nếu trống xem mục 'Khắc phục'

# (2b) Sửa header Date: + đặt mtime + reindex
docker compose exec -T dovecot-mailcow sh -c \
  "sed -i 's/^Date:.*/Date: $NEWDATE/' '$F' && touch -d '$MTIME' '$F' && \
   doveadm force-resync -u partner@dragons.asia INBOX"
```

### Giải thích từng lệnh
| Lệnh | Làm gì |
|---|---|
| `NEWDATE=…` | Chuỗi ngày theo chuẩn RFC ( `Thứ, DD Tháng YYYY HH:MM:SS +giờ` ) → ghi vào header `Date:`. |
| `MTIME=…` | Ngày để set `mtime` của file = **internaldate** (sort/nhóm). |
| `ls -t .../cur/* .../new/*` | Liệt kê thư trong INBOX theo **mới nhất trước**; `head -1` lấy thư vừa gửi. `cur`/`new` là 2 thư mục Maildir (đã đọc / mới). |
| `sed -i 's/^Date:.*/Date: …/'` | Thay **dòng header `Date:`** trong file thư bằng ngày mới (đổi ngày **hiển thị**). |
| `touch -d '…' '$F'` | Đặt **mtime** file = ngày cũ → Dovecot dùng làm **ngày nhận** (sort). |
| `doveadm force-resync -u … INBOX` | **Build lại index** của INBOX để mailcow/SOGo nhận thay đổi ngay. |

### Bước 3 — Kiểm tra
- Mở webmail, hard-refresh → thư hiện **ngày cũ**, vẫn còn **đính kèm**.
- Hoặc kiểm tra số thư: 
  ```bash
  docker compose exec dovecot-mailcow doveadm mailbox status -u partner@dragons.asia messages INBOX
  ```

---

## Cách B — Script tự động (khuyên dùng khi cần NHIỀU mail)
Khi cần chục mail rải nhiều tháng, dựng MIME bằng Python rồi **IMAP APPEND** (set luôn cả Date
lẫn internaldate) sẽ nhanh hơn. Xem script mẫu trong `docs/snippets/add-fake-mails.py`
(copy file đính kèm vào container trước, sửa danh sách `MAILS`, chạy `python3`).

So sánh:
- **Cách A:** ít lệnh, tốt cho **vài mail có đính kèm** (UI lo MIME).
- **Cách B:** một phát ra **nhiều mail**, ngày đồng nhất, không thao tác UI từng cái.

---

## Tiện ích thêm
**Đánh dấu đã đọc / chưa đọc / gắn cờ** (doveadm flags):
```bash
# đánh dấu ĐÃ ĐỌC toàn bộ INBOX
docker compose exec dovecot-mailcow doveadm flags add -u partner@dragons.asia '\Seen' mailbox INBOX ALL
# GẮN CỜ thư mới nhất
docker compose exec dovecot-mailcow doveadm flags add -u partner@dragons.asia '\Flagged' mailbox INBOX 1
```
(`doveadm save`/UI để mặc định **chưa đọc**.)

**Xoá thư fake:** xoá trực tiếp trong webmail (chuột phải → Xoá), hoặc:
```bash
docker compose exec dovecot-mailcow doveadm expunge -u partner@dragons.asia mailbox INBOX SUBJECT "Tiêu đề cần xoá"
```

**Nạp vào folder khác** (Sent, Archive…): đổi `INBOX` thành tên folder; đường dẫn Maildir đổi
sang dạng `.Sent/cur`, `.Archive/cur`…

---

## Khắc phục sự cố
- **`echo "file: $F"` ra trống** → glob đường dẫn `vmail` khác. Tìm đúng đường dẫn:
  ```bash
  docker compose exec dovecot-mailcow sh -c "find /var/vmail -maxdepth 3 -type d -name partner"
  ```
  rồi thay `/var/vmail/*/partner/` trong lệnh cho khớp.
- **Log Dovecot báo "Maildir filename has wrong S value"** → vô hại: do sửa `Date:` làm đổi
  kích thước thư so với `,S=` trong tên file. `doveadm force-resync` **tự sửa lại**. Muốn tránh
  hẳn: chọn `NEWDATE` **cùng độ dài chuỗi** với ngày gốc (dùng ngày 2 chữ số).
- **Thư không đổi ngày sau lệnh** → chưa chạy `force-resync`, hoặc sửa nhầm file (kiểm tra `$F`).
- **Còn bản trong Sent ngày mới** → do gửi cho chính mình; xoá bản Sent nếu không muốn.

---

## Lưu ý
- Đây là **thư thật** → đếm vào quota mailbox; nhiều/đính kèm lớn sẽ tốn dung lượng.
- Không nên làm trên mailbox production quan trọng nếu chỉ để demo — cân nhắc tạo mailbox riêng.
