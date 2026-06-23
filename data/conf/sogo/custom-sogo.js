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
  // Zoho-like reskin (STAGE 1 — colors/theme only). Selectors are the REAL SOGo
  // 5.12.8 class names taken from the upstream source (UI/Templates/MailerUI/*.wox
  // and scss/views/MailerUI.scss): toolbar-main, md-sidenav-left, sg-account-section,
  // sg-mailbox-list-item/sg-selected, md-fab.md-accent/sg-fab-bottom-center,
  // sg-md-subheader. !important beats Angular Material's md-colors inline styles
  // and the non-!important compiled theme. Structural changes (right app rail,
  // top tabs/search) are STAGE 2 via the custom SOGo image (see
  // data/Dockerfiles/sogo-zoho/README.md).
  var NAVY      = '#2b3547';  // dark sidebars/topbar
  var NAVY_DARK = '#283041';
  var BLUE      = '#2c6fde';  // primary accent
  var BLUE_DARK = '#225bc0';
  var TINT      = '#e8f0fd';  // selected mail tint
  var LIGHT     = '#c7cdd9';  // text on navy

  var css = `
    /* ---- Left sidebar -> Zoho dark navy ---- */
    md-sidenav.md-sidenav-left,
    .md-sidenav-left md-content,
    .md-sidenav-left .sg-account-section {
      background-color: ${NAVY} !important;
      color: ${LIGHT} !important;
    }
    .md-sidenav-left md-toolbar,
    .md-sidenav-left .md-toolbar { background-color: ${NAVY_DARK} !important; color: #fff !important; }
    .md-sidenav-left .sg-item-name,
    .md-sidenav-left md-list-item,
    .md-sidenav-left .sg-md-subheader { color: ${LIGHT} !important; }
    .md-sidenav-left md-icon { color: #9aa3b2 !important; }

    /* ---- Selected folder -> blue accent ---- */
    md-list-item.sg-mailbox-list-item.sg-selected {
      background-color: rgba(255,255,255,.10) !important;
      color: #fff !important;
      box-shadow: inset 3px 0 0 ${BLUE} !important;
    }
    .sg-mailbox-list-item.sg-selected md-icon { color: #5b9bf3 !important; }

    /* ---- Top toolbar (was teal) -> dark navy ---- */
    md-toolbar.toolbar-main { background-color: ${NAVY} !important; color: #fff !important; }
    md-toolbar.toolbar-main md-icon,
    md-toolbar.toolbar-main .md-button { color: ${LIGHT} !important; }

    /* ---- Compose FAB -> Zoho blue, rectangular ---- */
    md-button.md-fab.md-accent,
    .sg-fab-bottom-center,
    md-fab-speed-dial .md-fab {
      background-color: ${BLUE} !important;
      color: #fff !important;
      border-radius: 8px !important;
    }
    md-button.md-fab.md-accent:hover,
    .sg-fab-bottom-center:hover { background-color: ${BLUE_DARK} !important; }

    /* ---- Message list: date-group subheaders + selected tile ---- */
    [id="messagesList"] .sg-md-subheader, .sg-md-subheader {
      background: #fafbfc !important; color: #6b7280 !important; font-weight: 600 !important;
    }
    [id="messagesList"] md-list-item.sg-selected {
      background-color: ${TINT} !important;
      box-shadow: inset 3px 0 0 ${BLUE} !important;
    }

    /* ---- Accent text / links -> blue ---- */
    a.md-accent, md-icon.md-accent,
    .md-button.md-accent:not(.md-fab) { color: ${BLUE} !important; }
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

