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

/* unishop2/template/information/uni_news_story.twig */
class __TwigTemplate_39f9bea101d170b48346118c8157e65a65a7a9f3511f4a997192ed5d9aba2931 extends \Twig\Template
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
\t\t";
        // line 15
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 16
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 17
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 18
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 20
            echo "\t\t";
        } else {
            // line 21
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 22
            echo "\t\t";
        }
        // line 23
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 24
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"news-page uni-block__line\">
\t\t\t    <h1 class=\"heading\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t";
        // line 28
        if (($context["thumb"] ?? null)) {
            // line 29
            echo "\t\t\t\t\t\t<div class=\"news-page__image\">
\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo ($context["popup"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img_popup\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 31
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"news-page__img img-responsive\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<div class=\"news-page__description\">";
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"news-page__social-posted\">
\t\t\t\t\t";
        // line 38
        if (($context["addthis"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t\t<div class=\"news-page__social\">
\t\t\t\t\t\t    ";
            // line 40
            echo ($context["text_news_share"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 41
            if (($context["socialbutton"] ?? null)) {
                // line 42
                echo "\t\t\t\t\t\t\t\t<div id=\"goodshare\" data-socials=\"";
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
\t\t\t\t\t\t\t\t<script defer async src=\"catalog/view/javascript/goodshare/goodshare.min.js\"></script>
\t\t\t\t\t\t\t\t<link href=\"catalog/view/javascript/goodshare/goodshare.css\" rel=\"preload\" as=\"style\" />
\t\t\t\t\t\t\t\t<link href=\"catalog/view/javascript/goodshare/goodshare.css\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t<div class=\"news-page__posted\">
\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i>";
        // line 50
        echo ($context["viewed"] ?? null);
        echo "
\t\t\t\t\t\t<i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
        // line 51
        echo ($context["posted"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"height:30px\"></div>
\t\t\t\t";
        // line 55
        if (($context["prevnext"] ?? null)) {
            // line 56
            echo "\t\t\t\t\t<div class=\"news-prevnext row-flex\">
\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t";
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "prev", [], "any", false, false, false, 58)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t<div class=\"news-prevnext__item prev\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "prev", [], "any", false, false, false, 60), "href", [], "any", false, false, false, 60);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "name", [], "any", false, false, false, 60);
                echo "\" class=\"news-prevnext__a prev\">
\t\t\t\t\t\t\t\t\t\t";
                // line 61
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "prev", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61);
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"news-prevnext__date\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "prev", [], "any", false, false, false, 63), "date", [], "any", false, false, false, 63);
                echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "next", [], "any", false, false, false, 68)) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<div class=\"news-prevnext__item next\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "next", [], "any", false, false, false, 70), "href", [], "any", false, false, false, 70);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "name", [], "any", false, false, false, 70);
                echo "\" class=\"news-prevnext__a next\">
\t\t\t\t\t\t\t\t\t\t";
                // line 71
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "next", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71);
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"news-prevnext__date\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prevnext"] ?? null), "next", [], "any", false, false, false, 73), "date", [], "any", false, false, false, 73);
                echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t</div>
\t\t\t";
        // line 80
        if (($context["related_products"] ?? null)) {
            // line 81
            echo "\t\t\t\t<div class=\"heading\">";
            echo ($context["related_products_title"] ?? null);
            echo "</div>
\t\t\t\t<div class=\"uni-module news-product-related\">
\t\t\t\t\t<div class=\"uni-module__wrapper\">
\t\t\t\t\t\t";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_products"] ?? null));
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
                // line 85
                echo "\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 86
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 86)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 86)) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 87
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/information/uni_news_story.twig", 87)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 88);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 89);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 89)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 89)) . "\"")) : (""));
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 89);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 89);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 94
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 94)) ? ((((("<div class=\"product-thumb__model\" data-text=\"" . ($context["text_model"] ?? null)) . "\">") . twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 94)) . "</div>")) : (""));
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 95
                if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 96);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/information/uni_news_story.twig", 98)->display($context);
                // line 99
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/information/uni_news_story.twig", 99)->display($context);
                // line 100
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/information/uni_news_story.twig", 100)->display($context);
                // line 101
                echo "\t\t\t\t\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 101) >= 0) && ($context["show_rating"] ?? null))) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 104) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 106
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 106) > 0)) {
                        echo "<a class=\"product-thumb__rating-a uni-badge uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 106);
                        echo "#tab-review\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "num_reviews", [], "any", false, false, false, 106);
                        echo "</a>";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 110);
                    echo "\" data-special=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 110);
                    echo "\" data-discount=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 110);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 111
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 111)) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 112);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 114);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 114);
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 117
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 117)) {
                        echo "<div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 117);
                        echo "</div>";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 119);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 120
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/information/uni_news_story.twig", 120)->display($context);
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 121);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 121);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                echo ", this)\"><i class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_icon", [], "any", false, false, false, 121);
                echo "\"></i><span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 121);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__quick-order quick-order btn ";
                // line 122
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "quick_order", [], "any", false, false, false, 122))) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["quick_order_title"] ?? null);
                echo "\" onclick=\"quick_order('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
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
                // line 123
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "');\"><i class=\"far fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 124
                echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
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
            // line 129
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script>
\t\t\t\t\t\$('.news-product-related').uniModules({
\t\t\t\t\t\ttype:'";
            // line 133
            echo ((($context["type_view"] ?? null)) ? (($context["type_view"] ?? null)) : ("carousel"));
            echo "',
\t\t\t\t\t\tautoheight:['product-thumb__name', 'product-thumb__description', 'product-thumb__option']
\t\t\t\t\t});
\t\t\t\t\t";
            // line 136
            if (($context["show_timer"] ?? null)) {
                // line 137
                echo "\t\t\t\t\t\$('.news-product-related .product-thumb__image').each(function() {
\t\t\t\t\t\tconst date = \$(this).data('special-end');
\t\t\t
\t\t\t\t\t\tif(date) {
\t\t\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\t\t\tdate      :''+date+'',
\t\t\t\t\t\t\t\ttexts     :['";
                // line 143
                echo ($context["text_special_day"] ?? null);
                echo "','";
                echo ($context["text_special_hour"] ?? null);
                echo "','";
                echo ($context["text_special_min"] ?? null);
                echo "','";
                echo ($context["text_special_sec"] ?? null);
                echo "'],
\t\t\t\t\t\t\t\thideText  :false,
\t\t\t\t\t\t\t\thideIsNull:false
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t</script>
\t\t\t";
        }
        // line 152
        echo "\t\t\t<link href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t\t\$('.news-page__description img').each(function() {
\t\t\t\t\t\t\$(this).css('max-width', '100%').wrap('<a href=\"'+\$(this).attr('src')+'\" class=\"img_popup\"></a>');
\t\t\t\t\t});
\t\t\t\t\t\$('.news-page__image, .news-page__description').magnificPopup({
\t\t\t\t\t\ttype:'image',
\t\t\t\t\t\tdelegate: 'a.img_popup',
\t\t\t\t\t\tgallery: {
\t\t\t\t\t\t\tenabled:true
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t\t";
        // line 168
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 170
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"https://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 179
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 181
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 182
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 182), ["\"" => "", "&quot;" => ""])));
            echo "\",
\t\t\t\"item\": \"";
            // line 183
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 183);
            echo "\"
\t\t\t";
            // line 184
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t]
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"https://schema.org\",
\t\t\"@type\": \"NewsArticle\",
\t\t\"headline\": \"";
        // line 193
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "title", [], "any", false, false, false, 193);
        echo "\",
\t\t\"image\": [\"";
        // line 194
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "image", [], "any", false, false, false, 194);
        echo "\"],
\t\t\"datePublished\": \"";
        // line 195
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "date", [], "any", false, false, false, 195);
        echo "\",
\t\t\"dateModified\": \"";
        // line 196
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "date", [], "any", false, false, false, 196);
        echo "\",
\t\t\"description\": \"";
        // line 197
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "short_description", [], "any", false, false, false, 197);
        echo "\",
\t\t\"articleBody\": \"";
        // line 198
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "description", [], "any", false, false, false, 198);
        echo "\",
\t\t\"author\": {
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"";
        // line 201
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "publisher_name", [], "any", false, false, false, 201);
        echo "\",
\t\t\t\"url\": \"";
        // line 202
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "publisher_url", [], "any", false, false, false, 202);
        echo "\",
\t\t\t\"logo\": {
\t\t\t\t\"@type\": \"ImageObject\",
\t\t\t\t\"url\": \"";
        // line 205
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "publisher_logo", [], "any", false, false, false, 205);
        echo "\"
\t\t\t}
        }
\t}
</script>
";
        // line 210
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/information/uni_news_story.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 210,  632 => 205,  626 => 202,  622 => 201,  616 => 198,  612 => 197,  608 => 196,  604 => 195,  600 => 194,  596 => 193,  587 => 186,  579 => 184,  575 => 183,  571 => 182,  567 => 181,  563 => 179,  559 => 178,  548 => 170,  543 => 168,  525 => 152,  521 => 150,  505 => 143,  497 => 137,  495 => 136,  489 => 133,  483 => 129,  460 => 124,  452 => 123,  436 => 122,  421 => 121,  419 => 120,  414 => 119,  411 => 118,  403 => 117,  400 => 116,  392 => 114,  386 => 112,  384 => 111,  375 => 110,  372 => 109,  368 => 107,  360 => 106,  357 => 105,  348 => 104,  344 => 103,  341 => 102,  338 => 101,  335 => 100,  332 => 99,  329 => 98,  323 => 96,  321 => 95,  317 => 94,  311 => 93,  298 => 89,  294 => 88,  290 => 87,  286 => 86,  283 => 85,  266 => 84,  259 => 81,  257 => 80,  254 => 79,  249 => 76,  243 => 73,  238 => 71,  232 => 70,  229 => 69,  227 => 68,  223 => 66,  217 => 63,  212 => 61,  206 => 60,  203 => 59,  201 => 58,  197 => 56,  195 => 55,  188 => 51,  184 => 50,  181 => 49,  177 => 47,  160 => 42,  158 => 41,  154 => 40,  151 => 39,  149 => 38,  142 => 35,  133 => 31,  127 => 30,  124 => 29,  122 => 28,  117 => 26,  112 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  87 => 16,  83 => 15,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/information/uni_news_story.twig", "");
    }
}
