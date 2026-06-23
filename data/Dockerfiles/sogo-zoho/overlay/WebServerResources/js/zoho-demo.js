/* ===========================================================================
 * Zoho demo layer — a Zoho-style populated inbox painted over SOGo's central
 * area, driven by fake JSON (WebServerResources/demo/inbox.json). Each email
 * carries its own `detail`; clicking a row swaps the reading pane to that email.
 * Preview-only and isolated (.zd-*) — if it fails, the real SOGo is untouched.
 * Disable by removing js/zoho-demo.js from SOGoUIAdditionalJSFiles.
 * =========================================================================== */
(function () {
  'use strict';
  var DATA_BASE = '/SOGo/WebServerResources/demo/';
  var AV_COLORS = ['#e0a458','#5a6b8c','#4a90e2','#36c172','#9b59b6','#e07b39','#16a085','#c0556b'];

  var I = {
    search:'<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>',
    mail:'<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/>',
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
    smile:'<circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>'
  };
  function ic(n){ return '<svg class="zd-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">'+(I[n]||'')+'</svg>'; }
  function esc(s){ return String(s==null?'':s).replace(/[&<>"]/g, function(c){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]; }); }
  function initial(name){ var m = String(name||'?').trim(); if (/^me$/i.test(m)) return 'Me'; var c = m.replace(/[^A-Za-zÀ-ỹ]/,'').charAt(0); return (c||m.charAt(0)||'?').toUpperCase(); }
  function color(id){ return AV_COLORS[(id||0) % AV_COLORS.length]; }

  function getJSON(f){ return fetch(DATA_BASE+f, {cache:'no-cache'}).then(function(r){ if(!r.ok) throw new Error(r.status); return r.json(); }); }

  /* ---------------- list ---------------- */
  function listHTML(d){
    var groups = d.groups.map(function(g){
      var rows = g.emails.map(function(m){
        var badges = '';
        if (m.unreadBadge) badges += '<span class="zd-badge zd-badge-b">'+m.unreadBadge+'</span>';
        if (m.attach) badges += '<span class="zd-attach">'+ic('attach')+'</span>';
        if (m.countBadge) badges += '<span class="zd-badge">'+m.countBadge+'</span>';
        return '<div class="zd-row'+(m.unread?' zd-unread':'')+'" data-id="'+m.id+'">'+
          '<span class="zd-row-ic">'+ic('mail')+'</span>'+
          '<div class="zd-row-main">'+
            '<div class="zd-row-top"><span class="zd-sender">'+esc(m.sender)+'</span><span class="zd-time">'+esc(m.time)+'</span></div>'+
            '<div class="zd-row-sub">'+(badges?'<span class="zd-badges">'+badges+'</span>':'')+esc(m.subject)+'</div>'+
          '</div></div>';
      }).join('');
      return '<div class="zd-grp">'+esc(g.label)+'</div>'+rows;
    }).join('');
    return '<div class="zd-list">'+
      '<div class="zd-list-head"><h1>'+esc(d.title)+'</h1><span class="zd-unread"> • <a>'+esc(d.unread)+'</a></span></div>'+
      '<div class="zd-list-tools">'+
        '<label class="zd-chk"><input type="checkbox"/>'+ic('caret')+'</label>'+
        '<button class="zd-tool">'+ic('move')+' Chuyển đến</button>'+
        '<button class="zd-tool">'+ic('tag')+' Tag là</button>'+
        '<button class="zd-tool">'+ic('trash')+' Xóa</button>'+
        '<button class="zd-tool zd-tool-more">'+ic('more')+'</button>'+
      '</div>'+
      '<div class="zd-list-sort">'+ic('sort')+' <span>'+esc(d.sort)+'</span></div>'+
      '<div class="zd-list-body">'+groups+'</div>'+
    '</div>';
  }

  /* ---------------- reading pane (from an email.detail) ---------------- */
  function readHTML(email, replyPlaceholder){
    var c = email.detail || { subject: email.subject, messages: [] };
    var tb = '<div class="zd-rp-tb"><div class="zd-rp-tbl">'+
      '<button class="zd-tbb">'+ic('bell')+' Thông báo nhắc</button>'+
      '<button class="zd-tbb">'+ic('check')+' Thêm tác vụ</button>'+
      '<button class="zd-tbb">'+ic('link')+' Liên kết vĩnh viễn</button>'+
      '<button class="zd-tbb">'+ic('clock')+' Báo lại</button></div>'+
      '<div class="zd-rp-tbr">'+ic('print')+ic('chat')+ic('ext')+ic('close')+'</div></div>';

    var msgs = (c.messages||[]).map(function(m, idx){
      var av = '<span class="zd-av" style="background:'+color(email.id+idx)+'">'+esc(initial(m.from))+'</span>';
      var acts = '<span class="zd-acts">'+ic('reply')+ic('replyAll')+ic('forward')+ic('link')+'<span class="zd-sep">|</span>'+ic('caret')+'</span>';
      var status = m.status ? ' · <span style="color:'+(m.statusColor||'#8a93a3')+'">'+esc(m.status)+'</span>' : '';
      if (m.collapsed) {
        return '<div class="zd-msg zd-collapsed">'+
          '<div class="zd-mh">'+av+'<div class="zd-mm">'+
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
      return '<div class="zd-msg">'+
        '<div class="zd-mh">'+av+'<div class="zd-mm">'+
        '<div class="zd-l1"><span class="zd-from">'+esc(m.from)+'</span> <span class="zd-email">'+esc(m.email||'')+'</span></div>'+
        '<div class="zd-l2">'+esc(m.date)+status+'</div>'+recip+'</div>'+acts+'</div>'+
        tr+'<div class="zd-body">'+body+quoted+'</div></div>';
    }).join('');

    return tb+'<div class="zd-rp-scroll"><h2 class="zd-rp-subj">'+esc(c.subject||email.subject)+'</h2>'+msgs+'</div>'+
      '<div class="zd-reply"><input type="text" placeholder="'+esc(replyPlaceholder||'')+'"/>'+ic('smile')+'</div>';
  }

  /* ---------------- state + wiring ---------------- */
  var DATA = null, selectedId = null, byId = {};

  function indexData(d){
    byId = {};
    d.groups.forEach(function(g){ g.emails.forEach(function(e){ byId[e.id] = e; }); });
  }
  function defaultId(d){
    var act = null, first = null;
    d.groups.forEach(function(g){ g.emails.forEach(function(e){ if(first==null) first=e.id; if(e.active && act==null) act=e.id; }); });
    return act != null ? act : first;
  }

  function selectEmail(layer, id){
    var email = byId[id]; if (!email) return;
    selectedId = id;
    var read = layer.querySelector('.zd-read');
    if (read) read.innerHTML = readHTML(email, DATA.replyPlaceholder);
    layer.querySelectorAll('.zd-row').forEach(function(r){ r.classList.toggle('zd-active', r.getAttribute('data-id') == String(id)); });
  }

  function buildLayer(){
    var layer = document.createElement('div');
    layer.className = 'zoho-demo-layer';
    layer.innerHTML = listHTML(DATA) + '<div class="zd-read"></div>';
    // click delegation on the list
    layer.addEventListener('click', function(ev){
      var row = ev.target.closest && ev.target.closest('.zd-row');
      if (row) selectEmail(layer, row.getAttribute('data-id'));
    });
    return layer;
  }

  /* ---------------- placement over SOGo's mailbox section ---------------- */
  function findSection(){
    var secs = document.querySelectorAll('main.view section');
    for (var i=0;i<secs.length;i++){ if (secs[i].querySelector('.toolbar-main') && secs[i].offsetParent !== null) return secs[i]; }
    return null;
  }
  function place(){
    if (!DATA) return;
    var sec = findSection(); if (!sec) return;
    var tb = sec.querySelector('.toolbar-main');
    if (getComputedStyle(sec).position === 'static') sec.style.position = 'relative';
    var layer = sec.querySelector(':scope > .zoho-demo-layer');
    if (!layer){ layer = buildLayer(); sec.appendChild(layer); selectEmail(layer, selectedId); }
    layer.style.top = (tb ? tb.offsetHeight : 56) + 'px';
  }

  /* ---------------- toggle (no rebuild needed) ----------------
   * The demo is a non-destructive OVERLAY: the real SOGo mail UI/logic (IMAP
   * list + reading pane) is fully intact underneath. Turn the demo OFF to use
   * the real mailbox — any of:
   *   - add ?demo=0 to the URL, or
   *   - run  localStorage.setItem('zohoDemo','off')  in the console (persists), or
   *   - remove js/zoho-demo.js from SOGoUIAdditionalJSFiles in sogo.conf. */
  function demoEnabled(){
    try {
      if (/[?&#]demo=0\b/.test(location.href)) return false;
      if (window.localStorage && localStorage.getItem('zohoDemo') === 'off') return false;
    } catch (e) {}
    return true;
  }

  /* ---------------- DATA ADAPTER (map real data here later) ----------------
   * Returns the inbox model the renderer expects:
   *   { title, unread, sort, replyPlaceholder,
   *     groups: [ { label, emails: [ { id, sender, subject, time, unread?,
   *                 attach?, countBadge?, unreadBadge?, detail:{subject,
   *                 translation?, messages:[{from,email,date,status,statusColor,
   *                 recipients?,body[],collapsed?,preview?,quoted?}] } } ] } ] }
   * TODAY: fake JSON. To map REAL mail later, replace the body of loadInbox()
   * to read SOGo's mailbox model — e.g.
   *     var scope = angular.element(document.querySelector('[ng-controller]')).scope();
   * — and transform scope.mailbox messages into the shape above. The whole
   * renderer (list, click-to-open, reading pane) stays unchanged. */
  function loadInbox(){ return getJSON('inbox.json'); }

  function boot(){
    if (!demoEnabled()) { try { console.info('[zoho-demo] off — real SOGo mailbox in use'); } catch (e) {} return; }
    loadInbox().then(function(d){
      DATA = d; indexData(d); selectedId = defaultId(d);
      place();
      var pending = false;
      var obs = new MutationObserver(function(){ if(pending) return; pending=true; setTimeout(function(){ pending=false; place(); }, 200); });
      obs.observe(document.body, {childList:true, subtree:true});
      window.addEventListener('resize', place);
    }).catch(function(e){ try{ console.warn('[zoho-demo] disabled:', e.message);}catch(_){} });
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
  else boot();
})();
