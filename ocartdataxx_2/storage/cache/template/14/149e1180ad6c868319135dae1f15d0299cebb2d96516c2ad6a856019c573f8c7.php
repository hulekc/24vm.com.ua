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

/* unishop2/template/extension/module/uni_manufacturer.twig */
class __TwigTemplate_8d00137fbcd867fbd69223182a09f171ae732e784e45d997b92ced0c0ee44b65 extends \Twig\Template
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
        if (($context["manufacturers"] ?? null)) {
            // line 2
            echo "\t";
            if ((($context["manufacturer_view_res"] ?? null) == 768)) {
                // line 3
                echo "\t\t";
                $context["class"] = "hidden-xs";
                // line 4
                echo "\t";
            } elseif ((($context["manufacturer_view_res"] ?? null) == 992)) {
                // line 5
                echo "\t\t";
                $context["class"] = "hidden-xs hidden-sm";
                // line 6
                echo "\t";
            } elseif ((($context["manufacturer_view_res"] ?? null) == 1200)) {
                // line 7
                echo "\t\t";
                $context["class"] = "hidden-sm hidden-sm hidden-md";
                // line 8
                echo "\t";
            } else {
                // line 9
                echo "\t\t";
                $context["class"] = "";
                // line 10
                echo "\t";
            }
            // line 11
            echo "\t<div id=\"manufacturer_module\" class=\"manufacturer-module row ";
            echo ($context["class"] ?? null);
            echo "\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"manufacturer-module__heading\">";
            // line 13
            echo ($context["heading_title"] ?? null);
            echo "</div>
\t\t\t<ul class=\"manufacturer-module__ul\">
\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 16
                echo "\t\t\t\t\t<li class=\"manufacturer-module__item\">
\t\t\t\t\t\t<a class=\"manufacturer-module__item-name uni-href\" data-href=\"";
                // line 17
                echo ($context["href"] ?? null);
                echo "#";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 17);
                echo "</a>
\t\t\t\t\t\t";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "\t\t\t\t\t\t\t<ul class=\"manufacturer-module__childrens\">
\t\t\t\t\t\t\t\t";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"manufacturer-module__children\"><a class=\"uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 21);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 21);
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo " 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo " 
\t\t\t</ul> 
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_manufacturer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 26,  117 => 25,  112 => 22,  101 => 21,  97 => 20,  94 => 19,  92 => 18,  84 => 17,  81 => 16,  77 => 15,  72 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_manufacturer.twig", "");
    }
}
