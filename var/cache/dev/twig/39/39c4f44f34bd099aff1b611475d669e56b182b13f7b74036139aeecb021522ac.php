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

/* accueil/article.html.twig */
class __TwigTemplate_7b58d0eaa8a000dfbdd403e69a497a45601691259bd951080c58cd47471b51d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<article class=\"row border text-justify mt-5\">
\t\t<h2 class=\"text-center font-weight-bold\">
\t\t\t<aside class=\"col-12 text-center\">
\t\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        echo "
\t\t\t</h2>
\t\t\t<div class=\"text-center\">
\t\t\t\t<img class=\"col-6\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11), "html", null, true);
        echo "\" alt=\"image de l'article\">
\t\t\t</div>
\t\t\t<h5 class=\"ml-3\">
\t\t\t\tParu le :
\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "date", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        echo "
\t\t\t\tà
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), "H:i"), "html", null, true);
        echo "
\t\t\t</h5>
\t\t</aside>
\t\t<p class=\"text-center col-11 ml-5 mt-5\">
\t\t\t";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "contenu", [], "any", false, false, false, 21);
        echo "
\t\t</p>


\t\t<div class=\"row mt-5\">
\t\t\t<aside class=\"col-6\">
\t\t\t\t<h4 class=\"text-center\">Ajouter un commentaire</h4>

\t\t\t\t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "container"]]);
        echo "

\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
\t\t\t</aside>
\t\t\t<aside class=\"col-5 ml-3\">
\t\t\t\t<h3 class=\"font-italic font-weight-bold\">Commentaires :</h3>
\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "commentaires", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 36
            echo "\t\t\t\t\t<div class=\"border border-dark p-3 mt-3\">
\t\t\t\t\t\t<h6 class=\"font-weight-bold\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "titre", [], "any", false, false, false, 37), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t<p class=\"font-italic\">";
            // line 38
            echo twig_escape_filter($this->env, ((("Publié le " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "date", [], "any", false, false, false, 38), "d/m/Y")) . " par ") . twig_get_attribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 38)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</aside>
\t\t</div>
\t</article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  137 => 39,  133 => 38,  129 => 37,  126 => 36,  122 => 35,  115 => 31,  110 => 29,  99 => 21,  92 => 17,  87 => 15,  80 => 11,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<article class=\"row border text-justify mt-5\">
\t\t<h2 class=\"text-center font-weight-bold\">
\t\t\t<aside class=\"col-12 text-center\">
\t\t\t\t{{ article.titre }}
\t\t\t</h2>
\t\t\t<div class=\"text-center\">
\t\t\t\t<img class=\"col-6\" src=\"{{ article.image }}\" alt=\"image de l'article\">
\t\t\t</div>
\t\t\t<h5 class=\"ml-3\">
\t\t\t\tParu le :
\t\t\t\t{{ article.date | date('d/m/Y') }}
\t\t\t\tà
\t\t\t\t{{ article.date | date('H:i') }}
\t\t\t</h5>
\t\t</aside>
\t\t<p class=\"text-center col-11 ml-5 mt-5\">
\t\t\t{{ article.contenu | raw }}
\t\t</p>


\t\t<div class=\"row mt-5\">
\t\t\t<aside class=\"col-6\">
\t\t\t\t<h4 class=\"text-center\">Ajouter un commentaire</h4>

\t\t\t\t{{ form_start(form, {'attr': {'class' : 'container'}})}}

\t\t\t\t{{ form_end(form)}}
\t\t\t</aside>
\t\t\t<aside class=\"col-5 ml-3\">
\t\t\t\t<h3 class=\"font-italic font-weight-bold\">Commentaires :</h3>
\t\t\t\t{% for commentaire in article.commentaires %}
\t\t\t\t\t<div class=\"border border-dark p-3 mt-3\">
\t\t\t\t\t\t<h6 class=\"font-weight-bold\">{{commentaire.titre}}</h6>
\t\t\t\t\t\t<p class=\"font-italic\">{{\"Publié le \" ~ commentaire.date | date('d/m/Y') ~ \" par \" ~ commentaire.utilisateur}}</p>
\t\t\t\t\t\t<p>{{commentaire.contenu}}</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</aside>
\t\t</div>
\t</article>
{% endblock %}
", "accueil/article.html.twig", "/var/www/html/DWWM-2020-2021/symfony-Pierre-Camino/3_Blog/MonBlog/templates/accueil/article.html.twig");
    }
}
