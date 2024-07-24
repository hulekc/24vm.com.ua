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

/* unishop2/template/extension/module/uni_request_list.twig */
class __TwigTemplate_2a486636f19299ec477744e9d873e9b934df9b06290092e1efebb86050b59469 extends \Twig\Template
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
        echo "<div class=\"question-info\">
\t<div class=\"question-info__total\">";
        // line 2
        echo ($context["text_question_total"] ?? null);
        echo "</div>
\t<button class=\"btn btn-sm btn-primary\" onclick=\"\$('.question-form-wrapper').collapse('toggle');\">";
        // line 3
        echo ($context["button_new_request"] ?? null);
        echo "</button>
</div>
<div class=\"question-form-wrapper collapse\">
\t<form class=\"question-form form-horizontal uni-form\" id=\"form-question\">
\t\t";
        // line 7
        if (($context["request_guest"] ?? null)) {
            // line 8
            echo "\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 9
            echo ($context["entry_request_name"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 11
            echo ($context["customer_firstname"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 14
            if (($context["show_phone"] ?? null)) {
                // line 15
                echo "\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 16
                echo ($context["entry_request_phone"] ?? null);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" value=\"";
                // line 18
                echo ($context["customer_telephone"] ?? null);
                echo "\" class=\"question-form__telephone form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 22
            echo "\t\t\t";
            if (($context["show_email"] ?? null)) {
                // line 23
                echo "\t\t\t\t<div class=\"form-group ";
                echo ((($context["show_email_required"] ?? null)) ? ("required") : (""));
                echo " \">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 24
                echo ($context["entry_request_mail"] ?? null);
                echo " ";
                echo ((twig_test_empty(($context["show_email_required"] ?? null))) ? (($context["entry_request_mail_required"] ?? null)) : (""));
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"mail\" value=\"";
                // line 26
                echo ($context["customer_email"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 30
            echo "\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 31
            echo ($context["entry_request_text"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<textarea name=\"comment\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t<!-- <div class=\"help-block\"><small>";
            // line 34
            echo ($context["text_note"] ?? null);
            echo "</small></div> -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 37
            echo ($context["captcha"] ?? null);
            echo "
\t\t\t";
            // line 38
            if (($context["text_agree"] ?? null)) {
                // line 39
                echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-2 hidden-xs\"></div>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<label class=\"question-form__agree input\"><input type=\"checkbox\" name=\"confirm\" value=\"1\" /><span>";
                // line 42
                echo ($context["text_agree"] ?? null);
                echo "</span></label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 46
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-2 hidden-xs\"></div>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<button type=\"button\" id=\"button-request\" data-loading-text=\"";
            // line 49
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"question-form__btn btn btn-lg btn-primary\">";
            echo ($context["button_add_new_request"] ?? null);
            echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<input type=\"hidden\" name=\"type\" value=\"";
            // line 53
            echo ($context["type"] ?? null);
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 54
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"form-name\" value=\"question\" />
\t\t";
        } else {
            // line 57
            echo "\t\t\t";
            echo ($context["text_login"] ?? null);
            echo "
\t\t";
        }
        // line 59
        echo "\t</form>
</div>
\t<div>
\t<div class=\"question-list\">
\t\t";
        // line 63
        if (($context["questions"] ?? null)) {
            // line 64
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 65
                echo "\t\t\t\t<div class=\"question-list__item uni-item row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-2 col-xxl-3\">
\t\t\t\t\t\t<div class=\"question-list__name\"><i class=\"question-list__icon fa fa-user\"></i>";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["request"], "name", [], "any", false, false, false, 67);
                echo "</div>
\t\t\t\t\t\t<div class=\"question-list__date\"><i class=\"question-list__icon fa fa-calendar\"></i>";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["request"], "date_added", [], "any", false, false, false, 68);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-10 col-xxl-17\">
\t\t\t\t\t\t<div class=\"question-list__comment\">
\t\t\t\t\t\t\t<!-- <div class=\"question-list__comment-heading\">";
                // line 72
                echo ($context["text_question_comment"] ?? null);
                echo "</div> -->
\t\t\t\t\t\t\t";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["request"], "comment", [], "any", false, false, false, 73);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["request"], "admin_comment", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t<div class=\"question-list__reply\">
\t\t\t\t\t\t\t\t<div class=\"question-list__reply-heading\">";
                    // line 77
                    echo ($context["text_admin_reply"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["request"], "admin_comment", [], "any", false, false, false, 78);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t\t";
            if (($context["question_show_more"] ?? null)) {
                // line 85
                echo "\t\t\t\t<div class=\"show-more-question\">
\t\t\t\t\t<button class=\"show-more-question__btn btn btn-xl btn-default\"><span>";
                // line 86
                echo ($context["button_show_more_question"] ?? null);
                echo "</span></button>
\t\t\t\t</div>
\t\t\t\t<script>
\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\$('.show-more-question__btn').on('click', function() {
\t\t\t\t\t\t\t\$.get('index.php?route=extension/module/uni_request/getQuestionsRender&pid=";
                // line 91
                echo ($context["product_id"] ?? null);
                echo "&start=";
                echo ($context["start"] ?? null);
                echo "&limit=";
                echo ($context["limit"] ?? null);
                echo "', (data) => {
\t\t\t\t\t\t\t\tconst \$data = \$(data);
\t\t\t\t\t
\t\t\t\t\t\t\t\t\$data.find('.question-list__item').hide();
\t\t\t\t
\t\t\t\t\t\t\t\t\$('.question-list').append(\$data.find('.question-list').html());
\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('.question-list__item').fadeIn();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t";
            }
            // line 106
            echo "\t\t";
        } else {
            // line 107
            echo "\t\t\t<p>";
            echo ($context["text_no_requests"] ?? null);
            echo "</p>
\t\t";
        }
        // line 109
        echo "\t</div>
</div>
";
        // line 111
        if (($context["questions"] ?? null)) {
            // line 112
            echo "\t<script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"https://schema.org\",
\t\t\t\"@type\": \"FAQPage\",
\t\t\t\"mainEntity\": [
\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["microdata"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["data"]) {
                // line 118
                echo "\t\t\t\t{
\t\t\t\t\"@type\": \"Question\",
\t\t\t\t\"name\": \"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["data"], "question", [], "any", false, false, false, 120);
                echo "\",
\t\t\t\t\"acceptedAnswer\": {
\t\t\t\t\t\"@type\": \"Answer\",
\t\t\t\t\t\"text\": \"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["data"], "answer", [], "any", false, false, false, 123);
                echo "\"
\t\t\t\t}
\t\t\t\t";
                // line 125
                echo (((($context["i"] + 1) < twig_length_filter($this->env, ($context["microdata"] ?? null)))) ? ("},") : ("}"));
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t]
\t\t}
\t</script>
";
        }
        // line 131
        echo "<script>
\t";
        // line 132
        if (($context["mask_telephone"] ?? null)) {
            // line 133
            echo "\t\t\$('.question-form__telephone').mask('";
            echo ($context["mask_telephone"] ?? null);
            echo "').data('start', 0).on('click', function() {
\t\t\tconst start = \$(this).val().indexOf('_');
\t\t\tif(!\$(this).data('start')) \$(this).data('start', start);
\t\t\tif(start == \$(this).data('start')) \$(this)[0].setSelectionRange(start, start);
\t\t});
\t";
        }
        // line 139
        echo "
\t\$('body').find('.tab-question span').removeClass('hidden').text('";
        // line 140
        echo ($context["requests_total"] ?? null);
        echo "');
\t\t
\t\$('#button-request').on('click', function() {
\t\tvar form = '#form-question';
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/uni_request/mail',
\t\t\ttype: 'post',
\t\t\tdata: \$(form+' input, '+form+' textarea').serialize(),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-request').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-request').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$(form+' .text-danger').remove();
\t\t\t\t\t
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$(form).before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> '+json['success']+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\$(form).slideToggle();
\t\t\t\t\t\$(form+' input:not(:hidden), '+form+' textarea').val('');
\t\t\t\t\t
\t\t\t\t\tuniScrollTo('.alert.alert-success');
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']) {
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tform_error(form, i, json['error'][i]);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_request_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 140,  335 => 139,  325 => 133,  323 => 132,  320 => 131,  314 => 127,  306 => 125,  301 => 123,  295 => 120,  291 => 118,  287 => 117,  280 => 112,  278 => 111,  274 => 109,  268 => 107,  265 => 106,  243 => 91,  235 => 86,  232 => 85,  229 => 84,  221 => 81,  215 => 78,  211 => 77,  208 => 76,  206 => 75,  201 => 73,  197 => 72,  190 => 68,  186 => 67,  182 => 65,  177 => 64,  175 => 63,  169 => 59,  163 => 57,  157 => 54,  153 => 53,  144 => 49,  139 => 46,  132 => 42,  127 => 39,  125 => 38,  121 => 37,  115 => 34,  109 => 31,  106 => 30,  99 => 26,  92 => 24,  87 => 23,  84 => 22,  77 => 18,  72 => 16,  69 => 15,  67 => 14,  61 => 11,  56 => 9,  53 => 8,  51 => 7,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_request_list.twig", "");
    }
}
