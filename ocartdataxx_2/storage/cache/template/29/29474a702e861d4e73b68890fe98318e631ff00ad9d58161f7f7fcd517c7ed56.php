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

/* marketplace/modification.twig */
class __TwigTemplate_8c68dcdf98a7fb9ec363842ece0d4530d3beb1a76d3e4074f69bd88bbd7a9722 extends \Twig\Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a> <a href=\"";
        echo ($context["clear"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a>
<a href=\"";
        // line 6
        echo ($context["log_error"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_log_error"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-exclamation-triangle\"></i></a> <a href=\"";
        echo ($context["files"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_files"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-list-alt\"></i></a> <a href=\"";
        echo ($context["new"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_new"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-modification').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_refresh"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_log"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form action=\"";
        // line 40
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 46
        if ((($context["sort"] ?? null) == "name")) {
            // line 47
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 49
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        }
        // line 50
        echo "</td>
                      <td class=\"text-left\">";
        // line 51
        if ((($context["sort"] ?? null) == "author")) {
            // line 52
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 54
            echo "                        <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                        ";
        }
        // line 55
        echo "</td>
                      <td class=\"text-left\">";
        // line 56
        if ((($context["sort"] ?? null) == "version")) {
            // line 57
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 59
            echo "                        <a href=\"";
            echo ($context["sort_version"] ?? null);
            echo "\">";
            echo ($context["column_version"] ?? null);
            echo "</a>
                        ";
        }
        // line 60
        echo "</td>
                      <td class=\"text-left\">";
        // line 61
        if ((($context["sort"] ?? null) == "status")) {
            // line 62
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 64
            echo "                        <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                        ";
        }
        // line 65
        echo "</td>
                      <td class=\"text-left\">";
        // line 66
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 67
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 69
            echo "                        <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                        ";
        }
        // line 70
        echo "</td>
                      <td class=\"text-right\">";
        // line 71
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 75
        if (($context["modifications"] ?? null)) {
            // line 76
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 77
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 78
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 78), ($context["selected"] ?? null))) {
                    // line 79
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 79);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 81
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 81);
                    echo "\" />
                        ";
                }
                // line 82
                echo "</td>
                      <td class=\"text-left\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 83);
                echo "</td>
                      <td class=\"text-left\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 84);
                echo "</td>
                      <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 85);
                echo "</td>
                      <td class=\"text-left\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "status", [], "any", false, false, false, 86);
                echo "</td>
                      <td class=\"text-left\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 87);
                echo "</td>
                      <td class=\"text-right\">";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 89);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_link"] ?? null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                        ";
                } else {
                    // line 91
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                        ";
                }
                // line 93
                echo "
        <a href=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "edit", [], "any", false, false, false, 94);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
        <a href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "download", [], "any", false, false, false, 95);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_download"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-cloud-download\"></i></a>
      
                        ";
                // line 97
                if ( !twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 98);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                        ";
                } else {
                    // line 100
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "disable", [], "any", false, false, false, 100);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                        ";
                }
                // line 101
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    ";
        } else {
            // line 105
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 106
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 109
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 114
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 115
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 120
        echo ($context["log"] ?? null);
        echo "</textarea>
            </p>
            <div class=\"text-center\"><a href=\"";
        // line 122
        echo ($context["clear_log"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 129
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketplace/modification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 129,  418 => 122,  413 => 120,  405 => 115,  401 => 114,  394 => 109,  388 => 106,  385 => 105,  382 => 104,  374 => 101,  366 => 100,  358 => 98,  356 => 97,  349 => 95,  343 => 94,  340 => 93,  336 => 91,  328 => 89,  326 => 88,  322 => 87,  318 => 86,  314 => 85,  310 => 84,  306 => 83,  303 => 82,  297 => 81,  291 => 79,  289 => 78,  286 => 77,  281 => 76,  279 => 75,  272 => 71,  269 => 70,  261 => 69,  251 => 67,  249 => 66,  246 => 65,  238 => 64,  228 => 62,  226 => 61,  223 => 60,  215 => 59,  205 => 57,  203 => 56,  200 => 55,  192 => 54,  182 => 52,  180 => 51,  177 => 50,  169 => 49,  159 => 47,  157 => 46,  148 => 40,  141 => 36,  137 => 35,  130 => 31,  123 => 28,  115 => 24,  112 => 23,  104 => 19,  102 => 18,  96 => 14,  85 => 12,  81 => 11,  76 => 9,  69 => 7,  55 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/modification.twig", "");
    }
}
