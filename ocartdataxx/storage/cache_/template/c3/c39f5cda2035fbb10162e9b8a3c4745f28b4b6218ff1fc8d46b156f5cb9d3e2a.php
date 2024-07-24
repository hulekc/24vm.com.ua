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
class __TwigTemplate_530cedae19cd7897b6f00b2dc15a1de4a6171a291370b1a136e032193807c444 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 29
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 29);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 29);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/elmigo_sidebar.js\" type=\"text/javascript\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
<script>
    window.ckeditorStatus = '";
        // line 38
        echo ($context["ckeditor_status"] ?? null);
        echo "';
    window.ckeditorToken  = '";
        // line 39
        echo ($context["ckeditor_token"] ?? null);
        echo "';
</script>
      
</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 47
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 48
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>

";
            // line 50
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
            // line 104
            echo "    <ul class=\"nav navbar-nav navbar-right\">
";
            // line 105
            if (array_key_exists("storage_cleaner", $context)) {
                echo " 
\t <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i> ";
                // line 106
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
                // line 112
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
                // line 122
                echo ($context["text_cache_system"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'system');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 125
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
                // line 135
                echo ($context["text_cache_modification"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 138
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
                // line 149
                echo ($context["text_cache_image"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'image');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 152
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
                // line 162
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
                // line 172
                echo ($context["text_log_error"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'error');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 175
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
                // line 186
                echo ($context["text_log_modification"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 189
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
                // line 200
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
            // line 208
            echo "
        ";
            // line 209
            if ((array_key_exists("extended_review_settings", $context) || array_key_exists("extended_review_store_settings", $context))) {
                // line 210
                echo "        <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-danger pull-right\">";
                echo ($context["reviews_count"] ?? null);
                echo "</span><i class=\"fa fa-comments-o fa-lg\" aria-hidden=\"true\"></i></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
        ";
                // line 212
                if (array_key_exists("extended_review_settings", $context)) {
                    // line 213
                    echo "            <li class=\"dropdown-header\">Расширенные отзывы</li>
            <li><a href=\"";
                    // line 214
                    echo ($context["extended_review_settings"] ?? null);
                    echo "\">Настройки</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Отзывы</li>
            <li><a href=\"";
                    // line 217
                    echo ($context["extended_review"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["all_review_total"] ?? null);
                    echo "</span>Все отзывы</a></li>
            <li><a href=\"";
                    // line 218
                    echo ($context["extended_review_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["review_total"] ?? null);
                    echo "</span>Новые отзывы</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Комментарии</li>
            <li><a href=\"";
                    // line 221
                    echo ($context["extended_review_answer"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["all_answer_total"] ?? null);
                    echo "</span>Все комментарии</a></li>
            <li><a href=\"";
                    // line 222
                    echo ($context["extended_review_answer_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["answer_total"] ?? null);
                    echo "</span>Новые комментарии</a></li>
            ";
                }
                // line 224
                echo "            ";
                if (array_key_exists("extended_review_store_settings", $context)) {
                    // line 225
                    echo "            <li class=\"divider\"></li>
            <li class=\"dropdown-header\">Расширенные отзывы о магазине</li>
            <li><a href=\"";
                    // line 227
                    echo ($context["extended_review_store_settings"] ?? null);
                    echo "\">Настройки</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Отзывы о магазине</li>
            <li><a href=\"";
                    // line 230
                    echo ($context["extended_review_store"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["review_store_total"] ?? null);
                    echo "</span>Все отзывы</a></li>
            <li><a href=\"";
                    // line 231
                    echo ($context["extended_review_store_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["review_store"] ?? null);
                    echo "</span>Новые отзывы</a></li>
            ";
                }
                // line 233
                echo "          </ul>
        </li>
        ";
            }
            // line 236
            echo "
\t\t\t\t";
            // line 237
            echo ($context["me_admin_search"] ?? null);
            echo "
\t\t\t
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 239
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
            // line 241
            echo ($context["profile"] ?? null);
            echo "\"> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 243
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 245
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 245);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 245);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 248
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://www.opencart.com\" target=\"_blank\"> ";
            // line 249
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"> ";
            // line 250
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://forum.opencart.com\" target=\"_blank\"> ";
            // line 251
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 254
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 256
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
        return array (  565 => 256,  557 => 254,  551 => 251,  547 => 250,  543 => 249,  539 => 248,  536 => 247,  525 => 245,  521 => 244,  517 => 243,  510 => 241,  495 => 239,  490 => 237,  487 => 236,  482 => 233,  475 => 231,  469 => 230,  463 => 227,  459 => 225,  456 => 224,  449 => 222,  443 => 221,  435 => 218,  429 => 217,  423 => 214,  420 => 213,  418 => 212,  412 => 210,  410 => 209,  407 => 208,  396 => 200,  376 => 189,  370 => 186,  350 => 175,  344 => 172,  331 => 162,  312 => 152,  306 => 149,  286 => 138,  280 => 135,  261 => 125,  255 => 122,  242 => 112,  231 => 106,  227 => 105,  224 => 104,  167 => 50,  162 => 48,  154 => 47,  143 => 39,  139 => 38,  135 => 36,  126 => 34,  122 => 33,  118 => 31,  107 => 29,  103 => 28,  90 => 26,  86 => 25,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
