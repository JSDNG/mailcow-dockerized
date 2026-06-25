/* ===========================================================================
 * Zoho-style URL wrapper for the mailcow/SOGo webmail.
 *
 * Goal: keep a Zoho-shaped URL in the address bar that STAYS put —
 *   https://<host>/zm/#mail/folder/inbox/p/<uid>
 * while SOGo runs full-featured (with the Zoho UI overlay) inside a same-origin
 * iframe. A single window only shows ONE URL, so the only clean way to display a
 * URL different from SOGo's own (#!/Mail/0/INBOX/<uid>) is to decouple the two
 * browsing contexts: this shell owns the top-level URL; the iframe owns SOGo.
 *
 * This does NOT modify SOGo internals — it only READS SOGo's hash and mirrors it,
 * and writes SOGo's hash to navigate. So it survives SOGo updates far better than
 * forking the app's router.
 *
 * Translation:
 *   shell  #mail/folder/<folder>[/p/<uid>]   <->   SOGo  #!/Mail/0/<FOLDER>[/<uid>]
 * where <uid> is SOGo's own message uid (our opaque id == SOGo uid).
 * =========================================================================== */
(function () {
  'use strict';
  var FRAME = document.getElementById('zm-frame');
  var SOGO_ROOT = '/SOGo/';   // SOGo resolves the logged-in user and redirects here

  // folder name maps (shell <-> SOGo). SOGo uses real IMAP folder names.
  var Z2S = { inbox:'INBOX', sent:'Sent', drafts:'Drafts', spam:'Junk', junk:'Junk',
              trash:'Trash', templates:'Templates', archive:'Archive' };
  var S2Z = { INBOX:'inbox', Sent:'sent', Drafts:'drafts', Junk:'spam',
              Trash:'trash', Templates:'templates', Archive:'archive' };

  var account = null;     // discovered SOGo path, e.g. "/SOGo/so/<email>/Mail/view"
  var applying = false;   // guard: suppress frame->shell while we drive frame->...
  var initial = true;     // first authenticated load → apply the requested deep-link

  function fwin() { try { return FRAME.contentWindow; } catch (e) { return null; } }
  function floc() { try { return FRAME.contentWindow.location; } catch (e) { return null; } }

  /* ---- URL translation ---- */
  function parseShell() {
    var h = (location.hash || '').replace(/^#\/?/, '');           // "mail/folder/inbox/p/12"
    var m = h.match(/^mail\/folder\/([^\/]+)(?:\/p\/([^\/]+))?/i);
    return m ? { folder: (m[1] || 'inbox').toLowerCase(), uid: m[2] || null }
             : { folder: 'inbox', uid: null };
  }
  function toSogoHash(z) { return '#!/Mail/0/' + (Z2S[z.folder] || 'INBOX') + (z.uid ? '/' + z.uid : ''); }
  function fromSogoHash(sh) {
    var m = (sh || '').match(/#!\/Mail\/\d+\/([^\/?#]+)(?:\/([^\/?#]+))?/i);
    if (!m) return null;
    return 'mail/folder/' + (S2Z[m[1]] || m[1].toLowerCase()) + (m[2] ? '/p/' + m[2] : '');
  }

  /* ---- login detection (SOGo not authenticated) ---- */
  function isLogin(l) {
    if (!l) return false;
    if (/^\/user\b/.test(l.pathname || '')) return true;          // mailcow login (custom-sogo.js redirect)
    try {
      var d = fwin().document;
      if (d && d.forms && d.forms.namedItem && d.forms.namedItem('loginForm')) return true;
    } catch (e) {}
    return false;
  }

  /* ---- sync: frame (SOGo) -> shell (visible URL) ---- */
  function frameToShell() {
    if (applying) return;
    var l = floc(); if (!l) return;
    var z = fromSogoHash(l.hash);
    if (!z) return;
    var want = '#' + z;
    if (location.hash !== want) history.replaceState(null, '', '/zm/' + want);
  }

  /* ---- sync: shell (visible URL) -> frame (drive SOGo) ---- */
  function shellToFrame() {
    if (!account) return;
    var l = floc(); if (!l) return;
    var target = toSogoHash(parseShell());
    if (l.hash !== target) {
      applying = true;
      l.hash = target;                                            // triggers SOGo's Angular router
      setTimeout(function () { applying = false; }, 60);
    }
  }

  /* ---- frame lifecycle ---- */
  function onFrameLoad() {
    var l = floc();
    if (isLogin(l)) {                                             // not authenticated → full-page login
      try { top.location.replace('/user'); } catch (e) { location.replace('/user'); }
      return;
    }
    if (l && /\/SOGo\/so\//.test(l.pathname || '')) {            // a real mailbox page
      account = l.pathname;
      document.body.classList.add('zm-ready');
      try { fwin().removeEventListener('hashchange', frameToShell); } catch (e) {}
      try { fwin().addEventListener('hashchange', frameToShell); } catch (e) {}
      if (initial) { initial = false; shellToFrame(); }           // apply requested deep-link once
      frameToShell();                                            // reflect current state
    }
  }

  /* ---- boot ---- */
  FRAME.addEventListener('load', onFrameLoad);
  window.addEventListener('hashchange', shellToFrame);            // user edits URL / back-forward
  FRAME.src = SOGO_ROOT;                                          // let SOGo resolve the user
})();
