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

/* unishop2/template/extension/module/uni_subscribe.twig */
class __TwigTemplate_924a5e8c78120329341f0368f7aa0419efcb8342d003260f77ed5673e5000574 extends \Twig\Template
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
        echo "<div id=\"subscribe\" class=\"subscribe\">
    <div class=\"container pos-rel\">
\t\t<div class=\"footer-ribbon-box\">
\t\t\t<div class=\"footer-ribbon\">
\t\t\t    <span><i class=\"fa fa-gift\"></i>";
        // line 5
        echo ($context["text_points_subscription"] ?? null);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<form name=\"subscribe\" class=\"container\">
\t\t<div class=\"row row-flex\">
\t\t<div class=\"subscribe__info subscribe-info col-sm-12 col-md-5 col-lg-4\">
\t\t\t\t";
        // line 12
        echo ($context["text_subscribe_info"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-7\">
\t\t\t\t<div class=\"subscribe__block\">
\t\t\t\t\t<div class=\"subscribe__inputs\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 17
        echo ($context["customer_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_subscribe_mail_placeholder"] ?? null);
        echo "\" aria-label=\"Email\" class=\"subscribe__input subscribe__input-email form-control\" />
\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 18
        echo ($context["text_subscribe_pass_placeholder"] ?? null);
        echo "\" aria-label=\"Password\" disabled=\"disabled\" autocomplete=\"on\" class=\"subscribe__input subscribe__input-password form-control\" />
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"subscribe__btn btn btn-lg btn-block\" data-loading-text=\"";
        // line 20
        echo ($context["text_loading"] ?? null);
        echo "\"><i class=\"fa fa-envelope hidden-sm\"></i> <span>";
        echo ($context["button_subscribe"] ?? null);
        echo "</span></button>
\t\t\t\t</div>
\t\t\t\t";
        // line 22
        if (($context["text_subscribe_agree"] ?? null)) {
            // line 23
            echo "\t\t\t\t\t<label class=\"subscribe__agree input\">
\t\t\t\t\t\t<input id=\"confirm\" type=\"checkbox\" name=\"confirm\" value=\"1\" /><span>";
            // line 24
            echo ($context["text_subscribe_agree"] ?? null);
            echo "</span>
\t\t\t\t\t</label>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</div>
\t\t</div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  84 => 24,  81 => 23,  79 => 22,  72 => 20,  67 => 18,  61 => 17,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_subscribe.twig", "");
    }
}
