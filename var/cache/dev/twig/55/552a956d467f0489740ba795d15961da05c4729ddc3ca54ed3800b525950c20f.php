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

/* ForumBundle:commentaire/back:affiche.html.twig */
class __TwigTemplate_e55a6fadc9517d070dbf505e7edef48058aed4d99fc24381884664a18f815b02 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ForumBundle:commentaire/back:affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ForumBundle:commentaire/back:affiche.html.twig"));

        // line 1
        echo "<table border=\"1\">
    <thead>
    <tr>
        <th><h4><b>pseudo</b></h4></th>
        <th><h4><b>mail</b></h4></th>
        <th><h4><b>message</b></h4></th>
        <th><h4><b>Supprimer</b></h4></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaire"] ?? $this->getContext($context, "commentaire")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 12
            echo "        <tr>
            <td><b>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "pseudo", []), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "mail", []), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", []), "html", null, true);
            echo "</b></td>
            <td>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_delete", ["id" => $this->getAttribute($context["comment"], "pseudo", [])]), "html", null, true);
            echo "\"><b>supprimer</b></a><br>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:commentaire/back:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  68 => 17,  63 => 15,  59 => 14,  55 => 13,  52 => 12,  48 => 11,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<table border=\"1\">
    <thead>
    <tr>
        <th><h4><b>pseudo</b></h4></th>
        <th><h4><b>mail</b></h4></th>
        <th><h4><b>message</b></h4></th>
        <th><h4><b>Supprimer</b></h4></th>
    </tr>
    </thead>
    <tbody>
    {% for comment in commentaire %}
        <tr>
            <td><b>{{ comment.pseudo }}</b></td>
            <td><b>{{ comment.mail }}</b></td>
            <td><b>{{ comment.message }}</b></td>
            <td>
                <a href=\"{{ path('commentaire_delete', { 'id':comment.pseudo }) }}\"><b>supprimer</b></a><br>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "ForumBundle:commentaire/back:affiche.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\ForumBundle/Resources/views/commentaire/back/affiche.html.twig");
    }
}
