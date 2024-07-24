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

/* unishop2/template/information/information.twig */
class __TwigTemplate_d7548f5ee481e459f25eaad78ab9ffd20d0e5df2c4e6ccc8903aad1d6a0d7390 extends \Twig\Template
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
\t\t\t<div class=\"article_description\">
\t\t\t\t";
        // line 26
        echo ($context["description"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 28
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 30
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 39
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 41
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 42
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 42)));
            echo "\",
\t\t\t\"item\": \"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 43);
            echo "\"
\t\t\t";
            // line 44
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t]
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"https://schema.org\",
\t\t\"@type\": \"Article\",
\t\t\"headline\": \"";
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "title", [], "any", false, false, false, 53);
        echo "\",
\t\t\"image\": [\"";
        // line 54
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "image", [], "any", false, false, false, 54);
        echo "\"],
\t\t\"description\": \"";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "short_description", [], "any", false, false, false, 55);
        echo "\",
\t\t\"articleBody\": \"";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "description", [], "any", false, false, false, 56);
        echo "\",
\t\t\"author\": {
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "publisher_name", [], "any", false, false, false, 59);
        echo "\",
\t\t\t\"url\": \"";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "publisher_url", [], "any", false, false, false, 60);
        echo "\",
\t\t\t\"logo\": {
\t\t\t\t\"@type\": \"ImageObject\",
\t\t\t\t\"url\": \"";
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "publisher_logo", [], "any", false, false, false, 63);
        echo "\"
\t\t\t}
        }
\t}
</script>
";
        // line 68
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 68,  203 => 63,  197 => 60,  193 => 59,  187 => 56,  183 => 55,  179 => 54,  175 => 53,  166 => 46,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  142 => 39,  138 => 38,  127 => 30,  122 => 28,  117 => 26,  112 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  89 => 17,  87 => 16,  83 => 15,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/information/information.twig", "");
    }
}
