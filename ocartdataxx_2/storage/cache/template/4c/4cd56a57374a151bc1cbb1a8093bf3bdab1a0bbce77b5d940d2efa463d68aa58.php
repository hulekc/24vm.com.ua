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

/* unishop2/template/extension/module/uni_login.twig */
class __TwigTemplate_b2ab22993217a701f10f62ab9e81777211ff257df84a9aecb8bbf2ac270b90bd extends \Twig\Template
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
        if (($context["show_login"] ?? null)) {
            // line 2
            echo "\t<div id=\"modal-login-form\" class=\"modal\">
\t\t<div class=\"modal-dialog modal-sm\">
\t\t\t<div class=\"modal-login modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 7
            echo ($context["text_login"] ?? null);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form name=\"popuplogin\" class=\"modal-login__form\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
            // line 11
            echo ($context["login_mail_text"] ?? null);
            echo "\" class=\"modal-login__input form-control\" />
\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
            // line 12
            echo ($context["login_password_text"] ?? null);
            echo "\" class=\"modal-login__input form-control\" />
\t\t\t\t\t</form>
\t\t\t\t\t<button class=\"modal-login__btn btn btn-lg btn-primary\" onclick=\"uniLoginSend();\" data-loading-text=\"";
            // line 14
            echo ($context["text_loading"] ?? null);
            echo "\">";
            echo ($context["text_login2"] ?? null);
            echo "</button>
\t\t\t\t\t<div class=\"modal-login__links\">
\t\t\t\t\t\t";
            // line 16
            if (($context["show_login_forgotten"] ?? null)) {
                // line 17
                echo "\t\t\t\t\t\t\t<a href=\"index.php?route=account/forgotten\" class=\"modal-login__link\">";
                echo ($context["text_forgotten"] ?? null);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t";
            if (($context["show_login_register"] ?? null)) {
                // line 20
                echo "\t\t\t\t\t\t\t";
                if (($context["show_register"] ?? null)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t<a data-dismiss=\"modal\" onclick=\"uniRegisterOpen();\" class=\"modal-login__link\">";
                    echo ($context["text_register2"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["register_link"] ?? null);
                    echo "\" class=\"modal-login__link\">";
                    echo ($context["text_register2"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  97 => 25,  89 => 23,  83 => 21,  80 => 20,  77 => 19,  71 => 17,  69 => 16,  62 => 14,  57 => 12,  53 => 11,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_login.twig", "");
    }
}
