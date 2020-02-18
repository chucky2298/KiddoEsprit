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

/* ForumBundle:reponse/back:affiche.html.twig */
class __TwigTemplate_6c836acd38dc28381d9ecb359a63b190cf990c42eae196c6bbf7dfc7e624f9ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ForumBundle:reponse/back:affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ForumBundle:reponse/back:affiche.html.twig"));

        // line 1
        echo "<table border=\"1\">
    <thead>
    <tr>
        <th><h4><b>pseudo</b></h4></th>
        <th><h4><b>mail</b></h4></th>
        <th><h4><b>message</b></h4></th>
        <th><h4><b>commentaire</b></h4></th>
        <th><h4><b>supprimer</b></h4></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reponse"] ?? $this->getContext($context, "reponse")));
        foreach ($context['_seq'] as $context["_key"] => $context["repons"]) {
            // line 13
            echo "        <tr>
            <td><b>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["repons"], "pseudo", []), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["repons"], "mail", []), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["repons"], "message", []), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repons"], "commentaire", []), "message", []), "html", null, true);
            echo "</b></td>
            <td>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reponse_delete", ["ref" => $this->getAttribute($context["repons"], "pseudo", [])]), "html", null, true);
            echo "\"><b>supprimer</b></a><br>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:reponse/back:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  73 => 19,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  53 => 13,  49 => 12,  36 => 1,);
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
        <th><h4><b>commentaire</b></h4></th>
        <th><h4><b>supprimer</b></h4></th>
    </tr>
    </thead>
    <tbody>
    {% for repons in reponse %}
        <tr>
            <td><b>{{ repons.pseudo }}</b></td>
            <td><b>{{ repons.mail }}</b></td>
            <td><b>{{ repons.message }}</b></td>
            <td><b>{{ repons.commentaire.message }}</b></td>
            <td>
                <a href=\"{{ path('reponse_delete', { 'ref':repons.pseudo}) }}\"><b>supprimer</b></a><br>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "ForumBundle:reponse/back:affiche.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\ForumBundle/Resources/views/reponse/back/affiche.html.twig");
    }
}
