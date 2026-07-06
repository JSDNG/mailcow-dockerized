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

/* mailbox/rl-frame.twig */
class __TwigTemplate_95c90deeb25e6b8231e3387bb4afb9c9 extends Template
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
        yield "<option value=\"s\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 1) == "s")) {
            yield " selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 1), "second", [], "any", false, false, false, 1), "html", null, true);
        yield "</option>
<option value=\"m\"";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 2) == "m")) {
            yield " selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 2), "minute", [], "any", false, false, false, 2), "html", null, true);
        yield "</option>
<option value=\"h\"";
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 3) == "h")) {
            yield " selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 3), "hour", [], "any", false, false, false, 3), "html", null, true);
        yield "</option>
<option value=\"d\"";
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 4) == "d")) {
            yield " selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 4), "day", [], "any", false, false, false, 4), "html", null, true);
        yield "</option>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mailbox/rl-frame.twig";
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
        return array (  67 => 4,  59 => 3,  51 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox/rl-frame.twig", "/web/templates/mailbox/rl-frame.twig");
    }
}
