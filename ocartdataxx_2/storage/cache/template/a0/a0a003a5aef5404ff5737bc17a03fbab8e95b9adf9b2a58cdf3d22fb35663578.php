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

/* extension/dashboard/uni_request_info.twig */
class __TwigTemplate_6e7657419893f826c861789b89d99e3923b739eb3a955bf013d5d4f5c2d3fb28 extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-question-circle\"></i>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t</div>
\t<div class=\"table-responsive\">
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 9
        echo ($context["column_type"] ?? null);
        echo "</td>
\t\t\t\t<td>";
        // line 10
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t<td>";
        // line 11
        echo ($context["column_phone"] ?? null);
        echo "</td>
\t\t\t\t<td>";
        // line 12
        echo ($context["column_mail"] ?? null);
        echo "</td>
\t\t\t\t<td>";
        // line 13
        echo ($context["column_date"] ?? null);
        echo "</td>
\t\t\t\t<td>";
        // line 14
        echo ($context["column_status"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-right\">";
        // line 15
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t";
        // line 18
        if (($context["requests"] ?? null)) {
            // line 19
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["requests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 20
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["result"], "type", [], "any", false, false, false, 21);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 22);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["result"], "phone", [], "any", false, false, false, 23);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["result"], "mail", [], "any", false, false, false, 24);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["result"], "date", [], "any", false, false, false, 25);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["result"], "status", [], "any", false, false, false, 26);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right\"><a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["result"], "action", [], "any", false, false, false, 27);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" colspan=\"8\">";
            // line 32
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 35
        echo "\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/uni_request_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 35,  131 => 32,  128 => 31,  125 => 30,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  82 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/uni_request_info.twig", "");
    }
}
