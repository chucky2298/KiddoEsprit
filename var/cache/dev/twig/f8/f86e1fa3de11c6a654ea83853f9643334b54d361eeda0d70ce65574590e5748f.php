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

/* @Events/Events/affichageFront.html.twig */
class __TwigTemplate_e5fd3d62f08b89a1a74a85380c60171da1cac4b7174041ab4f247d1dacb23155 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/affichageFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/affichageFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Events/Events/affichageFront.html.twig", 1);
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
                            <h2 class=\"bradcaump-title\">Evenements</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our Event Area -->
    <div class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["events"]);
        foreach ($context['_seq'] as $context["_key"] => $context["events"]) {
            // line 23
            echo "                <!-- Start Single Event -->
                <div class=\"col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"dcare__event\">
                        <div class=\"event__thumb\">
                            <a href=\"#\">
                                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("back/" . $this->getAttribute($context["events"], "brochure", []))), "html", null, true);
            echo "\" alt=\"event images\">
                            </a>
                        </div>
                        <div class=\"event__content\">
                            <div class=\"event__pub\">
                                <div class=\"event__date\">
                                    <span class=\"date\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["events"], "date", []), "d"), "html", null, true);
            echo "</span><span>th</span>
                                </div>
                                <ul class=\"event__time\">
                                    <li>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["events"], "date", []), "F"), "html", null, true);
            echo "</li>
                                    <li><i class=\"fa fa-home\"></i>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "adresse", []), "html", null, true);
            echo "</li>
                                </ul>
                            </div>
                            <div class=\"event__inner\">
                                <p><a href=\"event-details.html\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "nom", []), "html", null, true);
            echo "</a></p>
                            </div>
                            <ul class=\"event__btn\">
                                <li><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participer", ["id" => $this->getAttribute($context["events"], "id", [])]), "html", null, true);
            echo "\">Participer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Start Single Event -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['events'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
        </div>
    </div>
    <!-- End Our Event Area -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Events/Events/affichageFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  124 => 45,  118 => 42,  111 => 38,  107 => 37,  101 => 34,  92 => 28,  85 => 23,  81 => 22,  60 => 3,  51 => 2,  29 => 1,);
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
                            <h2 class=\"bradcaump-title\">Evenements</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our Event Area -->
    <div class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">
                {% for events in events %}
                <!-- Start Single Event -->
                <div class=\"col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"dcare__event\">
                        <div class=\"event__thumb\">
                            <a href=\"#\">
                                <img src=\"{{ asset('back/' ~ events.brochure) }}\" alt=\"event images\">
                            </a>
                        </div>
                        <div class=\"event__content\">
                            <div class=\"event__pub\">
                                <div class=\"event__date\">
                                    <span class=\"date\">{{ events.date|date(\"d\") }}</span><span>th</span>
                                </div>
                                <ul class=\"event__time\">
                                    <li>{{ events.date|date('F') }}</li>
                                    <li><i class=\"fa fa-home\"></i>{{ events.adresse }}</li>
                                </ul>
                            </div>
                            <div class=\"event__inner\">
                                <p><a href=\"event-details.html\">{{ events.nom }}</a></p>
                            </div>
                            <ul class=\"event__btn\">
                                <li><a href=\"{{ path('participer', { 'id':events.id }) }}\">Participer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Start Single Event -->
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- End Our Event Area -->
{% endblock %}", "@Events/Events/affichageFront.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\EventsBundle\\Resources\\views\\Events\\affichageFront.html.twig");
    }
}
