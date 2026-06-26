#!/usr/bin/env bash
# =============================================================================
# Đổi NGÀY của thư MỚI NHẤT trong INBOX sang một ngày cũ —
# CHỈ thực hiện nếu thư đó có ngày = HÔM NAY (tức vừa gửi qua webmail).
# An toàn: thư đã cũ (đã xử lý trước) sẽ được BỎ QUA, không bị đổi lại.
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

# lấy file thư mới nhất trong INBOX (cur = đã đọc, new = mới)
F=$(ls -t /var/vmail/*/"$LP"/cur/* /var/vmail/*/"$LP"/new/* 2>/dev/null | head -1 || true)
if [ -z "${F:-}" ]; then
  echo "✗ Khong tim thay thu trong INBOX cua $MB (kiem tra duong dan /var/vmail/.../$LP/)."
  exit 1
fi
echo "File moi nhat : $F"

FILEDAY=$(date -r "$F" +%F)   # ngay (YYYY-MM-DD) theo mtime cua file
TODAY=$(date +%F)
echo "Ngay thu      : $FILEDAY"
echo "Hom nay       : $TODAY"

if [ "$FILEDAY" = "$TODAY" ]; then
  sed -i "s/^Date:.*/Date: $NEWDATE/" "$F"     # doi ngay HIEN THI
  touch -d "$MTIME" "$F"                        # doi ngay NHAN (sort)
  doveadm force-resync -u "$MB" INBOX           # reindex de SOGo nhan ngay
  echo "=> DA DOI: Date -> $NEWDATE | internaldate -> $MTIME"
else
  echo "=> BO QUA: thu moi nhat KHONG phai ngay hom nay (co the da xu ly truoc do)."
fi
SH
