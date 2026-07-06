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

/* admin_index.twig */
class __TwigTemplate_db11af9ec54629f5c68d697d11b61659 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "admin_index.twig", 1);
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
        yield "<div class=\"row mb-4\" style=\"margin-top: 60px\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">

    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center text-break\">
        <i class=\"bi bi-person-fill me-2\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 11), "login_admin", [], "any", false, false, false, 11), "html", null, true);
        yield "
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
        <div class=\"ms-4 d-grid d-sm-block\">
          <button type=\"button\" ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_languages"] ?? null)) == 1)) {
            yield "disabled=\"true\"";
        }
        yield " class=\"text-secondary btn p-0 border-0 bg-transparent ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"flag-icon flag-icon-";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
        yield "\"></span>
          </button>
          <ul class=\"dropdown-menu ms-auto login\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 22
            yield "              <li>
                <a class=\"dropdown-item ";
            // line 23
            if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                yield "active";
            }
            yield "\" href=\"?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
            yield "\">
                  <span class=\"flag-icon flag-icon-";
            // line 24
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
        // line 28
        yield "          </ul>
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\">
          <img class=\"main-logo\" src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow\">
          <img class=\"main-logo-dark\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\" alt=\"mailcow-logo-dark\">
        </div>
        ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 36) && CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 36))) {
            // line 37
            yield "        <div class=\"my-4 alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 37), "html", null, true);
            yield " rot-enc ui-announcement-alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(str_rot13(CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 37)), "html", null, true);
            yield "</div>
        ";
        }
        // line 39
        yield "        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 41), "username", [], "any", false, false, false, 41), "html", null, true);
        yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"text\" id=\"login_user\" class=\"form-control\" placeholder=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 44), "username", [], "any", false, false, false, 44), "html", null, true);
        yield "\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 48), "password", [], "any", false, false, false, 48), "html", null, true);
        yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 51), "password", [], "any", false, false, false, 51), "html", null, true);
        yield "\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"d-flex justify-content-between mt-4\" style=\"position: relative\">
            <button type=\"submit\" class=\"btn btn-xs-lg btn-success w-100 mt-2 mx-auto\" style=\"max-width: 400px;\" value=\"Login\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 55), "login", [], "any", false, false, false, 55), "html", null, true);
        yield "</button>
          </div>
        </form>
        <div class=\"hr-title\"><strong>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 58), "other_logins", [], "any", false, false, false, 58), "html", null, true);
        yield "</strong></div>
        <div class=\"d-flex flex-column align-items-center\">
          <a class=\"btn btn-xs-lg btn-secondary w-100\" style=\"max-width: 400px;\" href=\"#\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 60), "fido2_webauthn", [], "any", false, false, false, 60), "html", null, true);
        yield "</a>
        </div>
        ";
        // line 62
        if (($context["login_delay"] ?? null)) {
            // line 63
            yield "        <p><div class=\"my-4 alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 63), "delayed", [], "any", false, false, false, 63), ($context["login_delay"] ?? null)), "html", null, true);
            yield "</b></div></p>
        ";
        }
        // line 65
        yield "        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        ";
        // line 66
        if (((($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null)) &&  !($context["hide_mailcow_apps"] ?? null))) {
            // line 67
            yield "        <legend><i class=\"bi bi-link-45deg\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 67);
            yield "</legend><hr />
        <div class=\"my-2 apps\">
          ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 70
                yield "            ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["app"], "hide", [], "any", false, false, false, 70)) {
                    // line 71
                    yield "              ";
                    if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 71)))) {
                        // line 72
                        yield "              <div class=\"m-2\">
                <a href=\"";
                        // line 73
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 73), "html", null, true);
                        yield "\" role=\"button\" ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 73)) {
                            yield "title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 73), "html", null, true);
                            yield "\"";
                        }
                        yield " class=\"btn btn-primary btn-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 73), "html", null, true);
                        yield "</a>
              </div>
            ";
                    }
                    // line 76
                    yield "          ";
                }
                // line 77
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['app'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 79
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 80
                    yield "            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["val"], "hide", [], "any", false, false, false, 80)) {
                        // line 81
                        yield "              <div class=\"m-2\">
                <a href=\"";
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "link", [], "any", false, false, false, 82), "html", null, true);
                        yield "\" role=\"button\" class=\"btn btn-primary btn-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "</a>
              </div>
            ";
                    }
                    // line 85
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "        </div>
        ";
        }
        // line 89
        yield "      </div>
    </div>

    ";
        // line 92
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_user_quicklink", [], "any", false, false, false, 92) != 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 92) != 1))) {
            // line 93
            yield "    <p class=\"text-center mt-3 text-muted\" style=\"font-size: 0.9rem;\">
      ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 94), "login_linkstext", [], "any", false, false, false, 94), "html", null, true);
            yield "<br>
      ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_user_quicklink", [], "any", false, false, false, 95) != 1)) {
                yield "<a href=\"/\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 95), "login_usertext", [], "any", false, false, false, 95), "html", null, true);
                yield "</a>";
            }
            // line 96
            yield "      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_user_quicklink", [], "any", false, false, false, 96) != 1) && (CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 96) != 1))) {
                yield "|";
            }
            // line 97
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["custom_login"] ?? null), "hide_domainadmin_quicklink", [], "any", false, false, false, 97) != 1)) {
                yield "<a href=\"/domainadmin\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 97), "login_domainadmintext", [], "any", false, false, false, 97), "html", null, true);
                yield "</a>";
            }
            // line 98
            yield "    </p>
    ";
        }
        // line 100
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin_index.twig";
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
        return array (  327 => 100,  323 => 98,  316 => 97,  311 => 96,  305 => 95,  301 => 94,  298 => 93,  296 => 92,  291 => 89,  287 => 87,  281 => 86,  275 => 85,  267 => 82,  264 => 81,  261 => 80,  256 => 79,  251 => 78,  245 => 77,  242 => 76,  228 => 73,  225 => 72,  222 => 71,  219 => 70,  215 => 69,  209 => 67,  207 => 66,  204 => 65,  198 => 63,  196 => 62,  191 => 60,  186 => 58,  180 => 55,  173 => 51,  167 => 48,  160 => 44,  154 => 41,  150 => 39,  142 => 37,  140 => 36,  135 => 34,  131 => 33,  124 => 28,  112 => 24,  104 => 23,  101 => 22,  97 => 21,  91 => 18,  85 => 17,  76 => 11,  69 => 6,  62 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin_index.twig", "/web/templates/admin_index.twig");
    }
}
