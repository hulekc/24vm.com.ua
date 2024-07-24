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

/* extension/module/ldev_smart_video_widget.twig */
class __TwigTemplate_5d4981fd6a22e7ecc37c16107980a7478934c4039ed54f98eebcf5cea12b1bed extends \Twig\Template
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
        <button type=\"submit\" form=\"form-ldev-smart-video-widget\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["button_save"] ?? null) : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        ";
        // line 8
        if (($context["apply"] ?? null)) {
            // line 9
            echo "        <button id=\"apply\" class=\"btn btn-success\"><i class=\"fa fa-check\"> ";
            echo ($context["text_apply"] ?? null);
            echo "</i></button>
        ";
        }
        // line 11
        echo "        <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["button_cancel"] ?? null) : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 12
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["heading_title"] ?? null) : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">

      ";
        // line 22
        if (($context["success"] ?? null)) {
            // line 23
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 27
        echo "      ";
        if (($context["error_warning"] ?? null)) {
            // line 28
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 32
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 34
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["text_edit"] ?? null) : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ldev-smart-video-widget\" class=\"form-horizontal\">


            ";
        // line 40
        if ( !($context["s"] ?? null)) {
            // line 41
            echo "
            <h4>";
            // line 42
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["text_activation"] ?? null) : null);
            echo "</h4>
            <p class=\"alert alert-warning\">
                ";
            // line 44
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["text_mailto"] ?? null) : null);
            echo " <a href=\"mailto:seriusisu@gmail.com\">seriusisu@gmail.com</a>
            </p>
            <div class=\"col-sm-6\">
              <label class=\"control-label\">";
            // line 47
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["entry_key"] ?? null) : null);
            echo "</label>
              <div>
                <input type=\"hidden\" name=\"module_ldev_smart_video_widget_ks\" value=\"";
            // line 49
            echo ($context["k_s"] ?? null);
            echo "\">
                <input type=\"text\" name=\"form_set\" value=\"\" class=\"form-control\">
                <input type=\"hidden\" name=\"name\" value=\"";
            // line 51
            echo ($context["name"] ?? null);
            echo "\" class=\"form-control\">
                <input type=\"hidden\" name=\"status\" value=\"";
            // line 52
            echo ($context["status"] ?? null);
            echo "\" class=\"form-control\">

              </div>
            </div>

            ";
        } else {
            // line 58
            echo "

              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
            // line 61
            echo ($context["tab_general"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-video-setting\" data-toggle=\"tab\">";
            // line 62
            echo ($context["tab_video_setting"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-view-setting\" data-toggle=\"tab\">";
            // line 63
            echo ($context["tab_view_setting"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-buttons\" data-toggle=\"tab\">";
            // line 64
            echo ($context["tab_buttons"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-image\" data-toggle=\"tab\">";
            // line 65
            echo ($context["tab_image"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-pages\" data-toggle=\"tab\">";
            // line 66
            echo ($context["tab_pages"] ?? null);
            echo "</a></li>
                <li><a href=\"#tab-contacts\" data-toggle=\"tab\">";
            // line 67
            echo ($context["tab_contacts"] ?? null);
            echo "</a></li>
              </ul>

              <div class=\"tab-content\">
                <div id=\"tab-general\" class=\"tab-pane active\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 73
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["entry_name"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"name\" value=\"";
            // line 75
            echo ($context["name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\" />
                        ";
            // line 76
            if (($context["error_name"] ?? null)) {
                // line 77
                echo "                          <div class=\"text-danger\">";
                echo ($context["error_name"] ?? null);
                echo "</div>
                        ";
            }
            // line 79
            echo "                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
            // line 83
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["entry_status"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"status\" id=\"input-status\" class=\"form-control\">
                          ";
            // line 86
            if (($context["status"] ?? null)) {
                // line 87
                echo "                            <option value=\"1\" selected=\"selected\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["lang"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["text_enabled"] ?? null) : null);
                echo "</option>
                            <option value=\"0\">";
                // line 88
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["lang"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["text_disabled"] ?? null) : null);
                echo "</option>
                          ";
            } else {
                // line 90
                echo "                            <option value=\"1\">";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["text_enabled"] ?? null) : null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 91
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["text_disabled"] ?? null) : null);
                echo "</option>
                          ";
            }
            // line 93
            echo "                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                      <a href=\"#\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail btn btn-success\">
                          ";
            // line 100
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_video_upload", [], "any", false, false, false, 100);
            echo "
                      </a>
                      <input type=\"text\" name=\"video\" value=\"";
            // line 102
            echo ($context["video"] ?? null);
            echo "\" id=\"input-image\">

                      <br><small>";
            // line 104
            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["text_video_upload_description"] ?? null) : null);
            echo "</small>
                      <br><small>";
            // line 105
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["text_video_upload_description2"] ?? null) : null);
            echo "</small>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 110
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["entry_custom_css"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"custom_css\" rows=\"10\" class=\"form-control\">";
            // line 112
            echo ($context["custom_css"] ?? null);
            echo "</textarea>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 117
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["entry_custom_js"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"custom_js\" rows=\"10\" class=\"form-control\">";
            // line 119
            echo ($context["custom_js"] ?? null);
            echo "</textarea>
                    </div>
                  </div>
                </div>

                <div id=\"tab-video-setting\" class=\"tab-pane\">

                  <div class=\"form-group\">
                    <div class=\"col-sm-6\">
                      <label class=\"control-label\" for=\"input-limit\">";
            // line 128
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["entry_video_small_width"] ?? null) : null);
            echo "</label>
                      <input type=\"text\" name=\"video_small_width\" value=\"";
            // line 129
            echo ($context["video_small_width"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-6\">
                      <label class=\"control-label\" for=\"input-limit\">";
            // line 132
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["lang"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["entry_video_small_height"] ?? null) : null);
            echo "</label>
                      <input type=\"text\" name=\"video_small_height\" value=\"";
            // line 133
            echo ($context["video_small_height"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <div class=\"col-sm-6\">
                      <label class=\"control-label\" for=\"input-limit\"><span data-toggle=\"tooltip\" title=\"";
            // line 139
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["lang"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["entry_video_big_tooltip"] ?? null) : null);
            echo "\">";
            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["lang"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["entry_video_big_width"] ?? null) : null);
            echo "</span> </label>
                      <input type=\"text\" name=\"video_big_width\" value=\"";
            // line 140
            echo ($context["video_big_width"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-6\">
                      <label class=\"control-label\" for=\"input-limit\">";
            // line 143
            echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["lang"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["entry_video_big_height"] ?? null) : null);
            echo "</label>
                      <input type=\"text\" name=\"video_big_height\" value=\"";
            // line 144
            echo ($context["video_big_height"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 149
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["lang"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["entry_restart_on_expanse"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"restart_on_expanse\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 152
            if ((($context["restart_on_expanse"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["lang"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 153
            if ((($context["restart_on_expanse"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["lang"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 159
            echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["lang"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["entry_autostart_tooltip"] ?? null) : null);
            echo "\">";
            echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["lang"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["entry_autostart"] ?? null) : null);
            echo "</span> </label>
                    <div class=\"col-sm-10\">
                      <select name=\"autostart\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 162
            if ((($context["autostart"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["lang"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 163
            if ((($context["autostart"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["lang"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 169
            echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["lang"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["entry_loop"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"loop\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 172
            if ((($context["loop"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["lang"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 173
            if ((($context["loop"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["lang"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 179
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["lang"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["entry_video_controls"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"video_controls\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 182
            if ((($context["video_controls"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["lang"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 183
            if ((($context["video_controls"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["lang"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                </div>

                <div id=\"tab-view-setting\" class=\"tab-pane\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 192
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["lang"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["entry_delay_tooltip"] ?? null) : null);
            echo "\">";
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["lang"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["entry_delay"] ?? null) : null);
            echo "</span> </label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"delay\" value=\"";
            // line 194
            echo ($context["delay"] ?? null);
            echo "\" class=\"form-control\">
                    </div>
                  </div>


                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 200
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["lang"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["entry_widget_position"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"widget_position\"  class=\"form-control\">
                        <option value=\"center_top\" ";
            // line 203
            if ((($context["widget_position"] ?? null) == "center_top")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["lang"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["text_widget_position_center_top"] ?? null) : null);
            echo " </option>
                        <option value=\"right_top\" ";
            // line 204
            if ((($context["widget_position"] ?? null) == "right_top")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["lang"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["text_widget_position_right_top"] ?? null) : null);
            echo " </option>
                        <option value=\"left_top\" ";
            // line 205
            if ((($context["widget_position"] ?? null) == "left_top")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["lang"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["text_widget_position_left_top"] ?? null) : null);
            echo " </option>
                        <option value=\"left_bottom\" ";
            // line 206
            if ((($context["widget_position"] ?? null) == "left_bottom")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["lang"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["text_widget_position_left_bottom"] ?? null) : null);
            echo " </option>
                        <option value=\"right_bottom\" ";
            // line 207
            if ((($context["widget_position"] ?? null) == "right_bottom")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["lang"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["text_widget_position_right_bottom"] ?? null) : null);
            echo " </option>
                        <option value=\"center_bottom\" ";
            // line 208
            if ((($context["widget_position"] ?? null) == "center_bottom")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["lang"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["text_widget_position_center_bottom"] ?? null) : null);
            echo " </option>
                        <option value=\"left_middle\" ";
            // line 209
            if ((($context["widget_position"] ?? null) == "left_middle")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["lang"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["text_widget_position_left_middle"] ?? null) : null);
            echo " </option>
                        <option value=\"right_middle\" ";
            // line 210
            if ((($context["widget_position"] ?? null) == "right_middle")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["lang"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["text_widget_position_right_middle"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 216
            echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["lang"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["entry_show_mobile"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"show_mobile\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 219
            if ((($context["show_mobile"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["lang"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 220
            if ((($context["show_mobile"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["lang"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <div class=\"col-sm-12 \"><h4>";
            // line 226
            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["lang"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["entry_period"] ?? null) : null);
            echo "</h4></div>
                    <div class=\"col-sm-6\">
                      <label class=\"control-label\">";
            // line 228
            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["lang"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["entry_period_status"] ?? null) : null);
            echo "</label>
                      <select name=\"period\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 230
            if ((($context["period"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["lang"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["entry_period_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 231
            if ((($context["period"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["lang"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>

                    </div>
                    <div class=\"col-sm-6\">
                      <label class=\"control-label\">";
            // line 236
            echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["lang"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["entry_period_duration"] ?? null) : null);
            echo "</label>
                      <select name=\"period_duration\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 238
            if ((($context["period_duration"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["lang"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["entry_period_duration_0"] ?? null) : null);
            echo " </option>
                        <option value=\"3600\" ";
            // line 239
            if ((($context["period_duration"] ?? null) == "3600")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["lang"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["entry_period_duration_hour"] ?? null) : null);
            echo " </option>
                        <option value=\"86400\" ";
            // line 240
            if ((($context["period_duration"] ?? null) == "86400")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["lang"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["entry_period_duration_day"] ?? null) : null);
            echo " </option>
                        <option value=\"604800\" ";
            // line 241
            if ((($context["period_duration"] ?? null) == "604800")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["lang"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["entry_period_duration_week"] ?? null) : null);
            echo " </option>
                        <option value=\"864000\" ";
            // line 242
            if ((($context["period_duration"] ?? null) == "864000")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["lang"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["entry_period_duration_10days"] ?? null) : null);
            echo " </option>
                        <option value=\"2592000\" ";
            // line 243
            if ((($context["period_duration"] ?? null) == "2592000")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["lang"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["entry_period_duration_mounth"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>


                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 250
            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["lang"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["entry_btn_close"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"btn_close\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 253
            if ((($context["btn_close"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["lang"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 254
            if ((($context["btn_close"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["lang"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 260
            echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["lang"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["entry_btn_close_action"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"btn_close_action\"  class=\"form-control\">
                        <option value=\"remove\" ";
            // line 263
            if ((($context["btn_close_action"] ?? null) == "remove")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["lang"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["text_btn_close_action_remove"] ?? null) : null);
            echo " </option>
                        <option value=\"session\" ";
            // line 264
            if ((($context["btn_close_action"] ?? null) == "session")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["lang"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["text_btn_close_action_session"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 270
            echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["lang"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["entry_exiting"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"on_exiting\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 273
            if ((($context["on_exiting"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["lang"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 274
            if ((($context["on_exiting"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " >";
            echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["lang"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["text_enabled"] ?? null) : null);
            echo "  </option>
                      </select>

                      ";
            // line 277
            echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["lang"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["entry_exiting_description"] ?? null) : null);
            echo "

                    </div>
                  </div>





                </div>

                <div id=\"tab-buttons\" class=\"tab-pane\">
                  <ul class=\"nav nav-tabs language\">
                      ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 291
                echo "                        <li><a href=\"#language-";
                echo ($context["i"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 291);
                echo "\" data-toggle=\"tab\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 291);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 291);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 291);
                echo "</a></li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "                  </ul>
                  <div class=\"tab-content\">
                      ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 296
                echo "                        <div class=\"tab-pane\" id=\"language-";
                echo ($context["i"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 296);
                echo "\">
                          <div class=\"form-group\">
                            <div class=\"col-sm-12\"><label class=\"control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 298
                echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["lang"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["entry_btn_tooltip"] ?? null) : null);
                echo "\">";
                echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["lang"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["entry_btn_1"] ?? null) : null);
                echo "</span></label></div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"btn_1_text[";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 300);
                echo "]\" value=\"";
                echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["btn_1_text"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 300)] ?? null) : null);
                echo "\" placeholder=\"";
                echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["lang"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["entry_btn_1_text"] ?? null) : null);
                echo "\" class=\"form-control\" />
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"btn_1_href[";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 303);
                echo "]\" value=\"";
                echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["btn_1_href"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 303)] ?? null) : null);
                echo "\" placeholder=\"";
                echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["lang"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["entry_btn_1_href"] ?? null) : null);
                echo "\" class=\"form-control\" />
                            </div>
                          </div>



                          <div class=\"form-group\">
                            <div class=\"col-sm-12\"><label class=\"control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 310
                echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["lang"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["entry_btn_tooltip"] ?? null) : null);
                echo "\">";
                echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["lang"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["entry_btn_2"] ?? null) : null);
                echo "</span></label></div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"btn_2_text[";
                // line 312
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 312);
                echo "]\" value=\"";
                echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["btn_2_text"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 312)] ?? null) : null);
                echo "\" placeholder=\"";
                echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["lang"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["entry_btn_2_text"] ?? null) : null);
                echo "\" class=\"form-control\" />
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"btn_2_href[";
                // line 315
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 315);
                echo "]\" value=\"";
                echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = ($context["btn_2_href"] ?? null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 315)] ?? null) : null);
                echo "\" placeholder=\"";
                echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["lang"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["entry_btn_2_href"] ?? null) : null);
                echo "\" class=\"form-control\" />
                            </div>
                          </div>


                          <div class=\"form-group\">
                            <div class=\"col-sm-12\"><label class=\"control-label\"><span data-toggle=\"tooltip\" title=\"";
                // line 321
                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["lang"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["entry_description_tooltip"] ?? null) : null);
                echo "\">";
                echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["lang"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["entry_description"] ?? null) : null);
                echo "</span></label></div>
                            <div class=\"col-sm-12\">
                              <textarea name=\"description[";
                // line 323
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 323);
                echo "]\" class=\"form-control\">";
                echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = ($context["description"] ?? null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 323)] ?? null) : null);
                echo "</textarea>
                            </div>
                          </div>

                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 329
            echo "                  </div>


                  <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 333
            echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["lang"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["entry_btn_size"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-8\">
                      <select name=\"btn_size\"  class=\"form-control\">
                        <option value=\"xs\" ";
            // line 336
            if ((($context["btn_size"] ?? null) == "xs")) {
                echo " selected=\"selected\" ";
            }
            echo " > xs </option>
                        <option value=\"sm\" ";
            // line 337
            if ((($context["btn_size"] ?? null) == "sm")) {
                echo " selected=\"selected\" ";
            }
            echo " > sm </option>
                        <option value=\"\" ";
            // line 338
            if ((($context["btn_size"] ?? null) == "")) {
                echo " selected=\"selected\" ";
            }
            echo " > Default  </option>
                        <option value=\"lg\" ";
            // line 339
            if ((($context["btn_size"] ?? null) == "lg")) {
                echo " selected=\"selected\" ";
            }
            echo " > lg  </option>
                      </select>
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 345
            echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["lang"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["entry_btn_style"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-8\">
                      <select name=\"btn_style\"  class=\"form-control\">
                        <option value=\"default\" ";
            // line 348
            if ((($context["btn_style"] ?? null) == "default")) {
                echo " selected=\"selected\" ";
            }
            echo " > default </option>
                        <option value=\"primary\" ";
            // line 349
            if ((($context["btn_style"] ?? null) == "primary")) {
                echo " selected=\"selected\" ";
            }
            echo " > primary </option>
                        <option value=\"success\" ";
            // line 350
            if ((($context["btn_style"] ?? null) == "success")) {
                echo " selected=\"selected\" ";
            }
            echo " > success </option>
                        <option value=\"info\" ";
            // line 351
            if ((($context["btn_style"] ?? null) == "info")) {
                echo " selected=\"selected\" ";
            }
            echo " > info </option>
                        <option value=\"warning\" ";
            // line 352
            if ((($context["btn_style"] ?? null) == "warning")) {
                echo " selected=\"selected\" ";
            }
            echo " > warning </option>
                        <option value=\"danger\" ";
            // line 353
            if ((($context["btn_style"] ?? null) == "danger")) {
                echo " selected=\"selected\" ";
            }
            echo " > danger </option>
                        <option value=\"link\" ";
            // line 354
            if ((($context["btn_style"] ?? null) == "link")) {
                echo " selected=\"selected\" ";
            }
            echo " > link </option>
                      </select>
                    </div>
                  </div>


                  <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 361
            echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["lang"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["entry_btn_over"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-8\">
                      <select name=\"btn_over\"  class=\"form-control\">
                        <option value=\"0\" ";
            // line 364
            if ((($context["btn_over"] ?? null) == "0")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["lang"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["text_disabled"] ?? null) : null);
            echo " </option>
                        <option value=\"1\" ";
            // line 365
            if ((($context["btn_over"] ?? null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["lang"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["text_enabled"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>


                </div>

                <div id=\"tab-image\" class=\"tab-pane\">

                  <div class=\"form-group\">
                    <label class=\"col-sm-12\">";
            // line 376
            echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["lang"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["entry_image"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-12\"><a href=\"\" id=\"thumb-image2\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 377
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"image\" value=\"";
            // line 378
            echo ($context["image"] ?? null);
            echo "\" id=\"input-image2\" />
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                     <h4>";
            // line 384
            echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["lang"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["text_image_small"] ?? null) : null);
            echo "</h4>
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"image_small_width\" value=\"";
            // line 387
            echo ($context["image_small_width"] ?? null);
            echo "\" placeholder=\"";
            echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["lang"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["entry_width"] ?? null) : null);
            echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"image_small_height\" value=\"";
            // line 390
            echo ($context["image_small_height"] ?? null);
            echo "\" placeholder=\"";
            echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = ($context["lang"] ?? null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["entry_height"] ?? null) : null);
            echo "\" class=\"form-control\">
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                      <h4>";
            // line 396
            echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["lang"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["text_image_big"] ?? null) : null);
            echo "</h4>
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"image_big_width\" value=\"";
            // line 399
            echo ($context["image_big_width"] ?? null);
            echo "\" placeholder=\"";
            echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["lang"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["entry_width"] ?? null) : null);
            echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"image_big_height\" value=\"";
            // line 402
            echo ($context["image_big_height"] ?? null);
            echo "\" placeholder=\"";
            echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["lang"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["entry_height"] ?? null) : null);
            echo "\" class=\"form-control\">
                    </div>
                  </div>

                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 407
            echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["lang"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["entry_image_click"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"image_click\"  class=\"form-control\">
                        <option value=\"popup\" ";
            // line 410
            if ((($context["image_click"] ?? null) == "popup")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["lang"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["text_image_popup"] ?? null) : null);
            echo " </option>
                        <option value=\"link\" ";
            // line 411
            if ((($context["image_click"] ?? null) == "link")) {
                echo " selected=\"selected\" ";
            }
            echo " > ";
            echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = ($context["lang"] ?? null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["text_image_link"] ?? null) : null);
            echo " </option>
                      </select>
                    </div>
                  </div>


                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
            // line 418
            echo (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["lang"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["entry_image_link"] ?? null) : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"image_link\" value=\"";
            // line 420
            echo ($context["image_link"] ?? null);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>

                </div>

                <div id=\"tab-pages\" class=\"tab-pane\">

                  <div class=\"alert alert-info\">";
            // line 428
            echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["lang"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["text_pages"] ?? null) : null);
            echo "</div>
                  <div class=\"alert alert-warning\">";
            // line 429
            echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["lang"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["text_pages_description"] ?? null) : null);
            echo "</div>

                  <div class=\"form-group\">
                    <div class=\"col-sm-3\">
                      <h4>";
            // line 433
            echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["lang"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["entry_products"] ?? null) : null);
            echo "</h4>
                      <div>
                        <input type=\"text\" name=\"related\" value=\"\" placeholder=\"\" id=\"input-related\" class=\"form-control\" />
                        <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                            ";
            // line 437
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["module_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
                // line 438
                echo "                              <div id=\"product-related";
                echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 438);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 438);
                echo "
                                <input type=\"hidden\" name=\"module_products[]\" value=\"";
                // line 439
                echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 439);
                echo "\" />
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            echo "                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"row\">

                    <div class=\"col-sm-4\">
                      <h4>";
            // line 450
            echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["lang"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["entry_categories"] ?? null) : null);
            echo "</h4>
                      <div class=\"well well-sm\" style=\"height:320px; overflow: auto;margin-bottom:0\">
                        <div class=\"row\">

                            ";
            // line 454
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shop_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 455
                echo "                              <div class=\"col-sm-12\">
                                <div class=\"checkbox-inline\">
                                  <label>
                                    <input type=\"checkbox\" name=\"module_categories[]\" value=\"";
                // line 458
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 458);
                echo "\"
                                            ";
                // line 459
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 459), ($context["module_categories"] ?? null))) {
                    echo " checked = \"checked\" ";
                }
                echo " />
                                      ";
                // line 460
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 460);
                echo "
                                  </label>
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            echo "                        </div>
                      </div>
                      <button class=\"check_all btn btn-default btn-sm\">";
            // line 467
            echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["lang"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["btn_check_all"] ?? null) : null);
            echo "</button>
                      <button class=\"uncheck_all btn btn-default btn-sm\">";
            // line 468
            echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["lang"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["btn_uncheck_all"] ?? null) : null);
            echo "</button>
                    </div>
                    <div class=\"col-sm-4\">
                      <h4>";
            // line 471
            echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["lang"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["entry_manufacturers"] ?? null) : null);
            echo "</h4>
                      <div class=\"well well-sm\" style=\"height:320px; overflow: auto;margin-bottom:0\">
                        <div class=\"row\">

                            ";
            // line 475
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shop_manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 476
                echo "                              <div class=\"col-sm-12\">
                                <div class=\"checkbox-inline\">
                                  <label>
                                    <input type=\"checkbox\" name=\"module_manufacturers[]\" value=\"";
                // line 479
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 479);
                echo "\"
                                            ";
                // line 480
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 480), ($context["module_manufacturers"] ?? null))) {
                    echo " checked = \"checked\" ";
                }
                echo " />
                                      ";
                // line 481
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 481);
                echo "
                                  </label>
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "                        </div>
                      </div>
                      <button class=\"check_all btn btn-default btn-sm\">";
            // line 488
            echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = ($context["lang"] ?? null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["btn_check_all"] ?? null) : null);
            echo "</button>
                      <button class=\"uncheck_all btn btn-default btn-sm\">";
            // line 489
            echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["lang"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["btn_uncheck_all"] ?? null) : null);
            echo "</button>
                    </div>
                    <div class=\"col-sm-4\">
                      <h4>";
            // line 492
            echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["lang"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["entry_informations"] ?? null) : null);
            echo "</h4>
                      <div class=\"well well-sm\" style=\"height:320px; overflow: auto;margin-bottom:0\">
                        <div class=\"row\">

                            ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shop_informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 497
                echo "                              <div class=\"col-sm-12\">
                                <div class=\"checkbox-inline\">
                                  <label>
                                    <input type=\"checkbox\" name=\"module_informations[]\" value=\"";
                // line 500
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 500);
                echo "\"
                                            ";
                // line 501
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 501), ($context["module_informations"] ?? null))) {
                    echo " checked = \"checked\" ";
                }
                echo " />
                                      ";
                // line 502
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 502);
                echo "
                                  </label>
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 507
            echo "                        </div>
                      </div>
                      <button class=\"check_all btn btn-default btn-sm\">";
            // line 509
            echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = ($context["lang"] ?? null)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["btn_check_all"] ?? null) : null);
            echo "</button>
                      <button class=\"uncheck_all btn btn-default btn-sm\">";
            // line 510
            echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = ($context["lang"] ?? null)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["btn_uncheck_all"] ?? null) : null);
            echo "</button>
                    </div>
                  </div>

                </div>

                <div id=\"tab-contacts\" class=\"tab-pane\">
                  ";
            // line 517
            echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = ($context["lang"] ?? null)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["text_contact"] ?? null) : null);
            echo "
                </div>

              </div>


          <input type=\"hidden\" name=\"ldev_video_widget_ks\" value=\"";
            // line 523
            echo ($context["k_s"] ?? null);
            echo "\">




          ";
        }
        // line 529
        echo "
        </form>
      </div>
    </div>
  </div>



</div>

<script>
    \$('.language li:first-of-type a').tab('show');


    \$(function () {
        \$('#apply').on('click', function () {
            var action_url = \"";
        // line 545
        echo ($context["apply"] ?? null);
        echo "\";
            \$(\"#form-ldev-smart-video-widget\").attr('action', action_url.replace(/&amp;/g, '&'));

            console.log(action_url.replace(/&amp;/g, '&'));
            \$('#form-ldev-smart-video-widget').submit();
        })
    });


    //check-uncheck
    \$(function () {
        \$('.check_all').on('click', function (e) {
            e.preventDefault();
            \$(this).closest('div').find('input[type=\"checkbox\"]').prop('checked', true)
        });

        \$('.uncheck_all').on('click', function (e) {
            e.preventDefault();
            \$(this).closest('div').find('input[type=\"checkbox\"]').prop('checked', false)
        })
    });


    // Related
    \$('input[name=\\'related\\']').autocomplete({
        'source': function(request, response) {
//            var filter_name = request['term'];
            var filter_name = request;
            \$.ajax({
                url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 574
        echo ($context["token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(filter_name),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item['name'],
                            value: item['product_id']
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('input[name=\\'related\\']').val('');

            \$('#product-related' + item['value']).remove();

            \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"module_products[]\" value=\"' + item['value'] + '\" /></div>');
        }
    });


    \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
        \$(this).parent().remove();
    });


</script>



";
        // line 605
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ldev_smart_video_widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1453 => 605,  1419 => 574,  1387 => 545,  1369 => 529,  1360 => 523,  1351 => 517,  1341 => 510,  1337 => 509,  1333 => 507,  1322 => 502,  1316 => 501,  1312 => 500,  1307 => 497,  1303 => 496,  1296 => 492,  1290 => 489,  1286 => 488,  1282 => 486,  1271 => 481,  1265 => 480,  1261 => 479,  1256 => 476,  1252 => 475,  1245 => 471,  1239 => 468,  1235 => 467,  1231 => 465,  1220 => 460,  1214 => 459,  1210 => 458,  1205 => 455,  1201 => 454,  1194 => 450,  1184 => 442,  1175 => 439,  1168 => 438,  1164 => 437,  1157 => 433,  1150 => 429,  1146 => 428,  1135 => 420,  1130 => 418,  1116 => 411,  1108 => 410,  1102 => 407,  1092 => 402,  1084 => 399,  1078 => 396,  1067 => 390,  1059 => 387,  1053 => 384,  1044 => 378,  1038 => 377,  1034 => 376,  1016 => 365,  1008 => 364,  1002 => 361,  990 => 354,  984 => 353,  978 => 352,  972 => 351,  966 => 350,  960 => 349,  954 => 348,  948 => 345,  937 => 339,  931 => 338,  925 => 337,  919 => 336,  913 => 333,  907 => 329,  893 => 323,  886 => 321,  873 => 315,  863 => 312,  856 => 310,  842 => 303,  832 => 300,  825 => 298,  817 => 296,  813 => 295,  809 => 293,  792 => 291,  788 => 290,  772 => 277,  762 => 274,  754 => 273,  748 => 270,  735 => 264,  727 => 263,  721 => 260,  708 => 254,  700 => 253,  694 => 250,  680 => 243,  672 => 242,  664 => 241,  656 => 240,  648 => 239,  640 => 238,  635 => 236,  623 => 231,  615 => 230,  610 => 228,  605 => 226,  592 => 220,  584 => 219,  578 => 216,  565 => 210,  557 => 209,  549 => 208,  541 => 207,  533 => 206,  525 => 205,  517 => 204,  509 => 203,  503 => 200,  494 => 194,  487 => 192,  471 => 183,  463 => 182,  457 => 179,  444 => 173,  436 => 172,  430 => 169,  417 => 163,  409 => 162,  401 => 159,  388 => 153,  380 => 152,  374 => 149,  364 => 144,  360 => 143,  352 => 140,  346 => 139,  335 => 133,  331 => 132,  323 => 129,  319 => 128,  307 => 119,  302 => 117,  294 => 112,  289 => 110,  281 => 105,  277 => 104,  272 => 102,  267 => 100,  258 => 93,  253 => 91,  248 => 90,  243 => 88,  238 => 87,  236 => 86,  230 => 83,  224 => 79,  218 => 77,  216 => 76,  212 => 75,  207 => 73,  198 => 67,  194 => 66,  190 => 65,  186 => 64,  182 => 63,  178 => 62,  174 => 61,  169 => 58,  160 => 52,  156 => 51,  151 => 49,  146 => 47,  140 => 44,  135 => 42,  132 => 41,  130 => 40,  124 => 37,  118 => 34,  114 => 32,  106 => 28,  103 => 27,  95 => 23,  93 => 22,  86 => 17,  75 => 15,  71 => 14,  66 => 12,  59 => 11,  53 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ldev_smart_video_widget.twig", "");
    }
}
