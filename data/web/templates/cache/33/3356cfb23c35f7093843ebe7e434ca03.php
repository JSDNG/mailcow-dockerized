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

/* user_index.twig */
class __TwigTemplate_ca27a1f246c1ae088c9b788ebaf41f5f extends Template
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

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "user_index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"zoho-login\">
  <div class=\"zl-shell\">
   <div class=\"zl-formcol\">

    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center text-break\">
        <i class=\"bi bi-person-fill me-2\"></i> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 12), "login_user", [], "any", false, false, false, 12), "html", null, true);
        yield "
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
        ";
        // line 17
        if ( !($context["oauth2_request"] ?? null)) {
            // line 18
            yield "        <div class=\"ms-4 d-grid d-sm-block\">
          <button type=\"button\" ";
            // line 19
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_languages"] ?? null)) == 1)) {
                yield "disabled=\"true\"";
            }
            yield " class=\"text-secondary btn p-0 border-0 bg-transparent ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"flag-icon flag-icon-";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            yield "\"></span>
          </button>
          <ul class=\"dropdown-menu ms-auto login\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 24
                yield "              <li>
                <a class=\"dropdown-item ";
                // line 25
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    yield "active";
                }
                yield "\" href=\"?";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                yield "\">
                  <span class=\"flag-icon flag-icon-";
                // line 26
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
            // line 30
            yield "          </ul>
        </div>
        ";
        }
        // line 33
        yield "      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\">
          <img class=\"main-logo\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow\">
          <img class=\"main-logo-dark\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow-logo-dark\">
        </div>
        ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 39) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 39))) {
            // line 40
            yield "        <div class=\"my-4 alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 40), "html", null, true);
            yield " rot-enc ui-announcement-alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(str_rot13(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 40)), "html", null, true);
            yield "</div>
        ";
        }
        // line 42
        yield "        <legend>";
        if (($context["oauth2_request"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "oauth2", [], "any", false, false, false, 42), "authorize_app", [], "any", false, false, false, 42), "html", null, true);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 42);
        }
        yield "</legend><hr />
        ";
        // line 43
        if (($context["is_mobileconfig"] ?? null)) {
            // line 44
            yield "        <div class=\"my-4 alert alert-info \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 44), "mobileconfig_info", [], "any", false, false, false, 44), "html", null, true);
            yield "</div>
        ";
        }
        // line 46
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "force_sso", [], "any", false, false, false, 46) != 1)) {
            // line 47
            yield "        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
            yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"";
            // line 52
            if (($context["is_mobileconfig"] ?? null)) {
                yield "email";
            } else {
                yield "text";
            }
            yield "\" id=\"login_user\" class=\"form-control\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 52), "email", [], "any", false, false, false, 52), "html", null, true);
            yield "\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 56), "password", [], "any", false, false, false, 56), "html", null, true);
            yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 59), "password", [], "any", false, false, false, 59), "html", null, true);
            yield "\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"mt-2 text-muted\" style=\"font-size: 0.9rem;\">
            <a href=\"/reset-password\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 63), "forgot_password", [], "any", false, false, false, 63), "html", null, true);
            yield "</a>
          </div>
          <div class=\"d-flex justify-content-between mt-4\" style=\"position: relative\">
            <button type=\"submit\" class=\"btn btn-xs-lg btn-success w-100 mt-2 mx-auto\" style=\"max-width: 400px;\" value=\"Login\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 66), "login", [], "any", false, false, false, 66), "html", null, true);
            yield "</button>
          </div>
        </form>
        <div class=\"hr-title\"><strong>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 69), "other_logins", [], "any", false, false, false, 69), "html", null, true);
            yield "</strong></div>
        ";
        }
        // line 71
        yield "        <div class=\"d-flex flex-column align-items-center\">
          ";
        // line 72
        if (($context["has_iam_sso"] ?? null)) {
            // line 73
            yield "          <a class=\"btn btn-xs-lg btn-secondary w-100 mt-2\" style=\"max-width: 400px;\" href=\"/?iam_sso=1\"><i class=\"bi bi-cloud-arrow-up-fill\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 73), "iam_sso", [], "any", false, false, false, 73), "html", null, true);
            yield "</a>
          ";
        }
        // line 75
        yield "          ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "force_sso", [], "any", false, false, false, 75) != 1)) {
            // line 76
            yield "          <a class=\"btn btn-xs-lg btn-secondary w-100 mt-2\" style=\"max-width: 400px;\" href=\"#\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 76), "fido2_webauthn", [], "any", false, false, false, 76), "html", null, true);
            yield "</a>
          ";
        }
        // line 78
        yield "        </div>
        ";
        // line 79
        if ( !($context["oauth2_request"] ?? null)) {
            // line 80
            yield "        <div class=\"zl-social\">
          <div class=\"zl-social-title\">Đăng nhập bằng</div>
          <div class=\"zl-social-icons\">
            <span class=\"zl-soc\" title=\"Apple\"><i class=\"bi bi-apple\"></i></span>
            <span class=\"zl-soc\" title=\"Google\"><i class=\"bi bi-google\"></i></span>
            <span class=\"zl-soc\" title=\"Facebook\"><i class=\"bi bi-facebook\"></i></span>
            <span class=\"zl-soc\" title=\"LinkedIn\"><i class=\"bi bi-linkedin\"></i></span>
            <span class=\"zl-soc\" title=\"X\"><i class=\"bi bi-twitter-x\"></i></span>
            <span class=\"zl-soc\" title=\"Microsoft\"><i class=\"bi bi-microsoft\"></i></span>
          </div>
        </div>
        ";
        }
        // line 92
        yield "        ";
        if (($context["login_delay"] ?? null)) {
            // line 93
            yield "        <p><div class=\"my-4 alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 93), "delayed", [], "any", false, false, false, 93), ($context["login_delay"] ?? null)), "html", null, true);
            yield "</b></div></p>
        ";
        }
        // line 95
        yield "        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        ";
        // line 96
        if ((( !($context["oauth2_request"] ?? null) && (($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null))) &&  !($context["hide_mailcow_apps"] ?? null))) {
            // line 97
            yield "        <legend><i class=\"bi bi-link-45deg\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 97);
            yield "</legend><hr />
        <div class=\"my-2 apps\">
          ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 100
                yield "            ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["app"], "hide", [], "any", false, false, false, 100)) {
                    // line 101
                    yield "              ";
                    if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 101)))) {
                        // line 102
                        yield "              <div class=\"m-2\">
                <a href=\"";
                        // line 103
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 103), "html", null, true);
                        yield "\" role=\"button\" ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 103)) {
                            yield "title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 103), "html", null, true);
                            yield "\"";
                        }
                        yield " class=\"btn btn-primary btn-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 103), "html", null, true);
                        yield "</a>
              </div>
            ";
                    }
                    // line 106
                    yield "          ";
                }
                // line 107
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 109
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 110
                    yield "            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["val"], "hide", [], "any", false, false, false, 110)) {
                        // line 111
                        yield "              <div class=\"m-2\">
                <a href=\"";
                        // line 112
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "link", [], "any", false, false, false, 112), "html", null, true);
                        yield "\" role=\"button\" class=\"btn btn-primary btn-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "</a>
              </div>
            ";
                    }
                    // line 115
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "        </div>
        <div>
        </div>
        ";
        }
        // line 121
        yield "      </div>
    </div>

    ";
        // line 124
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_admin_quicklink", [], "any", false, false, false, 124) != 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 124) != 1))) {
            // line 125
            yield "    <p class=\"text-center mt-3 text-muted\" style=\"font-size: 0.9rem;\">
      ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 126), "login_linkstext", [], "any", false, false, false, 126), "html", null, true);
            yield "<br>
      ";
            // line 127
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_admin_quicklink", [], "any", false, false, false, 127) != 1)) {
                yield "<a href=\"/admin\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 127), "login_admintext", [], "any", false, false, false, 127), "html", null, true);
                yield "</a>";
            }
            // line 128
            yield "      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_admin_quicklink", [], "any", false, false, false, 128) != 1) && (CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 128) != 1))) {
                yield "|";
            }
            // line 129
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 129) != 1)) {
                yield "<a href=\"/domainadmin\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 129), "login_domainadmintext", [], "any", false, false, false, 129), "html", null, true);
                yield "</a>";
            }
            // line 130
            yield "    </p>
    ";
        }
        // line 132
        yield "   </div><!-- /.zl-formcol -->

   <div class=\"zl-right\">
     <div class=\"zl-illus\" aria-hidden=\"true\">
       <svg viewBox=\"0 0 200 140\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
         <rect x=\"28\" y=\"20\" width=\"144\" height=\"88\" rx=\"9\" fill=\"#e7edfb\" stroke=\"#c7d4f2\" stroke-width=\"2\"/>
         <rect x=\"44\" y=\"34\" width=\"112\" height=\"60\" rx=\"4\" fill=\"#ffffff\"/>
         <rect x=\"16\" y=\"112\" width=\"168\" height=\"10\" rx=\"5\" fill=\"#cfd8ee\"/>
         <circle cx=\"100\" cy=\"62\" r=\"22\" fill=\"#2c6fde\"/>
         <path d=\"M92 60 v-4 a8 8 0 0 1 16 0 v4\" fill=\"none\" stroke=\"#ffffff\" stroke-width=\"3\"/>
         <rect x=\"90\" y=\"60\" width=\"20\" height=\"15\" rx=\"3\" fill=\"#ffffff\"/>
         <circle cx=\"100\" cy=\"67\" r=\"2.4\" fill=\"#2c6fde\"/>
         <circle cx=\"150\" cy=\"44\" r=\"12\" fill=\"#36c172\"/>
         <path d=\"M145 44 l3.5 3.5 L156 40\" stroke=\"#ffffff\" stroke-width=\"2.4\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
       </svg>
     </div>
     <h3 class=\"zl-right-title\">Đăng nhập không cần mật khẩu</h3>
     <p class=\"zl-right-text\">Trải nghiệm đăng nhập nhanh và an toàn hơn với khoá bảo mật và xác thực sinh trắc học.</p>
     <button type=\"button\" class=\"zl-right-btn\">Tìm hiểu thêm</button>
     <div class=\"zl-dots\"><i class=\"active\"></i><i></i></div>
   </div>
  </div><!-- /.zl-shell -->

  ";
        // line 155
        if (( !($context["oauth2_request"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 155))) {
            // line 156
            yield "  <div class=\"zl-help\">
    <div class=\"card\">
      <div class=\"card-header\">
        <a class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#collapse1\"><i class=\"bi bi-patch-question-fill\"></i> ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 159), "help", [], "any", false, false, false, 159), "html", null, true);
            yield "</a>
      </div>
      <div id=\"collapse1\" class=\"card-collapse collapse\">
        <div class=\"card-body\">
          <p>";
            // line 163
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 163);
            yield "</p>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 169
        yield "</div><!-- /.zoho-login -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user_index.twig";
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
        return array (  452 => 169,  443 => 163,  436 => 159,  431 => 156,  429 => 155,  404 => 132,  400 => 130,  393 => 129,  388 => 128,  382 => 127,  378 => 126,  375 => 125,  373 => 124,  368 => 121,  362 => 117,  356 => 116,  350 => 115,  342 => 112,  339 => 111,  336 => 110,  331 => 109,  326 => 108,  320 => 107,  317 => 106,  303 => 103,  300 => 102,  297 => 101,  294 => 100,  290 => 99,  284 => 97,  282 => 96,  279 => 95,  273 => 93,  270 => 92,  256 => 80,  254 => 79,  251 => 78,  245 => 76,  242 => 75,  236 => 73,  234 => 72,  231 => 71,  226 => 69,  220 => 66,  214 => 63,  207 => 59,  201 => 56,  188 => 52,  182 => 49,  178 => 47,  175 => 46,  169 => 44,  167 => 43,  158 => 42,  150 => 40,  148 => 39,  143 => 37,  139 => 36,  134 => 33,  129 => 30,  117 => 26,  109 => 25,  106 => 24,  102 => 23,  96 => 20,  90 => 19,  87 => 18,  85 => 17,  77 => 12,  69 => 6,  62 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user_index.twig", "/web/templates/user_index.twig");
    }
}
