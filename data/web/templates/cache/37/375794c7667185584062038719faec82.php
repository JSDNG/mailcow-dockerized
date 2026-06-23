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

/* user/tab-user-settings.twig */
class __TwigTemplate_36b3c90b77631bce79b53dc87e6594b3 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-user-settings\" role=\"tabpanel\" aria-labelledby=\"tab-user-settings\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-user-settings\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-user-settings\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 5), "mailbox_settings", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 7), "mailbox_settings", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-user-settings\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      ";
        // line 11
        yield "      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start text-xs-bold mb-4\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 12), "tag_handling", [], "any", false, false, false, 12), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-12\">
          <div class=\"btn-group\" data-acl=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "delimiter_action", [], "any", false, false, false, 14), "html", null, true);
        yield "\">
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
        // line 15
        if ((($context["get_tagging_options"] ?? null) == "subfolder")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"delimiter_action\"
            data-api-url='edit/delimiter_action'
            data-api-attr='{\"tagged_mail_handler\":\"subfolder\"}'>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 20), "tag_in_subfolder", [], "any", false, false, false, 20), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
        // line 21
        if ((($context["get_tagging_options"] ?? null) == "subject")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"delimiter_action\"
            data-api-url='edit/delimiter_action'
            data-api-attr='{\"tagged_mail_handler\":\"subject\"}'>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 26), "tag_in_subject", [], "any", false, false, false, 26), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
        // line 27
        if ((($context["get_tagging_options"] ?? null) == "none")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"delimiter_action\"
            data-api-url='edit/delimiter_action'
            data-api-attr='{\"tagged_mail_handler\":\"none\"}'>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 32), "tag_in_none", [], "any", false, false, false, 32), "html", null, true);
        yield "</button>
          </div>
          <p class=\"text-muted\">";
        // line 34
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 34), "tag_help_explain", [], "any", false, false, false, 34);
        yield "</p>
          <p class=\"text-muted\">";
        // line 35
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 35), "tag_help_example", [], "any", false, false, false, 35);
        yield "</p>
        </div>
      </div>
      ";
        // line 39
        yield "      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start text-xs-bold mb-4\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 40), "tls_policy", [], "any", false, false, false, 40), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-12\">
          <div class=\"btn-group\" data-acl=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "tls_policy", [], "any", false, false, false, 42), "html", null, true);
        yield "\">
            <button type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_in", [], "any", false, false, false, 43) == "1")) {
            yield " btn-dark\"";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"tls_policy\"
            data-api-url='edit/tls_policy'
            data-api-attr='{\"tls_enforce_in\": ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_in", [], "any", false, false, false, 48) == "1")) {
            yield "0";
        } else {
            yield "1";
        }
        yield " }'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 48), "tls_enforce_in", [], "any", false, false, false, 48), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_out", [], "any", false, false, false, 49) == "1")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"tls_policy\"
            data-api-url='edit/tls_policy'
            data-api-attr='{\"tls_enforce_out\": ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_out", [], "any", false, false, false, 54) == "1")) {
            yield "0";
        } else {
            yield "1";
        }
        yield " }'>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 54), "tls_enforce_out", [], "any", false, false, false, 54), "html", null, true);
        yield "</button>
          </div>
          <p class=\"text-muted\">";
        // line 56
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 56), "tls_policy_warning", [], "any", false, false, false, 56);
        yield "</p>
        </div>
      </div>
      ";
        // line 60
        yield "      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start text-xs-bold mb-4\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 61), "quarantine_notification", [], "any", false, false, false, 61), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-12\">
          <div class=\"btn-group\" data-acl=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_notification", [], "any", false, false, false, 63), "html", null, true);
        yield "\">
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
        // line 64
        if ((($context["quarantine_notification"] ?? null) == "never")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"never\"}'>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 69), "never", [], "any", false, false, false, 69), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
        // line 70
        if ((($context["quarantine_notification"] ?? null) == "hourly")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"hourly\"}'>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 75), "hourly", [], "any", false, false, false, 75), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
        // line 76
        if ((($context["quarantine_notification"] ?? null) == "daily")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"daily\"}'>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 81), "daily", [], "any", false, false, false, 81), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline";
        // line 82
        if ((($context["quarantine_notification"] ?? null) == "weekly")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"weekly\"}'>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 87), "weekly", [], "any", false, false, false, 87), "html", null, true);
        yield "</button>
          </div>
          <p class=\"text-muted\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 89), "quarantine_notification_info", [], "any", false, false, false, 89), "html", null, true);
        yield "</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start text-xs-bold mb-4\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 93), "quarantine_category", [], "any", false, false, false, 93), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-9 col-12\">
          <div class=\"btn-group\" data-acl=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_category", [], "any", false, false, false, 95), "html", null, true);
        yield "\">
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
        // line 96
        if ((($context["quarantine_category"] ?? null) == "reject")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"quarantine_category\"
            data-api-url='edit/quarantine_category'
            data-api-attr='{\"quarantine_category\":\"reject\"}'>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 101), "q_reject", [], "any", false, false, false, 101), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
        // line 102
        if ((($context["quarantine_category"] ?? null) == "add_header")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"quarantine_category\"
            data-api-url='edit/quarantine_category'
            data-api-attr='{\"quarantine_category\":\"add_header\"}'>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 107), "q_add_header", [], "any", false, false, false, 107), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline";
        // line 108
        if ((($context["quarantine_category"] ?? null) == "all")) {
            yield " btn-dark";
        } else {
            yield " btn-light";
        }
        yield "\"
            data-action=\"edit_selected\"
            data-item=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\"
            data-id=\"quarantine_category\"
            data-api-url='edit/quarantine_category'
            data-api-attr='{\"quarantine_category\":\"all\"}'>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 113), "q_all", [], "any", false, false, false, 113), "html", null, true);
        yield "</button>
          </div>
          <p class=\"text-muted\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 115), "quarantine_category_info", [], "any", false, false, false, 115), "html", null, true);
        yield "</p>
        </div>
      </div>
      ";
        // line 118
        if ( !($context["skip_sogo"] ?? null)) {
            // line 119
            yield "      <hr>
      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start text-xs-bold mb-4\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 121), "eas_reset", [], "any", false, false, false, 121), "html", null, true);
            yield ":</div>
        <div class=\"col-sm-9 col-12\">
          <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" data-acl=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "eas_reset", [], "any", false, false, false, 123), "html", null, true);
            yield "\" data-action=\"delete_selected\" data-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 123), "eas_reset", [], "any", false, false, false, 123), "html", null, true);
            yield "?\" data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield "\" data-id=\"eas_cache\" data-api-url='delete/eas_cache' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 123), "eas_reset_now", [], "any", false, false, false, 123), "html", null, true);
            yield "</button>
          <p class=\"text-muted\">";
            // line 124
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 124), "eas_reset_help", [], "any", false, false, false, 124);
            yield "</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start text-xs-bold mb-4\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 128), "sogo_profile_reset", [], "any", false, false, false, 128), "html", null, true);
            yield ":</div>
        <div class=\"col-sm-9 col-12\">
          <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" data-acl=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "sogo_profile_reset", [], "any", false, false, false, 130), "html", null, true);
            yield "\" data-action=\"delete_selected\" data-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 130), "sogo_profile_reset", [], "any", false, false, false, 130), "html", null, true);
            yield "?\" data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
            yield "\" data-id=\"sogo_profile\" data-api-url='delete/sogo_profile' href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 130), "sogo_profile_reset_now", [], "any", false, false, false, 130), "html", null, true);
            yield "</button>
          <p class=\"text-muted\">";
            // line 131
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 131), "sogo_profile_reset_help", [], "any", false, false, false, 131);
            yield "</p>
        </div>
      </div>
      ";
        }
        // line 135
        yield "    </div>
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
        return "user/tab-user-settings.twig";
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
        return array (  427 => 135,  420 => 131,  410 => 130,  405 => 128,  398 => 124,  388 => 123,  383 => 121,  379 => 119,  377 => 118,  371 => 115,  366 => 113,  360 => 110,  351 => 108,  347 => 107,  341 => 104,  332 => 102,  328 => 101,  322 => 98,  313 => 96,  309 => 95,  304 => 93,  297 => 89,  292 => 87,  286 => 84,  277 => 82,  273 => 81,  267 => 78,  258 => 76,  254 => 75,  248 => 72,  239 => 70,  235 => 69,  229 => 66,  220 => 64,  216 => 63,  211 => 61,  208 => 60,  202 => 56,  191 => 54,  185 => 51,  176 => 49,  166 => 48,  160 => 45,  151 => 43,  147 => 42,  142 => 40,  139 => 39,  133 => 35,  129 => 34,  124 => 32,  118 => 29,  109 => 27,  105 => 26,  99 => 23,  90 => 21,  86 => 20,  80 => 17,  71 => 15,  67 => 14,  62 => 12,  59 => 11,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/tab-user-settings.twig", "/web/templates/user/tab-user-settings.twig");
    }
}
