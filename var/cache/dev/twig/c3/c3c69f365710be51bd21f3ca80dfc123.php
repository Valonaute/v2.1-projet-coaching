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
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        <header>
            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-line.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"logo\" height=\"80px\"></a>
            <nav>
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Boutique</a>
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a>
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\"> Forum </a>
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" id='account-link'><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='account-logo'></a>
                <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_show");
            echo "\" id='cart-link'>
                    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill\">
                        ";
            // line 35
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "get", [0 => "cart"], "method", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "get", [0 => "cart"], "method", false, false, false, 35)), "html", null, true))) : (print ("0")));
            echo "
                    </span>
                </a>
                ";
        } else {
            // line 39
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                ";
        }
        // line 41
        echo "                
                ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "                <a class=\"btn btn-perso\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Tableau de Bord</a>
                ";
        }
        // line 45
        echo "            </nav> 
            <div id=\"progress-bar\" class=\"progress-bar\"></div>
        </header>
        
        <main>
                    
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 52
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 53
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 54
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('main', $context, $blocks);
        // line 66
        echo "        
        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "        
        </main>

        <footer>
            <section id=\"nav-column\">
                <section class=\"nav-column\"> 
                    <h2><a href=\"https://coachingdevperso.fr\">Coaching</a> </h2>
                    <h2><a href=\"https://coachingdevperso.fr\">Dev-Perso.fr</a> </h2>
                    <a href=\"https://coachingdevperso.fr\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </section>
                <section class=\"nav-column\"> 
                    <nav>
                        <h3>Navigation</h3>
                        <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mapsite");
        echo "\">Plan du site</a>
                        <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                        <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valonauteinc");
        echo "\" target =\"_blank\">EasyWebFactory Inc.</a>
                        <button><a href=\"";
        // line 87
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
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">CGU / CGV </a>
                    <p> | </p>
                    <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Mentions Légales</a>
                    <p> | </p>
                    <a href=\"";
        // line 111
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha384-ezfmEM0AQA4VvACr2X9O8t4XHzlFnmdvi5EWf5Fv0H8eVhUom8sGNclbxFfmL9Rn\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\" defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js\">
        </script>
        <script src=\"https://kit.fontawesome.com/100a24dea8.js\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 64
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 68
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
        return array (  402 => 68,  392 => 67,  381 => 64,  371 => 63,  360 => 60,  350 => 59,  335 => 16,  332 => 15,  322 => 14,  310 => 12,  305 => 9,  295 => 8,  276 => 5,  258 => 111,  253 => 109,  248 => 107,  225 => 87,  221 => 86,  217 => 85,  213 => 84,  209 => 83,  201 => 78,  191 => 70,  189 => 67,  186 => 66,  184 => 63,  181 => 62,  179 => 59,  176 => 58,  170 => 57,  161 => 54,  156 => 53,  151 => 52,  147 => 51,  139 => 45,  133 => 43,  131 => 42,  128 => 41,  122 => 39,  115 => 35,  110 => 33,  106 => 32,  100 => 31,  95 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  74 => 24,  69 => 21,  66 => 14,  64 => 8,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Bienvenue !{% endblock %}</title>
        <link rel=\"icon\" href=\" {{ asset ('assets/img/icon.png') }}\">
        
        {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha384-ezfmEM0AQA4VvACr2X9O8t4XHzlFnmdvi5EWf5Fv0H8eVhUom8sGNclbxFfmL9Rn\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset ('assets/css/style.css') }}\">
        {% endblock %}
        {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset ('assets/js/script.js') }}\" defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js\">
        </script>
        <script src=\"https://kit.fontawesome.com/100a24dea8.js\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>
    <body>
        <header>
            <a href=\"{{ path ('home')}}\"><img src=\"{{ asset ('assets/img/logo-line.png') }}\" alt=\"logo\" title=\"logo\" height=\"80px\"></a>
            <nav>
                <a href=\"{{ path ('formations')}}\">Boutique</a>
                <a href=\"{{ path ('blog')}}\">Blog</a>
                <a href=\"{{ path ('forum')}}\"> Forum </a>
                {% if app.user %}
                <a href=\"{{ path ('app_logout')}}\">Déconnexion</a>
                <a href=\"{{ path ('account')}}\" id='account-link'><img src=\"{{ asset ('assets/img/account.png') }}\" alt=\"account logo\" id='account-logo'></a>
                <a href=\"{{ path ('cart_show')}}\" id='cart-link'>
                    <img src=\"{{ asset ('assets/img/panier.png') }}\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill\">
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

", "base.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\templates\\base.html.twig");
    }
}
