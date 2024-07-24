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

/* unishop2/template/extension/module/uni_stickers.twig */
class __TwigTemplate_b7ad3d4106442b3cb2824ca9f18be80b7ed54ba7e9d3de40a3f8b9578541727a extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stickers", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<div class=\"sticker\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stickers", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                // line 4
                echo "\t\t\t<div class=\"sticker__item ";
                echo twig_get_attribute($this->env, $this->source, $context["sticker"], "name", [], "any", false, false, false, 4);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 4);
                echo "</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_stickers.twig";
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
        return new Source("", "unishop2/template/extension/module/uni_stickers.twig", "/home/jsfivnhi/grandsmart.shop/catalog/view/theme/unishop2/template/extension/module/uni_stickers.twig");
    }
}
