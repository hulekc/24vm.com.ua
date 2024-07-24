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

/* unishop2/template/extension/module/account.twig */
class __TwigTemplate_23403b0e4d0fcebe1522313f24fbbf82901b0a528a37e14d00326ae33adc4c9c extends \Twig\Template
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
        echo "<div class=\"list-group\">
\t";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "\t\t<a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t<a href=\"";
            // line 4
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
\t";
        }
        // line 6
        echo "\t<a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t";
        // line 7
        if (($context["logged"] ?? null)) {
            // line 8
            echo "\t\t<a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
\t\t<a href=\"";
            // line 9
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
\t";
        }
        // line 11
        echo "\t<a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_address"] ?? null);
        echo "</a>
\t";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_wishlist", [], "any", true, true, false, 12)) {
            // line 13
            echo "\t\t<a href=\"";
            echo ($context["wishlist"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a>
\t";
        }
        // line 15
        echo "\t<a href=\"";
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_download", [], "any", true, true, false, 16)) {
            // line 17
            echo "\t\t<a href=\"";
            echo ($context["download"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_download"] ?? null);
            echo "</a>
\t";
        }
        // line 19
        echo "\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_recurring", [], "any", true, true, false, 19)) {
            // line 20
            echo "\t\t<a href=\"";
            echo ($context["recurring"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_recurring"] ?? null);
            echo "</a>
\t";
        }
        // line 22
        echo "\t";
        if ((($context["reward"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_reward", [], "any", true, true, false, 22))) {
            // line 23
            echo "\t\t<a href=\"";
            echo ($context["reward"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_reward"] ?? null);
            echo "</a>
\t";
            // line 24
            if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_return", [], "any", true, true, false, 24)) {
                // line 25
                echo "\t\t<a href=\"";
                echo ($context["return"] ?? null);
                echo "\" class=\"list-group-item\">";
                echo ($context["text_return"] ?? null);
                echo "</a>
\t";
            }
            // line 27
            echo "\t";
        }
        // line 28
        echo "\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["account_page"] ?? null), "hide_transaction", [], "any", true, true, false, 28)) {
            // line 29
            echo "\t\t<a href=\"";
            echo ($context["transaction"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a>
\t";
        }
        // line 31
        echo "\t<a href=\"";
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t";
        // line 32
        if (($context["logged"] ?? null)) {
            // line 33
            echo "\t\t<a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t";
        }
        // line 35
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 35,  171 => 33,  169 => 32,  162 => 31,  154 => 29,  151 => 28,  148 => 27,  140 => 25,  138 => 24,  131 => 23,  128 => 22,  120 => 20,  117 => 19,  109 => 17,  107 => 16,  100 => 15,  92 => 13,  90 => 12,  83 => 11,  76 => 9,  69 => 8,  67 => 7,  60 => 6,  53 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/account.twig", "");
    }
}
