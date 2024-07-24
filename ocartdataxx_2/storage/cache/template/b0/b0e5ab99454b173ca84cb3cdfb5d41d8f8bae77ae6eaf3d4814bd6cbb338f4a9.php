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

/* default/template/product/allreviewspage.twig */
class __TwigTemplate_68eb39e5c4801caad5ed5654c4b8170692bfc6e19723b3632e9650a60bbec490 extends \Twig\Template
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
        echo "
<div class=\"container\">
 <ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t";
            if ((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 6
                echo "\t\t\t\t<li><a href=\"";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
                echo "\"><span>";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
                echo "</span></a></li>
\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t<li>";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["breadcrumb"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["text"] ?? null) : null);
                echo "</li>
\t\t\t";
            }
            // line 10
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 21
        if (($context["module_header"] ?? null)) {
            // line 22
            echo "      <h1 class=\"heading_title_reviews\"><span>";
            echo ($context["module_header"] ?? null);
            echo "</span></h1>
      ";
        }
        // line 24
        echo "      ";
        if (($context["reviews"] ?? null)) {
            // line 25
            echo "      <div id=\"review-extended\">
          <div class=\"all-reviews\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 28
                echo "        <div class=\"review-list\">
         <div class=\"review-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 30
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["review"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["prod_href"] ?? null) : null);
                echo "\"><img src=\"";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["review"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["prod_thumb"] ?? null) : null);
                echo "\" alt=\"";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["review"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["prod_name"] ?? null) : null);
                echo "\" title=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["review"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["prod_name"] ?? null) : null);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\" style=\"overflow:hidden\">
              <div class=\"reviews-sign\">
                <div class=\"reviews-author\">
\t\t\t\t ";
                // line 34
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["review"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["purchased"] ?? null) : null)) {
                    echo "<span class=\"purchased\"><i class=\"fa fa-box-check\" title=\"";
                    echo ($context["text_already_buy"] ?? null);
                    echo "\" aria-hidden=\"true\"></i></span>";
                }
                // line 35
                echo "\t\t\t\t ";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["review"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["author"] ?? null) : null);
                echo "
\t\t\t\t</div>
                <div class=\"reviews-date\">";
                // line 37
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["review"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["date_added"] ?? null) : null);
                echo "</div>
              </div>
              <div class=\"product-name\"><h4><a href=\"";
                // line 39
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["review"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["prod_href"] ?? null) : null);
                echo "\">";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["review"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["prod_name"] ?? null) : null);
                echo "</a></h4></div>
              ";
                // line 40
                if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["review"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["rating"] ?? null) : null)) {
                    // line 41
                    echo "              <div class=\"rating\">
                ";
                    // line 42
                    $context["i"] = 1;
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 43
                        echo "                ";
                        if (((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["review"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["rating"] ?? null) : null) < $context["i"])) {
                            // line 44
                            echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                        } else {
                            // line 46
                            echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
                ";
                        }
                        // line 48
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "              </div>
              ";
                }
                // line 51
                echo "              <p class=\"reviews-description\">";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["review"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["description"] ?? null) : null);
                echo "</p><hr>
              ";
                // line 52
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["extended_reviews"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["limitations"] ?? null) : null)) {
                    // line 53
                    echo "              ";
                    if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["review"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["plus"] ?? null) : null)) {
                        // line 54
                        echo "              <p></span><strong class='plus'>";
                        echo ($context["text_plus"] ?? null);
                        echo " </strong><span>";
                        echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["review"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["plus"] ?? null) : null);
                        echo "</p>
              ";
                    }
                    // line 56
                    echo "              ";
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["review"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["minus"] ?? null) : null)) {
                        // line 57
                        echo "              <p></span><strong class='minus'>";
                        echo ($context["text_minus"] ?? null);
                        echo " </strong><span>";
                        echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["review"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["minus"] ?? null) : null);
                        echo "</p>
                ";
                    }
                    // line 59
                    echo "              ";
                }
                // line 60
                echo "
          ";
                // line 61
                if ( !twig_test_empty((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["review"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["images"] ?? null) : null))) {
                    // line 62
                    echo "              <div class=\"owl-carousel-photo thumbnails reviews-thumbnails\">
            ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["review"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["images"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 64
                        echo "                <div class=\"item image-thumbnails ex-image-additional\"><a class=\"ex-thumbnail\" href=\"";
                        echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["image"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["popup"] ?? null) : null);
                        echo "\"> <img src=\"";
                        echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["image"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["thumb"] ?? null) : null);
                        echo "\" class =\"";
                        echo ((((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["image"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["type"] ?? null) : null) == "0")) ? ("image-crop") : ("imgbb"));
                        echo "\" /></a></div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "              </div>
          ";
                }
                // line 68
                echo "
          ";
                // line 69
                if ( !twig_test_empty((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["review"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["videos"] ?? null) : null))) {
                    // line 70
                    echo "              <div class=\"owl-carousel-videos thumbnails\">
            ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["review"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["videos"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                        // line 72
                        echo "                <div class=\"item videos-thumbnails\"><a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=";
                        echo $context["video"];
                        echo "?autoplay=1&rel=0\"><img src=\"//img.youtube.com/vi/";
                        echo $context["video"];
                        echo "/mqdefault.jpg\" alt=\"\" class=\"youtube-click\">
                  <svg viewBox=\"0 0 57 40\" id=\"icon-youtube\" xmlns=\"http://www.w3.org/2000/svg\" width=\"30px\" height=\"100%\">
                    <path fill= \"#ff1818\" d=\"M28.537 0C21.938 0 15.326.2 8.715.6 1.702 1 .701 6.5.301 11.9c-.4 5.4-.4 10.8 0 16.2S1.702 39 8.715 39.4c13.123.8 26.347.8 39.57 0 7.012-.4 8.014-5.9 8.414-11.3.4-5.4.4-10.8 0-16.2-.4-5.4-1.402-10.9-8.414-11.3C41.724.2 35.135 0 28.537 0zm-6.098 11l16.329 8.5L22.439 28V11z\"></path>
                    <path fill=\"#fff\" d=\"M22.439 11.002l16.3 8.5-16.3 8.5v-17z\"></path></svg>
                </a></div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "        </div>
          ";
                }
                // line 80
                echo "              <div class=\"review-container-footer\">
              <div class=\"review-rating-change-buttons\">
              <span class=\"change-rating-button br-r\">
                <a class=\"review-vote-positive\" data-value=\"";
                // line 83
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["review"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["review_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></a>
                <span class=\"review-vote-count\" data-value=\"";
                // line 84
                echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["review"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["likes"] ?? null) : null);
                echo "\" id=\"vote_count_positive-";
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["review"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["review_id"] ?? null) : null);
                echo "\">";
                if (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["review"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["likes"] ?? null) : null) > 0)) {
                    echo " ";
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["review"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["likes"] ?? null) : null);
                }
                echo "</span>
              </span>
              <span class=\"change-rating-button\">
                <a class=\"review-vote-negative\" data-value=\"";
                // line 87
                echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["review"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["review_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i></a>
                <span class=\"review-vote-count\" data-value=\"";
                // line 88
                echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["review"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["dislikes"] ?? null) : null);
                echo "\" id=\"vote_count_negative-";
                echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["review"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["review_id"] ?? null) : null);
                echo "\">";
                if (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["review"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["dislikes"] ?? null) : null) > 0)) {
                    echo " ";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["review"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["dislikes"] ?? null) : null);
                }
                echo "</span>
              </span>
              </div>
              ";
                // line 91
                if ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["extended_reviews"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["answer"] ?? null) : null)) {
                    // line 92
                    echo "              <button type=\"button\" class=\"btn btn-light fl-l review-answer-button\" data-value=\"";
                    echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["review"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["review_id"] ?? null) : null);
                    echo "\" data-product=\"";
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["review"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["product_id"] ?? null) : null);
                    echo "\"><i class=\"fa fa-arrow-right mr\"></i> ";
                    echo ($context["text_reply"] ?? null);
                    echo "</button>
              ";
                }
                // line 94
                echo "              <div class=\"review_note\" id=\"review-note-";
                echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["review"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["review_id"] ?? null) : null);
                echo "\"></div>
              </div>
              <div class=\"review-answer-container\" id=\"review_answer_container";
                // line 96
                echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["review"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["review_id"] ?? null) : null);
                echo "\"></div>
              ";
                // line 97
                if (( !twig_test_empty((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["review"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["admin_reply"] ?? null) : null)) ||  !twig_test_empty((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["review"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["children_reviews"] ?? null) : null)))) {
                    // line 98
                    echo "              <div class=\"review-childrens-container\">
              ";
                    // line 99
                    if ( !twig_test_empty((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["review"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["admin_reply"] ?? null) : null))) {
                        // line 100
                        echo "              <div class=\"review-answer-title-container\">
                <div class=\"review-author\"><span class=\"review-author-name\">";
                        // line 101
                        echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["review"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["admin_name"] ?? null) : null);
                        echo "</span><span class = \"verification-check\" data-toggle=\"tooltip\" data-original-title=\"";
                        echo ($context["text_admin_answer"] ?? null);
                        echo "\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></span></div>
              </div>
              <div class=\"review-text-container\">
                <div class=\"co-sm-12 comment-text\">
              <p>";
                        // line 105
                        echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["review"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["admin_reply"] ?? null) : null);
                        echo "</p>
              </div>
              </div>
              ";
                    }
                    // line 109
                    echo "              ";
                    if ( !twig_test_empty((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["review"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["children_reviews"] ?? null) : null))) {
                        // line 110
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["review"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["children_reviews"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_review"]) {
                            // line 111
                            echo "                    <div class=\"review-answer-title-container\">
                      <div class=\"review-author\"><span class=\"review-author-name\">";
                            // line 112
                            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["children_review"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["author"] ?? null) : null);
                            echo "</span></div>
                    <div class=\"review-date\">";
                            // line 113
                            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["children_review"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["date_added"] ?? null) : null);
                            echo "</div>
                  </div>
                      <div class=\"review-text-container\">
                        <div class=\"co-sm-12 comment-text\">
                      <p>";
                            // line 117
                            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["children_review"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["text"] ?? null) : null);
                            echo "</p>
                      </div>
                  </div>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_review'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 121
                        echo "              ";
                    }
                    // line 122
                    echo "              </div>
              ";
                }
                // line 124
                echo "            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        <!-- media-add-popup -->
          <div class=\"hidden\" id=\"hidden-popups\">
            <form class=\"form-horizontal\" id=\"form-answer-review\">
              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <label class=\"control-label\" for=\"input-review\">";
            // line 133
            echo ($context["text_comment"] ?? null);
            echo "</label>
                  <textarea name=\"text\" rows=\"5\" id=\"input-answer-review\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <label class=\"control-label\" for=\"input-name\">";
            // line 139
            echo ($context["entry_name"] ?? null);
            echo "</label>
                  <input type=\"text\" name=\"name\" value=\"";
            // line 140
            echo ($context["customer_name"] ?? null);
            echo "\" id=\"input-answer-name\" class=\"form-control\" />
                </div>
              </div>
              ";
            // line 143
            echo ($context["captcha"] ?? null);
            echo "
              <button type=\"button\" class=\"btn btn-primary fl-r button-answer-review\"  data-loading-text=\"";
            // line 144
            echo ($context["text_loading"] ?? null);
            echo "\">";
            echo ($context["leave_feedback"] ?? null);
            echo "</button>
              <button type=\"button\" class=\"btn btn-cancel fl-l\" id=\"review-cancel-button\">";
            // line 145
            echo ($context["text_cancel"] ?? null);
            echo "</button>
            </form>
          </div>
      </div>
    </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 151
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"pagination-text\">";
            // line 152
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 155
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 157
        echo "

      ";
        // line 159
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 160
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script>

\$(document).ready(function() {
  ";
        // line 165
        if ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["extended_reviews"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["all_owl_photo_status"] ?? null) : null)) {
            // line 166
            echo "  \$('.owl-carousel-photo').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    items : ";
            // line 170
            echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["extended_reviews"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["all_photo_carousel_1200"] ?? null) : null);
            echo ",
    pagination: true,
    navigation: true,
    navigationText: [\"<i class='fa fa-angle-left'></i>\", \"<i class='fa fa-angle-right'></i>\"],
    itemsCustom : [
                  [0, ";
            // line 175
            echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["extended_reviews"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["all_photo_carousel_340"] ?? null) : null);
            echo "],
                  [340, ";
            // line 176
            echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["extended_reviews"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["all_photo_carousel_480"] ?? null) : null);
            echo "],
                  [480, ";
            // line 177
            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["extended_reviews"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["all_photo_carousel_768"] ?? null) : null);
            echo "],
                  [768, ";
            // line 178
            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["extended_reviews"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["all_photo_carousel_1199"] ?? null) : null);
            echo "],
                  [1200, ";
            // line 179
            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["extended_reviews"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["all_photo_carousel_1200"] ?? null) : null);
            echo "],
                ],
  });
  ";
        }
        // line 183
        echo "  ";
        if ((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["extended_reviews"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["all_owl_video_status"] ?? null) : null)) {
            // line 184
            echo "  \$('.owl-carousel-videos').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      pagination: true,
      items : ";
            // line 189
            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["extended_reviews"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["all_video_carousel_1200"] ?? null) : null);
            echo ",
      navigation: true,
      navigationText: [\"<i class='fa fa-angle-left'></i>\", \"<i class='fa fa-angle-right'></i>\"],
      itemsCustom : [
                    [0, ";
            // line 193
            echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["extended_reviews"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["all_video_carousel_340"] ?? null) : null);
            echo "],
                    [340, ";
            // line 194
            echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["extended_reviews"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["all_video_carousel_480"] ?? null) : null);
            echo "],
                    [480, ";
            // line 195
            echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["extended_reviews"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["all_video_carousel_768"] ?? null) : null);
            echo "],
                    [768, ";
            // line 196
            echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["extended_reviews"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["all_video_carousel_1199"] ?? null) : null);
            echo "],
                    [1200, ";
            // line 197
            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["extended_reviews"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["all_video_carousel_1200"] ?? null) : null);
            echo "],
                  ],
  });
  ";
        }
        // line 201
        echo "\$('.image-thumbnails').magnificPopup({
  type:'image',
  delegate: 'a',
  gallery: {
    enabled:true,
  },
  callbacks: {
  open: function() {
  \$('.container').addClass('blur');
  },
  close: function() {
  \$('.container').removeClass('blur');
  }
  }
});
\$('.popup-youtube, .popup-video, .popup-gmaps').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    preloader: true,
    callbacks: {
    open: function() {
    \$('.container').addClass('blur');
    },
    close: function() {
    \$('.container').removeClass('blur');
    }
    }
});
});
var product_id;
var review_id;
var note_block;
var form = \$('#form-answer-review');
\$(document).on('click','.review-answer-button',function(){
  review_id = \$(this).data(\"value\");
  product_id = \$(this).data(\"product\");
  var block = \$('#review_answer_container'+review_id);
  note_block = \$(\"#review-note-\"+review_id);
  ";
        // line 239
        if (($context["answer_guest"] ?? null)) {
            // line 240
            echo "    if(!\$(block).children(form).length > 0){
  \$(form).hide().appendTo(block).slideDown(300);
  }
  ";
        } else {
            // line 244
            echo "    \$('.alert-success, .alert-danger').remove();
    \$(note_block).append('<div class=\"alert alert-danger m-0\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 245
            echo ($context["text_login"] ?? null);
            echo "</div>');
    ";
        }
        // line 247
        echo "});

\$('#review-cancel-button').on('click', function(){
  var block = \$('#hidden-popups');
  \$(form).slideUp(200).delay(300).queue(function (next) {
    \$(this).appendTo(block);
    next();
  });
  \$('.alert-success, .alert-danger').remove();
});

\$('.button-answer-review').on('click',function(){
  var form = \$('#form-answer-review');
  \$.ajax({
    url: 'index.php?route=product/extended_reviews/writeAnswer&product-id=' + product_id + '&parent_id=' + review_id,
    type: 'post',
    dataType: 'json',
    data: \$(form).serialize(),
    success: function(json) {
      \$('.review-container-footer .alert').remove();
      if (json['error']) {
        \$(note_block).append('<div class=\"alert alert-danger m-0\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('#review-cancel-button').click();
        \$(note_block).append('<div class=\"alert alert-success m-0\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
      }
    }
  });
});
\$('.review-vote-negative').on('click', function() {
  \$('.review-container-footer .alert').remove();
  var id = \$(this).data(\"value\");
  var votename = \"vote\"+id;
  var note_block = \$(\"#review-note-\"+id);
  ";
        // line 285
        if (($context["likes_guest"] ?? null)) {
            // line 286
            echo "  if(localStorage.getItem(votename) == null){
  var vote_count_span = \$('#vote_count_negative-'+id);
  var vote_count = parseInt(vote_count_span.data(\"value\"));
    \$.ajax({
      url: 'index.php?route=product/extended_reviews/minusReviewRating',
  \t\ttype: 'post',
  \t\tdata: { review_id : id } ,
      dataType: 'json',
      success: function(json) {
        if (json['success']) {
        \$(vote_count_span).text(vote_count + 1);
        localStorage.setItem(votename , true);
      }
      }
    });
    \$(note_block).append('<div class=\"alert alert-success m-0\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i>&nbsp; ";
            // line 301
            echo ($context["thank_for_rating"] ?? null);
            echo "</div>');
  }
  else{
    \$(note_block).append('<div class=\"alert alert-warning m-0\">";
            // line 304
            echo ($context["already_rating"] ?? null);
            echo "</div>');
  }
  ";
        } else {
            // line 307
            echo "    \$(note_block).append('<div class=\"alert alert-info m-0\"><i class=\"fa fa-exclamation\" aria-hidden=\"true\"></i>&nbsp; ";
            echo ($context["text_login"] ?? null);
            echo "</div>');
    ";
        }
        // line 309
        echo "});
\$('.review-vote-positive').on('click', function() {
  \$('.review-container-footer .alert').remove();
  var id = \$(this).data(\"value\");
  var votename = \"vote\"+id;
  var note_block = \$(\"#review-note-\"+id);
  ";
        // line 315
        if (($context["likes_guest"] ?? null)) {
            // line 316
            echo "  if(localStorage.getItem(votename) == null){
  var vote_count_span = \$('#vote_count_positive-'+id);
  var vote_count = parseInt(vote_count_span.data(\"value\"));
    \$.ajax({
      url: 'index.php?route=product/extended_reviews/plusReviewRating',
  \t\ttype: 'post',
  \t\tdata: { review_id : id } ,
      dataType: 'json',
      success: function(json) {
        \$('.success-note').remove();
        if (json['success']) {
        \$(vote_count_span).text(vote_count + 1);
        localStorage.setItem(votename , true);
      }
    }
    });
    \$(note_block).append('<div class=\"alert alert-success m-0\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i>&nbsp; ";
            // line 332
            echo ($context["thank_for_rating"] ?? null);
            echo "</div>');
  }
  else{
      \$(note_block).append('<div class=\"alert alert-warning m-0\">";
            // line 335
            echo ($context["already_rating"] ?? null);
            echo "</div>');
  }
  ";
        } else {
            // line 338
            echo "    \$(note_block).append('<div class=\"alert alert-info m-0\"><i class=\"fa fa-exclamation\" aria-hidden=\"true\"></i>&nbsp; ";
            echo ($context["text_login"] ?? null);
            echo "</div>');
    ";
        }
        // line 340
        echo "});
</script>
<style>
.reviews-sign{
  overflow: hidden;
}
.ex-image-additional{
  height: ";
        // line 347
        echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["extended_reviews"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["all_thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 348
        echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["extended_reviews"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["all_thumb_width"] ?? null) : null);
        echo "px;
  border-radius: ";
        // line 349
        echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["extended_reviews"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["all_border_radius_photo"] ?? null) : null);
        echo "px;
}
.ex-image-additional .image-crop{
  height: ";
        // line 352
        echo ((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["extended_reviews"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["all_thumb_height"] ?? null) : null) * 1.8);
        echo "px;
  width: ";
        // line 353
        echo ((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["extended_reviews"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["all_thumb_width"] ?? null) : null) * 1.8);
        echo "px;
}
.imgbb{
  height: ";
        // line 356
        echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["extended_reviews"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["all_thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 357
        echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["extended_reviews"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["all_thumb_width"] ?? null) : null);
        echo "px;
}
.videos-thumbnails img{
  height: ";
        // line 360
        echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["extended_reviews"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["all_video_thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 361
        echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["extended_reviews"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["all_video_thumb_width"] ?? null) : null);
        echo "px;
}
.videos-thumbnails a{
  height: ";
        // line 364
        echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["extended_reviews"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["all_video_thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 365
        echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["extended_reviews"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["all_video_thumb_width"] ?? null) : null);
        echo "px;
  border-radius: ";
        // line 366
        echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["extended_reviews"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["all_border_radius_video"] ?? null) : null);
        echo "px;
}
</style>
";
        // line 369
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/allreviewspage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  823 => 369,  817 => 366,  813 => 365,  809 => 364,  803 => 361,  799 => 360,  793 => 357,  789 => 356,  783 => 353,  779 => 352,  773 => 349,  769 => 348,  765 => 347,  756 => 340,  750 => 338,  744 => 335,  738 => 332,  720 => 316,  718 => 315,  710 => 309,  704 => 307,  698 => 304,  692 => 301,  675 => 286,  673 => 285,  633 => 247,  628 => 245,  625 => 244,  619 => 240,  617 => 239,  577 => 201,  570 => 197,  566 => 196,  562 => 195,  558 => 194,  554 => 193,  547 => 189,  540 => 184,  537 => 183,  530 => 179,  526 => 178,  522 => 177,  518 => 176,  514 => 175,  506 => 170,  500 => 166,  498 => 165,  490 => 160,  486 => 159,  482 => 157,  476 => 155,  470 => 152,  466 => 151,  457 => 145,  451 => 144,  447 => 143,  441 => 140,  437 => 139,  428 => 133,  421 => 128,  412 => 124,  408 => 122,  405 => 121,  395 => 117,  388 => 113,  384 => 112,  381 => 111,  376 => 110,  373 => 109,  366 => 105,  357 => 101,  354 => 100,  352 => 99,  349 => 98,  347 => 97,  343 => 96,  337 => 94,  327 => 92,  325 => 91,  312 => 88,  308 => 87,  295 => 84,  291 => 83,  286 => 80,  282 => 78,  267 => 72,  263 => 71,  260 => 70,  258 => 69,  255 => 68,  251 => 66,  238 => 64,  234 => 63,  231 => 62,  229 => 61,  226 => 60,  223 => 59,  215 => 57,  212 => 56,  204 => 54,  201 => 53,  199 => 52,  194 => 51,  190 => 49,  184 => 48,  180 => 46,  176 => 44,  173 => 43,  168 => 42,  165 => 41,  163 => 40,  157 => 39,  152 => 37,  146 => 35,  140 => 34,  127 => 30,  123 => 28,  119 => 27,  115 => 25,  112 => 24,  106 => 22,  104 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  70 => 11,  64 => 10,  58 => 8,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/allreviewspage.twig", "");
    }
}
