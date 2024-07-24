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

/* extension/module/ocmax_license.twig */
class __TwigTemplate_c768c50cc4748230db92aa6bb9411bd68bb8f3a5f58635388eff10808c4f80ea extends \Twig\Template
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
        if ((($context["check_license"] ?? null) != true)) {
            // line 2
            echo "\t";
            if ((($context["status"] ?? null) != 2)) {
                // line 3
                echo "<legend>";
                echo ($context["text_license_request"] ?? null);
                echo "</legend>
<div class=\"alert alert-info\" role=\"alert\">";
                // line 4
                echo ($context["text_about_license"] ?? null);
                echo "</div>
<div class=\"form-group\">
\t<label class=\"col-sm-2 control-label\" for=\"email\"><span data-toggle=\"tooltip\" title=\"";
                // line 6
                echo ($context["help_email"] ?? null);
                echo "\">";
                echo ($context["entry_email"] ?? null);
                echo "</span></label>
\t<div class=\"col-sm-4\">
\t\t<input type=\"text\" name=\"email\" value=\"";
                // line 8
                echo ($context["email"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_email"] ?? null);
                echo "\" id=\"email\" class=\"form-control\" />
\t</div>
\t<label class=\"col-sm-2 control-label\" for=\"domain\"><span data-toggle=\"tooltip\" title=\"";
                // line 10
                echo ($context["help_domain"] ?? null);
                echo "\">";
                echo ($context["entry_domain"] ?? null);
                echo "</span></label>
\t<div class=\"col-sm-4\">
\t\t<textarea rows=\"1\" name=\"domain\" id=\"domain\" class=\"form-control\">";
                // line 12
                echo ($context["domain"] ?? null);
                echo "</textarea></p>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"col-sm-2 control-label\" for=\"market\"><span data-toggle=\"tooltip\" title=\"";
                // line 16
                echo ($context["help_market"] ?? null);
                echo "\">";
                echo ($context["entry_market"] ?? null);
                echo "</span></label>
\t<div class=\"col-sm-4\">
\t\t<select name=\"market\" id=\"market\" class=\"form-control\">
\t\t\t<option value=\"\">";
                // line 19
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t<option value=\"opencartforum.com\">opencartforum.com</option>
\t\t\t<option value=\"oc-max.com\">oc-max.com</option>
\t\t\t<option value=\"opencart.com\">opencart.com</option>
\t\t</select>
\t</div>
\t<label class=\"col-sm-2 control-label\" for=\"payment_id\"><span data-toggle=\"tooltip\" title=\"";
                // line 25
                echo ($context["help_payment_id"] ?? null);
                echo "\">";
                echo ($context["entry_payment_id"] ?? null);
                echo "</span></label>
\t<div class=\"col-sm-4\">
\t\t<input type=\"text\" name=\"check\" value=\"\" placeholder=\"";
                // line 27
                echo ($context["entry_payment_id"] ?? null);
                echo "\" id=\"payment_id\" class=\"form-control\" />
\t</div>
</div>
<div class=\"form-group\">
    <div class=\"col-sm-12\">
        <a onclick=\"purchase('send');\" id=\"send-purchase\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-info btn-block col-sm-6\" data-original-title=\"";
                // line 32
                echo ($context["help_send"] ?? null);
                echo "\"><i class=\"fa fa-envelope-o fa-2x\"></i></a>
    </div>\t
</div>
\t";
            }
            // line 36
            echo "<legend>";
            echo ($context["text_license"] ?? null);
            echo "</legend>
<div class=\"form-group\">
\t<label class=\"col-sm-2 control-label\" for=\"input-license\"><span data-toggle=\"tooltip\" title=\"";
            // line 38
            echo ($context["help_license"] ?? null);
            echo "\">";
            echo ($context["entry_license"] ?? null);
            echo "</span></label>
\t<div class=\"col-sm-10\">
\t\t<div class=\"input-group\">
\t\t\t<input type=\"text\" name=\"";
            // line 41
            echo ($context["extension"] ?? null);
            echo "_license\" value=\"";
            echo ($context["license"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_license"] ?? null);
            echo "\" id=\"input-license\" class=\"form-control\"/>
\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<a onclick=\"purchase('activate');\" id=\"activate\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"";
            // line 43
            echo ($context["help_activate"] ?? null);
            echo "\"><i class=\"fa fa-key\"></i></a>
\t\t\t</span>
\t\t</div>
\t</div>
</div>
";
        } else {
            // line 49
            echo "<input type=\"hidden\" name=\"";
            echo ($context["extension"] ?? null);
            echo "_license\" value=\"";
            echo ($context["license"] ?? null);
            echo "\" id=\"input-license\" class=\"form-control\" />
";
        }
        // line 51
        echo "<legend>";
        echo ($context["text_contacts"] ?? null);
        echo "</legend>
<p>";
        // line 52
        echo ($context["text_about_support"] ?? null);
        echo "</p>
<ul style=\"list-style-type: none;\">
\t<li><i class=\"fa fa-weixin\" aria-hidden=\"true\"></i> ";
        // line 54
        echo ($context["text_support_telegram"] ?? null);
        echo "</li>
\t<li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> ";
        // line 55
        echo ($context["text_support_email"] ?? null);
        echo "</li>
\t<li><i class=\"fa fa-link\" aria-hidden=\"true\"></i> <a href=\"http://";
        // line 56
        echo ($context["text_support_site"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["text_support_site"] ?? null);
        echo "</a></li>
</ul>
<script type=\"text/javascript\"><!--
\tfunction purchase(action) {
\t\tvar post_data = 'action=' + action;

\t\tif (action == 'send') {
\t\t\tpost_data += '&email=' + encodeURIComponent(\$('#email').val()) + '&domain=' + encodeURIComponent(\$('#domain').val()) + '&market=' + encodeURIComponent(\$('#market').val()) + '&payment_id=' + encodeURIComponent(\$('#payment_id').val());
\t\t} else if (action == 'activate') {
\t\t\tpost_data += '&license=' + \$('#input-license').val();
\t\t}

\t\t\$.ajax({
\t\t\turl: '";
        // line 69
        echo ($context["action"] ?? null);
        echo "&user_token=";
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'POST',
\t\t\tdata: post_data,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('.alert').remove();
\t\t\t\t\$('body').fadeTo('fast', 0.7).prepend('<div id=\"ocmax-loader\" style=\"position: fixed; top: 50%;\tleft: 50%; z-index: 9999;\"><i class=\"fa fa-spinner fa-spin fa-3x fa-fw\"></i></div>');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\tvar \$alerts = \$('.alert-danger, .alert-success');

\t\t\t\tif (\$alerts.length !== 0) {
\t\t\t\t\tsetTimeout(function() { \$alerts.fadeOut(); }, 5000);
\t\t\t\t}

\t\t\t\t\$('body').fadeTo('fast', 1)
\t\t\t\t\$('#ocmax-loader').remove();
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('.container-fluid:eq(2)').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.container-fluid:eq(2)').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tsetTimeout(function() { location.reload(); }, 1000);
\t\t\t\t}
\t\t\t},
\t\t\terror: function (jqXHR, textStatus, errorThrown) {
\t\t\t\tconsole.log(textStatus);
\t\t\t\talert(errorThrown);
\t\t\t}
\t\t});
\t}
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/module/ocmax_license.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 69,  177 => 56,  173 => 55,  169 => 54,  164 => 52,  159 => 51,  151 => 49,  142 => 43,  133 => 41,  125 => 38,  119 => 36,  112 => 32,  104 => 27,  97 => 25,  88 => 19,  80 => 16,  73 => 12,  66 => 10,  59 => 8,  52 => 6,  47 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocmax_license.twig", "");
    }
}
