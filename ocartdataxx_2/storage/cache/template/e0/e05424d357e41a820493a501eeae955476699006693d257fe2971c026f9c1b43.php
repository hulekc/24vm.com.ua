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

/* unishop2/template/account/account.twig */
class __TwigTemplate_2a57b3f608ea53e51d452ef890e741814650148d8a5c17556d3d34aca3084709 extends \Twig\Template
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
<div class=\"breadcrumb-h1 ";
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
\t";
        // line 14
        if (($context["success"] ?? null)) {
            // line 15
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t";
        }
        // line 17
        echo "\t<div class=\"row\">
\t\t";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 21
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 23
            echo "\t\t";
        } else {
            // line 24
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " account-index\">
\t\t    <div class=\"uni-block__line\">
\t\t    <h1 class=\"heading\">";
        // line 28
        echo ($context["text_my_account"] ?? null);
        echo "</h1>
\t\t    <div class=\"uni-form\">
\t\t\t";
        // line 30
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t";
        // line 31
        $context["class"] = "col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xxl-4";
        // line 32
        echo "\t\t\t<div class=\"uni-wrapper\">
\t\t\t<div class=\"row row-flex\">
\t\t\t\t<div class=\"";
        // line 34
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 35
        echo ($context["order"] ?? null);
        echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-tasks\"></i><span class=\"account-index__text\">";
        echo ($context["text_order"] ?? null);
        echo "</span></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"";
        // line 37
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 38
        echo ($context["edit"] ?? null);
        echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-user\"></i><span class=\"account-index__text\">";
        echo ($context["text_edit"] ?? null);
        echo "</span></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"";
        // line 40
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 41
        echo ($context["password"] ?? null);
        echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-lock\"></i><span class=\"account-index__text\">";
        echo ($context["text_password"] ?? null);
        echo "</span></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"";
        // line 43
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 44
        echo ($context["address"] ?? null);
        echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-map-marker-edit\"></i><span class=\"account-index__text\">";
        echo ($context["text_address"] ?? null);
        echo "</span></a>
\t\t\t\t</div>
\t\t\t\t";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_wishlist", [], "any", true, true, false, 46)) {
            // line 47
            echo "\t\t\t\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 48
            echo ($context["wishlist"] ?? null);
            echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-heart\"></i><span class=\"account-index__text\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_download", [], "any", true, true, false, 51)) {
            // line 52
            echo "\t\t\t\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 53
            echo ($context["download"] ?? null);
            echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-download\"></i><span class=\"account-index__text\">";
            echo ($context["text_download"] ?? null);
            echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t";
        if ((($context["reward"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_reward", [], "any", true, true, false, 56))) {
            // line 57
            echo "\t\t\t\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 58
            echo ($context["reward"] ?? null);
            echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-piggy-bank\"\"></i><span class=\"account-index__text\">";
            echo ($context["text_reward"] ?? null);
            echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_return", [], "any", true, true, false, 61)) {
            // line 62
            echo "\t\t\t\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 63
            echo ($context["return"] ?? null);
            echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-history\"></i><span class=\"account-index__text\">";
            echo ($context["text_return"] ?? null);
            echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_transaction", [], "any", true, true, false, 66)) {
            // line 67
            echo "\t\t\t\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 68
            echo ($context["transaction"] ?? null);
            echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-hryvnia\"></i><span class=\"account-index__text\">";
            echo ($context["text_transaction"] ?? null);
            echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_recurring", [], "any", true, true, false, 71)) {
            // line 72
            echo "\t\t\t\t\t<div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 73
            echo ($context["recurring"] ?? null);
            echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-credit-card\"></i><span class=\"account-index__text\">";
            echo ($context["text_recurring"] ?? null);
            echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 77
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-envelope-open-text\"></i><span class=\"account-index__text\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_affiliate", [], "any", true, true, false, 80)) {
            // line 81
            echo "\t\t\t\t<br />
\t\t\t\t<div class=\"row row-flex\">
\t\t\t\t\t<div class=\"heading col-xs-12\"><span>";
            // line 83
            echo ($context["text_my_affiliate"] ?? null);
            echo "</span></div>
\t\t\t\t\t<div class=\"";
            // line 84
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 85
            echo ($context["affiliate"] ?? null);
            echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-users\"></i><span class=\"account-index__text\">";
            echo ((twig_test_empty(($context["tracking"] ?? null))) ? (($context["text_affiliate_add"] ?? null)) : (($context["text_affiliate_edit"] ?? null)));
            echo "</span></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 87
            if (($context["tracking"] ?? null)) {
                // line 88
                echo "\t\t\t\t\t\t<div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<a href=\"";
                // line 89
                echo ($context["tracking"] ?? null);
                echo "\" class=\"account-index__item uni-item-bg\"><i class=\"account-index__icon fa fa-edit\"></i><span class=\"account-index__text\">";
                echo ($context["text_tracking"] ?? null);
                echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 94
        echo "\t\t\t";
        if (($context["credit_cards"] ?? null)) {
            // line 95
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"heading col-xs-12\"><span>";
            // line 96
            echo ($context["text_credit_card"] ?? null);
            echo "</span></div>
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 100);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 100);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 106
        echo "\t\t\t</div>
\t\t</div>
\t\t\t";
        // line 108
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 110
        echo ($context["column_right"] ?? null);
        echo "
</div>
\t</div>
</div>
<script>
\tif (typeof(uniDelPageCache) === 'function') {
\t\tuniDelPageCache();
\t}
</script>
";
        // line 119
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 119,  372 => 110,  367 => 108,  363 => 106,  357 => 102,  346 => 100,  342 => 99,  336 => 96,  333 => 95,  330 => 94,  326 => 92,  318 => 89,  313 => 88,  311 => 87,  304 => 85,  300 => 84,  296 => 83,  292 => 81,  290 => 80,  282 => 77,  277 => 76,  269 => 73,  264 => 72,  261 => 71,  253 => 68,  248 => 67,  245 => 66,  237 => 63,  232 => 62,  229 => 61,  221 => 58,  216 => 57,  213 => 56,  205 => 53,  200 => 52,  197 => 51,  189 => 48,  184 => 47,  182 => 46,  175 => 44,  171 => 43,  164 => 41,  160 => 40,  153 => 38,  149 => 37,  142 => 35,  138 => 34,  134 => 32,  132 => 31,  128 => 30,  123 => 28,  117 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  97 => 19,  93 => 18,  90 => 17,  84 => 15,  82 => 14,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/account/account.twig", "");
    }
}
