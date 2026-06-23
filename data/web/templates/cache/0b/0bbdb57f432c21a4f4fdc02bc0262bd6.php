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

/* user/Pushover.twig */
class __TwigTemplate_b49156e9ac9fd993923f44b3d1fc3b54 extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"Pushover\" role=\"tabpanel\" aria-labelledby=\"Pushover\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-Pushover\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-Pushover\">
        Pushover API
      </button>
      <span class=\"d-none d-md-block\">Pushover API</span>
    </div>
    <div id=\"collapse-tab-Pushover\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      <form data-id=\"pushover\" class=\"form well\" method=\"post\">
        <input type=\"hidden\" value=\"0\" name=\"evaluate_x_prio\">
        <input type=\"hidden\" value=\"0\" name=\"only_x_prio\">
        <input type=\"hidden\" value=\"0\" name=\"active\">
        <div class=\"row\">
          <div class=\"col-sm-1\">
            <p class=\"text-muted\"><a href=\"https://pushover.net\" target=\"_blank\"><img src=\"data:image/png;base64,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\" class=\"img img-fluid\"></a></p>
          </div>
          <div class=\"col-sm-10\">
            <p class=\"text-muted\">";
        // line 19
        yield Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 19), "pushover_info", [], "any", false, false, false, 19), ($context["mailcow_cc_username"] ?? null));
        yield "</p>
            <p class=\"text-muted\">";
        // line 20
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 20), "pushover_vars", [], "any", false, false, false, 20);
        yield ": <code>{SUBJECT}</code>, <code>{SENDER}</code>, <code>{SENDER_ADDRESS}</code>, <code>{SENDER_NAME}</code>, <code>{TO_NAME}</code>, <code>{TO_ADDRESS}</code>, <code>{MSG_ID}</code></p>
            <div class=\"row\">
              <div class=\"col-sm-6 mb-2\">
                <div class=\"form-group\">
                  <label for=\"token\">API Token/Key (Application)</label>
                  <input type=\"text\" class=\"form-control\" name=\"token\" maxlength=\"30\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "token", [], "any", false, false, false, 25), "html", null, true);
        yield "\" required>
                </div>
              </div>
              <div class=\"col-sm-6 mb-2\">
                <div class=\"form-group\">
                  <label for=\"key\">User/Group Key</label>
                  <input type=\"text\" class=\"form-control\" name=\"key\" maxlength=\"30\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "key", [], "any", false, false, false, 31), "html", null, true);
        yield "\" required>
                </div>
              </div>
              <div class=\"col-sm-6 mb-2\">
                <div class=\"form-group\">
                  <label for=\"title\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 36), "pushover_title", [], "any", false, false, false, 36), "html", null, true);
        yield "</label>
                  <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "title", [], "any", false, false, false, 37), "html", null, true);
        yield "\" placeholder=\"Mail\">
                </div>
              </div>
              <div class=\"col-sm-6 mb-2\">
                <div class=\"form-group\">
                  <label for=\"text\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 42), "pushover_text", [], "any", false, false, false, 42), "html", null, true);
        yield "</label>
                  <input type=\"text\" class=\"form-control\" name=\"text\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "text", [], "any", false, false, false, 43), "html", null, true);
        yield "\" placeholder=\"You've got mail 📧\">
                </div>
              </div>
              <div class=\"col-sm-12 mb-4\">
                <div class=\"form-group\">
                  <label for=\"text\">";
        // line 48
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 48), "pushover_sender_array", [], "any", false, false, false, 48);
        yield "</label>
                  <input type=\"text\" class=\"form-control\" name=\"senders\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "senders", [], "any", false, false, false, 49), "html", null, true);
        yield "\" placeholder=\"sender1@example.com, sender2@example.com\">
                </div>
              </div>
              <div class=\"col-sm-12 mb-2\">
              <div class=\"form-group\">
                <label for=\"sound\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 54), "pushover_sound", [], "any", false, false, false, 54), "html", null, true);
        yield "</label><br>
                <select name=\"sound\" class=\"form-control\">
                  <option value=\"pushover\"";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 56), "sound", [], "any", false, false, false, 56) == "pushover")) {
            yield " selected";
        }
        yield ">Pushover (default)</option>
                  <option value=\"bike\"";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 57), "sound", [], "any", false, false, false, 57) == "bike")) {
            yield " selected";
        }
        yield ">Bike</option>
                  <option value=\"bugle\"";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 58), "sound", [], "any", false, false, false, 58) == "bugle")) {
            yield " selected";
        }
        yield ">Bugle</option>
                  <option value=\"cashregister\"";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 59), "sound", [], "any", false, false, false, 59) == "cashregister")) {
            yield " selected";
        }
        yield ">Cash Register</option>
                  <option value=\"classical\"";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 60), "sound", [], "any", false, false, false, 60) == "classical")) {
            yield " selected";
        }
        yield ">Classical</option>
                  <option value=\"cosmic\"";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 61), "sound", [], "any", false, false, false, 61) == "cosmic")) {
            yield " selected";
        }
        yield ">Cosmic</option>
                  <option value=\"falling\"";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 62), "sound", [], "any", false, false, false, 62) == "falling")) {
            yield " selected";
        }
        yield ">Falling</option>
                  <option value=\"gamelan\"";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 63), "sound", [], "any", false, false, false, 63) == "gamelan")) {
            yield " selected";
        }
        yield ">Gamelan</option>
                  <option value=\"incoming\"";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 64), "sound", [], "any", false, false, false, 64) == "incoming")) {
            yield " selected";
        }
        yield ">Incoming</option>
                  <option value=\"intermission\"";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 65), "sound", [], "any", false, false, false, 65) == "intermission")) {
            yield " selected";
        }
        yield ">Intermission</option>
                  <option value=\"magic\"";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 66), "sound", [], "any", false, false, false, 66) == "magic")) {
            yield " selected";
        }
        yield ">Magic</option>
                  <option value=\"mechanical\"";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 67), "sound", [], "any", false, false, false, 67) == "mechanical")) {
            yield " selected";
        }
        yield ">Mechanical</option>
                  <option value=\"pianobar\"";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 68), "sound", [], "any", false, false, false, 68) == "pianobar")) {
            yield " selected";
        }
        yield ">Piano Bar</option>
                  <option value=\"siren\"";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 69), "sound", [], "any", false, false, false, 69) == "siren")) {
            yield " selected";
        }
        yield ">Siren</option>
                  <option value=\"spacealarm\"";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 70), "sound", [], "any", false, false, false, 70) == "spacealarm")) {
            yield " selected";
        }
        yield ">Space Alarm</option>
                  <option value=\"tugboat\"";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 71), "sound", [], "any", false, false, false, 71) == "tugboat")) {
            yield " selected";
        }
        yield ">Tug Boat</option>
                  <option value=\"alien\"";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 72), "sound", [], "any", false, false, false, 72) == "alien")) {
            yield " selected";
        }
        yield ">Alien Alarm (long)</option>
                  <option value=\"climb\"";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 73), "sound", [], "any", false, false, false, 73) == "climb")) {
            yield " selected";
        }
        yield ">Climb (long)</option>
                  <option value=\"persistent\"";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 74), "sound", [], "any", false, false, false, 74) == "persistent")) {
            yield " selected";
        }
        yield ">Persistent (long)</option>
                  <option value=\"echo\"";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 75), "sound", [], "any", false, false, false, 75) == "echo")) {
            yield " selected";
        }
        yield ">Pushover Echo (long)</option>
                  <option value=\"updown\"";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 76), "sound", [], "any", false, false, false, 76) == "updown")) {
            yield " selected";
        }
        yield ">Up Down (long)</option>
                  <option value=\"vibrate\"";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 77), "sound", [], "any", false, false, false, 77) == "vibrate")) {
            yield " selected";
        }
        yield ">Vibrate Only</option>
                  <option value=\"none\"";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 78), "sound", [], "any", false, false, false, 78) == "none")) {
            yield " selected";
        }
        yield "> None (silent) </option>
                </select>
              </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-check\">
                  <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"active\"";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "active", [], "any", false, false, false, 84) == "1")) {
            yield " checked";
        }
        yield "> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 84), "active", [], "any", false, false, false, 84), "html", null, true);
        yield "</label>
                </div>
              </div>
              <div class=\"col-sm-12\">
                <legend style=\"cursor:pointer;margin-top:10px\" data-bs-target=\"#po_advanced\" unselectable=\"on\" data-bs-toggle=\"collapse\">
                  <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 89), "advanced_settings", [], "any", false, false, false, 89), "html", null, true);
        yield "
                </legend>
                <hr />
              </div>
              <div class=\"col-sm-12 mb-4\">
                <div id=\"po_advanced\" class=\"collapse\">
                  <div class=\"form-group\">
                    <label for=\"text\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 96), "pushover_sender_regex", [], "any", false, false, false, 96), "html", null, true);
        yield "</label>
                    <input type=\"text\" class=\"form-control mb-4\" name=\"senders_regex\" value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "senders_regex", [], "any", false, false, false, 97), "html", null, true);
        yield "\" placeholder=\"/(.*@example\\.org\$|^foo@example\\.com\$)/i\" regex=\"true\">
                    <div class=\"form-check\">
                      <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"evaluate_x_prio\"";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 99), "evaluate_x_prio", [], "any", false, false, false, 99) == "1")) {
            yield " checked";
        }
        yield "> ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 99), "pushover_evaluate_x_prio", [], "any", false, false, false, 99);
        yield "</label>
                    </div>
                    <div class=\"form-check\">
                      <label><input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"only_x_prio\"";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 102), "only_x_prio", [], "any", false, false, false, 102) == "1")) {
            yield " checked";
        }
        yield "> ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 102), "pushover_only_x_prio", [], "any", false, false, false, 102);
        yield "</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"btn-group mass-actions-user mb-2\" data-acl=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "pushover", [], "any", false, false, false, 108), "html", null, true);
        yield "\">
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"pushover\" data-item=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\" data-api-url='edit/pushover' data-api-attr='{}' href=\"#\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 109), "save", [], "any", false, false, false, 109), "html", null, true);
        yield "</a>
              <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"pushover-test\" data-item=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\" data-api-url='edit/pushover-test' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 110), "pushover_verify", [], "any", false, false, false, 110), "html", null, true);
        yield "</a>
              <a id=\"pushover_delete\" class=\"btn btn-sm d-block d-sm-inline btn-danger\" data-action=\"edit_selected\" data-id=\"pushover-delete\" data-item=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "\" data-api-url='edit/pushover' data-api-attr='{\"delete\":\"true\"}' href=\"#\"><i class=\"bi bi-trash\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 111), "remove", [], "any", false, false, false, 111), "html", null, true);
        yield "</a>
            </div>
          </div>
        </div>
      </form>
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
        return "user/Pushover.twig";
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
        return array (  345 => 111,  339 => 110,  333 => 109,  329 => 108,  316 => 102,  306 => 99,  301 => 97,  297 => 96,  287 => 89,  275 => 84,  264 => 78,  258 => 77,  252 => 76,  246 => 75,  240 => 74,  234 => 73,  228 => 72,  222 => 71,  216 => 70,  210 => 69,  204 => 68,  198 => 67,  192 => 66,  186 => 65,  180 => 64,  174 => 63,  168 => 62,  162 => 61,  156 => 60,  150 => 59,  144 => 58,  138 => 57,  132 => 56,  127 => 54,  119 => 49,  115 => 48,  107 => 43,  103 => 42,  95 => 37,  91 => 36,  83 => 31,  74 => 25,  66 => 20,  62 => 19,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/Pushover.twig", "/web/templates/user/Pushover.twig");
    }
}
