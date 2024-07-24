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

/* default/template/extension/module/youtube_product_video.twig */
class __TwigTemplate_801f3e4fa773f68285df55bf4fe345cf60251b486b0567e3fa562309d1bc24ab extends \Twig\Template
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
        if (($context["youtube_video_code"] ?? null)) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_output_type", [], "any", false, false, false, 2) == "button")) {
                // line 3
                echo "        <style>
            #youtube_product_video_container {
                position: relative;
                padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
                padding-top: 30px;
                height: 0;
                overflow: hidden;
            }
            #youtube_product_video_container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <div class=\"modal fade\" tabindex=\"-1\" id=\"youtube_product_video_modal\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h3 class=\"modal-title\">";
                // line 24
                echo ($context["youtube_product_video_modal_title"] ?? null);
                echo "</h3>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"youtube_product_video_container\"><iframe src=\"https://www.youtube.com/embed/";
                // line 27
                echo ($context["youtube_video_code"] ?? null);
                echo "?enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"pull-right\">
                            <button class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-close\"></i> ";
                // line 31
                echo ($context["youtube_product_video_button_close_text"] ?? null);
                echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function(\$){\$(document).ready(function(){
                var youtube_video_button_html = '<div class=\"text-";
                // line 39
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_align", [], "any", false, false, false, 39);
                echo "\"><button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#youtube_product_video_modal\"><i class=\"fa fa-play\"></i> ";
                echo ($context["youtube_product_video_modal_title"] ?? null);
                echo "</button></div>';
                \$('";
                // line 40
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_selector", [], "any", false, false, false, 40);
                echo "').";
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_position", [], "any", false, false, false, 40);
                echo "(youtube_video_button_html);

                \$('#youtube_product_video_modal').on('hidden.bs.modal', function () {
                    var iframe = document.querySelector('#youtube_product_video_container iframe').contentWindow;
                    iframe.postMessage('{\"event\":\"command\",\"func\":\"pauseVideo\",\"args\":\"\"}', '*');
                });

            });})(jQuery);
        </script>
    ";
            }
            // line 50
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_output_type", [], "any", false, false, false, 50) == "tab")) {
                // line 51
                echo "        <style>
            #youtube_product_video_container {
                position: relative;
                padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
                padding-top: 30px;
                height: 0;
                overflow: hidden;
            }
            #youtube_product_video_container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <script>
            (function(\$){\$(document).ready(function(){

                var youtube_video_tab_title = '<li><a href=\"#youtube_video_tab_content\" data-toggle=\"tab\">";
                // line 70
                echo ($context["youtube_product_video_tab_title"] ?? null);
                echo "</a></li>';

                var youtube_video_tab_content = '<div class=\"tab-pane\" id=\"youtube_video_tab_content\"><div id=\"youtube_product_video_container\"><iframe src=\"https://www.youtube.com/embed/";
                // line 72
                echo ($context["youtube_video_code"] ?? null);
                echo "?enablejsapi=1\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div></div>';

                \$('";
                // line 74
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_tab_selector", [], "any", false, false, false, 74);
                echo "').";
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_tab_position", [], "any", false, false, false, 74);
                echo "(youtube_video_tab_title);

                \$('";
                // line 76
                echo twig_get_attribute($this->env, $this->source, ($context["youtube_product_video_setting"] ?? null), "youtube_product_video_tab_content_selector", [], "any", false, false, false, 76);
                echo "').after(youtube_video_tab_content);

            });})(jQuery);
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/youtube_product_video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 76,  144 => 74,  139 => 72,  134 => 70,  113 => 51,  110 => 50,  95 => 40,  89 => 39,  78 => 31,  71 => 27,  65 => 24,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/youtube_product_video.twig", "");
    }
}
