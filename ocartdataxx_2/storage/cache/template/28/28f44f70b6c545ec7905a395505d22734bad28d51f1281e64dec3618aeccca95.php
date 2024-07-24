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

/* unishop2/template/extension/module/uni_banner_in_category.twig */
class __TwigTemplate_4122c477e436b7272c5b3b7e0bab46fbfccd53f2529aa8a4928f14808c54f756 extends \Twig\Template
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
        if (($context["banners"] ?? null)) {
            // line 2
            echo "\t<script>
\t\tconst windowWidth = \$(window).width();
\t\t
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["banner"]) {
                // line 6
                echo "\t\t\t";
                $context["banner_style"] = ((twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6)) ? ((("style=\"max-height:" . twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 6)) . "px\"")) : (""));
                // line 7
                echo "\t\t\t
\t\t\tlet html_";
                // line 8
                echo $context["i"];
                echo " = '<div class=\"banner-in-category id-";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 8);
                echo " uni-href\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "href", [], "any", false, false, false, 8);
                echo "\">';
\t\t\t";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9)) {
                    echo "html_";
                    echo $context["i"];
                    echo " += '<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                    echo "\" class=\"banner-in-category__img img-responsive\" ";
                    echo ($context["banner_style"] ?? null);
                    echo " />';";
                }
                // line 10
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 10) || twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "\t\t\t\thtml_";
                    echo $context["i"];
                    echo " += '<div class=\"banner-in-category__wrap\">';
\t\t\t\thtml_";
                    // line 12
                    echo $context["i"];
                    echo " += '<div class=\"banner-in-category__description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 12);
                    echo "</div>';
\t\t\t\t";
                    // line 13
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 13)) {
                        echo "html_";
                        echo $context["i"];
                        echo " += '<button class=\"banner-in-category__btn btn btn-lg btn-primary uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "href", [], "any", false, false, false, 13);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 13);
                        echo "</button>';";
                    }
                    // line 14
                    echo "\t\t\t\thtml_";
                    echo $context["i"];
                    echo " += '</div>';
\t\t\t";
                }
                // line 16
                echo "\t\t\thtml_";
                echo $context["i"];
                echo " += '</div>';
\t
\t\t\tif(windowWidth > 992) {
\t\t\t\t\$('.products-block .product-layout:eq('+(((windowWidth >= 1585) ? ";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "position2", [], "any", false, false, false, 19);
                echo " : ";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "position", [], "any", false, false, false, 19);
                echo ")-1)+')').before(html_";
                echo $context["i"];
                echo ");
\t\t\t}
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_banner_in_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 22,  109 => 19,  102 => 16,  96 => 14,  86 => 13,  80 => 12,  75 => 11,  72 => 10,  62 => 9,  54 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_banner_in_category.twig", "");
    }
}
