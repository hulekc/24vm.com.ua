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

/* default/template/extension/module/account_sidebar.twig */
class __TwigTemplate_3e1c80e97b5dd5e18f26732da669745671a009130fe4265dd12548078f766488 extends \Twig\Template
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
        echo "<div class=\"account-sidebar\">
  <h3 class=\"lux-account-titles\">";
        // line 2
        echo ($context["text_account"] ?? null);
        echo "</h3>
  <div id =\"list-group\" class=\"list-group\">
    ";
        // line 4
        if (($context["main_links"] ?? null)) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["main_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["main_link"]) {
                // line 6
                echo "    <ul class=\"list-unstyled\">
        ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["main_link"], "children_links", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["children_link"]) {
                    // line 8
                    echo "            <li class=\"list-gp-menu\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["children_link"], "link", [], "any", false, false, false, 8);
                    echo "\" class=\"list-group-item\"><span class=\"lux-icon__menu-account\"><i class=\"fa ";
                    echo twig_get_attribute($this->env, $this->source, $context["children_link"], "iconclass", [], "any", false, false, false, 8);
                    echo "\" aria-hidden=\"true\"></i>&nbsp;<span class=\"lux-title__menu\">";
                    echo twig_get_attribute($this->env, $this->source, $context["children_link"], "title", [], "any", false, false, false, 8);
                    echo "</span></a> </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "    </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "  </div>
</div>


<style type=\"text/css\">
";
        // line 18
        if (($context["module_account_sidebar_titlebgcolor"] ?? null)) {
            // line 19
            echo ".account-sidebar h3{
    background: ";
            // line 20
            echo ($context["module_account_sidebar_titlebgcolor"] ?? null);
            echo "
}
";
        }
        // line 23
        echo "
";
        // line 24
        if (($context["module_account_sidebar_titlecolor"] ?? null)) {
            // line 25
            echo ".account-sidebar h3, .account-sidebar h3{
    color: ";
            // line 26
            echo ($context["module_account_sidebar_titlecolor"] ?? null);
            echo "
}
";
        }
        // line 29
        echo "
.account-sidebar .list-group-item{
    ";
        // line 31
        if (($context["module_account_sidebar_linkbgcolor"] ?? null)) {
            // line 32
            echo "       background: ";
            echo ($context["module_account_sidebar_linkbgcolor"] ?? null);
            echo " !important;
    ";
        }
        // line 34
        echo "    ";
        if (($context["module_account_sidebar_linkcolor"] ?? null)) {
            // line 35
            echo "       color: ";
            echo ($context["module_account_sidebar_linkcolor"] ?? null);
            echo " !important;
    ";
        }
        // line 37
        echo "}
.account-sidebar .list-group-item:hover{
    ";
        // line 39
        if (($context["module_account_sidebar_hoverbgcolor"] ?? null)) {
            // line 40
            echo "      background: ";
            echo ($context["module_account_sidebar_hoverbgcolor"] ?? null);
            echo " !important;
    ";
        }
        // line 42
        echo "    ";
        if (($context["module_account_sidebar_hovercolor"] ?? null)) {
            // line 43
            echo "      color: ";
            echo ($context["module_account_sidebar_hovercolor"] ?? null);
            echo " !important;
    ";
        }
        // line 45
        echo "}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/account_sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  150 => 43,  147 => 42,  141 => 40,  139 => 39,  135 => 37,  129 => 35,  126 => 34,  120 => 32,  118 => 31,  114 => 29,  108 => 26,  105 => 25,  103 => 24,  100 => 23,  94 => 20,  91 => 19,  89 => 18,  82 => 13,  79 => 12,  72 => 10,  59 => 8,  55 => 7,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/account_sidebar.twig", "");
    }
}
