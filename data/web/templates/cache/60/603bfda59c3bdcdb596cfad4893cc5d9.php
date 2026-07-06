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

/* mailbox/tab-mbox-aliases.twig */
class __TwigTemplate_3586f8fe67128912312d8876295eeb13 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-mbox-aliases\" role=\"tabpanel\" aria-labelledby=\"tab-mbox-aliases\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mbox-aliases\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mbox-aliases\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "aliases", [], "any", false, false, false, 5), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "aliases", [], "any", false, false, false, 7), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_alias_table\" data-table=\"alias_table\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
      </div>
    </div>
    <div id=\"collapse-tab-mbox-aliases\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4 d-none d-sm-block\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"alias\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu top33\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 19), "activate", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 20), "deactivate", [], "any", false, false, false, 20), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"alias\" data-api-url='delete/alias' href=\"#\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "remove", [], "any", false, false, false, 22), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"alias_table\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 24), "expand_all", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"alias_table\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 25), "collapse_all", [], "any", false, false, false, 25), "html", null, true);
        yield "</a></li>
            ";
        // line 26
        if ( !($context["skip_sogo"] ?? null)) {
            // line 27
            yield "            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"sogo_visible\":\"1\"}' href=\"#\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 28), "sogo_visible_y", [], "any", false, false, false, 28), "html", null, true);
            yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"sogo_visible\":\"0\"}' href=\"#\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 29), "sogo_visible_n", [], "any", false, false, false, 29), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 31
        yield "          </ul>
          <a class=\"btn btn-sm btn-secondary\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"expand_alias\":true}' ><i class=\"bi bi-arrows-angle-expand\"></i> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 32), "add_alias_expand", [], "any", false, false, false, 32), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addAliasModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 33), "add_alias", [], "any", false, false, false, 33), "html", null, true);
        yield "</a>
        </div>
      </div>
      <p class=\"text-muted\">";
        // line 36
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 36), "alias_domain_alias_hint", [], "any", false, false, false, 36);
        yield "</p>
      <table id=\"alias_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"alias\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 40), "toggle_all", [], "any", false, false, false, 40), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 41), "quick_actions", [], "any", false, false, false, 41), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu top33\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 43), "activate", [], "any", false, false, false, 43), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 44), "deactivate", [], "any", false, false, false, 44), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"alias\" data-api-url='delete/alias' href=\"#\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 46), "remove", [], "any", false, false, false, 46), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"alias_table\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 48), "expand_all", [], "any", false, false, false, 48), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"alias_table\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 49), "collapse_all", [], "any", false, false, false, 49), "html", null, true);
        yield "</a></li>
            ";
        // line 50
        if ( !($context["skip_sogo"] ?? null)) {
            // line 51
            yield "            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"sogo_visible\":\"1\"}' href=\"#\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "sogo_visible_y", [], "any", false, false, false, 52), "html", null, true);
            yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"sogo_visible\":\"0\"}' href=\"#\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 53), "sogo_visible_n", [], "any", false, false, false, 53), "html", null, true);
            yield "</a></li>
            ";
        }
        // line 55
        yield "          </ul>
          <a class=\"btn btn-sm btn-xs-lg btn-secondary\" data-action=\"edit_selected\" data-id=\"alias\" data-api-url='edit/alias' data-api-attr='{\"expand_alias\":true}' ><i class=\"bi bi-arrows-angle-expand\"></i> ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 56), "add_alias_expand", [], "any", false, false, false, 56), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-lg btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addAliasModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 57), "add_alias", [], "any", false, false, false, 57), "html", null, true);
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
        return "mailbox/tab-mbox-aliases.twig";
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
        return array (  185 => 57,  181 => 56,  178 => 55,  173 => 53,  169 => 52,  166 => 51,  164 => 50,  160 => 49,  156 => 48,  151 => 46,  146 => 44,  142 => 43,  137 => 41,  133 => 40,  126 => 36,  120 => 33,  116 => 32,  113 => 31,  108 => 29,  104 => 28,  101 => 27,  99 => 26,  95 => 25,  91 => 24,  86 => 22,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/tab-mbox-aliases.twig", "/web/templates/mailbox/tab-mbox-aliases.twig");
    }
}
