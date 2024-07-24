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

/* unishop2/template/common/cart.twig */
class __TwigTemplate_39b5c7e25f5de52da76c9d1d6a8d2cbaca0cb1240f590ca1935998a3cfcacbbc extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"header-cart\" title=\"";
        echo ($context["text_modal_heading"] ?? null);
        echo "\">
\t<div class=\"header-cart__btn dropdown-toggle\" onclick=\"uniModalWindow('modal-cart', '', '";
        // line 2
        echo ($context["text_modal_heading"] ?? null);
        echo "', \$('header').find('.header-cart__dropdown').html())\">
\t\t<i class=\"fal fa-cart-shopping\"></i>
\t\t<span id=\"cart-total\" class=\"header-cart__total-items\">";
        // line 4
        echo ($context["items"] ?? null);
        echo "</span>
\t</div>
\t<div class=\"header-cart__dropdown\">
\t\t";
        // line 7
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 8
            echo "\t\t\t<div class=\"header-cart__wrapper\" data-products=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 8);
                echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["products"] ?? null)))) ? (", ") : (""));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "\t\t\t\t<div class=\"header-cart__item\">
\t\t\t\t\t";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "\t\t\t\t\t\t<div class=\"header-cart__image\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                    echo "\" class=\"img-responsive\" ";
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 13))) ? ("style=\"filter:grayscale(1)\"") : (""));
                    echo " /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t\t<div class=\"header-cart__item-wrapper\">
\t\t\t\t\t\t<div class=\"header-cart__name\">
\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "</a> 
\t\t\t\t\t\t\t";
                // line 19
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t<div class=\"header-cart__stock\">";
                    echo ($context["error_cart_stock"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"header-cart__option-item\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                        echo "</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<div class=\"header-cart__recurring\">";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 28);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-cart__quantity\">
\t\t\t\t\t\t\t<div class=\"qty-switch qty-switch__cart\">
\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-minus\"></i> 
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 34);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34);
                echo "\" data-minimum=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 34);
                echo "\" data-cid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 34);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 34);
                echo "\" class=\"qty-switch__input form-control\" /> 
\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-cart__price hidden-xs\"><div class=\"header-cart__price-text\">";
                // line 38
                echo ($context["column_price"] ?? null);
                echo "</div>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                echo "</div>
\t\t\t\t\t\t<div class=\"header-cart__total\"><div class=\"header-cart__total-text hidden-xs\">";
                // line 39
                echo ($context["column_total"] ?? null);
                echo "</div>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-cart__remove\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.remove('";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 42);
                echo "', ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 42);
                echo ");\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"header-cart__remove-btn\"><i class=\"fa fa-trash-alt\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 47
                echo "\t\t\t\t<div class=\"header-cart__item\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"header-cart__item-wrapper\">
\t\t\t\t\t\t<div class=\"header-cart__name\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 50);
                echo "</div>
\t\t\t\t\t\t<div class=\"header-cart__quantity\"></div>
\t\t\t\t\t\t<div class=\"header-cart__price hidden-xs\"><div class=\"header-cart__price-text\">";
                // line 52
                echo ($context["column_price"] ?? null);
                echo "</div>";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 52);
                echo "</div>
\t\t\t\t\t\t<div class=\"header-cart__total\"><div class=\"header-cart__total-text hidden-xs\">";
                // line 53
                echo ($context["column_total"] ?? null);
                echo "</div>";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 53);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-cart__remove\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"voucher.remove('";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 56);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"header-cart__remove-btn\"><i class=\"fa fa-trash-alt\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t</div>
\t\t\t<div class=\"header-cart__totals\">
\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 63
                echo "\t\t\t\t\t<div class=\"header-cart__totals-item\">
\t\t\t\t\t\t<div class=\"header-cart__totals-title\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 64);
                echo ":</div>
\t\t\t\t\t\t<div class=\"header-cart__totals-text\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 65);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t</div>
\t\t\t<div class=\"header-cart__buttons\">
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-default\" data-dismiss=\"modal\">";
            // line 70
            echo ($context["button_continue_shopping"] ?? null);
            echo "</button>
\t\t\t\t";
            // line 71
            if (($context["uni_checkout_href"] ?? null)) {
                // line 72
                echo "\t\t\t\t\t<a href=\"";
                echo ($context["uni_checkout_href"] ?? null);
                echo "\" class=\"btn btn-lg btn-primary\">";
                echo ($context["button_to_checkout"] ?? null);
                echo "</a>
\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t<!-- <a href=\"";
                echo ($context["cart"] ?? null);
                echo "\"><small>";
                echo ($context["text_cart"] ?? null);
                echo "</small></a>&nbsp;&nbsp;&nbsp; -->
\t\t\t\t\t<a href=\"";
                // line 75
                echo ($context["checkout"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["text_checkout"] ?? null);
                echo "</a>
\t\t\t\t";
            }
            // line 77
            echo "\t\t\t</div>
\t\t";
        } else {
            // line 79
            echo "\t\t\t<div class=\"header-cart__empty\"><span class=\"header-cart__img-empty \"><i class=\"fal fa-cart-shopping\"></i></span><br/>";
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t";
        }
        // line 81
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 81,  295 => 79,  291 => 77,  284 => 75,  277 => 74,  269 => 72,  267 => 71,  263 => 70,  259 => 68,  250 => 65,  246 => 64,  243 => 63,  239 => 62,  235 => 60,  223 => 56,  215 => 53,  209 => 52,  204 => 50,  199 => 47,  194 => 46,  180 => 42,  172 => 39,  166 => 38,  151 => 34,  145 => 30,  137 => 28,  134 => 27,  131 => 26,  120 => 24,  115 => 23,  112 => 22,  106 => 20,  104 => 19,  98 => 18,  94 => 16,  80 => 13,  77 => 12,  75 => 11,  72 => 10,  68 => 9,  55 => 8,  53 => 7,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/cart.twig", "");
    }
}
