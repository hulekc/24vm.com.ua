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

/* default/template/checkout/simplecheckout_customer.twig */
class __TwigTemplate_33828d09ba339d2330872b150bf411af098d8dc466596bfea11463beb2feec21 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_customer\" ";
        echo ((($context["hide"] ?? null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo (((($context["display_error"] ?? null) && ($context["has_error"] ?? null))) ? ("data-error=\"true\"") : (""));
        echo ">
  ";
        // line 2
        if ((($context["display_header"] ?? null) || ($context["display_login"] ?? null))) {
            // line 3
            echo "  <div class=\"checkout-heading panel-heading\"><span>";
            echo ($context["text_checkout_customer"] ?? null);
            echo "</span>";
            if (($context["display_login"] ?? null)) {
                echo "<span class=\"checkout-heading-button\"><a href=\"javascript:void(0)\" data-onclick=\"openLoginBox\">";
                echo ($context["text_checkout_customer_login"] ?? null);
                echo "</a></span>";
            }
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"simplecheckout-block-content\">
    ";
        // line 6
        if (($context["display_registered"] ?? null)) {
            // line 7
            echo "      <div class=\"alert alert-success\">";
            echo ($context["text_account_created"] ?? null);
            echo "</div>
    ";
        }
        // line 9
        echo "    ";
        if (($context["display_you_will_registered"] ?? null)) {
            // line 10
            echo "      <div class=\"you-will-be-registered\">";
            echo ($context["text_you_will_be_registered"] ?? null);
            echo "</div>
    ";
        }
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  83 => 13,  78 => 12,  72 => 10,  69 => 9,  63 => 7,  61 => 6,  58 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout_customer.twig", "");
    }
}
