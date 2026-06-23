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

    '/* Compose FAB -> Zoho blue. Only the BUTTON, never the speed-dial */',
    '/* container (.sg-fab-bottom-center), which would render as a tall box. */',
    'html body md-button.md-fab.md-accent {',
    '  background-color: ' + BLUE + ' !important; color: #fff !important; }',
    'html body md-button.md-fab.md-accent:hover { background-color: ' + BLUE_DARK + ' !important; }',
    'html body md-fab-speed-dial.sg-fab-bottom-center,',
    'html body .sg-fab-bottom-center { background: transparent !important; box-shadow: none !important; }',

    '/* Message list: date-group subheaders + selected tile */',
    'html body [id="messagesList"] .sg-md-subheader, html body .sg-md-subheader {',
    '  background: #fafbfc !important; color: #6b7280 !important; font-weight: 600 !important; }',
    'html body [id="messagesList"] md-list-item.sg-selected {',
    '  background-color: ' + TINT + ' !important; box-shadow: inset 3px 0 0 ' + BLUE + ' !important; }',

    '/* Accent text / links -> blue */',
    'html body a.md-accent, html body md-icon.md-accent,',
    'html body .md-button.md-accent:not(.md-fab) { color: ' + BLUE + ' !important; }',

    '/* STAGE 2 structure: top "Mail Mới" compose button */',
    'html body .zoho-compose {',
    '  display:block; width:calc(100% - 16px); margin:10px 8px; height:38px;',
    '  background:' + BLUE + '; color:#fff; border:none; border-radius:6px;',
    '  font-size:14px; font-weight:600; cursor:pointer; letter-spacing:.2px; }',
    'html body .zoho-compose:hover { background:' + BLUE_DARK + '; }',

    '/* STAGE 2 structure: right-hand app rail (overlay) */',
    'html body .zoho-right-rail {',
    '  position:fixed; top:56px; right:0; bottom:0; width:46px; z-index:40;',
    '  background:#f3f4f6; border-left:1px solid #e2e5ea;',
    '  display:flex; flex-direction:column; align-items:center; gap:4px; padding-top:10px; }',
    'html body .zoho-rail-item {',
    '  width:32px; height:32px; border-radius:6px; cursor:pointer; color:#5b636f;',
    '  display:flex; align-items:center; justify-content:center; }',
    'html body .zoho-rail-item:hover { background:#e7e9ed; }',
    'html body .zoho-rail-item svg { width:18px; height:18px; }',
    '/* keep SOGo content clear of the overlay rail */',
    'html body main.view { margin-right:46px !important; }'
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

// ===========================================================================
// Zoho-like STRUCTURE (STAGE 2 — iteration 1), via DOM injection.
// Adds a top "Mail Mới" compose button to the sidebar and a right-hand app rail,
// mirroring Zoho's layout. Done in JS (not a custom image) to keep the same
// fast deploy loop. A debounced MutationObserver re-injects after Angular
// re-renders. Purely additive + low risk: the original compose FAB is kept as a
// fallback, and the rail is an overlay that doesn't reflow SOGo's layout.
// ===========================================================================
(function injectZohoStructure() {
  var SVG = 'http://www.w3.org/2000/svg';

  function svgIcon(paths) {
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" ' +
      'stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">' + paths + '</svg>';
  }

  // Trigger SOGo's real compose action by clicking the existing FAB trigger.
  function triggerCompose() {
    var trigger = document.querySelector(
      'md-fab-speed-dial md-fab-trigger button, md-fab-speed-dial button.md-fab, button.md-fab.md-accent');
    if (trigger) trigger.click();
  }

  function addComposeButton() {
    var sidenav = document.querySelector('md-sidenav.md-sidenav-left');
    if (!sidenav || sidenav.querySelector('.zoho-compose')) return;
    var content = sidenav.querySelector('md-content') || sidenav;
    var btn = document.createElement('button');
    btn.className = 'zoho-compose';
    btn.type = 'button';
    btn.textContent = 'Mail Mới';
    btn.addEventListener('click', triggerCompose);
    content.insertBefore(btn, content.firstChild);
  }

  // Decorative/navigation right rail (Zoho-style app strip).
  function addRightRail() {
    if (document.querySelector('.zoho-right-rail')) return;
    var rail = document.createElement('nav');
    rail.className = 'zoho-right-rail';
    var items = [
      { t: 'Cài đặt',   i: '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>' },
      { t: 'Đính kèm',  i: '<path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>' },
      { t: 'Lịch',      i: '<rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>' },
      { t: 'Nhắc',      i: '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>' },
      { t: 'Ghi chú',   i: '<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>' },
      { t: 'Liên kết',  i: '<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>' }
    ];
    var html = '';
    items.forEach(function (it) {
      html += '<a class="zoho-rail-item" title="' + it.t + '">' + svgIcon(it.i) + '</a>';
    });
    rail.innerHTML = html;
    document.body.appendChild(rail);
  }

  var pending = false;
  function run() {
    pending = false;
    try { addComposeButton(); addRightRail(); } catch (e) {}
  }
  function schedule() {
    if (pending) return;
    pending = true;
    setTimeout(run, 150);
  }

  function start() {
    run();
    if (window.MutationObserver) {
      var obs = new MutationObserver(schedule);
      obs.observe(document.body, { childList: true, subtree: true });
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', start);
  } else {
    start();
  }
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
