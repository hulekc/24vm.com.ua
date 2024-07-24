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

/* unishop2/template/product/special.twig */
class __TwigTemplate_c4e604424b38cf5ba1a4694306173958cd4ff01a4c5db412e71e4dd206ff83af extends \Twig\Template
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
\t</div>
\t<div class=\"row\">
\t    \t<div id=\"promotions\" class=\"promotions\">
\t    ";
        // line 16
        if (($context["products"] ?? null)) {
            // line 17
            echo "      <!-- OCFilter Start -->      
      ";
            // line 18
            if (($context["ocfilter_mobile_button"] ?? null)) {
                // line 19
                echo "      <div class=\"ocf-btn-mobile-static ocf-mobile\">
        <button type=\"button\" class=\"ocf-btn ocf-btn-default\" data-ocf=\"mobile\"><span class=\"ocf-btn-name\">";
                // line 20
                echo ($context["button_ocfilter_mobile"] ?? null);
                echo "</span> <i class=\"ocf-icon ocf-icon-16 ocf-brand ocf-sliders\"></i></button>
      </div>
      ";
            }
            // line 22
            echo "   
      <!-- /OCFilter End -->
\t\t\t\t";
            // line 24
            if (($context["product_categories"] ?? null)) {
                // line 25
                echo "\t\t\t\t\t<div class=\"product-category-list\">
\t\t\t\t\t\t<!--<h1 class=\"heading\">";
                // line 26
                echo ($context["heading_title"] ?? null);
                echo "</h1>-->
\t\t\t\t\t\t<h1>";
                // line 27
                echo ($context["heading_product_category"] ?? null);
                echo "</h1>
\t\t\t\t\t\t";
                // line 28
                if ((($context["category_id"] ?? null) == 0)) {
                    // line 29
                    echo "\t\t\t\t\t\t<div class=\"uni-form\">
\t\t\t\t\t\t\t<span class=\"product-category-list__item selected\">";
                    // line 30
                    echo ($context["text_all_specials"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["specials_href"] ?? null);
                    echo "\" class=\"product-category-list__item\">";
                    echo ($context["text_all_specials"] ?? null);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 35
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "selected", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t<span class=\"product-category-list__item selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                        echo "</span><a href=\"";
                        echo ($context["specials_href"] ?? null);
                        echo "\" title=\"";
                        echo ($context["text_deselect"] ?? null);
                        echo "\" class=\"product-category-list__reset\">&times;</a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                        echo "\" class=\"product-category-list__item\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                        echo "</a>
\t\t\t\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 44
            echo "\t\t";
            echo ($context["column_left"] ?? null);
            echo "
\t\t";
            // line 45
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 46
                echo "\t\t\t";
                $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
                // line 47
                echo "\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 48
                echo "\t\t\t";
                $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
                // line 49
                echo "\t\t";
            } else {
                // line 50
                echo "\t\t\t";
                $context["class"] = "col-sm-12";
                // line 51
                echo "\t\t";
            }
            // line 52
            echo "\t\t<div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t";
            // line 53
            echo ($context["content_top"] ?? null);
            echo "
\t\t\t<div class=\"uni-wrapper\">
\t\t\t\t<div class=\"sorts-block\">
\t\t\t\t\t<div class=\"sorts-block__wrapper\">
\t\t\t\t\t\t<div class=\"sorts-block__sorts hidden-xs hidden-sm\">
\t\t\t\t\t\t\t<span data-href=\"";
            // line 58
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sorts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "href", [], "any", false, false, false, 58);
            echo "\" class=\"sorts-block__span uni-href ";
            echo ((twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sorts"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "value", [], "any", false, false, false, 58))) ? ("selected") : (""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), 0, [], "any", false, false, false, 58), "text", [], "any", false, false, false, 58);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["key"] => $context["sorts"]) {
                // line 60
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["key"] != 0) && twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 60))) && !twig_in_filter(($context["order"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 60)))) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 61);
                    echo "\" class=\"sorts-block__span uni-href selected ";
                    echo ((twig_in_filter("ASC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 61))) ? ("up") : ("down"));
                    echo "\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 61), "(")) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } elseif ((((                // line 62
$context["key"] != 0) && !twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 62))) && !twig_in_filter("DESC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 62)))) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 63);
                    echo "\" class=\"sorts-block__span uni-href\">";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 63), "(")) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control visible-xs visible-sm\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 69
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 69) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 70);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 70);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 72);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<!--<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 78
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 78) == ($context["limit"] ?? null))) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 79);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 79);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 81);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 81);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t\t\t\t\t</select>-->
\t\t\t\t\t\t<div class=\"sorts-block__btn-group btn-group\">
\t\t\t\t\t\t\t";
            // line 86
            if (($context["show_grid_button"] ?? null)) {
                echo "<button type=\"button\" id=\"grid-view\" class=\"sorts-block__btn btn btn-lg btn-default\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"><i class=\"fa fa-th-large\"></i></button>";
            }
            // line 87
            echo "\t\t\t\t\t\t\t";
            if (($context["show_list_button"] ?? null)) {
                echo "<button type=\"button\" id=\"list-view\" class=\"sorts-block__btn btn btn-lg btn btn-default\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\"><i class=\"fa fa-th-list\"></i></button>";
            }
            // line 88
            echo "\t\t\t\t\t\t\t";
            if (($context["show_compact_button"] ?? null)) {
                echo "<button type=\"button\" id=\"compact-view\" class=\"sorts-block__btn btn btn-lg btn btn-default hidden-xs hidden-sm\" title=\"";
                echo ($context["button_compact"] ?? null);
                echo "\"><i class=\"fa fa-align-justify\"></i></button>";
            }
            // line 89
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"products-block row row-flex\">
\t\t\t\t\t";
            // line 93
            if ((($context["default_view"] ?? null) == "list")) {
                // line 94
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-list list-view col-sm-12";
                // line 95
                echo "\t\t\t\t\t";
            } elseif ((($context["default_view"] ?? null) == "compact")) {
                // line 96
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-price compact-view col-sm-12";
                // line 97
                echo "\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 99
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                    // line 100
                    echo "\t\t\t\t\t\t";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 101
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                    // line 102
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                    // line 104
                    echo "\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t";
            }
            // line 106
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
                // line 107
                echo "\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 109
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 109)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 109)) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 110
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/special.twig", 110)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 111);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 112);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 112)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 112)) . "\"")) : (""));
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t    ";
                // line 116
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/special.twig", 116)->display($context);
                // line 117
                echo "\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 117);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                echo "</a>
\t\t\t\t\t\t";
                // line 118
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 118) >= 0) && ($context["show_rating"] ?? null))) {
                    // line 119
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 121) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 123
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 123) > 0)) {
                        echo "<div class=\"product-ret\"><a class=\"product-thumb__rating-a uni-badge uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 123);
                        echo "#tab-review\"><i class=\"fas fa-comment\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 123);
                        echo "</span></a></div>";
                    }
                    // line 124
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126)) {
                    // line 127
                    echo "\t\t\t\t\t\t<div class=\"product-retw\">
\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 128);
                    echo "\" data-special=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 128);
                    echo "\" data-discount=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 128);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 129
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 129)) {
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 130);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132);
                        echo "</span> 
\t\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 135
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 135)) {
                        echo "<div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 135);
                        echo "</div>";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t";
                }
                // line 137
                echo "\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 137);
                echo "\">
\t\t\t\t\t\t\t";
                // line 138
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/product/special.twig", 138)->display($context);
                // line 139
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 139);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 139);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 139);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 139);
                echo ", this)\"><i class=\"fal fa-cart-shopping\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 140
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 141
                echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 141);
                echo "');\"><i class=\"fa fa-balance-scale\"></i></button>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t    ";
                // line 144
                if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 144)) {
                    // line 145
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 145);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/special.twig", 147)->display($context);
                // line 148
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
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
            // line 152
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 153
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t  <div class=\"pagination-text\">";
            // line 154
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 156
        echo "\t\t\t";
        if ( !($context["products"] ?? null)) {
            // line 157
            echo "\t\t\t\t<div class=\"div-text-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 159
        echo "\t\t\t</div>
\t\t\t";
        // line 160
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 162
        echo ($context["column_right"] ?? null);
        echo "
\t\t<script>uniSelectView.init();</script>
\t</div>
</div>
";
        // line 166
        if (($context["products"] ?? null)) {
            // line 167
            echo "<script>
\t\$(() => {
\t\tconst showTimer = () => {
\t\t\t\$('.product-layout .product-thumb__image').each(function() {
\t\t\t\tconst date = \$(this).data('special-end');

\t\t\t\tif(date) {
\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\tdate  :date,
\t\t\t\t\t\ttexts :['";
            // line 176
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
        // line 188
        echo "<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 194
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 196
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 197
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 197)));
            echo "\",
\t\t\t\"item\": \"";
            // line 198
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 198);
            echo "\"
\t\t\t";
            // line 199
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "\t\t]
\t}
</script>
";
        // line 204
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 204,  688 => 201,  680 => 199,  676 => 198,  672 => 197,  668 => 196,  664 => 194,  660 => 193,  653 => 188,  632 => 176,  621 => 167,  619 => 166,  612 => 162,  607 => 160,  604 => 159,  598 => 157,  595 => 156,  590 => 154,  586 => 153,  583 => 152,  566 => 148,  563 => 147,  557 => 145,  555 => 144,  545 => 141,  537 => 140,  526 => 139,  524 => 138,  519 => 137,  516 => 136,  508 => 135,  505 => 134,  497 => 132,  491 => 130,  489 => 129,  481 => 128,  478 => 127,  475 => 126,  471 => 124,  463 => 123,  460 => 122,  451 => 121,  447 => 120,  444 => 119,  442 => 118,  435 => 117,  433 => 116,  420 => 112,  416 => 111,  412 => 110,  408 => 109,  402 => 107,  384 => 106,  381 => 105,  378 => 104,  375 => 103,  372 => 102,  369 => 101,  366 => 100,  363 => 99,  360 => 98,  357 => 97,  354 => 96,  351 => 95,  348 => 94,  346 => 93,  340 => 89,  333 => 88,  326 => 87,  320 => 86,  316 => 84,  310 => 83,  302 => 81,  294 => 79,  291 => 78,  287 => 77,  283 => 75,  277 => 74,  269 => 72,  261 => 70,  258 => 69,  254 => 68,  250 => 66,  244 => 65,  236 => 63,  234 => 62,  225 => 61,  222 => 60,  218 => 59,  210 => 58,  202 => 53,  197 => 52,  194 => 51,  191 => 50,  188 => 49,  185 => 48,  182 => 47,  179 => 46,  177 => 45,  172 => 44,  167 => 41,  161 => 40,  153 => 38,  143 => 36,  140 => 35,  135 => 34,  127 => 32,  122 => 30,  119 => 29,  117 => 28,  113 => 27,  109 => 26,  106 => 25,  104 => 24,  100 => 22,  94 => 20,  91 => 19,  89 => 18,  86 => 17,  84 => 16,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/special.twig", "");
    }
}
