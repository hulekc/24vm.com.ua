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

/* unishop2/template/information/uni_news.twig */
class __TwigTemplate_21eae31dcc0db3ad0ea242bc0b14b6f3028c74e430c5ac425cfeaec5258daea0 extends \Twig\Template
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
\t    <div class=\"blog-block\">
\t    <img src=\"/image/catalog/banners/blog-banner-home.jpg\" alt=\"blog-banner-site\">
\t   </div>
\t    ";
        // line 18
        if (($context["description"] ?? null)) {
            // line 19
            echo "\t\t\t\t<div class=\"category-info\">
\t\t\t\t\t";
            // line 20
            if (($context["thumb"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t\t<div class=\"category-info__image\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t";
            if (($context["description"] ?? null)) {
                echo "<div class=\"description\">";
                echo ($context["description"] ?? null);
                echo "</div>";
            }
            // line 24
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        if (($context["categories"] ?? null)) {
            // line 27
            echo "\t\t\t\t<div class=\"category-list row uni-block__line row-flex\">
\t\t\t\t    \t<h1 class=\"heading\">";
            // line 28
            echo ($context["text_blog"] ?? null);
            echo "</h1>
\t\t\t\t    \t<div class=\"cat-uni uni-form\">
\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "\t\t\t\t\t\t<div class=\"";
                echo ((($context["subcategory_column"] ?? null)) ? (($context["subcategory_column"] ?? null)) : ("col-sm-2"));
                echo "\">
\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 32);
                echo "\" class=\"category-list__item uni-item\">
\t\t\t\t\t\t\t\t";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 33)) {
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 33);
                    echo "\" alt=\"\" title=\"\" class=\"category-list__img img-responsive\" />";
                }
                // line 34
                echo "\t\t\t\t\t\t\t\t<span class=\"category-list__name\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 41
        echo "\t\t";
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 42
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 43
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 44
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 45
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 46
            echo "\t\t";
        } else {
            // line 47
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 48
            echo "\t\t";
        }
        // line 49
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 50
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"uni-wrappers\">
\t\t\t
\t\t\t";
        // line 53
        if (($context["news_data"] ?? null)) {
            // line 54
            echo "\t\t\t\t<div class=\"sorts-block\">
\t\t\t\t\t<div class=\"sorts-block__wrapper hidden-xs hidden-sm\" style=\"flex:0;margin-left:auto\">
\t\t\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["key"] => $context["sorts"]) {
                // line 57
                echo "\t\t\t\t\t\t\t";
                if ((twig_in_filter(($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 57)) && !twig_in_filter(($context["order"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 57)))) {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 58);
                    echo "\" class=\"sorts-block__span uni-href selected ";
                    echo ((twig_in_filter("ASC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 58))) ? ("up") : ("down"));
                    echo "\">";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 58), "(")) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t";
                } elseif ((!twig_in_filter(                // line 59
($context["sort"] ?? null), twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 59)) && !twig_in_filter("DESC", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 59)))) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t<span data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 60);
                    echo "\" class=\"sorts-block__span uni-href\">";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 60), "(")) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control visible-xs visible-sm\" onchange=\"location = this.value;\">
\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 66
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 66) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 67);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 67);
                    echo "</option>
\t\t\t\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 69);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t</select>
\t\t\t\t\t<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" style=\"margin:0\" onchange=\"location = this.value;\">
\t\t\t\t\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 75
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 75) == ($context["limit"] ?? null))) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 76);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 76);
                    echo "</option>
\t\t\t\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 78);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 78);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"news-list row\">
\t\t\t\t\t";
            // line 84
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 85
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                // line 86
                echo "\t\t\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 87
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                // line 88
                echo "\t\t\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                // line 90
                echo "\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["news_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 92
                echo "\t\t\t\t\t\t<div class=\"news-list__layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"news-list__item uni-item\">
\t\t\t\t\t\t\t\t";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["news"], "image", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"news-list__image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "image", [], "any", false, false, false, 96);
                    echo "\" loading=\"lazy\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 96);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 96);
                    echo "\" data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "href", [], "any", false, false, false, 96);
                    echo "\" class=\"uni-href img-responsive\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t\t\t<div class=\"news-list__description\">
\t\t\t\t\t\t\t\t\t<div class=\"news-list__category-date-viewed\">
\t\t\t\t\t\t\t\t\t\t<span class=\"news-list__date\"><i class=\"fa fa-calendar\"></i>";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["news"], "posted", [], "any", false, false, false, 101);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"news-list__viewed\"><i class=\"fa fa-eye\"></i>";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["news"], "viewed", [], "any", false, false, false, 102);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"news-list__name\" href=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["news"], "href", [], "any", false, false, false, 104);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 104);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 104);
                echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"news-list__text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["news"], "description", [], "any", false, false, false, 106);
                echo "
\t\t\t\t\t\t\t\t\t\t<!-- <a title=\"";
                // line 107
                echo ($context["text_more"] ?? null);
                echo "\" data-toggle=\"tooltip\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "href", [], "any", false, false, false, 107);
                echo "\" class=\"news-list__more uni-href\">&rarr;</a> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 114
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t    <div class=\"pagination-text\">";
            // line 115
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 117
        echo "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["news_data"] ?? null))) {
            // line 118
            echo "\t\t\t\t<div class=\"div-text-empty\">";
            echo ($context["text_error"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 120
        echo "\t\t\t</div>
\t\t\t";
        // line 121
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 123
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 132
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 134
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 135
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 135), ["\"" => "", "&quot;" => ""])));
            echo "\",
\t\t\t\"item\": \"";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 136);
            echo "\"
\t\t\t";
            // line 137
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t]
\t}
</script>
";
        // line 142
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/information/uni_news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 142,  465 => 139,  457 => 137,  453 => 136,  449 => 135,  445 => 134,  441 => 132,  437 => 131,  426 => 123,  421 => 121,  418 => 120,  412 => 118,  409 => 117,  404 => 115,  400 => 114,  397 => 113,  383 => 107,  379 => 106,  370 => 104,  365 => 102,  361 => 101,  357 => 99,  341 => 96,  338 => 95,  336 => 94,  330 => 92,  325 => 91,  322 => 90,  319 => 89,  316 => 88,  313 => 87,  310 => 86,  307 => 85,  305 => 84,  300 => 81,  294 => 80,  286 => 78,  278 => 76,  275 => 75,  271 => 74,  267 => 72,  261 => 71,  253 => 69,  245 => 67,  242 => 66,  238 => 65,  234 => 63,  228 => 62,  220 => 60,  218 => 59,  209 => 58,  206 => 57,  202 => 56,  198 => 54,  196 => 53,  190 => 50,  185 => 49,  182 => 48,  179 => 47,  176 => 46,  173 => 45,  170 => 44,  167 => 43,  165 => 42,  160 => 41,  155 => 38,  144 => 34,  138 => 33,  134 => 32,  129 => 31,  125 => 30,  120 => 28,  117 => 27,  114 => 26,  110 => 24,  103 => 23,  93 => 21,  91 => 20,  88 => 19,  86 => 18,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/information/uni_news.twig", "");
    }
}
