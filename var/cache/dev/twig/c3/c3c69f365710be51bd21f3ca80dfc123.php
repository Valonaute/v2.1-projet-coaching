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

/* base.html.twig */
class __TwigTemplate_e917e0f0ed044a3da7ad1ae32c6496e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\" ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon.png"), "html", null, true);
        echo "\">
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha384-ezfmEM0AQA4VvACr2X9O8t4XHzlFnmdvi5EWf5Fv0H8eVhUom8sGNclbxFfmL9Rn\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
        
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\" defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js\">
        </script>
        <script src=\"https://kit.fontawesome.com/100a24dea8.js\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
    </head>
    <body>
        <header>
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-line.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"logo\" height=\"80px\"></a>
            <nav class=\"nav-desktop\">
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Boutique</a>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a>
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\"> Forum </a>
                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" id='account-link'><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='account-logo'></a>
                <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_show");
            echo "\" id='cart-link'>
                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill badge-perso\">
                        ";
            // line 38
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "get", [0 => "cart"], "method", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "get", [0 => "cart"], "method", false, false, false, 38)), "html", null, true))) : (print ("0")));
            echo "
                    </span>
                </a>
                ";
        } else {
            // line 42
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                ";
        }
        // line 44
        echo "                
                ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "                <a class=\"btn btn-perso\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Tableau de Bord</a>
                ";
        }
        // line 48
        echo "            </nav> 
            <div id=\"mySidenav\" class=\"sidenav\">
                <a id=\"closeBtn\" href=\"#\" class=\"close\">x</a>
                <ul>
                    <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"logo\" height=\"60px\"></a></li>
                    <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Boutique</a></li>
                    <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a></li>
                    <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\">Forum</a></li>
                    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                    <li><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" id='account-link'><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='account-logo'></a></li>
                    <li><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_show");
            echo "\" id='cart-link'>
                    <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill badge-perso\">
                        ";
            // line 62
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "get", [0 => "cart"], "method", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "get", [0 => "cart"], "method", false, false, false, 62)), "html", null, true))) : (print ("0")));
            echo "
                    </span></a></li>
                ";
        } else {
            // line 65
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                ";
        }
        // line 67
        echo "                
                ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 69
            echo "                <li><a class=\"\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Tableau de Bord</a></li>
                ";
        }
        // line 71
        echo "                </ul>
            </div>

            <a href=\"#\" id=\"openBtn\">
                <span class=\"burger-icon\">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
            </a>

            <div id=\"progress-bar\" class=\"progress-bar\"></div>
        </header>
        
        <main>
                    
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 88
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 89
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 90
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
        ";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "        
        ";
        // line 103
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "        
        </main>

        <footer>
            <section id=\"nav-column\">
                <section class=\"nav-column\"> 
                    <h2><a href=\"https://coachingdevperso.fr\">Coaching</a> </h2>
                    <h2><a href=\"https://coachingdevperso.fr\">Dev-Perso.fr</a> </h2>
                    <a href=\"https://coachingdevperso.fr\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </section>
                <section class=\"nav-column\"> 
                    <nav>
                        <h3>Navigation</h3>
                        <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mapsite");
        echo "\">Plan du site</a>
                        <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                        <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valonauteinc");
        echo "\" target =\"_blank\">EasyWebFactory Inc.</a>
                        <button><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("careers");
        echo "\">On Recrute </a></button>
                    </nav>
                </section>
                <section class=\"nav-column\">
                    <nav>
                        <h3>Suivez-nous</h3>
                        <a href=\"https://instagram.com/coaching.devperso\" target =\"_blank\">Instagram</a>
                        <a href=\"https://Facebook.com/valonaute\" target =\"_blank\">Facebook</a>
                        <a href=\"https://www.youtube.com/channel/UC5KXcAr204aLa6F2-4hapGw\" target =\"_blank\">Youtube</a>
                        <a href=\"https://github.com/valonaute\" target =\"_blank\"> Github </a>
                        <a href=\"https://linkedin.com/in/valonaute\" target =\"_blank\"> Linkedin </a>
                    </nav>
                </section>
            </section>
            <section id=\"espace\">
            </section>
            <section id=\"footer\">
                <h4> &copy; 2023 EASYWEBFACTORY INC. </h4>
                <p> Made with 🤍</p>
                <nav>
                    <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">CGU / CGV </a>
                    <p> | </p>
                    <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Mentions Légales</a>
                    <p> | </p>
                    <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Politique de confidentialité</a>
                </nav>
            </section>
        </footer>
    </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 100
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 104
        echo "            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 104,  474 => 103,  463 => 100,  453 => 99,  442 => 96,  432 => 95,  422 => 17,  412 => 16,  401 => 14,  391 => 13,  372 => 5,  354 => 147,  349 => 145,  344 => 143,  321 => 123,  317 => 122,  313 => 121,  309 => 120,  305 => 119,  297 => 114,  287 => 106,  285 => 103,  282 => 102,  280 => 99,  277 => 98,  275 => 95,  272 => 94,  266 => 93,  257 => 90,  252 => 89,  247 => 88,  243 => 87,  225 => 71,  219 => 69,  217 => 68,  214 => 67,  208 => 65,  202 => 62,  197 => 60,  193 => 59,  187 => 58,  182 => 57,  180 => 56,  176 => 55,  172 => 54,  168 => 53,  162 => 52,  156 => 48,  150 => 46,  148 => 45,  145 => 44,  139 => 42,  132 => 38,  127 => 36,  123 => 35,  117 => 34,  112 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  91 => 27,  80 => 19,  77 => 18,  74 => 16,  72 => 13,  68 => 12,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Bienvenue !{% endblock %}</title>
        <link rel=\"icon\" href=\" {{ asset ('assets/img/icon.png') }}\">
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha384-ezfmEM0AQA4VvACr2X9O8t4XHzlFnmdvi5EWf5Fv0H8eVhUom8sGNclbxFfmL9Rn\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
        
        <link rel=\"stylesheet\" href=\"{{ asset ('assets/css/style.css') }}\">
        {% block stylesheets %}
        
        {% endblock %}
        {% block javascripts %}
        {% endblock %}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset ('assets/js/script.js') }}\" defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js\">
        </script>
        <script src=\"https://kit.fontawesome.com/100a24dea8.js\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
    </head>
    <body>
        <header>
            <a href=\"{{ path ('home')}}\"><img src=\"{{ asset ('assets/img/logo-line.png') }}\" alt=\"logo\" title=\"logo\" height=\"80px\"></a>
            <nav class=\"nav-desktop\">
                <a href=\"{{ path ('formations')}}\">Boutique</a>
                <a href=\"{{ path ('blog')}}\">Blog</a>
                <a href=\"{{ path ('forum')}}\"> Forum </a>
                {% if app.user %}
                <a href=\"{{ path ('app_logout')}}\">Déconnexion</a>
                <a href=\"{{ path ('account')}}\" id='account-link'><img src=\"{{ asset ('assets/img/account.png') }}\" alt=\"account logo\" id='account-logo'></a>
                <a href=\"{{ path ('cart_show')}}\" id='cart-link'>
                    <img src=\"{{ asset ('assets/img/panier.png') }}\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill badge-perso\">
                        {{ app.session.get('cart') ? app.session.get('cart') | length : '0'}}
                    </span>
                </a>
                {% else %}
                <a href=\"{{ path ('app_login')}}\">Connexion</a>
                {% endif %}
                
                {% if is_granted('ROLE_ADMIN') %}
                <a class=\"btn btn-perso\" href=\"{{ path ('dashboard')}}\">Tableau de Bord</a>
                {% endif %}
            </nav> 
            <div id=\"mySidenav\" class=\"sidenav\">
                <a id=\"closeBtn\" href=\"#\" class=\"close\">x</a>
                <ul>
                    <li><a href=\"{{ path ('home')}}\"><img src=\"{{ asset ('assets/img/icon.png') }}\" alt=\"logo\" title=\"logo\" height=\"60px\"></a></li>
                    <li><a href=\"{{ path ('formations')}}\">Boutique</a></li>
                    <li><a href=\"{{ path ('blog')}}\">Blog</a></li>
                    <li><a href=\"{{ path ('forum')}}\">Forum</a></li>
                    {% if app.user %}
                    <li><a href=\"{{ path ('app_logout')}}\">Déconnexion</a></li>
                    <li><a href=\"{{ path ('account')}}\" id='account-link'><img src=\"{{ asset ('assets/img/account.png') }}\" alt=\"account logo\" id='account-logo'></a></li>
                    <li><a href=\"{{ path ('cart_show')}}\" id='cart-link'>
                    <img src=\"{{ asset ('assets/img/panier.png') }}\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill badge-perso\">
                        {{ app.session.get('cart') ? app.session.get('cart') | length : '0'}}
                    </span></a></li>
                {% else %}
                    <li><a href=\"{{ path ('app_login')}}\">Connexion</a></li>
                {% endif %}
                
                {% if is_granted('ROLE_ADMIN') %}
                <li><a class=\"\" href=\"{{ path ('dashboard')}}\">Tableau de Bord</a></li>
                {% endif %}
                </ul>
            </div>

            <a href=\"#\" id=\"openBtn\">
                <span class=\"burger-icon\">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
            </a>

            <div id=\"progress-bar\" class=\"progress-bar\"></div>
        </header>
        
        <main>
                    
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}

        {% block body %}
        
        {% endblock body %}

        {% block main %}

        {% endblock main %}
        
        {% block content %}
            
        {% endblock content %}
        
        </main>

        <footer>
            <section id=\"nav-column\">
                <section class=\"nav-column\"> 
                    <h2><a href=\"https://coachingdevperso.fr\">Coaching</a> </h2>
                    <h2><a href=\"https://coachingdevperso.fr\">Dev-Perso.fr</a> </h2>
                    <a href=\"https://coachingdevperso.fr\"><img src=\"{{ asset ('assets/img/logo.png')}}\" alt=\"logo\"></a>
                </section>
                <section class=\"nav-column\"> 
                    <nav>
                        <h3>Navigation</h3>
                        <a href=\"{{ path ('home') }}\">Accueil</a>
                        <a href=\"{{ path ('mapsite') }}\">Plan du site</a>
                        <a href=\"{{ path ('contact') }}\">Contact</a>
                        <a href=\"{{ path ('valonauteinc') }}\" target =\"_blank\">EasyWebFactory Inc.</a>
                        <button><a href=\"{{ path ('careers') }}\">On Recrute </a></button>
                    </nav>
                </section>
                <section class=\"nav-column\">
                    <nav>
                        <h3>Suivez-nous</h3>
                        <a href=\"https://instagram.com/coaching.devperso\" target =\"_blank\">Instagram</a>
                        <a href=\"https://Facebook.com/valonaute\" target =\"_blank\">Facebook</a>
                        <a href=\"https://www.youtube.com/channel/UC5KXcAr204aLa6F2-4hapGw\" target =\"_blank\">Youtube</a>
                        <a href=\"https://github.com/valonaute\" target =\"_blank\"> Github </a>
                        <a href=\"https://linkedin.com/in/valonaute\" target =\"_blank\"> Linkedin </a>
                    </nav>
                </section>
            </section>
            <section id=\"espace\">
            </section>
            <section id=\"footer\">
                <h4> &copy; 2023 EASYWEBFACTORY INC. </h4>
                <p> Made with 🤍</p>
                <nav>
                    <a href=\"{{ path ('cgu') }}\">CGU / CGV </a>
                    <p> | </p>
                    <a href=\"{{ path ('cgu') }}\">Mentions Légales</a>
                    <p> | </p>
                    <a href=\"{{ path ('cgu') }}\">Politique de confidentialité</a>
                </nav>
            </section>
        </footer>
    </body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\symfony\\2.6.2 projet-coaching prod\\templates\\base.html.twig");
    }
}
