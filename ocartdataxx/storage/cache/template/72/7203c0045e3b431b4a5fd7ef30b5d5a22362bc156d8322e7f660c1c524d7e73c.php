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

/* default/template/extension/module/ocfilter48/value_item.twig */
class __TwigTemplate_2236d2baa47e2ea324b486297a199435cddfa898b5bbd19c974f9526c51c9052 extends \Twig\Template
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
        $context["class"] = ("ocf-value ocf-" . twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 1));
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "selected", [], "any", false, false, false, 2)) {
            // line 3
            $context["class"] = (($context["class"] ?? null) . " ocf-selected");
        } elseif ( !twig_get_attribute($this->env, $this->source,         // line 4
($context["value"] ?? null), "count", [], "any", false, false, false, 4)) {
            // line 5
            $context["class"] = (($context["class"] ?? null) . " ocf-disabled");
        }
        // line 7
        echo "
<button type=\"button\" id=\"ocf-v-";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 8);
        echo "-";
        echo ($context["index"] ?? null);
        echo "\" class=\"";
        echo ($context["class"] ?? null);
        echo "\" data-filter-key=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "filter_key", [], "any", false, false, false, 8);
        echo "\" data-value-id=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "value_id", [], "any", false, false, false, 8);
        echo "\">
  ";
        // line 9
        if (( !twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "color", [], "any", false, false, false, 9) &&  !twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "image", [], "any", false, false, false, 9))) {
            // line 10
            echo "  <span class=\"ocf-value-input ocf-value-input-";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 10);
            echo "\"></span>
  ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 11
($context["value"] ?? null), "color", [], "any", false, false, false, 11)) {
            // line 12
            echo "  <span class=\"ocf-value-color\" style=\"background-color: #";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "color", [], "any", false, false, false, 12);
            echo ";\"></span>
  ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 13
($context["value"] ?? null), "image", [], "any", false, false, false, 13)) {
            // line 14
            echo "  <span class=\"ocf-value-image\" style=\"background-image: url(";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "image", [], "any", false, false, false, 14);
            echo ");\"></span>
  ";
        }
        // line 16
        echo "    
  <span class=\"ocf-value-name\">";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "name", [], "any", false, false, false, 17);
        echo "</span>
  ";
        // line 18
        if (($context["show_counter"] ?? null)) {
            // line 19
            echo "  <span class=\"ocf-value-append\">   
    <span class=\"ocf-value-count\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", false, false, false, 20);
            echo "</span>
  </span>
  ";
        }
        // line 23
        echo "</button>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter48/value_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  97 => 20,  94 => 19,  92 => 18,  88 => 17,  85 => 16,  79 => 14,  77 => 13,  72 => 12,  70 => 11,  65 => 10,  63 => 9,  51 => 8,  48 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/ocfilter48/value_item.twig", "/home/jsfivnhi/grandsmart.shop/catalog/view/theme/default/template/extension/module/ocfilter48/value_item.twig");
    }
}
