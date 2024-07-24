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

/* unishop2/template/mail/register.twig */
class __TwigTemplate_2b2ddd51780caa9fd56d7d193c576c495c9bebd785f499e0e72da5f6083a6b2f extends \Twig\Template
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
        echo ($context["text_welcome"] ?? null);
        echo "

";
        // line 3
        if (($context["text_subscribe"] ?? null)) {
            // line 4
            echo ($context["text_subscribe"] ?? null);
            echo "
\t
";
        }
        // line 7
        if ( !($context["approval"] ?? null)) {
            // line 8
            echo ($context["text_login"] ?? null);
            echo "

";
            // line 10
            echo ($context["login"] ?? null);
            echo "
\t
";
            // line 12
            if ((($context["text_user_login"] ?? null) && ($context["text_user_password"] ?? null))) {
                // line 13
                echo ($context["text_user_login"] ?? null);
                echo "
";
                // line 14
                echo ($context["text_user_password"] ?? null);
                echo "
\t\t
";
            }
            // line 17
            echo ($context["text_service"] ?? null);
            echo "
";
        } else {
            // line 19
            echo ($context["text_approval"] ?? null);
            echo "

";
            // line 21
            echo ($context["login"] ?? null);
            echo "
\t
";
            // line 23
            if ((($context["text_user_login"] ?? null) && ($context["text_user_password"] ?? null))) {
                // line 24
                echo ($context["text_user_login"] ?? null);
                echo "
";
                // line 25
                echo ($context["text_user_password"] ?? null);
                echo "
";
            }
        }
        // line 28
        echo "
";
        // line 29
        echo ($context["text_thanks"] ?? null);
        echo "
";
        // line 30
        echo ($context["store"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  104 => 29,  101 => 28,  95 => 25,  91 => 24,  89 => 23,  84 => 21,  79 => 19,  74 => 17,  68 => 14,  64 => 13,  62 => 12,  57 => 10,  52 => 8,  50 => 7,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/mail/register.twig", "");
    }
}
