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

/* admin/users.html.twig */
class __TwigTemplate_68dbea02de8da9a73c4480f0559c0b7c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Tableau de bord
";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
<p class=\"my-4\"> Vous êtes bien connecté en tant qu'<span class=\"text-color-perso\">administrateur</span> avec le mail : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "userIdentifier", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>

<h3>Que souhaitez vous faire ? </h3>

<section>
    <h4 class=\"my-4 text-color-perso\"> Modifier le contenu du site </h4>

    <div class=\"my-4\">
        <a class='btn btn-outline-success' href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_category");
        echo "\"> Ajouter une catégorie</a>
        <a class='btn btn-success' href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category");
        echo "\"> Voir les catégories</a>
    </div>
    <div class=\"my-4\">
        <a class='btn btn-outline-primary' href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_product");
        echo "\"> Ajouter un produit</a>
        <a class='btn btn-primary' href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product");
        echo "\"> Voir tous les produits</a>
    </div>

    <div class=\"my-4\">
        <a class='btn btn-outline-secondary' href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_article");
        echo "\"> Ajouter un article du Blog</a>
        <a class='btn btn-secondary' href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_article");
        echo "\"> Voir les articles du blog</a>
    </div>
</section>

<section>
    <h4 class=\"my-4 text-color-perso\"> Consulter des données </h4>
    <h4><a class=\"my-2 btn btn-outline-info\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_orders");
        echo "\"> Commandes Clients</a></h4>
    <h4><a class=\"my-2 btn btn-outline-dark\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_users");
        echo "\"> Liste des utilisateurs </a></h4>

    <div class=\"container-fluid my-5\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">ID User</th>
                    <th scope=\"col\">Date d'inscription</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "                    <tr>
                        <th scope=\"row\"> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo " </th>
                        <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "registrationdate", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
            echo " </td>
                        <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 55), "html", null, true);
            echo " </td>
                        <td> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 56), "html", null, true);
            echo " </td>
                        <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 57), "html", null, true);
            echo " </td>
                        <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 58), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "zipcode", [], "any", false, false, false, 58), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 58), "html", null, true);
            echo " </td>
                        <td> <a class=\"btn btn-perso mb-1 mx-2\" href=\"\"> Modifier </a> <a class=\"btn btn-outline-perso mt-1 mx-2\" href=\"\"> Supprimer </a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
    </div>

    <h4><a class=\"my-2 btn btn-outline-danger\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_reviews");
        echo "\"> Avis clients</a></h4>
    <h4><a class=\"my-2 btn btn-outline-perso\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_stats");
        echo "\"> Statistiques </a></h4>
</section>

<a class=\"my-5 btn btn-perso\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Retour Accueil </a>

";
    }

    public function getTemplateName()
    {
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 70,  183 => 67,  179 => 66,  173 => 62,  159 => 58,  155 => 57,  151 => 56,  147 => 55,  143 => 54,  139 => 53,  136 => 52,  132 => 51,  112 => 34,  108 => 33,  99 => 27,  95 => 26,  88 => 22,  84 => 21,  78 => 18,  74 => 17,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/users.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\admin\\users.html.twig");
    }
}
