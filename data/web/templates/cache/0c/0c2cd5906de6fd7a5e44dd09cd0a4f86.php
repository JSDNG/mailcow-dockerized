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
class __TwigTemplate_7401e5b172651a02579ead11c6d81427 extends Template
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
        // line 31
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 144
        yield "
<form action=\"/\" method=\"post\" id=\"logout\"><input type=\"hidden\" name=\"logout\"></form>

";
        // line 147
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 147) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 147)) &&  !($context["is_root_uri"] ?? null)) && ($context["mailcow_cc_username"] ?? null))) {
            // line 148
            yield "<div class=\"container mt-4\">
  <div class=\"alert alert-";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 149), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 149), "html", null, true);
            yield "</div>
</div>
";
        }
        // line 152
        yield "
<div class=\"container flex-grow-1 my-4\">
";
        // line 154
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 155
        yield "</div>

";
        // line 157
        yield from         $this->loadTemplate("modals/footer.twig", "base.twig", 157)->unwrap()->yield($context);
        // line 158
        yield "
<script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_path"] ?? null), "html", null, true);
        yield "\"></script>
<script>
  var lang_footer = ";
        // line 161
        yield ($context["lang_footer"] ?? null);
        yield ";
  var lang_acl = ";
        // line 162
        yield ($context["lang_acl"] ?? null);
        yield ";
  var lang_tfa = ";
        // line 163
        yield ($context["lang_tfa"] ?? null);
        yield ";
  var lang_fido2 = ";
        // line 164
        yield ($context["lang_fido2"] ?? null);
        yield ";
  var lang_success = ";
        // line 165
        yield ($context["lang_success"] ?? null);
        yield ";
  var lang_danger = ";
        // line 166
        yield ($context["lang_danger"] ?? null);
        yield ";
  var docker_timeout = ";
        // line 167
        yield ($context["docker_timeout"] ?? null);
        yield " * 1000;
  var mailcow_cc_role = '";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_role"] ?? null), "html", null, true);
        yield "';
  ";
        // line 169
        if (($context["mailcow_cc_username"] ?? null)) {
            // line 170
            yield "  var mailcow_info = {
    version_tag: '";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 171), "html", null, true);
            yield "',
    last_version_tag: '";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "last_version_tag", [], "any", false, false, false, 172), "html", null, true);
            yield "',
    updatedAt: '";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "updated_at", [], "any", false, false, false, 173), "html", null, true);
            yield "',
    project_url: '";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 174), "html", null, true);
            yield "',
    project_owner: '";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_owner", [], "any", false, false, false, 175), "html", null, true);
            yield "',
    project_repo: '";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_repo", [], "any", false, false, false, 176), "html", null, true);
            yield "',
    branch: '";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 177), "html", null, true);
            yield "'
  };
  ";
        } else {
            // line 180
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
        // line 190
        yield "
\$(window).scroll(function() {
  sessionStorage.scrollTop = \$(this).scrollTop();
});
// Select language and reopen active URL without POST
function setLang(sel) {
  \$.post( '";
        // line 196
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
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["alert_type"] => $context["alert_msg"]) {
            // line 243
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
        // line 245
        yield "
    // Confirm TFA modal
  ";
        // line 247
        if (($context["pending_tfa_methods"] ?? null)) {
            // line 248
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
        // line 379
        yield "
  ";
        // line 380
        if (($context["pending_tfa_setup"] ?? null)) {
            // line 381
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
        // line 435
        yield "
  ";
        // line 436
        if (((($context["pending_pw_update_modal"] ?? null) &&  !($context["pending_tfa_setup"] ?? null)) &&  !($context["pending_tfa_methods"] ?? null))) {
            // line 437
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
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_role"] ?? null), "html", null, true);
            yield "';
      var username = '";
            // line 448
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
            // line 468
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
        // line 485
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
        // line 537
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
        // line 608
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
        // line 653
        if (($context["mailcow_cc_username"] ?? null)) {
            // line 654
            yield "  // Reload after session timeout
  var session_lifetime = ";
            // line 655
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["session_lifetime"] ?? null) * 1000) + 15000), "html", null, true);
            yield ";
  setTimeout(function() {
    location.reload();
  }, session_lifetime);
  ";
        }
        // line 660
        yield "
  // CSRF
  \$('<input type=\"hidden\" value=\"";
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">').attr('name', 'csrf_token').appendTo('form');
  if (sessionStorage.scrollTop != \"undefined\") {
    \$(window).scrollTop(sessionStorage.scrollTop);
  }
  });
</script>

<div class=\"container footer\">
  ";
        // line 670
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 670)) {
            // line 671
            yield "  <hr><span class=\"rot-enc\">";
            yield str_rot13(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 671));
            yield "</span>
  ";
        }
        // line 673
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 673)) == "master")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 673)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 673))) : ("")))) {
            // line 674
            yield "  <span class=\"version\">
    🐮 + 🐋 = 💕
        Version: <a href=\"";
            // line 676
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 676), "html", null, true);
            yield "/releases/tag/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 676), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 676), "html", null, true);
            yield "
    </a>
  </span>
  ";
        }
        // line 680
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 680)) == "nightly")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 680)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 680))) : ("")))) {
            // line 681
            yield "  <span class=\"version\">
    🛠️🐮 + 🐋 = 💕
        Nightly: <a href=\"";
            // line 683
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 683), "html", null, true);
            yield "/commit/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 683), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 683), "html", null, true);
            yield "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 685
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 685), "html", null, true);
            yield "</span>
  </span>
  ";
        }
        // line 688
        yield "  ";
        if (((($context["mailcow_cc_username"] ?? null) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "mailcow_branch", [], "any", false, false, false, 688)) == "legacy")) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", true, true, false, 688)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 688))) : ("")))) {
            // line 689
            yield "  <span class=\"version\">
    ⚰️🐮 + 🐋 = 💕
        Legacy: <a href=\"";
            // line 691
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_project_url", [], "any", false, false, false, 691), "html", null, true);
            yield "/commit/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit", [], "any", false, false, false, 691), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 691), "html", null, true);
            yield "
    </a><br>
    <span style=\"text-align:right;display:block;\">Build: ";
            // line 693
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "git_commit_date", [], "any", false, false, false, 693), "html", null, true);
            yield "</span>
  </span>
  ";
        }
        // line 696
        yield "</div>
</body>
</html>
";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top p-0\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
      <img class=\"main-logo\" alt=\"mailcow-logo\" src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
      <img class=\"main-logo-dark\" alt=\"mailcow-logo-dark\" src=\"";
        // line 36
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
        // line 49
        if (($context["mailcow_locale"] ?? null)) {
            // line 50
            yield "        <li class=\"nav-item dropdown";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_languages"] ?? null)) == 1)) {
                yield "lang-link-disabled";
            }
            yield "\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"flag-icon flag-icon-";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            yield "\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu \"aria-labelledby=\"languageDropdown\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 54
                yield "            <li>
              <a class=\"dropdown-item ";
                // line 55
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    yield "active";
                }
                yield "\" href=\"?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                yield "\">
                <span class=\"flag-icon flag-icon-";
                // line 56
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
            // line 60
            yield "          </ul>
        </li>
        ";
        }
        // line 63
        yield "
        ";
        // line 64
        if (($context["mailcow_cc_role"] ?? null)) {
            // line 65
            yield "        ";
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 66
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 67), "mailcow_system", [], "any", false, false, false, 67), "html", null, true);
                yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/admin/dashboard\" class=\"dropdown-item ";
                // line 69
                if ($this->env->getFunction('is_uri')->getCallable()("dashboard")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 69), "debug", [], "any", false, false, false, 69), "html", null, true);
                yield "</a></li>
            <li><a href=\"/admin/system\" class=\"dropdown-item ";
                // line 70
                if ($this->env->getFunction('is_uri')->getCallable()("system")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 70), "mailcow_config", [], "any", false, false, false, 70), "html", null, true);
                yield "</a></li>
          </ul>
        </li>
        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 74), "email", [], "any", false, false, false, 74), "html", null, true);
                yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/admin/mailbox\" class=\"dropdown-item ";
                // line 76
                if ($this->env->getFunction('is_uri')->getCallable()("mailbox")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 76), "mailcow_config", [], "any", false, false, false, 76), "html", null, true);
                yield "</a></li>
            <li><a href=\"/quarantine\" class=\"dropdown-item ";
                // line 77
                if ($this->env->getFunction('is_uri')->getCallable()("quarantine")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 77), "quarantine", [], "any", false, false, false, 77), "html", null, true);
                yield "</a></li>
            <li><a href=\"/admin/queue\" class=\"dropdown-item ";
                // line 78
                if ($this->env->getFunction('is_uri')->getCallable()("queue")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 78), "queue_manager", [], "any", false, false, false, 78), "html", null, true);
                yield "</a></li>
            <li><a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-container=\"sogo-mailcow\" data-bs-target=\"#RestartContainer\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 79), "restart_sogo", [], "any", false, false, false, 79), "html", null, true);
                yield "</a></li>
          </ul>
        </li>
        ";
            }
            // line 83
            yield "        ";
            if ((($context["mailcow_cc_role"] ?? null) == "domainadmin")) {
                // line 84
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"/domainadmin/user\" class=\"nav-link\" role=\"button\" aria-expanded=\"false\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 85), "user_settings", [], "any", false, false, false, 85), "html", null, true);
                yield "</a>
        </li>
        ";
            } elseif ((            // line 87
($context["mailcow_cc_role"] ?? null) == "user")) {
                // line 88
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"/user\" class=\"nav-link\" role=\"button\" aria-expanded=\"false\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 89), "user_settings", [], "any", false, false, false, 89), "html", null, true);
                yield "</a>
        </li>
        ";
            }
            // line 92
            yield "
        ";
            // line 93
            if ((($context["mailcow_cc_role"] ?? null) == "domainadmin")) {
                // line 94
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 95), "email", [], "any", false, false, false, 95), "html", null, true);
                yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"/domainadmin/mailbox\" class=\"dropdown-item ";
                // line 97
                if ($this->env->getFunction('is_uri')->getCallable()("mailbox")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 97), "mailcow_config", [], "any", false, false, false, 97), "html", null, true);
                yield "</a></li>
            <li><a href=\"/quarantine\" class=\"dropdown-item ";
                // line 98
                if ($this->env->getFunction('is_uri')->getCallable()("quarantine")) {
                    yield "active";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 98), "quarantine", [], "any", false, false, false, 98), "html", null, true);
                yield "</a></li>
          </ul>
        </li>
        ";
            }
            // line 102
            yield "
        ";
            // line 103
            if ((($context["mailcow_cc_role"] ?? null) == "user")) {
                // line 104
                yield "        <li class=\"nav-item dropdown\">
          <a href=\"/quarantine\" class=\"nav-link\">";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 105), "quarantine", [], "any", false, false, false, 105), "html", null, true);
                yield "</a>
        </li>
        ";
            }
            // line 108
            yield "        ";
        }
        // line 109
        yield "
        ";
        // line 110
        if ((($context["mailcow_apps_processed"] ?? null) || ($context["app_links"] ?? null))) {
            // line 111
            yield "        <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"bi bi-link-45deg me-2\"></i> ";
            // line 112
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 112);
            yield "</a>
          <ul class=\"dropdown-menu\">
            ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps_processed"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 115
                yield "              ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", CoreExtension::getAttribute($this->env, $this->source, $context["app"], "user_link", [], "any", false, false, false, 115)))) {
                    // line 116
                    yield "              <li ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 116)) {
                        yield "title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 116), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                <a href=\"";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "user_link", [], "any", false, false, false, 117), "html", null, true);
                    yield "\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 117), "html", null, true);
                    yield "</a>
              </li>
              ";
                }
                // line 120
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links_processed"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 122
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 123
                    yield "              <li><a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "user_link", [], "any", false, false, false, 123), "html", null, true);
                    yield "\" class=\"dropdown-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "          </ul>
        </li>
        ";
        }
        // line 129
        yield "        ";
        if (( !($context["dual_login"] ?? null) && ($context["mailcow_cc_username"] ?? null))) {
            // line 130
            yield "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield "</b> <i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        } elseif (        // line 131
($context["dual_login"] ?? null)) {
            // line 132
            yield "        <li class=\"logged-in-as nav-item\"><a href=\"#\" onclick=\"logout.submit()\" class=\"nav-link\"><b class=\"username-lia\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield " <span class=\"text-info\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dual_login"] ?? null), "username", [], "any", false, false, false, 132), "html", null, true);
            yield ")</span> </b><i class=\"bi bi-power ms-2\"></i></a></li>
        ";
        }
        // line 134
        yield "        ";
        if ( !($context["is_master"] ?? null)) {
            // line 135
            yield "        <div class=\"nav-link form-check form-switch my-auto d-flex align-items-center\">
            <li class=\"slave-info\">[ slave ]</li>
        </div>
        ";
        }
        // line 139
        yield "      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
";
        yield from [];
    }

    // line 154
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
        return array (  1153 => 154,  1144 => 139,  1138 => 135,  1135 => 134,  1127 => 132,  1125 => 131,  1120 => 130,  1117 => 129,  1112 => 126,  1106 => 125,  1095 => 123,  1090 => 122,  1085 => 121,  1079 => 120,  1071 => 117,  1062 => 116,  1059 => 115,  1055 => 114,  1050 => 112,  1047 => 111,  1045 => 110,  1042 => 109,  1039 => 108,  1033 => 105,  1030 => 104,  1028 => 103,  1025 => 102,  1014 => 98,  1006 => 97,  1001 => 95,  998 => 94,  996 => 93,  993 => 92,  987 => 89,  984 => 88,  982 => 87,  977 => 85,  974 => 84,  971 => 83,  964 => 79,  956 => 78,  948 => 77,  940 => 76,  935 => 74,  924 => 70,  916 => 69,  911 => 67,  908 => 66,  905 => 65,  903 => 64,  900 => 63,  895 => 60,  883 => 56,  875 => 55,  872 => 54,  868 => 53,  863 => 51,  856 => 50,  854 => 49,  838 => 36,  834 => 35,  829 => 32,  822 => 31,  814 => 696,  808 => 693,  799 => 691,  795 => 689,  792 => 688,  786 => 685,  777 => 683,  773 => 681,  770 => 680,  759 => 676,  755 => 674,  752 => 673,  746 => 671,  744 => 670,  733 => 662,  729 => 660,  721 => 655,  718 => 654,  716 => 653,  668 => 608,  594 => 537,  540 => 485,  520 => 468,  497 => 448,  493 => 447,  481 => 437,  479 => 436,  476 => 435,  420 => 381,  418 => 380,  415 => 379,  282 => 248,  280 => 247,  276 => 245,  265 => 243,  261 => 242,  212 => 196,  204 => 190,  192 => 180,  186 => 177,  182 => 176,  178 => 175,  174 => 174,  170 => 173,  166 => 172,  162 => 171,  159 => 170,  157 => 169,  153 => 168,  149 => 167,  145 => 166,  141 => 165,  137 => 164,  133 => 163,  129 => 162,  125 => 161,  120 => 159,  117 => 158,  115 => 157,  111 => 155,  109 => 154,  105 => 152,  97 => 149,  94 => 148,  92 => 147,  87 => 144,  85 => 31,  62 => 11,  57 => 9,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.twig", "/web/templates/base.twig");
    }
}
