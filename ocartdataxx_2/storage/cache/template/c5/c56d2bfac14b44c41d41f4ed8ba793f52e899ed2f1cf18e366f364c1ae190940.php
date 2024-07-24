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

/* unishop2/template/extension/module/uni_viewed.twig */
class __TwigTemplate_9b6bbff5a42a8551db955730a7bb6d34df662345d0d2a5be798f47b52f97cc3b extends \Twig\Template
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
        echo "<div class=\"heading\">";
        echo ($context["heading_title"] ?? null);
        echo "</div>
<div class=\"uni-module viewed-module\">
\t";
        // line 3
        if (($context["products"] ?? null)) {
            // line 4
            echo "\t\t<div class=\"uni-module__wrapper\">
\t\t\t";
            // line 5
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
                // line 6
                echo "\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 7
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 7)) ? ((("data-special-end=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "special_date_end", [], "any", false, false, false, 7)) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t";
                // line 8
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/extension/module/uni_viewed.twig", 8)->display($context);
                echo "\t
\t\t\t\t\t\t<a href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 10)) ? ((("data-additional=\"" . twig_get_attribute($this->env, $this->source, $context["product"], "additional_image", [], "any", false, false, false, 10)) . "\"")) : (""));
                echo " loading=\"lazy\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t\t\t\t\t";
                // line 14
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/extension/module/uni_viewed.twig", 14)->display($context);
                // line 15
                echo "\t\t\t\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                echo "</a>\t
\t\t\t\t\t\t\t\t\t\t";
                // line 16
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 16)) ? ((((("<div class=\"product-thumb__model\" data-text=\"" . ($context["text_model"] ?? null)) . "\">") . twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 16)) . "</div>")) : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t";
                // line 17
                if (((($context["rating_type"] ?? null) == 2) || ((($context["rating_type"] ?? null) == 1) && (($context["rating"] ?? null) || ($context["show_rating"] ?? null))))) {
                    // line 18
                    echo "\t                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", true, true, false, 18)) {
                        // line 19
                        echo "\t\t              <div class=\"product-thumb__rating rating uni-href\" data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                        echo "#tab-review\">
\t\t\t          ";
                        // line 20
                        if ((($context["rating_type"] ?? null) == 2)) {
                            // line 21
                            echo "\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 22
                                echo "\t\t\t\t\t<i class=\"";
                                echo (((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 22) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                                echo "\"></i>
\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 24
                            echo "\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 24)) {
                                // line 25
                                echo "\t\t\t\t<div class=\"product-ret\"><i class=\"fas fa-comment\"></i><span class=\"product-thumb__rating-text\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "text_reviews", [], "any", false, false, false, 25);
                                echo "</span>
\t\t\t\t</div>
\t\t\t\t";
                            }
                            // line 28
                            echo "\t\t\t\t</div>
\t\t\t    ";
                        }
                        // line 30
                        echo "\t\t\t";
                    }
                    // line 31
                    echo "\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "\t\t\t\t\t\t<div class=\"product-retw\">
\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_value", [], "any", false, false, false, 34);
                    echo "\" data-special=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special_value", [], "any", false, false, false, 34);
                    echo "\" data-discount=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discounts", [], "any", false, false, false, 34);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 35
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38);
                        echo "</span> 
\t\t\t\t\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 41
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 41)) {
                        echo "<div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 41);
                        echo "</div>";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 43);
                echo "\">
\t\t\t\t\t\t\t";
                // line 44
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_switch.twig", "unishop2/template/extension/module/uni_viewed.twig", 44)->display($context);
                // line 45
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_class", [], "any", false, false, false, 45);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_text", [], "any", false, false, false, 45);
                echo "\" data-pid=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 45);
                echo "\" onclick=\"cart.add(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 45);
                echo ", this)\"><i class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_btn_icon", [], "any", false, false, false, 45);
                echo "\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 46
                echo ((($context["wishlist_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 46);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 47
                echo ((($context["compare_btn_disabled"] ?? null)) ? ("hidden") : (""));
                echo "\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 47);
                echo "');\"><i class=\"fa fa-balance-scale\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t    ";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["product"], "show_description", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 51);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/extension/module/uni_viewed.twig", 53)->display($context);
                // line 54
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
            // line 57
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t</div>
\t";
        }
        // line 66
        echo "</div>
<script>
\$(function() {
\tconst loadViewed = () => {
\t\t\$.ajax({
\t\t\turl:'index.php?route=extension/module/uni_viewed/ajax',
\t\t\ttype:'post',
\t\t\tdata:{'width':";
        // line 73
        echo ($context["width"] ?? null);
        echo ", 'height':";
        echo ($context["height"] ?? null);
        echo ", 'limit':";
        echo ($context["limit"] ?? null);
        echo "},
\t\t\tdataType:'html',
\t\t\tsuccess:function(data) {
\t\t\t\tif(data) {
\t\t\t\t\t\$('.viewed-module').html(\$(data).find('.uni-module__wrapper'));

\t\t\t\t\t\$('.viewed-module').uniModules({
\t\t\t\t\t\ttype:'";
        // line 80
        echo ((($context["type_view"] ?? null)) ? (($context["type_view"] ?? null)) : ("carousel"));
        echo "',
\t\t\t\t\t\tloop:";
        // line 81
        echo (((twig_length_filter($this->env, ($context["products"] ?? null)) > 5)) ? ("true") : ("false"));
        echo "
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t\t\$('.viewed-module .product-thumb__image').each(function() {
\t\t\t\t\t\tconst date = \$(this).data('special-end');

\t\t\t\t\t\tif(date) {
\t\t\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\t\t\tdate :''+date+'',
\t\t\t\t\t\t\t\ttexts :['";
        // line 90
        echo ($context["text_special_day"] ?? null);
        echo "','";
        echo ($context["text_special_hour"] ?? null);
        echo "','";
        echo ($context["text_special_min"] ?? null);
        echo "','";
        echo ($context["text_special_sec"] ?? null);
        echo "'],
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\t
\t//setTimeout(() => { 
\t\tloadViewed();
\t//}, 300);
});
</script>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_viewed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 90,  303 => 81,  299 => 80,  285 => 73,  276 => 66,  265 => 57,  249 => 54,  246 => 53,  240 => 51,  238 => 50,  228 => 47,  220 => 46,  207 => 45,  205 => 44,  200 => 43,  197 => 42,  189 => 41,  186 => 40,  178 => 38,  172 => 36,  170 => 35,  162 => 34,  159 => 33,  156 => 32,  153 => 31,  150 => 30,  146 => 28,  139 => 25,  136 => 24,  127 => 22,  122 => 21,  120 => 20,  115 => 19,  112 => 18,  110 => 17,  106 => 16,  99 => 15,  97 => 14,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  65 => 6,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_viewed.twig", "");
    }
}
