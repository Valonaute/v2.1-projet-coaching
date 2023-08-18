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

/* test_stripe/index.html.twig */
class __TwigTemplate_6b5a5f3ad4323b125cf24574ce2ecd03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_stripe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_stripe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test_stripe/index.html.twig", 1);
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

        echo "My-Shop : panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container mt-4\">
    <h1>Votre panier</h1>

    ";
        // line 10
        echo twig_var_dump($this->env, $context, ...[0 => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })())]);
        echo "

    ";
        // line 12
        if (twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "    <p><b>Votre panier est vide !!</b></p>
    ";
        } else {
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_clear");
            echo "\" onclick=\"return confirm('Etes-vous sure de vouloir vider tout le panier ?');\" class=\"btn btn-warning mb-2\">
        <i class=\"bi-trash-fill me-1\"></i> Vider le panier
    </a>
    <table class=\"table table-dark table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Prix (€)</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "            <tr>
                <th scope=\"row\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
                echo "</th>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "price", [], "any", false, false, false, 34), 2, ",", " "), "html", null, true);
                echo " €</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36)), 2, ",", " "), "html", null, true);
                echo " €</td>
                <td>
                    <a class=\"btn btn-danger flex-shrink-0\" onclick=\"return confirm('Suppimer cet élément du panier ?');\" href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
                        <i class=\"bi-trash-fill me-1\"></i>
                    </a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">TOTAL</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 49, $this->source); })()), 2, ",", " "), "html", null, true);
            echo " €</td>
                <td>
                    <form action=\"/checkout\" method=\"post\">
                        <button class=\"btn btn-primary\" type=\"submit\">PAYER</button>
                    </form>
                </td>
            </tr>
        </tfoot>
    </table>
    ";
        }
        // line 59
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "test_stripe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  174 => 49,  170 => 48,  164 => 44,  152 => 38,  147 => 36,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  128 => 31,  124 => 30,  105 => 15,  101 => 13,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My-Shop : panier{% endblock %}

{% block body %}

<div class=\"container mt-4\">
    <h1>Votre panier</h1>

    {{ dump(items) }}

    {% if items is empty %}
    <p><b>Votre panier est vide !!</b></p>
    {% else %}
    <a href=\"{{ path('cart_clear') }}\" onclick=\"return confirm('Etes-vous sure de vouloir vider tout le panier ?');\" class=\"btn btn-warning mb-2\">
        <i class=\"bi-trash-fill me-1\"></i> Vider le panier
    </a>
    <table class=\"table table-dark table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Prix (€)</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for item in items %}
            <tr>
                <th scope=\"row\">{{ item.product.id }}</th>
                <td>{{ item.product.title }}</td>
                <td>{{ item.product.price|number_format(2,',',' ') }} €</td>
                <td>{{ item.quantity }}</td>
                <td>{{ (item.product.price * item.quantity)|number_format(2,',',' ') }} €</td>
                <td>
                    <a class=\"btn btn-danger flex-shrink-0\" onclick=\"return confirm('Suppimer cet élément du panier ?');\" href=\"{{ path('cart_delete', {id: item.product.id})}}\">
                        <i class=\"bi-trash-fill me-1\"></i>
                    </a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">TOTAL</td>
                <td>{{ totalQuantity }}</td>
                <td>{{ total|number_format(2,',',' ') }} €</td>
                <td>
                    <form action=\"/checkout\" method=\"post\">
                        <button class=\"btn btn-primary\" type=\"submit\">PAYER</button>
                    </form>
                </td>
            </tr>
        </tfoot>
    </table>
    {% endif %}
</div>
{% endblock %}
", "test_stripe/index.html.twig", "C:\\wamp64\\www\\symfony\\2.6.0 projet-coaching\\templates\\test_stripe\\index.html.twig");
    }
}
