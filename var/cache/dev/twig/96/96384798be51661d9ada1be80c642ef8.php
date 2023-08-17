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
class __TwigTemplate_1c1930fddddc29c2757bcfa3b013f737 extends Template
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
        // line 17
        echo "    </head>
    <body>
        <header>
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-line.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"logo\" height=\"80px\"></a>
            <nav>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Boutique</a>
                <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a>
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\"> Forum </a>
                ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" id='account-link'><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='account-logo'></a>
                <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_show");
            echo "\" id='cart-link'>
                    <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
            echo "\" alt=\"account logo\" id='cart-logo'>
                    <span class=\"badge bg-dark ms-1 rounded-pill\">
                        ";
            // line 31
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "get", [0 => "cart"], "method", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "get", [0 => "cart"], "method", false, false, false, 31)), "html", null, true))) : (print ("0")));
            echo "
                    </span>
                </a>
                ";
        } else {
            // line 35
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                ";
        }
        // line 37
        echo "                
                ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "                <a class=\"btn btn-perso\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Tableau de Bord</a>
                ";
        }
        // line 41
        echo "            </nav> 
        </header>
        <main>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 45
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 46
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 47
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('main', $context, $blocks);
        // line 63
        echo "
        </main>

        <footer>
            <section id=\"nav-column\">
                <section class=\"nav-column\"> 
                    <h2><a href=\"https://coachingdevperso.fr\">Coaching</a> </h2>
                    <h2><a href=\"https://coachingdevperso.fr\">Dev-Perso.fr</a> </h2>
                    <a href=\"https://coachingdevperso.fr\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </section>
                <section class=\"nav-column\"> 
                    <nav>
                        <h3>Navigation</h3>
                        <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                        <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mapsite");
        echo "\">Plan du site</a>
                        <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valonauteinc");
        echo "\" target =\"_blank\">EasyWebFactory Inc.</a>
                        <button><a href=\"";
        // line 80
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
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Légales</a>
                    <p> | </p>
                    <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rgpd");
        echo "\">Confidentialité</a>
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
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
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
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 57
        echo "        
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 59
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
        return array (  392 => 59,  382 => 58,  371 => 61,  369 => 58,  366 => 57,  356 => 56,  345 => 53,  335 => 52,  322 => 15,  312 => 14,  300 => 12,  296 => 11,  292 => 9,  282 => 8,  263 => 5,  245 => 102,  240 => 100,  217 => 80,  213 => 79,  209 => 78,  205 => 77,  201 => 76,  193 => 71,  183 => 63,  181 => 56,  178 => 55,  176 => 52,  173 => 51,  167 => 50,  158 => 47,  153 => 46,  148 => 45,  144 => 44,  139 => 41,  133 => 39,  131 => 38,  128 => 37,  122 => 35,  115 => 31,  110 => 29,  106 => 28,  100 => 27,  95 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  74 => 20,  69 => 17,  66 => 14,  64 => 8,  59 => 6,  55 => 5,  49 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset ('assets/css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('assets/css/style.css') }}\">
        {% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset ('assets/js/script.js') }}\"></script>
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
        
        {% block content %}
            
        {% endblock content %}

        {% endblock main %}

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
                    <a href=\"{{ path ('cgu') }}\">Légales</a>
                    <p> | </p>
                    <a href=\"{{ path ('rgpd') }}\">Confidentialité</a>
                </nav>
            </section>
        </footer>
    </body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\symfony\\2.5.0 projet-coaching\\templates\\base.html.twig");
    }
}
