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

/* unishop2/template/product/review.twig */
class __TwigTemplate_018b883a53b86e423656c4bb3d828d2e9fdece565cfd9719766604b070006833 extends \Twig\Template
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
        echo "<div>
";
        // line 2
        if (($context["reviews"] ?? null)) {
            // line 3
            echo "\t<div class=\"review-list\">
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 5
                echo "\t\t\t<div class=\"review-list__item uni-item ";
                echo (((($context["votes_status"] ?? null) && twig_get_attribute($this->env, $this->source, $context["review"], "most_popular", [], "any", false, false, false, 5))) ? ("popular") : (""));
                echo "\">
\t\t\t\t<div class=\"review-list__info\">
\t\t\t\t\t<div class=\"review-list__rating rating\"> 
\t\t\t\t\t\t";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<i class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 9) < $context["i"])) ? ("far") : ("fa"));
                    echo " fa-star\"></i>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"review-list__name\"><i class=\"review-list__icon fa fa-user\"></i>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 12);
                echo "</div>
\t\t\t\t\t<div class=\"review-list__date\"><i class=\"review-list__icon fa fa-calendar\"></i>";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 13);
                echo "</div>
\t\t\t\t\t";
                // line 14
                if (($context["votes_status"] ?? null)) {
                    // line 15
                    echo "\t\t\t\t\t\t<div class=\"review-list__votes\">
\t\t\t\t\t\t\t<i class=\"review-list__icon fas fa-thumbs-up\" data-id=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 16);
                    echo "\" data-vote=\"plus\"></i><span class=\"review-list__votes-plus-qty\">";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "votes_plus", [], "any", false, false, false, 16);
                    echo "</span>
\t\t\t\t\t\t\t<i class=\"review-list__icon fas fa-thumbs-down\" data-id=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 17);
                    echo "\" data-vote=\"minus\"></i><span class=\"review-list__votes-minus-qty\">";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "votes_minus", [], "any", false, false, false, 17);
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"review-list__info-text\">
\t\t\t\t\t";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["review"], "plus", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "\t\t\t\t\t\t<div class=\"review-list__plus\">
\t\t\t\t\t\t\t<div class=\"review-list__plus-heading\">";
                    // line 24
                    echo ($context["text_review_plus"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "plus", [], "any", false, false, false, 25);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["review"], "minus", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "\t\t\t\t\t\t<div class=\"review-list__minus\">
\t\t\t\t\t\t\t<div class=\"review-list__minus-heading\">";
                    // line 30
                    echo ($context["text_review_minus"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "minus", [], "any", false, false, false, 31);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t<div class=\"review-list__comment\">
\t\t\t\t\t\t";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, $context["review"], "plus", [], "any", false, false, false, 35) || twig_get_attribute($this->env, $this->source, $context["review"], "minus", [], "any", false, false, false, 35))) {
                    echo "<div class=\"review-list__comment-heading\">";
                    echo ($context["text_review_comment"] ?? null);
                    echo "</div>";
                }
                // line 36
                echo "\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 36);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 38
                if (twig_get_attribute($this->env, $this->source, $context["review"], "admin_reply", [], "any", false, false, false, 38)) {
                    echo " 
\t\t\t\t\t\t<div class=\"review-list__reply\">
\t\t\t\t\t\t\t<div class=\"review-list__reply-heading\">";
                    // line 40
                    echo ($context["text_admin_reply"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "admin_reply", [], "any", false, false, false, 41);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t</div>
\t\t\t\t";
                // line 45
                if ((($context["votes_status"] ?? null) && twig_get_attribute($this->env, $this->source, $context["review"], "most_popular", [], "any", false, false, false, 45))) {
                    // line 46
                    echo "\t\t\t\t\t<div><span class=\"review-list__popular-text ";
                    echo (((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["review"], "plus", [], "any", false, false, false, 46)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["review"], "minus", [], "any", false, false, false, 46)))) ? ("static") : (""));
                    echo "\">";
                    echo ($context["text_most_popular_review"] ?? null);
                    echo "</span></div>
\t\t\t\t";
                }
                // line 48
                echo "\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t";
            if (($context["votes_status"] ?? null)) {
                // line 51
                echo "\t\t\t<script>
\t\t\t\t\$('.review-list__icon').on('click', function() {
\t\t\t\t\tlet \$this = \$(this), id = \$this.data('id'), vote = \$this.data('vote'), total = parseInt(\$this.next().text() != '' ? \$this.next().text() : 0);
\t\t\t\t\t\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/module/uni_new_data/setReviewsVotes',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tdata: 'id='+id+'&vote='+vote,
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\tuniFlyAlert('warning', json['error']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\tuniFlyAlert('success', json['success']);
\t\t\t\t\t\t\t\t\$this.next().text(total+1);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t";
            }
            // line 73
            echo "\t\t";
            if (($context["review_show_more"] ?? null)) {
                // line 74
                echo "\t\t\t<div class=\"show-more-review\">
\t\t\t\t<button class=\"show-more-review__btn btn btn-xl btn-default\"><span>";
                // line 75
                echo ($context["button_show_more_reviews"] ?? null);
                echo "</span></button>
\t\t\t</div>
\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t\t\$('.show-more-review__btn').on('click', function() {
\t\t\t\t\t\t\$.get('index.php?route=extension/module/uni_new_data/getReviewsRender&pid=";
                // line 80
                echo ($context["product_id"] ?? null);
                echo "&start=";
                echo ($context["start"] ?? null);
                echo "&limit=";
                echo ($context["limit"] ?? null);
                echo "', (data) => {
\t\t\t\t\t\t\tconst \$data = \$(data);
\t\t\t\t
\t\t\t\t\t\t\t\$data.find('.review-list__item').hide();
\t\t\t\t
\t\t\t\t\t\t\t\$('.review-list').append(\$data.find('.review-list').html());
\t\t\t\t\t
\t\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t
\t\t\t\t\t\t\t\$('.review-list__item').fadeIn();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t";
            }
            // line 95
            echo "\t</div>
";
        } else {
            // line 97
            echo "\t<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
        // line 99
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 99,  251 => 97,  247 => 95,  225 => 80,  217 => 75,  214 => 74,  211 => 73,  187 => 51,  184 => 50,  177 => 48,  169 => 46,  167 => 45,  164 => 44,  158 => 41,  154 => 40,  149 => 38,  143 => 36,  137 => 35,  134 => 34,  128 => 31,  124 => 30,  121 => 29,  118 => 28,  112 => 25,  108 => 24,  105 => 23,  103 => 22,  99 => 20,  91 => 17,  85 => 16,  82 => 15,  80 => 14,  76 => 13,  72 => 12,  69 => 11,  60 => 9,  56 => 8,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "unishop2/template/product/review.twig", "");
    }
}
