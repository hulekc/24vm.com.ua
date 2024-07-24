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

/* unishop2/template/extension/module/uni_notification.twig */
class __TwigTemplate_28d7619f4699b0f52503ee10ded23f48df733fdce71f75c5f1261c4ef2b9ace3 extends \Twig\Template
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
        if (($context["status"] ?? null)) {
            // line 2
            echo "\t<div id=\"uni-notification\" class=\"notification ";
            echo (((($context["status"] ?? null) == 1)) ? ("fixed") : ("modal"));
            echo " hidden\">
\t\t";
            // line 3
            if ((($context["status"] ?? null) == 1)) {
                // line 4
                echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"notification__wrapper fixed\">
\t\t\t\t\t<div class=\"notification__text fixed\">";
                // line 6
                echo ($context["text"] ?? null);
                echo "</div>
\t\t\t\t\t<div class=\"notification__buttons\">
\t\t\t\t\t\t";
                // line 8
                if (($context["cancel_show"] ?? null)) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<button class=\"notification__button btn btn-sm cancel\">";
                    echo ($context["cancel_text"] ?? null);
                    echo "</button>
\t\t\t\t\t\t";
                }
                // line 11
                echo "\t\t\t\t\t\t<button class=\"notification__button btn btn-sm btn-primary\">";
                echo ($context["apply_text"] ?? null);
                echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            } else {
                // line 16
                echo "\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"notification__wrapper\">
\t\t\t\t\t\t\t<div class=\"notification__text\">";
                // line 20
                echo ($context["text"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t<div class=\"notification__buttons\">
\t\t\t\t\t\t\t\t";
                // line 22
                if (($context["cancel_show"] ?? null)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"notification__button btn btn-sm btn-default\">";
                    echo ($context["cancel_text"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t<button class=\"notification__button btn btn-sm btn-primary\">";
                echo ($context["apply_text"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 32
            echo "\t</div>
\t<script>
\t\$(function() {\t
\t\tlet uni_notification = \$('#uni-notification');
\t\t
\t\tif(!document.cookie.match('notificationOffTime')) {
\t\t\tuni_notification.removeClass('hidden');
\t
\t\t\t";
            // line 40
            if ((($context["status"] ?? null) == 2)) {
                // line 41
                echo "\t\t\t\tuni_notification.modal({
\t\t\t\t\tkeyboard: false,
\t\t\t\t\tbackdrop: 'static',
\t\t\t\t});
\t\t\t\t
\t\t\t\tuni_notification.addClass(uniJsVars.popup_effect_in).modal('show')
\t\t\t";
            }
            // line 48
            echo "\t\t
\t\t\t\$('.notification__button.btn-primary').on('click', () => {
\t\t\t\t\$.get('index.php?route=extension/module/uni_notification/apply');
\t\t\t\tnotificationClose();
\t\t\t});
\t\t
\t\t\t\$('.notification__button.btn-default, .notification__button.cancel').on('click', () => {
\t\t\t\t";
            // line 55
            if (($context["cancel_close"] ?? null)) {
                // line 56
                echo "\t\t\t\t\twindow.close();
\t\t\t\t\twindow.history.back();
\t\t\t\t";
            } else {
                // line 59
                echo "\t\t\t\t\tnotificationClose();
\t\t\t\t";
            }
            // line 61
            echo "\t\t\t});
\t\t
\t\t\tfunction notificationClose() {
\t\t\t\t";
            // line 64
            if ((($context["status"] ?? null) == 1)) {
                // line 65
                echo "\t\t\t\t\tuni_notification.fadeOut('fast', () => {
\t\t\t\t\t\tuni_notification.remove();
\t\t\t\t\t});
\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\tuni_notification.modal('hide');
\t\t\t\t";
            }
            // line 71
            echo "\t\t\t}
\t\t}
\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 71,  156 => 69,  150 => 65,  148 => 64,  143 => 61,  139 => 59,  134 => 56,  132 => 55,  123 => 48,  114 => 41,  112 => 40,  102 => 32,  91 => 25,  85 => 23,  83 => 22,  78 => 20,  72 => 16,  63 => 11,  57 => 9,  55 => 8,  50 => 6,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/extension/module/uni_notification.twig", "");
    }
}
