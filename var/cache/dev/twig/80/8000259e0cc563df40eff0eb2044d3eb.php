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

/* product/show.html.twig */
class __TwigTemplate_d1290930b2e397b190590af5ea8cf824 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container-fluid my-5\">
  <table class=\"table\">
    <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Titre article</th>
        <th scope=\"col\">Petite description</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Image</th>
        <th scope=\"col\">Categorie</th>
        <th scope=\"col\">Actions</th>
      </tr>
    </thead>
    
    <tbody>
      
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 23
            echo "      <tr>
        <th scope=\"row\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</th>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "shortdescription", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
        <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 29), "html", null, true);
            echo "\" width=\"70\"></td>
        
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "idcategory", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td> 
        
        <td>
          <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-success m-2\">Voir</a>
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary m-2\">modifier</a>
          <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-danger m-2\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ?');\">supprimer</a>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
  </table>
  <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_product");
        echo "\" class=\"btn btn-success\">Créer votre produit</a>
  <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product");
        echo "\" class=\"btn btn-primary\">Voir Tous les produit</a>
</div>
  
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 43,  148 => 42,  144 => 40,  134 => 36,  130 => 35,  126 => 34,  120 => 31,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  91 => 23,  87 => 22,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block content %}
<div class=\"container-fluid my-5\">
  <table class=\"table\">
    <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Titre article</th>
        <th scope=\"col\">Petite description</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Prix</th>
        <th scope=\"col\">Image</th>
        <th scope=\"col\">Categorie</th>
        <th scope=\"col\">Actions</th>
      </tr>
    </thead>
    
    <tbody>
      
      {% for product in products %}
      <tr>
        <th scope=\"row\">{{product.id }}</th>
        <td>{{ product.title }}</td>
        <td>{{ product.shortdescription }}</td>
        <td>{{ product.description }}</td>
        <td>{{ product.price }}</td>
        <td><img src=\"{{ asset('uploads/')}}{{ product.image }}\" width=\"70\"></td>
        
        <td>{{ product.idcategory.name }}</td> 
        
        <td>
          <a href=\"{{ path('front_product', {id: product.id})}}\" class=\"btn btn-success m-2\">Voir</a>
          <a href=\"{{ path('update_product', {id: product.id})}}\" class=\"btn btn-primary m-2\">modifier</a>
          <a href=\"{{ path('delete_product', {id: product.id})}}\" class=\"btn btn-danger m-2\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ?');\">supprimer</a>
        </td>
      </tr>
      {% endfor %}
    </tbody>
  </table>
  <a href=\"{{ path('create_product')}}\" class=\"btn btn-success\">Créer votre produit</a>
  <a href=\"{{ path('show_product')}}\" class=\"btn btn-primary\">Voir Tous les produit</a>
</div>
  
  {%  endblock %}", "product/show.html.twig", "C:\\wamp64\\www\\symfony\\2.6.1 projet-coaching prod\\templates\\product\\show.html.twig");
    }
}
