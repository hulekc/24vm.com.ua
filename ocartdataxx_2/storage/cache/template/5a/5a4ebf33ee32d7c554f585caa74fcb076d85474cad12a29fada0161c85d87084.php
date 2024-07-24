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

/* unishop2/template/account/voucher.twig */
class __TwigTemplate_a80c787fb77c9b837e771d07e9ac64c20ecee607ec18a1abf108d2e1e668e733 extends \Twig\Template
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
<div id=\"account-voucher\" class=\"container\">
\t<ul class=\"breadcrumb\">
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
        echo "\t</ul>
\t";
        // line 12
        if (($context["error_warning"] ?? null)) {
            // line 13
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t";
        }
        // line 15
        echo "\t<div class=\"row\">
\t\t";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 19
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t    <div class=\"uni-block__line\">
\t\t    <h1 class=\"heading\">";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t";
        // line 27
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t<div class=\"account-voucher uni-form form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-2 hidden-xs\"></div>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"account-voucher__description\">";
        // line 32
        echo ($context["text_description"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 37
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"to_name\" value=\"";
        // line 39
        echo ($context["to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 40
        if (($context["error_to_name"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_to_name"] ?? null);
            echo "</div>";
        }
        // line 41
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 44
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"to_email\" value=\"";
        // line 46
        echo ($context["to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 47
        if (($context["error_to_email"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_to_email"] ?? null);
            echo "</div>";
        }
        // line 48
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 51
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"from_name\" value=\"";
        // line 53
        echo ($context["from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 54
        if (($context["error_from_name"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_from_name"] ?? null);
            echo "</div>";
        }
        // line 55
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 58
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"from_email\" value=\"";
        // line 60
        echo ($context["from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 61
        if (($context["error_from_email"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_from_email"] ?? null);
            echo "</div>";
        }
        // line 62
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 68) == ($context["voucher_theme_id"] ?? null))) {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\"><input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 70);
                echo "\" checked=\"checked\" />";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 70);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"input\"><input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 74);
                echo "\" />";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 74);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t\t\t\t";
        if (($context["error_theme"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_theme"] ?? null);
            echo "</div>";
        }
        // line 79
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 82
        echo ($context["help_message"] ?? null);
        echo "\">";
        echo ($context["entry_message"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 84
        echo ($context["message"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 88
        echo ($context["help_amount"] ?? null);
        echo "\">";
        echo ($context["entry_amount"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"amount\" value=\"";
        // line 90
        echo ($context["amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
\t\t\t\t\t\t\t\t";
        // line 91
        if (($context["error_amount"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_amount"] ?? null);
            echo "</div>";
        }
        // line 92
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label hidden-xs\"></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label class=\"input\"><input type=\"checkbox\" name=\"agree\" value=\"1\" /><span>";
        // line 97
        echo ($context["text_agree"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label hidden-xs\"></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"account-voucher__submit btn btn-lg btn-primary\" data-loading-text=\"";
        // line 103
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t    </div>
\t\t\t";
        // line 109
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 111
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 114
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 114,  332 => 111,  327 => 109,  316 => 103,  307 => 97,  300 => 92,  294 => 91,  290 => 90,  283 => 88,  276 => 84,  269 => 82,  264 => 79,  257 => 78,  251 => 77,  243 => 74,  240 => 73,  232 => 70,  229 => 69,  226 => 68,  222 => 67,  217 => 65,  212 => 62,  206 => 61,  202 => 60,  197 => 58,  192 => 55,  186 => 54,  182 => 53,  177 => 51,  172 => 48,  166 => 47,  162 => 46,  157 => 44,  152 => 41,  146 => 40,  142 => 39,  137 => 37,  132 => 35,  126 => 32,  118 => 27,  114 => 26,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  90 => 18,  88 => 17,  84 => 16,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  64 => 10,  58 => 8,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/account/voucher.twig", "");
    }
}
