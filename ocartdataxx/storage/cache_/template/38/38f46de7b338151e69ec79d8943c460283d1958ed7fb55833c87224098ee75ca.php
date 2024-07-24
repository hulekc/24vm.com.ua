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

/* unishop2/template/extension/module/uni_quantity_switch.twig */
class __TwigTemplate_d0acb99932a140efd6bcaf0fb8a283e608920b23c21aaa4aa48282359e0f5136 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "show_quantity", [], "any", false, false, false, 1) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_value", [], "any", false, false, false, 1))) {
            // line 2
            echo "\t<div class=\"qty-switch\">
\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 3
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 3);
            echo "\" data-minimum=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 3);
            echo "\" data-maximum=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "maximum", [], "any", false, false, false, 3);
            echo "\" class=\"qty-switch__input form-control\" />
\t\t<div>
\t\t\t<i class=\"qty-switch__btn fa fa-plus\"></i>
\t\t\t<i class=\"qty-switch__btn fa fa-minus\"></i>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_quantity_switch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_quantity_switch.twig", "/home/jsfivnhi/grandsmart.shop/catalog/view/theme/unishop2/template/extension/module/uni_quantity_switch.twig");
    }
}
