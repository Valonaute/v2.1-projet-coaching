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

/* security/account.html.twig */
class __TwigTemplate_d4701726f73c2599a5c60ded28117df3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/account.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/account.html.twig", 1);
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

        echo " Votre Compte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<h2 class=\"my-5\"> Bienvenue sur votre espace membre ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "firstname", [], "any", false, false, false, 7), "html", null, true);
        echo " !</h2>

<h3 class=\"my-4\"> Vous êtes inscrit depuis le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "registrationdate", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</h3>
<h3 class=\"text-perso\"> Voici les informations à propos de votre compte : </h3>

<table class=\"table\">
    <thead>
        <tr>
            <th>Catégorie</th>
            <th>Information</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Prénom </td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "firstname", [], "any", false, false, false, 23), "html", null, true);
        echo " </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                </td>
            </tr>
            <tr>
                <td>Nom </td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "lastname", [], "any", false, false, false, 30), "html", null, true);
        echo " </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true);
        echo " </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                </td>
            </tr>
            <tr>
                <td>Role  </td>
                <td>";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " Administrateur ";
        } else {
            echo " Utilisateur ";
        }
        echo "</td>
                <td>
                    ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " <a class=\"btn btn-perso\" href=\"\">Modifier</a> ";
        }
        // line 47
        echo "                </td>
            </tr>
            <tr>
                <td>Adresse </td>
                <td>";
        // line 51
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "address", [], "any", false, false, false, 51))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "address", [], "any", false, false, false, 51), "html", null, true);
            echo " ";
        }
        echo "</td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                    <a class=\"btn btn-outline-perso\" href=\"\">Supprimer</a>
                </td>
            </tr>
            <tr>
                <td>Code postal  </td>
                <td>";
        // line 59
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "zipcode", [], "any", false, false, false, 59))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "zipcode", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
        }
        echo "</td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                    <a class=\"btn btn-outline-perso\" href=\"\">Supprimer</a>
                </td>
            </tr>
            <tr>
                <td>Ville </td>
                <td>";
        // line 67
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "city", [], "any", false, false, false, 67))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "city", [], "any", false, false, false, 67), "html", null, true);
            echo " ";
        }
        echo " </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                    <a class=\"btn btn-outline-perso\" href=\"\">Supprimer</a>
                </td>
            </tr>
    </tbody>
</table>  

<h3 class=\"text-perso\"> Voici votre historique de commande : </h3>

<div class=\"container my-5\">
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">ID commande</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Montant Total </th>
                <th scope=\"col\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 90
        $context["numorder"] = 0;
        // line 91
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 92
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 92) == "PAID")) {
                // line 93
                echo "            ";
                $context["numorder"] = ((isset($context["numorder"]) || array_key_exists("numorder", $context) ? $context["numorder"] : (function () { throw new RuntimeError('Variable "numorder" does not exist.', 93, $this->source); })()) + 1);
                // line 94
                echo "                <tr>
                    <th scope=\"row\"> ";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["numorder"]) || array_key_exists("numorder", $context) ? $context["numorder"] : (function () { throw new RuntimeError('Variable "numorder" does not exist.', 95, $this->source); })()), "html", null, true);
                echo " </th>
                    <td> ";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 96), "html", null, true);
                echo " </td>
                    <td> ";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "dateorder", [], "any", false, false, false, 97), "d/m/Y"), "html", null, true);
                echo " </td>
                    <td> ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalamount", [], "any", false, false, false, 98), "html", null, true);
                echo " € </td>
                    <td>  <a class=\"btn btn-perso mx-1\" href=\" ";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_create", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\"> Laisser Avis</a><a class=\"btn btn-outline-perso mx-1\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show_one", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">Voir l'avis</a></td>
                </tr>
            ";
            }
            // line 102
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </tbody>
    </table>

</div>
<a class=\"btn btn-outline-perso my-5\" href=\"\">Supprimer votre compte</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 103,  268 => 102,  260 => 99,  256 => 98,  252 => 97,  248 => 96,  244 => 95,  241 => 94,  238 => 93,  235 => 92,  230 => 91,  228 => 90,  196 => 67,  179 => 59,  162 => 51,  156 => 47,  152 => 46,  143 => 44,  133 => 37,  123 => 30,  113 => 23,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Votre Compte{% endblock title %} 

{% block content %}

<h2 class=\"my-5\"> Bienvenue sur votre espace membre {{ app.user.firstname }} !</h2>

<h3 class=\"my-4\"> Vous êtes inscrit depuis le {{ app.user.registrationdate|date('d/m/Y')}}</h3>
<h3 class=\"text-perso\"> Voici les informations à propos de votre compte : </h3>

<table class=\"table\">
    <thead>
        <tr>
            <th>Catégorie</th>
            <th>Information</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Prénom </td>
                <td>{{ app.user.firstname }} </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                </td>
            </tr>
            <tr>
                <td>Nom </td>
                <td>{{ app.user.lastname }} </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>{{ app.user.email }} </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                </td>
            </tr>
            <tr>
                <td>Role  </td>
                <td>{% if is_granted('ROLE_ADMIN') %} Administrateur {% else %} Utilisateur {% endif %}</td>
                <td>
                    {% if is_granted('ROLE_ADMIN') %} <a class=\"btn btn-perso\" href=\"\">Modifier</a> {% endif %}
                </td>
            </tr>
            <tr>
                <td>Adresse </td>
                <td>{% if app.user.address is empty %} N/A {% else %} {{ app.user.address }} {% endif %}</td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                    <a class=\"btn btn-outline-perso\" href=\"\">Supprimer</a>
                </td>
            </tr>
            <tr>
                <td>Code postal  </td>
                <td>{% if app.user.zipcode is empty %} N/A {% else %} {{ app.user.zipcode }} {% endif %}</td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                    <a class=\"btn btn-outline-perso\" href=\"\">Supprimer</a>
                </td>
            </tr>
            <tr>
                <td>Ville </td>
                <td>{% if app.user.city is empty %} N/A {% else %} {{ app.user.city }} {% endif %} </td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                    <a class=\"btn btn-outline-perso\" href=\"\">Supprimer</a>
                </td>
            </tr>
    </tbody>
</table>  

<h3 class=\"text-perso\"> Voici votre historique de commande : </h3>

<div class=\"container my-5\">
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">ID commande</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Montant Total </th>
                <th scope=\"col\">Action</th>
            </tr>
        </thead>
        <tbody>
            {% set numorder = 0 %}
            {% for order in orders %}
            {% if order.statut == 'PAID' %}
            {% set numorder = numorder + 1 %}
                <tr>
                    <th scope=\"row\"> {{ numorder }} </th>
                    <td> {{ order.id }} </td>
                    <td> {{ order.dateorder | date('d/m/Y') }} </td>
                    <td> {{ order.totalamount }} € </td>
                    <td>  <a class=\"btn btn-perso mx-1\" href=\" {{ path ('review_create', {id: order.id})}}\"> Laisser Avis</a><a class=\"btn btn-outline-perso mx-1\" href=\"{{ path ('review_show_one', {id: order.id})}}\">Voir l'avis</a></td>
                </tr>
            {% endif %}
            {% endfor %}
        </tbody>
    </table>

</div>
<a class=\"btn btn-outline-perso my-5\" href=\"\">Supprimer votre compte</a>
{% endblock content %}


", "security/account.html.twig", "C:\\wamp64\\www\\symfony\\2.6.0 projet-coaching\\templates\\security\\account.html.twig");
    }
}
