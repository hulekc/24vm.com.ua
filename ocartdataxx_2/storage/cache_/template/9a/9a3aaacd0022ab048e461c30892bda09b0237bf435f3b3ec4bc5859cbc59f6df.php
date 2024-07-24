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

/* unishop2/template/common/home.twig */
class __TwigTemplate_a8beb039fd4f55f8507bf94917e79ac0329322db88d40a3de19d3563994cd687 extends \Twig\Template
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
<div class=\"home-page container\">
\t<div class=\"row\">
\t\t";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "\t\t\t";
            $context["class"] = "col-sm-12 col-md-6 col-lg-6 col-xxl-12";
            // line 7
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "\t\t\t";
            $context["class"] = "col-sm-12 col-md-9 col-lg-9 col-xxl-16";
            // line 9
            echo "\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 11
            echo "\t\t";
        }
        // line 12
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 15
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 17
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 19
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  82 => 17,  77 => 15,  72 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/home.twig", "");
    }
}
