# Zoho-style Webmail UI cho mailcow (SOGo) — Tài liệu tổng hợp

Tài liệu mô tả toàn bộ những gì đã làm để biến giao diện webmail của mailcow
thành giao diện kiểu **Zoho Mail**, cách triển khai, vận hành và bảo trì.

---

## 1. Bối cảnh & phát hiện cốt lõi

**Mục tiêu:** clone giao diện Zoho Mail lên webmail của hệ thống mailcow.

**Phát hiện quyết định toàn bộ hướng làm:**
- Giao diện webmail KHÔNG phải `data/web/` (đó là **trang quản trị mailcow** — PHP,
  ở `/user`, `/admin`).
- Webmail là **SOGo** — một app riêng (AngularJS + Angular Material), chạy trong
  container `sogo-mailcow`. **Mã nguồn UI của SOGo nằm BÊN TRONG image Docker**
  (`/usr/local/lib/GNUstep/SOGo/...`), không có sẵn trong repo.

→ Vì vậy mọi thay đổi giao diện webmail phải đi qua **SOGo**, không phải `data/web/`.

---

## 2. Kiến trúc giải pháp

Dùng **2 lớp**, đều gói trong một **custom Docker image** build từ image SOGo gốc
(`FROM ghcr.io/mailcow/sogo`) — sửa thẳng frontend gốc, KHÔNG recompile backend
Objective-C nên build vài giây.

| Lớp | Bản chất | Tác dụng |
|---|---|---|
| **A. Theme + cấu trúc** | Sửa template `.wox` gốc + CSS thật | Đổi màu Zoho, thêm rail trái/phải, thanh search, nút "Mail Mới" |
| **B. Demo data layer** | JS overlay đọc JSON fake | Phủ list + khung đọc kiểu Zoho có dữ liệu, gộp mail thật + fake, tương tác |

**Nguyên tắc xuyên suốt:** không phá huỷ. Logic gốc SOGo (IMAP, gửi/nhận, list,
khung đọc) **còn nguyên**; lớp demo là overlay cô lập, lỗi thì tự fallback.

---

## 3. Cây file (trong `data/Dockerfiles/sogo-zoho/`)

```
Dockerfile                         # FROM image SOGo, COPY đè overlay vào image
README.md                          # hướng dẫn build/rollback
ZOHO-UI-DOCS.md                    # tài liệu này
overlay/
├── css/zoho.css                   # toàn bộ style Zoho (theme + cấu trúc + demo)
├── templates/                     # template GỐC của SOGo đã sửa
│   ├── UIxPageFrame.wox           #   + <link zoho.css>
│   ├── UIxTopnavToolbar.wox       #   bỏ block ngày → thanh search Zoho
│   └── UIxMailMainFrame.wox       #   + rail trái/phải, nút "Mail Mới"
└── WebServerResources/
    ├── js/zoho-demo.js            # renderer lớp demo (list/khung đọc/tương tác)
    └── demo/                      # DATA FAKE theo từng tab
        ├── inbox.json  drafts.json  sent.json  trash.json
        └── junk.json   templates.json  archive.json
```

File liên quan ngoài thư mục trên:
- `docker-compose.override.yml` (gốc repo) — bật build custom image cho `sogo-mailcow`.
- `data/conf/sogo/sogo.conf` — nạp `js/zoho-demo.js` (mount, `SOGoUIAdditionalJSFiles`).
- `data/conf/sogo/custom-sogo.js` — đã trả về bản gốc mailcow (redirect login + `mc_logout`).
- `zoho-mail-clone/` (gốc repo) — bản clone Zoho **tĩnh độc lập** (HTML/CSS/JS) làm
  bản tham chiếu pixel, không liên quan runtime.

---

## 4. Tính năng đã làm

### Lớp A — Theme & cấu trúc (template gốc + CSS)
- Đổi tông xanh lá/teal của SOGo → **navy + xanh dương Zoho** (sidebar, top bar,
  folder đang chọn, accent).
- **Rail app bên trái** (Mail / Lịch / Việc cần làm / Ghi chú / Số liên lạc /
  Dấu trang / Web Tab) — flex column thật, không vỡ khi thu hẹp cửa sổ.
- **Rail công cụ bên phải** (cài đặt, đính kèm, lịch...).
- **Thanh search** kiểu Zoho ở giữa top bar (thay block ngày tháng to).
- Nút **"Mail Mới"** đầu sidebar (gọi compose thật của SOGo).
- Ẩn FAB xanh lá gốc (vẫn giữ trong DOM để forward compose).

### Lớp B — Demo data + tương tác (`zoho-demo.js` + JSON)
- **List + khung đọc kiểu Zoho** phủ lên vùng giữa, đổ dữ liệu từ JSON.
- **Gộp mail thật trước, fake sau:** đọc (scrape) list mail thật của SOGo từ
  `#messagesList`, hiện nhóm **"Hộp thư (thật)"** ở đầu, rồi tới data fake.
- **Data fake riêng từng tab:** đổi tab (URL hash) → tự load `demo/<tab>.json`.
- **Bấm email đổi nội dung khung đọc:**
  - Mail **thật** → mở bằng SOGo native (ẩn pane fake, lộ pane thật → reply /
    forward / xoá thật hoạt động).
  - Mail **fake** → khung đọc Zoho fake (có bar dịch, ô reply...).
- **Xoá:** hover row hiện icon thùng rác; nút "Xóa" trên toolbar; nút **X** đóng pane.
- **Nút soạn thư:** FAB tròn xanh góc dưới-phải (+ "Mail Mới"), đều gọi compose thật.

### Toggle (bật/tắt demo, không cần build lại)
- Thêm `?demo=0` vào URL, hoặc
- Console: `localStorage.setItem('zohoDemo','off')`, hoặc
- Bỏ dòng `js/zoho-demo.js` trong `data/conf/sogo/sogo.conf` rồi restart.

Khi TẮT → SOGo thật chạy với data thật (vẫn giữ skin Zoho).

---

## 5. Triển khai (deploy)

Chạy trên server (nơi có Docker), trong thư mục mailcow:
```bash
git pull origin feature/fix-ui
docker compose build sogo-mailcow
docker compose up -d sogo-mailcow nginx-mailcow
```
Hard-refresh trình duyệt (Cmd/Ctrl+Shift+R). Lần đầu build kéo base image ~1 phút;
sau đó vài giây.

> Lưu ý: file CSS/JS/template đi vào image (cần build); riêng `sogo.conf` và
> `custom-sogo.js` là mount (chỉ cần `git pull` + restart).

---

## 6. Rollback (nếu cần)

Xoá `docker-compose.override.yml` rồi:
```bash
docker compose up -d sogo-mailcow nginx-mailcow
```
→ quay về image SOGo gốc, không mất dữ liệu/mail.

---

## 7. Bảo trì & mở rộng

- **Sửa nội dung mail fake / thêm tab:** sửa file `overlay/WebServerResources/demo/<tab>.json`
  (mỗi email có khối `detail`), rồi build lại image.
- **Sửa màu / style:** `overlay/css/zoho.css`.
- **Sửa cấu trúc (rail, search, nút):** template `.wox` trong `overlay/templates/`.
- **Map DATA THẬT vào renderer (tương lai):** trong `zoho-demo.js` có một điểm
  "data adapter" — hàm `loadFolder()`/`scrapeReal()`. Hiện đọc JSON fake + scrape
  DOM thật; sau này có thể đọc thẳng model mailbox của SOGo
  (`angular.element(...).scope()`) và biến đổi sang đúng shape — renderer giữ nguyên.
- **Khi SOGo nâng version:** đổi tag `SOGO_IMAGE` trong `docker-compose.override.yml`,
  lấy lại 3 template từ `Alinto/sogo` đúng tag, áp lại các sửa đổi, build lại.

---

## 8. Kiểm thử (Playwright)

UI SOGo chỉ render được trên server thật (cần build + backend mail). Việc kiểm thử
giao diện được làm bằng **Playwright** (đăng nhập SOGo thật, chụp màn hình, kiểm tra
DOM, thử click). Đã verify: theme, cấu trúc rail (rộng/hẹp không vỡ), demo render,
click email đổi khung đọc, toggle on/off giữ nguyên SOGo thật.

> Lưu ý vận hành: máy dev và server có thể khác mạng → khi không route tới
> `192.168.0.231` thì không live-verify được; lúc đó build phòng thủ và verify lại
> khi mạng thông.

---

## 9. Trạng thái hiện tại

- ✅ Theme + cấu trúc Zoho (template gốc) — đã verify trên live.
- ✅ Demo data + click đổi khung đọc + toggle — đã verify trên live.
- ✅ Gộp mail thật/fake, data 6 tab, hành động xem/xoá/compose — **đã code & push,
  CHƯA live-verify** (lần đó mất route tới server). Cần test trên live, đặc biệt
  phần "mở mail thật" (có thể cần căn lại vị trí khung đọc thật).

---

## 10. Lịch sử commit chính (nhánh `feature/fix-ui`)

| Commit | Nội dung |
|---|---|
| `b7527e3` | Gộp mail thật/fake, data fake 6 tab, hành động xem/xoá, nút compose |
| `23edc5f` | Demo không phá huỷ + điểm "data adapter" để map data thật |
| `3602270` | Bấm email đổi nội dung khung đọc |
| `20f618d` | Lớp demo data fake (inbox đầy dữ liệu kiểu Zoho) |
| `0640a8d` | Sửa rail thành flex column (không vỡ khi thu hẹp) |
| `72101a4` | Chuyển sang fork thật: custom image sửa template `.wox` gốc |
| `68adc91`–`e1137fc` | Rail trái/phải, search, "Mail Mới", ẩn ngày/FAB (giai đoạn overlay) |
| `2911d43`,`74deb4d` | Theme Zoho + fix nạp custom-sogo.js |
| `315c69b` | Bản clone Zoho tĩnh độc lập (tham chiếu) |
