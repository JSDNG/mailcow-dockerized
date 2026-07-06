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

/* modals/mailbox.twig */
class __TwigTemplate_7949205445b6a348f831909af9c5fe18 extends Template
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
        yield "<!-- add mailbox modal -->
<div class=\"modal fade\" id=\"addMailboxModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 6), "add_mailbox", [], "any", false, false, false, 6), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_mailbox\" role=\"form\" autocomplete=\"off\">
          <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
          <input type=\"hidden\" value=\"0\" name=\"force_tfa\">
          <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
          <input type=\"hidden\" value=\"0\" name=\"protocol_access\">
          <input type=\"hidden\" value=\"mailcow\" name=\"authsource\">

          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"local_part\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 18), "mailbox_username", [], "any", false, false, false, 18), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" pattern=\"[A-Za-z0-9\\.!#\$%&'*+/=?^_`{|}~-]+\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" name=\"local_part\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"name\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 24), "full_name", [], "any", false, false, false, 24), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"name\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 30), "domain", [], "any", false, false, false, 30), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select class=\"full-width-select\" data-live-search=\"true\" id=\"addSelectDomain\" name=\"domain\" required>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 34
            yield "                <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 40), "template", [], "any", false, false, false, 40), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" id=\"mailbox_templates\" class=\"form-control\" title=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 42), "template", [], "any", false, false, false, 42), "html", null, true);
        yield "\">
              </select>
            </div>
          </div>
          <div id=\"mbox_add_pwds\">
            <div class=\"row mb-2\">
              <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"password\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 48), "password", [], "any", false, false, false, 48), "html", null, true);
        yield " (<a href=\"#\" class=\"generate_password\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 48), "generate", [], "any", false, false, false, 48), "html", null, true);
        yield "</a>)</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"password\" placeholder=\"\" autocomplete=\"new-password\" required>
              </div>
            </div>
            <div class=\"row mb-4\">
              <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"password2\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 54), "password_repeat", [], "any", false, false, false, 54), "html", null, true);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"password2\" placeholder=\"\" autocomplete=\"new-password\" required>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 61), "tags", [], "any", false, false, false, 61), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addMailbox_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"addInputQuota\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 71), "quota_mb", [], "any", false, false, false, 71), "html", null, true);
        yield "
              <br /><span id=\"quotaBadge\" class=\"badge bg-primary\">max. - MiB</span>
            </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"quota\" min=\"0\" max=\"\" id=\"addInputQuota\" disabled value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 75), "select_domain", [], "any", false, false, false, 75), "html", null, true);
        yield "\" required>
              <small class=\"text-muted\">0 = ∞</small>
              <div class=\"badge fs-5 bg-warning addInputQuotaExhausted\" style=\"display:none;\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "warning", [], "any", false, false, false, 77), "quota_exceeded_scope", [], "any", false, false, false, 77), "html", null, true);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 81), "tag_handling", [], "any", false, false, false, 81), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"tagged_mail_handler\" id=\"tagged_mail_handler_subfolder\" autocomplete=\"off\" value=\"subfolder\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"tagged_mail_handler_subfolder\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 85), "tag_in_subfolder", [], "any", false, false, false, 85), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"tagged_mail_handler\" id=\"tagged_mail_handler_subject\" autocomplete=\"off\" value=\"subject\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"tagged_mail_handler_subject\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 88), "tag_in_subject", [], "any", false, false, false, 88), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"tagged_mail_handler\" id=\"tagged_mail_handler_none\" autocomplete=\"off\" value=\"none\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"tagged_mail_handler_none\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 91), "tag_in_none", [], "any", false, false, false, 91), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 93
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 93), "tag_help_explain", [], "any", false, false, false, 93);
        yield "</small></p>
              <p class=\"text-muted\"><small>";
        // line 94
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 94), "tag_help_example", [], "any", false, false, false, 94);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 98), "quarantine_notification", [], "any", false, false, false, 98), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_never\" autocomplete=\"off\" value=\"never\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_never\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 102), "never", [], "any", false, false, false, 102), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_hourly\" autocomplete=\"off\" value=\"hourly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_hourly\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 105), "hourly", [], "any", false, false, false, 105), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_daily\" autocomplete=\"off\" value=\"daily\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_daily\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 108), "daily", [], "any", false, false, false, 108), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_weekly\" autocomplete=\"off\" value=\"weekly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_notification_weekly\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 111), "weekly", [], "any", false, false, false, 111), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 113), "quarantine_notification_info", [], "any", false, false, false, 113), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 117), "quarantine_category", [], "any", false, false, false, 117), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_reject\" autocomplete=\"off\" value=\"reject\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_category_reject\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 121), "q_reject", [], "any", false, false, false, 121), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_add_header\" autocomplete=\"off\" value=\"add_header\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_category_add_header\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 124), "q_add_header", [], "any", false, false, false, 124), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_all\" autocomplete=\"off\" value=\"all\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"quarantine_category_all\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 127), "q_all", [], "any", false, false, false, 127), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 129), "quarantine_category_info", [], "any", false, false, false, 129), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"tls_enforce_in\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 133), "tls_policy", [], "any", false, false, false, 133), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_in\" id=\"tls_enforce_in\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"tls_enforce_in\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 137), "tls_enforce_in", [], "any", false, false, false, 137), "html", null, true);
        yield "</label>

                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_out\" id=\"tls_enforce_out\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"tls_enforce_out\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 140), "tls_enforce_out", [], "any", false, false, false, 140), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"protocol_access\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 145), "allowed_protocols", [], "any", false, false, false, 145), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"protocol_access\" id=\"protocol_access\" multiple class=\"form-control\">
                <option value=\"imap\">IMAP</option>
                <option value=\"pop3\">POP3</option>
                <option value=\"smtp\">SMTP</option>
                <option value=\"sieve\">Sieve</option>
                <option value=\"eas\">ActiveSync</option>
                <option value=\"dav\">CalDAV/CardDAV</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">ACL</label>
            <div class=\"col-sm-10\">
              <select id=\"user_acl\" name=\"acl\" multiple class=\"form-control\">
                  <option value=\"spam_alias\" selected>";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 161)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["spam_alias"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"tls_policy\" selected>";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 162)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tls_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"spam_score\" selected>";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 163)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["spam_score"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"spam_policy\" selected>";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 164)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["spam_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"delimiter_action\" selected>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 165)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["delimiter_action"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"syncjobs\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 166)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["syncjobs"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"eas_reset\" selected>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 167)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["eas_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"sogo_profile_reset\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 168)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sogo_profile_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"pushover\" selected>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 169)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["pushover"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine\" selected>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 170)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["quarantine"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine_attachments\" selected>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 171)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["quarantine_attachments"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine_notification\" selected>";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 172)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["quarantine_notification"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"quarantine_category\" selected>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 173)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["quarantine_category"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"app_passwds\" selected>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 174)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["app_passwds"] ?? null) : null), "html", null, true);
        yield "</option>
                  <option value=\"pw_reset\" selected>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 175)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["pw_reset"] ?? null) : null), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 180), "ratelimit", [], "any", false, false, false, 180), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" id=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 183), "disabled", [], "any", false, false, false, 183), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" id=\"rl_frame\" class=\"form-control\">
                ";
        // line 185
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 185)->unwrap()->yield($context);
        // line 186
        yield "                </select>
              </div>
              <p class=\"text-muted mt-1\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 188), "mbox_rl_info", [], "any", false, false, false, 188), "html", null, true);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <select name=\"active\" id=\"mbox_active\" class=\"form-control\">
                <option value=\"1\" selected>";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 194), "active", [], "any", false, false, false, 194), "html", null, true);
        yield "</option>
                <option value=\"2\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 195), "disable_login", [], "any", false, false, false, 195), "html", null, true);
        yield "</option>
                <option value=\"0\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 196), "inactive", [], "any", false, false, false, 196), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"force_pw_update\" id=\"force_pw_update\"> ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 203), "force_pw_update", [], "any", false, false, false, 203), "html", null, true);
        yield "</label>
                <small class=\"text-muted\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 204), "force_pw_update_info", [], "any", false, false, false, 204), CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 204)), "html", null, true);
        yield "</small>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"force_tfa\" id=\"force_tfa\"> ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 211), "force_tfa", [], "any", false, false, false, 211), "html", null, true);
        yield "</label>
                <small class=\"text-muted\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 212), "force_tfa_info", [], "any", false, false, false, 212), "html", null, true);
        yield "</small>
              </div>
            </div>
          </div>
          ";
        // line 216
        if ( !($context["skip_sogo"] ?? null)) {
            // line 217
            yield "          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sogo_access\" id=\"sogo_access\"> ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 220), "sogo_access", [], "any", false, false, false, 220), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 221), "sogo_access_info", [], "any", false, false, false, 221), "html", null, true);
            yield "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 226
        yield "          <hr>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_mailbox\" data-api-url='add/mailbox' data-api-attr='{}' href=\"#\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 229), "add", [], "any", false, false, false, 229), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add mailbox modal -->
<!-- add mailbox template modal -->
<div class=\"modal fade\" id=\"addMailboxTemplateModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 242), "add_template", [], "any", false, false, false, 242), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-id=\"addmailbox_template\" role=\"form\" method=\"post\">
          <input type=\"hidden\" value=\"default\" name=\"sender_acl\">
          <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
          <input type=\"hidden\" value=\"0\" name=\"force_tfa\">
          <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
          <input type=\"hidden\" value=\"0\" name=\"protocol_access\">

          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"template\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 254), "template", [], "any", false, false, false, 254), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group mb-3\">
                <input type=\"text\" name=\"template\" class=\"form-control\" aria-label=\"Text input with dropdown button\" value=\"\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 262), "tags", [], "any", false, false, false, 262), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addMailbox_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"quota\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 272), "quota_mb", [], "any", false, false, false, 272), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"quota\" style=\"width:100%\" min=\"0\" value=\"\" class=\"form-control\">
              <small class=\"text-muted\">0 = ∞</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 279), "tag_handling", [], "any", false, false, false, 279), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"tagged_mail_handler\" id=\"template_tagged_mail_handler_subfolder\" autocomplete=\"off\" value=\"subfolder\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_tagged_mail_handler_subfolder\">";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 283), "tag_in_subfolder", [], "any", false, false, false, 283), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"tagged_mail_handler\" id=\"template_tagged_mail_handler_subject\" autocomplete=\"off\" value=\"subject\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_tagged_mail_handler_subject\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 286), "tag_in_subject", [], "any", false, false, false, 286), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"tagged_mail_handler\" id=\"template_tagged_mail_handler_none\" autocomplete=\"off\" value=\"none\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_tagged_mail_handler_none\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 289), "tag_in_none", [], "any", false, false, false, 289), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 291
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 291), "tag_help_explain", [], "any", false, false, false, 291);
        yield "</small></p>
              <p class=\"text-muted\"><small>";
        // line 292
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 292), "tag_help_example", [], "any", false, false, false, 292);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 296), "quarantine_notification", [], "any", false, false, false, 296), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_never\" autocomplete=\"off\" value=\"never\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_never\">";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 300), "never", [], "any", false, false, false, 300), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_hourly\" autocomplete=\"off\" value=\"hourly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_hourly\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 303), "hourly", [], "any", false, false, false, 303), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_daily\" autocomplete=\"off\" value=\"daily\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_daily\">";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 306), "daily", [], "any", false, false, false, 306), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_weekly\" autocomplete=\"off\" value=\"weekly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_notification_weekly\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 309), "weekly", [], "any", false, false, false, 309), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 311), "quarantine_notification_info", [], "any", false, false, false, 311), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 315), "quarantine_category", [], "any", false, false, false, 315), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_reject\" autocomplete=\"off\" value=\"reject\" >
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_category_reject\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 319), "q_reject", [], "any", false, false, false, 319), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_add_header\" autocomplete=\"off\" value=\"add_header\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_category_add_header\">";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 322), "q_add_header", [], "any", false, false, false, 322), "html", null, true);
        yield "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_all\" autocomplete=\"off\" value=\"all\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_quarantine_category_all\">";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 325), "q_all", [], "any", false, false, false, 325), "html", null, true);
        yield "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 327), "quarantine_category_info", [], "any", false, false, false, 327), "html", null, true);
        yield "</small></p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"sender_acl\">";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 331), "tls_policy", [], "any", false, false, false, 331), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_in\" id=\"template_tls_enforce_in\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_tls_enforce_in\">";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 335), "tls_enforce_in", [], "any", false, false, false, 335), "html", null, true);
        yield "</label>

                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_out\" id=\"template_tls_enforce_out\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-light\" for=\"template_tls_enforce_out\">";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 338), "tls_enforce_out", [], "any", false, false, false, 338), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"protocol_access\">";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 343), "allowed_protocols", [], "any", false, false, false, 343), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"protocol_access\" multiple class=\"form-control\">
                <option value=\"imap\" selected>IMAP</option>
                <option value=\"pop3\" selected>POP3</option>
                <option value=\"smtp\" selected>SMTP</option>
                <option value=\"sieve\" selected>Sieve</option>
                <option value=\"activesync\" selected>ActiveSync</option>
                <option value=\"dav\" selected>CalDAV/CardDAV</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">ACL</label>
            <div class=\"col-sm-10\">
              <select id=\"template_user_acl\" name=\"acl\" size=\"10\" multiple class=\"form-control\">
                <option value=\"spam_alias\" selected>";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 359)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["spam_alias"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"tls_policy\" selected>";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 360)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["tls_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"spam_score\" selected>";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 361)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["spam_score"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"spam_policy\" selected>";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 362)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["spam_policy"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"delimiter_action\" selected>";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 363)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["delimiter_action"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"syncjobs\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 364)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["syncjobs"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"eas_reset\" selected>";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 365)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["eas_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"sogo_profile_reset\">";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 366)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["sogo_profile_reset"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"pushover\" selected>";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 367)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["pushover"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine\" selected>";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 368)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["quarantine"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine_attachments\" selected>";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 369)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["quarantine_attachments"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine_notification\" selected>";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 370)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["quarantine_notification"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"quarantine_category\" selected>";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 371)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["quarantine_category"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"app_passwds\" selected>";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 372)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["app_passwds"] ?? null) : null), "html", null, true);
        yield "</option>
                <option value=\"pw_reset\" selected>";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 373)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["pw_reset"] ?? null) : null), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 378), "ratelimit", [], "any", false, false, false, 378), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 381), "disabled", [], "any", false, false, false, 381), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" class=\"form-control\">
                ";
        // line 383
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 383)->unwrap()->yield($context);
        // line 384
        yield "                </select>
              </div>
              <p class=\"text-muted mt-1\">";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 386), "mbox_rl_info", [], "any", false, false, false, 386), "html", null, true);
        yield "</p>
            </div>
          </div>
          <hr>
          <div class=\"row my-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <select id=\"mbox_acitve\" name=\"active\" class=\"form-control\">
                <option value=\"1\" selected>";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 393), "active", [], "any", false, false, false, 393), "html", null, true);
        yield "</option>
                <option value=\"2\">";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 394), "disable_login", [], "any", false, false, false, 394), "html", null, true);
        yield "</option>
                <option value=\"0\">";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 395), "inactive", [], "any", false, false, false, 395), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"force_pw_update\"> ";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 402), "force_pw_update", [], "any", false, false, false, 402), "html", null, true);
        yield "</label>
                <small class=\"text-muted\">";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 403), "force_pw_update_info", [], "any", false, false, false, 403), CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 403)), "html", null, true);
        yield "</small>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"force_tfa\"> ";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 410), "force_tfa", [], "any", false, false, false, 410), "html", null, true);
        yield "</label>
                <small class=\"text-muted\">";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 411), "force_tfa_info", [], "any", false, false, false, 411), "html", null, true);
        yield "</small>
              </div>
            </div>
          </div>
          ";
        // line 415
        if ( !($context["skip_sogo"] ?? null)) {
            // line 416
            yield "          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sogo_access\"> ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 419), "sogo_access", [], "any", false, false, false, 419), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 420), "sogo_access_info", [], "any", false, false, false, 420), "html", null, true);
            yield "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 425
        yield "          <div class=\"row my-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"addmailbox_template\" data-api-url='add/mailbox/template' data-api-attr='{}' href=\"#\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 427), "add", [], "any", false, false, false, 427), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add mailbox template modal -->
<!-- add domain modal -->
<div class=\"modal fade\" id=\"addDomainModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 440), "add_domain", [], "any", false, false, false, 440), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_domain\" role=\"form\">
          <input type=\"hidden\" value=\"0\" name=\"gal\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <input type=\"hidden\" value=\"0\" name=\"backupmx\">
          <input type=\"hidden\" value=\"0\" name=\"relay_all_recipients\">
          <input type=\"hidden\" value=\"0\" name=\"relay_unknown_only\">

          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 452), "domain", [], "any", false, false, false, 452), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" name=\"domain\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 458), "description", [], "any", false, false, false, 458), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"description\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 464), "template", [], "any", false, false, false, 464), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" id=\"domain_templates\" class=\"form-control\">
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 471), "tags", [], "any", false, false, false, 471), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addDomain_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"aliases\">";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 481), "max_aliases", [], "any", false, false, false, 481), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_max_aliases\" class=\"form-control\" name=\"aliases\" value=\"400\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"mailboxes\">";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 487), "max_mailboxes", [], "any", false, false, false, 487), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_max_mailboxes\" class=\"form-control\" name=\"mailboxes\" value=\"10\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"defquota\">";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 493), "mailbox_quota_def", [], "any", false, false, false, 493), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_mailbox_quota_def\" class=\"form-control\" name=\"defquota\" value=\"3072\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"maxquota\">";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 499), "mailbox_quota_m", [], "any", false, false, false, 499), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_mailbox_quota_m\" class=\"form-control\" name=\"maxquota\" value=\"10240\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"quota\">";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 505), "domain_quota_m", [], "any", false, false, false, 505), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_domain_quota_m\" class=\"form-control\" name=\"quota\" value=\"10240\" required>
            </div>
          </div>
          ";
        // line 510
        if ( !($context["skip_sogo"] ?? null)) {
            // line 511
            yield "          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_gal\" value=\"1\" name=\"gal\" checked> ";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 514), "gal", [], "any", false, false, false, 514), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 515
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 515), "gal_info", [], "any", false, false, false, 515);
            yield "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 520
        yield "          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_active\" value=\"1\" name=\"active\" checked> ";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 523), "active", [], "any", false, false, false, 523), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"rl_frame\">";
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 529), "ratelimit", [], "any", false, false, false, 529), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" id=\"addDomain_rl_value\" type=\"number\" class=\"form-control\" placeholder=\"";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 532), "disabled", [], "any", false, false, false, 532), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" id=\"addDomain_rl_frame\" class=\"form-control\">
                ";
        // line 534
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 534)->unwrap()->yield($context);
        // line 535
        yield "                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"dkim_selector\">";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 541), "dkim_domains_selector", [], "any", false, false, false, 541), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"key_size\">";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 547), "dkim_key_length", [], "any", false, false, false, 547), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-light\" class=\"form-control\" id=\"key_size\" name=\"key_size\">
                <option data-subtext=\"bits\" value=\"1024\">1024</option>
                <option data-subtext=\"bits\" value=\"2048\" selected>2048</option>
                <option data-subtext=\"bits\" value=\"3072\">3072</option>
                <option data-subtext=\"bits\" value=\"4096\">4096</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 559), "backup_mx_options", [], "any", false, false, false, 559), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_relay_domain\" value=\"1\" name=\"backupmx\"> ";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 562), "relay_domain", [], "any", false, false, false, 562), "html", null, true);
        yield "</label>
                <br>
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_relay_all\" value=\"1\" name=\"relay_all_recipients\"> ";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 564), "relay_all", [], "any", false, false, false, 564), "html", null, true);
        yield "</label>
                <p>";
        // line 565
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 565), "relay_all_info", [], "any", false, false, false, 565);
        yield "</p>
                <label><input type=\"checkbox\" class=\"form-check-input\" id=\"addDomain_relay_unknown_only\" value=\"1\" name=\"relay_unknown_only\"> ";
        // line 566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 566), "relay_unknown_only", [], "any", false, false, false, 566), "html", null, true);
        yield "</label>
                <br>
                <p>";
        // line 568
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 568), "relay_transport_info", [], "any", false, false, false, 568);
        yield "</p>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10 btn-group\">
              ";
        // line 575
        if ( !($context["skip_sogo"] ?? null)) {
            // line 576
            yield "              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"tags\": []}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 576), "add_domain_only", [], "any", false, false, false, 576), "html", null, true);
            yield "</button>
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"restart_sogo\":\"1\", \"tags\": []}' href=\"#\">";
            // line 577
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 577), "add_domain_restart", [], "any", false, false, false, 577), "html", null, true);
            yield "</button>
              ";
        } else {
            // line 579
            yield "              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"tags\": []}' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 579), "add", [], "any", false, false, false, 579), "html", null, true);
            yield "</button>
              ";
        }
        // line 581
        yield "            </div>
          </div>
          ";
        // line 584
        yield "          ";
        if ( !($context["skip_sogo"] ?? null)) {
            // line 585
            yield "          <p><i class=\"bi bi-shield-fill-exclamation text-danger\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 585), "post_domain_add", [], "any", false, false, false, 585);
            yield "</p>
          ";
        }
        // line 587
        yield "        </form>
      </div>
    </div>
  </div>
</div><!-- add domain modal -->
<!-- add domain template modal -->
<div class=\"modal fade\" id=\"addDomainTemplateModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 597), "add_template", [], "any", false, false, false, 597), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form data-id=\"adddomain_template\" class=\"form-horizontal\" role=\"form\" method=\"post\">
          ";
        // line 602
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 603
            yield "          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"template\">";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 604), "template", [], "any", false, false, false, 604), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group mb-3\">
                <input type=\"text\" name=\"template\" class=\"form-control\" aria-label=\"Text input with dropdown button\" value=\"\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
            // line 612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 612), "tags", [], "any", false, false, false, 612), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_num_aliases_for_domain\">";
            // line 622
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 622), "max_aliases", [], "any", false, false, false, 622), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_num_aliases_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_num_mboxes_for_domain\">";
            // line 628
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 628), "max_mailboxes", [], "any", false, false, false, 628), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_num_mboxes_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"def_quota_for_mbox\">";
            // line 634
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 634), "mailbox_quota_def", [], "any", false, false, false, 634), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"def_quota_for_mbox\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_quota_for_mbox\">";
            // line 640
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 640), "mailbox_quota_m", [], "any", false, false, false, 640), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_quota_for_mbox\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_quota_for_domain\">";
            // line 646
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 646), "domain_quota_m", [], "any", false, false, false, 646), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_quota_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"gal\" checked> ";
            // line 654
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 654), "gal", [], "any", false, false, false, 654), "html", null, true);
            yield "</label>
                <small class=\"text-muted\">";
            // line 655
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 655), "gal_info", [], "any", false, false, false, 655);
            yield "</small>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
            // line 662
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 662), "active", [], "any", false, false, false, 662), "html", null, true);
            yield "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
            // line 668
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 668), "ratelimit", [], "any", false, false, false, 668), "html", null, true);
            yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" type=\"number\" value=\"\" autocomplete=\"off\" class=\"form-control mb-4\" placeholder=\"";
            // line 671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 671), "disabled", [], "any", false, false, false, 671), "html", null, true);
            yield "\">
                <select name=\"rl_frame\" class=\"form-control\">
                ";
            // line 673
            yield from             $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 673)->unwrap()->yield($context);
            // line 674
            yield "                </select>
              </div>
            </div>
          </div>
          ";
        }
        // line 679
        yield "          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"dkim_selector\">";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 681), "dkim_domains_selector", [], "any", false, false, false, 681), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"key_size\">";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 687), "dkim_key_length", [], "any", false, false, false, 687), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-light\" class=\"form-control\" id=\"key_size\" name=\"key_size\">
                <option data-subtext=\"bits\">1024</option>
                <option data-subtext=\"bits\" selected>2048</option>
                <option data-subtext=\"bits\">3072</option>
                <option data-subtext=\"bits\">4096</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 699), "backup_mx_options", [], "any", false, false, false, 699), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"backupmx\"> ";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 702), "relay_domain", [], "any", false, false, false, 702), "html", null, true);
        yield "</label>
                <br>
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"relay_all_recipients\"> ";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 704), "relay_all", [], "any", false, false, false, 704), "html", null, true);
        yield "</label>
                <p>";
        // line 705
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 705), "relay_all_info", [], "any", false, false, false, 705);
        yield "</p>
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"relay_unknown_only\"> ";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 706), "relay_unknown_only", [], "any", false, false, false, 706), "html", null, true);
        yield "</label>
                <br>
                <p>";
        // line 708
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 708), "relay_transport_info", [], "any", false, false, false, 708);
        yield "</p>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"adddomain_template\" data-item=\"";
        // line 715
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["domain"] ?? null), "html", null, true);
        yield "\" data-api-url='add/domain/template' data-api-attr='{}' href=\"#\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 715), "add", [], "any", false, false, false, 715), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain template modal -->
<!-- add resource modal -->
<div class=\"modal fade\" id=\"addResourceModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 728), "add_resource", [], "any", false, false, false, 728), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_resource\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 734), "description", [], "any", false, false, false, 734), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"description\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 740), "domain", [], "any", false, false, false, 740), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"domain\" title=\"";
        // line 742
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 742), "select", [], "any", false, false, false, 742), "html", null, true);
        yield "\" required>
                ";
        // line 743
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 744
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 746
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 750
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 750), "kind", [], "any", false, false, false, 750), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"kind\" title=\"";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 752), "select", [], "any", false, false, false, 752), "html", null, true);
        yield "\" required>
                <option value=\"location\">Location</option>
                <option value=\"group\">Group</option>
                <option value=\"thing\">Thing</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"multiple_bookings_select\">";
        // line 760
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 760), "multiple_bookings", [], "any", false, false, false, 760), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"multiple_bookings_select\" id=\"multiple_bookings_select\" title=\"";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 762), "select", [], "any", false, false, false, 762), "html", null, true);
        yield "\" required>
                <option value=\"0\">";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 763), "booking_null", [], "any", false, false, false, 763), "html", null, true);
        yield "</option>
                <option value=\"-1\" selected>";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 764), "booking_ltnull", [], "any", false, false, false, 764), "html", null, true);
        yield "</option>
                <option value=\"custom\">";
        // line 765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 765), "booking_custom", [], "any", false, false, false, 765), "html", null, true);
        yield "</option>
              </select>
              <div style=\"display:none\" id=\"multiple_bookings_custom_div\">
                <hr>
                <input type=\"number\" class=\"form-control\" name=\"multiple_bookings_custom\" id=\"multiple_bookings_custom\">
              </div>
              <input type=\"hidden\" name=\"multiple_bookings\" id=\"multiple_bookings\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 777
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 777), "active", [], "any", false, false, false, 777), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_resource\" data-api-url='add/resource' data-api-attr='{}' href=\"#\">";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 783), "add", [], "any", false, false, false, 783), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add resource modal -->
<!-- add alias modal -->
<div class=\"modal fade\" id=\"addAliasModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 796), "add_alias", [], "any", false, false, false, 796), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_alias\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <input type=\"hidden\" value=\"0\" name=\"internal\">
          <input type=\"hidden\" value=\"0\" name=\"sender_allowed\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"address\">";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 805), "alias_address", [], "any", false, false, false, 805), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" name=\"address\" id=\"address\" required></textarea>
              <p>";
        // line 808
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 808), "alias_address_info", [], "any", false, false, false, 808);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"goto\">";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 812), "target_address", [], "any", false, false, false, 812), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea id=\"textarea_alias_goto\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" id=\"goto\" name=\"goto\" required></textarea>
              <p>";
        // line 815
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 815), "target_address_info", [], "any", false, false, false, 815);
        yield "</p>
              <div class=\"form-check\">
                <label><input class=\"form-check-input goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_null\"> ";
        // line 817
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 817), "goto_null", [], "any", false, false, false, 817), "html", null, true);
        yield "</label>
              </div>
              <div class=\"form-check\">
                <label><input class=\"form-check-input goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_spam\"> ";
        // line 820
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 820), "goto_spam", [], "any", false, false, false, 820);
        yield "</label>
              </div>
              <div class=\"form-check\">
                <label><input class=\"form-check-input goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_ham\"> ";
        // line 823
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 823), "goto_ham", [], "any", false, false, false, 823);
        yield "</label>
              </div>
              ";
        // line 825
        if ( !($context["skip_sogo"] ?? null)) {
            // line 826
            yield "              <hr>
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sogo_visible\" checked> ";
            // line 828
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 828), "sogo_visible", [], "any", false, false, false, 828), "html", null, true);
            yield "</label>
              </div>
              <small class=\"text-muted d-block mb-2\">";
            // line 830
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 830), "sogo_visible_info", [], "any", false, false, false, 830), "html", null, true);
            yield "</small>
              ";
        }
        // line 832
        yield "              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"internal\"> ";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 833), "internal", [], "any", false, false, false, 833), "html", null, true);
        yield "</label>
              </div>
              <small class=\"text-muted d-block mb-2\">";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 835), "internal_info", [], "any", false, false, false, 835), "html", null, true);
        yield "</small>
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"sender_allowed\" checked> ";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 837), "sender_allowed", [], "any", false, false, false, 837), "html", null, true);
        yield "</label>
              </div>
              <small class=\"text-muted d-block\">";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 839), "sender_allowed_info", [], "any", false, false, false, 839), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 845), "active", [], "any", false, false, false, 845), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_alias\" data-api-url='add/alias' data-api-attr='{}' href=\"#\">";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 851), "add", [], "any", false, false, false, 851), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add alias modal -->
<!-- add domain alias modal -->
<div class=\"modal fade\" id=\"addAliasDomainModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 864
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 864), "add_domain_alias", [], "any", false, false, false, 864), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_alias_domain\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"alias_domain\">";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 871), "alias_domain", [], "any", false, false, false, 871), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" name=\"alias_domain\" id=\"alias_domain\" required></textarea>
              <p>";
        // line 874
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 874), "alias_domain_info", [], "any", false, false, false, 874);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"target_domain\">";
        // line 878
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 878), "target_domain", [], "any", false, false, false, 878), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"target_domain\" title=\"";
        // line 880
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 880), "select", [], "any", false, false, false, 880), "html", null, true);
        yield "\" required>
                ";
        // line 881
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 882
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 890), "active", [], "any", false, false, false, 890), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"rl_frame\">";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 896), "ratelimit", [], "any", false, false, false, 896), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <input name=\"rl_value\" type=\"number\" class=\"form-control\" placeholder=\"";
        // line 899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 899), "disabled", [], "any", false, false, false, 899), "html", null, true);
        yield "\">
                <select name=\"rl_frame\" class=\"form-control\">
                ";
        // line 901
        yield from         $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 901)->unwrap()->yield($context);
        // line 902
        yield "                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"dkim_selector2\">";
        // line 908
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 908), "dkim_domains_selector", [], "any", false, false, false, 908), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector2\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"key_size2\">";
        // line 914
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 914), "dkim_key_length", [], "any", false, false, false, 914), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-light\" class=\"form-control\" id=\"key_size2\" name=\"key_size\">
                <option data-subtext=\"bits\">1024</option>
                <option data-subtext=\"bits\" selected>2048</option>
                <option data-subtext=\"bits\">3072</option>
                <option data-subtext=\"bits\">4096</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_alias_domain\" data-api-url='add/alias-domain' data-api-attr='{}' href=\"#\">";
        // line 927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 927), "add", [], "any", false, false, false, 927), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain alias modal -->
<!-- add sync job modal -->
<div class=\"modal fade\" id=\"addSyncJobModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 940
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 940), "syncjob", [], "any", false, false, false, 940), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p class=\"text-muted\">";
        // line 944
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 944), "syncjob_hint", [], "any", false, false, false, 944), "html", null, true);
        yield "</p>
        <form class=\"form-horizontal\" data-cached-form=\"false\" role=\"form\" data-id=\"add_syncjob\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 947
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 947), "username", [], "any", false, false, false, 947), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"username\" title=\"";
        // line 949
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 949), "select", [], "any", false, false, false, 949), "html", null, true);
        yield "\" required>
                ";
        // line 950
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 951
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mailbox"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 953
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"host1\">";
        // line 957
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 957), "hostname", [], "any", false, false, false, 957), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"host1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"port1\">";
        // line 963
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 963), "port", [], "any", false, false, false, 963), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"port1\" min=\"1\" max=\"65535\" value=\"143\" required>
              <small class=\"text-muted\">1-65535</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"user1\">";
        // line 970
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 970), "username", [], "any", false, false, false, 970), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"user1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"password1\">";
        // line 976
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 976), "password", [], "any", false, false, false, 976), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"password1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"enc1\">";
        // line 982
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 982), "enc_method", [], "any", false, false, false, 982), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"enc1\" title=\"";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 984), "select", [], "any", false, false, false, 984), "html", null, true);
        yield "\" required>
                <option value=\"SSL\" selected>SSL</option>
                <option value=\"TLS\">STARTTLS</option>
                <option value=\"PLAIN\">PLAIN</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"mins_interval\">";
        // line 992
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 992), "mins_interval", [], "any", false, false, false, 992), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"mins_interval\" min=\"1\" max=\"43800\" value=\"20\" required>
              <small class=\"text-muted\">1-43800</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"subfolder2\">";
        // line 999
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 999), "subfolder2", [], "any", false, false, false, 999);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"subfolder2\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"maxage\">";
        // line 1005
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 1005), "maxage", [], "any", false, false, false, 1005);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxage\" min=\"0\" max=\"32000\" value=\"0\">
              <small class=\"text-muted\">0-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"maxbytespersecond\">";
        // line 1012
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 1012), "maxbytespersecond", [], "any", false, false, false, 1012);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxbytespersecond\" min=\"0\" max=\"125000000\" value=\"0\">
              <small class=\"text-muted\">0-125000000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"timeout1\">";
        // line 1019
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 1019), "timeout1", [], "any", false, false, false, 1019), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout1\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"timeout2\">";
        // line 1026
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 1026), "timeout2", [], "any", false, false, false, 1026), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout2\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"exclude\">";
        // line 1033
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1033), "exclude", [], "any", false, false, false, 1033), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"exclude\" value=\"(?i)spam|(?i)junk\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"custom_params\">";
        // line 1039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1039), "custom_params", [], "any", false, false, false, 1039), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"custom_params\" placeholder=\"--some-param=xy --other-param=yx\">
              <small class=\"text-muted\">";
        // line 1042
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1042), "custom_params_hint", [], "any", false, false, false, 1042), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete2duplicates\" checked> ";
        // line 1048
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1048), "delete2duplicates", [], "any", false, false, false, 1048), "html", null, true);
        yield " (--delete2duplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete1\"> ";
        // line 1055
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1055), "delete1", [], "any", false, false, false, 1055), "html", null, true);
        yield " (--delete1)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete2\"> ";
        // line 1062
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1062), "delete2", [], "any", false, false, false, 1062), "html", null, true);
        yield " (--delete2)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"automap\" checked> ";
        // line 1069
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1069), "automap", [], "any", false, false, false, 1069), "html", null, true);
        yield " (--automap)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"skipcrossduplicates\"> ";
        // line 1076
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1076), "skipcrossduplicates", [], "any", false, false, false, 1076), "html", null, true);
        yield " (--skipcrossduplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"subscribeall\" checked> ";
        // line 1083
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1083), "subscribeall", [], "any", false, false, false, 1083), "html", null, true);
        yield " (--subscribeall)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"dry\"> ";
        // line 1090
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1090), "dry", [], "any", false, false, false, 1090), "html", null, true);
        yield " (--dry)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1097
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1097), "active", [], "any", false, false, false, 1097), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_syncjob\" data-api-url='add/syncjob' data-api-attr='{}' href=\"#\">";
        // line 1103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1103), "add", [], "any", false, false, false, 1103), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add sync job modal -->
<!-- add add_filter modal -->
<div class=\"modal fade\" id=\"addFilterModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">Filter</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_filter\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 1122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1122), "username", [], "any", false, false, false, 1122), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"username\" required>
                ";
        // line 1125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 1126
            yield "                  <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["mailbox"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1128
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"filter_type\">";
        // line 1132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1132), "sieve_type", [], "any", false, false, false, 1132), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select id=\"addFilterType\" name=\"filter_type\" required>
                <option value=\"prefilter\">Prefilter</option>
                <option value=\"postfilter\">Postfilter</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"script_desc\">";
        // line 1141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1141), "sieve_desc", [], "any", false, false, false, 1141), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"script_desc\" name=\"script_desc\" required maxlength=\"255\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"script_data\">Script:</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code script_data\" rows=\"20\" name=\"script_data\" required></textarea>
              <p class=\"text-muted\">";
        // line 1150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1150), "activate_filter_warn", [], "any", false, false, false, 1150), "html", null, true);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1156), "active", [], "any", false, false, false, 1156), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10 add_filter_btns btn-group\">
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary validate_sieve\" href=\"#\">";
        // line 1162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1162), "validate", [], "any", false, false, false, 1162), "html", null, true);
        yield "</button>
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-success add_sieve_script\" data-action=\"add_item\" data-id=\"add_filter\" data-api-url='add/filter' data-api-attr='{}' href=\"#\" disabled>";
        // line 1163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1163), "add", [], "any", false, false, false, 1163), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
        ";
        // line 1167
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1167), "sieve_preset_header", [], "any", false, false, false, 1167);
        yield "
        <ul id=\"sieve_presets\"></ul>
      </div>
    </div>
  </div>
</div><!-- add add_filter modal -->
<!-- add add_bcc modal -->
<div class=\"modal fade\" id=\"addBCCModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1178), "bcc_maps", [], "any", false, false, false, 1178), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_bcc\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"local_dest\">";
        // line 1184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1184), "bcc_local_dest", [], "any", false, false, false, 1184), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select id=\"bcc-local-dest\" data-live-search=\"true\" data-size=\"20\" name=\"local_dest\" required>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"type\">";
        // line 1191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1191), "bcc_map_type", [], "any", false, false, false, 1191), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" required>
                <option value=\"sender\">";
        // line 1194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1194), "bcc_sender_map", [], "any", false, false, false, 1194), "html", null, true);
        yield "</option>
                <option value=\"rcpt\">";
        // line 1195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1195), "bcc_rcpt_map", [], "any", false, false, false, 1195), "html", null, true);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"bcc_dest\">";
        // line 1200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1200), "bcc_destination", [], "any", false, false, false, 1200), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"bcc_dest\">
              <small>";
        // line 1203
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1203), "bcc_dest_format", [], "any", false, false, false, 1203);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1209), "active", [], "any", false, false, false, 1209), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_bcc\" data-api-url='add/bcc' data-api-attr='{}' href=\"#\">";
        // line 1215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1215), "add", [], "any", false, false, false, 1215), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_bcc modal -->
<!-- add add_recipient_map modal -->
<div class=\"modal fade\" id=\"addRecipientMapModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1228), "recipient_maps", [], "any", false, false, false, 1228), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_recipient_map\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"recipient_map_old\">";
        // line 1234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1234), "recipient_map_old", [], "any", false, false, false, 1234), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"recipient_map_old\">
              <small>";
        // line 1237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1237), "recipient_map_old_info", [], "any", false, false, false, 1237), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"recipient_map_new\">";
        // line 1241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1241), "recipient_map_new", [], "any", false, false, false, 1241), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"recipient_map_new\">
              <small>";
        // line 1244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1244), "recipient_map_new_info", [], "any", false, false, false, 1244), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1250), "active", [], "any", false, false, false, 1250), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_recipient_map\" data-api-url='add/recipient_map' data-api-attr='{}' href=\"#\">";
        // line 1256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1256), "add", [], "any", false, false, false, 1256), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_recipient_map modal -->
<!-- add add_tls_policy_map modal -->
<div class=\"modal fade\" id=\"addTLSPolicyMapAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1269), "tls_policy_maps", [], "any", false, false, false, 1269), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_tls_policy_map\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"dest\">";
        // line 1275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1275), "tls_map_dest", [], "any", false, false, false, 1275), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"dest\">
              <small>";
        // line 1278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1278), "tls_map_dest_info", [], "any", false, false, false, 1278), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"policy\">";
        // line 1282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1282), "tls_map_policy", [], "any", false, false, false, 1282), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select class=\"full-width-select\" name=\"policy\" required>
                <option value=\"none\">none</option>
                <option value=\"may\">may</option>
                <option value=\"encrypt\">encrypt</option>
                <option value=\"dane\">dane</option>
                <option value=\"dane-only\">dane-only</option>
                <option value=\"fingerprint\">fingerprint</option>
                <option value=\"verify\">verify</option>
                <option value=\"secure\">secure</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"parameters\">";
        // line 1297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1297), "tls_map_parameters", [], "any", false, false, false, 1297), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"parameters\">
              <small>";
        // line 1300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1300), "tls_map_parameters_info", [], "any", false, false, false, 1300), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 1306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1306), "active", [], "any", false, false, false, 1306), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_tls_policy_map\" data-api-url='add/tls-policy-map' data-api-attr='{}' href=\"#\">";
        // line 1312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1312), "add", [], "any", false, false, false, 1312), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_tls_policy_map modal -->
<!-- log modal -->
<div class=\"modal fade\" id=\"syncjobLogModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"syncjobLogModalLabel\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">Log</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <textarea class=\"form-control\" rows=\"20\" id=\"logText\" spellcheck=\"false\"></textarea>
      </div>
    </div>
  </div>
</div><!-- log modal -->
<!-- DNS info modal -->
<div class=\"modal fade\" id=\"dnsInfoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"dnsInfoModalLabel\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1339), "dns_records", [], "any", false, false, false, 1339), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 1343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1343), "dns_records_24hours", [], "any", false, false, false, 1343), "html", null, true);
        yield "</p>
        <div class=\"dns-modal-body\"></div>
        <p>";
        // line 1345
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1345), "dns_records_docs", [], "any", false, false, false, 1345);
        yield "</p>
      </div>
    </div>
  </div>
</div><!-- DNS info modal -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modals/mailbox.twig";
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
        return array (  2296 => 1345,  2291 => 1343,  2284 => 1339,  2254 => 1312,  2245 => 1306,  2236 => 1300,  2230 => 1297,  2212 => 1282,  2205 => 1278,  2199 => 1275,  2190 => 1269,  2174 => 1256,  2165 => 1250,  2156 => 1244,  2150 => 1241,  2143 => 1237,  2137 => 1234,  2128 => 1228,  2112 => 1215,  2103 => 1209,  2094 => 1203,  2088 => 1200,  2080 => 1195,  2076 => 1194,  2070 => 1191,  2060 => 1184,  2051 => 1178,  2037 => 1167,  2030 => 1163,  2026 => 1162,  2017 => 1156,  2008 => 1150,  1996 => 1141,  1984 => 1132,  1978 => 1128,  1969 => 1126,  1965 => 1125,  1959 => 1122,  1937 => 1103,  1928 => 1097,  1918 => 1090,  1908 => 1083,  1898 => 1076,  1888 => 1069,  1878 => 1062,  1868 => 1055,  1858 => 1048,  1849 => 1042,  1843 => 1039,  1834 => 1033,  1824 => 1026,  1814 => 1019,  1804 => 1012,  1794 => 1005,  1785 => 999,  1775 => 992,  1764 => 984,  1759 => 982,  1750 => 976,  1741 => 970,  1731 => 963,  1722 => 957,  1716 => 953,  1707 => 951,  1703 => 950,  1699 => 949,  1694 => 947,  1688 => 944,  1681 => 940,  1665 => 927,  1649 => 914,  1640 => 908,  1632 => 902,  1630 => 901,  1625 => 899,  1619 => 896,  1610 => 890,  1602 => 884,  1593 => 882,  1589 => 881,  1585 => 880,  1580 => 878,  1573 => 874,  1567 => 871,  1557 => 864,  1541 => 851,  1532 => 845,  1523 => 839,  1518 => 837,  1513 => 835,  1508 => 833,  1505 => 832,  1500 => 830,  1495 => 828,  1491 => 826,  1489 => 825,  1484 => 823,  1478 => 820,  1472 => 817,  1467 => 815,  1461 => 812,  1454 => 808,  1448 => 805,  1436 => 796,  1420 => 783,  1411 => 777,  1396 => 765,  1392 => 764,  1388 => 763,  1384 => 762,  1379 => 760,  1368 => 752,  1363 => 750,  1357 => 746,  1348 => 744,  1344 => 743,  1340 => 742,  1335 => 740,  1326 => 734,  1317 => 728,  1299 => 715,  1289 => 708,  1284 => 706,  1280 => 705,  1276 => 704,  1271 => 702,  1265 => 699,  1250 => 687,  1241 => 681,  1237 => 679,  1230 => 674,  1228 => 673,  1223 => 671,  1217 => 668,  1208 => 662,  1198 => 655,  1194 => 654,  1183 => 646,  1174 => 640,  1165 => 634,  1156 => 628,  1147 => 622,  1134 => 612,  1123 => 604,  1120 => 603,  1118 => 602,  1110 => 597,  1098 => 587,  1092 => 585,  1089 => 584,  1085 => 581,  1079 => 579,  1074 => 577,  1069 => 576,  1067 => 575,  1057 => 568,  1052 => 566,  1048 => 565,  1044 => 564,  1039 => 562,  1033 => 559,  1018 => 547,  1009 => 541,  1001 => 535,  999 => 534,  994 => 532,  988 => 529,  979 => 523,  974 => 520,  966 => 515,  962 => 514,  957 => 511,  955 => 510,  947 => 505,  938 => 499,  929 => 493,  920 => 487,  911 => 481,  898 => 471,  888 => 464,  879 => 458,  870 => 452,  855 => 440,  839 => 427,  835 => 425,  827 => 420,  823 => 419,  818 => 416,  816 => 415,  809 => 411,  805 => 410,  795 => 403,  791 => 402,  781 => 395,  777 => 394,  773 => 393,  763 => 386,  759 => 384,  757 => 383,  752 => 381,  746 => 378,  738 => 373,  734 => 372,  730 => 371,  726 => 370,  722 => 369,  718 => 368,  714 => 367,  710 => 366,  706 => 365,  702 => 364,  698 => 363,  694 => 362,  690 => 361,  686 => 360,  682 => 359,  663 => 343,  655 => 338,  649 => 335,  642 => 331,  635 => 327,  630 => 325,  624 => 322,  618 => 319,  611 => 315,  604 => 311,  599 => 309,  593 => 306,  587 => 303,  581 => 300,  574 => 296,  567 => 292,  563 => 291,  558 => 289,  552 => 286,  546 => 283,  539 => 279,  529 => 272,  516 => 262,  505 => 254,  490 => 242,  474 => 229,  469 => 226,  461 => 221,  457 => 220,  452 => 217,  450 => 216,  443 => 212,  439 => 211,  429 => 204,  425 => 203,  415 => 196,  411 => 195,  407 => 194,  398 => 188,  394 => 186,  392 => 185,  387 => 183,  381 => 180,  373 => 175,  369 => 174,  365 => 173,  361 => 172,  357 => 171,  353 => 170,  349 => 169,  345 => 168,  341 => 167,  337 => 166,  333 => 165,  329 => 164,  325 => 163,  321 => 162,  317 => 161,  298 => 145,  290 => 140,  284 => 137,  277 => 133,  270 => 129,  265 => 127,  259 => 124,  253 => 121,  246 => 117,  239 => 113,  234 => 111,  228 => 108,  222 => 105,  216 => 102,  209 => 98,  202 => 94,  198 => 93,  193 => 91,  187 => 88,  181 => 85,  174 => 81,  167 => 77,  162 => 75,  155 => 71,  142 => 61,  132 => 54,  121 => 48,  112 => 42,  107 => 40,  101 => 36,  92 => 34,  88 => 33,  82 => 30,  73 => 24,  64 => 18,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modals/mailbox.twig", "/web/templates/modals/mailbox.twig");
    }
}
