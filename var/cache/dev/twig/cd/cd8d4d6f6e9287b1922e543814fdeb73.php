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

/* public/home.html.twig */
class __TwigTemplate_9becadca917a34116e4bf81540ea513f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
<h1> Coaching de vie - Développement Personnel</h1>
        <section id=\"description\">
            <h3> Bienvenue sur notre site lié au coaching de vie et au développement personnel</h3>
            <p> Découvrez des outils pour prendre votre vie en main et devenir une meilleure personne afin d'impacter positivement votre monde ! </p>
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sunset.jpg"), "html", null, true);
        echo "\" alt=\"sunset\" title=\"Coucher de soleil\">
        </section>
        <section>
            <h3> Vous trouverez plusieurs sections afin d'optimiser votre vie selon vos envies :  </h3>
            <article id=\"list-home\">
                <ul>
                    <li> Une partie <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Formations</a> avec des outils en vente pour booster au maximum vos résultats </li>
                    <li> Une section <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Actualités</a> contenant des articles récents sous forme de blog sur différents domaines du coaching </li>
                    <li> Un espace <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\">Forum</a> pour vous exprimer et échanger sur les thèmes qui vous préoccupent  </li>
                </ul>
            </article>
            <h4> Vous pouvez également créer un espace membre grâce à l'outil <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription</a> </h4>
            <h4> Ensuite <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\">Connexion</a> pour acheter des produits et devenir un membre actif de notre forum. </h4>
            
        </section>
        <section id=\"apropos\">
            <h2> A propos </h2>
            <p> Entrepreneur, coach et conseiller de particuliers et top performers, passionné des dernières avancées en neurosciences, Valentin Gautier bouscule depuis plus de dix mois le paysage du business coaching et du développement personnel.<p>Fondateur et dirigeant de Valonaute Inc, comptant une équipe de plus de 2 personnes, Valentin Gautier compte pour clients ses parents, sa soeur, sa copine, des amis et des volontaires du métro parisien.</p><p> Il accompagne ces personnalités à améliorer leur performance ou la croissance de leur business mais aussi des dizaines de particuliers sur le plan du développement personnel et de la confiance en soi. </p><p>Fasciné par comment de petits changements peuvent radicalement transformer notre vie ou nos résultats, son obsession réside dans le fait de partager des outils concrets de la manière la plus captivante et pédagogique possible.</p><p>Le tout validé, ou invalidé, par des recherches scientifiques que son équipe de chercheurs mène. </p>
        </section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "public/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 25,  120 => 24,  114 => 21,  110 => 20,  106 => 19,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Accueil
{% endblock title %}

{% block main %}

<h1> Coaching de vie - Développement Personnel</h1>
        <section id=\"description\">
            <h3> Bienvenue sur notre site lié au coaching de vie et au développement personnel</h3>
            <p> Découvrez des outils pour prendre votre vie en main et devenir une meilleure personne afin d'impacter positivement votre monde ! </p>
            <img src=\"{{ asset ('assets/img/sunset.jpg') }}\" alt=\"sunset\" title=\"Coucher de soleil\">
        </section>
        <section>
            <h3> Vous trouverez plusieurs sections afin d'optimiser votre vie selon vos envies :  </h3>
            <article id=\"list-home\">
                <ul>
                    <li> Une partie <a href=\"{{ path ('formations') }}\">Formations</a> avec des outils en vente pour booster au maximum vos résultats </li>
                    <li> Une section <a href=\"{{ path ('blog') }}\">Actualités</a> contenant des articles récents sous forme de blog sur différents domaines du coaching </li>
                    <li> Un espace <a href=\"{{ path ('forum') }}\">Forum</a> pour vous exprimer et échanger sur les thèmes qui vous préoccupent  </li>
                </ul>
            </article>
            <h4> Vous pouvez également créer un espace membre grâce à l'outil <a href=\"{{ path ('inscription') }}\">Inscription</a> </h4>
            <h4> Ensuite <a href=\"{{ path ('connexion') }}\">Connexion</a> pour acheter des produits et devenir un membre actif de notre forum. </h4>
            
        </section>
        <section id=\"apropos\">
            <h2> A propos </h2>
            <p> Entrepreneur, coach et conseiller de particuliers et top performers, passionné des dernières avancées en neurosciences, Valentin Gautier bouscule depuis plus de dix mois le paysage du business coaching et du développement personnel.<p>Fondateur et dirigeant de Valonaute Inc, comptant une équipe de plus de 2 personnes, Valentin Gautier compte pour clients ses parents, sa soeur, sa copine, des amis et des volontaires du métro parisien.</p><p> Il accompagne ces personnalités à améliorer leur performance ou la croissance de leur business mais aussi des dizaines de particuliers sur le plan du développement personnel et de la confiance en soi. </p><p>Fasciné par comment de petits changements peuvent radicalement transformer notre vie ou nos résultats, son obsession réside dans le fait de partager des outils concrets de la manière la plus captivante et pédagogique possible.</p><p>Le tout validé, ou invalidé, par des recherches scientifiques que son équipe de chercheurs mène. </p>
        </section>


{% endblock main %}", "public/home.html.twig", "C:\\wamp64\\www\\symfony\\2.1 projet-coaching\\templates\\public\\home.html.twig");
    }
}
