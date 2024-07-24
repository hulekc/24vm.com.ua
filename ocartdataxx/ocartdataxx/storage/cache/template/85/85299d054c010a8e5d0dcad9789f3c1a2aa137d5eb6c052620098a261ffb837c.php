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

/* unishop2/template/extension/module/uni_rating_star.twig */
class __TwigTemplate_24459698692994f2ba519ca4a049ff16fa0bec0e09c5aeae7b58839de4fed44b extends \Twig\Template
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
        if (((($context["rating_type"] ?? null) == 2) || ((($context["rating_type"] ?? null) == 1) && (($context["rating"] ?? null) || ($context["show_rating"] ?? null))))) {
            // line 2
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", true, true, false, 2)) {
                // line 3
                echo "\t\t<div class=\"product-thumb__rating rating uni-href\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 3);
                echo "#tab-review\">
\t\t\t";
                // line 4
                if ((($context["rating_type"] ?? null) == 2)) {
                    // line 5
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 6
                        echo "\t\t\t\t\t<i class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 6) < $context["i"])) ? ("far fa-star") : ("fas fa-star"));
                        echo "\"></i>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 8
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 8)) {
                        echo "<span class=\"product-thumb__rating-text\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "text_reviews", [], "any", false, false, false, 8);
                        echo "</span>";
                    }
                    // line 9
                    echo "\t\t\t";
                } else {
                    // line 10
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating_new", [], "any", false, false, false, 10)) {
                        echo "<i class=\"fas fa-star\"></i>";
                        echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating_new", [], "any", false, false, false, 10), 1);
                        echo " <i class=\"fas fa-comment\"></i><span class=\"product-thumb__rating-text\">";
                        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "text_reviews", [], "any", false, false, false, 10);
                        echo "</span>";
                    }
                    // line 11
                    echo "\t\t\t";
                }
                // line 12
                echo "\t\t</div>
\t";
            } else {
                // line 14
                echo "\t\t<div class=\"";
                echo (((($context["rating_position"] ?? null) == 1)) ? ("rating-model__rating") : ("product-page__rating"));
                echo " rating uni-href\" onclick=\"\$('a[href=\\'#tab-review\\']').click(); uniScrollTo('#tab-review');\">
\t\t\t";
                // line 15
                if ((($context["rating_type"] ?? null) == 2)) {
                    // line 16
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 17
                        echo "\t\t\t\t\t<i class=\"";
                        echo (((($context["rating"] ?? null) < $context["i"])) ? ("far fa-star") : ("fas fa-star"));
                        echo "\"></i>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "\t\t\t\t";
                    if (($context["rating"] ?? null)) {
                        echo "&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "text_reviews", [], "any", false, false, false, 19);
                    }
                    // line 20
                    echo "\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating_new", [], "any", false, false, false, 21)) {
                        echo "<i class=\"fas fa-star\"></i>";
                        echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating_new", [], "any", false, false, false, 21), 1);
                        echo " <i class=\"fas fa-comment\"></i>";
                        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "text_reviews", [], "any", false, false, false, 21);
                    }
                    // line 22
                    echo "\t\t\t";
                }
                // line 23
                echo "\t\t</div>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_rating_star.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  127 => 22,  119 => 21,  116 => 20,  110 => 19,  101 => 17,  96 => 16,  94 => 15,  89 => 14,  85 => 12,  82 => 11,  73 => 10,  70 => 9,  63 => 8,  54 => 6,  49 => 5,  47 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_rating_star.twig", "/home/jsfivnhi/grandsmart.shop/catalog/view/theme/unishop2/template/extension/module/uni_rating_star.twig");
    }
}
