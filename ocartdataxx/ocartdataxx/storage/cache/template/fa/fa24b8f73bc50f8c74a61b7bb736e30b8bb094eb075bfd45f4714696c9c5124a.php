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

/* extension/shipping/novaposhta.twig */
class __TwigTemplate_01eecf2a27a07da6fffc7b140817ae486f0cc3da0b1482abaa1dea04893f8bb0 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<h1><i class=\"fa fa-truck\"></i> ";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo " v. ";
        echo ($context["v"] ?? null);
        echo "</h1>
\t\t\t<div class=\"pull-right\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<button type=\"button\" onclick=\"save();\" data-toggle=\"tooltip\" title=\"";
        // line 15
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t<span class=\"sr-only\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t<li><a onclick=\"save('exit');\" style=\"cursor: pointer;\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
        // line 21
        echo ($context["button_save_and_exit"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a onclick=\"settings('basic');\" style=\"cursor: pointer;\"><i class=\"fa fa-cloud-download fa-fw\" aria-hidden=\"true\"></i> ";
        // line 22
        echo ($context["button_download_basic_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a onclick=\"settings('import');\" style=\"cursor: pointer;\"><i class=\"fa fa-download fa-fw\" aria-hidden=\"true\"></i> ";
        // line 23
        echo ($context["button_import_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a onclick=\"settings('export');\" style=\"cursor: pointer;\"><i class=\"fa fa-upload fa-fw\" aria-hidden=\"true\"></i> ";
        // line 24
        echo ($context["button_export_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 27
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-danger\" role=\"button\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t</div>
\t</div>
 \t<div class=\"container-fluid\">
        ";
        // line 32
        if (($context["success"] ?? null)) {
            // line 33
            echo "\t\t\t<div class=\"alert alert-success\">
    \t\t\t<i class=\"fa fa-check-circle\"></i> ";
            // line 34
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    \t\t</div>
        ";
        }
        // line 37
        echo "        ";
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 39
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
        ";
        }
        // line 42
        echo "    \t<div class=\"panel panel-default\">
      \t\t<div class=\"panel-heading\">
        \t\t<h3 class=\"panel-title\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 44
        echo ($context["text_settings"] ?? null);
        echo "</h3>
\t\t\t\t<select name=\"store_id\" id=\"input-store_id\" onchange=\"location.href = 'index.php?route=extension/shipping/novaposhta&user_token=";
        // line 45
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + this.value;\" class=\"form-control\" style=\"display: inline; width: auto;\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 47
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 47);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 47) == ($context["store_id"] ?? null))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 47);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</select>
      \t\t</div>
      \t\t<div class=\"panel-body\">
        \t\t<form action=\"";
        // line 52
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-novaposhta\" class=\"form-horizontal\">
        \t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t";
        // line 54
        if (($context["license"] ?? null)) {
            // line 55
            echo "\t\t\t\t\t\t\t<li";
            echo ((($context["license"] ?? null)) ? (" class=\"active\"") : (""));
            echo "><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cogs\"></i> ";
            echo ($context["tab_general"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-tariffs\" data-toggle=\"tab\"><i class=\"fa fa-calculator\"></i> ";
            // line 56
            echo ($context["tab_tariffs"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-database\" data-toggle=\"tab\"><i class=\"fa fa-database\"></i> ";
            // line 57
            echo ($context["tab_database"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-sender\" data-toggle=\"tab\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            // line 58
            echo ($context["tab_sender"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-recipient\" data-toggle=\"tab\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
            // line 59
            echo ($context["tab_recipient"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-departure\" data-toggle=\"tab\"><i class=\"fa fa-cube\" aria-hidden=\"true\"></i> ";
            // line 60
            echo ($context["tab_departure"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-payment\" data-toggle=\"tab\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> ";
            // line 61
            echo ($context["tab_payment"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-consignment_note\" data-toggle=\"tab\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i> ";
            // line 62
            echo ($context["tab_consignment_note"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-cron\" data-toggle=\"tab\"><i class=\"fa fa-tasks\"></i> ";
            // line 63
            echo ($context["tab_cron"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 65
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
                        ";
        // line 67
        if (($context["license"] ?? null)) {
            // line 68
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane fade";
            echo ((($context["license"] ?? null)) ? ("in active") : (""));
            echo "\" id=\"tab-general\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-global\" data-toggle=\"pill\">";
            // line 71
            echo ($context["text_global"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-department\" data-toggle=\"pill\">";
            // line 72
            echo ($context["text_department"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-doors\" data-toggle=\"pill\">";
            // line 73
            echo ($context["text_doors"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-poshtomat\" data-toggle=\"pill\">";
            // line 74
            echo ($context["text_poshtomat"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-global\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            // line 81
            echo ($context["help_status"] ?? null);
            echo "\">";
            echo ($context["entry_status"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta_status\" id=\"input-status\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 83
            echo ((($context["novaposhta_status"] ?? null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-debugging_mode\"><span data-toggle=\"tooltip\" title=\"";
            // line 87
            echo ($context["help_debugging_mode"] ?? null);
            echo "\">";
            echo ($context["entry_debugging_mode"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[debugging_mode]\" id=\"input-debugging_mode\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 89
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["novaposhta"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["debugging_mode"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort_order\"><span data-toggle=\"tooltip\" title=\"";
            // line 93
            echo ($context["help_sort_order"] ?? null);
            echo "\">";
            echo ($context["entry_sort_order"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta_sort_order\" value=\"";
            // line 95
            echo ($context["novaposhta_sort_order"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" id=\"input-sort_order\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key_api\"><span data-toggle=\"tooltip\" title=\"";
            // line 99
            echo ($context["help_key_api"] ?? null);
            echo "\">";
            echo ($context["entry_key_api"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[key_api]\" value=\"";
            // line 101
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["novaposhta"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["key_api"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_key_api"] ?? null);
            echo "\" id=\"input-key_api\" class=\"form-control\" />
                                                    ";
            // line 102
            if (($context["error_key_api"] ?? null)) {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo ($context["error_key_api"] ?? null);
                echo "</div>
                                                    ";
            }
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image\"><span data-toggle=\"tooltip\" title=\"";
            // line 108
            echo ($context["help_image"] ?? null);
            echo "\">";
            echo ($context["entry_image"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 110
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[image]\" value=\"";
            // line 111
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["novaposhta"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["image"] ?? null) : null);
            echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_output_place\"><span data-toggle=\"tooltip\" title=\"";
            // line 113
            echo ($context["help_image_output_place"] ?? null);
            echo "\">";
            echo ($context["entry_image_output_place"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[image_output_place]\" id=\"input-image_output_place\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 116
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["image_output_places"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["code"];
                echo "\"";
                echo ((($context["code"] == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["novaposhta"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["image_output_place"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-curl_connecttimeout\"><span data-toggle=\"tooltip\" title=\"";
            // line 124
            echo ($context["help_curl_connecttimeout"] ?? null);
            echo "\">";
            echo ($context["entry_curl_connecttimeout"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[curl_connecttimeout]\" value=\"";
            // line 126
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["novaposhta"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["curl_connecttimeout"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_curl_connecttimeout"] ?? null);
            echo "\" id=\"input-curl_connecttimeout\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-curl_timeout\"><span data-toggle=\"tooltip\" title=\"";
            // line 128
            echo ($context["help_curl_timeout"] ?? null);
            echo "\">";
            echo ($context["entry_curl_timeout"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[curl_timeout]\" value=\"";
            // line 130
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["novaposhta"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["curl_timeout"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_curl_timeout"] ?? null);
            echo "\" id=\"input-curl_timeout\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-department\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_status\"><span data-toggle=\"tooltip\" title=\"";
            // line 136
            echo ($context["help_method_status"] ?? null);
            echo "\">";
            echo ($context["entry_method_status"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][department][status]\" id=\"input-department_status\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 138
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["novaposhta"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["shipping_methods"] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["department"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["status"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_name\"><span data-toggle=\"tooltip\" title=\"";
            // line 142
            echo ($context["help_name"] ?? null);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#department_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
                echo "\" aria-controls=\"department_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["language_flag"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 146);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 146);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t </ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151))) ? (" active") : (""));
                echo "\" id=\"department_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][department][name][";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
                echo "]\" value=\"";
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["novaposhta"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["shipping_methods"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["department"] ?? null) : null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" id=\"input-department_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_geo_zone_id\"><span data-toggle=\"tooltip\" title=\"";
            // line 159
            echo ($context["help_geo_zone"] ?? null);
            echo "\">";
            echo ($context["entry_geo_zone"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][department][geo_zone_id]\" id=\"input-department_geo_zone_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 162
            echo ($context["text_all_zones"] ?? null);
            echo "</option>
                                                        ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 164);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 164) == (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["novaposhta"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["shipping_methods"] ?? null) : null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["department"] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["geo_zone_id"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 164);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_tax_class_id\"><span data-toggle=\"tooltip\" title=\"";
            // line 170
            echo ($context["help_tax_class"] ?? null);
            echo "\">";
            echo ($context["entry_tax_class"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][department][tax_class_id]\" id=\"input-department_tax_class_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 173
            echo ($context["text_none"] ?? null);
            echo "</option>
                                                        ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 175);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 175) == (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["novaposhta"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["shipping_methods"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["department"] ?? null) : null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["tax_class_id"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 175);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_minimum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
            // line 181
            echo ($context["help_minimum_order_amount"] ?? null);
            echo "\">";
            echo ($context["entry_minimum_order_amount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][department][minimum_order_amount]\" value=\"";
            // line 184
            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["novaposhta"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["shipping_methods"] ?? null) : null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["department"] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["minimum_order_amount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_minimum_order_amount"] ?? null);
            echo "\" id=\"input-department_minimum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 185
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_maximum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
            // line 188
            echo ($context["help_maximum_order_amount"] ?? null);
            echo "\">";
            echo ($context["entry_maximum_order_amount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][department][maximum_order_amount]\" value=\"";
            // line 191
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["novaposhta"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["shipping_methods"] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["department"] ?? null) : null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["maximum_order_amount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_maximum_order_amount"] ?? null);
            echo "\" id=\"input-department_maximum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 192
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_free_shipping\"><span data-toggle=\"tooltip\" title=\"";
            // line 197
            echo ($context["help_free_shipping"] ?? null);
            echo "\">";
            echo ($context["entry_free_shipping"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][department][free_shipping]\" value=\"";
            // line 200
            echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["novaposhta"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["shipping_methods"] ?? null) : null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["department"] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["free_shipping"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_free_shipping"] ?? null);
            echo "\" id=\"input-department_free_shipping\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 201
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_free_cost_text\"><span data-toggle=\"tooltip\" title=\"";
            // line 204
            echo ($context["help_free_cost_text"] ?? null);
            echo "\">";
            echo ($context["entry_free_cost_text"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                                        ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 208))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#department_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 208);
                echo "\" aria-controls=\"department_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 208);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["language_flag"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 208)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 208);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 208);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 213
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 213))) ? (" active") : (""));
                echo "\" id=\"department_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 213);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][department][free_cost_text][";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 214);
                echo "]\" value=\"";
                echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["novaposhta"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["shipping_methods"] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["department"] ?? null) : null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["free_cost_text"] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 214)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_free_cost_text"] ?? null);
                echo "\" id=\"input-department_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 214);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_cost\"><span data-toggle=\"tooltip\" title=\"";
            // line 221
            echo ($context["help_cost"] ?? null);
            echo "\">";
            echo ($context["entry_cost"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][department][cost]\" id=\"input-department_cost\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 223
            echo (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["novaposhta"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["shipping_methods"] ?? null) : null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["department"] ?? null) : null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["cost"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_api_calculation\"><span data-toggle=\"tooltip\" title=\"";
            // line 225
            echo ($context["help_api_calculation"] ?? null);
            echo "\">";
            echo ($context["entry_api_calculation"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][department][api_calculation]\" id=\"input-department_api_calculation\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 227
            echo (((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["novaposhta"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["shipping_methods"] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["department"] ?? null) : null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["api_calculation"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_tariff_calculation\"><span data-toggle=\"tooltip\" title=\"";
            // line 229
            echo ($context["help_tariff_calculation"] ?? null);
            echo "\">";
            echo ($context["entry_tariff_calculation"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][department][tariff_calculation]\" id=\"input-department_tariff_calculation\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 231
            echo (((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["novaposhta"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["shipping_methods"] ?? null) : null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["department"] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["tariff_calculation"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_delivery_period\"><span data-toggle=\"tooltip\" title=\"";
            // line 235
            echo ($context["help_delivery_period"] ?? null);
            echo "\">";
            echo ($context["entry_delivery_period"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][department][delivery_period]\" id=\"input-department_delivery_period\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 237
            echo (((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["novaposhta"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["shipping_methods"] ?? null) : null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["department"] ?? null) : null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["delivery_period"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-departments_filter_weight\"><span data-toggle=\"tooltip\" title=\"";
            // line 241
            echo ($context["help_departments_filter_weight"] ?? null);
            echo "\">";
            echo ($context["entry_departments_filter_weight"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][department][departments_filter_weight]\" id=\"input-departments_filter_weight\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 243
            echo (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["novaposhta"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["shipping_methods"] ?? null) : null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["department"] ?? null) : null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["departments_filter_weight"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_types\"><span data-toggle=\"tooltip\" title=\"";
            // line 247
            echo ($context["help_department_types"] ?? null);
            echo "\">";
            echo ($context["entry_department_types"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][department][department_types][]\" id=\"input-department_types\"  class=\"form-control selectpicker\" title=\"";
            // line 249
            echo ($context["text_all"] ?? null);
            echo "\" data-actions-box=\"true\" multiple>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["department_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department_type"]) {
                // line 251
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["department_type"], "Ref", [], "any", false, false, false, 251);
                echo "\"";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department_type"], "Ref", [], "any", false, false, false, 251), (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["novaposhta"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["shipping_methods"] ?? null) : null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["department"] ?? null) : null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["department_types"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["department_type"], "Description", [], "any", false, false, false, 251);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-department_statuses\"><span data-toggle=\"tooltip\" title=\"";
            // line 257
            echo ($context["help_department_statuses"] ?? null);
            echo "\">";
            echo ($context["entry_department_statuses"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][department][department_statuses][]\" id=\"input-department_statuses\" class=\"form-control selectpicker\" title=\"";
            // line 259
            echo ($context["text_all"] ?? null);
            echo "\" multiple data-actions-box=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["department_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department_status"]) {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["department_status"], "id", [], "any", false, false, false, 261);
                echo "\"";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["department_status"], "id", [], "any", false, false, false, 261), (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["novaposhta"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["shipping_methods"] ?? null) : null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["department"] ?? null) : null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["department_statuses"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["department_status"], "Description", [], "any", false, false, false, 261);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-doors\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_status\"><span data-toggle=\"tooltip\" title=\"";
            // line 269
            echo ($context["help_method_status"] ?? null);
            echo "\">";
            echo ($context["entry_method_status"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
                                                    <input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][doors][status]\" id=\"input-doors_status\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 271
            echo (((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["novaposhta"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["shipping_methods"] ?? null) : null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["doors"] ?? null) : null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["status"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_name\"><span data-toggle=\"tooltip\" title=\"";
            // line 275
            echo ($context["help_name"] ?? null);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                                        ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 279
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#doors_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279);
                echo "\" aria-controls=\"doors_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["language_flag"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 279)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 279);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 279);
                echo "</a></li>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t </ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                                        ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 284))) ? (" active") : (""));
                echo "\" id=\"doors_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 284);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][doors][name][";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 285);
                echo "]\" value=\"";
                echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["novaposhta"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["shipping_methods"] ?? null) : null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["doors"] ?? null) : null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["name"] ?? null) : null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 285)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" id=\"input-doors_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 285);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_geo_zone_id\"><span data-toggle=\"tooltip\" title=\"";
            // line 292
            echo ($context["help_geo_zone"] ?? null);
            echo "\">";
            echo ($context["entry_geo_zone"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][doors][geo_zone_id]\" id=\"input-doors_geo_zone_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 295
            echo ($context["text_all_zones"] ?? null);
            echo "</option>
                                                        ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
                // line 297
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 297);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 297) == (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["novaposhta"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["shipping_methods"] ?? null) : null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["doors"] ?? null) : null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["geo_zone_id"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 297);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_tax_class_id\"><span data-toggle=\"tooltip\" title=\"";
            // line 303
            echo ($context["help_tax_class"] ?? null);
            echo "\">";
            echo ($context["entry_tax_class"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][doors][tax_class_id]\" id=\"input-doors_tax_class_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 306
            echo ($context["text_none"] ?? null);
            echo "</option>
                                                        ";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                // line 308
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 308);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 308) == (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["novaposhta"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["shipping_methods"] ?? null) : null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["doors"] ?? null) : null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["tax_class_id"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 308);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_minimum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
            // line 314
            echo ($context["help_minimum_order_amount"] ?? null);
            echo "\">";
            echo ($context["entry_minimum_order_amount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][doors][minimum_order_amount]\" value=\"";
            // line 317
            echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["novaposhta"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["shipping_methods"] ?? null) : null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["doors"] ?? null) : null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["minimum_order_amount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_minimum_order_amount"] ?? null);
            echo "\" id=\"input-doors_minimum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 318
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_maximum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
            // line 321
            echo ($context["help_maximum_order_amount"] ?? null);
            echo "\">";
            echo ($context["entry_maximum_order_amount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][doors][maximum_order_amount]\" value=\"";
            // line 324
            echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["novaposhta"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["shipping_methods"] ?? null) : null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["doors"] ?? null) : null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["maximum_order_amount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_maximum_order_amount"] ?? null);
            echo "\" id=\"input-doors_maximum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 325
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_free_shipping\"><span data-toggle=\"tooltip\" title=\"";
            // line 330
            echo ($context["help_free_shipping"] ?? null);
            echo "\">";
            echo ($context["entry_free_shipping"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][doors][free_shipping]\" value=\"";
            // line 333
            echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["novaposhta"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["shipping_methods"] ?? null) : null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["doors"] ?? null) : null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["free_shipping"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_free_shipping"] ?? null);
            echo "\" id=\"input-doors_free_shipping\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 334
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_free_cost_text\"><span data-toggle=\"tooltip\" title=\"";
            // line 337
            echo ($context["help_free_cost_text"] ?? null);
            echo "\">";
            echo ($context["entry_free_cost_text"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                                        ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 341
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 341))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#doors_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 341);
                echo "\" aria-controls=\"doors_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 341);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["language_flag"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 341)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 341);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 341);
                echo "</a></li>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                                        ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 346
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 346))) ? (" active") : (""));
                echo "\" id=\"doors_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 346);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][doors][free_cost_text][";
                // line 347
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 347);
                echo "]\" value=\"";
                echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["novaposhta"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["shipping_methods"] ?? null) : null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["doors"] ?? null) : null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["free_cost_text"] ?? null) : null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 347)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_free_cost_text"] ?? null);
                echo "\" id=\"input-doors_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 347);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_cost\"><span data-toggle=\"tooltip\" title=\"";
            // line 354
            echo ($context["help_cost"] ?? null);
            echo "\">";
            echo ($context["entry_cost"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][doors][cost]\" id=\"input-doors_cost\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 356
            echo (((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["novaposhta"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["shipping_methods"] ?? null) : null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["doors"] ?? null) : null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["cost"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_api_calculation\"><span data-toggle=\"tooltip\" title=\"";
            // line 358
            echo ($context["help_api_calculation"] ?? null);
            echo "\">";
            echo ($context["entry_api_calculation"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][doors][api_calculation]\" id=\"input-doors_api_calculation\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 360
            echo (((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["novaposhta"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["shipping_methods"] ?? null) : null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["doors"] ?? null) : null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["api_calculation"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_tariff_calculation\"><span data-toggle=\"tooltip\" title=\"";
            // line 362
            echo ($context["help_tariff_calculation"] ?? null);
            echo "\">";
            echo ($context["entry_tariff_calculation"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][doors][tariff_calculation]\" id=\"input-doors_tariff_calculation\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 364
            echo (((($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["novaposhta"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["shipping_methods"] ?? null) : null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["doors"] ?? null) : null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["tariff_calculation"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-doors_delivery_period\"><span data-toggle=\"tooltip\" title=\"";
            // line 368
            echo ($context["help_delivery_period"] ?? null);
            echo "\">";
            echo ($context["entry_delivery_period"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][doors][delivery_period]\" id=\"input-doors_delivery_period\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 370
            echo (((($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["novaposhta"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["shipping_methods"] ?? null) : null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["doors"] ?? null) : null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["delivery_period"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-poshtomat\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_status\"><span data-toggle=\"tooltip\" title=\"";
            // line 376
            echo ($context["help_method_status"] ?? null);
            echo "\">";
            echo ($context["entry_method_status"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][poshtomat][status]\" id=\"input-poshtomat_status\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 378
            echo (((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["novaposhta"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["shipping_methods"] ?? null) : null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["poshtomat"] ?? null) : null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["status"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_name\"><span data-toggle=\"tooltip\" title=\"";
            // line 382
            echo ($context["help_name"] ?? null);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 386
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 386))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#poshtomat_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 386);
                echo "\" aria-controls=\"poshtomat_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 386);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["language_flag"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 386)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 386);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 386);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 388
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 391
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 391))) ? (" active") : (""));
                echo "\" id=\"poshtomat_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 391);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][poshtomat][name][";
                // line 392
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392);
                echo "]\" value=\"";
                echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["novaposhta"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["shipping_methods"] ?? null) : null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["poshtomat"] ?? null) : null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["name"] ?? null) : null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\" id=\"input-poshtomat_name_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 395
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_geo_zone_id\"><span data-toggle=\"tooltip\" title=\"";
            // line 399
            echo ($context["help_geo_zone"] ?? null);
            echo "\">";
            echo ($context["entry_geo_zone"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][poshtomat][geo_zone_id]\" id=\"input-poshtomat_geo_zone_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 402
            echo ($context["text_all_zones"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
                // line 404
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 404);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 404) == (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["novaposhta"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["shipping_methods"] ?? null) : null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["poshtomat"] ?? null) : null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["geo_zone_id"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 404);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_tax_class_id\"><span data-toggle=\"tooltip\" title=\"";
            // line 410
            echo ($context["help_tax_class"] ?? null);
            echo "\">";
            echo ($context["entry_tax_class"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[shipping_methods][poshtomat][tax_class_id]\" id=\"input-poshtomat_tax_class_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 413
            echo ($context["text_none"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                // line 415
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 415);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 415) == (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = ($context["novaposhta"] ?? null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["shipping_methods"] ?? null) : null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["poshtomat"] ?? null) : null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["tax_class_id"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 415);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_minimum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
            // line 421
            echo ($context["help_minimum_order_amount"] ?? null);
            echo "\">";
            echo ($context["entry_minimum_order_amount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][poshtomat][minimum_order_amount]\" value=\"";
            // line 424
            echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = ($context["novaposhta"] ?? null)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["shipping_methods"] ?? null) : null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["poshtomat"] ?? null) : null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["minimum_order_amount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_minimum_order_amount"] ?? null);
            echo "\" id=\"input-poshtomat_minimum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 425
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_maximum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
            // line 428
            echo ($context["help_maximum_order_amount"] ?? null);
            echo "\">";
            echo ($context["entry_maximum_order_amount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][poshtomat][maximum_order_amount]\" value=\"";
            // line 431
            echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = ($context["novaposhta"] ?? null)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["shipping_methods"] ?? null) : null)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["poshtomat"] ?? null) : null)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["maximum_order_amount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_maximum_order_amount"] ?? null);
            echo "\" id=\"input-poshtomat_maximum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 432
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_free_shipping\"><span data-toggle=\"tooltip\" title=\"";
            // line 437
            echo ($context["help_free_shipping"] ?? null);
            echo "\">";
            echo ($context["entry_free_shipping"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][poshtomat][free_shipping]\" value=\"";
            // line 440
            echo (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = ($context["novaposhta"] ?? null)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["shipping_methods"] ?? null) : null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["poshtomat"] ?? null) : null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["free_shipping"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_free_shipping"] ?? null);
            echo "\" id=\"input-poshtomat_free_shipping\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 441
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_free_cost_text\"><span data-toggle=\"tooltip\" title=\"";
            // line 444
            echo ($context["help_free_cost_text"] ?? null);
            echo "\">";
            echo ($context["entry_free_cost_text"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 448
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 448))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#poshtomat_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 448);
                echo "\" aria-controls=\"poshtomat_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 448);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = ($context["language_flag"] ?? null)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 448)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 448);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 448);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 452
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 453
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 453))) ? (" active") : (""));
                echo "\" id=\"poshtomat_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 453);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[shipping_methods][poshtomat][free_cost_text][";
                // line 454
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 454);
                echo "]\" value=\"";
                echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = ($context["novaposhta"] ?? null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["shipping_methods"] ?? null) : null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["poshtomat"] ?? null) : null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["free_cost_text"] ?? null) : null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 454)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_free_cost_text"] ?? null);
                echo "\" id=\"input-poshtomat_free_cost_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 454);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 457
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_cost\"><span data-toggle=\"tooltip\" title=\"";
            // line 461
            echo ($context["help_cost"] ?? null);
            echo "\">";
            echo ($context["entry_cost"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][poshtomat][cost]\" id=\"input-poshtomat_cost\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 463
            echo (((($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = ($context["novaposhta"] ?? null)) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["shipping_methods"] ?? null) : null)) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["poshtomat"] ?? null) : null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["cost"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_api_calculation\"><span data-toggle=\"tooltip\" title=\"";
            // line 465
            echo ($context["help_api_calculation"] ?? null);
            echo "\">";
            echo ($context["entry_api_calculation"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][poshtomat][api_calculation]\" id=\"input-poshtomat_api_calculation\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 467
            echo (((($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = ($context["novaposhta"] ?? null)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["shipping_methods"] ?? null) : null)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["poshtomat"] ?? null) : null)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["api_calculation"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_tariff_calculation\"><span data-toggle=\"tooltip\" title=\"";
            // line 469
            echo ($context["help_tariff_calculation"] ?? null);
            echo "\">";
            echo ($context["entry_tariff_calculation"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][poshtomat][tariff_calculation]\" id=\"input-poshtomat_tariff_calculation\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 471
            echo (((($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = (($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = ($context["novaposhta"] ?? null)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c["shipping_methods"] ?? null) : null)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["poshtomat"] ?? null) : null)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526["tariff_calculation"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-poshtomat_delivery_period\"><span data-toggle=\"tooltip\" title=\"";
            // line 475
            echo ($context["help_delivery_period"] ?? null);
            echo "\">";
            echo ($context["entry_delivery_period"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[shipping_methods][poshtomat][delivery_period]\" id=\"input-poshtomat_delivery_period\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 477
            echo (((($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = (($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = ($context["novaposhta"] ?? null)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["shipping_methods"] ?? null) : null)) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["poshtomat"] ?? null) : null)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["delivery_period"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-tariffs\">
\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t<h2>";
            // line 486
            echo ($context["text_parcel_tariffs"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\" id=\"table-tariffs-parcel\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" rowspan=\"3\">";
            // line 492
            echo ($context["column_weight"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"4\">";
            // line 493
            echo ($context["column_department_service_cost"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"2\">";
            // line 494
            echo ($context["column_doors_service_cost"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" rowspan=\"3\">";
            // line 495
            echo ($context["column_action"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 498
            echo ($context["column_tariff_transfer_in_department"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 499
            echo ($context["column_tariff_zone_city"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 500
            echo ($context["column_tariff_zone_region"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 501
            echo ($context["column_tariff_zone_ukraine"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" rowspan=\"2\">";
            // line 502
            echo ($context["column_doors_pickup"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" rowspan=\"2\">";
            // line 503
            echo ($context["column_doors_delivery"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 506
            echo ($context["column_delivery_period"] ?? null);
            echo " <input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][department_delivery_period]\" value=\"";
            echo (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = (($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = (($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = ($context["novaposhta"] ?? null)) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["tariffs"] ?? null) : null)) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["parcel"] ?? null) : null)) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5["department_delivery_period"] ?? null) : null);
            echo "\" class=\"form-control\" style=\"display: inline; width: auto;\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 507
            echo ($context["column_delivery_period"] ?? null);
            echo " <input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][city_delivery_period]\" value=\"";
            echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = (($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = ($context["novaposhta"] ?? null)) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["tariffs"] ?? null) : null)) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["parcel"] ?? null) : null)) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["city_delivery_period"] ?? null) : null);
            echo "\" class=\"form-control\" style=\"display: inline; width: auto;\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 508
            echo ($context["column_delivery_period"] ?? null);
            echo " <input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][region_delivery_period]\" value=\"";
            echo (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = (($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = ($context["novaposhta"] ?? null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["tariffs"] ?? null) : null)) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["parcel"] ?? null) : null)) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["region_delivery_period"] ?? null) : null);
            echo "\" class=\"form-control\" style=\"display: inline; width: auto;\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 509
            echo ($context["column_delivery_period"] ?? null);
            echo " <input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][ukraine_delivery_period]\" value=\"";
            echo (($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = (($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = ($context["novaposhta"] ?? null)) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["tariffs"] ?? null) : null)) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["parcel"] ?? null) : null)) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["ukraine_delivery_period"] ?? null) : null);
            echo "\" class=\"form-control\" style=\"display: inline; width: auto;\" /></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
                                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = ($context["novaposhta"] ?? null)) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["tariffs"] ?? null) : null)) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["parcel"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["tariff"]) {
                if (twig_test_iterable($context["tariff"])) {
                    // line 514
                    echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][";
                    // line 515
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 515);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "weight", [], "any", false, false, false, 515);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][";
                    // line 516
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 516);
                    echo "][department]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "department", [], "any", false, false, false, 516);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][";
                    // line 517
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 517);
                    echo "][city]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "city", [], "any", false, false, false, 517);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][";
                    // line 518
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 518);
                    echo "][region]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "region", [], "any", false, false, false, 518);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][";
                    // line 519
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 519);
                    echo "][Ukraine]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "Ukraine", [], "any", false, false, false, 519);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][";
                    // line 520
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 520);
                    echo "][overpay_doors_pickup]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "overpay_doors_pickup", [], "any", false, false, false, 520);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][";
                    // line 521
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 521);
                    echo "][overpay_doors_delivery]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "overpay_doors_delivery", [], "any", false, false, false, 521);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"\$(this).parents('tr').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t</tr>
                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tariff'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 525
            echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"addTariff('parcel');\" data-toggle=\"modal\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tariffs-parcel_discount\"><span data-toggle=\"tooltip\" title=\"";
            // line 536
            echo ($context["help_discount"] ?? null);
            echo "\">";
            echo ($context["entry_discount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][discount]\" value=\"";
            // line 539
            echo (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = (($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = ($context["novaposhta"] ?? null)) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["tariffs"] ?? null) : null)) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["parcel"] ?? null) : null)) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["discount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_discount"] ?? null);
            echo "\" id=\"input-tariffs-parcel_discount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 540
            echo ($context["text_pct"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tariffs-parcel_declared_cost_commission\"><span data-toggle=\"tooltip\" title=\"";
            // line 545
            echo ($context["help_declared_cost_commission"] ?? null);
            echo "\">";
            echo ($context["entry_declared_cost_commission"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][declared_cost_commission]\" value=\"";
            // line 548
            echo (($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = (($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = ($context["novaposhta"] ?? null)) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["tariffs"] ?? null) : null)) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a["parcel"] ?? null) : null)) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["declared_cost_commission"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_declared_cost_commission"] ?? null);
            echo "\" id=\"input-tariffs-parcel_declared_cost_commission\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 549
            echo ($context["text_pct"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tariffs-parcel_declared_cost_minimum_commission\"><span data-toggle=\"tooltip\" title=\"";
            // line 552
            echo ($context["help_declared_cost_minimum_commission"] ?? null);
            echo "\">";
            echo ($context["entry_declared_cost_minimum_commission"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][declared_cost_minimum_commission]\" value=\"";
            // line 555
            echo (($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = ($context["novaposhta"] ?? null)) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["tariffs"] ?? null) : null)) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["parcel"] ?? null) : null)) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["declared_cost_minimum_commission"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_declared_cost_minimum_commission"] ?? null);
            echo "\" id=\"input-tariffs-parcel_declared_cost_minimum_commission\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 556
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tariffs-parcel_declared_cost_commission_bottom\"><span data-toggle=\"tooltip\" title=\"";
            // line 559
            echo ($context["help_declared_cost_commission_bottom"] ?? null);
            echo "\">";
            echo ($context["entry_declared_cost_commission_bottom"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[tariffs][parcel][declared_cost_commission_bottom]\" value=\"";
            // line 562
            echo (($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = (($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = ($context["novaposhta"] ?? null)) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["tariffs"] ?? null) : null)) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["parcel"] ?? null) : null)) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["declared_cost_commission_bottom"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_declared_cost_commission_bottom"] ?? null);
            echo "\" id=\"input-tariffs-parcel_declared_cost_commission_bottom\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 563
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<br><br><br>
\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t<h2>";
            // line 570
            echo ($context["text_cod_tariffs"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\" style=\"overflow-y:visible; overflow-x:visible;\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\" id=\"table-tariffs-cod\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 576
            echo ($context["column_delivery_type"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 577
            echo ($context["column_calculation_base"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 578
            echo ($context["column_tariff_limit"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 579
            echo ($context["column_percent"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 580
            echo ($context["column_fixed_amount"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 581
            echo ($context["column_minimum_payment"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 582
            echo ($context["column_action"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 586
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = (($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = ($context["novaposhta"] ?? null)) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["tariffs"] ?? null) : null)) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81["cod"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["tariff"]) {
                if (twig_test_iterable($context["tariff"])) {
                    // line 587
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[tariffs][cod][";
                    // line 589
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 589);
                    echo "][delivery_type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 590
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["delivery_types"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                        // line 591
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 591);
                        echo "\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 591) == twig_get_attribute($this->env, $this->source, $context["tariff"], "delivery_type", [], "any", false, false, false, 591))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 591);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 593
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[tariffs][cod][";
                    // line 596
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 596);
                    echo "][calculation_base][]\" class=\"form-control selectpicker\" title=\"";
                    echo ($context["text_select"] ?? null);
                    echo "\" multiple data-actions-box=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 597
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 598
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $context["k"];
                        echo "\"";
                        echo ((twig_in_filter($context["k"], twig_get_attribute($this->env, $this->source, $context["tariff"], "calculation_base", [], "any", false, false, false, 598))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo $context["v"];
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 600
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][cod][";
                    // line 602
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 602);
                    echo "][tariff_limit]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "tariff_limit", [], "any", false, false, false, 602);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][cod][";
                    // line 603
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 603);
                    echo "][percent]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "percent", [], "any", false, false, false, 603);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][cod][";
                    // line 604
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 604);
                    echo "][fixed_amount]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "fixed_amount", [], "any", false, false, false, 604);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][cod][";
                    // line 605
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 605);
                    echo "][minimum_payment]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tariff"], "minimum_payment", [], "any", false, false, false, 605);
                    echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"\$(this).parents('tr').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tariff'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 609
            echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\"></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"addTariff('cod');\" data-toggle=\"modal\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-database\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 625
            echo ($context["column_type"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 626
            echo ($context["column_date"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 627
            echo ($context["column_amount"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 628
            echo ($context["column_description"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 629
            echo ($context["column_action"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 634
            echo ($context["entry_references"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 635
            echo (($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = (($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = ($context["database"] ?? null)) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["references"] ?? null) : null)) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786["update_datetime"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" id=\"td-references_amount\">";
            // line 636
            echo (($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = (($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc = ($context["database"] ?? null)) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["references"] ?? null) : null)) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1["amount"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 637
            echo ($context["help_update_references"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"update('references');\" id=\"button-update_references\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-success\" data-original-title=\"";
            // line 639
            echo ($context["button_update"] ?? null);
            echo "\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 643
            echo ($context["entry_region"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 644
            echo (($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 = (($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 = ($context["database"] ?? null)) && is_array($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181) || $__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 instanceof ArrayAccess ? ($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181["regions"] ?? null) : null)) && is_array($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6) || $__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 instanceof ArrayAccess ? ($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6["update_datetime"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" id=\"td-areas_amount\">";
            // line 645
            echo (($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 = (($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af = ($context["database"] ?? null)) && is_array($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af) || $__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af instanceof ArrayAccess ? ($__internal_48ca1eafe1c0dafac733bebe2a1efca21a74359cd77ffeb182a204b16ff0f3af["regions"] ?? null) : null)) && is_array($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9) || $__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 instanceof ArrayAccess ? ($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9["amount"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 646
            echo ($context["help_update_regions"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"update('regions');\" id=\"button-update_regions\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-success\" data-original-title=\"";
            // line 648
            echo ($context["button_update"] ?? null);
            echo "\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 652
            echo ($context["entry_city"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 653
            echo (($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab = (($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 = ($context["database"] ?? null)) && is_array($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94) || $__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94 instanceof ArrayAccess ? ($__internal_3271ebe347264d8653ac8af5aa4e0337dd15e365e271de0737121c8fe688ab94["cities"] ?? null) : null)) && is_array($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab) || $__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab instanceof ArrayAccess ? ($__internal_9bcd89fd04c29d4f14b269195c2b0c44b1319099d5fd519cf088920bf6dad4ab["update_datetime"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" id=\"td-cities_amount\">";
            // line 654
            echo (($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c = (($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd = ($context["database"] ?? null)) && is_array($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd) || $__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd instanceof ArrayAccess ? ($__internal_e9e5d2ee8212027481d34dfd74c8b902eddcf0dfdf2b80d975ad6713d36eb2cd["cities"] ?? null) : null)) && is_array($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c) || $__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c instanceof ArrayAccess ? ($__internal_131d1ad83be0db5885bd8f4d04b7758f816558c99eb0966bc3747496b619d05c["amount"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 655
            echo ($context["help_update_cities"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"update('cities');\" id=\"button-update_cities\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-success\" data-original-title=\"";
            // line 657
            echo ($context["button_update"] ?? null);
            echo "\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 661
            echo ($context["entry_department"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 662
            echo (($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 = (($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b = ($context["database"] ?? null)) && is_array($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b) || $__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b instanceof ArrayAccess ? ($__internal_a6fb56e832ab03437ac2beb121972e8e79ced038d8ae45afc18634fa0d2a7c6b["departments"] ?? null) : null)) && is_array($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0) || $__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0 instanceof ArrayAccess ? ($__internal_6addec62ce993bb3687298b96e3697631e0e1f3c95c8f74f5d5273b46adb96a0["update_datetime"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" id=\"td-departments_amount\">";
            // line 663
            echo (($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 = (($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf = ($context["database"] ?? null)) && is_array($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf) || $__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf instanceof ArrayAccess ? ($__internal_27724619532b81f70e47f787f2d6ba2642ad645b9809ec31c41a0fc9a021bccf["departments"] ?? null) : null)) && is_array($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070) || $__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070 instanceof ArrayAccess ? ($__internal_2b03fe367704beb3823f261fb2f100c491f011ea8771fa697b7c2d827599a070["amount"] ?? null) : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 664
            echo ($context["help_update_departments"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"update('departments');\" id=\"button-update_departments\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-success\" data-original-title=\"";
            // line 666
            echo ($context["button_update"] ?? null);
            echo "\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 670
            echo ($context["entry_settlement"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><span class=\"label label-success\">online</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" id=\"td-settlements_amount\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 673
            echo ($context["help_update_settlements"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[settlements]\" id=\"button-update_settlements\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 675
            echo (((($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e = ($context["novaposhta"] ?? null)) && is_array($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e) || $__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e instanceof ArrayAccess ? ($__internal_07189bdf422a336bd30a149f561299354deaa7140cee435438135bbbf04aeb1e["settlements"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 679
            echo ($context["entry_street"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><span class=\"label label-success\">online</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" id=\"td-streets_amount\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 682
            echo ($context["help_update_streets"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[streets]\" id=\"button-update_streets\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 684
            echo (((($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 = ($context["novaposhta"] ?? null)) && is_array($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4) || $__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4 instanceof ArrayAccess ? ($__internal_3aa537a936bb92157cefd8aa9fc620062d138d41031375eea95479ba2781b1b4["streets"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-sender\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sender\"><span data-toggle=\"tooltip\" title=\"";
            // line 693
            echo ($context["help_sender"] ?? null);
            echo "\">";
            echo ($context["entry_sender"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[sender]\" id=\"input-sender\" class=\"form-control selectpicker show-tick\" data-live-search=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 696
            echo ($context["text_select"] ?? null);
            echo "</option>
                                            ";
            // line 697
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["senders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 698
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 698);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 698) == (($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 = ($context["novaposhta"] ?? null)) && is_array($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825) || $__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825 instanceof ArrayAccess ? ($__internal_60c3b69b495786976923eb2f532157de97aa5c29dc9513da8198a9ceace81825["sender"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 698);
                echo ((twig_get_attribute($this->env, $this->source, $context["v"], "CityDescription", [], "any", false, false, false, 698)) ? ((", " . twig_get_attribute($this->env, $this->source, $context["v"], "CityDescription", [], "any", false, false, false, 698))) : (""));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 700
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sender_contact_person\"><span data-toggle=\"tooltip\" title=\"";
            // line 704
            echo ($context["help_sender_contact_person"] ?? null);
            echo "\">";
            echo ($context["entry_contact_person"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[sender_contact_person]\" id=\"input-sender_contact_person\" class=\"form-control selectpicker show-tick\" data-live-search=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 707
            echo ($context["text_select"] ?? null);
            echo "</option>
                                            ";
            // line 708
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sender_contact_persons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 709
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 709);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 709) == (($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 = ($context["novaposhta"] ?? null)) && is_array($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308) || $__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308 instanceof ArrayAccess ? ($__internal_0d30daf524bd3b24650f37db0a943c64fc1caa5ef72ffa19edd4e0046f222308["sender_contact_person"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo ((twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 709) . ", ") . twig_get_attribute($this->env, $this->source, $context["v"], "Phones", [], "any", false, false, false, 709));
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 711
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sender_region\"><span data-toggle=\"tooltip\" title=\"";
            // line 715
            echo ($context["help_sender_region"] ?? null);
            echo "\">";
            echo ($context["entry_region"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[sender_region]\" id=\"input-sender_region\" class=\"form-control selectpicker show-tick\" data-live-search=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 718
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 719
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 720
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 720);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 720) == (($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb = ($context["novaposhta"] ?? null)) && is_array($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb) || $__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb instanceof ArrayAccess ? ($__internal_6ffb32c3e396e273bf59227a1929f61725bd66b1599c95be2fe97e57076204eb["sender_region"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 720);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 722
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sender_city\"><span data-toggle=\"tooltip\" title=\"";
            // line 726
            echo ($context["help_sender_city"] ?? null);
            echo "\">";
            echo ($context["entry_city"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[sender_city]\" id=\"input-sender_city\" class=\"form-control selectpicker show-tick\" data-live-search=\"true\"></select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sender_department\"><span data-toggle=\"tooltip\" title=\"";
            // line 732
            echo ($context["help_sender_department"] ?? null);
            echo "\">";
            echo ($context["entry_department"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[sender_department]\" id=\"input-sender_department\" class=\"form-control selectpicker show-tick\" data-live-search=\"true\"></select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sender_address\"><span data-toggle=\"tooltip\" title=\"";
            // line 738
            echo ($context["help_sender_address"] ?? null);
            echo "\">";
            echo ($context["entry_address"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[sender_address]\" id=\"input-sender_address\" class=\"form-control selectpicker show-tick\" data-live-search=\"true\"></select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sender_address_pick_up\"><span data-toggle=\"tooltip\" title=\"";
            // line 744
            echo ($context["help_sender_address_pick_up"] ?? null);
            echo "\">";
            echo ($context["entry_address_pick_up"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[sender_address_pick_up]\" id=\"input-sender_address_pick_up\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 746
            echo (((($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 = ($context["novaposhta"] ?? null)) && is_array($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7) || $__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7 instanceof ArrayAccess ? ($__internal_02e37451be1bc90685e7b07dc185b5bf55030db7e6476dc7784f39b57707e6d7["sender_address_pick_up"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[sender_address_type]\" value=\"";
            // line 747
            echo (($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 = ($context["novaposhta"] ?? null)) && is_array($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9) || $__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9 instanceof ArrayAccess ? ($__internal_cfb39a2b011d1b5ceede989c48296b7be75cc4628ed22caaaa73f6a0511885d9["sender_address_type"] ?? null) : null);
            echo "\" id=\"input-sender_address_type\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-recipient\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_name\"><span data-toggle=\"tooltip\" title=\"";
            // line 753
            echo ($context["help_recipient"] ?? null);
            echo "\">";
            echo ($context["entry_recipient"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_name]\" value=\"";
            // line 755
            echo (($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 = ($context["novaposhta"] ?? null)) && is_array($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446) || $__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446 instanceof ArrayAccess ? ($__internal_5dc29f10273e1b11a87047decc4959e4d24ebef705bf72ebd09d61c5983e7446["recipient_name"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["text_select"] ?? null);
            echo "\" id=\"input-recipient_name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[recipient]\" value=\"";
            // line 756
            echo (($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d = ($context["novaposhta"] ?? null)) && is_array($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d) || $__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d instanceof ArrayAccess ? ($__internal_6cce074a3e1015eb981f766905cbab506776514bac4c77d44f3ced836a67675d["recipient"] ?? null) : null);
            echo "\" id=\"input-recipient\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_contact_person\"><span data-toggle=\"tooltip\" title=\"";
            // line 760
            echo ($context["help_recipient_contact_person"] ?? null);
            echo "\">";
            echo ($context["entry_contact_person"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_contact_person]\" value=\"";
            // line 762
            echo (($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e = ($context["novaposhta"] ?? null)) && is_array($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e) || $__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e instanceof ArrayAccess ? ($__internal_cb311c56761b7e1fef0833ade7151100fb45c3bb35a619e658ba3e7a5752a59e["recipient_contact_person"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_contact_person"] ?? null);
            echo "\" id=\"input-recipient_contact_person\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_contact_person_phone\"><span data-toggle=\"tooltip\" title=\"";
            // line 766
            echo ($context["help_recipient_contact_person_phone"] ?? null);
            echo "\">";
            echo ($context["entry_phone"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_contact_person_phone]\" value=\"";
            // line 768
            echo (($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f = ($context["novaposhta"] ?? null)) && is_array($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f) || $__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f instanceof ArrayAccess ? ($__internal_74a3e8c2570a3732273c3ed74a6d3c8e042e35fc985e59c62d261815e380ee4f["recipient_contact_person_phone"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_phone"] ?? null);
            echo "\" id=\"input-recipient_contact_person_phone\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_edrpou\"><span data-toggle=\"tooltip\" title=\"";
            // line 772
            echo ($context["help_recipient_edrpou"] ?? null);
            echo "\">";
            echo ($context["entry_edrpou"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_edrpou]\" value=\"";
            // line 774
            echo (($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 = ($context["novaposhta"] ?? null)) && is_array($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996) || $__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996 instanceof ArrayAccess ? ($__internal_e4c924f92b5a931b7f689155f599dbb26e4de7e6a4b41afc2c796c48ae5b4996["recipient_edrpou"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_edrpou"] ?? null);
            echo "\" id=\"input-recipient_edrpou\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_region\"><span data-toggle=\"tooltip\" title=\"";
            // line 778
            echo ($context["help_recipient_region"] ?? null);
            echo "\">";
            echo ($context["entry_region"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_region]\" value=\"";
            // line 780
            echo (($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 = ($context["novaposhta"] ?? null)) && is_array($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330) || $__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330 instanceof ArrayAccess ? ($__internal_3d5c46d4c5bb0cede8218ba97273f45d5f9ce5a263c36c0e2decf8c65d457330["recipient_region"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_region"] ?? null);
            echo "\" id=\"input-recipient_region\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_city\"><span data-toggle=\"tooltip\" title=\"";
            // line 784
            echo ($context["help_recipient_city"] ?? null);
            echo "\">";
            echo ($context["entry_city"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_city]\" value=\"";
            // line 786
            echo (($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae = ($context["novaposhta"] ?? null)) && is_array($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae) || $__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae instanceof ArrayAccess ? ($__internal_ce652b03c8acd7b858d9c93e7f44511cc72e40ab64d98a8e15d94d28735197ae["recipient_city"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-recipient_city\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_department\"><span data-toggle=\"tooltip\" title=\"";
            // line 790
            echo ($context["help_recipient_department"] ?? null);
            echo "\">";
            echo ($context["entry_department"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_department]\" value=\"";
            // line 792
            echo (($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 = ($context["novaposhta"] ?? null)) && is_array($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409) || $__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409 instanceof ArrayAccess ? ($__internal_8e4986aabe98b063bb5d5a2c95610ac751695fced15cdacfec53f70e7d4ea409["recipient_department"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_department"] ?? null);
            echo "\" id=\"input-recipient_department\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_address\"><span data-toggle=\"tooltip\" title=\"";
            // line 796
            echo ($context["help_recipient_address"] ?? null);
            echo "\">";
            echo ($context["entry_address"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_address]\" value=\"";
            // line 798
            echo (($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 = ($context["novaposhta"] ?? null)) && is_array($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26) || $__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26 instanceof ArrayAccess ? ($__internal_e858097da87330889509c21892ee85ee8c960bfd805aa0f525a9610eda0b6c26["recipient_address"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_address"] ?? null);
            echo "\" id=\"input-recipient_address\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_street\"><span data-toggle=\"tooltip\" title=\"";
            // line 802
            echo ($context["help_recipient_street"] ?? null);
            echo "\">";
            echo ($context["entry_street"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_street]\" value=\"";
            // line 804
            echo (($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d = ($context["novaposhta"] ?? null)) && is_array($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d) || $__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d instanceof ArrayAccess ? ($__internal_65e7e4520674d98f13dd3aeeb92cde937cf6924ee55b1cd714dab21b56e90b8d["recipient_street"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_street"] ?? null);
            echo "\" id=\"input-recipient_street\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_house\"><span data-toggle=\"tooltip\" title=\"";
            // line 808
            echo ($context["help_recipient_house"] ?? null);
            echo "\">";
            echo ($context["entry_house"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_house]\" value=\"";
            // line 810
            echo (($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 = ($context["novaposhta"] ?? null)) && is_array($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408) || $__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408 instanceof ArrayAccess ? ($__internal_f4b318c9f161980c086cd791a68c6b3948e695aff50a75fb3267d44f228c7408["recipient_house"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_house"] ?? null);
            echo "\" id=\"input-recipient_house\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-recipient_flat\"><span data-toggle=\"tooltip\" title=\"";
            // line 814
            echo ($context["help_recipient_flat"] ?? null);
            echo "\">";
            echo ($context["entry_flat"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[recipient_flat]\" value=\"";
            // line 816
            echo (($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 = ($context["novaposhta"] ?? null)) && is_array($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0) || $__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0 instanceof ArrayAccess ? ($__internal_83fc86d2371dda9aa0b3b082e73f39d0e9a5bb564db226a358e9a4a4194ea0c0["recipient_flat"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_flat"] ?? null);
            echo "\" id=\"input-recipient_flat\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-preferred_delivery_date\"><span data-toggle=\"tooltip\" title=\"";
            // line 820
            echo ($context["help_preferred_delivery_date"] ?? null);
            echo "\">";
            echo ($context["entry_preferred_delivery_date"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[preferred_delivery_date]\" value=\"";
            // line 822
            echo (($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b = ($context["novaposhta"] ?? null)) && is_array($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b) || $__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b instanceof ArrayAccess ? ($__internal_c254c72d5963764194d309f18e90f4170c597a27593b6d70e5664f7497676f7b["preferred_delivery_date"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_preferred_delivery_date"] ?? null);
            echo "\" id=\"input-preferred_delivery_date\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-preferred_delivery_time\"><span data-toggle=\"tooltip\" title=\"";
            // line 826
            echo ($context["help_preferred_delivery_time"] ?? null);
            echo "\">";
            echo ($context["entry_preferred_delivery_time"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[preferred_delivery_time]\" value=\"";
            // line 828
            echo (($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 = ($context["novaposhta"] ?? null)) && is_array($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084) || $__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084 instanceof ArrayAccess ? ($__internal_dc32df57a76148af0ad93ed5fa8b904808a8f1945335b4257f8bf2afc20e0084["preferred_delivery_time"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_preferred_delivery_time"] ?? null);
            echo "\" id=\"input-preferred_delivery_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-departure\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-autodetection_departure_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 834
            echo ($context["help_autodetection_departure_type"] ?? null);
            echo "\">";
            echo ($context["entry_autodetection_departure_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
                                        <input type=\"checkbox\" name=\"shipping_novaposhta[autodetection_departure_type]\" id=\"input-autodetection_departure_type\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 836
            echo (((($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb = ($context["novaposhta"] ?? null)) && is_array($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb) || $__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb instanceof ArrayAccess ? ($__internal_0b241b0e70009b9c2e73ff26e0e7a21de5c494898ed5e481203a038ce17059cb["autodetection_departure_type"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-departure_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 838
            echo ($context["help_departure_type"] ?? null);
            echo "\">";
            echo ($context["entry_departure_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[departure_type]\" id=\"input-departure_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 841
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cargo_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 842
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 842);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 842) == (($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b = ($context["novaposhta"] ?? null)) && is_array($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b) || $__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b instanceof ArrayAccess ? ($__internal_ef6a922f76b02213de0c05cd958ab517168c2607c5c5040d9267fac459d99a6b["departure_type"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 842);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 844
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-calculate_volume\"><span data-toggle=\"tooltip\" title=\"";
            // line 848
            echo ($context["help_calculate_volume"] ?? null);
            echo "\">";
            echo ($context["entry_calculate_volume"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
                                        <input type=\"checkbox\" name=\"shipping_novaposhta[calculate_volume]\" id=\"input-calculate_volume\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 850
            echo (((($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 = ($context["novaposhta"] ?? null)) && is_array($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9) || $__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9 instanceof ArrayAccess ? ($__internal_ff3c01cf8a16468f6290b067ec94792a07f91c1ce87051d4f8c20747a7f040c9["calculate_volume"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-calculate_volume_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 852
            echo ($context["help_calculate_volume_type"] ?? null);
            echo "\">";
            echo ($context["entry_calculate_volume_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 855
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["calculate_volume_types"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 856
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["k"] == (($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 = ($context["novaposhta"] ?? null)) && is_array($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698) || $__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698 instanceof ArrayAccess ? ($__internal_fe481f7d149bb1599128a3bbfcac96d70f30ec5ba8af5b1ecaf5fbb191254698["calculate_volume_type"] ?? null) : null))) {
                    // line 857
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_volume_type]\" value=\"";
                    // line 858
                    echo $context["k"];
                    echo "\" id=\"input-calculate_volume_type-";
                    echo $context["k"];
                    echo "\" checked>";
                    echo $context["v"];
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 861
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_volume_type]\" value=\"";
                    // line 862
                    echo $context["k"];
                    echo "\" id=\"input-calculate_volume_type-";
                    echo $context["k"];
                    echo "\">";
                    echo $context["v"];
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 865
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 866
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seats_amount\"><span data-toggle=\"tooltip\" title=\"";
            // line 870
            echo ($context["help_seats_amount"] ?? null);
            echo "\">";
            echo ($context["entry_seats_amount"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[seats_amount]\" value=\"";
            // line 873
            echo (($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f = ($context["novaposhta"] ?? null)) && is_array($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f) || $__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f instanceof ArrayAccess ? ($__internal_92fcb416502b1fa6b6aa86d134b215b0a0167587977f219666cd2b1758225f4f["seats_amount"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_seats_amount"] ?? null);
            echo "\" id=\"input-seats_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 874
            echo ($context["text_pc"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-declared_cost\"><span data-toggle=\"tooltip\" title=\"";
            // line 879
            echo ($context["help_declared_cost"] ?? null);
            echo "\">";
            echo ($context["entry_declared_cost"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 882
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 883
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[declared_cost][]\" value=\"";
                // line 885
                echo $context["code"];
                echo "\"";
                echo ((twig_in_filter($context["code"], (($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 = ($context["novaposhta"] ?? null)) && is_array($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1) || $__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1 instanceof ArrayAccess ? ($__internal_3fa297d61bb53522f6d7d26865df531fe2c9cae5868ad00df3d7a18c25fe92a1["declared_cost"] ?? null) : null))) ? (" checked") : (""));
                echo " /> ";
                echo $context["title"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 889
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a = ($context["novaposhta"] ?? null)) && is_array($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a) || $__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a instanceof ArrayAccess ? ($__internal_333cfa7af4c7ecc6093fcfedc8157b964c096bbb3ba6a10d8cc88e54d983911a["declared_cost"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                if (twig_test_iterable($context["v"])) {
                    // line 890
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[declared_cost][]\" value=\"";
                    // line 892
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 892);
                    echo "\"";
                    echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 892), (($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c = ($context["novaposhta"] ?? null)) && is_array($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c) || $__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c instanceof ArrayAccess ? ($__internal_6391199dedb1e4756012dc154b4a82c23dc574efa73d05e7c8a74a972a0cd12c["declared_cost"] ?? null) : null))) ? (" checked") : (""));
                    echo " /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 892);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"\$(this).parents('div.checkbox').remove();\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[declared_cost][";
                    // line 895
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 895);
                    echo "][code]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 895);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[declared_cost][";
                    // line 896
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 896);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 896);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 899
            echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\" title=\"";
            // line 900
            echo ($context["button_add"] ?? null);
            echo "\" onclick=\"addCustomMethod('declared_cost');\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-declared_cost_default\"><span data-toggle=\"tooltip\" title=\"";
            // line 903
            echo ($context["help_declared_cost_default"] ?? null);
            echo "\">";
            echo ($context["entry_declared_cost_default"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[declared_cost_default]\" value=\"";
            // line 906
            echo (($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 = ($context["novaposhta"] ?? null)) && is_array($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7) || $__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7 instanceof ArrayAccess ? ($__internal_749c2c9fadf4e0ad0ec949be406986f08318112ea607adc63270dc234ee0a8d7["declared_cost_default"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_declared_cost_default"] ?? null);
            echo "\" id=\"input-declared_cost_default\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 907
            echo ($context["text_grn"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-offset-10 col-sm-2 control-label\"><a class=\"btn btn-default pull-right\" data-toggle=\"collapse\" href=\"#departure_additional_information_t_m\" aria-expanded=\"false\" aria-controls=\"departure_additional_information_t_m\" role=\"button\">";
            // line 912
            echo ($context["text_macros"] ?? null);
            echo " <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div id=\"departure_additional_information_t_m\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 918
            echo ($context["text_order_template_macros"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 921
            echo ($context["text_products_template_macros"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-departure_description\"><span data-toggle=\"tooltip\" title=\"";
            // line 927
            echo ($context["help_departure_description"] ?? null);
            echo "\">";
            echo ($context["entry_departure_description"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[departure_description]\" value=\"";
            // line 929
            echo (($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 = ($context["novaposhta"] ?? null)) && is_array($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351) || $__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351 instanceof ArrayAccess ? ($__internal_60b5864c736e546c33a0f9b12abb5977adf552ba2293b4dc12dad0a2be607351["departure_description"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_departure_description"] ?? null);
            echo "\" id=\"input-departure_description\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-departure_additional_information\"><span data-toggle=\"tooltip\" title=\"";
            // line 931
            echo ($context["help_departure_additional_information"] ?? null);
            echo "\">";
            echo ($context["entry_departure_additional_information"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"shipping_novaposhta[departure_additional_information]\" rows=\"3\" id=\"input-departure_additional_information\" class=\"form-control\">";
            // line 933
            echo (($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 = ($context["novaposhta"] ?? null)) && is_array($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15) || $__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15 instanceof ArrayAccess ? ($__internal_a2f5b9ff51b59bc9f3b025aa1e1c1e1b0fc91f36187c566a410229bf83ca6d15["departure_additional_information"] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-general_parameters\"><span data-toggle=\"tooltip\" title=\"";
            // line 937
            echo ($context["help_general_parameters"] ?? null);
            echo "\">";
            echo ($context["entry_general_parameters"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[general_parameters]\" id=\"input-general_parameters\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 939
            echo (((($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f = ($context["novaposhta"] ?? null)) && is_array($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f) || $__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f instanceof ArrayAccess ? ($__internal_e321fd256ed911201cceb1f23ee74e2ae71106dc9d38b9aa9d3ae1c4726dc46f["general_parameters"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-manual_processing\"><span data-toggle=\"tooltip\" title=\"";
            // line 943
            echo ($context["help_manual_processing"] ?? null);
            echo "\">";
            echo ($context["entry_manual_processing"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[manual_processing]\" id=\"input-manual_processing\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 945
            echo (((($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 = ($context["novaposhta"] ?? null)) && is_array($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40) || $__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40 instanceof ArrayAccess ? ($__internal_7a86decbee0e83646d077b28cb4023bf5ce8a6941db44d2a095f3e5c30673f40["manual_processing"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-avia_delivery\"><span data-toggle=\"tooltip\" title=\"";
            // line 949
            echo ($context["help_avia_delivery"] ?? null);
            echo "\">";
            echo ($context["entry_avia_delivery"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[avia_delivery]\" id=\"input-avia_delivery\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 951
            echo (((($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 = ($context["novaposhta"] ?? null)) && is_array($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8) || $__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8 instanceof ArrayAccess ? ($__internal_9765bc41907280d6fcc28ada485cfb51e7ac5fc636224af251b78cc914882ea8["avia_delivery"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<legend>";
            // line 954
            echo ($context["text_default_departure_options"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-use_parameters\"><span data-toggle=\"tooltip\" title=\"";
            // line 956
            echo ($context["help_use_parameters"] ?? null);
            echo "\">";
            echo ($context["entry_use_parameters"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 959
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["use_parameters"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 960
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["k"] == (($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 = ($context["novaposhta"] ?? null)) && is_array($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316) || $__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316 instanceof ArrayAccess ? ($__internal_64a8779ac6c861d53bff0e05418b6bf70fe527205a28bcc347da1c47628d6316["use_parameters"] ?? null) : null))) {
                    // line 961
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[use_parameters]\" value=\"";
                    // line 962
                    echo $context["k"];
                    echo "\" id=\"input-use_parameters-";
                    echo $context["k"];
                    echo "\" checked>";
                    echo $context["v"];
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 965
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[use_parameters]\" value=\"";
                    // line 966
                    echo $context["k"];
                    echo "\" id=\"input-use_parameters-";
                    echo $context["k"];
                    echo "\">";
                    echo $context["v"];
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 969
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 970
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-weight\"><span data-toggle=\"tooltip\" title=\"";
            // line 974
            echo ($context["help_weight"] ?? null);
            echo "\">";
            echo ($context["entry_weight"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[weight]\" value=\"";
            // line 977
            echo (($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 = ($context["novaposhta"] ?? null)) && is_array($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68) || $__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68 instanceof ArrayAccess ? ($__internal_bdeae13b61c48a9bb7053d83339903da184f04d6cf2c1c6bf65ecb00a4978b68["weight"] ?? null) : null);
            echo "\" placeholder=\"0\" id=\"input-weight\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 978
            echo ($context["text_kg"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-dimensions_w\"><span data-toggle=\"tooltip\" title=\"";
            // line 983
            echo ($context["help_dimensions"] ?? null);
            echo "\">";
            echo ($context["entry_dimensions"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[dimensions_w]\" value=\"";
            // line 986
            echo (($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 = ($context["novaposhta"] ?? null)) && is_array($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3) || $__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3 instanceof ArrayAccess ? ($__internal_33af9458a3ae54268b64fc86c4f2aabeb171e5df6853a739a882d22db3c7a6a3["dimensions_w"] ?? null) : null);
            echo "\" placeholder=\"0\" id=\"input-dimensions_w\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 987
            echo ($context["text_cm"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[dimensions_l]\" value=\"";
            // line 992
            echo (($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 = ($context["novaposhta"] ?? null)) && is_array($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267) || $__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267 instanceof ArrayAccess ? ($__internal_8a0762d4aa3dc8c3807c671517580f54686cc5ac5c8e1cef30934bfb6f7bb267["dimensions_l"] ?? null) : null);
            echo "\" placeholder=\"0\" id=\"input-dimensions_l\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 993
            echo ($context["text_cm"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[dimensions_h]\" value=\"";
            // line 998
            echo (($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d = ($context["novaposhta"] ?? null)) && is_array($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d) || $__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d instanceof ArrayAccess ? ($__internal_ffa8d8104e4c05f0e520b22e02d102606b28cadd1d676232462d37155205d29d["dimensions_h"] ?? null) : null);
            echo "\" placeholder=\"0\" id=\"input-dimensions_h\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 999
            echo ($context["text_cm"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-allowance_w\"><span data-toggle=\"tooltip\" title=\"";
            // line 1004
            echo ($context["help_allowance"] ?? null);
            echo "\">";
            echo ($context["entry_allowance"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[allowance_w]\" value=\"";
            // line 1007
            echo (($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f = ($context["novaposhta"] ?? null)) && is_array($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f) || $__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f instanceof ArrayAccess ? ($__internal_995009f84643f33c31b1bfeabfe54d442df1ec39134811b9fee93a3a100dc10f["allowance_w"] ?? null) : null);
            echo "\" placeholder=\"0\" id=\"input-allowance_w\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 1008
            echo ($context["text_cm"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[allowance_l]\" value=\"";
            // line 1013
            echo (($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768 = ($context["novaposhta"] ?? null)) && is_array($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768) || $__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768 instanceof ArrayAccess ? ($__internal_a87a332bdd9c4920fcff67e0a0fbf2338bf0fc502dc18935fe14cb0266f92768["allowance_l"] ?? null) : null);
            echo "\" placeholder=\"0\" id=\"input-allowance_l\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 1014
            echo ($context["text_cm"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[allowance_h]\" value=\"";
            // line 1019
            echo (($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a = ($context["novaposhta"] ?? null)) && is_array($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a) || $__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a instanceof ArrayAccess ? ($__internal_dc4207045c42a84741452c486f47b9a66b720393ce7199ed6472faf87641355a["allowance_h"] ?? null) : null);
            echo "\" placeholder=\"0\" id=\"input-allowance_h\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 1020
            echo ($context["text_cm"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<legend>";
            // line 1024
            echo ($context["text_pack"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-pack\"><span data-toggle=\"tooltip\" title=\"";
            // line 1026
            echo ($context["help_pack"] ?? null);
            echo "\">";
            echo ($context["entry_pack"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[pack]\" id=\"input-pack\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 1028
            echo (((($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18 = ($context["novaposhta"] ?? null)) && is_array($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18) || $__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18 instanceof ArrayAccess ? ($__internal_70cdb879b02cf9ec1d6611c4992631759ee2013ffb59f0362533ea6cd4a4af18["pack"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-pack_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 1032
            echo ($context["help_pack_type"] ?? null);
            echo "\">";
            echo ($context["entry_pack_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[pack_type][]\" id=\"input-pack_type\" class=\"form-control selectpicker\" title=\"";
            // line 1034
            echo ($context["text_select"] ?? null);
            echo "\" data-actions-box=\"true\" multiple>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1035
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pack_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 1036
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1036);
                echo "\"";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1036), (($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea = ($context["novaposhta"] ?? null)) && is_array($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea) || $__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea instanceof ArrayAccess ? ($__internal_9aadb88279782a1b4d289d7bb548995bfd16cca473494d531f0f60860c3b52ea["pack_type"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1036);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1038
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-autodetection_pack_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 1042
            echo ($context["help_autodetection_pack_type"] ?? null);
            echo "\">";
            echo ($context["entry_autodetection_pack_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[autodetection_pack_type]\" id=\"input-autodetection_pack_type\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 1044
            echo (((($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052 = ($context["novaposhta"] ?? null)) && is_array($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052) || $__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052 instanceof ArrayAccess ? ($__internal_959b182e30208310347773cbfa5488d1029c8453da4b2f37a3e5b73d2741d052["autodetection_pack_type"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-payment\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-delivery_payer\"><span data-toggle=\"tooltip\" title=\"";
            // line 1050
            echo ($context["help_delivery_payer"] ?? null);
            echo "\">";
            echo ($context["entry_delivery_payer"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1053
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payer_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 1054
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1054) == (($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766 = ($context["novaposhta"] ?? null)) && is_array($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766) || $__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766 instanceof ArrayAccess ? ($__internal_b9462c1f56277055090818f5a4daafd35ea82a3e856d1b2071bb5db5f2435766["delivery_payer"] ?? null) : null))) {
                    // line 1055
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[delivery_payer]\" value=\"";
                    // line 1056
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1056);
                    echo "\" id=\"input-delivery_payer-";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1056);
                    echo "\" checked>";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1056);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1059
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[delivery_payer]\" value=\"";
                    // line 1060
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1060);
                    echo "\" id=\"input-delivery_payer-";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1060);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1060);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1063
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1064
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-third_person\"><span data-toggle=\"tooltip\" title=\"";
            // line 1068
            echo ($context["help_third_person"] ?? null);
            echo "\">";
            echo ($context["entry_third_person"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[third_person]\" id=\"input-third_person\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 1071
            echo ($context["text_select"] ?? null);
            echo "</option>
                                            ";
            // line 1072
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["third_persons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 1073
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1073);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1073) == (($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16 = ($context["novaposhta"] ?? null)) && is_array($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16) || $__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16 instanceof ArrayAccess ? ($__internal_0bc5bd0f7070e93681192084f4740838129e7147f243e5ed200b32e12e562b16["third_person"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1073);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1075
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 1079
            echo ($context["help_payment_type"] ?? null);
            echo "\">";
            echo ($context["entry_payment_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1082
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 1083
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1083) == (($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998 = ($context["novaposhta"] ?? null)) && is_array($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998) || $__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998 instanceof ArrayAccess ? ($__internal_0618bff272785d9ca218bcde12692d8b010ba60a51d81b60287249d9ff8d7998["payment_type"] ?? null) : null))) {
                    // line 1084
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[payment_type]\" value=\"";
                    // line 1085
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1085);
                    echo "\" id=\"input-payment_type-";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1085);
                    echo "\" checked>";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1085);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1088
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[payment_type]\" value=\"";
                    // line 1089
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1089);
                    echo "\" id=\"input-payment_type-";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1089);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1089);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1092
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1093
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment_cod\"><span data-toggle=\"tooltip\" title=\"";
            // line 1097
            echo ($context["help_payment_cod"] ?? null);
            echo "\">";
            echo ($context["entry_payment_cod"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                            ";
            // line 1100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 1101
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[payment_cod][]\" value=\"";
                // line 1103
                echo $context["code"];
                echo "\"";
                echo ((twig_in_filter($context["code"], (($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d = ($context["novaposhta"] ?? null)) && is_array($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d) || $__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d instanceof ArrayAccess ? ($__internal_4c854f7a9d11d0069289b2df19f3ea555711707d46b9293dd1465b5eae1edc8d["payment_cod"] ?? null) : null))) ? (" checked") : (""));
                echo " /> ";
                echo $context["title"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1107
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb = ($context["novaposhta"] ?? null)) && is_array($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb) || $__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb instanceof ArrayAccess ? ($__internal_47295a5b064451f3b0c4eed397e0efce1d611c4efe3f296b9c01ee7f8e94b4bb["payment_cod"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                if (twig_test_iterable($context["v"])) {
                    // line 1108
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[payment_cod][]\" value=\"";
                    // line 1110
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1110);
                    echo "\"";
                    echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1110), (($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584 = ($context["novaposhta"] ?? null)) && is_array($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584) || $__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584 instanceof ArrayAccess ? ($__internal_76887dd057b58ee524dd12da71c28991ba8e6b511ce7ddd7c4b24e56dd53f584["payment_cod"] ?? null) : null))) ? (" checked") : (""));
                    echo " /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 1110);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"\$(this).parents('div.checkbox').remove();\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[payment_cod][";
                    // line 1113
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1113);
                    echo "][code]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1113);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[payment_cod][";
                    // line 1114
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1114);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 1114);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1117
            echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\" title=\"";
            // line 1118
            echo ($context["button_add"] ?? null);
            echo "\" onclick=\"addCustomMethod('payment_cod');\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-calculate_cod\"><span data-toggle=\"tooltip\" title=\"";
            // line 1123
            echo ($context["help_calculate_cod"] ?? null);
            echo "\">";
            echo ($context["entry_calculate_cod"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["calculate_cod_types"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 1127
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["k"] == (($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4 = ($context["novaposhta"] ?? null)) && is_array($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4) || $__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4 instanceof ArrayAccess ? ($__internal_66a8ad5333bed581c6de7652503f12928c838cf5f4f0a3cae03a065039303fb4["calculate_cod"] ?? null) : null))) {
                    // line 1128
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_cod]\" value=\"";
                    // line 1129
                    echo $context["k"];
                    echo "\" id=\"input-calculate_cod-";
                    echo $context["k"];
                    echo "\" checked>";
                    echo $context["v"];
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1132
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_cod]\" value=\"";
                    // line 1133
                    echo $context["k"];
                    echo "\" id=\"input-calculate_cod-";
                    echo $context["k"];
                    echo "\">";
                    echo $context["v"];
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1136
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1137
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-calculate_declared_cost_commision\"><span data-toggle=\"tooltip\" title=\"";
            // line 1141
            echo ($context["help_calculate_declared_cost_comm"] ?? null);
            echo "\">";
            echo ($context["entry_calculate_declared_cost_comm"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1144
            if ((($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777 = ($context["novaposhta"] ?? null)) && is_array($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777) || $__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777 instanceof ArrayAccess ? ($__internal_2628c9615b3426b7c5874694384b0df9e9f6ab7c6f879785f124f6e3a2a94777["calculate_declared_cost_commision"] ?? null) : null)) {
                // line 1145
                echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_declared_cost_commision]\" value=\"0\" id=\"input-calculate_declared_cost_commision-disabled\">";
                // line 1146
                echo ($context["text_disabled"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_declared_cost_commision]\" value=\"1\" id=\"input-calculate_declared_cost_commision\" checked>";
                // line 1149
                echo ($context["text_enabled"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1152
                echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_declared_cost_commision]\" value=\"0\" id=\"input-calculate_declared_cost_commision-disabled\" checked>";
                // line 1153
                echo ($context["text_disabled"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[calculate_declared_cost_commision]\" value=\"1\" id=\"input-calculate_declared_cost_commision\">";
                // line 1156
                echo ($context["text_enabled"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1159
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-backward_delivery\"><span data-toggle=\"tooltip\" title=\"";
            // line 1163
            echo ($context["help_backward_delivery"] ?? null);
            echo "\">";
            echo ($context["entry_backward_delivery"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[backward_delivery]\" id=\"input-payment_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 1166
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"N\"";
            // line 1167
            echo ((((($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0 = ($context["novaposhta"] ?? null)) && is_array($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0) || $__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0 instanceof ArrayAccess ? ($__internal_e92494c1e9346ed6fde9c084e4ea58556c55d398ce6060d0eee0fc3b6a9957d0["backward_delivery"] ?? null) : null) == "N")) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo ($context["text_no_backward_delivery"] ?? null);
            echo "</option>
                                            ";
            // line 1168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["backward_delivery_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 1169
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1169);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1169) == (($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727 = ($context["novaposhta"] ?? null)) && is_array($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727) || $__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727 instanceof ArrayAccess ? ($__internal_bfdb517baffa5879712c366e54201851165d2f75a825d71b872b9ee3500d3727["backward_delivery"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1169);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1171
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-backward_delivery_payer\"><span data-toggle=\"tooltip\" title=\"";
            // line 1175
            echo ($context["help_backward_delivery_payer"] ?? null);
            echo "\">";
            echo ($context["entry_backward_delivery_payer"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["backward_delivery_payers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 1179
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1179) == (($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834 = ($context["novaposhta"] ?? null)) && is_array($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834) || $__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834 instanceof ArrayAccess ? ($__internal_407bb9aeafcd6398c87e06fb1089319d79808a6f218ff275a7e1ac05b4977834["backward_delivery_payer"] ?? null) : null))) {
                    // line 1180
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[backward_delivery_payer]\" value=\"";
                    // line 1181
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1181);
                    echo "\" id=\"input-backward_delivery_payer-";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1181);
                    echo "\" checked>";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1181);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1184
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[backward_delivery_payer]\" value=\"";
                    // line 1185
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1185);
                    echo "\" id=\"input-backward_delivery_payer-";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Ref", [], "any", false, false, false, 1185);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 1185);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1188
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1189
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment_control\"><span data-toggle=\"tooltip\" title=\"";
            // line 1193
            echo ($context["help_payment_control"] ?? null);
            echo "\">";
            echo ($context["entry_payment_control"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 1197
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[payment_control][]\" value=\"";
                // line 1199
                echo $context["code"];
                echo "\"";
                echo ((twig_in_filter($context["code"], (($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5 = ($context["novaposhta"] ?? null)) && is_array($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5) || $__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5 instanceof ArrayAccess ? ($__internal_30f275f6b43b69c3ccb2c7888a55c741eab0a2c2a37f330377bee8710af1ecc5["payment_control"] ?? null) : null))) ? (" checked") : (""));
                echo " /> ";
                echo $context["title"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1203
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452 = ($context["novaposhta"] ?? null)) && is_array($__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452) || $__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452 instanceof ArrayAccess ? ($__internal_23461e0e4984a2eb0fed4b90cb0344d8c51f61050ea9af4f7083eb7f2ea90452["payment_control"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                if (twig_test_iterable($context["v"])) {
                    // line 1204
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[payment_control][]\" value=\"";
                    // line 1206
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1206);
                    echo "\"";
                    echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1206), (($__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93 = ($context["novaposhta"] ?? null)) && is_array($__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93) || $__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93 instanceof ArrayAccess ? ($__internal_dbd15bc5fa55fd4d250df7010a0c5825bb9aa7750495542417887f4417c0ac93["payment_control"] ?? null) : null))) ? (" checked") : (""));
                    echo " /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 1206);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"\$(this).parents('div.checkbox').remove();\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[payment_control][";
                    // line 1209
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1209);
                    echo "][code]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1209);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[payment_control][";
                    // line 1210
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1210);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 1210);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1213
            echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\" title=\"";
            // line 1214
            echo ($context["button_add"] ?? null);
            echo "\" onclick=\"addCustomMethod('payment_control');\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-consignment_note\">
\t\t\t\t\t\t\t\t<legend>";
            // line 1220
            echo ($context["text_consignment_note_list"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-display_all_consignments\"><span data-toggle=\"tooltip\" title=\"";
            // line 1222
            echo ($context["help_display_all_consignments"] ?? null);
            echo "\">";
            echo ($context["entry_display_all_consignments"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[display_all_consignments]\" id=\"input-display_all_consignments\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 1224
            echo (((($__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0 = ($context["novaposhta"] ?? null)) && is_array($__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0) || $__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0 instanceof ArrayAccess ? ($__internal_fd64a930b0e9c0b02a2d61bbaa0ba6ba24cefb14d851328b69201ef4500dcbe0["display_all_consignments"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-consignment_displayed_information\"><span data-toggle=\"tooltip\" title=\"";
            // line 1228
            echo ($context["help_displayed_information"] ?? null);
            echo "\">";
            echo ($context["entry_displayed_information"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[consignment_displayed_information][]\" id=\"input-consignment_displayed_information\" class=\"form-control selectpicker\" title=\"";
            // line 1230
            echo ($context["text_select"] ?? null);
            echo "\" data-actions-box=\"true\" multiple>
                                            ";
            // line 1231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["consignment_displayed_information"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 1232
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["k"];
                echo "\"";
                echo ((twig_in_filter($context["k"], (($__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1 = ($context["novaposhta"] ?? null)) && is_array($__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1) || $__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1 instanceof ArrayAccess ? ($__internal_fec47a4f10ac9f3da75d681d729bf1a57a27b279b5cc771769bb059673cb18b1["consignment_displayed_information"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo $context["v"];
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1234
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<legend>";
            // line 1237
            echo ($context["text_print_settings"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-print_format\"><span data-toggle=\"tooltip\" title=\"";
            // line 1239
            echo ($context["help_print_format"] ?? null);
            echo "\">";
            echo ($context["entry_print_format"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[print_format]\" id=\"input-print_format\" class=\"form-control\">
                                            ";
            // line 1242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["print_formats"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 1243
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["k"];
                echo "\"";
                echo ((($context["k"] == (($__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead = ($context["novaposhta"] ?? null)) && is_array($__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead) || $__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead instanceof ArrayAccess ? ($__internal_52e779c9aa70e56e92aba2ce631519b7ea3c549e9a38275eb12d9ae0e739aead["print_format"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo $context["v"];
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1245
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-number_of_copies\"><span data-toggle=\"tooltip\" title=\"";
            // line 1249
            echo ($context["help_number_of_copies"] ?? null);
            echo "\">";
            echo ($context["entry_number_of_copies"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[number_of_copies]\" value=\"";
            // line 1251
            echo (($__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df = ($context["novaposhta"] ?? null)) && is_array($__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df) || $__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df instanceof ArrayAccess ? ($__internal_84ff5c771dc55fdef1612fefde5f1fe7e33c7ab438f9a3dbd51f0685a49bc4df["number_of_copies"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_number_of_copies"] ?? null);
            echo "\" id=\"input-number_of_copies\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-template_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 1255
            echo ($context["help_template_type"] ?? null);
            echo "\">";
            echo ($context["entry_template_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[template_type]\" id=\"input-template_type\" class=\"form-control\">
                                            ";
            // line 1258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["template_types"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 1259
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["k"];
                echo "\"";
                echo ((($context["k"] == (($__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c = ($context["novaposhta"] ?? null)) && is_array($__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c) || $__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c instanceof ArrayAccess ? ($__internal_f6b0776750f3d220ac01b19f59b2064d7770dad7178265aa7488a2c16630e28c["template_type"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo $context["v"];
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1261
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-print_type\"><span data-toggle=\"tooltip\" title=\"";
            // line 1265
            echo ($context["help_print_type"] ?? null);
            echo "\">";
            echo ($context["entry_print_type"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[print_type]\" id=\"input-print_type\" class=\"form-control\">
                                            ";
            // line 1268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["print_types"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 1269
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["k"];
                echo "\"";
                echo ((($context["k"] == (($__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0 = ($context["novaposhta"] ?? null)) && is_array($__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0) || $__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0 instanceof ArrayAccess ? ($__internal_056c7499edfd6e62528c71d6d383ff6c68e63569236c9d750707056880be53d0["print_type"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo $context["v"];
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1271
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-print_start\"><span data-toggle=\"tooltip\" title=\"";
            // line 1275
            echo ($context["help_print_start"] ?? null);
            echo "\">";
            echo ($context["entry_print_start"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-vertical\" id=\"div-vertical-1\" data-toggle=\"buttons\">
                                            ";
            // line 1278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 1279
                echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default";
                echo ((($context["i"] == (($__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5 = ($context["novaposhta"] ?? null)) && is_array($__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5) || $__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5 instanceof ArrayAccess ? ($__internal_27c099a62e21a1a33c28ee65c6461204b361ffd59fcec961bb43c2de8bb6c9e5["print_start"] ?? null) : null))) ? (" active") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[print_start]\" value=\"";
                // line 1280
                echo $context["i"];
                echo "\" id=\"input-print_start-";
                echo $context["i"];
                echo "\" autocomplete=\"off\"";
                echo ((($context["i"] == (($__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b = ($context["novaposhta"] ?? null)) && is_array($__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b) || $__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b instanceof ArrayAccess ? ($__internal_ce4445a8e32fef1da30093bd6c3614f6829c4ab9fe79b1ef2ce54ee9e9c8140b["print_start"] ?? null) : null))) ? (" checked") : (""));
                echo ">";
                echo $context["i"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1283
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-vertical\" id=\"div-vertical-2\" data-toggle=\"buttons\">
                                            ";
            // line 1285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 1286
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default";
                echo ((($context["i"] == (($__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee = ($context["novaposhta"] ?? null)) && is_array($__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee) || $__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee instanceof ArrayAccess ? ($__internal_855c56057f38a150dfda2921516fec2df0048165ef18d66a04709f328e28bfee["print_start"] ?? null) : null))) ? (" active") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_novaposhta[print_start]\" value=\"";
                // line 1287
                echo $context["i"];
                echo "\" id=\"input-print_start-";
                echo $context["i"];
                echo "\" autocomplete=\"off\"";
                echo ((($context["i"] == (($__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346 = ($context["novaposhta"] ?? null)) && is_array($__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346) || $__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346 instanceof ArrayAccess ? ($__internal_2445eec35658789fc4b26b193fe24ffe662f4971964712f50ad973f1cf8de346["print_start"] ?? null) : null))) ? (" checked") : (""));
                echo ">";
                echo $context["i"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1290
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<legend>";
            // line 1293
            echo ($context["text_integration_with_orders"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"alert alert-info\" role=\"alert\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> ";
            // line 1294
            echo ($context["text_help_integration_with_orders"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-compatible_shipping_method\"><span data-toggle=\"tooltip\" title=\"";
            // line 1296
            echo ($context["help_compatible_shipping_method"] ?? null);
            echo "\">";
            echo ($context["entry_compatible_shipping_method"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                            ";
            // line 1299
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 1300
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[compatible_shipping_method][]\" value=\"";
                // line 1302
                echo $context["k"];
                echo "\"";
                echo ((twig_in_filter($context["k"], (($__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34 = ($context["novaposhta"] ?? null)) && is_array($__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34) || $__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34 instanceof ArrayAccess ? ($__internal_0909cb78373d32bb2fabb31111cf2b704907ff835998829ebb224041e6c45b34["compatible_shipping_method"] ?? null) : null))) ? (" checked") : (""));
                echo " /> ";
                echo $context["v"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1306
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286 = ($context["novaposhta"] ?? null)) && is_array($__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286) || $__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286 instanceof ArrayAccess ? ($__internal_7324cffb3c8118d48406359e46c8a03024b9a4e0374d69a30e574ed143e0a286["compatible_shipping_method"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                if (twig_test_iterable($context["v"])) {
                    // line 1307
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[compatible_shipping_method][]\" value=\"";
                    // line 1309
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1309);
                    echo "\"";
                    echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1309), (($__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b = ($context["novaposhta"] ?? null)) && is_array($__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b) || $__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b instanceof ArrayAccess ? ($__internal_0e88cee38cd4dd33afa15a9af89a57be3821eef8b1f069d021420ec8b90d555b["compatible_shipping_method"] ?? null) : null))) ? (" checked") : (""));
                    echo " /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 1309);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"\$(this).parents('div.checkbox').remove();\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[compatible_shipping_method][";
                    // line 1312
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1312);
                    echo "][code]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1312);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_novaposhta[compatible_shipping_method][";
                    // line 1313
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 1313);
                    echo "][name]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 1313);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1316
            echo "\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"tooltip\" title=\"";
            // line 1317
            echo ($context["button_add"] ?? null);
            echo "\" onclick=\"addCustomMethod('compatible_shipping_method');\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-consignment_create\"><span data-toggle=\"tooltip\" title=\"";
            // line 1322
            echo ($context["help_consignment_create"] ?? null);
            echo "\">";
            echo ($context["entry_consignment_create"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[consignment_create]\" id=\"input-consignment_create\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 1324
            echo (((($__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2 = ($context["novaposhta"] ?? null)) && is_array($__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2) || $__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2 instanceof ArrayAccess ? ($__internal_9311b0bde180a82210b06f25635a7208ea1d5b5b6b77bd4e3194d54f01e96ff2["consignment_create"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"input-consignment_create_text\">";
            // line 1326
            echo ($context["entry_menu_text"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                            ";
            // line 1329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1330
                echo "\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1330))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#consignment_create_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1330);
                echo "\" aria-controls=\"consignment_create_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1330);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2 = ($context["language_flag"] ?? null)) && is_array($__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2) || $__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2 instanceof ArrayAccess ? ($__internal_d11be295afc2b72b1e0005bf97c42f77091f6994382af9889c739d7eb8eedac2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1330)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1330);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1330);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1332
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                            ";
            // line 1334
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1335
                echo "\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1335))) ? (" active") : (""));
                echo "\" id=\"consignment_create_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1335);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[consignment_create_text][";
                // line 1336
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1336);
                echo "]\" value=\"";
                echo (($__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc = (($__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486 = ($context["novaposhta"] ?? null)) && is_array($__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486) || $__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486 instanceof ArrayAccess ? ($__internal_2fa754ce33b3fc2b993000194080ed2a5d1defe40824bf02c6b8e3f77167a486["consignment_create_text"] ?? null) : null)) && is_array($__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc) || $__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc instanceof ArrayAccess ? ($__internal_bfa1f53ee2f2601d162c93a9df6916db17382a8e7793ba748f02c5455bbbaafc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1336)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_menu_text"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1339
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-consignment_edit\"><span data-toggle=\"tooltip\" title=\"";
            // line 1343
            echo ($context["help_consignment_edit"] ?? null);
            echo "\">";
            echo ($context["entry_consignment_edit"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[consignment_edit]\" id=\"input-consignment_edit\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 1345
            echo (((($__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7 = ($context["novaposhta"] ?? null)) && is_array($__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7) || $__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7 instanceof ArrayAccess ? ($__internal_a4ee524baf6d8d90f1b72588380ceb54f4b719dfc64cdae40760fd2981879cd7["consignment_edit"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"input-consignment_edit_text\">";
            // line 1347
            echo ($context["entry_menu_text"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                            ";
            // line 1350
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1351
                echo "\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1351))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#consignment_edit_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1351);
                echo "\" aria-controls=\"consignment_edit_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1351);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212 = ($context["language_flag"] ?? null)) && is_array($__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212) || $__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212 instanceof ArrayAccess ? ($__internal_e0c5671aa0a0c8ec204164b7720186c5ec9bc96c4547eb9c4337fbedfd09d212[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1351)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1351);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1351);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1353
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                            ";
            // line 1355
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1356
                echo "\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1356))) ? (" active") : (""));
                echo "\" id=\"consignment_edit_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1356);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[consignment_edit_text][";
                // line 1357
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1357);
                echo "]\" value=\"";
                echo (($__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74 = (($__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826 = ($context["novaposhta"] ?? null)) && is_array($__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826) || $__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826 instanceof ArrayAccess ? ($__internal_bfe3abf533217dfbce2eda3f1570ed9f8f02e50cdf085b59040bc879c98c0826["consignment_edit_text"] ?? null) : null)) && is_array($__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74) || $__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74 instanceof ArrayAccess ? ($__internal_8b923871b8c08926feab47de799e8e61c70cd2a28eb34a7168d2fb40f555cd74[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1357)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_menu_text"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1360
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-consignment_delete\"><span data-toggle=\"tooltip\" title=\"";
            // line 1364
            echo ($context["help_consignment_delete"] ?? null);
            echo "\">";
            echo ($context["entry_consignment_delete"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[consignment_delete]\" id=\"input-consignment_delete\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 1366
            echo (((($__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f = ($context["novaposhta"] ?? null)) && is_array($__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f) || $__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f instanceof ArrayAccess ? ($__internal_7d5376b887d02a2b4d1ff71beb1397a58056e37181b4df0301e73c26225ee22f["consignment_delete"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"input-consignment_delete_text\">";
            // line 1368
            echo ($context["entry_menu_text"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                            ";
            // line 1371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1372
                echo "\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1372))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#consignment_delete_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1372);
                echo "\" aria-controls=\"consignment_delete_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1372);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0 = ($context["language_flag"] ?? null)) && is_array($__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0) || $__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0 instanceof ArrayAccess ? ($__internal_bbff41d3b1ab4bdf3cb5f2f62ece1c207f1d24687db89af55bfa91539c29c4a0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1372)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1372);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1372);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1374
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                            ";
            // line 1376
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1377
                echo "\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1377))) ? (" active") : (""));
                echo "\" id=\"consignment_delete_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1377);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[consignment_delete_text][";
                // line 1378
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1378);
                echo "]\" value=\"";
                echo (($__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa = (($__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d = ($context["novaposhta"] ?? null)) && is_array($__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d) || $__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d instanceof ArrayAccess ? ($__internal_375990494d428e65ee24b3a017d9fcf0d4cc766da156ac09dbe69a05868dba7d["consignment_delete_text"] ?? null) : null)) && is_array($__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa) || $__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa instanceof ArrayAccess ? ($__internal_3b2378b492d2efb4f7407fc14b7b7292ffe424fdc7d064f25796958b6bb408fa[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1378)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_menu_text"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1381
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-consignment_assignment_to_order\"><span data-toggle=\"tooltip\" title=\"";
            // line 1385
            echo ($context["help_consignment_assignment_to_order"] ?? null);
            echo "\">";
            echo ($context["entry_consignment_assignment_to_order"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[consignment_assignment_to_order]\" id=\"input-consignment_assignment_to_order\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-onstyle=\"success\" data-offstyle=\"danger\"";
            // line 1387
            echo (((($__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af = ($context["novaposhta"] ?? null)) && is_array($__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af) || $__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af instanceof ArrayAccess ? ($__internal_99fcf5862a89531d1ae1ec2acf9a28ff8d4de5b3b3fb67ad13a378c347ac36af["consignment_assignment_to_order"] ?? null) : null)) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"input-consignment_assignment_to_order_text\">";
            // line 1389
            echo ($context["entry_menu_text"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                            ";
            // line 1392
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1393
                echo "\t\t\t\t\t\t\t\t\t\t\t<li";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1393))) ? (" class=\"active\"") : (""));
                echo "><a href=\"#consignment_assignment_to_order_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1393);
                echo "\" aria-controls=\"consignment_assignment_to_order_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1393);
                echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                echo (($__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836 = ($context["language_flag"] ?? null)) && is_array($__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836) || $__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836 instanceof ArrayAccess ? ($__internal_73974dadd3d68b6c8d39d085eacda0edc1e3801b388ee97733918ad259fd7836[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1393)] ?? null) : null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1393);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1393);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1395
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                            ";
            // line 1397
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1398
                echo "\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1398))) ? (" active") : (""));
                echo "\" id=\"consignment_assignment_to_order_text_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1398);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[consignment_assignment_to_order_text][";
                // line 1399
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1399);
                echo "]\" value=\"";
                echo (($__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243 = (($__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b = ($context["novaposhta"] ?? null)) && is_array($__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b) || $__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b instanceof ArrayAccess ? ($__internal_4651f703e2134fbef38acafb09c6aa5fd50299d35aae16b42fd4eb298587187b["consignment_assignment_to_order_text"] ?? null) : null)) && is_array($__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243) || $__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243 instanceof ArrayAccess ? ($__internal_e015e935c762d1eb34d91617d7b9bf13fb05dbd6f79ee01962ee639ff8852243[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1399)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_menu_text"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1402
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-cron\">
\t\t\t\t\t\t\t\t<div class=\"alert alert-info\" role=\"alert\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> ";
            // line 1407
            echo ($context["text_help_cron"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key_cron\"><span data-toggle=\"tooltip\" title=\"";
            // line 1409
            echo ($context["help_key_cron"] ?? null);
            echo "\">";
            echo ($context["entry_key_cron"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_novaposhta[key_cron]\" value=\"";
            // line 1412
            echo (($__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737 = ($context["novaposhta"] ?? null)) && is_array($__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737) || $__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737 instanceof ArrayAccess ? ($__internal_fc2a652c3e40d967a0f22894f91a6bfb945804b9e12fadadc200e3c75c78d737["key_cron"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_key_cron"] ?? null);
            echo "\" id=\"input-key_cron\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"button-generate-cron-key\" onclick=\"generateKey();\" type=\"button\" class=\"btn btn-info\" data-toggle=\"tooltip\" title=\"";
            // line 1414
            echo ($context["button_generate"] ?? null);
            echo "\"><i class=\"fa fa-cog\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<legend>";
            // line 1419
            echo ($context["text_base_update"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cron_update_regions\">";
            // line 1421
            echo ($context["entry_region"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 1424
            echo ($context["cron_update_regions"] ?? null);
            echo "\"  id=\"input-cron_update_regions\" class=\"form-control\" readonly />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 1426
            echo ($context["button_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('input-cron_update_regions');\"><i class=\"fa fa-files-o\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cron_update_cities\">";
            // line 1432
            echo ($context["entry_city"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 1435
            echo ($context["cron_update_cities"] ?? null);
            echo "\"  id=\"input-cron_update_cities\" class=\"form-control\" readonly />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 1437
            echo ($context["button_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('input-cron_update_cities');\"><i class=\"fa fa-files-o\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cron_update_departments\">";
            // line 1443
            echo ($context["entry_department"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 1446
            echo ($context["cron_update_departments"] ?? null);
            echo "\"  id=\"input-cron_update_departments\" class=\"form-control\" readonly />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 1448
            echo ($context["button_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('input-cron_update_departments');\"><i class=\"fa fa-files-o\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cron_update_references\">";
            // line 1454
            echo ($context["entry_references"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 1457
            echo ($context["cron_update_references"] ?? null);
            echo "\"  id=\"input-cron_update_references\" class=\"form-control\" readonly />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 1459
            echo ($context["button_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('input-cron_update_references');\"><i class=\"fa fa-files-o\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<legend>";
            // line 1464
            echo ($context["text_departures_tracking"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cron_departures_tracking\">";
            // line 1466
            echo ($context["entry_departures_tracking"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 1469
            echo ($context["cron_departures_tracking"] ?? null);
            echo "\"  id=\"input-cron_departures_tracking\" class=\"form-control\" readonly />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 1471
            echo ($context["button_copy"] ?? null);
            echo "\" onclick=\"copyToClipboard('input-cron_departures_tracking');\"><i class=\"fa fa-files-o\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 1472
            echo ($context["cron_departures_tracking_href"] ?? null);
            echo "\" class=\"btn btn-default\" role=\"button\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_run"] ?? null);
            echo "\" target=\"_blank\"><i class=\"fa fa-terminal\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tracking_statuses\"><span data-toggle=\"tooltip\" title=\"";
            // line 1478
            echo ($context["help_tracking_statuses"] ?? null);
            echo "\">";
            echo ($context["entry_tracking_statuses"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[tracking_statuses][]\" id=\"input-tracking_statuses\" class=\"form-control selectpicker\" title=\"";
            // line 1480
            echo ($context["text_select"] ?? null);
            echo "\" data-actions-box=\"true\" multiple>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1481
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 1482
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 1482);
                echo "\"";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 1482), (($__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19 = ($context["novaposhta"] ?? null)) && is_array($__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19) || $__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19 instanceof ArrayAccess ? ($__internal_0c7cc0df46799d84d8971d3bc8a7cf2b59aabdcbb61487ef69c48ed8345ebb19["tracking_statuses"] ?? null) : null))) ? (" selected=\"selected\"") : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 1482);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1484
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default pull-right\" data-toggle=\"collapse\" href=\"#message-macros-collapse\" aria-expanded=\"false\" aria-controls=\"message-macros-collapse\" role=\"button\">";
            // line 1487
            echo ($context["text_message_template_macros"] ?? null);
            echo " <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<div id=\"message-macros-collapse\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1493
            echo ($context["text_cn_template_macros"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1496
            echo ($context["text_order_template_macros"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1499
            echo ($context["text_products_template_macros"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 1506
            echo ($context["text_settings_departures_statuses"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\" id=\"table-tracking_statuses\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" width=\"15%\">";
            // line 1512
            echo ($context["column_postal_company_status"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 1513
            echo ($context["column_store_status"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 1514
            echo ($context["column_implementation_delay"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 1515
            echo ($context["column_notification"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" width=\"40%\">";
            // line 1516
            echo ($context["column_message_template"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 1517
            echo ($context["column_action"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1521
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa = ($context["novaposhta"] ?? null)) && is_array($__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa) || $__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa instanceof ArrayAccess ? ($__internal_3bc0bda567b0fe27408a65898ca657043f360853758f94a696553cb5513e66aa["settings_tracking_statuses"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["settings"]) {
                // line 1522
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[settings_tracking_statuses][";
                // line 1524
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1524);
                echo "][shipment_statuses][]\" class=\"form-control selectpicker\" title=\"";
                echo ($context["text_select"] ?? null);
                echo "\" data-width=\"250px\" data-dropup-auto=\"false\" multiple>
                                                            ";
                // line 1525
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["document_statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["document_status"]) {
                    // line 1526
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["document_status"], "StatusId", [], "any", false, false, false, 1526);
                    echo "\"";
                    echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["document_status"], "StatusId", [], "any", false, false, false, 1526), twig_get_attribute($this->env, $this->source, $context["settings"], "shipment_statuses", [], "any", false, false, false, 1526))) ? (" selected=\"selected\"") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["document_status"], "Description", [], "any", false, false, false, 1526);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document_status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1528
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[settings_tracking_statuses][";
                // line 1531
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1531);
                echo "][store_status]\" class=\"form-control\">
                                                            ";
                // line 1532
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                    // line 1533
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 1533);
                    echo "\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 1533) == twig_get_attribute($this->env, $this->source, $context["settings"], "store_status", [], "any", false, false, false, 1533))) ? (" selected=\"selected\"") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 1533);
                    echo "</option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1535
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" style=\"width: 50%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_novaposhta[settings_tracking_statuses][";
                // line 1540
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1540);
                echo "][implementation_delay][type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1541
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["time"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 1542
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["k"];
                    echo "\"";
                    echo ((($context["k"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["settings"], "implementation_delay", [], "any", false, false, false, 1542), "type", [], "any", false, false, false, 1542))) ? (" selected=\"selected\"") : (""));
                    echo ">";
                    echo $context["v"];
                    echo "</option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1544
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span><input type=\"text\" name=\"shipping_novaposhta[settings_tracking_statuses][";
                // line 1545
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1545);
                echo "][implementation_delay][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["settings"], "implementation_delay", [], "any", false, false, false, 1545), "value", [], "any", false, false, false, 1545);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-8 control-label\">";
                // line 1550
                echo ($context["entry_admin_notification"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[settings_tracking_statuses][";
                // line 1552
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1552);
                echo "][admin_notification]\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["settings"], "admin_notification", [], "any", false, false, false, 1552)) ? (" checked") : (""));
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-8 control-label\">";
                // line 1556
                echo ($context["entry_customer_notification"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[settings_tracking_statuses][";
                // line 1558
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1558);
                echo "][customer_notification]\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["settings"], "customer_notification", [], "any", false, false, false, 1558)) ? (" checked") : (""));
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-8 control-label\">";
                // line 1562
                echo ($context["entry_customer_notification_default"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shipping_novaposhta[settings_tracking_statuses][";
                // line 1564
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 1564);
                echo "][customer_notification_default]\" data-on=\"<i class='fa fa-check'></i>\" data-off=\"<i class='fa fa-times'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["settings"], "customer_notification_default", [], "any", false, false, false, 1564)) ? (" checked") : (""));
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1570
                echo ($context["entry_email"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                                                    ";
                // line 1573
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1574
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                    echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1574))) ? (" class=\"active\"") : (""));
                    echo "><a href=\"#tracking_statuses_email_";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1574), "loop", [], "any", false, false, false, 1574), "index0", [], "any", false, false, false, 1574) . "_") . twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1574));
                    echo "\" aria-controls=\"tracking_statuses_email_";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1574), "loop", [], "any", false, false, false, 1574), "index0", [], "any", false, false, false, 1574) . "_") . twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1574));
                    echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                    echo (($__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377 = ($context["language_flag"] ?? null)) && is_array($__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377) || $__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377 instanceof ArrayAccess ? ($__internal_9d9bde674c6714579bd5b26b7408eba7b25dc7c4462cb78b6315697e13925377[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1574)] ?? null) : null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1574);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1574);
                    echo "</a></li>
                                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1576
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                                                    ";
                // line 1578
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1579
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                    echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1579))) ? (" active") : (""));
                    echo "\" id=\"tracking_statuses_email_";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1579), "loop", [], "any", false, false, false, 1579), "index0", [], "any", false, false, false, 1579) . "_") . twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1579));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"shipping_novaposhta[settings_tracking_statuses][";
                    // line 1580
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1580), "loop", [], "any", false, false, false, 1580), "index0", [], "any", false, false, false, 1580);
                    echo "][email][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1580);
                    echo "]\" placeholder=\"";
                    echo ($context["entry_email"] ?? null);
                    echo "\"class=\"form-control summernote\">";
                    echo (($__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e = (($__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef = (($__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328 = (($__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a = ($context["novaposhta"] ?? null)) && is_array($__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a) || $__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a instanceof ArrayAccess ? ($__internal_cca8ef3c14e6760ec165bc0bbacc7b3278d9e852ca239c6ceb1017a28896939a["settings_tracking_statuses"] ?? null) : null)) && is_array($__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328) || $__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328 instanceof ArrayAccess ? ($__internal_8c97554727f3eedb226478b75bfe9932f31c8ad874d5ad127b69c236abafe328[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1580), "loop", [], "any", false, false, false, 1580), "index0", [], "any", false, false, false, 1580)] ?? null) : null)) && is_array($__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef) || $__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef instanceof ArrayAccess ? ($__internal_29a57f21284aae1cbd0b348d5981ae180af68030b2215406388c355cb80003ef["email"] ?? null) : null)) && is_array($__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e) || $__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e instanceof ArrayAccess ? ($__internal_f472cfad152875f81a10f2f047584dcf30c09fe377f6ebc7d249b78b3d99528e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1580)] ?? null) : null);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1583
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1587
                echo ($context["entry_sms"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
                                                                    ";
                // line 1590
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1591
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                    echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1591))) ? (" class=\"active\"") : (""));
                    echo "><a href=\"#tracking_statuses_sms_";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1591), "loop", [], "any", false, false, false, 1591), "index0", [], "any", false, false, false, 1591) . "_") . twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1591));
                    echo "\" aria-controls=\"tracking_statuses_sms_";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1591), "loop", [], "any", false, false, false, 1591), "index0", [], "any", false, false, false, 1591) . "_") . twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1591));
                    echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
                    echo (($__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a = ($context["language_flag"] ?? null)) && is_array($__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a) || $__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a instanceof ArrayAccess ? ($__internal_7ffe925cc1bd4d9434b9827407094b01c6c37cc1ee5786b68df3d58a0a47d93a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1591)] ?? null) : null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1591);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1591);
                    echo "</a></li>
                                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1593
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1595
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1596
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
                    echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1596))) ? (" active") : (""));
                    echo "\" id=\"tracking_statuses_sms_";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1596), "loop", [], "any", false, false, false, 1596), "index0", [], "any", false, false, false, 1596) . "_") . twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1596));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"shipping_novaposhta[settings_tracking_statuses][";
                    // line 1597
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1597), "loop", [], "any", false, false, false, 1597), "index0", [], "any", false, false, false, 1597);
                    echo "][sms][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1597);
                    echo "]\" placeholder=\"";
                    echo ($context["entry_sms"] ?? null);
                    echo "\"class=\"form-control\">";
                    echo (($__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726 = (($__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060 = (($__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9 = (($__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb = ($context["novaposhta"] ?? null)) && is_array($__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb) || $__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb instanceof ArrayAccess ? ($__internal_20d10affd4f734cae45dc9e0ccacf8260669852088580b0d835c74fa569770fb["settings_tracking_statuses"] ?? null) : null)) && is_array($__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9) || $__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9 instanceof ArrayAccess ? ($__internal_217a9ae4d0c56d7d04bdb4b9be11be81633adea37ccba2b2a82f7cf0dc259cf9[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 1597), "loop", [], "any", false, false, false, 1597), "index0", [], "any", false, false, false, 1597)] ?? null) : null)) && is_array($__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060) || $__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060 instanceof ArrayAccess ? ($__internal_7e1ef3d325627655b0393080cb94373d51d27476ccb52680ea9318464336c060["sms"] ?? null) : null)) && is_array($__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726) || $__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726 instanceof ArrayAccess ? ($__internal_6b93b4ec9e6faf4cbd3d30c8d9316a2ed018d7912c2b64067c3318c79ae33726[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1597)] ?? null) : null);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1600
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"\$(this).parents('tr').remove()\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['settings'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1607
            echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"addTrackingStatus();\" data-toggle=\"modal\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        ";
        }
        // line 1619
        echo "\t\t\t\t\t\t\t<div class=\"tab-pane fade";
        echo (( !($context["license"] ?? null)) ? (" in active") : (""));
        echo "\" id=\"tab-support\">
\t\t\t\t\t\t\t\t";
        // line 1620
        echo ($context["support"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal of API verifying START -->
\t\t\t\t\t<div class=\"modal fade\" id=\"modal-verifying_api_access\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-verifying_api_access-label\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"modal-verifying_api_access-label\">";
        // line 1629
        echo ($context["heading_verifying_api_access"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"well\" id=\"verifying_api_access-log\"></div>
\t\t\t\t\t\t\t\t\t<p class=\"text-center\"><i class=\"fa fa-cog fa-spin fa-3x text-primary\" id=\"verifying_api_access-icon\"></i></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-check\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal of API verifying END -->
\t\t\t\t\t<!-- Modal of custom total START -->
\t\t\t\t\t<div class=\"modal fade\" id=\"modal-custom-method\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal-custom-method-label\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"modal-custom-method-label\">";
        // line 1648
        echo ($context["heading_adding_custom_method"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_method_type\" value=\"\" id=\"input-custom-method-type\" />
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-method-name\">";
        // line 1653
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_method_name\" value=\"\" placeholder=\"";
        // line 1655
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-custom-method-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-method-code\">";
        // line 1659
        echo ($context["entry_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_method_code\" value=\"\" placeholder=\"";
        // line 1661
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-custom-method-code\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"addCustomMethod('save');\"><i class=\"fa fa-check\"></i></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Modal of custom total END-->
        \t\t</form>
\t\t\t\t<form action=\"";
        // line 1674
        echo ($context["action_settings"] ?? null);
        echo "&type=import\" method=\"post\" enctype=\"multipart/form-data\" style=\"display: none;\">
\t\t\t\t\t<input type=\"file\" name=\"import\" accept=\"text/plain\" id=\"input-import-settings\" onchange=\"this.form.submit();\">
\t\t\t\t</form>
      \t\t</div>
    \t</div>
  \t</div>
</div>
<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-";
        // line 1687
        echo ($context["translations_code"] ?? null);
        echo ".min.js\"></script>
<script type=\"text/javascript\"><!--
    function save(type) {
        var post_data = \$('#form-novaposhta').serialize() + '&store_id=' + \$('#input-store_id').val();

        \$('div.toggle input[type=\"checkbox\"]:not(:checked)').each(function(i, el) {
            post_data += '&' + el.name + '='
        });

        if (type === 'exit') {
            post_data += '&exit'
        }

        \$.ajax({
            url: 'index.php?route=extension/shipping/novaposhta&user_token=";
        // line 1701
        echo ($context["user_token"] ?? null);
        echo "',
            type: 'POST',
            data: post_data,
            dataType: 'html',
            success: function (data, textStatus, jqXHR) {
                var \$data = \$(data);

                if (\$data.find('div.alert-danger').length) {
                    \$('.container-fluid:eq(2)').prepend(\$data.find('div.alert-danger'));
                } else {
                    if (type === 'exit') {
                        location.href = 'index.php?route=marketplace/extension&user_token=";
        // line 1712
        echo ($context["user_token"] ?? null);
        echo "&type=shipping';
                    }
                }

                if (\$data.find('div.text-danger').length) {
                    \$data.find('div.text-danger').each(function(i, el) {
                        var id = '#' + \$(el).parents('div[class^=\"col-sm\"]:first').find('input, select, textarea, radio').attr('id');

                        \$(id).parents('div[class^=\"col-sm\"]:first').append(el);
                        \$(id).parents('div.form-group').addClass('has-error');
                    });
                }

                if (\$data.find('div.alert-success').length) {
                    \$('.container-fluid:eq(2)').prepend(\$data.find('div.alert-success'));
                }
            }
        });
    }

    function settings(type) {
        if (!confirm('";
        // line 1733
        echo ($context["text_confirm"] ?? null);
        echo "')) {
            return false;
        }

        if (type == 'basic') {
            \$.ajax({
                url: 'index.php?route=extension/shipping/novaposhta/extensionSettings&user_token=";
        // line 1739
        echo ($context["user_token"] ?? null);
        echo "&type=' + type,
                type: 'GET',
                dataType: 'json',
                success: function (json) {
                    if (json['success']) {
                        \$('.container-fluid:eq(2)').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                        setTimeout(function() { location.reload(); }, 2000);
                    }

                    if(json['error']) {
                        \$('.container-fluid:eq(2)').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');
                }
            });
        } else if (type == 'export') {
            location.href = 'index.php?route=extension/shipping/novaposhta/extensionSettings&user_token=";
        // line 1757
        echo ($context["user_token"] ?? null);
        echo "&type=' + type;
        } else if (type == 'import') {
            \$('#input-import-settings').trigger('click');
        }
    }

    function formHandler(element) {
        switch (element.id) {
            case 'input-key_api':
                var key_api = element.value;

                \$('#modal-verifying_api_access').modal('show');

                \$('#verifying_api_access-icon').addClass('fa-spin');
                \$('#verifying_api_access-log').empty().append('<p>";
        // line 1771
        echo ($context["text_verifying_api_access"] ?? null);
        echo " <i class=\"fa fa-circle-o-notch fa-spin\"></i></p>');

            function action(act) {
                \$.ajax({
                    url: 'index.php?route=extension/shipping/novaposhta/verifyingAPIaccess&user_token=";
        // line 1775
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'POST',
                    data: 'action=' + act + '&key=' + key_api,
                    dataType: 'json',
                    beforeSend: function () {
                    },
                    complete: function () {
                    },
                    success: function(json) {
                        if (json['error']) {
                            \$('#verifying_api_access-log').find('i:last').replaceWith('<i class=\"fa fa-exclamation-circle text-danger\"></i>');
                            \$('#verifying_api_access-icon').removeClass('fa-spin');

                            for(var e in json['error']) {
                                \$('#verifying_api_access-log').append('<p class=\"text-danger\">' + json['error'][e] + '</p>');
                            }
                        }

                        if (json['next_action']) {
                            \$('#verifying_api_access-log').find('i').replaceWith('<i class=\"fa fa-check text-success\" aria-hidden=\"true\"></i>');
                            \$('#verifying_api_access-log').append('<p>' + json['next_action_text'] + ' <i class=\"fa fa-circle-o-notch fa-spin\"></i></p>');

                            if (json['next_action'] == 'saving') {
                                \$('#verifying_api_access-icon').removeClass('fa-spin');

                                if (json['recipient']) {
                                    \$('#input-recipient').val(json['recipient']);
                                }

                                save();

                                setTimeout(function() {
                                        \$('#modal-verifying_api_access').modal('hide');

                                        location.reload();
                                    },
                                    2000
                                );
                            } else {
                                action(json['next_action']);
                            }
                        }
                    }
                });
            }

                action('check');

                break;

            case 'input-department_cost':
            case 'input-doors_cost':
            case 'input-poshtomat_cost':
            case 'input-calculate_volume':
                if (\$(element).is(':checked')) {
                    \$(element).parent().parent().nextAll().fadeIn();
                } else {
                    \$(element).parent().parent().nextAll().fadeOut();
                }

                break;

            case 'input-sender':
                \$.ajax({
                    url: 'index.php?route=extension/shipping/novaposhta/getNPData&user_token=";
        // line 1839
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'POST',
                    data: 'action=getSenderContactPersons&filter=' + element.value,
                    dataType: 'json',
                    success: function (json) {
                        var
                            html = '<option value=\"\">";
        // line 1845
        echo ($context["text_select"] ?? null);
        echo "</option>',
                            checked = \"";
        // line 1846
        echo (($__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d = ($context["novaposhta"] ?? null)) && is_array($__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d) || $__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d instanceof ArrayAccess ? ($__internal_13084f80a8e81695d9e6891fcf4d7bda01cfb195a813650af9d450c43269112d["sender_contact_person"] ?? null) : null);
        echo "\";

                        for (var i in json) {
                            if (json[i]['Ref'] == checked) {
                                html += '<option value=\"' + json[i]['Ref'] + '\" selected=\"selected\">' + json[i]['Description'] + ', ' + json[i]['Phones'] + '</option>';
                            } else {
                                html += '<option value=\"' + json[i]['Ref'] + '\">' + json[i]['Description'] + ', ' + json[i]['Phones'] + '</option>';
                            }
                        }

                        \$('#input-sender_contact_person').html(html).selectpicker('refresh').trigger('change');
                    }
                });

                break;

            case 'input-sender_region':
                \$.ajax({
                    url: 'index.php?route=extension/shipping/novaposhta/getNPData&user_token=";
        // line 1864
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'POST',
                    data: 'action=getCities&filter=' + encodeURIComponent(element.value),
                    dataType: 'json',
                    success: function (json) {
                        if (json instanceof Array) {
                            var
                                html = '<option value=\"\">";
        // line 1871
        echo ($context["text_select"] ?? null);
        echo "</option>',
                                subtext,
                                option_s;

                            for(var i in json) {
                                if (!element.value) {
                                    subtext = ' data-subtext=\"' + json[i]['region_description'] + '\"';
                                } else {
                                    subtext = '';
                                }

                                if (json[i]['Ref'] == '";
        // line 1882
        echo (($__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b = ($context["novaposhta"] ?? null)) && is_array($__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b) || $__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b instanceof ArrayAccess ? ($__internal_89ac624973b379a13d56fb0ada7a037616c4bd76a5b341aecc93fa393cd76b6b["sender_city"] ?? null) : null);
        echo "') {
                                    option_s = ' selected=\"selected\"';
                                } else {
                                    option_s = '';
                                }

                                html += '<option value=\"' + json[i]['Ref'] + '\"' + subtext + option_s + '>' + json[i]['description'] + '</option>'
                            }

                            \$('#input-sender_city').html(html).selectpicker('refresh').trigger('change');
                        }
                    }
                });

                break;

            case 'input-sender_city':
                \$.ajax({
                    url: 'index.php?route=extension/shipping/novaposhta/getNPData&user_token=";
        // line 1900
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'POST',
                    data: 'action=getDepartments&filter=' + encodeURIComponent(element.value),
                    dataType: 'json',
                    success: function (json) {
                        if (json instanceof Array || json instanceof Object) {
                            var
                                option_s,
                                html = '<option value=\"\">";
        // line 1908
        echo ($context["text_select"] ?? null);
        echo "</option>';

                            for(var i in json) {
                                if (json[i]['Ref'] == '";
        // line 1911
        echo (($__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427 = ($context["novaposhta"] ?? null)) && is_array($__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427) || $__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427 instanceof ArrayAccess ? ($__internal_ceb88e81eadfb398b08ec8b3136fe29049d67e18b80aa5caf7cc6f70e8b3d427["sender_department"] ?? null) : null);
        echo "') {
                                    option_s = ' selected=\"selected\"';
                                } else {
                                    option_s = '';
                                }

                                html += '<option data-tokens=\"' + json[i]['Number'] + '\" value=\"' + json[i]['Ref'] + '\"' + option_s + '>' + json[i]['description'] + '</option>'
                            }

                            \$('#input-sender_department').html(html).selectpicker('refresh').trigger('change');
                        }
                    }
                });

                \$.ajax({
                    url: 'index.php?route=extension/shipping/novaposhta/getNPData&user_token=";
        // line 1926
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'POST',
                    data: 'action=getAddress&filter=' + encodeURIComponent(element.value) + '&sender=' + encodeURIComponent(\$('#input-sender').val()),
                    dataType: 'json',
                    success: function (json) {
                        if (json instanceof Array || json instanceof Object) {
                            var
                                option_s,
                                html = '<option value=\"\">";
        // line 1934
        echo ($context["text_select"] ?? null);
        echo "</option>';

                            for(var i in json) {
                                if (json[i]['Ref'] == '";
        // line 1937
        echo (($__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e = ($context["novaposhta"] ?? null)) && is_array($__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e) || $__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e instanceof ArrayAccess ? ($__internal_0b8e9d938c9d1ab90d0f17fc40c9e5cca7b804cb24bbc22618b3cb7a9c05d13e["sender_address"] ?? null) : null);
        echo "') {
                                    option_s = ' selected=\"selected\"';
                                } else {
                                    option_s = '';
                                }

                                html += '<option value=\"' + json[i]['Ref'] + '\"' + option_s + '>' + json[i]['description'] + '</option>'
                            }

                            \$('#input-sender_address').html(html).selectpicker('refresh').trigger('change');
                        }
                    }
                });

                break;

            case 'input-sender_address_pick_up':
                if (\$(element).is(':checked')) {
                    \$('label[for=\"input-sender_department\"]').parent().fadeOut();
                    \$('label[for=\"input-sender_address\"]').parent().fadeIn();
                    \$('#input-sender_address_type').val('Doors');
                } else {
                    \$('label[for=\"input-sender_department\"]').parent().fadeIn();
                    \$('label[for=\"input-sender_address\"]').parent().fadeOut();
                    \$('#input-sender_address_type').val('Warehouse');
                }

                break;

            case 'input-recipient_name':
                \$('#input-recipient').val('');

                break;

            case 'input-autodetection_departure_type':
                if (\$(element).is(':checked')) {
                    \$(element).parent().parent().nextAll().fadeOut();
                } else {
                    \$(element).parent().parent().nextAll().fadeIn();
                }

                break;

            case 'input-print_format':
            case 'input-template_type':
                var
                    print_format = \$('#input-print_format').val(),
                    template_type = \$('#input-template_type').val();

                if (print_format == 'mark_85_85' || print_format == 'mark_100_100') {
                    \$('#input-number_of_copies, #input-template_type').parents('div.form-group').fadeIn();

                    if (template_type == 'html') {
                        \$('#input-print_type, input[id^=\"input-print_start\"]').parents('div.form-group').fadeIn();
                    } else {
                        \$('#input-print_type, input[id^=\"input-print_start\"]').parents('div.form-group').fadeOut();
                    }
                } else if (print_format == 'registry') {
                    \$('#input-number_of_copies, #input-print_type, input[id^=\"input-print_start\"]').parents('div.form-group').fadeOut();
                } else {
                    \$('#input-number_of_copies, #input-template_type').parents('div.form-group').fadeIn();
                    \$('#input-print_type, input[id^=\"input-print_start\"]').parents('div.form-group').fadeOut();
                }

                break;

            case 'input-print_type':
                var
                    \$print_start_1 = \$('#div-vertical-1'),
                    \$print_start_2 = \$('#div-vertical-2')

                if (element.value == 'horPrint') {
                    \$print_start_1.find('label:odd').hide();
                    \$print_start_1.find('label:even').show();
                    \$print_start_2.find('label:odd').show();
                    \$print_start_2.find('label:even').hide();
                } else {
                    \$print_start_1.find('label:lt(3)').show();
                    \$print_start_1.find('label:gt(2)').hide();
                    \$print_start_2.find('label:lt(3)').hide();
                    \$print_start_2.find('label:gt(2)').show();
                }

                break;
        }
    }

    function update(type) {
        \$.ajax({
            url: 'index.php?route=extension/shipping/novaposhta/update&type=' + type + '&user_token=";
        // line 2026
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$('#button-update_' + type + ' > i').addClass('fa-spin');
            },
            complete: function () {
                var \$alerts = \$('.alert-danger, .alert-success');

                \$('#button-update_' + type + ' > i').removeClass('fa-spin');

                if (\$alerts.length !== 0) {
                    setTimeout(function() { \$alerts.fadeOut(); },5000);
                }
            },
            success: function (json) {
                if(json['success']) {
                    var diff = json['amount'] - \$('#td-' + type + '_amount').text();

                    \$('.container-fluid:eq(2)').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    if (diff > 0) {
                        \$('#td-' + type + '_amount').append(' <span class=\"label label-success\">+' + diff + '</span>');
                    } else if (diff < 0) {
                        \$('#td-' + type + '_amount').append(' <span class=\"label label-danger\">' + diff + '</span>');
                    }
                }

                if(json['error']) {
                    \$('.container-fluid:eq(2)').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                \$('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        });
    }

    function addCustomMethod(type) {
        if (type != 'save') {
            \$('#input-custom-method-type').val(type);
            \$('#modal-custom-method').modal('show');
        } else {
            var
                method_type = \$('#input-custom-method-type').val(),
                method_name = \$('#input-custom-method-name').val(),
                method_code = \$('#input-custom-method-code').val();

            \$('label[for=input-' + method_type + '] + div').find('br').before('<div class=\"checkbox\"><label><input type=\"hidden\" name=\"shipping_novaposhta[' + method_type + '][' + method_code + '][code]\" value=\"' + method_code + '\" /><input type=\"hidden\" name=\"shipping_novaposhta[' + method_type + '][' + method_code + '][name]\" value=\"' + method_name + '\" /><input type=\"checkbox\" name=\"shipping_novaposhta[' + method_type + '][]\" value=\"' + method_code + '\" /> ' + method_name + ' <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"\$(this).parents(\\'div.checkbox\\').remove();\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i></button></label></div>');
        }
    }

    function addTariff(tariff_name) {
        var
            count = \$('#table-tariffs-' + tariff_name + ' tbody tr').length + 1,
            row = '<tr>';

        if (tariff_name == 'cod') {
            row += '<td><select name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][delivery_type]\" class=\"form-control\">";
        // line 2082
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["delivery_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            echo "<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 2082);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["v"], "Description", [], "any", false, false, false, 2082);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></td>';
            row += '<td><select name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][calculation_base][]\" class=\"form-control selectpicker\" title=\"";
        // line 2083
        echo ($context["text_select"] ?? null);
        echo "\" multiple data-actions-box=\"true\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            echo "<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 2083);
            echo "\">";
            echo $context["v"];
            echo "</option>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][tariff_limit]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][percent]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][fixed_amount]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][minimum_payment]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td class=\"text-center\"><button type=\"button\" onclick=\"\$(this).parents(\\'tr\\').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        } else {
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][weight]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][department]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][city]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][region]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][Ukraine]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][overpay_doors_pickup]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td><input type=\"text\" name=\"shipping_novaposhta[tariffs][' + tariff_name + '][' + count + '][overpay_doors_delivery]\" value=\"\" class=\"form-control\" /></td>';
            row += '<td class=\"text-center\"><button type=\"button\" onclick=\"\$(this).parents(\\'tr\\').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        }

        row += '</tr>';

        \$('#table-tariffs-' + tariff_name + ' tbody').append(row);

        \$('#table-tariffs-' + tariff_name + ' tbody tr:last select.selectpicker').selectpicker('refresh');
    }

    function addTrackingStatus() {
        var
            count = \$('#table-tracking_statuses tbody tr').length,
            row = '<tr>';

        row += '<td><select name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][shipment_statuses][]\" class=\"form-control selectpicker\" title=\"";
        // line 2112
        echo ($context["text_select"] ?? null);
        echo "\" data-width=\"250px\" data-dropup-auto=\"false\" multiple>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["document_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["document_status"]) {
            echo "<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["document_status"], "StatusId", [], "any", false, false, false, 2112);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["document_status"], "Description", [], "any", false, false, false, 2112);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></td>';
        row += '<td><select name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][store_status]\" class=\"form-control\">";
        // line 2113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            echo "<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 2113);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 2113);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></td>';
        row += '<td><div class=\"input-group\"><span class=\"input-group-btn\" style=\"width: 50%;\"><select name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][implementation_delay][type]\" class=\"form-control\">";
        // line 2114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["time"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo "<option value=\"";
            echo $context["k"];
            echo "\">";
            echo $context["v"];
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></span><input type=\"text\" name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][implementation_delay][value]\" value=\"\" class=\"form-control\" /></div></td>';
        row += '<td><div class=\"row\"><label class=\"col-sm-8\">";
        // line 2115
        echo ($context["entry_admin_notification"] ?? null);
        echo "</label><div class=\"col-sm-4\"><input type=\"checkbox\" name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][admin_notification]\" data-on=\"<i class=\\'fa fa-check\\'></i>\" data-off=\"<i class=\\'fa fa-times\\'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"></div></div><hr><div class=\"form-group\"><label class=\"col-sm-8\">";
        echo ($context["entry_customer_notification"] ?? null);
        echo "</label><div class=\"col-sm-4\"><input type=\"checkbox\" name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][customer_notification]\" data-on=\"<i class=\\'fa fa-check\\'></i>\" data-off=\"<i class=\\'fa fa-times\\'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"></div></div><hr><div class=\"row\"><label class=\"col-sm-8\">";
        echo ($context["entry_customer_notification_default"] ?? null);
        echo "</label><div class=\"col-sm-4\"><input type=\"checkbox\" name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][customer_notification_default]\" data-on=\"<i class=\\'fa fa-check\\'></i>\" data-off=\"<i class=\\'fa fa-times\\'></i>\" data-toggle=\"toggle\" data-size=\"mini\" data-onstyle=\"success\" data-offstyle=\"danger\"></div></div></td>';
        row += '<td><div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
        // line 2116
        echo ($context["entry_email"] ?? null);
        echo "</label><div class=\"col-sm-10\"><ul class=\"nav nav-tabs\" role=\"tablist\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "<li";
            echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#tracking_statuses_email_' + count + '_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "\" aria-controls=\"tracking_statuses_email_' + count + '_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011 = ($context["language_flag"] ?? null)) && is_array($__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011) || $__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011 instanceof ArrayAccess ? ($__internal_4f64eb7f1ab073ffcb97b3e124d642a29b1a706922f81a5f059d44e1b30b8011[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116)] ?? null) : null);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2116);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2116);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </ul><div class=\"tab-content\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "<div role=\"tabpanel\" class=\"tab-pane";
            echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116))) ? (" active") : (""));
            echo "\" id=\"tracking_statuses_email_' + count + '_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "\"><textarea name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][email][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "]\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\" class=\"form-control summernote\"></textarea></div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div></div></div><div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
        echo ($context["entry_sms"] ?? null);
        echo "</label><div class=\"col-sm-10\"><ul class=\"nav nav-tabs\" role=\"tablist\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "<li";
            echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#tracking_statuses_sms_' + count + '_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "\" aria-controls=\"tracking_statuses_sms_' + count + '_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78 = ($context["language_flag"] ?? null)) && is_array($__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78) || $__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78 instanceof ArrayAccess ? ($__internal_d0e32b5bd48a81758193171cb84dc21fab5f634893014363dd7486dab96b8a78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116)] ?? null) : null);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2116);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2116);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </ul><div class=\"tab-content\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo "<div role=\"tabpanel\" class=\"tab-pane";
            echo (((($context["language_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116))) ? (" active") : (""));
            echo "\" id=\"tracking_statuses_sms_' + count + '_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "\"><textarea name=\"shipping_novaposhta[settings_tracking_statuses][' + count + '][sms][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2116);
            echo "]\" placeholder=\"";
            echo ($context["entry_sms"] ?? null);
            echo "\"class=\"form-control\"></textarea></div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div></div></div></td>';
        row += '<td class=\"text-center\"><button type=\"button\" onclick=\"\$(this).parents(\\'tr\\').remove();\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
        row += '</tr>';

        \$('#table-tracking_statuses tbody').append(row);

        \$('#table-tracking_statuses tbody tr:last select.selectpicker').selectpicker('refresh');
        \$('#table-tracking_statuses tbody tr:last input[type=\"checkbox\"]').bootstrapToggle();
        \$('#table-tracking_statuses tbody tr:last textarea.summernote').summernote();
    }

    function generateKey() {
        \$.ajax({
            url: 'index.php?route=extension/shipping/novaposhta/generateKey&user_token=";
        // line 2129
        echo ($context["user_token"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$('#button-generate-cron-key > i').addClass('fa-spin');
            },
            complete: function () {
                \$('#button-generate-cron-key > i').removeClass('fa-spin');
            },
            success: function (json) {
                if (json['code']) {
                    \$('#input-key_cron').val(json['code'])
                }
            }
        });
    }

    function copyToClipboard(container_id) {
        window.getSelection().removeAllRanges();

        if (document.selection) {
            var
                range = document.body.createTextRange(),
                el = document.getElementById(container_id);

            range.moveToElementText(el);
            range.select().createTextRange();
            document.execCommand('Copy');
        } else if (window.getSelection) {
            var
                range = document.createRange(),
                el = document.getElementById(container_id);

            range.selectNode(el);
            window.getSelection().addRange(range);
            document.execCommand('Copy');
        }
    }

    \$(function() {
        \$('.selectpicker').selectpicker({
            liveSearchStyle: 'startsWith',
            iconBase: 'fa',
            tickIcon: 'fa-check'
        });

        \$('.summernote').summernote();

        \$.ajaxSetup({
            beforeSend: function () {
                \$('body').fadeTo('fast', 0.7).prepend('<div id=\"ocmax-loader\" style=\"position: fixed; top: 50%;\tleft: 50%; z-index: 9999;\"><i class=\"fa fa-spinner fa-spin fa-3x fa-fw\"></i></div>');
            },
            complete: function () {
                var \$alerts = \$('.alert-danger, .alert-success');

                if (\$alerts.length !== 0) {
                    setTimeout(function() { \$alerts.fadeOut(); }, 5000);
                }

                \$('body').fadeTo('fast', 1);
                \$('#ocmax-loader').remove();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });


        \$('#input-department_cost, #input-doors_cost, #input-poshtomat_cost, #input-sender_region, input[id^=\"input-sender_address_pick_up\"]:checked, #input-autodetection_departure_type, #input-calculate_volume, #input-print_format, #input-print_type').each(function() {
            formHandler(this);
        });

        \$('input, select, textarea').on('change', function(e) {
            formHandler(e.currentTarget);
        });

        \$('#div-vertical-1, #div-vertical-2').on('click', function (e) {
            \$('#div-vertical-1, #div-vertical-2').not('#' + e.currentTarget.id).find('label').removeClass('active').find('input').removeAttr('checked');
        });

        /* Recipient */
        \$('#input-recipient_name').autocomplete({
            source: function(request, response) {
                \$.ajax({
                    url: 'index.php?route=extension/shipping/novaposhta/autocomplete&user_token=";
        // line 2212
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'POST',
                    data: 'recipient_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function(json) {
                        response(\$.map(json, function(item) {
                            return {
                                label: item['FullDescription'],
                                value: item['Description'],
                                ref: item['Ref']
                            }
                        }));
                    }
                });
            },
            select: function(item) {
                \$(this).val(item['value']);
                \$(this).siblings('input[type=\"hidden\"]').val(item['ref']);
            }
        });

        /* Departure description */
        \$('#input-departure_description').autocomplete({
            source: function(request, response) {
                \$.ajax({
                    url: 'index.php?route=extension/shipping/novaposhta/autocomplete&user_token=";
        // line 2237
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'POST',
                    data: 'departure_description=' + encodeURIComponent(request),
                    dataType: 'json',
                    beforeSend: function () {
                    },
                    complete: function () {
                    },
                    success: function(json) {
                        response(\$.map(json, function(item) {
                            return {
                                label: item['Description'],
                                value: item['Description'],
                            }
                        }));
                    }
                });
            },
            select: function(item) {
                \$(this).val(item['value']);
            }
        });
    });
//--></script>
";
        // line 2261
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/novaposhta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5665 => 2261,  5638 => 2237,  5610 => 2212,  5524 => 2129,  5430 => 2116,  5422 => 2115,  5407 => 2114,  5392 => 2113,  5375 => 2112,  5309 => 2083,  5294 => 2082,  5235 => 2026,  5143 => 1937,  5137 => 1934,  5126 => 1926,  5108 => 1911,  5102 => 1908,  5091 => 1900,  5070 => 1882,  5056 => 1871,  5046 => 1864,  5025 => 1846,  5021 => 1845,  5012 => 1839,  4945 => 1775,  4938 => 1771,  4921 => 1757,  4900 => 1739,  4891 => 1733,  4867 => 1712,  4853 => 1701,  4836 => 1687,  4820 => 1674,  4804 => 1661,  4799 => 1659,  4792 => 1655,  4787 => 1653,  4779 => 1648,  4757 => 1629,  4745 => 1620,  4740 => 1619,  4726 => 1607,  4706 => 1600,  4683 => 1597,  4676 => 1596,  4659 => 1595,  4655 => 1593,  4628 => 1591,  4611 => 1590,  4605 => 1587,  4599 => 1583,  4576 => 1580,  4569 => 1579,  4552 => 1578,  4548 => 1576,  4521 => 1574,  4504 => 1573,  4498 => 1570,  4487 => 1564,  4482 => 1562,  4473 => 1558,  4468 => 1556,  4459 => 1552,  4454 => 1550,  4444 => 1545,  4441 => 1544,  4428 => 1542,  4424 => 1541,  4420 => 1540,  4413 => 1535,  4400 => 1533,  4396 => 1532,  4392 => 1531,  4387 => 1528,  4374 => 1526,  4370 => 1525,  4364 => 1524,  4360 => 1522,  4343 => 1521,  4336 => 1517,  4332 => 1516,  4328 => 1515,  4324 => 1514,  4320 => 1513,  4316 => 1512,  4307 => 1506,  4297 => 1499,  4291 => 1496,  4285 => 1493,  4276 => 1487,  4271 => 1484,  4258 => 1482,  4254 => 1481,  4250 => 1480,  4243 => 1478,  4232 => 1472,  4228 => 1471,  4223 => 1469,  4217 => 1466,  4212 => 1464,  4204 => 1459,  4199 => 1457,  4193 => 1454,  4184 => 1448,  4179 => 1446,  4173 => 1443,  4164 => 1437,  4159 => 1435,  4153 => 1432,  4144 => 1426,  4139 => 1424,  4133 => 1421,  4128 => 1419,  4120 => 1414,  4113 => 1412,  4105 => 1409,  4100 => 1407,  4093 => 1402,  4080 => 1399,  4073 => 1398,  4069 => 1397,  4065 => 1395,  4046 => 1393,  4042 => 1392,  4036 => 1389,  4031 => 1387,  4024 => 1385,  4018 => 1381,  4005 => 1378,  3998 => 1377,  3994 => 1376,  3990 => 1374,  3971 => 1372,  3967 => 1371,  3961 => 1368,  3956 => 1366,  3949 => 1364,  3943 => 1360,  3930 => 1357,  3923 => 1356,  3919 => 1355,  3915 => 1353,  3896 => 1351,  3892 => 1350,  3886 => 1347,  3881 => 1345,  3874 => 1343,  3868 => 1339,  3855 => 1336,  3848 => 1335,  3844 => 1334,  3840 => 1332,  3821 => 1330,  3817 => 1329,  3811 => 1326,  3806 => 1324,  3799 => 1322,  3791 => 1317,  3788 => 1316,  3776 => 1313,  3770 => 1312,  3760 => 1309,  3756 => 1307,  3750 => 1306,  3736 => 1302,  3732 => 1300,  3728 => 1299,  3720 => 1296,  3715 => 1294,  3711 => 1293,  3706 => 1290,  3691 => 1287,  3686 => 1286,  3682 => 1285,  3678 => 1283,  3663 => 1280,  3658 => 1279,  3654 => 1278,  3646 => 1275,  3640 => 1271,  3627 => 1269,  3623 => 1268,  3615 => 1265,  3609 => 1261,  3596 => 1259,  3592 => 1258,  3584 => 1255,  3575 => 1251,  3568 => 1249,  3562 => 1245,  3549 => 1243,  3545 => 1242,  3537 => 1239,  3532 => 1237,  3527 => 1234,  3514 => 1232,  3510 => 1231,  3506 => 1230,  3499 => 1228,  3492 => 1224,  3485 => 1222,  3480 => 1220,  3471 => 1214,  3468 => 1213,  3456 => 1210,  3450 => 1209,  3440 => 1206,  3436 => 1204,  3430 => 1203,  3416 => 1199,  3412 => 1197,  3408 => 1196,  3400 => 1193,  3394 => 1189,  3388 => 1188,  3378 => 1185,  3375 => 1184,  3365 => 1181,  3362 => 1180,  3359 => 1179,  3355 => 1178,  3347 => 1175,  3341 => 1171,  3328 => 1169,  3324 => 1168,  3318 => 1167,  3314 => 1166,  3306 => 1163,  3300 => 1159,  3294 => 1156,  3288 => 1153,  3285 => 1152,  3279 => 1149,  3273 => 1146,  3270 => 1145,  3268 => 1144,  3260 => 1141,  3254 => 1137,  3248 => 1136,  3238 => 1133,  3235 => 1132,  3225 => 1129,  3222 => 1128,  3219 => 1127,  3215 => 1126,  3207 => 1123,  3199 => 1118,  3196 => 1117,  3184 => 1114,  3178 => 1113,  3168 => 1110,  3164 => 1108,  3158 => 1107,  3144 => 1103,  3140 => 1101,  3136 => 1100,  3128 => 1097,  3122 => 1093,  3116 => 1092,  3106 => 1089,  3103 => 1088,  3093 => 1085,  3090 => 1084,  3087 => 1083,  3083 => 1082,  3075 => 1079,  3069 => 1075,  3056 => 1073,  3052 => 1072,  3048 => 1071,  3040 => 1068,  3034 => 1064,  3028 => 1063,  3018 => 1060,  3015 => 1059,  3005 => 1056,  3002 => 1055,  2999 => 1054,  2995 => 1053,  2987 => 1050,  2978 => 1044,  2971 => 1042,  2965 => 1038,  2952 => 1036,  2948 => 1035,  2944 => 1034,  2937 => 1032,  2930 => 1028,  2923 => 1026,  2918 => 1024,  2911 => 1020,  2907 => 1019,  2899 => 1014,  2895 => 1013,  2887 => 1008,  2883 => 1007,  2875 => 1004,  2867 => 999,  2863 => 998,  2855 => 993,  2851 => 992,  2843 => 987,  2839 => 986,  2831 => 983,  2823 => 978,  2819 => 977,  2811 => 974,  2805 => 970,  2799 => 969,  2789 => 966,  2786 => 965,  2776 => 962,  2773 => 961,  2770 => 960,  2766 => 959,  2758 => 956,  2753 => 954,  2747 => 951,  2740 => 949,  2733 => 945,  2726 => 943,  2719 => 939,  2712 => 937,  2705 => 933,  2698 => 931,  2691 => 929,  2684 => 927,  2675 => 921,  2669 => 918,  2660 => 912,  2652 => 907,  2646 => 906,  2638 => 903,  2632 => 900,  2629 => 899,  2617 => 896,  2611 => 895,  2601 => 892,  2597 => 890,  2591 => 889,  2577 => 885,  2573 => 883,  2569 => 882,  2561 => 879,  2553 => 874,  2547 => 873,  2539 => 870,  2533 => 866,  2527 => 865,  2517 => 862,  2514 => 861,  2504 => 858,  2501 => 857,  2498 => 856,  2494 => 855,  2486 => 852,  2481 => 850,  2474 => 848,  2468 => 844,  2455 => 842,  2451 => 841,  2443 => 838,  2438 => 836,  2431 => 834,  2420 => 828,  2413 => 826,  2404 => 822,  2397 => 820,  2388 => 816,  2381 => 814,  2372 => 810,  2365 => 808,  2356 => 804,  2349 => 802,  2340 => 798,  2333 => 796,  2324 => 792,  2317 => 790,  2308 => 786,  2301 => 784,  2292 => 780,  2285 => 778,  2276 => 774,  2269 => 772,  2260 => 768,  2253 => 766,  2244 => 762,  2237 => 760,  2230 => 756,  2224 => 755,  2217 => 753,  2208 => 747,  2204 => 746,  2197 => 744,  2186 => 738,  2175 => 732,  2164 => 726,  2158 => 722,  2145 => 720,  2141 => 719,  2137 => 718,  2129 => 715,  2123 => 711,  2110 => 709,  2106 => 708,  2102 => 707,  2094 => 704,  2088 => 700,  2074 => 698,  2070 => 697,  2066 => 696,  2058 => 693,  2046 => 684,  2041 => 682,  2035 => 679,  2028 => 675,  2023 => 673,  2017 => 670,  2010 => 666,  2005 => 664,  2001 => 663,  1997 => 662,  1993 => 661,  1986 => 657,  1981 => 655,  1977 => 654,  1973 => 653,  1969 => 652,  1962 => 648,  1957 => 646,  1953 => 645,  1949 => 644,  1945 => 643,  1938 => 639,  1933 => 637,  1929 => 636,  1925 => 635,  1921 => 634,  1913 => 629,  1909 => 628,  1905 => 627,  1901 => 626,  1897 => 625,  1879 => 609,  1863 => 605,  1857 => 604,  1851 => 603,  1845 => 602,  1841 => 600,  1828 => 598,  1824 => 597,  1818 => 596,  1813 => 593,  1800 => 591,  1796 => 590,  1792 => 589,  1788 => 587,  1777 => 586,  1770 => 582,  1766 => 581,  1762 => 580,  1758 => 579,  1754 => 578,  1750 => 577,  1746 => 576,  1737 => 570,  1727 => 563,  1721 => 562,  1713 => 559,  1707 => 556,  1701 => 555,  1693 => 552,  1687 => 549,  1681 => 548,  1673 => 545,  1665 => 540,  1659 => 539,  1651 => 536,  1638 => 525,  1622 => 521,  1616 => 520,  1610 => 519,  1604 => 518,  1598 => 517,  1592 => 516,  1586 => 515,  1583 => 514,  1572 => 513,  1563 => 509,  1557 => 508,  1551 => 507,  1545 => 506,  1539 => 503,  1535 => 502,  1531 => 501,  1527 => 500,  1523 => 499,  1519 => 498,  1513 => 495,  1509 => 494,  1505 => 493,  1501 => 492,  1492 => 486,  1480 => 477,  1473 => 475,  1466 => 471,  1459 => 469,  1454 => 467,  1447 => 465,  1442 => 463,  1435 => 461,  1429 => 457,  1414 => 454,  1407 => 453,  1403 => 452,  1399 => 450,  1380 => 448,  1376 => 447,  1368 => 444,  1362 => 441,  1356 => 440,  1348 => 437,  1340 => 432,  1334 => 431,  1326 => 428,  1320 => 425,  1314 => 424,  1306 => 421,  1300 => 417,  1287 => 415,  1283 => 414,  1279 => 413,  1271 => 410,  1265 => 406,  1252 => 404,  1248 => 403,  1244 => 402,  1236 => 399,  1230 => 395,  1215 => 392,  1208 => 391,  1204 => 390,  1200 => 388,  1181 => 386,  1177 => 385,  1169 => 382,  1162 => 378,  1155 => 376,  1146 => 370,  1139 => 368,  1132 => 364,  1125 => 362,  1120 => 360,  1113 => 358,  1108 => 356,  1101 => 354,  1095 => 350,  1080 => 347,  1073 => 346,  1069 => 345,  1065 => 343,  1046 => 341,  1042 => 340,  1034 => 337,  1028 => 334,  1022 => 333,  1014 => 330,  1006 => 325,  1000 => 324,  992 => 321,  986 => 318,  980 => 317,  972 => 314,  966 => 310,  953 => 308,  949 => 307,  945 => 306,  937 => 303,  931 => 299,  918 => 297,  914 => 296,  910 => 295,  902 => 292,  896 => 288,  881 => 285,  874 => 284,  870 => 283,  866 => 281,  847 => 279,  843 => 278,  835 => 275,  828 => 271,  821 => 269,  813 => 263,  800 => 261,  796 => 260,  792 => 259,  785 => 257,  779 => 253,  766 => 251,  762 => 250,  758 => 249,  751 => 247,  744 => 243,  737 => 241,  730 => 237,  723 => 235,  716 => 231,  709 => 229,  704 => 227,  697 => 225,  692 => 223,  685 => 221,  679 => 217,  664 => 214,  657 => 213,  653 => 212,  649 => 210,  630 => 208,  626 => 207,  618 => 204,  612 => 201,  606 => 200,  598 => 197,  590 => 192,  584 => 191,  576 => 188,  570 => 185,  564 => 184,  556 => 181,  550 => 177,  537 => 175,  533 => 174,  529 => 173,  521 => 170,  515 => 166,  502 => 164,  498 => 163,  494 => 162,  486 => 159,  480 => 155,  465 => 152,  458 => 151,  454 => 150,  450 => 148,  431 => 146,  427 => 145,  419 => 142,  412 => 138,  405 => 136,  394 => 130,  387 => 128,  380 => 126,  373 => 124,  367 => 120,  354 => 118,  350 => 117,  346 => 116,  338 => 113,  333 => 111,  327 => 110,  320 => 108,  315 => 105,  309 => 103,  307 => 102,  301 => 101,  294 => 99,  285 => 95,  278 => 93,  271 => 89,  264 => 87,  257 => 83,  250 => 81,  240 => 74,  236 => 73,  232 => 72,  228 => 71,  221 => 68,  219 => 67,  215 => 65,  210 => 63,  206 => 62,  202 => 61,  198 => 60,  194 => 59,  190 => 58,  186 => 57,  182 => 56,  175 => 55,  173 => 54,  168 => 52,  163 => 49,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  134 => 42,  128 => 39,  125 => 38,  122 => 37,  116 => 34,  113 => 33,  111 => 32,  101 => 27,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  74 => 15,  66 => 12,  62 => 10,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/novaposhta.twig", "");
    }
}
