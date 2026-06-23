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

/* user/AppPasswds.twig */
class __TwigTemplate_6d12f560ac4064141c9835490588dff6 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"AppPasswds\" role=\"tabpanel\" aria-labelledby=\"AppPasswds\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-AppPasswds\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-AppPasswds\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 5), "app_passwds", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 7), "app_passwds", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-AppPasswds\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      <div class=\"mass-actions-user mb-4\">
        <div class=\"btn-group\" data-acl=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "app_passwds", [], "any", false, false, false, 11), "html", null, true);
        yield "\">
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"apppasswd\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 13), "toggle_all", [], "any", false, false, false, 13), "html", null, true);
        yield "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 14), "quick_actions", [], "any", false, false, false, 14), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"apppasswd\" data-api-url='edit/app-passwd' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "activate", [], "any", false, false, false, 16), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"apppasswd\" data-api-url='edit/app-passwd' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "deactivate", [], "any", false, false, false, 17), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-datatables-expand=\"app_passwd_table\" data-table=\"app_passwd_table\" href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 19), "expand_all", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-datatables-collapse=\"app_passwd_table\" data-table=\"app_passwd_table\" href=\"#\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 20), "collapse_all", [], "any", false, false, false, 20), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"apppasswd\" data-api-url='delete/app-passwd' href=\"#\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "remove", [], "any", false, false, false, 22), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm d-block d-sm-inline btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addAppPasswdModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 26), "create_app_passwd", [], "any", false, false, false, 26), "html", null, true);
        yield "</a>
          </div>
        </div>
      </div>
      <p>";
        // line 30
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 30), "app_hint", [], "any", false, false, false, 30);
        yield "</p>
      <table id=\"app_passwd_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-user mt-4\">
        <div class=\"btn-group\" data-acl=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "app_passwds", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"apppasswd\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "toggle_all", [], "any", false, false, false, 35), "html", null, true);
        yield "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 36), "quick_actions", [], "any", false, false, false, 36), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"apppasswd\" data-api-url='edit/app-passwd' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "activate", [], "any", false, false, false, 38), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"apppasswd\" data-api-url='edit/app-passwd' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 39), "deactivate", [], "any", false, false, false, 39), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-datatables-expand=\"app_passwd_table\" data-table=\"app_passwd_table\" href=\"#\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 41), "expand_all", [], "any", false, false, false, 41), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-datatables-collapse=\"app_passwd_table\" data-table=\"app_passwd_table\" href=\"#\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 42), "collapse_all", [], "any", false, false, false, 42), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"apppasswd\" data-api-url='delete/app-passwd' href=\"#\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 44), "remove", [], "any", false, false, false, 44), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm d-block d-sm-inline btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addAppPasswdModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 48), "create_app_passwd", [], "any", false, false, false, 48), "html", null, true);
        yield "</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/AppPasswds.twig";
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
        return array (  151 => 48,  144 => 44,  139 => 42,  135 => 41,  130 => 39,  126 => 38,  121 => 36,  117 => 35,  112 => 33,  106 => 30,  99 => 26,  92 => 22,  87 => 20,  83 => 19,  78 => 17,  74 => 16,  69 => 14,  65 => 13,  60 => 11,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/AppPasswds.twig", "/web/templates/user/AppPasswds.twig");
    }
}
