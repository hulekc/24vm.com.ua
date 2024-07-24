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
class __TwigTemplate_e7aca691d282576b36f2e297ff01aa47c0b46e388f0f6e795df389b65576b62e extends \Twig\Template
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
        echo "
            ";
        // line 159
        if ((array_key_exists("module_ts_messengers_widget_status", $context) && ($context["module_ts_messengers_widget_status"] ?? null))) {
            // line 160
            echo "                <div class=\"ts-mw-button\" id=\"ts-mw-id\">
                    ";
            // line 161
            if ( !twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["animation_3"] ?? null) : null))) {
                // line 162
                echo "                        <div class=\"ts-mw-pulse\"></div>
                    ";
            }
            // line 164
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_settings"] ?? null), "main_tips", [], "array", true, true, false, 164) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["main_tips"] ?? null) : null) == "1"))) {
                // line 165
                echo "                        <div class=\"ts-mw-tips\">
                            <div class=\"ts-mw-tips-text\">";
                // line 166
                echo ($context["tip_text"] ?? null);
                echo "</div>
                            ";
                // line 167
                if ((((array_key_exists("manager_image", $context) && (($context["manager_image"] ?? null) != "")) && array_key_exists("manager_text", $context)) && (($context["manager_text"] ?? null) != ""))) {
                    // line 168
                    echo "                            <div class=\"ts-mw-tips-manager\">
                                ";
                    // line 169
                    if ((array_key_exists("manager_image", $context) && (($context["manager_image"] ?? null) != ""))) {
                        // line 170
                        echo "                                    <img src=\"";
                        echo ($context["manager_image"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["manager_text"] ?? null);
                        echo "\">
                                ";
                    }
                    // line 172
                    echo "                                <span>";
                    echo ($context["manager_text"] ?? null);
                    echo "</span>
                            </div>
                            ";
                }
                // line 175
                echo "                            <span class=\"ts-mw-tips-close\" onclick=\"hidetips();\">×</span>
                            <script>function setCookie(e,t,o){var i=new Date;i.setTime(i.getTime()+24*o*60*60*1e3);var n=\"expires=\"+i.toUTCString();document.cookie=e+\"=\"+t+\";\"+n+\";path=/\"}function getCookie(e){for(var t=e+\"=\",o=document.cookie.split(\";\"),i=0;i<o.length;i++){for(var n=o[i];\" \"==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return\"\"}function hidetips(){\$(\".ts-mw-tips\").remove(),setCookie(\"ts_tips_cookie\",\"1\",\"1\")}\$(document).ready(function(){\"\"!=getCookie(\"ts_tips_cookie\")&&\$(\".ts-mw-tips\").remove()});</script>
                        </div>
                    ";
            }
            // line 179
            echo "                    <div class=\"ts-mw-icon ";
            if ( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["animation_1"] ?? null) : null))) {
                echo "mw-animation";
            }
            echo " ";
            if ( !twig_test_empty((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["animation_2"] ?? null) : null))) {
                echo " ";
                echo "mw-animation-2";
            }
            echo "\">
                        ";
            // line 180
            if ( !twig_test_empty((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["animation_2"] ?? null) : null))) {
                // line 181
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messengers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["messenger"]) {
                    // line 182
                    echo "                                ";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["messenger"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["field"] ?? null) : null) == "tg")) {
                        // line 183
                        echo "                                    <div class=\"slides\"><span class=\"tg-icon\"><img src=\"image/catalog/ts-messengers/ts-telegram.svg\" alt=\"";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["messenger"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 =                     // line 184
$context["messenger"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["field"] ?? null) : null) == "viber") || ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["messenger"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["field"] ?? null) : null) == "viber_b")) || ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["messenger"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["field"] ?? null) : null) == "viber_group"))) {
                        // line 185
                        echo "                                    <div class=\"slides\"><span class=\"viber-icon\"><img src=\"image/catalog/ts-messengers/ts-viber.svg\" alt=\"";
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["messenger"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae =                     // line 186
$context["messenger"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["field"] ?? null) : null) == "whatsapp")) {
                        // line 187
                        echo "                                    <div class=\"slides\"><span class=\"whatsapp-icon\"><img src=\"image/catalog/ts-messengers/ts-whatsapp.svg\" alt=\"";
                        echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["messenger"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 =                     // line 188
$context["messenger"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["field"] ?? null) : null) == "messenger")) {
                        // line 189
                        echo "                                    <div class=\"slides\"><span class=\"messenger-icon\"><img src=\"image/catalog/ts-messengers/ts-messenger.svg\" alt=\"";
                        echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["messenger"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 =                     // line 190
$context["messenger"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["field"] ?? null) : null) == "skype")) {
                        // line 191
                        echo "                                    <div class=\"slides\"><span class=\"skype-icon\"><img src=\"image/catalog/ts-messengers/ts-skype.svg\" alt=\"";
                        echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["messenger"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b =                     // line 192
$context["messenger"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["field"] ?? null) : null) == "mail")) {
                        // line 193
                        echo "                                    <div class=\"slides\"><span class=\"mail-icon\"><img src=\"image/catalog/ts-messengers/ts-mail.svg\" alt=\"";
                        echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["messenger"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 =                     // line 194
$context["messenger"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["field"] ?? null) : null) == "vk")) {
                        // line 195
                        echo "                                    <div class=\"slides\"><span class=\"vk-icon\"><img src=\"image/catalog/ts-messengers/ts-vk.svg\" alt=\"";
                        echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["messenger"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 =                     // line 196
$context["messenger"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["field"] ?? null) : null) == "instagram")) {
                        // line 197
                        echo "                                    <div class=\"slides\"><span class=\"instagram-icon\"><img src=\"image/catalog/ts-messengers/ts-instagram.svg\" alt=\"";
                        echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["messenger"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f =                     // line 198
$context["messenger"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["field"] ?? null) : null) == "faq")) {
                        // line 199
                        echo "                                    <div class=\"slides\"><span class=\"faq-icon\"><img src=\"image/catalog/ts-messengers/ts-faq.svg\" alt=\"";
                        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["messenger"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 =                     // line 200
$context["messenger"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["field"] ?? null) : null) == "jivosite")) {
                        // line 201
                        echo "                                    <div class=\"slides\"><span class=\"jivosite-icon\"><img src=\"image/catalog/ts-messengers/ts-jivosite.svg\" alt=\"";
                        echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["messenger"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 =                     // line 202
$context["messenger"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["field"] ?? null) : null) == "callback")) {
                        // line 203
                        echo "                                    <div class=\"slides\"><span class=\"callback-icon\"><img src=\"image/catalog/ts-messengers/ts-phone.svg\" alt=\"";
                        echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["messenger"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } elseif (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 =                     // line 204
$context["messenger"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["field"] ?? null) : null) == "ydialog")) {
                        // line 205
                        echo "                                    <div class=\"slides\"><span class=\"ydialog-icon\"><img src=\"image/catalog/ts-messengers/ts-ydialog.svg\" alt=\"";
                        echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["messenger"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    } else {
                        // line 207
                        echo "                                    <div class=\"slides\"><span class=\"callback-icon\"><img src=\"";
                        echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["messenger"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["icon"] ?? null) : null);
                        echo "\" alt=\"";
                        echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["messenger"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["link_text"] ?? null) : null);
                        echo "\"></span></div>
                                ";
                    }
                    // line 209
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messenger'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                echo "                                <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                        ";
            } else {
                // line 212
                echo "                            <i class=\"";
                echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["main_icon"] ?? null) : null);
                echo "\" aria-hidden=\"true\"></i>
                        ";
            }
            // line 214
            echo "                    </div>
                    <div class=\"ts-mw-block ";
            // line 215
            if ( !twig_test_empty((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["no_bg"] ?? null) : null))) {
                echo "mw-no-bg ";
                if ( !twig_test_empty((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["tips"] ?? null) : null))) {
                    echo "mw-tips tips-";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["position"] ?? null) : null);
                }
            }
            echo "\">
                        <ul class=\"ts-mw-list\">
                            ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messengers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["messenger"]) {
                // line 218
                echo "                                ";
                if (((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["messenger"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["field"] ?? null) : null) == "callback")) {
                    // line 219
                    echo "                                    <li class=\"ts-mw-li ts-callback\"><a href=\"javascript:void(0);\" ";
                    echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["messenger"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["link"] ?? null) : null);
                    echo "><span class=\"callback-icon\"><img src=\"image/catalog/ts-messengers/ts-phone.svg\" alt=\"";
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["messenger"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["messenger"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b =                 // line 220
$context["messenger"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["field"] ?? null) : null) == "tg")) {
                    // line 221
                    echo "                                    <li class=\"ts-mw-li ts-telegram\"><a href=\"http://t.me/";
                    echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["messenger"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"tg-icon\"><img src=\"image/catalog/ts-messengers/ts-telegram.svg\" alt=\"";
                    echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["messenger"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["messenger"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 =                 // line 222
$context["messenger"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["field"] ?? null) : null) == "viber")) {
                    // line 223
                    echo "                                    <li class=\"ts-mw-li ts-viber\"><a href=\"viber://chat?number=%2B";
                    echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["messenger"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"viber-icon\"><img src=\"image/catalog/ts-messengers/ts-viber.svg\" alt=\"";
                    echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["messenger"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["messenger"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 =                 // line 224
$context["messenger"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["field"] ?? null) : null) == "viber_b")) {
                    // line 225
                    echo "                                    <li class=\"ts-mw-li ts-viber-b\"><a href=\"viber://pa?chatURI=";
                    echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["messenger"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"viber-icon\"><img src=\"image/catalog/ts-messengers/ts-viber.svg\" alt=\"";
                    echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["messenger"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["messenger"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 =                 // line 226
$context["messenger"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["field"] ?? null) : null) == "viber_group")) {
                    // line 227
                    echo "                                    <li class=\"ts-mw-li ts-viber-g\"><a href=\"https://invite.viber.com/";
                    echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["messenger"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"viber-icon\"><img src=\"image/catalog/ts-messengers/ts-viber.svg\" alt=\"";
                    echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["messenger"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["messenger"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec =                 // line 228
$context["messenger"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["field"] ?? null) : null) == "whatsapp")) {
                    // line 229
                    echo "                                    <li class=\"ts-mw-li ts-whatsapp\"><a href=\"https://api.whatsapp.com/send?phone=";
                    echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["messenger"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"whatsapp-icon\"><img src=\"image/catalog/ts-messengers/ts-whatsapp.svg\" alt=\"";
                    echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["messenger"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["messenger"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc =                 // line 230
$context["messenger"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["field"] ?? null) : null) == "messenger")) {
                    // line 231
                    echo "                                    <li class=\"ts-mw-li ts-messenger\"><a href=\"https://m.me/";
                    echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["messenger"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"messenger-icon\"><img src=\"image/catalog/ts-messengers/ts-messenger.svg\" alt=\"";
                    echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["messenger"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["messenger"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d =                 // line 232
$context["messenger"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["field"] ?? null) : null) == "skype")) {
                    // line 233
                    echo "                                    <li class=\"ts-mw-li ts-skype\"><a href=\"skype:";
                    echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["messenger"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["link"] ?? null) : null);
                    echo "?chat\" rel=\"nofollow\" target=\"_blank\"><span class=\"skype-icon\"><img src=\"image/catalog/ts-messengers/ts-skype.svg\" alt=\"";
                    echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["messenger"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["messenger"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf =                 // line 234
$context["messenger"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["field"] ?? null) : null) == "mail")) {
                    // line 235
                    echo "                                    <li class=\"ts-mw-li ts-mail\"><a href=\"mailto:";
                    echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["messenger"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"mail-icon\"><img src=\"image/catalog/ts-messengers/ts-mail.svg\" alt=\"";
                    echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["messenger"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["messenger"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 =                 // line 236
$context["messenger"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["field"] ?? null) : null) == "vk")) {
                    // line 237
                    echo "                                    <li class=\"ts-mw-li ts-vk\"><a href=\"https://vk.me/";
                    echo (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["messenger"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"vk-icon\"><img src=\"image/catalog/ts-messengers/ts-vk.svg\" alt=\"";
                    echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["messenger"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["messenger"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 =                 // line 238
$context["messenger"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["field"] ?? null) : null) == "instagram")) {
                    // line 239
                    echo "                                    <li class=\"ts-mw-li ts-instagram\"><a href=\"https://www.instagram.com/";
                    echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["messenger"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"instagram-icon\"><img src=\"image/catalog/ts-messengers/ts-instagram.svg\" alt=\"";
                    echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["messenger"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["messenger"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 =                 // line 240
$context["messenger"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["field"] ?? null) : null) == "faq")) {
                    // line 241
                    echo "                                    <li class=\"ts-mw-li ts-faq\"><a href=\"";
                    echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["messenger"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["link"] ?? null) : null);
                    echo "\" rel=\"nofollow\" target=\"_blank\"><span class=\"faq-icon\"><img src=\"image/catalog/ts-messengers/ts-faq.svg\" alt=\"";
                    echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["messenger"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["messenger"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 =                 // line 242
$context["messenger"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["field"] ?? null) : null) == "jivosite")) {
                    // line 243
                    echo "                                    <li class=\"ts-mw-li ts-jivosite\"><a href=\"javascript:jivo_api.open()\"><span class=\"jivosite-icon\"><img src=\"image/catalog/ts-messengers/ts-jivosite.svg\" alt=\"";
                    echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["messenger"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["messenger"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } elseif (((($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 =                 // line 244
$context["messenger"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["field"] ?? null) : null) == "ydialog")) {
                    // line 245
                    echo "                                    <li class=\"ts-mw-li ts-ydialog\"><a onclick=\"\$('.ya-chat-button *')[0].click(),\$('.ya-chat-widget').attr('style', 'display: block !important');\"><span class=\"ydialog-icon\"><img src=\"image/catalog/ts-messengers/ts-ydialog.svg\" alt=\"";
                    echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["messenger"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["messenger"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                } else {
                    // line 247
                    echo "                                    <li class=\"ts-mw-li ts-phone\"><a href=\"tel:";
                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["messenger"], "link", [], "any", false, false, false, 247), [" " => "", "-" => "", "(" => "", ")" => ""]);
                    echo "\"><span class=\"callback-icon\"><img src=\"";
                    echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["messenger"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["icon"] ?? null) : null);
                    echo "\" alt=\"";
                    echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["messenger"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["link_text"] ?? null) : null);
                    echo "\"></span><span class=\"ts-link-text\">";
                    echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["messenger"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["link_text"] ?? null) : null);
                    echo "</span></a></li>
                                ";
                }
                // line 249
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messenger'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                        </ul>
                    </div>
                </div>
            ";
            // line 253
            if ( !twig_test_empty((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["fogging"] ?? null) : null))) {
                // line 254
                echo "                <div class=\"ts-mw-substrate\"></div>
            ";
            }
            // line 256
            echo "<script>
\$('.ts-mw-icon,.ts-mw-li a,.ts-mw-substrate').on('click',function(){\$('#ts-mw-id').toggleClass('open');\$('.ts-mw-substrate').toggleClass('active');});
";
            // line 258
            if (((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["main_tips_type"] ?? null) : null) == "delay")) {
                // line 259
                echo "\$('.ts-mw-tips').delay(";
                echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["delay_time"] ?? null) : null);
                echo ").queue(function(show){\$(this).css({'opacity':'1','visibility':'visible'});show();});
";
            }
            // line 261
            if ( !twig_test_empty((($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["animation_2"] ?? null) : null))) {
                // line 262
                echo "\$(document).ready(function(){var a=-1;setInterval(function(){var e=\$(\".ts-mw-icon div\"),s=e.length-1;a<s?a++:a=0,e.removeClass(\"active\").eq(a).addClass(\"active\")},";
                echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["module_ts_messengers_widget_settings"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["slide_speed"] ?? null) : null);
                echo "),\$(\".slides\").first().addClass(\"active\")});
";
            }
            // line 264
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_jivosite", [], "array", false, true, false, 264), "link", [], "array", true, true, false, 264) && (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["ts_jivosite"] ?? null) : null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["link"] ?? null) : null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_jivosite", [], "array", false, true, false, 264), "link_status", [], "array", true, true, false, 264)) && ((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["ts_jivosite"] ?? null) : null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["link_status"] ?? null) : null) == "on"))) {
                // line 265
                echo "\$(document).ready(function() {
    var n = document.getElementsByTagName('script')[0],
    s = document.createElement('script');
    s.async = true;
    s.charset = 'UTF-8';
    s.src = '//code.jivosite.com/widget/";
                // line 270
                echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["ts_jivosite"] ?? null) : null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["link"] ?? null) : null);
                echo "';
    n.parentNode.insertBefore(s, n);
});
";
            }
            // line 274
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_ydialog", [], "array", false, true, false, 274), "link", [], "array", true, true, false, 274) && (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["ts_ydialog"] ?? null) : null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["link"] ?? null) : null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_ts_messengers_widget_data"] ?? null), "ts_ydialog", [], "array", false, true, false, 274), "link_status", [], "array", true, true, false, 274)) && ((($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["ts_ydialog"] ?? null) : null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["link_status"] ?? null) : null) == "on"))) {
                // line 275
                echo "(function () {
window['yandexChatWidgetCallback'] = function() {
    try {
        window.yandexChatWidget = new Ya.ChatWidget({
            guid: '";
                // line 279
                echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["module_ts_messengers_widget_data"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["ts_ydialog"] ?? null) : null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["link"] ?? null) : null);
                echo "',
            buttonText: false,
            title: 'Чат',
            theme: 'light',
            collapsedDesktop: 'never',
            collapsedTouch: 'always'
        });
    } catch(e) { }
};
var n = document.getElementsByTagName('script')[0],
    s = document.createElement('script');
s.async = true;
s.charset = 'UTF-8';
s.src = 'https://chat.s3.yandex.net/widget.js';
n.parentNode.insertBefore(s, n);
})();
function hideyd() {
    \$('.ya-chat-widget').attr('style', 'display: none !important');
    \$('.ya-chat-header__close').on('click', function () {
        \$('.ya-chat-widget').attr('style', 'display: none !important');
    });
}
setTimeout(function() {hideyd();}, 500);
";
            }
            // line 303
            echo "</script>
            ";
        }
        // line 305
        echo "            

\t\t\t\t";
        // line 307
        echo ($context["config_counters"] ?? null);
        echo "
\t\t\t
<a style=\"display:none;visibility:hidden;opacity:0;position:absolute;bottom:-100%;left:-100%;\" href=\"https://lookatcourse.com/\" title=\"Онлайн курсы IT\">Онлайн курсы IT</a></body>
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
        return array (  938 => 307,  934 => 305,  930 => 303,  903 => 279,  897 => 275,  895 => 274,  888 => 270,  881 => 265,  879 => 264,  873 => 262,  871 => 261,  865 => 259,  863 => 258,  859 => 256,  855 => 254,  853 => 253,  848 => 250,  842 => 249,  830 => 247,  822 => 245,  820 => 244,  813 => 243,  811 => 242,  802 => 241,  800 => 240,  791 => 239,  789 => 238,  780 => 237,  778 => 236,  769 => 235,  767 => 234,  758 => 233,  756 => 232,  747 => 231,  745 => 230,  736 => 229,  734 => 228,  725 => 227,  723 => 226,  714 => 225,  712 => 224,  703 => 223,  701 => 222,  692 => 221,  690 => 220,  681 => 219,  678 => 218,  674 => 217,  663 => 215,  660 => 214,  654 => 212,  650 => 210,  644 => 209,  636 => 207,  630 => 205,  628 => 204,  623 => 203,  621 => 202,  616 => 201,  614 => 200,  609 => 199,  607 => 198,  602 => 197,  600 => 196,  595 => 195,  593 => 194,  588 => 193,  586 => 192,  581 => 191,  579 => 190,  574 => 189,  572 => 188,  567 => 187,  565 => 186,  560 => 185,  558 => 184,  553 => 183,  550 => 182,  545 => 181,  543 => 180,  531 => 179,  525 => 175,  518 => 172,  510 => 170,  508 => 169,  505 => 168,  503 => 167,  499 => 166,  496 => 165,  493 => 164,  489 => 162,  487 => 161,  484 => 160,  482 => 159,  479 => 158,  472 => 155,  463 => 153,  459 => 152,  455 => 150,  453 => 149,  449 => 148,  438 => 139,  430 => 135,  427 => 134,  421 => 131,  412 => 130,  409 => 129,  403 => 126,  394 => 125,  392 => 124,  388 => 123,  380 => 117,  374 => 116,  368 => 114,  362 => 112,  359 => 111,  355 => 110,  347 => 105,  342 => 102,  339 => 101,  328 => 99,  323 => 98,  321 => 97,  312 => 90,  306 => 87,  303 => 86,  301 => 85,  298 => 84,  294 => 82,  283 => 80,  279 => 79,  272 => 75,  269 => 74,  267 => 73,  264 => 72,  258 => 71,  253 => 70,  245 => 69,  240 => 67,  237 => 66,  228 => 65,  217 => 63,  213 => 62,  208 => 60,  204 => 58,  200 => 56,  189 => 54,  185 => 53,  182 => 52,  180 => 51,  174 => 48,  168 => 44,  165 => 43,  154 => 41,  149 => 40,  146 => 39,  143 => 38,  132 => 36,  127 => 35,  125 => 34,  118 => 30,  111 => 25,  108 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  75 => 17,  70 => 16,  68 => 15,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/footer.twig", "");
    }
}
