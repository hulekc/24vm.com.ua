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
class __TwigTemplate_64782c39b2fe3134c09b08022feeec0c2f3ed0111f2492b0cdb26a0cc743144c extends \Twig\Template
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
            echo "\t";
            if (($context["heading_title"] ?? null)) {
                // line 3
                echo "\t\t<div class=\"heading\">";
                echo ($context["heading_title"] ?? null);
                echo "</div>
\t";
            }
            // line 5
            echo "\t<div class=\"uni-module category-wall category-wall_v2-";
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
                    echo "\" class=\"category-wall__image ";
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
\t\t\t\t<ul class=\"category-wall__ul ";
                // line 14
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 14)) ? ("child") : ("child-empty"));
                echo " ";
                echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                echo "\">
\t\t\t\t\t<li class=\"category-wall__title ";
                // line 15
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 15)) ? ("child") : ("child-empty"));
                echo " ";
                echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                echo "</a>
\t\t\t\t\t";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "childs", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "\t\t\t\t\t\t\t<li class=\"category-wall__li ";
                        echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                        echo "\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t\t\t\t\t<li><a class=\"category-wall__more uni-href ";
                    echo (((($context["type"] ?? null) == 2)) ? ("type2") : (""));
                    echo "\" data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                    echo "\"><span>";
                    echo ($context["text_all_cats"] ?? null);
                    echo "</span></a></li>
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t</div>
\t</div>
\t<script>
\t\t\$('.category-wall_v2-";
            // line 28
            echo ($context["module"] ?? null);
            echo "').uniModules({
\t\t\ttype:'";
            // line 29
            echo ($context["type_view"] ?? null);
            echo "',
\t\t\titems: {0:{items:";
            // line 30
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 4, [], "any", false, false, false, 30);
            echo " }, 700:{items:";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 3, [], "any", false, false, false, 30);
            echo " }, 993:{items: ";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 2, [], "any", false, false, false, 30);
            echo " }, 1050:{items:";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 1, [], "any", false, false, false, 30);
            echo " }, 1400:{items: ";
            echo twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 0, [], "any", false, false, false, 30);
            echo " }},
\t\t\t";
            // line 31
            echo (((($context["type_view"] ?? null) == "carousel")) ? ("autoheight:[\"category-wall__ul\"],") : (""));
            echo "
\t\t});
\t</script>
";
        }
        // line 34
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
        return array (  175 => 34,  168 => 31,  156 => 30,  152 => 29,  148 => 28,  143 => 25,  135 => 22,  125 => 20,  112 => 18,  107 => 17,  105 => 16,  95 => 15,  89 => 14,  86 => 13,  74 => 11,  65 => 10,  63 => 9,  58 => 8,  54 => 7,  48 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_category_wall_v2.twig", "");
    }
}
