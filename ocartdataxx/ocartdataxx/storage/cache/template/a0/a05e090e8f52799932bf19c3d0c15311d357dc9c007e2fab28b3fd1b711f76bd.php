<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* unishop2/template/common/maintenance.twig */
class __TwigTemplate_bbf798a639797e9a56726563316d04a986478b601c387de612a6c2c47f136f15 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<body class=\"main-page-body\">
<style>
\t#menu.menu1 .main-menu__collapse, #subscribe {display:none !important}
\tmain .container, main .row {height:100%}
\tmain .col-12 {display:flex;align-items:center;justify-content:center;height:100%}
\tmain h1 {line-height:1.4em;color:#888}
</style>
<div class=\"container\">
\t<div class=\"row\">
\t    <div class=\"technical-work\"><img src=\"/image/catalog/banners/technical-work-for-site.jpg\">
\t\t<div class=\"col-12\">";
        // line 12
        echo ($context["message"] ?? null);
        echo "</div>
\t</div>
\t</div>
</div>
</body>
";
        // line 17
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/maintenance.twig", "");
    }
}
