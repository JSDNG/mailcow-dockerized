# Zoho-themed SOGo (fork of the SOGo webmail UI)

Mục tiêu: biến UI webmail thật (SOGo) thành giao diện kiểu **Zoho Mail**, bằng
cách **sửa chính frontend của SOGo** (template `.wox` + CSS) rồi đóng gói thành
image Docker tùy biến cho mailcow — **không recompile backend Objective-C**.

## Vì sao chia 2 tầng

| Tầng | Phạm vi | Cơ chế | Cần build image? |
|---|---|---|---|
| **1** | Màu/theme (navy sidebar, accent xanh, FAB xanh, group ngày) | CSS inject qua `data/conf/sogo/custom-sogo.js` | ❌ chỉ restart |
| **2** | Cấu trúc (rail app phải, tabs trên, thanh search, đổi vị trí nút compose, bar dịch) | Sửa template `.wox` → COPY đè qua image này | ✅ build image |

CSS không đổi được *cấu trúc DOM* → phần cấu trúc bắt buộc sửa template ⇒ Tầng 2.

## Selector/file thật đã xác định (SOGo 5.12.8 upstream)

- Shell + sidebar + top toolbar: `UI/Templates/MailerUI/UIxMailMainFrame.wox`
  (top bar = `md-toolbar.toolbar-main`, sidebar = `md-sidenav.md-sidenav-left`)
- Danh sách mail + nút compose: `UI/Templates/MailerUI/UIxMailFolderTemplate.wox`
  (FAB = `md-button.md-fab.md-accent.sg-fab-bottom-center` trong `md-fab-speed-dial`;
   group ngày = `.sg-md-subheader`)
- Khung đọc: `UI/Templates/MailerUI/UIxMailViewTemplate.wox` (date = `time.msg-date`)
- Style: `UI/WebServerResources/scss/views/MailerUI.scss`

## Vòng lặp Tầng 2 (làm trên server có Docker)

### B1 — Xác nhận đường dẫn template trong image (chạy 1 lần, gửi output)
```bash
docker exec sogo-mailcow find /usr/local/lib/GNUstep -name 'UIxMailMainFrame.wox'
docker exec sogo-mailcow find /usr/local/lib/GNUstep -maxdepth 2 -name 'WebServerResources' -type d
```
→ cho biết `SOGO_ROOT`/`Templates` thật để chỉnh `Dockerfile` (biến `SOGO_ROOT`)
và bỏ comment dòng `COPY overlay/Templates/...`.

### B2 — Bật build image tùy biến
Tạo `docker-compose.override.yml` ở gốc repo:
```yaml
services:
  sogo-mailcow:
    image: mailcow/sogo-zoho:5.12.8-1
    build:
      context: ./data/Dockerfiles/sogo-zoho
      args:
        SOGO_IMAGE: ghcr.io/mailcow/sogo:5.12.8-1
```

### B3 — Build + chạy + xem
```bash
docker compose build sogo-mailcow
docker compose up -d sogo-mailcow nginx-mailcow
```
Mở `https://<host>/SOGo/`, hard-refresh, chụp màn hình → gửi lại để tinh chỉnh.

## Lưu ý

- Mỗi lần SOGo nâng version: cập nhật `SOGO_IMAGE` và đối chiếu lại template
  (đây là chi phí cố hữu của việc fork UI bên thứ ba).
- Asset gốc để chỉnh sửa lấy từ `Alinto/sogo` tag `SOGo-5.12.8` (đã khảo sát).
- KHÔNG cần `docker-compose.override.yml` cho tới khi bắt đầu B2 — vì vậy file
  override CHƯA được tạo sẵn để tránh đổi hành vi deploy hiện tại của bạn.
