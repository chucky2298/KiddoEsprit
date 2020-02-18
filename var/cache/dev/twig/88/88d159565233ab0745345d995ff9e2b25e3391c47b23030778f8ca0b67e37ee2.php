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

/* GererEnfantBundle:Enfant:afficheEnfant.html.twig */
class __TwigTemplate_c4ec8f85fce07f64cecf1273d74103f65688249692a245a18f9ab086ecd1240d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GererEnfantBundle:Enfant:afficheEnfant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GererEnfantBundle:Enfant:afficheEnfant.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "GererEnfantBundle:Enfant:afficheEnfant.html.twig", 1);
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
        echo "<h2> Liste des enfants </h2>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Enfant"] ?? $this->getContext($context, "Enfant")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "<ul>
    <li>Id : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
            echo " </li>
    <li>Nom : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", []), "html", null, true);
            echo " </li>
    <li>Prenom : ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", []), "html", null, true);
            echo " </li>
    ";
            // line 10
            echo "    ";
            if (($this->getAttribute($context["e"], "Noteid", []) != null)) {
                // line 11
                echo "    <li>Note : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Noteid", []), "html", null, true);
                echo " </li>
";
            } else {
                // line 13
                echo "    <li>Note : </li>
    ";
            }
            // line 15
            echo "</ul>
    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateEnfant", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Modifier</button> </a>

    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteEnfant", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Supprimer</button> </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GererEnfantBundle:Enfant:afficheEnfant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  98 => 16,  95 => 15,  91 => 13,  85 => 11,  82 => 10,  78 => 8,  74 => 7,  70 => 6,  67 => 5,  63 => 4,  60 => 3,  51 => 2,  29 => 1,);
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
<h2> Liste des enfants </h2>
{% for e in Enfant  %}
<ul>
    <li>Id : {{ e.id }} </li>
    <li>Nom : {{ e.nom }} </li>
    <li>Prenom : {{ e.prenom }} </li>
    {# <li>Date de naissance : {{ e.dateNaissance }} </li> #}
    {%  if e.Noteid !=null %}
    <li>Note : {{ e.Noteid }} </li>
{%  else %}
    <li>Note : </li>
    {% endif %}
</ul>
    <a href=\"{{ path(\"updateEnfant\",{'id' : e.id}) }}\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Modifier</button> </a>

    <a href=\"{{ path(\"deleteEnfant\",{'id' : e.id}) }}\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Supprimer</button> </a>
{%  endfor %}
{% endblock %}", "GererEnfantBundle:Enfant:afficheEnfant.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\GererEnfantBundle/Resources/views/Enfant/afficheEnfant.html.twig");
    }
}
