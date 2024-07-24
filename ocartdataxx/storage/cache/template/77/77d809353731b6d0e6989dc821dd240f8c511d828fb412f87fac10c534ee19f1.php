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

/* unishop2/template/error/not_found.twig */
class __TwigTemplate_5637235bb4639bcde4be901eb6e3223061202cf3789434a086a486ee75304282 extends \Twig\Template
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
<div id=\"error-not-found\" class=\"container\">
\t<!--
\t<ul class=\"breadcrumb\">
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ul>
\t-->
\t<div class=\"row\">
\t\t";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-4 col-lg-6 col-xxl-12";
            echo "\t\t\t
\t\t";
        } elseif ((        // line 15
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 17
            echo "\t\t";
        } else {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t";
        // line 22
        if (((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), 1, [], "any", false, false, false, 22), "href", [], "any", false, false, false, 22),  -4, null) == "cart") || (twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), 1, [], "any", false, false, false, 22), "href", [], "any", false, false, false, 22),  -5, null) == "cart/"))) {
            // line 23
            echo "\t\t\t\t<div class=\"error-not-found uni-wrapper\">
\t\t\t\t\t<div class=\"error-not-found__404\"><img src=\"/image/catalog/icons/404-error-page-no-found.jpg\" alt=\"shopping-cart\"></div>
\t\t\t\t\t";
            // line 25
            echo ($context["text_error"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t<div class=\"error-not-found uni-wrapper\">
\t\t\t\t\t<div class=\"error-not-found__404\"><img src=\"/image/catalog/banners/404-error-page-no-found.jpg\" alt=\"404-page-not-found-error\"></div>
\t\t\t\t\t<h1>";
            // line 30
            echo ($context["heading_title"] ?? null);
            echo "</h1>
\t\t\t\t\t";
            // line 31
            echo ($context["text_error"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 34
        echo "\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t<div class=\"pull-centre\"><a href=\"";
        // line 35
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_return_home"] ?? null);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t</body>
\t\t\t";
        // line 38
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 40
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 43
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "unishop2/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  141 => 40,  136 => 38,  128 => 35,  125 => 34,  119 => 31,  115 => 30,  111 => 28,  105 => 25,  101 => 23,  99 => 22,  95 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  76 => 15,  71 => 14,  69 => 13,  65 => 12,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/error/not_found.twig", "");
    }
}
