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

/* accueil/index.html.twig */
class __TwigTemplate_1e967e70dd9a4ce6f496ab488cfcdde896027d7b5652bd8a8413dfbc683979a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t<h1 class=\"text-center mt-5\">Liste des articles</h1>
\t<section class=\"container\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "\t\t\t<article class=\"row border w-125 mt-5\">
\t\t\t\t<aside class=\"col-6\">
\t\t\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
                // line 12
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 14), "html", null, true);
                echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\">
\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 20), "html", null, true);
                echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t<h5>
\t\t\t\t\t\tParu le :
\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\tà
\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 28), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t</h5>
\t\t\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "commentaires", [], "any", false, false, false, 30)) . " commentaires"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t\t";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 32);
            echo "
\t\t\t\t\t</p>
\t\t\t\t</aside>
\t\t\t\t<img class=\"col-6\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 35), "html", null, true);
            echo "\" alt=\"image de l'article\">
\t\t\t</article>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 38,  134 => 35,  128 => 32,  123 => 30,  118 => 28,  113 => 26,  109 => 24,  102 => 20,  96 => 18,  89 => 14,  83 => 12,  81 => 11,  77 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

\t<h1 class=\"text-center mt-5\">Liste des articles</h1>
\t<section class=\"container\">
\t\t{% for article in articles %}
\t\t\t<article class=\"row border w-125 mt-5\">
\t\t\t\t<aside class=\"col-6\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<a href=\"{{ path('article', {id:article.id}) }}\">
\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t{{ article.titre }}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('app_login')}}\">
\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t{{ article.titre }}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<h5>
\t\t\t\t\t\tParu le :
\t\t\t\t\t\t{{ article.date | date('d/m/Y') }}
\t\t\t\t\t\tà
\t\t\t\t\t\t{{ article.date | date('H:i') }}
\t\t\t\t\t</h5>
\t\t\t\t\t<p>{{ article.commentaires | length ~ \" commentaires\"}}</p>
\t\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t\t{{ article.contenu | raw }}
\t\t\t\t\t</p>
\t\t\t\t</aside>
\t\t\t\t<img class=\"col-6\" src=\"{{ article.image }}\" alt=\"image de l'article\">
\t\t\t</article>
\t\t{% endfor %}
\t</section>

{% endblock %}
", "accueil/index.html.twig", "/var/www/html/DWWM-2020-2021/symfony-Pierre-Camino/3_Blog/MonBlog/templates/accueil/index.html.twig");
    }
}
