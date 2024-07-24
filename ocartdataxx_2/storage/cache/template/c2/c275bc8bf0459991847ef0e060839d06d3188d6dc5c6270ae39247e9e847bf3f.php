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

/* catalog/product_list.twig */
class __TwigTemplate_cbe151d0ce0281880174ea50212cf9afeee9b122346e39f58cbe7f4d5d4535e8 extends \Twig\Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 41
        echo ($context["entry_model"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 42
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 45
        echo ($context["entry_price"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 46
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 49
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 50
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 53
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                
                
                  
                

                  ";
        // line 62
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 63
            echo "
                
                
                  
                
                
                <option value=\"1\" selected=\"selected\">";
            // line 69
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 77
            echo "
                
                
                  
                
                
                <option value=\"1\">";
            // line 83
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 91
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 92
            echo "
                
                
                  
                
                
                <option value=\"0\" selected=\"selected\">";
            // line 98
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 106
            echo "
                
                
                  
                
                
                <option value=\"0\">";
            // line 112
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 120
        echo "

              
              
                
              
              
              </select>
            </div>

        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-import-batch\">Import label</label>
          <select name=\"filter_import_batch\" id=\"input-import-batch\" class=\"form-control\">
            <option value=\"\"></option>
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["importLabels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gkdImportLabel"]) {
            // line 135
            echo "            <option value=\"";
            echo $context["gkdImportLabel"];
            echo "\" ";
            if ((($context["filter_import_batch"] ?? null) == $context["gkdImportLabel"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $context["gkdImportLabel"];
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gkdImportLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "          </select>
        </div>
      
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 141
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 149
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 152
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">


                <div class=\"\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 157
        echo ($context["text_mass_product_edit"] ?? null);
        echo "</h3></div>
                        <div class=\"panel-body\">

                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <label class=\"control-label\" for=\"input-edit-type\">";
        // line 163
        echo ($context["entry_mass_action"] ?? null);
        echo ":</label>
                                        <select name=\"edit_type\" class=\"form-control\" id=\"input-edit-type\">
                                            <option value=\"active\">";
        // line 165
        echo ($context["entry_active"] ?? null);
        echo "</option>
                                            <option value=\"disable\">";
        // line 166
        echo ($context["entry_disable"] ?? null);
        echo "</option>
                                            <option value=\"remove_category\">";
        // line 167
        echo ($context["entry_remove_category"] ?? null);
        echo "</option>
                                            <option value=\"add_category\">";
        // line 168
        echo ($context["entry_add_category"] ?? null);
        echo "</option>
                                            <option value=\"add_manufacturer\">";
        // line 169
        echo ($context["entry_add_manufacturer"] ?? null);
        echo "</option>
                                            <option value=\"remove_manufacturer\">";
        // line 170
        echo ($context["entry_remove_manufacturer"] ?? null);
        echo "</option>
                                            <option value=\"change_price\">";
        // line 171
        echo ($context["entry_change_price"] ?? null);
        echo "</option>
                                            <option value=\"change_special\">";
        // line 172
        echo ($context["entry_change_special"] ?? null);
        echo "</option>
                                        </select>
                                    </div>

                                    <div class=\"col-sm-7 edit-products-block\" id=\"block-remove-category\">
                                        <label class=\"control-label\" for=\"input-remove-category\">";
        // line 177
        echo ($context["entry_remove_category_id"] ?? null);
        echo ":</label>
                                        <select name=\"remove_category_id\" class=\"form-control\" id=\"input-remove-category\">
                                            <option value=\"\" disabled selected>";
        // line 179
        echo ($context["text_select_category"] ?? null);
        echo "</option>
                                            ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 181
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 181);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 181);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                                        </select>
                                    </div>

                                    <div class=\"col-sm-7 edit-products-block\" id=\"block-add-category\">
                                        <label class=\"control-label\" for=\"input-add-category\">";
        // line 187
        echo ($context["entry_add_category_id"] ?? null);
        echo ":</label>
                                        <select name=\"add_category_id\" class=\"form-control\" id=\"input-add-category\">
                                            <option value=\"\" disabled selected>";
        // line 189
        echo ($context["text_select_category"] ?? null);
        echo "</option>
                                            ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 191
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 191);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 191);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                                        </select>
                                    </div>

                                    <div class=\"col-sm-7 edit-products-block\" id=\"block-add-manufacturer\">
                                        <label class=\"control-label\" for=\"input-add-manufacturer\">";
        // line 197
        echo ($context["entry_add_manufacturer_id"] ?? null);
        echo ":</label>
                                        <select name=\"add_manufacturer_id\" class=\"form-control\" id=\"input-add-manufacturer\">
                                            <option value=\"\" disabled selected>";
        // line 199
        echo ($context["text_select_manufacturer"] ?? null);
        echo "</option>
                                            ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 201
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 201);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 201);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                                        </select>
                                    </div>

                                    <div class=\"col-sm-7 edit-products-block\" id=\"block-remove-manufacturer\">
                                        <label class=\"control-label\" for=\"input-remove-manufacturer\">";
        // line 207
        echo ($context["entry_remove_manufacturer_id"] ?? null);
        echo ":</label>
                                        <select name=\"remove_manufacturer_id\" class=\"form-control\" id=\"input-remove-manufacturer\">
                                            <option value=\"\" disabled selected>";
        // line 209
        echo ($context["text_select_manufacturer"] ?? null);
        echo "</option>
                                            ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
            // line 211
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer"] ?? null), "manufacturer_id", [], "any", false, false, false, 211);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["manufacturer"] ?? null), "name", [], "any", false, false, false, 211);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                                        </select>
                                    </div>

                                    <div class=\"col-sm-9 edit-products-block\" id=\"block-change-price\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-3\">
                                                <label class=\"control-label\" for=\"input-change-price-type\">";
        // line 219
        echo ($context["entry_change_price_type"] ?? null);
        echo ":</label>
                                                <select name=\"change_price_type\" id=\"input-change-price-type\" class=\"form-control\">
                                                    <option value=\"add_percent\">";
        // line 221
        echo ($context["text_add_percent"] ?? null);
        echo "</option>
                                                    <option value=\"deduct_percent\">";
        // line 222
        echo ($context["text_deduct_percent"] ?? null);
        echo "</option>
                                                    <option value=\"add_value\">";
        // line 223
        echo ($context["text_add_value"] ?? null);
        echo "</option>
                                                    <option value=\"deduct_value\">";
        // line 224
        echo ($context["text_deduct_value"] ?? null);
        echo "</option>
                                                </select>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <label class=\"control-label\" for=\"input-change-price-value\">";
        // line 228
        echo ($context["entry_change_price_value"] ?? null);
        echo ":</label>
                                                <input type=\"text\" name=\"change_price_value\" class=\"form-control\" placeholder=\"";
        // line 229
        echo ($context["entry_change_price_value"] ?? null);
        echo "\" id=\"input-change-price-value\">
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <label class=\"control-label\" for=\"input-change-price-round\">";
        // line 232
        echo ($context["entry_change_price_round"] ?? null);
        echo ":</label>
                                                <select name=\"change_price_round\" id=\"input-change-price-round\" class=\"form-control\">
                                                    <option value=\"\">";
        // line 234
        echo ($context["text_no_round"] ?? null);
        echo "</option>
                                                    <option value=\"more\">";
        // line 235
        echo ($context["text_more_round"] ?? null);
        echo "</option>
                                                    <option value=\"less\">";
        // line 236
        echo ($context["text_less_round"] ?? null);
        echo "</option>
                                                    <option value=\"math\">";
        // line 237
        echo ($context["text_math_round"] ?? null);
        echo "</option>
                                                    <option value=\"math_ten\">";
        // line 238
        echo ($context["text_math_ten"] ?? null);
        echo "</option>
                                                </select>
                                            </div>

                                            <div class=\"col-sm-3\">
                                                <label class=\"control-label\">";
        // line 243
        echo ($context["entry_change_price_special"] ?? null);
        echo ":</label>
                                                <div>
                                                    <div class=\"btn-group\" data-toggle=\"buttons\">
                                                        <label class=\"btn btn-default\"><input type=\"radio\" name=\"change_price_special\" value=\"1\"><i class=\"fa fa-check\"></i></label>
                                                        <label class=\"btn btn-default active\"><input type=\"radio\" name=\"change_price_special\" value=\"\" checked><i class=\"fa fa-remove\"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-sm-9 edit-products-block\" id=\"block-change-special\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-4\">
                                                <label class=\"control-label\" for=\"input-change-special-type\">";
        // line 257
        echo ($context["entry_change_special_type"] ?? null);
        echo ":</label>
                                                <select name=\"change_special_type\" id=\"input-change-special-type\" class=\"form-control\">
                                                    <option value=\"add_percent\">";
        // line 259
        echo ($context["text_add_percent"] ?? null);
        echo "</option>
                                                    <option value=\"deduct_percent\">";
        // line 260
        echo ($context["text_deduct_percent"] ?? null);
        echo "</option>
                                                    <option value=\"add_value\">";
        // line 261
        echo ($context["text_add_value"] ?? null);
        echo "</option>
                                                    <option value=\"deduct_value\">";
        // line 262
        echo ($context["text_deduct_value"] ?? null);
        echo "</option>
                                                </select>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <label class=\"control-label\" for=\"input-change-special-value\">";
        // line 266
        echo ($context["entry_change_special_value"] ?? null);
        echo ":</label>
                                                <input type=\"text\" name=\"change_special_value\" class=\"form-control\" placeholder=\"";
        // line 267
        echo ($context["entry_change_special_value"] ?? null);
        echo "\" id=\"input-change-special-value\">
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <label class=\"control-label\" for=\"input-change-special-round\">";
        // line 270
        echo ($context["entry_change_special_round"] ?? null);
        echo ":</label>
                                                <select name=\"change_special_round\" id=\"input-change-special-round\" class=\"form-control\">
                                                    <option value=\"\">";
        // line 272
        echo ($context["text_no_round"] ?? null);
        echo "</option>
                                                    <option value=\"more\">";
        // line 273
        echo ($context["text_more_round"] ?? null);
        echo "</option>
                                                    <option value=\"less\">";
        // line 274
        echo ($context["text_less_round"] ?? null);
        echo "</option>
                                                    <option value=\"math\">";
        // line 275
        echo ($context["text_math_round"] ?? null);
        echo "</option>
                                                    <option value=\"math_ten\">";
        // line 276
        echo ($context["text_math_ten"] ?? null);
        echo "</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-sm-12\">
                                        <hr>
                                    </div>

                                    <div class=\"col-sm-3\">
                                        <label class=\"control-label\" for=\"input-changed-products\">";
        // line 287
        echo ($context["entry_changed_products"] ?? null);
        echo ":</label>
                                        <select name=\"changed_products\" id=\"input-changed-products\" class=\"form-control\">
                                            <option value=\"selected\" selected>";
        // line 289
        echo ($context["entry_selected_products"] ?? null);
        echo "</option>
                                            <option value=\"all\">";
        // line 290
        echo ($context["entry_all_products"] ?? null);
        echo "</option>
                                            <!--option value=\"category\">Товары из категории</option-->
                                        </select>
                                    </div>

                                    <div class=\"col-sm-4 changed-products-block\" id=\"changed-products-category\">
                                        <label class=\"control-label\" for=\"input-changed-products-category\">Выберите категорию:</label>
                                        <select name=\"changed_products_category\" class=\"form-control\" id=\"input-changed-products-category\">
                                            <option value=\"\" disabled selected>";
        // line 298
        echo ($context["text_select_category"] ?? null);
        echo "</option>
                                            ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 300
            echo "                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 300);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 300);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                                        </select>
                                    </div>

                                    <div class=\"col-sm-2\">
                                        <label class=\"control-label\" style=\"opacity: 0;\">";
        // line 306
        echo ($context["text_action"] ?? null);
        echo ":</label>
                                        <div>
                                            <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 308
        echo ($context["edit_products"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i>&nbsp;&nbsp;";
        echo ($context["button_apply"] ?? null);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    \$('[name=\"edit_type\"]').change(function() {
                        \$('.edit-products-block').hide();
                        if (\$(this).val() == 'remove_category') {
                            \$('#block-remove-category').show();
                        } else if (\$(this).val() == 'add_category') {
                            \$('#block-add-category').show();
                        } else if (\$(this).val() == 'add_manufacturer') {
                            \$('#block-add-manufacturer').show();
                        } else if (\$(this).val() == 'remove_manufacturer') {
                            \$('#block-remove-manufacturer').show();
                        } else if (\$(this).val() == 'change_price') {
                            \$('#block-change-price').show();
                        } else if (\$(this).val() == 'change_special') {
                            \$('#block-change-special').show();
                        }
                    });

                    \$('[name=\"edit_type\"]').trigger('change');


                    \$('[name=\"changed_products\"]').change(function() {
                        \$('.changed-products-block').hide();
                        if (\$(this).val() == 'category') {
                            \$('#changed-products-category').show();
                        }
                    });

                    \$('[name=\"changed_products\"]').trigger('change');
                </script>

            
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 355
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 356
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 357
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 358
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 359
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 360
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 361
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 366
        if (($context["products"] ?? null)) {
            // line 367
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 368
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 369
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 369), ($context["selected"] ?? null))) {
                    // line 370
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 370);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 372
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 372);
                    echo "\" />
                      ";
                }
                // line 373
                echo "</td>
                    <td class=\"text-center\">";
                // line 374
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 374)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 374);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 374);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 375
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 375);
                echo "</td>
                    <td class=\"text-left\">";
                // line 376
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 376);
                echo "</td>
                    <td class=\"text-right\">";
                // line 377
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 377)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 377);
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 378
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 378);
                    echo "</div>
                      ";
                } else {
                    // line 380
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 380);
                    echo "
                      ";
                }
                // line 381
                echo "</td>
                    <td class=\"text-right\">";
                // line 382
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 382) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 382);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 382) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 382);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 382);
                    echo "</span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 383
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 383);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 384
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 384);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "                  ";
        } else {
            // line 388
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 389
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 392
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 398
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 399
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

 var filter_import_batch = \$('select[name=\\'filter_import_batch\\']').val();

  if (filter_import_batch != '*') {
\t\turl += '&filter_import_batch=' + encodeURIComponent(filter_import_batch);
\t}
      
\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 446
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 458
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 478
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 495
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1092 => 495,  1072 => 478,  1049 => 458,  1034 => 446,  984 => 399,  980 => 398,  972 => 392,  966 => 389,  963 => 388,  960 => 387,  949 => 384,  945 => 383,  929 => 382,  926 => 381,  920 => 380,  915 => 378,  909 => 377,  905 => 376,  901 => 375,  889 => 374,  886 => 373,  880 => 372,  874 => 370,  872 => 369,  869 => 368,  864 => 367,  862 => 366,  854 => 361,  836 => 360,  818 => 359,  800 => 358,  782 => 357,  764 => 356,  760 => 355,  708 => 308,  703 => 306,  697 => 302,  686 => 300,  682 => 299,  678 => 298,  667 => 290,  663 => 289,  658 => 287,  644 => 276,  640 => 275,  636 => 274,  632 => 273,  628 => 272,  623 => 270,  617 => 267,  613 => 266,  606 => 262,  602 => 261,  598 => 260,  594 => 259,  589 => 257,  572 => 243,  564 => 238,  560 => 237,  556 => 236,  552 => 235,  548 => 234,  543 => 232,  537 => 229,  533 => 228,  526 => 224,  522 => 223,  518 => 222,  514 => 221,  509 => 219,  501 => 213,  490 => 211,  486 => 210,  482 => 209,  477 => 207,  471 => 203,  460 => 201,  456 => 200,  452 => 199,  447 => 197,  441 => 193,  430 => 191,  426 => 190,  422 => 189,  417 => 187,  411 => 183,  400 => 181,  396 => 180,  392 => 179,  387 => 177,  379 => 172,  375 => 171,  371 => 170,  367 => 169,  363 => 168,  359 => 167,  355 => 166,  351 => 165,  346 => 163,  337 => 157,  329 => 152,  323 => 149,  312 => 141,  306 => 137,  291 => 135,  287 => 134,  271 => 120,  260 => 112,  252 => 106,  241 => 98,  233 => 92,  230 => 91,  219 => 83,  211 => 77,  200 => 69,  192 => 63,  190 => 62,  178 => 53,  170 => 50,  166 => 49,  158 => 46,  154 => 45,  146 => 42,  142 => 41,  134 => 38,  130 => 37,  123 => 33,  117 => 29,  109 => 25,  106 => 24,  98 => 20,  96 => 19,  91 => 16,  80 => 14,  76 => 13,  71 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
