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

/* back.html.twig */
class __TwigTemplate_5ae29d4ea1c390126aeec40cad8c9f004bcbbfd22541913d472f0439ae42a9b0 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

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
        echo "    <!--Favicon -->
    <link rel=\"icon\" href=\"";
        // line 8
        echo "favicon.html";
        echo "\" type=\"image/x-icon\"/>

    <!--Bootstrap.min css-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo "back/plugins/bootstrap/css/bootstrap.min.css";
        echo "\">

    <!--Icons css-->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo "back/css/icons.css";
        echo "\">

    <!--mCustomScrollbar css-->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo "back/plugins/scroll-bar/jquery.mCustomScrollbar.css";
        echo "\">

    <!--gallery css-->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo "back/plugins/gallery/main.css";
        echo "\">

    <!--Style css-->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo "back/css/style.css";
        echo "\">

    <!--Sidemenu css-->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo "back/plugins/toggle-menu/sidemenu.css";
        echo "\">
</head>
<body class=\"app \">
";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "</body>
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

    // line 29
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 30
        echo "<!--anv open-->
<nav class=\"navbar navbar-expand-lg main-navbar\">
    <a class=\"header-brand\" href=\"index-2.html\">
        <img src=\"";
        // line 33
        echo "back/img/as.png";
        echo "\" class=\"header-brand-img\" alt=\"Splite-Admin  logo\">
    </a>
    <ul class=\"navbar-nav navbar-right\">

        <li class=\"dropdown dropdown-list-toggle d-none d-lg-block\">
            <a href=\"#\" class=\"nav-link nav-link-lg full-screen-link\">
                <i class=\"fa fa-expand \" id=\"fullscreen-button\"></i>
            </a>
        </li>

    </ul>
</nav>
<!--nav closed-->
<!--app-content open-->
<div class=\"app-content\">
    <section class=\"section\">


        <!--aside open-->
        <aside class=\"app-sidebar\">
            <div class=\"app-sidebar__user\">
                <div class=\"dropdown user-pro-body text-center\">
                    <div class=\"nav-link pl-1 pr-1 leading-none \">
                        <img src=\"";
        // line 56
        echo "back/img/as.png";
        echo "\" alt=\"user-img\" class=\"avatar-xl rounded-circle mb-1\">
                        <span class=\"pulse bg-success\" aria-hidden=\"true\"></span>
                    </div>
                    <div class=\"user-info\">
                        <h6 class=\" mb-1 text-dark\">ADMIN</h6>
                    </div>
                </div>
            </div>

            <ul class=\"side-menu\">
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_event");
        echo "\"><span>Gerer parents</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_event");
        echo "\"><span>Gerer enfants</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_event");
        echo "\"><span>Gerer evenements</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_event");
        echo "\"><span>Gerer actualités</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_event");
        echo "\"><span>Gerer questions</span></a>                </li>
            </ul>
        </aside>
        <!--aside closed-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    <!--Jquery.min js-->
    <script src=\"";
        // line 84
        echo "back/js/jquery.min.js";
        echo "\"></script>

    <!--popper js-->
    <script src=\"";
        // line 87
        echo "back/js/popper.js";
        echo "\"></script>

    <!--Tooltip js-->
    <script src=\"";
        // line 90
        echo "back/js/tooltip.js";
        echo "\"></script>

    <!--Bootstrap.min js-->
    <script src=\"";
        // line 93
        echo "back/plugins/bootstrap/js/bootstrap.min.js";
        echo "\"></script>

    <!-- Jquery star rating-->
    <script src=\"";
        // line 96
        echo "back/plugins/rating/jquery.rating-stars.js";
        echo "\"></script>

    <!--Jquery.nicescroll.min js-->
    <script src=\"";
        // line 99
        echo "back/plugins/nicescroll/jquery.nicescroll.min.js";
        echo "\"></script>

    <!--Scroll-up-bar.min js-->
    <script src=\"";
        // line 102
        echo "back/plugins/scroll-up-bar/dist/scroll-up-bar.min.js";
        echo "\"></script>

    <!--mCustomScrollbar js-->
    <script src=\"";
        // line 105
        echo "back/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js";
        echo "\"></script>

    <!--Sidemenu js-->
    <script src=\"";
        // line 108
        echo "back/plugins/toggle-menu/sidemenu.js";
        echo "\"></script>

    <!--Scripts js-->
    <script src=\"";
        // line 111
        echo "back/js/scripts.js";
        echo "\"></script>
    <script src=\"";
        // line 112
        echo "back/js/jquery.showmore.js";
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 112,  323 => 111,  317 => 108,  311 => 105,  305 => 102,  299 => 99,  293 => 96,  287 => 93,  281 => 90,  275 => 87,  269 => 84,  266 => 83,  257 => 82,  240 => 80,  225 => 75,  220 => 73,  215 => 71,  210 => 69,  205 => 67,  191 => 56,  165 => 33,  160 => 30,  151 => 29,  134 => 6,  116 => 5,  104 => 114,  102 => 82,  100 => 80,  98 => 29,  92 => 26,  86 => 23,  80 => 20,  74 => 17,  68 => 14,  62 => 11,  56 => 8,  53 => 7,  51 => 6,  47 => 5,  41 => 1,);
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
    <!--Favicon -->
    <link rel=\"icon\" href=\"{{ ('favicon.html') }}\" type=\"image/x-icon\"/>

    <!--Bootstrap.min css-->
    <link rel=\"stylesheet\" href=\"{{ ('back/plugins/bootstrap/css/bootstrap.min.css') }}\">

    <!--Icons css-->
    <link rel=\"stylesheet\" href=\"{{ ('back/css/icons.css') }}\">

    <!--mCustomScrollbar css-->
    <link rel=\"stylesheet\" href=\"{{ ('back/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}\">

    <!--gallery css-->
    <link rel=\"stylesheet\" href=\"{{ ('back/plugins/gallery/main.css') }}\">

    <!--Style css-->
    <link rel=\"stylesheet\" href=\"{{ ('back/css/style.css') }}\">

    <!--Sidemenu css-->
    <link rel=\"stylesheet\" href=\"{{ ('back/plugins/toggle-menu/sidemenu.css') }}\">
</head>
<body class=\"app \">
{% block header %}
<!--anv open-->
<nav class=\"navbar navbar-expand-lg main-navbar\">
    <a class=\"header-brand\" href=\"index-2.html\">
        <img src=\"{{ ('back/img/as.png') }}\" class=\"header-brand-img\" alt=\"Splite-Admin  logo\">
    </a>
    <ul class=\"navbar-nav navbar-right\">

        <li class=\"dropdown dropdown-list-toggle d-none d-lg-block\">
            <a href=\"#\" class=\"nav-link nav-link-lg full-screen-link\">
                <i class=\"fa fa-expand \" id=\"fullscreen-button\"></i>
            </a>
        </li>

    </ul>
</nav>
<!--nav closed-->
<!--app-content open-->
<div class=\"app-content\">
    <section class=\"section\">


        <!--aside open-->
        <aside class=\"app-sidebar\">
            <div class=\"app-sidebar__user\">
                <div class=\"dropdown user-pro-body text-center\">
                    <div class=\"nav-link pl-1 pr-1 leading-none \">
                        <img src=\"{{ ('back/img/as.png') }}\" alt=\"user-img\" class=\"avatar-xl rounded-circle mb-1\">
                        <span class=\"pulse bg-success\" aria-hidden=\"true\"></span>
                    </div>
                    <div class=\"user-info\">
                        <h6 class=\" mb-1 text-dark\">ADMIN</h6>
                    </div>
                </div>
            </div>

            <ul class=\"side-menu\">
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"{{ path('afficher_event') }}\"><span>Gerer parents</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"{{ path('afficher_event') }}\"><span>Gerer enfants</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"{{ path('afficher_event') }}\"><span>Gerer evenements</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"{{ path('afficher_event') }}\"><span>Gerer actualités</span></a>                </li>
                <li class=\"slide\">
                    <a class=\"slide-item\"  href=\"{{ path('afficher_event') }}\"><span>Gerer questions</span></a>                </li>
            </ul>
        </aside>
        <!--aside closed-->
{% endblock %}
{% block content %}
{% endblock %}
{% block javascripts %}
    <!--Jquery.min js-->
    <script src=\"{{ ('back/js/jquery.min.js') }}\"></script>

    <!--popper js-->
    <script src=\"{{ ('back/js/popper.js') }}\"></script>

    <!--Tooltip js-->
    <script src=\"{{ ('back/js/tooltip.js') }}\"></script>

    <!--Bootstrap.min js-->
    <script src=\"{{ ('back/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>

    <!-- Jquery star rating-->
    <script src=\"{{ ('back/plugins/rating/jquery.rating-stars.js') }}\"></script>

    <!--Jquery.nicescroll.min js-->
    <script src=\"{{ ('back/plugins/nicescroll/jquery.nicescroll.min.js') }}\"></script>

    <!--Scroll-up-bar.min js-->
    <script src=\"{{ ('back/plugins/scroll-up-bar/dist/scroll-up-bar.min.js') }}\"></script>

    <!--mCustomScrollbar js-->
    <script src=\"{{ ('back/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}\"></script>

    <!--Sidemenu js-->
    <script src=\"{{ ('back/plugins/toggle-menu/sidemenu.js') }}\"></script>

    <!--Scripts js-->
    <script src=\"{{ ('back/js/scripts.js') }}\"></script>
    <script src=\"{{ ('back/js/jquery.showmore.js') }}\"></script>
{% endblock %}
</body>
</html>
", "back.html.twig", "C:\\wamp64\\www\\PIDEV\\app\\Resources\\views\\back.html.twig");
    }
}
