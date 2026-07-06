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

/* dashboard.twig */
class __TwigTemplate_f42852ab11afb4c13ed081824d974c6b extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "dashboard.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<ul class=\"nav nav-tabs\" role=\"tablist\">
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link active\" data-bs-target=\"#tab-containers\" aria-controls=\"tab-containers\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 5), "system_containers", [], "any", false, false, false, 5), "html", null, true);
        yield "</button></li>
  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 7), "logs", [], "any", false, false, false, 7), "html", null, true);
        yield "</a>
    <ul class=\"dropdown-menu\">
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 9), "in_memory_logs", [], "any", false, false, false, 9), "html", null, true);
        yield "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-postfix-logs\" aria-selected=\"false\" aria-controls=\"tab-postfix-logs\" role=\"tab\" data-bs-toggle=\"tab\">Postfix</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-dovecot-logs\" aria-selected=\"false\" aria-controls=\"tab-dovecot-logs\" role=\"tab\" data-bs-toggle=\"tab\">Dovecot</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-sogo-logs\" aria-selected=\"false\" aria-controls=\"tab-sogo-logs\" role=\"tab\" data-bs-toggle=\"tab\">SOGo</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-netfilter-logs\" aria-selected=\"false\" aria-controls=\"tab-netfilter-logs\" role=\"tab\" data-bs-toggle=\"tab\">Netfilter</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-autodiscover-logs\" aria-selected=\"false\" aria-controls=\"tab-autodiscover-logs\" role=\"tab\" data-bs-toggle=\"tab\">Autodiscover</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-watchdog-logs\" aria-selected=\"false\" aria-controls=\"tab-watchdog-logs\" role=\"tab\" data-bs-toggle=\"tab\">Watchdog</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-acme-logs\" aria-selected=\"false\" aria-controls=\"tab-acme-logs\" role=\"tab\" data-bs-toggle=\"tab\">ACME</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-api-logs\" aria-selected=\"false\" aria-controls=\"tab-api-logs\" role=\"tab\" data-bs-toggle=\"tab\">API</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-api-rl\" aria-selected=\"false\" aria-controls=\"tab-api-rl\" role=\"tab\" data-bs-toggle=\"tab\">Ratelimits</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-cron-logs\" aria-selected=\"false\" aria-controls=\"tab-api-rl\" role=\"tab\" data-bs-toggle=\"tab\">Crontasks</button></li>
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 20), "external_logs", [], "any", false, false, false, 20), "html", null, true);
        yield "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-rspamd-history\" aria-selected=\"false\" aria-controls=\"tab-rspamd-history\" role=\"tab\" data-bs-toggle=\"tab\">Rspamd</button></li>
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 22), "static_logs", [], "any", false, false, false, 22), "html", null, true);
        yield "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-ui\" aria-selected=\"false\" aria-controls=\"tab-ui\" role=\"tab\" data-bs-toggle=\"tab\">Mailcow UI</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-sasl\" aria-selected=\"false\" aria-controls=\"tab-sasl\" role=\"tab\" data-bs-toggle=\"tab\">SASL</button></li>
    </ul>
  </li>
</ul>

<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"tab-content\" style=\"padding-top:20px\">
      <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab-containers\">

        <div class=\"card mb-4\">
          <div class=\"card-header fs-5\">
            <span>";
        // line 36
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 36);
        yield "</span>
          </div>
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col-sm-12 col-md-4 d-flex flex-column\">
                <img class=\"main-logo img-responsive my-auto m-auto\" alt=\"mailcow-logo\" style=\"max-width: 85%; max-height: 85%;\" src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
                <img class=\"main-logo-dark img-responsive my-auto m-auto\" alt=\"mailcow-logo-dark\" style=\"max-width: 85%; max-height: 85%;\" src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("logo_dark", $context)) ? (Twig\Extension\CoreExtension::default(($context["logo_dark"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        yield "\">
              </div>
              <div class=\"col-sm-12 col-md-8\">
                <div style=\"margin-top: 10px;\">
                  <table class=\"table table-striped w-100\">
                    <tbody>
                      <tr>
                        <td>Hostname</td>
                        <td class=\"text-break\"><div>
                          <p><b>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
        yield "</b></p>
                        </div></td>
                      </tr>
                      <tr>
                        <td>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 55), "architecture", [], "any", false, false, false, 55), "html", null, true);
        yield "</td>
                        <td class=\"text-break\"><div>
                          <p id=\"host_architecture\">-</p>
                        </div></td>
                      </tr>
                      <tr>
                        <td>IPs</td>
                        <td class=\"text-break\">
                          ";
        // line 63
        if ((($context["ip_check"] ?? null) == 1)) {
            // line 64
            yield "                            <span class=\"d-none\" id=\"host_ipv4\">-</span>
                            <span class=\"d-none mb-2\" id=\"host_ipv6\">-</span>
                            <button class=\"d-block btn btn-primary btn-sm\" id=\"host_show_ip\">
                              <span class=\"text\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 67), "show_ip", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                              <div class=\"spinner-border spinner-border-sm d-none\" role=\"status\">
                                <span class=\"visually-hidden\">Loading...</span>
                              </div>
                            </button>
                          ";
        } else {
            // line 73
            yield "                            <span class=\"d-block\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 73), "ip_check_disabled", [], "any", false, false, false, 73);
            yield "</span>
                          ";
        }
        // line 75
        yield "                        </td>
                      </tr>
                      <tr>
                        <td>Version</td>
                        <td class=\"text-break\">
                          <div class=\"fw-bolder\">
                            <p ><a href=\"#\" id=\"mailcow_version\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 81), "html", null, true);
        yield "</a></p>
                            <p id=\"mailcow_update\"></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 87), "current_time", [], "any", false, false, false, 87), "html", null, true);
        yield "</td>
                        <td id=\"host_date\" class=\"text-break\">-</td>
                      </tr>
                      <tr>
                        <td>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 91), "timezone", [], "any", false, false, false, 91), "html", null, true);
        yield "</td>
                        <td class=\"text-break\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["timezone"] ?? null), "html", null, true);
        yield "</td>
                      </tr>
                      <tr>
                        <td>";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 95), "uptime", [], "any", false, false, false, 95), "html", null, true);
        yield "</td>
                        <td id=\"host_uptime\" class=\"text-break\">-</td>
                      </tr>
                      <tr>
                        <td>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 99), "disk_usage", [], "any", false, false, false, 99), "html", null, true);
        yield "</td>
                        <td class=\"text-break\">
                          <div>
                            <span class=\"d-block\"><i class=\"bi bi-hdd-fill\"></i> ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        yield "</span>
                            <span class=\"d-block\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[2] ?? null) : null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[4] ?? null) : null), "html", null, true);
        yield ")</span>
                          </div>
                          <div class=\"mt-2 mb-4\">
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width:";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[4] ?? null) : null), "html", null, true);
        yield "\"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class=\"col-sm-6 mt-4\">
                <h3>CPU</h3>
                <h5><span id=\"host_cpu_cores\">-</span> ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 119), "cores", [], "any", false, false, false, 119), "html", null, true);
        yield " @ <span id=\"host_cpu_usage\"></span></h5>
                <canvas id=\"host_cpu_chart\" width=\"400\" height=\"200\"></canvas>
              </div>
              <div class=\"col-sm-6 mt-4\">
                <h3>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 123), "memory", [], "any", false, false, false, 123)), "html", null, true);
        yield "</h3>
                <h5><span id=\"host_memory_total\">-</span> @ <span id=\"host_memory_usage\"></span></h5>
                <canvas id=\"host_mem_chart\" width=\"400\" height=\"200\"></canvas>
              </div>

              <div class=\"col-sm-12\">
                <legend class=\"mt-4\">
                  ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 130), "guid_and_license", [], "any", false, false, false, 130), "html", null, true);
        yield "
                </legend>
                <hr />
                <div id=\"license\">
                  <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" method=\"post\">
                    <div class=\"row\">
                      <label class=\"control-label col-sm-3\" for=\"guid\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 136), "guid", [], "any", false, false, false, 136), "html", null, true);
        yield ":</label>
                      <div class=\"col-sm-9\">
                        <div class=\"input-group\">
                          <span class=\"input-group-text\">
                            <i class=\"bi bi-suit-heart";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "valid", [], "any", false, false, false, 140) == true)) {
            yield "-fill text-danger";
        }
        yield "\"></i>
                          </span>
                          <input type=\"text\" id=\"guid\" class=\"form-control\" value=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["license_guid"] ?? null), "html", null, true);
        yield "\" readonly>
                        </div>
                        <p class=\"text-muted\">
                          ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 145), "customer_id", [], "any", false, false, false, 145), "html", null, true);
        yield ": ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "c", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "c", [], "any", false, false, false, 145), "?")) : ("?"));
        yield " -
                          ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 146), "service_id", [], "any", false, false, false, 146), "html", null, true);
        yield ": ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "s", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "s", [], "any", false, false, false, 146), "?")) : ("?"));
        yield " -
                          ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 147), "sal_level", [], "any", false, false, false, 147), "html", null, true);
        yield ": ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "m", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["gal"] ?? null), "m", [], "any", false, false, false, 147), "?")) : ("?"));
        yield "
                        </p>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"offset-sm-3 col-sm-9\">
                        <p class=\"text-muted\">";
        // line 153
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 153), "license_info", [], "any", false, false, false, 153);
        yield "</p>
                        <div class=\"btn-group\">
                          <button class=\"btn btn-sm d-block d-sm-inline btn-success\" name=\"license_validate_now\" type=\"submit\" href=\"#\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 155), "validate_license_now", [], "any", false, false, false, 155), "html", null, true);
        yield "</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- container info -->
        <div class=\"card mb-4\">
          <div class=\"card-header fs-5\">
            <span>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 168), "containers_info", [], "any", false, false, false, 168), "html", null, true);
        yield "</span>
          </div>
          <div class=\"card-body p-0\">
            <div class=\"row mx-0\">
              <!-- rest of the containers -->
              ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["containers"] ?? null));
        foreach ($context['_seq'] as $context["container"] => $context["container_info"]) {
            // line 174
            yield "                  <div class=\"col-md-6 col-sm-12 p-2\">
                    <div class=\"list-group-item p-0\">
                      <div class=\"d-flex p-2 list-group-header\">
                        <div>
                          <span class=\"fw-bold\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "</span>
                          <span class=\"d-block d-md-inline\">(";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "Config", [], "any", false, false, false, 179), "Image", [], "any", false, false, false, 179), "html", null, true);
            yield ")</span>
                          <small class=\"d-block\">(";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 180), "started_on", [], "any", false, false, false, 180), "html", null, true);
            yield " <span class=\"parse_date\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 180), "StartedAtHR", [], "any", false, false, false, 180), "html", null, true);
            yield "</span>)</small>
                          ";
            // line 181
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 181), "Running", [], "any", false, false, false, 181) == 1)) {
                // line 182
                yield "                            <span class=\"badge fs-7 bg-success loader\" style=\"min-width:100px\">
                              ";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 183), "container_running", [], "any", false, false, false, 183), "html", null, true);
                yield "
                              <span class=\"loader-dot\">.</span>
                              <span class=\"loader-dot\">.</span>
                              <span class=\"loader-dot\">.</span>
                            </span>
                          ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 188
$context["container_info"], "State", [], "any", false, false, false, 188)) {
                // line 189
                yield "                            <span class=\"badge fs-7 bg-danger\" style=\"min-width:100px\">
                              ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 190), "container_stopped", [], "any", false, false, false, 190), "html", null, true);
                yield "
                              <i class=\"bi-x ms-1\"></i>
                            </span>
                          ";
            }
            // line 194
            yield "                        </div>
                        <div class=\"mt-auto ms-auto\">
                          <button class=\"btn btn-light\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "Collapse\" aria-expanded=\"false\" aria-controls=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "Collapse\">
                            <i class=\"bi bi-caret-down-fill caret\"></i>
                          </button>
                        </div>
                      </div>
                      <div class=\"collapse p-0 list-group-details container-details-collapse\" id=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "Collapse\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "Id", [], "any", false, false, false, 201), "html", null, true);
            yield "\">
                        <div class=\"row p-2 pt-4\">
                          <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                            <h6>Disk I/O</h6>
                            <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                              <span class=\"visually-hidden\">Loading...</span>
                            </div>
                            <canvas class=\"d-none\" id=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "_DiskIOChart\" width=\"400\" height=\"200\"></canvas>
                          </div>
                          <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                            <h6>Net I/O</h6>
                            <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                              <span class=\"visually-hidden\">Loading...</span>
                            </div>
                            <canvas class=\"d-none\" id=\"";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "_NetIOChart\" width=\"400\" height=\"200\"></canvas>
                          </div>
                          <div class=\"col-12 d-flex\" style=\"height: 40px\">
                            <a href data-bs-toggle=\"modal\"
                              data-container=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container"], "html", null, true);
            yield "\"
                              data-bs-target=\"#RestartContainer\"
                              class=\"btn btn-sm btn-secondary d-flex align-items-center justify-content-center mb-2 ms-auto\"
                              style=\"height: 30px;\">";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 222), "restart_container", [], "any", false, false, false, 222), "html", null, true);
            yield "
                                <i class=\"ms-1 bi
                                ";
            // line 224
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 224), "Running", [], "any", false, false, false, 224) == 1)) {
                // line 225
                yield "                                bi-record-fill text-success
                                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 226
$context["container_info"], "State", [], "any", false, false, false, 226)) {
                // line 227
                yield "                                bi-record-fill text-danger
                                ";
            } else {
                // line 229
                yield "                                default
                                ";
            }
            // line 231
            yield "                                \"
                              ></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['container'], $context['container_info'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "            </div>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-postfix-logs\">
        <div class=\"debug-log-info\">";
        // line 246
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 246), "log_info", [], "any", false, false, false, 246), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Postfix</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_postfix_logs\" data-table=\"postfix_log\">";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 251), "refresh", [], "any", false, false, false, 251), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 255), "quick_actions", [], "any", false, false, false, 255), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"postfix_log\" data-log-url=\"postfix\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"postfix_log\" data-log-url=\"postfix\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"postfix_log\" data-table=\"postfix_log\" href=\"#\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 260), "expand_all", [], "any", false, false, false, 260), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"postfix_log\" data-table=\"postfix_log\" href=\"#\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 261), "collapse_all", [], "any", false, false, false, 261), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"postfix_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-ui\">
        <div class=\"debug-log-info\">";
        // line 269
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 269), "log_info", [], "any", false, false, false, 269), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Mailcow UI</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_ui_logs\" data-table=\"ui_logs\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 274), "refresh", [], "any", false, false, false, 274), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 278), "quick_actions", [], "any", false, false, false, 278), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"mailcow_ui\" data-table=\"ui_logs\" data-log-url=\"ui\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"mailcow_ui\" data-table=\"ui_logs\" data-log-url=\"ui\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"ui_logs\" data-table=\"ui_logs\" href=\"#\">";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 283), "expand_all", [], "any", false, false, false, 283), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"ui_logs\" data-table=\"ui_logs\" href=\"#\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 284), "collapse_all", [], "any", false, false, false, 284), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"ui_logs\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-sasl\">
        <div class=\"debug-log-info\">";
        // line 292
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 292), "log_info", [], "any", false, false, false, 292), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">SASL</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_sasl_logs\" data-table=\"sasl_logs\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 297), "refresh", [], "any", false, false, false, 297), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 301), "quick_actions", [], "any", false, false, false, 301), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"sasl_log_table\" data-table=\"sasl_logs\" data-log-url=\"ui\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"sasl_log_table\" data-table=\"sasl_logs\" data-log-url=\"ui\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sasl_logs\" data-table=\"sasl_logs\" href=\"#\">";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 306), "expand_all", [], "any", false, false, false, 306), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sasl_logs\" data-table=\"sasl_logs\" href=\"#\">";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 307), "collapse_all", [], "any", false, false, false, 307), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"sasl_logs\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-dovecot-logs\">
        <div class=\"debug-log-info\">";
        // line 315
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 315), "log_info", [], "any", false, false, false, 315), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Dovecot</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_dovecot_logs\" data-table=\"dovecot_log\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 320), "refresh", [], "any", false, false, false, 320), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 324), "quick_actions", [], "any", false, false, false, 324), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"dovecot_log\" data-log-url=\"dovecot\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"dovecot_log\" data-log-url=\"dovecot\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"dovecot_log\" data-table=\"dovecot_log\" href=\"#\">";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 329), "expand_all", [], "any", false, false, false, 329), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"dovecot_log\" data-table=\"dovecot_log\" href=\"#\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 330), "collapse_all", [], "any", false, false, false, 330), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"dovecot_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-sogo-logs\">
        <div class=\"debug-log-info\">";
        // line 338
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 338), "log_info", [], "any", false, false, false, 338), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">SOGo</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_sogo_logs\" data-table=\"sogo_log\">";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 343), "refresh", [], "any", false, false, false, 343), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 347), "quick_actions", [], "any", false, false, false, 347), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"sogo_log\" data-log-url=\"sogo\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"sogo_log\" data-log-url=\"sogo\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sogo_log\" data-table=\"sogo_log\" href=\"#\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 352), "expand_all", [], "any", false, false, false, 352), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sogo_log\" data-table=\"sogo_log\" href=\"#\">";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 353), "collapse_all", [], "any", false, false, false, 353), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"sogo_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-netfilter-logs\">
        <div class=\"debug-log-info\">";
        // line 361
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 361), "log_info", [], "any", false, false, false, 361), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Netfilter</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_netfilter_logs\" data-table=\"netfilter_log\">";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 366), "refresh", [], "any", false, false, false, 366), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 370), "quick_actions", [], "any", false, false, false, 370), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"netfilter_log\" data-log-url=\"netfilter\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"netfilter_log\" data-log-url=\"netfilter\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"netfilter_log\" data-table=\"netfilter_log\" href=\"#\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 375), "expand_all", [], "any", false, false, false, 375), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"netfilter_log\" data-table=\"netfilter_log\" href=\"#\">";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 376), "collapse_all", [], "any", false, false, false, 376), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"netfilter_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-rspamd-history\">
        <div class=\"debug-log-info\">";
        // line 384
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 384), "log_info", [], "any", false, false, false, 384), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Rspamd history</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_rspamd_history\" data-table=\"rspamd_history\">";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 389), "refresh", [], "any", false, false, false, 389), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <legend>";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 393), "chart_this_server", [], "any", false, false, false, 393), "html", null, true);
        yield "</legend><hr />
            <div id=\"chart-container\">
              <canvas id=\"rspamd_donut\" style=\"width:100%;height:400px\"></canvas>
            </div>
            <legend>";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 397), "history_all_servers", [], "any", false, false, false, 397), "html", null, true);
        yield "</legend><hr />
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 398), "quick_actions", [], "any", false, false, false, 398), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rspamd_history\" data-table=\"rspamd_history\" data-log-url=\"rspamd-history\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rspamd_history\" data-table=\"rspamd_history\" data-log-url=\"rspamd-history\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"rspamd_history\" data-table=\"rspamd_history\" href=\"#\">";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 403), "expand_all", [], "any", false, false, false, 403), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"rspamd_history\" data-table=\"rspamd_history\" href=\"#\">";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 404), "collapse_all", [], "any", false, false, false, 404), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"rspamd_history\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-autodiscover-logs\">
        <div class=\"debug-log-info\">";
        // line 412
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 412), "log_info", [], "any", false, false, false, 412), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Autodiscover</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_autodiscover_logs\" data-table=\"autodiscover_log\">";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 417), "refresh", [], "any", false, false, false, 417), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 421), "quick_actions", [], "any", false, false, false, 421), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"autodiscover_log\" data-table=\"autodiscover_log\" data-log-url=\"autodiscover\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"autodiscover_log\" data-table=\"autodiscover_log\" data-log-url=\"autodiscover\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"autodiscover_log\" data-table=\"autodiscover_log\" href=\"#\">";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 426), "expand_all", [], "any", false, false, false, 426), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"autodiscover_log\" data-table=\"autodiscover_log\" href=\"#\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 427), "collapse_all", [], "any", false, false, false, 427), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"autodiscover_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-watchdog-logs\">
        <div class=\"debug-log-info\">";
        // line 435
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 435), "log_info", [], "any", false, false, false, 435), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Watchdog</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_watchdog_logs\" data-table=\"watchdog_log\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 440), "refresh", [], "any", false, false, false, 440), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 444), "quick_actions", [], "any", false, false, false, 444), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"watchdog\" data-table=\"watchdog_log\" data-log-url=\"watchdog\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"watchdog\" data-table=\"watchdog_log\" data-log-url=\"watchdog\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"watchdog_log\" data-table=\"watchdog_log\" href=\"#\">";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 449), "expand_all", [], "any", false, false, false, 449), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"watchdog_log\" data-table=\"watchdog_log\" href=\"#\">";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 450), "collapse_all", [], "any", false, false, false, 450), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"watchdog_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-acme-logs\">
        <div class=\"debug-log-info\">";
        // line 458
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 458), "log_info", [], "any", false, false, false, 458), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">ACME</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_acme_logs\" data-table=\"acme_log\">";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 463), "refresh", [], "any", false, false, false, 463), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 467), "quick_actions", [], "any", false, false, false, 467), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"acme_log\" data-log-url=\"acme\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"acme_log\" data-log-url=\"acme\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"acme_log\" data-table=\"acme_log\" href=\"#\">";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 472), "expand_all", [], "any", false, false, false, 472), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"acme_log\" data-table=\"acme_log\" href=\"#\">";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 473), "collapse_all", [], "any", false, false, false, 473), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"acme_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-api-logs\">
        <div class=\"debug-log-info\">";
        // line 481
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 481), "log_info", [], "any", false, false, false, 481), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">API</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_api_logs\" data-table=\"api_log\">";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 486), "refresh", [], "any", false, false, false, 486), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 490), "quick_actions", [], "any", false, false, false, 490), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"apilog\" data-table=\"api_log\" data-log-url=\"api\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"apilog\" data-table=\"api_log\" data-log-url=\"api\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"api_log\" data-table=\"api_log\" href=\"#\">";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 495), "expand_all", [], "any", false, false, false, 495), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"api_log\" data-table=\"api_log\" href=\"#\">";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 496), "collapse_all", [], "any", false, false, false, 496), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"api_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-api-rl\">
        <div class=\"debug-log-info\">";
        // line 504
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 504), "log_info", [], "any", false, false, false, 504), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Ratelimits</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_rl_logs\" data-table=\"rl_log\">";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 509), "refresh", [], "any", false, false, false, 509), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 513), "quick_actions", [], "any", false, false, false, 513), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rllog\" data-table=\"rl_log\" data-log-url=\"ratelimited\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rllog\" data-table=\"rl_log\" data-log-url=\"ratelimited\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"rl_log\" data-table=\"rl_log\" href=\"#\">";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 518), "expand_all", [], "any", false, false, false, 518), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"rl_log\" data-table=\"rl_log\" href=\"#\">";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 519), "collapse_all", [], "any", false, false, false, 519), "html", null, true);
        yield "</a></li>
            </ul>
            <p class=\"text-muted\">";
        // line 521
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 521), "hash_remove_info", [], "any", false, false, false, 521);
        yield "</p>
            <table id=\"rl_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-cron-logs\">
        <div class=\"debug-log-info\">";
        // line 528
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 528), "log_info", [], "any", false, false, false, 528), (($context["log_lines"] ?? null) + 1));
        yield "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Crontasks</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_cron_logs\" data-table=\"cron_log\">";
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 533), "refresh", [], "any", false, false, false, 533), "html", null, true);
        yield "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 537), "quick_actions", [], "any", false, false, false, 537), "html", null, true);
        yield "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"cron_log\" data-log-url=\"cron\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"cron_log\" data-log-url=\"cron\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"cron_log\" data-table=\"cron_log\" href=\"#\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 542), "expand_all", [], "any", false, false, false, 542), "html", null, true);
        yield "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"cron_log\" data-table=\"cron_log\" href=\"#\">";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 543), "collapse_all", [], "any", false, false, false, 543), "html", null, true);
        yield "</a></li>
            </ul>
            <table id=\"cron_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

    </div> <!-- /tab-content -->
  </div> <!-- /col-md-12 -->
</div> <!-- /row -->

<script type='text/javascript'>
  var lang = ";
        // line 555
        yield ($context["lang_admin"] ?? null);
        yield ";
  var lang_debug = ";
        // line 556
        yield ($context["lang_debug"] ?? null);
        yield ";
  var lang_datatables = ";
        // line 557
        yield ($context["lang_datatables"] ?? null);
        yield ";
  var csrf_token = '";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
  var log_pagination_size = Math.trunc('";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["log_pagination_size"] ?? null), "html", null, true);
        yield "');
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard.twig";
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
        return array (  1015 => 559,  1011 => 558,  1007 => 557,  1003 => 556,  999 => 555,  984 => 543,  980 => 542,  972 => 537,  965 => 533,  957 => 528,  947 => 521,  942 => 519,  938 => 518,  930 => 513,  923 => 509,  915 => 504,  904 => 496,  900 => 495,  892 => 490,  885 => 486,  877 => 481,  866 => 473,  862 => 472,  854 => 467,  847 => 463,  839 => 458,  828 => 450,  824 => 449,  816 => 444,  809 => 440,  801 => 435,  790 => 427,  786 => 426,  778 => 421,  771 => 417,  763 => 412,  752 => 404,  748 => 403,  740 => 398,  736 => 397,  729 => 393,  722 => 389,  714 => 384,  703 => 376,  699 => 375,  691 => 370,  684 => 366,  676 => 361,  665 => 353,  661 => 352,  653 => 347,  646 => 343,  638 => 338,  627 => 330,  623 => 329,  615 => 324,  608 => 320,  600 => 315,  589 => 307,  585 => 306,  577 => 301,  570 => 297,  562 => 292,  551 => 284,  547 => 283,  539 => 278,  532 => 274,  524 => 269,  513 => 261,  509 => 260,  501 => 255,  494 => 251,  486 => 246,  478 => 240,  464 => 231,  460 => 229,  456 => 227,  454 => 226,  451 => 225,  449 => 224,  444 => 222,  438 => 219,  431 => 215,  421 => 208,  409 => 201,  399 => 196,  395 => 194,  388 => 190,  385 => 189,  383 => 188,  375 => 183,  372 => 182,  370 => 181,  364 => 180,  360 => 179,  356 => 178,  350 => 174,  346 => 173,  338 => 168,  322 => 155,  317 => 153,  306 => 147,  300 => 146,  294 => 145,  288 => 142,  281 => 140,  274 => 136,  265 => 130,  255 => 123,  248 => 119,  233 => 107,  222 => 103,  218 => 102,  212 => 99,  205 => 95,  199 => 92,  195 => 91,  188 => 87,  179 => 81,  171 => 75,  165 => 73,  156 => 67,  151 => 64,  149 => 63,  138 => 55,  131 => 51,  119 => 42,  115 => 41,  107 => 36,  90 => 22,  85 => 20,  71 => 9,  66 => 7,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard.twig", "/web/templates/dashboard.twig");
    }
}
