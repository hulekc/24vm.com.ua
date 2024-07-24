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

/* unishop2/template/common/language.twig */
class __TwigTemplate_cb9b96c5627633b55ea1e4a4f7952778a6739a1660610a73a47b89aea7852834 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "\t<div class=\"left-menu__language\">
\t\t<form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"language\">
\t\t\t<div class=\"btn-group dropdown-toggle\">
\t\t\t\t<span class=\"topl-menu__btn\"><img src=\"/image/catalog/icons/flag-ua.svg\" title=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 5);
            echo "\"alt=\"flag-ua\"></span>
\t\t\t\t<ul class=\"header-menu-right luxs\">
\t\t\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 8
                echo "\t\t\t\t\t\t<li class=\"left-menu__language-item thny\"><a class=\"lang-lxn\" data-code=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                echo "\"><span>";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                echo "</span></a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 13
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 10,  56 => 8,  52 => 7,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/language.twig", "");
    }
}
