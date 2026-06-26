# Thêm mail "fake" (có đính kèm) + chỉnh ngày

Quy trình gọn: **gửi mail qua webmail → đổi ngày bằng script theo UID**.
Mail là thư thật trong Dovecot (không phải overlay JS) → tắt giao diện Zoho vẫn còn.

> Ví dụ tài khoản `partner@dragons.asia` — đổi lại cho đúng tài khoản của bạn.

## Vì sao không sửa file trực tiếp
- Email nằm trong **Dovecot/Maildir**, KHÔNG nằm trong DB SQL.
- Sửa file Maildir tại chỗ **không cập nhật** ngày (Dovecot index + SOGo cache giữ ngày cũ).
- → Cách chắc chắn: **tái nạp qua IMAP** — đọc thư → ghi lại header `Date` → tạo bản mới
  (UID mới) với ngày cũ → xoá bản gốc. Đó là việc `reinject-by-id.sh` làm.

## Các bước
1. **Gửi mail qua webmail:** soạn thư, **đính kèm file**, gửi cho **chính mình**
   (`partner@dragons.asia`). Thư vào INBOX với ngày = hiện tại.
2. **Lấy UID:** mở thư đó, nhìn URL `…/inbox/p/<id>` → `<id>` chính là **UID**
   (vd `…/inbox/p/4` → UID `4`).
3. **Đổi ngày:**
   ```bash
   cd /opt/app-cty/mailcow-dockerized
   export MAIL_PASS='<mật khẩu của partner@dragons.asia>'
   bash docs/snippets/reinject-by-id.sh 4 "2025-11-13 12:00:00 -0400"
   ```
   → in `=> OK: UID 4 -> ngay ...`. Hard-refresh trình duyệt để thấy.

## Lưu ý
- **Múi giờ:** SOGo hiển thị theo **múi giờ tài khoản** (không theo offset trong `Date:`).
  Đặt đúng offset trong tham số ngày để khỏi lệch 1 ngày — vd dùng `-0400`:
  `"2025-11-13 12:00:00 -0400"`.
- **UID đổi sau khi chạy là CỐ Ý** (tạo bản mới + xoá bản cũ); nội dung + đính kèm giữ nguyên.
- Mặc định mail thành **chưa đọc**. Muốn "đã đọc": sửa `None` → `r'(\Seen)'` ở dòng
  `m.append(...)` trong `docs/snippets/reinject-by-id.sh`.
- **Mật khẩu:** truyền qua `export MAIL_PASS=...` (đừng commit vào git).

## Tiện ích (doveadm)
```bash
# đánh dấu đã đọc toàn bộ INBOX
docker compose exec dovecot-mailcow doveadm flags add -u partner@dragons.asia '\Seen' mailbox INBOX ALL
# xoá 1 thư theo tiêu đề
docker compose exec dovecot-mailcow doveadm expunge -u partner@dragons.asia mailbox INBOX SUBJECT "Tiêu đề"
# đếm số thư trong INBOX
docker compose exec dovecot-mailcow doveadm mailbox status -u partner@dragons.asia messages INBOX
```

## Khắc phục sự cố
- **`Khong tim thay thu UID ...`** → UID sai (lấy lại từ URL `p/<id>`), hoặc thư ở folder khác
  (đổi `MAILBOX` trong script).
- **Ngày hiển thị lệch 1 ngày** → do múi giờ; đặt offset trong tham số ngày cho khớp tài khoản.

> Script: [`docs/snippets/reinject-by-id.sh`](snippets/reinject-by-id.sh)
