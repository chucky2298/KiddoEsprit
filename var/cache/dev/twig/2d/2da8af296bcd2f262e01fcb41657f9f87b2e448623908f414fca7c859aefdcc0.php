<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Events/Events/affichageParticipations.html.twig */
class __TwigTemplate_78b26f4cc0af90a7762e891947a65c598973a5f9b6a7f4aa8c86f239aae3102a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/affichageParticipations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/affichageParticipations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Events/Events/affichageParticipations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">Liste passes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our Event Area -->
    <section class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participations"] ?? $this->getContext($context, "participations")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "                <!-- Start Single Event -->
                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"event__list\">
                        <div class=\"event__thumb\">
                            <a href=\"event-details.html\">
                                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("back/" . $this->getAttribute($this->getAttribute($context["p"], "event", []), "brochure", []))), "html", null, true);
            echo "\" alt=\"event images\">
                            </a>
                        </div>
                        <div class=\"event__content\">
                            <div class=\"event__pub\">
                                <div class=\"event__date\">
                                    <span class=\"date\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nbPersonnes", []), "html", null, true);
            echo "</span><span>Passes</span>
                                </div>
                                <ul class=\"event__time\">
                                    <li>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "event", []), "nom", []), "html", null, true);
            echo "</li>
                                </ul>
                            </div>
                            <ul class=\"event__btn\">
                                <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_pass", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Annuler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
        </div>
    </section>
    <!-- End Our Event Area -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Events/Events/affichageParticipations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  114 => 41,  107 => 37,  101 => 34,  92 => 28,  85 => 23,  81 => 22,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">Liste passes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our Event Area -->
    <section class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">
                {% for p in participations %}
                <!-- Start Single Event -->
                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                    <div class=\"event__list\">
                        <div class=\"event__thumb\">
                            <a href=\"event-details.html\">
                                <img src=\"{{ asset('back/' ~ p.event.brochure) }}\" alt=\"event images\">
                            </a>
                        </div>
                        <div class=\"event__content\">
                            <div class=\"event__pub\">
                                <div class=\"event__date\">
                                    <span class=\"date\">{{ p.nbPersonnes }}</span><span>Passes</span>
                                </div>
                                <ul class=\"event__time\">
                                    <li>{{ p.event.nom }}</li>
                                </ul>
                            </div>
                            <ul class=\"event__btn\">
                                <li><a href=\"{{ path('supprimer_pass', { 'id':p.id }) }}\">Annuler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
    <!-- End Our Event Area -->
{% endblock %}", "@Events/Events/affichageParticipations.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\EventsBundle\\Resources\\views\\Events\\affichageParticipations.html.twig");
    }
}
