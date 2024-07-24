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

/* unishop2/template/account/order_list.twig */
class __TwigTemplate_f523e9502fddb424f20a5c1b52e1cfc5b7ff4eabab5b13bf95581505a6d23ef3 extends \Twig\Template
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
<div id=\"account-order\" class=\"container\">
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
\t\t    <div class=\"uni-block__line\">
\t\t    \t\t<h1 class=\"heading\">";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t    \t<div class=\"uni-form\">
\t\t\t";
        // line 27
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"uni-wrapper\">
\t\t\t";
        // line 29
        if (($context["orders"] ?? null)) {
            // line 30
            echo "\t\t\t\t";
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 31
                echo "\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                // line 32
                echo "\t\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 33
                echo "\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xxl-6-1";
                // line 34
                echo "\t\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xxl-6-1";
                // line 36
                echo "\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t<div class=\"account-order-list row row-flex\">
\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 39
                echo "\t\t\t\t\t\t<div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"account-order-list__item uni-item-bg\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 41);
                echo "\" class=\"account-order-list__order-id\">№ ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 41);
                echo "</a>
\t\t\t\t\t\t\t\t<div class=\"account-order-list__name\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 42);
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"account-order-list__description\">
\t\t\t\t\t\t\t\t\t<div class=\"account-order-list__description-item size\"><div class=\"account-order-list__description-div\"><span class=\"account-order-list__description-span\">";
                // line 44
                echo ($context["column_product"] ?? null);
                echo "</span></div>";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 44);
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"account-order-list__description-item date-added\"><div class=\"account-order-list__description-div\"><span class=\"account-order-list__description-span\">";
                // line 45
                echo ($context["column_total"] ?? null);
                echo "</span></div>";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 45);
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"account-order-list__description-item date-added\"><div class=\"account-order-list__description-div\"><span class=\"account-order-list__description-span\">";
                // line 46
                echo ($context["column_date_added"] ?? null);
                echo "</span></div>";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 46);
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"account-order-list__description-item date-added\"><div class=\"account-order-list__description-div\"><span class=\"account-order-list__description-span\">";
                // line 47
                echo ($context["column_status"] ?? null);
                echo "</span></div><span style=\"color: #f84147;\">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 47);
                echo "</span></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"order-btn\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 50);
                echo "\" class=\"account-order-list__btn btn btn-primary\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\"><i class=\"fas fa-eye\"></i><span>";
                echo ($context["button_view"] ?? null);
                echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t";
            // line 57
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t    <div class=\"pagination-text\">";
            // line 58
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t<div class=\"div-text-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 62
        echo "\t\t\t<div class=\"buttons clearfix hidden\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
        // line 63
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 67
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 69
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 72
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 72,  247 => 69,  242 => 67,  233 => 63,  230 => 62,  224 => 60,  219 => 58,  215 => 57,  211 => 55,  196 => 50,  188 => 47,  182 => 46,  176 => 45,  170 => 44,  165 => 42,  159 => 41,  153 => 39,  149 => 38,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  134 => 33,  131 => 32,  128 => 31,  125 => 30,  123 => 29,  118 => 27,  113 => 25,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  87 => 16,  83 => 15,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/account/order_list.twig", "");
    }
}
