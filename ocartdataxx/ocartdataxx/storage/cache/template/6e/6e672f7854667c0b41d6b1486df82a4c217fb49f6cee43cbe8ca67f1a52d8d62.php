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

/* unishop2/template/extension/module/uni_attributes.twig */
class __TwigTemplate_720f5d24df80af28cb64c387f52992d82b67ba9f92f588eefefbd93cb82ec80f extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attributes", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<div class=\"product-thumb__attribute product-thumb__description attribute\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attributes", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 4
                echo "\t\t\t";
                echo ((twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 4)) ? ((twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 4) . ":")) : (""));
                echo " <span class=\"product-thumb__attribute-value\">";
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 4);
                echo "</span>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_attributes.twig", "/home/jsfivnhi/grandsmart.shop/catalog/view/theme/unishop2/template/extension/module/uni_attributes.twig");
    }
}
