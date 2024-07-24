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

/* unishop2/template/product/compare.twig */
class __TwigTemplate_eae2e8825b241b6bcbeaf550f9dbd7db3c485567daf65408d9f9060efc62fabd extends \Twig\Template
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
<div id=\"product-compare\" class=\"container\">
\t<div class=\"breadcrumb-h1 ";
        // line 4
        echo ((($context["menu_expanded"] ?? null)) ? ("col-md-offset-3 col-lg-offset-3 col-xxl-offset-4") : (""));
        echo "\">
\t\t<!--<ul class=\"breadcrumb mobile\">
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
        echo "\t\t</ul>-->
\t\t<h1 class=\"heading\">";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t</div>
\t";
        // line 16
        if (($context["success"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<!-- <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> -->
\t\t</div>
\t";
        }
        // line 21
        echo "\t<div class=\"prod-compare\">
\t<div class=\"row\">
\t\t";
        // line 23
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 26
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 28
            echo "\t\t";
        } else {
            // line 29
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 30
            echo "\t\t";
        }
        // line 31
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 32
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"uni-wrapper\">
\t\t\t\t<div class=\"compare-page-wrapper\">
\t\t\t\t\t";
        // line 35
        if (($context["products"] ?? null)) {
            // line 36
            echo "\t\t\t\t\t\t<label class=\"compare-attribute-hide-same input ";
            echo (((twig_length_filter($this->env, ($context["attribute_groups"] ?? null)) > 0)) ? ("is_visible") : (""));
            echo "\"><input type=\"checkbox\" name=\"compare-attribute-hide-same\" value=\"1\" checked=\"checked\" onclick=\"hideSame()\" />";
            echo ($context["text_compare_attribute_hide_same"] ?? null);
            echo "</label>
\t\t\t\t\t\t<div class=\"compare-page ";
            // line 37
            echo (((twig_length_filter($this->env, ($context["products"] ?? null)) > 2)) ? ("more") : (""));
            echo "\" data-products=\"";
            echo twig_length_filter($this->env, ($context["products"] ?? null));
            echo "\">
\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__info compare-page__cell text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__img\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare-page__delete\" title=\"";
                // line 43
                echo ($context["button_remove"] ?? null);
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 43);
                echo "\"><i class=\"fa fa-trash-alt\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare-page__wishlist wishlist ";
                // line 44
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__name\"><a href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__price\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 49
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50);
                    echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare-page__cart add_to_cart button btn ";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 55);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 55);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                echo ", this)\"><i class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_icon", [], "any", false, false, false, 55);
                echo "\"></i><span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 55);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\">
\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell-heading\">";
                // line 63
                echo ($context["text_model"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 64);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\">
\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell-heading\">";
                // line 71
                echo ($context["text_manufacturer"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 72
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 72)) ? (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 72)) : ("-"));
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 78
            echo ($context["text_availability"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t<td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 80);
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t";
            // line 84
            if (($context["review_status"] ?? null)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t\t<!-- <div class=\"compare-page__cell\">";
                // line 86
                echo ($context["text_rating"] ?? null);
                echo "</div> -->
\t\t\t\t\t\t\t\t\t";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 91) < $context["i"])) ? ("far") : ("fa"));
                        echo " fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__rating-text\">";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 94);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 101
            echo ($context["text_summary"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t<td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 103);
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<div class=\"compare-page__row compare-page__attr-heading-desktop\">
\t\t\t\t\t\t\t\t\t";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 111);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__row compare-page__attr\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 118
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell-heading\">";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 119);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"compare-page__attr-val ";
                        // line 120
                        echo ((twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 120)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null))) ? ("reset2") : (""));
                        echo "\">";
                        echo (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 120)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) ? ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 120)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["key"]] ?? null) : null)) : ("-"));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\"><strong>";
                echo ($context["text_dimension"] ?? null);
                echo "</strong></div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\">
\t\t\t\t\t\t\t\t\t\t";
                // line 134
                echo (((((twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 134) > 0) && (twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 134) > 0)) && (twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 134) > 0))) ? (((((twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 134) . " x ") . twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 134)) . " x ") . twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 134))) : ("-"));
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 140
                echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\"><strong>";
                echo ($context["text_weight"] ?? null);
                echo "</strong></div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 145
                echo "\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell\">
\t\t\t\t\t\t\t\t\t\t";
                // line 146
                echo (((twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 146) > 0)) ? (twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 146)) : ("-"));
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 150
            if (twig_length_filter($this->env, ($context["attribute_groups"] ?? null))) {
                // line 151
                echo "\t\t\t\t\t\t\t\t<div class=\"compare-page__row\">
\t\t\t\t\t\t\t\t\t";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"compare-page__cell text-center\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare-page__cart add_to_cart button btn ";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 154);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 154);
                    echo "\" data-pid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 154);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 154);
                    echo "\" onclick=\"cart.add(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 154);
                    echo ", this)\"><i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_icon", [], "any", false, false, false, 154);
                    echo "\"></i><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 154);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 159
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 161
            echo "\t\t\t\t\t\t<div class=\"compare-page\" data-products=\"0\">
\t\t\t\t\t\t    <div class=\"uni-img__block-compare\">
\t\t     <img src=\"/image/catalog/banners/comparison-tt.jpg\" alt=\"comparison-modal\">
\t\t     </div>
\t\t\t\t\t\t\t<div class=\"div-text-empty\">";
            // line 165
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"grand-compare\"><a href=\"https://grandnova.shop/\" class=\"grand-compare__btn btn btn-primary\">";
            // line 166
            echo ($context["button_return_home"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"buttons hidden\">
\t\t\t\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 169
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 173
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
\t\t\t<script>
\t\t\t\t\$('html body').on('click', '.compare-page__delete', function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t
\t\t\t\t\tlet url = \$(this).data('href');
\t\t\t\t\t
\t\t\t\t\tif (document.location.protocol == 'https:') url = url.replace('http:', 'https:');
\t\t\t\t
\t\t\t\t\t\$.get(url, (data) => {
\t\t\t\t\t\tconst success = \$(data).find('.alert-success');
\t\t\t\t\t\t\t
\t\t\t\t\t\tif(success.length) {
\t\t\t\t\t\t\t\$('.compare-page-wrapper').html(\$(data).find('.compare-page-wrapper').html());
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tsuccess.each(function() {
\t\t\t\t\t\t\t\tuniFlyAlert('success', \$(this).text());
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcompare.uniCompareUpd(\$('.compare-page').data('products'));
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcompareAttr();
\t\t\t\t\t\t\thideSame();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\tconst hideSame = () => {
\t\t\t\t\tconst input_name = 'input[name=\"compare-attribute-hide-same\"]', 
\t\t\t\t\t\t  elems = '.compare-page__attr.same',
\t\t\t\t\t\t  elems2 = '.compare-page__attr-val';

\t\t\t\t\tif(\$('.compare-page').data('products') > 1) {
\t\t\t\t\t\tif(\$(input_name).is(':checked')) {
\t\t\t\t\t\t\t\$(elems).hide();
\t\t\t\t\t\t\t\$(elems2).addClass('reset');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(elems).show();
\t\t\t\t\t\t\t\$(elems2).removeClass('reset');
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(input_name).attr('checked', false);
\t\t\t\t\t\t\$(elems).show();
\t\t\t\t\t}
\t\t\t\t};
\t\t\t\t\t
\t\t\t\tconst compareAttr = () => {
\t\t\t\t\t\$('.compare-page__attr').each(function() {
\t\t\t\t\t\tlet \$this = \$(this), \$thisChilds = \$this.find('.compare-page__attr-val');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\$thisChilds.each(function() {
\t\t\t\t\t\t\tlet text = String(\$(this).text()), i = 0;
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$this.find(':contains(\"'+text+'\")').filter(function() {
\t\t\t\t\t\t\t\tlet result = false;
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(\$(this).text().toLowerCase() == text.toLowerCase()) {
\t\t\t\t\t\t\t\t\ti++;
\t\t\t\t\t\t\t\t\tresult = true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\treturn result;
\t\t\t\t\t\t\t}).toggleClass('highlight');
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif(\$thisChilds.length == i)\t{
\t\t\t\t\t\t\t\t\$thisChilds.removeClass('highlight');
\t\t\t\t\t\t\t\t\$this.addClass('same')
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})
\t\t\t\t};
\t\t\t\t
\t\t\t\tcompareAttr();
\t\t\t\thideSame();
\t\t\t</script>
\t\t\t\t
\t\t\t";
        // line 253
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 255
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 258
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 258,  677 => 255,  672 => 253,  590 => 173,  581 => 169,  575 => 166,  571 => 165,  565 => 161,  561 => 159,  557 => 157,  536 => 154,  533 => 153,  529 => 152,  526 => 151,  524 => 150,  521 => 149,  512 => 146,  509 => 145,  505 => 144,  501 => 142,  492 => 140,  488 => 139,  484 => 137,  475 => 134,  472 => 133,  468 => 132,  464 => 130,  455 => 128,  451 => 127,  448 => 126,  442 => 125,  435 => 123,  424 => 120,  420 => 119,  417 => 118,  413 => 117,  410 => 116,  406 => 115,  403 => 114,  394 => 111,  391 => 110,  387 => 109,  384 => 108,  380 => 107,  376 => 105,  367 => 103,  363 => 102,  359 => 101,  355 => 99,  351 => 97,  342 => 94,  338 => 92,  329 => 91,  325 => 90,  321 => 88,  317 => 87,  313 => 86,  310 => 85,  308 => 84,  304 => 82,  295 => 80,  291 => 79,  287 => 78,  282 => 75,  273 => 72,  269 => 71,  266 => 70,  262 => 69,  258 => 67,  249 => 64,  245 => 63,  242 => 62,  238 => 61,  234 => 59,  212 => 55,  209 => 54,  203 => 52,  195 => 50,  193 => 49,  185 => 46,  176 => 44,  170 => 43,  160 => 42,  156 => 40,  152 => 39,  145 => 37,  138 => 36,  136 => 35,  130 => 32,  125 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  110 => 26,  107 => 25,  105 => 24,  101 => 23,  97 => 21,  89 => 17,  87 => 16,  82 => 14,  79 => 13,  73 => 12,  70 => 11,  63 => 10,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/compare.twig", "");
    }
}
