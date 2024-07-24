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

/* default/template/extension/module/ldev_smart_video_widget.twig */
class __TwigTemplate_a00f1bc0d3e2986b9d188eae51981cff71fdec279d549ce480697b32f863d6ed extends \Twig\Template
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
        echo "<div
        data-module-id=\"";
        // line 2
        echo ($context["module"] ?? null);
        echo "\"
        data-btn-close-action = \"";
        // line 3
        echo ($context["btn_close_action"] ?? null);
        echo "\"
        data-delay = \"";
        // line 4
        echo ($context["delay"] ?? null);
        echo "\"
        data-on-exiting = \"";
        // line 5
        echo ($context["on_exiting"] ?? null);
        echo "\"
     class=\"ldev-smart-video-widget widget-";
        // line 6
        echo ($context["module"] ?? null);
        echo " ldev-smart-video-widget-";
        echo ($context["widget_position"] ?? null);
        echo " ";
        if ( !($context["show_mobile"] ?? null)) {
            echo " widget-hide-mobile  ";
        }
        echo "\">
    <div class=\"widget-caption\">
        ";
        // line 8
        if (($context["video"] ?? null)) {
            // line 9
            echo "            <img width=\"42\" height=\"42\" src=\"/catalog/view/javascript/ldev_smart_video_widget/loader.gif\" class=\"widget-loader\">
            <video playsinline controlslist=\"nodownload\" muted
                    ";
            // line 11
            if (($context["autostart"] ?? null)) {
                echo " data-autoplay ";
            }
            // line 12
            echo "
                    ";
            // line 13
            if (($context["video_controls"] ?? null)) {
                echo " controls ";
            }
            // line 14
            echo "                ";
            if (($context["loop"] ?? null)) {
                echo " loop ";
            }
            // line 15
            echo "                width = \"";
            echo ($context["video_small_width"] ?? null);
            echo "\"
                height = \"";
            // line 16
            echo ($context["video_small_height"] ?? null);
            echo "\"
               data-video-small-width = \"";
            // line 17
            echo ($context["video_small_width"] ?? null);
            echo "\"
               data-video-small-height = \"";
            // line 18
            echo ($context["video_small_height"] ?? null);
            echo "\"
               data-video-big-width = \"";
            // line 19
            echo ($context["video_big_width"] ?? null);
            echo "\"
               data-video-big-height = \"";
            // line 20
            echo ($context["video_big_height"] ?? null);
            echo "\"
               data-restart-on-expanse = \"";
            // line 21
            echo ($context["restart_on_expanse"] ?? null);
            echo "\"
        >
            <source data-src=\"";
            // line 23
            echo ($context["video"] ?? null);
            echo "\"
                    type=\"video/mp4\">
            Sorry, your browser doesn't support embedded videos.
        </video>
        ";
        } elseif (        // line 27
($context["image"] ?? null)) {
            // line 28
            echo "
            <div
                    class=\"ldev-smart-video-widget-image\">
                <img
                        src=\"";
            // line 32
            echo ($context["image"] ?? null);
            echo "\"
                        data-src-small = \"";
            // line 33
            echo ($context["image"] ?? null);
            echo "\"
                        data-src-big = \"";
            // line 34
            echo ($context["thumb"] ?? null);
            echo "\"
                        data-image-click=\"";
            // line 35
            echo ($context["image_click"] ?? null);
            echo "\"
                        data-image-link = \"";
            // line 36
            echo ($context["image_link"] ?? null);
            echo "\"
                        alt=\"\" title=\"\">
            </div>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if (($context["description"] ?? null)) {
            // line 42
            echo "            <div class=\"ldev-smart-video-widget-description\">
                ";
            // line 43
            echo ($context["description"] ?? null);
            echo "
            </div>
        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ((($context["btn_1_text"] ?? null) || ($context["btn_2_text"] ?? null))) {
            // line 48
            echo "            <div class=\"ldev-smart-video-widget-buttons ";
            if (($context["btn_over"] ?? null)) {
                echo " widget-buttons-over  ";
            }
            echo "\">
            ";
            // line 49
            if (($context["btn_1_text"] ?? null)) {
                // line 50
                echo "            <a href=\"";
                echo ($context["btn_1_href"] ?? null);
                echo "\" class=\"btn btn-";
                echo ($context["btn_size"] ?? null);
                echo " btn-";
                echo ($context["btn_style"] ?? null);
                echo "\">";
                echo ($context["btn_1_text"] ?? null);
                echo "</a>
            ";
            }
            // line 52
            echo "            ";
            if (($context["btn_2_text"] ?? null)) {
                // line 53
                echo "                <a href=\"";
                echo ($context["btn_2_href"] ?? null);
                echo "\" class=\"btn btn-";
                echo ($context["btn_size"] ?? null);
                echo " btn-";
                echo ($context["btn_style"] ?? null);
                echo "\">";
                echo ($context["btn_2_text"] ?? null);
                echo "</a>
            ";
            }
            // line 55
            echo "            </div>

        ";
        }
        // line 58
        echo "        <span class=\"btn-close-widget\"
              data-module-id=\"";
        // line 59
        echo ($context["module"] ?? null);
        echo "\"
              data-btn-close=\"";
        // line 60
        echo ($context["btn_close"] ?? null);
        echo "\"
              data-btn-close-action = \"";
        // line 61
        echo ($context["btn_close_action"] ?? null);
        echo "\">×</span>
    </div>
</div>

";
        // line 65
        if (($context["custom_css"] ?? null)) {
            // line 66
            echo "<style>
    ";
            // line 67
            echo ($context["custom_css"] ?? null);
            echo "
</style>
";
        }
        // line 70
        echo "
";
        // line 71
        if (($context["custom_js"] ?? null)) {
            // line 72
            echo "    <script>
        ";
            // line 73
            echo ($context["custom_js"] ?? null);
            echo "
    </script>
";
        }
        // line 76
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ldev_smart_video_widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 76,  254 => 73,  251 => 72,  249 => 71,  246 => 70,  240 => 67,  237 => 66,  235 => 65,  228 => 61,  224 => 60,  220 => 59,  217 => 58,  212 => 55,  200 => 53,  197 => 52,  185 => 50,  183 => 49,  176 => 48,  174 => 47,  171 => 46,  165 => 43,  162 => 42,  160 => 41,  157 => 40,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  134 => 32,  128 => 28,  126 => 27,  119 => 23,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  94 => 16,  89 => 15,  84 => 14,  80 => 13,  77 => 12,  73 => 11,  69 => 9,  67 => 8,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/ldev_smart_video_widget.twig", "");
    }
}
