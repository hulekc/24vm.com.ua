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
class __TwigTemplate_ded95c3af0e1b171a773261e8af1c527c83c33ee8f1f881ca37cc3f82ce3ecc2 extends \Twig\Template
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
                    <div class=\"top-menu__buttons\">
\t\t\t\t\t";
        // line 149
        if (($context["wishlist"] ?? null)) {
            // line 150
            echo "\t\t\t\t\t<li class=\"lux-left__one-groop\">
\t\t\t\t\t<button class=\"top-menu__btn top-menu__wishlist-btn uni-href\" data-href=\"";
            // line 151
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 151);
            echo "\">
\t\t\t\t\t\t<div class=\"top-menu__wishlist status-";
            // line 152
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 152);
            echo "\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "products", [], "any", false, false, false, 152);
            echo "\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t\t<i class=\"fa-light fa-heart\"></i></span><span class=\"top-menu__btn-text\">";
            // line 155
            echo ($context["wishlist_text_menu"] ?? null);
            echo "</span><span class=\"top-menu__wishlist-total uni-badge\">";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "total", [], "any", false, false, false, 155);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 161
        echo "\t\t\t\t\t";
        if (($context["compare"] ?? null)) {
            // line 162
            echo "\t\t\t\t\t<li class=\"lux-left__one-groop\">
\t\t\t\t\t<button class=\"top-menu__btn top-menu__compare-btn uni-href\" data-href=\"";
            // line 163
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "href", [], "any", false, false, false, 163);
            echo "\">
\t\t\t\t\t\t<div class=\"top-menu__compare status-";
            // line 164
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 164);
            echo "\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "products", [], "any", false, false, false, 164);
            echo "\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<span class=\"lux-icon__menu\">
\t\t\t\t\t\t\t\t<i class=\"top-menu__compare-icon fa-light fa-balance-scale\"></i></span><span class=\"top-menu__btn-text\">";
            // line 167
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "text", [], "any", false, false, false, 167);
            echo "</span><span class=\"top-menu__compare-total uni-badge\">";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "total", [], "any", false, false, false, 167);
            echo "</span>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 173
        echo "\t\t\t         </div>
\t\t\t     </ul>
        <div class=\"lef-block\">";
        // line 175
        echo ($context["text_headtel"] ?? null);
        echo "
        <div class=\"header-block__item header-block__item-telephones";
        // line 176
        echo ((($context["search_phone_change"] ?? null)) ? ("order-1") : (""));
        echo "\">
\t\t\t\t\t<div class=\"header-phones ";
        // line 177
        echo ((((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 177) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) ? ("has-addit") : (""));
        echo "\">
\t\t\t\t\t\t<span class=\"header-phones__main calls";
        // line 178
        echo ((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 178)) ? ("two-line") : (""));
        echo " uni-href\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 178), 0, [], "any", false, false, false, 178), "href", [], "any", false, false, false, 178)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 178)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "href", [], "any", false, false, false, 178)) . "\"")) : (""));
        echo " data-target=\"_blank\" title=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 178), 0, [], "any", false, false, false, 178), "text", [], "any", false, false, false, 178);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 178), 0, [], "any", false, false, false, 178), "number", [], "any", false, false, false, 178);
        echo "</span>
\t\t\t\t\t\t";
        // line 179
        if (twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 179)) {
            echo "<br /><span class=\"header-phones__main two-line uni-href\" ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 179), "href", [], "any", false, false, false, 179)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 179), "href", [], "any", false, false, false, 179)) . "\"")) : (""));
            echo " data-target=\"_blank\" title=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 179), "text", [], "any", false, false, false, 179);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 179), "number", [], "any", false, false, false, 179);
            echo "</span>";
        }
        // line 180
        echo "\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 180) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) {
            // line 181
            echo "\t\t\t\t\t\t\t";
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 182
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs\">
\t\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t\t\t\t<i class=\"header-phones__show-phone dropdown-toggle icone-hd fa-light fa-chevron-down\" data-toggle=\"dropdown\" data-target=\"header-phones__ul\"></i>
\t\t\t\t\t\t\t<ul class=\"header-phones__ul dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<!--";
            // line 186
            if (($context["callback"] ?? null)) {
                // line 187
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"uniRequestOpen(['mail', 'phone', 'comment']);\" class=\"header-phones__callback\"><span class=\"header-phones__span\">";
                // line 188
                echo ($context["text_header_callback"] ?? null);
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 190
            echo "-->
\t\t\t\t\t\t\t\t";
            // line 191
            if ((($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 192
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 193));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li ";
                echo (((twig_get_attribute($this->env, $this->source, $context["contact"], "main", [], "any", true, true, false, 194) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 194)))) ? ("visible-xs") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a class=\"header-phones__a uni-href\" ";
                // line 195
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 195)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 195)) . "\"")) : (""));
                echo " data-target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 196
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 196) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 196)))) {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 197);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 198
$context["contact"], "icon", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 199);
                    echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 201)) ? (twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 201)) : (twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 201)));
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "\t\t\t\t\t\t\t\t";
            if (( !($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            // line 209
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 210
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t";
        }
        // line 213
        echo "\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 213)) > 1) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 213)))) {
            // line 214
            echo "\t\t\t\t\t\t\t<div class=\"header-phones__additionals\">
\t\t\t\t\t\t\t\t";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 215));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t<span class=\"header-phones__additional ";
                echo ((($context["key"] == 0)) ? ("selected") : (""));
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 216);
                echo "\" data-phone=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 216);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 217
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 217) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 217)))) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 218);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 218);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 219
$context["contact"], "icon", [], "any", false, false, false, 219)) {
                    // line 220
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 220);
                    echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 220);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 222);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 224
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 228
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 230
        if (($context["callback"] ?? null)) {
            // line 231
            echo "\t\t\t\t<li class=\"header-phones__li\">
\t\t\t\t<a onclick=\"uniRequestOpen(['mail', 'phone', 'comment']);\" class=\"header-phones__callback\"><span class=\"header-phones__span\">";
            // line 232
            echo ($context["text_head_callback"] ?? null);
            echo "</span></a>
\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"menu__messengers\">
\t\t\t\t    <ul class=\"menu__messengers-list\">
\t\t\t\t        <li class=\"menu__messengers-item\">
\t\t\t\t            <a href=\"viber://#\" title=\"Viber\" rel=\"noindex nofollow noopener\" target=\"_blank\"><i class=\"fab fa-viber\"></i></a></li>
\t\t\t\t            <li class=\"menu__messengers-item\"><a href=\"https://t.me/#\" title=\"Telegram\" rel=\"noindex nofollow noopener\" target=\"_blank\"><i class=\"fab fa-telegram\" style=\"color: #337ab7;\"></i></a></li>
\t\t\t\t            </ul>
\t\t\t\t        </div>
\t\t\t\t<div class=\"lef-gr\">";
        // line 243
        echo ($context["text_work_schedule"] ?? null);
        echo "<ul>
\t\t\t<li>пн-пт: ";
        // line 244
        echo ($context["text_with"] ?? null);
        echo " 9:00 до 19:00</li>
            <li>сб-нд: ";
        // line 245
        echo ($context["text_with"] ?? null);
        echo " 10:00 до 17:00</li>
            </ul>
        </div>
        <!--<div class=\"block-info_company\">";
        // line 248
        echo ($context["text_info_company"] ?? null);
        echo "</div>
        <div id=\"top\" class=\"top-menu ";
        // line 249
        echo ((((twig_test_empty(((($context["headerlinks"] ?? null) && ($context["currency"] ?? null)) && ($context["language"] ?? null))) && ((twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 249) && twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 249)) == 2)) && (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 249) == 0))) ? ("visible-on-mobile") : (""));
        echo "\" >
                    <div class=\"left-menu__links\">
\t\t\t\t\t";
        // line 251
        if (($context["headerlinks"] ?? null)) {
            // line 252
            echo "\t\t\t\t\t\t<div class=\"left-links btn-group\">
\t\t\t\t\t\t\t<ul class=\"left-links__ul\">
\t\t\t\t\t\t\t\t";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headerlinks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["headerlink"]) {
                // line 255
                echo "\t\t\t\t\t\t\t\t\t<li class=\"left-links__li\"><a class=\"left-links__a\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "link", [], "any", false, false, false, 255);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "title", [], "any", false, false, false, 255);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "title", [], "any", false, false, false, 255);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 260
        echo "\t\t\t\t</div>
\t\t\t</div>-->
        <div class=\"block-info_company\">";
        // line 262
        echo ($context["text_help_user"] ?? null);
        echo "
        <ul>
\t\t\t<li><a href=\"/dostavka-i-oplata\" title=\"";
        // line 264
        echo ($context["text_delivery_payment"] ?? null);
        echo "\">";
        echo ($context["text_delivery_payment"] ?? null);
        echo "</a></li>
            <li><a href=\"/obmin-povernennya-tovaru\" title=\"";
        // line 265
        echo ($context["text_product_return"] ?? null);
        echo "\">";
        echo ($context["text_product_return"] ?? null);
        echo "</a></li>
            <li><a href=\"/index.php?route=information/uni_news&news_path=1\" title=\"";
        // line 266
        echo ($context["text_news_article"] ?? null);
        echo "\">";
        echo ($context["text_news_article"] ?? null);
        echo "</a></li>
            <li><a href=\"/sitemap\" title=\"";
        // line 267
        echo ($context["text_map_site"] ?? null);
        echo "\">";
        echo ($context["text_map_site"] ?? null);
        echo "</a></li>
            <li><a href=\"/brands\" title=\"";
        // line 268
        echo ($context["text_manufact"] ?? null);
        echo "\">";
        echo ($context["text_manufact"] ?? null);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"top-menu__account status-";
        // line 271
        echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 271);
        echo "\"style=\"
        margin-bottom: 50px;\">
\t\t\t\t\t<div id=\"account\" class=\"btn-group\">
\t\t\t\t\t";
        // line 274
        if (($context["logged"] ?? null)) {
            // line 275
            echo "\t\t\t\t\t\t<li style=\"width: 100%;\"><a href=\"";
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa-light fa-fw fa-sign-out-alt\"></i>";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 277
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t    </div>
                    </div>
\t\t\t
                </navs>
\t    <label for=\"navs-toggle\" class=\"mask-content\" onclick=\"\"></label></noindex>
\t\t\t\t";
        // line 283
        if (($context["menu_positions"] ?? null)) {
            // line 284
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-menu hidden-xs hidden-sm\">
\t\t\t\t\t\t<button class=\"header-menu__btn\"><img src=\"/image/catalog/icons/catalog-icon.png\" alt=\"catalog-icon\">";
            // line 285
            echo ($context["text_menu"] ?? null);
            echo "</button>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 288
        echo "\t\t\t\t<div id=\"search\" class=\"header-block__item header-block__item-search ";
        echo ((($context["search_phone_change"] ?? null)) ? ("order-2") : (""));
        echo " hidden-xs hidden-sm\">
\t\t\t\t\t";
        // line 289
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"header-block__item header-block__item-telephone";
        // line 291
        echo ((($context["search_phone_change"] ?? null)) ? ("order-1") : (""));
        echo "\">
\t\t\t\t\t<div class=\"header-phones ";
        // line 292
        echo ((((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 292) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) ? ("has-addit") : (""));
        echo "\">
\t\t\t\t\t\t<span class=\"header-phones__main ";
        // line 293
        echo ((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 293)) ? ("two-line") : (""));
        echo " uni-href\" ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293), "href", [], "any", false, false, false, 293)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 293)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "href", [], "any", false, false, false, 293)) . "\"")) : (""));
        echo " data-target=\"_blank\" title=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293), "text", [], "any", false, false, false, 293);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293), "number", [], "any", false, false, false, 293);
        echo "</span>
\t\t\t\t\t\t";
        // line 294
        if (twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 294)) {
            echo "<br /><span class=\"header-phones__main two-line uni-href\" ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 294), "href", [], "any", false, false, false, 294)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 294), "href", [], "any", false, false, false, 294)) . "\"")) : (""));
            echo " data-target=\"_blank\" title=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 294), "text", [], "any", false, false, false, 294);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 294), "number", [], "any", false, false, false, 294);
            echo "</span>";
        }
        // line 295
        echo "\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 295) || ($context["text_in_add_contacts"] ?? null)) || ($context["callback"] ?? null))) {
            // line 296
            echo "\t\t\t\t\t\t\t";
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 297
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs\">
\t\t\t\t\t\t\t";
            }
            // line 299
            echo "\t\t\t\t\t\t\t<i class=\"header-phones__show-phone dropdown-toggle fa-light fa-chevron-down\" data-toggle=\"dropdown\" data-target=\"header-phones__ul\"></i>
\t\t\t\t\t\t\t<ul class=\"header-phones__ul dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t";
            // line 301
            if ((($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 302
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 304
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "addit", [], "any", false, false, false, 304));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 305
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li ";
                echo (((twig_get_attribute($this->env, $this->source, $context["contact"], "main", [], "any", true, true, false, 305) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 305)))) ? ("visible-xs") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a class=\"header-phones__a uni-href\" ";
                // line 306
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 306)) ? ((("data-href=\"" . twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 306)) . "\"")) : (""));
                echo " data-target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 307
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 307) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 307)))) {
                    // line 308
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 308);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 309
$context["contact"], "icon", [], "any", false, false, false, 309)) {
                    // line 310
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 310);
                    echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 312
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 312)) ? (twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 312)) : (twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 312)));
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "\t\t\t\t\t\t\t\t";
            if (( !($context["text_in_add_contacts_position"] ?? null) && ($context["text_in_add_contacts"] ?? null))) {
                // line 317
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\">";
                echo ($context["text_in_add_contacts"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 319
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            // line 320
            if (($context["show_addition_contact_only_phone"] ?? null)) {
                // line 321
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 323
            echo "\t\t\t\t\t\t";
        }
        // line 324
        echo "\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 324)) > 1) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "second", [], "any", false, false, false, 324)))) {
            // line 325
            echo "\t\t\t\t\t\t\t<div class=\"header-phones__additionals\">
\t\t\t\t\t\t\t\t";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contacts"] ?? null), "main", [], "any", false, false, false, 326));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 327
                echo "\t\t\t\t\t\t\t\t\t<span class=\"header-phones__additional ";
                echo ((($context["key"] == 0)) ? ("selected") : (""));
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 327);
                echo "\" data-phone=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 327);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 328
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 328) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 328)))) {
                    // line 329
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 329);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 329);
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 330
$context["contact"], "icon", [], "any", false, false, false, 330)) {
                    // line 331
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 331);
                    echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 331);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 333
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 333);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 335
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 337
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 339
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 341
        if ((twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "position", [], "any", false, false, false, 341) == 2)) {
            // line 342
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-account\">
\t\t\t\t\t\t";
            // line 343
            if (($context["logged"] ?? null)) {
                // line 344
                echo "\t\t\t\t\t\t\t<div class=\"header-account\">
\t\t\t\t\t\t\t\t<i class=\"header-account__icon fa-light fa-user-circle dropdown-toggle\" data-toggle=\"dropdown\"></i>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 347
                echo ($context["customer_name"] ?? null);
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "link", [], "any", false, false, false, 347);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"far fa-fw fa-user\"></i></span>";
                echo ($context["text_account"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 348
                echo ($context["text_order_history"] ?? null);
                echo "\"><a href=\"";
                echo ($context["order"] ?? null);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-tasks\"></i>";
                echo ($context["text_order"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\" title=\"";
                // line 349
                echo ($context["text_my_reward_account"] ?? null);
                echo "\"><a href=\"reward-points\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-piggy-bank\"></i></span>";
                echo ($context["text_my_reward"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                // line 350
                if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "download_link", [], "any", false, false, false, 350)) {
                    echo "<li class=\"list-group-hitem\"><a href=\"";
                    echo ($context["download"] ?? null);
                    echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-download\"></i></span>";
                    echo ($context["text_download"] ?? null);
                    echo "</a></li>";
                }
                // line 351
                echo "\t\t\t\t\t\t\t\t\t<hr style=\"margin:5px 0\" />
\t\t\t\t\t\t\t\t\t<li class=\"list-group-hitem\"><a href=\"";
                // line 352
                echo ($context["logout"] ?? null);
                echo "\"><span class=\"lux-menu-ahead\"><i class=\"fa-light fa-fw fa-sign-out-alt\"></i></span>";
                echo ($context["text_logout"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 356
                echo "\t\t\t\t\t\t\t<div class=\"header-account uni-href\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["account"] ?? null), "popup_login", [], "any", false, false, false, 356)) {
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
            // line 358
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 360
        echo "\t\t\t\t";
        if ((($context["wishlist"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "position", [], "any", false, false, false, 360) == 2))) {
            // line 361
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-wishlist\">
\t\t\t\t\t\t<div class=\"header-wishlist uni-href\" data-href=\"";
            // line 362
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 362);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "text", [], "any", false, false, false, 362);
            echo "\"><i class=\"header-wishlist__icon fa-light fa-heart\"></i><span class=\"header-wishlist__total-items\">";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "total", [], "any", false, false, false, 362);
            echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 365
        echo "\t\t\t\t";
        if ((($context["compare"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "position", [], "any", false, false, false, 365) == 2))) {
            // line 366
            echo "\t\t\t\t\t<div class=\"header-block__item header-block__item-compare\">
\t\t\t\t\t\t<div class=\"header-compare uni-href\" data-href=\"";
            // line 367
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "href", [], "any", false, false, false, 367);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "text", [], "any", false, false, false, 367);
            echo "\"><i class=\"header-compare__icon fa-light fa-balance-scale\"></i><span class=\"header-compare__total-items\">";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "total", [], "any", false, false, false, 367);
            echo "</span></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 370
        echo "\t\t\t\t<div class=\"header-block__item header-block__item-cart\">";
        echo ($context["cart"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 375
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
        return array (  1163 => 375,  1154 => 370,  1144 => 367,  1141 => 366,  1138 => 365,  1128 => 362,  1125 => 361,  1122 => 360,  1118 => 358,  1104 => 356,  1095 => 352,  1092 => 351,  1084 => 350,  1078 => 349,  1070 => 348,  1062 => 347,  1057 => 344,  1055 => 343,  1052 => 342,  1050 => 341,  1046 => 339,  1042 => 337,  1035 => 335,  1029 => 333,  1021 => 331,  1019 => 330,  1012 => 329,  1010 => 328,  1001 => 327,  997 => 326,  994 => 325,  991 => 324,  988 => 323,  984 => 321,  982 => 320,  979 => 319,  973 => 317,  970 => 316,  959 => 312,  953 => 310,  951 => 309,  946 => 308,  944 => 307,  940 => 306,  935 => 305,  930 => 304,  924 => 302,  922 => 301,  918 => 299,  914 => 297,  911 => 296,  908 => 295,  898 => 294,  888 => 293,  884 => 292,  880 => 291,  875 => 289,  870 => 288,  864 => 285,  861 => 284,  859 => 283,  851 => 277,  843 => 275,  841 => 274,  835 => 271,  827 => 268,  821 => 267,  815 => 266,  809 => 265,  803 => 264,  798 => 262,  794 => 260,  789 => 257,  776 => 255,  772 => 254,  768 => 252,  766 => 251,  761 => 249,  757 => 248,  751 => 245,  747 => 244,  743 => 243,  733 => 235,  727 => 232,  724 => 231,  722 => 230,  718 => 228,  714 => 226,  707 => 224,  701 => 222,  693 => 220,  691 => 219,  684 => 218,  682 => 217,  673 => 216,  669 => 215,  666 => 214,  663 => 213,  660 => 212,  656 => 210,  654 => 209,  651 => 208,  645 => 206,  642 => 205,  631 => 201,  625 => 199,  623 => 198,  618 => 197,  616 => 196,  612 => 195,  607 => 194,  602 => 193,  599 => 192,  597 => 191,  594 => 190,  588 => 188,  585 => 187,  583 => 186,  579 => 184,  575 => 182,  572 => 181,  569 => 180,  559 => 179,  549 => 178,  545 => 177,  541 => 176,  537 => 175,  533 => 173,  522 => 167,  514 => 164,  510 => 163,  507 => 162,  504 => 161,  493 => 155,  485 => 152,  481 => 151,  478 => 150,  476 => 149,  468 => 144,  457 => 136,  441 => 122,  436 => 120,  432 => 118,  430 => 117,  426 => 115,  413 => 113,  400 => 112,  391 => 109,  389 => 108,  384 => 106,  380 => 105,  376 => 104,  370 => 100,  367 => 99,  359 => 97,  353 => 95,  350 => 94,  347 => 93,  331 => 91,  317 => 89,  314 => 88,  312 => 87,  303 => 80,  300 => 79,  292 => 77,  286 => 75,  283 => 74,  280 => 73,  264 => 71,  250 => 69,  247 => 68,  245 => 67,  240 => 65,  233 => 61,  227 => 58,  221 => 55,  212 => 53,  208 => 52,  202 => 50,  200 => 49,  192 => 47,  187 => 46,  183 => 45,  172 => 44,  160 => 42,  155 => 41,  151 => 40,  142 => 38,  138 => 37,  127 => 35,  123 => 34,  115 => 29,  110 => 28,  104 => 26,  98 => 24,  96 => 23,  90 => 21,  88 => 20,  82 => 18,  76 => 16,  74 => 15,  68 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/header.twig", "");
    }
}
