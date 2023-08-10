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

/* purchase/payment.html.twig */
class __TwigTemplate_3a7f72f5457f1917464ba8c3372a139d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/payment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "purchase/payment.html.twig", 1);
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

        echo "Hello StripeController!";
        
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
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                            <div 
                                style=\"color: green;
                                    border: 2px green solid;
                                    text-align: center;
                                    padding: 5px;margin-bottom: 10px;\">
                                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  
                        <form id='checkout-form' method='post' action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge");
        echo "\">             
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                            <label for=\"card-element\" class=\"mb-5\">Checkout Forms</label>
                            <br>
                            <div id=\"card-element\" class=\"form-control\" ></div>
                            <button 
                                id='pay-btn'
                                class=\"btn btn-success mt-3\"
                                type=\"button\"
                                style=\"margin-top: 20px; width: 100%;padding: 7px;\"
                                onclick=\"createToken()\">PAY ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "
                            </button>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
     
                     
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    alert(result.error.message);
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
</body>
</html>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
     
                     
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    alert(result.error.message);
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "purchase/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 70,  145 => 42,  131 => 31,  118 => 21,  115 => 20,  106 => 17,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StripeController!{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        {% for message in app.flashes('success') %}
                            <div 
                                style=\"color: green;
                                    border: 2px green solid;
                                    text-align: center;
                                    padding: 5px;margin-bottom: 10px;\">
                                {{ message }}
                            </div>
                        {% endfor %}
  
                        <form id='checkout-form' method='post' action=\"{{ path('app_stripe_charge') }}\">             
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                            <label for=\"card-element\" class=\"mb-5\">Checkout Forms</label>
                            <br>
                            <div id=\"card-element\" class=\"form-control\" ></div>
                            <button 
                                id='pay-btn'
                                class=\"btn btn-success mt-3\"
                                type=\"button\"
                                style=\"margin-top: 20px; width: 100%;padding: 7px;\"
                                onclick=\"createToken()\">PAY {{ amount }}
                            </button>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"{{stripe_key}}\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
     
                     
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    alert(result.error.message);
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
</body>
</html>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"{{stripe_key}}\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
     
                     
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    alert(result.error.message);
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
{% endblock %}", "purchase/payment.html.twig", "C:\\wamp64\\www\\symfony\\projet-coaching-V1.4\\templates\\purchase\\payment.html.twig");
    }
}
