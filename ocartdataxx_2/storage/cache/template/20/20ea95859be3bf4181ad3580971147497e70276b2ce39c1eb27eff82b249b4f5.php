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

/* default/template/product/sizechart_popup.twig */
class __TwigTemplate_0708f6591e8155eeabb9896d8119864a2352915041dcbdb78a1fa10147a782c3 extends \Twig\Template
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
        echo "<!--<div class=\"buttons\">
\t<button type=\"button\" class=\"btn btn-default btn-block\" data-toggle=\"modal\" data-target=\"#SizeChartModal\">";
        // line 2
        echo ($context["sizechart_title"] ?? null);
        echo "</button>
</div>-->
<div id=\"SizeChartModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 9
        echo ($context["sizechart_title"] ?? null);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
\t\t\t";
        // line 12
        if ((($context["sizechart_description"] ?? null) && (($context["sizechart_description"] ?? null) != "<p><br></p>"))) {
            // line 13
            echo "\t\t\t\t";
            echo ($context["sizechart_description"] ?? null);
            echo "
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if (($context["sizechart_rows"] ?? null)) {
            // line 16
            echo "\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sizechart_rows"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["sizechart_column"]) {
                // line 20
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
                // line 21
                $context["i"] = 1;
                // line 22
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sizechart_column"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sizechart_value"]) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["key"] == "0")) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t<th class=\"";
                        if ((twig_length_filter($this->env, $context["sizechart_column"]) == ($context["i"] ?? null))) {
                            echo "text-right";
                        } else {
                            echo "text-left";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sizechart_value"], "value", [], "any", false, false, false, 24);
                        echo "</th>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"";
                        if ((twig_length_filter($this->env, $context["sizechart_column"]) == ($context["i"] ?? null))) {
                            echo "text-right";
                        } else {
                            echo "text-left";
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sizechart_value"], "value", [], "any", false, false, false, 26);
                        echo "</td>
\t\t\t\t\t\t\t\t";
                    }
                    // line 28
                    echo "\t\t\t\t\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sizechart_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sizechart_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t";
        }
        // line 36
        echo "\t\t</div>
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/product/sizechart_popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  129 => 32,  122 => 30,  116 => 29,  113 => 28,  101 => 26,  89 => 24,  86 => 23,  81 => 22,  79 => 21,  76 => 20,  72 => 19,  67 => 16,  64 => 15,  58 => 13,  56 => 12,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/sizechart_popup.twig", "");
    }
}
