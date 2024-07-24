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

/* unishop2/template/account/order_info.twig */
class __TwigTemplate_22ecffe6ceb4ab3f4280257ce44d7fae19676c9af9d0eb7a4e7ba34302240aa3 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-order\" class=\"container\">
\t<div class=\"breadcrumb-h1 ";
        // line 3
        echo ((($context["menu_expanded"] ?? null)) ? ("col-md-offset-3 col-lg-offset-3 col-xxl-offset-4") : (""));
        echo "\">
\t\t<ul class=\"breadcrumb mobile\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 6
            echo "\t\t\t\t";
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 7
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</a></li>
\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t";
                if (( !($context["hide_last_breadcrumb"] ?? null) || (($context["hide_last_breadcrumb"] ?? null) && ($context["key"] == 1)))) {
                    echo "<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                    echo "</li>";
                }
                // line 10
                echo "\t\t\t\t";
            }
            // line 11
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t</ul>
\t</div>
\t";
        // line 14
        if (($context["success"] ?? null)) {
            // line 15
            echo "\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 19
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 24
        echo "\t<div class=\"row\">
\t";
        // line 25
        echo ($context["column_left"] ?? null);
        echo "
\t";
        // line 26
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 27
            echo "\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 28
            echo "\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 29
            echo "\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 30
            echo "\t";
        } else {
            // line 31
            echo "\t\t";
            $context["class"] = "col-sm-12";
            // line 32
            echo "\t";
        }
        // line 33
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
        <div class=\"uni-block__line\">
        <h1 class=\"heading\">";
        // line 35
        echo ($context["text_order_detail"] ?? null);
        echo " №";
        echo ($context["order_id"] ?? null);
        echo " - ";
        echo ($context["date_added"] ?? null);
        echo "</h1>
\t\t";
        // line 36
        echo ($context["content_top"] ?? null);
        echo "
\t\t<div class=\"account-order-info uni-wrapper\">
\t\t\t<div class=\"row row-flex\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<!-- <div class=\"heading\"><span>";
        // line 40
        echo ($context["text_order_detail"] ?? null);
        echo "</span></div> -->
\t\t\t\t\t<div class=\"account-order-info__description\">
\t\t\t\t\t\t";
        // line 42
        if (($context["invoice_no"] ?? null)) {
            // line 43
            echo "\t\t\t\t\t\t\t<div class=\"account-order-info__description-item customer\"><div class=\"account-order-info__description-div\"><span class=\"account-order-info__description-span\">";
            echo ($context["text_invoice_no"] ?? null);
            echo "</span></div>";
            echo ($context["invoice_no"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t<!-- <div class=\"account-order-info__description-item customer\"><div class=\"account-order-info__description-div\"><span class=\"account-order-info__description-span\">";
        echo ($context["text_account_order_id"] ?? null);
        echo "</span></div>#";
        echo ($context["order_id"] ?? null);
        echo "</div>
\t\t\t\t\t\t<div class=\"account-order-info__description-item customer\"><div class=\"account-order-info__description-div\"><span class=\"account-order-info__description-span\">";
        // line 46
        echo ($context["text_date_added"] ?? null);
        echo "</span></div>";
        echo ($context["date_added"] ?? null);
        echo "</div> -->
\t\t\t\t\t\t";
        // line 47
        if (($context["payment_method"] ?? null)) {
            // line 48
            echo "\t\t\t\t\t\t\t<div class=\"account-order-info__description-item customer\"><div class=\"account-order-info__description-div\"><span class=\"account-order-info__description-span\">";
            echo ($context["text_payment_method"] ?? null);
            echo "</span></div>";
            echo ($context["payment_method"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t";
        if (($context["shipping_method"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t\t<div class=\"account-order-info__description-item customer\"><div class=\"account-order-info__description-div\"><span class=\"account-order-info__description-span\">";
            echo ($context["text_shipping_method"] ?? null);
            echo "</span></div>";
            echo ($context["shipping_method"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"heading\">";
        // line 59
        echo ($context["text_payment_address"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"account-order-info__payment-address\">
\t\t\t\t\t\t";
        // line 61
        echo ($context["payment_address"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t";
        // line 65
        if (($context["shipping_address"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t<div class=\"heading\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</div>
\t\t\t\t\t\t<div class=\"account-order-info__shipping-address\">
\t\t\t\t\t\t\t";
            // line 68
            echo ($context["shipping_address"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"account-order-info__products-wrap\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"account-order-info__products-table\">
\t\t\t\t\t\t<tr class=\"account-order-info__products-heading\">
\t\t\t\t\t\t\t<td class=\"account-order-info__products-name text-left\">";
        // line 77
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"account-order-info__products-model text-left\">";
        // line 78
        echo ($context["column_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"account-order-info__products-quantity text-right\">";
        // line 79
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"account-order-info__products-price text-right\">";
        // line 80
        echo ($context["column_price"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"account-order-info__products-total text-right\">";
        // line 81
        echo ($context["column_total"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t";
        // line 82
        if (($context["products"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t<td style=\"width: 20px;border-right: 1px solid #e7eef3;\"></td>
\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 87
            echo "\t\t\t\t\t\t\t<tr class=\"account-order-info__products-item\">
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-name text-left\">
\t\t\t\t\t\t\t\t\t";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 89);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
\t\t\t\t\t\t\t\t\t\t&nbsp;<small> - ";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 91);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 91);
                echo "</small>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-model text-left\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 94);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-quantity text-right\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 95);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-price text-right\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-total text-right\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 97);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-btn text-right\" style=\"white-space:nowrap\">
\t\t\t\t\t\t\t\t\t";
            // line 99
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 99)) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 100);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn add_to_cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 100);
                echo " uni-href\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 100);
                echo "\"><img src=\"/image/catalog/icons/shopping-cart.png\" alt=\"shopping-cart\"><span class=\"hidden-sm hidden-md\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 100);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_return", [], "any", true, true, false, 102)) {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 104);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_return"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 110
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-name text-left\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 111);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-model text-left\"></td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-quantity text-right\">1</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-price text-right\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 114);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__products-total text-right\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 115);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 116
            if (($context["products"] ?? null)) {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t<div class=\"account-order-info__totals\">
\t\t\t\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"account-order-info__totals-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"account-order-info__totals-title\">";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 126);
            echo ": </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"account-order-info__totals-text\">";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 127);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 136
        if (($context["comment"] ?? null)) {
            // line 137
            echo "\t\t\t\t<div class=\"heading\"><span>";
            echo ($context["text_comment"] ?? null);
            echo "</span></div>
\t\t\t\t<div class=\"account-order-info__comment\">
\t\t\t\t\t";
            // line 139
            echo ($context["comment"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 142
        echo "\t\t\t";
        if (($context["histories"] ?? null)) {
            // line 143
            echo "\t\t\t\t<div class=\"heading\"><span>";
            echo ($context["text_history"] ?? null);
            echo "</span></div>
\t\t\t\t<div class=\"account-order-info__history-wrap\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"account-order-info__history-table\">
\t\t\t\t\t\t\t<tr class=\"account-order-info__history-heading\">
\t\t\t\t\t\t\t\t<td class=\"account-order-info__history-date\">";
            // line 148
            echo ($context["column_date_added"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__history-status\">";
            // line 149
            echo ($context["column_status"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"account-order-info__history-comment\">";
            // line 150
            echo ($context["column_comment"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 153
                echo "\t\t\t\t\t\t\t\t<tr class=\"account-order-info__history-item\">
\t\t\t\t\t\t\t\t\t<td class=\"account-order-info__history-date\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 154);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"account-order-info__history-status\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 155);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"account-order-info__history-comment\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 156);
                echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 163
        echo "\t\t\t<div class=\"buttons clearfix hidden\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
        // line 164
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
\t\t\t</div>
\t\t\t";
        // line 166
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t</div>
\t";
        // line 169
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 171
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 171,  509 => 169,  503 => 166,  496 => 164,  493 => 163,  487 => 159,  478 => 156,  474 => 155,  470 => 154,  467 => 153,  463 => 152,  458 => 150,  454 => 149,  450 => 148,  441 => 143,  438 => 142,  432 => 139,  426 => 137,  424 => 136,  416 => 130,  407 => 127,  403 => 126,  400 => 125,  396 => 124,  391 => 121,  384 => 119,  380 => 117,  378 => 116,  374 => 115,  370 => 114,  364 => 111,  361 => 110,  356 => 109,  348 => 106,  341 => 104,  338 => 103,  335 => 102,  321 => 100,  319 => 99,  314 => 97,  310 => 96,  306 => 95,  302 => 94,  299 => 93,  289 => 91,  283 => 90,  279 => 89,  275 => 87,  271 => 86,  268 => 85,  264 => 83,  262 => 82,  258 => 81,  254 => 80,  250 => 79,  246 => 78,  242 => 77,  234 => 71,  228 => 68,  222 => 66,  220 => 65,  213 => 61,  208 => 59,  200 => 53,  192 => 51,  189 => 50,  181 => 48,  179 => 47,  173 => 46,  166 => 45,  158 => 43,  156 => 42,  151 => 40,  144 => 36,  136 => 35,  130 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  115 => 28,  112 => 27,  110 => 26,  106 => 25,  103 => 24,  95 => 20,  92 => 19,  84 => 15,  82 => 14,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/account/order_info.twig", "");
    }
}
