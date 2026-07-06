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

/* mailbox.twig */
class __TwigTemplate_7899866c3164eb400d0acab8f7db4afb extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "mailbox.twig", 1);
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
        yield "<div id=\"mail-content\" class=\"responsive-tabs\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 6
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 7
            yield "    <li class=\"nav-item dropdown\" role=\"presentation\">
      <a class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\" href=\"#\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 8), "domains", [], "any", false, false, false, 8), "html", null, true);
            yield "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-domains\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-domains\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 10), "domains", [], "any", false, false, false, 10), "html", null, true);
            yield "</button></li>
        <li><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-templates-domains\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-templates-domains\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 11), "templates", [], "any", false, false, false, 11), "html", null, true);
            yield "</button></li>
      </ul>
    </li>
    ";
        } else {
            // line 15
            yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-controls=\"tab-domains\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-domains\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 15), "domains", [], "any", false, false, false, 15), "html", null, true);
            yield "</button></li>
    ";
        }
        // line 17
        yield "    ";
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 18
            yield "    <li class=\"nav-item dropdown\" role=\"presentation\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 19), "mailboxes", [], "any", false, false, false, 19), "html", null, true);
            yield "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-mailboxes\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-mailboxes\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 21), "mailboxes", [], "any", false, false, false, 21), "html", null, true);
            yield "</button></li>
        <li><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-templates-mbox\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-templates-mbox\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "templates", [], "any", false, false, false, 22), "html", null, true);
            yield "</button></li>
      </ul>
    </li>
    ";
        } else {
            // line 26
            yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-controls=\"tab-mailboxes\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-mailboxes\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 26), "mailboxes", [], "any", false, false, false, 26), "html", null, true);
            yield "</button></li>
    ";
        }
        // line 28
        yield "    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-controls=\"tab-resources\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-resources\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 28), "resources", [], "any", false, false, false, 28), "html", null, true);
        yield "</button></li>
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 30), "aliases", [], "any", false, false, false, 30), "html", null, true);
        yield "</a>
      <ul class=\"dropdown-menu\">
        <li role=\"presentation\"><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-mbox-aliases\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-mbox-aliases\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 32), "aliases", [], "any", false, false, false, 32), "html", null, true);
        yield "</button></li>
        <li role=\"presentation\"><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-domain-aliases\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-domain-aliases\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 33), "domain_aliases", [], "any", false, false, false, 33), "html", null, true);
        yield "</button></li>
      </ul>
    </li>
    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-syncjobs\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-syncjobs\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 36), "sync_jobs", [], "any", false, false, false, 36), "html", null, true);
        yield "</button></li>
    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-filters\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-filters\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 37), "filters", [], "any", false, false, false, 37), "html", null, true);
        yield "</button></li>
    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-bcc\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-bcc\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "address_rewriting", [], "any", false, false, false, 38), "html", null, true);
        yield "</button></li>
    <li class=\"nav-item\" role=\"presentation\"";
        // line 39
        if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
            yield " class=\"d-none\"";
        }
        yield "><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-tls-policy\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-tls-policy\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 39), "tls_policy_maps", [], "any", false, false, false, 39), "html", null, true);
        yield "</button></li>
  </ul>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tab-content\" style=\"padding-top:20px\">
        ";
        // line 45
        yield from         $this->loadTemplate("mailbox/tab-domains.twig", "mailbox.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "        ";
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 47
            yield "        ";
            yield from             $this->loadTemplate("mailbox/tab-templates-domains.twig", "mailbox.twig", 47)->unwrap()->yield($context);
            // line 48
            yield "        ";
        }
        // line 49
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-mailboxes.twig", "mailbox.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "        ";
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 51
            yield "        ";
            yield from             $this->loadTemplate("mailbox/tab-templates-mbox.twig", "mailbox.twig", 51)->unwrap()->yield($context);
            // line 52
            yield "        ";
        }
        // line 53
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-resources.twig", "mailbox.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-domain-aliases.twig", "mailbox.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-mbox-aliases.twig", "mailbox.twig", 55)->unwrap()->yield($context);
        // line 56
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-syncjobs.twig", "mailbox.twig", 56)->unwrap()->yield($context);
        // line 57
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-filters.twig", "mailbox.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-bcc.twig", "mailbox.twig", 58)->unwrap()->yield($context);
        // line 59
        yield "        ";
        yield from         $this->loadTemplate("mailbox/tab-tls-policy.twig", "mailbox.twig", 59)->unwrap()->yield($context);
        // line 60
        yield "      </div> <!-- /tab-content -->
    </div> <!-- /col-md-12 -->
  </div> <!-- /row -->
</div>

";
        // line 65
        yield from         $this->loadTemplate("modals/mailbox.twig", "mailbox.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "
<script type='text/javascript'>
  var acl = '";
        // line 68
        yield ($context["acl_json"] ?? null);
        yield "';
  var lang = ";
        // line 69
        yield ($context["lang_mailbox"] ?? null);
        yield ";
  var lang_rl = ";
        // line 70
        yield ($context["lang_rl"] ?? null);
        yield ";
  var lang_edit = ";
        // line 71
        yield ($context["lang_edit"] ?? null);
        yield ";
  var lang_datatables = ";
        // line 72
        yield ($context["lang_datatables"] ?? null);
        yield ";
  var csrf_token = '";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "';
  var pagination_size = Math.trunc('";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagination_size"] ?? null), "html", null, true);
        yield "');
  var role = '";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["role"] ?? null), "html", null, true);
        yield "';
  var is_dual = ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["is_dual"] ?? null), "html", null, true);
        yield ";
  var ALLOW_ADMIN_EMAIL_LOGIN = ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["allow_admin_email_login"] ?? null), "html", null, true);
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
        return "mailbox.twig";
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
        return array (  256 => 77,  252 => 76,  248 => 75,  244 => 74,  240 => 73,  236 => 72,  232 => 71,  228 => 70,  224 => 69,  220 => 68,  216 => 66,  214 => 65,  207 => 60,  204 => 59,  201 => 58,  198 => 57,  195 => 56,  192 => 55,  189 => 54,  186 => 53,  183 => 52,  180 => 51,  177 => 50,  174 => 49,  171 => 48,  168 => 47,  165 => 46,  163 => 45,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  132 => 33,  128 => 32,  123 => 30,  117 => 28,  111 => 26,  104 => 22,  100 => 21,  95 => 19,  92 => 18,  89 => 17,  83 => 15,  76 => 11,  72 => 10,  67 => 8,  64 => 7,  62 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mailbox.twig", "/web/templates/mailbox.twig");
    }
}
