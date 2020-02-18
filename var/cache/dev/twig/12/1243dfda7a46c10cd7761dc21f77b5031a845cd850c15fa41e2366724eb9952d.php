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

/* @Events/Events/modifier.html.twig */
class __TwigTemplate_96b42648e5324aa05e6c4eec0bbbc097813076a108d12daaa4e05693e00fd3e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/modifier.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@Events/Events/modifier.html.twig", 1);
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo "

    <div class=\"row\">
    <div class=\"col-lg-12 col-xl-6 col-md-12 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4>Modifier</h4>
            </div>
            <div class=\"card-body\">

                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">NOM </label>
                    <div class=\"col-md-9\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">ADRESSE </label>
                    <div class=\"col-md-9\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">Date</label>
                    <div class=\"col-md-9\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">Quantité </label>
                    <div class=\"col-md-9\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">Lien photo </label>
                    <div class=\"col-md-9\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "brochure", []), 'widget');
        echo "
                    </div>
                </div>
                <button type=\"submit\" value=\"Create\" class=\"btn btn-primary mt-1 mb-0\" >Modifier</button>


            </div>
        </div>
    </div>
    <!--row closed-->
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Events/Events/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  116 => 45,  107 => 39,  98 => 33,  89 => 27,  80 => 21,  65 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
    {{ form_start(form) }}
    {#
    {{ form_widget(form) }}
    <button type=\"submit\" value=\"Create\">Create</button>
    #}


    <div class=\"row\">
    <div class=\"col-lg-12 col-xl-6 col-md-12 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4>Modifier</h4>
            </div>
            <div class=\"card-body\">

                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">NOM </label>
                    <div class=\"col-md-9\">
                        {{ form_widget(form.nom) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">ADRESSE </label>
                    <div class=\"col-md-9\">
                        {{ form_widget(form.adresse) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">Date</label>
                    <div class=\"col-md-9\">
                        {{ form_widget(form.date) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">Quantité </label>
                    <div class=\"col-md-9\">
                        {{ form_widget(form.quantite) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-md-3 col-form-label\">Lien photo </label>
                    <div class=\"col-md-9\">
                        {{ form_widget(form.brochure) }}
                    </div>
                </div>
                <button type=\"submit\" value=\"Create\" class=\"btn btn-primary mt-1 mb-0\" >Modifier</button>


            </div>
        </div>
    </div>
    <!--row closed-->
    {{ form_end(form) }}
{% endblock %}", "@Events/Events/modifier.html.twig", "C:\\wamp64\\www\\PIDEV\\src\\EventsBundle\\Resources\\views\\Events\\modifier.html.twig");
    }
}
