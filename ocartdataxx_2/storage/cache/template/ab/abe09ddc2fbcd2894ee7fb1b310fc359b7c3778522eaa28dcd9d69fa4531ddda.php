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

/* unishop2/template/extension/module/uni_home_banner.twig */
class __TwigTemplate_d1f4ac06ec3f05b406f902fb43e61a23ea117c9c4cd321a0d3c72ed043e04e50 extends \Twig\Template
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
        if (($context["home_banners"] ?? null)) {
            // line 2
            echo "\t";
            if ((twig_length_filter($this->env, ($context["home_banners"] ?? null)) == 4)) {
                // line 3
                echo "\t\t";
                $context["class"] = "col-sm-6 col-md-3";
                // line 4
                echo "\t";
            } elseif ((twig_length_filter($this->env, ($context["home_banners"] ?? null)) == 3)) {
                // line 5
                echo "\t\t";
                $context["class"] = "col-sm-4 col-md-4";
                // line 6
                echo "\t";
            } elseif ((twig_length_filter($this->env, ($context["home_banners"] ?? null)) == 2)) {
                // line 7
                echo "\t\t";
                $context["class"] = "col-sm-6 col-md-6";
                // line 8
                echo "\t";
            } elseif ((twig_length_filter($this->env, ($context["home_banners"] ?? null)) == 1)) {
                // line 9
                echo "\t\t";
                $context["class"] = "col-sm-12 col-md-12";
                echo "\t\t\t
\t";
            }
            // line 11
            echo "\t<div class=\"home-banner row row-flex\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["home_banners"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["home_banner"]) {
                // line 13
                echo "\t\t\t<div class=\"col-xs-12 ";
                echo ($context["class"] ?? null);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["home_banner"], "hide_on_mobile", [], "any", false, false, false, 13)) ? ("hidden-on-mobile") : (""));
                echo "\">
\t\t\t\t";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["home_banner"], "link", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"home-banner__item link ";
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["home_banner"], "link_popup", [], "any", false, false, false, 15))) ? ("uni-href") : (""));
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["home_banner"], "link_popup", [], "any", false, false, false, 15)) {
                        echo "onclick=\"uniBannerLink('";
                        echo twig_get_attribute($this->env, $this->source, $context["home_banner"], "link", [], "any", false, false, false, 15);
                        echo "')\"";
                    } else {
                        echo "data-href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["home_banner"], "link", [], "any", false, false, false, 15);
                        echo "\"";
                    }
                    echo ">
\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t<div class=\"home-banner__item\">
\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["home_banner"], "icon", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "\t\t\t\t\t<i class=\"home-banner__icon ";
                    echo twig_get_attribute($this->env, $this->source, $context["home_banner"], "icon", [], "any", false, false, false, 20);
                    echo " fa-fw\"></i>
\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 21
$context["home_banner"], "img", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t<img src=\"";
                    echo ("../image/" . twig_get_attribute($this->env, $this->source, $context["home_banner"], "img", [], "any", false, false, false, 22));
                    echo "\" title=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["home_banner"], "text_1", [], "any", false, false, false, 22) . " ") . twig_get_attribute($this->env, $this->source, $context["home_banner"], "text_2", [], "any", false, false, false, 22));
                    echo "\" class=\"home-banner__image\" width=\"55px\" height=\"55px\" />
\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t<div class=\"home-banner__text\">
\t\t\t\t\t<span class=\"home-banner__text-1 ";
                // line 25
                echo ((twig_get_attribute($this->env, $this->source, $context["home_banner"], "link", [], "any", false, false, false, 25)) ? ("link") : (""));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["home_banner"], "text_1", [], "any", false, false, false, 25);
                echo "</span>
\t\t\t\t\t";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["home_banner"], "text_2", [], "any", false, false, false, 26);
                echo "
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['home_banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</div>
";
        }
        // line 32
        echo " ";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_home_banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 32,  140 => 31,  129 => 26,  123 => 25,  120 => 24,  112 => 22,  110 => 21,  105 => 20,  102 => 19,  98 => 17,  82 => 15,  80 => 14,  73 => 13,  69 => 12,  66 => 11,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_home_banner.twig", "");
    }
}
