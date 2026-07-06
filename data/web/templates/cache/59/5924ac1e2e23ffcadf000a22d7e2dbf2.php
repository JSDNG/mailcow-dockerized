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

/* mailbox/tab-mailboxes.twig */
class __TwigTemplate_a7c78cdac320fced6fb90d7d50c49c0b extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-mailboxes\" role=\"tabpanel\" aria-labelledby=\"tab-mailboxes\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mailboxes\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mailboxes\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "mailboxes", [], "any", false, false, false, 5), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "mailboxes", [], "any", false, false, false, 7), "html", null, true);
        yield " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_mailbox_table\" data-table=\"mailbox_table\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        yield "</button>
      </div>
    </div>
    <div id=\"collapse-tab-mailboxes\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4 d-none d-sm-block\">
        <div class=\"btn-group d-flex d-lg-none\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 19), "expand_all", [], "any", false, false, false, 19), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 20), "collapse_all", [], "any", false, false, false, 20), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "mailbox", [], "any", false, false, false, 22), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 23), "activate", [], "any", false, false, false, 23), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 24), "deactivate", [], "any", false, false, false, 24), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 25), "remove", [], "any", false, false, false, 25), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 27), "tls_enforce_in", [], "any", false, false, false, 27), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 28), "activate", [], "any", false, false, false, 28), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 29), "deactivate", [], "any", false, false, false, 29), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 31), "tls_enforce_out", [], "any", false, false, false, 31), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 32), "activate", [], "any", false, false, false, 32), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 33), "deactivate", [], "any", false, false, false, 33), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "quarantine_notification", [], "any", false, false, false, 35), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 36), "hourly", [], "any", false, false, false, 36), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 37), "daily", [], "any", false, false, false, 37), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 38), "weekly", [], "any", false, false, false, 38), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 39), "never", [], "any", false, false, false, 39), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 41), "q_reject", [], "any", false, false, false, 41), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 42), "q_add_header", [], "any", false, false, false, 42), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 43), "q_all", [], "any", false, false, false, 43), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "allowed_protocols", [], "any", false, false, false, 45), "html", null, true);
        yield "</li>
            <li class=\"dropdown-header\">IMAP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 47), "activate", [], "any", false, false, false, 47), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 48), "deactivate", [], "any", false, false, false, 48), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">POP3</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 51), "activate", [], "any", false, false, false, 51), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "deactivate", [], "any", false, false, false, 52), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">SMTP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 55), "activate", [], "any", false, false, false, 55), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 56), "deactivate", [], "any", false, false, false, 56), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">Sieve</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 59), "activate", [], "any", false, false, false, 59), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 60), "deactivate", [], "any", false, false, false, 60), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">ActiveSync (EAS)</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"eas_access\":1}' href=\"#\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 63), "activate", [], "any", false, false, false, 63), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"eas_access\":0}' href=\"#\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 64), "deactivate", [], "any", false, false, false, 64), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">CalDAV/CardDAV (DAV)</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"dav_access\":1}' href=\"#\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 67), "activate", [], "any", false, false, false, 67), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"dav_access\":0}' href=\"#\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 68), "deactivate", [], "any", false, false, false, 68), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 70), "add_mailbox", [], "any", false, false, false, 70), "html", null, true);
        yield "</a>
        </div>
        <div class=\"btn-group d-none d-lg-flex\">
          <a class=\"btn btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 73), "toggle_all", [], "any", false, false, false, 73), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 74), "quick_actions", [], "any", false, false, false, 74), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 76), "expand_all", [], "any", false, false, false, 76), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 77), "collapse_all", [], "any", false, false, false, 77), "html", null, true);
        yield "</a></li>
          </ul>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 80), "mailbox", [], "any", false, false, false, 80), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 82), "activate", [], "any", false, false, false, 82), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"2\"}' href=\"#\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 83), "disable_login", [], "any", false, false, false, 83), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 84), "deactivate", [], "any", false, false, false, 84), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 86), "remove", [], "any", false, false, false, 86), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">TLS</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 92), "tls_enforce_in", [], "any", false, false, false, 92), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 93), "activate", [], "any", false, false, false, 93), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 94), "deactivate", [], "any", false, false, false, 94), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 96), "tls_enforce_out", [], "any", false, false, false, 96), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 97), "activate", [], "any", false, false, false, 97), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 98), "deactivate", [], "any", false, false, false, 98), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 102), "allowed_protocols", [], "any", false, false, false, 102), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">IMAP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 105), "activate", [], "any", false, false, false, 105), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 106), "deactivate", [], "any", false, false, false, 106), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">POP3</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 109), "activate", [], "any", false, false, false, 109), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 110), "deactivate", [], "any", false, false, false, 110), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">SMTP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 113), "activate", [], "any", false, false, false, 113), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 114), "deactivate", [], "any", false, false, false, 114), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">Sieve</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 117), "activate", [], "any", false, false, false, 117), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 118), "deactivate", [], "any", false, false, false, 118), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">ActiveSync (EAS)</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"eas_access\":1}' href=\"#\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 121), "activate", [], "any", false, false, false, 121), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"eas_access\":0}' href=\"#\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 122), "deactivate", [], "any", false, false, false, 122), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">CalDAV/CardDAV (DAV)</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"dav_access\":1}' href=\"#\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 125), "activate", [], "any", false, false, false, 125), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"dav_access\":0}' href=\"#\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 126), "deactivate", [], "any", false, false, false, 126), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 130), "quarantine_notification", [], "any", false, false, false, 130), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 132), "hourly", [], "any", false, false, false, 132), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 133), "daily", [], "any", false, false, false, 133), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 134), "weekly", [], "any", false, false, false, 134), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 135), "never", [], "any", false, false, false, 135), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 137), "q_reject", [], "any", false, false, false, 137), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 138), "q_add_header", [], "any", false, false, false, 138), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 139), "q_all", [], "any", false, false, false, 139), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 142), "add_mailbox", [], "any", false, false, false, 142), "html", null, true);
        yield "</a>
        </div>
      </div>
      <table id=\"mailbox_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group d-flex d-lg-none\">
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 148), "toggle_all", [], "any", false, false, false, 148), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-lg btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 149), "quick_actions", [], "any", false, false, false, 149), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 151), "expand_all", [], "any", false, false, false, 151), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 152), "collapse_all", [], "any", false, false, false, 152), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 154), "mailbox", [], "any", false, false, false, 154), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 155), "activate", [], "any", false, false, false, 155), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 156), "deactivate", [], "any", false, false, false, 156), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 157), "remove", [], "any", false, false, false, 157), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 159), "tls_enforce_in", [], "any", false, false, false, 159), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 160), "activate", [], "any", false, false, false, 160), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 161), "deactivate", [], "any", false, false, false, 161), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 163), "tls_enforce_out", [], "any", false, false, false, 163), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 164), "activate", [], "any", false, false, false, 164), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 165), "deactivate", [], "any", false, false, false, 165), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 167), "quarantine_notification", [], "any", false, false, false, 167), "html", null, true);
        yield "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 168), "hourly", [], "any", false, false, false, 168), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 169), "daily", [], "any", false, false, false, 169), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 170), "weekly", [], "any", false, false, false, 170), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 171), "never", [], "any", false, false, false, 171), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 173), "q_reject", [], "any", false, false, false, 173), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 174), "q_add_header", [], "any", false, false, false, 174), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 175), "q_all", [], "any", false, false, false, 175), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 177), "allowed_protocols", [], "any", false, false, false, 177), "html", null, true);
        yield "</li>
            <li class=\"dropdown-header\">IMAP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 179), "activate", [], "any", false, false, false, 179), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 180), "deactivate", [], "any", false, false, false, 180), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">POP3</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 183), "activate", [], "any", false, false, false, 183), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 184), "deactivate", [], "any", false, false, false, 184), "html", null, true);
        yield "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">SMTP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 187), "activate", [], "any", false, false, false, 187), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 188), "deactivate", [], "any", false, false, false, 188), "html", null, true);
        yield "</a></li>
            <li class=\"dropdown-header\">Sieve</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 190), "activate", [], "any", false, false, false, 190), "html", null, true);
        yield "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 191), "deactivate", [], "any", false, false, false, 191), "html", null, true);
        yield "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-xs-lg btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 193), "add_mailbox", [], "any", false, false, false, 193), "html", null, true);
        yield "</a>
        </div>
        <div class=\"btn-group d-none d-lg-flex\">
          <a class=\"btn btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 196), "toggle_all", [], "any", false, false, false, 196), "html", null, true);
        yield "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 197), "quick_actions", [], "any", false, false, false, 197), "html", null, true);
        yield "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 199), "expand_all", [], "any", false, false, false, 199), "html", null, true);
        yield "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 200), "collapse_all", [], "any", false, false, false, 200), "html", null, true);
        yield "</a></li>
          </ul>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 203), "mailbox", [], "any", false, false, false, 203), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 205), "activate", [], "any", false, false, false, 205), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"2\"}' href=\"#\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 206), "disable_login", [], "any", false, false, false, 206), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 207), "deactivate", [], "any", false, false, false, 207), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 209), "remove", [], "any", false, false, false, 209), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">TLS</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 215), "tls_enforce_in", [], "any", false, false, false, 215), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 216), "activate", [], "any", false, false, false, 216), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 217), "deactivate", [], "any", false, false, false, 217), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 219), "tls_enforce_out", [], "any", false, false, false, 219), "html", null, true);
        yield "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 220), "activate", [], "any", false, false, false, 220), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 221), "deactivate", [], "any", false, false, false, 221), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 225), "allowed_protocols", [], "any", false, false, false, 225), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">IMAP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 228), "activate", [], "any", false, false, false, 228), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 229), "deactivate", [], "any", false, false, false, 229), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">POP3</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 232), "activate", [], "any", false, false, false, 232), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 233), "deactivate", [], "any", false, false, false, 233), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">SMTP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 236), "activate", [], "any", false, false, false, 236), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 237), "deactivate", [], "any", false, false, false, 237), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">Sieve</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 240), "activate", [], "any", false, false, false, 240), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 241), "deactivate", [], "any", false, false, false, 241), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">ActiveSync (EAS)</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"eas_access\":1}' href=\"#\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 244), "activate", [], "any", false, false, false, 244), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"eas_access\":0}' href=\"#\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 245), "deactivate", [], "any", false, false, false, 245), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">CalDAV/CardDAV (DAV)</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"dav_access\":1}' href=\"#\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 248), "activate", [], "any", false, false, false, 248), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"dav_access\":0}' href=\"#\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 249), "deactivate", [], "any", false, false, false, 249), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 253), "quarantine_notification", [], "any", false, false, false, 253), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 255), "hourly", [], "any", false, false, false, 255), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 256), "daily", [], "any", false, false, false, 256), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 257), "weekly", [], "any", false, false, false, 257), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 258), "never", [], "any", false, false, false, 258), "html", null, true);
        yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 260), "q_reject", [], "any", false, false, false, 260), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 261), "q_add_header", [], "any", false, false, false, 261), "html", null, true);
        yield "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 262), "q_all", [], "any", false, false, false, 262), "html", null, true);
        yield "</a></li>
            </ul>
          </div>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 265), "add_mailbox", [], "any", false, false, false, 265), "html", null, true);
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
        return "mailbox/tab-mailboxes.twig";
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
        return array (  740 => 265,  734 => 262,  730 => 261,  726 => 260,  721 => 258,  717 => 257,  713 => 256,  709 => 255,  704 => 253,  697 => 249,  693 => 248,  687 => 245,  683 => 244,  677 => 241,  673 => 240,  667 => 237,  663 => 236,  657 => 233,  653 => 232,  647 => 229,  643 => 228,  637 => 225,  630 => 221,  626 => 220,  622 => 219,  617 => 217,  613 => 216,  609 => 215,  600 => 209,  595 => 207,  591 => 206,  587 => 205,  582 => 203,  576 => 200,  572 => 199,  567 => 197,  563 => 196,  557 => 193,  552 => 191,  548 => 190,  543 => 188,  539 => 187,  533 => 184,  529 => 183,  523 => 180,  519 => 179,  514 => 177,  509 => 175,  505 => 174,  501 => 173,  496 => 171,  492 => 170,  488 => 169,  484 => 168,  480 => 167,  475 => 165,  471 => 164,  467 => 163,  462 => 161,  458 => 160,  454 => 159,  449 => 157,  445 => 156,  441 => 155,  437 => 154,  432 => 152,  428 => 151,  423 => 149,  419 => 148,  410 => 142,  404 => 139,  400 => 138,  396 => 137,  391 => 135,  387 => 134,  383 => 133,  379 => 132,  374 => 130,  367 => 126,  363 => 125,  357 => 122,  353 => 121,  347 => 118,  343 => 117,  337 => 114,  333 => 113,  327 => 110,  323 => 109,  317 => 106,  313 => 105,  307 => 102,  300 => 98,  296 => 97,  292 => 96,  287 => 94,  283 => 93,  279 => 92,  270 => 86,  265 => 84,  261 => 83,  257 => 82,  252 => 80,  246 => 77,  242 => 76,  237 => 74,  233 => 73,  227 => 70,  222 => 68,  218 => 67,  212 => 64,  208 => 63,  202 => 60,  198 => 59,  192 => 56,  188 => 55,  182 => 52,  178 => 51,  172 => 48,  168 => 47,  163 => 45,  158 => 43,  154 => 42,  150 => 41,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  129 => 35,  124 => 33,  120 => 32,  116 => 31,  111 => 29,  107 => 28,  103 => 27,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/tab-mailboxes.twig", "/web/templates/mailbox/tab-mailboxes.twig");
    }
}
