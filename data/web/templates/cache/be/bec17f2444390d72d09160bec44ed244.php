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

/* modals/footer.twig */
class __TwigTemplate_4c71cb52da06fb3fccc8bbd2c6cd27a2 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (($context["mailcow_cc_role"] ?? null)) {
            // line 2
            yield "<div class=\"modal fade\" id=\"YubiOTPModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"YubiOTPModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 6), "yubi_otp", [], "any", false, false, false, 6), "html", null, true);
            yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" method=\"post\">
          <div class=\"mb-4\">
            <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 12), "key_id", [], "any", false, false, false, 12), "html", null, true);
            yield "\" autocomplete=\"off\" required>
          </div>
          <hr>
          <p class=\"text-muted\">";
            // line 15
            yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 15), "api_register", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 15));
            yield "</p>
          <div class=\"mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"yubico_id\" placeholder=\"Yubico API ID\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <input type=\"text\" class=\"form-control\" name=\"yubico_key\" placeholder=\"Yubico API Key\" autocomplete=\"off\" required>
          </div>
          <hr>
          <div class=\"mb-4\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 24), "password_now", [], "any", false, false, false, 24), "html", null, true);
            yield "\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <div class=\"input-group\">
              <span class=\"input-group-text\" id=\"yubi-addon\"><img alt=\"Yubicon Icon\" src=\"/img/yubi.ico\"></span>
              <input type=\"text\" name=\"otp_token\" class=\"form-control\" placeholder=\"Touch Yubikey\" aria-describedby=\"yubi-addon\">
              <input type=\"hidden\" name=\"tfa_method\" value=\"yubi_otp\">
            </div>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" name=\"set_tfa\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 33), "save_changes", [], "any", false, false, false, 33), "html", null, true);
            yield "</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"WebAuthnModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"WebAuthnModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 44), "webauthn", [], "any", false, false, false, 44), "html", null, true);
            yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"d-flex flex-column\" role=\"form\" method=\"post\" id=\"webauthn_reg_form\">
          <div class=\"mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 50), "key_id", [], "any", false, false, false, 50), "html", null, true);
            yield "\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 53), "password_now", [], "any", false, false, false, 53), "html", null, true);
            yield "\" autocomplete=\"off\" required>
          </div>
          <hr>
          <div class=\"text-center\">
            <div style=\"cursor:pointer\" id=\"start_webauthn_register\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\">
                <path d=\"M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39-2.57 0-4.66 1.97-4.66 4.39 0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94 1.7 0 3.08 1.32 3.08 2.94 0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z\"></path>
              </svg>
              <p>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 61), "start_webauthn_validation", [], "any", false, false, false, 61), "html", null, true);
            yield "</p>
            </div>
          </div>
          <hr>
          <p id=\"webauthn_status_reg\"></p>
          <div class=\"alert alert-danger\" style=\"display:none\" id=\"webauthn_return_code\"></div>
          <input type=\"hidden\" name=\"token\" id=\"webauthn_register_data\"/>
          <input type=\"hidden\" name=\"tfa_method\" value=\"webauthn\">
          <input type=\"hidden\" name=\"set_tfa\"/><br/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"TOTPModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"TOTPModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 80), "totp", [], "any", false, false, false, 80), "html", null, true);
            yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" method=\"post\">
          <div class=\"mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 86), "key_id_totp", [], "any", false, false, false, 86), "html", null, true);
            yield "\" autocomplete=\"off\" required>
          </div>
          <div class=\"mb-4\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 89), "password_now", [], "any", false, false, false, 89), "html", null, true);
            yield "\" autocomplete=\"off\" required>
          </div>
          <hr>
          <input type=\"hidden\" value=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totp_secret"] ?? null), "html", null, true);
            yield "\" name=\"totp_secret\">
          <input type=\"hidden\" name=\"tfa_method\" value=\"totp\">
          <ol class=\"mb-4\">
            <li>
              <p>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 96), "scan_qr_code", [], "any", false, false, false, 96), "html", null, true);
            yield "</p>
              <img id=\"tfa-qr-img\" data-totp-secret=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totp_secret"] ?? null), "html", null, true);
            yield "\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=\">
              <p class=\"text-muted\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 98), "enter_qr_code", [], "any", false, false, false, 98), "html", null, true);
            yield ":<br />
                <code>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totp_secret"] ?? null), "html", null, true);
            yield "</code>
              </p>
            </li>
            <li>
              <p>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 103), "confirm_totp_token", [], "any", false, false, false, 103), "html", null, true);
            yield ":</p>
              <p><input type=\"number\" style=\"width:33%\" class=\"form-control\" name=\"totp_confirm_token\" autocomplete=\"off\" required></p>
              <p><button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" name=\"set_tfa\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 105), "confirm", [], "any", false, false, false, 105), "html", null, true);
            yield "</button></p>
            </li>
          </ol>
        </form>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"DisableTFAModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"DisableTFAModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 118), "delete_tfa", [], "any", false, false, false, 118), "html", null, true);
            yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" method=\"post\">
          <div class=\"input-group\">
            <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 124), "password_now", [], "any", false, false, false, 124), "html", null, true);
            yield "\" autocomplete=\"off\" required>
            <button class=\"btn btn-sm d-block d-sm-inline btn-danger\" type=\"submit\" name=\"set_tfa\">";
            // line 125
            yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 125), "delete_tfa", [], "any", false, false, false, 125), [" " => "&nbsp;"]);
            yield "</button>
          </div>
          <input type=\"hidden\" name=\"tfa_method\" value=\"none\">
        </form>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 134
        if (($context["pending_tfa_methods"] ?? null)) {
            // line 135
            yield "<div class=\"modal fade\" id=\"ConfirmTFAModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ConfirmTFAModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 139), "tfa", [], "any", false, false, false, 139), "html", null, true);
            yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      
      
      <div class=\"modal-body p-0 pt-4\">
        <ul class=\"nav nav-tabs px-1\" id=\"tabContent\">
            ";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "webauthn", [], "array", true, true, false, 146) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 146))) {
                // line 147
                yield "              <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tfa_tab_webauthn\" data-bs-toggle=\"tab\" id=\"pending_tfa_tab_webauthn\"><i class=\"bi bi-fingerprint\"></i> WebAuthn</a></li>
            ";
            }
            // line 149
            yield "
            ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "yubi_otp", [], "array", true, true, false, 150) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 150))) {
                // line 151
                yield "              <li class=\"nav-item\">
                <a class=\"nav-link ";
                // line 152
                if ((($__internal_compile_0 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["yubi_otp"] ?? null) : null)) {
                    yield "active";
                }
                yield "\" href=\"#tfa_tab_yubi_otp\" data-bs-toggle=\"tab\" id=\"pending_tfa_tab_yubi_otp\"><i class=\"bi bi-usb-drive\"></i> Yubi OTP</a>
              </li>
            ";
            }
            // line 155
            yield "
            ";
            // line 156
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "totp", [], "array", true, true, false, 156) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 156))) {
                // line 157
                yield "              <li class=\"nav-item\">
                <a class=\"nav-link ";
                // line 158
                if ((($__internal_compile_1 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["totp"] ?? null) : null)) {
                    yield "active";
                }
                yield "\" href=\"#tfa_tab_totp\" data-bs-toggle=\"tab\" id=\"pending_tfa_tab_totp\"><i class=\"bi bi-clock-history\"></i> Time-based OTP</a>
              </li>
            ";
            }
            // line 161
            yield "
            <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tfa_tab_hotp\" data-bs-toggle=\"tab\">HOTP</a></li> -->
            ";
            // line 163
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 163)) {
                // line 164
                yield "              <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tfa_tab_u2f\" data-bs-toggle=\"tab\"><i class=\"bi bi-x-octagon\"></i> U2F</a></li>
            ";
            }
            // line 166
            yield "        </ul>

        <div class=\"tab-content\">
          ";
            // line 169
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "webauthn", [], "array", true, true, false, 169) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 169))) {
                // line 170
                yield "            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tfa_tab_webauthn\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    <form role=\"form\" method=\"post\" id=\"webauthn_auth_form\">
                      <legend class=\"mt-2 mb-2\">
                          <i class=\"bi bi-shield-fill-check\"></i>
                          ";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 176), "authenticators", [], "any", false, false, false, 176), "html", null, true);
                yield "
                          <hr />
                      </legend>
                      <div class=\"list-group\">
                        ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["pending_tfa_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 181
                    yield "                          ";
                    if (((($__internal_compile_2 = $context["authenticator"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["authmech"] ?? null) : null) == "webauthn")) {
                        // line 182
                        yield "                            <a href=\"#\" class=\"list-group-item webauthn-authenticator-selection\">
                              <i class=\"bi bi-key-fill\" style=\"margin-right: 5px\"></i>
                              <span>";
                        // line 184
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = $context["authenticator"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["key_id"] ?? null) : null), "html", null, true);
                        yield "</span>
                              <input type=\"hidden\" value=\"";
                        // line 185
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["authenticator"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                        yield "\" /><br/>
                            </a>
                          ";
                    }
                    // line 188
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['authenticator'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                yield "                      </div>
                      <div class=\"collapse pending-tfa-collapse\" id=\"collapseWebAuthnTFA\">
                        <div class=\"row mt-4 mb-4\">
                          <div class=\"col-12\">
                            <div class=\"mt-4 d-flex align-items-center\" id=\"webauthn_status_auth\">
                              <div class=\"spinner-border me-2\" role=\"status\">
                                <span class=\"visually-hidden\">Loading...</span>
                              </div>
                              ";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 197), "init_webauthn", [], "any", false, false, false, 197), "html", null, true);
                yield "
                            </div>
                            <div class=\"mt-4 alert alert-danger\" style=\"display:none\" id=\"webauthn_return_code\"></div>
                          </div>
                        </div>
                      </div>
                      <input type=\"hidden\" name=\"token\" id=\"webauthn_auth_data\"/>
                      <input type=\"hidden\" name=\"tfa_method\" value=\"webauthn\">
                      <input type=\"hidden\" name=\"verify_tfa_login\"/>
                      <input type=\"hidden\" name=\"id\" id=\"webauthn_selected_id\" /><br/>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 212
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "yubi_otp", [], "array", true, true, false, 212) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 212))) {
                // line 213
                yield "            <div role=\"tabpanel\" class=\"tab-pane ";
                if ((($__internal_compile_5 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["yubi_otp"] ?? null) : null)) {
                    yield "active";
                }
                yield "\" id=\"tfa_tab_yubi_otp\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    <form role=\"form\" method=\"post\">
                      <legend class=\"mt-2 mb-2\">
                          <i class=\"bi bi-shield-fill-check\"></i>
                          ";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 219), "authenticators", [], "any", false, false, false, 219), "html", null, true);
                yield "
                          <hr />
                      </legend>
                      <div class=\"collapse show pending-tfa-collapse\" id=\"collapseYubiTFA\">
                        <div class=\"row mt-4 mb-4\">
                          <div class=\"col-12\">
                            <div class=\"input-group mt-4\">
                              <span class=\"input-group-text\" id=\"yubi-addon\"><img alt=\"Yubicon Icon\" src=\"/img/yubi.ico\"></span>
                              <input type=\"text\" name=\"token\" class=\"form-control\" autocomplete=\"off\" placeholder=\"Touch Yubikey\" aria-describedby=\"yubi-addon\">
                              <input type=\"hidden\" name=\"tfa_method\" value=\"yubi_otp\">
                              <input type=\"hidden\" name=\"id\" id=\"yubi_selected_id\" />
                            </div>
                          </div>
                        </div>
                        <button class=\"btn btn-sm visible-xs-block visible-sm-inline visible-md-inline visible-lg-inline btn-secondary\" type=\"submit\" name=\"verify_tfa_login\">";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 233), "login", [], "any", false, false, false, 233), "html", null, true);
                yield "</button>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 240
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "totp", [], "array", true, true, false, 240) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 240))) {
                // line 241
                yield "            <div role=\"tabpanel\" class=\"tab-pane ";
                if ((($__internal_compile_6 = ($context["pending_tfa_authmechs"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["totp"] ?? null) : null)) {
                    yield "active";
                }
                yield "\" id=\"tfa_tab_totp\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    <form role=\"form\" method=\"post\">        
                      <legend class=\"mt-2 mb-2\">
                          <i class=\"bi bi-shield-fill-check\"></i>
                          ";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 247), "authenticators", [], "any", false, false, false, 247), "html", null, true);
                yield "
                          <hr />
                      </legend>
                      <div class=\"list-group\">
                        ";
                // line 251
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["pending_tfa_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 252
                    yield "                          ";
                    if (((($__internal_compile_7 = $context["authenticator"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["authmech"] ?? null) : null) == "totp")) {
                        // line 253
                        yield "                            <a href=\"#\" class=\"list-group-item totp-authenticator-selection\">
                              <i class=\"bi bi-key-fill\" style=\"margin-right: 5px\"></i>
                              <span>";
                        // line 255
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = $context["authenticator"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["key_id"] ?? null) : null), "html", null, true);
                        yield "</span>
                              <input type=\"hidden\" value=\"";
                        // line 256
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = $context["authenticator"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null), "html", null, true);
                        yield "\" />
                            </a>
                          ";
                    }
                    // line 259
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['authenticator'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                yield "                      </div>
                      <div class=\"collapse pending-tfa-collapse\" id=\"collapseTotpTFA\">
                        <div class=\"row mt-4 mb-4\">
                          <div class=\"col-12\">
                            <div class=\"input-group mt-4\">
                              <span class=\"input-group-text\" id=\"tfa-addon\"><i class=\"bi bi-shield-lock-fill\"></i></span>
                              <input type=\"number\" min=\"000000\" max=\"999999\" name=\"token\" class=\"form-control\" placeholder=\"123456\" autocomplete=\"one-time-code\" aria-describedby=\"tfa-addon\">
                              <input type=\"hidden\" name=\"tfa_method\" value=\"totp\">
                              <input type=\"hidden\" name=\"id\" id=\"totp_selected_id\" /><br/>
                            </div>
                            <button class=\"mt-4 btn btn-sm visible-xs-block visible-sm-inline visible-md-inline visible-lg-inline btn-secondary\" type=\"submit\" name=\"verify_tfa_login\">";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 270), "login", [], "any", false, false, false, 270), "html", null, true);
                yield "</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 279
            yield "            <!--
            <div role=\"tabpanel\" class=\"tab-pane\" id=\"tfa_tab_hotp\">
              <div class=\"card\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                      <div class=\"empty\"></div>
                  </div>
              </div>
            </div>
            -->
          ";
            // line 288
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["pending_tfa_authmechs"] ?? null), "u2f", [], "array", true, true, false, 288)) {
                // line 289
                yield "            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tfa_tab_u2f\">
              <div class=\"card border-0\" style=\"margin-bottom: 0px;\">
                  <div class=\"card-body\">
                    ";
                // line 293
                yield "                    <form role=\"form\" method=\"post\" id=\"u2f_auth_form\">
                      <div>
                        <p>";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 295), "u2f_deprecated", [], "any", false, false, false, 295), "html", null, true);
                yield "</p>
                        <p><b>";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 296), "u2f_deprecated_important", [], "any", false, false, false, 296), "html", null, true);
                yield "</b></p>
                        <input type=\"hidden\" name=\"token\" value=\"destroy\" />
                        <input type=\"hidden\" name=\"tfa_method\" value=\"u2f\">
                        <input type=\"hidden\" name=\"verify_tfa_login\"/><br/>
                        <button type=\"submit\" class=\"btn btn-xs-lg btn-success\" value=\"Login\">";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 300), "login", [], "any", false, false, false, 300), "html", null, true);
                yield "</button>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          ";
            }
            // line 307
            yield "        </div>

      </div>
    </div>
  </div>
</div>
";
        }
        // line 314
        if (($context["pending_tfa_setup"] ?? null)) {
            // line 315
            yield "<div class=\"modal fade\" id=\"SetupTFAModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"SetupTFAModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 319), "setup_title", [], "any", false, false, false, 319), "html", null, true);
            yield "</h3>
        <form method=\"post\" class=\"d-inline\">
          <button type=\"submit\" name=\"logout\" value=\"1\" class=\"btn-close\" aria-label=\"Close\"></button>
        </form>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-warning\">
          <i class=\"bi bi-shield-exclamation\"></i> ";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 326), "setup_required", [], "any", false, false, false, 326), "html", null, true);
            yield "
        </div>
        <ul class=\"nav nav-tabs mb-3\" id=\"setupTFATabNav\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#setup_tab_totp\" data-bs-toggle=\"tab\"><i class=\"bi bi-clock-history\"></i> Time-based OTP</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#setup_tab_webauthn\" data-bs-toggle=\"tab\"><i class=\"bi bi-fingerprint\"></i> WebAuthn</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#setup_tab_yubi\" data-bs-toggle=\"tab\"><i class=\"bi bi-usb-drive\"></i> Yubi OTP</a>
          </li>
        </ul>
        <div class=\"tab-content\">
          <div role=\"tabpanel\" class=\"tab-pane active\" id=\"setup_tab_totp\">
            <form role=\"form\" method=\"post\" id=\"setup_totp_form\">
              <div class=\"mb-2\">
                <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 343), "key_id_totp", [], "any", false, false, false, 343), "html", null, true);
            yield "\" autocomplete=\"off\" required>
              </div>
              <hr>
              <input type=\"hidden\" value=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totp_secret"] ?? null), "html", null, true);
            yield "\" name=\"totp_secret\">
              <input type=\"hidden\" name=\"tfa_method\" value=\"totp\">
              <ol class=\"mb-4\">
                <li>
                  <p>";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 350), "scan_qr_code", [], "any", false, false, false, 350), "html", null, true);
            yield "</p>
                  <img id=\"setup-tfa-qr-img\" data-totp-secret=\"";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totp_secret"] ?? null), "html", null, true);
            yield "\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=\">
                  <p class=\"text-muted\">";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 352), "enter_qr_code", [], "any", false, false, false, 352), "html", null, true);
            yield ":<br />
                    <code>";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totp_secret"] ?? null), "html", null, true);
            yield "</code>
                  </p>
                </li>
                <li>
                  <p>";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 357), "confirm_totp_token", [], "any", false, false, false, 357), "html", null, true);
            yield ":</p>
                  <p><input type=\"number\" style=\"width:33%\" class=\"form-control\" name=\"totp_confirm_token\" autocomplete=\"off\" required></p>
                  <p><button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" name=\"set_tfa\">";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 359), "confirm", [], "any", false, false, false, 359), "html", null, true);
            yield "</button></p>
                </li>
              </ol>
            </form>
          </div>
          <div role=\"tabpanel\" class=\"tab-pane\" id=\"setup_tab_webauthn\">
            <form class=\"d-flex flex-column\" role=\"form\" method=\"post\" id=\"setup_webauthn_reg_form\">
              <div class=\"mb-2\">
                <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 367), "key_id", [], "any", false, false, false, 367), "html", null, true);
            yield "\" autocomplete=\"off\" required>
              </div>
              <hr>
              <div class=\"text-center\">
                <div style=\"cursor:pointer\" id=\"start_setup_webauthn_register\">
                  <i class=\"bi bi-fingerprint\" style=\"font-size:4rem\"></i>
                  <p>";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 373), "start_webauthn_validation", [], "any", false, false, false, 373), "html", null, true);
            yield "</p>
                </div>
              </div>
              <hr>
              <p id=\"setup_webauthn_status_reg\"></p>
              <div class=\"alert alert-danger\" style=\"display:none\" id=\"setup_webauthn_return_code\"></div>
              <input type=\"hidden\" name=\"token\" id=\"setup_webauthn_register_data\"/>
              <input type=\"hidden\" name=\"tfa_method\" value=\"webauthn\">
              <input type=\"hidden\" name=\"set_tfa\"/><br/>
            </form>
          </div>
          <div role=\"tabpanel\" class=\"tab-pane\" id=\"setup_tab_yubi\">
            <form role=\"form\" method=\"post\">
              <div class=\"mb-4\">
                <input type=\"text\" class=\"form-control\" name=\"key_id\" placeholder=\"";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 387), "key_id", [], "any", false, false, false, 387), "html", null, true);
            yield "\" autocomplete=\"off\" required>
              </div>
              <hr>
              <p class=\"text-muted\">";
            // line 390
            yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 390), "api_register", [], "any", false, false, false, 390), CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 390));
            yield "</p>
              <div class=\"mb-2\">
                <input type=\"text\" class=\"form-control\" name=\"yubico_id\" placeholder=\"Yubico API ID\" autocomplete=\"off\" required>
              </div>
              <div class=\"mb-4\">
                <input type=\"text\" class=\"form-control\" name=\"yubico_key\" placeholder=\"Yubico API Key\" autocomplete=\"off\" required>
              </div>
              <hr>
              <div class=\"mb-4\">
                <div class=\"input-group\">
                  <span class=\"input-group-text\" id=\"yubi-setup-addon\"><img alt=\"Yubicon Icon\" src=\"/img/yubi.ico\"></span>
                  <input type=\"text\" name=\"otp_token\" class=\"form-control\" placeholder=\"Touch Yubikey\" aria-describedby=\"yubi-setup-addon\">
                  <input type=\"hidden\" name=\"tfa_method\" value=\"yubi_otp\">
                </div>
              </div>
              <button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" name=\"set_tfa\">";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 405), "save_changes", [], "any", false, false, false, 405), "html", null, true);
            yield "</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 414
        if ((($context["pending_pw_update_modal"] ?? null) &&  !($context["pending_tfa_methods"] ?? null))) {
            // line 415
            yield "<div class=\"modal fade\" id=\"ChangePWModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ChangePWModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 419), "change_password", [], "any", false, false, false, 419), "html", null, true);
            yield "</h3>
        <form method=\"post\" class=\"d-inline\">
          <button type=\"submit\" name=\"logout\" value=\"1\" class=\"btn-close\" aria-label=\"Close\"></button>
        </form>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-warning\">
          <i class=\"bi bi-key\"></i> ";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 426), "pw_update_required", [], "any", false, false, false, 426), "html", null, true);
            yield "
        </div>
        <form role=\"form\" id=\"changePWModalForm\">
          <div class=\"mb-3\">
            <input type=\"password\" class=\"form-control\" id=\"changePWNew\" placeholder=\"";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 430), "new_password", [], "any", false, false, false, 430), "html", null, true);
            yield "\" autocomplete=\"new-password\" required>
          </div>
          <div class=\"mb-4\">
            <input type=\"password\" class=\"form-control\" id=\"changePWNew2\" placeholder=\"";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 433), "new_password_repeat", [], "any", false, false, false, 433), "html", null, true);
            yield "\" autocomplete=\"new-password\" required>
          </div>
          <div id=\"changePWAlert\" class=\"alert alert-danger\" style=\"display:none\"></div>
          <button class=\"btn btn-sm btn-success\" type=\"submit\">";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 436), "save_changes", [], "any", false, false, false, 436), "html", null, true);
            yield "</button>
        </form>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 443
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 444
            yield "<div id=\"RestartContainer\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title\">";
            // line 448
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 448), "restart_container", [], "any", false, false, false, 448), "html", null, true);
            yield " (<code id=\"containerName\"></code>)</h4>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
            // line 452
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 452), "restart_container_info", [], "any", false, false, false, 452);
            yield "</p>
        <hr>
        <button class=\"btn btn-md d-block d-sm-inline btn-primary\" id=\"triggerRestartContainer\">";
            // line 454
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 454), "restart_now", [], "any", false, false, false, 454), "html", null, true);
            yield "</button>
        <br><br>
        <div id=\"statusTriggerRestartContainer\"></div>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 462
        yield "<div id=\"ConfirmDeleteModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 466), "confirm_delete", [], "any", false, false, false, 466), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p id=\"DeleteText\">";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 470), "delete_these_items", [], "any", false, false, false, 470), "html", null, true);
        yield "</p>
        <ul id=\"ItemsToDelete\"></ul>
        <hr>
        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-danger\" id=\"IsConfirmed\">";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 473), "delete_now", [], "any", false, false, false, 473), "html", null, true);
        yield "</button>
        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"isCanceled\">";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "footer", [], "any", false, false, false, 474), "cancel", [], "any", false, false, false, 474), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
<!-- version modal -->
<div class=\"modal fade\" id=\"showVersionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"></h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body d-flex flex-column mt-2 p-4\">
        <div class=\"spinner-border mx-auto\" role=\"status\">
          <span class=\"visually-hidden\">Loading...</span>
        </div>
      </div>
    </div>
  </div>
</div><!-- version modal -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modals/footer.twig";
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
        return array (  803 => 474,  799 => 473,  793 => 470,  786 => 466,  780 => 462,  769 => 454,  764 => 452,  757 => 448,  751 => 444,  749 => 443,  739 => 436,  733 => 433,  727 => 430,  720 => 426,  710 => 419,  704 => 415,  702 => 414,  690 => 405,  672 => 390,  666 => 387,  649 => 373,  640 => 367,  629 => 359,  624 => 357,  617 => 353,  613 => 352,  609 => 351,  605 => 350,  598 => 346,  592 => 343,  572 => 326,  562 => 319,  556 => 315,  554 => 314,  545 => 307,  535 => 300,  528 => 296,  524 => 295,  520 => 293,  515 => 289,  513 => 288,  502 => 279,  490 => 270,  478 => 260,  472 => 259,  466 => 256,  462 => 255,  458 => 253,  455 => 252,  451 => 251,  444 => 247,  432 => 241,  429 => 240,  419 => 233,  402 => 219,  390 => 213,  387 => 212,  369 => 197,  359 => 189,  353 => 188,  347 => 185,  343 => 184,  339 => 182,  336 => 181,  332 => 180,  325 => 176,  317 => 170,  315 => 169,  310 => 166,  306 => 164,  304 => 163,  300 => 161,  292 => 158,  289 => 157,  287 => 156,  284 => 155,  276 => 152,  273 => 151,  271 => 150,  268 => 149,  264 => 147,  262 => 146,  252 => 139,  246 => 135,  244 => 134,  232 => 125,  228 => 124,  219 => 118,  203 => 105,  198 => 103,  191 => 99,  187 => 98,  183 => 97,  179 => 96,  172 => 92,  166 => 89,  160 => 86,  151 => 80,  129 => 61,  118 => 53,  112 => 50,  103 => 44,  89 => 33,  77 => 24,  65 => 15,  59 => 12,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modals/footer.twig", "/web/templates/modals/footer.twig");
    }
}
