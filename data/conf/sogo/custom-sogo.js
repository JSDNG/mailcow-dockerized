// Zoho theming/structure now lives in the custom SOGo image
// (data/Dockerfiles/sogo-zoho/: edited templates + css/zoho.css), so this file
// is back to mailcow's original hooks only. mc_logout() is still used by the
// patched UIxTopnavToolbar.wox logout button.

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

// Change the visible font-size in the editor (guarded: CKEDITOR only exists on
// the composer page).
if (typeof CKEDITOR !== 'undefined') {
  CKEDITOR.addCss("body {font-size: 16px !important}");
  // Enable scayt by default
  // CKEDITOR.config.scayt_autoStartup = true;
}
