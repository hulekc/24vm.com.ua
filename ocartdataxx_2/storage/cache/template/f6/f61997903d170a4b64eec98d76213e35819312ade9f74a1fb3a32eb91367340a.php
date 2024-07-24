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
class __TwigTemplate_606ec78608ccb06d6f6a41c1befb2c84aaa06c606c10c9d652a47e76f0c25de6 extends \Twig\Template
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
</head>
<body ";
        // line 58
        echo ((($context["class"] ?? null)) ? ((("class=\"" . ($context["class"] ?? null)) . "\"")) : (""));
        echo ">
\t<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"header-block row-flex\">
\t\t\t\t<div class=\"header-block__item header-block__item-logo ";
        // line 62
        echo (((($context["menu_positions"] ?? null) == 0)) ? ("col-sm-6 col-md-3 col-lg-3 col-xxl-4") : (""));
        echo "\">
\t\t\t\t\t<div id=\"logo\" class=\"header-logo\">
\t\t\t\t\t\t";
        // line 64
        if (($context["logo"] ?? null)) {
            // line 65
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 66
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
                // line 68
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
            // line 70
            echo "\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 72
                echo "\t\t\t\t\t\t\t\t<span>";
                echo ($context["shop_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["shop_name"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<noindex><input type=\"checkbox\" id=\"navs-toggle\" hidden=\"\">
\t\t\t\t<label for=\"navs-toggle\" class=\"navs-toggle\" onclick><i class=\"fal fa-bars\"></i></label>
            <navs class=\"navs\">
            <div class=\"side-title\"> 
        <div id=\"logo\" class=\"header-logo\">
\t\t\t\t\t\t";
        // line 84
        if (($context["logo"] ?? null)) {
            // line 85
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 86
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
                // line 88
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
            // line 90
            echo "\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && (($context["home"] ?? null) == ($context["og_url"] ?? null)))) {
                // line 92
                echo "\t\t\t\t\t\t\t\t<span>";
                echo ($context["shop_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            } else {
                // line 94
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["shop_name"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t</div>
\t\t\t\t<label class=\"side-button-2\" for=\"navs-toggle\">×</label>
\t\t\t\t</div>
\t    <div class=\"hav-menu\">
\t\t\t\t\t";
        // line 101
        echo ($context["language"] ?? null);
        echo " 
\t\t\t\t\t";
        // line 102
        echo ($context["currency"] ?? null);
        echo "
\t\t\t\t\t<div class=\"top-menu__account status-";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 103);
        echo "\">
\t\t\t\t\t<div id=\"account\" class=\"btn-group\">
\t\t\t\t\t";
        // line 105
        if (($context["logged"] ?? null)) {
            // line 106
            echo "\t\t\t\t\t\t<li style=\"justify-content: flex-start;padding-left: 20px;width: 100%;\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "link", [], "any", false, false, false, 106);
            echo "\"><i class=\"fa-light fa-fw fa-user-circle\" style=\"font-size: 22px;margin-right: 19px;\"></i>";
            echo ($context["customer_name"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<hr style=\"margin:5px 0\" />
\t\t\t\t\t\t\t\t";
        } else {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t<li><a ";
            if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "popup_login", [], "any", false, false, false, 109)) {
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
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "popup_register", [], "any", false, false, false, 110)) {
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
        // line 112
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t    </div>
                    ";
        // line 114
        if (($context["menu_positions"] ?? null)) {
            // line 115
            echo "\t\t\t\t\t<button class=\"header-menu__btn\"style=\"font-size: 1em;width: 100%;border-radius: 0;height: 45px;\">
\t\t\t\t\t    <div class=\"header-block__item header-block__item-menu hidden-xs hidden-sm\">
\t\t\t\t\t\t<img src=\"/image/catalog/icons/catalog-icon.png\" alt=\"catalog-icon\" style=\"margin: 0 22px 2px -6px;\">";
            // line 117
            echo ($context["text_menu_catalog"] ?? null);
            echo "</div></button>
\t\t\t\t";
        }
        // line 119
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
        // line 133
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
        // line 141
        echo ($context["text_gift_certificates"] ?? null);
        echo "</span>
                            </a>
                        </button>
                    </li>
                    <div class=\"top-menu__buttons\">
\t\t\t\t\t";
        // line 146
        if (($context["wishlist"] ?? null)) {
            // line 147
            echo "\t\t\t\t\t<li class=\"lux-left__one-groop\">
\t\t\t\t\t<button class=\"top-menu__btn top-menu__wishlist-btn uni-href\" data-href=\"";
            // line 148
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 148);
            echo "\">
\t\t\t\t\t\t<div class=\"top-menu__wishlist status-";
            // line 149
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 149);
            echo "\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "products", [], "any", false, false, false, 149);
            echo "\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t\t<i class=\"fa-light fa-heart\"></i></span><span class=\"top-menu__btn-text\">";
            // line 152
            echo ($context["wishlist_text_menu"] ?? null);
            echo "</span><span class=\"top-menu__wishlist-total uni-badge\">";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "total", [], "any", false, false, false, 152);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t";
        if (($context["compare"] ?? null)) {
            // line 159
            echo "\t\t\t\t\t<li class=\"lux-left__one-groop\">
\t\t\t\t\t<button class=\"top-menu__btn top-menu__compare-btn uni-href\" data-href=\"";
            // line 160
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "href", [], "any", false, false, false, 160);
            echo "\">
\t\t\t\t\t\t<div class=\"top-menu__compare status-";
            // line 161
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 161);
            echo "\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "products", [], "any", false, false, false, 161);
            echo "\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t\t<i class=\"top-menu__compare-icon fa-light fa-balance-scale\"></i></span><span class=\"top-menu__btn-text\">";
            // line 164
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "text", [], "any", false, false, false, 164);
            echo "</span><span class=\"top-menu__compare-total uni-badge\">";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "total", [], "any", false, false, false, 164);
            echo "</span>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t         </div>
\t\t\t     </ul>
        <div class=\"lef-block\">";
        // line 172
        echo ($context["text_headtel"] ?? null);
        echo "
        <div class=\"header-block__item header-block__item-telephones";
        // line 173
        echo ((($context["search_phone_change"] ?? null)) ? ("order-1") : (""));
        echo "\">
\t\t\t\t\t<div class=\"header-phones ";
        // line 174
        echo ((((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 174) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) ? ("has-addit") : (""));
        echo "\">
\t\t\t\t\t\t<span class=\"header-phones__main calls";
        // line 175
        echo ((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 175)) ? ("two-line") : (""));
        echo " uni-href\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 175), 0, [], "any", false, false, false, 175), "href", [], "any", false, false, false, 175)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 175)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "href", [], "any", false, false, false, 175)) . "\"")) : (""));
        echo " data-target=\"_blank\" title=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 175), 0, [], "any", false, false, false, 175), "text", [], "any", false, false, false, 175);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 175), 0, [], "any", false, false, false, 175), "number", [], "any", false, false, false, 175);
        echo "</span>
\t\t\t\t\t\t";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 176)) {
            echo "<br /><span class=\"header-phones__main two-line uni-href\" ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 176), "href", [], "any", false, false, false, 176)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 176), "href", [], "any", false, false, false, 176)) . "\"")) : (""));
            echo " data-target=\"_blank\" title=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 176), "text", [], "any", false, false, false, 176);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 176), "number", [], "any", false, false, false, 176);
            echo "</span>";
        }
        // line 177
        echo "\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 177) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) {
            // line 178
            echo "\t\t\t\t\t\t\t";
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 179
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs\">
\t\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t\t<i class=\"header-phones__show-phone dropdown-toggle icone-hd fa-light fa-chevron-down\" data-toggle=\"dropdown\" data-target=\"header-phones__ul\"></i>
\t\t\t\t\t\t\t<ul class=\"header-phones__ul dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<!--";
            // line 183
            if (($context["callback"] ?? null)) {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"uniRequestOpen(['mail', 'phone', 'comment']);\" class=\"header-phones__callback\"><span class=\"header-phones__span\">";
                // line 185
                echo ($context["text_header_callback"] ?? null);
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 187
            echo "-->
\t\t\t\t\t\t\t\t";
            // line 188
            if ((($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 189
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 190
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 190));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li ";
                echo (((twig_get_attribute($this->env, $this->source, $context["contact"], "main", [], "any", true, true, false, 191) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 191)))) ? ("visible-xs") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a class=\"header-phones__a uni-href\" ";
                // line 192
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 192)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 192)) . "\"")) : (""));
                echo " data-target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 193
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 193) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 193)))) {
                    // line 194
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 194);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 195
$context["contact"], "icon", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 196);
                    echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 198)) ? (twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 198)) : (twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 198)));
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "\t\t\t\t\t\t\t\t";
            if (( !($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            // line 206
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 207
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t";
        }
        // line 210
        echo "\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 210)) > 1) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 210)))) {
            // line 211
            echo "\t\t\t\t\t\t\t<div class=\"header-phones__additionals\">
\t\t\t\t\t\t\t\t";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 212));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 213
                echo "\t\t\t\t\t\t\t\t\t<span class=\"header-phones__additional ";
                echo ((($context["key"] == 0)) ? ("selected") : (""));
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 213);
                echo "\" data-phone=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 213);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 214
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 214) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 214)))) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 215);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 215);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 216
$context["contact"], "icon", [], "any", false, false, false, 216)) {
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 217);
                    echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 217);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 219
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 219);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 221
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 225
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 227
        if (($context["callback"] ?? null)) {
            // line 228
            echo "\t\t\t\t<li class=\"header-phones__li\">
\t\t\t\t<a onclick=\"uniRequestOpen(['mail', 'phone', 'comment']);\" class=\"header-phones__callback\"><span class=\"header-phones__span\">";
            // line 229
            echo ($context["text_head_callback"] ?? null);
            echo "</span></a>
\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"menu__messengers\">
\t\t\t\t    <ul class=\"menu__messengers-list\">
\t\t\t\t        <li class=\"menu__messengers-item\">
\t\t\t\t            <a href=\"viber://#\" title=\"Viber\" rel=\"noindex nofollow noopener\" target=\"_blank\"><i class=\"fab fa-viber\"></i></a></li>
\t\t\t\t            <li class=\"menu__messengers-item\"><a href=\"https://t.me/#\" title=\"Telegram\" rel=\"noindex nofollow noopener\" target=\"_blank\"><i class=\"fab fa-telegram\" style=\"color: #337ab7;\"></i></a></li>
\t\t\t\t            </ul>
\t\t\t\t        </div>
\t\t\t\t<div class=\"lef-gr\">";
        // line 240
        echo ($context["text_work_schedule"] ?? null);
        echo "<ul>
\t\t\t<li>пн-пт: ";
        // line 241
        echo ($context["text_with"] ?? null);
        echo " 9:00 до 19:00</li>
            <li>сб-нд: ";
        // line 242
        echo ($context["text_with"] ?? null);
        echo " 10:00 до 17:00</li>
            </ul>
        </div>
        <!--<div class=\"block-info_company\">";
        // line 245
        echo ($context["text_info_company"] ?? null);
        echo "</div>
        <div id=\"top\" class=\"top-menu ";
        // line 246
        echo ((((twig_test_empty(((($context["headerlinks"] ?? null) && ($context["currency"] ?? null)) && ($context["language"] ?? null))) && ((twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 246) && twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 246)) == 2)) && (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 246) == 0))) ? ("visible-on-mobile") : (""));
        echo "\" >
                    <div class=\"left-menu__links\">
\t\t\t\t\t";
        // line 248
        if (($context["headerlinks"] ?? null)) {
            // line 249
            echo "\t\t\t\t\t\t<div class=\"left-links btn-group\">
\t\t\t\t\t\t\t<ul class=\"left-links__ul\">
\t\t\t\t\t\t\t\t";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headerlinks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["headerlink"]) {
                // line 252
                echo "\t\t\t\t\t\t\t\t\t<li class=\"left-links__li\"><a class=\"left-links__a\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "link", [], "any", false, false, false, 252);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "title", [], "any", false, false, false, 252);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "title", [], "any", false, false, false, 252);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 257
        echo "\t\t\t\t</div>
\t\t\t</div>-->
        <div class=\"block-info_company\">";
        // line 259
        echo ($context["text_help_user"] ?? null);
        echo "
        <ul>
\t\t\t<li><a href=\"/dostavka-i-oplata\" title=\"";
        // line 261
        echo ($context["text_delivery_payment"] ?? null);
        echo "\">";
        echo ($context["text_delivery_payment"] ?? null);
        echo "</a></li>
            <li><a href=\"/obmin-povernennya-tovaru\" title=\"";
        // line 262
        echo ($context["text_product_return"] ?? null);
        echo "\">";
        echo ($context["text_product_return"] ?? null);
        echo "</a></li>
            <li><a href=\"/index.php?route=information/uni_news&news_path=1\" title=\"";
        // line 263
        echo ($context["text_news_article"] ?? null);
        echo "\">";
        echo ($context["text_news_article"] ?? null);
        echo "</a></li>
            <li><a href=\"/sitemap\" title=\"";
        // line 264
        echo ($context["text_map_site"] ?? null);
        echo "\">";
        echo ($context["text_map_site"] ?? null);
        echo "</a></li>
            <li><a href=\"/brands\" title=\"";
        // line 265
        echo ($context["text_manufact"] ?? null);
        echo "\">";
        echo ($context["text_manufact"] ?? null);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"top-menu__account status-";
        // line 268
        echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 268);
        echo "\"style=\"
        margin-bottom: 50px;\">
\t\t\t\t\t<div id=\"account\" class=\"btn-group\">
\t\t\t\t\t";
        // line 271
        if (($context["logged"] ?? null)) {
            // line 272
            echo "\t\t\t\t\t\t<li style=\"width: 100%;\"><a href=\"";
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa-light fa-fw fa-sign-out-alt\"></i>";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 274
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t    </div>
                    </div>
\t\t\t
                </navs>
\t    <label for=\"navs-toggle\" class=\"mask-content\" onclick=\"\"></label></noindex>
\t\t\t\t";
        // line 280
        if (($context["menu_positions"] ?? null)) {
            // line 281
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-menu hidden-xs hidden-sm\">
\t\t\t\t\t\t<button class=\"header-menu__btn\"><img src=\"/image/catalog/icons/catalog-icon.png\" alt=\"catalog-icon\">";
            // line 282
            echo ($context["text_menu"] ?? null);
            echo "</button>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 285
        echo "\t\t\t\t<div id=\"search\" class=\"header-block__item header-block__item-search ";
        echo ((($context["search_phone_change"] ?? null)) ? ("order-2") : (""));
        echo " hidden-xs hidden-sm\">
\t\t\t\t\t";
        // line 286
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"header-block__item header-block__item-telephone";
        // line 288
        echo ((($context["search_phone_change"] ?? null)) ? ("order-1") : (""));
        echo "\">
\t\t\t\t\t<div class=\"header-phones ";
        // line 289
        echo ((((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 289) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) ? ("has-addit") : (""));
        echo "\">
\t\t\t\t\t\t<span class=\"header-phones__main ";
        // line 290
        echo ((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 290)) ? ("two-line") : (""));
        echo " uni-href\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 290), 0, [], "any", false, false, false, 290), "href", [], "any", false, false, false, 290)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 290)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "href", [], "any", false, false, false, 290)) . "\"")) : (""));
        echo " data-target=\"_blank\" title=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 290), 0, [], "any", false, false, false, 290), "text", [], "any", false, false, false, 290);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 290), 0, [], "any", false, false, false, 290), "number", [], "any", false, false, false, 290);
        echo "</span>
\t\t\t\t\t\t";
        // line 291
        if (twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 291)) {
            echo "<br /><span class=\"header-phones__main two-line uni-href\" ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 291), "href", [], "any", false, false, false, 291)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 291), "href", [], "any", false, false, false, 291)) . "\"")) : (""));
            echo " data-target=\"_blank\" title=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 291), "text", [], "any", false, false, false, 291);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 291), "number", [], "any", false, false, false, 291);
            echo "</span>";
        }
        // line 292
        echo "\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 292) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) {
            // line 293
            echo "\t\t\t\t\t\t\t";
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 294
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs\">
\t\t\t\t\t\t\t";
            }
            // line 296
            echo "\t\t\t\t\t\t\t<i class=\"header-phones__show-phone dropdown-toggle fa-light fa-chevron-down\" data-toggle=\"dropdown\" data-target=\"header-phones__ul\"></i>
\t\t\t\t\t\t\t<ul class=\"header-phones__ul dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t";
            // line 298
            if ((($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 299
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 301
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 301));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 302
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li ";
                echo (((twig_get_attribute($this->env, $this->source, $context["contact"], "main", [], "any", true, true, false, 302) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 302)))) ? ("visible-xs") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a class=\"header-phones__a uni-href\" ";
                // line 303
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 303)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 303)) . "\"")) : (""));
                echo " data-target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 304
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 304) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 304)))) {
                    // line 305
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 305);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 306
$context["contact"], "icon", [], "any", false, false, false, 306)) {
                    // line 307
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 307);
                    echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 309
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 309)) ? (twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 309)) : (twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 309)));
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "\t\t\t\t\t\t\t\t";
            if (( !($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 314
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 316
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            // line 317
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 318
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t\t";
        }
        // line 321
        echo "\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 321)) > 1) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 321)))) {
            // line 322
            echo "\t\t\t\t\t\t\t<div class=\"header-phones__additionals\">
\t\t\t\t\t\t\t\t";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 323));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 324
                echo "\t\t\t\t\t\t\t\t\t<span class=\"header-phones__additional ";
                echo ((($context["key"] == 0)) ? ("selected") : (""));
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 324);
                echo "\" data-phone=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 324);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 325
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 325) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 325)))) {
                    // line 326
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 326);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 326);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 327
$context["contact"], "icon", [], "any", false, false, false, 327)) {
                    // line 328
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 328);
                    echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 328);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 330
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 330);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 332
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 336
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 338
        if ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 338) == 2)) {
            // line 339
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-account\">
\t\t\t\t\t\t";
            // line 340
            if (($context["logged"] ?? null)) {
                // line 341
                echo "\t\t\t\t\t\t\t<div class=\"header-account\">
\t\t\t\t\t\t\t\t<i class=\"header-account__icon fa-light fa-user-circle dropdown-toggle\" data-toggle=\"dropdown\"></i>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 344
                echo ($context["customer_name"] ?? null);
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "link", [], "any", false, false, false, 344);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"far fa-fw fa-user\"></i></span>";
                echo ($context["text_account"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 345
                echo ($context["text_order_history"] ?? null);
                echo "\"><a href=\"";
                echo ($context["order"] ?? null);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-tasks\"></i>";
                echo ($context["text_order"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 346
                echo ($context["text_my_reward_account"] ?? null);
                echo "\"><a href=\"reward-points\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-piggy-bank\"></i></span>";
                echo ($context["text_my_reward"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                // line 347
                if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "download_link", [], "any", false, false, false, 347)) {
                    echo "<li class=\"list-group-hitem\"><a href=\"";
                    echo ($context["download"] ?? null);
                    echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-download\"></i></span>";
                    echo ($context["text_download"] ?? null);
                    echo "</a></li>";
                }
                // line 348
                echo "\t\t\t\t\t\t\t\t\t<hr style=\"margin:5px 0\" />
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\"><a href=\"";
                // line 349
                echo ($context["logout"] ?? null);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-sign-out-alt\"></i></span>";
                echo ($context["text_logout"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 353
                echo "\t\t\t\t\t\t\t<div class=\"header-account uni-href\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "popup_login", [], "any", false, false, false, 353)) {
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
            // line 355
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 357
        echo "\t\t\t\t";
        if ((($context["wishlist"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 357) == 2))) {
            // line 358
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-wishlist\">
\t\t\t\t\t\t<div class=\"header-wishlist uni-href\" data-href=\"";
            // line 359
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 359);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "text", [], "any", false, false, false, 359);
            echo "\"><i class=\"header-wishlist__icon fa-light fa-heart\"></i><span class=\"header-wishlist__total-items\">";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "total", [], "any", false, false, false, 359);
            echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 362
        echo "\t\t\t\t";
        if ((($context["compare"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 362) == 2))) {
            // line 363
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-compare\">
\t\t\t\t\t\t<div class=\"header-compare uni-href\" data-href=\"";
            // line 364
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "href", [], "any", false, false, false, 364);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "text", [], "any", false, false, false, 364);
            echo "\"><i class=\"header-compare__icon fa-light fa-balance-scale\"></i><span class=\"header-compare__total-items\">";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "total", [], "any", false, false, false, 364);
            echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 367
        echo "\t\t\t\t<div class=\"header-block__item header-block__item-cart\">";
        echo ($context["cart"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 372
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
        return array (  1157 => 372,  1148 => 367,  1138 => 364,  1135 => 363,  1132 => 362,  1122 => 359,  1119 => 358,  1116 => 357,  1112 => 355,  1098 => 353,  1089 => 349,  1086 => 348,  1078 => 347,  1072 => 346,  1064 => 345,  1056 => 344,  1051 => 341,  1049 => 340,  1046 => 339,  1044 => 338,  1040 => 336,  1036 => 334,  1029 => 332,  1023 => 330,  1015 => 328,  1013 => 327,  1006 => 326,  1004 => 325,  995 => 324,  991 => 323,  988 => 322,  985 => 321,  982 => 320,  978 => 318,  976 => 317,  973 => 316,  967 => 314,  964 => 313,  953 => 309,  947 => 307,  945 => 306,  940 => 305,  938 => 304,  934 => 303,  929 => 302,  924 => 301,  918 => 299,  916 => 298,  912 => 296,  908 => 294,  905 => 293,  902 => 292,  892 => 291,  882 => 290,  878 => 289,  874 => 288,  869 => 286,  864 => 285,  858 => 282,  855 => 281,  853 => 280,  845 => 274,  837 => 272,  835 => 271,  829 => 268,  821 => 265,  815 => 264,  809 => 263,  803 => 262,  797 => 261,  792 => 259,  788 => 257,  783 => 254,  770 => 252,  766 => 251,  762 => 249,  760 => 248,  755 => 246,  751 => 245,  745 => 242,  741 => 241,  737 => 240,  727 => 232,  721 => 229,  718 => 228,  716 => 227,  712 => 225,  708 => 223,  701 => 221,  695 => 219,  687 => 217,  685 => 216,  678 => 215,  676 => 214,  667 => 213,  663 => 212,  660 => 211,  657 => 210,  654 => 209,  650 => 207,  648 => 206,  645 => 205,  639 => 203,  636 => 202,  625 => 198,  619 => 196,  617 => 195,  612 => 194,  610 => 193,  606 => 192,  601 => 191,  596 => 190,  593 => 189,  591 => 188,  588 => 187,  582 => 185,  579 => 184,  577 => 183,  573 => 181,  569 => 179,  566 => 178,  563 => 177,  553 => 176,  543 => 175,  539 => 174,  535 => 173,  531 => 172,  527 => 170,  516 => 164,  508 => 161,  504 => 160,  501 => 159,  498 => 158,  487 => 152,  479 => 149,  475 => 148,  472 => 147,  470 => 146,  462 => 141,  451 => 133,  435 => 119,  430 => 117,  426 => 115,  424 => 114,  420 => 112,  407 => 110,  394 => 109,  385 => 106,  383 => 105,  378 => 103,  374 => 102,  370 => 101,  364 => 97,  361 => 96,  353 => 94,  347 => 92,  344 => 91,  341 => 90,  325 => 88,  311 => 86,  308 => 85,  306 => 84,  297 => 77,  294 => 76,  286 => 74,  280 => 72,  277 => 71,  274 => 70,  258 => 68,  244 => 66,  241 => 65,  239 => 64,  234 => 62,  227 => 58,  221 => 55,  212 => 53,  208 => 52,  202 => 50,  200 => 49,  192 => 47,  187 => 46,  183 => 45,  172 => 44,  160 => 42,  155 => 41,  151 => 40,  142 => 38,  138 => 37,  127 => 35,  123 => 34,  115 => 29,  110 => 28,  104 => 26,  98 => 24,  96 => 23,  90 => 21,  88 => 20,  82 => 18,  76 => 16,  74 => 15,  68 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/header.twig", "");
    }
}
