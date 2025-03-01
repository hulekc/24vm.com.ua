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

/* default/template/checkout/simplecheckout_payment.twig */
class __TwigTemplate_357d23086132fb1a7078c0d8fe50a2d86dacddf3d5dd06ec8882ccad12ffb748 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_payment\" ";
        echo ((($context["hide"] ?? null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo (((($context["display_error"] ?? null) && ($context["has_error"] ?? null))) ? ("data-error=\"true\"") : (""));
        echo ">
    ";
        // line 2
        if (($context["display_header"] ?? null)) {
            // line 3
            echo "        <div class=\"checkout-heading panel-heading\">";
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"alert alert-danger simplecheckout-warning-block\" ";
        echo (((($context["display_error"] ?? null) && ($context["has_error_payment"] ?? null))) ? ("") : ("style=\"display:none\""));
        echo ">";
        echo ($context["error_payment"] ?? null);
        echo "</div>
    <div class=\"simplecheckout-block-content\">
        ";
        // line 7
        if ( !twig_test_empty(($context["payment_methods"] ?? null))) {
            // line 8
            echo "            ";
            if ((($context["display_type"] ?? null) == 2)) {
                // line 9
                echo "                ";
                $context["current_method"] = false;
                // line 10
                echo "                <select data-onchange=\"reloadAll\" name=\"payment_method\" class=\"form-control\">
                    <option value=\"\" disabled=\"disabled\" ";
                // line 11
                if (twig_test_empty(($context["code"] ?? null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo ($context["text_select"] ?? null);
                echo "</option>
                    ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 13
                    echo "                        <option value=\"";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["payment_method"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null);
                    echo "\" ";
                    echo (( !twig_test_empty((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["payment_method"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["dummy"] ?? null) : null))) ? ("disabled=\"disabled\"") : (""));
                    echo " ";
                    echo (( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["payment_method"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["dummy"] ?? null) : null))) ? ("data-dummy=\"true\"") : (""));
                    echo " ";
                    if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["payment_method"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null) == ($context["code"] ?? null))) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["payment_method"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["title"] ?? null) : null);
                    echo "</option>
                        ";
                    // line 14
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["payment_method"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["code"] ?? null) : null) == ($context["code"] ?? null))) {
                        // line 15
                        echo "                            ";
                        $context["current_method"] = $context["payment_method"];
                        // line 16
                        echo "                        ";
                    }
                    // line 17
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                </select>
                ";
                // line 19
                if (($context["current_method"] ?? null)) {
                    // line 20
                    echo "                    ";
                    if ( !twig_test_empty((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["current_method"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["description"] ?? null) : null))) {
                        // line 21
                        echo "                        <div class=\"simplecheckout-methods-description\">";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["current_method"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["description"] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 23
                    echo "                    ";
                    if ( !twig_test_empty(($context["rows"] ?? null))) {
                        // line 24
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 25
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "                    ";
                    }
                    // line 28
                    echo "                ";
                }
                // line 29
                echo "            ";
            } else {
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 31
                    echo "                    <div class=\"radio\">
                        <label for=\"";
                    // line 32
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["payment_method"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["code"] ?? null) : null);
                    echo "\">
                            <input type=\"radio\" data-onchange=\"reloadAll\" name=\"payment_method\" value=\"";
                    // line 33
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["payment_method"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["code"] ?? null) : null);
                    echo "\" ";
                    echo (( !twig_test_empty((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["payment_method"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["dummy"] ?? null) : null))) ? ("disabled=\"disabled\"") : (""));
                    echo " ";
                    echo (( !twig_test_empty((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["payment_method"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["dummy"] ?? null) : null))) ? ("data-dummy=\"true\"") : (""));
                    echo " id=\"";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["payment_method"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["code"] ?? null) : null);
                    echo "\" ";
                    if (((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["payment_method"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["code"] ?? null) : null) == ($context["code"] ?? null))) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
                            ";
                    // line 34
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["payment_method"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["title"] ?? null) : null);
                    echo "
                            ";
                    // line 35
                    if ( !twig_test_empty((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["payment_method"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["terms"] ?? null) : null))) {
                        // line 36
                        echo "                                ";
                        echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["payment_method"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["terms"] ?? null) : null);
                        echo "
                            ";
                    }
                    // line 38
                    echo "                        </label>
                    </div>
                    ";
                    // line 40
                    if (( !twig_test_empty((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["payment_method"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["description"] ?? null) : null)) && (twig_test_empty(($context["display_for_selected"] ?? null)) || ( !twig_test_empty(($context["display_for_selected"] ?? null)) && ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["payment_method"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["code"] ?? null) : null) == ($context["code"] ?? null)))))) {
                        // line 41
                        echo "                        <div class=\"form-group\">
                            <label for=\"";
                        // line 42
                        echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["payment_method"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["code"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["payment_method"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["description"] ?? null) : null);
                        echo "</label>
                        </div>
                    ";
                    }
                    // line 45
                    echo "                    ";
                    if ((((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["payment_method"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["code"] ?? null) : null) == ($context["code"] ?? null)) &&  !twig_test_empty(($context["rows"] ?? null)))) {
                        // line 46
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 47
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "                    ";
                    }
                    // line 50
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            ";
            }
            // line 52
            echo "            <input type=\"hidden\" name=\"payment_method_current\" value=\"";
            echo ($context["code"] ?? null);
            echo "\" />
            <input type=\"hidden\" name=\"payment_method_checked\" value=\"";
            // line 53
            echo ($context["checked_code"] ?? null);
            echo "\" />
        ";
        }
        // line 55
        echo "        ";
        if (((twig_test_empty(($context["payment_methods"] ?? null)) && ($context["address_empty"] ?? null)) && ($context["display_address_empty"] ?? null))) {
            // line 56
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo ($context["text_payment_address"] ?? null);
            echo "</div>
        ";
        }
        // line 58
        echo "        ";
        if ((twig_test_empty(($context["payment_methods"] ?? null)) &&  !($context["address_empty"] ?? null))) {
            // line 59
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo ($context["error_no_payment"] ?? null);
            echo "</div>
        ";
        }
        // line 61
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 61,  258 => 59,  255 => 58,  249 => 56,  246 => 55,  241 => 53,  236 => 52,  233 => 51,  227 => 50,  224 => 49,  215 => 47,  210 => 46,  207 => 45,  199 => 42,  196 => 41,  194 => 40,  190 => 38,  184 => 36,  182 => 35,  178 => 34,  164 => 33,  160 => 32,  157 => 31,  152 => 30,  149 => 29,  146 => 28,  143 => 27,  134 => 25,  129 => 24,  126 => 23,  120 => 21,  117 => 20,  115 => 19,  112 => 18,  106 => 17,  103 => 16,  100 => 15,  98 => 14,  83 => 13,  79 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  52 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout_payment.twig", "");
    }
}
