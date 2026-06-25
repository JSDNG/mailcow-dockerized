# Zoho-style URL wrapper (`/zm/`)

Cho phép webmail mailcow/SOGo có **URL kiểu Zoho giữ nguyên trên thanh địa chỉ**:

```
https://<host>/zm/#mail/folder/inbox/p/<uid>
```

thay vì URL gốc của SOGo:

```
https://<host>/SOGo/so/<email>/Mail/view#!/Mail/0/INBOX/<uid>
```

## Vì sao phải làm kiểu này
Một cửa sổ trình duyệt chỉ hiển thị **một** URL. URL đó của SOGo do AngularJS (ngRoute)
điều khiển. Muốn hiển thị một URL **khác** mà **đứng yên**, phải tách ngữ cảnh duyệt:
- **Shell** (`/zm/`) sở hữu URL hiển thị.
- **iframe** (cùng origin) chạy SOGo đầy đủ (kèm UI overlay Zoho).

Cách này **không sửa nội bộ SOGo** — chỉ **đọc** hash của SOGo để phản chiếu, và **ghi**
hash để điều hướng. Vì vậy nó bền hơn nhiều so với fork router của SOGo (tránh vỡ khi
nâng cấp SOGo).

> Tham chiếu phân tích các phương án (A/B/C/D) và lý do chọn C: xem lịch sử thiết kế.
> Đây là phương án **C – Wrapper iframe**.

## Cây file (`data/web/zm/`)
```
index.html     # shell: iframe full màn hình + nạp zm-shell.js
zm.css         # full-viewport, ẩn viền iframe, màn chờ
zm-shell.js    # lớp dịch URL + đồng bộ 2 chiều + xử lý login
README.md      # tài liệu này
```

## Triển khai (deploy)
`data/web` là **bind-mount** vào nginx (`./data/web:/web`), và nginx có `root /web` +
`location / { try_files $uri $uri/ … }`, nên `data/web/zm/index.html` được phục vụ ngay
tại `/zm/`. **Không cần build image, không cần sửa nginx** — chỉ cần:

```bash
git pull origin feature/clean-url
# (không cần docker build; static file phục vụ trực tiếp qua mount)
```

Truy cập: `https://<host>:<port>/zm/`

## Cơ chế (zm-shell.js)
- **Dịch URL** (2 chiều):
  | Shell (hiển thị) | SOGo (iframe) |
  |---|---|
  | `#mail/folder/inbox` | `#!/Mail/0/INBOX` |
  | `#mail/folder/inbox/p/<uid>` | `#!/Mail/0/INBOX/<uid>` |
  - Map folder: `inbox↔INBOX, sent↔Sent, drafts↔Drafts, spam↔Junk, trash↔Trash, templates↔Templates, archive↔Archive`.
  - `<uid>` = uid thật của SOGo (id của clone = uid, opaque).
- **frame → shell**: nghe `hashchange` của iframe → `history.replaceState` cập nhật URL shell (không tạo rác history).
- **shell → frame**: nghe `hashchange` của shell (sửa URL / back-forward) → set hash của iframe → SOGo điều hướng.
- **Khám phá tài khoản**: nạp iframe tại `/SOGo/` để SOGo tự redirect về mailbox của user;
  shell đọc `iframe.location` (cùng origin) để lấy path `/SOGo/so/<email>/Mail/view`.
- **Login**: nếu iframe rơi vào trang đăng nhập (`/user` hoặc SOGo loginForm) → **break-out**
  `top.location.replace('/user')` để đăng nhập full-page. Sau khi đăng nhập, mở lại `/zm/`.
  (Khi đã có session thì bỏ qua bước này — vào thẳng hộp thư.)

## Hạn chế đã biết / điểm cần lưu ý
- Sau khi load, deep-link đầu tiên có thể **nháy qua INBOX** trước khi nhảy đúng folder
  (vì phải biết `<email>` từ lần load đầu). Chấp nhận được.
- Dùng `replaceState` (không `pushState`) → nút **Back** thoát khỏi `/zm` thay vì lùi folder.
- Phụ thuộc format hash của SOGo `#!/Mail/0/<folder>/<uid>` — chỉ **đọc/ghi**, không sửa router SOGo.
- Phụ thuộc `X-Frame-Options: SAMEORIGIN` (mailcow đặt sẵn) để iframe cùng origin hoạt động.
- Tên miền sạch / cổng 443 / cert là **bước hạ tầng riêng** (DNS + mailcow.conf + TLS) — wrapper
  hoạt động độc lập với host; hình dạng `/zm/#…` mới là phần quyết định.

## Kiểm thử (Playwright, sau khi deploy)
1. Mở `/zm/` (đã đăng nhập) → vào inbox, URL = `/zm/#mail/folder/inbox`, SOGo render bên trong.
2. Bấm 1 email → URL = `/zm/#mail/folder/inbox/p/<uid>`, khung đọc đúng.
3. Đổi folder (Đã gửi…) → URL đổi `#mail/folder/sent`.
4. Reload deep-link `/zm/#mail/folder/sent/p/<uid>` → vào đúng trạng thái.
5. Trạng thái chưa đăng nhập → break-out `/user`.
