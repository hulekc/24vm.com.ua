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

/* unishop2/template/product/manufacturer_list.twig */
class __TwigTemplate_a81805b2e2196a3b9cd7faae1b4bc7907159bab3f29cf62f5f56c7a878e87fe8 extends \Twig\Template
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
\t\t    <div class=\"manufacturer__wrapper uni-form\">
\t\t<div class=\"heading\">";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t";
        // line 26
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t<div class=\"uni-block__line\">
\t\t\t";
        // line 29
        if (($context["categories"] ?? null)) {
            // line 30
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "\t\t\t\t<div class=\"brands_head_lux\">
\t\t\t\t\t<h2 id=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                echo "\" class=\"heading\"><span>";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                echo "</span></h2>
\t\t\t\t\t";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 34), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 35
                        echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
<!-- ManufacturerLogo -->
\t\t";
                            // line 39
                            if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "logo", [], "any", false, false, false, 39)) {
                                // line 40
                                echo "\t\t<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 40);
                                echo "\"><img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "logo", [], "any", false, false, false, 40);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 40);
                                echo "\" class=\"img-responsive\" />";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 40);
                                echo "</a>
\t\t";
                            } else {
                                // line 42
                                echo "\t\t<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 42);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 42);
                                echo "</a>
\t\t";
                            }
                            // line 44
                            echo "<!-- ManufacturerLogo end -->
\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 55
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 58
        echo "\t\t\t</div>
\t\t</div>
\t\t\t";
        // line 60
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 62
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
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 71
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 73
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 74
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 74)));
            echo "\",
\t\t\t\"item\": \"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 75);
            echo "\"
\t\t\t";
            // line 76
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t]
\t}
</script>
";
        // line 81
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 81,  269 => 78,  261 => 76,  257 => 75,  253 => 74,  249 => 73,  245 => 71,  241 => 70,  230 => 62,  225 => 60,  221 => 58,  213 => 55,  207 => 53,  204 => 52,  198 => 51,  195 => 50,  187 => 47,  179 => 44,  171 => 42,  159 => 40,  157 => 39,  153 => 37,  149 => 36,  146 => 35,  141 => 34,  139 => 33,  133 => 32,  130 => 31,  125 => 30,  123 => 29,  117 => 26,  113 => 25,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  87 => 16,  83 => 15,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/manufacturer_list.twig", "");
    }
}
