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

/* common/header.twig */
class __TwigTemplate_fc7d7ce44024ff5def69d7ba52fb84b492d9e75c00eb6ac39d49d489a5231bc4 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"view/stylesheet/extended_reviews.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/elmigo_sidebar.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 26);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 26);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 26);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        if (($context["cgp_settings"] ?? null)) {
            // line 30
            echo "\t<script>";
            echo ($context["cgp_settings"] ?? null);
            echo "</script>
";
        }
        // line 32
        echo "\t\t\t
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 34);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 34);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/elmigo_sidebar.js\" type=\"text/javascript\"></script>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 39
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
<script>
    window.ckeditorStatus = '";
        // line 43
        echo ($context["ckeditor_status"] ?? null);
        echo "';
    window.ckeditorToken  = '";
        // line 44
        echo ($context["ckeditor_token"] ?? null);
        echo "';
</script>
      
</head>

<body class=\"";
        // line 49
        echo ((($context["gptp_route"] ?? null)) ? (($context["gptp_route"] ?? null)) : (""));
        echo "\">
\t\t\t
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 54
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 55
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>

";
            // line 57
            if (array_key_exists("storage_cleaner", $context)) {
                echo " 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.clear-dropdown li, .clear-dropdown a').on('click', function(e) {
\t\te.stopPropagation();
\t});
});

function clearOption(type, key) {
\tvar cache_size = \$('.clear-dropdown').prev('a').children('span').html();
\tvar cache_type = type + '-' + key;

\t\$.ajax({
\t\turl: 'index.php?route=extension/module/cache_cleaner/clear' + type + '&user_token=' + getURLVar('user_token'),
\t\ttype: 'post',
\t\tdata: 'key=' + key,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('.clear-dropdown').prev('a').children('span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t\t\$('#button-' + cache_type + ' span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.clear-dropdown > .alert-success, .clear-dropdown > .alert-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#button-' + cache_type).closest('li').addClass('bg-success');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-success\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\tif (json['size']) {
\t\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(json['size']['all']);
\t\t\t\t\t\$('#button-' + cache_type + ' span').html(json['size'][cache_type]);
\t\t\t\t}
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(cache_size);
\t\t\t\t\$('#button-' + cache_type).closest('li').addClass('bg-danger');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-danger\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}
\t});
}

function clearAll() {
\tclearOption('cache', 'system');
\tclearOption('cache', 'modification');
\tclearOption('cache', 'image');
\tclearOption('log', 'error');
\tclearOption('log', 'modification');
}
//--></script>";
            }
            // line 111
            echo "    <ul class=\"nav navbar-nav navbar-right\">
";
            // line 112
            if (array_key_exists("storage_cleaner", $context)) {
                echo " 
\t <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i> ";
                // line 113
                if (($context["text_cleaner_size"] ?? null)) {
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["all"] ?? null) : null);
                }
                echo "</span></a>
\t  <ul class=\"dropdown-menu dropdown-menu-right clear-dropdown\" style=\"width: 230px;\">
\t\t<table class=\"table\" style=\"margin-bottom: 0;\">
         <tbody>
\t\t  <tr>
           <td>
            <li class=\"dropdown-header\"><b>";
                // line 119
                echo ($context["text_cache"] ?? null);
                echo "</b></li>
           </td>
          </tr>
         </tbody>
        </table>\t
\t<li>\t
\t    <table class=\"table\" style=\"margin-bottom: 1px;\">
         <tbody>
\t\t  <tr>
           <td>
           ";
                // line 129
                echo ($context["text_cache_system"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'system');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 132
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-cache-system\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["cache-system"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a> 
           </td>
          </tr>
         </tbody>
        </table></li>
    <li>
\t    <table class=\"table\" style=\"margin-bottom: 1px;\">
         <tbody>
\t\t  <tr>
           <td>
            ";
                // line 142
                echo ($context["text_cache_modification"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 145
                echo ($context["text_refresh"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-cache-modification\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["cache-modification"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a> 
           </td>
          </tr>
         </tbody>
        </table>\t
\t</li>
\t<li>
\t   <table class=\"table\" style=\"margin-bottom: 1px;\">
        <tbody>
\t\t <tr>
          <td>
          ";
                // line 156
                echo ($context["text_cache_image"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'image');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 159
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-cache-image\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["cache-image"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a>
          </td>
         </tr>
       </tbody>
      </table>\t
\t</li>
      <table class=\"table\" style=\"margin-bottom: 0;\">
       <tbody>
\t\t<tr>
          <td>
          <li class=\"dropdown-header\"> <b>";
                // line 169
                echo ($context["text_log"] ?? null);
                echo "</b></li>
          </td>
        </tr>
       </tbody>
      </table>\t
\t<li>
\t  <table class=\"table\" style=\"margin-bottom: 1px;\">
       <tbody>
\t\t<tr>
          <td>
          ";
                // line 179
                echo ($context["text_log_error"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'error');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 182
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-log-error\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["log-error"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a>
          </td>
         </tr>
        </tbody>
      </table>\t
\t</li>\t
\t<li>
\t  <table class=\"table\" style=\"margin-bottom: 1px;\">
       <tbody>
\t\t<tr>
          <td>
          ";
                // line 193
                echo ($context["text_log_modification"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 196
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-log-modification\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["log-modification"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a>
          </td>
         </tr>
        </tbody>
      </table>\t
\t</li>
\t<li>
\t  <table class=\"table\" style=\"margin-bottom: 0;\">
       <tbody>
\t\t<tr>
          <td>
          <a><button onclick=\"clearAll();\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" class=\"btn btn-warning btn-sm btn-block\" id=\"button-clear-all\">";
                // line 207
                echo ($context["text_clear_all"] ?? null);
                echo "</button></a>
          </td>
          </tr>
          </tbody>
       </table>\t
\t</li>
</ul>
\t</li>";
            }
            // line 215
            echo "
        ";
            // line 216
            if ((array_key_exists("extended_review_settings", $context) || array_key_exists("extended_review_store_settings", $context))) {
                // line 217
                echo "        <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-danger pull-right\">";
                echo ($context["reviews_count"] ?? null);
                echo "</span><i class=\"fa fa-comments-o fa-lg\" aria-hidden=\"true\"></i></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
        ";
                // line 219
                if (array_key_exists("extended_review_settings", $context)) {
                    // line 220
                    echo "            <li class=\"dropdown-header\">Расширенные отзывы</li>
            <li><a href=\"";
                    // line 221
                    echo ($context["extended_review_settings"] ?? null);
                    echo "\">Настройки</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Отзывы</li>
            <li><a href=\"";
                    // line 224
                    echo ($context["extended_review"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["all_review_total"] ?? null);
                    echo "</span>Все отзывы</a></li>
            <li><a href=\"";
                    // line 225
                    echo ($context["extended_review_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["review_total"] ?? null);
                    echo "</span>Новые отзывы</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Комментарии</li>
            <li><a href=\"";
                    // line 228
                    echo ($context["extended_review_answer"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["all_answer_total"] ?? null);
                    echo "</span>Все комментарии</a></li>
            <li><a href=\"";
                    // line 229
                    echo ($context["extended_review_answer_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["answer_total"] ?? null);
                    echo "</span>Новые комментарии</a></li>
            ";
                }
                // line 231
                echo "            ";
                if (array_key_exists("extended_review_store_settings", $context)) {
                    // line 232
                    echo "            <li class=\"divider\"></li>
            <li class=\"dropdown-header\">Расширенные отзывы о магазине</li>
            <li><a href=\"";
                    // line 234
                    echo ($context["extended_review_store_settings"] ?? null);
                    echo "\">Настройки</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Отзывы о магазине</li>
            <li><a href=\"";
                    // line 237
                    echo ($context["extended_review_store"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["review_store_total"] ?? null);
                    echo "</span>Все отзывы</a></li>
            <li><a href=\"";
                    // line 238
                    echo ($context["extended_review_store_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["review_store"] ?? null);
                    echo "</span>Новые отзывы</a></li>
            ";
                }
                // line 240
                echo "          </ul>
        </li>
        ";
            }
            // line 243
            echo "
";
            // line 244
            if (($context["chatgpt_pro_link"] ?? null)) {
                // line 245
                echo "      <li class=\"dropdown gptp_header_block\">
\t      <a class=\"dropdown-toggle v";
                // line 246
                echo ($context["oc_version"] ?? null);
                echo " gptp_quick_btn\" data-toggle=\"dropdown\" aria-expanded=\"false\"><img class=\"gptp_quick_icon\" src=\"view/image/chatgpt_pro/icon_white.svg\"></a>
\t      <ul class=\"dropdown-menu dropdown-menu-right\">
\t          <li><a href=\"";
                // line 248
                echo ($context["chatgpt_pro_link"] ?? null);
                echo "\" target=\"_blank\"><i class=\"fa fa-comment-o\"></i> ";
                echo ($context["gptp_assistant"] ?? null);
                echo "</a></li>
\t          <li role=\"separator\" class=\"divider\"></li>
\t          <li><a id=\"gptp_integration_btn\"><i class=\"fa fa-code\"></i> ";
                // line 250
                echo ($context["gptp_integration"] ?? null);
                echo "</a></li>
\t          <li role=\"separator\" class=\"divider\"></li>
\t          <li><a href=\"";
                // line 252
                echo ($context["chatgpt_pro_link"] ?? null);
                echo "\" target=\"_blank\"><i class=\"fa fa-cog\"></i> ";
                echo ($context["gptp_settings"] ?? null);
                echo "</a></li>
\t      </ul>
      </li>
";
            }
            // line 256
            echo "\t\t\t

\t\t\t\t";
            // line 258
            echo ($context["me_admin_search"] ?? null);
            echo "
\t\t\t
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 260
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 262
            echo ($context["profile"] ?? null);
            echo "\"> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 264
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 266
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 266);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 266);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 269
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://www.opencart.com\" target=\"_blank\"> ";
            // line 270
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"> ";
            // line 271
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://forum.opencart.com\" target=\"_blank\"> ";
            // line 272
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 275
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 277
        echo " </div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 277,  611 => 275,  605 => 272,  601 => 271,  597 => 270,  593 => 269,  590 => 268,  579 => 266,  575 => 265,  571 => 264,  564 => 262,  549 => 260,  544 => 258,  540 => 256,  531 => 252,  526 => 250,  519 => 248,  514 => 246,  511 => 245,  509 => 244,  506 => 243,  501 => 240,  494 => 238,  488 => 237,  482 => 234,  478 => 232,  475 => 231,  468 => 229,  462 => 228,  454 => 225,  448 => 224,  442 => 221,  439 => 220,  437 => 219,  431 => 217,  429 => 216,  426 => 215,  415 => 207,  395 => 196,  389 => 193,  369 => 182,  363 => 179,  350 => 169,  331 => 159,  325 => 156,  305 => 145,  299 => 142,  280 => 132,  274 => 129,  261 => 119,  250 => 113,  246 => 112,  243 => 111,  186 => 57,  181 => 55,  173 => 54,  165 => 49,  157 => 44,  153 => 43,  149 => 41,  140 => 39,  136 => 38,  132 => 36,  121 => 34,  117 => 33,  114 => 32,  108 => 30,  106 => 29,  103 => 28,  90 => 26,  86 => 25,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
