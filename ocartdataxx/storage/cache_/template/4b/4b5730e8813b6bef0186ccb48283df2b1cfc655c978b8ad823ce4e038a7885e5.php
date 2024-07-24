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

/* unishop2/template/common/header.twig */
class __TwigTemplate_c8601b9ed0a70975a24a8ac2bc5020047d2b48761e580c2aff51f78034b30327 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<title>";
        // line 4
        echo ($context["title"] ?? null);
        echo "</title>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=3\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 9
        if (($context["robots"] ?? null)) {
            // line 10
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 12
        if (($context["description"] ?? null)) {
            // line 13
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 15
        if (($context["keywords"] ?? null)) {
            // line 16
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 18
        echo "<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
";
        // line 20
        if (($context["og_url"] ?? null)) {
            // line 21
            echo "<meta property=\"og:url\" content=\"";
            echo ($context["og_url"] ?? null);
            echo "\" />
";
        }
        // line 23
        if (($context["og_image"] ?? null)) {
            // line 24
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
";
        } else {
            // line 26
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
";
        }
        // line 28
        echo "<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
<meta name=\"theme-color\" content=\"#";
        // line 29
        echo ($context["theme_color"] ?? null);
        echo "\" />
<meta name=\"format-detection\" content=\"telephone=no\">
<meta name=\"format-detection\" content=\"date=no\">
<meta name=\"format-detection\" content=\"address=no\">
<meta name=\"format-detection\" content=\"email=no\">
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["font_preload"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 38
            echo "\t<link href=\"";
            echo $context["font"];
            echo "\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "\t";
            echo ((twig_in_filter("merged", twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41))) ? ((("<link href=\"" . twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41)) . "\" rel=\"preload\" as=\"style\" />")) : (""));
            echo "
\t<link href=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 42);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 42);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 42);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<script>const items_on_mobile = '";
        echo ($context["items_per_row_on_mobile"] ?? null);
        echo "', module_on_mobile = '";
        echo ($context["module_on_mobile"] ?? null);
        echo "', default_view = '";
        echo ($context["default_view"] ?? null);
        echo "', default_mobile_view = '";
        echo ($context["default_mobile_view"] ?? null);
        echo "';</script>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 46
            echo "\t";
            echo ((twig_in_filter("merged", $context["script"])) ? ((("<link href=\"" . $context["script"]) . "\" rel=\"preload\" as=\"script\" />")) : (""));
            echo "
\t<script src=\"";
            // line 47
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        if (($context["user_js"] ?? null)) {
            // line 50
            echo "<script>";
            echo ($context["user_js"] ?? null);
            echo "</script>
";
        }
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 53
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo ((($context["menu_expanded"] ?? null)) ? ("<style>@media (min-width:992px) {header .menu1 .menu__collapse {display:block !important}}</style>") : (""));
        echo "
<noscript><style>.uni-module__wrapper{opacity:1}</style></noscript>

\t\t\t\t";
        // line 58
        echo ($context["config_meta_tags"] ?? null);
        echo "
\t\t\t
</head>
<body ";
        // line 61
        echo ((($context["class"] ?? null)) ? ((("class=\"" . ($context["class"] ?? null)) . "\"")) : (""));
        echo ">
\t<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"header-block row-flex\">
\t\t\t\t<div class=\"header-block__item header-block__item-logo ";
        // line 65
        echo (((($context["menu_positions"] ?? null) == 0)) ? ("col-sm-6 col-md-3 col-lg-3 col-xxl-4") : (""));
        echo "\">
\t\t\t\t\t<div id=\"logo\" class=\"header-logo\">
\t\t\t\t\t\t";
        // line 67
        if (($context["logo"] ?? null)) {
            // line 68
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"header-logo__img img-responsive\" width=\"";
                echo ($context["logo_width"] ?? null);
                echo "\" height=\"";
                echo ($context["logo_height"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t";
            } else {
                // line 71
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" width=\"";
                echo ($context["logo_width"] ?? null);
                echo "\" height=\"";
                echo ($context["logo_height"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 75
                echo "\t\t\t\t\t\t\t\t<span>";
                echo ($context["shop_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["shop_name"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<noindex><input type=\"checkbox\" id=\"navs-toggle\" hidden=\"\">
\t\t\t\t<label for=\"navs-toggle\" class=\"navs-toggle\" onclick><i class=\"fal fa-bars\"></i></label>
            <navs class=\"navs\">
            <div class=\"side-title\"> 
        <div id=\"logo\" class=\"header-logo\">
\t\t\t\t\t\t";
        // line 87
        if (($context["logo"] ?? null)) {
            // line 88
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 89
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"header-logo__img img-responsive\" width=\"";
                echo ($context["logo_width"] ?? null);
                echo "\" height=\"";
                echo ($context["logo_height"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" width=\"";
                echo ($context["logo_width"] ?? null);
                echo "\" height=\"";
                echo ($context["logo_height"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 95
                echo "\t\t\t\t\t\t\t\t<span>";
                echo ($context["shop_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["shop_name"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t</div>
\t\t\t\t<label class=\"side-button-2\" for=\"navs-toggle\">×</label>
\t\t\t\t</div>
\t    <div class=\"hav-menu\">
\t\t\t\t\t";
        // line 104
        echo ($context["language"] ?? null);
        echo " 
\t\t\t\t\t";
        // line 105
        echo ($context["currency"] ?? null);
        echo "
\t\t\t\t\t<div class=\"top-menu__account status-";
        // line 106
        echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 106);
        echo "\">
\t\t\t\t\t<div id=\"account\" class=\"btn-group\">
\t\t\t\t\t";
        // line 108
        if (($context["logged"] ?? null)) {
            // line 109
            echo "\t\t\t\t\t\t<li style=\"justify-content: flex-start;padding-left: 20px;width: 100%;\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "link", [], "any", false, false, false, 109);
            echo "\"><i class=\"fa-light fa-fw fa-user-circle\" style=\"font-size: 22px;margin-right: 19px;\"></i>";
            echo ($context["customer_name"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<hr style=\"margin:5px 0\" />
\t\t\t\t\t\t\t\t";
        } else {
            // line 112
            echo "\t\t\t\t\t\t\t\t\t<li><a ";
            if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "popup_login", [], "any", false, false, false, 112)) {
                echo "onclick=\"uniLoginOpen();\"";
            } else {
                echo " href=\"";
                echo ($context["login"] ?? null);
                echo "\"";
            }
            echo "><i class=\"fa-light fa-fw fa-sign-in-alt\"></i>";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "popup_register", [], "any", false, false, false, 113)) {
                echo "onclick=\"uniRegisterOpen();\"";
            } else {
                echo " href=\"";
                echo ($context["register"] ?? null);
                echo "\" ";
            }
            echo "><i class=\"fa-light fa-fw fa-user-plus\"></i>";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t    </div>
                    ";
        // line 117
        if (($context["menu_positions"] ?? null)) {
            // line 118
            echo "\t\t\t\t\t<button class=\"header-menu__btn\"style=\"font-size: 1em;width: 100%;border-radius: 0;height: 45px;\">
\t\t\t\t\t    <div class=\"header-block__item header-block__item-menu hidden-xs hidden-sm\">
\t\t\t\t\t\t<img src=\"/image/catalog/icons/catalog-icon.png\" alt=\"catalog-icon\" style=\"margin: 0 22px 2px -6px;\">";
            // line 120
            echo ($context["text_menu_catalog"] ?? null);
            echo "</div></button>
\t\t\t\t";
        }
        // line 122
        echo "                    <ul class=\"lux-left__groop-menu\">
                    <li class=\"lux-left__one-groop\">
                        <button class=\"lux-left__menu\" class=\"btn-group\">
                    <a href=\"https://savelife.in.ua/donate/\" target=\"_blank\">
                        <span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t<i class=\"fa-light fa-shield-cross\"></i></span>
                        <span class=\"lux-title__menu\">Повернись живим</span></a>
                        </button>
                    </li>
                    <li class=\"lux-left__one-groop\">
                    <button class=\"lux-left__menu\" class=\"btn-group\">
                        <a href=\"/promotions\" style=\"color: #f84147;\">
                        <span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t<i class=\"fa-light fa-percent\"style=\"color: #f84147;font-weight: 300;\"></i></span>
                        <span class=\"lux-title__menu\">";
        // line 136
        echo ($context["text_stock_to"] ?? null);
        echo " 40%</span></a>
                        </button>
                    </li>
                    <li class=\"lux-left__one-groop\">
                    <button class=\"lux-left__menu\" class=\"btn-group\">
                        <a href=\"/gift-vouchers\">
                        <span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t<i class=\"fa-light fa-gift\"></i></span>
                    <span class=\"lux-title__menu\">";
        // line 144
        echo ($context["text_gift_certificates"] ?? null);
        echo "</span>
                            </a>
                        </button>
                    </li>
                    <li class=\"lux-left__one-groop\">
                    <button class=\"lux-left__menu\" class=\"btn-group\">
                        <a href=\"/index.php?route=product/coupon&path=4\">
                        <span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t<i class=\"fa-light fa-gift\"></i></span>
                    <span class=\"lux-title__menu\">Промокод на знижку</span>
                            </a>
                        </button>
                    </li>
                    <div class=\"top-menu__buttons\">
\t\t\t\t\t";
        // line 158
        if (($context["wishlist"] ?? null)) {
            // line 159
            echo "\t\t\t\t\t<li class=\"lux-left__one-groop\">
\t\t\t\t\t<button class=\"top-menu__btn top-menu__wishlist-btn uni-href\" data-href=\"";
            // line 160
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 160);
            echo "\">
\t\t\t\t\t\t<div class=\"top-menu__wishlist status-";
            // line 161
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 161);
            echo "\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "products", [], "any", false, false, false, 161);
            echo "\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t\t<i class=\"fa-light fa-heart\"></i></span><span class=\"top-menu__btn-text\">";
            // line 164
            echo ($context["wishlist_text_menu"] ?? null);
            echo "</span><span class=\"top-menu__wishlist-total uni-badge\">";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "total", [], "any", false, false, false, 164);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t\t\t";
        if (($context["compare"] ?? null)) {
            // line 171
            echo "\t\t\t\t\t<li class=\"lux-left__one-groop\">
\t\t\t\t\t<button class=\"top-menu__btn top-menu__compare-btn uni-href\" data-href=\"";
            // line 172
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "href", [], "any", false, false, false, 172);
            echo "\">
\t\t\t\t\t\t<div class=\"top-menu__compare status-";
            // line 173
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 173);
            echo "\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "products", [], "any", false, false, false, 173);
            echo "\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t\t<i class=\"top-menu__compare-icon fa-light fa-balance-scale\"></i></span><span class=\"top-menu__btn-text\">";
            // line 176
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "text", [], "any", false, false, false, 176);
            echo "</span><span class=\"top-menu__compare-total uni-badge\">";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "total", [], "any", false, false, false, 176);
            echo "</span>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 182
        echo "\t\t\t         </div>
\t\t\t     </ul>
        <div class=\"lef-block\">";
        // line 184
        echo ($context["text_headtel"] ?? null);
        echo "
        <div class=\"header-block__item header-block__item-telephones";
        // line 185
        echo ((($context["search_phone_change"] ?? null)) ? ("order-1") : (""));
        echo "\">
\t\t\t\t\t<div class=\"header-phones ";
        // line 186
        echo ((((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 186) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) ? ("has-addit") : (""));
        echo "\">
\t\t\t\t\t\t<span class=\"header-phones__main calls";
        // line 187
        echo ((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 187)) ? ("two-line") : (""));
        echo " uni-href\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 187), 0, [], "any", false, false, false, 187), "href", [], "any", false, false, false, 187)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 187)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "href", [], "any", false, false, false, 187)) . "\"")) : (""));
        echo " data-target=\"_blank\" title=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 187), 0, [], "any", false, false, false, 187), "text", [], "any", false, false, false, 187);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 187), 0, [], "any", false, false, false, 187), "number", [], "any", false, false, false, 187);
        echo "</span>
\t\t\t\t\t\t";
        // line 188
        if (twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 188)) {
            echo "<br /><span class=\"header-phones__main two-line uni-href\" ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 188), "href", [], "any", false, false, false, 188)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 188), "href", [], "any", false, false, false, 188)) . "\"")) : (""));
            echo " data-target=\"_blank\" title=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 188), "text", [], "any", false, false, false, 188);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 188), "number", [], "any", false, false, false, 188);
            echo "</span>";
        }
        // line 189
        echo "\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 189) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) {
            // line 190
            echo "\t\t\t\t\t\t\t";
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 191
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs\">
\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t<i class=\"header-phones__show-phone dropdown-toggle fa-light fa-chevron-down\" data-toggle=\"dropdown\" data-target=\"header-phones__ul\"></i>
\t\t\t\t\t\t\t<ul class=\"header-phones__ul dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<!--";
            // line 195
            if (($context["callback"] ?? null)) {
                // line 196
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"uniRequestOpen(['mail', 'phone', 'comment']);\" class=\"header-phones__callback\"><span class=\"header-phones__span\">";
                // line 197
                echo ($context["text_header_callback"] ?? null);
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 199
            echo "-->
\t\t\t\t\t\t\t\t";
            // line 200
            if ((($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 201
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 202
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 202));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li ";
                echo (((twig_get_attribute($this->env, $this->source, $context["contact"], "main", [], "any", true, true, false, 203) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 203)))) ? ("visible-xs") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a class=\"header-phones__a uni-href\" ";
                // line 204
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 204)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 204)) . "\"")) : (""));
                echo " data-target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 205
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 205) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 205)))) {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 206);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 207
$context["contact"], "icon", [], "any", false, false, false, 207)) {
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 208);
                    echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 210)) ? (twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 210)) : (twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 210)));
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "\t\t\t\t\t\t\t\t";
            if (( !($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 215
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 217
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            // line 218
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 219
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t\t\t";
        }
        // line 222
        echo "\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 222)) > 1) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 222)))) {
            // line 223
            echo "\t\t\t\t\t\t\t<div class=\"header-phones__additionals\">
\t\t\t\t\t\t\t\t";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 224));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 225
                echo "\t\t\t\t\t\t\t\t\t<span class=\"header-phones__additional ";
                echo ((($context["key"] == 0)) ? ("selected") : (""));
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 225);
                echo "\" data-phone=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 225);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 226
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 226) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 226)))) {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 227);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 227);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 228
$context["contact"], "icon", [], "any", false, false, false, 228)) {
                    // line 229
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 229);
                    echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 229);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 231);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 237
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 239
        if (($context["callback"] ?? null)) {
            // line 240
            echo "\t\t\t\t<li class=\"header-phones__li\">
\t\t\t\t<a onclick=\"uniRequestOpen(['mail', 'phone', 'comment']);\" class=\"header-phones__callback\"><span class=\"header-phones__span\">";
            // line 241
            echo ($context["text_head_callback"] ?? null);
            echo "</span></a>
\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"menu__messengers\">
\t\t\t\t    <ul class=\"menu__messengers-list\">
\t\t\t\t        <li class=\"menu__messengers-item\">
\t\t\t\t            <a href=\"viber://#\" title=\"Viber\" rel=\"noindex nofollow noopener\" target=\"_blank\"><i class=\"fab fa-viber\"></i></a></li>
\t\t\t\t            <li class=\"menu__messengers-item\"><a href=\"https://t.me/#\" title=\"Telegram\" rel=\"noindex nofollow noopener\" target=\"_blank\"><i class=\"fab fa-telegram\" style=\"color: #337ab7;\"></i></a></li>
\t\t\t\t            </ul>
\t\t\t\t        </div>
\t\t\t\t<div class=\"lef-gr\">";
        // line 252
        echo ($context["text_work_schedule"] ?? null);
        echo "<ul>
\t\t\t<li>пн-пт: ";
        // line 253
        echo ($context["text_with"] ?? null);
        echo " 9:00 до 19:00</li>
            <li>сб-нд: ";
        // line 254
        echo ($context["text_with"] ?? null);
        echo " 10:00 до 17:00</li>
            </ul>
        </div>
        <!--<div class=\"block-info_company\">";
        // line 257
        echo ($context["text_info_company"] ?? null);
        echo "</div>
        <div id=\"top\" class=\"top-menu ";
        // line 258
        echo ((((twig_test_empty(((($context["headerlinks"] ?? null) && ($context["currency"] ?? null)) && ($context["language"] ?? null))) && ((twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 258) && twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 258)) == 2)) && (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 258) == 0))) ? ("visible-on-mobile") : (""));
        echo "\" >
                    <div class=\"left-menu__links\">
\t\t\t\t\t";
        // line 260
        if (($context["headerlinks"] ?? null)) {
            // line 261
            echo "\t\t\t\t\t\t<div class=\"left-links btn-group\">
\t\t\t\t\t\t\t<ul class=\"left-links__ul\">
\t\t\t\t\t\t\t\t";
            // line 263
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headerlinks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["headerlink"]) {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t<li class=\"left-links__li\"><a class=\"left-links__a\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "link", [], "any", false, false, false, 264);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "title", [], "any", false, false, false, 264);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "title", [], "any", false, false, false, 264);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 269
        echo "\t\t\t\t</div>
\t\t\t</div>-->
        <div class=\"block-info_company\">";
        // line 271
        echo ($context["text_help_user"] ?? null);
        echo "
        <ul>
\t\t\t<li><a href=\"/dostavka-i-oplata\" title=\"";
        // line 273
        echo ($context["text_delivery_payment"] ?? null);
        echo "\">";
        echo ($context["text_delivery_payment"] ?? null);
        echo "</a></li>
            <li><a href=\"/obmin-povernennya-tovaru\" title=\"";
        // line 274
        echo ($context["text_product_return"] ?? null);
        echo "\">";
        echo ($context["text_product_return"] ?? null);
        echo "</a></li>
            <li><a href=\"/index.php?route=information/uni_news&news_path=1\" title=\"";
        // line 275
        echo ($context["text_news_article"] ?? null);
        echo "\">";
        echo ($context["text_news_article"] ?? null);
        echo "</a></li>
            <li><a href=\"/sitemap\" title=\"";
        // line 276
        echo ($context["text_map_site"] ?? null);
        echo "\">";
        echo ($context["text_map_site"] ?? null);
        echo "</a></li>
            <li><a href=\"/brands\" title=\"";
        // line 277
        echo ($context["text_manufact"] ?? null);
        echo "\">";
        echo ($context["text_manufact"] ?? null);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"top-menu__account status-";
        // line 280
        echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 280);
        echo "\"style=\"
        margin-bottom: 50px;\">
\t\t\t\t\t<div id=\"account\" class=\"btn-group\">
\t\t\t\t\t";
        // line 283
        if (($context["logged"] ?? null)) {
            // line 284
            echo "\t\t\t\t\t\t<li style=\"width: 100%;\"><a href=\"";
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa-light fa-fw fa-sign-out-alt\"></i>";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 286
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t    </div>
                    </div>
\t\t\t
                </navs>
\t    <label for=\"navs-toggle\" class=\"mask-content\" onclick=\"\"></label></noindex>
\t\t\t\t";
        // line 292
        if (($context["menu_positions"] ?? null)) {
            // line 293
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-menu hidden-xs hidden-sm\">
\t\t\t\t\t\t<button class=\"header-menu__btn\"><img src=\"/image/catalog/icons/catalog-icon.png\" alt=\"catalog-icon\">";
            // line 294
            echo ($context["text_menu"] ?? null);
            echo "</button>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 297
        echo "\t\t\t\t<div id=\"search\" class=\"header-block__item header-block__item-search ";
        echo ((($context["search_phone_change"] ?? null)) ? ("order-2") : (""));
        echo " hidden-xs hidden-sm\">
\t\t\t\t\t";
        // line 298
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"header-block__item header-block__item-telephone";
        // line 300
        echo ((($context["search_phone_change"] ?? null)) ? ("order-1") : (""));
        echo "\">
\t\t\t\t\t<div class=\"header-phones ";
        // line 301
        echo ((((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 301) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) ? ("has-addit") : (""));
        echo "\">
\t\t\t\t\t\t<span class=\"header-phones__main ";
        // line 302
        echo ((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 302)) ? ("two-line") : (""));
        echo " uni-href\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 302), 0, [], "any", false, false, false, 302), "href", [], "any", false, false, false, 302)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 302)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "href", [], "any", false, false, false, 302)) . "\"")) : (""));
        echo " data-target=\"_blank\" title=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 302), 0, [], "any", false, false, false, 302), "text", [], "any", false, false, false, 302);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 302), 0, [], "any", false, false, false, 302), "number", [], "any", false, false, false, 302);
        echo "</span>
\t\t\t\t\t\t";
        // line 303
        if (twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 303)) {
            echo "<br /><span class=\"header-phones__main two-line uni-href\" ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 303), "href", [], "any", false, false, false, 303)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 303), "href", [], "any", false, false, false, 303)) . "\"")) : (""));
            echo " data-target=\"_blank\" title=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 303), "text", [], "any", false, false, false, 303);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 303), "number", [], "any", false, false, false, 303);
            echo "</span>";
        }
        // line 304
        echo "\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 304) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) {
            // line 305
            echo "\t\t\t\t\t\t\t";
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 306
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs\">
\t\t\t\t\t\t\t";
            }
            // line 308
            echo "\t\t\t\t\t\t\t<i class=\"header-phones__show-phone dropdown-toggle fa-light fa-chevron-down\" data-toggle=\"dropdown\" data-target=\"header-phones__ul\"></i>
\t\t\t\t\t\t\t<ul class=\"header-phones__ul dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t";
            // line 310
            if ((($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 311
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 313
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 313));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 314
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li ";
                echo (((twig_get_attribute($this->env, $this->source, $context["contact"], "main", [], "any", true, true, false, 314) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 314)))) ? ("visible-xs") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a class=\"header-phones__a uni-href\" ";
                // line 315
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 315)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 315)) . "\"")) : (""));
                echo " data-target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 316
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 316) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 316)))) {
                    // line 317
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 317);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 318
$context["contact"], "icon", [], "any", false, false, false, 318)) {
                    // line 319
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 319);
                    echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 321
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 321)) ? (twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 321)) : (twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 321)));
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            echo "\t\t\t\t\t\t\t\t";
            if (( !($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 328
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            // line 329
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 330
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 332
            echo "\t\t\t\t\t\t";
        }
        // line 333
        echo "\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 333)) > 1) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 333)))) {
            // line 334
            echo "\t\t\t\t\t\t\t<div class=\"header-phones__additionals\">
\t\t\t\t\t\t\t\t";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 335));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 336
                echo "\t\t\t\t\t\t\t\t\t<span class=\"header-phones__additional ";
                echo ((($context["key"] == 0)) ? ("selected") : (""));
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 336);
                echo "\" data-phone=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 336);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 337
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 337) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 337)))) {
                    // line 338
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 338);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 338);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 339
$context["contact"], "icon", [], "any", false, false, false, 339)) {
                    // line 340
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 340);
                    echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 340);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 342
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 342);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 344
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 348
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 350
        if ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 350) == 2)) {
            // line 351
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-account\">
\t\t\t\t\t\t";
            // line 352
            if (($context["logged"] ?? null)) {
                // line 353
                echo "\t\t\t\t\t\t\t<div class=\"header-account\">
\t\t\t\t\t\t\t\t<i class=\"header-account__icon fa-light fa-user-circle dropdown-toggle\" data-toggle=\"dropdown\"></i>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 356
                echo ($context["customer_name"] ?? null);
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "link", [], "any", false, false, false, 356);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"far fa-fw fa-user\"></i></span>";
                echo ($context["text_account"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 357
                echo ($context["text_order_history"] ?? null);
                echo "\"><a href=\"";
                echo ($context["order"] ?? null);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-tasks\"></i>";
                echo ($context["text_order"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 358
                echo ($context["text_my_reward_account"] ?? null);
                echo "\"><a href=\"reward-points\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-piggy-bank\"></i></span>";
                echo ($context["text_my_reward"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                // line 359
                if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "download_link", [], "any", false, false, false, 359)) {
                    echo "<li class=\"list-group-hitem\"><a href=\"";
                    echo ($context["download"] ?? null);
                    echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-download\"></i></span>";
                    echo ($context["text_download"] ?? null);
                    echo "</a></li>";
                }
                // line 360
                echo "\t\t\t\t\t\t\t\t\t<hr style=\"margin:5px 0\" />
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\"><a href=\"";
                // line 361
                echo ($context["logout"] ?? null);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-sign-out-alt\"></i></span>";
                echo ($context["text_logout"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 365
                echo "\t\t\t\t\t\t\t<div class=\"header-account uni-href\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "popup_login", [], "any", false, false, false, 365)) {
                    echo "onclick=\"uniLoginOpen();\"";
                } else {
                    echo " data-href=\"";
                    echo ($context["login"] ?? null);
                    echo "\"";
                }
                echo " title=\"";
                echo ($context["text_account"] ?? null);
                echo "\"><i class=\"header-account__icon fa-light fa-user\"></i></div>
\t\t\t\t\t\t";
            }
            // line 367
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 369
        echo "\t\t\t\t";
        if ((($context["wishlist"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 369) == 2))) {
            // line 370
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-wishlist\">
\t\t\t\t\t\t<div class=\"header-wishlist uni-href\" data-href=\"";
            // line 371
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 371);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "text", [], "any", false, false, false, 371);
            echo "\"><i class=\"header-wishlist__icon fa-light fa-heart\"></i><span class=\"header-wishlist__total-items\">";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "total", [], "any", false, false, false, 371);
            echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 374
        echo "\t\t\t\t";
        if ((($context["compare"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 374) == 2))) {
            // line 375
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-compare\">
\t\t\t\t\t\t<div class=\"header-compare uni-href\" data-href=\"";
            // line 376
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "href", [], "any", false, false, false, 376);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "text", [], "any", false, false, false, 376);
            echo "\"><i class=\"header-compare__icon fa-light fa-balance-scale\"></i><span class=\"header-compare__total-items\">";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "total", [], "any", false, false, false, 376);
            echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 379
        echo "\t\t\t\t<div class=\"header-block__item header-block__item-cart\">";
        echo ($context["cart"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 384
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t<div id=\"search2\" class=\"visible-xs visible-sm\"></div>
\t\t\t\t<script>\$('#search .header-search').clone().appendTo('#search2');</script>
\t\t\t</div>
\t\t</div>
\t</header>
\t<main>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1172 => 384,  1163 => 379,  1153 => 376,  1150 => 375,  1147 => 374,  1137 => 371,  1134 => 370,  1131 => 369,  1127 => 367,  1113 => 365,  1104 => 361,  1101 => 360,  1093 => 359,  1087 => 358,  1079 => 357,  1071 => 356,  1066 => 353,  1064 => 352,  1061 => 351,  1059 => 350,  1055 => 348,  1051 => 346,  1044 => 344,  1038 => 342,  1030 => 340,  1028 => 339,  1021 => 338,  1019 => 337,  1010 => 336,  1006 => 335,  1003 => 334,  1000 => 333,  997 => 332,  993 => 330,  991 => 329,  988 => 328,  982 => 326,  979 => 325,  968 => 321,  962 => 319,  960 => 318,  955 => 317,  953 => 316,  949 => 315,  944 => 314,  939 => 313,  933 => 311,  931 => 310,  927 => 308,  923 => 306,  920 => 305,  917 => 304,  907 => 303,  897 => 302,  893 => 301,  889 => 300,  884 => 298,  879 => 297,  873 => 294,  870 => 293,  868 => 292,  860 => 286,  852 => 284,  850 => 283,  844 => 280,  836 => 277,  830 => 276,  824 => 275,  818 => 274,  812 => 273,  807 => 271,  803 => 269,  798 => 266,  785 => 264,  781 => 263,  777 => 261,  775 => 260,  770 => 258,  766 => 257,  760 => 254,  756 => 253,  752 => 252,  742 => 244,  736 => 241,  733 => 240,  731 => 239,  727 => 237,  723 => 235,  716 => 233,  710 => 231,  702 => 229,  700 => 228,  693 => 227,  691 => 226,  682 => 225,  678 => 224,  675 => 223,  672 => 222,  669 => 221,  665 => 219,  663 => 218,  660 => 217,  654 => 215,  651 => 214,  640 => 210,  634 => 208,  632 => 207,  627 => 206,  625 => 205,  621 => 204,  616 => 203,  611 => 202,  608 => 201,  606 => 200,  603 => 199,  597 => 197,  594 => 196,  592 => 195,  588 => 193,  584 => 191,  581 => 190,  578 => 189,  568 => 188,  558 => 187,  554 => 186,  550 => 185,  546 => 184,  542 => 182,  531 => 176,  523 => 173,  519 => 172,  516 => 171,  513 => 170,  502 => 164,  494 => 161,  490 => 160,  487 => 159,  485 => 158,  468 => 144,  457 => 136,  441 => 122,  436 => 120,  432 => 118,  430 => 117,  426 => 115,  413 => 113,  400 => 112,  391 => 109,  389 => 108,  384 => 106,  380 => 105,  376 => 104,  370 => 100,  367 => 99,  359 => 97,  353 => 95,  350 => 94,  347 => 93,  331 => 91,  317 => 89,  314 => 88,  312 => 87,  303 => 80,  300 => 79,  292 => 77,  286 => 75,  283 => 74,  280 => 73,  264 => 71,  250 => 69,  247 => 68,  245 => 67,  240 => 65,  233 => 61,  227 => 58,  221 => 55,  212 => 53,  208 => 52,  202 => 50,  200 => 49,  192 => 47,  187 => 46,  183 => 45,  172 => 44,  160 => 42,  155 => 41,  151 => 40,  142 => 38,  138 => 37,  127 => 35,  123 => 34,  115 => 29,  110 => 28,  104 => 26,  98 => 24,  96 => 23,  90 => 21,  88 => 20,  82 => 18,  76 => 16,  74 => 15,  68 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/header.twig", "");
    }
}
