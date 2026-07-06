# Trỏ domain `mail.dragons.asia` vào mailcow (qua nginx tổng + Cloudflare)

Hướng dẫn cấu hình để vào webmail (giao diện Zoho-clone, `/zm/`) bằng
`https://mail.dragons.asia` thay cho `https://192.168.0.231:8444`.

## Mô hình
```
Trình duyệt ──HTTPS──▶ Cloudflare ──HTTP:80──▶ nginx tổng (host) ──HTTPS:8444──▶ mailcow (127.0.0.1)
```
- **Cloudflare** lo HTTPS (giống các site khác trên server, vd `datdep.com`).
- **nginx tổng** chỉ cần **listen 80, KHÔNG cần SSL** — đọc `X-Forwarded-Proto` từ Cloudflare.
- **mailcow** giữ nguyên `127.0.0.1:8080/8444` (KHÔNG đổi cổng vì 80/443 đã bị nginx tổng chiếm).

> "nginx tổng có cần SSL không?" → **Không**, vì Cloudflare đã terminate HTTPS (SSL mode
> *Flexible*: Cloudflare ↔ origin đi HTTP:80). Đây đúng kiểu vhost `datdep.conf` đang chạy.

---

## 1. DNS (Cloudflare)
- Tạo record **A** `mail.dragons.asia → <IP server>`.
- **Webmail**: có thể để **mây cam (proxied)** — Cloudflare lo HTTPS.
- ⚠️ **Mail (SMTP/IMAP)**: xem mục [Caveat mail](#caveat-mail-quan-trọng) — phần này KHÔNG đi qua Cloudflare.

## 2. mailcow.conf
Giữ cổng, chỉ bind nội bộ + khai báo hostname:
```ini
MAILCOW_HOSTNAME=mail.dragons.asia        # hoặc thêm vào ADDITIONAL_SERVER_NAMES
HTTP_PORT=8080
HTTPS_PORT=8444
HTTP_BIND=127.0.0.1
HTTPS_BIND=127.0.0.1
```
Áp dụng:
```bash
cd <thư-mục-mailcow>
docker compose up -d
```

## 3. Thêm vhost vào nginx tổng (KHÔNG sửa config chung, chỉ thêm 1 file site)
File mẫu: [`docs/nginx/mail.dragons.asia.conf`](nginx/mail.dragons.asia.conf)
> ⚠️ **Đặt tên có đuôi `.conf`** — nginx tổng thường `include sites-enabled/*.conf`, file
> không có `.conf` sẽ bị **bỏ qua âm thầm** (vd các site khác là `datdep.conf`). Nếu đang
> là **root** thì bỏ `sudo` (server có thể không có `sudo`).
```bash
cd <thư-mục-mailcow>
git pull origin feature/clean-url

cp docs/nginx/mail.dragons.asia.conf /etc/nginx/sites-available/mail.dragons.asia.conf
ln -s /etc/nginx/sites-available/mail.dragons.asia.conf /etc/nginx/sites-enabled/mail.dragons.asia.conf
nginx -t && nginx -s reload          # hoặc: systemctl reload nginx
```
Nội dung chính (HTTP-only, proxy về mailcow):
```nginx
server {
    listen 80;
    server_name mail.dragons.asia;
    client_max_body_size 0;
    set $forwarded_proto "https";
    if ($http_x_forwarded_proto) { set $forwarded_proto $http_x_forwarded_proto; }
    location / {
        proxy_pass         https://127.0.0.1:8444;   # mailcow HTTPS_PORT
        proxy_ssl_verify   off;                        # cert self-signed nội bộ
        proxy_http_version 1.1;
        proxy_set_header Host              $host;
        proxy_set_header X-Real-IP         $remote_addr;
        proxy_set_header X-Forwarded-For   $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $forwarded_proto;
        proxy_set_header X-Forwarded-Host  $host;
        proxy_buffering off; proxy_request_buffering off;
        proxy_read_timeout 3600s;
    }
}
```

## 4. Xong
Vào `https://mail.dragons.asia/` → login (giao diện Zoho) → tự vào `/zm/`.
Mọi customization (`/zm`, login Zoho, overlay SOGo) chạy nguyên vì chúng theo path /
same-origin, không phụ thuộc tên miền.

---

## Caveat mail (QUAN TRỌNG)
nginx tổng + Cloudflare **chỉ xử lý web (HTTP/HTTPS)**. Các giao thức mail
**không** đi qua được:
- **SMTP/IMAP/POP3** (25, 465, 587, 143, 993, 995) là TCP thuần → Cloudflare **không proxy**,
  nginx tổng cũng **không** đụng tới. Client mail nối **thẳng** tới các cổng đó trên server
  (mailcow đã publish sẵn). → Mở firewall các cổng này.
- Vì vậy **mailcow vẫn cần cert hợp lệ riêng cho `mail.dragons.asia`** (cho STARTTLS/TLS của
  SMTP/IMAP), độc lập với cert Cloudflare dùng cho web. Hai lựa chọn:
  - **(a)** Xin cert bằng certbot (DNS-01 qua Cloudflare là tiện nhất khi đang dùng mây cam),
    rồi copy vào `data/assets/ssl/cert.pem` + `key.pem`, đặt `SKIP_LETS_ENCRYPT=y`, và thêm
    deploy-hook copy lại + `docker compose restart` khi gia hạn.
  - **(b)** Để mailcow tự xin (`SKIP_LETS_ENCRYPT=n`) — cần một record/đường để ACME HTTP-01
    chạm tới mailcow (vd record mail **mây xám** + forward `/.well-known/acme-challenge/`).
- Nếu để `mail.dragons.asia` **mây cam** cho web nhưng vẫn muốn gửi/nhận mail: nên có thêm
  một **record mail riêng mây xám** (vd `mx.dragons.asia` trỏ thẳng IP) cho MX/SMTP/IMAP,
  còn `mail.dragons.asia` (cam) chỉ để vào webmail.

## Khắc phục sự cố (đã gặp thực tế)
- **`sudo: command not found`** (đang là root) → bỏ `sudo`, chạy lệnh trực tiếp:
  `nginx -t && nginx -s reload`.
- **`nginx -t` OK nhưng vào domain vẫn không ra mailcow** → thường do **chưa reload**
  (lệnh reload bị lỗi `sudo`) hoặc **file thiếu `.conf`** nên không được include. Kiểm tra:
  ```bash
  grep -rn "include" /etc/nginx/nginx.conf      # xem pattern: *.conf hay *
  ```
  Nếu là `sites-enabled/*.conf` → đổi tên file thành `...asia.conf`, rồi `nginx -s reload`.
- **Test vhost tại chỗ** (không phụ thuộc DNS/Cloudflare):
  ```bash
  curl -kI -H "Host: mail.dragons.asia" http://127.0.0.1/
  ```
  Ra `301/302/200` từ mailcow = OK; ra `404`/trang mặc định = vhost chưa nạp;
  `Connection refused` = mailcow chưa nghe ở `127.0.0.1:8444`.
- **DNS:** `dig +short mail.dragons.asia` phải ra IP server.
- **Lỗi 521/522 (Cloudflare):** SSL mode đang **Full** mà origin chỉ có HTTP:80 → chuyển
  về **Flexible**, hoặc cho nginx tổng listen 443 có cert.

## Rollback
```bash
rm /etc/nginx/sites-enabled/mail.dragons.asia.conf
nginx -t && nginx -s reload
```

## Lưu ý vận hành
- Cloudflare SSL mode nên là **Full** nếu muốn CF↔origin mã hoá (khi đó nginx tổng phải có
  cert/ssl) — còn theo file này (HTTP:80) là **Flexible**. Chọn theo chính sách bảo mật của bạn.
- Thêm IP nginx tổng vào *trusted proxies* của mailcow để log/anti-spam thấy IP thật.
- `MAILCOW_HOSTNAME` ảnh hưởng HELO + cert mail; cân nhắc trước khi đổi tên chính.
