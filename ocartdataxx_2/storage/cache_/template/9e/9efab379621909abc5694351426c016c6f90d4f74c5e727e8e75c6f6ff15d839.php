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

/* unishop2/template/product/category.twig */
class __TwigTemplate_1148f88ef10dc48df14193aa994cd4f2bc52ab003f746acf8c0b868323e8e091 extends \Twig\Template
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
<div class=\"category-cont\">
    <div class=\"container\">
\t<div class=\"breadcrumb-h1 ";
        // line 4
        echo ((($context["menu_expanded"] ?? null)) ? ("col-md-offset-3 col-lg-offset-3 col-xxl-offset-4") : (""));
        echo "\">
\t\t<ul class=\"breadcrumb mobile\">
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 7
            echo "\t\t\t\t";
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 8
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</a></li>
\t\t\t\t";
            } else {
                // line 10
                echo "\t\t\t\t\t";
                if (( !($context["hide_last_breadcrumb"] ?? null) || (($context["hide_last_breadcrumb"] ?? null) && ($context["key"] == 1)))) {
                    echo "<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
                    echo "</li>";
                }
                // line 11
                echo "\t\t\t\t";
            }
            // line 12
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t\t<h1 class=\"heading\">";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t</div>
\t<div class=\"row\">
\t\t     ";
        // line 17
        if (($context["categories"] ?? null)) {
            // line 18
            echo "\t\t\t\t<div class=\"category-list row row-flex ";
            echo (((($context["subcategory_mobile_view"] ?? null) == "select")) ? ("hidden-xs") : (""));
            echo "\">
\t\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 20
                echo "\t\t\t\t\t\t<div class=\"";
                echo ($context["subcategory_column"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                echo "\" class=\"category-list__item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 21)) ? ("uni-item") : ("uni-item-bg"));
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 23);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23);
                    echo "\" class=\"category-list__img img-responsive ";
                    echo (((($context["subcategory_mobile_view"] ?? null) == "imghide")) ? ("hidden-xs") : (""));
                    echo "\" width=\"";
                    echo ($context["category_list_img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["category_list_img_height"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t<span class=\"category-list__name\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 30
            if ((($context["subcategory_mobile_view"] ?? null) == "select")) {
                // line 31
                echo "\t\t\t\t\t<div class=\"visible-xs\" style=\"margin:0 0 20px\">
\t\t\t\t\t\t<select class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t<option value=\"\">";
                // line 33
                echo ($context["text_select_category"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t";
        }
        // line 41
        echo "\t\t\t";
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 42
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 43
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 44
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 45
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 46
            echo "\t\t";
        } else {
            // line 47
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 48
            echo "\t\t";
        }
        // line 49
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 50
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t";
        // line 51
        if ((($context["description"] ?? null) && (twig_length_filter($this->env, ($context["description"] ?? null)) > 15))) {
            // line 52
            echo "\t\t\t\t<div class=\"category-page category-info\">
\t\t\t\t\t";
            // line 53
            if (($context["thumb"] ?? null)) {
                // line 54
                echo "\t\t\t\t\t\t<div class=\"category-info__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 55
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t";
            if (($context["description"] ?? null)) {
                // line 59
                echo "\t\t\t\t\t\t<div class=\"category-info__description\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 63
        echo "\t\t\t<!-- OCFilter Start -->
      ";
        // line 64
        if (($context["ocfilter_description_top"] ?? null)) {
            // line 65
            echo "      <div class=\"ocf-description ocf-description-top\">";
            echo ($context["ocfilter_description_top"] ?? null);
            echo "</div>
      ";
        }
        // line 67
        echo "      
      ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "top", [], "any", false, false, false, 68)) {
            // line 69
            echo "      <nav class=\"ocf-page-list-top\">  
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "top", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page_group"]) {
                // line 71
                echo "        <div class=\"ocf-page-group\">
          ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "          <div class=\"ocf-page-group-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 73);
                    echo "</div>
          ";
                }
                // line 75
                echo "          <ul class=\"ocf-category-page-list\">
            ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "pages", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page"]) {
                    echo "           
            ";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "selected", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "            <li class=\"ocf-page-selected\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 78);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 78);
                        echo "</a></li>
            ";
                    } else {
                        // line 80
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 80);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 80);
                        echo "</a></li>
            ";
                    }
                    // line 81
                    echo "            
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "          </ul>         
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      </nav>
      ";
        }
        // line 87
        echo " 
      
      ";
        // line 89
        if (($context["products"] ?? null)) {
            // line 90
            echo "      <!-- OCFilter Start -->      
      ";
            // line 91
            if (($context["ocfilter_mobile_button"] ?? null)) {
                // line 92
                echo "      <div class=\"ocf-btn-mobile-static ocf-mobile\">
        <button type=\"button\" class=\"ocf-btn ocf-btn-default\" data-ocf=\"mobile\"><span class=\"ocf-btn-name\">";
                // line 93
                echo ($context["button_ocfilter_mobile"] ?? null);
                echo "</span> <i class=\"ocf-icon ocf-icon-16 ocf-brand ocf-sliders\"></i></button>
      </div>
      ";
            }
            // line 95
            echo "   
      <!-- /OCFilter End -->
      <!-- /OCFilter End -->
\t\t\t\t<div class=\"sorts-block\">
\t\t\t\t\t<div class=\"sorts-block__wrapper\">
\t\t\t\t\t\t<div class=\"sorts-block__sorts hidden-xs hidden-sm\">
\t\t\t\t\t\t\t<span data-href=\"";
            // line 101
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sorts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "href", [], "any", false, false, false, 101);
            echo "\" class=\"sorts-block__span uni-href ";
            echo ((twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sorts"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "value", [], "any", false, false, false, 101))) ? ("selected") : (""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), 0, [], "any", false, false, false, 101), "text", [], "any", false, false, false, 101);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["key"] => $context["sorts"]) {
                // line 103
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["key"] != 0) && twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 103))) && !twig_in_filter(($context["order"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 103)))) {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 104);
                    echo "\" class=\"sorts-block__span uni-href selected ";
                    echo ((twig_in_filter("ASC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 104))) ? ("up") : ("down"));
                    echo "\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 104), "(")) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } elseif ((((                // line 105
$context["key"] != 0) && !twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 105))) && !twig_in_filter("DESC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 105)))) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 106);
                    echo "\" class=\"sorts-block__span uni-href\">";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 106), "(")) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 108
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control visible-xs visible-sm\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 112
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 112) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 113);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 113);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 115);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 115);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 121
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 121) == ($context["limit"] ?? null))) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 122);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 122);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 124);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 124);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"sorts-block__btn-group btn-group\">
\t\t\t\t\t\t\t";
            // line 129
            if (($context["show_grid_button"] ?? null)) {
                echo "<button type=\"button\" id=\"grid-view\" class=\"sorts-block__btn btn btn-lg btn-default\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"><i class=\"fal fa-th-large\"></i></button>";
            }
            // line 130
            echo "\t\t\t\t\t\t\t";
            if (($context["show_list_button"] ?? null)) {
                echo "<button type=\"button\" id=\"list-view\" class=\"sorts-block__btn btn btn-lg btn btn-default\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\"><i class=\"fal fa-th-list\"></i></button>";
            }
            // line 131
            echo "\t\t\t\t\t\t\t";
            if (($context["show_compact_button"] ?? null)) {
                echo "<button type=\"button\" id=\"compact-view\" class=\"sorts-block__btn btn btn-lg btn btn-default hidden-xs hidden-sm\" title=\"";
                echo ($context["button_compact"] ?? null);
                echo "\"><i class=\"fa fa-align-justify\"></i></button>";
            }
            // line 132
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"products-block row row-flex\">
\t\t\t\t\t";
            // line 136
            if ((($context["default_view"] ?? null) == "list")) {
                // line 137
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-list list-view col-sm-12";
                // line 138
                echo "\t\t\t\t\t";
            } elseif ((($context["default_view"] ?? null) == "compact")) {
                // line 139
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-price compact-view col-sm-12";
                // line 140
                echo "\t\t\t\t\t";
            } else {
                // line 141
                echo "\t\t\t\t\t\t";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 142
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                    // line 143
                    echo "\t\t\t\t\t\t";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 144
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                    // line 145
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 146
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                    // line 147
                    echo "\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t";
            }
            // line 149
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
            foreach ($context['_seq'] as $context["key"] => $context["product"]) {
                // line 150
                echo "\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 152
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 152)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 152)) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 153
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/category.twig", 153)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 154);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 155);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 155)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 155)) . "\"")) : (""));
                echo " ";
                echo ((($context["key"] > 4)) ? ("loading=\"lazy\"") : (""));
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                echo "\" class=\"img-responsive\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t\t\t\t";
                // line 159
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/category.twig", 159)->display($context);
                // line 160
                echo "\t\t\t\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 160);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
                echo "</a>\t
\t\t\t\t\t\t\t\t\t\t";
                // line 161
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 161)) ? ((((("<div class=\"product-thumb__model\" data-text=\"" . ($context["text_model"] ?? null)) . "\">") . twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 161)) . "</div>")) : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t";
                // line 162
                if (((($context["rating_type"] ?? null) == 2) || ((($context["rating_type"] ?? null) == 1) && (($context["rating"] ?? null) || ($context["show_rating"] ?? null))))) {
                    // line 163
                    echo "\t                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", true, true, false, 163)) {
                        // line 164
                        echo "\t\t              <div class=\"product-thumb__rating rating uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 164);
                        echo "#tab-review\">
\t\t\t          ";
                        // line 165
                        if ((($context["rating_type"] ?? null) == 2)) {
                            // line 166
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 167
                                echo "\t\t\t\t\t<i class=\"";
                                echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 167) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                                echo "\"></i>
\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 169
                            echo "\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 169)) {
                                // line 170
                                echo "\t\t\t\t<div class=\"product-ret\"><i class=\"fas fa-comment\"></i><span class=\"product-thumb__rating-text\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "text_reviews", [], "any", false, false, false, 170);
                                echo "</span>
\t\t\t\t</div>
\t\t\t\t";
                            }
                            // line 173
                            echo "\t\t\t\t</div>
\t\t\t    ";
                        }
                        // line 175
                        echo "\t\t\t";
                    }
                    // line 176
                    echo "\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 177)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-retw\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 179);
                    echo "\" data-special=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 179);
                    echo "\" data-discount=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 179);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 180
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 180)) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 181);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 183
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 183);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 183);
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 186
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 186)) {
                        echo "<div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 186);
                        echo "</div>";
                    }
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 188);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 189
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/product/category.twig", 189)->display($context);
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 190);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 190);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 190);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 190);
                echo ", this)\"><i class=\"fal fa-cart-shopping\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 191
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 191);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 192
                echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 192);
                echo "');\"><i class=\"fa fa-balance-scale\"></i></button>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 195
                if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 196);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 198
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/category.twig", 198)->display($context);
                // line 199
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 204
            echo ($context["banner_in_category"] ?? null);
            echo "
\t\t\t\t";
            // line 205
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t    <div class=\"pagination-text\">";
            // line 206
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 208
        echo "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 209
            echo "\t\t\t\t<div class=\"div-text-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 211
        echo "\t\t\t<div class=\"category-info-bottom\"></div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 214
        echo ($context["column_right"] ?? null);
        echo "
\t\t<script>uniSelectView.init();</script>
<!-- OCFilter Start -->
      ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "bottom", [], "any", false, false, false, 217)) {
            // line 218
            echo "      <nav class=\"ocf-page-list-bottom\">      
        ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "bottom", [], "any", false, false, false, 219));
            foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page_group"]) {
                echo "    
        <div class=\"ocf-page-group\">
          ";
                // line 221
                if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "          <div class=\"ocf-page-group-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 222);
                    echo "</div>
          ";
                }
                // line 224
                echo "          <ul class=\"ocf-category-page-list\">
            ";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "pages", [], "any", false, false, false, 225));
                foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page"]) {
                    // line 226
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "selected", [], "any", false, false, false, 226)) {
                        // line 227
                        echo "            <li class=\"ocf-page-selected\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 227);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 227);
                        echo "</a></li>
            ";
                    } else {
                        // line 229
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 229);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 229);
                        echo "</a></li>
            ";
                    }
                    // line 230
                    echo "     
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 232
                echo "          </ul>         
        </div>               
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "      </nav>
      ";
        }
        // line 237
        echo "      
      ";
        // line 238
        if (($context["ocfilter_description_bottom"] ?? null)) {
            echo "   
      <div class=\"ocf-description ocf-description-bottom\">";
            // line 239
            echo ($context["ocfilter_description_bottom"] ?? null);
            echo "</div>
      ";
        }
        // line 241
        echo "      <!-- /OCFilter End -->
      
      ";
        // line 243
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
</div>
<script>
\t";
        // line 247
        if (($context["description"] ?? null)) {
            // line 248
            echo "\t\t";
            echo (((($context["cat_desc_pos"] ?? null) == "bottom")) ? ("\$(\".category-info-bottom\").append(\$(\".category-info\"));") : (""));
            echo "
\t
\t\t";
            // line 250
            if (($context["cat_desc_height"] ?? null)) {
                // line 251
                echo "\t\t\t\$(() => {
\tconst cat_desc_collapse = () => {
\t\tconst parent_block = '.category-info',
\t\t\tcollapse_block = '.category-info__description',
\t\t\theight_1 = \$(parent_block).outerHeight(), 
\t\t\theight_2 = \$(collapse_block).outerHeight(),
\t\t\ttext_expand = uniJsVars.cat_descr_collapse.text_expand,
\t\t\ttext_collapse = uniJsVars.cat_descr_collapse.text_collapse,
\t\t\tcollapse_btn = 'category-info__btn';
\t\t\t\t  
\t\tif(height_2 > height_1) {
\t\t\t\$(parent_block).css({'height': height_1, 'max-height': '100%'}).append('<a class=\"'+collapse_btn+'\"><span class=\"category-info__span\">'+text_expand+'</span></a>');

\t\t\t\$('html body').on('click', '.'+collapse_btn, function() {
\t\t\t\tif(!\$(this).data('open')) {
\t\t\t\t\tnewHeight = height_2 + \$('.'+collapse_btn).outerHeight() + (\$('.'+collapse_btn).outerHeight()/2);
\t\t\t\t\t\$(this).data('open', true).children().text(text_collapse);
\t\t\t\t} else {
\t\t\t\t\tnewHeight = height_1;
\t\t\t\t\t\$(this).data('open', false).children().text(text_expand);
\t\t\t\t}

\t\t\t\t\$(this).parent().animate({height: newHeight}, 300);
\t\t\t});
\t\t}
\t}
\t\t\t\t
\tsetTimeout(() => {
\t\tcat_desc_collapse();
\t}, 300);
});
\t\t";
            }
            // line 283
            echo "\t";
        }
        // line 284
        echo "</script>
";
        // line 285
        if (($context["products"] ?? null)) {
            // line 286
            echo "<script>
\t\$(() => {
\t\tconst showTimer = () => {
\t\t\t\$('.product-layout .product-thumb__image').each(function() {
\t\t\t\tconst date = \$(this).data('special-end');

\t\t\t\tif(date) {
\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\tdate  :date,
\t\t\t\t\t\ttexts :['";
            // line 295
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
\t\tnew MutationObserver(showTimer).observe(\$('.products-block')[0], {childList:true});
\t});
</script>
";
        }
        // line 307
        echo "<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 313
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 315
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 316
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 316), ["\"" => "", "&quot;" => ""])));
            echo "\",
\t\t\t\"item\": \"";
            // line 317
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 317);
            echo "\"
\t\t\t";
            // line 318
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "\t\t]
\t}
</script>
";
        // line 323
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  996 => 323,  991 => 320,  983 => 318,  979 => 317,  975 => 316,  971 => 315,  967 => 313,  963 => 312,  956 => 307,  935 => 295,  924 => 286,  922 => 285,  919 => 284,  916 => 283,  882 => 251,  880 => 250,  874 => 248,  872 => 247,  865 => 243,  861 => 241,  856 => 239,  852 => 238,  849 => 237,  845 => 235,  837 => 232,  830 => 230,  822 => 229,  814 => 227,  811 => 226,  807 => 225,  804 => 224,  798 => 222,  796 => 221,  789 => 219,  786 => 218,  784 => 217,  778 => 214,  773 => 211,  767 => 209,  764 => 208,  759 => 206,  755 => 205,  751 => 204,  748 => 203,  731 => 199,  728 => 198,  722 => 196,  720 => 195,  710 => 192,  702 => 191,  691 => 190,  689 => 189,  684 => 188,  681 => 187,  673 => 186,  670 => 185,  662 => 183,  656 => 181,  654 => 180,  646 => 179,  643 => 178,  640 => 177,  637 => 176,  634 => 175,  630 => 173,  623 => 170,  620 => 169,  611 => 167,  606 => 166,  604 => 165,  599 => 164,  596 => 163,  594 => 162,  590 => 161,  583 => 160,  581 => 159,  564 => 155,  558 => 154,  554 => 153,  550 => 152,  544 => 150,  526 => 149,  523 => 148,  520 => 147,  517 => 146,  514 => 145,  511 => 144,  508 => 143,  505 => 142,  502 => 141,  499 => 140,  496 => 139,  493 => 138,  490 => 137,  488 => 136,  482 => 132,  475 => 131,  468 => 130,  462 => 129,  458 => 127,  452 => 126,  444 => 124,  436 => 122,  433 => 121,  429 => 120,  425 => 118,  419 => 117,  411 => 115,  403 => 113,  400 => 112,  396 => 111,  392 => 109,  386 => 108,  378 => 106,  376 => 105,  367 => 104,  364 => 103,  360 => 102,  352 => 101,  344 => 95,  338 => 93,  335 => 92,  333 => 91,  330 => 90,  328 => 89,  324 => 87,  320 => 86,  312 => 83,  305 => 81,  297 => 80,  289 => 78,  287 => 77,  281 => 76,  278 => 75,  272 => 73,  270 => 72,  267 => 71,  263 => 70,  260 => 69,  258 => 68,  255 => 67,  249 => 65,  247 => 64,  244 => 63,  240 => 61,  234 => 59,  231 => 58,  221 => 55,  218 => 54,  216 => 53,  213 => 52,  211 => 51,  207 => 50,  202 => 49,  199 => 48,  196 => 47,  193 => 46,  190 => 45,  187 => 44,  184 => 43,  182 => 42,  177 => 41,  174 => 40,  169 => 37,  158 => 35,  154 => 34,  150 => 33,  146 => 31,  144 => 30,  141 => 29,  130 => 25,  114 => 23,  112 => 22,  104 => 21,  99 => 20,  95 => 19,  90 => 18,  88 => 17,  82 => 14,  79 => 13,  73 => 12,  70 => 11,  63 => 10,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/category.twig", "");
    }
}
