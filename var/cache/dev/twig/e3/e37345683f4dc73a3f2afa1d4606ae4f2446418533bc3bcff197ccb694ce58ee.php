<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* parts/_header.html.twig */
class __TwigTemplate_7e214298c989280afb05822784a55bdcfc9e75445dd6c2b4ee85c768b3b184b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t<font style=\"vertical-align: inherit;\">
\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\tMon Blog
\t\t\t</font>
\t\t</font>
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"# navbarColor01\" aria-controls=\"navbarColor01\" aria-extended=\"false\" aria-label=\"Basculer la navigation \">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item \">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "getRoles", [], "method", false, false, false, 25)))) {
            // line 26
            echo "\t\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
            echo "\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tNouvel Article
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</li>
\t\t\t";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        }
        // line 46
        echo "\t\t\t<li class=\"nav-item\">
\t\t\t\t";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "getRoles", [], "method", false, false, false, 47)))) {
            // line 48
            echo "\t\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tTableau de Bord
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "\t\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t</li>
\t\t</ul>

\t</div>
\t<div class=\"text-right mr-3 font-weight-bold\">
\t\t";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "\t\t\tBonjour
\t\t\t";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "pseudo", [], "any", false, false, false, 82), "html", null, true);
            echo "
\t\t";
        }
        // line 84
        echo "\t</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parts/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 84,  168 => 82,  165 => 81,  163 => 80,  156 => 75,  144 => 67,  132 => 59,  130 => 58,  126 => 56,  114 => 48,  112 => 47,  109 => 46,  97 => 37,  94 => 36,  92 => 35,  89 => 34,  77 => 26,  75 => 25,  63 => 16,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<a class=\"navbar-brand\" href=\"{{path('index')}}\">
\t\t<font style=\"vertical-align: inherit;\">
\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\tMon Blog
\t\t\t</font>
\t\t</font>
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"# navbarColor01\" aria-controls=\"navbarColor01\" aria-extended=\"false\" aria-label=\"Basculer la navigation \">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item \">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('accueil')}}\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t{% if app.user and \"ROLE_ADMIN\" in app.user.getRoles() %}
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('formulaire')}}\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tNouvel Article
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t\t{% if not app.user %}
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_register')}}\">
\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t</font>
\t\t\t\t\t</font>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t{% endif %}
\t\t\t<li class=\"nav-item\">
\t\t\t\t{% if app.user and \"ROLE_ADMIN\" in app.user.getRoles() %}
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('admin')}}\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tTableau de Bord
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tDéconnexion
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_login')}}\">
\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;\">
\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t</font>
\t\t\t\t\t\t</font>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t</ul>

\t</div>
\t<div class=\"text-right mr-3 font-weight-bold\">
\t\t{% if app.user %}
\t\t\tBonjour
\t\t\t{{app.user.pseudo}}
\t\t{% endif %}
\t</div>
</nav>
", "parts/_header.html.twig", "/var/www/html/DWWM-2020-2021/symfony-Pierre-Camino/3_Blog/MonBlog/templates/parts/_header.html.twig");
    }
}
