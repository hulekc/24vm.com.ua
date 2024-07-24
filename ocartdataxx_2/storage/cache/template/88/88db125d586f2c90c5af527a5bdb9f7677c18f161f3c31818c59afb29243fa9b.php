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

/* unishop2/template/account/login.twig */
class __TwigTemplate_f75b2c123d986540f2b2e91010bc6da2716f16c695fc50adeb3f931b3b36ea11 extends \Twig\Template
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
<div id=\"account-login\" class=\"container\">
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
\t";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t";
        }
        // line 15
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t";
        }
        // line 18
        echo "\t<div class=\"row\">
\t\t";
        // line 19
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 22
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 24
            echo "\t\t";
        } else {
            // line 25
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 26
            echo "\t\t";
        }
        // line 27
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 28
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"account-blocks\">
\t\t\t<div class=\"row row-flex\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"uni-block__line\">
\t\t\t\t\t\t<h3 class=\"heading\">";
        // line 33
        echo ($context["text_login"] ?? null);
        echo "</h3>
\t\t\t\t\t\t<!-- <p><strong>";
        // line 34
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p> -->
\t\t\t\t\t\t<div class=\"uni-form\">
\t\t\t\t\t\t<form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"form-block__line\">
\t\t\t\t\t\t\t<div class=\"account-login__form-group form-group\">
\t\t\t\t\t\t\t\t<!-- <label class=\"control-label\" for=\"input-email\">";
        // line 39
        echo ($context["entry_email"] ?? null);
        echo "</label> -->
\t\t\t\t\t\t\t\t
\t\t\t<input type=\"text\" name=\"email\" placeholder=\"";
        // line 41
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"account-login__form-group form-group\">
\t\t\t\t\t\t\t\t<!-- <label class=\"control-label\" for=\"input-password\">";
        // line 45
        echo ($context["entry_password"] ?? null);
        echo "</label> -->
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 46
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<a class=\"account-login__forgotten\" href=\"";
        // line 47
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"account-login__btn btn btn-primary\">";
        // line 49
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t";
        // line 50
        if (($context["redirect"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"";
        // line 54
        echo ($context["register"] ?? null);
        echo "\" class=\"account-login__btn\">Зареєструватися</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"auth-modal__vider\"> або </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"visible-xs\" style=\"width:100%;height:20px\"></div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"uni-block__line\">
\t\t\t\t\t\t<h3 class=\"heading\">";
        // line 65
        echo ($context["text_new_customer"] ?? null);
        echo "</h3>
\t\t\t\t\t\t<!-- <p><strong>";
        // line 66
        echo ($context["text_register"] ?? null);
        echo "</strong></p> -->
\t\t\t\t\t\t<div class=\"uni-form\">
\t\t\t\t\t\t<span><p>";
        // line 68
        echo ($context["text_register_account"] ?? null);
        echo "</p></span>
\t\t\t\t\t\t<a href=\"";
        // line 69
        echo ($context["register"] ?? null);
        echo "\" class=\"account-login__btn btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 75
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
\t\t";
        // line 77
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 80
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 80,  234 => 77,  229 => 75,  218 => 69,  214 => 68,  209 => 66,  205 => 65,  191 => 54,  188 => 53,  182 => 51,  180 => 50,  176 => 49,  169 => 47,  163 => 46,  159 => 45,  150 => 41,  145 => 39,  139 => 36,  134 => 34,  130 => 33,  122 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  97 => 20,  93 => 19,  90 => 18,  84 => 16,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  64 => 10,  58 => 8,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/account/login.twig", "");
    }
}
