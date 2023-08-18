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

/* mailer/successOrder.html.twig */
class __TwigTemplate_f0c2ec9b5eb487b859f5b5ea9a588df1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/successOrder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/successOrder.html.twig"));

        // line 1
        echo "<h3 style=\"text-align: center;\">Merci pour votre commande sur CoachingDevPerso.fr ! </h3>

<h4 style=\"text-align: center;\"> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "lastname", [], "any", false, false, false, 3), "html", null, true);
        echo " votre commande sur notre site a bien été validée, merci de votre confiance !</h4>

<p> Vous trouverez si joint un récapitulatif de vos achats : </p>

<table class=\"table\">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 21), "html", null, true);
            echo " €</td>
                <td> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 22), "html", null, true);
            echo " </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </tbody>
    
</table>  

<p> Accédez directement à notre site maintenant : </p>

<a href=\"https://coachingdevperso.fr\">coachingdevperso.fr</a>

<p> L'équipe CoachingDevPerso.fr</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mailer/successOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  70 => 18,  66 => 17,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 style=\"text-align: center;\">Merci pour votre commande sur CoachingDevPerso.fr ! </h3>

<h4 style=\"text-align: center;\"> {{ app.user.firstname }} {{ app.user.lastname }} votre commande sur notre site a bien été validée, merci de votre confiance !</h4>

<p> Vous trouverez si joint un récapitulatif de vos achats : </p>

<table class=\"table\">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>
    </thead>
    <tbody>
        {% for item in items %}
            <tr>
                <td>{{ item.title }}</td>
                <td>{{ item.description }}</td>
                <td>{{ item.price }} €</td>
                <td> {{ item.quantity }} </td>
            </tr>
        {% endfor %}
    </tbody>
    
</table>  

<p> Accédez directement à notre site maintenant : </p>

<a href=\"https://coachingdevperso.fr\">coachingdevperso.fr</a>

<p> L'équipe CoachingDevPerso.fr</p>", "mailer/successOrder.html.twig", "C:\\wamp64\\www\\symfony\\2.6.0 projet-coaching\\templates\\mailer\\successOrder.html.twig");
    }
}
