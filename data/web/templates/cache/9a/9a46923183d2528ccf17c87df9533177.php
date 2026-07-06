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

/* mailbox/tab-syncjobs.twig */
class __TwigTemplate_266afbd20e3de79e3b38cf6f777c252e extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-syncjobs\"  role=\"tabpanel\" aria-labelledby=\"tab-syncjobs\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-syncjobs\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-syncjobs\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "sync_jobs", [], "any", false, false, false, 5), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "sync_jobs", [], "any", false, false, false, 7), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_sync_job_table\" data-table=\"sync_job_table\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
      </div>
    </div>
    <div id=\"collapse-tab-syncjobs\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4 d-none d-sm-block\">
        <div class=\"btn-group\" data-acl=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "syncjobs", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"syncjob\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"syncjob\" data-api-url='edit/syncjob' data-api-attr='{\"last_run\":\"\",\"success\":\"\"}' href=\"#\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 19), "last_run_reset", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"syncjob\" data-api-url='edit/syncjob' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 21), "activate", [], "any", false, false, false, 21), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"syncjob\" data-api-url='edit/syncjob' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "deactivate", [], "any", false, false, false, 22), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"syncjob\" data-api-url='delete/syncjob' href=\"#\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 24), "remove", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sync_job_table\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 26), "expand_all", [], "any", false, false, false, 26), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sync_job_table\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 27), "collapse_all", [], "any", false, false, false, 27), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addSyncJobModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 29), "create_syncjob", [], "any", false, false, false, 29), "html", null, true);
        yield "</a>
        </div>
      </div>
      <table id=\"sync_job_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\" data-acl=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "syncjobs", [], "any", false, false, false, 34), "html", null, true);
        yield "\">
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"syncjob\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "toggle_all", [], "any", false, false, false, 35), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 36), "quick_actions", [], "any", false, false, false, 36), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"syncjob\" data-api-url='edit/syncjob' data-api-attr='{\"last_run\":\"\",\"success\":\"\"}' href=\"#\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "last_run_reset", [], "any", false, false, false, 38), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"syncjob\" data-api-url='edit/syncjob' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 40), "activate", [], "any", false, false, false, 40), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"syncjob\" data-api-url='edit/syncjob' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 41), "deactivate", [], "any", false, false, false, 41), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"syncjob\" data-api-url='delete/syncjob' href=\"#\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 43), "remove", [], "any", false, false, false, 43), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sync_job_table\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 45), "expand_all", [], "any", false, false, false, 45), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sync_job_table\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 46), "collapse_all", [], "any", false, false, false, 46), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-xs-lg btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addSyncJobModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 48), "create_syncjob", [], "any", false, false, false, 48), "html", null, true);
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
        return "mailbox/tab-syncjobs.twig";
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
        return array (  157 => 48,  152 => 46,  148 => 45,  143 => 43,  138 => 41,  134 => 40,  129 => 38,  124 => 36,  120 => 35,  116 => 34,  108 => 29,  103 => 27,  99 => 26,  94 => 24,  89 => 22,  85 => 21,  80 => 19,  75 => 17,  71 => 16,  67 => 15,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/tab-syncjobs.twig", "/web/templates/mailbox/tab-syncjobs.twig");
    }
}
