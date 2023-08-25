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

/* admin/users.html.twig */
class __TwigTemplate_555defddbe37f56ede40dad9b627f28f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
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
        echo "Tableau de bord
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
<p class=\"my-4\"> Vous êtes bien connecté en tant qu'<span class=\"text-color-perso\">administrateur</span> avec le mail : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "userIdentifier", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>

<h3>Que souhaitez vous faire ? </h3>

<section>
    <h4 class=\"my-4 text-color-perso\"> Modifier le contenu du site </h4>

    <div class=\"my-4\">
        <a class='btn btn-outline-success' href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_category");
        echo "\"> Ajouter une catégorie</a>
        <a class='btn btn-success' href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category");
        echo "\"> Voir les catégories</a>
    </div>
    <div class=\"my-4\">
        <a class='btn btn-outline-primary' href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_product");
        echo "\"> Ajouter un produit</a>
        <a class='btn btn-primary' href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product");
        echo "\"> Voir tous les produits</a>
    </div>

    <div class=\"my-4\">
        <a class='btn btn-outline-secondary' href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_article");
        echo "\"> Ajouter un article du Blog</a>
        <a class='btn btn-secondary' href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_article");
        echo "\"> Voir les articles du blog</a>
    </div>
</section>

<section>
    <h4 class=\"my-4 text-color-perso\"> Consulter des données </h4>
    <h4><a class=\"my-2 btn btn-outline-info\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_orders");
        echo "\"> Commandes Clients</a></h4>
    <h4><a class=\"my-2 btn btn-outline-dark\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_users");
        echo "\"> Liste des utilisateurs </a></h4>

    <div class=\"container-fluid my-5\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">ID User</th>
                    <th scope=\"col\">Date d'inscription</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "                    <tr>
                        <th scope=\"row\"> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo " </th>
                        <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "registrationdate", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
            echo " </td>
                        <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 55), "html", null, true);
            echo " </td>
                        <td> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 56), "html", null, true);
            echo " </td>
                        <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 57), "html", null, true);
            echo " </td>
                        <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 58), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "zipcode", [], "any", false, false, false, 58), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 58), "html", null, true);
            echo " </td>
                        <td> <a class=\"btn btn-perso mb-1 mx-2\" href=\"\"> Modifier </a> <a class=\"btn btn-outline-perso mt-1 mx-2\" href=\"\"> Supprimer </a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
    </div>

    <h4><a class=\"my-2 btn btn-outline-danger\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_reviews");
        echo "\"> Avis clients</a></h4>
    <h4><a class=\"my-2 btn btn-outline-perso\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_stats");
        echo "\"> Statistiques </a></h4>
</section>

<a class=\"my-5 btn btn-perso\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Retour Accueil </a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 70,  213 => 67,  209 => 66,  203 => 62,  189 => 58,  185 => 57,  181 => 56,  177 => 55,  173 => 54,  169 => 53,  166 => 52,  162 => 51,  142 => 34,  138 => 33,  129 => 27,  125 => 26,  118 => 22,  114 => 21,  108 => 18,  104 => 17,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Tableau de bord
{% endblock title %}

{% block main %}

<p class=\"my-4\"> Vous êtes bien connecté en tant qu'<span class=\"text-color-perso\">administrateur</span> avec le mail : {{ app.user.userIdentifier }}</p>

<h3>Que souhaitez vous faire ? </h3>

<section>
    <h4 class=\"my-4 text-color-perso\"> Modifier le contenu du site </h4>

    <div class=\"my-4\">
        <a class='btn btn-outline-success' href=\"{{ path ('create_category')}}\"> Ajouter une catégorie</a>
        <a class='btn btn-success' href=\"{{ path ('show_category')}}\"> Voir les catégories</a>
    </div>
    <div class=\"my-4\">
        <a class='btn btn-outline-primary' href=\"{{ path ('create_product')}}\"> Ajouter un produit</a>
        <a class='btn btn-primary' href=\"{{ path ('show_product')}}\"> Voir tous les produits</a>
    </div>

    <div class=\"my-4\">
        <a class='btn btn-outline-secondary' href=\"{{ path ('create_article')}}\"> Ajouter un article du Blog</a>
        <a class='btn btn-secondary' href=\"{{ path ('show_article')}}\"> Voir les articles du blog</a>
    </div>
</section>

<section>
    <h4 class=\"my-4 text-color-perso\"> Consulter des données </h4>
    <h4><a class=\"my-2 btn btn-outline-info\" href=\"{{ path ('dashboard_orders')}}\"> Commandes Clients</a></h4>
    <h4><a class=\"my-2 btn btn-outline-dark\" href=\"{{ path ('dashboard_users')}}\"> Liste des utilisateurs </a></h4>

    <div class=\"container-fluid my-5\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">ID User</th>
                    <th scope=\"col\">Date d'inscription</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <th scope=\"row\"> {{ user.id }} </th>
                        <td> {{ user.registrationdate | date('d/m/Y') }} </td>
                        <td> {{ user.firstname }} </td>
                        <td> {{ user.lastname }} </td>
                        <td> {{ user.email }} </td>
                        <td> {{ user.address }}  {{ user.zipcode}}  {{ user.city}} </td>
                        <td> <a class=\"btn btn-perso mb-1 mx-2\" href=\"\"> Modifier </a> <a class=\"btn btn-outline-perso mt-1 mx-2\" href=\"\"> Supprimer </a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <h4><a class=\"my-2 btn btn-outline-danger\" href=\"{{ path ('dashboard_reviews')}}\"> Avis clients</a></h4>
    <h4><a class=\"my-2 btn btn-outline-perso\" href=\"{{ path ('dashboard_stats')}}\"> Statistiques </a></h4>
</section>

<a class=\"my-5 btn btn-perso\" href=\"{{ path ('home')}}\"> Retour Accueil </a>

{% endblock main %}", "admin/users.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\admin\\users.html.twig");
    }
}
