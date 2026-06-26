#!/usr/bin/env bash
# =============================================================================
# Đổi NGÀY của ĐÚNG 1 thư MỚI NHẤT trong INBOX sang một ngày cũ.
# Chỉ tác động lên duy nhất thư mới nhất (ls -t | head -1); không đụng thư khác.
#
# Dùng:  sửa 3 biến bên dưới rồi chạy trong thư mục mailcow:
#        bash docs/snippets/redate-newest-mail.sh
# =============================================================================
set -euo pipefail

# ---- SỬA 3 GIÁ TRỊ NÀY ----
NEWDATE="Thu, 13 Nov 2025 10:15:00 +0700"   # ngày HIỂN THỊ mới (header Date)
MTIME="2025-11-13 10:15:00"                  # ngày NHẬN (internaldate -> sort/nhóm)
MB="partner@dragons.asia"                    # tài khoản
# ---------------------------

LP="${MB%@*}"   # local-part cho đường dẫn Maildir

docker compose exec -T dovecot-mailcow sh -s "$NEWDATE" "$MTIME" "$MB" "$LP" <<'SH'
set -eu
NEWDATE="$1"; MTIME="$2"; MB="$3"; LP="$4"

# CHỈ lấy 1 thư mới nhất trong INBOX (cur = đã đọc, new = mới)
F=$(ls -t /var/vmail/*/"$LP"/cur/* /var/vmail/*/"$LP"/new/* 2>/dev/null | head -1 || true)
if [ -z "${F:-}" ]; then
  echo "✗ Khong tim thay thu trong INBOX cua $MB (kiem tra duong dan /var/vmail/.../$LP/)."
  exit 1
fi
echo "File moi nhat : $F"

sed -i "s/^Date:.*/Date: $NEWDATE/" "$F"   # doi ngay HIEN THI
touch -d "$MTIME" "$F"                      # doi ngay NHAN (sort)
doveadm force-resync -u "$MB" INBOX         # reindex de SOGo nhan ngay
echo "=> DA DOI 1 thu: Date -> $NEWDATE | internaldate -> $MTIME"
SH
