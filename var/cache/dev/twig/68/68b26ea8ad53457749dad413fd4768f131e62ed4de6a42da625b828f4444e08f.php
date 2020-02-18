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

/* @GererEnfant/Note/afficheNote.html.twig */
class __TwigTemplate_e3cc5dfb8307c21ed8880603812c588df6737305517eb11d01bf127cd56d9a78 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GererEnfant/Note/afficheNote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GererEnfant/Note/afficheNote.html.twig"));

        // line 1
        echo "<h2> Liste des Notes </h2>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["note"] ?? $this->getContext($context, "note")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 3
            echo "    <ul>
        <li>Id : n.id </li>
        <li>Matiere : n.matiere </li>
        <li>Valeur : n.valeur </li>

    </ul>
    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateNote", ["id" => $this->getAttribute(($context["note"] ?? $this->getContext($context, "note")), "id", [])]), "html", null, true);
            echo "\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Modifier</button> </a>

    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteNote", ["id" => $this->getAttribute(($context["note"] ?? $this->getContext($context, "note")), "id", [])]), "html", null, true);
            echo "\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Supprimer</button> </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@GererEnfant/Note/afficheNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  51 => 9,  43 => 3,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2> Liste des Notes </h2>
{% for n in note  %}
    <ul>
        <li>Id : n.id </li>
        <li>Matiere : n.matiere </li>
        <li>Valeur : n.valeur </li>

    </ul>
    <a href=\"{{ path(\"updateNote\",{'id' : note.id}) }}\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Modifier</button> </a>

    <a href=\"{{ path(\"deleteNote\",{'id' : note.id}) }}\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Supprimer</button> </a>
{%  endfor %}
", "@GererEnfant/Note/afficheNote.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\GererEnfantBundle\\Resources\\views\\Note\\afficheNote.html.twig");
    }
}
