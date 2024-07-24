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

/* unishop2/template/product/product.twig */
class __TwigTemplate_6131259df06ea398ef10ad6459707f6963f19316040c70a0941115e23fd033ff extends \Twig\Template
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
<body class=\"main-page-body\">
<div class=\"cont-propage\">
<div class=\"container\">
\t<div class=\"breadcrumb-h1 ";
        // line 5
        echo ((($context["menu_expanded"] ?? null)) ? ("col-md-offset-3 col-lg-offset-3 col-xxl-offset-4") : (""));
        echo "\">
\t\t<ul class=\"breadcrumb mobile\">
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 8
            echo "\t\t\t\t";
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 9
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</a></li>
\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t";
                if (( !($context["hide_last_breadcrumb"] ?? null) || (($context["hide_last_breadcrumb"] ?? null) && ($context["key"] == 1)))) {
                    echo "<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                    echo "</li>";
                }
                // line 12
                echo "\t\t\t\t";
            }
            // line 13
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</ul>
\t\t<h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 19
        echo "\t\t";
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 21
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 23
            echo "\t\t";
        } else {
            // line 24
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "\t\t";
        $context["class"] = "col-sm-12";
        // line 27
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t<!-- /* DO_size_table */ -->
\t\t\t\t\t";
        // line 29
        if ((($context["sizechart_display"] ?? null) == "popup")) {
            // line 30
            echo "\t\t\t\t\t";
            echo ($context["sizechart_popup"] ?? null);
            echo "
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t<!-- /* Size Chart Ends */ -->
\t\t\t\t\t<div id=\"product\" class=\"uni-wrappers\">
\t\t\t\t";
        // line 34
        if (((($context["rating_position"] ?? null) == 1) || (($context["model_position"] ?? null) == 1))) {
            // line 35
            echo "\t\t\t\t\t<div class=\"product__head-lxn\">
\t\t\t\t\t<div class=\"rating-model\">
\t\t\t\t\t\t";
            // line 37
            if (($context["review_status"] ?? null)) {
                // line 38
                echo "\t\t<div class=\"product-page__rating rating\">
\t\t";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 40
                    echo "\t\t<i class=\"";
                    echo (((($context["rating"] ?? null) < $context["i"])) ? ("far") : ("fa"));
                    echo " fa-star\"></i>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t\t\t\t\t&nbsp;&nbsp;<a onclick=\"\$('a[href=\\'#tab-review\\']').click();uniScrollTo('#tab-review'); return false;\" class=\"product-page__rating-a\">";
                echo ($context["reviews"] ?? null);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t\t";
            if ((($context["model_position"] ?? null) == 1)) {
                // line 46
                echo "\t\t\t\t\t\t\t<div class=\"product-dat\">
\t\t\t\t\t\t\t<div class=\"rating-model__model\">";
                // line 47
                echo ($context["text_code_lx"] ?? null);
                echo " ";
                echo ($context["model"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 53
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"product-page ";
        // line 54
        echo (((($context["product_banners"] ?? null) && (($context["product_banner_position"] ?? null) == 1))) ? ("col-sm-12 col-md-12 col-lg-10") : ("col-xs-12"));
        echo "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"product-page__image ";
        // line 56
        echo (((($context["product_banners"] ?? null) && (($context["product_banner_position"] ?? null) == 1))) ? ("col-sm-6") : ("col-sm-6"));
        echo "\">
\t\t\t\t\t\t\t";
        // line 57
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 58
            echo "\t\t\t\t\t\t\t\t";
            if (($context["thumb"] ?? null)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-page__image-main\">
\t\t\t\t\t\t\t\t\t\t";
                // line 60
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/product.twig", 60)->display($context);
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-page__image-main-carousel\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" data-thumb=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-full=\"";
                echo ($context["popup"] ?? null);
                echo "\" width=\"";
                echo ($context["thumb_width"] ?? null);
                echo "\" height=\"";
                echo ($context["thumb_height"] ?? null);
                echo "\" class=\"product-page__image-main-img img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t";
                // line 63
                if (($context["images"] ?? null)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "small", [], "any", false, false, false, 65);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" data-thumb=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "small", [], "any", false, false, false, 65);
                        echo "\" data-full=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 65);
                        echo "\" width=\"";
                        echo ($context["thumb_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["thumb_height"] ?? null);
                        echo "\" loading=\"lazy\" class=\"product-page__image-main-img img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-page__image-addit owl-carousel\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 73
                echo ($context["small"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"product-page__image-addit-img addit-img-0 selected img-responsive\" data-thumb=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["additional_width"] ?? null);
                echo "\" height=\"";
                echo ($context["additional_height"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 75);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"product-page__image-addit-img addit-img-";
                    echo ($context["key"] + 1);
                    echo " img-responsive\" loading=\"lazy\" data-thumb=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "small", [], "any", false, false, false, 75);
                    echo "\" width=\"";
                    echo ($context["additional_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["additional_height"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t<div class=\"prod-page__w\">
\t\t\t\t\t\t";
        // line 81
        if ((($context["show_attr"] ?? null) && ($context["attribute_groups"] ?? null))) {
            // line 82
            echo "\t\t\t\t\t\t\t\t<div class=\"prod-details__desc\">
\t\t\t\t\t\t\t\t<div class=\"prod-details__title\"><span>";
            // line 83
            echo ($context["main_charact"] ?? null);
            echo "</span></div>
\t\t\t\t\t\t\t\t<div class=\"product-paged__short-attribute product-dataw\">
\t\t\t\t\t\t\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["attribute_group"]) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($context["key"] < ($context["show_attr_group"] ?? null))) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["key"] < ($context["show_attr_item"] ?? null))) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-data__item_short\"><div class=\"product-data__item-divs\">";
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 89);
                            echo "</div>";
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 89);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"product-page__more-attr\" onclick=\"\$('a[href=\\'#tab-specification\\']').click(); uniScrollTo('#tab-specification'); return false;\">";
            // line 96
            echo ($context["text_all_attributes"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-block ";
        // line 101
        echo (((($context["product_banners"] ?? null) && (($context["product_banner_position"] ?? null) == 1))) ? ("col-sm-6") : ("col-sm-6"));
        echo "\">
\t\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t\t";
        // line 103
        if ((($context["model_position"] ?? null) == 2)) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item model\"><div class=\"product-data__item-div\">";
            echo ($context["text_model"] ?? null);
            echo "</div> ";
            echo ($context["model"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t\t\t";
        if (($context["show_sku"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item sku\"><div class=\"product-data__item-div\">";
            echo ($context["text_sku"] ?? null);
            echo ":</div> ";
            echo ($context["sku"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t\t";
        if ((($context["show_manuf"] ?? null) && ($context["manufacturer"] ?? null))) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item manufacturer\"><div class=\"product-data__item-div\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</div><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t\t";
        if (($context["show_location"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item location\"><div class=\"product-data__item-div\">";
            echo ($context["text_location"] ?? null);
            echo ":</div> ";
            echo ($context["location"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t<!--";
        if ((($context["reward"] ?? null) && ((($context["show_reward"] ?? null) == 1) || (($context["show_reward"] ?? null) == 3)))) {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item reward\"><div class=\"product-data__item-div\">";
            echo ($context["text_reward"] ?? null);
            echo "</div> ";
            echo ($context["reward"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 117
        echo "-->
\t\t\t\t\t\t\t\t";
        // line 118
        if ((($context["points"] ?? null) && ((($context["show_reward"] ?? null) == 2) || (($context["show_reward"] ?? null) == 3)))) {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item points\"><div class=\"product-data__item-div\">";
            echo ($context["text_points"] ?? null);
            echo "</div> ";
            echo ($context["points"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t\t";
        if (($context["show_upc"] ?? null)) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item upc\"><div class=\"product-data__item-div\">";
            echo ($context["text_upc"] ?? null);
            echo ":</div> ";
            echo ($context["upc"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t\t\t";
        if (($context["show_ean"] ?? null)) {
            // line 125
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item ean\"><div class=\"product-data__item-div\">";
            echo ($context["text_ean"] ?? null);
            echo ":</div> ";
            echo ($context["ean"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t\t\t\t\t";
        if (($context["show_jan"] ?? null)) {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item jan\"><div class=\"product-data__item-div\">";
            echo ($context["text_jan"] ?? null);
            echo ":</div> ";
            echo ($context["jan"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t\t\t";
        if (($context["show_isbn"] ?? null)) {
            // line 131
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item isbn\"><div class=\"product-data__item-div\">";
            echo ($context["text_isbn"] ?? null);
            echo ":</div> ";
            echo ($context["isbn"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t\t\t";
        if (($context["show_mpn"] ?? null)) {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item mpn\"><div class=\"product-data__item-div\">";
            echo ($context["text_mpn"] ?? null);
            echo ":</div> ";
            echo ($context["mpn"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\t\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity_indicator", [], "any", false, false, false, 136)) {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item stock\"><div class=\"product-data__item-div\">";
            echo ($context["text_stock"] ?? null);
            echo "</div> ";
            echo ($context["stock"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t\t\t\t";
        if (((($context["show_length"] ?? null) == 1) || (($context["show_length"] ?? null) == 3))) {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["length"] ?? null)) {
                echo "<div class=\"product-data__item length\"><div class=\"product-data__item-div\">";
                echo ($context["text_length"] ?? null);
                echo "</div> ";
                echo ($context["length"] ?? null);
                echo "</div>";
            }
            // line 141
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["weight"] ?? null)) {
                echo "<div class=\"product-data__item weight\"><div class=\"product-data__item-div\">";
                echo ($context["text_weight"] ?? null);
                echo "</div> ";
                echo ($context["weight"] ?? null);
                echo "</div>";
            }
            // line 142
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 144
        if (($context["options"] ?? null)) {
            // line 145
            echo "\t\t\t\t\t\t\t\t<div class=\"product-page__option option row\">
\t\t\t\t\t\t\t\t\t";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 147) == "select")) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 148)) ? ("required") : (""));
                    echo " option__group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 149)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 149);
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "\" class=\"option__select form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 151
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 152
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 153);
                        echo "\" data-maximum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "maximum", [], "any", false, false, false, 153);
                        echo "\" data-prefix=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 153);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 153);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 153)) ? ("disabled=\"disabled\"") : (""));
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 154);
                        echo " ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154)) ? ((((("(" . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 154)) . "") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154)) . ")")) : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 160) == "radio")) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 161)) ? ("required") : (""));
                    echo " option__group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 162
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 162)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 164));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__item ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 165)) ? ("ended") : (""));
                        echo "\" ";
                        echo ((((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 165) &&  !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 165)) &&  !twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 165))) ? ((((("data-toggle=\"tooltip\" title=\"" . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 165)) . " ") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 165)) . "\"")) : (""));
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 166);
                        echo "\" data-maximum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "maximum", [], "any", false, false, false, 166);
                        echo "\" data-prefix=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 166);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 166);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 166)) ? ("disabled=\"disabled\"") : (""));
                        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 167
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 167)) {
                            // line 168
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 168);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                            echo " ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168)) ? (((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 168) . "") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168))) : (""));
                            echo "\" data-type=\"product\" data-thumb=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "small", [], "any", false, false, false, 168);
                            echo "\" data-full=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "full", [], "any", false, false, false, 168);
                            echo "\" class=\"option__img\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 170
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option__name\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 170);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "checkbox")) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 178)) ? ("required") : (""));
                    echo " option__group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 179
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 179)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 181));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__item ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 182)) ? ("ended") : (""));
                        echo "\" ";
                        echo ((((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182) &&  !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 182)) &&  !twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 182))) ? ((((("data-toggle=\"tooltip\" title=\"" . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 182)) . " ") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182)) . "\"")) : (""));
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 183);
                        echo "\" data-maximum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "maximum", [], "any", false, false, false, 183);
                        echo "\" data-prefix=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 183);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 183);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 183)) ? ("disabled=\"disabled\"") : (""));
                        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 184
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 184)) {
                            // line 185
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 185);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 185);
                            echo " ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185)) ? (((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185) . "") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185))) : (""));
                            echo "\" data-type=\"product\" data-thumb=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "small", [], "any", false, false, false, 185);
                            echo "\" data-full=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "full", [], "any", false, false, false, 185);
                            echo "\" class=\"option__img\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"option__name\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 187);
                            echo " ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) ? ((((("(" . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187)) . "") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) . ")")) : (""));
                            echo "</span> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option__name\">";
                            // line 188
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 190
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 195
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 195) == "text")) {
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 196)) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 197)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 197);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 198);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "textarea")) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 202)) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 203)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 204);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 207) == "file")) {
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 208)) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 209
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 209)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 209);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 214) == "date")) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 215)) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 216)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 216);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 218);
                    echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
                    echo ($context["datepicker"] ?? null);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) == "datetime")) {
                    // line 224
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 225)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 227);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" data-locale=\"";
                    echo ($context["datepicker"] ?? null);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 232) == "time")) {
                    // line 233
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 233)) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 234);
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 234);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 236);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 241
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t\t\t\t<div class=\"sizechart-gn\">
\t\t\t\t\t\t\t<div class=\"buttons-size\">
\t<button type=\"button\" class=\"btn bsize btn-block\" data-toggle=\"modal\" data-target=\"#SizeChartModal\">";
        // line 246
        echo ($context["sizechart_title"] ?? null);
        echo "</button>
</div>
<div id=\"SizeChartModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 253
        echo ($context["sizechart_title"] ?? null);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
\t\t\t";
        // line 256
        if ((($context["sizechart_description"] ?? null) && (($context["sizechart_description"] ?? null) != "<p><br></p>"))) {
            // line 257
            echo "\t\t\t\t";
            echo ($context["sizechart_description"] ?? null);
            echo "
\t\t\t";
        }
        // line 259
        echo "\t\t\t";
        if (($context["sizechart_rows"] ?? null)) {
            // line 260
            echo "\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 263
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sizechart_rows"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["sizechart_column"]) {
                // line 264
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
                // line 265
                $context["i"] = 1;
                // line 266
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sizechart_column"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sizechart_value"]) {
                    // line 267
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["key"] == "0")) {
                        // line 268
                        echo "\t\t\t\t\t\t\t\t\t<th class=\"";
                        if ((twig_length_filter($this->env, $context["sizechart_column"]) == ($context["i"] ?? null))) {
                            echo "text-right";
                        } else {
                            echo "text-left";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sizechart_value"], "value", [], "any", false, false, false, 268);
                        echo "</th>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 270
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"";
                        if ((twig_length_filter($this->env, $context["sizechart_column"]) == ($context["i"] ?? null))) {
                            echo "text-right";
                        } else {
                            echo "text-left";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sizechart_value"], "value", [], "any", false, false, false, 270);
                        echo "</td>
\t\t\t\t\t\t\t\t";
                    }
                    // line 272
                    echo "\t\t\t\t\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 273
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sizechart_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sizechart_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t";
        }
        // line 280
        echo "\t\t</div>
    </div>
   </div>
  </div>
</div>



\t\t\t\t\t\t\t";
        // line 288
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity_indicator", [], "any", false, false, false, 288)) {
            // line 289
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/product/product.twig", 289)->display($context);
            // line 290
            echo "\t\t\t\t\t\t\t";
        }
        // line 291
        echo "\t\t\t\t\t\t\t <div class=\"product-about__block ng-star-inserted\">
\t\t\t\t\t\t\t     ";
        // line 292
        if (($context["price"] ?? null)) {
            // line 293
            echo "\t\t\t\t\t\t\t<div class=\"product-page__lxn\">
\t\t\t\t\t\t\t\t<div class=\"product-page__price price\" data-price=\"";
            // line 294
            echo ($context["price_value"] ?? null);
            echo "\" data-special=\"";
            echo ($context["special_value"] ?? null);
            echo "\" data-discount=\"";
            echo ($context["discounts_value"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 295
            if (($context["special"] ?? null)) {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span><span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 298
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo ($context["price"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 300
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--";
            // line 302
            if (($context["tax"] ?? null)) {
                echo "<div class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>";
            }
            echo "-->
\t\t\t\t\t\t\t";
        }
        // line 304
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 306
        if (($context["price"] ?? null)) {
            // line 307
            echo "\t\t\t\t\t\t\t\t<div class=\"product-buttons\">
\t\t\t\t\t\t\t\t<div class=\"product-page__cart ";
            // line 308
            echo ((twig_test_empty(($context["quick_order_icon"] ?? null))) ? ("row-flex") : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 309
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
            // line 310
            $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/product/product.twig", 310)->display($context);
            // line 311
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-page__add-to-cart add_to_cart btn btn-xl ";
            echo ($context["cart_btn_class"] ?? null);
            echo "\" data-pid=\"";
            echo ($context["product_id"] ?? null);
            echo "\" id=\"button-cart\"><i class=\"fal fa-cart-shopping\"></i><span>";
            echo ($context["cart_btn_text"] ?? null);
            echo "</span></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-page__quick-order quick-order btn btn-lg btn-xl ";
            // line 312
            echo ((twig_test_empty(($context["quick_order"] ?? null))) ? ("hidden") : (""));
            echo "\" ";
            echo ((twig_test_empty(($context["show_quick_order_text_product"] ?? null))) ? ("data-toggle=\"tooltip\"") : (""));
            echo " title=\"";
            echo ($context["quick_order_title"] ?? null);
            echo "\" onclick=\"quick_order('";
            echo ($context["product_id"] ?? null);
            echo "', true);\"><i class=\"fa fa-paper-plane\"></i>";
            if (($context["show_quick_order_text_product"] ?? null)) {
                echo "<span>";
                echo ($context["quick_order_title"] ?? null);
                echo "</span>";
            }
            echo "</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 315
            if ( !($context["wishlist_btn_disabled"] ?? null)) {
                // line 316
                echo "\t\t\t\t\t\t\t\t<div class=\"product-buttons__item product-buttons__item--actions\">
\t\t\t\t\t\t\t\t<div class=\"product-actions ng-star-inserted\">
\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 318
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add(";
                echo ($context["product_id"] ?? null);
                echo ");\" class=\"product-page__wishlist-btn wishlist\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t\t\t";
            if ( !($context["compare_btn_disabled"] ?? null)) {
                // line 321
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add(";
                echo ($context["product_id"] ?? null);
                echo ");\" class=\"product-page__compare-btn compare\"><i class=\"fa fa-balance-scale\"></i></button>
                                    </div>
                                </div>
                            </div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 326
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 327
            if ((($context["minimum"] ?? null) > 1)) {
                echo "<div class=\"product-page__minimum\"><i class=\"fa fa-info-circle\"></i> ";
                echo ($context["text_minimum"] ?? null);
                echo "</div>";
            }
            // line 328
            echo "\t\t\t\t\t\t\t";
        }
        // line 329
        echo "                             </div>
                             
                             
                             ";
        // line 332
        if ((($context["reward"] ?? null) && ((($context["show_reward"] ?? null) == 1) || (($context["show_reward"] ?? null) == 3)))) {
            // line 333
            echo "\t\t\t\t\t\t\t\t\t<div class=\"produc-data__item reward\">
\t\t\t\t\t\t\t\t  <div class=\"prodrew-data__item\">
\t\t\t\t\t\t\t\t  <i class=\"produc-banner__icon fa fa-piggy-bank fa-fw\"></i></div>
\t\t\t\t\t\t\t\t\t    <div class=\"produc-data__item-div\">";
            // line 336
            echo ($context["reward"] ?? null);
            echo "<span>";
            echo ($context["text_reward_bonus"] ?? null);
            echo "</span></div></div>
\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t";
        }
        // line 339
        echo "\t\t\t\t\t\t\t\t";
        if ((($context["points"] ?? null) && ((($context["show_reward"] ?? null) == 2) || (($context["show_reward"] ?? null) == 3)))) {
            // line 340
            echo "\t\t\t\t\t\t\t\t\t<div class=\"produc-data__item points\"><div class=\"produc-data__item-div\">";
            echo ($context["points"] ?? null);
            echo "</div> ";
            echo ($context["text_points"] ?? null);
            echo " ₴ на рахунок у разі купівлі</div>
\t\t\t\t\t\t\t\t";
        }
        // line 342
        echo "\t\t\t\t\t\t\t";
        if (($context["discounts"] ?? null)) {
            // line 343
            echo "\t\t\t\t\t\t\t<div class=\"discount-rxn\">
\t\t\t\t\t\t\t\t\t<h5 class=\"discount-lxn\"><span>";
            // line 344
            echo ($context["text_new_discount"] ?? null);
            echo "</span></h5>
\t\t\t\t\t\t\t\t\t<div class=\"product-page__discount\">
\t\t\t\t\t\t\t\t\t\t";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-page__discount-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 347);
                echo " ";
                echo ($context["text_discount"] ?? null);
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 347);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 352
        echo "\t\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 353
            echo "\t\t\t\t\t\t\t\t<h3>";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 356
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 357
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 358
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 358);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 358);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 364
        echo "\t\t\t\t\t\t\t<div class=\"delivery-inner\">
\t\t\t\t\t\t\t<div class=\"delivery-methods\">Доставка</div>
                              <div class=\"delivery-city-ua\">
                            <div class=\"delivery-methods__item\">
                                <i class=\"product-delivery__icon lx-icon fal fa-store-alt\"></i>
                        <div class=\"product-delivery__type\">";
        // line 369
        echo ($context["text_dec_mail"] ?? null);
        echo "</div>
                        <lx-delivery-cost class=\"product-delivery__coast\"><p>";
        // line 370
        echo ($context["text_dec_drive"] ?? null);
        echo "</p></div>
                          <div class=\"delivery-methods__item\">
                              <span class=\"delivery-methods__icon\">
                              <i class=\"product-delivery__icon fal fa-box-circle-check\"></i>
                        </span>
                        <div class=\"product-delivery__type\">";
        // line 375
        echo ($context["text_dec_peple"] ?? null);
        echo "<p class=\"product-delivery__caption\">";
        echo ($context["text_dec_bran"] ?? null);
        echo "</p></div><lx-delivery-cost class=\"product-delivery__coast\"><p>";
        echo ($context["text_dec_drive"] ?? null);
        echo "</p></div>
                             </div>
                           </div>
\t\t\t\t\t\t\t";
        // line 378
        if (($context["textblock"] ?? null)) {
            // line 379
            echo "\t\t\t\t\t\t\t\t<div class=\"product-page__textblock\"><div class=\"product-page__textblock-inner\">";
            echo ($context["textblock"] ?? null);
            echo "</div></div>
\t\t\t\t\t\t\t";
        }
        // line 381
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t\t\t\t<!--";
        // line 382
        if ((($context["show_attr"] ?? null) && ($context["attribute_groups"] ?? null))) {
            // line 383
            echo "\t\t\t\t\t\t\t\t<div class=\"product-page__short-attribute product-data\">
\t\t\t\t\t\t\t\t\t";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["attribute_group"]) {
                // line 385
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($context["key"] < ($context["show_attr_group"] ?? null))) {
                    // line 386
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 386));
                    foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                        // line 387
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["key"] < ($context["show_attr_item"] ?? null))) {
                            // line 388
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-data__item\"><div class=\"product-data__item-div\">";
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 388);
                            echo "</div>";
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 388);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 390
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 392
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"product-page__more-attr\" onclick=\"\$('a[href=\\'#tab-specification\\']').click(); uniScrollTo('#tab-specification'); return false;\">";
            // line 394
            echo ($context["text_all_attributes"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        // line 395
        echo "-->
\t\t\t\t\t\t\t";
        // line 396
        if (($context["socialbutton"] ?? null)) {
            // line 397
            echo "\t\t\t\t\t\t\t\t<div class=\"product-page__share\">
\t\t\t\t\t\t\t\t\t<div id=\"goodshare\" data-socials=\"";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["socialbutton"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["social"]) {
                echo $context["social"];
                echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["socialbutton"] ?? null)))) ? (",") : (""));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 401
        echo "\t\t\t\t\t\t\t";
        if ((($context["product_banners"] ?? null) && (($context["product_banner_position"] ?? null) == 2))) {
            // line 402
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("unishop2/template/extension/module/uni_product_banner.twig", "unishop2/template/product/product.twig", 402)->display($context);
            // line 403
            echo "\t\t\t\t\t\t\t";
        }
        // line 404
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 407
        if ((($context["product_banners"] ?? null) && (($context["product_banner_position"] ?? null) == 1))) {
            // line 408
            echo "\t\t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-2\">
\t\t\t\t\t\t";
            // line 409
            $this->loadTemplate("unishop2/template/extension/module/uni_product_banner.twig", "unishop2/template/product/product.twig", 409)->display($context);
            // line 410
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 412
        echo "\t\t\t</div>
\t\t\t";
        // line 413
        if ((($context["product_banners"] ?? null) && (($context["product_banner_position"] ?? null) == 3))) {
            // line 414
            echo "\t\t\t\t";
            $this->loadTemplate("unishop2/template/extension/module/uni_product_banner.twig", "unishop2/template/product/product.twig", 414)->display($context);
            // line 415
            echo "\t\t\t";
        }
        // line 416
        echo "\t\t\t";
        if ((($context["manufacturer_descr"] ?? null) && ($context["manufacturer_position"] ?? null))) {
            // line 417
            echo "\t\t\t\t<div class=\"product-manuf\">
\t\t\t\t\t";
            // line 418
            if (twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "image", [], "any", false, false, false, 418)) {
                // line 419
                echo "\t\t\t\t\t\t<div class=\"product-manuf__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 420
                echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "image", [], "any", false, false, false, 420);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "name", [], "any", false, false, false, 420);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 423
            echo "\t\t\t\t\t\t<h4 class=\"product-manuf__name\">";
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "name", [], "any", false, false, false, 423);
            echo "</h4>
\t\t\t\t\t\t";
            // line 424
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "description", [], "any", false, false, false, 424);
            echo "... <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "href", [], "any", false, false, false, 424);
            echo "\" title=\"\" >";
            echo ($context["text_manufacturer_more"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        }
        // line 428
        echo "\t\t\t<script>
\t\t\t\tfunction uniPPI() {
\t\t\t\t\tconst parentBlock = '.product-page__image',
\t\t\t\t\t\t  mainImgBlock = '.product-page__image-main',
\t\t\t\t\t\t  mainCarousel = '.product-page__image-main-carousel',
\t\t\t\t\t\t  mainImg = '.product-page__image-main-img',
\t\t\t\t\t\t  additCarousel = '.product-page__image-addit',
\t\t\t\t\t\t  additImg = '.product-page__image-addit-img',
\t\t\t\t\t\t  navText = ['<i class=\"fa fa-chevron-left\"></i>', '<i class=\"fa fa-chevron-right\"></i>'];
\t\t\t\t
\t\t\t\t\tlet createCarousel = () => {
\t\t\t\t\t\tif(\$(additCarousel).length) {
\t\t\t\t\t\t\t\$(mainCarousel).addClass('owl-carousel').owlCarousel({
\t\t\t\t\t\t\t\titems: 1,
\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\tnavText: navText,
\t\t\t\t\t\t\t\tonDragged: function (event) {
\t\t\t\t\t\t\t\t\tconst indx = parseInt(event.item.index); \$(additCarousel).trigger('to.owl.carousel', [indx]); imgDataReplace(indx);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tonTranslated: function (event) {
\t\t\t\t\t\t\t\t\timgDataReplace(parseInt(event.item.index));
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t});
\t\t\t\t
\t\t\t\t\t\t\t\$(additCarousel).owlCarousel({
\t\t\t\t\t\t\t\tresponsive: {0:{items:5}, 450:{items:6}, 650:{items:8}, 1050:{items:15}, 1600:{items:20}},
\t\t\t\t\t\t\t\tresponsiveBaseElement: \$(additCarousel),
\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\tmouseDrag: false,
\t\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\t\tnavText: navText,
\t\t\t\t\t\t\t\tonRefreshed: function(event) {
\t\t\t\t\t\t\t\t\tif (typeof(getPoipProduct) === 'function') {
\t\t\t\t\t\t\t\t\t\tlet html = '';
\t\t\t\t\t\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\t\t\t\t\t\t\$(additImg).each(function() {
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<a class=\"product-page__image-main-a\" href=\"'+\$(this).data('full')+'\" title=\"'+\$(this).attr('alt')+'\">';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<img src=\"'+\$(this).data('thumb')+'\" alt=\"'+\$(this).attr('alt')+'\" class=\"img-responsive\">';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\$(mainCarousel).trigger('replace.owl.carousel', html).trigger('refresh.owl.carousel').trigger('to.owl.carousel', [0, 250]);
\t\t\t\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tcreateCarousel();
\t\t\t\t\t
\t\t\t\t\tlet refreshCarousel = () => {
\t\t\t\t\t\t\$(mainCarousel+', '+additCarousel).trigger('refresh.owl.carousel');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tlet removePreloader = () => {
\t\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\t\t\$(mainImg).css({'opacity': 1});
\t\t\t\t\t\t\t\$('.preloader').remove();
\t\t\t\t\t\t}, 250);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tlet imgDataReplace = (indx) => {
\t\t\t\t\t\t\$(additImg).removeClass('selected');
\t\t\t\t\t\t\$('.addit-img-'+indx).addClass('selected');
\t\t\t\t\t\t
\t\t\t\t\t\tif(indx == 0 && !\$(parentBlock).hasClass('fixed')) {
\t\t\t\t\t\t\t\$(mainImg).first().attr('src', \$('.addit-img-'+indx).data('thumb'));
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tlet observer = new MutationObserver((e) => {
\t\t\t\t\t\tcreateCarousel();
\t\t\t\t\t});

\t\t\t\t\tobserver.observe(\$(parentBlock)[0], {childList:true});
\t\t\t\t\t
\t\t\t\t\t\$('body').on('click mouseover', additImg, function() {
\t\t\t\t\t\t\$(mainCarousel).trigger('to.owl.carousel', [parseFloat(\$(this).parent().index()), 250]);
\t\t\t\t\t\timgDataReplace(\$(this).parent().index())
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tlet imgOpenPopup = () => {
\t\t\t\t\t\tif(\$('.product-page__image-product-name').length) return;
\t\t\t\t\t\t
\t\t\t\t\t\t\$(parentBlock).addClass('fixed').prepend('<div class=\"product-page__image-product-name\"><div class=product-page__image-product-name-title>'+\$('.breadcrumb-h1 h1').text()+'</div> <i class=\"product-page__image-close fas fa-times\"></i></div>');
\t\t\t\t\t\t\$(mainImgBlock).prepend('<div class=\"preloader\"></div>');

\t\t\t\t\t\t\$(mainImg).each(function() {
\t\t\t\t\t\t\t\$(this).parent().css('background-image', 'url(\"'+\$(this).data('full')+'\")');
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\trefreshCarousel();
\t\t\t\t\t\tremovePreloader();
\t\t\t\t\t\t
\t\t\t\t\t\t\$('body').addClass('scroll-disabled2');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t\$('body').on('click', parentBlock+':not(.fixed) '+mainImg, () => {
\t\t\t\t\t\timgOpenPopup();
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('body').on('click', parentBlock+' .icon-play-large', function(e) {
\t\t\t\t\t\timgOpenPopup();
\t\t\t\t\t\t\$(this).html('<iframe id=\"ytplayer\" type=\"text/html\" src=\"'+\$(this).prev().data('video')+'?autoplay=1\" width=\"100%\" height=\"100%\" frameborder=\"0\" autoplay=\"1\"/>');
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('body').on('click', '.product-page__image-close', function(e) {
\t\t\t\t\t\t\$('.product-page__image-product-name').remove();
\t\t\t\t\t\t
\t\t\t\t\t\t\$(mainCarousel+', '+mainCarousel+' .owl-item').css({'height': ''});
\t\t\t\t\t\t
\t\t\t\t\t\t\$(mainImg).each(function() {
\t\t\t\t\t\t\t\$(this).parent().css('background-image', '');
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$(parentBlock).find('iframe').remove();
\t\t\t\t\t\t\$(parentBlock).removeClass('fixed');

\t\t\t\t\t\trefreshCarousel();
\t\t\t\t\t\t
\t\t\t\t\t\t\$('body').removeClass('scroll-disabled2');
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('body').on('keydown', (e) => {
\t\t\t\t\t\tif (e.keyCode == 37) \$(mainCarousel).trigger('prev.owl.carousel');
\t\t\t\t\t\tif (e.keyCode == 39) \$(mainCarousel).trigger('next.owl.carousel');
\t\t\t\t\t\tif (e.keyCode == 27) \$('.product-page__image-close').click();
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tlet y = 0, y2 = 0;
\t\t\t\t\t
\t\t\t\t\t\$('body').on('wheel', parentBlock+'.fixed '+mainImgBlock, (e) => {
\t\t\t\t\t\ty += e.originalEvent.deltaY;
\t\t\t\t\t
\t\t\t\t\t\tif (y > y2) {
\t\t\t\t\t\t\t\$(mainCarousel).trigger('next.owl.carousel');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(mainCarousel).trigger('prev.owl.carousel');
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\ty2 += e.originalEvent.deltaY;
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t";
        // line 573
        if (($context["change_opt_img_p"] ?? null)) {
            // line 574
            echo "\t\t\t\t\t\t\$('.product-page .option__item input').on('click', function() {
\t\t\t\t\t\t\t\$(mainCarousel).trigger('to.owl.carousel', [0, 250]);
\t\t\t\t\t\t\t\$(mainImg).first().attr('src', \$(this).next().data('thumb'));
\t\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 579
        echo "\t\t\t\t}
\t\t\t\t
\t\t\t\tuniPPI();
\t\t\t</script>
\t\t\t
\t\t\t<div class=\"hidden-xs hidden-sm\" style=\"height:20px\"></div>
\t\t\t<div>
\t\t\t<ul class=\"product-page-tabs nav nav-tabs\">
\t\t\t\t";
        // line 587
        if (($context["description"] ?? null)) {
            // line 588
            echo "\t\t\t\t\t<li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
            echo ($context["tab_description"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 590
        echo "\t\t\t\t";
        if (($context["attribute_groups"] ?? null)) {
            // line 591
            echo "\t\t\t\t\t<li ";
            echo ((twig_test_empty(($context["description"] ?? null))) ? ("class=\"active\"") : (""));
            echo "><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 593
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 594
            echo "\t\t\t\t\t<li><a href=\"#tab-review\" class=\"tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo " <span class=\"uni-badge\">";
            echo ($context["review_total"] ?? null);
            echo "</span></a></li>
\t\t\t\t";
        }
        // line 596
        echo "\t\t\t\t";
        if (($context["uni_product_tabs"] ?? null)) {
            // line 597
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["uni_product_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 598
                echo "\t\t\t\t\t\t<li><a href=\"#tab-";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 598);
                echo "\" class=\"tab-";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 598);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 598);
                echo " <span class=\"uni-badge hidden\"></span></a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 600
            echo "\t\t\t\t";
        }
        // line 601
        echo "\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t";
        // line 603
        if (($context["description"] ?? null)) {
            // line 604
            echo "\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
            echo ($context["description"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 606
        echo "\t\t\t\t";
        if (($context["attribute_groups"] ?? null)) {
            // line 607
            echo "\t\t\t\t\t<div class=\"tab-pane ";
            echo ((twig_test_empty(($context["description"] ?? null))) ? ("active") : (""));
            echo "\" id=\"tab-specification\">
\t\t\t\t\t\t";
            // line 608
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 609
                echo "\t\t\t\t\t\t\t<h4 class=\"heading\">";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 609);
                echo "</h4>
\t\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t\t";
                // line 611
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 611));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 612
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-data__item-div\">";
                    // line 613
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 613);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-data__item-div\">";
                    // line 614
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 614);
                    echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 617
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 619
            echo "\t\t\t\t\t\t";
            if ((($context["show_length"] ?? null) > 1)) {
                // line 620
                echo "\t\t\t\t\t\t\t<h4 class=\"heading\"><span>";
                echo ($context["entry_length_weigth"] ?? null);
                echo "</span></h4>
\t\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t\t";
                // line 622
                if (($context["length"] ?? null)) {
                    // line 623
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item length\"><div class=\"product-data__item-div\">";
                    echo ($context["text_length"] ?? null);
                    echo "</div> ";
                    echo ($context["length"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 625
                echo "\t\t\t\t\t\t\t\t";
                if (($context["weight"] ?? null)) {
                    // line 626
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item weight\"><div class=\"product-data__item-div\">";
                    echo ($context["text_weight"] ?? null);
                    echo "</div> ";
                    echo ($context["weight"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 628
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 630
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 632
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 633
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t<div class=\"review-info\">
\t\t\t\t\t\t\t<div class=\"review-info__total\">";
            // line 635
            echo ($context["text_review_total"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"review-info__score hidden-xs\">";
            // line 636
            echo ($context["text_review_score"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"review-info__rating rating hidden-xs\">
\t\t\t\t\t\t\t\t";
            // line 638
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 639
                echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                echo (((($context["rating"] ?? null) < $context["i"])) ? ("far") : ("fa"));
                echo " fa-star\"></i>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 641
            echo "\t\t\t\t\t\t\t\t</div><span class=\"pen\"><i class=\"fas fa-pencil-alt\"></i></span>...
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-primary\" onclick=\"\$('.review-form-wrapper').collapse('toggle');\">";
            // line 642
            echo ($context["text_write"] ?? null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"review-form-wrapper collapse\">
\t\t\t\t\t\t<form class=\"review-form form-horizontal uni-form\" id=\"form-review\">
\t\t\t\t\t\t\t";
            // line 646
            if (($context["review_guest"] ?? null)) {
                // line 647
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
                // line 648
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 650
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 653
                if (($context["show_plus_minus_review"] ?? null)) {
                    // line 654
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo ((($context["plus_minus_review_required"] ?? null)) ? ("required") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-review-plus\">";
                    // line 655
                    echo ($context["entry_plus"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"plus\" rows=\"5\" id=\"input-review-plus\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    // line 660
                    echo ((($context["plus_minus_review_required"] ?? null)) ? ("required") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-review-minus\">";
                    // line 661
                    echo ($context["entry_minus"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"minus\" rows=\"5\" id=\"input-review-minus\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 667
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"plus\" value=\"\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"minus\" value=\"\" />
\t\t\t\t\t\t\t\t";
                }
                // line 670
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-review\">";
                // line 671
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"help-block\"><small>";
                // line 674
                echo ($context["text_note"] ?? null);
                echo "</small></div> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 678
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t";
                // line 680
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 681
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"";
                    echo $context["i"];
                    echo "\" class=\"review-form__input\" />
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 683
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"review-form__stars rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 684
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 685
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"review-form__star far fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 687
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 690
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 691
                if (($context["text_agree"] ?? null)) {
                    // line 692
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 hidden-xs\"></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\"><input type=\"checkbox\" name=\"agree\" value=\"1\" /><span>";
                    // line 695
                    echo ($context["text_agree"] ?? null);
                    echo "</span></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 699
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 hidden-xs\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 702
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"review-form__btn btn btn-lg btn-primary\">";
                echo ($context["add_new_review"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 706
                echo "\t\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 708
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"review\">";
            // line 710
            echo ($context["uni_reviews"] ?? null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 713
        echo "\t\t\t\t";
        if (($context["uni_product_tabs"] ?? null)) {
            // line 714
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["uni_product_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 715
                echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 715);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "description", [], "any", false, false, false, 715);
                echo "</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 717
            echo "\t\t\t\t";
        }
        // line 718
        echo "\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\" style=\"margin:0 0 40px\"></div>
\t\t\t";
        // line 721
        if (($context["tags"] ?? null)) {
            // line 722
            echo "\t\t\t\t<div class=\"product-tag\">
\t\t\t\t\t";
            // line 723
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["tag"]) {
                // line 724
                echo "\t\t\t\t\t\t<a class=\"product-tag__item uni-href\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 724);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 724);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 724);
                echo "</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 726
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 728
        echo "\t\t\t";
        if ((($context["manufacturer_descr"] ?? null) &&  !($context["manufacturer_position"] ?? null))) {
            // line 729
            echo "\t\t\t\t<div class=\"product-manuf\">
\t\t\t\t\t";
            // line 730
            if (twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "image", [], "any", false, false, false, 730)) {
                // line 731
                echo "\t\t\t\t\t\t<div class=\"product-manuf__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 732
                echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "image", [], "any", false, false, false, 732);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "name", [], "any", false, false, false, 732);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 735
            echo "\t\t\t\t\t\t<h4 class=\"product-manuf__name\">";
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "name", [], "any", false, false, false, 735);
            echo "</h4>
\t\t\t\t\t\t";
            // line 736
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "description", [], "any", false, false, false, 736);
            echo "... <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer_descr"] ?? null), "href", [], "any", false, false, false, 736);
            echo "\" title=\"\" >";
            echo ($context["text_manufacturer_more"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        }
        // line 740
        echo "\t\t\t</div>
\t\t\t";
        // line 741
        if (($context["products"] ?? null)) {
            // line 742
            echo "\t\t\t\t";
            $context["rating_type"] = ($context["rating_type_catalog"] ?? null);
            // line 743
            echo "\t\t\t\t<div class=\"heading\">";
            echo ($context["text_related"] ?? null);
            echo "</div>
\t\t\t\t<div class=\"uni-module product-related\">
\t\t\t\t\t<div class=\"uni-module__wrapper\">
\t\t\t\t\t\t";
            // line 746
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
                // line 747
                echo "\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 748
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 748)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 748)) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 749
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/product.twig", 749)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 750
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 750);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 750);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 751
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 751);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 751)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 751)) . "\"")) : (""));
                echo " loading=\"lazy\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 751);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                // line 755
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 755);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 755);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 756
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 756)) ? ((((("<div class=\"product-thumb__model\" data-text=\"" . ($context["text_model"] ?? null)) . "\">") . twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 756)) . "</div>")) : (""));
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 757
                if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 757)) {
                    // line 758
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 758);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 760
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/product.twig", 760)->display($context);
                // line 761
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/product.twig", 761)->display($context);
                // line 762
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/product/product.twig", 762)->display($context);
                // line 763
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_rating_star.twig", "unishop2/template/product/product.twig", 763)->display($context);
                // line 764
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 764)) {
                    // line 765
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 765);
                    echo "\" data-special=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 765);
                    echo "\" data-discount=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 765);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 766
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 766)) {
                        // line 767
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 767);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 769
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 769);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 769);
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 771
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 772
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 772)) {
                        // line 773
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 773);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 775
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 776
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 776);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 777
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/product/product.twig", 777)->display($context);
                // line 778
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 778);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 778);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 778);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 778);
                echo ", this)\"><i class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_icon", [], "any", false, false, false, 778);
                echo "\"></i><span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 778);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__quick-order quick-order btn ";
                // line 779
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "quick_order", [], "any", false, false, false, 779))) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["quick_order_title"] ?? null);
                echo "\" aria-label=\"";
                echo ($context["quick_order_title"] ?? null);
                echo "\" onclick=\"quick_order('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 779);
                echo "');\"><i class=\"";
                echo ($context["quick_order_icon"] ?? null);
                echo "\"></i>";
                if (($context["show_quick_order_text"] ?? null)) {
                    echo "<span>";
                    echo ($context["quick_order_title"] ?? null);
                    echo "</span>";
                }
                echo "</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 780
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 780);
                echo "');\"><i class=\"far fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 781
                echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 781);
                echo "');\"><i class=\"fas fa-align-right\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
            // line 786
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script>
\t\t\t\t\t\$('.product-related').uniModules({
\t\t\t\t\t\ttype:'";
            // line 790
            echo ((array_key_exists("type_view", $context)) ? (($context["type_view"] ?? null)) : ("carousel"));
            echo "'
\t\t\t\t\t});
\t\t\t\t\t";
            // line 792
            if (($context["show_timer"] ?? null)) {
                // line 793
                echo "\t\t\t\t\t\t\$('.product-related .image').each(function() {
\t\t\t\t\t\t\tconst date = \$(this).data('special-end');
\t\t\t
\t\t\t\t\t\t\tif(date) {
\t\t\t\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\t\t\t\tdate  :''+date+'',
\t\t\t\t\t\t\t\t\ttexts :['";
                // line 799
                echo ($context["text_special_day"] ?? null);
                echo "','";
                echo ($context["text_special_hour"] ?? null);
                echo "','";
                echo ($context["text_special_min"] ?? null);
                echo "','";
                echo ($context["text_special_sec"] ?? null);
                echo "']
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t";
            }
            // line 804
            echo "\t\t\t\t</script>
\t\t\t\t<div style=\"height:10px;clear:both\"></div>
\t\t\t";
        }
        // line 807
        echo "\t\t\t\t
\t\t\t";
        // line 808
        echo ($context["auto_related"] ?? null);
        echo "
\t\t\t\t
\t\t\t";
        // line 810
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t<div class=\"home-banner row row-flex hidden-xs\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-3 hidden-xs\">
\t\t\t\t\t<div class=\"home-banner__item\">
\t\t\t\t\t<i class=\"home-banner__icon fal fa-shipping-fast fa-fw\"></i>
\t\t\t\t<div class=\"home-banner__text\">
\t\t\t<span class=\"home-banner__text-1 \">";
        // line 816
        echo ($context["text_fast_delivery"] ?? null);
        echo "</span>
\t\t\t\t\t";
        // line 817
        echo ($context["text_day_order"] ?? null);
        echo "
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-3 hidden-xs\">
\t\t\t\t\t\t\t\t\t<div class=\"home-banner__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"home-banner__icon fa fa-percent fa-fw\"></i>
\t\t\t\t\t\t\t\t<div class=\"home-banner__text\">
\t\t\t\t<span class=\"home-banner__text-1 \">";
        // line 825
        echo ($context["text_affordable_prices"] ?? null);
        echo "</span>";
        echo ($context["text_and_bonus_programs"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-3 hidden-xs\">
\t\t\t\t\t\t\t\t\t<div class=\"home-banner__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"home-banner__icon fa fa-wallet fa-fw\"></i>
\t\t\t\t\t\t\t\t<div class=\"home-banner__text\">
\t\t\t\t<span class=\"home-banner__text-1 \">";
        // line 833
        echo ($context["text_convenient_payment"] ?? null);
        echo "</span>";
        echo ($context["text_cash_or_card"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-3 hidden-xs\">
\t\t\t\t\t\t\t\t\t<div class=\"home-banner__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"home-banner__icon fa fa-shield-check fa-fw\"></i>
\t\t\t\t\t\t\t\t<div class=\"home-banner__text\">
\t\t\t\t<span class=\"home-banner__text-1 \">";
        // line 841
        echo ($context["text_return_guarantee"] ?? null);
        echo "</span>
\t\t\t\t\t";
        // line 842
        echo ($context["text_14_days"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t";
        // line 848
        echo "\t</div>
</div>
</div>
</body>
<script>
\t";
        // line 853
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "show_timer", [], "any", false, false, false, 853)) {
            // line 854
            echo "\t\t\$('.product-page__image-main').append('<div></div>').uniTimer({
\t\t\tdate :'";
            // line 855
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "show_timer", [], "any", false, false, false, 855);
            echo "',
\t\t\ttexts :['";
            // line 856
            echo ($context["text_special_day"] ?? null);
            echo "','";
            echo ($context["text_special_hour"] ?? null);
            echo "','";
            echo ($context["text_special_min"] ?? null);
            echo "','";
            echo ($context["text_special_sec"] ?? null);
            echo "']
\t\t});
\t";
        }
        // line 859
        echo "</script>
<script>
\tdataLayer.push({
\t\t'ecommerce':{
\t\t\t'currencyCode':'";
        // line 863
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "code", [], "any", false, false, false, 863);
        echo "',
\t\t\t'detail':{
\t\t\t\t'products':[{
\t\t\t\t\t'id': ";
        // line 866
        echo ($context["product_id"] ?? null);
        echo ", 
\t\t\t\t\t'name': \"";
        // line 867
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "name", [], "any", false, false, false, 867);
        echo "\", 
\t\t\t\t\t'brand': \"";
        // line 868
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "manufacturer", [], "any", false, false, false, 868);
        echo "\", 
\t\t\t\t\t'category': \"";
        // line 869
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "category", [], "any", false, false, false, 869);
        echo "\", 
\t\t\t\t\t'variant': '',
\t\t\t\t\t'price': ";
        // line 871
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "price", [], "any", false, false, false, 871);
        echo "
\t\t\t\t}]
\t\t\t}
\t\t}
\t});
\t
\tif (typeof(gtag) === 'function') {
\t\tgtag('event', 'view_item', {
\t\t\t\"items\": [{
\t\t\t\t'id': ";
        // line 880
        echo ($context["product_id"] ?? null);
        echo ", 
\t\t\t\t'name': \"";
        // line 881
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "name", [], "any", false, false, false, 881);
        echo "\", 
\t\t\t\t'brand': \"";
        // line 882
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "manufacturer", [], "any", false, false, false, 882);
        echo "\", 
\t\t\t\t'category': \"";
        // line 883
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "category", [], "any", false, false, false, 883);
        echo "\", 
\t\t\t\t'variant': '',
\t\t\t\t'price': ";
        // line 885
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "price", [], "any", false, false, false, 885);
        echo "
\t\t\t}]
\t\t});
\t}
\t
\t";
        // line 890
        if (((($context["options"] ?? null) && ($context["autosel_opt_first_value"] ?? null)) || ($context["tabs_is_scroll"] ?? null))) {
            // line 891
            echo "\t\t\$(function() {
\t\t\t";
            // line 892
            if ((($context["options"] ?? null) && ($context["autosel_opt_first_value"] ?? null))) {
                // line 893
                echo "\t\t\t\tlet timeout = 0, delay = 100;
\t\t
\t\t\t\t\$('.product-page .option .option__group').each(function() {
\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\t\$(this).find('select option').not(':disabled').not(':eq(0)').first().attr('selected', true).change();
\t\t\t\t\t\t\$(this).find('input[type=\"radio\"]').not(':disabled').first().attr('checked', true).change();
\t\t\t\t\t\t\$(this).find('input[type=\"checkbox\"]').not(':disabled').first().attr('checked', true).change();
\t\t\t\t\t}, timeout);
\t\t\t\t
\t\t\t\t\ttimeout = timeout + delay;
\t\t\t\t});
\t\t\t";
            }
            // line 905
            echo "\t\t\t";
            if (($context["tabs_is_scroll"] ?? null)) {
                // line 906
                echo "\t\t\t\tlet tabs = \$('.product-page-tabs'), parent = \$('.product-page-tabs').parent(), fly_menu_height = 0;
\t\t\t
\t\t\t\tif(\$(window).width() < 767) {
\t\t\t\t\tif(\$('.fly-menu:not(.bottom)').length) {
\t\t\t\t\t\t\$('.nav-tabs').css({top: \$('.fly-menu').height()});
\t\t\t\t\t\tfly_menu_height = \$('.fly-menu').height();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t
\t\t\t\ttabs.on('click', () => {
\t\t\t\t\tlet start_offset = parent.offset().top+1, new_offset = tabs.offset().top;
\t\t\t\t
\t\t\t\t\tif(new_offset > start_offset) {
\t\t\t\t\t\t\$('html, body').scrollTop(start_offset - fly_menu_height);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t";
            }
            // line 923
            echo "\t\t});
\t";
        }
        // line 925
        echo "\t
\t\$('html body').on('click', '#button-cart:not(.disabled)', function() {
\t\tconst div_class = '.product-page';
\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$(div_class+' input[type=\\'text\\'], '+div_class+' input[type=\\'hidden\\'], '+div_class+' input[type=\\'radio\\']:checked, '+div_class+' input[type=\\'checkbox\\']:checked, '+div_class+' select, '+div_class+' textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');
\t\t\t
\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar elem = \$('.option #input-option' + i.replace('_', '-')), elem2 = (elem.parent().hasClass('input-group')) ? elem.parent() : elem;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\telem2.after('<div class=\"text-danger\">'+json['error']['option'][i]+'</div>');
\t\t\t\t\t\t\t\$('.option .text-danger').delay(5000).fadeOut();
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tuniFlyAlert('danger', json['error']['option']);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\tuniFlyAlert('danger', json['error']['stock']);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tcart.uniCartUpd();
\t\t\t\t
\t\t\t\t\tif(uniJsVars.cart_add_after == 'popup') {
\t\t\t\t\t\tuniModalWindow('modal-cart', '', uniJsVars.modal_cart.text_heading, \$('header').find('.header-cart__dropdown').html());

\t\t\t\t\t\tif(uniJsVars.modal_cart.autohide) {
\t\t\t\t\t\t\tsetTimeout(() => { 
\t\t\t\t\t\t\t\t\$('#modal-cart').modal('hide');
\t\t\t\t\t\t\t}, uniJsVars.modal_cart.autohide_time * 1000);
\t\t\t\t\t\t}
\t\t\t\t\t} else if (uniJsVars.cart_add_after == 'redirect') {
\t\t\t\t\t\twindow.location = \$('base').attr('href')+'index.php?route=checkout/cart';
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tdataLayer.push({
\t\t\t\t\t\t'ecommerce':{
\t\t\t\t\t\t\t'currencyCode':'";
        // line 976
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "code", [], "any", false, false, false, 976);
        echo "',
\t\t\t\t\t\t\t'add':{
\t\t\t\t\t\t\t\t'products':[json['products']]
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (typeof(gtag) === \"function\") {
\t\t\t\t\t\tgtag('event', 'add_to_cart', {\"items\": [json['products']]});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(uniJsVars.cart_btn.metric_id && uniJsVars.cart_btn.metric_target) {
\t\t\t\t\t\tif (typeof(ym) === \"function\") {
\t\t\t\t\t\t\tym(uniJsVars.cart_btn.metric_id, 'reachGoal', uniJsVars.cart_btn.metric_target);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tnew Function('yaCounter'+uniJsVars.cart_btn.metric_id+'.reachGoal(\\''+uniJsVars.cart_btn.metric_target+'\\')')();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(uniJsVars.cart_btn.analytic_category && uniJsVars.cart_btn.analytic_action) {
\t\t\t\t\t\tif (typeof(gtag) === \"function\") {
\t\t\t\t\t\t\tgtag('event', uniJsVars.cart_btn.analytic_action, {'event_category': uniJsVars.cart_btn.analytic_category});
\t\t\t\t\t\t} else if (typeof(ga) === \"function\") {
\t\t\t\t\t\t\tga('send', 'event', uniJsVars.cart_btn.analytic_category, uniJsVars.cart_btn.analytic_action);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}\t\t
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t
\tif(\$('button[id^=\\'button-upload\\']').length) {
\t\t\$('button[id^=\\'button-upload\\']').on('click', function() {
\t\t\tvar node = this;

\t\t\t\$('#form-upload').remove();

\t\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\t\tif (typeof timer != 'undefined') {
\t\t\t\tclearInterval(timer);
\t\t\t}

\t\t\ttimer = setInterval(() => {
\t\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\t\tclearInterval(timer);

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\t\tcache: false,
\t\t\t\t\t\tcontentType: false,
\t\t\t\t\t\tprocessData: false,
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\t\tif (json['error']) \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');

\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t\t\t\$(node).parent().find('input').attr('value', json['code']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}, 500);
\t\t});
\t}

\t\$('#button-review').on('click', () => {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 1063
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#form-review').serialize(),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#form-review').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> '+json['success']+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\$('#form-review input, #form-review textarea').val('');
\t\t\t\t\t\$('.review_star input').attr('checked', false).prop('checked', false);
\t\t\t\t\t\$('#form-review').slideToggle();
\t\t\t\t\t
\t\t\t\t\tuniScrollTo('.alert.alert-success');
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
\t\$('.review-form__input').on('mouseenter', function () {
\t\t\$('.review-form__star:lt('+\$(this).val()+')').removeClass('far').addClass('fa');
\t\t
\t\t\$(this).on('mouseleave', () => {
\t\t\t\$('.review-form__star').removeClass('fa').addClass('far');
\t\t
\t\t\t\$('.review-form__input').each(function() {
\t\t\t\tif(\$(this).prop('checked')) {
\t\t\t\t\t\$('.review-form__star:lt('+\$(this).val()+')').removeClass('far').addClass('fa');
\t\t\t\t}
\t\t\t});
\t\t});
\t});

\t\$('.review-form__input').on('click', function(){
\t\t\$('.review-form__star:not(:lt('+\$(this).val()+'))').removeClass('fa').addClass('far');
\t});
\t
\t";
        // line 1108
        if (($context["recurrings"] ?? null)) {
            echo "\t\t
\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\t\ttype: 'post',
\t\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#recurring-description').html('');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t";
        }
        // line 1128
        echo "
\tvar hash = window.location.hash;

\tif (hash) {
\t\t\$('.nav-tabs a').each(function() {
\t\t\tif (hash == \$(this).attr('href')) {
\t\t\t\t\$(\$(this)).trigger('click');
\t\t\t\tuniScrollTo(hash);
\t\t\t}
\t\t});
\t
\t\tvar hashpart = hash.split('#'), vals = hashpart[1].split('-'), elem = \$('.product-page .option');
\t\t\t
\t\tfor (i=0; i < vals.length; i++) {\t\t\t
\t\t\telem.find('select option[value=\"'+vals[i]+'\"]').attr('selected', true).trigger('select');
\t\t\telem.find('input[type=\"radio\"][value=\"'+vals[i]+'\"]').attr('checked', true).prop('checked', true).change();
\t\t\telem.find('input[type=\"checkbox\"][value=\"'+vals[i]+'\"]').attr('checked', true).prop('checked', true).change();
\t\t}
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 1153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 1154
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 1156
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 1157
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 1157), ["\"" => "", "&quot;" => "", "
" => ""])));
            echo "\",
\t\t\t\"item\": \"";
            // line 1158
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 1158);
            echo "\"
\t\t\t";
            // line 1159
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1161
        echo "\t\t]
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"https://schema.org\",
\t\t\"@type\": \"Product\",
\t\t\"name\": \"";
        // line 1168
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "name", [], "any", false, false, false, 1168);
        echo "\",
\t\t\"category\": \"";
        // line 1169
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "category", [], "any", false, false, false, 1169);
        echo "\",
\t\t\"image\": [\"";
        // line 1170
        echo ($context["popup"] ?? null);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            echo (((($context["i"] + 1) <= twig_length_filter($this->env, ($context["images"] ?? null)))) ? (",") : (""));
            echo " \"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 1170);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
\t\t";
        // line 1171
        if (twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "manufacturer", [], "any", false, false, false, 1171)) {
            // line 1172
            echo "\t\t\"brand\": {
\t\t\t\"@type\": \"Brand\",
\t\t\t\"name\": \"";
            // line 1174
            echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "manufacturer", [], "any", false, false, false, 1174);
            echo "\"
\t\t},
\t\t\"manufacturer\": \"";
            // line 1176
            echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "manufacturer", [], "any", false, false, false, 1176);
            echo "\",
\t\t";
        }
        // line 1178
        echo "\t\t\"model\": \"";
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "model", [], "any", false, false, false, 1178);
        echo "\",
\t\t\"sku\": \"";
        // line 1179
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "sku", [], "any", false, false, false, 1179);
        echo "\",
\t\t\"mpn\": \"";
        // line 1180
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "mpn", [], "any", false, false, false, 1180);
        echo "\",
\t\t\"description\": \"";
        // line 1181
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "description", [], "any", false, false, false, 1181);
        echo "\",
\t\t\"offers\": {
\t\t\t\"@type\": \"Offer\",
\t\t\t\"availability\": \"https://schema.org/";
        // line 1184
        echo (((($context["quantity"] ?? null) > 0)) ? ("InStock") : ("OutOfStock"));
        echo "\",
\t\t\t\"price\": \"";
        // line 1185
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "price", [], "any", false, false, false, 1185);
        echo "\",
\t\t\t";
        // line 1186
        echo ((twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "price_date_end", [], "any", false, false, false, 1186)) ? ((("\"priceValidUntil\": \"" . twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "price_date_end", [], "any", false, false, false, 1186)) . "\",")) : (""));
        echo "
\t\t\t\"priceCurrency\": \"";
        // line 1187
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "code", [], "any", false, false, false, 1187);
        echo "\",
\t\t\t\"url\": \"";
        // line 1188
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "url", [], "any", false, false, false, 1188);
        echo "\"
\t\t}
\t\t";
        // line 1190
        if ((twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "review_status", [], "any", false, false, false, 1190) && (twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "reviews_num", [], "any", false, false, false, 1190) > 0))) {
            echo ",
\t\t\"aggregateRating\": {
\t\t\t\"@type\": \"AggregateRating\",
\t\t\t\"ratingValue\": \"";
            // line 1193
            echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "rating", [], "any", false, false, false, 1193);
            echo "\",
\t\t\t\"reviewCount\": \"";
            // line 1194
            echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "reviews_num", [], "any", false, false, false, 1194);
            echo "\"
\t\t}
\t\t";
        }
        // line 1197
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "reviews", [], "any", false, false, false, 1197)) {
            echo ",
\t\t\"review\": [
\t\t\t";
            // line 1199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "reviews", [], "any", false, false, false, 1199));
            foreach ($context['_seq'] as $context["i"] => $context["review"]) {
                // line 1200
                echo "\t\t\t{
\t\t\t\t\"@type\": \"Review\",
\t\t\t\t\"author\": {
\t\t\t\t\t\"@type\": \"Person\",
\t\t\t\t\t\"name\": \"";
                // line 1204
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 1204);
                echo "\"
\t\t\t\t},
\t\t\t\t\"datePublished\": \"";
                // line 1206
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 1206);
                echo "\",
\t\t\t\t\"description\": \"";
                // line 1207
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 1207);
                echo "\",
\t\t\t\t\"reviewRating\": {
\t\t\t\t\t\"@type\": \"Rating\",
\t\t\t\t\t\"ratingValue\": \"";
                // line 1210
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 1210);
                echo "\",
\t\t\t\t\t\"bestRating\": \"5\"
\t\t\t\t}
\t\t\t";
                // line 1213
                echo (((($context["i"] + 1) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "reviews", [], "any", false, false, false, 1213)))) ? ("},") : ("}"));
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1215
            echo "\t\t]
\t\t";
        }
        // line 1217
        echo "\t}
</script>
\t";
        // line 1219
        $context["break"] = false;
        // line 1220
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            if ( !($context["break"] ?? null)) {
                // line 1221
                echo "\t\t";
                if ((((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1221) == "date") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1221) == "time")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1221) == "datetime"))) {
                    // line 1222
                    echo "\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\"></script>
\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\"></script>
\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"></script>
\t\t\t<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"preload\" as=\"style\" />
\t\t\t<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t<script>\t\t\t
\t\t\t\t\$('.date').datetimepicker({
\t\t\t\t\tpickTime: false,
\t\t\t\t\tlanguage: \$('html').attr('lang')
\t\t\t\t});
\t\t\t\t\$('.datetime').datetimepicker({
\t\t\t\t\tpickDate: true,
\t\t\t\t\tpickTime: true
\t\t\t\t});
\t\t\t\t\$('.time').datetimepicker({
\t\t\t\t\tpickDate: false
\t\t\t\t});
\t\t\t</script>
\t\t\t";
                    // line 1240
                    $context["break"] = true;
                    // line 1241
                    echo "\t\t";
                }
                // line 1242
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1243
        echo "
                    <!-- YouTube Product Video -- Start -->
                    ";
        // line 1245
        echo ($context["youtube_product_video"] ?? null);
        echo "
                    <!-- YouTube Product Video -- End -->
                
";
        // line 1248
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3020 => 1248,  3014 => 1245,  3010 => 1243,  3003 => 1242,  3000 => 1241,  2998 => 1240,  2978 => 1222,  2975 => 1221,  2969 => 1220,  2967 => 1219,  2963 => 1217,  2959 => 1215,  2951 => 1213,  2945 => 1210,  2939 => 1207,  2935 => 1206,  2930 => 1204,  2924 => 1200,  2920 => 1199,  2914 => 1197,  2908 => 1194,  2904 => 1193,  2898 => 1190,  2893 => 1188,  2889 => 1187,  2885 => 1186,  2881 => 1185,  2877 => 1184,  2871 => 1181,  2867 => 1180,  2863 => 1179,  2858 => 1178,  2853 => 1176,  2848 => 1174,  2844 => 1172,  2842 => 1171,  2826 => 1170,  2822 => 1169,  2818 => 1168,  2809 => 1161,  2801 => 1159,  2797 => 1158,  2792 => 1157,  2788 => 1156,  2784 => 1154,  2780 => 1153,  2753 => 1128,  2730 => 1108,  2682 => 1063,  2592 => 976,  2539 => 925,  2535 => 923,  2516 => 906,  2513 => 905,  2499 => 893,  2497 => 892,  2494 => 891,  2492 => 890,  2484 => 885,  2479 => 883,  2475 => 882,  2471 => 881,  2467 => 880,  2455 => 871,  2450 => 869,  2446 => 868,  2442 => 867,  2438 => 866,  2432 => 863,  2426 => 859,  2414 => 856,  2410 => 855,  2407 => 854,  2405 => 853,  2398 => 848,  2390 => 842,  2386 => 841,  2373 => 833,  2360 => 825,  2349 => 817,  2345 => 816,  2336 => 810,  2331 => 808,  2328 => 807,  2323 => 804,  2309 => 799,  2301 => 793,  2299 => 792,  2294 => 790,  2288 => 786,  2265 => 781,  2257 => 780,  2239 => 779,  2224 => 778,  2222 => 777,  2217 => 776,  2214 => 775,  2206 => 773,  2204 => 772,  2201 => 771,  2193 => 769,  2187 => 767,  2185 => 766,  2176 => 765,  2173 => 764,  2170 => 763,  2167 => 762,  2164 => 761,  2161 => 760,  2155 => 758,  2153 => 757,  2149 => 756,  2143 => 755,  2128 => 751,  2122 => 750,  2118 => 749,  2114 => 748,  2111 => 747,  2094 => 746,  2087 => 743,  2084 => 742,  2082 => 741,  2079 => 740,  2068 => 736,  2063 => 735,  2055 => 732,  2052 => 731,  2050 => 730,  2047 => 729,  2044 => 728,  2040 => 726,  2027 => 724,  2023 => 723,  2020 => 722,  2018 => 721,  2013 => 718,  2010 => 717,  1999 => 715,  1994 => 714,  1991 => 713,  1985 => 710,  1981 => 708,  1975 => 706,  1966 => 702,  1961 => 699,  1954 => 695,  1949 => 692,  1947 => 691,  1943 => 690,  1938 => 687,  1931 => 685,  1927 => 684,  1924 => 683,  1915 => 681,  1911 => 680,  1906 => 678,  1899 => 674,  1893 => 671,  1890 => 670,  1885 => 667,  1876 => 661,  1872 => 660,  1864 => 655,  1859 => 654,  1857 => 653,  1851 => 650,  1846 => 648,  1843 => 647,  1841 => 646,  1834 => 642,  1831 => 641,  1822 => 639,  1818 => 638,  1813 => 636,  1809 => 635,  1805 => 633,  1802 => 632,  1798 => 630,  1794 => 628,  1786 => 626,  1783 => 625,  1775 => 623,  1773 => 622,  1767 => 620,  1764 => 619,  1757 => 617,  1748 => 614,  1744 => 613,  1741 => 612,  1737 => 611,  1731 => 609,  1727 => 608,  1722 => 607,  1719 => 606,  1713 => 604,  1711 => 603,  1707 => 601,  1704 => 600,  1691 => 598,  1686 => 597,  1683 => 596,  1675 => 594,  1672 => 593,  1664 => 591,  1661 => 590,  1655 => 588,  1653 => 587,  1643 => 579,  1636 => 574,  1634 => 573,  1487 => 428,  1476 => 424,  1471 => 423,  1463 => 420,  1460 => 419,  1458 => 418,  1455 => 417,  1452 => 416,  1449 => 415,  1446 => 414,  1444 => 413,  1441 => 412,  1437 => 410,  1435 => 409,  1432 => 408,  1430 => 407,  1425 => 404,  1422 => 403,  1419 => 402,  1416 => 401,  1402 => 398,  1399 => 397,  1397 => 396,  1394 => 395,  1389 => 394,  1386 => 393,  1380 => 392,  1371 => 390,  1363 => 388,  1360 => 387,  1355 => 386,  1352 => 385,  1348 => 384,  1345 => 383,  1343 => 382,  1338 => 381,  1332 => 379,  1330 => 378,  1320 => 375,  1312 => 370,  1308 => 369,  1301 => 364,  1295 => 360,  1284 => 358,  1280 => 357,  1276 => 356,  1269 => 353,  1266 => 352,  1261 => 349,  1248 => 347,  1244 => 346,  1239 => 344,  1236 => 343,  1233 => 342,  1225 => 340,  1222 => 339,  1214 => 336,  1209 => 333,  1207 => 332,  1202 => 329,  1199 => 328,  1193 => 327,  1190 => 326,  1179 => 321,  1176 => 320,  1169 => 318,  1165 => 316,  1163 => 315,  1145 => 312,  1136 => 311,  1134 => 310,  1130 => 309,  1126 => 308,  1123 => 307,  1121 => 306,  1117 => 304,  1106 => 302,  1102 => 300,  1096 => 298,  1088 => 296,  1086 => 295,  1078 => 294,  1075 => 293,  1073 => 292,  1070 => 291,  1067 => 290,  1064 => 289,  1062 => 288,  1052 => 280,  1046 => 276,  1039 => 274,  1033 => 273,  1030 => 272,  1018 => 270,  1006 => 268,  1003 => 267,  998 => 266,  996 => 265,  993 => 264,  989 => 263,  984 => 260,  981 => 259,  975 => 257,  973 => 256,  967 => 253,  957 => 246,  953 => 244,  949 => 242,  943 => 241,  931 => 236,  922 => 234,  917 => 233,  914 => 232,  900 => 227,  891 => 225,  886 => 224,  883 => 223,  869 => 218,  860 => 216,  855 => 215,  852 => 214,  844 => 211,  836 => 210,  830 => 209,  825 => 208,  822 => 207,  810 => 204,  802 => 203,  797 => 202,  794 => 201,  782 => 198,  774 => 197,  769 => 196,  766 => 195,  761 => 192,  754 => 190,  749 => 188,  742 => 187,  728 => 185,  726 => 184,  712 => 183,  705 => 182,  701 => 181,  697 => 180,  691 => 179,  686 => 178,  683 => 177,  678 => 174,  671 => 172,  665 => 170,  651 => 168,  649 => 167,  635 => 166,  628 => 165,  624 => 164,  620 => 163,  614 => 162,  609 => 161,  606 => 160,  601 => 157,  590 => 154,  577 => 153,  573 => 152,  569 => 151,  563 => 150,  555 => 149,  550 => 148,  547 => 147,  543 => 146,  540 => 145,  538 => 144,  535 => 143,  532 => 142,  523 => 141,  514 => 140,  511 => 139,  503 => 137,  500 => 136,  492 => 134,  489 => 133,  481 => 131,  478 => 130,  470 => 128,  467 => 127,  459 => 125,  456 => 124,  448 => 122,  445 => 121,  437 => 119,  435 => 118,  432 => 117,  424 => 116,  421 => 115,  413 => 113,  410 => 112,  400 => 110,  397 => 109,  389 => 107,  386 => 106,  378 => 104,  376 => 103,  371 => 101,  367 => 99,  361 => 96,  357 => 94,  351 => 93,  342 => 91,  334 => 89,  331 => 88,  326 => 87,  323 => 86,  319 => 85,  314 => 83,  311 => 82,  309 => 81,  306 => 80,  303 => 79,  299 => 77,  280 => 75,  276 => 74,  264 => 73,  261 => 72,  258 => 71,  253 => 68,  250 => 67,  229 => 65,  224 => 64,  222 => 63,  206 => 62,  203 => 61,  201 => 60,  198 => 59,  195 => 58,  193 => 57,  189 => 56,  184 => 54,  181 => 53,  176 => 50,  168 => 47,  165 => 46,  162 => 45,  155 => 42,  146 => 40,  142 => 39,  139 => 38,  137 => 37,  133 => 35,  131 => 34,  127 => 32,  121 => 30,  119 => 29,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  83 => 15,  80 => 14,  74 => 13,  71 => 12,  64 => 11,  56 => 9,  53 => 8,  49 => 7,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/product.twig", "");
    }
}
