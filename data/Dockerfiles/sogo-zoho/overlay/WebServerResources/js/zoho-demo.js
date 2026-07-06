/* ===========================================================================
 * Zoho demo layer — a Zoho-style list over SOGo's central area.
 *   - REAL messages (scraped from SOGo's #messagesList) are shown FIRST, then
 *     this folder's FAKE data. Real rows delegate to SOGo (native open / reply /
 *     delete via the real reading pane). Fake rows render a Zoho reading pane.
 *   - Per-tab fake data: demo/<folder>.json (inbox, drafts, sent, trash, junk,
 *     templates, archive). Folder is read from the URL hash.
 * Non-destructive overlay + defensive everywhere — if anything fails it falls
 * back to fake-only and the real SOGo underneath is untouched.
 * Toggle off: ?demo=0, localStorage.zohoDemo='off', or drop from sogo.conf.
 * =========================================================================== */
(function () {
  'use strict';
  var DATA_BASE = '/SOGo/WebServerResources/demo/';
  var AV_COLORS = ['#e0a458','#5a6b8c','#4a90e2','#36c172','#9b59b6','#e07b39','#16a085','#c0556b'];
  var FOLDERS = { inbox:1, drafts:1, sent:1, trash:1, junk:1, templates:1, archive:1 };
  // Vietnamese labels for SOGo's standard folders (UI language sync). Keyed by the
  // English name SOGo renders; relabel is idempotent (VN value isn't a key).
  var FOLDER_VN = { 'inbox':'Hộp thư đến', 'drafts':'Bản nháp', 'sent':'Đã gửi', 'trash':'Thùng rác', 'junk':'Thư rác', 'templates':'Mẫu', 'archive':'Lưu trữ' };
  function relabelFolders(){
    try {
      // The folder name is the ng-bind span ($ctrl.mailbox.$displayName) inside
      // .sg-item-name — NOT the whole <p>, which also holds the icon ligature + count.
      var els = document.querySelectorAll('.md-sidenav-left .sg-mailbox-list-item .sg-item-name span[ng-bind*="displayName"]');
      Array.prototype.forEach.call(els, function(el){
        var cur = (el.textContent || '').trim();
        var vn = FOLDER_VN[cur.toLowerCase()];
        if (vn && cur !== vn) el.textContent = vn;   // only when changed → no mutation loop
      });
    } catch(e){}
  }

  var I = {
    search:'<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>',
    mail:'<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/>',
    edit:'<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>',
    attach:'<path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>',
    sort:'<line x1="4" y1="6" x2="20" y2="6"/><line x1="6" y1="12" x2="18" y2="12"/><line x1="9" y1="18" x2="15" y2="18"/>',
    move:'<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>',
    tag:'<path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/>',
    trash:'<polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>',
    more:'<circle cx="12" cy="12" r="1.6" fill="currentColor" stroke="none"/><circle cx="19" cy="12" r="1.6" fill="currentColor" stroke="none"/><circle cx="5" cy="12" r="1.6" fill="currentColor" stroke="none"/>',
    bell:'<path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/>',
    check:'<polyline points="20 6 9 17 4 12"/>',
    link:'<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>',
    clock:'<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
    print:'<polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/>',
    chat:'<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
    ext:'<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>',
    close:'<line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>',
    reply:'<polyline points="9 17 4 12 9 7"/><path d="M20 18v-2a4 4 0 0 0-4-4H4"/>',
    replyAll:'<polyline points="7 17 2 12 7 7"/><polyline points="12 17 7 12 12 7"/><path d="M22 18v-2a4 4 0 0 0-4-4H7"/>',
    forward:'<polyline points="15 17 20 12 15 7"/><path d="M4 18v-2a4 4 0 0 1 4-4h12"/>',
    caret:'<polyline points="6 9 12 15 18 9"/>',
    smile:'<circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>',
    star:'<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
    copy:'<rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>',
    power:'<path d="M18.36 6.64a9 9 0 1 1-12.73 0"/><line x1="12" y1="2" x2="12" y2="12"/>',
    send:'<line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>',
    globe:'<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
    help:'<circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/>',
    gear:'<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>'
  };
  function ic(n){ return '<svg class="zd-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">'+(I[n]||'')+'</svg>'; }
  function esc(s){ return String(s==null?'':s).replace(/[&<>"]/g, function(c){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]; }); }
  function initial(name){ var m=String(name||'?').trim(); if(/^me$/i.test(m)) return 'Me'; var c=m.replace(/[^A-Za-zÀ-ỹ]/,'').charAt(0); return (c||m.charAt(0)||'?').toUpperCase(); }
  function color(id){ return AV_COLORS[(typeof id==='number'?id:0) % AV_COLORS.length]; }
  function getJSON(f){ return fetch(DATA_BASE+f, {cache:'no-cache'}).then(function(r){ if(!r.ok) throw new Error(r.status); return r.json(); }); }

  /* ---- folder / data ---- */
  function currentFolder(){
    var m = (location.hash||'').match(/\/Mail\/\d+\/([^\/?#]+)/i);
    var f = m ? m[1].toLowerCase() : 'inbox';
    return FOLDERS[f] ? f : 'inbox';
  }
  function realRows(){
    var els = document.querySelectorAll('[id="messagesList"] md-list-item.sg-message-list-item, [id="messagesList"] md-list-item');
    return Array.prototype.filter.call(els, function(el){ return !el.closest('.zoho-demo-layer'); });
  }
  // SOGo's message list is an Angular Material md-virtual-repeat: only the rows that
  // fit the viewport exist as DOM nodes at any moment (recycled on scroll), so
  // realRows() alone only ever sees a viewport-sized slice, never the whole folder.
  // The ACTUAL scrollable element is .md-virtual-repeat-scroller (overflow:auto),
  // nested INSIDE .md-virtual-repeat-container (which is just a positioning
  // wrapper, overflow:hidden — setting scrollTop on it is a silent no-op, fires
  // no scroll event, and never re-renders anything).
  function virtualScroller(){
    return document.querySelector('[id="messagesList"] .md-virtual-repeat-scroller');
  }
  // Read a row's stable SOGo message uid straight from the Angular scope (same
  // source realFlags() uses) so a message can be identified across scroll passes,
  // where its DOM position/index keeps changing as rows get recycled.
  function realUid(el){
    try {
      var sc = window.angular && angular.element(el).scope();
      var msg = sc && sc.currentMessage;
      return msg && msg.uid != null ? msg.uid : null;
    } catch(e){ return null; }
  }
  function clickRow(el){ try { (el.querySelector('button') || el).click(); } catch(e){} }
  // Same identity scheme scrapeReal() uses for each row's `id` (uid when the
  // Angular scope is reachable, else a sender+subject+time content fingerprint).
  // MUST match exactly — used to find a SPECIFIC row to open, not just to dedupe.
  // Matching on bare uid alone is wrong here: on this build uid is always null
  // (scope unreachable), so String(null) === String(null) would match whichever
  // row happens to be first in realRows() — i.e. clicking ANY email opened the
  // topmost (newest) one instead.
  function rowId(el){
    var uid = realUid(el);
    if (uid != null) return 'u'+uid;
    function tx(sel){ return cleanText(el.querySelector(sel)); }
    var subj = tx('.sg-tile-subject') || tx('.sg-subject') || tx('.sg-md-body');
    var date = tx('.sg-tile-date') || tx('.sg-date');
    var from = tx('.sg-md-subhead') || tx('.sg-tile-from') || tx('.sg-from');
    if (!subj && !from) { subj = cleanText(el).slice(0,70); }
    return 'k'+from+'|'+subj+'|'+date;
  }
  function findRenderedById(id){
    var match = null;
    realRows().some(function(el){ if (rowId(el) === id) { match = el; return true; } return false; });
    return match;
  }
  // Open a scraped real email. Its DOM row may not currently be rendered (virtual
  // scroll), so jump the native scroller back to wherever scrapeAllReal() first saw
  // this id (email.scrollHint) and retry once the recycle settles.
  function openRealRow(email){
    var el = findRenderedById(email.id);
    if (el) { clickRow(el); return; }
    var scroller = virtualScroller();
    if (!scroller || email.scrollHint == null) return;
    scraping = true;
    scroller.scrollTop = email.scrollHint;
    setTimeout(function(){
      scraping = false;
      var el2 = findRenderedById(email.id);
      if (el2) clickRow(el2);
    }, 150);
  }
  // Read an element's visible text WITHOUT icon ligatures, hidden nodes, or the
  // date column. SOGo rows carry hidden <md-icon>error</md-icon> status icons whose
  // ligature text ("error", "star"...) would otherwise leak into the sender/subject.
  function cleanText(node){
    if (!node) return '';
    var c = node.cloneNode(true);
    var junk = c.querySelectorAll('md-icon, .material-icons, .ng-hide, .sg-tile-date');
    Array.prototype.forEach.call(junk, function(n){ if (n.parentNode) n.parentNode.removeChild(n); });
    return (c.textContent || '').trim().replace(/\s+/g, ' ');
  }
  // Read unread/flagged. Prefer SOGo's Angular model when reachable, but this
  // build runs with Angular debug info disabled in production (angular.element(el)
  // .scope() reliably returns undefined here), so default to the plain CSS classes
  // Angular already rendered onto the row itself — 'unread' / 'sg-star-bg' — which
  // work with or without scope access.
  function realFlags(el){
    var unread = el.classList.contains('unread'), flagged = el.classList.contains('sg-star-bg');
    try {
      var sc = window.angular && angular.element(el).scope();
      var msg = sc && sc.currentMessage;
      if (msg){
        if (typeof msg.isflagged !== 'undefined') flagged = !!msg.isflagged;
        if (typeof msg.isread !== 'undefined') unread = (msg.isread === false);
        else if (msg.flags && msg.flags.indexOf) unread = (msg.flags.indexOf('seen') === -1);
      }
    } catch(e){}
    return { unread: unread, flagged: flagged };
  }
  function scrapeReal(){
    return realRows().map(function(el, i){
      function tx(sel){ return cleanText(el.querySelector(sel)); }
      var subj = tx('.sg-tile-subject') || tx('.sg-subject') || tx('.sg-md-body');
      var date = tx('.sg-tile-date') || tx('.sg-date');
      var from = tx('.sg-md-subhead') || tx('.sg-tile-from') || tx('.sg-from');
      if (!subj && !from) { var t=cleanText(el); subj = t.slice(0,70); }
      var fl = realFlags(el);
      // id uses the SAME scheme as rowId() (uid when reachable, else a content
      // fingerprint) — openRealRow() must be able to re-derive this exact id
      // later from a freshly-rendered row to find it again.
      var id = rowId(el);
      return { id:id, uid:realUid(el), real:true, realIndex:i, unread:fl.unread, flagged:fl.flagged,
        sender:(from||'(người gửi)').slice(0,80), subject:(subj||'(không tiêu đề)').slice(0,90), time:(date||'').slice(0,20) };
    });
  }
  // Drive SOGo's native virtual-repeat scroller from top to bottom, scraping at each
  // stop and merging by id, so the Zoho list shows every real message in the
  // folder — not just the viewport-sized slice realRows() sees at rest. Falls back
  // to a single scrapeReal() pass if no virtual-repeat container is found (e.g. the
  // folder is short enough that everything is already rendered, or SOGo's markup
  // changed and the selector no longer matches).
  // `token` lets the caller (loadFolder) abandon a scrape that belongs to a folder
  // the user has already navigated away from, instead of it fighting the newer
  // scrape over the shared scroller and clobbering scraping/scrollTop mid-flight.
  function scrapeAllReal(token){
    return waitForRows(0).then(function(){
      var scroller = virtualScroller();
      if (!scroller) return scrapeReal();
      if (token !== loadToken) return [];   // navigated away before we even started
      var sizer = scroller.querySelector('.md-virtual-repeat-sizer');
      var total = sizer ? (parseFloat(sizer.style.height) || 0) : scroller.scrollHeight;
      var pageH = scroller.clientHeight || 1;
      var step = Math.max(pageH - 20, 40);   // small overlap so no row falls between two stops
      var startTop = scroller.scrollTop;
      var merged = {}, order = [];
      var MAX_PASSES = 80;   // guard against a runaway loop on a pathologically tall folder
      scraping = true;
      return new Promise(function(resolve){
        var pass = 0, top = 0;
        function mergeCurrent(){
          scrapeReal().forEach(function(m){
            if (!merged[m.id]) order.push(m.id);
            m.scrollHint = top;
            merged[m.id] = m;
          });
        }
        function finish(){
          scroller.scrollTop = startTop;
          setTimeout(function(){
            if (token === loadToken) scraping = false;   // don't clear a newer scrape's flag
            resolve(order.map(function(id){ return merged[id]; }));
          }, 30);
        }
        function step_(){
          if (token !== loadToken) { finish(); return; }   // folder changed mid-scrape — bail
          scroller.scrollTop = top;
          setTimeout(function(){
            if (token !== loadToken) { finish(); return; }
            mergeCurrent();
            pass++;
            var atEnd = top >= (total - pageH) || pass >= MAX_PASSES;
            if (atEnd){
              if (pass >= MAX_PASSES) { try{ console.warn('[zoho-demo] scrapeAllReal: hit MAX_PASSES — list may be incomplete'); }catch(e){} }
              finish();
              return;
            }
            top += step;
            step_();
          }, 90);   // let Angular's virtual-repeat re-render after the scroll
        }
        step_();
      });
    });
  }
  // Right after a folder switch (hash change, no full page reload) SOGo briefly
  // tears down the old virtual-repeat and hasn't mounted the new one yet — querying
  // for rows in that instant sees an empty list. Give it a moment to settle instead
  // of scraping (and caching) a false "0 messages" snapshot.
  function waitForRows(tries){
    if (realRows().length > 0 || virtualScroller() || tries >= 10) return Promise.resolve();
    return new Promise(function(resolve){ setTimeout(function(){ resolve(waitForRows(tries+1)); }, 150); });
  }

  /* ---- list rendering ---- */
  function rowHTML(m){
    var badges='';
    if (m.flagged) badges+='<span class="zd-flag">'+ic('star')+'</span>';
    if (m.unreadBadge) badges+='<span class="zd-badge zd-badge-b">'+m.unreadBadge+'</span>';
    if (m.attach) badges+='<span class="zd-attach">'+ic('attach')+'</span>';
    if (m.countBadge) badges+='<span class="zd-badge">'+m.countBadge+'</span>';
    return '<div class="zd-row'+(m.unread?' zd-unread':'')+(m.real?' zd-real':'')+'" data-id="'+esc(m.id)+'"'+
      ' data-unread="'+(m.unread?1:0)+'" data-flagged="'+(m.flagged?1:0)+'"'+(m.real?' data-real="1" data-ri="'+m.realIndex+'"':'')+'>'+
      '<span class="zd-row-ic">'+ic('mail')+'</span>'+
      '<div class="zd-row-main">'+
        '<div class="zd-row-top"><span class="zd-sender">'+esc(m.sender)+'</span><span class="zd-time">'+esc(m.time)+'</span></div>'+
        '<div class="zd-row-sub">'+(badges?'<span class="zd-badges">'+badges+'</span>':'')+esc(m.subject)+'</div>'+
      '</div>'+
      '<span class="zd-row-del" title="Xóa">'+ic('trash')+'</span>'+
    '</div>';
  }
  function listHTML(d){
    var groups='';
    if (d.realEmails && d.realEmails.length){
      groups += d.realEmails.map(rowHTML).join('');   // danh sách phẳng mail thật (mới→cũ)
    }
    groups += (d.groups||[]).map(function(g){
      return '<div class="zd-grp">'+esc(g.label)+'</div>' + g.emails.map(rowHTML).join('');
    }).join('');
    return '<div class="zd-list">'+
      '<div class="zd-list-head"><h1>'+esc(d.title)+'</h1><span class="zd-head-caret">'+ic('caret')+'</span>'+(d.unread?'<span class="zd-unread"> • <a>'+esc(d.unread)+'</a></span>':'')+'</div>'+
      '<div class="zd-list-tools">'+
        '<label class="zd-chk"><input type="checkbox"/>'+ic('caret')+'</label>'+
        '<button class="zd-tool">'+ic('move')+' Chuyển đến</button>'+
        '<button class="zd-tool">'+ic('tag')+' Tag là</button>'+
        '<button class="zd-tool zd-tool-del">'+ic('trash')+' Xóa</button>'+
        '<button class="zd-tool zd-tool-more">'+ic('more')+'</button>'+
      '</div>'+
      '<div class="zd-list-sort">'+ic('sort')+' <span>'+esc(d.sort||'Order Received')+'</span></div>'+
      '<div class="zd-list-body">'+groups+'</div>'+
    '</div>';
  }

  /* ---- reading pane (fake) ---- */
  function readHTML(email, replyPlaceholder){
    var c = email.detail || { subject: email.subject, messages: [] };
    var tb = '<div class="zd-rp-tb"><div class="zd-rp-tbl">'+
      '<button class="zd-tbb">'+ic('bell')+' Thông báo nhắc</button>'+
      '<button class="zd-tbb">'+ic('check')+' Thêm tác vụ</button>'+
      '<button class="zd-tbb">'+ic('link')+' Liên kết vĩnh viễn</button>'+
      '<button class="zd-tbb">'+ic('clock')+' Báo lại</button></div>'+
      '<div class="zd-rp-tbr">'+ic('print')+ic('chat')+ic('ext')+'<span class="zd-rp-close">'+ic('close')+'</span></div></div>';
    var msgs = (c.messages||[]).map(function(m, idx){
      var av = '<span class="zd-av" style="background:'+color(email.id+idx)+'">'+esc(initial(m.from))+'</span>';
      var acts = '<span class="zd-acts">'+ic('reply')+ic('replyAll')+ic('forward')+ic('link')+'<span class="zd-sep">|</span>'+ic('caret')+'</span>';
      var status = m.status ? ' · <span style="color:'+(m.statusColor||'#8a93a3')+'">'+esc(m.status)+'</span>' : '';
      if (m.collapsed) {
        return '<div class="zd-msg zd-collapsed"><div class="zd-mh">'+av+'<div class="zd-mm">'+
          '<div class="zd-l1"><span class="zd-from">'+esc(m.from)+'</span>'+
          '<span class="zd-sub2">'+ic('attach')+' '+esc(m.date)+status+'</span></div>'+
          '<div class="zd-prev"><em>'+esc(m.preview)+'</em></div></div>'+acts+'</div></div>';
      }
      var tr = (c.translation && idx === c.messages.length-1) ? '<div class="zd-tr">'+
          '<span class="zd-tr-l">'+esc(c.translation.label)+'</span>'+
          '<a class="zd-tr-lang">'+esc(c.translation.from)+' '+ic('caret')+'</a><span class="zd-tr-ar">→</span>'+
          '<a class="zd-tr-lang">'+esc(c.translation.to)+' '+ic('caret')+'</a>'+
          '<button class="zd-tr-btn">'+esc(c.translation.action)+'</button><span class="zd-tr-sp"></span>'+ic('close')+'</div>' : '';
      var recip = m.recipients ? '<div class="zd-recip">'+ic('caret')+' '+esc(m.recipients)+'</div>' : '';
      var body = (m.body||[]).map(function(p){ return '<p>'+esc(p)+'</p>'; }).join('');
      var quoted = m.quoted ? '<div class="zd-quoted">'+ic('more')+'</div>' : '';
      return '<div class="zd-msg"><div class="zd-mh">'+av+'<div class="zd-mm">'+
        '<div class="zd-l1"><span class="zd-from">'+esc(m.from)+'</span> <span class="zd-email">'+esc(m.email||'')+'</span></div>'+
        '<div class="zd-l2">'+esc(m.date)+status+'</div>'+recip+'</div>'+acts+'</div>'+
        tr+'<div class="zd-body">'+body+quoted+'</div></div>';
    }).join('');
    return tb+'<div class="zd-rp-scroll"><h2 class="zd-rp-subj">'+esc(c.subject||email.subject)+'</h2>'+msgs+'</div>'+
      '<div class="zd-reply"><input type="text" placeholder="'+esc(replyPlaceholder||'')+'"/>'+ic('smile')+'</div>';
  }

  /* ---- real reading pane: Zoho chrome (toolbar + header) wrapping SOGo's own
   * live message view. The real .sg-face node is moved into .zd-real-body so the
   * body, images, attachments and links keep working; SOGo's native toolbar/header
   * are hidden via CSS. Toolbar buttons delegate to SOGo's real handlers. ---- */
  var REAL_ACT = {
    reply:'viewer.reply(', replyAll:'viewer.replyAll(', forward:'viewer.forward(',
    delete:'viewer.deleteMessage(', flag:'viewer.message.toggleFlag(',
    print:'viewer.print(', popup:'viewer.openInPopup('
  };
  function findSogoBtn(ngPrefix){
    var scope = document.querySelector('.zoho-demo-layer .zd-real-body') || document.querySelector('#detailView');
    if (!scope) return null;
    var btns = scope.querySelectorAll('button[ng-click]');
    for (var i=0;i<btns.length;i++){ if ((btns[i].getAttribute('ng-click')||'').indexOf(ngPrefix)===0) return btns[i]; }
    return null;
  }
  function triggerRealAction(act){
    var ng = REAL_ACT[act]; if (!ng) return;
    var b = findSogoBtn(ng); if (b) { try { b.click(); } catch(e){} }
  }
  function realReadHTML(email){
    // Zoho layout: top toolbar carries Zoho-feature buttons (static) + window icons;
    // the reply/reply-all/forward actions live next to the sender (wired to SOGo via
    // data-act → triggerRealAction). Bottom comment box is decorative.
    var tb = '<div class="zd-rp-tb"><div class="zd-rp-tbl">'+
      '<button class="zd-tbb">'+ic('bell')+' Thông báo nhắc</button>'+
      '<button class="zd-tbb">'+ic('check')+' Thêm tác vụ</button>'+
      '<button class="zd-tbb">'+ic('link')+' Liên kết vĩnh viễn</button>'+
      '<button class="zd-tbb">'+ic('clock')+' Báo lại</button></div>'+
      '<div class="zd-rp-tbr">'+
        '<span class="zd-rp-ic" data-act="print" title="In">'+ic('print')+'</span>'+
        '<span class="zd-rp-ic" title="Trò chuyện">'+ic('chat')+'</span>'+
        '<span class="zd-rp-ic" data-act="popup" title="Mở cửa sổ mới">'+ic('ext')+'</span>'+
        '<span class="zd-rp-ic zd-tool-del" data-act="delete" title="Xóa">'+ic('trash')+'</span>'+
        '<span class="zd-rp-close" title="Đóng">'+ic('close')+'</span></div></div>';
    var acts = '<span class="zd-acts">'+
      '<span class="zd-rp-ic" data-act="reply" title="Trả lời">'+ic('reply')+'</span>'+
      '<span class="zd-rp-ic" data-act="replyAll" title="Trả lời tất cả">'+ic('replyAll')+'</span>'+
      '<span class="zd-rp-ic" data-act="forward" title="Chuyển tiếp">'+ic('forward')+'</span>'+
      '<span class="zd-sep">|</span>'+
      '<span class="zd-rp-ic" title="Thêm">'+ic('caret')+'</span></span>';
    return tb + '<div class="zd-rp-scroll">'+
      '<h2 class="zd-rp-subj">'+esc(email.subject)+'</h2>'+
      '<div class="zd-msg"><div class="zd-mh">'+
        '<span class="zd-av" style="background:'+color(email.realIndex||0)+'">'+esc(initial(email.sender))+'</span>'+
        '<div class="zd-mm">'+
          '<div class="zd-l1"><span class="zd-from">'+esc(email.sender)+'</span>'+
            '<span class="zd-rp-ic zd-from-search" title="Tìm theo người gửi">'+ic('search')+'</span></div>'+
          '<div class="zd-l2"><span class="zd-rp-ic" data-act="flag" title="Gắn cờ">'+ic('star')+'</span> <span class="zd-when">'+esc(email.time)+'</span></div>'+
        '</div>'+acts+'</div>'+
      '<div class="zd-real-body zd-loading"></div></div>'+
      '<div class="zd-reply"><input type="text" placeholder="@nhắc đến một người dùng hoặc nhóm để chia sẻ email này"/>'+ic('smile')+'</div>';
  }
  function restoreRealFace(){
    // move any embedded real view back to SOGo's #detailView so SOGo stays consistent.
    try {
      var face = document.querySelector('.zoho-demo-layer .zd-real-body .sg-face');
      if (face){ var home = document.querySelector('#detailView .sg-reversible') || document.querySelector('#detailView'); if (home) home.appendChild(face); }
    } catch(e){}
  }
  // SOGo replaces #detailView's content ASYNCHRONOUSLY after we click a row —
  // clicking through several emails quickly can catch the PREVIOUS message's
  // .sg-face still sitting there, not yet swapped for the one we just asked to
  // open. Grabbing it unconditionally shows stale content that only self-corrects
  // later (via place()'s self-heal below), which looked like the reading pane
  // "jumping" between messages. Verify the mounted subject actually matches the
  // email we think we're opening before accepting it.
  function faceMatchesEmail(face, email){
    if (!face || !email) return false;
    var h = face.querySelector('.sg-md-headline');
    if (!h) return true;   // unknown template shape — don't block forever on a guess
    var faceSubj = h.textContent.replace(/\s+/g,' ').trim();
    var wantSubj = String(email.subject||'').trim();
    var n = Math.min(faceSubj.length, wantSubj.length, 24);
    return n > 0 && faceSubj.slice(0, n) === wantSubj.slice(0, n);
  }
  function mountRealBody(layer, tries){
    if (selectedId == null) return;                 // navigated away
    var email = byId[selectedId];
    if (!email || !email.real) return;              // switched to a fake email
    var mount = layer.querySelector('.zd-real-body'); if (!mount) return;
    var face = document.querySelector('#detailView .sg-face');
    if (face && faceMatchesEmail(face, email)){
      if (face.parentNode !== mount) mount.appendChild(face);
      mount.classList.remove('zd-loading');
      return;
    }
    if ((tries||0) < 50) setTimeout(function(){ mountRealBody(layer, (tries||0)+1); }, 100); // up to ~5s
  }

  /* ---- state ---- */
  var DATA = null, selectedId = null, byId = {}, loadedFolder = null, scraping = false, loadToken = 0;
  var filterMode = 'all', searchQuery = '';   // Zoho view filters + top search

  /* ---- search + view filters (client-side, on the Zoho list we render) ---- */
  // Diacritic-insensitive normalise so "hoa don" matches "HÓA ĐƠN".
  function norm(s){ return String(s==null?'':s).toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g,'').replace(/\u0111/g,'d'); }
  function applyFilter(layer){
    layer = layer || document.querySelector('.zoho-demo-layer'); if (!layer) return;
    var q = norm(searchQuery);
    Array.prototype.forEach.call(layer.querySelectorAll('.zd-row'), function(r){
      var show = true;
      if (filterMode === 'unread'  && r.getAttribute('data-unread')  !== '1') show = false;
      if (filterMode === 'flagged' && r.getAttribute('data-flagged') !== '1') show = false;
      if (show && q && norm(r.textContent).indexOf(q) < 0) show = false;
      r.style.display = show ? '' : 'none';
    });
    // hide date-group headers that have no visible rows left
    var grp = null, has = false;
    Array.prototype.forEach.call(layer.querySelectorAll('.zd-list-body > *'), function(el){
      if (el.classList.contains('zd-grp')) { if (grp) grp.style.display = has ? '' : 'none'; grp = el; has = false; }
      else if (el.classList.contains('zd-row') && el.style.display !== 'none') has = true;
    });
    if (grp) grp.style.display = has ? '' : 'none';
  }
  function setNavActive(nav){
    Array.prototype.forEach.call(document.querySelectorAll('.zoho-nav-item.zoho-nav-active'), function(n){ n.classList.remove('zoho-nav-active'); });
    if (nav) nav.classList.add('zoho-nav-active');
  }
  function navMode(label){
    var l = norm(label);
    if (l.indexOf('chua doc') >= 0) return 'unread';          // "Chưa đọc" / "Tất cả chưa đọc"
    if (l.indexOf('da gan co') >= 0) return 'flagged';        // "Đã gắn cờ"
    if (l.indexOf('tat ca tin nhan') >= 0) return 'all';      // "Tất cả tin nhắn"
    if (l.indexOf('trang chu') >= 0) return 'all';            // "Trang chủ"
    return null;
  }
  function toggleSidebar(){
    try { var b = document.querySelector('.toolbar-main button[ng-click*="toggleLeft"]'); if (b) b.click(); } catch(e){}
  }

  /* ---- account popup (top-bar avatar): current mailbox + a few simple facts ---- */
  function acctData(){
    var d = { email:'', name:'', user:'', imap:'', smtp:'' };
    try { var m = (location.pathname||'').match(/\/SOGo\/so\/([^\/]+)/i); if (m) d.email = decodeURIComponent(m[1]); } catch(e){}
    try {
      var a = window.mailAccounts && mailAccounts[0];
      if (a){
        var id0 = a.identities && a.identities[0];
        d.user  = a.userName || d.email;
        d.name  = (id0 && id0.fullName) || a.name || d.email;
        d.email = (id0 && id0.email) || a.name || d.email;
        if (a.serverName) d.imap = a.serverName + (a.port ? (':'+a.port) : '');
        if (a.smtpServerName) d.smtp = a.smtpServerName + (a.smtpPort ? (':'+a.smtpPort) : '');
      }
    } catch(e){}
    if (!d.name) d.name = (d.email.split('@')[0] || d.email);
    return d;
  }
  function acctInitial(d){ var s = String(d.name||d.email||'?').replace(/[^A-Za-z0-9À-ỹ]/g,''); return (s.slice(0,2)||'?').toUpperCase(); }
  function closeAcctPopup(){
    var p = document.querySelector('.zoho-acct-pop'); if (p && p.parentNode) p.parentNode.removeChild(p);
    document.removeEventListener('click', acctOutside, true);
    document.removeEventListener('keydown', acctEsc, true);
  }
  function acctOutside(e){
    if (e.target.closest && (e.target.closest('.zoho-acct-pop') || e.target.closest('.zoho-top-avatar'))) return;
    closeAcctPopup();
  }
  function acctEsc(e){ if (e.key === 'Escape' || e.keyCode === 27) closeAcctPopup(); }
  function copyText(t){ try { if (navigator.clipboard && navigator.clipboard.writeText) navigator.clipboard.writeText(String(t)); } catch(e){} }
  function displayName(d){ var lp = String(d.email||'').split('@')[0] || (d.name||''); return lp ? (lp.charAt(0).toUpperCase()+lp.slice(1)) : (d.name||'Tài khoản'); }
  // Stable pseudo user-id from the email (Zoho shows a numeric user id; we don't have a
  // real one, so derive a deterministic 9-digit number for display).
  function pseudoId(s){ var h=0; s=String(s||''); for (var i=0;i<s.length;i++){ h=(h*31 + s.charCodeAt(i))>>>0; } return 100000000 + (h % 900000000); }
  // Real mailbox quota if SOGo exposes it on the account scope, else null.
  function acctQuota(){
    try { var sec=document.querySelector('.md-sidenav-left .sg-account-section');
      var sc=sec&&window.angular&&angular.element(sec).scope(); var q=sc&&sc.account&&sc.account.$quota;
      if (q && typeof q.percent!=='undefined') return { percent: Math.max(0,Math.round(q.percent)), desc:(q.description||'').trim() };
    } catch(e){} return null;
  }
  function openAcctPopup(){
    if (document.querySelector('.zoho-acct-pop')) { closeAcctPopup(); return; }   // toggle off
    var d = acctData(), name = displayName(d), id = pseudoId(d.email);
    var q = acctQuota(), pct = q ? q.percent : 0, usage = (q && q.desc) ? q.desc : '0,01 GB / 5 GB';
    function res(icon,label){ return '<span class="zoho-acct-resitem">'+ic(icon)+'<span>'+label+'</span></span>'; }
    function app(icon,label){ return '<span class="zoho-acct-app">'+ic(icon)+'<em>'+label+'</em></span>'; }
    var pop = document.createElement('div');
    pop.className = 'zoho-acct-pop';
    pop.innerHTML =
      '<button class="zoho-acct-x" title="Đóng">'+ic('close')+'</button>'+
      '<div class="zoho-acct-scroll">'+
        '<div class="zoho-acct-top">'+
          '<span class="zoho-acct-bigav">'+esc(acctInitial(d))+'<i class="zoho-acct-dot"></i></span>'+
          '<div class="zoho-acct-name2">'+esc(name)+'</div>'+
          '<div class="zoho-acct-line"><span>'+esc(d.email)+'</span><span class="zoho-acct-copy" data-copy="'+esc(d.email)+'" title="Sao chép">'+ic('copy')+'</span></div>'+
          '<div class="zoho-acct-line zoho-acct-muted">ID Người Dùng: '+id+' <span class="zoho-acct-help" title="Trợ giúp">'+ic('help')+'</span><span class="zoho-acct-copy" data-copy="'+id+'" title="Sao chép">'+ic('copy')+'</span></div>'+
          '<a class="zoho-acct-myacct" data-act="account">Tài Khoản Của Tôi</a>'+
        '</div>'+
        '<div class="zoho-acct-sep"></div>'+
        '<div class="zoho-acct-statusrow">'+
          '<span class="zoho-acct-statdot"><i></i>'+ic('caret')+'</span>'+
          '<span class="zoho-acct-statsel">Available '+ic('caret')+'</span>'+
        '</div>'+
        '<div class="zoho-acct-sep"></div>'+
        '<div class="zoho-acct-sec">'+
          '<div class="zoho-acct-sechead"><b>Chế Độ Không Ồn</b><span class="zoho-acct-gear">'+ic('gear')+'</span></div>'+
          '<div class="zoho-acct-dndbox"><div class="zoho-acct-dndlabel">Pause notifications</div><div class="zoho-acct-dndval">Không bao giờ '+ic('caret')+'</div></div>'+
          '<div class="zoho-acct-hint">Chế độ im lặng sẽ tự động tắt sau thời gian đã cho biết.</div>'+
        '</div>'+
        '<div class="zoho-acct-sep"></div>'+
        '<div class="zoho-acct-sec">'+
          '<div class="zoho-acct-secttl">Mail</div>'+
          '<div class="zoho-acct-pct">'+pct+'%</div>'+
          '<div class="zoho-acct-bar"><i style="width:'+pct+'%"></i></div>'+
          '<div class="zoho-acct-usage"><span>'+esc(usage)+' used</span><a data-act="account">Quản Lý Dung Lượng Lưu Trữ</a></div>'+
        '</div>'+
        '<div class="zoho-acct-sep"></div>'+
        '<div class="zoho-acct-sec">'+
          '<div class="zoho-acct-secttl">Tài nguyên</div>'+
          '<div class="zoho-acct-res">'+res('send','Tham Quan')+res('edit','Blogs')+res('chat','Community')+res('globe','Trợ giúp')+'</div>'+
        '</div>'+
        '<div class="zoho-acct-sep"></div>'+
        '<div class="zoho-acct-sec">'+
          '<div class="zoho-acct-secttl">Ứng dụng của chúng tôi trên điện thoại di động của bạn</div>'+
          '<div class="zoho-acct-apps">'+app('mail','Mail')+app('gear','Quản Trị Mail')+app('chat','Streams')+'</div>'+
        '</div>'+
      '</div>'+
      '<button class="zoho-acct-logout" type="button">'+ic('power')+' ĐĂNG XUẤT</button>';
    document.body.appendChild(pop);
    pop.addEventListener('click', function(ev){
      var t = ev.target; if (!t.closest) return;
      if (t.closest('.zoho-acct-x')) { closeAcctPopup(); return; }
      var cp = t.closest('[data-copy]'); if (cp) { copyText(cp.getAttribute('data-copy')); cp.classList.add('zoho-acct-copied'); return; }
      if (t.closest('[data-act="account"]')) { try { top.location.href='/user'; } catch(e){ location.href='/user'; } return; }
      if (t.closest('.zoho-acct-logout')) {
        // Log out then send the WHOLE tab to the domain root (works under /zm and direct SOGo).
        function go(){ try { top.location.href='/'; } catch(e){ location.href='/'; } }
        try { fetch('/', { method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body:'logout=1' }).then(go, go); } catch(e){ go(); }
        closeAcctPopup(); return;
      }
    });
    setTimeout(function(){ document.addEventListener('click', acctOutside, true); document.addEventListener('keydown', acctEsc, true); }, 0);
  }

  function indexData(d){
    byId = {};
    (d.realEmails||[]).forEach(function(e){ byId[e.id]=e; });
    (d.groups||[]).forEach(function(g){ g.emails.forEach(function(e){ byId[e.id]=e; }); });
  }

  function showFakePane(layer, email){
    restoreRealFace();   // return any embedded real view to SOGo before showing fake
    var read = layer.querySelector('.zd-read');
    if (read){ read.style.display=''; read.innerHTML = readHTML(email, DATA.replyPlaceholder); }
  }
  // ---- Việc 2: hiển thị NGÀY + GIỜ:PHÚT trong khung đọc ----
  // SOGo gửi ngày list ở dạng tương đối (vd "10-Feb-26", không có giờ). Endpoint
  // .../folder<F>/<uid>/view trả date đầy đủ theo múi giờ user ("Tuesday, February
  // 10, 2026 21:25 EST"). Đọc UID từ hash SOGo (#!/Mail/0/<F>/<uid>) rồi fetch.
  var MON = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
  var MONFULL = {january:0,february:1,march:2,april:3,may:4,june:5,july:6,august:7,september:8,october:9,november:10,december:11};
  function formatWhen(s){
    // "Tuesday, February 10, 2026 21:25 EST" -> "10-Feb-26 21:25" (không đổi múi giờ)
    var m = String(s).match(/([A-Za-z]+)\s+(\d{1,2}),\s+(\d{4}).*?(\d{1,2}):(\d{2})/);
    if(!m) return '';
    var mi = MONFULL[m[1].toLowerCase()]; if(mi===undefined) return '';
    var day = ('0'+m[2]).slice(-2), yy = m[3].slice(-2);
    return day+'-'+MON[mi]+'-'+yy+' '+('0'+m[4]).slice(-2)+':'+m[5];
  }
  function enhanceDateTime(layer){
    var tries = 0;
    (function tick(){
      var h = location.hash || '';
      var m = h.match(/Mail\/\d+\/([^\/]+)\/(\d+)(?:[\/?#]|$)/);
      if(!m){ if(tries++ < 10){ setTimeout(tick, 250); } return; }
      var folder = m[1], uid = m[2];
      var base = location.pathname.replace(/Mail\/view.*$/, '');
      fetch(base+'Mail/0/folder'+folder+'/'+uid+'/view', {credentials:'same-origin'})
        .then(function(r){ return r.json(); })
        .then(function(j){
          var when = (j && j.date) ? formatWhen(j.date) : '';
          if(when){ var el = layer.querySelector('.zd-when'); if(el) el.textContent = when; }
        }).catch(function(){});
    })();
  }
  function showRealPane(layer, email){
    // Render Zoho chrome, ask SOGo to open the message, then relocate SOGo's live
    // message view into our pane so the real body/attachments work inside the Zoho UI.
    restoreRealFace();   // put any prior embedded view back so SOGo can reuse #detailView
    var read = layer.querySelector('.zd-read');
    if (read){ read.style.display=''; read.innerHTML = realReadHTML(email); }
    openRealRow(email);
    mountRealBody(layer, 0);
    enhanceDateTime(layer);   // cập nhật ngày + giờ:phút từ SOGo /view (async)
  }
  function selectEmail(layer, id){
    var email = byId[id]; if (!email) return;
    selectedId = id;
    if (email.real) showRealPane(layer, email); else showFakePane(layer, email);
    layer.querySelectorAll('.zd-row').forEach(function(r){ r.classList.toggle('zd-active', r.getAttribute('data-id') === String(id)); });
  }

  function removeFake(id){
    function strip(arr){ return arr.filter(function(e){ return e.id !== id; }); }
    DATA.realEmails = strip(DATA.realEmails||[]);
    (DATA.groups||[]).forEach(function(g){ g.emails = strip(g.emails); });
    delete byId[id];
  }

  /* ---- compose (delegates to SOGo's real compose action) ---- */
  function compose(){
    try {
      var b = document.querySelector('md-button.md-fab.md-accent.sg-fab-bottom-center') ||
              document.querySelector('md-fab-speed-dial md-fab-actions button.md-fab') ||
              document.querySelector('md-fab-speed-dial md-fab-trigger button');
      if (b) b.click();
    } catch(e){}
  }

  function buildLayer(){
    var layer = document.createElement('div');
    layer.className = 'zoho-demo-layer';
    layer.innerHTML = listHTML(DATA) +
      '<button class="zd-compose-fab" title="Soạn thư mới">'+ic('edit')+'</button>' +
      '<div class="zd-read"></div>';
    layer.addEventListener('click', function(ev){
      var t = ev.target;
      if (t.closest && t.closest('.zd-compose-fab')) { compose(); return; }
      if (t.closest && t.closest('.zd-rp-close')) { restoreRealFace(); var rd=layer.querySelector('.zd-read'); if(rd){rd.style.display=''; rd.innerHTML='';} selectedId=null; layer.querySelectorAll('.zd-row.zd-active').forEach(function(r){r.classList.remove('zd-active');}); return; }
      var actEl = t.closest && t.closest('.zd-read [data-act]');
      if (actEl) { triggerRealAction(actEl.getAttribute('data-act')); return; }
      var del = t.closest && t.closest('.zd-row-del');
      if (del) { ev.stopPropagation(); var row=del.closest('.zd-row'); var id=row.getAttribute('data-id');
        if (row.getAttribute('data-real')) { selectEmail(layer, id); /* real: open in the Zoho pane (delete via its toolbar) */ }
        else { removeFake(id); row.parentNode.removeChild(row); if(selectedId===id){var rd=layer.querySelector('.zd-read'); if(rd){rd.style.display=''; rd.innerHTML='';}} }
        return; }
      if (t.closest && t.closest('.zd-tool-del')) { var a=layer.querySelector('.zd-row.zd-active'); if(a){ var del2=a.querySelector('.zd-row-del'); if(del2) del2.click(); } return; }
      var rowEl = t.closest && t.closest('.zd-row');
      if (rowEl) selectEmail(layer, rowEl.getAttribute('data-id'));
    });
    return layer;
  }

  /* ---- placement ---- */
  function findSection(){
    var secs = document.querySelectorAll('main.view section');
    for (var i=0;i<secs.length;i++){ if (secs[i].querySelector('.toolbar-main') && secs[i].offsetParent !== null) return secs[i]; }
    return null;
  }
  function place(){
    if (!DATA) return;
    var sec = findSection(); if (!sec) return;
    if (getComputedStyle(sec).position === 'static') sec.style.position = 'relative';
    var layer = sec.querySelector(':scope > .zoho-demo-layer');
    if (!layer){ layer = buildLayer(); sec.appendChild(layer); if (selectedId) selectEmail(layer, selectedId); }
    var tb = sec.querySelector('.toolbar-main');
    layer.style.top = (tb ? tb.offsetHeight : 56) + 'px';
    // Match the fake list to SOGo's native message-list column width so the native
    // list (md-virtual-repeat, kept alive underneath for scraping) never peeks out
    // between our list and the real reading pane when a real email is open.
    var nativeCol = sec.querySelector('.view-list') || sec.querySelector('#messagesList');
    var zl = layer.querySelector('.zd-list');
    if (nativeCol && zl){ var w = nativeCol.getBoundingClientRect().width; if (w > 0) zl.style.width = w + 'px'; }
    // Self-heal: if a real email is open but SOGo (re)rendered its view in #detailView,
    // re-embed it into our Zoho pane.
    if (selectedId != null){ var em = byId[selectedId];
      if (em && em.real){ var m = layer.querySelector('.zd-real-body');
        if (m && !m.querySelector('.sg-face')){ var f = document.querySelector('#detailView .sg-face'); if (f && faceMatchesEmail(f, em)){ m.appendChild(f); m.classList.remove('zd-loading'); } } } }
    applyFilter(layer);   // keep the active search/view filter applied across re-renders
  }

  /* ---- load a folder's data (fake + real merge) ---- */
  function loadFolder(folder, keepSelection){
    var token = ++loadToken;   // invalidate any scrapeAllReal() still running for a prior folder
    return getJSON(folder + '.json').catch(function(){ return { title: folder, sort:'Order Received', groups:[] }; })
      .then(function(d){
        return scrapeAllReal(token).then(function(realEmails){
          if (token !== loadToken) return;   // superseded by a newer folder switch — drop this result
          d.realEmails = realEmails;
          d.groups = [];   // chỉ hiển thị MAIL THẬT (bỏ mail demo/fake) — danh sách theo
                           // đúng thứ tự SOGo: thời gian giảm dần (mới trên, cũ dưới)
          DATA = d; loadedFolder = folder; indexData(d);
          // Keep the open email across in-folder list refreshes (e.g. new mail arriving);
          // only drop the selection when switching folders. Drop ids no longer present.
          if (!keepSelection || (selectedId != null && !byId[selectedId])) selectedId = null;
          restoreRealFace();   // return any embedded real view to SOGo before tearing down the layer
          var sec = findSection(); var old = sec && sec.querySelector(':scope > .zoho-demo-layer');
          if (old) old.parentNode.removeChild(old);
          place();
        });
      });
  }

  /* ---- boot + reactivity ---- */
  function demoEnabled(){
    try {
      if (/[?&#]demo=0\b/.test(location.href)) return false;
      if (window.localStorage && localStorage.getItem('zohoDemo') === 'off') return false;
    } catch (e) {}
    return true;
  }
  // Wire the controls that live OUTSIDE the overlay (top search + sidebar nav +
  // rail collapse). Attached once at document level so they survive layer rebuilds.
  function wireChrome(){
    // top search → live-filter the Zoho list
    document.addEventListener('input', function(e){
      var t = e.target;
      if (t && t.closest && t.closest('.zoho-topsearch')){ searchQuery = t.value || ''; applyFilter(); }
    });
    document.addEventListener('click', function(e){
      var t = e.target; if (!t || !t.closest) return;
      var av = t.closest('.zoho-top-avatar');
      if (av){ e.preventDefault(); e.stopPropagation(); openAcctPopup(av); return; }   // avatar → account popup
      if (t.closest('.zoho-rail-collapse')){ toggleSidebar(); return; }   // collapse chevron → toggle sidebar
      var head = t.closest('.zoho-nav-head');                             // section header → collapse/expand its children
      if (head && !t.closest('.zoho-nav-act')){ var grp = head.closest('.zoho-nav'); if (grp) grp.classList.toggle('zoho-nav-collapsed'); return; }
      var nav = t.closest('.zoho-nav-item');                              // STREAMS / GIAO DIỆN filters
      if (nav){
        var mode = navMode((nav.querySelector('.zoho-nav-label') || nav).textContent);
        if (mode){ e.preventDefault(); filterMode = mode; setNavActive(nav); applyFilter(); }
      }
    });
  }
  function boot(){
    if (!demoEnabled()) { try{ console.info('[zoho-demo] off — real SOGo'); }catch(e){} return; }
    wireChrome();
    loadFolder(currentFolder()).then(function(){
      var pending=false, lastReal=-1;
      relabelFolders();
      var obs = new MutationObserver(function(){ if(pending) return; pending=true; setTimeout(function(){
        pending=false;
        if (scraping) return;   // our own programmatic scroll (full-folder scrape / open-by-uid) is in flight — its DOM churn isn't "new mail"
        relabelFolders();   // keep SOGo folder names localised across virtual-repeat re-renders
        var f = currentFolder();
        if (f !== loadedFolder) { loadFolder(f); return; }
        var rc = realRows().length;
        if (rc !== lastReal) { lastReal = rc; loadFolder(f, true); return; } // real list arrived/changed — keep open email
        place();
      }, 250); });
      obs.observe(document.body, {childList:true, subtree:true});
      window.addEventListener('hashchange', function(){ var f=currentFolder(); if(f!==loadedFolder) loadFolder(f); });
      window.addEventListener('resize', place);
    });
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
  else boot();
})();
