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

/* ::base.html.twig */
class __TwigTemplate_dd2e1ab6efc41c963e3f054b77c3e3483a262f1db1f93fdf9dd5a88d7f26e0fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Kiddo</title>
        <!--favicon -->
        <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/img/logo.png"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>

        <!--Bootstrap.min css-->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Responsive -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Icons css-->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/css/icons.css"), "html", null, true);
        echo "\">

        <!--mCustomScrollbar css-->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/scroll-bar/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">

        <!--Style css-->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/css/style.css"), "html", null, true);
        echo "\">

        <!--Sidemenu css-->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/toggle-menu/sidemenu.css"), "html", null, true);
        echo "\">
    </head>
    <body>
    ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 98
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 28
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

    // line 96
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 97
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 99
        echo "        <footer>
            <div class=\"footer-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6 col-xs-12\">
                            <div class=\"footer-item\">
                                <div class=\"title\"><img src=\"";
        // line 105
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

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "            <!--Jquery.min js-->
            <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

            <!--popper js-->
            <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/popper.js"), "html", null, true);
        echo "\"></script>

            <!--Tooltip js-->
            <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/tooltip.js"), "html", null, true);
        echo "\"></script>

            <!--Bootstrap.min js-->
            <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Jquery star rating-->
            <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/rating/jquery.rating-stars.js"), "html", null, true);
        echo "\"></script>

            <!--Jquery.nicescroll.min js-->
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>

            <!--Scroll-up-bar.min js-->
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"), "html", null, true);
        echo "\"></script>

            <!--mCustomScrollbar js-->
            <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
            <!--Sidemenu js-->
            <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/plugins/toggle-menu/sidemenu.js"), "html", null, true);
        echo "\"></script>

            <!--Formvalidation js-->
            <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/formvalidation.js"), "html", null, true);
        echo "\"></script>

            <!--Scripts js-->
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/scripts.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("newFront/js/jquery.showmore.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 157,  335 => 156,  329 => 153,  323 => 150,  318 => 148,  312 => 145,  306 => 142,  300 => 139,  294 => 136,  288 => 133,  282 => 130,  276 => 127,  273 => 126,  264 => 125,  234 => 105,  226 => 99,  217 => 98,  207 => 97,  198 => 96,  121 => 28,  112 => 27,  100 => 159,  97 => 125,  94 => 98,  91 => 96,  89 => 27,  83 => 24,  77 => 21,  71 => 18,  65 => 15,  60 => 13,  55 => 11,  49 => 8,  40 => 1,);
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
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Kiddo</title>
        <!--favicon -->
        <link rel=\"icon\" href=\"{{ asset('newFront/img/logo.png') }}\" type=\"image/x-icon\"/>

        <!--Bootstrap.min css-->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/plugins/bootstrap/css/bootstrap.min.css') }}\">
        <!-- Responsive -->
        <link href=\"{{ asset('newFront/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!--Icons css-->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/css/icons.css') }}\">

        <!--mCustomScrollbar css-->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}\">

        <!--Style css-->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/css/style.css') }}\">

        <!--Sidemenu css-->
        <link rel=\"stylesheet\" href=\"{{ asset('newFront/plugins/toggle-menu/sidemenu.css') }}\">
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
            <!--Jquery.min js-->
            <script src=\"{{ asset('newFront/js/jquery.min.js') }}\"></script>

            <!--popper js-->
            <script src=\"{{ asset('newFront/js/popper.js') }}\"></script>

            <!--Tooltip js-->
            <script src=\"{{ asset('newFront/js/tooltip.js') }}\"></script>

            <!--Bootstrap.min js-->
            <script src=\"{{ asset('newFront/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>

            <!-- Jquery star rating-->
            <script src=\"{{ asset('newFront/plugins/rating/jquery.rating-stars.js') }}\"></script>

            <!--Jquery.nicescroll.min js-->
            <script src=\"{{ asset('newFront/plugins/nicescroll/jquery.nicescroll.min.js') }}\"></script>

            <!--Scroll-up-bar.min js-->
            <script src=\"{{ asset('newFront/plugins/scroll-up-bar/dist/scroll-up-bar.min.js') }}\"></script>

            <!--mCustomScrollbar js-->
            <script src=\"{{ asset('newFront/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}\"></script>
            <!--Sidemenu js-->
            <script src=\"{{ asset('newFront/plugins/toggle-menu/sidemenu.js') }}\"></script>

            <!--Formvalidation js-->
            <script src=\"{{ asset('newFront/js/formvalidation.js') }}\"></script>

            <!--Scripts js-->
            <script src=\"{{ asset('newFront/js/scripts.js') }}\"></script>
            <script src=\"{{ asset('newFront/js/jquery.showmore.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\PIDEV - Copie (2)\\app/Resources\\views/base.html.twig");
    }
}
