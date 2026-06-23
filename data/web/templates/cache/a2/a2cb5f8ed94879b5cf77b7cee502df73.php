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

/* fido2.twig */
class __TwigTemplate_e232b2ae80dd920fb94a50c41e17034a extends Template
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
        if (($context["fido2_data"] ?? null)) {
            // line 2
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fido2_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["key_info"]) {
                // line 3
                yield "    <tr>
      <td>
        ";
                // line 5
                if ((($context["fido2_cid"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "cid", [], "any", false, false, false, 5))) {
                    // line 6
                    yield "          <i class=\"bi bi-unlock-fill\"></i>
        ";
                }
                // line 8
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "fn", [], "any", false, false, false, 8)) {
                    // line 9
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "fn", [], "any", false, false, false, 9), "html", null, true);
                    yield "
        ";
                } else {
                    // line 11
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "subject", [], "any", false, false, false, 11), "html", null, true);
                    yield "
        ";
                }
                // line 13
                yield "      </td>
      <td style=\"min-width:240px;text-align: right\">
        <form style=\"display:inline;\" method=\"post\">
          <input type=\"hidden\" name=\"unset_fido2_key\" value=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "cid", [], "any", false, false, false, 16), "html", null, true);
                yield "\">
          <div class=\"btn-group\">
            <a href=\"#\" class=\"btn btn-sm btn-xs-lg btn-secondary\" data-cid=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "cid", [], "any", false, false, false, 18), "html", null, true);
                yield "\" data-subject=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base64_encode(CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "subject", [], "any", false, false, false, 18)), "html", null, true);
                yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#fido2ChangeFn\">
              <i class=\"bi bi-pencil-fill\"></i> ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 19), "rename", [], "any", false, false, false, 19), "html", null, true);
                yield "
            </a>
            <a href=\"#\" onClick='return confirm(\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "ays", [], "any", false, false, false, 21), "html", null, true);
                yield "\")?\$(this).closest(\"form\").submit():\"\";' class=\"btn btn-sm btn-xs-lg btn-danger\">
              <i class=\"bi bi-trash\"></i> ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 22), "remove", [], "any", false, false, false, 22), "html", null, true);
                yield "
            </a>
          </div>
        </form>
      </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['key_info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fido2.twig";
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
        return array (  99 => 22,  95 => 21,  90 => 19,  84 => 18,  79 => 16,  74 => 13,  68 => 11,  62 => 9,  59 => 8,  55 => 6,  53 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "fido2.twig", "/web/templates/fido2.twig");
    }
}
