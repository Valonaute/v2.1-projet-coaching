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

/* stripe/index.html.twig */
class __TwigTemplate_408ce5155bfc46f5cf00e59535522d56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stripe/index.html.twig", 1);
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

        echo "Hello StripeController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "\t\t\t\t\t\t\t<div style=\"color: green;
\t\t\t\t\t\t\t\t\t                                    border: 2px green solid;
\t\t\t\t\t\t\t\t\t                                    text-align: center;
\t\t\t\t\t\t\t\t\t                                    padding: 5px;margin-bottom: 10px;\">
\t\t\t\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t\t\t\t\t\t<form id='checkout-form' method='post' action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge");
        echo "\">
\t\t\t\t\t\t\t<input type='hidden' name='stripeToken' id='stripe-token-id'>
\t\t\t\t\t\t\t<label for=\"card-element\" class=\"mb-5\">Checkout Forms</label>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"adress\"></div>
\t\t\t\t\t\t\t<div id=\"card-element\" class=\"form-control\"></div>
\t\t\t\t\t\t\t<button id='pay-btn' class=\"btn btn-success mt-3\" type=\"button\" style=\"margin-top: 20px; width: 100%;padding: 7px;\" onclick=\"createToken()\">PAY
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<form></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t<script>
\t\t\t\tvar stripe = Stripe(\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\");
var elements = stripe.elements();
var cardElement = elements.create('card');
cardElement.mount('#card-element');
const adressElement = elements.create('address', {
  mode: 'shipping'});
adressElement.mount(\"#adress\");

function createToken() {
document.getElementById(\"pay-btn\").disabled = true;
stripe.createToken(cardElement).then(function (result) {


if (typeof result.error != 'undefined') {
document.getElementById(\"pay-btn\").disabled = false;
alert(result.error.message);
}

// creating token success
if (typeof result.token != 'undefined') {
document.getElementById(\"stripe-token-id\").value = result.token.id;
document.getElementById('checkout-form').submit();

}
});
}
\t\t\t</script>
\t\t</body>
\t</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stripe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  118 => 21,  115 => 20,  106 => 17,  100 => 13,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StripeController!
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t\t\t<div style=\"color: green;
\t\t\t\t\t\t\t\t\t                                    border: 2px green solid;
\t\t\t\t\t\t\t\t\t                                    text-align: center;
\t\t\t\t\t\t\t\t\t                                    padding: 5px;margin-bottom: 10px;\">
\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t<form id='checkout-form' method='post' action=\"{{ path('app_stripe_charge') }}\">
\t\t\t\t\t\t\t<input type='hidden' name='stripeToken' id='stripe-token-id'>
\t\t\t\t\t\t\t<label for=\"card-element\" class=\"mb-5\">Checkout Forms</label>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"adress\"></div>
\t\t\t\t\t\t\t<div id=\"card-element\" class=\"form-control\"></div>
\t\t\t\t\t\t\t<button id='pay-btn' class=\"btn btn-success mt-3\" type=\"button\" style=\"margin-top: 20px; width: 100%;padding: 7px;\" onclick=\"createToken()\">PAY
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<form></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t<script>
\t\t\t\tvar stripe = Stripe(\"{{ stripe_key }}\");
var elements = stripe.elements();
var cardElement = elements.create('card');
cardElement.mount('#card-element');
const adressElement = elements.create('address', {
  mode: 'shipping'});
adressElement.mount(\"#adress\");

function createToken() {
document.getElementById(\"pay-btn\").disabled = true;
stripe.createToken(cardElement).then(function (result) {


if (typeof result.error != 'undefined') {
document.getElementById(\"pay-btn\").disabled = false;
alert(result.error.message);
}

// creating token success
if (typeof result.token != 'undefined') {
document.getElementById(\"stripe-token-id\").value = result.token.id;
document.getElementById('checkout-form').submit();

}
});
}
\t\t\t</script>
\t\t</body>
\t</html>
{% endblock %}
", "stripe/index.html.twig", "C:\\wamp64\\www\\symfony\\projet-coaching-V1.4\\templates\\stripe\\index.html.twig");
    }
}
