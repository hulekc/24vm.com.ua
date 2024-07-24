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

/* unishop2/template/affiliate/login.twig */
class __TwigTemplate_3e3a6463786d68dadf545e62a79ed7b1c4038e91a6f7b5b1635510a95a95caba extends \Twig\Template
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
<div id=\"affiliate-login\" class=\"container\">
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
\t\t<h1 class=\"heading\">";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t</div>
\t";
        // line 15
        if (($context["success"] ?? null)) {
            // line 16
            echo "\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t";
        }
        // line 18
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t";
        }
        // line 21
        echo "\t<div class=\"row\">
\t\t";
        // line 22
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 23
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 24
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 25
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 26
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 27
            echo "\t\t";
        } else {
            // line 28
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 29
            echo "\t\t";
        }
        // line 30
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 31
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t";
        // line 32
        echo ($context["text_description"] ?? null);
        echo "<br /></br />
\t\t\t<div class=\"uni-wrapper\">
\t\t\t\t<div class=\"row row-flex\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t<div class=\"account-login__wrapper uni-form\">
\t\t\t\t\t\t\t<h3 class=\"account-login__heading uni-form__heading\">";
        // line 37
        echo ($context["text_returning_affiliate"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t<!-- <p><strong>";
        // line 38
        echo ($context["text_i_am_returning_affiliate"] ?? null);
        echo "</strong></p> -->
\t\t\t\t\t\t\t<form action=\"";
        // line 39
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<!-- <label class=\"control-label\" for=\"input-email\">";
        // line 41
        echo ($context["entry_email"] ?? null);
        echo "</label> -->
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 42
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<!-- <label class=\"control-label\" for=\"input-password\">";
        // line 45
        echo ($context["entry_password"] ?? null);
        echo "</label> -->
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 46
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<a class=\"account-login__forgotten\" href=\"";
        // line 47
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"account-login__btn btn btn-primary\">";
        // line 49
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t";
        // line 50
        if (($context["redirect"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"visible-xs\" style=\"width:100%;height:20px\"></div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t<div class=\"account-login__wrapper uni-form\">
\t\t\t\t\t\t\t<h3 class=\"account-login__heading uni-form__heading\">";
        // line 59
        echo ($context["text_new_affiliate"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t<p>";
        // line 60
        echo ($context["text_register_account"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t<a class=\"account-login__btn btn btn-primary\" href=\"";
        // line 61
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 66
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t ";
        // line 68
        echo ($context["column_right"] ?? null);
        echo "
    </div>
</div>
";
        // line 71
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/affiliate/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 71,  232 => 68,  227 => 66,  217 => 61,  213 => 60,  209 => 59,  201 => 53,  195 => 51,  193 => 50,  189 => 49,  182 => 47,  176 => 46,  172 => 45,  164 => 42,  160 => 41,  155 => 39,  151 => 38,  147 => 37,  139 => 32,  135 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  110 => 23,  106 => 22,  103 => 21,  97 => 19,  94 => 18,  88 => 16,  86 => 15,  81 => 13,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/affiliate/login.twig", "");
    }
}
