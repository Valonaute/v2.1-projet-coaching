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

/* @CHCookieConsent/cookie_consent_styling.html.twig */
class __TwigTemplate_96b89d3477d505b300d78c6670d21776 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('style', $context, $blocks);
    }

    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/chcookieconsent/css/cookie_consent.css"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "@CHCookieConsent/cookie_consent_styling.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CHCookieConsent/cookie_consent_styling.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\vendor\\connectholland\\cookie-consent-bundle\\Resources\\views\\cookie_consent_styling.html.twig");
    }
}
