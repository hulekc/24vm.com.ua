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

/* unishop2/template/common/search.twig */
class __TwigTemplate_b8b85f93f88669fd0c424d2aca1c16943545bfed7da0df5427685be6915f8957 extends \Twig\Template
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
        echo "<div class=\"header-search\">
\t<div class=\"header-search__form\">
\t\t";
        // line 3
        if (($context["categories"] ?? null)) {
            // line 4
            echo "\t\t\t<div class=\"header-search__category cat-id ";
            echo ((($context["hide_category_only_mobile"] ?? null)) ? ("hide-on-mobile") : (""));
            echo "\">
\t\t\t\t<button type=\"button\" class=\"header-search__category-btn dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"header-search__category-span\">";
            // line 5
            echo ($context["text_search_all"] ?? null);
            echo "</span></button>
\t\t\t\t<input type=\"hidden\" name=\"filter_category_id\" value=\"\" />
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li class=\"header-search__category-li\" data-id=\"\"><a>";
            // line 8
            echo ($context["text_search_all"] ?? null);
            echo "</a></li>
\t\t\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "\t\t\t\t\t\t<li class=\"header-search__category-li\" data-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 10);
                echo "\"><a>";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10);
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 15
        echo "\t\t<input type=\"text\" name=\"search\" value=\"";
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" aria-label=\"Search\" class=\"header-search__input ";
        echo ((($context["hide_category_only_mobile"] ?? null)) ? ("hide-on-mobile") : (""));
        echo " form-control\" />
\t\t<button type=\"button\" class=\"search-btn-clear ";
        // line 16
        echo ((($context["search"] ?? null)) ? ("show") : (""));
        echo "\">&times;</button>
\t\t<button type=\"button\" class=\"header-search__btn search-btn\">";
        // line 17
        echo ($context["text_code_search_lx"] ?? null);
        echo "</button>
\t</div>
\t<div class=\"live-search\" style=\"display:none\"><ul class=\"live-search__ul\"><li class=\"loading\"></li></ul></div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  87 => 16,  78 => 15,  73 => 12,  62 => 10,  58 => 9,  54 => 8,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/search.twig", "");
    }
}
