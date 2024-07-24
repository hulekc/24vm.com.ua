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

/* unishop2/template/mail/order_add.twig */
class __TwigTemplate_051c9345634187958a8e9d5fca54c29f22bf07af4a9b8de503c6a67b30b21e3d extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
\t\t<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<style>
\t\t\t.order-info{width:1300px;max-width:95%;line-height:1.6em;font-size:16px}
\t\t\t.order-info__logo{margin:0 0 30px}
\t\t\t.order-info__block{margin:0 0 25px}
\t\t\t.order-info__block-item{width:50%;max-width:450px}
\t\t\t.order-info__block-item + .order-info__block-item{padding:0 0 0 20px}
\t\t\t.order-info__block-heading{margin:0 0 10px;font-weight:bold}
\t\t\t.order-info__products{border-collapse:collapse;width:100%;border-top:1px solid #ddd;border-left:1px solid #ddd;margin:0 0 30px}
\t\t\t.order-info__products thead td{border-right:1px solid #ddd;border-bottom:1px solid #ddd;background-color:#f7f7f7;font-weight:bold;font-size:.95em;text-align:left;padding:10px 15px;color:#222}
\t\t\t.order-info__products tbody td, .order-info__products tfoot td{border-right:1px solid #ddd;border-bottom:1px solid #ddd;text-align:left;padding:10px 15px}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"order-info\">
\t\t\t<div class=\"order-info__logo\">
\t\t\t\t<a href=\"";
        // line 21
        echo ($context["store_url"] ?? null);
        echo "\" title=\"";
        echo ($context["store_name"] ?? null);
        echo "\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["store_name"] ?? null);
        echo "\" style=\"border:none\" /></a>
\t\t\t</div>
\t\t\t<div class=\"order-info__block\">";
        // line 23
        echo ($context["text_greeting"] ?? null);
        echo "</div>
\t\t\t";
        // line 24
        if (($context["customer_id"] ?? null)) {
            // line 25
            echo "\t\t\t\t<div class=\"order-info__block\">";
            echo ($context["text_link"] ?? null);
            echo " <a href=\"";
            echo ($context["link"] ?? null);
            echo "\">";
            echo ($context["link"] ?? null);
            echo "</a></div>
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        if (($context["download"] ?? null)) {
            // line 28
            echo "\t\t\t\t<div class=\"order-info__block\">";
            echo ($context["text_download"] ?? null);
            echo " <a href=\"";
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["download"] ?? null);
            echo "</a></div>
\t\t\t";
        }
        // line 30
        echo "\t\t\t<div class=\"order-info__block\" style=\"font-size:1.4em\"><b>";
        echo ($context["text_order_detail"] ?? null);
        echo " #";
        echo ($context["order_id"] ?? null);
        echo " - ";
        echo ($context["date_added"] ?? null);
        echo "</b></div>
\t\t\t<table class=\"order-info__products\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 34
        echo ($context["text_product"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 35
        echo ($context["text_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 36
        echo ($context["text_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td style=\"text-align:right\">";
        // line 37
        echo ($context["text_price"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td style=\"text-align:right\">";
        // line 38
        echo ($context["text_total"] ?? null);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
            echo "
\t\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br />
\t\t\t\t\t\t\t\t\t&nbsp;<small> - ";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 47);
                echo ":";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 47);
                echo "</small>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 50);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
            echo "</td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 53);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 57
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 58);
            echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 61);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 62);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 68
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align:right\" colspan=\"4\"><b>";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 69);
            echo ":</b></td>
\t\t\t\t\t\t\t<td style=\"text-align:right\">";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 70);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t</tfoot>
\t\t\t</table>
\t\t\t<div class=\"order-info__block\">
\t\t\t\t<b>";
        // line 76
        echo ($context["text_email"] ?? null);
        echo "</b> ";
        echo ($context["email"] ?? null);
        echo "<br />
\t\t\t\t<b>";
        // line 77
        echo ($context["text_telephone"] ?? null);
        echo "</b> ";
        echo ($context["telephone"] ?? null);
        echo "<br />
\t\t\t\t<!-- <b>";
        // line 78
        echo ($context["text_ip"] ?? null);
        echo "</b> ";
        echo ($context["ip"] ?? null);
        echo "<br /> -->
\t\t\t\t<b>";
        // line 79
        echo ($context["text_order_status"] ?? null);
        echo "</b> ";
        echo ($context["order_status"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"order-info__block\">
\t\t\t\t<div class=\"order-info__block-heading\">";
        // line 82
        echo ($context["text_payment_method"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 83
        echo ($context["payment_method"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 85
        if (($context["shipping_method"] ?? null)) {
            // line 86
            echo "\t\t\t\t<div class=\"order-info__block\">
\t\t\t\t\t<div class=\"order-info__block-heading\">";
            // line 87
            echo ($context["text_shipping_method"] ?? null);
            echo "</div>
\t\t\t\t\t";
            // line 88
            echo ($context["shipping_method"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 91
        echo "\t\t\t";
        if (twig_test_empty(($context["unicheckout_pickup"] ?? null))) {
            // line 92
            echo "\t\t\t\t<div class=\"order-info__block\">
\t\t\t\t\t";
            // line 93
            if ((($context["payment_address"] ?? null) != ($context["shipping_address"] ?? null))) {
                // line 94
                echo "\t\t\t\t\t\t<div class=\"order-info__block-item\">
\t\t\t\t\t\t\t<div class=\"order-info__block-heading\">";
                // line 95
                echo ($context["text_payment_address"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t";
                // line 96
                echo ($context["payment_address"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t";
            if (($context["shipping_address"] ?? null)) {
                // line 100
                echo "\t\t\t\t\t\t<div class=\"order-info__block-item\">
\t\t\t\t\t\t\t<div class=\"order-info__block-heading\">";
                // line 101
                echo ($context["text_shipping_address"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t";
                // line 102
                echo ($context["shipping_address"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 107
        echo "\t\t\t";
        if (($context["comment"] ?? null)) {
            // line 108
            echo "\t\t\t\t<div class=\"order-info__block\">
\t\t\t\t\t<div class=\"order-info__block-heading\">";
            // line 109
            echo ($context["text_instruction"] ?? null);
            echo "</div>
\t\t\t\t\t";
            // line 110
            echo ($context["comment"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 113
        echo "\t\t\t<div class=\"order-info__block\"><b>";
        echo ($context["text_footer"] ?? null);
        echo "</b></div>
\t\t</div>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/mail/order_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 113,  346 => 110,  342 => 109,  339 => 108,  336 => 107,  332 => 105,  326 => 102,  322 => 101,  319 => 100,  316 => 99,  310 => 96,  306 => 95,  303 => 94,  301 => 93,  298 => 92,  295 => 91,  289 => 88,  285 => 87,  282 => 86,  280 => 85,  275 => 83,  271 => 82,  263 => 79,  257 => 78,  251 => 77,  245 => 76,  240 => 73,  231 => 70,  227 => 69,  224 => 68,  220 => 67,  216 => 65,  207 => 62,  203 => 61,  197 => 58,  194 => 57,  189 => 56,  180 => 53,  176 => 52,  172 => 51,  168 => 50,  165 => 49,  155 => 47,  149 => 46,  145 => 45,  141 => 43,  137 => 42,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  102 => 30,  92 => 28,  89 => 27,  79 => 25,  77 => 24,  73 => 23,  62 => 21,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/mail/order_add.twig", "");
    }
}
