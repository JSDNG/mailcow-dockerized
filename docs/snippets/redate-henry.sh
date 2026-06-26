#!/usr/bin/env bash
# Đổi ngày 1 thư của henry@pressify.us theo UID (tái nạp IMAP, giữ đính kèm).
# Dùng:  bash docs/snippets/redate-henry.sh <UID> "YYYY-MM-DD HH:MM:SS +ZZZZ"
# Vd:    bash docs/snippets/redate-henry.sh 4 "2025-11-13 12:00:00 -0400"
#
# Mật khẩu đọc từ mailcow.conf — thêm 1 dòng:  MAILPASS_HENRY=<mật khẩu>
set -euo pipefail
D="$(cd "$(dirname "$0")" && pwd)"
CONF="$(cd "$D/../.." && pwd)/mailcow.conf"
export MAILBOX_USER="henry@pressify.us"
export MAIL_PASS="$(grep -E '^MAILPASS_HENRY=' "$CONF" | head -1 | cut -d= -f2- | tr -d '\r')"
[ -n "$MAIL_PASS" ] || { echo "✗ Chua dat MAILPASS_HENRY trong $CONF"; exit 1; }
exec bash "$D/reinject-by-id.sh" "$@"
