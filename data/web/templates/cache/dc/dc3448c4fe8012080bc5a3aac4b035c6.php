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

/* mailbox/tab-domains.twig */
class __TwigTemplate_8d8df7411b70ea581bc671e36f915793 extends Template
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
        yield "<div class=\"tab-pane fade show active\" id=\"tab-domains\" role=\"tabpanel\" aria-labelledby=\"tab-domains\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-sm-block d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-domains\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-domains\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "domains", [], "any", false, false, false, 5), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "domains", [], "any", false, false, false, 7), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span></span>
      
      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_domain_table\" data-table=\"domain_table\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
      </div>
    </div>
    <div id=\"collapse-tab-domains\" class=\"card-body collapse show\" data-bs-parent=\"#mail-content\">
      ";
        // line 14
        yield "      
      <div class=\"mass-actions-mailbox mb-4 d-none d-sm-block\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "toggle_all", [], "any", false, false, false, 17), "html", null, true);
        yield "</button>
          <button class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 18), "quick_actions", [], "any", false, false, false, 18), "html", null, true);
        yield "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 20
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 21
            yield "              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 21), "activate", [], "any", false, false, false, 21), "html", null, true);
            yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "deactivate", [], "any", false, false, false, 22), "html", null, true);
            yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain\" data-api-url='delete/domain' href=\"#\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 24), "remove", [], "any", false, false, false, 24), "html", null, true);
            yield "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            ";
        }
        // line 27
        yield "            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"domain_table\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 27), "expand_all", [], "any", false, false, false, 27), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"domain_table\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 28), "collapse_all", [], "any", false, false, false, 28), "html", null, true);
        yield "</a></li>
          </ul>
          ";
        // line 30
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 31
            yield "          <button class=\"btn btn-sm btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainModal\"><i class=\"bi bi-plus-lg\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 31), "add_domain", [], "any", false, false, false, 31), "html", null, true);
            yield "</button>
          ";
        }
        // line 33
        yield "        </div>
      </div>
      <table id=\"domain_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "toggle_all", [], "any", false, false, false, 38), "html", null, true);
        yield "</button>
          <button class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 39), "quick_actions", [], "any", false, false, false, 39), "html", null, true);
        yield "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 41
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 42
            yield "              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 42), "activate", [], "any", false, false, false, 42), "html", null, true);
            yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 43), "deactivate", [], "any", false, false, false, 43), "html", null, true);
            yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain\" data-api-url='delete/domain' href=\"#\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "remove", [], "any", false, false, false, 45), "html", null, true);
            yield "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            ";
        }
        // line 48
        yield "            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"domain_table\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 48), "expand_all", [], "any", false, false, false, 48), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"domain_table\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 49), "collapse_all", [], "any", false, false, false, 49), "html", null, true);
        yield "</a></li>
          </ul>
          ";
        // line 51
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 52
            yield "            <button class=\"btn btn-sm btn-xs-lg btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainModal\"><i class=\"bi bi-plus-lg\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "add_domain", [], "any", false, false, false, 52), "html", null, true);
            yield "</button>
          ";
        }
        // line 54
        yield "        </div>
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
        return "mailbox/tab-domains.twig";
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
        return array (  168 => 54,  162 => 52,  160 => 51,  155 => 49,  150 => 48,  144 => 45,  139 => 43,  134 => 42,  132 => 41,  127 => 39,  123 => 38,  116 => 33,  110 => 31,  108 => 30,  103 => 28,  98 => 27,  92 => 24,  87 => 22,  82 => 21,  80 => 20,  75 => 18,  71 => 17,  66 => 14,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/tab-domains.twig", "/web/templates/mailbox/tab-domains.twig");
    }
}
