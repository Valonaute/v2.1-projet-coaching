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
class __TwigTemplate_8677b9954e34835636d255619bbd75e0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "stripe/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello StripeController!
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "\t\t\t\t\t\t\t<div style=\"color: green;
\t\t\t\t\t\t\t\tborder: 2px green solid;
\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\tpadding: 5px;margin-bottom: 10px;\">
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
        echo twig_escape_filter($this->env, ($context["stripe_key"] ?? null), "html", null, true);
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
        return array (  107 => 37,  88 => 21,  85 => 20,  76 => 17,  70 => 13,  66 => 12,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "stripe/index.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\stripe\\index.html.twig");
    }
}
