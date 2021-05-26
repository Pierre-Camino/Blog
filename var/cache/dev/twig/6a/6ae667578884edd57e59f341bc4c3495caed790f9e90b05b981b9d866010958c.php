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
class __TwigTemplate_1466a443e29d5612b48b64d01fcf526a09e146b7537f6f975c8bcb2265f99511 extends Template
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
            echo "\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 9), true))) {
                // line 10
                echo "\t\t\t\t<article class=\"row border w-125 mt-5\">
\t\t\t\t\t<aside class=\"col-6\">
\t\t\t\t\t\t";
                // line 12
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 13)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t\t";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 15), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\">
\t\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t\t";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 21), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tParu le :
\t\t\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 29), "H:i"), "html", null, true);
                echo "
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 32
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "commentaires", [], "any", false, false, false, 32)), 1))) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "commentaires", [], "any", false, false, false, 33)) . " commentaires"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "commentaires", [], "any", false, false, false, 35)) . " commentaire"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t\t\t";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 39);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</aside>
\t\t\t\t\t<img class=\"col-6\" src=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 42), "html", null, true);
                echo "\" alt=\"image de l'article\">
\t\t\t\t</article>
\t\t\t";
            }
            // line 45
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return array (  163 => 46,  157 => 45,  151 => 42,  145 => 39,  141 => 37,  135 => 35,  129 => 33,  127 => 32,  121 => 29,  116 => 27,  112 => 25,  105 => 21,  99 => 19,  92 => 15,  86 => 13,  84 => 12,  80 => 10,  77 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

\t<h1 class=\"text-center mt-5\">Liste des articles</h1>
\t<section class=\"container\">
\t\t{% for article in articles %}
\t\t\t{% if article.statut == true %}
\t\t\t\t<article class=\"row border w-125 mt-5\">
\t\t\t\t\t<aside class=\"col-6\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<a href=\"{{ path('article', {id:article.id}) }}\">
\t\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t\t{{ article.titre }}
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_login')}}\">
\t\t\t\t\t\t\t\t<h3 class=\"text-center font-weight-bold\">
\t\t\t\t\t\t\t\t\t{{ article.titre }}
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\tParu le :
\t\t\t\t\t\t\t{{ article.date | date('d/m/Y') }}
\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t{{ article.date | date('H:i') }}
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{% if article.commentaires | length > 1 %}
\t\t\t\t\t\t\t\t{{ article.commentaires | length ~ \" commentaires\"}}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ article.commentaires | length ~ \" commentaire\"}}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"text-justify\">
\t\t\t\t\t\t\t{{ article.contenu | raw }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</aside>
\t\t\t\t\t<img class=\"col-6\" src=\"{{ article.image }}\" alt=\"image de l'article\">
\t\t\t\t</article>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</section>

{% endblock %}
", "accueil/index.html.twig", "/var/www/html/DWWM-2020-2021/symfony-Pierre-Camino/3_Blog/MonBlog/templates/accueil/index.html.twig");
    }
}
