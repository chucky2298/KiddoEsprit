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

/* ReclamationBundle:Reclamation:afficher.html.twig */
class __TwigTemplate_68909734be40ef10a8f6d07fb41ff948b0967fcc4cf57f1d468b4e2320c880bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReclamationBundle:Reclamation:afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ReclamationBundle:Reclamation:afficher.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "ReclamationBundle:Reclamation:afficher.html.twig", 1);
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
        echo "
<div class=\"section-body card-columns gallery\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 12
            echo "
";
            // line 13
            if (($this->getAttribute($context["reclamation"], "etat", []) == 0)) {
                // line 14
                echo "        <div class=\"rowrec2\">
      ";
            } else {
                // line 16
                echo "          <div class=\"rowrec1\">
";
            }
            // line 18
            echo "
          <div class=\"col-md-12\">
            <div class=\"card pricing-table-7\">
                <div class=\"card-header price-header\">
                    <h3 class=\"title\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "titre", []), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"card-body price-body\">
                    <ul>
                            <li><b>Contenu: </b>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", []), "html", null, true);
            echo "</li>
                    </ul>
                </div>
                <div class=\"card-footer price-footer\">
                    <a class=\"btn btn-warning mt-2 mb-2\" type=\"submit\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete", ["id" => $this->getAttribute($context["reclamation"], "id", [])]), "html", null, true);
            echo "\">Supprimer</a>
                </div>
                ";
            // line 32
            if (($this->getAttribute($context["reclamation"], "etat", []) == 0)) {
                // line 33
                echo "
                <div class=\"card-footer price-footer\">
                    <input type=\"textarea\">
                    <a class=\"btn btn-info mt-2 mb-2\" type=\"submit\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_update", ["id" => $this->getAttribute($context["reclamation"], "id", [])]), "html", null, true);
                echo "\">Marquer Traité</a>
                </div>
                ";
            }
            // line 39
            echo "
            </div></div></div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Reclamation:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  124 => 39,  118 => 36,  113 => 33,  111 => 32,  106 => 30,  99 => 26,  92 => 22,  86 => 18,  82 => 16,  78 => 14,  76 => 13,  73 => 12,  69 => 11,  65 => 9,  60 => 3,  51 => 2,  29 => 1,);
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

<div class=\"section-body card-columns gallery\">
    {% for reclamation in reclamations %}

{% if reclamation.etat ==0 %}
        <div class=\"rowrec2\">
      {% else %}
          <div class=\"rowrec1\">
{% endif %}

          <div class=\"col-md-12\">
            <div class=\"card pricing-table-7\">
                <div class=\"card-header price-header\">
                    <h3 class=\"title\">{{ reclamation.titre }}</h3>
                </div>
                <div class=\"card-body price-body\">
                    <ul>
                            <li><b>Contenu: </b>{{ reclamation.contenu }}</li>
                    </ul>
                </div>
                <div class=\"card-footer price-footer\">
                    <a class=\"btn btn-warning mt-2 mb-2\" type=\"submit\" href=\"{{ path('reclamation_delete', { 'id':reclamation.id }) }}\">Supprimer</a>
                </div>
                {% if reclamation.etat ==0 %}

                <div class=\"card-footer price-footer\">
                    <input type=\"textarea\">
                    <a class=\"btn btn-info mt-2 mb-2\" type=\"submit\" href=\"{{ path('reclamation_update', { 'id':reclamation.id }) }}\">Marquer Traité</a>
                </div>
                {% endif %}

            </div></div></div>

    {% endfor %}
</div>
{% endblock %}



{#

{% for reclamation in reclamations %}
   <table border=\"1\">
       <form>
        <tr><td>ID</td>
        <td>Titre</td>
        <td>Contenu</td>
            <td></td>
            <td></td>
        </tr>
    <tr><td>{{ reclamation.id  }}</td>
        <td>{{ reclamation.titre }}</td>
        <td>{{ reclamation.contenu }}</td>
        <td> <a href=\"{{ path('reclamation_delete',{id:reclamation.id}) }}\"> delete </a>  </td>
        <td> <a href=\"{{ path('reclamation_update',{id:reclamation.id}) }}\"> update </a> </td>

    </tr>
       </form>
   </table>
{% endfor %}
#}", "ReclamationBundle:Reclamation:afficher.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\ReclamationBundle/Resources/views/Reclamation/afficher.html.twig");
    }
}
