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

/* unishop2/template/extension/module/category.twig */
class __TwigTemplate_bb04cde2a4e0c104b993c931f03185de8af65289695cae02accc01e29375d4d5 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<nav id=\"category-module\" class=\"menu-module\">
\t\t<ul class=\"menu-module__ul\">
\t\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "\t\t\t\t<li class=\"menu-module__li\">
\t\t\t\t\t<a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 6);
                echo "\" class=\"menu-module__a ";
                echo (((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 6) == ($context["category_id"] ?? null))) ? ("active") : (""));
                echo "\">
\t\t\t\t\t\t";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
                echo "
\t\t\t\t\t\t";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<span class=\"menu-module__pm ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 9) == ($context["category_id"] ?? null))) ? ("open") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t</a> 
\t\t\t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t\t\t<div class=\"menu-module__children collapse ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) ? ("in") : (""));
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                        echo "\" class=\"menu-module__children-a ";
                        echo (((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 18) == ($context["child_id"] ?? null))) ? ("active") : (""));
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                        echo "</a> 
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</ul>
\t</nav>
\t<script>
\t\t\$(function() {
\t\t\t\$('#category-module span').on('click', function(e){
\t\t\t\te.preventDefault();
\t\t\t\t\$(this).toggleClass('open');
\t\t\t\t\$(this).parent().next().collapse('toggle');
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  102 => 22,  98 => 20,  85 => 18,  81 => 17,  76 => 16,  74 => 15,  71 => 14,  62 => 9,  60 => 8,  56 => 7,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/category.twig", "");
    }
}
