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

/* default/template/product/ex_store_reviews.twig */
class __TwigTemplate_3a0336ad3f103a7c6c5289ce9d05c6e4841b8b770253b2b1a38b734b808cfbe5 extends \Twig\Template
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
                echo ($context["module_header"] ?? null);
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
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 21
        if (($context["module_header"] ?? null)) {
            // line 22
            echo "      ";
        }
        // line 23
        if (($context["reviews"] ?? null)) {
            // line 24
            echo "<div class=\"uni-wrapper\">
\t\t\t<div class=\"unireview__wrapper row\">
\t<div class=\"unireview__forms col-sm-12 col-md-9 col-lg-9 col-xxl-11\">
  <div id=\"review-extended\">
      <div class=\"uni-block__line review-ex\">
        <h1>";
            // line 29
            echo ($context["module_header"] ?? null);
            echo "</h1>
        <div class=\"uni-form\">
    ";
            // line 31
            if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["all_media"] ?? null) : null) && ( !twig_test_empty(($context["total_videos"] ?? null)) ||  !twig_test_empty(($context["total_images"] ?? null))))) {
                // line 32
                echo "  <div class=\"review-media-all\">
    ";
                // line 33
                if ( !twig_test_empty(($context["total_videos"] ?? null))) {
                    // line 34
                    echo "      <p class=\"review-all-photo-title\">";
                    echo ($context["customers_video"] ?? null);
                    echo "</p>
      <div class=\"owl-carousel-videos thumbnails\">
        ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["total_videos"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                        // line 37
                        echo "          <div class=\"videos-thumbnails item\"><a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=";
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
                    // line 43
                    echo "      </div>
        ";
                }
                // line 45
                echo "        ";
                if ( !twig_test_empty(($context["total_images"] ?? null))) {
                    // line 46
                    echo "          <p class=\"review-all-photo-title\">";
                    echo ($context["customers_photo"] ?? null);
                    echo "</p>
          <div class=\"owl-carousel-photo all-reviews-thumbnails\">
            ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["total_images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                        // line 49
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["images"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 50
                            echo "            <div class=\"item ex-image-additional\">
              <a class=\"ex-thumbnail\" href=\"";
                            // line 51
                            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["image"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["popup"] ?? null) : null);
                            echo "\"> <img src=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["image"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["thumb"] ?? null) : null);
                            echo "\" class = \"";
                            echo ((((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["image"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["type"] ?? null) : null) == "0")) ? ("image-crop") : ("imgbb"));
                            echo "\" /></a>
            </div>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "          </div>
        ";
                }
                // line 57
                echo "  </div>
";
            }
            // line 59
            echo "  <div class=\"fl-l\">
    <div class=\"form-group input-group input-group-sm\">
      <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 61
            echo ($context["sort_title"] ?? null);
            echo "</label>
      <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 64
                echo "        ";
                if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["sorts"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["value"] ?? null) : null) == ($context["sort"] ?? null))) {
                    // line 65
                    echo "        <option value=\"";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["sorts"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["href"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["sorts"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["text"] ?? null) : null);
                    echo "</option>
        ";
                } else {
                    // line 67
                    echo "        <option value=\"";
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["sorts"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["sorts"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["text"] ?? null) : null);
                    echo "</option>
        ";
                }
                // line 69
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "      </select>
    </div>
  
  <div class=\"fl-r pd-0\">
<a class=\"btn btn-primary to-write-review\" href=\"javascript:;\" onclick=\"\$('html,body').animate({scrollTop: \$('#form-review').offset().top}, 500);\"><i class=\"fas fa-pencil-alt\"></i> ";
            // line 74
            echo ($context["text_write"] ?? null);
            echo "</a>
     </div>
   </div>
</div>
</div>
";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 80
                echo "<div class=\"review-container\" ";
                echo (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["micro"] ?? null) : null)) ? ("itemscope itemtype=\"http://schema.org/Review\"") : (""));
                echo " >
  ";
                // line 81
                if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["micro"] ?? null) : null)) {
                    // line 82
                    echo "\t<meta itemprop=\"name\" content=\"";
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["company_name"] ?? null) : null);
                    echo "\">
  <meta itemprop=\"datePublished\" content=\"";
                    // line 83
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["review"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["date_added"] ?? null) : null);
                    echo "\">
  <meta itemprop=\"url\" content=\"";
                    // line 84
                    echo ($context["module_url"] ?? null);
                    echo "\">

  <div itemprop=\"itemReviewed\" itemscope itemtype=\"https://schema.org/Organization\">
\t\t<meta itemprop=\"name\" content=\"";
                    // line 87
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["company_name"] ?? null) : null);
                    echo "\"/>
\t\t<meta itemprop=\"address\" content=\"";
                    // line 88
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["company_address"] ?? null) : null);
                    echo "\"/>
\t\t<meta itemprop=\"telephone\" content=\"";
                    // line 89
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["company_phone"] ?? null) : null);
                    echo "\" />
\t</div>

  <div itemprop=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">
  <meta itemprop=\"worstRating\" content = \"1\">
  <meta itemprop=\"ratingValue\" content = \"";
                    // line 94
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["review"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["rating"] ?? null) : null);
                    echo "\">
  <meta itemprop=\"bestRating\" content = \"5\">
  </div>
  ";
                }
                // line 98
                echo "  <div class=\"review-title-container\">
      <div class=\"review-logo\">
         <i class=\"fal fa-user-edit\"></i>
      </div>
    <div class=\"review-author\"  ";
                // line 102
                echo (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["micro"] ?? null) : null)) ? ("itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\"") : (""));
                echo ">
      <span class=\"review-author-name\" ";
                // line 103
                echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["micro"] ?? null) : null)) ? ("itemprop=\"name\"") : (""));
                echo ">";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["review"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["author"] ?? null) : null);
                echo "</span>
    </div>
  <div class=\"review-date\">";
                // line 105
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["review"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["date_added"] ?? null) : null);
                echo "</div>
</div>
    <div class=\"review-text-container\">
      <div class=\"co-sm-12 comment-text\" ";
                // line 108
                echo (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["micro"] ?? null) : null)) ? ("itemprop=\"reviewBody\"") : (""));
                echo ">
    <div class=\"rating-container\">
    ";
                // line 110
                if (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["review"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["rating"] ?? null) : null) != 0)) {
                    // line 111
                    echo "    ";
                    $context["i"] = 1;
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "    ";
                        if (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["review"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["rating"] ?? null) : null) < $context["i"])) {
                            // line 113
                            echo "    <span class=\"fa star-stack\"><i class=\"fa fa-star fa-stack-2x star-gray\"></i></span>
    ";
                        } else {
                            // line 115
                            echo "    <span class=\"fa star-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
    ";
                        }
                        // line 117
                        echo "    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "    ";
                }
                // line 119
                echo "    </div>
    <hr>
    <p>";
                // line 121
                echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["review"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["text"] ?? null) : null);
                echo "</p><hr>
    ";
                // line 122
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["limitations"] ?? null) : null)) {
                    // line 123
                    echo "    ";
                    if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["review"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["plus"] ?? null) : null)) {
                        // line 124
                        echo "    <p></span><strong class='plus'>";
                        echo ($context["text_plus"] ?? null);
                        echo ": </strong><span>";
                        echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["review"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["plus"] ?? null) : null);
                        echo "</p>
    ";
                    }
                    // line 126
                    echo "    <hr>
    ";
                    // line 127
                    if ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["review"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["minus"] ?? null) : null)) {
                        // line 128
                        echo "    <p></span><strong class='minus'>";
                        echo ($context["text_minus"] ?? null);
                        echo ": </strong><span>";
                        echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["review"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["minus"] ?? null) : null);
                        echo "</p>
      ";
                    }
                    // line 130
                    echo "    ";
                }
                // line 131
                echo "    </div>
</div>
<!--";
                // line 133
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["photo_status"] ?? null) : null) || (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["video_status"] ?? null) : null))) {
                    // line 134
                    echo "<div class=\"review-media-container\">
  ";
                    // line 135
                    if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["photo_status"] ?? null) : null)) {
                        // line 136
                        echo "    ";
                        if ( !twig_test_empty((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["review"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["images"] ?? null) : null))) {
                            // line 137
                            echo "        <div class=\"owl-carousel-photo reviews-thumbnails\">
      ";
                            // line 138
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["review"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["images"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                                // line 139
                                echo "          <div class=\"item image-thumbnails ex-image-additional\"><a class=\"ex-thumbnail\" href=\"";
                                echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["image"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["popup"] ?? null) : null);
                                echo "\"> <img src=\"";
                                echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["image"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["thumb"] ?? null) : null);
                                echo "\"  class = \"";
                                echo ((((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["image"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["type"] ?? null) : null) == "0")) ? ("image-crop") : ("imgbb"));
                                echo "\" /></a></div>
    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 141
                            echo "  </div>
    ";
                        }
                    }
                    // line 144
                    if ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["video_status"] ?? null) : null)) {
                        // line 145
                        echo "  ";
                        if ( !twig_test_empty((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["review"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["videos"] ?? null) : null))) {
                            // line 146
                            echo "      <div class=\"owl-carousel-videos thumbnails\">
    ";
                            // line 147
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["review"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["videos"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                                // line 148
                                echo "        <div class=\"item videos-thumbnails\"><a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=";
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
                            // line 154
                            echo "</div>
  ";
                        }
                    }
                    // line 157
                    echo "</div>
";
                }
                // line 158
                echo "-->
<div class=\"review-container-footer\">
<div class=\"review-rating-change-buttons\">
<span class=\"change-rating-button br-r\">
  <a class=\"review-vote-positive\" data-value=\"";
                // line 162
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["review"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["review_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></a>
  <span class=\"review-vote-count\" data-value=\"";
                // line 163
                echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["review"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["likes"] ?? null) : null);
                echo "\" id=\"vote_count_positive-";
                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["review"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["review_id"] ?? null) : null);
                echo "\">";
                if (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["review"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["likes"] ?? null) : null) > 0)) {
                    echo " ";
                    echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["review"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["likes"] ?? null) : null);
                }
                echo "</span>
</span>
<span class=\"change-rating-button\">
  <a class=\"review-vote-negative\" data-value=\"";
                // line 166
                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["review"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["review_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i></a>
  <span class=\"review-vote-count\" data-value=\"";
                // line 167
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["review"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["dislikes"] ?? null) : null);
                echo "\" id=\"vote_count_negative-";
                echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["review"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["review_id"] ?? null) : null);
                echo "\">";
                if (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["review"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["dislikes"] ?? null) : null) > 0)) {
                    echo " ";
                    echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["review"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["dislikes"] ?? null) : null);
                }
                echo "</span>
</span>
</div>
";
                // line 170
                if ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["answer"] ?? null) : null)) {
                    // line 171
                    echo "<button type=\"button\" class=\"btn btn-light fl-l review-answer-button\" data-value=\"";
                    echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["review"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["review_id"] ?? null) : null);
                    echo "\"><i class=\"fa fa-share mr\"></i> ";
                    echo ($context["text_reply"] ?? null);
                    echo "</button>
";
                }
                // line 173
                echo "<div class=\"review_note\" id=\"review-note-";
                echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["review"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["review_id"] ?? null) : null);
                echo "\"></div>
</div>
<div class=\"review-answer-container\" id=\"review_answer_container";
                // line 175
                echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["review"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["review_id"] ?? null) : null);
                echo "\"></div>

";
                // line 177
                if (( !twig_test_empty((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["review"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["admin_reply"] ?? null) : null)) ||  !twig_test_empty((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["review"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["children_reviews"] ?? null) : null)))) {
                    // line 178
                    echo "<div class=\"review-childrens-container\">
";
                    // line 179
                    if ( !twig_test_empty((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["review"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["admin_reply"] ?? null) : null))) {
                        // line 180
                        echo "<div class=\"review-answer-title-container\">
  <div class=\"review-author\"><span class=\"review-author-name\">";
                        // line 181
                        echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["review"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["admin_name"] ?? null) : null);
                        echo "</span><span class = \"verification-check\" data-toggle=\"tooltip\" data-original-title=\"";
                        echo ($context["text_admin_answer"] ?? null);
                        echo "\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></span></div>
</div>
<div class=\"review-text-container\">
  <div class=\"co-sm-12 comment-text\">
<p>";
                        // line 185
                        echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["review"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["admin_reply"] ?? null) : null);
                        echo "</p>
</div>
</div>
";
                    }
                    // line 189
                    if ( !twig_test_empty((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["review"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["children_reviews"] ?? null) : null))) {
                        // line 190
                        echo "  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["review"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["children_reviews"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_review"]) {
                            // line 191
                            echo "      <div class=\"review-answer-title-container\">
        <div class=\"review-author\"><span class=\"review-author-name\">";
                            // line 192
                            echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["children_review"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["author"] ?? null) : null);
                            echo "</span></div>
      <div class=\"review-date\">";
                            // line 193
                            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["children_review"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["date_added"] ?? null) : null);
                            echo "</div>
    </div>
        <div class=\"review-text-container\">
          <div class=\"co-sm-12 comment-text\">
        <p>";
                            // line 197
                            echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["children_review"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["text"] ?? null) : null);
                            echo "</p>
        </div>
    </div>
";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_review'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 202
                    echo "</div>
";
                }
                // line 204
                echo "</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "<div class=\"text-right\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 208
            echo "<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
";
        }
        // line 210
        echo "</div>
</div>
<!-- review-written-block -->
<div class=\"unireview-sticky col-sm-12 col-md-3 col-lg-3 col-xxl-9\">
<form class=\"form-horizontal\" id=\"form-review\">
  <div class=\"user-review-write-block\">
  <h2>";
        // line 216
        echo ($context["text_write"] ?? null);
        echo "</h2>
    <div class=\"form-group required\">
<div class=\"add-review-star-wrap\" id='super-stars'>
  <div class='star-block' value='1'><i class=\"fa fa-star star-gray star-3x\"></i><span class='super-star-text'>";
        // line 219
        echo ($context["entry_bad"] ?? null);
        echo "</span></div>
  <div class='star-block' value='2'><i class=\"fa fa-star star-gray star-3x\"></i><span class='super-star-text'>";
        // line 220
        echo ($context["entry_soso"] ?? null);
        echo "</span></div>
  <div class='star-block' value='3'><i class=\"fa fa-star star-gray star-3x\"></i><span class='super-star-text'>";
        // line 221
        echo ($context["entry_normal"] ?? null);
        echo "</span></div>
  <div class='star-block' value='4'><i class=\"fa fa-star star-gray star-3x\"></i><span class='super-star-text'>";
        // line 222
        echo ($context["entry_good"] ?? null);
        echo "</span></div>
  <div class='star-block' value='5'><i class=\"fa fa-star star-gray star-3x\"></i><span class='super-star-text'>";
        // line 223
        echo ($context["entry_excellent"] ?? null);
        echo "</span></div>
</div>
<input type=\"hidden\" value=\"0\" id=\"rating\" name=\"rating\">
    </div>
  <div class=\"form-group-lx\" style=\"display:";
        // line 227
        echo ((( !twig_test_empty((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["limitations"] ?? null) : null)) && (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["limitations"] ?? null) : null))) ? ("block") : ("none"));
        echo "\">
    <div class=\"form-group required\">
      <div class=\"col-sm-12\">
        <label for=\"input-text-plus\">";
        // line 230
        echo ($context["text_plus"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"plus\"  id=\"input-text-plus\" class=\"form-control\" />
      </div>
    <div class=\"form-group required\">
      <div class=\"col-sm-12\">
        <label for=\"input-text-plus\">";
        // line 235
        echo ($context["text_minus"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"minus\"  id=\"input-text-minus\" class=\"form-control\" />
      </div>
    </div>
  </div>
  <div class=\"form-group required\">
    <div class=\"col-sm-12\">
      <label class=\"control-label\" for=\"input-review\">";
        // line 242
        echo ($context["entry_review"] ?? null);
        echo "</label>
      <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
    </div>
  </div>
  <div class =\"images-user-content-block\">
  </div>
  ";
        // line 248
        if (((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["photo_status"] ?? null) : null) || (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["video_status"] ?? null) : null))) {
            // line 249
            echo "  <div class =\"reviews-user-add-content-block\">
    ";
            // line 250
            if ((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["photo_status"] ?? null) : null)) {
                // line 251
                echo "  <div class=\"review-media-add-block\">
    <span class=\"btn-link-review\"><a class=\"btn-link-i\" id=\"add-photo\" href=\"#media-content-popup\">
    <svg class=\"media-add-button-icon\">
      <svg viewBox=\"0 0 38 34\"  xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M27.994 32H4a4 4 0 0 1-4-4V4.008a4 4 0 0 1 4-4h23.992a4 4 0 0 1 4 4V28a4 4 0 0 1-3.998 4zm2.865-27.99a2.869 2.869 0 0 0-2.865-2.865H4A2.869 2.869 0 0 0 1.135 4.01V28A2.869 2.869 0 0 0 4 30.866h23.992A2.869 2.869 0 0 0 30.859 28V4.008v.002z\"></path><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17 20l-5-5-7 7v-2l7-7 5 5 4-4 7 7v2l-7-7-4 4z\"></path>
        <path d=\"M30.5 34a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z\"></path>
        <path d=\"M30.5 23a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6a.5.5 0 0 1 .5-.5z\" fill=\"#fff\"></path>
        <path d=\"M27.5 26h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1 0-1z\" fill=\"#fff\"></path>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M21.5 12a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0-4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z\"></path>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4 4h24v20H4V4zm1 1h22v18H5V5z\"></path></svg>
    </svg>
    <span class=\"btn-link-text\">";
                // line 262
                echo ($context["text_add_photo"] ?? null);
                echo "</span>
  </a></span>
  </div>
";
            }
            // line 266
            if ((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["video_status"] ?? null) : null)) {
                // line 267
                echo "  <div class=\"review-media-add-block\">
    <span class=\"btn-link-review\"><a class=\"btn-link-i\" id=\"add-video\" href=\"#media-content-popup\">
    <svg class=\"media-add-button-icon\">
    <svg viewBox=\"0 0 38 34\" xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\">
      <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M27.994 32H4a4 4 0 0 1-4-4V4.01a4 4 0 0 1 4-4h23.992a4 4 0 0 1 4 4V28a4 4 0 0 1-3.998 4zm2.865-27.99a2.869 2.869 0 0 0-2.865-2.867H4A2.869 2.869 0 0 0 1.135 4.01V28A2.873 2.873 0 0 0 4 30.87h23.992A2.873 2.873 0 0 0 30.857 28V4.01h.002zM24.02 26.7a64.388 64.388 0 0 1-7.958.3c-2.375 0-5.978-.06-7.362-.18-2.7-.24-2.462-3.57-2.581-6.35.001-1.427.122-2.852.36-4.26.541-2.32 2.042-2.02 4.206-2.14.23 0 1.92-.06 5.285-.06 4.983.06 6.546 0 7.926.24 2.1.3 1.925 3.63 2.044 6.19-.063 3.02-.076 4.43-.779 5.37-.276.41-.676.722-1.141.89zM11.945 15.98H7.98v1.25H9.3v7.21h1.266v-7.21h1.379c.03-.416.03-.833 0-1.25zm3.544 2.2h-1.142v4.77c-.144.28-.41.476-.719.53a.255.255 0 0 1-.3-.23v-5.07h-1.141v5.19c0 .77.243 1.19.9 1.19.504-.09.954-.369 1.26-.78v.72h1.142v-6.32zm4.387 1.01a1.052 1.052 0 0 0-1.082-1.13 2.03 2.03 0 0 0-1.142.72v-2.75h-1.141v8.47h1.141v-.66c.319.447.831.715 1.38.72.72 0 .844-1.19.844-1.19v-4.18zm4.382 3.1h-1.141v.48s0 .71-.482.71a.636.636 0 0 1-.66-.71v-1.25h2.283v-1.73a1.573 1.573 0 0 0-1.623-1.67c-1.439 0-1.558.72-1.682 1.07a2.456 2.456 0 0 0-.119.6v2.98a1.73 1.73 0 0 0 1.861 1.79 1.68 1.68 0 0 0 1.5-1.19 3.61 3.61 0 0 0 .063-1.08zm-3.92-10.61c-.318.392-.76.664-1.252.77a.826.826 0 0 1-.894-.94V6.128h1.132v5.023s-.059.3.358.3a1.05 1.05 0 0 0 .656-.54V6.128h1.131v6.263h-1.131v-.71zm-4.521.75a3.267 3.267 0 0 1-.438.01 1.536 1.536 0 0 1-1.179-.7 2.06 2.06 0 0 1-.3-.94V7.842c0-.178.059-.59.059-.59a1.65 1.65 0 0 1 1.34-1.154 1.63 1.63 0 0 1 .526 0c.637.09 1.165.54 1.352 1.156 0 0 .059.413.059.591v2.958a2.063 2.063 0 0 1-.3.94c-.249.388-.66.64-1.119.688zm-.246-5.357s-.6-.06-.6.77V10.8a.56.56 0 0 0 .6.65.526.526 0 0 0 .536-.65V7.842s.06-.769-.536-.769zm-3.277 5.258H11.1V8.96L9.494 4h1.311l.893 3.251L12.591 4h1.252l-1.549 4.961v3.37zm10.823 7.46a.685.685 0 0 0-.541-.66.672.672 0 0 0-.6.66v.77h1.142v-.77h-.001zm-4.864-.66a.863.863 0 0 0-.541.24v3.88a.76.76 0 0 0 .541.23.506.506 0 0 0 .481-.53v-3.16a.54.54 0 0 0-.481-.66z\"></path>
      <path d=\"M30.5 34a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z\"></path>
      <path d=\"M30.5 23a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6a.5.5 0 0 1 .5-.5z\" fill=\"#fff\"></path>
      <path d=\"M27.5 26h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1 0-1z\" fill=\"#fff\"></path></svg>
    </svg>
    <span class=\"btn-link-text\">";
                // line 276
                echo ($context["text_add_video"] ?? null);
                echo "</span>
  </a></span>
  </div>
  ";
            }
            // line 280
            echo "  <div class=\"review-media-text-block\">
    <svg class=\"user-content-add-caption-arrow\">
    <svg overflow=\"scroll\" viewBox=\"0 0 47 22\" id=\"arrow-left-soft\" xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\">
      <g fill=\"none\"><path d=\"M0 0h47v22H0z\"></path>
        <path fill=\"#a6a5a5\" d=\"M46.585 2.753c-3.199 2.8-17.394 7.7-25.49 7.7-8.598 0-8.298-2.3-8.298-2.3.1-1.7 5.198-.3 9.397-.5 8.097-.6 16.094-2.4 23.791-5.4.3-.1 1.7-.5.6.5zm-33.888.4s-9.796 3.5-9.796 5.2S17.595 19.85 17.595 19.85s2.3 1.8 1 2.1-3.299-.8-4.898-2.1S.202 11.052.002 8.353 14.697-.646 17.595.053s-4.898 3.1-4.898 3.1z\"></path>
      </g></svg>
    </svg>
    ";
            // line 287
            echo ($context["text_add_media_note"] ?? null);
            echo "
  </div>
  </div>
";
        }
        // line 291
        echo "  <div class=\"form-group required\">
    <div class=\"col-sm-12\">
      <label class=\"control-label\" for=\"input-name\">";
        // line 293
        echo ($context["entry_name"] ?? null);
        echo "</label>
      <input type=\"text\" name=\"name\" value=\"";
        // line 294
        echo ($context["customer_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
    </div>
  </div>
  ";
        // line 297
        echo ($context["captcha"] ?? null);
        echo "
  <input type=\"hidden\" name=\"image_id\"  id=\"input-image-id\" class=\"form-control\" />
  <input type=\"hidden\" name=\"video_links\"  id=\"input-video-links\" class=\"form-control\" />
  <div class=\"buttons clearfix review-form-write-footer\">
    ";
        // line 301
        if (($context["review_guest"] ?? null)) {
            // line 302
            echo "    <div class=\"pull-right\">
      <button type=\"button\" id=\"button-review-extended\" data-loading-text=\"";
            // line 303
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["leave_feedback"] ?? null);
            echo "</button>
    </div>
  ";
        } else {
            // line 306
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_login"] ?? null);
            echo "</div>
  ";
        }
        // line 308
        echo "  </div>
</div>
</form>
<!-- media-add-popup -->
  <div class=\"hidden\" id=\"hidden-popups\">
    <div id=\"media-content-popup\" class=\"popup-media-container\">
      <div class=\"popup-header\">
        <ul class=\"nav nav-tabs\">
        ";
        // line 316
        if ((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["photo_status"] ?? null) : null)) {
            echo "<li class=\"popup-media-nav-tabs photo-tab\"><a class=\"nav-tabs-link\" href=\"#tab-add-photo\" data-toggle=\"tab\" aria-expanded=\"true\">";
            echo ($context["text_add_photo"] ?? null);
            echo "</a></li>";
        }
        // line 317
        echo "        ";
        if ((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["video_status"] ?? null) : null)) {
            echo "<li class=\"popup-media-nav-tabs video-tab\"><a class=\"nav-tabs-link\" href=\"#tab-add-video\" data-toggle=\"tab\" aria-expanded=\"true\">";
            echo ($context["text_add_video"] ?? null);
            echo "</a></li>";
        }
        // line 318
        echo "      </ul>
    </div>
    <div class=\"tab-content tab-content-media\">
      ";
        // line 321
        if ((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["photo_status"] ?? null) : null)) {
            // line 322
            echo "      <div class=\"tab-pane\" id=\"tab-add-photo\">
      <div id=\"review-image\" class=\"dropzone\"></div>
    </div>
  ";
        }
        // line 326
        echo "    ";
        if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["video_status"] ?? null) : null)) {
            // line 327
            echo "    <div class=\"tab-pane\" id=\"tab-add-video\">
      <div class=\"form-group required ov-h\">
        <div class=\"col-sm-12\">
          <label for=\"input-text-plus\">";
            // line 330
            echo ($context["youtube_link"] ?? null);
            echo "</label>
          <div class=\"input-group\">
          <input type=\"text\" name=\"video-href\"  id=\"input-video-href\" class=\"form-control\" />
          <span class=\"input-group-btn\"> <button class=\"btn btn-default\" id=\"add-video-button\" type=\"button\">";
            // line 333
            echo ($context["button_add_video_text"] ?? null);
            echo "</button></span>
        </div>
        </div>
      </div>
      <div id = 'video-thumb-preview'>
        <div id='video-caption'>";
            // line 338
            echo ($context["add_video_note"] ?? null);
            echo "</div>
      </div>
    </div>
  ";
        }
        // line 342
        echo "    </div>
      <div class=\"popup-footer ov-h\">
        <button class=\"btn btn-green fl-r\" id=\"upload-files-button\">";
        // line 344
        echo ($context["text_load"] ?? null);
        echo "</button>
        <button class=\"btn btn-cancel fl-l\" id=\"upload-files-cancel\">";
        // line 345
        echo ($context["text_cancel"] ?? null);
        echo "</button>
      </div>
    </div>

    <form class=\"form-horizontal\" id=\"form-answer-review\">
      <div class=\"form-group required\">
        <div class=\"col-sm-12\">
          <label class=\"control-label\" for=\"input-review\">";
        // line 352
        echo ($context["text_comment"] ?? null);
        echo "</label>
          <textarea name=\"text\" rows=\"5\" id=\"input-answer-review\" class=\"form-control\"></textarea>
        </div>
      </div>
      <div class=\"form-group required\">
        <div class=\"col-sm-12\">
          <label class=\"control-label\" for=\"input-name\">";
        // line 358
        echo ($context["entry_name"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"name\" value=\"";
        // line 359
        echo ($context["customer_name"] ?? null);
        echo "\" id=\"input-answer-name\" class=\"form-control\" />
        </div>
      </div>
      ";
        // line 362
        echo ($context["captcha"] ?? null);
        echo "
      <button type=\"button\" class=\"btn btn-cancel fl-l\" id=\"review-cancel-button\">";
        // line 363
        echo ($context["text_cancel"] ?? null);
        echo "</button>
    <button type=\"button\" class=\"btn btn-primary fl-r button-answer-review\"  data-loading-text=\"";
        // line 364
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["leave_feedback"] ?? null);
        echo "</button>
    </form>
  </div>
</div>
</div>
</div>



";
        // line 373
        echo ($context["content_bottom"] ?? null);
        echo "</div>
";
        // line 374
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 377
        echo ($context["footer"] ?? null);
        echo "

<script>
var inputImageId = \$(\"#input-image-id\");
var inputVideos = \$(\"#input-video-links\");
var photoTab = \$('.photo-tab');
var tabPhoto = \$('#tab-add-photo');
var videoTab = \$('.video-tab');
var tabVideo = \$('#tab-add-video');
var images_id = [];
var count = 0;
";
        // line 388
        if ((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["photo_status"] ?? null) : null)) {
            // line 389
            echo "Dropzone.autoDiscover = false;
var myDropzone = new Dropzone(\"div#review-image\", {
            url:\"index.php?route=product/ex_store_reviews/check\",
            maxFiles: ";
            // line 392
            echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["image_max_count"] ?? null) : null);
            echo ",
            maxFilesize: ";
            // line 393
            echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["image_max_size"] ?? null) : null);
            echo ",
            dictInvalidFileType: '";
            // line 394
            echo ($context["error_invalid_type"] ?? null);
            echo "',
            dictFileTooBig: '";
            // line 395
            echo ($context["error_too_big"] ?? null);
            echo "',
            dictRemoveFile: '";
            // line 396
            echo ($context["text_remove"] ?? null);
            echo "',
            dictDefaultMessage: '";
            // line 397
            echo ($context["text_loading"] ?? null);
            echo "',
            dictMaxFilesExceeded: '";
            // line 398
            echo ($context["error_max_files"] ?? null);
            echo "',
            addRemoveLinks: true,
            ";
            // line 400
            if ((((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["image_width"] ?? null) : null) != 0) || ((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["image_height"] ?? null) : null) != 0))) {
                // line 401
                echo "            resizeWidth: ";
                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["image_width"] ?? null) : null);
                echo ",
            resizeHeight: ";
                // line 402
                echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["image_height"] ?? null) : null);
                echo ",
            resizeMethod: 'contain',
            resizeQuality: 1.0,
            ";
            }
            // line 406
            echo "            parallelUploads: 1,
            init: function(){
              \$(this.element).html(this.options.dictDefaultMessage);
            },
            dictDefaultMessage: '";
            // line 410
            echo ($context["dropzone_default_message"] ?? null);
            echo "',
            acceptedFiles:'.jpg, .jpeg, .png',
            error: function(file, errorMessage){
              \$('.alert-success, .alert-danger').remove();
              \$('.popup-footer').append('<div class=\"alert alert-danger\" style=\"margin: 0 20%\"><i class=\"fa fa-exclamation-circle\"></i> '+ errorMessage +'</div>');
              myDropzone.removeFile(file);
            },
            success: function(file, responce){
              if(responce.error){
                this.options.error(file, responce.error);
              }
              else{
              \$('.alert-success, .alert-danger').remove();
              var btndelete = file.previewElement.querySelector(\".dz-remove\");
              btndelete.setAttribute(\"id\", 'delete-midia-id-'+ responce.image_id);
              btndelete.setAttribute(\"num\", count);
              images_id.push(responce.image_id);
              count++;
              this.defaultOptions.success(file);
            }
            }
  });

  myDropzone.on(\"removedfile\", function (file) {
    var btndelete = file.previewElement.querySelector(\".dz-remove\");
    if(btndelete.hasAttribute(\"id\")) {
      var iddelete = btndelete.getAttribute(\"id\").split('-').pop();
      var countdelete = btndelete.getAttribute(\"num\");
      \$.ajax({
        url: 'index.php?route=product/ex_store_reviews/deleteImage',
        type: 'post',
        data: { image_id : iddelete } ,
        dataType: 'json',
        success: function(json) {
        images_id[countdelete] = null;
        }
      });
    }
  });
  ";
        }
        // line 450
        echo "\$('#upload-files-button').on('click', function(){
  \$.magnificPopup.close();
  \$(photoTab).removeClass('active');
  \$(tabPhoto).removeClass('active');
  \$(videoTab).removeClass('active');
  \$(tabVideo).removeClass('active');
  \$('.images-user-content-block').append(\$('.dz-preview'));
  \$('.images-user-content-block').append(\$('.vd-prev'));
  \$('#review-image').removeClass('dz-started');
  if(! \$(video_thumb_block).children('.vd-prev').length > 0) \$('#video-caption').css('display', 'block');
});
\$('#upload-files-cancel').on('click', function(){
  var delButtons = \$('#review-image .dz-preview .dz-remove , #video-thumb-preview .vd-prev .remove_video');
  for(var i=0; i< delButtons.length; i++){
    delButtons[i].click();
  }
  \$.magnificPopup.close();
  \$(photoTab).removeClass('active');
  \$(tabPhoto).removeClass('active');
  \$(videoTab).removeClass('active');
  \$(tabVideo).removeClass('active');
  \$('#review-image').removeClass('dz-started');
});
\$(document).ready(function() {
  \$('.owl-carousel-photo').owlCarousel({
    loop:true,
        margin:10,
        responsiveClass:true,
        items : ";
        // line 478
        echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["photo_carousel_1200"] ?? null) : null);
        echo ",
        pagination: true,
        navigation: true,
        navigationText: [\"<i class='fa fa-angle-left'></i>\", \"<i class='fa fa-angle-right'></i>\"],
        itemsCustom : [
                      [0, ";
        // line 483
        echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["photo_carousel_340"] ?? null) : null);
        echo "],
                      [340, ";
        // line 484
        echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["photo_carousel_480"] ?? null) : null);
        echo "],
                      [480, ";
        // line 485
        echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["photo_carousel_768"] ?? null) : null);
        echo "],
                      [768, ";
        // line 486
        echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["photo_carousel_1199"] ?? null) : null);
        echo "],
                      [1200, ";
        // line 487
        echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["photo_carousel_1200"] ?? null) : null);
        echo "],
                    ],
  });
  \$('.owl-carousel-videos').owlCarousel({
    loop:true,
        margin:10,
        responsiveClass:true,
        pagination: true,
        navigation: true,
        items : ";
        // line 496
        echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["video_carousel_1200"] ?? null) : null);
        echo ",
        navigationText: [\"<i class='fa fa-angle-left'></i>\", \"<i class='fa fa-angle-right'></i>\"],
        itemsCustom : [
                      [0, ";
        // line 499
        echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["video_carousel_340"] ?? null) : null);
        echo "],
                      [340, ";
        // line 500
        echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["video_carousel_480"] ?? null) : null);
        echo "],
                      [480, ";
        // line 501
        echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["video_carousel_768"] ?? null) : null);
        echo "],
                      [768, ";
        // line 502
        echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["video_carousel_1199"] ?? null) : null);
        echo "],
                      [1200, ";
        // line 503
        echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["video_carousel_1200"] ?? null) : null);
        echo "],
                    ],
  });
  \$('.reviews-thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled:true,
\t\t},
\t\t callbacks: {
        beforeOpen: function() {
          var magnificPopup = \$.magnificPopup.instance,
          cur = magnificPopup.st.el.focus();
        },
        open: function() {
        \$('.container').addClass('blur');
        },
        close: function() {
        \$('.container').removeClass('blur');
        }
        }
\t});

  \$('.all-reviews-thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled:true,
\t\t},
\t\tcallbacks: {
        beforeOpen: function() {
          var magnificPopup = \$.magnificPopup.instance,
          cur = magnificPopup.st.el.focus();
        },
        open: function() {
        \$('.container').addClass('blur');
        },
        close: function() {
        \$('.container').removeClass('blur');
        }
        }
\t});
    \$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        preloader: true,
        callbacks: {
        beforeOpen: function() {
          var magnificPopup = \$.magnificPopup.instance,
          cur = magnificPopup.st.el.focus();
        },
        open: function() {
        \$('.container').addClass('blur');
        },
        close: function() {
        \$('.container').removeClass('blur');
        }
        }
    });
  \$('#add-photo').magnificPopup({
          type: 'inline',
          closeOnBgClick: false,
          callbacks: {
    open: function() {
        \$(photoTab).addClass('active');
        \$(tabPhoto).addClass('active');
    },
    close: function() {
        \$(photoTab).removeClass('active');
        \$(tabPhoto).removeClass('active');
    }
  }
      });

    \$('#add-video').magnificPopup({
              type: 'inline',
              closeOnBgClick: false,
              callbacks: {
        open: function() {
            \$(videoTab).addClass('active');
            \$(tabVideo).addClass('active');
        },
        close: function() {
            \$(videoTab).removeClass('active');
            \$(tabVideo).removeClass('active');
        }
      }
          });
});

var review_id;
var note_block;
var form = \$('#form-answer-review');
\$(document).on('click','.review-answer-button',function(){
  review_id = \$(this).data(\"value\");
  var block = \$('#review_answer_container'+review_id);
  note_block = \$(\"#review-note-\"+review_id);
  ";
        // line 600
        if (($context["answer_guest"] ?? null)) {
            // line 601
            echo "    if(!\$(block).children(form).length > 0){
  \$(form).hide().appendTo(block).slideDown(300);
  }
  ";
        } else {
            // line 605
            echo "    \$('.alert-success, .alert-danger').remove();
    \$(note_block).append('<div class=\"alert alert-danger m-0\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 606
            echo ($context["text_login"] ?? null);
            echo "</div>');
    ";
        }
        // line 608
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
  var btn = \$(this);
  btn.button('loading');
  \$.ajax({
    url: 'index.php?route=product/ex_store_reviews/writeAnswer&parent_id=' + review_id,
    type: 'post',
    dataType: 'json',
    data: \$(form).serialize(),
    success: function(json) {
      \$('.review-container-footer .alert').remove();
      if (json['error']) {
        \$(note_block).append('<div class=\"alert alert-danger m-0\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        btn.button('reset');
      }

      if (json['success']) {
        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('#review-cancel-button').click();
        \$(note_block).append('<div class=\"alert alert-success m-0\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
        btn.button('reset');
      }
    }
  });
//  grecaptcha.reset();
});

\$('#button-review-extended').on('click', function() {
  var strImages = '';
  var strVideos ='';
  var btn = \$(this);
  btn.button('loading');
  if(images_id){
  for(var i=0; i<images_id.length; i++){
    if(images_id[i] != null)
    strImages+=images_id[i] + ' ';
  }
}
if(video_links){
  for(var i=0; i<video_links.length; i++){
    if(video_links[i] != null)
    strVideos+=video_links[i] + ' ';
  }
}
  inputImageId.val(strImages.trim());
  inputVideos.val(strVideos.trim());
\t\$.ajax({
\t\turl: 'index.php?route=product/ex_store_reviews/write',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tsuccess: function(json) {
\t\t\t\$('.alert-success, .alert-danger').remove();
\t\t\tif (json['error']) {
\t\t\t\t\$('.review-form-write-footer').append('<div class=\"alert alert-danger m-r-20\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        btn.button('reset');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.review-form-write-footer').append('<div class=\"alert alert-success m-r-20\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
        \$('input[name=\\'plus\\']').val('');
        \$('input[name=\\'minus\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'image_id\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']').val('0');
        \$('.star-block').removeClass('star-active');
        \$('.images-user-content-block > div').remove();
        btn.button('reset');
        images_id = [];
        count = 0;
\t\t\t}
\t\t}
\t});
   //grecaptcha.reset();
});

\$('.review-vote-negative').on('click', function() {
  \$('.review-container-footer .alert').remove();
  var id = \$(this).data(\"value\");
  var votename = \"store-vote\"+id;
  var note_block = \$(\"#review-note-\"+id);
  ";
        // line 701
        if (($context["likes_guest"] ?? null)) {
            // line 702
            echo "  if(localStorage.getItem(votename) == null){
  var vote_count_span = \$('#vote_count_negative-'+id);
  var vote_count = parseInt(vote_count_span.data(\"value\"));
    \$.ajax({
      url: 'index.php?route=product/ex_store_reviews/minusReviewRating',
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
            // line 717
            echo ($context["thank_for_rating"] ?? null);
            echo "</div>');
  }
  else{
    \$(note_block).append('<div class=\"alert alert-warning m-0\">";
            // line 720
            echo ($context["already_rating"] ?? null);
            echo "</div>');
  }
  ";
        } else {
            // line 723
            echo "    \$(note_block).append('<div class=\"alert alert-info m-0\"><i class=\"fa fa-exclamation\" aria-hidden=\"true\"></i>&nbsp; ";
            echo ($context["text_login"] ?? null);
            echo "</div>');
    ";
        }
        // line 725
        echo "});
\$('.review-vote-positive').on('click', function() {
  \$('.review-container-footer .alert').remove();
  var id = \$(this).data(\"value\");
  var votename = \"store-vote\"+id;
  var note_block = \$(\"#review-note-\"+id);
  ";
        // line 731
        if (($context["likes_guest"] ?? null)) {
            // line 732
            echo "  if(localStorage.getItem(votename) == null){
  var vote_count_span = \$('#vote_count_positive-'+id);
  var vote_count = parseInt(vote_count_span.data(\"value\"));
    \$.ajax({
      url: 'index.php?route=product/ex_store_reviews/plusReviewRating',
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
            // line 748
            echo ($context["thank_for_rating"] ?? null);
            echo "</div>');
  }
  else{
      \$(note_block).append('<div class=\"alert alert-warning m-0\">";
            // line 751
            echo ($context["already_rating"] ?? null);
            echo "</div>');
  }
  ";
        } else {
            // line 754
            echo "    \$(note_block).append('<div class=\"alert alert-info m-0\"><i class=\"fa fa-exclamation\" aria-hidden=\"true\"></i>&nbsp; ";
            echo ($context["text_login"] ?? null);
            echo "</div>');
    ";
        }
        // line 756
        echo "});
\$('#super-stars > div').on('click', function(){
  \$('#super-stars > div').removeClass('star-active');
  var id_val = \$(this).index()+1;
  \$('#super-stars > .star-block:nth-child(-n+' + id_val + ')').addClass('star-active');
  \$('#rating').val(id_val);
});

var api_key = 'AIzaSyBV0eSZxQOn3OEf0oRCIXeAF04y2T8-A60';
var video_thumb_block = \$('#video-thumb-preview');
var video_links = [];
var video_num = 0;
var inputHref = \$('#input-video-href');
function youtube_parser(url){
    var regExp = /^.*((youtu.be\\/)|(v\\/)|(\\/u\\/\\w\\/)|(embed\\/)|(watch\\?))\\??v?=?([^#\\&\\?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}
\$('#add-video-button').on('click', function(){
  var href = \$(inputHref).val();
  var video_id = youtube_parser(href);
  if(video_id && !video_links.includes(video_id)){
    \$.ajax({
          url: \"https://www.googleapis.com/youtube/v3/videos?id=\" + video_id + \"&key=\"+ api_key + \"&fields=items(snippet(title, thumbnails(default)))&part=snippet\",
          dataType: \"jsonp\",
          success: function(data){
                   var video_title = data.items[0].snippet.title;
                   var video_thumbnail = data.items[0].snippet.thumbnails.default.url;
                   video_links.push(video_id);
                   video_thumb_block.append(\"<div class = 'vd-prev ov-h' data-id='\"+video_num+\"'><div class = 'vd-thumb-vrapper ov-h'><img src='\"+video_thumbnail+\"' title='\"+video_title+\"'></div><div class = 'vd-thumb-title-vrapper'><span class ='vd-thumb-title'>\"+video_title+\"</span></div><a class = 'remove_video'><i class='fa fa-times' aria-hidden='true'></i></a></div>\");
                   video_num++;
                   \$(inputHref).val('');
                   \$('#video-caption').css('display', 'none');
          },
          error: function(jqXHR, textStatus, errorThrown) {
              alert (textStatus, + ' | ' + errorThrown);
          }
      });

  }
});
\$(document).on('click','.remove_video',function(){
  var id = \$(this).parent().data('id');
  video_links[id] = null;
  \$(this).parent().remove();
  if(! \$(video_thumb_block).children('.vd-prev').length > 0) \$('#video-caption').css('display', 'block');
});
\$('.pagination li').on('click', function(){
  \$('html,body').delay(100).animate({scrollTop: \$('#input-sort').offset().top}, 300);
});
</script>
<style>
.ex-image-additional{
  height: ";
        // line 809
        echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 810
        echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["thumb_width"] ?? null) : null);
        echo "px;
  border-radius: ";
        // line 811
        echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["border_radius_photo"] ?? null) : null);
        echo "px;
}
.ex-image-additional .image-crop{
  height: ";
        // line 814
        echo ((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["thumb_height"] ?? null) : null) * 1.8);
        echo "px;
  width: ";
        // line 815
        echo ((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["thumb_width"] ?? null) : null) * 1.8);
        echo "px;
}
.imgbb{
  height: ";
        // line 818
        echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 819
        echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["thumb_width"] ?? null) : null);
        echo "px;
}
.videos-thumbnails img{
  height: ";
        // line 822
        echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["video_thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 823
        echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["video_thumb_width"] ?? null) : null);
        echo "px;
}
.videos-thumbnails a{
  height: ";
        // line 826
        echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["video_thumb_height"] ?? null) : null);
        echo "px;
  width: ";
        // line 827
        echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["video_thumb_width"] ?? null) : null);
        echo "px;
  border-radius: ";
        // line 828
        echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["ex_store_reviews"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["border_radius_video"] ?? null) : null);
        echo "px;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "default/template/product/ex_store_reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1527 => 828,  1523 => 827,  1519 => 826,  1513 => 823,  1509 => 822,  1503 => 819,  1499 => 818,  1493 => 815,  1489 => 814,  1483 => 811,  1479 => 810,  1475 => 809,  1420 => 756,  1414 => 754,  1408 => 751,  1402 => 748,  1384 => 732,  1382 => 731,  1374 => 725,  1368 => 723,  1362 => 720,  1356 => 717,  1339 => 702,  1337 => 701,  1242 => 608,  1237 => 606,  1234 => 605,  1228 => 601,  1226 => 600,  1126 => 503,  1122 => 502,  1118 => 501,  1114 => 500,  1110 => 499,  1104 => 496,  1092 => 487,  1088 => 486,  1084 => 485,  1080 => 484,  1076 => 483,  1068 => 478,  1038 => 450,  995 => 410,  989 => 406,  982 => 402,  977 => 401,  975 => 400,  970 => 398,  966 => 397,  962 => 396,  958 => 395,  954 => 394,  950 => 393,  946 => 392,  941 => 389,  939 => 388,  925 => 377,  919 => 374,  915 => 373,  901 => 364,  897 => 363,  893 => 362,  887 => 359,  883 => 358,  874 => 352,  864 => 345,  860 => 344,  856 => 342,  849 => 338,  841 => 333,  835 => 330,  830 => 327,  827 => 326,  821 => 322,  819 => 321,  814 => 318,  807 => 317,  801 => 316,  791 => 308,  785 => 306,  777 => 303,  774 => 302,  772 => 301,  765 => 297,  759 => 294,  755 => 293,  751 => 291,  744 => 287,  735 => 280,  728 => 276,  717 => 267,  715 => 266,  708 => 262,  695 => 251,  693 => 250,  690 => 249,  688 => 248,  679 => 242,  669 => 235,  661 => 230,  655 => 227,  648 => 223,  644 => 222,  640 => 221,  636 => 220,  632 => 219,  626 => 216,  618 => 210,  612 => 208,  606 => 206,  599 => 204,  595 => 202,  584 => 197,  577 => 193,  573 => 192,  570 => 191,  565 => 190,  563 => 189,  556 => 185,  547 => 181,  544 => 180,  542 => 179,  539 => 178,  537 => 177,  532 => 175,  526 => 173,  518 => 171,  516 => 170,  503 => 167,  499 => 166,  486 => 163,  482 => 162,  476 => 158,  472 => 157,  467 => 154,  452 => 148,  448 => 147,  445 => 146,  442 => 145,  440 => 144,  435 => 141,  422 => 139,  418 => 138,  415 => 137,  412 => 136,  410 => 135,  407 => 134,  405 => 133,  401 => 131,  398 => 130,  390 => 128,  388 => 127,  385 => 126,  377 => 124,  374 => 123,  372 => 122,  368 => 121,  364 => 119,  361 => 118,  355 => 117,  351 => 115,  347 => 113,  344 => 112,  338 => 111,  336 => 110,  331 => 108,  325 => 105,  318 => 103,  314 => 102,  308 => 98,  301 => 94,  293 => 89,  289 => 88,  285 => 87,  279 => 84,  275 => 83,  270 => 82,  268 => 81,  263 => 80,  259 => 79,  251 => 74,  245 => 70,  239 => 69,  231 => 67,  223 => 65,  220 => 64,  216 => 63,  211 => 61,  207 => 59,  203 => 57,  199 => 55,  193 => 54,  180 => 51,  177 => 50,  172 => 49,  168 => 48,  162 => 46,  159 => 45,  155 => 43,  140 => 37,  136 => 36,  130 => 34,  128 => 33,  125 => 32,  123 => 31,  118 => 29,  111 => 24,  109 => 23,  106 => 22,  104 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 12,  70 => 11,  64 => 10,  58 => 8,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/ex_store_reviews.twig", "");
    }
}
