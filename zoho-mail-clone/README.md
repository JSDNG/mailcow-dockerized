# Zoho Mail UI — Clone (Demo)

Bản clone giao diện **Zoho Mail** bằng HTML/CSS/JS thuần, dùng **dữ liệu fake**
(JSON). Hoàn toàn độc lập — KHÔNG liên quan tới SOGo/mailcow, không cần server mail.

## Cấu trúc

```
zoho-mail-clone/
├── index.html              # khung layout
├── css/styles.css          # toàn bộ style Zoho-like
├── js/
│   ├── icons.js            # bộ icon SVG inline (offline)
│   └── app.js              # fetch JSON + render UI
└── data/                   # DỮ LIỆU FAKE
    ├── folders.json        # thư mục, quick links, views
    ├── emails.json         # danh sách mail (nhóm theo ngày)
    └── conversation.json   # hội thoại đang mở ở khung đọc
```

## Chạy (BẮT BUỘC qua local server)

`app.js` dùng `fetch()` để lấy JSON → trình duyệt **chặn fetch khi mở file://**.
Phải phục vụ qua HTTP. Chọn 1 cách:

```bash
cd zoho-mail-clone

# PHP (đã có sẵn vì đây là project PHP)
php -S localhost:8080

# hoặc Python 3
python3 -m http.server 8080

# hoặc Node
npx serve -l 8080
```

Rồi mở: **http://localhost:8080**

## Sửa nội dung hiển thị

Chỉ cần sửa file trong `data/` rồi refresh trình duyệt — không đụng tới code:
- Thêm/bớt thư mục → `data/folders.json`
- Thêm/bớt mail, đổi nhóm ngày → `data/emails.json`
- Đổi nội dung email đang mở → `data/conversation.json`

## Ghi chú

- Đây là **giao diện tĩnh** (chưa nối hành vi click/điều hướng) — mục tiêu là
  clone đúng layout & style Zoho. Có thể bổ sung tương tác sau.
- Icon là SVG inline (Feather-style), không tải từ CDN nên chạy offline.
