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

/* default/template/extension/module/ocfilter48/selected_filter.twig */
class __TwigTemplate_f5bd6d1ceff6d3b63df058b3d167a39494ae6cccd6982a4965b833245c7a991e extends \Twig\Template
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
        echo "<div class=\"ocf-selected-card ocf-desktop\">
  <div class=\"ocf-selected-header\">";
        // line 2
        echo ($context["text_choosed"] ?? null);
        echo "</div>
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["selecteds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            echo "   
  <div class=\"ocf-selected-filter\">
    <span class=\"ocf-selected-filter-name\">";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 5);
            echo ":</span>
    
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                echo "   
    <button type=\"button\" onclick=\"location = '";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["value"], "href", [], "any", false, false, false, 8);
                echo "';\" class=\"ocf-selected-discard\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 8);
                echo "\">
      <span class=\"ocf-selected-value-name\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 9);
                echo "</span> 
      <i class=\"ocf-icon ocf-times-circle\"></i>
    </button>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  
  <div class=\"ocf-between\">   
    <button type=\"button\" class=\"ocf-btn ocf-btn-link ocf-text-danger\" onclick=\"location = '";
        // line 17
        echo ($context["link"] ?? null);
        echo "';\">";
        echo ($context["button_cancel_all"] ?? null);
        echo "</button>
    <button type=\"button\" class=\"ocf-btn ocf-btn-link\" data-ocf=\"specify\">";
        // line 18
        echo ($context["button_specify"] ?? null);
        echo "</button>    
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter48/selected_filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  89 => 17,  85 => 15,  78 => 13,  68 => 9,  62 => 8,  56 => 7,  51 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/ocfilter48/selected_filter.twig", "/home/jsfivnhi/grandsmart.shop/catalog/view/theme/default/template/extension/module/ocfilter48/selected_filter.twig");
    }
}
