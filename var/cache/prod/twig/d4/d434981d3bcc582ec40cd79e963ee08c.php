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

/* security/account.html.twig */
class __TwigTemplate_85c50aece62d347fa14e12567441c5cc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/account.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Votre Compte";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h2 class=\"my-5\"> Bienvenue sur votre espace membre ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "firstname", [], "any", false, false, false, 7), "html", null, true);
        echo " !</h2>

<h3 class=\"my-4\"> Vous êtes inscrit depuis le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "registrationdate", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</h3>
<h3 class=\"text-perso\"> Voici les informations à propos de votre compte : </h3>

<table class=\"table mx-auto\" style=\"width:40vw\">
    <thead>
        <tr>
            <th>Catégorie</th>
            <th>Information</th>
        </tr>
    </thead>
    <tbody >
            <tr>
                <td>Prénom </td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <td>Nom </td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "lastname", [], "any", false, false, false, 26), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
        echo " </td>
            </tr>
            <tr>
                <td>Role  </td>
                <td>";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " Administrateur ";
        } else {
            echo " Utilisateur ";
        }
        echo "</td>
            </tr>
            <tr>
                <td>Adresse </td>
                <td>";
        // line 38
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "address", [], "any", false, false, false, 38))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "address", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <td>Code postal  </td>
                <td>";
        // line 42
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42), "zipcode", [], "any", false, false, false, 42))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42), "zipcode", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <td>Ville </td>
                <td>";
        // line 46
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "city", [], "any", false, false, false, 46))) {
            echo " N/A ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "city", [], "any", false, false, false, 46), "html", null, true);
            echo " ";
        }
        echo " </td>
            </tr>
    </tbody>
</table>  

<a class=\"btn btn-perso my-5\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_account");
        echo "\">Modifier le compte</a>

<h3 class=\"text-perso\"> Voici votre historique de commande : </h3>

<div class=\"container-fluid my-5\">
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">ID commande</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Montant Total </th>
                <th scope=\"col\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 67
        $context["numorder"] = 0;
        // line 68
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 69
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 69) == "PAID")) {
                // line 70
                echo "            ";
                $context["numorder"] = (($context["numorder"] ?? null) + 1);
                // line 71
                echo "                <tr>
                    <th scope=\"row\"> ";
                // line 72
                echo twig_escape_filter($this->env, ($context["numorder"] ?? null), "html", null, true);
                echo " </th>
                    <td> ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo " </td>
                    <td> ";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "dateorder", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
                echo " </td>
                    <td> ";
                // line 75
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalamount", [], "any", false, false, false, 75), 2, ",", " "), "html", null, true);
                echo " € </td>
                    <td>  <a class=\"btn btn-perso mx-1\" href=\" ";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_create", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\"> Laisser un Avis</a><a class=\"btn btn-outline-perso mx-1\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_show_one", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\">Voir l'avis</a></td>
                </tr>
            ";
            }
            // line 79
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </tbody>
    </table>

</div>
<a class=\"btn btn-outline-perso my-5\" id=\"confirm-box-button\" onclick=\" return confirm('Confirmez vous la suppression de votre compte ?')\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account");
        echo "\">Supprimer votre compte</a>
";
    }

    public function getTemplateName()
    {
        return "security/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 84,  219 => 80,  213 => 79,  205 => 76,  201 => 75,  197 => 74,  193 => 73,  189 => 72,  186 => 71,  183 => 70,  180 => 69,  175 => 68,  173 => 67,  154 => 51,  140 => 46,  127 => 42,  114 => 38,  103 => 34,  96 => 30,  89 => 26,  82 => 22,  66 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/account.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\security\\account.html.twig");
    }
}
