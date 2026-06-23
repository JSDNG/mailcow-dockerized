/* Zoho Mail UI clone — fetches fake JSON data and renders the interface.
 * Run from a local server (fetch() is blocked on file://). See README.md. */
(function () {
  'use strict';

  var icon = window.renderIcon;

  /* Replace every <span data-icon="x"> in static markup with its SVG. */
  function hydrateStaticIcons(root) {
    (root || document).querySelectorAll('[data-icon]').forEach(function (el) {
      if (el.dataset.hydrated) return;
      el.innerHTML = icon(el.getAttribute('data-icon'));
      el.dataset.hydrated = '1';
    });
  }

  function el(tag, cls, html) {
    var n = document.createElement(tag);
    if (cls) n.className = cls;
    if (html != null) n.innerHTML = html;
    return n;
  }

  function getJSON(path) {
    return fetch(path).then(function (r) {
      if (!r.ok) throw new Error('HTTP ' + r.status + ' for ' + path);
      return r.json();
    });
  }

  /* ----------------------------- Folder panel ----------------------------- */
  function renderFolders(data) {
    var ql = document.getElementById('quicklinks');
    ql.innerHTML = '';
    data.quickLinks.forEach(function (q) {
      var item = el('a', 'ql-item' + (q.isLink ? ' ql-link' : ''),
        '<span class="ql-ico">' + icon(q.icon) + '</span><span>' + q.name + '</span>');
      ql.appendChild(item);
    });

    var fl = document.getElementById('folder-list');
    fl.innerHTML = '';
    data.folders.forEach(function (f) {
      var li = el('li', 'folder-item' + (f.active ? ' folder-active' : ''));
      li.innerHTML =
        '<span class="folder-ico">' + icon(f.icon) + '</span>' +
        '<span class="folder-name">' + f.name + '</span>' +
        (f.count != null ? '<span class="folder-count">' + f.count + '</span>' : '');
      fl.appendChild(li);
    });

    var vl = document.getElementById('view-list');
    vl.innerHTML = '';
    data.views.forEach(function (v) {
      var li = el('li', 'folder-item view-item' + (v.active ? ' folder-active' : ''));
      li.innerHTML =
        '<span class="folder-name">' + v.name + '</span>' +
        (v.count != null ? '<span class="folder-count">' + v.count + '</span>' : '');
      vl.appendChild(li);
    });
  }

  /* ------------------------------ Mail list ------------------------------- */
  function renderMailList(data) {
    document.getElementById('ml-title').textContent = data.title;
    document.getElementById('ml-unread').textContent = data.unreadHeadline;
    document.getElementById('ml-sort').textContent = data.sort;

    var body = document.getElementById('mail-list-body');
    body.innerHTML = '';
    data.groups.forEach(function (g) {
      body.appendChild(el('div', 'ml-group-label', g.label));
      g.emails.forEach(function (m) {
        var row = el('div', 'ml-row' + (m.active ? ' ml-row-active' : '') +
          (m.unread ? ' ml-unread' : ''));

        var badges = '';
        if (m.starBadge) badges += '<span class="ml-badge ml-badge-star">' + m.starBadge + '</span>';
        if (m.hasAttachment) badges += '<span class="ml-attach">' + icon('attach') + '</span>';
        if (m.countBadge) badges += '<span class="ml-badge">' + m.countBadge + '</span>';

        row.innerHTML =
          '<span class="ml-row-ico">' + icon('mail') + '</span>' +
          '<div class="ml-row-main">' +
            '<div class="ml-row-top">' +
              '<span class="ml-sender">' + m.sender + '</span>' +
              '<span class="ml-time">' + m.time + '</span>' +
            '</div>' +
            '<div class="ml-row-bottom">' +
              '<span class="ml-subject">' + (badges ? '<span class="ml-badges">' + badges + '</span>' : '') +
                m.subject + '</span>' +
            '</div>' +
          '</div>';
        body.appendChild(row);
      });
    });
  }

  /* ----------------------------- Reading pane ----------------------------- */
  function toolBtn(name, label) {
    return '<button class="rp-toolbtn">' + icon(name) + (label ? ' <span>' + label + '</span>' : '') + '</button>';
  }

  function renderConversation(c) {
    var pane = document.getElementById('reading-pane');

    var topToolbar =
      '<div class="rp-toolbar">' +
        '<div class="rp-toolbar-left">' +
          toolBtn('bell', c.toolbar[0]) +
          toolBtn('check', c.toolbar[1]) +
          toolBtn('link', c.toolbar[2]) +
          toolBtn('clock', c.toolbar[3]) +
        '</div>' +
        '<div class="rp-toolbar-right">' +
          '<button class="rp-iconbtn">' + icon('print') + '</button>' +
          '<button class="rp-iconbtn">' + icon('chat') + '</button>' +
          '<button class="rp-iconbtn">' + icon('external') + '</button>' +
          '<button class="rp-iconbtn">' + icon('close') + '</button>' +
        '</div>' +
      '</div>';

    var subject = '<h2 class="rp-subject">' + c.subject + '</h2>';

    var messages = c.messages.map(function (m, idx) {
      var avatar = '<span class="rp-avatar" style="background:' + m.avatarColor + '">' + m.avatarText + '</span>';
      var actions =
        '<span class="rp-msg-actions">' +
          icon('reply') + icon('replyAll') + icon('forward') + icon('link') +
          '<span class="rp-sep">|</span>' + icon('caret') +
        '</span>';

      if (m.collapsed) {
        return '<div class="rp-msg rp-msg-collapsed">' +
          '<div class="rp-msg-head">' +
            avatar +
            '<div class="rp-msg-meta">' +
              '<div class="rp-msg-line1">' +
                '<span class="rp-from">' + m.from + '</span>' +
                '<span class="rp-msg-sub"> &nbsp;' + icon('attach') + ' ' + icon('star') +
                  ' ' + m.date + ' &middot; ' + icon('clock') +
                  ' <span class="rp-status" style="color:' + m.statusColor + '">' + m.status + '</span></span>' +
              '</div>' +
              '<div class="rp-collapsed-preview"><em>' + m.preview + '</em></div>' +
            '</div>' +
            actions + '<span class="rp-share">' + icon('share') + '</span>' +
          '</div>' +
        '</div>';
      }

      var translation = idx === c.messages.length - 1 ?
        '<div class="rp-translate">' +
          '<span class="rp-tr-label">' + c.translation.label + '</span>' +
          '<a class="rp-tr-lang">' + c.translation.from + ' ' + icon('caret') + '</a>' +
          '<span class="rp-tr-arrow">&rarr;</span>' +
          '<a class="rp-tr-lang">' + c.translation.to + ' ' + icon('caret') + '</a>' +
          '<button class="rp-tr-btn">' + c.translation.action + '</button>' +
          '<span class="rp-tr-spacer"></span>' +
          '<span class="rp-tr-ico">' + icon('window') + '</span>' +
          '<span class="rp-tr-ico">' + icon('close') + '</span>' +
        '</div>' : '';

      var body = (m.body || []).map(function (p) { return '<p>' + p + '</p>'; }).join('');
      var quoted = m.quotedCollapsed ? '<div class="rp-quoted">' + icon('more') + '</div>' : '';

      return '<div class="rp-msg">' +
        '<div class="rp-msg-head">' +
          avatar +
          '<div class="rp-msg-meta">' +
            '<div class="rp-msg-line1">' +
              '<span class="rp-from">' + m.from + '</span>' +
              '<span class="rp-msg-sub"> &nbsp;' + icon('search') + '</span>' +
            '</div>' +
            '<div class="rp-msg-line2">' + icon('flag' in window.ICONS ? 'flag' : 'star') +
              ' ' + m.date + ' &middot; ' + icon('clock') +
              ' <span class="rp-status" style="color:' + m.statusColor + '">' + m.status + '</span></div>' +
            '<div class="rp-recipients">' + icon('chevronR') + ' ' + m.recipients +
              '<span class="rp-recip-ico">' + icon('bookOpen') + ' ' + icon('share') + '</span></div>' +
          '</div>' +
          actions +
        '</div>' +
        translation +
        '<div class="rp-body">' + body + quoted + '</div>' +
      '</div>';
    }).join('');

    var replyBox =
      '<div class="rp-replybox">' +
        '<input type="text" placeholder="' + c.replyPlaceholder + '" />' +
        '<span class="rp-reply-ico">' + icon('textIco') + '</span>' +
        '<span class="rp-reply-ico">' + icon('checkSquare') + '</span>' +
        '<span class="rp-reply-ico">' + icon('smile') + '</span>' +
      '</div>';

    pane.innerHTML = topToolbar + '<div class="rp-scroll">' + subject + messages + '</div>' + replyBox;
  }

  /* -------------------------------- Boot ---------------------------------- */
  function boot() {
    hydrateStaticIcons(document);
    Promise.all([
      getJSON('data/folders.json'),
      getJSON('data/emails.json'),
      getJSON('data/conversation.json')
    ]).then(function (res) {
      renderFolders(res[0]);
      renderMailList(res[1]);
      renderConversation(res[2]);
    }).catch(function (err) {
      document.body.insertAdjacentHTML('afterbegin',
        '<div style="position:fixed;top:0;left:0;right:0;z-index:9999;background:#b00020;' +
        'color:#fff;padding:10px 16px;font:13px sans-serif">Không tải được dữ liệu fake: ' +
        err.message + ' — Hãy chạy qua local server (xem README.md), đừng mở trực tiếp file://</div>');
      console.error(err);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
