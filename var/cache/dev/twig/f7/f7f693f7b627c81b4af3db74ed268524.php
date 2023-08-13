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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "roles", [], "any", false, false, false, 44))) {
            echo " Utilisateur ";
        } else {
            echo " Administrateur ";
        }
        echo "</td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
                </td>
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
        return array (  191 => 67,  174 => 59,  157 => 51,  143 => 44,  133 => 37,  123 => 30,  113 => 23,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <td>{% if app.user.roles is empty %} Utilisateur {% else %} Administrateur {% endif %}</td>
                <td>
                    <a class=\"btn btn-perso\" href=\"\">Modifier</a>
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

<a class=\"btn btn-outline-perso my-5\" href=\"\">Supprimer votre compte</a>
{% endblock content %}


", "security/account.html.twig", "C:\\wamp64\\www\\symfony\\2.4.0 projet-coaching\\templates\\security\\account.html.twig");
    }
}
