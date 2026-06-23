# =============================================================================
# Zoho-themed SOGo — custom image that edits SOGo's REAL frontend.
# =============================================================================
# FROM mailcow's prebuilt SOGo and overlays edited template (.wox) files plus a
# real stylesheet. No Objective-C recompile, so builds take seconds.
#
# Files reach nginx because bootstrap-sogo.sh rsyncs
#   /usr/local/lib/GNUstep/SOGo/.  ->  /sogo_web  (the volume nginx serves).
#
# UIxTopnavToolbar.wox is shipped WITH mailcow's nav buttons already applied
# (navMailcowBtns.diff pre-applied), so bootstrap's runtime patch detects them
# as present and safely skips re-patching.
# =============================================================================
ARG SOGO_IMAGE=ghcr.io/mailcow/sogo:5.12.8-1
FROM ${SOGO_IMAGE}

LABEL maintainer="Zoho-themed SOGo overlay"

# Real stylesheet, linked from the edited UIxPageFrame.wox (<link .../css/zoho.css>).
COPY overlay/css/zoho.css /usr/local/lib/GNUstep/SOGo/WebServerResources/css/zoho.css

# Edited templates, overlaid onto the originals wherever they live in the image.
COPY overlay/templates/ /zoho-templates/
RUN set -eu; \
    for f in /zoho-templates/*.wox; do \
      name="$(basename "$f")"; \
      found=0; \
      for dest in $(find /usr/local/lib/GNUstep -type f -name "$name"); do \
        cp "$f" "$dest"; echo "overlaid: $dest"; found=1; \
      done; \
      [ "$found" = 1 ] || { echo "ERROR: template $name not found in base image" >&2; exit 1; }; \
    done; \
    rm -rf /zoho-templates
