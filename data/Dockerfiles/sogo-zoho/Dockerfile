# =============================================================================
# Zoho-themed SOGo  (STAGE 2 — structural fork)
# =============================================================================
# Builds a thin image ON TOP of mailcow's prebuilt SOGo and overlays modified
# frontend assets (Angular .wox templates + CSS). This edits the REAL SOGo UI
# without recompiling the Objective-C backend, so builds take seconds.
#
# Stage 1 (colors/theme) is done via data/conf/sogo/custom-sogo.js and needs no
# image build. This image is only required for STRUCTURAL changes that CSS can't
# do: the right-hand app rail, top tabs + search bar, repositioned compose
# button, conversation translation bar, etc.
#
# BEFORE USING: confirm the installed template path on your running image:
#   docker exec sogo-mailcow find /usr/local/lib/GNUstep -name 'UIxMailMainFrame.wox'
# then set TEMPLATE_ROOT below to the directory that contains Templates/MailerUI.
# =============================================================================
ARG SOGO_IMAGE=ghcr.io/mailcow/sogo:5.12.8-1
FROM ${SOGO_IMAGE}

# Path that contains WebServerResources/ and the product template bundles.
# Confirmed via docker-compose.yml mounts: WebServerResources lives here.
ARG SOGO_ROOT=/usr/local/lib/GNUstep/SOGo

# --- CSS overlay (path is certain) ------------------------------------------
# Zoho stylesheet; loaded at runtime by custom-sogo.js (injects a <link>).
COPY overlay/WebServerResources/css/ ${SOGO_ROOT}/WebServerResources/css/

# --- Template overlay (STRUCTURE) -------------------------------------------
# Uncomment once you have confirmed the template path (see header) and have
# authored the modified .wox files under overlay/Templates/.
# COPY overlay/Templates/ ${SOGO_ROOT}/Templates/
