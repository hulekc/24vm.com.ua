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

/* extension/module/webp.twig */
class __TwigTemplate_10348160bbdae6275c70ec6885fa89070cf60aa0825bff2fc673595e0848dd67 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_refresh"] ?? null);
        echo "\" id=\"button-refresh\"><i class=\"fa fa-refresh\"></i></button>
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
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 35
        echo ($context["text_alert"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_webp_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 41
        if (($context["module_webp_status"] ?? null)) {
            // line 42
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 45
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 48
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quality\">";
        // line 52
        echo ($context["entry_quality"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default value-control\" type=\"button\" data-action=\"minus\"><i class=\"fa fa-minus\"></i></button>
                    </span>
                    <input type=\"number\" name=\"module_webp_quality\" value=\"";
        // line 58
        echo ($context["module_webp_quality"] ?? null);
        echo "\" min=\"1\" max=\"100\" placeholder=\"";
        echo ($context["entry_quality"] ?? null);
        echo "\" class=\"form-control text-center\" />
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default value-control\" type=\"button\" data-action=\"plus\"><i class=\"fa fa-plus\"></i></button>
                    </span>                    
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\">
  \$(document).on('click','.value-control',function(){
    var action = \$(this).attr('data-action');
    var value  = parseFloat(\$('input[name=\\'module_webp_quality\\']').val());
    if (action == \"plus\" && value < 100) {
      value++;
    }
    if (action == \"minus\" && value > 1) {
      value--;
    }
    \$('input[name=\\'module_webp_quality\\']').val(value);
  });

  \$('#button-refresh').on('click', function() {
      \$.ajax({
        url: 'index.php?route=extension/module/webp/refresh&user_token=";
        // line 86
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
          \$('#button-refresh').button('loading');
        },
        complete: function() {
          \$('#button-refresh').button('reset');
        },
      });
  });
  </script>
</div>
";
        // line 99
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/webp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 99,  201 => 86,  168 => 58,  159 => 52,  153 => 48,  148 => 46,  143 => 45,  138 => 43,  133 => 42,  131 => 41,  125 => 38,  119 => 35,  115 => 34,  108 => 30,  101 => 26,  97 => 24,  89 => 20,  87 => 19,  81 => 15,  70 => 13,  66 => 12,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/webp.twig", "");
    }
}
