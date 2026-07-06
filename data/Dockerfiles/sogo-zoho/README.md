# Zoho-themed SOGo (fork of the SOGo webmail UI)

Biến webmail SOGo thành giao diện kiểu **Zoho Mail** bằng cách **sửa thẳng
frontend gốc của SOGo** (template `.wox` + CSS), đóng gói thành image Docker tùy
biến — KHÔNG recompile backend Objective-C nên build vài giây.

## Cách hoạt động

`Dockerfile` lấy `FROM ghcr.io/mailcow/sogo` rồi:
1. COPY `overlay/css/zoho.css` vào `WebServerResources/css/` (style thật).
2. COPY đè các template đã sửa trong `overlay/templates/` lên bản gốc trong image
   (tìm bằng `find` nên không cần biết đường dẫn cài đặt).

File tới được nginx vì `bootstrap-sogo.sh` chạy
`rsync /usr/local/lib/GNUstep/SOGo/. /sogo_web/` lúc khởi động.

## Đã sửa gì (so với SOGo gốc)

| File | Thay đổi |
|---|---|
| `UIxPageFrame.wox` | thêm `<link ... css/zoho.css>` |
| `UIxTopnavToolbar.wox` | bỏ block ngày → ô **search** Zoho (đã pre-apply `navMailcowBtns.diff` nên bootstrap không patch lại) |
| `UIxMailMainFrame.wox` | thêm **rail app trái**, **rail công cụ phải**, nút **"Mail Mới"** (gọi compose thật) |
| `css/zoho.css` | toàn bộ theme navy/xanh + style cho các phần mới + ẩn FAB/ngày |

Khi đổi giao diện: sửa file trong `overlay/`, rồi build lại image (xem dưới).

## Bật (trên server có Docker)

`docker-compose.override.yml` ở gốc repo đã khai báo build. Chỉ cần:

```bash
cd /opt/app-cty/mailcow-dockerized
git pull origin feature/fix-ui
docker compose build sogo-mailcow
docker compose up -d sogo-mailcow nginx-mailcow
```
Hard-refresh trình duyệt.

> Lần đầu build kéo base image ~1 phút; các lần sau vài giây (chỉ COPY lại overlay).

> **Cloudflare cache:** site chạy sau Cloudflare, cache file `.js`/`.css` tới 4
> tiếng, nên deploy đúng lên server không có nghĩa live thấy ngay. Dockerfile tự
> `touch` file mỗi lần build để SOGo tự đổi `?lm=` cache-buster — không cần sửa
> `sogo.conf`. **Đừng** thêm `?v=N` thủ công vào entry trong `sogo.conf`, việc
> đó làm SOGo không tìm thấy file và mất hẳn UI (xem `ZOHO-UI-DOCS.md` mục 10).

## Rollback (nếu có gì sai)

Xóa `docker-compose.override.yml` rồi:
```bash
docker compose up -d sogo-mailcow nginx-mailcow
```
→ quay lại image SOGo gốc, không mất gì.

## Khi SOGo nâng version

Đổi tag `SOGO_IMAGE` trong `docker-compose.override.yml`, lấy lại 3 template từ
`Alinto/sogo` đúng tag, áp lại các sửa đổi trên, build lại.
