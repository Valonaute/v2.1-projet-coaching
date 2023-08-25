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

/* admin/orders.html.twig */
class __TwigTemplate_4e7c60882fbc7fa533248f15aeb0705d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/orders.html.twig", 1);
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
    <h4><a class=\"my-2 btn btn-outline-info\" href=\"\"> Commandes Clients</a></h4>

    <div class=\"container-fluid my-5\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">ID commande</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Montant Total </th>
                    <th scope=\"col\">Statut</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 47
        $context["numorder"] = 0;
        // line 48
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 49
            echo "                ";
            $context["numorder"] = (($context["numorder"] ?? null) + 1);
            // line 50
            echo "                    <tr>
                        <th scope=\"row\"> ";
            // line 51
            echo twig_escape_filter($this->env, ($context["numorder"] ?? null), "html", null, true);
            echo " </th>
                        <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo " </td>
                        <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "dateorder", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
            echo " </td>
                        <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalamount", [], "any", false, false, false, 54), "html", null, true);
            echo " € </td>
                        <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 55), "html", null, true);
            echo " </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>
        </table>
    
    </div>

    <h4><a class=\"my-2 btn btn-outline-dark\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_users");
        echo "\"> Liste des utilisateurs </a></h4>
    <h4><a class=\"my-2 btn btn-outline-danger\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_reviews");
        echo "\"> Avis clients</a></h4>
    <h4><a class=\"my-2 btn btn-outline-perso\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_stats");
        echo "\"> Statistiques </a></h4>
</section>

<a class=\"my-5 btn btn-perso\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Retour Accueil </a>

";
    }

    public function getTemplateName()
    {
        return "admin/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 68,  175 => 65,  171 => 64,  167 => 63,  160 => 58,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  132 => 50,  129 => 49,  124 => 48,  122 => 47,  99 => 27,  95 => 26,  88 => 22,  84 => 21,  78 => 18,  74 => 17,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/orders.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\admin\\orders.html.twig");
    }
}
