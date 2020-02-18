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

/* base.html.twig */
class __TwigTemplate_1b6336740ac29a501201a66da4014d1940fa591fc64da8f49d296305f7bfcdec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/favicon.png"), "html", null, true);
        echo "\" rel=\"shortcut icon\" type=\"image/vnd.microsoft.icon\"/>

        <!-- Google fonts -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Font-awesome -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Flaticon -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/flaticon/flaticon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- lightcase -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/lightcase.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Swiper -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- quick-view -->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/quick-view.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- nstSlider -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/jquery.nstSlider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- flexslider -->
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Style -->
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Style -->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Responsive -->
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
    ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 144
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Kiddo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "        <header class=\"header-three\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row ht-area\">
                        <ul class=\"left\">
                            <li><span><i aria-hidden=\"true\"></i></span> Solution by LightBringers</li>
                        </ul>
                        <ul class=\"right\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-skype\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-vimeo\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"main-menu\">
                <div class=\"container\">
                    <div class=\"row no-gutters\">
                        <nav class=\"main-menu-area w-100\">
                            <div class=\"logo-area\">
                                <a class=\"\" href=\"index.html\"><img src=\"front/images/logo.png\" alt=\"logo\" class=\"img-responsive\"></a>
                                <button type=\"button\" class=\"navbar-toggle collapsed d-md-none\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>

                            <div class=\"menu-area\">


                                <ul class=\"menu\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Acceuil </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">A propos </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos jardins </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"event.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenements </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Reclamations <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"gallery.html\">Passer reclamation</a></li>
                                            <li><a href=\"gallery-2.html\">Consulter reclamations</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 116
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 118
        echo "        <footer>
            <div class=\"footer-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6 col-xs-12\">
                            <div class=\"footer-item\">
                                <div class=\"title\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-responsive\"></div>
                                <div class=\"footer-about\">
                                    <p>Distily enable team driven services through extensive is a relatonships platforms with interactive content. Enthusiastically scale effective.</p>
                                    <ul>
                                        <li><span><i class=\"fa fa-home\" aria-hidden=\"true\"></i></span> New Chokoya Road, USA.</li>
                                        <li><span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span> +8801 923 970 212, 0125897</li>
                                        <li><span><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></span> Contact@admin LabArtisan</li>
                                        <li><span><i class=\"fa fa-globe\" aria-hidden=\"true\"></i></span> Email@admin LabArtisan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- footer top -->

        </footer>
        <a class=\"page-scroll scroll-top\" href=\"#scroll-top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "            <!-- jquery -->
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Bootstrap -->
            <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Isotope -->
            <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

            <!-- lightcase -->
            <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/lightcase.js"), "html", null, true);
        echo "\"></script>

            <!-- counterup -->
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Swiper -->
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/swiper.jquery.min.js"), "html", null, true);
        echo "\"></script>

            <!--progress-->
            <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/circle-progress.min.js"), "html", null, true);
        echo "\"></script>

            <!--velocity-->
            <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/velocity.min.js"), "html", null, true);
        echo "\"></script>

            <!--quick-view-->
            <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/quick-view.js"), "html", null, true);
        echo "\"></script>

            <!--nstSlider-->
            <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.nstSlider.js"), "html", null, true);
        echo "\"></script>

            <!--flexslider-->
            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/flexslider-min.js"), "html", null, true);
        echo "\"></script>

            <!--easing-->
            <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

            <!-- custom -->
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 183,  425 => 180,  419 => 177,  413 => 174,  407 => 171,  401 => 168,  395 => 165,  389 => 162,  383 => 159,  379 => 158,  373 => 155,  367 => 152,  361 => 149,  355 => 146,  352 => 145,  343 => 144,  313 => 124,  305 => 118,  296 => 117,  286 => 116,  277 => 115,  200 => 47,  191 => 46,  174 => 6,  156 => 5,  144 => 185,  141 => 144,  138 => 117,  135 => 115,  133 => 46,  127 => 43,  121 => 40,  115 => 37,  109 => 34,  103 => 31,  97 => 28,  91 => 25,  85 => 22,  79 => 19,  73 => 16,  67 => 13,  61 => 10,  54 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Kiddo{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link href=\"{{ asset('front/images/favicon.png') }}\" rel=\"shortcut icon\" type=\"image/vnd.microsoft.icon\"/>

        <!-- Google fonts -->
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i') }}\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link href=\"{{ asset('front/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Font-awesome -->
        <link href=\"{{ asset('front/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

        <!-- Flaticon -->
        <link href=\"{{ asset('front/flaticon/flaticon.css') }}\" rel=\"stylesheet\">

        <!-- lightcase -->
        <link href=\"{{ asset('front/css/lightcase.css') }}\" rel=\"stylesheet\">

        <!-- Swiper -->
        <link href=\"{{ asset('front/css/swiper.min.css') }}\" rel=\"stylesheet\">

        <!-- quick-view -->
        <link href=\"{{ asset('front/css/quick-view.css') }}\" rel=\"stylesheet\">

        <!-- nstSlider -->
        <link href=\"{{ asset('front/css/jquery.nstSlider.css') }}\" rel=\"stylesheet\">

        <!-- flexslider -->
        <link href=\"{{ asset('front/css/flexslider.css') }}\" rel=\"stylesheet\">

        <!-- Style -->
        <link href=\"{{ asset('front/css/rtl.css') }}\" rel=\"stylesheet\">

        <!-- Style -->
        <link href=\"{{ asset('front/css/style.css') }}\" rel=\"stylesheet\">

        <!-- Responsive -->
        <link href=\"{{ asset('front/css/responsive.css') }}\" rel=\"stylesheet\">
    </head>
    <body>
    {% block header %}
        <header class=\"header-three\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row ht-area\">
                        <ul class=\"left\">
                            <li><span><i aria-hidden=\"true\"></i></span> Solution by LightBringers</li>
                        </ul>
                        <ul class=\"right\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-skype\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-vimeo\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"main-menu\">
                <div class=\"container\">
                    <div class=\"row no-gutters\">
                        <nav class=\"main-menu-area w-100\">
                            <div class=\"logo-area\">
                                <a class=\"\" href=\"index.html\"><img src=\"front/images/logo.png\" alt=\"logo\" class=\"img-responsive\"></a>
                                <button type=\"button\" class=\"navbar-toggle collapsed d-md-none\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>

                            <div class=\"menu-area\">


                                <ul class=\"menu\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Acceuil </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">A propos </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Nos jardins </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"event.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Evenements </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Reclamations <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"gallery.html\">Passer reclamation</a></li>
                                            <li><a href=\"gallery-2.html\">Consulter reclamations</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    {% endblock %}
    {% block content %}
    {% endblock %}
    {% block footer %}
        <footer>
            <div class=\"footer-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6 col-xs-12\">
                            <div class=\"footer-item\">
                                <div class=\"title\"><img src=\"{{ asset('front/images/logo.png') }}\" alt=\"logo\" class=\"img-responsive\"></div>
                                <div class=\"footer-about\">
                                    <p>Distily enable team driven services through extensive is a relatonships platforms with interactive content. Enthusiastically scale effective.</p>
                                    <ul>
                                        <li><span><i class=\"fa fa-home\" aria-hidden=\"true\"></i></span> New Chokoya Road, USA.</li>
                                        <li><span><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></span> +8801 923 970 212, 0125897</li>
                                        <li><span><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></span> Contact@admin LabArtisan</li>
                                        <li><span><i class=\"fa fa-globe\" aria-hidden=\"true\"></i></span> Email@admin LabArtisan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- footer top -->

        </footer>
        <a class=\"page-scroll scroll-top\" href=\"#scroll-top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
        {% endblock %}
        {% block javascripts %}
            <!-- jquery -->
            <script src=\"{{ asset('front/js/jquery-1.12.4.min.js') }}\"></script>

            <!-- Bootstrap -->
            <script src=\"{{ asset('front/js/bootstrap.min.js') }}\"></script>

            <!-- Isotope -->
            <script src=\"{{ asset('front/js/isotope.min.js') }}\"></script>

            <!-- lightcase -->
            <script src=\"{{ asset('front/js/lightcase.js') }}\"></script>

            <!-- counterup -->
            <script src=\"{{ asset('../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}\"></script>
            <script src=\"{{ asset('front/js/jquery.counterup.min.js') }}\"></script>

            <!-- Swiper -->
            <script src=\"{{ asset('front/js/swiper.jquery.min.js') }}\"></script>

            <!--progress-->
            <script src=\"{{ asset('front/js/circle-progress.min.js') }}\"></script>

            <!--velocity-->
            <script src=\"{{ asset('front/js/velocity.min.js') }}\"></script>

            <!--quick-view-->
            <script src=\"{{ asset('front/js/quick-view.js') }}\"></script>

            <!--nstSlider-->
            <script src=\"{{ asset('front/js/jquery.nstSlider.js') }}\"></script>

            <!--flexslider-->
            <script src=\"{{ asset('front/js/flexslider-min.js') }}\"></script>

            <!--easing-->
            <script src=\"{{ asset('front/js/jquery.easing.min.js') }}\"></script>

            <!-- custom -->
            <script src=\"{{ asset('front/js/custom.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\PIDEV\\app\\Resources\\views\\base.html.twig");
    }
}
