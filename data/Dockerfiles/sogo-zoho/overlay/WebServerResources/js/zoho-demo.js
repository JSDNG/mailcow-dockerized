/* ===========================================================================
 * Zoho demo layer — paints a Zoho-style populated inbox (list + reading pane)
 * over SOGo's central area, driven by fake JSON in WebServerResources/demo/.
 * Purely visual/preview: it's an isolated overlay (.zoho-demo-*), so if anything
 * here fails, the real SOGo underneath is untouched.
 * Toggle off by removing js/zoho-demo.js from SOGoUIAdditionalJSFiles.
 * =========================================================================== */
(function () {
  'use strict';
  var DATA_BASE = '/SOGo/WebServerResources/demo/';

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

  function getJSON(f){ return fetch(DATA_BASE+f, {cache:'no-cache'}).then(function(r){ if(!r.ok) throw new Error(r.status); return r.json(); }); }

  function listHTML(d){
    var groups = d.groups.map(function(g){
      var rows = g.emails.map(function(m){
        var badges = '';
        if (m.unreadBadge) badges += '<span class="zd-badge zd-badge-b">'+m.unreadBadge+'</span>';
        if (m.attach) badges += '<span class="zd-attach">'+ic('attach')+'</span>';
        if (m.countBadge) badges += '<span class="zd-badge">'+m.countBadge+'</span>';
        return '<div class="zd-row'+(m.active?' zd-active':'')+(m.unread?' zd-unread':'')+'">'+
          '<span class="zd-row-ic">'+ic('mail')+'</span>'+
          '<div class="zd-row-main">'+
            '<div class="zd-row-top"><span class="zd-sender">'+m.sender+'</span><span class="zd-time">'+m.time+'</span></div>'+
            '<div class="zd-row-sub">'+(badges?'<span class="zd-badges">'+badges+'</span>':'')+m.subject+'</div>'+
          '</div></div>';
      }).join('');
      return '<div class="zd-grp">'+g.label+'</div>'+rows;
    }).join('');
    return '<div class="zd-list">'+
      '<div class="zd-list-head"><h1>'+d.title+'</h1><span class="zd-unread"> • <a>'+d.unread+'</a></span></div>'+
      '<div class="zd-list-tools">'+
        '<label class="zd-chk"><input type="checkbox"/>'+ic('caret')+'</label>'+
        '<button class="zd-tool">'+ic('move')+' Chuyển đến</button>'+
        '<button class="zd-tool">'+ic('tag')+' Tag là</button>'+
        '<button class="zd-tool">'+ic('trash')+' Xóa</button>'+
        '<button class="zd-tool zd-tool-more">'+ic('more')+'</button>'+
      '</div>'+
      '<div class="zd-list-sort">'+ic('sort')+' <span>'+d.sort+'</span></div>'+
      '<div class="zd-list-body">'+groups+'</div>'+
    '</div>';
  }

  function readHTML(c){
    var tb = '<div class="zd-rp-tb"><div class="zd-rp-tbl">'+
      '<button class="zd-tbb">'+ic('bell')+' '+c.toolbar[0]+'</button>'+
      '<button class="zd-tbb">'+ic('check')+' '+c.toolbar[1]+'</button>'+
      '<button class="zd-tbb">'+ic('link')+' '+c.toolbar[2]+'</button>'+
      '<button class="zd-tbb">'+ic('clock')+' '+c.toolbar[3]+'</button></div>'+
      '<div class="zd-rp-tbr">'+ic('print')+ic('chat')+ic('ext')+ic('close')+'</div></div>';
    var msgs = c.messages.map(function(m, idx){
      var av = '<span class="zd-av" style="background:'+m.avatarColor+'">'+m.avatar+'</span>';
      var acts = '<span class="zd-acts">'+ic('reply')+ic('replyAll')+ic('forward')+ic('link')+'<span class="zd-sep">|</span>'+ic('caret')+'</span>';
      if (m.collapsed) {
        return '<div class="zd-msg zd-collapsed">'+
          '<div class="zd-mh">'+av+'<div class="zd-mm">'+
          '<div class="zd-l1"><span class="zd-from">'+m.from+'</span>'+
          '<span class="zd-sub2">'+ic('attach')+' '+m.date+' · <span style="color:'+m.statusColor+'">'+m.status+'</span></span></div>'+
          '<div class="zd-prev"><em>'+m.preview+'</em></div></div>'+acts+'</div></div>';
      }
      var tr = (idx===c.messages.length-1) ? '<div class="zd-tr">'+
          '<span class="zd-tr-l">'+c.translation.label+'</span>'+
          '<a class="zd-tr-lang">'+c.translation.from+' '+ic('caret')+'</a><span class="zd-tr-ar">→</span>'+
          '<a class="zd-tr-lang">'+c.translation.to+' '+ic('caret')+'</a>'+
          '<button class="zd-tr-btn">'+c.translation.action+'</button><span class="zd-tr-sp"></span>'+ic('close')+'</div>' : '';
      var body = (m.body||[]).map(function(p){return '<p>'+p+'</p>';}).join('');
      var quoted = m.quoted ? '<div class="zd-quoted">'+ic('more')+'</div>' : '';
      return '<div class="zd-msg">'+
        '<div class="zd-mh">'+av+'<div class="zd-mm">'+
        '<div class="zd-l1"><span class="zd-from">'+m.from+'</span> '+ic('search')+'</div>'+
        '<div class="zd-l2">'+m.date+' · <span style="color:'+m.statusColor+'">'+m.status+'</span></div>'+
        '<div class="zd-recip">'+ic('caret')+' '+m.recipients+'</div></div>'+acts+'</div>'+
        tr+'<div class="zd-body">'+body+quoted+'</div></div>';
    }).join('');
    return '<div class="zd-read">'+tb+'<div class="zd-rp-scroll"><h2 class="zd-rp-subj">'+c.subject+'</h2>'+msgs+'</div>'+
      '<div class="zd-reply"><input type="text" placeholder="'+c.replyPlaceholder+'"/>'+ic('smile')+'</div></div>';
  }

  var built = false, html = '';

  function findSection(){
    var secs = document.querySelectorAll('main.view section');
    for (var i=0;i<secs.length;i++){ if (secs[i].querySelector('.toolbar-main') && secs[i].offsetParent !== null) return secs[i]; }
    return null;
  }

  function place(){
    if (!html) return;
    var sec = findSection();
    if (!sec) return;
    var tb = sec.querySelector('.toolbar-main');
    var top = tb ? tb.offsetHeight : 56;
    if (getComputedStyle(sec).position === 'static') sec.style.position = 'relative';
    var layer = sec.querySelector(':scope > .zoho-demo-layer');
    if (!layer){
      layer = document.createElement('div');
      layer.className = 'zoho-demo-layer';
      layer.innerHTML = html;
      sec.appendChild(layer);
    }
    layer.style.top = top + 'px';
  }

  function boot(){
    Promise.all([getJSON('inbox.json'), getJSON('conversation.json')]).then(function(res){
      html = listHTML(res[0]) + readHTML(res[1]);
      built = true;
      place();
      var pending=false;
      var obs = new MutationObserver(function(){ if(pending) return; pending=true; setTimeout(function(){pending=false; place();}, 200); });
      obs.observe(document.body, {childList:true, subtree:true});
      window.addEventListener('resize', place);
    }).catch(function(e){ try{ console.warn('[zoho-demo] disabled:', e.message);}catch(_){} });
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
  else boot();
})();
