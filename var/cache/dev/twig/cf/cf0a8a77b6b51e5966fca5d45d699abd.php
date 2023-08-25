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
class __TwigTemplate_c81d11da530b1b9353ef38beafc26693 extends Template
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

<table class=\"table mx-auto\" style=\"width:40vw\">
    <thead>
        <tr>
            <th>Catégorie</th>
            <th>Information</th>
        </tr>
    </thead>
    <tbody >
            <tr>
                <td>Prénom </td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <td>Nom </td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "lastname", [], "any", false, false, false, 26), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <td>Role  </td>
                <td>";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " Administrateur ";
        } else {
            echo " Utilisateur ";
        }
        echo "</td>
            </tr>
            <tr>
                <td>Adresse </td>
                <td>";
        // line 38
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "address", [], "any", false, false, false, 38))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "address", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <td>Code postal  </td>
                <td>";
        // line 42
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "zipcode", [], "any", false, false, false, 42))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "zipcode", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <td>Ville </td>
                <td>";
        // line 46
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "city", [], "any", false, false, false, 46))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "city", [], "any", false, false, false, 46), "html", null, true);
            echo " ";
        }
        echo " </td>
            </tr>
    </tbody>
</table>  

<a class=\"btn btn-perso my-5\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_account");
        echo "\">Modifier le compte</a>

<h3 class=\"text-perso\"> Voici votre historique de commande : </h3>

<div class=\"container-fluid my-5\">
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
        // line 67
        $context["numorder"] = 0;
        // line 68
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 69
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 69) == "PAID")) {
                // line 70
                echo "            ";
                $context["numorder"] = ((isset($context["numorder"]) || array_key_exists("numorder", $context) ? $context["numorder"] : (function () { throw new RuntimeError('Variable "numorder" does not exist.', 70, $this->source); })()) + 1);
                // line 71
                echo "                <tr>
                    <th scope=\"row\"> ";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["numorder"]) || array_key_exists("numorder", $context) ? $context["numorder"] : (function () { throw new RuntimeError('Variable "numorder" does not exist.', 72, $this->source); })()), "html", null, true);
                echo " </th>
                    <td> ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo " </td>
                    <td> ";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "dateorder", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
                echo " </td>
                    <td> ";
                // line 75
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalamount", [], "any", false, false, false, 75), 2, ",", " "), "html", null, true);
                echo " € </td>
                    <td>  <a class=\"btn btn-perso mx-1\" href=\" ";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_create", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\"> Laisser un Avis</a><a class=\"btn btn-outline-perso mx-1\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show_one", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\">Voir l'avis</a></td>
                </tr>
            ";
            }
            // line 79
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </tbody>
    </table>

</div>
<a class=\"btn btn-outline-perso my-5\" id=\"confirm-box-button\" onclick=\" return confirm('Confirmez vous la suppression de votre compte ?')\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account");
        echo "\">Supprimer votre compte</a>
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
        return array (  255 => 84,  249 => 80,  243 => 79,  235 => 76,  231 => 75,  227 => 74,  223 => 73,  219 => 72,  216 => 71,  213 => 70,  210 => 69,  205 => 68,  203 => 67,  184 => 51,  170 => 46,  157 => 42,  144 => 38,  133 => 34,  126 => 30,  119 => 26,  112 => 22,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Votre Compte{% endblock title %} 

{% block content %}

<h2 class=\"my-5\"> Bienvenue sur votre espace membre {{ app.user.firstname }} !</h2>

<h3 class=\"my-4\"> Vous êtes inscrit depuis le {{ app.user.registrationdate|date('d/m/Y')}}</h3>
<h3 class=\"text-perso\"> Voici les informations à propos de votre compte : </h3>

<table class=\"table mx-auto\" style=\"width:40vw\">
    <thead>
        <tr>
            <th>Catégorie</th>
            <th>Information</th>
        </tr>
    </thead>
    <tbody >
            <tr>
                <td>Prénom </td>
                <td>{{ app.user.firstname }} </td>
            </tr>
            <tr>
                <td>Nom </td>
                <td>{{ app.user.lastname }} </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>{{ app.user.email }} </td>
            </tr>
            <tr>
                <td>Role  </td>
                <td>{% if is_granted('ROLE_ADMIN') %} Administrateur {% else %} Utilisateur {% endif %}</td>
            </tr>
            <tr>
                <td>Adresse </td>
                <td>{% if app.user.address is empty %} N/A {% else %} {{ app.user.address }} {% endif %}</td>
            </tr>
            <tr>
                <td>Code postal  </td>
                <td>{% if app.user.zipcode is empty %} N/A {% else %} {{ app.user.zipcode }} {% endif %}</td>
            </tr>
            <tr>
                <td>Ville </td>
                <td>{% if app.user.city is empty %} N/A {% else %} {{ app.user.city }} {% endif %} </td>
            </tr>
    </tbody>
</table>  

<a class=\"btn btn-perso my-5\" href=\"{{ path ('update_account')}}\">Modifier le compte</a>

<h3 class=\"text-perso\"> Voici votre historique de commande : </h3>

<div class=\"container-fluid my-5\">
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
                    <td> {{ order.totalamount|number_format(2, ',', ' ') }} € </td>
                    <td>  <a class=\"btn btn-perso mx-1\" href=\" {{ path ('review_create', {id: order.id})}}\"> Laisser un Avis</a><a class=\"btn btn-outline-perso mx-1\" href=\"{{ path ('review_show_one', {id: order.id})}}\">Voir l'avis</a></td>
                </tr>
            {% endif %}
            {% endfor %}
        </tbody>
    </table>

</div>
<a class=\"btn btn-outline-perso my-5\" id=\"confirm-box-button\" onclick=\" return confirm('Confirmez vous la suppression de votre compte ?')\" href=\"{{ path ('delete_account')}}\">Supprimer votre compte</a>
{% endblock content %}


", "security/account.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\security\\account.html.twig");
    }
}
