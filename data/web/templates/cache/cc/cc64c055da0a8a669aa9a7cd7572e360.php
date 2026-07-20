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

/* user/Spamfilter.twig */
class __TwigTemplate_4216eb87cd68ba8c635c729fb042165e extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"Spamfilter\" role=\"tabpanel\" aria-labelledby=\"Spamfilter\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-Spamfilter\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-Spamfilter\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 5), "spamfilter", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 7), "spamfilter", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-Spamfilter\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      <h4>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 10), "spamfilter_behavior", [], "any", false, false, false, 10), "html", null, true);
        yield "</h4>
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <form class=\"form-horizontal\" role=\"form\" data-id=\"spam_score\" method=\"post\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <div id=\"spam_score\" data-provide=\"slider\" data-acl=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_score", [], "any", false, false, false, 16), "html", null, true);
        yield "\"></div>
                <input id=\"spam_score_value\" name=\"spam_score\" type=\"hidden\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_spam_score"] ?? null), "html", null, true);
        yield "\">
                <ul class=\"list-group list-group-flush\">
                  <li class=\"list-group-item\"><span class=\"label label-ham spam-ham-score\"></span> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 19), "spamfilter_green", [], "any", false, false, false, 19), "html", null, true);
        yield "</li>
                  <li class=\"list-group-item\"><span class=\"label label-spam spam-spam-score\"></span> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 20), "spamfilter_yellow", [], "any", false, false, false, 20), "html", null, true);
        yield "</li>
                  <li class=\"list-group-item\"><span class=\"label label-reject spam-reject-score\"></span> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 21), "spamfilter_red", [], "any", false, false, false, 21), "html", null, true);
        yield "</li>
                </ul>
              </div>
            </div>
            <div class=\"btn-group mt-4\" data-acl=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_score", [], "any", false, false, false, 25), "html", null, true);
        yield "\">
              <a type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\"
                data-item=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
                data-id=\"spam_score\"
                data-api-url='edit/spam-score'
                data-api-attr='{}'><i class=\"bi bi-save\"></i> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 30), "save_changes", [], "any", false, false, false, 30), "html", null, true);
        yield "</a>
              <a type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\"
                data-item=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
                data-id=\"spam_score_reset\"
                data-api-url='edit/spam-score'
                data-api-attr='{\"spam_score\":\"default\"}'>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 35), "spam_score_reset", [], "any", false, false, false, 35), "html", null, true);
        yield "</a>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"col-lg-6 my-3 d-flex flex-column\">
          <h4>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 43), "spamfilter_wl", [], "any", false, false, false, 43), "html", null, true);
        yield "</h4>
          <p>";
        // line 44
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 44), "spamfilter_wl_desc", [], "any", false, false, false, 44);
        yield "</p>
          <form class=\"form-inline mb-4 mt-auto\" data-id=\"add_wl_policy_mailbox\">
            <div class=\"input-group\" data-acl=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 46), "html", null, true);
        yield "\">
              <input type=\"text\" class=\"form-control\" name=\"object_from\" placeholder=\"*@example.org\" required>
              <button class=\"btn btn-secondary\" data-action=\"add_item\" data-id=\"add_wl_policy_mailbox\" data-api-url='add/mailbox-policy' data-api-attr='{\"username\": ";
        // line 48
        yield json_encode(($context["mailcow_cc_username"] ?? null));
        yield ",\"object_list\":\"wl\"}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 48), "spamfilter_table_add", [], "any", false, false, false, 48), "html", null, true);
        yield "</button>
            </div>
          </form>
          <table id=\"wl_policy_mailbox_table\" class=\"table table-striped dt-responsive w-100\"></table>
          <div class=\"mass-actions-user\">
            <div class=\"btn-group\" data-acl=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 53), "html", null, true);
        yield "\">
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"policy_wl_mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 54), "toggle_all", [], "any", false, false, false, 54), "html", null, true);
        yield "</a>
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 55), "quick_actions", [], "any", false, false, false, 55), "html", null, true);
        yield "</a>
              <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" data-datatables-expand=\"wl_policy_mailbox_table\" data-table=\"wl_policy_mailbox_table\" href=\"#\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 57), "expand_all", [], "any", false, false, false, 57), "html", null, true);
        yield "</a></li>
                <li><a class=\"dropdown-item\" data-datatables-collapse=\"wl_policy_mailbox_table\" data-table=\"wl_policy_mailbox_table\" href=\"#\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 58), "collapse_all", [], "any", false, false, false, 58), "html", null, true);
        yield "</a></li>
              </ul>
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-danger\" data-action=\"delete_selected\" data-id=\"policy_wl_mailbox\" data-api-url='delete/mailbox-policy' href=\"#\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 60), "remove", [], "any", false, false, false, 60), "html", null, true);
        yield "</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6 my-3 d-flex flex-column\">
          <h4>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 65), "spamfilter_bl", [], "any", false, false, false, 65), "html", null, true);
        yield "</h4>
          <p>";
        // line 66
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 66), "spamfilter_bl_desc", [], "any", false, false, false, 66);
        yield "</p>
          <form class=\"form-inline mb-4 mt-auto\" data-id=\"add_bl_policy_mailbox\">
            <div class=\"input-group\" data-acl=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 68), "html", null, true);
        yield "\">
              <input type=\"text\" class=\"form-control\" name=\"object_from\" placeholder=\"*@example.org\" required>
              <button class=\"btn btn-secondary\" data-action=\"add_item\" data-id=\"add_bl_policy_mailbox\" data-api-url='add/mailbox-policy' data-api-attr='{\"username\": ";
        // line 70
        yield json_encode(($context["mailcow_cc_username"] ?? null));
        yield ",\"object_list\":\"bl\"}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 70), "spamfilter_table_add", [], "any", false, false, false, 70), "html", null, true);
        yield "</button>
            </div>
          </form>
          <table id=\"bl_policy_mailbox_table\" class=\"table table-striped dt-responsive w-100\"></table>
          <div class=\"mass-actions-user\">
            <div class=\"btn-group\" data-acl=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 75), "html", null, true);
        yield "\">
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"policy_bl_mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 76), "toggle_all", [], "any", false, false, false, 76), "html", null, true);
        yield "</a>
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 77), "quick_actions", [], "any", false, false, false, 77), "html", null, true);
        yield "</a>
              <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" data-datatables-expand=\"bl_policy_mailbox_table\" data-table=\"bl_policy_mailbox_table\" href=\"#\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 79), "expand_all", [], "any", false, false, false, 79), "html", null, true);
        yield "</a></li>
                <li><a class=\"dropdown-item\" data-datatables-collapse=\"bl_policy_mailbox_table\" data-table=\"bl_policy_mailbox_table\" href=\"#\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 80), "collapse_all", [], "any", false, false, false, 80), "html", null, true);
        yield "</a></li>
              </ul>
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-danger\" data-action=\"delete_selected\" data-id=\"policy_bl_mailbox\" data-api-url='delete/mailbox-policy' href=\"#\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 82), "remove", [], "any", false, false, false, 82), "html", null, true);
        yield "</a>
            </div>
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
        return "user/Spamfilter.twig";
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
        return array (  225 => 82,  220 => 80,  216 => 79,  211 => 77,  207 => 76,  203 => 75,  193 => 70,  188 => 68,  183 => 66,  179 => 65,  171 => 60,  166 => 58,  162 => 57,  157 => 55,  153 => 54,  149 => 53,  139 => 48,  134 => 46,  129 => 44,  125 => 43,  114 => 35,  108 => 32,  103 => 30,  97 => 27,  92 => 25,  85 => 21,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/Spamfilter.twig", "/web/templates/user/Spamfilter.twig");
    }
}
