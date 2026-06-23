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

/* user/tab-user-auth.twig */
class __TwigTemplate_a4cd3d723e52c828198fdd115093f5a5 extends Template
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
        yield "<div class=\"tab-pane fade in active show\" id=\"tab-user-auth\" role=\"tabpanel\" aria-labelledby=\"tab-user-auth\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-user-auth\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-user-auth\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 5), "mailbox_general", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 7), "mailbox_general", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-user-auth\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 10), "force_pw_update", [], "any", false, false, false, 10) == "1")) {
            // line 11
            yield "        <div class=\"alert alert-danger\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 11), "force_pw_update", [], "any", false, false, false, 11);
            yield "</div>
      ";
        }
        // line 13
        yield "      <div class=\"row\">
        <div class=\"col-xl-9 col-lg-7 col-md-12 col-12 d-flex flex-column mb-4\">
          ";
        // line 15
        if ( !($context["skip_sogo"] ?? null)) {
            // line 16
            yield "          <div class=\"row mb-4\">
            <div class=\"col-12 col-lg-6 col-xl-4\">
              ";
            // line 18
            if (((($context["dual_login"] ?? null) && (($context["allow_admin_email_login"] ?? null) == "n")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 18), "force_pw_update", [], "any", false, false, false, 18) == "1"))) {
                // line 19
                yield "                <button disabled class=\"btn btn-secondary btn-block btn-xs-lg w-100\">
                  ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 20), "open_webmail_sso", [], "any", false, false, false, 20), "html", null, true);
                yield " <i class=\"bi bi-arrow-right\"></i>
                </button>
              ";
            } elseif (            // line 22
($context["dual_login"] ?? null)) {
                // line 23
                yield "                <a href=\"/sogo-auth.php?login=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-primary btn-lg btn-block btn-xs-lg w-100\">
                  ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 24), "open_webmail_sso", [], "any", false, false, false, 24), "html", null, true);
                yield " <i class=\"bi bi-arrow-right\"></i>
                </a>
              ";
            } else {
                // line 27
                yield "                <a href=\"/SOGo/so\" role=\"button\" class=\"btn btn-primary btn-lg btn-block btn-xs-lg w-100\">
                  ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 28), "open_webmail_sso", [], "any", false, false, false, 28), "html", null, true);
                yield " <i class=\"bi bi-arrow-right\"></i>
                </a>
              ";
            }
            // line 31
            yield "            </div>
          </div>
          ";
        }
        // line 34
        yield "
          <legend>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 35), "overview", [], "any", false, false, false, 35), "html", null, true);
        yield "</legend>
          <hr>
          <div class=\"d-flex\">
            <h5><i class=\"bi bi-envelope-fill\"></i> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "messages", [], "any", false, false, false, 38), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 38), "messages", [], "any", false, false, false, 38), "html", null, true);
        yield "</h5>
            <h5 class=\"ms-auto\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(formatBytes(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "quota_used", [], "any", false, false, false, 39), 2), "html", null, true);
        yield " / ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "quota", [], "any", false, false, false, 39) == 0)) {
            yield "∞";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(formatBytes(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "quota", [], "any", false, false, false, 39), 2), "html", null, true);
        }
        yield "</h5>
          </div>
          <div class=\"progress mb-4\" style=\"height: 20px\";>
            <div class=\"progress-bar bg-";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_class", [], "any", false, false, false, 42), "html", null, true);
        yield "\" role=\"progressbar\" aria-valuenow=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_in_use", [], "any", false, false, false, 42), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width:2em;width: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_in_use", [], "any", false, false, false, 42), "html", null, true);
        yield "%;\">
              ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "percent_in_use", [], "any", false, false, false, 43), "html", null, true);
        yield "%
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-12 col-md-3 d-flex\">
              <span class=\"mt-2 w-100 text-md-end\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 49), "protocols", [], "any", false, false, false, 49), "html", null, true);
        yield ":</span>
            </div>
            <div class=\"col-12 col-md-9 d-flex\">
              <i style=\"font-size: 16px; cursor: pointer;\" class=\"bi bi-patch-question-fill m-2 ms-0\" data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"bottom\" title=\"";
        // line 52
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 52), "direct_protocol_access", [], "any", false, false, false, 52);
        yield "\"></i>
              <div class=\"d-flex flex-wrap\">
              ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 54), "imap_access", [], "any", false, false, false, 54) == 1)) {
            yield "<div class=\"badge fs-6 bg-success m-2\">IMAP <i class=\"bi bi-check-lg\"></i></div>";
        } else {
            yield "<div class=\"badge fs-6 bg-danger m-2\">IMAP <i class=\"bi bi-x-lg\"></i></div>";
        }
        // line 55
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 55), "smtp_access", [], "any", false, false, false, 55) == 1)) {
            yield "<div class=\"badge fs-6 bg-success m-2\">SMTP <i class=\"bi bi-check-lg\"></i></div>";
        } else {
            yield "<div class=\"badge fs-6 bg-danger m-2\">SMTP <i class=\"bi bi-x-lg\"></i></div>";
        }
        // line 56
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 56), "sieve_access", [], "any", false, false, false, 56) == 1)) {
            yield "<div class=\"badge fs-6 bg-success m-2\">Sieve <i class=\"bi bi-check-lg\"></i></div>";
        } else {
            yield "<div class=\"badge fs-6 bg-danger m-2\">Sieve <i class=\"bi bi-x-lg\"></i></div>";
        }
        // line 57
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 57), "pop3_access", [], "any", false, false, false, 57) == 1)) {
            yield "<div class=\"badge fs-6 bg-success m-2\">POP3 <i class=\"bi bi-check-lg\"></i></div>";
        } else {
            yield "<div class=\"badge fs-6 bg-danger m-2\">POP3 <i class=\"bi bi-x-lg\"></i></div>";
        }
        // line 58
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 58), "eas_access", [], "any", false, false, false, 58) == 1)) {
            yield "<div class=\"badge fs-6 bg-success m-2\">ActiveSync <i class=\"bi bi-check-lg\"></i></div>";
        } else {
            yield "<div class=\"badge fs-6 bg-danger m-2\">ActiveSync <i class=\"bi bi-x-lg\"></i></div>";
        }
        // line 59
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 59), "dav_access", [], "any", false, false, false, 59) == 1)) {
            yield "<div class=\"badge fs-6 bg-success m-2\">CalDAV/CardDAV <i class=\"bi bi-check-lg\"></i></div>";
        } else {
            yield "<div class=\"badge fs-6 bg-danger m-2\">CalDAV/CardDAV <i class=\"bi bi-x-lg\"></i></div>";
        }
        // line 60
        yield "              </div>
            </div>
          </div>
          <div class=\"row mt-2\">
            <div class=\"col-12 col-md-3 d-flex\">
              <span class=\"mt-2 w-100 text-md-end\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 65), "apple_connection_profile", [], "any", false, false, false, 65), "html", null, true);
        yield ":</span>
            </div>
            <div class=\"col-12 col-md-8\">
              <div class=\"d-flex\">
                <i style=\"font-size: 16px; cursor: pointer;\" class=\"bi bi-patch-question-fill me-2\" data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"bottom\" title=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 69), "apple_connection_profile_mailonly", [], "any", false, false, false, 69), "html", null, true);
        yield "\"></i>
                <a href=\"/mobileconfig.php?only_email\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 70), "email", [], "any", false, false, false, 70), "html", null, true);
        yield " <small>[IMAP, SMTP]</small></a>
              </div>
              ";
        // line 72
        if ( !($context["skip_sogo"] ?? null)) {
            // line 73
            yield "              <div class=\"d-flex\">
                <i style=\"font-size: 16px; cursor: pointer;\" class=\"bi bi-patch-question-fill me-2\" data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"bottom\" title=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 74), "apple_connection_profile_complete", [], "any", false, false, false, 74), "html", null, true);
            yield "\"></i>
                <a href=\"/mobileconfig.php\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 75), "email_and_dav", [], "any", false, false, false, 75), "html", null, true);
            yield " <small>[IMAP, SMTP, Cal/CardDAV]</small></a>
              </div>
              ";
        }
        // line 78
        yield "            </div>
          </div>
          <div class=\"row mt-2\">
            <div class=\"col-12 col-md-3 d-flex\">
              <span class=\"mt-2 w-100 text-md-end\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 82), "apple_connection_profile", [], "any", false, false, false, 82), "html", null, true);
        yield "<br>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 82), "with_app_password", [], "any", false, false, false, 82), "html", null, true);
        yield ":</span>
            </div>
            <div class=\"col-12 col-md-9\">
              <div class=\"d-flex\">
                <i style=\"font-size: 16px; cursor: pointer;\" class=\"bi bi-patch-question-fill me-2\" data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"bottom\" title=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 86), "apple_connection_profile_mailonly", [], "any", false, false, false, 86), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 86), "apple_connection_profile_with_app_password", [], "any", false, false, false, 86), "html", null, true);
        yield "\"></i>
                <a href=\"/mobileconfig.php?only_email&amp;app_password\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 87), "email", [], "any", false, false, false, 87), "html", null, true);
        yield " <small>[IMAP, SMTP]</small></a>
              </div>
              ";
        // line 89
        if ( !($context["skip_sogo"] ?? null)) {
            // line 90
            yield "              <div class=\"d-flex\">
                <i style=\"font-size: 16px; cursor: pointer;\" class=\"bi bi-patch-question-fill me-2\" data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"bottom\" title=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 91), "apple_connection_profile_complete", [], "any", false, false, false, 91), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 91), "apple_connection_profile_with_app_password", [], "any", false, false, false, 91), "html", null, true);
            yield "\"></i>
                <a href=\"/mobileconfig.php?app_password\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 92), "email_and_dav", [], "any", false, false, false, 92), "html", null, true);
            yield " <small>[IMAP, SMTP, Cal/CardDAV]</small></a>
              </div>
              ";
        }
        // line 95
        yield "            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12 d-flex flex-column text-center align-items-center mt-4\">
              <a target=\"_blank\" href=\"https://mailcow.github.io/mailcow-dockerized-docs/client/client/#";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["clientconfigstr"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 99), "client_configuration", [], "any", false, false, false, 99), "html", null, true);
        yield "</a>
              <a class=\"mt-2\" href=\"#userFilterModal\" data-bs-toggle=\"modal\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 100), "show_sieve_filters", [], "any", false, false, false, 100), "html", null, true);
        yield "</a>
            </div>
          </div>

          ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "authsource", [], "any", false, false, false, 104) == "mailcow")) {
            // line 105
            yield "          <legend class=\"mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 105), "authentication", [], "any", false, false, false, 105), "html", null, true);
            yield "</legend>
          <hr>
          ";
            // line 108
            yield "          <div class=\"row\">
            <div class=\"col-12 col-md-3 d-flex\"></div>
            <div class=\"col-12 col-md-9 d-flex flex-wrap\">
              <a class=\"btn btn-secondary\" href=\"#pwChangeModal\" data-bs-toggle=\"modal\"><i class=\"bi bi-pencil-fill\"></i> ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 111), "change_password", [], "any", false, false, false, 111), "html", null, true);
            yield "</a>
              ";
            // line 112
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "pw_reset", [], "any", false, false, false, 112) == 1)) {
                // line 113
                yield "              <a class=\"btn btn-secondary ms-4\" href=\"#pwRecoveryEmailModal\" data-bs-toggle=\"modal\"><i class=\"bi bi-pencil-fill\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 113), "pw_recovery_email", [], "any", false, false, false, 113), "html", null, true);
                yield "</a></p>
              ";
            }
            // line 115
            yield "            </div>
          </div>
          ";
        }
        // line 118
        yield "          ";
        // line 119
        yield "          ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "authsource", [], "any", false, false, false, 119) == "mailcow") || (CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "authsource", [], "any", false, false, false, 119) == "ldap"))) {
            // line 120
            yield "          <div class=\"row mt-4\">
            <div class=\"col-12 col-md-3 d-flex\">
              <span class=\"mt-2 w-100 text-md-end\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 122), "tfa", [], "any", false, false, false, 122), "html", null, true);
            yield ":</span>
            </div>
            <div class=\"col-12 col-md-9 d-flex flex-wrap justify-content-center justify-content-sm-start\">
              <span id=\"tfa_pretty\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tfa_data"] ?? null), "pretty", [], "any", false, false, false, 125), "html", null, true);
            yield "</span>
              ";
            // line 126
            yield from             $this->loadTemplate("tfa_keys.twig", "user/tab-user-auth.twig", 126)->unwrap()->yield($context);
            // line 127
            yield "            </div>
          </div>
          <div class=\"row mt-2 mb-4\">
            <div class=\"col-12 col-md-3 d-flex\">
              <span class=\"mt-2 w-100 text-md-end\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 131), "set_tfa", [], "any", false, false, false, 131), "html", null, true);
            yield ":</span>
            </div>
            <div class=\"col-12 col-md-9 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start\">
              <i style=\"font-size: 16px; cursor: pointer;\" class=\"bi bi-patch-question-fill m-2 ms-0\" data-bs-toggle=\"tooltip\" data-bs-html=\"true\" data-bs-placement=\"bottom\" title=\"";
            // line 134
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 134), "tfa_info", [], "any", false, false, false, 134);
            yield "\"></i>
              <select data-style=\"ms-2 btn btn-sm dropdown-toggle bs-placeholder btn-secondary\" data-width=\"fit\" id=\"selectTFA\" class=\"selectpicker\" title=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 135), "select", [], "any", false, false, false, 135), "html", null, true);
            yield "\">
                <option value=\"yubi_otp\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 136), "yubi_otp", [], "any", false, false, false, 136), "html", null, true);
            yield "</option>
                <option value=\"webauthn\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 137), "webauthn", [], "any", false, false, false, 137), "html", null, true);
            yield "</option>
                <option value=\"totp\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 138), "totp", [], "any", false, false, false, 138), "html", null, true);
            yield "</option>
                <option value=\"none\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 139), "none", [], "any", false, false, false, 139), "html", null, true);
            yield "</option>
              </select>
            </div>
          </div>
          ";
        }
        // line 144
        yield "          ";
        // line 145
        yield "          ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "authsource", [], "any", false, false, false, 145) == "mailcow")) {
            // line 146
            yield "          <div class=\"row mt-4\">
            <div class=\"col-sm-3 col-12 text-sm-end text-start\">
              <p><i class=\"bi bi-shield-fill-check\"></i> ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 148), "fido2_auth", [], "any", false, false, false, 148), "html", null, true);
            yield "</p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-sm-3 col-12 text-sm-end text-start mb-4\">
              ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 153), "known_ids", [], "any", false, false, false, 153), "html", null, true);
            yield ":
            </div>
            <div class=\"col-sm-9 col-12\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover table-condensed\" id=\"fido2_keys\">
                  <tr>
                    <th>ID</th>
                    <th style=\"min-width:240px;text-align: right\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 160), "action", [], "any", false, false, false, 160), "html", null, true);
            yield "</th>
                  </tr>
                  ";
            // line 162
            yield from             $this->loadTemplate("fido2.twig", "user/tab-user-auth.twig", 162)->unwrap()->yield($context);
            // line 163
            yield "                </table>
              </div>
              <br>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-3 col-sm-9\">
              <div class=\"btn-group nowrap\">
                <button class=\"btn btn-sm btn-primary d-block d-sm-inline\" id=\"register-fido2\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 171), "set_fido2", [], "any", false, false, false, 171), "html", null, true);
            yield "</button>
                <button type=\"button\" class=\"btn btn-sm btn-xs-lg btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"#\" id=\"register-fido2-touchid\"><i class=\"bi bi-apple\"></i> ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 174), "set_fido2_touchid", [], "any", false, false, false, 174), "html", null, true);
            yield "</a></li>
                </ul>
              </div>
            </div>
          </div>
          <br>
          <div class=\"row\" id=\"status-fido2\">
            <div class=\"col-sm-3 col-5 text-end\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 181), "register_status", [], "any", false, false, false, 181), "html", null, true);
            yield ":</div>
            <div class=\"col-sm-9 col-7\">
              <div id=\"fido2-alerts\">-</div>
            </div>
            <br>
          </div>
          ";
        }
        // line 188
        yield "        </div>
        <div class=\"ms-auto col-xl-3 col-lg-5 col-md-12 col-12 d-flex flex-column well flex-grow-1\" id=\"recent-logins\">
          <legend class=\"d-flex\">
            <span>";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 191), "recent_successful_connections", [], "any", false, false, false, 191), "html", null, true);
        yield "</span>
            <div id=\"spinner-last-login\" class=\"ms-auto my-auto spinner-border spinner-border-sm d-none\" role=\"status\">
              <span class=\"visually-hidden\">Loading...</span>
            </div>
          </legend>
          <hr>
          <div class=\"d-flex\">
            <span class=\"clear-last-logins mt-auto mb-2\">
              ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 199), "clear_recent_successful_connections", [], "any", false, false, false, 199), "html", null, true);
        yield "
            </span>
            <div class=\"dropdown mt-4 mb-2 ms-auto\">
              <button class=\"btn btn-secondary btn-xs btn-xs-lg dropdown-toggle\" type=\"button\" id=\"history_sasl_days\" data-bs-toggle=\"dropdown\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 202), "login_history", [], "any", false, false, false, 202), "html", null, true);
        yield "</button>
              <ul class=\"dropdown-menu\">
                <li class=\"login-history\" data-days=\"1\"><a class=\"dropdown-item\" href=\"#\">1 ";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 204), "day", [], "any", false, false, false, 204), "html", null, true);
        yield "</a></li>
                <li class=\"login-history\" data-days=\"7\"><a class=\"dropdown-item active\" href=\"#\">1 ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 205), "week", [], "any", false, false, false, 205), "html", null, true);
        yield "</a></li>
                <li class=\"login-history\" data-days=\"14\"><a class=\"dropdown-item\" href=\"#\">2 ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 206), "weeks", [], "any", false, false, false, 206), "html", null, true);
        yield "</a></li>
                <li class=\"login-history\" data-days=\"31\"><a class=\"dropdown-item\" href=\"#\">1 ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 207), "month", [], "any", false, false, false, 207), "html", null, true);
        yield "</a></li>
              </ul>
            </div>
          </div>
          <ul class=\"list-group last-sasl-login overflow-auto\" style=\"flex: 1 1 0; min-height: 400px;\"></ul>
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
        return "user/tab-user-auth.twig";
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
        return array (  510 => 207,  506 => 206,  502 => 205,  498 => 204,  493 => 202,  487 => 199,  476 => 191,  471 => 188,  461 => 181,  451 => 174,  445 => 171,  435 => 163,  433 => 162,  428 => 160,  418 => 153,  410 => 148,  406 => 146,  403 => 145,  401 => 144,  393 => 139,  389 => 138,  385 => 137,  381 => 136,  377 => 135,  373 => 134,  367 => 131,  361 => 127,  359 => 126,  355 => 125,  349 => 122,  345 => 120,  342 => 119,  340 => 118,  335 => 115,  329 => 113,  327 => 112,  323 => 111,  318 => 108,  312 => 105,  310 => 104,  303 => 100,  297 => 99,  291 => 95,  285 => 92,  279 => 91,  276 => 90,  274 => 89,  269 => 87,  263 => 86,  254 => 82,  248 => 78,  242 => 75,  238 => 74,  235 => 73,  233 => 72,  228 => 70,  224 => 69,  217 => 65,  210 => 60,  203 => 59,  196 => 58,  189 => 57,  182 => 56,  175 => 55,  169 => 54,  164 => 52,  158 => 49,  149 => 43,  141 => 42,  129 => 39,  123 => 38,  117 => 35,  114 => 34,  109 => 31,  103 => 28,  100 => 27,  94 => 24,  89 => 23,  87 => 22,  82 => 20,  79 => 19,  77 => 18,  73 => 16,  71 => 15,  67 => 13,  61 => 11,  59 => 10,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/tab-user-auth.twig", "/web/templates/user/tab-user-auth.twig");
    }
}
