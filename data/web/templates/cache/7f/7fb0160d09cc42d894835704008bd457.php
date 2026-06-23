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

/* modals/user.twig */
class __TwigTemplate_ce49729f2a59f258502aa4ef06329126 extends Template
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
        yield "<!-- change fido2 fn -->
<div class=\"modal fade\" id=\"fido2ChangeFn\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 6), "set_fn", [], "any", false, false, false, 6), "html", null, true);
        yield "</h3>
        <p class=\"text-muted\" style=\"word-break:break-all\" id=\"fido2_subject_desc\" data-fido2-subject=\"\"></p>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"false\" data-id=\"fido2ChangeFn\" role=\"form\" method=\"post\" autocomplete=\"off\">
          <input type=\"hidden\" class=\"form-control\" name=\"fido2_cid\" id=\"fido2_cid\">
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-4 text-end\" for=\"fido2_fn\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 14), "fn", [], "any", false, false, false, 14), "html", null, true);
        yield ":</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" class=\"form-control\" name=\"fido2_fn\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-4 col-sm-8\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"fido2ChangeFn\" data-item=\"null\" data-api-url='edit/fido2-fn' data-api-attr='{}' href=\"#\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "save", [], "any", false, false, false, 21), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain admin modal -->
<!-- add sync job modal -->
<div class=\"modal fade\" id=\"addSyncJobModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 34), "syncjob", [], "any", false, false, false, 34), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 38), "syncjob_hint", [], "any", false, false, false, 38), "html", null, true);
        yield "</p>
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_syncjob\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"host1\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 41), "hostname", [], "any", false, false, false, 41), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"host1\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2\" for=\"port1\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 47), "port", [], "any", false, false, false, 47), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"port1\" min=\"1\" max=\"65535\" value=\"143\" required>
              <small class=\"text-muted\">1-65535</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"user1\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 54), "username", [], "any", false, false, false, 54), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"user1\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2\" for=\"password1\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 60), "password", [], "any", false, false, false, 60), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"password1\" data-hibp=\"true\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"enc1\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 66), "enc_method", [], "any", false, false, false, 66), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"enc1\" title=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 68), "select", [], "any", false, false, false, 68), "html", null, true);
        yield "\" required>
                <option value=\"SSL\" selected>SSL</option>
                <option value=\"TLS\">STARTTLS</option>
                <option value=\"PLAIN\">PLAIN</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"mins_interval\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 76), "mins_interval", [], "any", false, false, false, 76), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"mins_interval\" min=\"1\" max=\"43800\" value=\"20\" required>
              <small class=\"text-muted\">1-43800</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"subfolder2\">";
        // line 83
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 83), "subfolder2", [], "any", false, false, false, 83);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"subfolder2\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"maxage\">";
        // line 89
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 89), "maxage", [], "any", false, false, false, 89);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxage\" min=\"0\" max=\"32000\" value=\"0\">
              <small class=\"text-muted\">0-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"maxbytespersecond\">";
        // line 96
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 96), "maxbytespersecond", [], "any", false, false, false, 96);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxbytespersecond\" min=\"0\" max=\"125000000\" value=\"0\">
              <small class=\"text-muted\">0-125000000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"timeout1\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 103), "timeout1", [], "any", false, false, false, 103), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout1\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"timeout2\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 110), "timeout2", [], "any", false, false, false, 110), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout2\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"exclude\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 117), "exclude", [], "any", false, false, false, 117), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"exclude\" value=\"(?i)spam|(?i)junk\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2\" for=\"custom_params\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 123), "custom_params", [], "any", false, false, false, 123), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"custom_params\" placeholder=\"--delete2folders --otheroption\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete2duplicates\" checked> ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 131), "delete2duplicates", [], "any", false, false, false, 131), "html", null, true);
        yield " (--delete2duplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete1\"> ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 138), "delete1", [], "any", false, false, false, 138), "html", null, true);
        yield " (--delete1)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"delete2\"> ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 145), "delete2", [], "any", false, false, false, 145), "html", null, true);
        yield " (--delete2)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"automap\" checked> ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 152), "automap", [], "any", false, false, false, 152), "html", null, true);
        yield " (--automap)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"skipcrossduplicates\"> ";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 159), "skipcrossduplicates", [], "any", false, false, false, 159), "html", null, true);
        yield " (--skipcrossduplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"subscribeall\" checked> ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 166), "subscribeall", [], "any", false, false, false, 166), "html", null, true);
        yield " (--subscribeall)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"dry\" checked> ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 173), "dry", [], "any", false, false, false, 173), "html", null, true);
        yield " (--dry)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 180), "active", [], "any", false, false, false, 180), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_syncjob\" data-api-url='add/syncjob' data-api-attr='{}' href=\"#\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 186), "add", [], "any", false, false, false, 186), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add sync job modal -->
<!-- app passwd modal -->
<div class=\"modal fade\" id=\"addAppPasswdModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 199), "app_password", [], "any", false, false, false, 199), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-pwgen-length=\"32\" data-id=\"add_apppasswd\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"app_name\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 205), "app_name", [], "any", false, false, false, 205), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"app_name\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2\" for=\"app_passwd\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 211), "password", [], "any", false, false, false, 211), "html", null, true);
        yield " (<a href=\"#\" class=\"generate_password\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 211), "generate", [], "any", false, false, false, 211), "html", null, true);
        yield "</a>)</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"app_passwd\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"app_passwd2\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 217), "password_repeat", [], "any", false, false, false, 217), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"app_passwd2\" autocomplete=\"new-password\" required>
              <p class=\"text-muted\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 220), "new_password_description", [], "any", false, false, false, 220), "html", null, true);
        yield "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2\" for=\"protocols\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 224), "app_passwd_protocols", [], "any", false, false, false, 224), "html", null, true);
        yield "</label>
            <div class=\"col-sm-10\">
              <select class=\"full-width-select\" data-live-search=\"true\" id=\"protocols\" name=\"protocols\" multiple>
                <option value=\"imap_access\" selected>IMAP</option>
                <option value=\"smtp_access\" selected>SMTP</option>
                <option value=\"eas_access\" selected>EAS/ActiveSync</option>
                <option value=\"dav_access\" selected>CardDAV/CalDAV</option>
                <option value=\"pop3_access\" selected>POP3</option>
                <option value=\"sieve_access\" selected>Sieve</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"form-check\">
                <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\" checked> ";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 239), "active", [], "any", false, false, false, 239), "html", null, true);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_apppasswd\" data-api-url='add/app-passwd' data-api-attr='{}' href=\"#\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 245), "add", [], "any", false, false, false, 245), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add app passwd modal -->
<!-- log modal -->
<div class=\"modal fade\" id=\"syncjobLogModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"syncjobLogModalLabel\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">Log</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <textarea class=\"form-control textarea-code\" rows=\"20\" id=\"logText\" spellcheck=\"false\"></textarea>
      </div>
    </div>
  </div>
</div><!-- log modal -->
<!-- pw change modal -->
<div class=\"modal fade\" id=\"pwChangeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"pwChangeModalLabel\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 272), "change_password", [], "any", false, false, false, 272), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"false\" data-id=\"pwchange\" role=\"form\" method=\"post\" autocomplete=\"off\">
          <div class=\"row\">
            <label class=\"control-label col-sm-3\" for=\"user_new_pass\">";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 278), "new_password", [], "any", false, false, false, 278), "html", null, true);
        yield " (<a href=\"#\" class=\"generate_password\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 278), "generate", [], "any", false, false, false, 278), "html", null, true);
        yield "</a>)</label>
            <div class=\"col-sm-9\">
              <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"user_new_pass\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row\">
            <label class=\"control-label col-sm-3\" for=\"user_new_pass2\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 284), "new_password_repeat", [], "any", false, false, false, 284), "html", null, true);
        yield "</label>
            <div class=\"col-sm-9\">
              <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"user_new_pass2\" autocomplete=\"new-password\" required>
              <p class=\"text-muted\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 287), "new_password_description", [], "any", false, false, false, 287), "html", null, true);
        yield "</p>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-3\" for=\"user_old_pass\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 292), "password_now", [], "any", false, false, false, 292), "html", null, true);
        yield "</label>
            <div class=\"col-sm-9\">
              <input type=\"password\" class=\"form-control\" name=\"user_old_pass\" autocomplete=\"off\" required>
              ";
        // line 295
        if ((($context["number_of_app_passwords"] ?? null) > 0)) {
            // line 296
            yield "                <div class=\"invalid-feedback d-block\">
                  ";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 297), "change_password_hint_app_passwords", [], "any", false, false, false, 297), ($context["number_of_app_passwords"] ?? null)), "html", null, true);
            yield "
                </div>
              ";
        }
        // line 300
        yield "            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-3 col-sm-9\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"pwchange\" data-item=\"null\" data-api-url='edit/self' data-api-attr='{}' href=\"#\">";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 304), "change_password", [], "any", false, false, false, 304), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- pw change modal -->
<!-- pw recovery email modal -->
<div class=\"modal fade\" id=\"pwRecoveryEmailModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"pwRecoveryEmailModalLabel\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 317), "pw_recovery_email", [], "any", false, false, false, 317), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"false\" data-id=\"pw_recovery_change\" role=\"form\" method=\"post\" autocomplete=\"off\">
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-3\" for=\"pw_recovery_email\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 323), "email", [], "any", false, false, false, 323), "html", null, true);
        yield "</label>
            <div class=\"col-sm-9\">
              <input type=\"email\" class=\"form-control\" name=\"pw_recovery_email\" value=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailboxdata"] ?? null), "attributes", [], "any", false, false, false, 325), "recovery_email", [], "any", false, false, false, 325), "html", null, true);
        yield "\">
              <small class=\"text-muted\">";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 326), "password_reset_info", [], "any", false, false, false, 326), "html", null, true);
        yield "</small>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-3\" for=\"user_old_pass\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 330), "password_now", [], "any", false, false, false, 330), "html", null, true);
        yield "</label>
            <div class=\"col-sm-9\">
              <input type=\"password\" class=\"form-control\" name=\"user_old_pass\" autocomplete=\"off\" required>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-3 col-sm-9\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"pw_recovery_change\" data-item=\"null\" data-api-url='edit/self' data-api-attr='{}' href=\"#\">";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 337), "save", [], "any", false, false, false, 337), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- pw recovery email modal -->
<!-- temp alias modal -->
<div class=\"modal fade\" id=\"tempAliasModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tempAliasModalLabel\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 350), "alias_create_random", [], "any", false, false, false, 350), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"false\" data-id=\"tempaliascreate\" role=\"form\" method=\"post\" autocomplete=\"off\">
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-3\" for=\"description\">";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 356), "description", [], "any", false, false, false, 356), "html", null, true);
        yield "</label>
            <div class=\"col-sm-5\">
              <input type=\"hidden\" id=\"temp_alias_domain\" name=\"domain\">
              <input type=\"description\" id=\"temp_alias_description\" class=\"form-control\" name=\"description\" autocomplete=\"off\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-3 col-sm-9\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"tempaliascreate\" data-item=\"null\" data-api-url='add/time_limited_alias' data-api-attr='' href=\"#\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 364), "add", [], "any", false, false, false, 364), "html", null, true);
        yield "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- temp alias modal -->
<!-- sieve filter modal -->
<div class=\"modal fade\" id=\"userFilterModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 377), "active_sieve", [], "any", false, false, false, 377), "html", null, true);
        yield "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <pre id=\"user_sieve_filter\"></pre>
      </div>
    </div>
  </div>
</div><!-- sieve filter modal -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modals/user.twig";
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
        return array (  585 => 377,  569 => 364,  558 => 356,  549 => 350,  533 => 337,  523 => 330,  516 => 326,  512 => 325,  507 => 323,  498 => 317,  482 => 304,  476 => 300,  470 => 297,  467 => 296,  465 => 295,  459 => 292,  451 => 287,  445 => 284,  434 => 278,  425 => 272,  395 => 245,  386 => 239,  368 => 224,  361 => 220,  355 => 217,  344 => 211,  335 => 205,  326 => 199,  310 => 186,  301 => 180,  291 => 173,  281 => 166,  271 => 159,  261 => 152,  251 => 145,  241 => 138,  231 => 131,  220 => 123,  211 => 117,  201 => 110,  191 => 103,  181 => 96,  171 => 89,  162 => 83,  152 => 76,  141 => 68,  136 => 66,  127 => 60,  118 => 54,  108 => 47,  99 => 41,  93 => 38,  86 => 34,  70 => 21,  60 => 14,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modals/user.twig", "/web/templates/modals/user.twig");
    }
}
