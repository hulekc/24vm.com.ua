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

/* unishop2/template/extension/module/uni_slideshow_v2.twig */
class __TwigTemplate_39cf14f1fae22643905092c42c55dfdd4d7a3f9a4d678e8993316b843b32807e extends \Twig\Template
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
        if (($context["slides"] ?? null)) {
            // line 2
            echo "\t<div class=\"uni-slideshow_v2-";
            echo ($context["module"] ?? null);
            echo " uni-slideshow_v2 ";
            echo ((($context["hide_on_mobile"] ?? null)) ? ("hidden-on-mobile") : (""));
            echo "\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["slide"]) {
                // line 4
                echo "\t\t\t<div class=\"uni-slideshow_v2__item item-";
                echo $context["key"];
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "text_over_image", [], "any", false, false, false, 4)) ? ("text-over-image") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 4)) ? ("uni-href") : (""));
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 4)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 4)) . "\"")) : (""));
                echo ">
\t\t\t\t<picture class=\"uni-slideshow_v2__image ";
                // line 5
                echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "text_over_image", [], "any", false, false, false, 5)) ? ("text-over-image") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "has_text", [], "any", false, false, false, 5)) ? ("has-text") : (""));
                echo "\">
\t\t\t\t\t";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["slide"], "image_mobile", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "\t\t\t\t\t\t<source srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slide"], "image_mobile", [], "any", false, false, false, 7);
                    echo "\" media=\"(max-width:575px)\" />
\t\t\t\t\t";
                }
                // line 9
                echo "\t\t\t\t\t<source srcset=\"";
                echo twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 9);
                echo "\" />
\t\t\t\t\t<img src=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 10);
                echo "\" class=\"uni-slideshow_v2__img\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 10);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["slide"], "width", [], "any", false, false, false, 10);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["slide"], "height", [], "any", false, false, false, 10);
                echo "\" ";
                echo ((($context["key"] > 0)) ? ("loading=\"lazy\" decoding=\"async\"") : (""));
                echo "  />
\t\t\t\t</picture>
\t\t\t\t";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 12) && twig_get_attribute($this->env, $this->source, $context["slide"], "text", [], "any", false, false, false, 12))) {
                    // line 13
                    echo "\t\t\t\t\t<div class=\"uni-slideshow_v2__description ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "text_over_image", [], "any", false, false, false, 13)) ? ("text-over-image") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "text_hide_mobile", [], "any", false, false, false, 13)) ? ("hide-in-mobile") : (""));
                    echo "\">
\t\t\t\t\t\t<div class=\"uni-slideshow_v2__title\">";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 14);
                    echo "</div>
\t\t\t\t\t\t<div class=\"uni-slideshow_v2__text\">";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["slide"], "text", [], "any", false, false, false, 15);
                    echo "</div>
\t\t\t\t\t\t";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "button", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "\t\t\t\t\t\t\t<div class=\"uni-slideshow_v2__btns\">
\t\t\t\t\t\t\t\t<button class=\"uni-slideshow_v2__btn uni-href btn btn-lg\" data-href=\"";
                        // line 18
                        echo twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 18);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["slide"], "button", [], "any", false, false, false, 18);
                        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 23
                echo "\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t</div>
\t<script>
\t\t\$(function() {
\t\t\tlet style_";
            // line 28
            echo ($context["module"] ?? null);
            echo " = '@media (max-width:767px) {.uni-slideshow_v2-";
            echo ($context["module"] ?? null);
            echo " .uni-slideshow_v2__item{height:";
            echo ($context["max_height_mobile"] ?? null);
            echo "px}.uni-slideshow_v2__img {min-height:";
            echo ($context["max_height_mobile"] ?? null);
            echo "px;max-height:";
            echo ($context["max_height_mobile"] ?? null);
            echo "px}}';
\t
\t\t\tif(!\$('#column-left').length && !\$('#column-right').length) {
\t\t\t\tstyle_";
            // line 31
            echo ($context["module"] ?? null);
            echo " += '@media (min-width:767px) {body:not(.touch-support) .uni-slideshow_v2__item {height:100% !important} body:not(.touch-support) .uni-slideshow_v2__image.text-over-image img{width:100%;max-width:100%;height:auto;max-height:";
            echo ($context["max_height"] ?? null);
            echo "px;object-fit:contain !important} }';
\t\t\t} else {
\t\t\t\tstyle_";
            // line 33
            echo ($context["module"] ?? null);
            echo " += '@media (min-width:767px) {.uni-slideshow_v2-";
            echo ($context["module"] ?? null);
            echo " .uni-slideshow_v2__item{height:";
            echo ($context["max_height"] ?? null);
            echo "px}.uni-slideshow_v2__img {max-height:";
            echo ($context["max_height"] ?? null);
            echo "px}}';
\t\t\t}
\t
\t\t\t\$('head').append('<style>'+style_";
            // line 36
            echo ($context["module"] ?? null);
            echo "+'</style>');
\t\t
\t\t\t";
            // line 38
            $context["status"] = (((twig_length_filter($this->env, ($context["slides"] ?? null)) > 1)) ? ("true") : ("false"));
            // line 39
            echo "\t
\t\t\t\$('.uni-slideshow_v2-";
            // line 40
            echo ($context["module"] ?? null);
            echo "').addClass('owl-carousel').owlCarousel({
\t\t\t\titems:1,
\t\t\t\tautoplay:true,
\t\t\t\t";
            // line 43
            if (((($context["effect_in"] ?? null) != "disabled") && (($context["effect_out"] ?? null) != "disabled"))) {
                // line 44
                echo "\t\t\t\tanimateIn:'";
                echo ($context["effect_in"] ?? null);
                echo "',
\t\t\t\tanimateOut:'";
                // line 45
                echo ($context["effect_out"] ?? null);
                echo "',
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\tautoplayTimeout:";
            echo (((($context["delay"] ?? null) > 0)) ? ((($context["delay"] ?? null) * 1000)) : (5000));
            echo ",
\t\t\t\tautoplayHoverPause:true,
\t\t\t\tmouseDrag:";
            // line 49
            echo ($context["status"] ?? null);
            echo ",
\t\t\t\ttouchDrag:";
            // line 50
            echo ($context["status"] ?? null);
            echo ",
\t\t\t\tnav:true,
\t\t\t\tloop: ";
            // line 52
            echo ($context["status"] ?? null);
            echo ",
\t\t\t\tnavText: ['<i class=\"fa fa-chevron-left\"></i>', '<i class=\"fa fa-chevron-right\"></i>'],
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_slideshow_v2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 52,  210 => 50,  206 => 49,  200 => 47,  195 => 45,  190 => 44,  188 => 43,  182 => 40,  179 => 39,  177 => 38,  172 => 36,  160 => 33,  153 => 31,  139 => 28,  134 => 25,  127 => 23,  123 => 21,  115 => 18,  112 => 17,  110 => 16,  106 => 15,  102 => 14,  95 => 13,  93 => 12,  80 => 10,  75 => 9,  69 => 7,  67 => 6,  61 => 5,  50 => 4,  46 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_slideshow_v2.twig", "");
    }
}
