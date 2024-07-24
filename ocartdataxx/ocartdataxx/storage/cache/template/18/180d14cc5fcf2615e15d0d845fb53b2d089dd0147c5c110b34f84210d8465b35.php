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

/* unishop2/template/information/contact.twig */
class __TwigTemplate_ce33b5acfac1a9af5f118987214576f808f70a3b767d00e011dca92b909f80cd extends \Twig\Template
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
<div id=\"contact-page\" class=\"container\">
\t<div class=\"breadcrumb-h1 ";
        // line 3
        echo ((($context["menu_expanded"] ?? null)) ? ("col-md-offset-3 col-lg-offset-3 col-xxl-offset-4") : (""));
        echo "\">
\t\t<ul class=\"breadcrumb mobile\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 6
            echo "\t\t\t\t";
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 7
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</a></li>
\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t";
                if (( !($context["hide_last_breadcrumb"] ?? null) || (($context["hide_last_breadcrumb"] ?? null) && ($context["key"] == 1)))) {
                    echo "<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                    echo "</li>";
                }
                // line 10
                echo "\t\t\t\t";
            }
            // line 11
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t</ul>
\t\t<!-- <h1 class=\"heading\">";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1> -->
\t</div>
\t<div class=\"row\">
\t\t";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-4 col-lg-6";
            // line 19
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 25
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"contact-gro\">
\t\t\t<div class=\"uni-wrapper\">
\t\t\t\t";
        // line 28
        if (($context["image"] ?? null)) {
            // line 29
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!--<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<img src=\"";
            // line 31
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t<div class=\"contacts\">
\t\t\t\t<h3 class=\"heading\">";
        // line 36
        echo ($context["text_contacts"] ?? null);
        echo "</h3>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 ";
        // line 38
        echo ((($context["contact_map"] ?? null)) ? ("col-sm-6") : ("col-sm-12"));
        echo "\">
\t\t\t\t\t\t\t<div class=\"row-flex\">
\t\t\t\t\t\t\t\t<div class=\"contacts__address\">
\t\t\t\t\t\t\t\t\t<div class=\"contacts__heading\">";
        // line 41
        echo ($context["text_address"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<ul class=\"contact-list__address list-unstyled\">
\t\t\t\t\t\t\t\t\t\t<li class=\"contact-list__item\">";
        // line 43
        echo ($context["address"] ?? null);
        echo "</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"contacts__address\">
\t\t\t\t\t\t\t\t\t";
        // line 47
        if ((($context["open"] ?? null) || ($context["geocode"] ?? null))) {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"contacts__heading\">";
            echo ($context["text_open"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"contact-list__open list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-list__item\">";
            // line 50
            echo ($context["open"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 51
            if (($context["geocode"] ?? null)) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-list__item\"><a href=\"https://maps.google.com/maps?q=";
                echo twig_urlencode_filter(($context["geocode"] ?? null));
                echo "&hl=";
                echo ($context["geocode_hl"] ?? null);
                echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-default\"><i class=\"fa fa-map-marker\"></i> ";
                echo ($context["button_map"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"contacts__contacts\">
\t\t\t\t\t\t\t\t\t<div class=\"contacts__heading\">";
        // line 58
        echo ($context["text_contacts"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<ul class=\"contact-list list-unstyled\">
\t\t\t\t\t\t\t\t\t\t";
        // line 60
        if (($context["shop_telephone"] ?? null)) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-list__item uni-href\" data-href=\"tel:";
            echo ($context["shop_telephone"] ?? null);
            echo "\"><i class=\"contact-list__icon fa fa-phone-alt fa-fw\"></i><span>";
            echo ($context["shop_telephone"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-list__item uni-href\" data-href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 64);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 65) && twig_in_filter("fa-", twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 65)))) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"contact-list__icon fa fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 67
$context["contact"], "icon", [], "any", false, false, false, 67)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "icon", [], "any", false, false, false, 68);
                echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            echo ((twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 70)) ? (twig_get_attribute($this->env, $this->source, $context["contact"], "text", [], "any", false, false, false, 70)) : (twig_get_attribute($this->env, $this->source, $context["contact"], "number", [], "any", false, false, false, 70)));
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (($context["fax"] ?? null)) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-list__item\"><i class=\"fa fa-fax fa-fw\" aria-hidden=\"true\"></i><span>";
            echo ($context["fax"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (($context["shop_email"] ?? null)) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-list__item uni-href\" data-href=\"mailto:";
            echo ($context["shop_email"] ?? null);
            echo "\"><i class=\"contact-list__icon fa fa-envelope fa-fw\" aria-hidden=\"true\"></i><span>";
            echo ($context["shop_email"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 82
        if (($context["comment"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t<div class=\"contacts__comment\">
\t\t\t\t\t\t\t\t\t<h3 class=\"heading\">";
            // line 84
            echo ($context["text_contact_comment"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t\t";
            // line 85
            echo ($context["comment"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 89
        if (($context["contact_map"] ?? null)) {
            // line 90
            echo "\t\t\t\t\t\t\t<div class=\"contacts__map col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t<h3 class=\"heading\">";
            // line 91
            echo ($context["text_location"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t";
            // line 92
            echo ($context["contact_map"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 97
        if (($context["text_in_contacts"] ?? null)) {
            // line 98
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
            // line 100
            echo ($context["text_in_contacts"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br />
\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t
\t\t\t\t";
        // line 106
        if (($context["locations"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t<div class=\"heading\">";
            echo ($context["text_store"] ?? null);
            echo "</div>
\t\t\t\t\t";
            // line 108
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 109
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                // line 110
                echo "\t\t\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 111
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                // line 112
                echo "\t\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                // line 114
                echo "\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t<div class=\"contact-locations row\">
\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 117
                echo "\t\t\t\t\t\t\t<div class=\"contact-locations__layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"contact-locations__item uni-item\">
\t\t\t\t\t\t\t\t\t";
                // line 119
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 119)) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"contact-locations__image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 121);
                    echo "\" loading=\"lazy\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "name", [], "any", false, false, false, 121);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "name", [], "any", false, false, false, 121);
                    echo "\" class=\"img-responsive\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t\t<ul class=\"contact-locations__ul\">
\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 125);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 126);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                // line 127
                echo ($context["text_telephone"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 128);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 129)) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                    echo ($context["text_fax"] ?? null);
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 131);
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 133)) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                    echo ($context["text_open"] ?? null);
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 135);
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 137
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                    echo ($context["text_comment"] ?? null);
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"contact-locations__li\">";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 139);
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 141
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                // line 142
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
                    // line 144
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 144));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-primary\"><i class=\"fa fa-map-marker\"></i><span>";
                    echo ($context["button_map"] ?? null);
                    echo "</span></a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 151
        echo "                <div class=\"wright-us\">
\t\t\t\t<div class=\"heading\">";
        // line 152
        echo ($context["text_contact"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"contact-page__form\" class=\"contact-page__form uni-form form-horizontal\">
\t\t\t\t\t<form action=\"";
        // line 154
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 156
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 158
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" placeholder=\"";
        echo ($context["entry_you_name"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 159
        if (($context["error_name"] ?? null)) {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 165
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 167
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" placeholder=\"";
        echo ($context["entry_you_email"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 168
        if (($context["error_email"] ?? null)) {
            // line 169
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 174
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"4\" id=\"input-enquiry\" placeholder=\"";
        // line 176
        echo ($context["entry_text_enquiry"] ?? null);
        echo "\" class=\"form-control\">";
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t";
        // line 177
        if (($context["error_enquiry"] ?? null)) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 183
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 185
        if (($context["text_agree"] ?? null)) {
            // line 186
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 hidden-xs\"></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10 text-agr\">
\t\t\t\t\t\t\t\t\t<label class=\"input\"><input type=\"checkbox\" name=\"agree\" value=\"1\" /><span>";
            // line 189
            echo ($context["text_agree"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t";
            // line 190
            if (($context["error_agree"] ?? null)) {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo ($context["error_agree"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 196
        echo "\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 hidden-xs\"></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<button class=\"contact-page__btn btn btn-lg btn-primary\" data-loading-text=\"";
        // line 200
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["button_send"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t\t<script>
\t\t\t\t\$('.contact-page__btn').on('click', () => {
\t
\t\t\t\t\tconst form = '.contact-page__form';
\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=information/contact',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: \$(form+' input, '+form+' textarea').serialize(),
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tcache: false,
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\$('.contact-page__btn').button('loading');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$('.contact-page__btn').button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\tconst result = \$(html).find('.text-danger');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif(result.length) {
\t\t\t\t\t\t\t\tif(\$('.basic-captcha').length) {
\t\t\t\t\t\t\t\t\t\$.get('index.php?route=extension/captcha/basic/captcha');
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('.basic-captcha').html(\$(html).find('.basic-captcha').html())
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tresult.each(function() {
\t\t\t\t\t\t\t\t\tform_error(form, \$(this).text());
\t\t\t\t\t\t\t\t\tuniFlyAlert('danger', \$(this).text());
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\twindow.location = 'index.php?route=information/contact/success';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t\t";
        // line 245
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 247
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 256
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 258
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 259
            echo ((($context["i"] == 0)) ? (($context["shop_name"] ?? null)) : (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 259)));
            echo "\",
\t\t\t\"item\": \"";
            // line 260
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 260);
            echo "\"
\t\t\t";
            // line 261
            echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "\t\t]
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"https://schema.org\",
\t\t\"@type\": \"Store\",
\t\t\"name\": \"";
        // line 270
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "name", [], "any", false, false, false, 270);
        echo "\",
\t\t\"url\": \"";
        // line 271
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "url", [], "any", false, false, false, 271);
        echo "\",
\t\t\"image\": \"";
        // line 272
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "image", [], "any", false, false, false, 272);
        echo "\",
\t\t\"description\": \"";
        // line 273
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "description", [], "any", false, false, false, 273);
        echo "\",
\t\t\"email\": \"";
        // line 274
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "email", [], "any", false, false, false, 274);
        echo "\",
\t\t\"telephone\": \"";
        // line 275
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "telephone", [], "any", false, false, false, 275);
        echo "\",
\t\t\"openingHours\": \"";
        // line 276
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "open_hours", [], "any", false, false, false, 276);
        echo "\",
\t\t\"priceRange\": \"";
        // line 277
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "currency", [], "any", false, false, false, 277);
        echo "\",
\t\t\"address\": {
\t\t\t\"@type\": \"PostalAddress\",
\t\t\t\"streetAddress\": \"";
        // line 280
        echo twig_get_attribute($this->env, $this->source, ($context["microdata"] ?? null), "address", [], "any", false, false, false, 280);
        echo "\"
\t\t}
}
</script>
";
        // line 284
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  733 => 284,  726 => 280,  720 => 277,  716 => 276,  712 => 275,  708 => 274,  704 => 273,  700 => 272,  696 => 271,  692 => 270,  683 => 263,  675 => 261,  671 => 260,  667 => 259,  663 => 258,  659 => 256,  655 => 255,  644 => 247,  639 => 245,  589 => 200,  583 => 196,  578 => 193,  572 => 191,  570 => 190,  566 => 189,  561 => 186,  559 => 185,  554 => 183,  549 => 180,  543 => 178,  541 => 177,  535 => 176,  530 => 174,  525 => 171,  519 => 169,  517 => 168,  511 => 167,  506 => 165,  501 => 162,  495 => 160,  493 => 159,  487 => 158,  482 => 156,  477 => 154,  472 => 152,  469 => 151,  465 => 149,  457 => 146,  448 => 144,  445 => 143,  443 => 142,  440 => 141,  435 => 139,  430 => 138,  427 => 137,  422 => 135,  417 => 134,  414 => 133,  409 => 131,  404 => 130,  402 => 129,  398 => 128,  394 => 127,  390 => 126,  386 => 125,  383 => 124,  369 => 121,  366 => 120,  364 => 119,  358 => 117,  354 => 116,  351 => 115,  348 => 114,  345 => 113,  342 => 112,  339 => 111,  336 => 110,  333 => 109,  331 => 108,  326 => 107,  324 => 106,  321 => 105,  313 => 100,  309 => 98,  307 => 97,  303 => 95,  297 => 92,  293 => 91,  290 => 90,  288 => 89,  285 => 88,  279 => 85,  275 => 84,  272 => 83,  270 => 82,  265 => 79,  257 => 77,  254 => 76,  248 => 74,  245 => 73,  235 => 70,  229 => 68,  227 => 67,  224 => 66,  222 => 65,  217 => 64,  212 => 63,  204 => 61,  202 => 60,  197 => 58,  193 => 56,  189 => 54,  179 => 52,  177 => 51,  173 => 50,  167 => 48,  165 => 47,  158 => 43,  153 => 41,  147 => 38,  142 => 36,  139 => 35,  128 => 31,  124 => 29,  122 => 28,  116 => 25,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  91 => 17,  87 => 16,  81 => 13,  78 => 12,  72 => 11,  69 => 10,  62 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/information/contact.twig", "");
    }
}
