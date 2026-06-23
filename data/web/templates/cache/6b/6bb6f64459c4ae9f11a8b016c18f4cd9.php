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

/* user_domainadmin_common.twig */
class __TwigTemplate_93f9bd11b31c3371b175fe4445b966d3 extends Template
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
        yield from         $this->loadTemplate("modals/user.twig", "user_domainadmin_common.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<script type='text/javascript'>
  var acl = '";
        // line 4
        yield ($context["acl_json"] ?? null);
        yield "';
  var lang = ";
        // line 5
        yield ($context["lang_user"] ?? null);
        yield ";
  var csrf_token = '";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
  var pagination_size = Math.trunc('";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagination_size"] ?? null), "html", null, true);
        yield "');
  var mailcow_cc_username = '";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mailcow_cc_username"] ?? null), "html", null, true);
        yield "';
  var user_spam_score = [";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_spam_score"] ?? null), "html", null, true);
        yield "];
  var lang_datatables = ";
        // line 10
        yield ($context["lang_datatables"] ?? null);
        yield ";
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user_domainadmin_common.twig";
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
        return array (  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user_domainadmin_common.twig", "/web/templates/user_domainadmin_common.twig");
    }
}
