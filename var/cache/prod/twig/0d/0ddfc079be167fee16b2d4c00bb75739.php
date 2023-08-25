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

/* public/valonauteinc.html.twig */
class __TwigTemplate_b090ccb5b58643848c599782f1e00dbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "public/valonauteinc.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "EasyWebfactory Inc.
";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"coontainer-fluid my-5\">

    <h3 class='my-3'> Plus d'infos sur la société EasyWebFactory INC. :</h3>
    <p> La société EasyWebFactory va être créer dès la fin de l'année 2023 après obtention d'un dîplome par l'un de ses fondateur !</p>
    <p> Elle proposera des services de création de site internet et d'applications mobiles. </p>
    <h4><a href=\"https://valentin-gautier.easywebfactory.com\" target='blank'>En savoir plus</a>  </h4>
</div>
";
    }

    public function getTemplateName()
    {
        return "public/valonauteinc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/valonauteinc.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\public\\valonauteinc.html.twig");
    }
}
