// ===========================================================================
// Zoho-like reskin of SOGo (STAGE 1 — colors/theme).
// IMPORTANT: this runs FIRST and is fully self-contained, so nothing below
// (e.g. a missing CKEDITOR) can throw and prevent it from applying.
// Selectors use the REAL SOGo 5.12.8 class names (from upstream source:
// UI/Templates/MailerUI/*.wox + scss/views/MailerUI.scss). !important beats
// Angular Material's md-colors inline styles and the non-!important compiled
// theme. Structural changes (right app rail, top tabs/search) are STAGE 2 via
// the custom SOGo image (data/Dockerfiles/sogo-zoho/).
// ===========================================================================
(function injectZohoTheme() {
  var NAVY      = '#2b3547';  // dark sidebars/topbar
  var NAVY_DARK = '#283041';
  var BLUE      = '#2c6fde';  // primary accent
  var BLUE_DARK = '#225bc0';
  var TINT      = '#e8f0fd';  // selected mail tint
  var LIGHT     = '#c7cdd9';  // text on navy

  var css = [
    '/* Left sidebar -> Zoho dark navy */',
    'html body md-sidenav.md-sidenav-left,',
    'html body .md-sidenav-left md-content,',
    'html body .md-sidenav-left .sg-account-section {',
    '  background-color: ' + NAVY + ' !important; color: ' + LIGHT + ' !important; }',
    'html body .md-sidenav-left md-toolbar,',
    'html body .md-sidenav-left .md-toolbar {',
    '  background-color: ' + NAVY_DARK + ' !important; color: #fff !important; }',
    'html body .md-sidenav-left .sg-item-name,',
    'html body .md-sidenav-left md-list-item { color: ' + LIGHT + ' !important; }',
    'html body .md-sidenav-left md-icon { color: #9aa3b2 !important; }',

    '/* Selected folder -> blue accent */',
    'html body md-list-item.sg-mailbox-list-item.sg-selected {',
    '  background-color: rgba(255,255,255,.10) !important; color: #fff !important;',
    '  box-shadow: inset 3px 0 0 ' + BLUE + ' !important; }',
    'html body .sg-mailbox-list-item.sg-selected md-icon { color: #5b9bf3 !important; }',

    '/* Top toolbar (teal) -> dark navy */',
    'html body md-toolbar.toolbar-main {',
    '  background-color: ' + NAVY + ' !important; color: #fff !important; }',
    'html body md-toolbar.toolbar-main md-icon,',
    'html body md-toolbar.toolbar-main .md-button { color: ' + LIGHT + ' !important; }',

    '/* Compose FAB -> Zoho blue, rounded rectangle */',
    'html body md-button.md-fab.md-accent,',
    'html body .sg-fab-bottom-center,',
    'html body md-fab-speed-dial .md-fab {',
    '  background-color: ' + BLUE + ' !important; color: #fff !important;',
    '  border-radius: 8px !important; }',
    'html body md-button.md-fab.md-accent:hover,',
    'html body .sg-fab-bottom-center:hover { background-color: ' + BLUE_DARK + ' !important; }',

    '/* Message list: date-group subheaders + selected tile */',
    'html body [id="messagesList"] .sg-md-subheader, html body .sg-md-subheader {',
    '  background: #fafbfc !important; color: #6b7280 !important; font-weight: 600 !important; }',
    'html body [id="messagesList"] md-list-item.sg-selected {',
    '  background-color: ' + TINT + ' !important; box-shadow: inset 3px 0 0 ' + BLUE + ' !important; }',

    '/* Accent text / links -> blue */',
    'html body a.md-accent, html body md-icon.md-accent,',
    'html body .md-button.md-accent:not(.md-fab) { color: ' + BLUE + ' !important; }'
  ].join('\n');

  function apply() {
    var existing = document.getElementById('mc-zoho-theme');
    if (existing) return;
    var style = document.createElement('style');
    style.id = 'mc-zoho-theme';
    style.type = 'text/css';
    style.appendChild(document.createTextNode(css));
    (document.head || document.documentElement).appendChild(style);
    try { console.log('[zoho-theme] stylesheet injected'); } catch (e) {}
  }

  apply();                                                  // inject immediately
  document.addEventListener('DOMContentLoaded', apply);     // and once DOM is ready
  // Safety net: re-apply a few times in case <head> is replaced during bootstrap.
  var tries = 0;
  var timer = setInterval(function () {
    apply();
    if (++tries >= 10) clearInterval(timer);
  }, 500);
})();

// === Original mailcow hooks (kept; CKEDITOR now guarded so it can't break the theme) ===

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
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "logout=1"
  }).then(() => window.location.href = '/');
}

// Change the visible font-size in the editor (guarded: CKEDITOR is only present
// on the message-composer page; without this guard a ReferenceError here would
// abort the rest of the script).
if (typeof CKEDITOR !== 'undefined') {
  CKEDITOR.addCss("body {font-size: 16px !important}");
  // Enable scayt by default
  // CKEDITOR.config.scayt_autoStartup = true;
}
