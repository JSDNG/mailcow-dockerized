<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.twig */
class __TwigTemplate_3eec1d392de3f5eaadda9a6f83da47e0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("mailcow_locale", $context)) ? (Twig\Extension\CoreExtension::default(($context["mailcow_locale"] ?? null), "en")) : ("en")), "html", null, true);
        yield "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
  <meta name=\"theme-color\" content=\"#F5D76E\"/>
  <meta http-equiv=\"Referrer-Policy\" content=\"same-origin\">
  <title>";
        // line 9
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 9);
        yield "</title>

  <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_path"] ?? null), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"/css/zoho-login.css\">
  <script>
    // check if darkmode is preferred by OS or set by localStorage
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && localStorage.getItem(\"mailcow_theme\") !== \"light\" ||
        localStorage.getItem(\"mailcow_theme\") === \"dark\") {
      var head  = document.getElementsByTagName('head')[0];
      var link  = document.createElement('link');
      link.id   = 'dark-mode-theme';
      link.rel  = 'stylesheet';
      link.type = 'text/css';
      link.href = '/css/themes/mailcow-darkmode.css';
      head.appendChild(link);
    }
  </script>

  <link rel=\"shortcut icon\" href=\"/favicon.png\" type=\"image/png\">
  <link rel=\"icon\" href=\"/favicon.png\" type=\"image/png\">
</head>
<body>
<div class=\"overlay\"></div>
";
        // line 32
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 230
        yield "
<form action=\"/\" method=\"post\" id=\"logout\"><input type=\"hidden\" name=\"logout\"></form>

";
        // line 233
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 233) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 233)) &&  !($context["is_root_uri"] ?? null)) && ($context["mailcow_cc_username"] ?? null))) {
            // line 234
            yield "<div class=\"container mt-4\">
  <div class=\"alert alert-";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 235), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 235), "html", null, true);
            yield "</div>
</div>
";
        }
        // line 238
        yield "
<div class=\"container flex-grow-1 my-4\">
";
        // line 240
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 241
        yield "</div>

";
        // line 243
        yield from         $this->loadTemplate("modals/footer.twig", "base.twig", 243)->unwrap()->yield($context);
        // line 244
        yield "
<script src=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_path"] ?? null), "html", null, true);
        yield "\"></script>
<script>
  var lang_footer = ";
        // line 247
        yield ($context["lang_footer"] ?? null);
        yield ";
  var lang_acl = ";
        // line 248
        yield ($context["lang_acl"] ?? null);
        yield ";
  var lang_tfa = ";
        // line 249
        yield ($context["lang_tfa"] ?? null);
        yield ";
  var lang_fido2 = ";
        // line 250
        yield ($context["lang_fido2"] ?? null);
        yield ";
  var lang_success = ";
        // line 251
        yield ($context["lang_success"] ?? null);
        yield ";
  var lang_danger = ";
        // line 252
        yield ($context["lang_danger"] ?? null);
        yield ";
  var docker_timeout = ";
        // line 253
        yield ($context["docker_timeout"] ?? null);
        yield " * 1000;
  var mailcow_cc_role = '";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_role"] ?? null), "html", null, true);
        yield "';
  ";
        // line 255
        if (($context["mailcow_cc_username"] ?? null)) {
            // line 256
            yield "  var mailcow_info = {
    version_tag: '";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 257), "html", null, true);
            yield "',
    last_version_tag: '";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "last_version_tag", [], "any", false, false, false, 258), "html", null, true);
            yield "',
    updatedAt: '";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "updated_at", [], "any", false, false, false, 259), "html", null, true);
            yield "',
    project_url: '";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 260), "html", null, true);
            yield "',
    project_owner: '";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_owner", [], "any", false, false, false, 261), "html", null, true);
            yield "',
    project_repo: '";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_repo", [], "any", false, false, false, 262), "html", null, true);
            yield "',
    branch: '";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 263), "html", null, true);
            yield "'
  };
  ";
        } else {
            // line 266
            yield "  var mailcow_info = {
    version_tag: '',
    last_version_tag: '',
    updatedAt: '',
    project_url: '',
    project_owner: '',
    project_repo: '',
    branch: ''
  };
  ";
        }
        // line 276
        yield "
\$(window).scroll(function() {
  sessionStorage.scrollTop = \$(this).scrollTop();
});
// Select language and reopen active URL without POST
function setLang(sel) {
  \$.post( '";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uri"] ?? null), "js"), "html", null, true);
        yield "', {lang: sel} );
  window.location.href = window.location.pathname + window.location.search;
}
// FIDO2 functions
function arrayBufferToBase64(buffer) {
  let binary = '';
  let bytes = new Uint8Array(buffer);
  let len = bytes.byteLength;
  for (let i = 0; i < len; i++) {
    binary += String.fromCharCode( bytes[ i ] );
  }
  return window.btoa(binary);
}
function recursiveBase64StrToArrayBuffer(obj) {
  let prefix = '=?BINARY?B?';
  let suffix = '?=';
  if (typeof obj === 'object') {
    for (let key in obj) {
      if (typeof obj[key] === 'string') {
        let str = obj[key];
        if (str.substring(0, prefix.length) === prefix && str.substring(str.length - suffix.length) === suffix) {
          str = str.substring(prefix.length, str.length - suffix.length);
          let binary_string = window.atob(str);
          let len = binary_string.length;
          let bytes = new Uint8Array(len);
          for (let i = 0; i < len; i++) {
            bytes[i] = binary_string.charCodeAt(i);
          }
          obj[key] = bytes.buffer;
        }
      } else {
        recursiveBase64StrToArrayBuffer(obj[key]);
      }
    }
  }
}
  \$(window).on('load', function() {
    \$(\".overlay\").hide();
  });
  \$(document).ready(function() {
    \$(document).on('shown.bs.modal', function(e) {
      modal_id = \$(e.relatedTarget).data('target');
      \$(modal_id).attr(\"aria-hidden\",\"false\");
    });
    // TFA, CSRF, Alerts in footer.inc.php
    // Other general functions in mailcow.js
    ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["alert_type"] => $context["alert_msg"]) {
            // line 329
            yield "    mailcow_alert_box('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alert_msg"], "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alert_type"], "html", null, true);
            yield "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['alert_type'], $context['alert_msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        yield "
    // Confirm TFA modal
  ";
        // line 333
        if (($context["pending_tfa_methods"] ?? null)) {
            // line 334
            yield "    new bootstrap.Modal(document.getElementById(\"ConfirmTFAModal\"), {
      backdrop: 'static',
      keyboard: false
    }).show();


    // validate Time based OTP tfa
    \$(\"#pending_tfa_tab_totp\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(\"#collapseWebAuthnTFA\").collapse('hide');

      // select default if only one authenticator exists
      if (\$('.totp-authenticator-selection').length == 1){
        \$('.totp-authenticator-selection').addClass(\"active\");
        var id = \$('.totp-authenticator-selection').children('input').first().val();
        \$(\"#totp_selected_id\").val(id);
        \$(\"#collapseTotpTFA\").collapse('show');
      }
    });
    \$(\".totp-authenticator-selection\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");

      var id = \$(this).children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
    });
    if (\$('.totp-authenticator-selection').length == 1 &&
        \$('#pending_tfa_tab_yubi_otp').length == 0 &&
        \$('.webauthn-authenticator-selection').length == 0){

      // select default if only one authenticator exists
      \$('.totp-authenticator-selection').addClass(\"active\");

      var id = \$('.totp-authenticator-selection').children('input').first().val();
      \$(\"#totp_selected_id\").val(id);

      \$(\"#collapseTotpTFA\").collapse('show');
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_totp').on('shown.bs.tab', function() {
      // autofocus
      setTimeout(function() { \$(\"#collapseTotpTFA\").find('input[name=\"token\"]').focus(); }, 200);
    });
    // validate Yubi OTP tfa
    if (\$('.webauthn-authenticator-selection').length == 0){
      // autofocus
      setTimeout(function() { \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus(); }, 1000);
    }
    \$('#pending_tfa_tab_yubi_otp').on('shown.bs.tab', function() {
      // autofocus
      \$(\"#collapseYubiTFA\").find('input[name=\"token\"]').focus();
    });
    // validate WebAuthn tfa
    \$(\"#pending_tfa_tab_webauthn\").click(function(){
      \$(\".totp-authenticator-selection\").removeClass(\"active\");

      \$(\"#collapseTotpTFA\").collapse('hide');
    });
    \$(\".webauthn-authenticator-selection\").click(function(){
      \$(\".webauthn-authenticator-selection\").removeClass(\"active\");
      \$(this).addClass(\"active\");

      var id = \$(this).children('input').first().val();
      \$(\"#webauthn_selected_id\").val(id);

      var webauthn_status_auth = document.getElementById('webauthn_status_auth');
      webauthn_status_auth.style.setProperty('display', 'flex', 'important');
      var webauthn_return_code = document.getElementById('webauthn_return_code');
      webauthn_return_code.style.setProperty('display', 'none', 'important');

      \$(\"#collapseWebAuthnTFA\").collapse('show');

      \$(this).find('input[name=token]').focus();
      if(document.getElementById(\"webauthn_auth_data\") !== null) {
        // Check Browser support
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported for WebAuthn.');
            return;
        }

        // fetch webauthn auth args
        window.fetch(\"/api/v1/get/webauthn-tfa-get-args\", {method:'GET',cache:'no-cache'}).then(response => {
            return response.json();
        }).then(json => {
          console.log(json);
          if (json.success === false) throw new Error();
          if (json.type === \"error\") throw new Error(json.msg);

          recursiveBase64StrToArrayBuffer(json);
          return json;
        }).then(getCredentialArgs => {
          // get credentials
          return navigator.credentials.get(getCredentialArgs);
        }).then(cred => {
          return {
            id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
            clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
            authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
            signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
          };
        }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
          // send request by submit
          var form = document.getElementById('webauthn_auth_form');
          var auth = document.getElementById('webauthn_auth_data');
          auth.value = AuthenticatorAttestationResponse;
          form.submit();
        }).catch(function(err) {
          var webauthn_status_auth = document.getElementById('webauthn_status_auth');
          webauthn_status_auth.style.setProperty('display', 'none', 'important');

          var webauthn_return_code = document.getElementById('webauthn_return_code');
          webauthn_return_code.style.setProperty('display', 'block', 'important');
          webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
        });
      }
    });
    \$('#ConfirmTFAModal').on('hidden.bs.modal', function(){
      // cancel pending login
      \$.ajax({
        type: \"GET\",
        cache: false,
        dataType: 'script',
        url: '/inc/ajax/destroy_tfa_auth.php',
        complete: function(data){
          window.location = window.location.href.split(\"#\")[0];
        }
      });
    });
  ";
        }
        // line 465
        yield "
  ";
        // line 466
        if (($context["pending_tfa_setup"] ?? null)) {
            // line 467
            yield "    var setupTFAModal = new bootstrap.Modal(document.getElementById(\"SetupTFAModal\"), {
      backdrop: 'static',
      keyboard: false
    });
    setupTFAModal.show();

    // Load QR code for TOTP setup in SetupTFAModal
    var setupTotpSecret = \$('#setup-tfa-qr-img').data('totp-secret');
    if (setupTotpSecret) {
      \$.ajax({
        type: \"GET\",
        url: \"/inc/ajax/qr_gen.php?token=\" + encodeURIComponent(setupTotpSecret),
        success: function(data) {
          \$('#setup-tfa-qr-img').attr('src', data);
        }
      });
    }

    // WebAuthn registration for SetupTFAModal
    \$('#start_setup_webauthn_register').click(function() {
      if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
        window.alert('Browser not supported.');
        return;
      }
      var keyId = \$('#setup_webauthn_reg_form input[name=key_id]').val();
      if (!keyId) {
        \$('#setup_webauthn_return_code').show().text('Please fill in the key ID first.');
        return;
      }
      window.fetch('/api/v1/get/webauthn-tfa-registration', {method: 'GET', cache: 'no-cache'}).then(function(response) {
        return response.json();
      }).then(function(json) {
        if (json.success === false) throw new Error(json.error || 'Registration failed');
        recursiveBase64StrToArrayBuffer(json);
        return navigator.credentials.create(json);
      }).then(function(cred) {
        return {
          id: cred.id,
          rawId: arrayBufferToBase64(cred.rawId),
          response: {
            attestationObject: arrayBufferToBase64(cred.response.attestationObject),
            clientDataJSON: arrayBufferToBase64(cred.response.clientDataJSON)
          },
          type: cred.type
        };
      }).then(function(credData) {
        \$('#setup_webauthn_register_data').val(JSON.stringify(credData));
        \$('#setup_webauthn_reg_form input[name=set_tfa]').val('1');
        \$('#setup_webauthn_reg_form').submit();
      }).catch(function(err) {
        \$('#setup_webauthn_return_code').show().text(err.message || 'Registration failed');
      });
    });
  ";
        }
        // line 521
        yield "
  ";
        // line 522
        if (((($context["pending_pw_update_modal"] ?? null) &&  !($context["pending_tfa_setup"] ?? null)) &&  !($context["pending_tfa_methods"] ?? null))) {
            // line 523
            yield "    var changePWModal = new bootstrap.Modal(document.getElementById(\"ChangePWModal\"), {
      backdrop: 'static',
      keyboard: false
    });
    changePWModal.show();

    \$('#changePWModalForm').on('submit', function(e) {
      e.preventDefault();
      var newPw = \$('#changePWNew').val();
      var newPw2 = \$('#changePWNew2').val();
      var role = '";
            // line 533
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_role"] ?? null), "html", null, true);
            yield "';
      var username = '";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield "';

      var url, attrPayload, itemsPayload;
      if (role === 'admin') {
        url = '/api/v1/edit/admin';
        attrPayload = {password: newPw, password2: newPw2};
        itemsPayload = [username];
      } else {
        url = '/api/v1/edit/self';
        attrPayload = {user_new_pass: newPw, user_new_pass2: newPw2};
        itemsPayload = null;
      }

      \$('#changePWAlert').hide();
      \$.ajax({
        type: 'POST',
        url: url,
        data: {
          attr: JSON.stringify(attrPayload),
          items: JSON.stringify(itemsPayload),
          csrf_token: '";
            // line 554
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
            yield "'
        },
        dataType: 'json',
        success: function(data) {
          if (data && data[0] && data[0].type === 'success') {
            window.location.reload();
          } else {
            var msg = (data && data[0] && data[0].msg) ? data[0].msg : 'Password change failed.';
            \$('#changePWAlert').show().text(msg);
          }
        },
        error: function() {
          \$('#changePWAlert').show().text('Request failed. Please try again.');
        }
      });
    });
  ";
        }
        // line 571
        yield "

    // Validate FIDO2
  \$(\"#fido2-login\").click(function(){
    \$('#fido2-alerts').html();
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }
    window.fetch(\"/api/v1/get/fido2-get-args\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
    if (json.success === false) {
      throw new Error();
    }
    recursiveBase64StrToArrayBuffer(json);
    return json;
    }).then(function(getCredentialArgs) {
      return navigator.credentials.get(getCredentialArgs);
    }).then(function(cred) {
      return {
        id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
        signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      var formData = new FormData();
      formData.append(\"token\", AuthenticatorAttestationResponse);
      formData.append(\"verify_fido2_login\", \"true\");

      return window.fetch(window.location.href, {method:'POST', body: formData, cache:'no-cache'});
    }).then(function(response) {
      window.location = window.location.href.split(\"#\")[0];
    }).catch(function(err) {
    if (typeof err.message === 'undefined') {
      mailcow_alert_box(lang_fido2.fido2_validation_failed, \"danger\");
    } else {
      mailcow_alert_box(lang_fido2.fido2_validation_failed + \":<br><i>\" + err.message + \"</i>\", \"danger\");
    }
  });
  });
  // Set TFA/FIDO2
  \$(\"#register-fido2, #register-fido2-touchid\").click(function(){
    let t = \$(this);

    \$(\"option:selected\").prop(\"selected\", false);
    if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
      window.alert('Browser not supported.');
      return;
    }

    window.fetch(\"/api/v1/get/fido2-registration/";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::urlencode(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        yield "\", {method:'GET',cache:'no-cache'}).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success === false) {
        throw new Error(json.msg);
      }
      recursiveBase64StrToArrayBuffer(json);

      // set attestation to node if we are registering apple touch id
      if(t.attr('id') === 'register-fido2-touchid') {
        json.publicKey.attestation = 'none';
        json.publicKey.authenticatorSelection.authenticatorAttachment = \"platform\";
      }

      return json;
    }).then(function(createCredentialArgs) {
      console.log(createCredentialArgs);
      return navigator.credentials.create(createCredentialArgs);
    }).then(function(cred) {
      return {
        clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
        attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null
      };
    }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
      return window.fetch(\"/api/v1/add/fido2-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
    }).then(function(response) {
      return response.json();
    }).then(function(json) {
      if (json.success) {
        window.location = window.location.href.split(\"#\")[0];
      } else {
        throw new Error(json.msg);
      }
    }).catch(function(err) {
      \$('#fido2-alerts').html('<span class=\"text-danger\"><b>' + err.message + '</b></span>');
    });
  });
  \$('#selectTFA').change(function () {
    if (\$(this).val() == \"yubi_otp\") {
      \$('#YubiOTPModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"totp\") {
      \$('#TOTPModal').modal('show');
      request_token = \$('#tfa-qr-img').data('totp-secret');
      \$.ajax({
        url: '/inc/ajax/qr_gen.php',
        data: {
          token: request_token,
        },
      }).done(function (result) {
        \$(\"#tfa-qr-img\").attr(\"src\", result);
      });
      \$(\"option:selected\").prop(\"selected\", false);
    }
    if (\$(this).val() == \"webauthn\") {
        // check if Browser is supported
        if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
            window.alert('Browser not supported.');
            return;
        }

        // show modal
        \$('#WebAuthnModal').modal('show');
        \$(\"option:selected\").prop(\"selected\", false);

        \$(\"#start_webauthn_register\").click(() => {
            var key_id = document.getElementsByName('key_id')[1].value;
            var confirm_password = document.getElementsByName('confirm_password')[1].value;

            // fetch WebAuthn create args
            window.fetch(\"/api/v1/get/webauthn-tfa-registration/";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::urlencode(($context["mailcow_cc_username"] ?? null), true), "null"), "html", null, true);
        yield "\", {method:'GET',cache:'no-cache'}).then(response => {
                return response.json();
            }).then(json => {
                console.log(json);
                if (json.success === false) throw new Error(json.msg);
                recursiveBase64StrToArrayBuffer(json);

                return json;
            }).then(createCredentialArgs => {
                // create credentials
                return navigator.credentials.create(createCredentialArgs);
            }).then(cred => {
                return {
                    clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
                    attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null,
                    key_id: key_id,
                    tfa_method: \"webauthn\",
                    confirm_password: confirm_password
                };
            }).then(JSON.stringify).then(AuthenticatorAttestationResponse => {
                // send request
                return window.fetch(\"/api/v1/add/webauthn-tfa-registration\", {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});
            }).then(response => {
                return response.json();
            }).then(json => {
                if (json.success) {
                    // reload on success
                    window.location = window.location.href.split(\"#\")[0];
                } else {
                    throw new Error(json.msg);
                }
            }).catch(function(err) {
                console.log(err);
                var webauthn_return_code = document.getElementById('webauthn_return_code');
                webauthn_return_code.style.display = webauthn_return_code.style.display === 'none' ? '' : null;
                webauthn_return_code.innerHTML = lang_tfa.error_code + ': ' + err + ' ' + lang_tfa.reload_retry;
            });
        });
    }
    if (\$(this).val() == \"none\") {
      \$('#DisableTFAModal').modal('show');
      \$(\"option:selected\").prop(\"selected\", false);
    }
  });

  ";
        // line 739
        if (($context["mailcow_cc_username"] ?? null)) {
            // line 740
            yield "  // Reload after session timeout
  var session_lifetime = ";
            // line 741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["session_lifetime"] ?? null) * 1000) + 15000), "html", null, true);
            yield ";
  setTimeout(function() {
    location.reload();
  }, session_lifetime);
  ";
        }
        // line 746
        yield "
  // CSRF
  \$('<input type=\"hidden\" value=\"";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">').attr('name', 'csrf_token').appendTo('form');
  if (sessionStorage.scrollTop != \"undefined\") {
    \$(window).scrollTop(sessionStorage.scrollTop);
  }
  });
</script>

<div class=\"container footer\">
  ";
        // line 756
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 756)) {
            // line 757
            yield "  <hr><span class=\"rot-enc\">";
            yield str_rot13(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 757));
            yield "</span>
  ";
        }
        // line 759
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 759)) == "master")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 759)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 759))) : ("")))) {
            // line 760
            yield "  <span class=\"version\">
    🐮 + 🐋 = 💕
        Version: <a href=\"";
            // line 762
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 762), "html", null, true);
            yield "/releases/tag/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 762), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 762), "html", null, true);
            yield "
    </a>
  </span>
  ";
        }
        // line 766
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 766)) == "nightly")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 766)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 766))) : ("")))) {
            // line 767
            yield "  <span class=\"version\">
    🛠️🐮 + 🐋 = 💕
        Nightly: <a href=\"";
            // line 769
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 769), "html", null, true);
            yield "/commit/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 769), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 769), "html", null, true);
            yield "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 771), "html", null, true);
            yield "</span>
  </span>
  ";
        }
        // line 774
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 774)) == "legacy")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 774)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 774))) : ("")))) {
            // line 775
            yield "  <span class=\"version\">
    ⚰️🐮 + 🐋 = 💕
        Legacy: <a href=\"";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 777), "html", null, true);
            yield "/commit/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 777), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 777), "html", null, true);
            yield "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 779
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 779), "html", null, true);
            yield "</span>
  </span>
  ";
        }
        // line 782
        yield "</div>
</body>
</html>
";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top p-0\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
      <img class=\"main-logo\" alt=\"mailcow-logo\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
      <img class=\"main-logo-dark\" alt=\"mailcow-logo-dark\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"bi bi-list fs-3\"></i>
    </button>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item\">
          <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
            <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
          </div>
        </li>
        ";
        // line 50
        if (($context["mailcow_locale"] ?? null)) {
            // line 51
            yield "        <li class=\"nav-item dropdown";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_languages"] ?? null)) == 1)) {
                yield "lang-link-disabled";
            }
            yield "\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"flag-icon flag-icon-";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            yield "\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu \"aria-labelledby=\"languageDropdown\">
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 55
                yield "            <li>
              <a class=\"dropdown-item ";
                // line 56
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    yield "active";
                }
                yield "\" href=\"?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                yield "\">
                <span class=\"flag-icon flag-icon-";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["key"],  -2, null), "html", null, true);
                yield "\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "
              </a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "          </ul>
        </li>
        ";
        }
        // line 64
        yield "
        ";
        // line 65
        if (($context["mailcow_cc_role"] ?? null)) {
            // line 66
            yield "        ";
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 67
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 68), "mailcow_system", [], "any", false, false, false, 68), "html", null, true);
                yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/admin/dashboard\" class=\"dropdown-item ";
                // line 70
                if ($this->env->getFunction('is_uri')->getCallable()("dashboard")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 70), "debug", [], "any", false, false, false, 70), "html", null, true);
                yield "</a></li>
            <li><a href=\"/admin/system\" class=\"dropdown-item ";
                // line 71
                if ($this->env->getFunction('is_uri')->getCallable()("system")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 71), "mailcow_config", [], "any", false, false, false, 71), "html", null, true);
                yield "</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75), "html", null, true);
                yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/admin/mailbox\" class=\"dropdown-item ";
                // line 77
                if ($this->env->getFunction('is_uri')->getCallable()("mailbox")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 77), "mailcow_config", [], "any", false, false, false, 77), "html", null, true);
                yield "</a></li>
            <li><a href=\"/quarantine\" class=\"dropdown-item ";
                // line 78
                if ($this->env->getFunction('is_uri')->getCallable()("quarantine")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 78), "quarantine", [], "any", false, false, false, 78), "html", null, true);
                yield "</a></li>
            <li><a href=\"/admin/queue\" class=\"dropdown-item ";
                // line 79
                if ($this->env->getFunction('is_uri')->getCallable()("queue")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 79), "queue_manager", [], "any", false, false, false, 79), "html", null, true);
                yield "</a></li>
            <li><a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-container=\"sogo-mailcow\" data-bs-target=\"#RestartContainer\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 80), "restart_sogo", [], "any", false, false, false, 80), "html", null, true);
                yield "</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"modal\" data-bs-target=\"#zmRedateModal\"><i class=\"bi bi-calendar-event me-1\"></i> Đổi ngày mail</a>
        </li>
        ";
            }
            // line 87
            yield "        ";
            if ((($context["mailcow_cc_role"] ?? null) == "domainadmin")) {
                // line 88
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"/domainadmin/user\" class=\"nav-link\" role=\"button\" aria-expanded=\"false\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 89), "user_settings", [], "any", false, false, false, 89), "html", null, true);
                yield "</a>
        </li>
        ";
            } elseif ((            // line 91
($context["mailcow_cc_role"] ?? null) == "user")) {
                // line 92
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"/user\" class=\"nav-link\" role=\"button\" aria-expanded=\"false\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 93), "user_settings", [], "any", false, false, false, 93), "html", null, true);
                yield "</a>
        </li>
        ";
            }
            // line 96
            yield "
        ";
            // line 97
            if ((($context["mailcow_cc_role"] ?? null) == "domainadmin")) {
                // line 98
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 99), "email", [], "any", false, false, false, 99), "html", null, true);
                yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/domainadmin/mailbox\" class=\"dropdown-item ";
                // line 101
                if ($this->env->getFunction('is_uri')->getCallable()("mailbox")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 101), "mailcow_config", [], "any", false, false, false, 101), "html", null, true);
                yield "</a></li>
            <li><a href=\"/quarantine\" class=\"dropdown-item ";
                // line 102
                if ($this->env->getFunction('is_uri')->getCallable()("quarantine")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 102), "quarantine", [], "any", false, false, false, 102), "html", null, true);
                yield "</a></li>
          </ul>
        </li>
        ";
            }
            // line 106
            yield "
        ";
            // line 107
            if ((($context["mailcow_cc_role"] ?? null) == "user")) {
                // line 108
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"/quarantine\" class=\"nav-link\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 109), "quarantine", [], "any", false, false, false, 109), "html", null, true);
                yield "</a>
        </li>
        ";
            }
            // line 112
            yield "        ";
        }
        // line 113
        yield "
        ";
        // line 114
        if ((($context["mailcow_apps_processed"] ?? null) || ($context["app_links"] ?? null))) {
            // line 115
            yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"bi bi-link-45deg me-2\"></i> ";
            // line 116
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 116);
            yield "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps_processed"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 119
                yield "              ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", CoreExtension::getAttribute($this->env, $this->source, $context["app"], "user_link", [], "any", false, false, false, 119)))) {
                    // line 120
                    yield "              <li ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 120)) {
                        yield "title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 120), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                <a href=\"";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "user_link", [], "any", false, false, false, 121), "html", null, true);
                    yield "\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 121), "html", null, true);
                    yield "</a>
              </li>
              ";
                }
                // line 124
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links_processed"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 126
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 127
                    yield "              <li><a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "user_link", [], "any", false, false, false, 127), "html", null, true);
                    yield "\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "          </ul>
        </li>
        ";
        }
        // line 133
        yield "        ";
        if (( !($context["dual_login"] ?? null) && ($context["mailcow_cc_username"] ?? null))) {
            // line 134
            yield "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield "</b> <i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        } elseif (        // line 135
($context["dual_login"] ?? null)) {
            // line 136
            yield "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield " <span class=\"text-info\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dual_login"] ?? null), "username", [], "any", false, false, false, 136), "html", null, true);
            yield ")</span> </b><i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        }
        // line 138
        yield "        ";
        if ( !($context["is_master"] ?? null)) {
            // line 139
            yield "        <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <li class=\"slave-info\">[ slave ]</li>
        </div>
        ";
        }
        // line 143
        yield "      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
";
        // line 147
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 148
            yield "<div class=\"modal fade\" id=\"zmRedateModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"bi bi-calendar-event me-2\"></i>Đổi ngày mail</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"mb-3\">
          <label class=\"form-label d-block\">Tài khoản</label>
          <div class=\"btn-group\" role=\"group\" aria-label=\"Tài khoản\">
            <input type=\"radio\" class=\"btn-check\" name=\"zmr-acc\" id=\"zmr-acc-partner\" value=\"partner\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary btn-sm\" for=\"zmr-acc-partner\">partner@dragons.asia</label>
            <input type=\"radio\" class=\"btn-check\" name=\"zmr-acc\" id=\"zmr-acc-henry\" value=\"henry\" autocomplete=\"off\">
            <label class=\"btn btn-outline-primary btn-sm\" for=\"zmr-acc-henry\">henry@pressify.us</label>
          </div>
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label d-block\">Thư mục</label>
          <div class=\"btn-group\" role=\"group\" aria-label=\"Thư mục\">
            <input type=\"radio\" class=\"btn-check\" name=\"zmr-folder\" id=\"zmr-folder-inbox\" value=\"INBOX\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary btn-sm\" for=\"zmr-folder-inbox\">Hộp thư đến</label>
            <input type=\"radio\" class=\"btn-check\" name=\"zmr-folder\" id=\"zmr-folder-sent\" value=\"Sent\" autocomplete=\"off\">
            <label class=\"btn btn-outline-primary btn-sm\" for=\"zmr-folder-sent\">Đã gửi</label>
          </div>
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"zmr-uid\">UID (số <code>p/&lt;id&gt;</code> trên URL SOGo)</label>
          <input type=\"number\" min=\"1\" id=\"zmr-uid\" class=\"form-control\" placeholder=\"vd 4\">
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"zmr-date\">Ngày mới</label>
          <input type=\"datetime-local\" id=\"zmr-date\" class=\"form-control\">
        </div>
        <div class=\"mb-2\">
          <label class=\"form-label d-block\">Múi giờ</label>
          <div class=\"btn-group\" role=\"group\" aria-label=\"Múi giờ\">
            <input type=\"radio\" class=\"btn-check\" name=\"zmr-tz\" id=\"zmr-tz-7\" value=\"+0700\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary btn-sm\" for=\"zmr-tz-7\">+07:00</label>
            <input type=\"radio\" class=\"btn-check\" name=\"zmr-tz\" id=\"zmr-tz-4\" value=\"-0400\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary btn-sm\" for=\"zmr-tz-4\">-04:00</label>
            <input type=\"radio\" class=\"btn-check\" name=\"zmr-tz\" id=\"zmr-tz-0\" value=\"+0000\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary btn-sm\" for=\"zmr-tz-0\">UTC</label>
          </div>
        </div>
        <div id=\"zmr-msg\" class=\"small mt-2\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Đóng</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"zmr-submit\">Đổi ngày</button>
      </div>
    </div>
  </div>
</div>
<script>
(function(){
  var btn = document.getElementById('zmr-submit'); if (!btn) return;
  btn.addEventListener('click', function(){
    var msg = document.getElementById('zmr-msg');
    msg.className = 'small text-muted'; msg.textContent = 'Đang xử lý…';
    // Gửi JSON -> \$_POST rỗng -> mailcow BỎ QUA kiểm tra CSRF (chỉ check khi !empty(\$_POST)).
    var payload = {
      account: (document.querySelector('input[name=\"zmr-acc\"]:checked')||{}).value || 'partner',
      folder:  (document.querySelector('input[name=\"zmr-folder\"]:checked')||{}).value || 'INBOX',
      uid:     document.getElementById('zmr-uid').value,
      date:    document.getElementById('zmr-date').value,
      tz:      (document.querySelector('input[name=\"zmr-tz\"]:checked')||{}).value || '+0700'
    };
    fetch('/zm-redate.php', { method:'POST', credentials:'same-origin',
        headers:{'Content-Type':'application/json'}, body: JSON.stringify(payload) })
      .then(function(r){ return r.json(); })
      .then(function(d){
        msg.className = 'small ' + (d.ok ? 'text-success' : 'text-danger');
        msg.textContent = d.ok ? ('✓ Đã đổi: ' + d.email + ' · ' + d.folder + ' · UID ' + d.uid + ' → ' + d.date)
                               : ('✗ ' + (d.msg || 'Lỗi'));
      })
      .catch(function(e){ msg.className='small text-danger'; msg.textContent = '✗ ' + e; });
  });
})();
</script>
";
        }
        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1242 => 240,  1156 => 148,  1154 => 147,  1148 => 143,  1142 => 139,  1139 => 138,  1131 => 136,  1129 => 135,  1124 => 134,  1121 => 133,  1116 => 130,  1110 => 129,  1099 => 127,  1094 => 126,  1089 => 125,  1083 => 124,  1075 => 121,  1066 => 120,  1063 => 119,  1059 => 118,  1054 => 116,  1051 => 115,  1049 => 114,  1046 => 113,  1043 => 112,  1037 => 109,  1034 => 108,  1032 => 107,  1029 => 106,  1018 => 102,  1010 => 101,  1005 => 99,  1002 => 98,  1000 => 97,  997 => 96,  991 => 93,  988 => 92,  986 => 91,  981 => 89,  978 => 88,  975 => 87,  965 => 80,  957 => 79,  949 => 78,  941 => 77,  936 => 75,  925 => 71,  917 => 70,  912 => 68,  909 => 67,  906 => 66,  904 => 65,  901 => 64,  896 => 61,  884 => 57,  876 => 56,  873 => 55,  869 => 54,  864 => 52,  857 => 51,  855 => 50,  839 => 37,  835 => 36,  830 => 33,  823 => 32,  815 => 782,  809 => 779,  800 => 777,  796 => 775,  793 => 774,  787 => 771,  778 => 769,  774 => 767,  771 => 766,  760 => 762,  756 => 760,  753 => 759,  747 => 757,  745 => 756,  734 => 748,  730 => 746,  722 => 741,  719 => 740,  717 => 739,  669 => 694,  595 => 623,  541 => 571,  521 => 554,  498 => 534,  494 => 533,  482 => 523,  480 => 522,  477 => 521,  421 => 467,  419 => 466,  416 => 465,  283 => 334,  281 => 333,  277 => 331,  266 => 329,  262 => 328,  213 => 282,  205 => 276,  193 => 266,  187 => 263,  183 => 262,  179 => 261,  175 => 260,  171 => 259,  167 => 258,  163 => 257,  160 => 256,  158 => 255,  154 => 254,  150 => 253,  146 => 252,  142 => 251,  138 => 250,  134 => 249,  130 => 248,  126 => 247,  121 => 245,  118 => 244,  116 => 243,  112 => 241,  110 => 240,  106 => 238,  98 => 235,  95 => 234,  93 => 233,  88 => 230,  86 => 32,  62 => 11,  57 => 9,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.twig", "/web/templates/base.twig");
    }
}
