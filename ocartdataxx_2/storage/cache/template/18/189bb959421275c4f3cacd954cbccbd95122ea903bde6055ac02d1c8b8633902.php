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

/* unishop2/template/extension/module/uni_request_form.twig */
class __TwigTemplate_c9a8bbe912511053edcd866de691e05232d196c51e9a8f806e94e29ae8da6eda extends \Twig\Template
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
        echo "<div id=\"modal-request-form\" class=\"modal\">
\t<div class=\"modal-dialog modal-sm\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 6
        echo ((($context["reason"] ?? null)) ? (($context["reason"] ?? null)) : (($context["text_callback"] ?? null)));
        echo "</h4>
\t\t\t</div>
\t\t\t<div id=\"callback\" class=\"modal-request modal-body\">
\t\t\t\t<form name=\"callback-form\">
\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 10
        echo ($context["customer_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["name_text"] ?? null);
        echo "\" class=\"modal-request__input form-control\"/>
\t\t\t\t\t";
        // line 11
        if (($context["show_phone"] ?? null)) {
            // line 12
            echo "\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" value=\"";
            echo ($context["customer_telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["phone_text"] ?? null);
            echo "\" class=\"modal-request__input modal-request__phone form-control\" />
\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t";
        if (($context["show_email"] ?? null)) {
            // line 15
            echo "\t\t\t\t\t\t<input type=\"email\" name=\"mail\" value=\"";
            echo ($context["customer_email"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["mail_text"] ?? null);
            echo "\" class=\"modal-request__input modal-request__mail form-control ";
            echo ((twig_test_empty(($context["reason"] ?? null))) ? ("hidden") : (""));
            echo "\" ";
            echo ((twig_test_empty(($context["reason"] ?? null))) ? ("disabled") : (""));
            echo " />
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t";
        if (($context["show_comment"] ?? null)) {
            // line 18
            echo "\t\t\t\t\t\t<textarea name=\"comment\" placeholder=\"";
            echo ($context["comment_text"] ?? null);
            echo "\" class=\"modal-request__input modal-request__comment form-control ";
            echo ((twig_test_empty(($context["reason"] ?? null))) ? ("hidden") : (""));
            echo "\" ";
            echo ((twig_test_empty(($context["reason"] ?? null))) ? ("disabled") : (""));
            echo "></textarea>
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t<input type=\"hidden\" name=\"type\" value=\"";
        echo ((($context["reason"] ?? null)) ? (($context["reason"] ?? null)) : (($context["text_callback"] ?? null)));
        echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"form-name\" value=\"callback\" />
\t\t\t\t\t";
        // line 22
        if (($context["product_id"] ?? null)) {
            echo "<input type=\"hidden\" name=\"product_id\" value=\"";
            echo ($context["product_id"] ?? null);
            echo "\" />";
        }
        // line 23
        echo "\t\t\t\t\t";
        if ( !($context["reason"] ?? null)) {
            // line 24
            echo "\t\t\t\t\t\t";
            if (($context["reason1"] ?? null)) {
                // line 25
                echo "\t\t\t\t\t\t\t<label class=\"modal-request__label modal-request__reason1 input\"><input type=\"radio\" name=\"reason\" value=\"";
                echo ($context["reason1"] ?? null);
                echo "\" checked=\"checked\" />";
                echo ($context["reason1"] ?? null);
                echo "</label>
\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t";
            if (($context["reason2"] ?? null)) {
                // line 28
                echo "\t\t\t\t\t\t\t<label class=\"modal-request__label modal-request__reason2 input\"><input type=\"radio\" name=\"reason\" value=\"";
                echo ($context["reason2"] ?? null);
                echo "\" />";
                echo ($context["reason2"] ?? null);
                echo "</label>
\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t";
            if (($context["reason3"] ?? null)) {
                // line 31
                echo "\t\t\t\t\t\t\t<label class=\" modal-request__label modal-request__reason3 input\"><input type=\"radio\" name=\"reason\" value=\"";
                echo ($context["reason3"] ?? null);
                echo "\" />";
                echo ($context["reason3"] ?? null);
                echo "</label>
\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t";
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t";
        // line 35
        if (($context["text_agree"] ?? null)) {
            // line 36
            echo "\t\t\t\t\t\t<label class=\"modal-request__agree input\"><input type=\"checkbox\" name=\"confirm\" value=\"1\" /><span>";
            echo ($context["text_agree"] ?? null);
            echo "</span></label>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</form>
\t\t\t\t<button type=\"button\" class=\"modal-request__btn btn btn-primary btn-lg\" data-loading-text=\"";
        // line 39
        echo ($context["text_loading"] ?? null);
        echo "\" onclick=\"uniRequestSend()\">";
        echo ($context["text_send"] ?? null);
        echo "</button>
\t\t\t\t<script>
\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\$('.modal-request__reason1, .modal-request__reason2').on('click', () => {
\t\t\t\t\t\t\t\$('.modal-request__mail, .modal-request__comment').addClass('hidden').attr('disabled', true);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$('.modal-request__reason3').on('click', () => {
\t\t\t\t\t\t\t\$('.modal-request__mail, .modal-request__comment').removeClass('hidden').attr('disabled', false);
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t";
        // line 50
        if (($context["mask_telephone"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t\$('.modal-request__phone').mask('";
            echo ($context["mask_telephone"] ?? null);
            echo "').data('start', 0).on('click', function() {
\t\t\t\t\t\t\tconst start = \$(this).val().indexOf('_');
\t\t\t\t\t\t\tif(!\$(this).data('start')) \$(this).data('start', start);
\t\t\t\t\t\t\tif(start == \$(this).data('start')) \$(this)[0].setSelectionRange(start, start);
\t\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t</script>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_request_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 57,  180 => 51,  178 => 50,  162 => 39,  159 => 38,  153 => 36,  151 => 35,  146 => 34,  143 => 33,  135 => 31,  132 => 30,  124 => 28,  121 => 27,  113 => 25,  110 => 24,  107 => 23,  101 => 22,  95 => 20,  85 => 18,  82 => 17,  70 => 15,  67 => 14,  59 => 12,  57 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_request_form.twig", "");
    }
}
