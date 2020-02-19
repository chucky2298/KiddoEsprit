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

/* @Events/Events/participer.html.twig */
class __TwigTemplate_eb5c3be2298af8297e290fadbfaa44c77a2b7282354285e400ebcd47fc7b162e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/participer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Events/Events/participer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Events/Events/participer.html.twig", 1);
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
        echo "
    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "nom", []), "html", null, true);
        echo "</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
<!-- Start Class Details -->
<section class=\"page-event-details bg--white section-padding--lg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"event-content-wrapper\">

                    <div class=\"event-section\">
                        <div class=\"enent__thumb\">
                            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("back/" . $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "brochure", []))), "html", null, true);
        echo "\" alt=\"big images\">
                        </div>
                    </div>
                    <div class=\"event-section\">
                        <h2 class=\"event__information\">EVENT DETAILS INFORMATION</h2>
                        <div class=\"event__location\">
                            <ul>
                                <li><span class=\"ti-location-pin\"></span>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "adresse", []), "html", null, true);
        echo "</li>
                                <li><span class=\"ti-time\"></span>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "date", []), "m/d/Y"), "html", null, true);
        echo "</li>
                            </ul>
                            <div class=\"event_map_marker\">
                                <div id=\"evnetmap\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Sidebar -->
            <div class=\"col-lg-3\">
                <div class=\"sidebar__widgets sidebar--right\">

                    <!-- Single Widget -->
                    <div class=\"single__widget search\">
                        <h4>Participer(max 5)</h4>
                        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"col-md-9\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbPersonnes", []), 'widget');
        echo "
                        </div>

                    </div>
                    <button type=\"submit\" value=\"Create\" class=\"btn btn-primary mt-1 mb-0\" >Participer</button>
                    <!-- End Widget -->";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
</section>
<!-- End Class Details -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Events/Events/participer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 59,  128 => 54,  123 => 52,  104 => 36,  100 => 35,  90 => 28,  70 => 11,  60 => 3,  51 => 2,  29 => 1,);
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
                            <h2 class=\"bradcaump-title\">{{ events.nom }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
<!-- Start Class Details -->
<section class=\"page-event-details bg--white section-padding--lg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9\">
                <div class=\"event-content-wrapper\">

                    <div class=\"event-section\">
                        <div class=\"enent__thumb\">
                            <img src=\"{{ asset('back/' ~ events.brochure) }}\" alt=\"big images\">
                        </div>
                    </div>
                    <div class=\"event-section\">
                        <h2 class=\"event__information\">EVENT DETAILS INFORMATION</h2>
                        <div class=\"event__location\">
                            <ul>
                                <li><span class=\"ti-location-pin\"></span>{{ events.adresse }}</li>
                                <li><span class=\"ti-time\"></span>{{ events.date|date(\"m/d/Y\") }}</li>
                            </ul>
                            <div class=\"event_map_marker\">
                                <div id=\"evnetmap\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Sidebar -->
            <div class=\"col-lg-3\">
                <div class=\"sidebar__widgets sidebar--right\">

                    <!-- Single Widget -->
                    <div class=\"single__widget search\">
                        <h4>Participer(max 5)</h4>
                        {{ form_start(form) }}
                        <div class=\"col-md-9\">
                            {{ form_widget(form.nbPersonnes) }}
                        </div>

                    </div>
                    <button type=\"submit\" value=\"Create\" class=\"btn btn-primary mt-1 mb-0\" >Participer</button>
                    <!-- End Widget -->{{ form_end(form) }}
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
</section>
<!-- End Class Details -->

{% endblock %}", "@Events/Events/participer.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\src\\EventsBundle\\Resources\\views\\Events\\participer.html.twig");
    }
}
