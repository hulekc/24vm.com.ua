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

/* unishop2/template/common/menu.twig */
class __TwigTemplate_3f2e983465a66304c8d9846c142098a4fa8880384317b8ccb5bd6289aafeab1e extends \Twig\Template
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
        if ((($context["categories"] ?? null) || ($context["headerlinks2"] ?? null))) {
            // line 2
            echo "\t";
            if ((($context["menu_type"] ?? null) == 1)) {
                // line 3
                echo "\t\t";
                if (($context["menu_positions"] ?? null)) {
                    // line 4
                    echo "\t\t\t";
                    $context["class"] = "new";
                    // line 5
                    echo "\t\t";
                } else {
                    // line 6
                    echo "\t\t\t";
                    $context["class"] = "col-md-3 col-lg-3 col-xxl-4";
                    // line 7
                    echo "\t\t";
                }
                // line 8
                echo "\t";
            } else {
                // line 9
                echo "\t\t";
                $context["class"] = "col-md-12";
                // line 10
                echo "\t";
            }
            // line 11
            echo "\t<div class=\"main-menu ";
            echo (((((($context["menu_type"] ?? null) == 1) && ($context["headerlinks2"] ?? null)) || (($context["menu_type"] ?? null) == 2))) ? ("set-before") : ("not-before"));
            echo "\">
\t<div class=\"menu-wrapper ";
            // line 12
            echo ($context["class"] ?? null);
            echo "\">
\t\t<nav id=\"menu\" class=\"menu ";
            // line 13
            echo (((($context["menu_type"] ?? null) == 1)) ? (" menu1") : (" menu2"));
            echo " ";
            echo ((($context["menu_positions"] ?? null)) ? ("new") : (""));
            echo "\">
\t\t\t<div class=\"menu__header\">
\t\t\t\t<img src=\"/image/catalog/icons/catalog-icon.png\" alt=\"catalog-icon-site\">
\t\t\t\t<span class=\"menu__header-title\">";
            // line 16
            echo ($context["text_menu"] ?? null);
            echo "</span>
\t\t\t\t<i class=\"menu-close menu__header-icon fas fa-times visible-xs visible-sm\"></i>
\t\t\t</div>
\t\t\t<ul class=\"menu__collapse main-menu__collapse\">
\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 21
                echo "\t\t\t\t\t<li class=\"menu__level-1-li ";
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21)) ? ("has-children") : (""));
                echo "\">
\t\t\t\t\t\t<a class=\"menu__level-1-a\" href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                echo "\">
\t\t\t\t\t\t\t";
                // line 23
                if (twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 23))) {
                    echo "<i class=\"menu__level-1-icon ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 23);
                    echo " fa-fw\"></i>";
                } elseif (twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 23)) {
                    echo "<img src=\"image/";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 23);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23);
                    echo "\" class=\"menu__level-1-img\" loading=\"lazy\" />";
                }
                // line 24
                echo "\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "\t\t\t\t\t\t\t";
                    $context["column"] = (((twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 27) > 4)) ? (4) : (twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 27)));
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t";
                        $context["column"] = ((((($context["column"] ?? null) == 2) || (($context["column"] ?? null) == 3))) ? ((($context["column"] ?? null) + 1)) : (($context["column"] ?? null)));
                        // line 30
                        echo "\t\t\t\t\t\t\t\t";
                        $context["class"] = ("col-md-" . (12 / (($context["column"] ?? null) - 1)));
                        // line 31
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t";
                        $context["class"] = ("col-md-" . (12 / ($context["column"] ?? null)));
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-1-pm visible-xs visible-sm\"><i class=\"fa fa-plus\"></i><i class=\"fa fa-minus\"></i></span>
\t\t\t\t\t\t\t<div class=\"menu__level-2 ";
                    // line 35
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 35)) ? ("has-banner") : (""));
                    echo " column-";
                    echo ($context["column"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 36
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 36)) ? ("<div class=\"menu__level-2-wrap\">") : (""));
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"menu__level-2-ul ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 38)) ? (" has-image ") : (""));
                        echo " ";
                        echo ($context["class"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 39
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 39)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 39);
                            echo "\" loading=\"lazy\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 39);
                            echo "\" class=\"menu__level-2-img\" />";
                        }
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-2-a ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 40)) ? ("has-children") : (""));
                        echo "\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 40);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 40);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 41
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 41)) {
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-2-pm visible-xs visible-sm\"><i class=\"fa fa-plus\"></i><i class=\"fa fa-minus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu__level-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu__level-3-ul\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 45
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 45));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 46
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-3-li\"><a class=\"menu__level-3-a\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 46);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 46);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 48
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "more", [], "any", false, false, false, 48)) {
                                // line 49
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-3-li\"><a class=\"menu__level-3-a menu__more uni-href\" data-href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 49);
                                echo "\"><span class=\"menu__more-span\">";
                                echo ($context["text_all_categories"] ?? null);
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "more", [], "any", false, false, false, 49);
                                echo ")</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 51
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 56)) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"menu__banner\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 59
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 59), "html", [], "any", false, false, false, 59)) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 60), "html", [], "any", false, false, false, 60);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 61
$context["category"], "banner", [], "any", false, false, false, 61), "img", [], "any", false, false, false, 61)) {
                            // line 62
                            echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 62), "img", [], "any", false, false, false, 62);
                            echo "\" alt=\"\" class=\"uni-href img-responsive\" data-href=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 62), "href", [], "any", false, false, false, 62);
                            echo "\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 62), "img_width", [], "any", false, false, false, 62);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "banner", [], "any", false, false, false, 62), "img_height", [], "any", false, false, false, 62);
                            echo "\" loading=\"lazy\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t</ul>
\t\t</nav>
\t</div>
\t<div class=\"menu-open visible-xs visible-sm\">
\t\t<img src=\"/image/catalog/icons/catalog-icon.png\" alt=\"catalog-icon-site\">
\t\t<span class=\"menu-open__title ";
            // line 75
            echo ((($context["show_title_on_mobile"] ?? null)) ? ("show-on-mobile") : (""));
            echo "\">";
            echo ($context["text_menu"] ?? null);
            echo "</span>
\t</div>
\t";
            // line 77
            if (((($context["menu_type"] ?? null) == 1) && ($context["headerlinks2"] ?? null))) {
                // line 78
                echo "\t\t<div class=\"col-xs-12 ";
                echo (((($context["menu_positions"] ?? null) == 0)) ? ("col-md-9 col-lg-9 col-xxl-16") : (""));
                echo " hidden-xs hidden-sm\">
\t\t\t<nav id=\"menu2\" class=\"menu menu2 menu-right  ";
                // line 79
                echo ((($context["menu_positions"] ?? null)) ? ("new") : (""));
                echo "\">
\t\t\t\t<ul class=\"menu__collapse\">
\t\t\t\t\t";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["headerlinks2"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["headerlink"]) {
                    // line 82
                    echo "\t\t\t\t\t\t<li class=\"menu__level-1-li ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["headerlink"], "children", [], "any", false, false, false, 82)) ? ("has-children") : (""));
                    echo "\">
\t\t\t\t\t\t\t<a class=\"menu__level-1-a\" href=\"";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "href", [], "any", false, false, false, 83);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 84
                    if (twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["headerlink"], "icon", [], "any", false, false, false, 84))) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"menu__level-1-icon ";
                        echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "icon", [], "any", false, false, false, 85);
                        echo " fa-fw\"></i>
\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 86
$context["headerlink"], "icon", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"image/";
                        echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "icon", [], "any", false, false, false, 87);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "name", [], "any", false, false, false, 87);
                        echo "\" class=\"menu__level-1-img\" />
\t\t\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "name", [], "any", false, false, false, 89);
                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 91
                    if (twig_get_attribute($this->env, $this->source, $context["headerlink"], "children", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-1-pm visible-xs visible-sm\"><i class=\"fa fa-plus\"></i><i class=\"fa fa-minus\"></i></span>
\t\t\t\t\t\t\t\t<div class=\"menu__level-2 column-";
                        // line 93
                        echo twig_get_attribute($this->env, $this->source, $context["headerlink"], "column", [], "any", false, false, false, 93);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 94
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["headerlink"], "children", [], "any", false, false, false, 94));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"menu__level-2-ul ";
                            echo (((twig_get_attribute($this->env, $this->source, $context["headerlink"], "column", [], "any", false, false, false, 95) < 5)) ? (("col-md-" . (12 / twig_get_attribute($this->env, $this->source, $context["headerlink"], "column", [], "any", false, false, false, 95)))) : ("col-md-4"));
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-2-li\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-2-a ";
                            // line 97
                            echo ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 97)) ? ("has-children") : (""));
                            echo "\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 97);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 97);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 98
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 98) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 98)) > 0))) {
                                // line 99
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-2-pm visible-xs visible-sm\"><i class=\"fa fa-plus\" ></i><i class=\"fa fa-minus\" ></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu__level-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 102
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 102));
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    // line 103
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-3-li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-3-a\" href=\"";
                                    // line 104
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 104);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 104);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 107
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 110
                            echo "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlink'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t";
            }
            // line 121
            echo "\t<script>uniMenuUpd('header .menu2 .menu__collapse');</script>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 121,  413 => 117,  406 => 115,  402 => 113,  394 => 110,  389 => 107,  378 => 104,  375 => 103,  371 => 102,  366 => 99,  364 => 98,  356 => 97,  350 => 95,  346 => 94,  342 => 93,  339 => 92,  337 => 91,  331 => 89,  323 => 87,  321 => 86,  316 => 85,  314 => 84,  310 => 83,  305 => 82,  301 => 81,  296 => 79,  291 => 78,  289 => 77,  282 => 75,  275 => 70,  268 => 68,  264 => 66,  260 => 64,  248 => 62,  246 => 61,  241 => 60,  239 => 59,  235 => 57,  232 => 56,  225 => 54,  220 => 51,  210 => 49,  207 => 48,  196 => 46,  192 => 45,  187 => 42,  185 => 41,  176 => 40,  168 => 39,  161 => 38,  157 => 37,  153 => 36,  147 => 35,  144 => 34,  141 => 33,  138 => 32,  135 => 31,  132 => 30,  129 => 29,  126 => 28,  123 => 27,  121 => 26,  115 => 24,  103 => 23,  99 => 22,  94 => 21,  90 => 20,  83 => 16,  75 => 13,  71 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/menu.twig", "");
    }
}
