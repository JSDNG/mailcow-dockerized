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

/* mailbox/tab-tls-policy.twig */
class __TwigTemplate_4636eb6a35893a385396898867cf5c18 extends Template
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
        yield "<div class=\"tab-pane fade";
        if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
            yield " d-none";
        }
        yield "\" id=\"tab-tls-policy\" role=\"tabpanel\" aria-labelledby=\"tab-tls-policy\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-tls-policy\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-tls-policy\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "tls_policy_maps_long", [], "any", false, false, false, 5), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "tls_policy_maps_long", [], "any", false, false, false, 7), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_tls_policy_table\" data-table=\"tls_policy_table\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
      </div>
    </div>
    <div id=\"collapse-tab-tls-policy\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4 d-none d-sm-block\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"tls-policy-map\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tls-policy-map\" data-api-url='edit/tls-policy-map' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 19), "activate", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tls-policy-map\" data-api-url='edit/tls-policy-map' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 20), "deactivate", [], "any", false, false, false, 20), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"tls-policy-map\" data-api-url='delete/tls-policy-map' href=\"#\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "remove", [], "any", false, false, false, 22), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"tls_policy_table\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 24), "expand_all", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"tls_policy_table\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 25), "collapse_all", [], "any", false, false, false, 25), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addTLSPolicyMapAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 27), "add_tls_policy_map", [], "any", false, false, false, 27), "html", null, true);
        yield "</a>
        </div>
      </div>
      <p class=\"text-muted\">";
        // line 30
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 30), "tls_policy_maps_info", [], "any", false, false, false, 30);
        yield "</p>
      <table id=\"tls_policy_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"tls-policy-map\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 34), "toggle_all", [], "any", false, false, false, 34), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "quick_actions", [], "any", false, false, false, 35), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tls-policy-map\" data-api-url='edit/tls-policy-map' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 37), "activate", [], "any", false, false, false, 37), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"tls-policy-map\" data-api-url='edit/tls-policy-map' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "deactivate", [], "any", false, false, false, 38), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"tls-policy-map\" data-api-url='delete/tls-policy-map' href=\"#\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 40), "remove", [], "any", false, false, false, 40), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"tls_policy_table\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 42), "expand_all", [], "any", false, false, false, 42), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"tls_policy_table\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 43), "collapse_all", [], "any", false, false, false, 43), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-xs-lg btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addTLSPolicyMapAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "add_tls_policy_map", [], "any", false, false, false, 45), "html", null, true);
        yield "</a>
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
        return "mailbox/tab-tls-policy.twig";
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
        return array (  149 => 45,  144 => 43,  140 => 42,  135 => 40,  130 => 38,  126 => 37,  121 => 35,  117 => 34,  110 => 30,  104 => 27,  99 => 25,  95 => 24,  90 => 22,  85 => 20,  81 => 19,  76 => 17,  72 => 16,  63 => 10,  57 => 7,  52 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/tab-tls-policy.twig", "/web/templates/mailbox/tab-tls-policy.twig");
    }
}
