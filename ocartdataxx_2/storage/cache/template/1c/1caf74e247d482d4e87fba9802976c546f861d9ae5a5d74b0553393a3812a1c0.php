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

/* default/template/extension/module/storereviews.twig */
class __TwigTemplate_7a20ce80c7e1301dbb51d6ddb52de0e5169ada3a7a602c7c8478ec4886d0e5f6 extends \Twig\Template
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
        echo "<div class=\"mod-rs-cont\" id = \"ex-store-reviews\">
\t";
        // line 2
        if (($context["module_header"] ?? null)) {
            // line 3
            echo "
\t";
        }
        // line 5
        echo "<div class=\"row rating-info-box\">
\t<div class=\"col-xs-12 col-md-12\">
\t\t\t<div class=\"well well-sm\" id=\"ex-reviews\">
\t\t\t <h3>";
        // line 8
        echo ($context["module_header"] ?? null);
        echo "</h3>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 text-center bottom-10 col-rl\">
\t\t\t\t\t<div ";
        // line 11
        if ((($context["rating_store"] ?? null) == 5)) {
            echo "class=\"progress-striped-rev-full\"";
        }
        echo ">
\t\t\t\t\t\t<span class=\"rating-num
\t\t\t\t\t";
        // line 13
        if (((($context["rating_store"] ?? null) >= 1) && (($context["rating_store"] ?? null) < 2))) {
            // line 14
            echo "\t\t\t\t\trat-avg-1
\t\t\t\t\t";
        } elseif (((        // line 15
($context["rating_store"] ?? null) >= 2) && (($context["rating_store"] ?? null) < 3))) {
            // line 16
            echo "\t\t\t\t\trat-avg-2
\t\t\t\t\t";
        } elseif (((        // line 17
($context["rating_store"] ?? null) >= 3) && (($context["rating_store"] ?? null) < 4))) {
            // line 18
            echo "\t\t\t\t\trat-avg-3
\t\t\t\t\t";
        } elseif (((        // line 19
($context["rating_store"] ?? null) >= 4) && (($context["rating_store"] ?? null) < 5))) {
            // line 20
            echo "\t\t\t\t\trat-avg-4
\t\t\t\t\t";
        } elseif ((        // line 21
($context["rating_store"] ?? null) == 5)) {
            // line 22
            echo "\t\t\t\t\trat-avg-5
\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\"><span class=\"rating-stor\">";
        echo ($context["rating_store"] ?? null);
        echo "</span></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"store-rating-container\">
\t\t\t    ";
        // line 27
        if ((($context["rating_store"] ?? null) != 0)) {
            // line 28
            echo "\t\t\t    ";
            $context["i"] = 1;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "\t\t\t    ";
                if ((($context["rating_store"] ?? null) < $context["i"])) {
                    // line 30
                    echo "\t\t\t    <span class=\"fa fa-stack\"><i class=\"fa fa-star star-gray\"></i></span>
\t\t\t    ";
                } else {
                    // line 32
                    echo "\t\t\t    <span class=\"fa fa-stack\"><i class=\"fa fa-star\"></i></span>
\t\t\t    ";
                }
                // line 34
                echo "\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t    ";
        }
        // line 36
        echo "\t\t\t    <div class=\"rating-info\"><i class=\"fas fa-comment\"></i><span>";
        echo ($context["total_reviews"] ?? null);
        echo "</span></a></div>
\t\t\t    </div>
\t\t\t\t\t<div class=\"col-xs-12 col-md-12\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"window.location.href='";
        // line 39
        echo ($context["write_review"] ?? null);
        echo "#form-review'\" class=\"btn btn-rev\"><i class=\"fa fa-pencil\"></i> ";
        echo ($context["btn_write_review"] ?? null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 bottom-10 col-rl\">
\t\t\t\t\t<div class=\"row rating-desc\">

\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12\">
\t\t\t\t\t\t\t<span class=\"progress-stars\">
\t\t\t\t\t\t\t<i class=\"fa fa-star color-star-percent-5\"></i>5
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"progress progress-striped\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success color-5\" role=\"progressbar\" aria-valuenow=\"20\"
\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 51
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["percent_rating"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["star5"] ?? null) : null);
        echo "%\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 52
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["percent_rating"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["star5"] ?? null) : null);
        echo "%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12\">
\t\t\t\t\t\t\t<span class = \"progress-stars\">
\t\t\t\t\t\t\t<i class=\"fa fa-star color-star-percent-4\"></i>4
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success color-4\" role=\"progressbar\" aria-valuenow=\"20\"
\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 62
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["percent_rating"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["star4"] ?? null) : null);
        echo "%\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 63
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["percent_rating"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["star4"] ?? null) : null);
        echo "%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12\">
\t\t\t\t\t\t\t<span class = \"progress-stars\">
\t\t\t\t\t\t\t<i class=\"fa fa-star color-star-percent-3\"></i>3
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-info color-3\" role=\"progressbar\" aria-valuenow=\"20\"
\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 73
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["percent_rating"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["star3"] ?? null) : null);
        echo "%\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 74
        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["percent_rating"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["star3"] ?? null) : null);
        echo "%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12\">
\t\t\t\t\t\t\t<span class=\"progress-stars\">
\t\t\t\t\t\t\t<i class=\"fa fa-star color-star-percent-2\"></i>2
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning color-2\" role=\"progressbar\" aria-valuenow=\"20\"
\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 84
        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["percent_rating"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["star2"] ?? null) : null);
        echo "%\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 85
        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["percent_rating"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["star2"] ?? null) : null);
        echo "%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12\">
\t\t\t\t\t\t\t<span class=\"progress-stars\">
\t\t\t\t\t\t\t<i class=\"fa fa-star color-star-percent-1\"></i>1
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger color-1\" role=\"progressbar\" aria-valuenow=\"80\"
\t\t\t\t\t\t\t\t\taria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 95
        echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["percent_rating"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["star1"] ?? null) : null);
        echo "%\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 96
        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["percent_rating"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["star1"] ?? null) : null);
        echo "%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-md-12 text-center top-15\">
\t\t\t\t\t\t<a href=\"";
        // line 102
        echo ($context["link_all_reviews"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["btn_all_review"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"col-xs-12 col-md-5 col-rl\">
\t\t\t\t\t<div class=\"review-box-wrapper\">
\t\t\t\t\t<div class=\"all-review-box-mod carousel-reviews-store-";
        // line 107
        echo ($context["module"] ?? null);
        echo " owl-carousel\">
\t\t\t\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 109
            echo "\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div id=\"review_box_";
            // line 110
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["review"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["review_id"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"info-header-review-mod clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 rev-author\"><span class=\"glyphicon glyphicon-user\"></span> ";
            // line 112
            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["review"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["author"] ?? null) : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 rev-rating\">
                                    \t<div class=\"rating-container\">
\t\t\t\t\t\t\t\t\t\t    ";
            // line 115
            if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["review"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["rating"] ?? null) : null) != 0)) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t    ";
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t    ";
                    if (((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["review"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["rating"] ?? null) : null) < $context["i"])) {
                        // line 118
                        echo "\t\t\t\t\t\t\t\t\t\t    <span class=\"fa fa-stack\"><i class=\"fa fa-star star-gray\"></i></span>
\t\t\t\t\t\t\t\t\t\t    ";
                    } else {
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t\t    <span class=\"fa fa-stack\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t\t    ";
                    }
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t    ";
            }
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 rev-date-add\">";
            // line 126
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["review"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["date_added"] ?? null) : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mod-desc-reviews\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 129
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["review"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["text"] ?? null) : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 130
            if (twig_constant("true")) {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class = \"plus-minus\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 132
                if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["review"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["plus"] ?? null) : null)) {
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p></span><strong class='plus'>";
                    echo ($context["text_plus"] ?? null);
                    echo " </strong><span>";
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["review"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["plus"] ?? null) : null);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["review"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["minus"] ?? null) : null)) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p></span><strong class='minus'>";
                    echo ($context["text_minus"] ?? null);
                    echo " </strong><span>";
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["review"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["minus"] ?? null) : null);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 142
            if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["review"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["images"] ?? null) : null) || (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["review"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["videos"] ?? null) : null))) {
                // line 143
                echo "\t\t\t\t\t\t\t\t\t<div class=\"review-media-container\">
\t\t\t\t\t\t\t\t\t  ";
                // line 144
                if (twig_constant("true")) {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t  ";
                    if ( !twig_test_empty((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["review"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["images"] ?? null) : null))) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t      <div class=\"owl-carousel thumbnails reviews-thumbnails\">
\t\t\t\t\t\t\t\t\t    ";
                        // line 147
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["review"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["images"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t\t        <div class=\"item store-image-thumbnails\"><a class=\"ex-thumbnail\" href=\"";
                            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["image"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["popup"] ?? null) : null);
                            echo "\"> <img class = \"";
                            echo ((((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["image"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["type"] ?? null) : null) == "0")) ? ("store-image-crop") : ("store-imgbb"));
                            echo "\" src=\"";
                            echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["image"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["thumb"] ?? null) : null);
                            echo "\"/></a></div>
\t\t\t\t\t\t\t\t\t  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  ";
                    }
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 153
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_constant("true")) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t  ";
                    if ( !twig_test_empty((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["review"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["videos"] ?? null) : null))) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t      <div class=\"owl-carousel-videos thumbnails\">
\t\t\t\t\t\t\t\t\t    ";
                        // line 156
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["review"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["videos"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t        <div class=\"item videos-thumbnails\"><a class=\"popup-youtube store-review-videos\" href=\"https://www.youtube.com/watch?v=";
                            echo $context["video"];
                            echo "?autoplay=1&rel=0\"><img src=\"//img.youtube.com/vi/";
                            echo $context["video"];
                            echo "/default.jpg\" alt=\"\" class=\"youtube-click\">
\t\t\t\t\t\t\t\t\t          <svg viewBox=\"0 0 57 40\" id=\"icon-youtube\" xmlns=\"http://www.w3.org/2000/svg\" width=\"30px\" height=\"100%\">
\t\t\t\t\t\t\t\t\t            <path fill= \"#ff1818\" d=\"M28.537 0C21.938 0 15.326.2 8.715.6 1.702 1 .701 6.5.301 11.9c-.4 5.4-.4 10.8 0 16.2S1.702 39 8.715 39.4c13.123.8 26.347.8 39.57 0 7.012-.4 8.014-5.9 8.414-11.3.4-5.4.4-10.8 0-16.2-.4-5.4-1.402-10.9-8.414-11.3C41.724.2 35.135 0 28.537 0zm-6.098 11l16.329 8.5L22.439 28V11z\"></path>
\t\t\t\t\t\t\t\t\t            <path fill=\"#fff\" d=\"M22.439 11.002l16.3 8.5-16.3 8.5v-17z\"></path></svg>
\t\t\t\t\t\t\t\t\t        </a></div>
\t\t\t\t\t\t\t\t\t  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  ";
                    }
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 166
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 168
            echo "

\t\t\t\t\t\t\t\t<div class=\"review_note\" id=\"review-note-";
            // line 170
            echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["review"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["review_id"] ?? null) : null);
            echo "\"></div>
\t\t\t\t\t\t\t\t<div class=\"review-rating-change-buttons\">
\t\t\t\t\t\t\t\t<span class=\"change-rating-button br-r\">
\t\t\t\t\t\t\t\t\t<a class=\"review-vote-positive\" data-value=\"";
            // line 173
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["review"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["review_id"] ?? null) : null);
            echo "\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t<span class=\"review-vote-count\" data-value=\"";
            // line 174
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["review"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["likes"] ?? null) : null);
            echo "\" id=\"vote_count_positive-";
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["review"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["review_id"] ?? null) : null);
            echo "\">";
            if (((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["review"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["likes"] ?? null) : null) > 0)) {
                echo " ";
                echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["review"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["likes"] ?? null) : null);
            }
            echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"change-rating-button\">
\t\t\t\t\t\t\t\t\t<a class=\"review-vote-negative\" data-value=\"";
            // line 177
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["review"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["review_id"] ?? null) : null);
            echo "\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t<span class=\"review-vote-count\" data-value=\"";
            // line 178
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["review"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["dislikes"] ?? null) : null);
            echo "\" id=\"vote_count_negative-";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["review"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["review_id"] ?? null) : null);
            echo "\">";
            if (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["review"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["dislikes"] ?? null) : null) > 0)) {
                echo " ";
                echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["review"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["dislikes"] ?? null) : null);
            }
            echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class = \"btn btn-light btn-review-more\">Показать полностью <i class=\"fa fa-chevron-down\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t-->
</div>

<div class=\"hidden\" id=\"hidden-popups\">
\t<div id=\"detail-review\" class=\"popup-media-container\">
\t</div>
</div>
<script><!--
\$(document).ready(function() {
\$('.carousel-reviews-store-";
        // line 200
        echo ($context["module"] ?? null);
        echo "').owlCarousel({
\tresponsiveBaseWidth: \".carousel-reviews-store-";
        // line 201
        echo ($context["module"] ?? null);
        echo "\",
\titems : 1,
\t";
        // line 203
        if (array_key_exists("autoplay", $context)) {
            // line 204
            echo "\tautoPlay: ";
            echo ($context["autoplay_speed"] ?? null);
            echo ",
\t";
        }
        // line 206
        echo "\tstopOnHover : true,
\tnavigation: true,
\tsingleItem: true,
\tpagination: false,
\tnavigationText: ['<div class=\"btn btn-carousel-module next-prod\"><i class=\"fa fa-angle-left arrow\"></i></div>', '<div class=\"btn btn-carousel-module prev-prod\"><i class=\"fa fa-angle-right arrow\"></i></div>']
});
\$('.reviews-thumbnails').owlCarousel({
\tloop:true,
\t\t\tmargin:10,
\t\t\tresponsiveClass:true,
\t\t\titems : 5,
\t\t\tautoplay: false,
\t\t\tpagination: false,
\t\t\tnavigationText: [\"<i class='fa fa-angle-left'></i>\", \"<i class='fa fa-angle-right'></i>\"],
\t\t\titemsDesktop: [1199, 5],
\t\t\titemsTablet: [768, 6],
\t\t\titemsMobile: [479, 3],
});
\$('.owl-carousel-videos').owlCarousel({
\t\t\tloop:true,
\t\t\tmargin:0,
\t\t\tresponsiveClass:true,
\t\t\tpagination: false,
\t\t\titems : 3,
\t\t\tnavigationText: [\"<i class='fa fa-angle-left'></i>\", \"<i class='fa fa-angle-right'></i>\"],
\t\t\titemsDesktop: [1280, 3],
\t\t\titemsDesktopSmall: [980, 2],
\t\t\titemsTablet: [768, 4],
\t\t\titemsMobile: [479, 2],
});
\$('.reviews-thumbnails').magnificPopup({
\ttype:'image',
\tdelegate: 'a',
\tgallery: {
\t\tenabled:true,
\t},
\t callbacks: {
\t\t\topen: function() {
\t\t\t\$('.container').addClass('blur');
\t\t\t},
\t\t\tclose: function() {
\t\t\t\$('.container').removeClass('blur');
\t\t\t}
\t\t\t}
});
\$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
\t\ttype: 'iframe',
\t\tmainClass: 'mfp-fade',
\t\tpreloader: true,
\t\tcallbacks: {
\t\topen: function() {
\t\t\$('.container').addClass('blur');
\t\t},
\t\tclose: function() {
\t\t\$('.container').removeClass('blur');
\t\t}
\t\t}
});
\t\t\t\t});
\t\$(\".btn-review-more\").on('click', function(){
\t\t\$(\".review-box-wrapper\").toggleClass(\"a-height\");
\t\t\$(\".plus-minus\").toggle(350);
\t\t\$(\".mod-desc-reviews\").toggleClass(\"a-height\");
\t\t\$(this).html() == 'Показать полностью <i class=\"fa fa-chevron-down\"></i>' ? \$(this).html('Скрыть <i class=\"fa fa-chevron-up\"></i>') : \$(this).html('Показать полностью <i class=\"fa fa-chevron-down\"></i>');
\t});
\t\$('.review-vote-negative').on('click', function() {
\t  \$('.review_note .alert').remove();
\t  var id = \$(this).data(\"value\");
\t  var votename = \"vote\"+id;
\t  var note_block = \$(\"#review-note-\"+id);
\t  if(localStorage.getItem(votename) == null){
\t  var vote_count_span = \$('#vote_count_negative-'+id);
\t  var vote_count = parseInt(vote_count_span.data(\"value\"));
\t    \$.ajax({
\t      url: 'index.php?route=product/ex_store_reviews/minusReviewRating',
\t  \t\ttype: 'post',
\t  \t\tdata: { review_id : id } ,
\t      dataType: 'json',
\t      success: function(json) {
\t        if (json['success']) {
\t        \$(vote_count_span).text(vote_count + 1);
\t        localStorage.setItem(votename , true);
\t      }
\t      }
\t    });
\t    \$(note_block).append('<div class=\"alert alert-success m-0\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i>&nbsp; ";
        // line 291
        echo ($context["thank_for_rating"] ?? null);
        echo "</div>');
\t  }
\t  else{
\t    \$(note_block).append('<div class=\"alert alert-warning m-0\">";
        // line 294
        echo ($context["already_rating"] ?? null);
        echo "</div>');
\t  }
\t});
\t\$('.review-vote-positive').on('click', function() {
\t  \$('.review_note .alert').remove();
\t  var id = \$(this).data(\"value\");
\t  var votename = \"store-vote\"+id;
\t  var note_block = \$(\"#review-note-\"+id);
\t  if(localStorage.getItem(votename) == null){
\t  var vote_count_span = \$('#vote_count_positive-'+id);
\t  var vote_count = parseInt(vote_count_span.data(\"value\"));
\t    \$.ajax({
\t      url: 'index.php?route=product/ex_store_reviews/plusReviewRating',
\t  \t\ttype: 'post',
\t  \t\tdata: { review_id : id } ,
\t      dataType: 'json',
\t      success: function(json) {
\t        \$('.success-note').remove();
\t        if (json['success']) {
\t        \$(vote_count_span).text(vote_count + 1);
\t        localStorage.setItem(votename , true);
\t      }
\t    }
\t    });
\t    \$(note_block).append('<div class=\"alert alert-success m-0\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i>&nbsp; ";
        // line 318
        echo ($context["thank_for_rating"] ?? null);
        echo "</div>');
\t  }
\t  else{
\t      \$(note_block).append('<div class=\"alert alert-warning m-0\">";
        // line 321
        echo ($context["already_rating"] ?? null);
        echo "</div>');
\t  }
\t});
//--></script>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/storereviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 321,  619 => 318,  592 => 294,  586 => 291,  499 => 206,  493 => 204,  491 => 203,  486 => 201,  482 => 200,  464 => 184,  445 => 178,  441 => 177,  428 => 174,  424 => 173,  418 => 170,  414 => 168,  410 => 166,  407 => 165,  403 => 163,  388 => 157,  384 => 156,  381 => 155,  378 => 154,  375 => 153,  372 => 152,  368 => 150,  355 => 148,  351 => 147,  348 => 146,  345 => 145,  343 => 144,  340 => 143,  338 => 142,  334 => 140,  330 => 138,  322 => 136,  319 => 135,  311 => 133,  309 => 132,  306 => 131,  304 => 130,  300 => 129,  294 => 126,  290 => 124,  287 => 123,  281 => 122,  277 => 120,  273 => 118,  270 => 117,  264 => 116,  262 => 115,  256 => 112,  251 => 110,  248 => 109,  244 => 108,  240 => 107,  230 => 102,  221 => 96,  217 => 95,  204 => 85,  200 => 84,  187 => 74,  183 => 73,  170 => 63,  166 => 62,  153 => 52,  149 => 51,  132 => 39,  125 => 36,  122 => 35,  116 => 34,  112 => 32,  108 => 30,  105 => 29,  99 => 28,  97 => 27,  90 => 24,  86 => 22,  84 => 21,  81 => 20,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  69 => 15,  66 => 14,  64 => 13,  57 => 11,  51 => 8,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/storereviews.twig", "");
    }
}
