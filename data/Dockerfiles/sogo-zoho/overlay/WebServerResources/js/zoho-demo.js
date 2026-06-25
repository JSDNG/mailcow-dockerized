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
      var els = document.querySelectorAll('.md-sidenav-left .sg-mailbox-list-item .sg-item-name');
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
    star:'<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>'
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
  function openRealRow(realIndex){
    // SOGo's md-list-item click handler lives on an inner <button class="md-button">,
    // not the md-list-item itself — calling .click() on the item is a no-op.
    var el = realRows()[realIndex];
    if (!el) return;
    try { (el.querySelector('button') || el).click(); } catch(e){}
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
  // Read unread/flagged straight from SOGo's Angular model (reliable) so the Zoho
  // filters (Chưa đọc / Đã gắn cờ) act on real state, not guessed CSS classes.
  function realFlags(el){
    var unread = false, flagged = el.classList.contains('sg-star-bg');
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
      return { id:'r'+i, real:true, realIndex:i, unread:fl.unread, flagged:fl.flagged,
        sender:(from||'(người gửi)').slice(0,80), subject:(subj||'(không tiêu đề)').slice(0,90), time:(date||'').slice(0,20) };
    });
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
      groups += '<div class="zd-grp">Hộp thư</div>' + d.realEmails.map(rowHTML).join('');
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
          '<div class="zd-l2"><span class="zd-rp-ic" data-act="flag" title="Gắn cờ">'+ic('star')+'</span> '+esc(email.time)+'</div>'+
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
  function mountRealBody(layer, tries){
    if (selectedId == null) return;                 // navigated away
    var email = byId[selectedId];
    if (!email || !email.real) return;              // switched to a fake email
    var mount = layer.querySelector('.zd-real-body'); if (!mount) return;
    var face = document.querySelector('#detailView .sg-face');
    if (face && face.parentNode !== mount){ mount.appendChild(face); mount.classList.remove('zd-loading'); return; }
    if (face && face.parentNode === mount){ mount.classList.remove('zd-loading'); return; }
    if ((tries||0) < 50) setTimeout(function(){ mountRealBody(layer, (tries||0)+1); }, 100); // up to ~5s
  }

  /* ---- state ---- */
  var DATA = null, selectedId = null, byId = {}, loadedFolder = null;
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
  function openAcctPopup(avatarEl){
    if (document.querySelector('.zoho-acct-pop')) { closeAcctPopup(); return; }   // toggle off
    var d = acctData();
    function row(k,v){ return v ? '<div class="zoho-acct-row"><span>'+esc(k)+'</span><b>'+esc(v)+'</b></div>' : ''; }
    var pop = document.createElement('div');
    pop.className = 'zoho-acct-pop';
    pop.innerHTML =
      '<div class="zoho-acct-head">'+
        '<span class="zoho-acct-av">'+esc(acctInitial(d))+'</span>'+
        '<div class="zoho-acct-id">'+
          '<div class="zoho-acct-name">'+esc(d.name)+'</div>'+
          '<div class="zoho-acct-email">'+esc(d.email)+'</div>'+
          '<div class="zoho-acct-status"><i></i> Đang hoạt động</div>'+
        '</div>'+
      '</div>'+
      '<div class="zoho-acct-rows">'+ row('Tên đăng nhập', d.user) + row('Máy chủ IMAP', d.imap) + row('SMTP', d.smtp) +'</div>'+
      '<div class="zoho-acct-acts">'+
        '<a class="zoho-acct-btn" href="/user">Cài đặt tài khoản</a>'+
        '<button class="zoho-acct-logout" type="button">Đăng xuất</button>'+
      '</div>';
    document.body.appendChild(pop);
    var r = avatarEl.getBoundingClientRect();
    pop.style.top = (r.bottom + 8) + 'px';
    pop.style.right = Math.max(8, (window.innerWidth - r.right)) + 'px';
    var lo = pop.querySelector('.zoho-acct-logout');
    if (lo) lo.addEventListener('click', function(){ try { if (window.mc_logout) mc_logout(); } catch(e){} closeAcctPopup(); });
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
  function showRealPane(layer, email){
    // Render Zoho chrome, ask SOGo to open the message, then relocate SOGo's live
    // message view into our pane so the real body/attachments work inside the Zoho UI.
    restoreRealFace();   // put any prior embedded view back so SOGo can reuse #detailView
    var read = layer.querySelector('.zd-read');
    if (read){ read.style.display=''; read.innerHTML = realReadHTML(email); }
    openRealRow(email.realIndex);
    mountRealBody(layer, 0);
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
        if (m && !m.querySelector('.sg-face')){ var f = document.querySelector('#detailView .sg-face'); if (f){ m.appendChild(f); m.classList.remove('zd-loading'); } } } }
    applyFilter(layer);   // keep the active search/view filter applied across re-renders
  }

  /* ---- load a folder's data (fake + real merge) ---- */
  function loadFolder(folder, keepSelection){
    return getJSON(folder + '.json').catch(function(){ return { title: folder, sort:'Order Received', groups:[] }; })
      .then(function(d){
        d.realEmails = scrapeReal();
        DATA = d; loadedFolder = folder; indexData(d);
        // Keep the open email across in-folder list refreshes (e.g. new mail arriving);
        // only drop the selection when switching folders. Drop ids no longer present.
        if (!keepSelection || (selectedId != null && !byId[selectedId])) selectedId = null;
        restoreRealFace();   // return any embedded real view to SOGo before tearing down the layer
        var sec = findSection(); var old = sec && sec.querySelector(':scope > .zoho-demo-layer');
        if (old) old.parentNode.removeChild(old);
        place();
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
