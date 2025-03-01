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

/* default/template/account/recurring_list.twig */
class __TwigTemplate_a404fcebf0d8c1fb762c7593725c3ad3c891a9846a7412269abc712bc326aeb9 extends \Twig\Template
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
<div id=\"account-recurring\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
    <div class=\"uni-block__line\">
      <h1 class=\"heading\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 19
        if (($context["recurrings"] ?? null)) {
            // line 20
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 24
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 25
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 26
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 27
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td class=\"text-right\"></td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 34
                echo "          <tr>
            <td class=\"text-right\">#";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_recurring_id", [], "any", false, false, false, 35);
                echo "</td>
            <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "product", [], "any", false, false, false, 36);
                echo "</td>
            <td class=\"text-left\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "status", [], "any", false, false, false, 37);
                echo "</td>
            <td class=\"text-left\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "date_added", [], "any", false, false, false, 38);
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "view", [], "any", false, false, false, 39);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "          
          </tbody>
        </table>
      </div>
      <div class=\"text-right\">";
            // line 46
            echo ($context["pagination"] ?? null);
            echo "</div>
      ";
        } else {
            // line 48
            echo "      <div class=\"div-text-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
      ";
        }
        // line 50
        echo "      <!--<div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 51
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>-->
      </div>
      ";
        // line 54
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 55
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 57
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 57,  192 => 55,  188 => 54,  180 => 51,  177 => 50,  171 => 48,  166 => 46,  160 => 42,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  130 => 34,  126 => 33,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  99 => 20,  97 => 19,  93 => 18,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/recurring_list.twig", "");
    }
}
