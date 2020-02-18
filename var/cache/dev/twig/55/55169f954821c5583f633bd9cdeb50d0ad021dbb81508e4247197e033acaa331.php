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

/* @Events/Events/affiche.html.twig */
class __TwigTemplate_33d9d510acb5a45f3ed508e1925c1bd14e804566c3b43fe784a3255a0df62e91 extends \Twig\Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/affiche.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@Events/Events/affiche.html.twig", 1);
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-2.2.1.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 9
        echo "    <div class=\"row\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["events"]);
        foreach ($context['_seq'] as $context["_key"] => $context["events"]) {
            // line 11
            echo "    ";
            // line 17
            echo "    <div class=\"col-xl-4 col-lg-12 col-md-12\">
        <div class=\"card\">
            <img class=\"card-img-top w-100\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("back/" . $this->getAttribute($context["events"], "brochure", []))), "html", null, true);
            echo "\" alt=\"\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "nom", []), "html", null, true);
            echo "</h4>
                <p class=\"card-text\">Adresse: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "adresse", []), "html", null, true);
            echo "</p>
                <p class=\"card-text\">Date: ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["events"], "date", []), "m/d/Y"), "html", null, true);
            echo "</p>
                <p class=\"card-text\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "quantite", []), "html", null, true);
            echo " passes</p>
                <a class=\"btn btn-primary\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_event", ["id" => $this->getAttribute($context["events"], "id", [])]), "html", null, true);
            echo "\">Supprimer</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_event", ["id" => $this->getAttribute($context["events"], "id", [])]), "html", null, true);
            echo "\">Modifier</a>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['events'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Events/Events/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 54,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  78 => 19,  74 => 17,  72 => 11,  68 => 10,  65 => 9,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
{% block content %}
<script src=\"{{ asset('jquery-2.2.1.min.js')}}\"></script>
{#<script>
    \$(document).ready(function(){
        \$(\"a\").hover(function(){ \$(\"a\").css(\"color\",\"red\")});
    });
</script>#}
    <div class=\"row\">
{% for events in events %}
    {#<p>{{ events.nom }}</p>
    <ul>
        <li>quantite : {{ events.quantite }}</li>
        <li>adresse : {{ events.adresse }}</li>
    </ul>
    <a href=\"{{ path('supprimer_event', { 'id':events.id }) }}\"><b>supprimer</b></a>#}
    <div class=\"col-xl-4 col-lg-12 col-md-12\">
        <div class=\"card\">
            <img class=\"card-img-top w-100\" src=\"{{ asset('back/' ~ events.brochure) }}\" alt=\"\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">{{ events.nom }}</h4>
                <p class=\"card-text\">Adresse: {{ events.adresse }}</p>
                <p class=\"card-text\">Date: {{ events.date|date(\"m/d/Y\") }}</p>
                <p class=\"card-text\">{{ events.quantite }} passes</p>
                <a class=\"btn btn-primary\" href=\"{{ path('supprimer_event', { 'id':events.id }) }}\">Supprimer</a>
                <a class=\"btn btn-primary\" href=\"{{ path('modifier_event', { 'id':events.id }) }}\">Modifier</a>
            </div>
        </div>
    </div>
    {#<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card pricing-table-7\">
                <div class=\"card-header price-header\">
                    <h3 class=\"title\">{{ events.nom }}</h3>
                </div>
                <div class=\"card-body price-body\">
                    <ul>
                        <li><b>Adresse: </b>{{ events.adresse }}</li>
                        <li><b>Quantite: </b>{{ events.quantite }}</li>
                    </ul>
                </div>

                    <div class=\"card-footer price-footer\">
                        <a class=\"btn btn-warning mt-2 mb-2\" type=\"submit\" href=\"{{ path('supprimer_event', { 'id':events.id }) }}\">Supprimer</a>
                    </div>

                    <div class=\"card-footer price-footer\">
                        <a class=\"btn btn-info mt-2 mb-2\" type=\"submit\" href=\"{{ path('modifier_event', { 'id':events.id }) }}\">Modifier</a>
                    </div>
            </div>
        </div>
    </div>#}
{% endfor %}
    </div>
{% endblock %}", "@Events/Events/affiche.html.twig", "C:\\wamp64\\www\\PIDEV\\src\\EventsBundle\\Resources\\views\\Events\\affiche.html.twig");
    }
}
