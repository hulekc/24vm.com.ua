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

/* default/template/extension/module/related_bundle.twig */
class __TwigTemplate_e80d8f64ab2de18d6974034773144b6ad98ce2e9427c7577b041e75a16e8ea0e extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["xbundles"] ?? null)) > 0)) {
            // line 2
            echo "<div class=\"swiper-viewport-bundle\">
  <div class=\"swiper-container bundle-carousel\">
    <div class=\"swiper-wrapper\"> 
\t ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["xbundles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["xbundle"]) {
                // line 6
                echo "\t \t<div class=\"swiper-slide text-center\">
\t\t  <div class=\"xbundle_container\" id=\"bundle";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "bundle_id", [], "any", false, false, false, 7);
                echo "\">
\t\t\t<div class=\"prod-details__title\"style=\"display: flex;margin: 0;\"><span>";
                // line 8
                echo ($context["text_save_buy"] ?? null);
                echo "</span></div>
\t\t\t";
                // line 9
                $context["i"] = 0;
                // line 10
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["xbundle"], "wproducts", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 11
                    echo "\t\t\t\t";
                    if ((($context["i"] ?? null) > 0)) {
                        echo "<div class=\"xbundle_plus\">+</div>";
                    }
                    // line 12
                    echo "\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 13
                    echo "\t\t\t\t<div class=\"xbundle_products\">
\t\t\t\t\t<h4><a href=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                    echo "</a></h4>
\t\t\t\t\t<div class=\"image\"><a href=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t";
                    // line 16
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 16) > 1)) {
                        // line 17
                        echo "\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t<p>x";
                        // line 18
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 18);
                        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t  \t";
                    // line 23
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24);
                        echo "
\t\t\t\t\t\t\t<div class=\"regular-price\"><span>";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                        echo "</span></div>
\t\t\t\t\t\t";
                    } else {
                        // line 27
                        echo "\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                        echo "
\t\t\t\t\t\t\t<div class=\"regular-price\">  </div>
\t\t\t\t\t  \t";
                    }
                    // line 30
                    echo "\t\t\t\t\t</p>
\t\t\t\t\t<input type=\"hidden\" name=\"products[]\" value=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 31);
                    echo "\" />
\t\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["xbundle"], "countdown_end_date", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() { 
\t\t\t\t\$('.countdown";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "bundle_id", [], "any", false, false, false, 37);
                    echo "').downCount({
\t\t\t\t\tdate: '";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "countdown_end_date", [], "any", false, false, false, 38);
                    echo "',
\t\t\t\t\toffset: +1
\t\t\t\t});
\t\t\t});
\t\t\t</script>
\t\t\t";
                }
                // line 44
                echo "\t\t\t\t<div class=\"xbundle_info\">
\t\t\t\t\t<p class=\"xbundle_title\">";
                // line 45
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["xbundle"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null);
                echo "</p>
\t\t\t\t\t<p class=\"xbundle_save\"><span>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "total", [], "any", false, false, false, 46);
                echo "</span></p>
\t\t\t\t\t<p class=\"xbundle_price\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "bundleprice", [], "any", false, false, false, 47);
                echo "</p>
\t\t\t\t\t<p class=\"xbundle_save\">";
                // line 48
                echo ($context["text_you_saves"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "save", [], "any", false, false, false, 48);
                echo "</p>

\t\t\t\t\t";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["xbundle"], "countdown_end_date", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "\t\t\t\t\t\t<ul class=\"downcoo countdown";
                    echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "bundle_id", [], "any", false, false, false, 51);
                    echo "\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"clock-o\"></span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"days\"></span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"hours\"></span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"minutes\"></span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"seconds last\"></span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 69
                echo "
\t\t\t\t\t<button rel=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "bundle_id", [], "any", false, false, false, 70);
                echo "\" class=\"addtocart btn btn-lg btn-primary\"><i class=\"fal fa-cart-shopping\"></i><span>";
                echo ($context["text_buy_noww"] ?? null);
                echo "</span></button>
\t\t\t\t</div>
\t\t  \t  </div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['xbundle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t</div>
\t";
            // line 76
            if ((twig_length_filter($this->env, ($context["xbundles"] ?? null)) > 1)) {
                // line 77
                echo "\t<div class=\"swiper-pagination\"></div>
\t<div class=\"swiper-pager\">
\t    <div class=\"swiper-button-next\"></div>
\t    <div class=\"swiper-button-prev\"></div>
\t</div>
\t";
            }
            // line 83
            echo "  </div>
</div>
";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["xbundles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["xbundle"]) {
                // line 86
                echo "\t<div class=\"xbundlemodel\" id=\"xbundle_";
                echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "bundle_id", [], "any", false, false, false, 86);
                echo "\">
\t\t\t<div class=\"xbundle_model_dialog\">
\t\t\t\t<div class=\"xbundle_model_dialog_content\">
\t\t\t\t\t<div class=\"xbundle_close\"><span aria-hidden=\"true\">&times;</span></div>
\t\t\t\t\t<div class=\"xbundle_model_dialog_body\">
\t\t\t\t\t\t<h3>";
                // line 91
                echo ($context["text_option"] ?? null);
                echo "</h3>
\t\t\t\t\t\t";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["xbundle"], "wproducts", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "\t\t\t\t\t\t<div class=\"col_s_6\">
\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                        // line 95
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 95);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                        echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t\t\t\t<h4><a href=\"";
                        // line 96
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 96);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                        echo "</a></h4>
\t\t\t\t\t\t\t";
                        // line 97
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 97));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 98
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 98) == "select")) {
                                // line 99
                                echo "\t\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 99)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                                // line 100
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100);
                                echo "</label>
\t\t\t\t\t\t\t  <select name=\"option[";
                                // line 101
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                                echo "]\" id=\"input-option";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                                // line 102
                                echo ($context["text_select"] ?? null);
                                echo "</option>
\t\t\t\t\t\t\t\t";
                                // line 103
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 103));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 104
                                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 104);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 104);
                                    echo "
\t\t\t\t\t\t\t\t";
                                    // line 105
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 105)) {
                                        // line 106
                                        echo "\t\t\t\t\t\t\t\t(";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 106);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106);
                                        echo ")
\t\t\t\t\t\t\t\t";
                                    }
                                    // line 107
                                    echo " </option>
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 109
                                echo "\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 112
                            echo "\t\t\t\t\t\t\t ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 112) == "radio")) {
                                // line 113
                                echo "\t\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 113)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\">";
                                // line 114
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 114);
                                echo "</label>
\t\t\t\t\t\t\t  <div id=\"input-option";
                                // line 115
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 115);
                                echo "\"> ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 115));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 116
                                    echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                    // line 118
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 118);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                                    // line 119
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 119)) {
                                        echo " <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 119);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 119);
                                        echo " ";
                                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 119)) {
                                            echo " ";
                                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 119);
                                            echo " ";
                                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 119);
                                            echo " ";
                                        }
                                        echo "\" class=\"img-thumbnail\" /> ";
                                    }
                                    echo "                  
\t\t\t\t\t\t\t\t\t";
                                    // line 120
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 120);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                    // line 121
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121)) {
                                        // line 122
                                        echo "\t\t\t\t\t\t\t\t\t(";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 122);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122);
                                        echo ")
\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 123
                                    echo " </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 125
                                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 128
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 128) == "checkbox")) {
                                // line 129
                                echo "\t\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 129)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\">";
                                // line 130
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 130);
                                echo "</label>
\t\t\t\t\t\t\t  <div id=\"input-option";
                                // line 131
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 131);
                                echo "\"> ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 131));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 132
                                    echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                                    // line 134
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                                    echo "][]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 134);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                                    // line 135
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 135)) {
                                        echo " <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 135);
                                        echo "\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 135);
                                        echo " ";
                                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 135)) {
                                            echo " ";
                                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 135);
                                            echo " ";
                                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 135);
                                            echo " ";
                                        }
                                        echo "\" class=\"img-thumbnail\" /> ";
                                    }
                                    // line 136
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 136);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                    // line 137
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 137)) {
                                        // line 138
                                        echo "\t\t\t\t\t\t\t\t\t(";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 138);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 138);
                                        echo ")
\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 139
                                    echo " </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 141
                                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 144
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 144) == "image")) {
                                // line 145
                                echo "\t\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 145)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\">";
                                // line 146
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 146);
                                echo "</label>
\t\t\t\t\t\t\t  <div id=\"input-option";
                                // line 147
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                                echo "\">
\t\t\t\t\t\t\t\t";
                                // line 148
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 148));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 149
                                    echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                    // line 151
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                                    echo "]\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 151);
                                    echo "\" />
\t\t\t\t\t\t\t\t\t<img src=\"";
                                    // line 152
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 152);
                                    echo "\" alt=\"";
                                    echo (((twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 152) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 152))) ? (((" " . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 152)) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 152))) : (""));
                                    echo "\" class=\"img-thumbnail\" /> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 152);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                    // line 153
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 153)) {
                                        // line 154
                                        echo "\t\t\t\t\t\t\t\t\t(";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 154);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154);
                                        echo ")
\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 155
                                    echo " 
\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 159
                                echo "\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            }
                            // line 162
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 162) == "text")) {
                                // line 163
                                echo "\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 163)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                                // line 164
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164);
                                echo "</label>
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                                // line 165
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 165);
                                echo "\" placeholder=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 165);
                                echo "\" id=\"input-option";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                                echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 168
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 168) == "textarea")) {
                                // line 169
                                echo "\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 169)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                                // line 170
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                                echo "</label>
\t\t\t\t\t\t  <textarea name=\"option[";
                                // line 171
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                                echo "]\" rows=\"5\" placeholder=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                                echo "\" id=\"input-option";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                                echo "\" class=\"form-control\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 171);
                                echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 174
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 174) == "file")) {
                                // line 175
                                echo "\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 175)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t  <label class=\"control-label\">";
                                // line 176
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 176);
                                echo "</label>
\t\t\t\t\t\t  <button type=\"button\" id=\"button-upload";
                                // line 177
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                                echo "\" data-loading-text=\"";
                                echo ($context["text_loading"] ?? null);
                                echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                                echo ($context["button_upload"] ?? null);
                                echo "</button>
\t\t\t\t\t\t  <input type=\"hidden\" name=\"option[";
                                // line 178
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                                echo "]\" value=\"\" id=\"input-option";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 181
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 181) == "date")) {
                                // line 182
                                echo "\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 182)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                                // line 183
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183);
                                echo "</label>
\t\t\t\t\t\t  <div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                                // line 185
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 185);
                                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 191
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 191) == "datetime")) {
                                // line 192
                                echo "\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 192)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                                // line 193
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 193);
                                echo "</label>
\t\t\t\t\t\t  <div class=\"input-group datetime\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                                // line 195
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 195);
                                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 201
                            echo "\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "time")) {
                                // line 202
                                echo "\t\t\t\t\t\t<div class=\"form-group";
                                if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 202)) {
                                    echo " required ";
                                }
                                echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                                // line 203
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                                echo "</label>
\t\t\t\t\t\t  <div class=\"input-group time\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                                // line 205
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 205);
                                echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                            }
                            // line 211
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 212
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 214
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"xbundle_clear\"></div>
\t\t\t\t\t\t<div class=\"col_s_12\">
\t\t\t\t\t\t\t<button rel=\"";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["xbundle"], "bundle_id", [], "any", false, false, false, 218);
                echo "\" class=\"addtocartwithoption btn btn-primary\">";
                echo ($context["text_buy_noww"] ?? null);
                echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['xbundle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t
<script>
\$('.xbundle_close').on('click',function(){
 \$('.sticky-wrapper').removeClass('journal_header');
 \$('.boxed-footer').removeClass('journal_footer');
 \$('.xbundlemodel').fadeOut(400);
 \$(\"body\").removeClass(\"xbundle_scroll\");
 \$('#content').removeClass('journal_content');
});

var xbundle_container_width = \$(\".xbundle_container\").width();
if(xbundle_container_width < 400){
\t\$('.xbundle_plus').addClass('center_plus');
}

\$('.swiper-viewport-bundle').on('click','.addtocart',function(){
 var rel = \$(this).attr('rel');
 \$.ajax({
\t\turl: 'index.php?route=extension/xbundle/addtocart&bundle_id='+rel,
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t \$('.sticky-wrapper').addClass('journal_header');
\t\t\t\t \$('.boxed-footer').addClass('journal_footer');
\t\t\t\t \$('#content').addClass('journal_content');
\t\t\t\t \$('#xbundle_'+rel).fadeIn(400);
\t\t\t\t \$(\"body\").addClass(\"xbundle_scroll\");
\t\t\t\t}
    
\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}
    
\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\turl ='index.php?route=checkout/cart'
\t\t\t\tlocation = url;
\t\t\t}
\t\t}
\t});
});

\$('.addtocartwithoption').on('click',function(){
 var rel = \$(this).attr('rel');
 \$.ajax({
\t\turl: 'index.php?route=extension/xbundle/addtocart&bundle_id='+rel,
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tcache: false,
\t\tdata: \$('#xbundle_'+rel+' input[type=\\'text\\'], #xbundle_'+rel+' input[type=\\'hidden\\'], #xbundle_'+rel+' input[type=\\'radio\\']:checked, #xbundle_'+rel+' input[type=\\'checkbox\\']:checked, #xbundle_'+rel+' select, #xbundle_'+rel+' textarea'),
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\turl ='index.php?route=checkout/cart'
\t\t\t\tlocation = url;
\t\t\t}
\t\t}
\t});
});
</script>
<script><!--
if (\$.fn.datepicker) {
\t\$('.date').datetimepicker({
\t\tpickTime: false
\t});

\t\$('.datetime').datetimepicker({
\t\tpickDate: true,
\t\tpickTime: true
\t});

\t\$('.time').datetimepicker({
\t\tpickDate: false
\t});
}
\$('button[id^=\\'button-uploads\\']').on('click', function() {
\tvar node = this;
\t
\t\$('#form-upload').remove();
\t
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
\t
\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t
\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);
\t\t\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t
\t\t\t\t\t\t\$(node).parent().find('input').attr('value', json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
";
            // line 388
            if ((twig_length_filter($this->env, ($context["xbundles"] ?? null)) > 1)) {
                // line 389
                echo "<script><!--
\$('.bundle-carousel').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
--></script>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/related_bundle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  933 => 389,  931 => 388,  764 => 223,  750 => 218,  745 => 215,  739 => 214,  735 => 212,  729 => 211,  716 => 205,  709 => 203,  702 => 202,  699 => 201,  686 => 195,  679 => 193,  672 => 192,  669 => 191,  656 => 185,  649 => 183,  642 => 182,  639 => 181,  631 => 178,  623 => 177,  619 => 176,  612 => 175,  609 => 174,  597 => 171,  591 => 170,  584 => 169,  581 => 168,  569 => 165,  563 => 164,  556 => 163,  553 => 162,  548 => 159,  539 => 155,  532 => 154,  530 => 153,  522 => 152,  516 => 151,  512 => 149,  508 => 148,  504 => 147,  500 => 146,  493 => 145,  490 => 144,  485 => 141,  477 => 139,  470 => 138,  468 => 137,  463 => 136,  447 => 135,  441 => 134,  437 => 132,  431 => 131,  427 => 130,  420 => 129,  417 => 128,  412 => 125,  404 => 123,  397 => 122,  395 => 121,  391 => 120,  373 => 119,  367 => 118,  363 => 116,  357 => 115,  353 => 114,  346 => 113,  343 => 112,  338 => 109,  331 => 107,  324 => 106,  322 => 105,  315 => 104,  311 => 103,  307 => 102,  301 => 101,  295 => 100,  288 => 99,  285 => 98,  281 => 97,  275 => 96,  265 => 95,  262 => 94,  259 => 93,  255 => 92,  251 => 91,  242 => 86,  238 => 85,  234 => 83,  226 => 77,  224 => 76,  221 => 75,  208 => 70,  205 => 69,  183 => 51,  181 => 50,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  159 => 44,  150 => 38,  146 => 37,  142 => 35,  139 => 34,  130 => 31,  127 => 30,  120 => 27,  115 => 25,  110 => 24,  108 => 23,  104 => 21,  98 => 18,  95 => 17,  93 => 16,  83 => 15,  77 => 14,  74 => 13,  71 => 12,  66 => 11,  61 => 10,  59 => 9,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/related_bundle.twig", "");
    }
}
