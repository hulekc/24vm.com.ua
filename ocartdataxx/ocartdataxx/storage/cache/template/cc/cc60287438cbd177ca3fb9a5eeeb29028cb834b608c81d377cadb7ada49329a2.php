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

/* unishop2/template/extension/module/uni_banner.twig */
class __TwigTemplate_35dd29033418ad3ed53bda257750b2f76bd16e76683955f9a2eb894b036fca47 extends \Twig\Template
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
        if (($context["banners"] ?? null)) {
            // line 2
            echo "\t<div class=\"uni-banner row row-flex\">
\t\t";
            // line 3
            if (((twig_length_filter($this->env, ($context["banners"] ?? null)) == 5) || (twig_length_filter($this->env, ($context["banners"] ?? null)) == 6))) {
                // line 4
                echo "\t\t\t";
                $context["class"] = "col-xs-6 col-sm-2 col-md-2";
                // line 5
                echo "\t\t";
            } elseif ((twig_length_filter($this->env, ($context["banners"] ?? null)) == 4)) {
                // line 6
                echo "\t\t\t";
                $context["class"] = "col-xs-6 col-sm-3 col-md-3";
                // line 7
                echo "\t\t";
            } elseif ((twig_length_filter($this->env, ($context["banners"] ?? null)) == 3)) {
                // line 8
                echo "\t\t\t";
                $context["class"] = "col-xs-6 col-sm-4 col-md-4";
                // line 9
                echo "\t\t";
            } elseif ((twig_length_filter($this->env, ($context["banners"] ?? null)) == 2)) {
                // line 10
                echo "\t\t\t";
                $context["class"] = "col-xs-6 col-sm-6 col-md-6";
                // line 11
                echo "\t\t";
            } elseif ((twig_length_filter($this->env, ($context["banners"] ?? null)) == 1)) {
                // line 12
                echo "\t\t\t";
                $context["class"] = "col-xs-12 col-sm-12 col-md-12";
                echo "\t\t\t
\t\t";
            }
            // line 14
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 15
                echo "\t\t\t<div class=\"uni-banner__item ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 17);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
                    echo "\" class=\"uni-banner__a\">
\t\t\t\t\t\t<img src=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 18);
                    echo "\" loading=\"lazy\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 18);
                    echo "\" class=\"uni-banner__img img-responsive\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 18);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 18);
                    echo "\" decoding=\"async\" />
\t\t\t\t\t\t";
                    // line 19
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 19)) {
                        // line 20
                        echo "\t\t\t\t\t\t\t<span class=\"uni-banner__title banner-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 20);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 22
                    echo "\t\t\t\t\t</a>
\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t<div class=\"uni-banner__div\">
\t\t\t\t\t\t<img src=\"";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 25);
                    echo "\" loading=\"lazy\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 25);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 25);
                    echo "\" class=\"uni-banner__img img-responsive\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 25);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 25);
                    echo "\" decoding=\"async\" />
\t\t\t\t\t\t";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "\t\t\t\t\t\t\t<span class=\"uni-banner__title banner-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 27);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 29
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 31
                echo "\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 33,  142 => 31,  138 => 29,  132 => 27,  130 => 26,  118 => 25,  115 => 24,  111 => 22,  105 => 20,  103 => 19,  93 => 18,  86 => 17,  84 => 16,  79 => 15,  74 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_banner.twig", "");
    }
}
