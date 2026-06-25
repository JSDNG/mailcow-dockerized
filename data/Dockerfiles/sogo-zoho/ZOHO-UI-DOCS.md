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
│   └── UIxMailMainFrame.wox       #   + rail trái/phải, "Mail Mới", section STREAMS/TAG/GIAO DIỆN
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
- Đổi tông xanh lá/teal của SOGo → **navy charcoal Zoho** (sidebar, top bar, rail,
  folder đang chọn, accent xanh dương `#2c6fde`).
  - Màu navy lấy mẫu pixel từ ảnh Zoho thật = `#252934`; bản hiện tại dùng
    **`#1b2330`** (đậm hơn Zoho một chút cho rõ nét), account header `#141b26`.
- **Rail app bên trái** (Mail / Lịch / Việc cần làm / Ghi chú / Số liên lạc /
  Dấu trang / Web Tab) — flex column thật, không vỡ khi thu hẹp cửa sổ. **Mỗi icon
  một màu** lấy mẫu từ Zoho (Mail xanh dương, Lịch tím, Việc cần làm xanh lá, Ghi chú
  vàng, Số liên lạc cam, Dấu trang đỏ, Web Tab xám xanh).
- **Rail công cụ bên phải** (cài đặt, đính kèm, lịch...) — icon nhiều màu kiểu Zoho.
- **Thanh search** kiểu Zoho ở giữa top bar (thay block ngày tháng to).
- Nút **"Mail Mới"** đầu sidebar (gọi compose thật của SOGo) + caret ▾ kiểu split-button.
- Ẩn FAB xanh lá gốc (vẫn giữ trong DOM để forward compose).
- **Top bar nền SÁNG** (giống Zoho thật): nền trắng, viền đáy nhạt, chữ/icon tối, ô
  search nền xám sáng + caret `▾` chọn phạm vi "Mail". Sidebar trái vẫn navy.
- **Dải tab kiểu trình duyệt** ở top bar trái: tab "Mail" (active) + "Khôi phục 1 tab ✕" (tĩnh).
- **Cụm icon phải kiểu Zoho** (tĩnh): cloud, chuông, avatar có chấm online, lưới-app —
  thêm CẠNH các icon SOGo có chức năng (Lịch/Contacts/Mail/Preferences/Logout, restyle sáng).
- **Brand "Mail"** đầu rail trái + **nút thu gọn `<`** đáy rail; app đang chọn = **icon trong tile bo góc xanh** (thay viền trái).
- **Bỏ block account header** (avatar+email+⚙ của SOGo) → "Mail Mới" lên trên cùng. Header
  **THƯ MỤC** thêm icon `⚙`/`⊞` (tĩnh).
- **Thanh Smart Chat đáy màn** (tĩnh): Chat / Kênh / Liên hệ + "Đây là nội dung Smart Chat...".
- **Rail phải mở rộng** ~12 icon nhiều màu + chấm đỏ thông báo + chat bubble đáy.

#### Sidebar kiểu Zoho (folder list + section tĩnh)
- **Folder list chỉ còn chữ** (ẩn icon đầu dòng như Zoho), giữ menu more_vert; giữ
  chiều cao dòng 40px để không vỡ `md-virtual-repeat`.
- **Đậm/nhạt chữ:** thư mục đang chọn = trắng + semibold; thường = nhạt; header nhóm
  = đậm mờ uppercase; badge số chưa đọc = xanh đậm.
- Dòng tài khoản được đổi nhãn thành **header "THƯ MỤC"** (qua CSS `::before`).
- **Thêm các section tĩnh** (UI-only, chưa gắn chức năng) ở `UIxMailMainFrame.wox`,
  style bằng `.zoho-nav*`:
  - **STREAMS** (trên): Trang chủ · Tất cả chưa đọc · Tạo một nhóm (+ icon tune/add).
  - **TAG** (header + icon add).
  - **GIAO DIỆN** (dưới): Chưa đọc · Tất cả tin nhắn · Đã gắn cờ.
  - Folder list co theo nội dung (`min-height` viewport) để các section flow xuống dưới.

### Lớp B — Demo data + tương tác (`zoho-demo.js` + JSON)
- **List + khung đọc kiểu Zoho** phủ lên vùng giữa, đổ dữ liệu từ JSON.
- **Gộp mail thật trước, fake sau:** đọc (scrape) list mail thật của SOGo từ
  `#messagesList`, hiện nhóm **"Hộp thư"** ở đầu, rồi tới data fake.
  - `cleanText()` loại bỏ text của `md-icon`/`.material-icons`/`.ng-hide`/`.sg-tile-date`
    khi scrape → **không còn dính chữ "error"** (ligature của icon trạng thái ẩn) hay
    ngày giờ vào tên người gửi.
- **Data fake riêng từng tab:** đổi tab (URL hash) → tự load `demo/<tab>.json`.
- **Bấm email đổi nội dung khung đọc:**
  - Mail **thật** → render trong **khung đọc Zoho (hybrid)**: toolbar + header dựng
    kiểu Zoho, còn **phần thân thật của SOGo (`.sg-face`) được _di chuyển_ vào pane**
    (`mountRealBody`) → giữ nguyên HTML/ảnh/đính kèm/quoted; toolbar gốc SOGo ẩn bằng CSS.
    Đóng pane / chuyển mail / refresh list → `restoreRealFace()` trả node về `#detailView`.
    - `openRealRow()` click vào `<button>` con (handler thật nằm ở button, không phải
      `md-list-item`) để SOGo mở mail.
    - Nút Zoho (Trả lời / Trả lời tất cả / Chuyển tiếp / cờ / in / mở cửa sổ / xoá)
      gọi thẳng handler SOGo qua `ng-click` ổn định (`viewer.reply(`, `viewer.forward(`,
      `viewer.deleteMessage(`...).
    - **Bố cục khung đọc đã khớp Zoho:** toolbar trên = *Thông báo nhắc / Thêm tác vụ /
      Liên kết vĩnh viễn / Báo lại* (tĩnh) + *in / chat / mở cửa sổ / xoá / đóng*; nhóm
      **Trả lời/Trả lời tất cả/Chuyển tiếp + caret nằm cạnh người gửi** (vẫn nối handler
      SOGo qua `data-act`); thêm **ô bình luận** "@nhắc đến..." ở đáy (tĩnh). List header
      có caret `▾` sau tên thư mục.
  - Mail **fake** → khung đọc Zoho fake (có bar dịch, ô reply...).
- **Xoá:** hover row hiện icon thùng rác; nút "Xóa" trên toolbar; nút **X** đóng pane.
- **Nút soạn thư:** FAB tròn xanh góc dưới-phải (+ "Mail Mới"), đều gọi compose thật.

#### Phủ list & cửa sổ compose (z-index / pointer-events)
- Overlay `.zoho-demo-layer` đặt `pointer-events:none` ở vùng trong suốt, chỉ
  `auto` cho `.zd-list`/`.zd-read`/FAB → click xuyên xuống pane thật khi cần.
- `.zd-list` được set rộng = đúng cột list gốc SOGo (`.view-list`) để **list gốc không
  ló ra** giữa list Zoho và khung đọc.
- Overlay `z-index: 59` — **trên** nội dung SOGo nhưng **dưới** mọi dialog/menu của
  Angular Material (z 60+) → cửa sổ **reply/forward/compose hiện đè lên trên**, và
  overlay Zoho vẫn hiển thị **mờ** phía sau (không bị trắng/lộ UI gốc).

### Toggle (bật/tắt demo, không cần build lại)
- Console: `localStorage.setItem('zohoDemo','off')` (cách **đáng tin nhất**), hoặc
- Bỏ dòng `js/zoho-demo.js` trong `data/conf/sogo/sogo.conf` rồi restart, hoặc
- Thêm `?demo=0` vào URL — **lưu ý:** trên live query string có thể bị mất khi SOGo
  redirect lúc đăng nhập nên cách này không phải lúc nào cũng ăn; ưu tiên localStorage.

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
- ✅ **Mở mail thật trong khung Zoho (hybrid embed)** — đã verify trên live: mở được,
  thân/ảnh/đính kèm giữ nguyên, nút reply/forward/xoá nối đúng SOGo.
- ✅ **Cửa sổ compose/reply hiện đè đúng** (z-index 59), nền Zoho mờ phía sau — verify live.
- ✅ **Fix chữ "error"** trước tên người gửi (ligature icon ẩn bị scrape) — verify live.
- ✅ **Màu chrome navy Zoho** (`#1b2330`), icon left rail nhiều màu, đậm/nhạt chữ — verify live.
- ✅ **Sidebar text-only + "THƯ MỤC"** và section tĩnh **STREAMS / TAG / GIAO DIỆN** —
  đã code & push (UI tĩnh, **chưa gắn chức năng** cho các mục này theo yêu cầu).
- 🆕 **Đợt tăng độ giống Zoho:** top bar nền sáng + brand + tab strip + cụm icon phải; bỏ
  account header (Mail Mới lên trên cùng); Smart Chat bar đáy; rail phải mở rộng; khung đọc
  mail thật khớp layout Zoho (toolbar Thông báo nhắc/Thêm tác vụ/…; nút trả lời cạnh người
  gửi; ô bình luận đáy). **Chờ build trên live + verify Playwright.**
- ✅ **Wire chức năng cơ bản:** ô **tìm kiếm** top bar lọc list theo người gửi/tiêu đề
  (không dấu cũng khớp); **GIAO DIỆN/STREAMS** lọc *Chưa đọc / Tất cả / Đã gắn cờ*
  (đọc trạng thái mail thật qua Angular `currentMessage.isflagged/isread/flags`); nút
  **thu gọn `<`** gập sidebar (gọi `toggleLeft()`); **avatar top bar** mở **popup tài
  khoản** (tên/email/trạng thái + Tên đăng nhập/IMAP/SMTP đọc từ `window.mailAccounts`,
  nút Cài đặt `/user` + Đăng xuất `mc_logout()`). Mail thật vẫn mở/Trả lời/Chuyển
  tiếp/Xóa qua handler SOGo. → đọc thêm `#### Chức năng đã wire` dưới đây.
- ⏳ Vẫn **để tĩnh** (không backend hoặc rủi ro, đã bỏ qua theo yêu cầu): tab strip,
  cụm icon phải (cloud/bell/apps), Smart Chat bar, toolbar khung đọc (Thông báo
  nhắc/Thêm tác vụ/Liên kết vĩnh viễn/Báo lại), ô bình luận đáy, STREAMS "Tạo một nhóm",
  TAG ⊞, THƯ MỤC ⚙/⊞.

#### Chức năng đã wire (zoho-demo.js)
- `applyFilter()` + `filterMode`/`searchQuery`: lọc client-side trên list Zoho (real+fake),
  ẩn cả header nhóm ngày khi rỗng. `norm()` bỏ dấu tiếng Việt để search dễ khớp.
- `realFlags(el)`: đọc `unread`/`flagged` thật từ scope Angular của `md-list-item`.
- `openAcctPopup()` + `acctData()`: popup tài khoản từ avatar top bar (đóng khi click ngoài/Escape).
- `wireChrome()`: gắn listener cấp document cho ô search, nav STREAMS/GIAO DIỆN, nút thu gọn, avatar —
  tồn tại độc lập với overlay (overlay rebuild không mất binding); `place()` gọi lại
  `applyFilter()` để giữ bộ lọc qua mỗi lần re-render.

---

## 10. Lịch sử commit chính (nhánh `feature/fix-ui`)

| Commit | Nội dung |
|---|---|
| *(mới)* | Tăng độ giống Zoho: top bar sáng + brand + tab strip + icon phải; bỏ account header; Smart Chat bar; rail phải mở rộng; khung đọc mail thật khớp layout Zoho |
| `6a83fd7` | Thêm section sidebar **STREAMS / TAG / GIAO DIỆN** (UI tĩnh) |
| `450cd81` | Fix chữ **"error"**: `cleanText()` lọc ligature icon/`.ng-hide`/ngày khi scrape |
| `55ed74a` | Icon left rail **nhiều màu** + đậm/nhạt chữ thư mục |
| `3d003d6` | Folder list **chỉ chữ** (ẩn icon) + header **"THƯ MỤC"** |
| `90eb21e` | Navy đậm **`#1b2330`** + caret "Mail Mới" + rail phải nhiều màu + folder gọn |
| `3c9fa1c` | Khớp navy chrome = Zoho `#252934` (lấy mẫu pixel) |
| `ba3d8f9` | Đổi nhãn "Hộp thư (thật)" → "Hộp thư" |
| `4b06597` | Giữ giao diện Zoho **mờ** sau dialog compose (bỏ display:none) |
| `b651bc0` | Hạ overlay **z-index 59** để compose/reply hiện đè lên trên |
| `bdc50f1` | **Render mail thật trong khung Zoho (hybrid)**: nhúng `.sg-face`, nối nút |
| `1d386d9` | `.zd-list` rộng = cột list gốc → hết "ló" list gốc ở giữa |
| `873070d` | Mở được mail thật: click vào `<button>` con (không phải md-list-item) |
| `b7527e3` | Gộp mail thật/fake, data fake 6 tab, hành động xem/xoá, nút compose |
| `23edc5f` | Demo không phá huỷ + điểm "data adapter" để map data thật |
| `3602270` | Bấm email đổi nội dung khung đọc |
| `20f618d` | Lớp demo data fake (inbox đầy dữ liệu kiểu Zoho) |
| `0640a8d` | Sửa rail thành flex column (không vỡ khi thu hẹp) |
| `72101a4` | Chuyển sang fork thật: custom image sửa template `.wox` gốc |
| `68adc91`–`e1137fc` | Rail trái/phải, search, "Mail Mới", ẩn ngày/FAB (giai đoạn overlay) |
| `2911d43`,`74deb4d` | Theme Zoho + fix nạp custom-sogo.js |
| `315c69b` | Bản clone Zoho tĩnh độc lập (tham chiếu) |
