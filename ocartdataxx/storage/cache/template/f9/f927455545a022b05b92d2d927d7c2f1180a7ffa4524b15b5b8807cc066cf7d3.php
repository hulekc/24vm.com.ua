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

/* unishop2/template/extension/module/uni_category_wall_v2.twig */
class __TwigTemplate_087ade19c5fc25aa0639324041c2362cadaf3395fc3c80e9439f21edcf2b51d0 extends \Twig\Template
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
            echo "\t<!--";
            // line 4
            echo "-->
\t<div class=\"uni-module category-wall category-wall_v2-";
            // line 5
            echo ($context["module"] ?? null);
            echo "\">
\t\t<div class=\"uni-module__wrapper\">
\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "\t\t\t<div class=\"category-wall__item uni-item ";
                echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                echo "\">
\t\t\t\t";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                    echo "\" class=\"category-wall__image";
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 10)) ? ("child") : (""));
                    echo " ";
                    echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                    echo "\">
\t\t\t\t\t\t<img src=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 11);
                    echo "\" loading=\"lazy\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                    echo "\" class=\"img-responsive\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" />
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 13
                echo " 
\t\t\t\t<div class=\"uni-catts\">
\t\t\t\t<ul class=\"category-wall__ul ";
                // line 15
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 15)) ? ("child") : ("child-empty"));
                echo " ";
                echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                echo "\">
\t\t\t\t\t<li class=\"category-wall__title ";
                // line 16
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 16)) ? ("child") : ("child-empty"));
                echo " ";
                echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                echo "</a>
\t\t\t\t\t";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 19
                        echo "\t\t\t\t\t\t\t<li class=\"category-wall__li ";
                        echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                        echo "\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 19);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 19);
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "\t\t\t\t\t\t<li><a class=\"category-wall__more uni-href ";
                    echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                    echo "\" data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\"><span>";
                    echo ($context["text_all_cats"] ?? null);
                    echo "</span></a></li>
\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t</div>
\t</div>
\t<script>
\t\t\$('.category-wall_v2-";
            // line 30
            echo ($context["module"] ?? null);
            echo "').uniModules({
\t\t\ttype:'";
            // line 31
            echo ($context["type_view"] ?? null);
            echo "',
\t\t\titems: {0:{items:";
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 4, [], "any", false, false, false, 32);
            echo " }, 700:{items:";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 3, [], "any", false, false, false, 32);
            echo " }, 993:{items: ";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 2, [], "any", false, false, false, 32);
            echo " }, 1050:{items:";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 1, [], "any", false, false, false, 32);
            echo " }, 1400:{items: ";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 0, [], "any", false, false, false, 32);
            echo " }},
\t\t\t";
            // line 33
            echo (((($context["type_view"] ?? null) == "carousel")) ? ("autoheight:[\"category-wall__ul\"],") : (""));
            echo "
\t\t});
\t</script>
";
        }
        // line 36
        echo " ";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_category_wall_v2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 36,  165 => 33,  153 => 32,  149 => 31,  145 => 30,  140 => 27,  131 => 23,  121 => 21,  108 => 19,  103 => 18,  101 => 17,  91 => 16,  85 => 15,  81 => 13,  69 => 11,  60 => 10,  58 => 9,  53 => 8,  49 => 7,  44 => 5,  41 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_category_wall_v2.twig", "");
    }
}
