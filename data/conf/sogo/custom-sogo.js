// redirect to mailcow login form
document.addEventListener('DOMContentLoaded', function () {
    var loginForm = document.forms.namedItem("loginForm");
    if (loginForm) {
        window.location.href = '/user';
    }
});
// logout function
function mc_logout() {
    fetch("/", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "logout=1"
    }).then(() => window.location.href = '/');
}

// Custom SOGo JS

// Change the visible font-size in the editor, this does not change the font of a html message by default
CKEDITOR.addCss("body {font-size: 16px !important}");

// Enable scayt by default
//CKEDITOR.config.scayt_autoStartup = true;

// ---------------------------------------------------------------------------
// Zoho-like UI tweaks (DEMO)
// Layout/spacing/component styling. Colors come from custom-theme.js (palette).
// Injected as a <style> so it overrides SOGo's compiled CSS without forking the
// SOGo image. Tune selectors below; SOGo class names may shift across versions.
// ---------------------------------------------------------------------------
(function injectZohoTheme() {
  // Zoho brand blue. We recolor SOGo's compiled green primary to this. Selectors
  // use SOGo's REAL class names (toolbar-main, sg-account-section, sg-selected,
  // md-fab) verified against the SOGo source, with !important to beat the
  // precompiled theme-default.css (whose rules are not !important).
  var ZOHO = '#2C6FDB';      // primary
  var ZOHO_DARK = '#215AB8'; // hover/darker
  var ZOHO_TINT = '#E8F0FD'; // selected-row tint

  var css = `
    /* ---- Recolor primary green -> Zoho blue (keeps existing white text) ---- */
    md-toolbar.toolbar-main,
    .toolbar-main,
    section.sg-account-section,
    .sg-account-section,
    md-toolbar.md-primary,
    .md-primary.md-toolbar,
    md-toolbar.md-default-theme:not(.md-menu-toolbar).md-primary {
      background-color: ${ZOHO} !important;
      color: #ffffff !important;
    }

    /* ---- Compose FAB: blue + slightly rectangular (kept bottom-right) ---- */
    .md-fab, md-button.md-fab, button.md-fab,
    .md-fab-bottom-right .md-fab {
      background-color: ${ZOHO} !important;
      color: #ffffff !important;
      border-radius: 10px !important;
    }
    .md-fab:hover, md-button.md-fab:hover, button.md-fab:hover {
      background-color: ${ZOHO_DARK} !important;
    }

    /* ---- Selected folder (sidenav) -> Zoho blue ---- */
    md-list-item.sg-mailbox-list-item.sg-selected,
    md-list-item.sg-selected,
    md-list-item.md-bg,
    .sg-mailbox-list-item.md-bg {
      background-color: ${ZOHO} !important;
      color: #ffffff !important;
    }
    md-list-item.sg-mailbox-list-item.sg-selected .md-icon,
    md-list-item.sg-selected i { color: #ffffff !important; }

    /* ---- Selected message row (list) -> light blue tint + blue bar ---- */
    md-list-item.md-mail.active,
    md-list-item.md-mail.md-bg,
    md-virtual-repeat-container md-list-item.active {
      background-color: ${ZOHO_TINT} !important;
      box-shadow: inset 3px 0 0 ${ZOHO} !important;
    }
    md-list-item.md-mail:hover { background-color: #F4F6F9 !important; }

    /* ---- Search field: prominent Zoho-like bar ---- */
    .sg-search-form input, md-toolbar .md-button.search input, input[type="search"] {
      background: #F4F6F9 !important;
      border-radius: 8px !important;
      padding: 0 12px !important;
    }
  `;

  function apply() {
    if (document.getElementById('mc-zoho-theme')) return;
    var style = document.createElement('style');
    style.id = 'mc-zoho-theme';
    style.type = 'text/css';
    style.appendChild(document.createTextNode(css));
    (document.head || document.documentElement).appendChild(style);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', apply);
  } else {
    apply();
  }
})();

