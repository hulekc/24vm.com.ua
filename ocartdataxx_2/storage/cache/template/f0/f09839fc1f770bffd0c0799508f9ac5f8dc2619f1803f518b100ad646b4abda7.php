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

/* unishop2/template/common/footer.twig */
class __TwigTemplate_d861c8f072d7401bbfceb57500a14ff7f279f722a2a5ae57d59476e5c4937503 extends \Twig\Template
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
        echo "</main>
";
        // line 2
        echo ($context["topstripe"] ?? null);
        echo "
";
        // line 3
        echo ($context["pwa_notification"] ?? null);
        echo "
";
        // line 4
        echo ($context["notification"] ?? null);
        echo "
<footer class=\"footer ";
        // line 5
        echo ((($context["mobile_menu_bottom"] ?? null)) ? ("mobile-menu-bottom") : (""));
        echo "\">
\t";
        // line 6
        echo ($context["subscribe"] ?? null);
        echo "
\t<div class=\"container\">
\t\t<div class=\"ft-block row\">
\t\t    <div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<div class=\"header-logo fly\">
\t\t\t<a href=\"https://grandsmart.shop/\"><img src=\"https://grandsmart.shop/image/catalog/logo-grandsmart.png\" title=\"Grandsmart\" alt=\"GrandSmart\" width=\"223\" height=\"47\" class=\"img-responsive\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__luxline\">
\t\t\t\t<ul class=\"footer__column-ul footer__column-ul-1 list-unstyled\">
\t\t\t\t\t";
        // line 15
        if (($context["informations"] ?? null)) {
            // line 16
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 17
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 17);
                echo "\" class=\"footer__column-a\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 17);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 1, [], "any", false, false, false, 20), "links", [], "any", false, false, false, 20)) {
            // line 21
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 1, [], "any", false, false, false, 21), "links", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "link", [], "any", false, false, false, 22);
                echo "\" class=\"footer__column-a\">";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "title", [], "any", false, false, false, 22);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<div class=\"footer__column-heading\" data-toggle=\"collapse\" data-target=\".footer__column-ul-2\" onclick=\"\$(this).toggleClass('open')\">
\t\t\t\t\t";
        // line 30
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 2, [], "any", false, false, false, 30), "heading", [], "any", false, false, false, 30);
        echo "
\t\t\t\t\t<i class=\"fa-light fa-chevron-down visible-xs\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"footer__column-ul footer__column-ul-2 collapse list-unstyled\">
\t\t\t\t\t";
        // line 34
        if (($context["informations"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 36);
                echo "\" class=\"footer__column-a\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 36);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 2, [], "any", false, false, false, 39), "links", [], "any", false, false, false, 39)) {
            // line 40
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 2, [], "any", false, false, false, 40), "links", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 41
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "link", [], "any", false, false, false, 41);
                echo "\" class=\"footer__column-a\">";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "title", [], "any", false, false, false, 41);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<div class=\"footer__column-heading\" data-toggle=\"collapse\" data-target=\".footer__column-ul-3\" onclick=\"\$(this).toggleClass('open')\">
\t\t\t\t\t";
        // line 48
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 3, [], "any", false, false, false, 48), "heading", [], "any", false, false, false, 48);
        echo "
\t\t\t\t\t<i class=\"fa-light fa-chevron-down visible-xs\"></i>
\t\t\t\t</div>
\t\t\t\t";
        // line 51
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 3, [], "any", false, false, false, 51), "links", [], "any", false, false, false, 51)) {
            // line 52
            echo "\t\t\t\t\t<ul class=\"footer__column-ul footer__column-ul-3 collapse list-unstyled\">
\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 3, [], "any", false, false, false, 53), "links", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 54
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "link", [], "any", false, false, false, 54);
                echo "\" class=\"footer__column-a\">";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "title", [], "any", false, false, false, 54);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 58
        echo "\t\t\t</div>
\t\t\t<div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<div class=\"footer__column-heading footer__column-heading-addr\">";
        // line 60
        echo ($context["text_footer_our_contacts"] ?? null);
        echo "</div>
\t\t\t\t<ul class=\"footer__column-ul footer__contacts list-unstyled\">
\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footer_phone"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 63
            echo "\t\t\t\t\t\t<li class=\"footer__column-li footer__contacts-li\"><i class=\"footer__contacts-icon fa-light fa-phone-volume fa-fw\"></i><a class=\"footer__column-a uni-href\" data-href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["phone"], "href", [], "any", false, false, false, 63);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["phone"], "number", [], "any", false, false, false, 63);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t";
        if (($context["footer_mail"] ?? null)) {
            echo "<li class=\"footer__column-li footer__contacts-li\"><i class=\"footer__contacts-icon fa-light fa-envelope fa-fw\"></i><a class=\"footer__column-a uni-href\" data-href=\"mailto:";
            echo ($context["footer_mail"] ?? null);
            echo "\">";
            echo ($context["footer_mail"] ?? null);
            echo "</a></li>";
        }
        // line 66
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"footer__column-heading footer__column-heading-addr\">";
        // line 67
        echo ($context["text_our_aress"] ?? null);
        echo "</div>
\t\t\t\t<ul class=\"footer__column-ul footer__contacts list-unstyled\">
\t\t\t\t\t";
        // line 69
        if (($context["footer_address"] ?? null)) {
            echo "<li class=\"footer__column-li footer__contacts-li\"><i class=\"footer__contacts-icon fa-light fa-map-marker-alt fa-fw\"></i><a class=\"footer__column-a uni-href\" data-href=\"";
            echo ($context["contact_page_link"] ?? null);
            echo "\">";
            echo ($context["footer_address"] ?? null);
            echo "</a></li>";
        }
        // line 70
        echo "\t\t\t\t<div class=\"footer__column-heading footer__column-heading-addr\">";
        echo ($context["text_work_schedule"] ?? null);
        echo "</div>
\t\t\t\t\t";
        // line 71
        if (($context["footer_open"] ?? null)) {
            echo "<li class=\"footer__column-li footer__contacts-li\"><i class=\"footer__contacts-icon fa-light fa-clock fa-fw\"></i>";
            echo ($context["footer_open"] ?? null);
            echo "</li>";
        }
        // line 72
        echo "\t\t\t\t</ul>
\t\t\t\t";
        // line 73
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 4, [], "any", false, false, false, 73), "links", [], "any", false, false, false, 73)) {
            // line 74
            echo "\t\t\t\t\t<div class=\"footer__column-heading\" data-toggle=\"collapse\" data-target=\".footer__column-ul-4\" onclick=\"\$(this).toggleClass('open')\">
\t\t\t\t\t\t";
            // line 75
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 4, [], "any", false, false, false, 75), "heading", [], "any", false, false, false, 75);
            echo "
\t\t\t\t\t\t<i class=\"fa-light fa-chevron-down visible-xs\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"footer__column-ul footer__column-ul-4 collapse list-unstyled\">
\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_columns"] ?? null), 4, [], "any", false, false, false, 79), "links", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 80
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "link", [], "any", false, false, false, 80);
                echo "\" class=\"footer__column-a\">";
                echo twig_get_attribute($this->env, $this->source, $context["footerlink"], "title", [], "any", false, false, false, 80);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 84
        echo "\t\t\t</div>
\t\t\t";
        // line 85
        if (($context["footer_text"] ?? null)) {
            // line 86
            echo "\t\t\t\t<div class=\"col-sm-12 hidden-xs\">
\t\t\t\t\t<div class=\"footer__text\">";
            // line 87
            echo ($context["footer_text"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 90
        echo "\t\t</div>
\t</div>
\t<div class=\"footer__socials-payments\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"footer__column col-xs-4\">
\t\t\t\t\t<div class=\"footer__media\">
\t\t\t\t\t\t";
        // line 97
        if (($context["socials"] ?? null)) {
            // line 98
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 99
                echo "\t\t\t\t\t\t\t\t<i class=\"footer__socials-icon uni-href fab ";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 99);
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 99);
                echo "\" data-target=\"_blank\"></i>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__column col-xs-4\">
<div class=\"footer__text-reserved\">© 2023 UA. ";
        // line 105
        echo ($context["text_footer_bottom"] ?? null);
        echo " GrandSmart</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__column col-xs-4\">
\t\t\t\t\t<div class=\"visible-xs visible-sm\" style=\"height:15px\"></div>
\t\t\t\t\t<div class=\"footer__payments\">
\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_icons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 111
            echo "\t\t\t\t\t\t\t";
            if (twig_in_filter("catalog", $context["icon"])) {
                // line 112
                echo "\t\t\t\t\t\t\t\t<img src=\"image/";
                echo $context["icon"];
                echo "\" alt=\"Payment system\" class=\"footer__payments-icon\" />
\t\t\t\t\t\t\t";
            } else {
                // line 114
                echo "\t\t\t\t\t\t\t\t<div class=\"footer__payments-icon ";
                echo $context["icon"];
                echo "\"></div>
\t\t\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<div class=\"fly-block ";
        // line 123
        echo ((($context["mobile_menu_bottom"] ?? null)) ? ("mobile-menu-bottom") : (""));
        echo "\">
\t";
        // line 124
        if (($context["wishlist"] ?? null)) {
            // line 125
            echo "\t\t<div class=\"fly-block__item fly-block__wishlist uni-href\" data-href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "href", [], "any", false, false, false, 125);
            echo "\" title=\"";
            echo ($context["text_fly_wishlist"] ?? null);
            echo "\" data-toggle=\"tooltip\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "products", [], "any", false, false, false, 125);
            echo "\">
\t\t\t<i class=\"fa-light fa-heart fly-block__wishlist-icon\"></i><span class=\"fly-block__total fly-block__wishlist-total\">";
            // line 126
            echo twig_get_attribute($this->env, $this->source, ($context["wishlist"] ?? null), "total", [], "any", false, false, false, 126);
            echo "</span>
\t\t</div>
\t";
        }
        // line 129
        echo "\t";
        if (($context["compare"] ?? null)) {
            // line 130
            echo "\t\t<div class=\"fly-block__item fly-block__compare uni-href\" data-href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "href", [], "any", false, false, false, 130);
            echo "\" title=\"";
            echo ($context["text_fly_compare"] ?? null);
            echo "\" data-toggle=\"tooltip\" data-products=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "products", [], "any", false, false, false, 130);
            echo "\">
\t\t\t<i class=\"fa-light fa-balance-scale fly-block__compare-icon\"></i><span class=\"fly-block__total fly-block__compare-total\">";
            // line 131
            echo twig_get_attribute($this->env, $this->source, ($context["compare"] ?? null), "total", [], "any", false, false, false, 131);
            echo "</span>
\t\t</div>
\t";
        }
        // line 134
        echo "\t";
        if (($context["show_fly_callback"] ?? null)) {
            // line 135
            echo "\t\t<div class=\"fly-block__item fly-block__callback\" onclick=\"uniRequestOpen(['mail', 'phone', 'comment'])\" ";
            echo ((($context["fly_callback_text"] ?? null)) ? ((("title=\"" . ($context["fly_callback_text"] ?? null)) . "\" data-toggle=\"tooltip\"")) : (""));
            echo ">
\t\t\t<i class=\"fa-light fa-phone fly-block__callback-icon\"></i>
\t\t</div>
\t";
        }
        // line 139
        echo "\t<div class=\"fly-block__item fly-block__scrollup\" onclick=\"uniScrollTo('body')\">
\t\t<i class=\"fa-light fa-chevron-up fly-block__scrollup-icon\" aria-hidden=\"true\"></i>
\t</div>
\t<script>
\t\t\$(window).scroll(function(){\t\t
\t\t\t\$(this).scrollTop() > 190 ? \$('.fly-block__scrollup').addClass('visible') : \$('.fly-block__scrollup').removeClass('visible');
\t\t});
\t</script>
</div>
<script>var uniJsVars = JSON.parse(atob('";
        // line 148
        echo ($context["js_vars"] ?? null);
        echo "'));</script>
";
        // line 149
        if (($context["scripts_delayed"] ?? null)) {
            // line 150
            echo "\t<script>
\t\tsetTimeout(() => {
\t\t\t";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts_delayed"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 153
                echo "\t\t\t\t\$.getScript('";
                echo $context["script"];
                echo "');
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t}, ";
            echo (($context["scripts_delayed_time"] ?? null) * 1000);
            echo ");
\t</script>
";
        }
        // line 158
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 158,  472 => 155,  463 => 153,  459 => 152,  455 => 150,  453 => 149,  449 => 148,  438 => 139,  430 => 135,  427 => 134,  421 => 131,  412 => 130,  409 => 129,  403 => 126,  394 => 125,  392 => 124,  388 => 123,  380 => 117,  374 => 116,  368 => 114,  362 => 112,  359 => 111,  355 => 110,  347 => 105,  342 => 102,  339 => 101,  328 => 99,  323 => 98,  321 => 97,  312 => 90,  306 => 87,  303 => 86,  301 => 85,  298 => 84,  294 => 82,  283 => 80,  279 => 79,  272 => 75,  269 => 74,  267 => 73,  264 => 72,  258 => 71,  253 => 70,  245 => 69,  240 => 67,  237 => 66,  228 => 65,  217 => 63,  213 => 62,  208 => 60,  204 => 58,  200 => 56,  189 => 54,  185 => 53,  182 => 52,  180 => 51,  174 => 48,  168 => 44,  165 => 43,  154 => 41,  149 => 40,  146 => 39,  143 => 38,  132 => 36,  127 => 35,  125 => 34,  118 => 30,  111 => 25,  108 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  75 => 17,  70 => 16,  68 => 15,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/footer.twig", "");
    }
}
