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

/* unishop2/template/product/manufacturer_info.twig */
class __TwigTemplate_585650b3c65dbbd69f1835c41cee55a22301aee5975fa4d24874870328f4fca9 extends \Twig\Template
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
\t\t\t";
        // line 27
        if ((($context["description"] ?? null) && (twig_length_filter($this->env, ($context["description"] ?? null)) > 15))) {
            // line 28
            echo "\t\t\t\t<div class=\"manufacturer-page category-info\">
\t\t\t\t\t";
            // line 29
            if (($context["thumb"] ?? null)) {
                // line 30
                echo "\t\t\t\t\t\t<div class=\"category-info__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 31
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t<div class=\"category-info__description\">";
            echo ($context["description"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 37
        echo "\t\t\t";
        if (($context["products"] ?? null)) {
            // line 38
            echo "\t\t\t\t<div class=\"sorts-block\">
\t\t\t\t\t<div class=\"sorts-block__wrapper\">
\t\t\t\t\t\t<div class=\"sorts-block__sorts hidden-xs hidden-sm\">
\t\t\t\t\t\t\t<span data-href=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sorts"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "href", [], "any", false, false, false, 41);
            echo "\" class=\"sorts-block__span uni-href ";
            echo ((twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sorts"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "value", [], "any", false, false, false, 41))) ? ("selected") : (""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), 0, [], "any", false, false, false, 41), "text", [], "any", false, false, false, 41);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["key"] => $context["sorts"]) {
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["key"] != 0) && twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 43))) && !twig_in_filter(($context["order"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 43)))) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 44);
                    echo "\" class=\"sorts-block__span uni-href selected ";
                    echo ((twig_in_filter("ASC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 44))) ? ("up") : ("down"));
                    echo "\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 44), "(")) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } elseif ((((                // line 45
$context["key"] != 0) && !twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 45))) && !twig_in_filter("DESC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 45)))) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 46);
                    echo "\" class=\"sorts-block__span uni-href\">";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 46), "(")) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control visible-xs visible-sm\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 52) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 53);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 53);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 55);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 55);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 61
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 61) == ($context["limit"] ?? null))) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 62);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 62);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 64);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 64);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"sorts-block__btn-group btn-group\">
\t\t\t\t\t\t\t";
            // line 69
            if (($context["show_grid_button"] ?? null)) {
                echo "<button type=\"button\" id=\"grid-view\" class=\"sorts-block__btn btn btn-lg btn-default\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"><i class=\"fa fa-th-large\"></i></button>";
            }
            // line 70
            echo "\t\t\t\t\t\t\t";
            if (($context["show_list_button"] ?? null)) {
                echo "<button type=\"button\" id=\"list-view\" class=\"sorts-block__btn btn btn-lg btn btn-default\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\"><i class=\"fa fa-th-list\"></i></button>";
            }
            // line 71
            echo "\t\t\t\t\t\t\t";
            if (($context["show_compact_button"] ?? null)) {
                echo "<button type=\"button\" id=\"compact-view\" class=\"sorts-block__btn btn btn-lg btn btn-default hidden-xs hidden-sm\" title=\"";
                echo ($context["button_compact"] ?? null);
                echo "\"><i class=\"fa fa-align-justify\"></i></button>";
            }
            // line 72
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"products-block row row-flex\">
\t\t\t\t\t";
            // line 77
            if ((($context["default_view"] ?? null) == "list")) {
                // line 78
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-list list-view col-sm-12";
                // line 79
                echo "\t\t\t\t\t";
            } elseif ((($context["default_view"] ?? null) == "compact")) {
                // line 80
                echo "\t\t\t\t\t\t";
                $context["class"] = "product-price compact-view col-sm-12";
                // line 81
                echo "\t\t\t\t\t";
            } else {
                // line 82
                echo "\t\t\t\t\t\t";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                    // line 84
                    echo "\t\t\t\t\t\t";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 85
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                    // line 86
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    $context["class"] = "product-grid grid-view col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                    // line 88
                    echo "\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t";
            }
            // line 90
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
                // line 91
                echo "\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 93
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 93)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 93)) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 94
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/manufacturer_info.twig", 94)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 96);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 96)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 96)) . "\"")) : (""));
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t    ";
                // line 100
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/manufacturer_info.twig", 100)->display($context);
                // line 101
                echo "\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 101);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 101);
                echo "</a>
\t\t\t\t\t\t";
                // line 102
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 102) >= 0) && ($context["show_rating"] ?? null))) {
                    // line 103
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 105) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 107
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 107) > 0)) {
                        echo "<div class=\"product-ret\"><a class=\"product-thumb__rating-a uni-badge uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 107);
                        echo "#tab-review\"><i class=\"fas fa-comment\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 107);
                        echo "</span></a></div>";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "\t\t\t\t\t\t<div class=\"product-retw\">
\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 112);
                    echo "\" data-special=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 112);
                    echo "\" data-discount=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 112);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 113
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 113)) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 114);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 116
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 116);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 116);
                        echo "</span> 
\t\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 119
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 119)) {
                        echo "<div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 119);
                        echo "</div>";
                    }
                    // line 120
                    echo "\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 121);
                echo "\">
\t\t\t\t\t\t\t";
                // line 122
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/product/manufacturer_info.twig", 122)->display($context);
                // line 123
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 123);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 123);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo ", this)\"><i class=\"fal fa-cart-shopping\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 124
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 125
                echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                echo "');\"><i class=\"fa fa-balance-scale\"></i></button>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t    ";
                // line 128
                if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 129);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/manufacturer_info.twig", 131)->display($context);
                // line 132
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
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
            // line 136
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 137
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t    <div class=\"pagination-text\">";
            // line 138
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 140
        echo "\t\t\t";
        if ( !($context["products"] ?? null)) {
            // line 141
            echo "\t\t\t\t<div class=\"div-text-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 143
        echo "\t\t\t<div class=\"category-info-bottom\"></div>
\t\t\t</div>
\t\t\t";
        // line 145
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 147
        echo ($context["column_right"] ?? null);
        echo "
\t\t<script>uniSelectView.init();</script>
\t</div>
</div>
<script>
\t";
        // line 152
        if (($context["description"] ?? null)) {
            // line 153
            echo "\t\t";
            echo (((($context["cat_desc_pos"] ?? null) == "bottom")) ? ("\$(\".category-info-bottom\").append(\$(\".category-info\"));") : (""));
            echo "
\t
\t\t";
            // line 155
            if (($context["cat_desc_height"] ?? null)) {
                // line 156
                echo "\t\t\t\$(() => {
\t\t\t\tconst parent_block = '.category-info',
\t\t\t\t\tcollapse_block = '.category-info__description',
\t\t\t\t\theight_1 = \$(parent_block).outerHeight(), 
\t\t\t\t\theight_2 = \$(collapse_block).outerHeight(),
\t\t\t\t\ttext_expand = '";
                // line 161
                echo ($context["text_expand_description"] ?? null);
                echo "',
\t\t\t\t\ttext_collapse = '";
                // line 162
                echo ($context["text_collapse_description"] ?? null);
                echo "',
\t\t\t\t\tcollapse_btn = 'category-info__btn';
\t\t\t\t  
\t\t\t\tif(height_2 > height_1) {
\t\t\t\t\t\$(parent_block).css({'height': height_1, 'max-height': '100%'}).append('<a class=\"'+collapse_btn+'\"><span class=\"category-info__span\">'+text_expand+'</span></a>');

\t\t\t\t\t\$('html body').on('click', '.'+collapse_btn, function() {
\t\t\t\t\t\tif(!\$(this).data('open')) {
\t\t\t\t\t\t\tnewHeight = height_2 + \$('.'+collapse_btn).outerHeight() + (\$('.'+collapse_btn).outerHeight()/2);
\t\t\t\t\t\t\t\$(this).data('open', true).children().text(text_collapse);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tnewHeight = height_1;
\t\t\t\t\t\t\t\$(this).data('open', false).children().text(text_expand);
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\t\$(this).parent().animate({height: newHeight}, 300);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t";
            }
            // line 182
            echo "\t";
        }
        // line 183
        echo "</script>
";
        // line 184
        if (($context["products"] ?? null)) {
            // line 185
            echo "<script>
\t\$(() => {
\t\tconst showTimer = () => {
\t\t\t\$('.product-layout .product-thumb__image').each(function() {
\t\t\t\tconst date = \$(this).data('special-end');

\t\t\t\tif(date) {
\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\tdate  :date,
\t\t\t\t\t\ttexts :['";
            // line 194
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
        // line 206
        echo "<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 212
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 214
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 215
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 215)));
            echo "\",
\t\t\t\"item\": \"";
            // line 216
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 216);
            echo "\"
\t\t\t";
            // line 217
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t]
\t}
</script>
";
        // line 222
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 222,  685 => 219,  677 => 217,  673 => 216,  669 => 215,  665 => 214,  661 => 212,  657 => 211,  650 => 206,  629 => 194,  618 => 185,  616 => 184,  613 => 183,  610 => 182,  587 => 162,  583 => 161,  576 => 156,  574 => 155,  568 => 153,  566 => 152,  558 => 147,  553 => 145,  549 => 143,  543 => 141,  540 => 140,  535 => 138,  531 => 137,  528 => 136,  511 => 132,  508 => 131,  502 => 129,  500 => 128,  490 => 125,  482 => 124,  471 => 123,  469 => 122,  464 => 121,  461 => 120,  453 => 119,  450 => 118,  442 => 116,  436 => 114,  434 => 113,  426 => 112,  423 => 111,  420 => 110,  416 => 108,  408 => 107,  405 => 106,  396 => 105,  392 => 104,  389 => 103,  387 => 102,  380 => 101,  378 => 100,  365 => 96,  361 => 95,  357 => 94,  353 => 93,  347 => 91,  329 => 90,  326 => 89,  323 => 88,  320 => 87,  317 => 86,  314 => 85,  311 => 84,  308 => 83,  305 => 82,  302 => 81,  299 => 80,  296 => 79,  293 => 78,  291 => 77,  284 => 72,  277 => 71,  270 => 70,  264 => 69,  260 => 67,  254 => 66,  246 => 64,  238 => 62,  235 => 61,  231 => 60,  227 => 58,  221 => 57,  213 => 55,  205 => 53,  202 => 52,  198 => 51,  194 => 49,  188 => 48,  180 => 46,  178 => 45,  169 => 44,  166 => 43,  162 => 42,  154 => 41,  149 => 38,  146 => 37,  139 => 34,  131 => 31,  128 => 30,  126 => 29,  123 => 28,  121 => 27,  116 => 25,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  91 => 17,  87 => 16,  81 => 13,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/manufacturer_info.twig", "");
    }
}
