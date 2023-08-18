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
        <section id=\"lastArticles\">
            <h2 class=\"my-5\"> Voici nos derniers articles du blog : </h2>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "                        <div class=\"card col-4 \" style=\"max-width: 25rem; min-height:40rem;\">
                            <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                            <div class=\"card-body card-center-perso\">
                                <h5 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "shortdescription", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_onearticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-perso\">Lire l'article</a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>
            </div>
            <h3 ><a class=\"btn btn-perso my-5\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"> Accéder au blog </a></h3>
        </section>
        <section id=\"bestSellers\">
            <h2 class=\"my-5\"> Voici nos meilleurs produits et formations : </h2>
            <div class=\"container-fluid my-5\">
                <div class=\"row\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestsellers"]) || array_key_exists("bestsellers", $context) ? $context["bestsellers"] : (function () { throw new RuntimeError('Variable "bestsellers" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "                <div class=\"card col-4 card-center-perso\" style=\"max-width: 25rem; min-height:40rem;\">
                  <a class=\"my-4\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "\"></a>
                  <div class=\"card-body card-center-perso \">
                    <h5 class=\"card-title my-4\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 54), "html", null, true);
            echo "</h5>
                    <h5 class=\"card-title my-4\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55), "html", null, true);
            echo " €</h5>
                    <p class=\"card-text my-4\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "shortdescription", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
                    <p class=\"guarantee my-3\"> Garantie 100% Satisfait ou remboursé !* </p>
                    <h4><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-perso\">Ajouter au panier</a>
                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-perso-dark\">Details</a></h4>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </div>
            </div>
            <h3><a class=\"btn btn-perso\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\"> Accéder à la boutique </a></h3>
        </section>
        <section id=\"apropos\">
            <h2> A propos </h2>
            <p> Entrepreneur, coach et conseiller de particuliers et top performers, passionné des dernières avancées en neurosciences, EasyWebFactory bouscule depuis plus de dix mois le paysage du business coaching et du développement personnel.<p>Comptant une équipe de plus de 2 personnes, EasyWebFactory comptent pour clients ses parents, sa soeur, sa copine, des amis et des volontaires du métro parisien.</p><p> Ils accompagnent ces personnalités à améliorer leur performance ou la croissance de leur business mais aussi des dizaines de particuliers sur le plan du développement personnel et de la confiance en soi. </p><p>Fascinés par comment de petits changements peuvent radicalement transformer notre vie ou nos résultats, leur obsession réside dans le fait de partager des outils concrets de la manière la plus captivante et pédagogique possible.</p><p>Le tout validé, ou invalidé, par des recherches scientifiques que leur équipe de chercheurs mène. </p>
        </section>
        <h3 ><a class=\"btn btn-perso my-5\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"> Accéder au blog </a></h3>
        <section id=\"temoignages\">
            <h2 class=\"my-5\"> Nos meilleurs avis clients : </h2>
            <div class=\"container-fluid\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestreviews"]) || array_key_exists("bestreviews", $context) ? $context["bestreviews"] : (function () { throw new RuntimeError('Variable "bestreviews" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 76
            echo "                    <div class=\"row\">
                        <h5 class=\"my-5\"> \"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 77), "html", null, true);
            echo "\" </h5>
                        <p class=\"my-3\"> \"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 78), "html", null, true);
            echo "\"</p>
                        <h4 class=\"my-3\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 79), "html", null, true);
            echo "/10</h4>
                        <p> Avis laissé le ";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
            echo " par <span class=\"bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "pseudo", [], "any", false, false, false, 80), "html", null, true);
            echo "</span> </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </div>
        </section>
        <a class=\"btn btn-perso my-5\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous Contacter</a>

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
        return array (  280 => 85,  276 => 83,  265 => 80,  261 => 79,  257 => 78,  253 => 77,  250 => 76,  246 => 75,  239 => 71,  230 => 65,  226 => 63,  216 => 59,  212 => 58,  207 => 56,  203 => 55,  199 => 54,  187 => 52,  184 => 51,  180 => 50,  171 => 44,  167 => 42,  157 => 38,  153 => 37,  149 => 36,  141 => 34,  138 => 33,  134 => 32,  124 => 25,  120 => 24,  114 => 21,  110 => 20,  106 => 19,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
        <section id=\"lastArticles\">
            <h2 class=\"my-5\"> Voici nos derniers articles du blog : </h2>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    {% for article in articles %}
                        <div class=\"card col-4 \" style=\"max-width: 25rem; min-height:40rem;\">
                            <img src=\"{{ asset('uploads/')}}{{ article.image }}\" class=\"card-img-top\" alt=\"{{ article.title}}\">
                            <div class=\"card-body card-center-perso\">
                                <h5 class=\"card-title\">{{ article.title}}</h5>
                                <p class=\"card-text\">{{ article.shortdescription}}</p>
                                <a href=\"{{ path('front_onearticle', {id: article.id})}}\" class=\"btn btn-perso\">Lire l'article</a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
            <h3 ><a class=\"btn btn-perso my-5\" href=\"{{ path ('blog')}}\"> Accéder au blog </a></h3>
        </section>
        <section id=\"bestSellers\">
            <h2 class=\"my-5\"> Voici nos meilleurs produits et formations : </h2>
            <div class=\"container-fluid my-5\">
                <div class=\"row\">
                {% for product in bestsellers %}
                <div class=\"card col-4 card-center-perso\" style=\"max-width: 25rem; min-height:40rem;\">
                  <a class=\"my-4\" href=\"{{ path('front_product', {id: product.id})}}\"><img src=\"{{ asset('uploads/')}}{{ product.image }}\" class=\"card-img-top\" alt=\"{{ product.title}}\" title=\"{{ product.title}}\"></a>
                  <div class=\"card-body card-center-perso \">
                    <h5 class=\"card-title my-4\">{{ product.title}}</h5>
                    <h5 class=\"card-title my-4\">{{ product.price}} €</h5>
                    <p class=\"card-text my-4\">{{ product.shortdescription}}</p>
                    <p class=\"guarantee my-3\"> Garantie 100% Satisfait ou remboursé !* </p>
                    <h4><a href=\"{{ path('cart_add', {id: product.id })}}\" class=\"btn btn-perso\">Ajouter au panier</a>
                    <a href=\"{{ path('front_product', {id: product.id})}}\" class=\"btn btn-perso-dark\">Details</a></h4>
                  </div>
                </div>
                {% endfor %}
                </div>
            </div>
            <h3><a class=\"btn btn-perso\" href=\"{{ path ('formations')}}\"> Accéder à la boutique </a></h3>
        </section>
        <section id=\"apropos\">
            <h2> A propos </h2>
            <p> Entrepreneur, coach et conseiller de particuliers et top performers, passionné des dernières avancées en neurosciences, EasyWebFactory bouscule depuis plus de dix mois le paysage du business coaching et du développement personnel.<p>Comptant une équipe de plus de 2 personnes, EasyWebFactory comptent pour clients ses parents, sa soeur, sa copine, des amis et des volontaires du métro parisien.</p><p> Ils accompagnent ces personnalités à améliorer leur performance ou la croissance de leur business mais aussi des dizaines de particuliers sur le plan du développement personnel et de la confiance en soi. </p><p>Fascinés par comment de petits changements peuvent radicalement transformer notre vie ou nos résultats, leur obsession réside dans le fait de partager des outils concrets de la manière la plus captivante et pédagogique possible.</p><p>Le tout validé, ou invalidé, par des recherches scientifiques que leur équipe de chercheurs mène. </p>
        </section>
        <h3 ><a class=\"btn btn-perso my-5\" href=\"{{ path ('blog')}}\"> Accéder au blog </a></h3>
        <section id=\"temoignages\">
            <h2 class=\"my-5\"> Nos meilleurs avis clients : </h2>
            <div class=\"container-fluid\">
                {% for review in bestreviews %}
                    <div class=\"row\">
                        <h5 class=\"my-5\"> \"{{ review.title }}\" </h5>
                        <p class=\"my-3\"> \"{{ review.comment }}\"</p>
                        <h4 class=\"my-3\">{{ review.rating }}/10</h4>
                        <p> Avis laissé le {{ review.date | date ('d/m/Y') }} par <span class=\"bold\">{{ review.pseudo }}</span> </p>
                    </div>
                {% endfor %}
            </div>
        </section>
        <a class=\"btn btn-perso my-5\" href=\"{{ path ('contact')}}\">Nous Contacter</a>

{% endblock main %}", "public/home.html.twig", "C:\\wamp64\\www\\symfony\\2.6.0 projet-coaching\\templates\\public\\home.html.twig");
    }
}
