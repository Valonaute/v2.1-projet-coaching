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

/* mailer/inscription.html.twig */
class __TwigTemplate_ca04ae9b0202ba4d9fd069798fa324a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/inscription.html.twig"));

        // line 1
        echo "<h3 style=\"text-align: center;\">Bienvenue sur CoachingDevPerso.fr ! </h3>

<h4 style=\"text-align: center;\"> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "lastname", [], "any", false, false, false, 3), "html", null, true);
        echo " vous êtes bien inscrit sur notre site depuis le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "registrationdate", [], "any", false, false, false, 3), "d/m/Y"), "html", null, true);
        echo ", merci de votre confiance !</h4>

<p> Vous trouverez divers conseils et outils pour améliorer votre vie ! </p>

<p> Accédez directement à notre site maintenant : </p>

<a href=\"https://coachingdevperso.fr\">coachingdevperso.fr</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mailer/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 style=\"text-align: center;\">Bienvenue sur CoachingDevPerso.fr ! </h3>

<h4 style=\"text-align: center;\"> {{ user.firstname }} {{ user.lastname }} vous êtes bien inscrit sur notre site depuis le {{ user.registrationdate|date(\"d/m/Y\") }}, merci de votre confiance !</h4>

<p> Vous trouverez divers conseils et outils pour améliorer votre vie ! </p>

<p> Accédez directement à notre site maintenant : </p>

<a href=\"https://coachingdevperso.fr\">coachingdevperso.fr</a>
", "mailer/inscription.html.twig", "C:\\wamp64\\www\\symfony\\2.6.0 projet-coaching\\templates\\mailer\\inscription.html.twig");
    }
}
