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

/* unishop2/template/common/column_left.twig */
class __TwigTemplate_e109d4cb7e3864aa189cf852a8006ac9114a318f0ffe319087ce1f2b896343fa extends \Twig\Template
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
        if ((($context["modules"] ?? null) || ($context["menu_expanded"] ?? null))) {
            // line 2
            echo "\t<aside id=\"column-left\" class=\"col-sm-4 col-md-3 col-lg-3 col-xxl-4 hidden-xs ";
            echo (((($context["route"] ?? null) == "common/home")) ? ("hidden-sm") : (""));
            echo "\">
\t\t";
            // line 3
            if (($context["menu_expanded"] ?? null)) {
                // line 4
                echo "\t\t\t<script>
\t\t\t\tconst new_margin = () => {
\t\t\t\t\tif(\$(window).width() > 992) {
\t\t\t\t\t\t\$('#column-left').css('margin-top', (\$('header .menu1 .menu__collapse').height() ";
                // line 7
                echo (((($context["route"] ?? null) != "common/home")) ? ("- \$(\".breadcrumb-h1\").outerHeight()") : (""));
                echo " + 5));
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#column-left').css('margin-top', '');
\t\t\t\t\t}
\t\t\t\t}
\t\t
\t\t\t\tnew_margin();
\t\t
\t\t\t\t\$(window).resize(new_margin);
\t\t\t</script>
\t\t";
            }
            // line 18
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 19
                echo "\t\t\t";
                echo $context["module"];
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t</aside>
";
        }
        // line 23
        if ((twig_test_empty(($context["modules"] ?? null)) && ($context["menu_expanded"] ?? null))) {
            // line 24
            echo "\t<script>\$('head').append('<style>@media (min-width:767px) and (max-width:992px) { #content{width:100%} }</style>');</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  83 => 23,  79 => 21,  70 => 19,  65 => 18,  51 => 7,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/common/column_left.twig", "");
    }
}
