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

    '/* STAGE 2 structure: left app-switcher rail (Zoho signature) */',
    'html body .zoho-left-rail {',
    '  position:fixed; top:0; left:0; bottom:0; width:64px; z-index:60;',
    '  background:#222c3b; border-right:1px solid rgba(255,255,255,.05);',
    '  display:flex; flex-direction:column; align-items:stretch; padding-top:6px;',
    '  overflow-y:auto; }',
    'html body .zoho-app-item {',
    '  display:flex; flex-direction:column; align-items:center; gap:4px;',
    '  padding:10px 4px; color:#8b94a4; font-size:9.5px; line-height:1.15; text-align:center;',
    '  cursor:pointer; border-left:3px solid transparent; }',
    'html body .zoho-app-item:hover { color:#c7cdd9; background:rgba(255,255,255,.06); }',
    'html body .zoho-app-item em { font-style:normal; }',
    'html body .zoho-app-item svg { width:21px; height:21px; }',
    'html body .zoho-app-active { color:#fff; border-left-color:' + BLUE + '; background:rgba(255,255,255,.08); }',
    'html body .zoho-app-active svg { color:#5b9bf3; }',

    '/* STAGE 2 structure: top search pill (decorative) */',
    'html body md-toolbar.toolbar-main { position:relative !important; }',
    'html body .zoho-topsearch {',
    '  position:absolute; left:50%; top:50%; transform:translate(-50%,-50%);',
    '  display:flex; align-items:center; gap:8px; width:420px; max-width:38vw; height:34px;',
    '  background:rgba(255,255,255,.13); border-radius:6px; padding:0 12px; color:#c7cdd9; }',
    'html body .zoho-ts-scope { font-size:13px; white-space:nowrap; }',
    'html body .zoho-ts-div { width:1px; height:18px; background:rgba(255,255,255,.2); }',
    'html body .zoho-topsearch svg { width:16px; height:16px; color:#c7cdd9; }',
    'html body .zoho-topsearch input {',
    '  flex:1; background:transparent; border:none; outline:none; color:#fff; font-size:13px; }',
    'html body .zoho-topsearch input::placeholder { color:#8b94a4; }',

    '/* Hide SOGo big date block (un-Zoho) */',
    'html body .sg-date-group, html body .sg-date-today { display:none !important; }',

    '/* Hide the green compose FAB — replaced by the top "Mail Mới" button. */',
    '/* Kept in the DOM (not removed) so triggerCompose can still click it. */',
    'html body md-fab-speed-dial.sg-fab-bottom-center,',
    'html body md-button.md-fab.sg-fab-bottom-center { opacity:0 !important; pointer-events:none !important; }',

    '/* Shift SOGo clear of BOTH overlay rails (left app rail + right app rail) */',
    'html body main.view { margin-left:64px !important; margin-right:46px !important; }'
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

  // Trigger SOGo's real compose action. The FAB *trigger* only opens the speed
  // dial, so click the actual compose action button (ng-click=mailbox.newMessage),
  // which fires even while the FAB is hidden via CSS.
  function triggerCompose() {
    var direct = document.querySelector('md-button.md-fab.md-accent.sg-fab-bottom-center');
    if (direct) { direct.click(); return; }
    var action = document.querySelector('md-fab-speed-dial md-fab-actions md-button.md-fab');
    if (action) { action.click(); return; }
    var trigger = document.querySelector('md-fab-speed-dial md-fab-trigger md-button, button.md-fab.md-accent');
    if (trigger) trigger.click();
  }

  // Left app-switcher rail (Zoho signature). Mostly visual; "Mail" is active.
  function addLeftRail() {
    if (document.querySelector('.zoho-left-rail')) return;
    var rail = document.createElement('nav');
    rail.className = 'zoho-left-rail';
    var apps = [
      { t: 'Mail',   active: true, i: '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/>' },
      { t: 'Lịch',   i: '<rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>' },
      { t: 'Việc cần làm', i: '<path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>' },
      { t: 'Ghi chú', i: '<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>' },
      { t: 'Số liên lạc', i: '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>' },
      { t: 'Dấu trang', i: '<path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>' },
      { t: 'Web Tab', i: '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>' }
    ];
    var html = '';
    apps.forEach(function (a) {
      html += '<a class="zoho-app-item' + (a.active ? ' zoho-app-active' : '') + '" title="' + a.t + '">' +
        svgIcon(a.i) + '<em>' + a.t + '</em></a>';
    });
    rail.innerHTML = html;
    document.body.appendChild(rail);
  }

  // Decorative Zoho-style search pill in the top toolbar.
  function addTopSearch() {
    var bar = document.querySelector('md-toolbar.toolbar-main');
    if (!bar || bar.querySelector('.zoho-topsearch')) return;
    var s = document.createElement('div');
    s.className = 'zoho-topsearch';
    s.innerHTML =
      '<span class="zoho-ts-scope">Mail ▾</span>' +
      '<span class="zoho-ts-div"></span>' +
      svgIcon('<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>') +
      '<input type="text" placeholder="Tìm kiếm ( / )" />';
    bar.appendChild(s);
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
    try {
      addLeftRail();
      addComposeButton();
      addRightRail();
      addTopSearch();
    } catch (e) {}
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
