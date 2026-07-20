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

/* user/tab-user-details.twig */
class __TwigTemplate_db044d430fddf15fe72c2d4374421e9c extends Template
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
        yield "<div class=\"tab-pane fade\" id=\"tab-user-details\" role=\"tabpanel\" aria-labelledby=\"tab-user-details\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-user-details\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-user-details\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 5), "mailbox_details", [], "any", false, false, false, 5), "html", null, true);
        yield "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 7), "mailbox_details", [], "any", false, false, false, 7), "html", null, true);
        yield "</span>
    </div>
    <div id=\"collapse-tab-user-details\" class=\"card-body collapse\" data-bs-parent=\"#user-content\">
      <div class=\"row\">
        <div class=\"col-sm-4 col-md-3 col-12 text-sm-end text-start\"><i class=\"bi bi-pin-angle\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 11), "direct_aliases", [], "any", false, false, false, 11), "html", null, true);
        yield ":
          <p class=\"small\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 12), "direct_aliases_desc", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
        </div>
        <div class=\"col-sm-8 col-md-9 col-12\">
          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "direct_aliases", [], "any", false, false, false, 15));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["direct_alias"] => $context["direct_alias_meta"]) {
            // line 16
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["direct_alias_meta"], "public_comment", [], "any", false, false, false, 16)) {
                // line 17
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["direct_alias"], "html", null, true);
                yield " &mdash; <i class=\"bi bi-chat-left\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["direct_alias_meta"], "public_comment", [], "any", false, false, false, 17), "html", null, true);
                yield "<br>
            ";
            } else {
                // line 19
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["direct_alias"], "html", null, true);
                yield "<br>
            ";
            }
            // line 21
            yield "          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            yield "           <i class=\"bi bi-x-lg\"></i>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['direct_alias'], $context['direct_alias_meta'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        </div>
      </div>
      <br>
      <div class=\"row\">
        <div class=\"col-sm-4 col-md-3 col-12 text-sm-end text-start\"><i class=\"bi bi-share\"></i> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 28), "shared_aliases", [], "any", false, false, false, 28), "html", null, true);
        yield ":
          <p class=\"small\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 29), "shared_aliases_desc", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
        </div>
        <div class=\"col-sm-8 col-md-9 col-12\">
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "shared_aliases", [], "any", false, false, false, 32));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["shared_alias"] => $context["shared_alias_meta"]) {
            // line 33
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["shared_alias_meta"], "public_comment", [], "any", false, false, false, 33)) {
                // line 34
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["shared_alias"], "html", null, true);
                yield " &mdash; <i class=\"bi bi-chat-left\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shared_alias_meta"], "public_comment", [], "any", false, false, false, 34), "html", null, true);
                yield "<br>
            ";
            } else {
                // line 36
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["shared_alias"], "html", null, true);
                yield "<br>
            ";
            }
            // line 38
            yield "          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            yield "            <i class=\"bi bi-x-lg\"></i>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['shared_alias'], $context['shared_alias_meta'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </div>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"col-sm-4 col-md-3 col-12 text-sm-end text-start mb-4\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 45), "aliases_also_send_as", [], "any", false, false, false, 45), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-8 col-md-9 col-12\">
          <p>
            ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "aliases_also_send_as", [], "any", false, false, false, 48) == "*")) {
            // line 49
            yield "              ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 49), "sender_acl_disabled", [], "any", false, false, false, 49);
            yield "
            ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["user_get_alias_details"] ?? null), "aliases_also_send_as", [], "any", false, false, false, 50)) {
            // line 51
            yield "              ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "aliases_also_send_as", [], "any", false, false, false, 51), "html", null, true);
            yield "
            ";
        } else {
            // line 53
            yield "              <i class=\"bi bi-x-lg\"></i>
            ";
        }
        // line 55
        yield "          </p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-4 col-md-3 col-12 text-sm-end text-start mb-4\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 59), "aliases_send_as_all", [], "any", false, false, false, 59), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-8 col-md-9 col-12\">
          <p>";
        // line 61
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "aliases_send_as_all", [], "any", false, false, false, 61)) {
            yield "<i class=\"bi bi-x-lg\"></i>";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "aliases_send_as_all", [], "any", false, false, false, 61), "html", null, true);
        }
        yield "</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-4 col-md-3 col-12 text-sm-end text-start mb-4\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 65), "is_catch_all", [], "any", false, false, false, 65), "html", null, true);
        yield ":</div>
        <div class=\"col-sm-8 col-md-9 col-12\">
          <p>";
        // line 67
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "is_catch_all", [], "any", false, false, false, 67)) {
            yield "<i class=\"bi bi-x-lg\"></i>";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user_get_alias_details"] ?? null), "is_catch_all", [], "any", false, false, false, 67), "html", null, true);
        }
        yield "</p>
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
        return "user/tab-user-details.twig";
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
        return array (  212 => 67,  207 => 65,  196 => 61,  191 => 59,  185 => 55,  181 => 53,  175 => 51,  173 => 50,  168 => 49,  166 => 48,  160 => 45,  154 => 41,  147 => 39,  142 => 38,  136 => 36,  128 => 34,  125 => 33,  120 => 32,  114 => 29,  110 => 28,  104 => 24,  97 => 22,  92 => 21,  86 => 19,  78 => 17,  75 => 16,  70 => 15,  64 => 12,  60 => 11,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/tab-user-details.twig", "/web/templates/user/tab-user-details.twig");
    }
}
