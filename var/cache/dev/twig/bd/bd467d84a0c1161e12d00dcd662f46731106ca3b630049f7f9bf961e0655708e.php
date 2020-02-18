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

/* ActualiteBundle:Commentaire:afficheCommentaire.html.twig */
class __TwigTemplate_d7f17c568419ac813bc77e3ec708d25d88274130bdf8d94ef92dbe8f68b318de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ActualiteBundle:Commentaire:afficheCommentaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ActualiteBundle:Commentaire:afficheCommentaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ActualiteBundle:Commentaire:afficheCommentaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>  Liste des Commentaires! </h1>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Commentaire"] ?? $this->getContext($context, "Commentaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "                    <div class=\"col-md-4\">
                        <div class=\"card mb-4 box-shadow\">
                            <p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "titre", []), "html", null, true);
            echo "</p>
                            <div class=\"card-body\">
                                <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "contenu", []), "html", null, true);
            echo "</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualite_supprimeCommentaire", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Supprimer</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ActualiteBundle:Commentaire:afficheCommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  87 => 17,  81 => 14,  76 => 12,  72 => 10,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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
{% block body %}
    <h1>  Liste des Commentaires! </h1>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                {% for c in Commentaire %}
                    <div class=\"col-md-4\">
                        <div class=\"card mb-4 box-shadow\">
                            <p class=\"card-text\">{{ c.titre }}</p>
                            <div class=\"card-body\">
                                <p class=\"card-text\">{{ c.contenu }}</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('actualite_supprimeCommentaire',{'id': c.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Supprimer</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}", "ActualiteBundle:Commentaire:afficheCommentaire.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\ActualiteBundle/Resources/views/Commentaire/afficheCommentaire.html.twig");
    }
}
