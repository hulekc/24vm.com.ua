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

/* unishop2/template/common/success.twig */
class __TwigTemplate_3e786f586ccfea2c94b027ff71f011991d7df68e5358c18437517e112ae51c82 extends \Twig\Template
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
\t<!--<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t";
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 6
                echo "\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
                echo "</a></li>
\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t<li>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</li>
\t\t\t";
            }
            // line 10
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>-->
\t<div class=\"row\">
\t\t";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-4 col-lg-6";
            // line 16
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "\t\t\t";
            $context["class"] = "col-md-8 col-lg-9 col-sm-12";
            // line 18
            echo "\t\t";
        } else {
            // line 19
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"account-blocks\">
\t\t\t    <div class=\"uni-img__block account-logout__img\">
\t\t     <img src=\"/image/catalog/banners/logout-from-personal-account.png\" alt=\"logout-from-personal-account\">
\t\t     </div>
\t\t\t<div class=\"uni-block__line\">
\t\t\t    <h1 class=\"heading\">";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div class=\"uni-form\">
\t\t\t<span>";
        // line 30
        echo ($context["text_message"] ?? null);
        echo "</span>
\t\t<a href=\"https://grandsmart.shop/\" class=\"account-login__btn btn btn-primary\">";
        // line 31
        echo ($context["button_home_lux"] ?? null);
        echo "</a>
\t\t     </div>
\t    </div>
\t\t\t";
        // line 34
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t</div>
\t\t";
        // line 37
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
<script>
\tif (typeof(uniDelPageCache) === 'function') {
\t\tuniDelPageCache();
\t}
</script>
";
        // line 45
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  133 => 37,  127 => 34,  121 => 31,  117 => 30,  112 => 28,  103 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  78 => 14,  74 => 13,  70 => 11,  64 => 10,  58 => 8,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/success.twig", "");
    }
}
