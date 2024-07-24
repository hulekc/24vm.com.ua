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

/* unishop2/template/product/search.twig */
class __TwigTemplate_4bbeb569b49160f75ff98441a3c8131c1dae9667493bd90aa3e34fdab71346c4 extends \Twig\Template
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
<div class=\"container\">
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
\t\t<h1 class=\"heading\">";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 19
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 25
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"uni-wrapper\">
\t\t\t<div class=\"search-page__search-block\">
\t\t\t\t<div class=\"row-flex\">
\t\t\t\t\t<div class=\"search-page__search-input\">
\t\t\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 30
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
\t\t\t\t\t\t<button type=\"button\" class=\"search-btn-clear ";
        // line 31
        echo ((($context["search"] ?? null)) ? ("show") : (""));
        echo "\">&times;</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-page__search-delimiter visible-xs\"></div>
\t\t\t\t\t<div class=\"search-page__search-category\">
\t\t\t\t\t\t<select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 36
        echo ($context["text_category"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 38) == ($context["category_id"] ?? null))) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 39);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 39);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 41);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 41);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 44) == ($context["category_id"] ?? null))) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 45);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 45);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 47);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 47);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 50) == ($context["category_id"] ?? null))) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 51);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 51);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 53);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 53);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-page__search-delimiter visible-xs\"></div>
\t\t\t\t\t<div class=\"search-page__search-button\">
\t\t\t\t\t\t<button type=\"button\" id=\"button-search\" class=\"btn btn-primary btn-xl btn-block\"><span>";
        // line 62
        echo ($context["button_search"] ?? null);
        echo "</span></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 65
        if (twig_test_empty(($context["uni_search"] ?? null))) {
            // line 66
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row-flex\">
\t\t\t\t\t\t<label class=\"checkbox-inline input\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" ";
            // line 69
            if (($context["sub_category"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo " />";
            echo ($context["text_sub_category"] ?? null);
            echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div style=\"width:20px\"></div>
\t\t\t\t\t\t<label class=\"checkbox-inline input\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" ";
            // line 73
            if (($context["description"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo " />";
            echo ($context["entry_description"] ?? null);
            echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 77
        echo "\t\t\t</div>
\t\t\t";
        // line 78
        if (($context["manufacturers_search"] ?? null)) {
            // line 79
            echo "\t\t\t\t<div class=\"heading\">";
            echo ($context["text_search_manufacturer"] ?? null);
            echo "</div>
\t\t\t\t<div class=\"category-list row row-flex\">
\t\t\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers_search"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 82
                echo "\t\t\t\t\t<div class=\"";
                echo ($context["subcategory_column"] ?? null);
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 83);
                echo "\" class=\"category-list__item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 83)) ? ("uni-item") : ("uni-item-bg"));
                echo "\">
\t\t\t\t\t\t\t";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "thumb", [], "any", false, false, false, 85);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 85);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 85);
                    echo "\" class=\"category-list__img img-responsive\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t<span class=\"category-list__name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 87);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 94
        echo "\t\t\t";
        if (($context["categories_search"] ?? null)) {
            // line 95
            echo "\t\t\t\t<div class=\"heading\">";
            echo ($context["text_search_category"] ?? null);
            echo "</div>
\t\t\t\t<div class=\"category-list row row-flex\">
\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories_search"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 98
                echo "\t\t\t\t\t<div class=\"";
                echo ($context["subcategory_column"] ?? null);
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 99);
                echo "\" class=\"category-list__item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 99)) ? ("uni-item") : ("uni-item-bg"));
                echo "\">
\t\t\t\t\t\t\t";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 100)) {
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 100);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 100);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 100);
                    echo "\" class=\"category-list__img img-responsive\" />";
                }
                // line 101
                echo "\t\t\t\t\t\t\t<span class=\"category-list__name\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 101);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 107
        echo "\t\t\t";
        if (($context["products"] ?? null)) {
            // line 108
            echo "      <!-- OCFilter Start -->      
      ";
            // line 109
            if (($context["ocfilter_mobile_button"] ?? null)) {
                // line 110
                echo "      <div class=\"ocf-btn-mobile-static ocf-mobile\">
        <button type=\"button\" class=\"ocf-btn ocf-btn-default\" data-ocf=\"mobile\"><span class=\"ocf-btn-name\">";
                // line 111
                echo ($context["button_ocfilter_mobile"] ?? null);
                echo "</span> <i class=\"ocf-icon ocf-icon-16 ocf-brand ocf-sliders\"></i></button>
      </div>
      ";
            }
            // line 113
            echo "   
      <!-- /OCFilter End -->
\t\t\t\t<div class=\"heading\">";
            // line 115
            echo ($context["text_search_product"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 116
            if (($context["product_categories_search"] ?? null)) {
                // line 117
                echo "\t\t\t\t\t<div class=\"product-category-list\">
\t\t\t\t\t\t<h4>";
                // line 118
                echo ($context["text_search_product_category"] ?? null);
                echo "</h4>
\t\t\t\t\t\t";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_categories_search"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 120
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 120);
                    echo "\" class=\"product-category-list__item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 120);
                    echo "</a>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t<div class=\"sorts-block\">
\t\t\t\t\t<div class=\"sorts-block__wrapper\">
\t\t\t\t\t\t<div class=\"sorts-block__sorts hidden-xs hidden-sm\">
\t\t\t\t\t\t\t<span data-href=\"";
            // line 127
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sorts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "href", [], "any", false, false, false, 127);
            echo "\" class=\"sorts-block__span uni-href ";
            echo ((twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sorts"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "value", [], "any", false, false, false, 127))) ? ("selected") : (""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), 0, [], "any", false, false, false, 127), "text", [], "any", false, false, false, 127);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["key"] => $context["sorts"]) {
                // line 129
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["key"] != 0) && twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 129))) && !twig_in_filter(($context["order"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 129)))) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 130);
                    echo "\" class=\"sorts-block__span uni-href selected ";
                    echo ((twig_in_filter("ASC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 130))) ? ("up") : ("down"));
                    echo "\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 130), "(")) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } elseif ((((                // line 131
$context["key"] != 0) && !twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 131))) && !twig_in_filter("DESC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 131)))) {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 132);
                    echo "\" class=\"sorts-block__span uni-href\">";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 132), "(")) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control visible-xs visible-sm\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 138
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 138) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 139);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 139);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 141);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 141);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 147
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 147) == ($context["limit"] ?? null))) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 148);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 148);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 150);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 150);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 152
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"sorts-block__btn-group btn-group\">
\t\t\t\t\t\t\t";
            // line 155
            if (($context["show_grid_button"] ?? null)) {
                echo "<button type=\"button\" id=\"grid-view\" class=\"sorts-block__btn btn btn-lg btn-default\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"><i class=\"fa fa-th-large\"></i></button>";
            }
            // line 156
            echo "\t\t\t\t\t\t\t";
            if (($context["show_list_button"] ?? null)) {
                echo "<button type=\"button\" id=\"list-view\" class=\"sorts-block__btn btn btn-lg btn btn-default\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\"><i class=\"fa fa-th-list\"></i></button>";
            }
            // line 157
            echo "\t\t\t\t\t\t\t";
            if (($context["show_compact_button"] ?? null)) {
                echo "<button type=\"button\" id=\"compact-view\" class=\"sorts-block__btn btn btn-lg btn btn-default hidden-xs hidden-sm\" title=\"";
                echo ($context["button_compact"] ?? null);
                echo "\"><i class=\"fa fa-align-justify\"></i></button>";
            }
            // line 158
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"products-block row row-flex\">
\t\t\t\t\t";
            // line 163
            if ((($context["default_view"] ?? null) == "list")) {
                // line 164
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-list list-view col-sm-12";
                // line 165
                echo "\t\t\t\t\t";
            } elseif ((($context["default_view"] ?? null) == "compact")) {
                // line 166
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-price compact-view col-sm-12";
                // line 167
                echo "\t\t\t\t\t";
            } else {
                // line 168
                echo "\t\t\t\t\t\t";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 169
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                    // line 170
                    echo "\t\t\t\t\t\t";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 171
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                    // line 172
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 173
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                    // line 174
                    echo "\t\t\t\t\t\t";
                }
                // line 175
                echo "\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 177
                echo "\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 179
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 179)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 179)) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 180
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/search.twig", 180)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 181);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 182);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 182)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 182)) . "\"")) : (""));
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 182);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 182);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t    ";
                // line 186
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/search.twig", 186)->display($context);
                // line 187
                echo "\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 187);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                echo "</a>
\t\t\t\t\t\t";
                // line 188
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 188) >= 0) && ($context["show_rating"] ?? null))) {
                    // line 189
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 191) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 193
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 193) > 0)) {
                        echo "<div class=\"product-ret\"><a class=\"product-thumb__rating-a uni-badge uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 193);
                        echo "#tab-review\"><i class=\"fas fa-comment\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 193);
                        echo "</span></a></div>";
                    }
                    // line 194
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 196)) {
                    // line 197
                    echo "\t\t\t\t\t\t<div class=\"product-retw\">
\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 198);
                    echo "\" data-special=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 198);
                    echo "\" data-discount=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 198);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 199
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 199)) {
                        // line 200
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 200);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 202);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 202);
                        echo "</span> 
\t\t\t\t\t\t\t\t";
                    }
                    // line 204
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 205
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 205)) {
                        echo "<div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 205);
                        echo "</div>";
                    }
                    // line 206
                    echo "\t\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 207);
                echo "\">
\t\t\t\t\t\t\t";
                // line 208
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/product/search.twig", 208)->display($context);
                // line 209
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 209);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 209);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 209);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 209);
                echo ", this)\"><i class=\"fal fa-cart-shopping\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 210
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 210);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 211
                echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 211);
                echo "');\"><i class=\"fa fa-balance-scale\"></i></button>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t    ";
                // line 214
                if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 214)) {
                    // line 215
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 215);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/search.twig", 217)->display($context);
                // line 218
                echo "\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 223
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t  <div class=\"pagination-text\">";
            // line 224
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t";
        } else {
            // line 226
            echo "\t\t\t\t<div class=\"div-text-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 228
        echo "\t\t\t</div>
\t\t\t";
        // line 229
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 231
        echo ($context["column_right"] ?? null);
        echo "
\t\t<script>uniSelectView.init();</script>
\t</div>
</div>
";
        // line 235
        if (($context["products"] ?? null)) {
            // line 236
            echo "<script>
\t\$(function() {
\t\tlet showTimer = function() {
\t\t\t\$('.product-layout .product-thumb__image').each(function() {
\t\t\t\tconst date = \$(this).data('special-end');

\t\t\t\tif(date) {
\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\tdate  :''+date+'',
\t\t\t\t\t\ttexts :['";
            // line 245
            echo ($context["text_special_day"] ?? null);
            echo "','";
            echo ($context["text_special_hour"] ?? null);
            echo "','";
            echo ($context["text_special_min"] ?? null);
            echo "','";
            echo ($context["text_special_sec"] ?? null);
            echo "']
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t};
\t\t\t\t\t\t\t
\t\tshowTimer();
\t\t\t\t\t\t\t\t
\t\tlet observer = new MutationObserver(() => {
\t\t\tshowTimer();
\t\t});
\t\t
\t\tobserver.observe(\$('.products-block')[0], {childList:true});
\t});
</script>
";
        }
        // line 261
        echo "<script>
\$('#button-search').bind('click', () => {
\tlet url = 'index.php?route=product/search';

\tconst search = \$('#content input[name=\\'search\\']').val(),
\t\t  category_id = \$('#content select[name=\\'category_id\\']').val(),
\t\t  sub_category_id = \$('#content input[name=\\'sub_category\\']:checked').val(),
\t\t  filter_description = \$('#content input[name=\\'description\\']:checked').val();

\tif (search) url += '&search=' + encodeURIComponent(search);
\tif (category_id > 0) url += '&category_id=' + encodeURIComponent(category_id);
\tif (sub_category_id) url += '&sub_category=true';
\tif (filter_description) url += '&description=true';

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', (e) => {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
</script>
";
        // line 294
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 294,  880 => 261,  855 => 245,  844 => 236,  842 => 235,  835 => 231,  830 => 229,  827 => 228,  821 => 226,  816 => 224,  812 => 223,  809 => 222,  792 => 218,  789 => 217,  783 => 215,  781 => 214,  771 => 211,  763 => 210,  752 => 209,  750 => 208,  745 => 207,  742 => 206,  734 => 205,  731 => 204,  723 => 202,  717 => 200,  715 => 199,  707 => 198,  704 => 197,  701 => 196,  697 => 194,  689 => 193,  686 => 192,  677 => 191,  673 => 190,  670 => 189,  668 => 188,  661 => 187,  659 => 186,  646 => 182,  642 => 181,  638 => 180,  634 => 179,  628 => 177,  610 => 176,  607 => 175,  604 => 174,  601 => 173,  598 => 172,  595 => 171,  592 => 170,  589 => 169,  586 => 168,  583 => 167,  580 => 166,  577 => 165,  574 => 164,  572 => 163,  565 => 158,  558 => 157,  551 => 156,  545 => 155,  541 => 153,  535 => 152,  527 => 150,  519 => 148,  516 => 147,  512 => 146,  508 => 144,  502 => 143,  494 => 141,  486 => 139,  483 => 138,  479 => 137,  475 => 135,  469 => 134,  461 => 132,  459 => 131,  450 => 130,  447 => 129,  443 => 128,  435 => 127,  430 => 124,  426 => 122,  415 => 120,  411 => 119,  407 => 118,  404 => 117,  402 => 116,  398 => 115,  394 => 113,  388 => 111,  385 => 110,  383 => 109,  380 => 108,  377 => 107,  373 => 105,  362 => 101,  352 => 100,  346 => 99,  341 => 98,  337 => 97,  331 => 95,  328 => 94,  324 => 92,  316 => 89,  310 => 87,  300 => 85,  298 => 84,  292 => 83,  287 => 82,  283 => 81,  277 => 79,  275 => 78,  272 => 77,  261 => 73,  250 => 69,  245 => 66,  243 => 65,  237 => 62,  231 => 58,  225 => 57,  219 => 56,  213 => 55,  205 => 53,  197 => 51,  194 => 50,  189 => 49,  181 => 47,  173 => 45,  170 => 44,  165 => 43,  157 => 41,  149 => 39,  146 => 38,  142 => 37,  138 => 36,  130 => 31,  124 => 30,  116 => 25,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  91 => 17,  87 => 16,  81 => 13,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/search.twig", "");
    }
}
