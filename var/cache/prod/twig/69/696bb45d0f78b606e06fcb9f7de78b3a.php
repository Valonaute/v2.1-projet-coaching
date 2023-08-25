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

/* product/showfront.html.twig */
class __TwigTemplate_733ef76e72b40478e41e057954aa3ca1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/showfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container-fluid my-5\">
    <div class=\"row\">
        <div class=\"col-6\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), 0, [], "any", false, false, false, 7), "image", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-6\">
            <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), 0, [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
            <p>Prix : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), 0, [], "any", false, false, false, 11), "price", [], "any", false, false, false, 11), "html", null, true);
        echo " €<p>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), 0, [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), 0, [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"btn btn-perso my-5\"> Ajouter au panier</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/showfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  70 => 12,  66 => 11,  62 => 10,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/showfront.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\product\\showfront.html.twig");
    }
}
