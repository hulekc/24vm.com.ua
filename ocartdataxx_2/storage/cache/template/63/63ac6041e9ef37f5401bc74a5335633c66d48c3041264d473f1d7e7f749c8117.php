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

/* extension/module/cache_cleaner.twig */
class __TwigTemplate_9f254c1ee6851913b16bec542bc3be59daf6f3b49a550b2f1a12dec79e37c5c7 extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 13
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\"><i class=\"fa fa-cog\"></i> ";
        // line 31
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-help\" data-toggle=\"tab\"><i class=\"fa fa-comment\"></i> ";
        // line 32
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-settings\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cache_cleaner_status\">";
        // line 37
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\" data-toggle=\"buttons\">
                    ";
        // line 40
        if (($context["cache_cleaner_status"] ?? null)) {
            echo " 
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"0\" autocomplete=\"off\">";
            // line 41
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\">";
            // line 42
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 43
            echo " 
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"1\" autocomplete=\"off\">";
            // line 45
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        }
        // line 46
        echo " 
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cache_cleaner_size\">";
        // line 51
        echo ($context["entry_size"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\" data-toggle=\"buttons\">
                    ";
        // line 54
        if (($context["cache_cleaner_size"] ?? null)) {
            echo " 
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"0\" autocomplete=\"off\">";
            // line 55
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"1\" autocomplete=\"off\" checked=\"checked\">";
            // line 56
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 57
            echo " 
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"0\" autocomplete=\"off\" checked=\"checked\">";
            // line 58
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"1\" autocomplete=\"off\">";
            // line 59
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        }
        // line 60
        echo " 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 71
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/cache_cleaner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 71,  196 => 60,  191 => 59,  187 => 58,  184 => 57,  179 => 56,  175 => 55,  171 => 54,  165 => 51,  158 => 46,  153 => 45,  149 => 44,  146 => 43,  141 => 42,  137 => 41,  133 => 40,  127 => 37,  119 => 32,  115 => 31,  110 => 29,  104 => 26,  99 => 23,  92 => 20,  88 => 19,  81 => 14,  71 => 13,  65 => 12,  60 => 10,  53 => 8,  49 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/cache_cleaner.twig", "");
    }
}
