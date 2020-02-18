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

/* default/index.html.twig */
class __TwigTemplate_ef8407b648f587850bae6c6df72151481b49e9f791b1b2b3d66377c105f63bc3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        echo "    <section class=\"banner banner-three\">
        <div class=\"banner-slider swiper-container\">
            <div class=\"swiper-wrapper\">
                <div class=\"banner-item slide-one swiper-slide\">
                    <div class=\"banner-overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"offset-lg-5 col-lg-6 col-xs-12\">
                                <div class=\"banner-content\">
                                    <h3>Bienvenue sur Kiddo</h3>
                                    <h2>Le meilleur pour les jardins d'enfants</h2>
                                    <p>Inscrivez et suivez vos enfants graçe à Kiddo qui propose un large choix
                                        de jardins d'enfants.</p>
                                    <ul>
                                        <li><a href=\"#\" class=\"button-default\">S'inscrire</a></li>
                                        <li><a href=\"#\" class=\"button-default\">Choisir un jardin d'enfants</a></li>
                                    </ul>
                                </div><!-- banner-content -->
                            </div>
                        </div>
                    </div><!-- container -->
                </div><!-- slide item -->
                <div class=\"banner-item slide-two swiper-slide\">
                    <div class=\"banner-overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"offset-lg-5 col-lg-6 col-xs-12\">
                                <div class=\"banner-content\">
                                    <h3>Welcome to KidsAcademy</h3>
                                    <h2>Best For Education</h2>
                                    <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas cross functional products.</p>
                                    <ul>
                                        <li><a href=\"#\" class=\"button-default\">Read More</a></li>
                                        <li><a href=\"#\" class=\"button-default\">Buy Now</a></li>
                                    </ul>
                                </div><!-- banner-content -->
                            </div>
                        </div>
                    </div><!-- container -->
                </div><!-- slide item -->
                <div class=\"banner-item slide-three swiper-slide\">
                    <div class=\"banner-overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"offset-lg-5 col-lg-6 col-xs-12\">
                                <div class=\"banner-content\">
                                    <h3>Welcome to KidsAcademy</h3>
                                    <h2>Best For Education</h2>
                                    <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas cross functional products.</p>
                                    <ul>
                                        <li><a href=\"#\" class=\"button-default\">Read More</a></li>
                                        <li><a href=\"#\" class=\"button-default\">Buy Now</a></li>
                                    </ul>
                                </div><!-- banner-content -->
                            </div>
                        </div>
                    </div><!-- container -->
                </div><!-- slide item -->

            </div><!-- swiper-wrapper -->
            <div class=\"swiper-pagination\"></div>
        </div><!-- swiper-container -->
    </section><!-- banner -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 3,  51 => 2,  29 => 1,);
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
    <section class=\"banner banner-three\">
        <div class=\"banner-slider swiper-container\">
            <div class=\"swiper-wrapper\">
                <div class=\"banner-item slide-one swiper-slide\">
                    <div class=\"banner-overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"offset-lg-5 col-lg-6 col-xs-12\">
                                <div class=\"banner-content\">
                                    <h3>Bienvenue sur Kiddo</h3>
                                    <h2>Le meilleur pour les jardins d'enfants</h2>
                                    <p>Inscrivez et suivez vos enfants graçe à Kiddo qui propose un large choix
                                        de jardins d'enfants.</p>
                                    <ul>
                                        <li><a href=\"#\" class=\"button-default\">S'inscrire</a></li>
                                        <li><a href=\"#\" class=\"button-default\">Choisir un jardin d'enfants</a></li>
                                    </ul>
                                </div><!-- banner-content -->
                            </div>
                        </div>
                    </div><!-- container -->
                </div><!-- slide item -->
                <div class=\"banner-item slide-two swiper-slide\">
                    <div class=\"banner-overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"offset-lg-5 col-lg-6 col-xs-12\">
                                <div class=\"banner-content\">
                                    <h3>Welcome to KidsAcademy</h3>
                                    <h2>Best For Education</h2>
                                    <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas cross functional products.</p>
                                    <ul>
                                        <li><a href=\"#\" class=\"button-default\">Read More</a></li>
                                        <li><a href=\"#\" class=\"button-default\">Buy Now</a></li>
                                    </ul>
                                </div><!-- banner-content -->
                            </div>
                        </div>
                    </div><!-- container -->
                </div><!-- slide item -->
                <div class=\"banner-item slide-three swiper-slide\">
                    <div class=\"banner-overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"offset-lg-5 col-lg-6 col-xs-12\">
                                <div class=\"banner-content\">
                                    <h3>Welcome to KidsAcademy</h3>
                                    <h2>Best For Education</h2>
                                    <p>Monotonely principle centered ahitectures through and standards magnetic metrics whereas cross functional products.</p>
                                    <ul>
                                        <li><a href=\"#\" class=\"button-default\">Read More</a></li>
                                        <li><a href=\"#\" class=\"button-default\">Buy Now</a></li>
                                    </ul>
                                </div><!-- banner-content -->
                            </div>
                        </div>
                    </div><!-- container -->
                </div><!-- slide item -->

            </div><!-- swiper-wrapper -->
            <div class=\"swiper-pagination\"></div>
        </div><!-- swiper-container -->
    </section><!-- banner -->
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\app\\Resources\\views\\default\\index.html.twig");
    }
}
