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

/* review/showOne.html.twig */
class __TwigTemplate_21d85a38086fb1dd1042fdad271a6331 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "review/showOne.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Avis client N°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), 0, [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h2 class=\"my-5 text-perso\"> Voici l'avis client N° ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), 0, [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        echo " : </h2>

<h3> Pseudo : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), 0, [], "any", false, false, false, 9), "pseudo", [], "any", false, false, false, 9), "html", null, true);
        echo " </h3>

<h4> Titre de l'avis : \"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), 0, [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "\" </h4>

<h5 class=\"mt-5\"> Contenu de l'avis : </h5>
<p> \"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), 0, [], "any", false, false, false, 14), "comment", [], "any", false, false, false, 14), "html", null, true);
        echo "\" </p>

<h5 class=\"mt-5\"> Note : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), 0, [], "any", false, false, false, 16), "rating", [], "any", false, false, false, 16), "html", null, true);
        echo " / 10 </h5>

<h5> Date : Laissé le ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), 0, [], "any", false, false, false, 18), "date", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo " </h5>


<a class=\"btn btn-perso my-5\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\"> Aller à la boutique </a>
";
    }

    public function getTemplateName()
    {
        return "review/showOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  89 => 18,  84 => 16,  79 => 14,  73 => 11,  68 => 9,  63 => 7,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "review/showOne.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\review\\showOne.html.twig");
    }
}
