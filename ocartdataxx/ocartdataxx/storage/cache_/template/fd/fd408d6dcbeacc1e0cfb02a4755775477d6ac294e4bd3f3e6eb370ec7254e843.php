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

/* unishop2/template/extension/module/uni_news.twig */
class __TwigTemplate_e7ec03b460acf5732353dfe59b482259acdbc55ac2ac564aca703e76f57d60d9 extends \Twig\Template
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
        if (($context["news"] ?? null)) {
            // line 2
            echo "\t<div class=\"heading\">";
            echo ($context["heading_title"] ?? null);
            echo ((($context["link"] ?? null)) ? ((((("<a href=\"" . twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 2)) . "\" class=\"heading__link\">") . twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "text", [], "any", false, false, false, 2)) . "</a>")) : (""));
            echo "</div>
\t<div class=\"uni-module news-module news-";
            // line 3
            echo ($context["module"] ?? null);
            echo "\">
\t\t<div class=\"uni-module__wrapper\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["news"]);
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 6
                echo "\t\t\t\t<div class=\"news-module__item uni-item\">
\t\t\t\t\t";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["news"], "image", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "\t\t\t\t\t\t<div class=\"news-module__image uni-href\" data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "href", [], "any", false, false, false, 8);
                    echo "\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "image", [], "any", false, false, false, 9);
                    echo "\" loading=\"lazy\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 9);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 9);
                    echo "\" class=\"img-responsive\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t\t<div class=\"news-module__description\">
\t\t\t\t\t\t<div class=\"news-module__category-date-viewed\">
\t\t\t\t\t\t\t<a class=\"news-module__category\" href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["news"], "category_href", [], "any", false, false, false, 14);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "category_name", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "category_name", [], "any", false, false, false, 14);
                echo "</a>
\t\t\t\t\t\t\t<span class=\"news-module__date\"><i class=\"fa fa-calendar\"></i>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["news"], "posted", [], "any", false, false, false, 15);
                echo "</span>
\t\t\t\t\t\t\t<span class=\"news-module__viewed\"><i class=\"fa fa-eye\"></i>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["news"], "viewed", [], "any", false, false, false, 16);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"news-module__name\" href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["news"], "href", [], "any", false, false, false, 18);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "name", [], "any", false, false, false, 18);
                echo "</a>
\t\t\t\t\t\t<div class=\"news-module__text\">
\t\t\t\t\t\t\t";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["news"], "description", [], "any", false, false, false, 20);
                echo "
\t\t\t\t\t\t\t<!-- <a title=\"";
                // line 21
                echo ($context["text_more"] ?? null);
                echo "\" data-toggle=\"tooltip\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "href", [], "any", false, false, false, 21);
                echo "\" class=\"news-module__more uni-href\">&rarr;</a> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t</div>
\t</div>
\t<script>
\t\t\$(function() {
\t\t\t\$('.news-";
            // line 30
            echo ($context["module"] ?? null);
            echo "').uniModules({
\t\t\t\ttype:'";
            // line 31
            echo ((array_key_exists("type_view", $context)) ? (($context["type_view"] ?? null)) : ("carousel"));
            echo "',
\t\t\t\titems: {0:{items:1},700:{items:3},1050:{items:4},1400:{items:5}}
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 31,  131 => 30,  125 => 26,  112 => 21,  108 => 20,  99 => 18,  94 => 16,  90 => 15,  82 => 14,  78 => 12,  64 => 9,  59 => 8,  57 => 7,  54 => 6,  50 => 5,  45 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_news.twig", "");
    }
}
