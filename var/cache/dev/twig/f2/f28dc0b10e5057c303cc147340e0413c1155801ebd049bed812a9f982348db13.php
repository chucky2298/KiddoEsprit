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

/* ForumBundle:commentaire/front:affiche.html.twig */
class __TwigTemplate_204cf1f95ba2e7ea7956773577cf598ca9536aa559dad30423e9d4a80c074be4 extends \Twig\Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ForumBundle:commentaire/front:affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ForumBundle:commentaire/front:affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:commentaire/front:affiche.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>  commentaire! </h1>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaire"] ?? $this->getContext($context, "commentaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 12
            echo "                    <div class=\"col-md-4\">
                        <div class=\"card mb-4 box-shadow\">
                            <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "pseudo", []), "html", null, true);
            echo "</p>
                            <div class=\"card-body\">
                                <p class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "message", []), "html", null, true);
            echo "</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_commentaire", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">repondre</button> </a>
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
        // line 26
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:commentaire/front:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  87 => 19,  81 => 16,  76 => 14,  72 => 12,  68 => 11,  60 => 5,  51 => 4,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}
{% block body %}
    <h1>  commentaire! </h1>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                {% for c in commentaire %}
                    <div class=\"col-md-4\">
                        <div class=\"card mb-4 box-shadow\">
                            <p class=\"card-text\">{{ c.pseudo }}</p>
                            <div class=\"card-body\">
                                <p class=\"card-text\">{{ c.message }}</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('ajouter_commentaire',{'id': c.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">repondre</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}", "ForumBundle:commentaire/front:affiche.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\ForumBundle/Resources/views/commentaire/front/affiche.html.twig");
    }
}
