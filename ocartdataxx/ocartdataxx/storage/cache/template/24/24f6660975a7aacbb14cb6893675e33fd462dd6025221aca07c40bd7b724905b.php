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

/* unishop2/template/extension/module/uni_five_in_one_v2.twig */
class __TwigTemplate_fe2044de84e04ba0b1d84795845f7324785c094bdfa4485f0c6ab082042a7d37 extends \Twig\Template
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
        if (($context["tabs"] ?? null)) {
            // line 2
            echo "\t";
            if ((twig_length_filter($this->env, ($context["tabs"] ?? null)) > 1)) {
                // line 3
                echo "\t\t<ul class=\"nav nav-tabs\">
\t\t\t";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
                    // line 5
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 5)) {
                        // line 6
                        echo "\t\t\t\t\t<li ";
                        echo ((($context["key"] == 0)) ? ("class=\"active\"") : (""));
                        echo "><a href=\"#five-in-one-";
                        echo $context["key"];
                        echo "-";
                        echo ($context["module"] ?? null);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 6);
                        echo "</a></li>
\t\t\t\t";
                    }
                    // line 8
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "\t\t</ul>
\t";
            } else {
                // line 11
                echo "\t\t<h2 class=\"heading-cat\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tabs"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "title", [], "any", false, false, false, 11);
                echo " ";
                echo ((($context["link"] ?? null)) ? ((((("<a href=\"" . twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 11)) . "\" class=\"heading__link\">") . twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "text", [], "any", false, false, false, 11)) . "</a>")) : (""));
                echo "</h2>
\t";
            }
            // line 13
            echo "\t<div class=\"tab-content\">
\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
                // line 15
                echo "\t\t\t<div id=\"five-in-one-";
                echo $context["key"];
                echo "-";
                echo ($context["module"] ?? null);
                echo "\" class=\"tab-pane ";
                echo ((($context["key"] == 0)) ? ("active") : (""));
                echo "\">\t
\t\t\t\t";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t\t\t\t";
                    $context["show_rating"] = twig_get_attribute($this->env, $this->source, $context["tab"], "show_rating", [], "any", false, false, false, 17);
                    // line 18
                    echo "\t\t\t\t\t<div class=\"uni-module five-in-one-";
                    echo $context["key"];
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "\">
\t\t\t\t\t\t<div class=\"uni-module__wrapper\">
\t\t\t\t\t\t\t";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 20));
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
                        // line 21
                        echo "\t\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                        // line 22
                        echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 22)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 22)) . "\"")) : (""));
                        echo ">
\t\t\t\t\t\t\t\t\t\t";
                        // line 23
                        $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/extension/module/uni_five_in_one_v2.twig", 23)->display($context);
                        echo "\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 25);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 25)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 25)) . "\"")) : (""));
                        echo " ";
                        echo (($context["key"]) ? ("loading=\"lazy\"") : (""));
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                        echo "\" class=\"img-responsive\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "img_width", [], "any", false, false, false, 25);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "img_height", [], "any", false, false, false, 25);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 29
                        $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/extension/module/uni_five_in_one_v2.twig", 29)->display($context);
                        // line 30
                        echo "\t\t\t\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                        echo "</a>\t
\t\t\t\t\t\t\t\t\t\t";
                        // line 31
                        echo ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 31)) ? ((((("<div class=\"product-thumb__model\" data-text=\"" . ($context["text_model"] ?? null)) . "\">") . twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 31)) . "</div>")) : (""));
                        echo "\t
\t\t\t\t\t\t\t\t\t\t";
                        // line 32
                        if (((($context["rating_type"] ?? null) == 2) || ((($context["rating_type"] ?? null) == 1) && (($context["rating"] ?? null) || ($context["show_rating"] ?? null))))) {
                            // line 33
                            echo "\t                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", true, true, false, 33)) {
                                // line 34
                                echo "\t\t              <div class=\"product-thumb__rating rating uni-href\" data-href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                                echo "#tab-review\">
\t\t\t          ";
                                // line 35
                                if ((($context["rating_type"] ?? null) == 2)) {
                                    // line 36
                                    echo "\t\t\t\t";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                        // line 37
                                        echo "\t\t\t\t\t<i class=\"";
                                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 37) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                                        echo "\"></i>
\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 39
                                    echo "\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 39)) {
                                        // line 40
                                        echo "\t\t\t\t<div class=\"product-ret\"><i class=\"fal fa-comment\"></i><span class=\"product-thumb__rating-text\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["product"], "text_reviews", [], "any", false, false, false, 40);
                                        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
                                    }
                                    // line 43
                                    echo "\t\t\t\t</div>
\t\t\t    ";
                                }
                                // line 45
                                echo "\t\t\t";
                            }
                            // line 46
                            echo "\t\t";
                        }
                        // line 47
                        echo "\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47)) {
                            // line 48
                            echo "\t\t\t\t\t\t<div class=\"product-retw\">
\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                            // line 49
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 49);
                            echo "\" data-special=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 49);
                            echo "\" data-discount=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 49);
                            echo "\">
\t\t\t\t\t\t\t\t";
                            // line 50
                            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50)) {
                                // line 51
                                echo "\t\t\t\t\t\t\t\t\t";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                                echo "
\t\t\t\t\t\t\t\t";
                            } else {
                                // line 53
                                echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                                echo "</span> <span class=\"price-new\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 53);
                                echo "</span> 
\t\t\t\t\t\t\t\t";
                            }
                            // line 55
                            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                            // line 56
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 56)) {
                                echo "<div class=\"price-tax\">";
                                echo ($context["text_tax"] ?? null);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 56);
                                echo "</div>";
                            }
                            // line 57
                            echo "\t\t\t\t\t\t";
                        }
                        // line 58
                        echo "\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 58);
                        echo "\">
\t\t\t\t\t\t\t";
                        // line 59
                        $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/extension/module/uni_five_in_one_v2.twig", 59)->display($context);
                        // line 60
                        echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 60);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 60);
                        echo "\" data-pid=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                        echo "\" onclick=\"cart.add(";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                        echo ", this)\"><i class=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_icon", [], "any", false, false, false, 60);
                        echo "\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                        // line 61
                        echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                        echo "\" title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
                        echo "');\"><i class=\"fal fa-heart\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                        // line 62
                        echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                        echo "\" title=\"";
                        echo ($context["button_compare"] ?? null);
                        echo "\" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 62);
                        echo "');\"><i class=\"fal fa-balance-scale\"></i></button>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t    ";
                        // line 65
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 65)) {
                            // line 66
                            echo "\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 66);
                            echo "</div>
\t\t\t\t\t\t";
                        }
                        // line 68
                        echo "\t\t\t\t\t\t";
                        $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/extension/module/uni_five_in_one_v2.twig", 68)->display($context);
                        // line 69
                        echo "\t\t\t\t\t</div>
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
                    // line 72
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script>
\t\t\t\t\t\t\$('.five-in-one-";
                    // line 75
                    echo $context["key"];
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "').uniModules({\t
\t\t\t\t\t\t\ttype:'";
                    // line 76
                    echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 76)) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 76)) : ("carousel"));
                    echo "'\t
\t\t\t\t\t\t});\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 79
                    if (twig_get_attribute($this->env, $this->source, $context["tab"], "show_timer", [], "any", false, false, false, 79)) {
                        echo "\t
\t\t\t\t\t\t\t//\$(function() {\t
\t\t\t\t\t\t\t\t\$('.five-in-one-";
                        // line 81
                        echo $context["key"];
                        echo "-";
                        echo ($context["module"] ?? null);
                        echo " .product-thumb__image').each(function() {\t
\t\t\t\t\t\t\t\t\tconst date = \$(this).data('special-end');\t
\t\t\t\t
\t\t\t\t\t\t\t\t\tif(date) {\t
\t\t\t\t\t\t\t\t\t\t\$(this).uniTimer({\t
\t\t\t\t\t\t\t\t\t\t\tdate  :date,\t
\t\t\t\t\t\t\t\t\t\t\ttexts :['";
                        // line 87
                        echo ($context["text_special_day"] ?? null);
                        echo "','";
                        echo ($context["text_special_hour"] ?? null);
                        echo "','";
                        echo ($context["text_special_min"] ?? null);
                        echo "','";
                        echo ($context["text_special_sec"] ?? null);
                        echo "']\t
\t\t\t\t\t\t\t\t\t\t});\t
\t\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t\t});\t
\t\t\t\t\t\t\t//});\t
\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t
\t\t\t\t\t</script>\t
\t\t\t\t";
                }
                // line 94
                echo "\t
\t\t\t</div>\t
\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t
\t</div>\t
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_five_in_one_v2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 96,  396 => 94,  391 => 92,  376 => 87,  365 => 81,  360 => 79,  354 => 76,  348 => 75,  343 => 72,  327 => 69,  324 => 68,  318 => 66,  316 => 65,  306 => 62,  298 => 61,  285 => 60,  283 => 59,  278 => 58,  275 => 57,  267 => 56,  264 => 55,  256 => 53,  250 => 51,  248 => 50,  240 => 49,  237 => 48,  234 => 47,  231 => 46,  228 => 45,  224 => 43,  217 => 40,  214 => 39,  205 => 37,  200 => 36,  198 => 35,  193 => 34,  190 => 33,  188 => 32,  184 => 31,  177 => 30,  175 => 29,  158 => 25,  152 => 24,  148 => 23,  144 => 22,  141 => 21,  124 => 20,  116 => 18,  113 => 17,  111 => 16,  102 => 15,  85 => 14,  82 => 13,  74 => 11,  70 => 9,  64 => 8,  52 => 6,  49 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_five_in_one_v2.twig", "");
    }
}
