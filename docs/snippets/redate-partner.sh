#!/usr/bin/env bash
# Đổi ngày 1 thư của partner@dragons.asia theo UID (tái nạp IMAP, giữ đính kèm).
# Dùng:  bash docs/snippets/redate-partner.sh <UID> "YYYY-MM-DD HH:MM:SS +ZZZZ"
# Vd:    bash docs/snippets/redate-partner.sh 4 "2025-11-13 12:00:00 -0400"
#
# Mật khẩu đọc từ mailcow.conf — thêm 1 dòng:  MAILPASS_PARTNER=<mật khẩu>
set -euo pipefail
D="$(cd "$(dirname "$0")" && pwd)"
CONF="$(cd "$D/../.." && pwd)/mailcow.conf"
export MAILBOX_USER="partner@dragons.asia"
export MAIL_PASS="$(grep -E '^MAILPASS_PARTNER=' "$CONF" | head -1 | cut -d= -f2- | tr -d '\r')"
[ -n "$MAIL_PASS" ] || { echo "✗ Chua dat MAILPASS_PARTNER trong $CONF"; exit 1; }
exec bash "$D/reinject-by-id.sh" "$@"
