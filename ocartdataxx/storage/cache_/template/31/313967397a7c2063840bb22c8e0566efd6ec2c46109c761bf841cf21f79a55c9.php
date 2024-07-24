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

/* extension/me_admin_search.twig */
class __TwigTemplate_c39a3bb1538a05339d386990c68e32000bdade1506b3155777f0e7a50a1aa597 extends \Twig\Template
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
        echo "<li class=\"dropdown\" id=\"me_admin_search\"><a href=\"#\" class=\"search-toggle btn btn-default\"><i class=\"fa fa-search\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_quick_search"] ?? null);
        echo "</span></a>
\t<ul class=\"me_dropdown_menu\">
\t\t<div class=\"row\">
\t\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "pname", [], "any", false, false, false, 4), "status", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-pname\">";
            // line 7
            echo ($context["entry_pname"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_pname\" value=\"";
            // line 9
            echo ($context["filter_pname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_pname"] ?? null);
            echo "\" id=\"input-pname\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('catalog/product','filter_name','filter_pname')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "pmodel", [], "any", false, false, false, 15), "status", [], "any", false, false, false, 15)) {
            // line 16
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-pmodel\">";
            // line 18
            echo ($context["entry_pmodel"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_pmodel\" value=\"";
            // line 20
            echo ($context["filter_pmodel"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_pmodel"] ?? null);
            echo "\" id=\"input-pmodel\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('catalog/product','filter_model','filter_pmodel')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "psku", [], "any", false, false, false, 26), "status", [], "any", false, false, false, 26)) {
            // line 27
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-psku\">";
            // line 29
            echo ($context["entry_psku"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_psku\" value=\"";
            // line 31
            echo ($context["filter_psku"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_psku"] ?? null);
            echo "\" id=\"input-psku\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('catalog/product','filter_sku','filter_psku')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 37
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "category", [], "any", false, false, false, 37), "status", [], "any", false, false, false, 37)) {
            // line 38
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-cname\">";
            // line 40
            echo ($context["entry_cname"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_cname\" value=\"";
            // line 42
            echo ($context["filter_cname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_cname"] ?? null);
            echo "\" id=\"input-cname\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('catalog/category','filter_name','filter_cname')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 48
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "manufacturer", [], "any", false, false, false, 48), "status", [], "any", false, false, false, 48)) {
            // line 49
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-manufacturer\">";
            // line 51
            echo ($context["entry_manufacturer"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_pmanufacturer\" value=\"";
            // line 53
            echo ($context["filter_pmanufacturer"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_manufacturer"] ?? null);
            echo "\" id=\"input-manufacturer\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('catalog/manufacturer','filter_name','filter_pmanufacturer')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "option", [], "any", false, false, false, 59), "status", [], "any", false, false, false, 59)) {
            // line 60
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-option\">";
            // line 62
            echo ($context["entry_option"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_poption\" value=\"";
            // line 64
            echo ($context["filter_poption"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('catalog/option','filter_name','filter_poption')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 70
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "customer", [], "any", false, false, false, 70), "status", [], "any", false, false, false, 70)) {
            // line 71
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-customer_name\">";
            // line 73
            echo ($context["entry_customer"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_customer_name\" value=\"";
            // line 75
            echo ($context["filter_customer_name"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_customer"] ?? null);
            echo "\" id=\"input-customer_name\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('customer/customer','filter_name','filter_customer_name')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 81
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "customer_email", [], "any", false, false, false, 81), "status", [], "any", false, false, false, 81)) {
            // line 82
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-customer_email\">";
            // line 84
            echo ($context["entry_customer_email"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_customer_email\" value=\"";
            // line 86
            echo ($context["filter_customer_email"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_customer_email"] ?? null);
            echo "\" id=\"input-customer_email\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('customer/customer','filter_email','filter_customer_email')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "customer_telephone", [], "any", false, false, false, 92), "status", [], "any", false, false, false, 92)) {
            // line 93
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-customer_telephone\">";
            // line 95
            echo ($context["entry_customer_telephone"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_customer_telephone\" value=\"";
            // line 97
            echo ($context["filter_customer_telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_customer_telephone"] ?? null);
            echo "\" id=\"input-customer_telephone\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('customer/customer','filter_telephone','filter_customer_telephone')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 103
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "orderid", [], "any", false, false, false, 103), "status", [], "any", false, false, false, 103)) {
            // line 104
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-orderid\">";
            // line 106
            echo ($context["entry_orderid"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_orderid\" value=\"";
            // line 108
            echo ($context["filter_orderid"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_orderid"] ?? null);
            echo "\" id=\"input-orderid\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('sale/order','filter_order_id','filter_orderid')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 114
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "orderbycustomer", [], "any", false, false, false, 114), "status", [], "any", false, false, false, 114)) {
            // line 115
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-orderbycustomer\">";
            // line 117
            echo ($context["entry_orderbycustomer"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_orderbycustomer\" value=\"";
            // line 119
            echo ($context["filter_orderbycustomer"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_orderbycustomer"] ?? null);
            echo "\" id=\"input-orderbycustomer\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('sale/order','filter_customer','filter_orderbycustomer')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 125
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "orderbycustomertel", [], "any", false, false, false, 125), "status", [], "any", false, false, false, 125)) {
            // line 126
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-orderbycustomertel\">";
            // line 128
            echo ($context["entry_orderbycustomertel"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_orderbycustomertel\" value=\"";
            // line 130
            echo ($context["filter_orderbycustomertel"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_orderbycustomertel"] ?? null);
            echo "\" id=\"input-orderbycustomertel\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('sale/order','filter_telephone','filter_orderbycustomertel')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 136
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "orderbyproduct", [], "any", false, false, false, 136), "status", [], "any", false, false, false, 136)) {
            // line 137
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-orderbyproduct\">";
            // line 139
            echo ($context["entry_orderbyproduct"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_orderbyproduct\" value=\"";
            // line 141
            echo ($context["filter_orderbyproduct"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_orderbyproduct"] ?? null);
            echo "\" id=\"input-orderbyproduct\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('sale/order','filter_product','filter_orderbyproduct')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 147
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "orderstatus", [], "any", false, false, false, 147), "status", [], "any", false, false, false, 147)) {
            // line 148
            echo "\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-orderstatus\">";
            // line 150
            echo ($context["entry_orderstatus"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_orderstatusid\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 153
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 154
            if ((($context["filter_orderstatusid"] ?? null) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 156
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 156);
                echo "\" ";
                if ((($context["filter_orderstatusid"] ?? null) == twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 156))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 156);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('sale/order','filter_order_status_id','filter_orderstatusid')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 164
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "ordertotal", [], "any", false, false, false, 164), "status", [], "any", false, false, false, 164)) {
            // line 165
            echo "\t\t\t<div class=\"col-sm-4\">\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-ototal\">";
            // line 167
            echo ($context["entry_ototal"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_ototal\" value=\"";
            // line 169
            echo ($context["filter_ototal"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_ototal"] ?? null);
            echo "\" id=\"input-ototal\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('sale/order','filter_total','filter_ototal')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 175
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "orderdate", [], "any", false, false, false, 175), "status", [], "any", false, false, false, 175)) {
            // line 176
            echo "\t\t\t<div class=\"col-sm-8\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-date-from\">";
            // line 180
            echo ($context["entry_filter_from_date"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date input-group-sm\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_from_date\" value=\"";
            // line 182
            echo ($context["filter_from_date"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_filter_from_date"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-from\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-date-to\">";
            // line 189
            echo ($context["entry_filter_to_date"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<div class=\"input-group date input-group-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_to_date\" value=\"";
            // line 192
            echo ($context["filter_to_date"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_filter_to_date"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-to\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"button-searchdate\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 204
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_me_admin_search_filter"] ?? null), "coupon", [], "any", false, false, false, 204), "status", [], "any", false, false, false, 204)) {
            // line 205
            echo "\t\t\t<div class=\"col-sm-4\">\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-coupon\">";
            // line 207
            echo ($context["entry_coupon"] ?? null);
            echo "</label>
\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" name=\"filter_mcoupon\" value=\"";
            // line 209
            echo ($context["filter_mcoupon"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_coupon"] ?? null);
            echo "\" id=\"input-coupon\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-primary\" onclick=\"meadminsearch('marketing/coupon','filter_name','filter_mcoupon')\"><i class=\"fa fa-search\"></i></button></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 215
        echo "\t\t</div>
\t</ul>
</li>
<style>
.d-flex{
\tdisplay:flex;
}
.search-toggle{
\tborder-radius: 0;
\tborder: none;
}
.me_dropdown_menu{
\tposition: absolute;
    top: 100%;
    right: 0;
    left: auto;
    z-index: 1000;
    display: none;
    float: left;
    min-width:650px;
    padding:0 15px;
    list-style: none;
    font-size: 13px;
    text-align: left;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 0;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    background-clip: padding-box;
}
.search-toggle:hover .me_dropdown_menu{
\tdisplay:block;
}
#me_admin_search.open .me_dropdown_menu{
\tdisplay:block;
}
#me_admin_search .dropdown-menu > li > a{
\twhite-space: inherit;
\toverflow-wrap: break-word;
    padding: 5px 15px;
}
</style>
<script type=\"text/javascript\"><!--
\$('.search-toggle').on('click', function(event){
    event.preventDefault();
\t\$('.me_dropdown_menu').toggle();
});
\$(document).on(\"click\", function(event){
\tvar \$trigger = \$(\"#me_admin_search\");
\tif(\$trigger !== event.target && !\$trigger.has(event.target).length){
\t\t\$('.me_dropdown_menu').css('display','none');
\t}            
});

\$('#button-searchdate').on('click', function() {
\tvar url = '';
\t
\tvar filter_from_date = \$('input[name=\\'filter_from_date\\']').val();

\tif (filter_from_date) {
\t\turl += '&filter_from_date=' + encodeURIComponent(filter_from_date);
\t}
\t
\tvar filter_to_date = \$('input[name=\\'filter_to_date\\']').val();

\tif (filter_to_date) {
\t\turl += '&filter_to_date=' + encodeURIComponent(filter_to_date);
\t}
\t
\tlocation = 'index.php?route=sale/order&user_token=";
        // line 286
        echo ($context["user_token"] ?? null);
        echo "' + url;
});

//Category
\$('input[name=\\'filter_cname\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 293
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_cname\\']').val(item['label']);
\t}
});

//Product Name
\$('input[name=\\'filter_pname\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 314
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_pname\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_orderbyproduct\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 334
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_orderbyproduct\\']').val(item['label']);
\t}
});

//Product Model
  \$('input[name=\\'filter_pmodel\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 355
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_pmodel\\']').val(item['label']);
\t}
});

//Product SKU
  \$('input[name=\\'filter_psku\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/me_admin_search/pautocomplete&user_token=";
        // line 376
        echo ($context["user_token"] ?? null);
        echo "&filter_sku=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['sku'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_psku\\']').val(item['label']);
\t}
});

//Manufacturer
\$('input[name=\\'filter_pmanufacturer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 397
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_pmanufacturer\\']').val(item['label']);
\t}
});

//Option
\$('input[name=\\'filter_poption\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 418
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_poption\\']').val(item['label']);
\t}
});

//Customer
\$('input[name=\\'filter_customer_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 439
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_customer_name\\']').val(item['label']);
    }
});

\$('input[name=\\'filter_orderbycustomer\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 459
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_orderbycustomer\\']').val(item['label']);
    }
});

\$('input[name=\\'filter_customer_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 479
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_customer_email\\']').val(item['label']);
    }
});

\$('input[name=\\'filter_mcoupon\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/me_admin_search/autocomplete&user_token=";
        // line 499
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['coupon_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_mcoupon\\']').val(item['label']);
\t}
});

\$('#me_admin_search input').on('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$(this).parent().find('button').trigger('click');
\t}
});

function meadminsearch(route,key,filter_key){
\tvar url = '';
\t
\tif(key == 'filter_order_status_id'){
\t\tvar filter_key_value = \$('select[name=\\''+ filter_key +'\\']').val();
\t}else{
\t\tvar filter_key_value = \$('input[name=\\''+ filter_key +'\\']').val();
\t}
\t
\tif (filter_key_value) {
\t\turl += '&'+ key +'=' + encodeURIComponent(filter_key_value);
\t}
\t
\tlocation = 'index.php?route='+ route +'&user_token=";
        // line 535
        echo ($context["user_token"] ?? null);
        echo "' + url;
}
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 540
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/me_admin_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  855 => 540,  847 => 535,  808 => 499,  785 => 479,  762 => 459,  739 => 439,  715 => 418,  691 => 397,  667 => 376,  643 => 355,  619 => 334,  596 => 314,  572 => 293,  562 => 286,  489 => 215,  478 => 209,  473 => 207,  469 => 205,  466 => 204,  449 => 192,  443 => 189,  431 => 182,  426 => 180,  420 => 176,  417 => 175,  406 => 169,  401 => 167,  397 => 165,  394 => 164,  386 => 158,  371 => 156,  367 => 155,  359 => 154,  355 => 153,  349 => 150,  345 => 148,  342 => 147,  331 => 141,  326 => 139,  322 => 137,  319 => 136,  308 => 130,  303 => 128,  299 => 126,  296 => 125,  285 => 119,  280 => 117,  276 => 115,  273 => 114,  262 => 108,  257 => 106,  253 => 104,  250 => 103,  239 => 97,  234 => 95,  230 => 93,  227 => 92,  216 => 86,  211 => 84,  207 => 82,  204 => 81,  193 => 75,  188 => 73,  184 => 71,  181 => 70,  170 => 64,  165 => 62,  161 => 60,  158 => 59,  147 => 53,  142 => 51,  138 => 49,  135 => 48,  124 => 42,  119 => 40,  115 => 38,  112 => 37,  101 => 31,  96 => 29,  92 => 27,  89 => 26,  78 => 20,  73 => 18,  69 => 16,  66 => 15,  55 => 9,  50 => 7,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/me_admin_search.twig", "");
    }
}
