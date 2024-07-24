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

/* extension/module/uni_category_wall_v2.twig */
class __TwigTemplate_1aad4659f3215f574be7daa3274d243b3f441e2daf107e033b1cc21550168d88 extends \Twig\Template
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
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 32
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo ($context["name"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 38
        echo ($context["entry_module_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#module-title-";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 42);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 42);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "code", [], "any", false, false, false, 42);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 42);
            echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t<div id=\"module-title-";
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 47);
            echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 48);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["lang"], "language_id", [], "any", false, false, false, 48)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["text_example_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t<select name=\"store_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 60);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 60);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"addCategoryBlock()\">";
        // line 65
        echo ($context["button_add_block"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"category-blocks\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 71) > 0)) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#category-block-";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 72);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 72);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 78) > 0)) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t<div id=\"category-block-";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 79);
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"categories[";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 80);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "path", [], "any", false, false, false, 80);
                echo "\" class=\"main-category form-control\" placeholder=\"";
                echo ($context["text_select_main_category"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:20px\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"category-block-childs well well-sm\" style=\"height:200px;overflow:auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "child", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["key"] => $context["child"]) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label style=\"display:block;margin:0 0 5px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"categories[";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 85);
                    echo "][child][";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 85);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 85);
                    echo "\" ";
                    echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 85), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["categories_selected"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 85)] ?? null) : null), "child", [], "any", false, false, false, 85)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null))) ? ("checked=\"checked\"") : (""));
                    echo " />  <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 85);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"categories[";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 89);
                echo "][sort_order]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 89)) ? (twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 89)) : (1));
                echo "\" class=\"sort-order form-control\" placeholder=\"";
                echo ($context["text_sorts"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:20px\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"removeCategoryBlock(this)\">";
                // line 91
                echo ($context["button_delete_block"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 100
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:250px\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"image_width\" value=\"";
        // line 103
        echo ($context["image_width"] ?? null);
        echo "\" class=\"form-control\" style=\"width:50% !important; text-align:center;\" />
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"image_height\" value=\"";
        // line 104
        echo ($context["image_height"] ?? null);
        echo "\" class=\"form-control\" style=\"width:50% !important; text-align:center;\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">пикс.</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 110
        echo ($context["entry_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 112
        $context["typeArr"] = [2 => ($context["text_type_2"] ?? null), 1 => ($context["text_type_1"] ?? null)];
        // line 113
        echo "\t\t\t\t\t\t\t<select name=\"type\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeArr"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["t"]) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["key"];
            echo "\" ";
            echo ((($context["key"] == ($context["type"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["t"];
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 121
        echo ($context["entry_show_column"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 123
        $context["columnsHD"] = [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 6];
        // line 124
        echo "\t\t\t\t\t\t\t";
        $context["columnsFHD"] = [0 => 3, 1 => 4, 2 => 5, 3 => 6, 4 => 8, 5 => 10];
        // line 125
        echo "\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Десктоп FullHD:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:70px;\">
\t\t\t\t\t\t\t\t\t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columnsFHD"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["column"];
            echo "\" ";
            echo ((twig_in_filter($context["column"], twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 0, [], "any", false, false, false, 130))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Десктоп:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columnsHD"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["column"];
            echo "\" ";
            echo ((($context["column"] == twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 1, [], "any", false, false, false, 140))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Ноутбук:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columnsHD"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["column"];
            echo "\" ";
            echo ((twig_in_filter($context["column"], twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 2, [], "any", false, false, false, 150))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Планшет:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columnsHD"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["column"];
            echo "\" ";
            echo ((twig_in_filter($context["column"], twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 3, [], "any", false, false, false, 160))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Смартфон:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columnsHD"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["column"];
            echo "\" ";
            echo ((twig_in_filter($context["column"], twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), 4, [], "any", false, false, false, 170))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 178
        echo ($context["entry_module_view_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div style=\"height:10px\"></div>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"view_type\" value=\"1\" ";
        // line 181
        echo ((($context["view_type"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " class=\"form-control\" /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 185
        echo ($context["entry_cache"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div style=\"height:10px\"></div>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"cache\" value=\"1\" ";
        // line 188
        echo ((($context["cache"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " class=\"form-control\" /><span></span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 192
        echo ($context["entry_status"] ?? null);
        echo " </label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 195
        echo ((($context["status"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 196
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
<script>
\tfunction addCategoryBlock() {
\t\t\t\t\t\t\t
\t\tconst key = 'new-' + \$('.category-blocks > ul li').length;
\t\t\t\t\t\t\t\t\t\t\t
\t\t\$('.category-blocks > ul').append('<li><a href=\"#category-block-'+key+'\" data-toggle=\"tab\">New block</a></li>');
\t\t\t\t\t\t\t\t\t\t\t\t
\t\thtml = '<div id=\"category-block-'+key+'\" class=\"tab-pane\">';
\t\thtml += '<input name=\"categories['+key+']\" value=\"\" class=\"main-category form-control\" placeholder=\"";
        // line 213
        echo ($context["text_select_main_category"] ?? null);
        echo "\" />';
\t\thtml += '<div style=\"height:20px\"></div>';
\t\thtml += '<div class=\"category-block-childs well well-sm\" style=\"height:200px;overflow:auto\">';
\t\thtml += '<div style=\"margin:0 0 5px\"></div>';
\t\thtml += '</div>';
\t\thtml += '<input type=\"text\" name=\"categories['+key+'][sort_order]\" value=\"\" class=\"sort-order form-control\" placeholder=\"";
        // line 218
        echo ($context["text_sorts"] ?? null);
        echo "\" />';
\t\thtml += '<div style=\"height:20px\"></div>';
\t\thtml += '<button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"removeCategoryBlock(this)\">";
        // line 220
        echo ($context["button_delete_block"] ?? null);
        echo "</button>';
\t\thtml += '</div>';
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\$('.category-blocks .tab-content').append(html);
\t\t\t\t\t\t\t\t
\t\t\$('.category-blocks ul li:last a').tab('show');
\t}
\t\t\t\t\t\t\t
\tlet counter = 0;
\t\t\t\t\t\t\t\t\t\t\t
\tfunction removeCategoryBlock(elem) {
\t\tcounter = 0;
\t\tparent = \$(elem).parent();\t\t\t\t\t\t\t\t
\t
\t\t\$('.category-blocks ul li:eq('+getNumber(parent)+')').remove();
\t\t\$(elem).parent().remove();
\t\t\$('.category-blocks ul li:first a').tab('show');
\t}
\t\t\t\t\t\t\t
\tfunction getNumber(element) {
\t\tif (\$(element).prev().length !== 0) {
\t\t\tcounter++;
\t\t\tgetNumber(\$(element).prev());
\t\t}
 
\t\treturn counter;
\t}
\t\t\t\t\t\t\t
\t\$('body').on('click', '.main-category', function() {
\t\t\t\t\t\t\t\t
\t\tconst \$this = \$(this);
\t\t\t\t\t\t\t
\t\t\$this.autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/uni_category_wall_v2/autocomplete&user_token=";
        // line 255
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, (item) => {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\tconst category_id = item['value'];
\t\t\t\t\t\t\t\t\t
\t\t\t\t\$this.attr('name', 'categories['+category_id+']').val(item['label']);
\t\t\t\t\$this.parent().find('.sort-order').attr('name', 'categories['+category_id+'][sort_order]');
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$.get('index.php?route=extension/module/uni_category_wall_v2/autocomplete2&user_token=";
        // line 273
        echo ($context["user_token"] ?? null);
        echo "&category_id='+category_id, (data) => {
\t\t\t\t\thtml = '';
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\$.map(data, (item) => {
\t\t\t\t\t\thtml += '<label style=\"display:block;margin:0 0 5px\"><input type=\"checkbox\" name=\"categories['+category_id+'][child]['+item['category_id']+']\" value=\"'+item['category_id']+'\" /> <span>'+item['name']+'</span></label>';
\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\$this.parent().find('.category-block-childs').html(html)
\t\t\t\t});
\t\t\t}
\t\t});
\t});
\t\t\t\t\t\t\t
\t\$('body').on('input', '.main-category', function() {
\t\tif(!\$(this).val()) {
\t\t\t\$(this).parent().find('.category-block-childs').html('')
\t\t}
\t});\t\t\t
</script>
<script>
\t\$(function() {
\t\t\$('.nav-tabs').each(function() {
\t\t\t\$(this).find('li:first a').tab('show');
\t\t});
\t});
</script>
";
        // line 299
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_category_wall_v2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 299,  644 => 273,  623 => 255,  585 => 220,  580 => 218,  572 => 213,  550 => 196,  544 => 195,  538 => 192,  531 => 188,  525 => 185,  518 => 181,  512 => 178,  504 => 172,  491 => 170,  487 => 169,  478 => 162,  465 => 160,  461 => 159,  452 => 152,  439 => 150,  435 => 149,  426 => 142,  413 => 140,  409 => 139,  400 => 132,  387 => 130,  383 => 129,  377 => 125,  374 => 124,  372 => 123,  367 => 121,  361 => 117,  348 => 115,  344 => 114,  341 => 113,  339 => 112,  334 => 110,  325 => 104,  321 => 103,  315 => 100,  308 => 95,  302 => 94,  296 => 91,  287 => 89,  284 => 88,  267 => 85,  264 => 84,  260 => 83,  250 => 80,  245 => 79,  242 => 78,  238 => 77,  234 => 75,  228 => 74,  220 => 72,  217 => 71,  213 => 70,  205 => 65,  200 => 62,  189 => 60,  185 => 59,  175 => 51,  162 => 48,  157 => 47,  153 => 46,  149 => 44,  134 => 42,  130 => 41,  124 => 38,  117 => 34,  112 => 32,  107 => 30,  101 => 27,  97 => 25,  89 => 21,  87 => 20,  81 => 16,  70 => 14,  66 => 13,  60 => 10,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/uni_category_wall_v2.twig", "");
    }
}
