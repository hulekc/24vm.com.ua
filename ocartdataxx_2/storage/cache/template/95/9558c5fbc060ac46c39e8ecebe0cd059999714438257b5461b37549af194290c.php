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

/* extension/module/uni_seo_pro.twig */
class __TwigTemplate_99428134e09f6bc37e4697ada26547c0e74f6ac784f226dc9e88f71761f87846 extends \Twig\Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
\t    <a id=\"clear-cache\" href=\"";
        // line 6
        echo ($context["button_clear_cache"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["text_clear_cache"] ?? null);
        echo "</a>
        <button type=\"submit\" form=\"form-seo_pro\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["success"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-success autoSlideUp\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seo_pro\" class=\"form-horizontal\">
\t\t
\t
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-help\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
          </ul>
\t\t  
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t<ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-settings-1\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_settings_1"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-settings-2\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_settings_2"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-settings-3\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_settings_3"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-settings-4\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_settings_4"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-settings-5\" data-toggle=\"tab\">";
        // line 48
        echo ($context["tab_settings_5"] ?? null);
        echo "</a></li>
          </ul>
\t\t\t
\t\t\t<div class=\"tab-content\">
\t\t <div class=\"tab-pane active\" id=\"tab-settings-1\"> 

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"   title=\"";
        // line 55
        echo ($context["entry_seo_url_help"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 58
        if (($context["config_seo_url"] ?? null)) {
            echo " 
                    <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                    ";
            // line 60
            echo ($context["text_yes"] ?? null);
            echo " 
                    ";
        } else {
            // line 61
            echo " 
                    <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                    ";
            // line 63
            echo ($context["text_yes"] ?? null);
            echo " 
                    ";
        }
        // line 64
        echo " 
                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 67
        if ( !($context["config_seo_url"] ?? null)) {
            echo " 
                    <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                    ";
            // line 69
            echo ($context["text_no"] ?? null);
            echo " 
                    ";
        } else {
            // line 70
            echo " 
                    <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                    ";
            // line 72
            echo ($context["text_no"] ?? null);
            echo " 
                    ";
        }
        // line 73
        echo " 
                  </label>
                  <div class=\"col-sm-12\">
                  ";
        // line 76
        if ( !($context["htaccess"] ?? null)) {
            // line 77
            echo "                  <span style=\"color:red; display:none\" id=\"config_seo_url\">";
            echo ($context["help_seo_url"] ?? null);
            echo "</span>
                  ";
        }
        // line 79
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 83
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                <select name=\"module_uni_seo_pro_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 86
        if (($context["module_uni_seo_pro_status"] ?? null)) {
            echo " 
                  <option value=\"1\" selected=\"selected\">";
            // line 87
            echo ($context["text_enabled_seo_pro"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 88
            echo ($context["text_disabled_seo_pro"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 89
            echo " 
                  <option value=\"1\">";
            // line 90
            echo ($context["text_enabled_seo_pro"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 91
            echo ($context["text_disabled_seo_pro"] ?? null);
            echo "</option>
                  ";
        }
        // line 92
        echo " 
                </select>
              </div>
              </div>
  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"module_uni_seo_pro_postfix\"><span data-toggle=\"tooltip\"
                  title=\"";
        // line 99
        echo ($context["entry_module_uni_seo_pro_postfix_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_postfix"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_uni_seo_pro_postfix\" value=\"";
        // line 101
        echo ($context["module_uni_seo_pro_postfix"] ?? null);
        echo "\" id=\"module_uni_seo_pro_postfix\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 106
        echo ($context["entry_allow_utm"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      ";
        // line 109
        if (($context["module_uni_seo_pro_allow_utm"] ?? null)) {
            // line 110
            echo "                                <input type=\"checkbox\" name=\"module_uni_seo_pro_allow_utm\" value=\"1\" checked=\"checked\" class=\"form-control\"/>
                      ";
        } else {
            // line 112
            echo "                                <input type=\"checkbox\" name=\"module_uni_seo_pro_allow_utm\" value=\"1\" class=\"form-control\" />
                      ";
        }
        // line 114
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\" id=\"allow_utm\">
                  <label class=\"col-sm-2 control-label\" for=\"input-utm\"><span data-toggle=\"tooltip\" title=\"";
        // line 118
        echo ($context["help_utm"] ?? null);
        echo "\">";
        echo ($context["entry_utm"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_uni_seo_pro_utm\" rows=\"10\" placeholder=\"";
        // line 120
        echo ($context["entry_utm"] ?? null);
        echo "\" id=\"input-utm\" class=\"form-control\">";
        echo ($context["module_uni_seo_pro_utm"] ?? null);
        echo "</textarea>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 125
        echo ($context["entry_use_lang_prefix"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      ";
        // line 128
        if (($context["module_uni_seo_pro_use_lang_prefix"] ?? null)) {
            // line 129
            echo "                      <input type=\"checkbox\" name=\"module_uni_seo_pro_use_lang_prefix\" value=\"1\" checked=\"checked\" class=\"form-control\"/>
                      ";
        } else {
            // line 131
            echo "                      <input type=\"checkbox\" name=\"module_uni_seo_pro_use_lang_prefix\" value=\"1\" class=\"form-control\" />
                      ";
        }
        // line 133
        echo "                    </div>
                  </div>
                </div>
                <div id=\"use_lang_prefix\">

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 139
        echo ($context["help_use_lang_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_lang_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
\t\t\t\t  ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 142
            echo "                    <div class=\"input-group\">
                      <span class=\"input-group-addon\"><img src=\"language/";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 143);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 143);
            echo ".png\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 143);
            echo "\" /></span>
                      <input name=\"module_uni_seo_pro_lang_prefix[";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
            echo "]\" class=\"form-control\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["module_uni_seo_pro_lang_prefix"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144), [], "array", true, true, false, 144)) ? ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_uni_seo_pro_lang_prefix"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 144)));
            echo "\" />
\t\t\t\t\t  ";
            // line 145
            if ((array_key_exists("module_uni_seo_pro_use_lang_prefix_main", $context) && (($context["module_uni_seo_pro_use_lang_prefix_main"] ?? null) == twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145)))) {
                // line 146
                echo "                      <span class=\"input-group-addon\"><input value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
                echo "\" name=\"module_uni_seo_pro_use_lang_prefix_main\" type=\"radio\" aria-label=\"\" checked=\"checked\"></span>
\t\t\t\t\t  ";
            } else {
                // line 148
                echo "                      <span class=\"input-group-addon\"><input value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
                echo "\" name=\"module_uni_seo_pro_use_lang_prefix_main\" type=\"radio\" aria-label=\"\"></span>
\t\t\t\t\t  ";
            }
            // line 150
            echo "\t\t\t\t    </div>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                  </div>
                </div>
                </div>\t 
            </div>
\t\t\t

\t\t<div class=\"tab-pane\" id=\"tab-settings-2\">
\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"   title=\"";
        // line 160
        echo ($context["entry_module_uni_seo_pro_include_path_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_include_path"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                ";
        // line 162
        if (($context["module_uni_seo_pro_include_path"] ?? null)) {
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_include_path\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 165
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_include_path\" value=\"0\"/>
                  ";
            // line 169
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        } else {
            // line 171
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_include_path\" value=\"1\"/>
                  ";
            // line 174
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_include_path\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 178
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        }
        // line 180
        echo " 
                </div>
              </div>
\t\t\t  
\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"   title=\"";
        // line 185
        echo ($context["entry_module_uni_seo_pro_postfix_slash_product_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_postfix_slash_product"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                ";
        // line 187
        if (($context["module_uni_seo_pro_postfix_slash_product"] ?? null)) {
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash_product\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 190
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash_product\" value=\"0\"/>
                  ";
            // line 194
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        } else {
            // line 196
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash_product\" value=\"1\"/>
                  ";
            // line 199
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash_product\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 203
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        }
        // line 205
        echo " 
                </div>
              </div>

\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"module_uni_seo_pro_prefix_product\"><span data-toggle=\"tooltip\"
                  title=\"";
        // line 211
        echo ($context["entry_module_uni_seo_pro_prefix_product_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_prefix_product"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_uni_seo_pro_prefix_product\" value=\"";
        // line 213
        echo ($context["module_uni_seo_pro_prefix_product"] ?? null);
        echo "\" id=\"module_uni_seo_pro_prefix_product\" class=\"form-control\"/>
                </div>
              </div>
            </div>

\t\t\t
\t\t<div class=\"tab-pane\" id=\"tab-settings-3\">
\t\t <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"   title=\"";
        // line 221
        echo ($context["entry_module_uni_seo_pro_short_url_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_short_url"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                ";
        // line 223
        if (($context["module_uni_seo_pro_short_url"] ?? null)) {
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_short_url\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 226
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_short_url\" value=\"0\"/>
                  ";
            // line 230
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        } else {
            // line 232
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_short_url\" value=\"1\"/>
                  ";
            // line 235
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_short_url\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 239
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        }
        // line 241
        echo " 
                </div>
              </div>
\t\t\t  
\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"   title=\"";
        // line 246
        echo ($context["entry_module_uni_seo_pro_postfix_slash_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_postfix_slash"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                ";
        // line 248
        if (($context["module_uni_seo_pro_postfix_slash"] ?? null)) {
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 251
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash\" value=\"0\"/>
                  ";
            // line 255
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        } else {
            // line 257
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash\" value=\"1\"/>
                  ";
            // line 260
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_postfix_slash\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 264
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        }
        // line 266
        echo " 
                </div>
              </div>
\t\t\t  
\t\t
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"module_uni_seo_pro_prefix_category\"><span data-toggle=\"tooltip\"
                  title=\"";
        // line 273
        echo ($context["entry_module_uni_seo_pro_prefix_category_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_prefix_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_uni_seo_pro_prefix_category\" value=\"";
        // line 275
        echo ($context["module_uni_seo_pro_prefix_category"] ?? null);
        echo "\" id=\"module_uni_seo_pro_prefix_category\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"   title=\"";
        // line 280
        echo ($context["entry_module_uni_seo_pro_seo_page_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_seo_page"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                ";
        // line 282
        if (($context["module_uni_seo_pro_seo_page"] ?? null)) {
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_seo_page\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 285
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_seo_page\" value=\"0\"/>
                  ";
            // line 289
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        } else {
            // line 291
            echo " 
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_seo_page\" value=\"1\"/>
                  ";
            // line 294
            echo ($context["text_yes"] ?? null);
            echo " 
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"module_uni_seo_pro_seo_page\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 298
            echo ($context["text_no"] ?? null);
            echo " 
                </label>
                ";
        }
        // line 300
        echo " 
                </div>
              </div>
            </div>

\t\t<div class=\"tab-pane\" id=\"tab-settings-4\">
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"module_uni_seo_pro_prefix_brand\"><span data-toggle=\"tooltip\"
                  title=\"";
        // line 308
        echo ($context["entry_module_uni_seo_pro_prefix_brand_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_prefix_brand"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_uni_seo_pro_prefix_brand\" value=\"";
        // line 310
        echo ($context["module_uni_seo_pro_prefix_brand"] ?? null);
        echo "\" id=\"module_uni_seo_pro_prefix_brand\" class=\"form-control\"/>
                </div>
              </div>
       </div>\t
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-settings-5\">
            <p>Используйте эти настройки если у вас установлен модуль Uni-блог. <a href=\"https://opencart-3x.ru/uniblog-blog-novosti-obsuzhdeniya-dlya-opencart-3\" target=\"_blank\">Установить модуль UniBlog – блог, новости, обсуждения для Opencart 3 >>></a></p>

\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"module_uni_seo_pro_prefix_blogcategory\"><span data-toggle=\"tooltip\"
                  title=\"";
        // line 321
        echo ($context["entry_module_uni_seo_pro_prefix_blogcategory_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_prefix_blogcategory"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_uni_seo_pro_prefix_blogcategory\" value=\"";
        // line 323
        echo ($context["module_uni_seo_pro_prefix_blogcategory"] ?? null);
        echo "\" id=\"module_uni_seo_pro_prefix_blogcategory\" class=\"form-control\"/>
                </div>
              </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"module_uni_seo_pro_prefix_blogarticle\"><span data-toggle=\"tooltip\"
                  title=\"";
        // line 329
        echo ($context["entry_module_uni_seo_pro_prefix_blogarticle_help"] ?? null);
        echo "\">";
        echo ($context["entry_module_uni_seo_pro_prefix_blogarticle"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                <input type=\"text\" name=\"module_uni_seo_pro_prefix_blogarticle\" value=\"";
        // line 331
        echo ($context["module_uni_seo_pro_prefix_blogarticle"] ?? null);
        echo "\" id=\"module_uni_seo_pro_prefix_blogarticle\" class=\"form-control\"/>
                </div>
              </div>
 
            </div>

\t\t  </div>

            </div>
            <div class=\"tab-pane\" id=\"tab-help\">

\t\t\t ";
        // line 344
        echo "\t\t\t<div id=\"mod_39\">загрузка...</div>
<script type=\"text/javascript\">
document.write('<scr'+'ipt language=\"javascript\" type=\"text/javascript\" src=\"https://info.opencart-3x.ru/output/index/39?ref='+escape(document.referrer)+'\"></scr'+'ipt>');
</script>

            </div>
\t\t  </div>
        
\t  </form>
      </div>
    </div>
  </div>
</div>
<script>

\$('#recovery-category, #clear-cache').click(function(event){
\tevent.preventDefault();\t
\tvar href = \$(this).attr('href');
\t\$.ajax({
\t\turl: href,
\t\tdataType:'json',
\t\tsuccess: function(json) {
\t\t\tvar html = '<div class=\"alert alert-success autoSlideUp\"><i class=\"fa fa-check-circle\"></i> ' + json['success'];
\t\t\thtml  += '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
\t\t\t\$('#content').prepend(html);
\t\t\t\$('.autoSlideUp').delay(3000).fadeOut(600, function(){ \$(this).show().css({'visibility':'hidden'}); }).slideUp(600);
\t\t},
\t\terror: function (jqXHR, exception) {
\t\t\tvar msg = '';
\t\t\tif (jqXHR.status === 0) {
\t\t\t\tmsg = 'Not connect.\\n Verify Network.';
\t\t\t} else if (jqXHR.status == 404) {
\t\t\t\tmsg = 'Requested page not found. [404]';
\t\t\t} else if (jqXHR.status == 500) {
\t\t\t\tmsg = 'Internal Server Error [500].';
\t\t\t} else if (exception === 'parsererror') {
\t\t\t\tmsg = 'Requested JSON parse failed.';
\t\t\t} else if (exception === 'timeout') {
\t\t\t\tmsg = 'Time out error.';
\t\t\t} else if (exception === 'abort') {
\t\t\t\tmsg = 'Ajax request aborted.';
\t\t\t} else {
\t\t\t\tmsg = 'Uncaught Error.\\n' + jqXHR.responseText;
\t\t\t}
\t\t\tif (\$msg) {
\t\t\t\tvar html = '<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + msg;
\t\t\t\thtml  += '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
\t\t\t\t\$('#content').prepend(html);
\t\t\t}
\t\t}
\t});
\treturn false;
\t}
);

\$('input[name=config_seo_url]').change(function(){
  var val = \$(this).val();
  if (parseInt(val)) { 
    \$('#config_seo_url').show();
  } else {
    \$('#config_seo_url').hide();
  }
})
if (parseInt(\$('input[name=config_seo_url]:checked').val())) {\$('#config_seo_url').show();} else {\$('#config_seo_url').hide();}

\$('input[name=module_uni_seo_pro_allow_utm]').change(function(){
  if (\$(this).is(':checked')) { 
    \$('#allow_utm').show();
  } else {
    \$('#allow_utm').hide();
  }
})
if (\$('input[name=module_uni_seo_pro_allow_utm]').is(':checked')) {\$('#allow_utm').show();} else {\$('#allow_utm').hide();}

\$('input[name=module_uni_seo_pro_use_lang_prefix]').change(function(){
  if (\$(this).is(':checked')) { 
    \$('#use_lang_prefix').show();
  } else {
    \$('#use_lang_prefix').hide();
  }
})
if (\$('input[name=module_uni_seo_pro_use_lang_prefix]').is(':checked')) {\$('#use_lang_prefix').show();} else {\$('#use_lang_prefix').hide();}
</script>
<script>\$('.autoSlideUp').delay(3000).fadeOut(600, function(){ \$(this).show().css({'visibility':'hidden'}); }).slideUp(600);</script>
";
        // line 428
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_seo_pro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  854 => 428,  768 => 344,  754 => 331,  747 => 329,  738 => 323,  731 => 321,  717 => 310,  710 => 308,  700 => 300,  694 => 298,  687 => 294,  682 => 291,  676 => 289,  669 => 285,  663 => 282,  656 => 280,  648 => 275,  641 => 273,  632 => 266,  626 => 264,  619 => 260,  614 => 257,  608 => 255,  601 => 251,  595 => 248,  588 => 246,  581 => 241,  575 => 239,  568 => 235,  563 => 232,  557 => 230,  550 => 226,  544 => 223,  537 => 221,  526 => 213,  519 => 211,  511 => 205,  505 => 203,  498 => 199,  493 => 196,  487 => 194,  480 => 190,  474 => 187,  467 => 185,  460 => 180,  454 => 178,  447 => 174,  442 => 171,  436 => 169,  429 => 165,  423 => 162,  416 => 160,  406 => 152,  399 => 150,  393 => 148,  387 => 146,  385 => 145,  379 => 144,  371 => 143,  368 => 142,  364 => 141,  357 => 139,  349 => 133,  345 => 131,  341 => 129,  339 => 128,  333 => 125,  323 => 120,  316 => 118,  310 => 114,  306 => 112,  302 => 110,  300 => 109,  294 => 106,  286 => 101,  279 => 99,  270 => 92,  265 => 91,  261 => 90,  258 => 89,  253 => 88,  249 => 87,  245 => 86,  239 => 83,  233 => 79,  227 => 77,  225 => 76,  220 => 73,  215 => 72,  211 => 70,  206 => 69,  201 => 67,  196 => 64,  191 => 63,  187 => 61,  182 => 60,  177 => 58,  169 => 55,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  134 => 38,  130 => 37,  123 => 33,  117 => 30,  112 => 27,  105 => 24,  100 => 23,  92 => 19,  90 => 18,  83 => 13,  73 => 12,  67 => 11,  62 => 9,  56 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/uni_seo_pro.twig", "");
    }
}
