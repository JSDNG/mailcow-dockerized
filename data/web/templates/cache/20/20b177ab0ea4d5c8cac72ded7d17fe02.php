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

/* mailbox/tab-templates-domains.twig */
class __TwigTemplate_2e80f2710ebd2bf9c1330dd9c365ca99 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-templates-domains\" role=\"tabpanel\" aria-labelledby=\"tab-templates-domains\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-sm-block d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-templates-domains\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-templates-domains\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "domain_templates", [], "any", false, false, false, 5), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "domain_templates", [], "any", false, false, false, 7), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span></span>
      
      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_templates_domain_table\" data-table=\"templates_domain_table\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
      </div>
    </div>
    <div id=\"collapse-tab-templates-domains\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">  
      <div class=\"mass-actions-mailbox mb-4 d-none d-sm-block\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain_template\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        yield "</button>
          <button class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        yield "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 19
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 20
            yield "              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain_template\" data-api-url='delete/domain/template' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 20), "remove", [], "any", false, false, false, 20), "html", null, true);
            yield "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"templates_domain_table\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 22), "expand_all", [], "any", false, false, false, 22), "html", null, true);
            yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"templates_domain_table\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 23), "collapse_all", [], "any", false, false, false, 23), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 25
        yield "          </ul>
          ";
        // line 26
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 27
            yield "          <button class=\"btn btn-sm btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainTemplateModal\"><i class=\"bi bi-plus-lg\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 27), "add_template", [], "any", false, false, false, 27), "html", null, true);
            yield "</button>
          ";
        }
        // line 29
        yield "        </div>
      </div>
      <table id=\"templates_domain_table\" class=\"table table-striped dt-responsive w-100\"></table>  
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain_template\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 34), "toggle_all", [], "any", false, false, false, 34), "html", null, true);
        yield "</button>
          <button class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "quick_actions", [], "any", false, false, false, 35), "html", null, true);
        yield "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 37
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 38
            yield "              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain_template\" data-api-url='delete/domain/template' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "remove", [], "any", false, false, false, 38), "html", null, true);
            yield "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"templates_domain_table\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 40), "expand_all", [], "any", false, false, false, 40), "html", null, true);
            yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"templates_domain_table\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 41), "collapse_all", [], "any", false, false, false, 41), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 43
        yield "          </ul>
          ";
        // line 44
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 45
            yield "          <button class=\"btn btn-sm btn-xs-lg btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainTemplateModal\"><i class=\"bi bi-plus-lg\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "add_template", [], "any", false, false, false, 45), "html", null, true);
            yield "</button>
          ";
        }
        // line 47
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
        return "mailbox/tab-templates-domains.twig";
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
        return array (  149 => 47,  143 => 45,  141 => 44,  138 => 43,  133 => 41,  129 => 40,  123 => 38,  121 => 37,  116 => 35,  112 => 34,  105 => 29,  99 => 27,  97 => 26,  94 => 25,  89 => 23,  85 => 22,  79 => 20,  77 => 19,  72 => 17,  68 => 16,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/tab-templates-domains.twig", "/web/templates/mailbox/tab-templates-domains.twig");
    }
}
