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
class __TwigTemplate_132e0d0865cb10fd714fe3bbc1420a86 extends Template
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
        // line 1
        echo "<h3 style=\"text-align: center;\">Bienvenue sur CoachingDevPerso.fr ! </h3>

<h4 style=\"text-align: center;\"> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 3), "html", null, true);
        echo " vous êtes bien inscrit sur notre site depuis le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "registrationdate", [], "any", false, false, false, 3), "d/m/Y"), "html", null, true);
        echo ", merci de votre confiance !</h4>

<p> Vous trouverez divers conseils et outils pour améliorer votre vie ! </p>

<p> Accédez directement à notre site maintenant : </p>

<a href=\"https://coaching-devperso.easywebfactory.com\">Coaching-devperso</a>
";
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
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailer/inscription.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\mailer\\inscription.html.twig");
    }
}
