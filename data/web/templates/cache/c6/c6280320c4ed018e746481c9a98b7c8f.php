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

/* tfa_keys.twig */
class __TwigTemplate_a465d01d6ee5143a2d412f045cd25cca extends Template
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
        yield "<div id=\"tfa_keys\">
  ";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["tfa_data"] ?? null), "additional", [], "any", false, false, false, 2)) {
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["tfa_data"] ?? null), "additional", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["key_info"]) {
                // line 4
                yield "      <form style=\"display:inline;\" method=\"post\">
        <input type=\"hidden\" name=\"unset_tfa_key\" value=\"";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "id", [], "any", false, false, false, 5), "html", null, true);
                yield "\">
        <div class=\"d-flex flex-column\">
          <span style=\"padding:4px;margin:4px\" class=\"me-auto badge fs-6 bg-";
                // line 7
                if ((($context["tfa_id"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "id", [], "any", false, false, false, 7))) {
                    yield "success";
                } else {
                    yield "dark";
                }
                yield "\">
            ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["key_info"], "key_id", [], "any", false, false, false, 8), "html", null, true);
                yield "
            <a href=\"#\" class=\"btn p-0 text-white\" style=\"font-size: 12px; line-height: 1rem;\" onClick='return confirm(\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 9), "ays", [], "any", false, false, false, 9), "html", null, true);
                yield "\")?\$(this).closest(\"form\").submit():\"\";'>[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 9), "remove", [], "any", false, false, false, 9), "html", null, true);
                yield "]</a>
          </span>
        </div>
      </form>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['key_info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "  ";
        }
        // line 15
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tfa_keys.twig";
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
        return array (  88 => 15,  85 => 14,  72 => 9,  68 => 8,  60 => 7,  55 => 5,  52 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tfa_keys.twig", "/web/templates/tfa_keys.twig");
    }
}
