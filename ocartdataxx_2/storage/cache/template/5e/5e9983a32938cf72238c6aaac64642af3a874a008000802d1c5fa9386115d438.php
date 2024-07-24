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

/* unishop2/template/extension/module/uni_options.twig */
class __TwigTemplate_1d8e4b5d301244ea94f9681306fc2406502d6c39b5503b0206b982f978411e79 extends \Twig\Template
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
        echo "<div class=\"product-thumb__option option\">
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "options", [], "any", false, false, false, 2)) {
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "options", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 4
                echo "\t\t";
                if (((((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 4) == "checkbox") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 4) == "select")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 4) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 4) == "image"))) {
                    // line 5
                    echo "\t\t\t<div class=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 5);
                    echo " option__group\">
\t\t\t\t<label class=\"option__group-name\">";
                    // line 6
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 6)) ? ("*") : (""));
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 6);
                    echo ":</label>
\t\t\t\t";
                    // line 7
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["option"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "select")) {
                        // line 8
                        echo "\t\t\t\t\t<select name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 8);
                        echo "]\" class=\"option__select form-control\">
\t\t\t\t\t\t<option value=\"\">";
                        // line 9
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t";
                        // line 10
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 10));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 11
                            echo "\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 11);
                            echo "\" data-prefix=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 11);
                            echo "\" data-price=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 11);
                            echo "\" ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 11)) ? ("disabled=\"disabled\"") : (""));
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 11);
                            echo " ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 11)) ? ((((("(" . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 11)) . "") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 11)) . ")")) : (""));
                            echo "</option>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 13
                        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t";
                    }
                    // line 16
                    echo "\t\t\t\t";
                    if ((((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 16) == "checkbox") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 16) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 16) == "image"))) {
                        // line 17
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 17));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 18
                            echo "\t\t\t\t\t\t<label class=\"option__item ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 18)) ? ("ended") : (""));
                            echo "\" ";
                            echo ((((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 18) &&  !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 18)) &&  !twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 18))) ? ((((("data-toggle=\"tooltip\" title=\"" . twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 18)) . " ") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 18)) . "\"")) : (""));
                            echo ">
\t\t\t\t\t\t\t";
                            // line 19
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 19) == "checkbox")) {
                                // line 20
                                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 20);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 20);
                                echo "\" class=\"option-value-";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 20);
                                echo "\" data-prefix=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 20);
                                echo "\" data-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 20);
                                echo "\" ";
                                echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 20)) ? ("disabled=\"disabled\"") : (""));
                                echo " />
\t\t\t\t\t\t\t";
                            }
                            // line 22
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 22) == "radio")) {
                                // line 23
                                echo "\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 23);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 23);
                                echo "\" class=\"option-value-";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 23);
                                echo "\" data-maximum=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "maximum", [], "any", false, false, false, 23);
                                echo "\" data-prefix=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 23);
                                echo "\" data-price=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_value", [], "any", false, false, false, 23);
                                echo "\" ";
                                echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "ended", [], "any", false, false, false, 23)) ? ("disabled=\"disabled\"") : (""));
                                echo " />
\t\t\t\t\t\t\t";
                            }
                            // line 25
                            echo "\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 25)) {
                                // line 26
                                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 26);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 26);
                                echo " ";
                                echo ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 26)) ? (((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 26) . "") . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 26))) : (""));
                                echo "\" loading=\"lazy\" data-type=\"module\" data-thumb=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "small", [], "any", false, false, false, 26);
                                echo "\" class=\"option__img\" />\t\t\t\t\t
\t\t\t\t\t\t\t";
                            } else {
                                // line 28
                                echo "\t\t\t\t\t\t\t\t<span class=\"option__name\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 28);
                                echo "</span>
\t\t\t\t\t\t\t";
                            }
                            // line 30
                            echo "\t\t\t\t\t\t</label>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t</div>
\t\t";
                }
                // line 35
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t";
        }
        // line 37
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 37,  195 => 36,  189 => 35,  185 => 33,  182 => 32,  175 => 30,  169 => 28,  157 => 26,  154 => 25,  136 => 23,  133 => 22,  117 => 20,  115 => 19,  108 => 18,  103 => 17,  100 => 16,  95 => 13,  76 => 11,  72 => 10,  68 => 9,  63 => 8,  61 => 7,  55 => 6,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_options.twig", "/home/jsfivnhi/grandsmart.shop/catalog/view/theme/unishop2/template/extension/module/uni_options.twig");
    }
}
