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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Kiddo</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Favicons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/images/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/images/icon.png"), "html", null, true);
        echo "\">
        <!-- Google font (font-family: 'Dosis', Roboto;) -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Dosis:400,500,600,700"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:400,500,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/css/plugins.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/style.css"), "html", null, true);
        echo "\">

        <!-- Cusom css -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/css/custom.css"), "html", null, true);
        echo "\">

        <!-- Modernizer js -->
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>

        <!--Sidemenu css-->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
    <div class=\"wrapper\" id=\"wrapper\">
    ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 134
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 178
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "    </div>
    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "        <header id=\"header\" class=\"jnr__header header--2 clearfix\">
            <!-- Start Header Top Area -->
            <div class=\"junior__header__top bg-image--5\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-lg-6 col-sm-3 col-12\">
                            <div class=\"jun__header__top__right\">
                                <ul class=\"accounting d-flex justify-content-lg-end justify-content-md-end justify-content-start align-items-center\">
                                    <li><a class=\"login-trigger\" href=\"#\">Login</a></li>
                                    <li><a class=\"accountbox-trigger\" href=\"#\">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top Area -->
            <!-- Start Mainmenu Area -->
            <div class=\"mainmenu__wrapper bg--white sticky__header\">
                <div class=\"container\">
                    <div class=\"row d-none d-lg-flex\">
                        <div class=\"col-sm-4 col-md-6 col-lg-2 order-1 order-lg-1\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/images/logo/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo images\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-sm-4 col-md-2 col-lg-9 order-3 order-lg-2\">
                            <div class=\"mainmenu__wrap\">
                                <nav class=\"mainmenu__nav\">
                                    <ul class=\"mainmenu\">
                                        <li><a href=\"index.html\">Acceuil</a></li>
                                        <li class=\"drop\"><a href=\"class-grid.html\">Class</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"class-grid.html\">Class Grid</a></li>
                                                <li><a href=\"class-list.html\">Class List</a></li>
                                                <li><a href=\"class-details.html\">Class Details</a></li>
                                                <li><a href=\"class-details-left-sidebar.html\">Class Details LeftSidebar</a></li>
                                                <li><a href=\"class-details-right-sidebar.html\">Class Details RightSidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"event-grid.html\">Event</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_eventFront");
        echo "\">Prochainement</a></li>
                                                <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_participations");
        echo "\">Mes passes</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"#\">Pages</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"about-us.html\">about us</a></li>
                                                <li><a href=\"service.html\">our service</a></li>
                                                <li><a href=\"gallery-one.html\">gallery One</a></li>
                                                <li><a href=\"gallery-two.html\">gallery Two</a></li>
                                                <li><a href=\"gallery-three.html\">gallery Three</a></li>
                                                <li><a href=\"gallery-details.html\">gallery Details</a></li>
                                                <li><a href=\"cart.html\">cart Page</a></li>
                                                <li><a href=\"wishlist.html\">wishlist page</a></li>
                                                <li><a href=\"checkout.html\">checkout page</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"shop-grid.html\">Shop</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                                <li><a href=\"shop-grid-left-sidebar.html\">Shop Grid Left Sidebar</a></li>
                                                <li><a href=\"shop-grid-right-sidebar.html\">Shop Grid right Sidebar</a></li>
                                                <li><a href=\"shop-single.html\">Shop Single</a></li>
                                                <li><a href=\"shop-single-right-sidebar.html\">Shop Single Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"blog-grid.html\">Blog</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                                <li><a href=\"blog-list.html\">Blog List</a></li>
                                                <li><a href=\"blog-list-right-sidebar.html\">Blog List RightSidebar</a></li>
                                                <li><a href=\"blog-list-left-sidebar.html\">Blog List LeftSidebar</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class=\"mobile-menu d-block d-lg-none\">
                        <div class=\"logo\">
                            <a href=\"index.html\"><img src=\"images/logo/2.png\" alt=\"logo\"></a>
                        </div>
                        <a class=\"minicart-trigger\" href=\"#\">
                            <i class=\"fa fa-shopping-basket\"></i>
                        </a>
                    </div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- //Header -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 135
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 137
        echo "        <!-- Footer Area -->
        <footer id=\"footer\" class=\"footer-area\">
            <div class=\"footer__wrapper poss-relative ftr__btm__image section-padding--lg bg--white\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Start Single Widget -->
                        <div class=\"col-lg-3 col-md-6 col-sm-12 md-mt-40 sm-mt-40\">
                            <div class=\"footer__widget\">
                                <div class=\"footer__innner\">
                                    <div class=\"dcare__twit__wrap\">
                                        <!-- Start Single -->
                                        <div class=\"dcare__twit d-flex\">
                                            <div class=\"dcare__twit__icon\">
                                                <i class=\"fa fa-twitter\"></i>
                                            </div>
                                            <div class=\"dcare__twit__details\">
                                            </div>
                                        </div>
                                        <!-- End Single -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
            <div class=\"copyright\">
                <div class=\"container\">
                    <div class=\"row align-items-center copyright__wrapper\">
                        <div class=\"col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"coppy__right__inner\">
                                <p><i class=\"fa fa-copyright\"></i>Copyright, 2018 <a href=\"#\" target=\"_blank\"> Devitems.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //Footer Area -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/plugins.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/active.js"), "html", null, true);
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
        return array (  360 => 183,  356 => 182,  352 => 181,  348 => 180,  343 => 179,  334 => 178,  284 => 137,  275 => 136,  265 => 135,  256 => 134,  190 => 78,  186 => 77,  163 => 57,  137 => 33,  128 => 32,  114 => 185,  111 => 178,  108 => 136,  105 => 134,  103 => 32,  96 => 28,  90 => 25,  84 => 22,  78 => 19,  74 => 18,  70 => 17,  64 => 14,  60 => 13,  55 => 11,  51 => 10,  40 => 1,);
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Kiddo</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Favicons -->
        <link rel=\"shortcut icon\" href=\"{{ asset('newFront/images/favicon.ico') }}\">
        <link rel=\"apple-touch-icon\" href=\"{{ asset('newFront/images/icon.png') }}\">
        <!-- Google font (font-family: 'Dosis', Roboto;) -->
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Dosis:400,500,600,700') }}\"  rel=\"stylesheet\">
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,500,700') }}\" rel=\"stylesheet\">

        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/css/plugins.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/style.css') }}\">

        <!-- Cusom css -->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/css/custom.css') }}\">

        <!-- Modernizer js -->
        <script src=\"{{ asset('newFront/js/vendor/modernizr-3.5.0.min.js') }}\"></script>

        <!--Sidemenu css-->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/css/bootstrap.min.css') }}\">
    </head>
    <body>
    <div class=\"wrapper\" id=\"wrapper\">
    {% block header %}
        <header id=\"header\" class=\"jnr__header header--2 clearfix\">
            <!-- Start Header Top Area -->
            <div class=\"junior__header__top bg-image--5\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-lg-6 col-sm-3 col-12\">
                            <div class=\"jun__header__top__right\">
                                <ul class=\"accounting d-flex justify-content-lg-end justify-content-md-end justify-content-start align-items-center\">
                                    <li><a class=\"login-trigger\" href=\"#\">Login</a></li>
                                    <li><a class=\"accountbox-trigger\" href=\"#\">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top Area -->
            <!-- Start Mainmenu Area -->
            <div class=\"mainmenu__wrapper bg--white sticky__header\">
                <div class=\"container\">
                    <div class=\"row d-none d-lg-flex\">
                        <div class=\"col-sm-4 col-md-6 col-lg-2 order-1 order-lg-1\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"{{ asset('newFront/images/logo/logo.jpg') }}\" alt=\"logo images\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-sm-4 col-md-2 col-lg-9 order-3 order-lg-2\">
                            <div class=\"mainmenu__wrap\">
                                <nav class=\"mainmenu__nav\">
                                    <ul class=\"mainmenu\">
                                        <li><a href=\"index.html\">Acceuil</a></li>
                                        <li class=\"drop\"><a href=\"class-grid.html\">Class</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"class-grid.html\">Class Grid</a></li>
                                                <li><a href=\"class-list.html\">Class List</a></li>
                                                <li><a href=\"class-details.html\">Class Details</a></li>
                                                <li><a href=\"class-details-left-sidebar.html\">Class Details LeftSidebar</a></li>
                                                <li><a href=\"class-details-right-sidebar.html\">Class Details RightSidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"event-grid.html\">Event</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"{{ path('afficher_eventFront') }}\">Prochainement</a></li>
                                                <li><a href=\"{{ path('liste_participations') }}\">Mes passes</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"#\">Pages</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"about-us.html\">about us</a></li>
                                                <li><a href=\"service.html\">our service</a></li>
                                                <li><a href=\"gallery-one.html\">gallery One</a></li>
                                                <li><a href=\"gallery-two.html\">gallery Two</a></li>
                                                <li><a href=\"gallery-three.html\">gallery Three</a></li>
                                                <li><a href=\"gallery-details.html\">gallery Details</a></li>
                                                <li><a href=\"cart.html\">cart Page</a></li>
                                                <li><a href=\"wishlist.html\">wishlist page</a></li>
                                                <li><a href=\"checkout.html\">checkout page</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"shop-grid.html\">Shop</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                                <li><a href=\"shop-grid-left-sidebar.html\">Shop Grid Left Sidebar</a></li>
                                                <li><a href=\"shop-grid-right-sidebar.html\">Shop Grid right Sidebar</a></li>
                                                <li><a href=\"shop-single.html\">Shop Single</a></li>
                                                <li><a href=\"shop-single-right-sidebar.html\">Shop Single Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"drop\"><a href=\"blog-grid.html\">Blog</a>
                                            <ul class=\"dropdown__menu\">
                                                <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                                <li><a href=\"blog-list.html\">Blog List</a></li>
                                                <li><a href=\"blog-list-right-sidebar.html\">Blog List RightSidebar</a></li>
                                                <li><a href=\"blog-list-left-sidebar.html\">Blog List LeftSidebar</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class=\"mobile-menu d-block d-lg-none\">
                        <div class=\"logo\">
                            <a href=\"index.html\"><img src=\"images/logo/2.png\" alt=\"logo\"></a>
                        </div>
                        <a class=\"minicart-trigger\" href=\"#\">
                            <i class=\"fa fa-shopping-basket\"></i>
                        </a>
                    </div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- //Header -->
    {% endblock %}
    {% block content %}
    {% endblock %}
    {% block footer %}
        <!-- Footer Area -->
        <footer id=\"footer\" class=\"footer-area\">
            <div class=\"footer__wrapper poss-relative ftr__btm__image section-padding--lg bg--white\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Start Single Widget -->
                        <div class=\"col-lg-3 col-md-6 col-sm-12 md-mt-40 sm-mt-40\">
                            <div class=\"footer__widget\">
                                <div class=\"footer__innner\">
                                    <div class=\"dcare__twit__wrap\">
                                        <!-- Start Single -->
                                        <div class=\"dcare__twit d-flex\">
                                            <div class=\"dcare__twit__icon\">
                                                <i class=\"fa fa-twitter\"></i>
                                            </div>
                                            <div class=\"dcare__twit__details\">
                                            </div>
                                        </div>
                                        <!-- End Single -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
            <div class=\"copyright\">
                <div class=\"container\">
                    <div class=\"row align-items-center copyright__wrapper\">
                        <div class=\"col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"coppy__right__inner\">
                                <p><i class=\"fa fa-copyright\"></i>Copyright, 2018 <a href=\"#\" target=\"_blank\"> Devitems.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //Footer Area -->
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('newFront/js/vendor/jquery-3.2.1.min.js') }}\"></script>
            <script src=\"{{ asset('newFront/js/popper.min.js') }}\"></script>
            <script src=\"{{ asset('newFront/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('newFront/js/plugins.js') }}\"></script>
            <script src=\"{{ asset('newFront/js/active.js') }}\"></script>
        {% endblock %}
    </div>
    </body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\app\\Resources\\views\\base.html.twig");
    }
}
