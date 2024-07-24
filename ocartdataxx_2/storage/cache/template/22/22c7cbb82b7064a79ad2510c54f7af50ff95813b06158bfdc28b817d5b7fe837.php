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

/* unishop2/template/extension/module/uni_reviews.twig */
class __TwigTemplate_0854eb0be46473985f604d652a39ee5a879a054ca02be9e061df2a409787faab extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "\t<div class=\"heading\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
\t<div class=\"uni-module review-module\">
\t\t<div class=\"uni-module__wrapper row-flex\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "\t\t\t\t<div class=\"review-module__item uni-item\">
\t\t\t\t\t<div class=\"review-module__row\">
\t\t\t\t\t\t<div class=\"review-module__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "thumb", [], "any", false, false, false, 9);
                echo "\" loading=\"lazy\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 9);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 9);
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "href", [], "any", false, false, false, 9);
                echo "\" class=\"uni-href img-responsive\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-module__description\">
\t\t\t\t\t\t\t<a class=\"review-module__name\" href=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 12);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"review-module__text\">
\t\t\t\t\t\t\t\t";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 14);
                echo "
\t\t\t\t\t\t\t\t<a title=\"";
                // line 15
                echo ($context["text_all_reviews"] ?? null);
                echo "\" data-toggle=\"tooltip\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "link_all_reviews", [], "any", false, false, false, 15);
                echo "\" class=\"review-module__more\">&rarr;</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"review-module__row\">
\t\t\t\t\t\t";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<div class=\"review-module__rating rating\">
\t\t\t\t\t\t\t\t";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo "<i class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 22) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t<div class=\"review-module__posted\">
\t\t\t\t\t\t\t<span class=\"review-module__author\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 26);
                echo "</span><span class=\"review-module__date\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 26);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t</div>
\t</div>
\t<script>
\t\t\$(function() {
\t\t\t\$('.review-module').uniModules({
\t\t\t\ttype:'";
            // line 36
            echo ((($context["type_view"] ?? null)) ? (($context["type_view"] ?? null)) : ("carousel"));
            echo "',
\t\t\t\titems: {0:{items:1},580:{items:2},720:{items:2},1050:{items:3},1400:{items:4}}
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  128 => 31,  115 => 26,  112 => 25,  108 => 23,  97 => 22,  94 => 21,  92 => 20,  82 => 15,  78 => 14,  71 => 12,  55 => 9,  50 => 6,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_reviews.twig", "");
    }
}
