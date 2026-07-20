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

/* user.twig */
class __TwigTemplate_e6bbfc1ccb105126194644900530ccb5 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "user.twig", 1);
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
        yield "<div id=\"user-content\" class=\"responsive-tabs\">
  <!-- Nav tabs -->
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"nav-item dropdown\" role=\"presentation\">
      <a class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 8), "mailbox", [], "any", false, false, false, 8), "html", null, true);
        yield "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item active\" role=\"tab\" aria-selected=\"true\" aria-controls=\"tab-user-auth\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-user-auth\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 10), "mailbox_general", [], "any", false, false, false, 10), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab-config-fwdhosts\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-user-details\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 11), "mailbox_details", [], "any", false, false, false, 11), "html", null, true);
        yield "</button></li>
        <li><button class=\"dropdown-item\" role=\"tab\" aria-selected=\"false\" aria-controls=\"tab-config-f2b\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-user-settings\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 12), "mailbox_settings", [], "any", false, false, false, 12), "html", null, true);
        yield "</button></li>
      </ul>
    </li>
    ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_alias", [], "any", false, false, false, 15) == 1)) {
            // line 16
            yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" role=\"tab\" aria-selected=\"false\" aria-controls=\"SpamAliases\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#SpamAliases\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 16), "spam_aliases", [], "any", false, false, false, 16), "html", null, true);
            yield "</button></li>
    ";
        }
        // line 18
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_score", [], "any", false, false, false, 18) == 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 18) == 1))) {
            // line 19
            yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" role=\"tab\" aria-selected=\"false\" aria-controls=\"Spamfilter\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Spamfilter\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 19), "spamfilter", [], "any", false, false, false, 19), "html", null, true);
            yield "</button></li>
    ";
        }
        // line 21
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "syncjobs", [], "any", false, false, false, 21) == 1)) {
            // line 22
            yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" role=\"tab\" aria-selected=\"false\" aria-controls=\"Syncjobs\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Syncjobs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 22), "sync_jobs", [], "any", false, false, false, 22), "html", null, true);
            yield "</button></li>
    ";
        }
        // line 24
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "app_passwds", [], "any", false, false, false, 24) == 1)) {
            // line 25
            yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" role=\"tab\" aria-selected=\"false\" aria-controls=\"AppPasswds\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#AppPasswds\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 25), "app_passwds", [], "any", false, false, false, 25), "html", null, true);
            yield "</button></li>
    ";
        }
        // line 27
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "pushover", [], "any", false, false, false, 27) == 1)) {
            // line 28
            yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" role=\"tab\" aria-selected=\"false\" aria-controls=\"Pushover\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#Pushover\">Pushover API</button></li>
    ";
        }
        // line 30
        yield "  </ul>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tab-content\" style=\"padding-top:20px\">
        ";
        // line 35
        yield from         $this->loadTemplate("user/tab-user-auth.twig", "user.twig", 35)->unwrap()->yield($context);
        // line 36
        yield "        ";
        yield from         $this->loadTemplate("user/tab-user-details.twig", "user.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "        ";
        yield from         $this->loadTemplate("user/tab-user-settings.twig", "user.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_alias", [], "any", false, false, false, 38) == 1)) {
            yield from             $this->loadTemplate("user/SpamAliases.twig", "user.twig", 38)->unwrap()->yield($context);
        }
        // line 39
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_score", [], "any", false, false, false, 39) == 1) || (CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 39) == 1))) {
            yield from             $this->loadTemplate("user/Spamfilter.twig", "user.twig", 39)->unwrap()->yield($context);
        }
        // line 40
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "syncjobs", [], "any", false, false, false, 40) == 1)) {
            yield from             $this->loadTemplate("user/Syncjobs.twig", "user.twig", 40)->unwrap()->yield($context);
        }
        // line 41
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "app_passwds", [], "any", false, false, false, 41) == 1)) {
            yield from             $this->loadTemplate("user/AppPasswds.twig", "user.twig", 41)->unwrap()->yield($context);
        }
        // line 42
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["acl"] ?? null), "pushover", [], "any", false, false, false, 42) == 1)) {
            yield from             $this->loadTemplate("user/Pushover.twig", "user.twig", 42)->unwrap()->yield($context);
        }
        // line 43
        yield "      </div>
    </div>
  </div>
  ";
        // line 46
        yield from         $this->loadTemplate("user_domainadmin_common.twig", "user.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "</div>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user.twig";
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
        return array (  172 => 47,  170 => 46,  165 => 43,  160 => 42,  155 => 41,  150 => 40,  145 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  125 => 30,  121 => 28,  118 => 27,  112 => 25,  109 => 24,  103 => 22,  100 => 21,  94 => 19,  91 => 18,  85 => 16,  83 => 15,  77 => 12,  73 => 11,  69 => 10,  64 => 8,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user.twig", "/web/templates/user.twig");
    }
}
