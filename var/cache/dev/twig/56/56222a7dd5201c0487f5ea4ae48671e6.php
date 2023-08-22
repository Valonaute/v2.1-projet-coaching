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

/* @CHCookieConsent/cookie_consent.html.twig */
class __TwigTemplate_4687661e75daf166efadd987ccbd4080 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
            'title' => [$this, 'block_title'],
            'intro' => [$this, 'block_intro'],
            'read_more' => [$this, 'block_read_more'],
            'read_more_link' => [$this, 'block_read_more_link'],
            'toggle_details' => [$this, 'block_toggle_details'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CHCookieConsent/cookie_consent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CHCookieConsent/cookie_consent.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "@CHCookieConsent/form/cookie_consent_theme.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('script', $context, $blocks);
        // line 6
        echo "
<div class=\"ch-cookie-consent ch-cookie-consent--";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "-theme ch-cookie-consent--";
        echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " ";
        if ((isset($context["simplified"]) || array_key_exists("simplified", $context) ? $context["simplified"] : (function () { throw new RuntimeError('Variable "simplified" does not exist.', 7, $this->source); })())) {
            echo "ch-cookie-consent--simplified";
        }
        echo "\">
    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('intro', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('read_more', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "ch-cookie-consent__form"]]);
        echo "
        <div class=\"ch-cookie-consent__category-group\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 23), "block_prefixes", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23) != "button")) {
                // line 24
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
                ";
            }
            // line 26
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>

        <div class=\"ch-cookie-consent__btn-group\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'rest');
        echo "
            ";
        // line 31
        if ((isset($context["simplified"]) || array_key_exists("simplified", $context) ? $context["simplified"] : (function () { throw new RuntimeError('Variable "simplified" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                ";
            $this->displayBlock('toggle_details', $context, $blocks);
            // line 38
            echo "            ";
        }
        // line 39
        echo "        </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 4
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/chcookieconsent/js/cookie_consent.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "        <h3 class=\"ch-cookie-consent__title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.title", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</h3>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "intro"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "intro"));

        // line 13
        echo "        <p class=\"ch-cookie-consent__intro\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.intro", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</p>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_read_more($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more"));

        // line 17
        echo "        <a class=\"ch-cookie-consent__read-more\" href=\"";
        $this->displayBlock('read_more_link', $context, $blocks);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.read_more", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_read_more_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more_link"));

        echo "/privacy-statement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_toggle_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_details"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_details"));

        // line 33
        echo "                    <div class=\"ch-cookie-consent__toggle-details\">
                        <span class=\"ch-cookie-consent__toggle-details-show\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.show_details", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</span>
                        <span class=\"ch-cookie-consent__toggle-details-hide\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.hide_details", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</span>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@CHCookieConsent/cookie_consent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 35,  267 => 34,  264 => 33,  254 => 32,  221 => 17,  211 => 16,  198 => 13,  188 => 12,  175 => 9,  165 => 8,  152 => 4,  142 => 3,  128 => 40,  125 => 39,  122 => 38,  119 => 32,  117 => 31,  113 => 30,  108 => 27,  102 => 26,  96 => 24,  93 => 23,  89 => 22,  84 => 20,  81 => 19,  79 => 16,  76 => 15,  74 => 12,  71 => 11,  69 => 8,  59 => 7,  56 => 6,  54 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form '@CHCookieConsent/form/cookie_consent_theme.html.twig' %}

{% block script %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/chcookieconsent/js/cookie_consent.js') }}\"></script>
{% endblock %}

<div class=\"ch-cookie-consent ch-cookie-consent--{{ theme }}-theme ch-cookie-consent--{{ position }} {% if simplified %}ch-cookie-consent--simplified{% endif %}\">
    {% block title %}
        <h3 class=\"ch-cookie-consent__title\">{{ 'ch_cookie_consent.title'|trans({}, 'CHCookieConsentBundle') }}</h3>
    {% endblock %}

    {% block intro %}
        <p class=\"ch-cookie-consent__intro\">{{ 'ch_cookie_consent.intro'|trans({}, 'CHCookieConsentBundle') }}</p>
    {% endblock %}

    {% block read_more %}
        <a class=\"ch-cookie-consent__read-more\" href=\"{% block read_more_link %}/privacy-statement{% endblock %}\">{{ 'ch_cookie_consent.read_more'|trans({}, 'CHCookieConsentBundle') }}</a>
    {% endblock %}

    {{ form_start(form, {'attr': {'class': 'ch-cookie-consent__form'}}) }}
        <div class=\"ch-cookie-consent__category-group\">
            {% for child in form %}
                {% if child.vars.block_prefixes[0] != 'button' %}
                    {{ form_row(child) }}
                {% endif %}
            {% endfor %}
        </div>

        <div class=\"ch-cookie-consent__btn-group\">
            {{ form_rest(form) }}
            {% if simplified %}
                {% block toggle_details %}
                    <div class=\"ch-cookie-consent__toggle-details\">
                        <span class=\"ch-cookie-consent__toggle-details-show\">{{ 'ch_cookie_consent.show_details'|trans({}, 'CHCookieConsentBundle') }}</span>
                        <span class=\"ch-cookie-consent__toggle-details-hide\">{{ 'ch_cookie_consent.hide_details'|trans({}, 'CHCookieConsentBundle') }}</span>
                    </div>
                {% endblock %}
            {% endif %}
        </div>
    {{ form_end(form) }}
</div>

", "@CHCookieConsent/cookie_consent.html.twig", "C:\\wamp64\\www\\symfony\\2.6.1 projet-coaching prod\\vendor\\connectholland\\cookie-consent-bundle\\Resources\\views\\cookie_consent.html.twig");
    }
}
