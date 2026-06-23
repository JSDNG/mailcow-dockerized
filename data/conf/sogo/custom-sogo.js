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
  var css = `
    /* ---- Compose button: green round FAB -> Zoho-style "Mail Mới" pill ---- */
    .md-fab-bottom-right.md-fab-scroll-trigger,
    #toolbar .md-fab,
    md-fab-toolbar .md-fab,
    button.md-fab[aria-label="Write"],
    button.md-fab[aria-label="Compose"] {
      position: static !important;
      width: auto !important;
      min-width: 140px !important;
      height: 40px !important;
      line-height: 40px !important;
      border-radius: 6px !important;
      box-shadow: 0 1px 3px rgba(0,0,0,.18) !important;
      background-color: #2C6FDB !important;
      color: #fff !important;
    }

    /* ---- Top toolbar: tone down the oversized date header ---- */
    md-toolbar.md-default-theme:not(.md-menu-toolbar),
    md-toolbar:not(.md-menu-toolbar) {
      background-color: #ffffff !important;
      color: #2b2f36 !important;
      box-shadow: 0 1px 0 #e1e7ef !important;
    }
    /* SOGo big date block in the corner -> shrink so it reads like Zoho */
    .view-detailedDate, .headerDate, .sg-md-date {
      font-size: 13px !important;
      opacity: .65 !important;
    }

    /* ---- Search field: make it the prominent Zoho-like bar ---- */
    .sg-search-form input, md-toolbar .md-button.search input, input[type="search"] {
      background: #f4f6f9 !important;
      border-radius: 8px !important;
      padding: 0 12px !important;
    }

    /* ---- Mail list: lighter panes, clearer selected row (Zoho blue) ---- */
    .sidenav, md-sidenav, .md-sidenav-left { background-color: #ffffff !important; }
    md-list-item.md-mail.active,
    .mailbox-list md-list-item.selected,
    md-virtual-repeat-container md-list-item.active {
      background-color: #e8f0fd !important;
      box-shadow: inset 3px 0 0 #2C6FDB !important;
    }
    md-list-item.md-mail:hover { background-color: #f4f6f9 !important; }

    /* ---- General: white content background like Zoho ---- */
    .md-default-theme .md-content, md-content { background-color: #ffffff !important; }
    body, .sg-root { background-color: #eef2f7 !important; }
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

