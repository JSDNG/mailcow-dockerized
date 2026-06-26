# Đổi ngày mail (nút trên trang Admin)

Đổi ngày một thư trong hộp thư bằng **nút "Đổi ngày mail"** trên header trang
`/admin/dashboard` (chỉ admin thấy). Không cần CLI, không nhập mật khẩu.

## Vì sao cần
- Email nằm trong **Dovecot/Maildir** (không phải DB SQL); sửa file tại chỗ không
  cập nhật (do index Dovecot + cache SOGo).
- Cách đáng tin: **tái nạp qua IMAP** — đọc thư → ghi lại header `Date` → tạo bản mới
  (UID mới) với ngày mong muốn → xoá bản gốc. Backend `data/web/zm-redate.php` làm việc này.

## Cách dùng
1. Đăng nhập **admin** mailcow → `/admin/dashboard`.
2. Bấm **"Đổi ngày mail"** trên header → popup hiện ra.
3. Chọn **tài khoản** (partner@dragons.asia / henry@pressify.us), nhập **UID** (số
   `p/<id>` trên URL SOGo, vd `…/inbox/p/4` → `4`), chọn **Ngày mới** + **Múi giờ**.
4. Bấm **Đổi ngày** → kết quả hiện trong popup (`✓` hoặc `✗ <lỗi>`). Hard-refresh webmail.

## Cấu hình (một lần)
Mật khẩu IMAP đọc từ `mailcow.conf` (mount read-only vào php-fpm) — thêm:
```ini
MAILPASS_PARTNER=<mật khẩu partner@dragons.asia>
MAILPASS_HENRY=<mật khẩu henry@pressify.us>
```
Rồi áp mount + làm mới php-fpm:
```bash
docker compose up -d php-fpm-mailcow
```
> `mailcow.conf` đã được gitignore → mật khẩu không bị commit.

## Lưu ý
- **Bảo mật:** endpoint chỉ chạy khi đã đăng nhập admin; mật khẩu đọc server-side (không lộ ra UI).
- **Múi giờ:** SOGo hiển thị theo múi giờ tài khoản (System Timezone vd `America/New_York` = `-04:00`).
  Chọn múi giờ cho khớp để ngày hiển thị đúng (không lệch 1 ngày).
- **UID đổi sau khi chạy là cố ý** (tạo bản mới + xoá bản cũ); nội dung + đính kèm giữ nguyên.
- Mail mới ở trạng thái **chưa đọc**.

## Thành phần
- Nút + popup: `data/web/templates/base.twig` (gated admin).
- API: `data/web/zm-redate.php` (IMAP re-inject; nhận JSON body nên không vướng CSRF, vẫn gate admin).
- Mount mật khẩu: `docker-compose.override.yml` (`./mailcow.conf:/opt/mailcow.conf:ro`).
