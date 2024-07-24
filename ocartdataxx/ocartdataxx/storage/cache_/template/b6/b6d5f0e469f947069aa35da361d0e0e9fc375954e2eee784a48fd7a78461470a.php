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

/* extension/module/uni_five_in_one_v2.twig */
class __TwigTemplate_076b417bcd38fdf4540d9a8916405d4d9d43dfb54b87582435613d19c96a2b3b extends \Twig\Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<br />
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 32
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 35
        if (($context["error_name"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>";
        }
        // line 36
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"form-group\" id=\"main-div\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\"></label>
\t\t\t\t\t\t<div class=\"tabs-blocks col-sm-10\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"addNewTab();\">";
        // line 42
        echo ($context["button_add_tab"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 45
        $context["names"] = [0 => "latest", 1 => "special", 2 => "bestseller", 3 => "popular", 4 => "featured"];
        // line 46
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t<li id=\"tab-";
            echo $context["key"];
            echo "\" ";
            echo ((!twig_in_filter($context["key"], ($context["names"] ?? null))) ? ("class=\"additional\"") : (""));
            echo " ><a href=\"#";
            echo $context["key"];
            echo "\" data-toggle=\"tab\">";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 49)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 49)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null)) : ("New tab"));
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<div id=\"";
            echo $context["key"];
            echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product\">";
            // line 56
            echo ($context["entry_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#";
                echo $context["key"];
                echo "-title-";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 60);
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 60);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 60);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 60);
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                echo $context["key"];
                echo "-title-";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 65);
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
                // line 66
                echo $context["key"];
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 66);
                echo "]\" value=\"";
                echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 66)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 66)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) : ("New tab"));
                echo "\" class=\"";
                echo ((!twig_in_filter($context["key"], ($context["names"] ?? null))) ? ("additional_tab_name") : (""));
                echo " form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 72
            if ((!twig_in_filter($context["key"], ($context["names"] ?? null)) || ($context["key"] == "featured"))) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 74
                echo ($context["entry_product"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
                // line 76
                echo ($context["text_autocomplete"] ?? null);
                echo "\" data-name=\"";
                echo $context["key"];
                echo "\" class=\"tabs-product form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 78
                echo $context["key"];
                echo "-product well well-sm\" style=\"height:150px;overflow:auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_selected", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tabs-product-item\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"set[";
                    // line 81
                    echo $context["key"];
                    echo "][products][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 88
                echo ($context["entry_category"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
                // line 90
                echo $context["key"];
                echo "][category_name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_name", [], "any", false, false, false, 90);
                echo "\" placeholder=\"";
                echo ($context["text_autocomplete"] ?? null);
                echo "\" data-name=\"";
                echo $context["key"];
                echo "\" class=\"tabs-category form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"set[";
                // line 91
                echo $context["key"];
                echo "][category_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 91);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 95
                echo ($context["entry_sort_product"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 97
                $context["sorts"] = ["p.date_added|DESC" =>                 // line 98
($context["text_sort_default"] ?? null), "pd.name|ASC" =>                 // line 99
($context["text_sort_name_asc"] ?? null), "pd.name|DESC" =>                 // line 100
($context["text_sort_name_desc"] ?? null), "p.price|ASC" =>                 // line 101
($context["text_sort_price_asc"] ?? null), "p.price|DESC" =>                 // line 102
($context["text_sort_price_desc"] ?? null), "p.date_available|ASC" =>                 // line 103
($context["text_sort_date_asc"] ?? null), "p.date_available|DESC" =>                 // line 104
($context["text_sort_date_desc"] ?? null), "p.viewed|ASC" =>                 // line 105
($context["text_sort_popular_asc"] ?? null), "p.viewed|DESC" =>                 // line 106
($context["text_sort_popular_desc"] ?? null), "rating|ASC" =>                 // line 107
($context["text_sort_review_asc"] ?? null), "rating|DESC" =>                 // line 108
($context["text_sort_review_desc"] ?? null)];
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"set[";
                echo $context["key"];
                echo "][products_sort]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["sort"]) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["key"];
                    echo "\" ";
                    echo ((($context["key"] == twig_get_attribute($this->env, $this->source, $context["tab"], "products_sort", [], "any", false, false, false, 112))) ? ("selected=\"selected\"") : (""));
                    echo ">";
                    echo $context["sort"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sort'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 119
            echo ($context["entry_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
            // line 121
            echo $context["key"];
            echo "][limit]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "limit", [], "any", false, false, false, 121)) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "limit", [], "any", false, false, false, 121)) : (5));
            echo "\" placeholder=\"";
            echo ($context["entry_limit"] ?? null);
            echo "\" id=\"input-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
            // line 125
            echo ($context["entry_thumb"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
            // line 128
            echo $context["key"];
            echo "][thumb_width]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "thumb_width", [], "any", false, false, false, 128)) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "thumb_width", [], "any", false, false, false, 128)) : (220));
            echo "\" class=\"form-control\" style=\"width:50% !important;text-align:center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
            // line 129
            echo $context["key"];
            echo "][thumb_height]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "thumb_height", [], "any", false, false, false, 129)) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "thumb_height", [], "any", false, false, false, 129)) : (230));
            echo "\" class=\"form-control\" style=\"width:50% !important;text-align:center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">пикс.</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
            // line 135
            echo ($context["entry_type"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:10px\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"set[";
            // line 138
            echo $context["key"];
            echo "][type]\" value=\"1\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 138)) ? ("checked=\"checked\"") : (""));
            echo " />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
            // line 142
            echo ($context["entry_qty"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:10px\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"set[";
            // line 145
            echo $context["key"];
            echo "][quantity]\" value=\"1\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "quantity", [], "any", false, false, false, 145)) ? ("checked=\"checked\"") : (""));
            echo " />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
            // line 149
            echo ($context["entry_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
            // line 151
            echo $context["key"];
            echo "][sort_order]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "sort_order", [], "any", false, false, false, 151)) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "sort_order", [], "any", false, false, false, 151)) : (1));
            echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
            // line 155
            echo ($context["entry_status_tab"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:10px\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"set[";
            // line 158
            echo $context["key"];
            echo "][status]\" value=\"1\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "status", [], "any", false, false, false, 158)) ? ("checked=\"checked\"") : (""));
            echo " class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 161
            if (!twig_in_filter($context["key"], ($context["names"] ?? null))) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger\" onclick=\"removeTab(this)\">";
                // line 165
                echo ($context["button_remove_tab"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 175
        echo ($context["entry_link"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#link-";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 179);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 179);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 179);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 179);
            echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 184
            echo "\t\t\t\t\t\t\t\t\t<div id=\"link-";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 184);
            echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"link[text][";
            // line 186
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 186);
            echo "]\" value=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "text", [], "any", false, false, false, 186)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 186)] ?? null) : null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["text_link_text"] ?? null);
            echo "\" style=\"width:50% !important\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"link[href][";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 187);
            echo "]\" value=\"";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 187)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 187)] ?? null) : null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["text_link_href"] ?? null);
            echo "\" style=\"width:50% !important\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 195
        echo ($context["entry_cache"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div style=\"height:10px\"></div>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"cache\" value=\"1\" ";
        // line 198
        echo ((($context["cache"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 202
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"status\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 205
        echo ((($context["status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 206
        echo (((($context["status"] ?? null) == 0)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<style>.tab-pane .form-group {margin:0 -15px 0 0}</style>
<script>
\t\$(function() {
\t\t\$('.nav-tabs').each(function() {
\t\t\t\$(this).find('li:first a').tab('show');
\t\t});
\t\t
\t\t\$('body').on('click', '.tabs-product-item', function() {
\t\t\t\$(this).remove();
\t\t});
\t});
\t\t
\tfunction addNewTab() {
\t\tlet items = \$('.tabs-blocks > ul li.additional').length, key = 'additional-0';
\t\t
\t\tif(items) {
\t\t\tlet d = [];
\t\t\t
\t\t\t\$('.tabs-blocks > ul li.additional').each(function(){
\t\t\t\td.push(Number(\$(this).attr('id').replace(/\\D+/g,\"\")));
\t\t\t});
\t\t\t
\t\t\tkey = 'additional-'+(Math.max.apply(Math, d)+1);
\t\t}
\t\t\t
\t\t\$('.tabs-blocks > ul').append('<li id=\"tab-'+key+'\" class=\"additional\"><a href=\"#'+key+'\" data-toggle=\"tab\">New tab</a></li>');

\t\thtml = '<div id=\"'+key+'\" class=\"tab-pane\">';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 244
        echo ($context["entry_title"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<ul class=\"nav nav-tabs\">';
\t\t";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 248
            echo "\t\thtml += '<li><a href=\"#'+key+'-title-";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 248);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 248);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 248);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 248);
            echo "\" /></a></li>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "\t\thtml += '</ul>';
\t\thtml += '<div class=\"tab-content\">';
\t\t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 253
            echo "\t\thtml += '<div id=\"'+key+'-title-";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 253);
            echo "\" class=\"tab-pane\">';
\t\thtml += '<input type=\"text\" name=\"set['+key+'][title][";
            // line 254
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 254);
            echo "]\" value=\"\" class=\"additional_tab_name form-control\" />';
\t\thtml += '</div>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\">";
        // line 261
        echo ($context["entry_product"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"\" data-name=\"'+key+'\" class=\"tabs-product form-control\" />';
\t\thtml += '<br />';
\t\thtml += '<div class=\"'+key+'-product well well-sm\" style=\"height:150px;overflow:auto\">';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\">";
        // line 270
        echo ($context["entry_category"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<input type=\"text\" name=\"set['+key+'][category_name]\" value=\"\" placeholder=\"\" data-name=\"'+key+'\" class=\"tabs-category form-control\" />';
\t\thtml += '<input type=\"hidden\" name=\"set['+key+'][category_id]\" value=\"\" />';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\">";
        // line 277
        echo ($context["entry_sort_product"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\t";
        // line 279
        $context["sorts"] = [0 => ($context["text_sort_default"] ?? null), "pd.name" => ($context["text_sort_name"] ?? null), "p.price" => ($context["text_sort_price"] ?? null), "p.date_added" => ($context["text_sort_date"] ?? null), "p.viewed" => ($context["text_sort_popular"] ?? null), "rating" => ($context["text_sort_review"] ?? null)];
        // line 280
        echo "\t\thtml += '<select name=\"set['+key+'][sort]\" class=\"form-control\">';
\t\t";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["sort"]) {
            // line 282
            echo "\t\thtml += '<option value=\"";
            echo $context["key"];
            echo "\" ";
            echo ((($context["key"] == twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "sort", [], "any", false, false, false, 282))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["sort"];
            echo "</option>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "\t\thtml += '</select>';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\">";
        // line 288
        echo ($context["entry_limit"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<input type=\"text\" name=\"set['+key+'][limit]\" value=\"5\" placeholder=\"";
        // line 290
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 294
        echo ($context["entry_thumb"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<div class=\"input-group\">';
\t\thtml += '<input type=\"text\" name=\"set['+key+'][thumb_width]\" value=\"220\" class=\"form-control\" style=\"width:50% !important;text-align:center\">';
\t\thtml += '<input type=\"text\" name=\"set['+key+'][thumb_height]\" value=\"200\" class=\"form-control\" style=\"width:50% !important;text-align:center\">';
\t\thtml += '<span class=\"input-group-addon\">пикс.</span>';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 304
        echo ($context["entry_type"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<div style=\"height:10px\"></div><input type=\"checkbox\" name=\"set['+key+'][type]\" value=\"1\" />';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 310
        echo ($context["entry_qty"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<div style=\"height:10px\"></div><input type=\"checkbox\" name=\"set['+key+'][quantity]\" value=\"1\" />';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 316
        echo ($context["entry_sort"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<input type=\"text\" name=\"set['+key+'][sort_order]\" value=\"1\" class=\"form-control\">';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 322
        echo ($context["entry_status_tab"] ?? null);
        echo "</label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<div style=\"height:10px\"></div><input type=\"checkbox\" name=\"set['+key+'][status]\" value=\"1\" />';
\t\thtml += '</div>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"form-group\">';
\t\thtml += '<label class=\"col-sm-2 control-label\"></label>';
\t\thtml += '<div class=\"col-sm-10\">';
\t\thtml += '<a class=\"btn btn-sm btn-danger\" onclick=\"removeTab(this)\">";
        // line 330
        echo ($context["button_remove_tab"] ?? null);
        echo "</a>';
\t\thtml += '</div>';
\t\thtml += '</div>';\t\t\t\t\t
\t\thtml += '</div>';
\t\t
\t\t\$('.tabs-blocks > .tab-content').append(html);
\t\t\$('.tabs-blocks > ul li:last a, .tabs-blocks #'+key+' ul li:first a').tab('show');
\t}
\t\t
\tfunction removeTab(elem) {
\t\tcounter = 0;
\t\tparent = \$(elem).closest('.tab-pane');\t\t\t\t\t\t
\t
\t\t\$('.tabs-blocks > ul li:eq('+getNumber(parent)+')').remove();
\t\tparent.remove();
\t\t\$('.tabs-blocks > ul li:first a').tab('show');
\t}
\t\t
\tfunction getNumber(element) {
\t\tif (\$(element).prev().length !== 0) {
\t\t\tcounter++;
\t\t\tgetNumber(\$(element).prev());
\t\t}
 
\t\treturn counter;
\t}
\t
\t\$('body').on('input', '.tabs-product', function() {
\t\t\t\t\t\t\t\t
\t\tconst \$this = \$(this), tab_name = \$this.data('name');
\t\t
\t\tif(\$this.next().hasClass('dropdown-menu')) {
\t\t\t\$this.next().remove();
\t\t}
\t\t
\t\t\$this.autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 368
        echo ($context["user_token"] ?? null);
        echo "&filter_name='+encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {label: item['name'], value: item['product_id']}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$this.val('');
\t\t\t\t\$this.parent().find('.'+tab_name+'-product').append('<div class=\"tabs-product-item\"><i class=\"fa fa-minus-circle\"></i> '+item['label']+'<input type=\"hidden\" name=\"set['+tab_name+'][products][]\" value=\"'+item['value']+'\" /></div>');\t
\t\t\t}
\t\t});
\t});
\t
\t\$('body').on('input', '.tabs-category', function() {
\t\t\t\t\t\t\t\t
\t\tconst \$this = \$(this), tab_name = \$this.data('name');
\t\t
\t\tif(\$this.next().hasClass('dropdown-menu')) {
\t\t\t\$this.next().remove();
\t\t}
\t\t
\t\t\$this.autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 395
        echo ($context["user_token"] ?? null);
        echo "&filter_name='+encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {label: item['name'], value: item['category_id']}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$this.val(item['label']);
\t\t\t\t\$this.parent().find('input[type=\"hidden\"]').val(item['value']);
\t\t\t}
\t\t});
\t
\t\t\$this.on('click input', function() {
\t\t\tif(\$(this).val() == '') {
\t\t\t\t\$this.parent().find('input[type=\"hidden\"]').val('');
\t\t\t}
\t\t});
\t});
</script>
";
        // line 417
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_five_in_one_v2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 417,  866 => 395,  836 => 368,  795 => 330,  784 => 322,  775 => 316,  766 => 310,  757 => 304,  744 => 294,  737 => 290,  732 => 288,  726 => 284,  713 => 282,  709 => 281,  706 => 280,  704 => 279,  699 => 277,  689 => 270,  677 => 261,  671 => 257,  662 => 254,  657 => 253,  653 => 252,  649 => 250,  634 => 248,  630 => 247,  624 => 244,  581 => 206,  575 => 205,  569 => 202,  562 => 198,  556 => 195,  550 => 191,  536 => 187,  528 => 186,  522 => 184,  518 => 183,  514 => 181,  499 => 179,  495 => 178,  489 => 175,  483 => 171,  475 => 168,  468 => 165,  463 => 162,  461 => 161,  453 => 158,  447 => 155,  438 => 151,  433 => 149,  424 => 145,  418 => 142,  409 => 138,  403 => 135,  392 => 129,  386 => 128,  380 => 125,  369 => 121,  364 => 119,  361 => 118,  355 => 114,  342 => 112,  338 => 111,  333 => 110,  331 => 108,  330 => 107,  329 => 106,  328 => 105,  327 => 104,  326 => 103,  325 => 102,  324 => 101,  323 => 100,  322 => 99,  321 => 98,  320 => 97,  315 => 95,  306 => 91,  296 => 90,  291 => 88,  285 => 84,  274 => 81,  269 => 80,  265 => 79,  261 => 78,  254 => 76,  249 => 74,  246 => 73,  244 => 72,  239 => 69,  224 => 66,  217 => 65,  213 => 64,  209 => 62,  192 => 60,  188 => 59,  182 => 56,  176 => 54,  172 => 53,  168 => 51,  153 => 49,  149 => 48,  145 => 46,  143 => 45,  137 => 42,  129 => 36,  123 => 35,  117 => 34,  112 => 32,  107 => 30,  101 => 27,  97 => 25,  89 => 21,  87 => 20,  81 => 16,  70 => 14,  66 => 13,  60 => 10,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/uni_five_in_one_v2.twig", "");
    }
}
