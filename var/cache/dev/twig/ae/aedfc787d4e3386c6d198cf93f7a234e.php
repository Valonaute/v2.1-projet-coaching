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

/* @CHCookieConsent/form/cookie_consent_theme.html.twig */
class __TwigTemplate_4be6e687182ccbff24e20d02a068fb1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'choice_row' => [$this, 'block_choice_row'],
            'submit_row' => [$this, 'block_submit_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CHCookieConsent/form/cookie_consent_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CHCookieConsent/form/cookie_consent_theme.html.twig"));

        // line 1
        $this->displayBlock('choice_row', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('submit_row', $context, $blocks);
        // line 23
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_row"));

        // line 2
        echo "    <div class=\"ch-cookie-consent__category\">
        <div class=\"ch-cookie-consent__category-toggle\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 5)) {
                // line 6
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                // line 7
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 7, $this->source); })())]);
            }
            // line 9
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
        <div class=\"ch-cookie-consent__category-information\">
            <h4 class=\"ch-cookie-consent__category-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("ch_cookie_consent." . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })())) . ".title"), [], "CHCookieConsentBundle"), "html", null, true);
        echo "</h4>
            <p class=\"ch-cookie-consent__category-description\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("ch_cookie_consent." . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })())) . ".description"), [], "CHCookieConsentBundle"), "html", null, true);
        echo "</p>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        // line 19
        echo "    <div class=\"ch-cookie-consent__btn-wrapper\">
        ";
        // line 20
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@CHCookieConsent/form/cookie_consent_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 20,  127 => 19,  117 => 18,  103 => 13,  99 => 12,  95 => 10,  89 => 9,  86 => 7,  84 => 6,  81 => 5,  77 => 4,  73 => 2,  63 => 1,  52 => 23,  50 => 18,  47 => 17,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block choice_row %}
    <div class=\"ch-cookie-consent__category\">
        <div class=\"ch-cookie-consent__category-toggle\">
            {% for child in form %}
                {% if not child.rendered %}
                    {{- form_widget(child) -}}
                    {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
                {% endif %}
            {% endfor %}
        </div>
        <div class=\"ch-cookie-consent__category-information\">
            <h4 class=\"ch-cookie-consent__category-title\">{{ ('ch_cookie_consent.'~name~'.title')|trans({}, 'CHCookieConsentBundle') }}</h4>
            <p class=\"ch-cookie-consent__category-description\">{{ ('ch_cookie_consent.'~name~'.description')|trans({}, 'CHCookieConsentBundle') }}</p>
        </div>
    </div>
{% endblock %}

{% block submit_row %}
    <div class=\"ch-cookie-consent__btn-wrapper\">
        {{ block('button_widget') }}
    </div>
{% endblock %}

", "@CHCookieConsent/form/cookie_consent_theme.html.twig", "C:\\wamp64\\www\\symfony\\2.6.1 projet-coaching prod\\vendor\\connectholland\\cookie-consent-bundle\\Resources\\views\\form\\cookie_consent_theme.html.twig");
    }
}
