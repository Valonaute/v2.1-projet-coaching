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
class __TwigTemplate_1c213ac1fc4f602b94674c3e16acec03 extends Template
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
    }

    // line 1
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"ch-cookie-consent__category\">
        <div class=\"ch-cookie-consent__category-toggle\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 5)) {
                // line 6
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                // line 7
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("ch_cookie_consent." . ($context["name"] ?? null)) . ".title"), [], "CHCookieConsentBundle"), "html", null, true);
        echo "</h4>
            <p class=\"ch-cookie-consent__category-description\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("ch_cookie_consent." . ($context["name"] ?? null)) . ".description"), [], "CHCookieConsentBundle"), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    // line 18
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"ch-cookie-consent__btn-wrapper\">
        ";
        // line 20
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@CHCookieConsent/form/cookie_consent_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 20,  97 => 19,  93 => 18,  85 => 13,  81 => 12,  77 => 10,  71 => 9,  68 => 7,  66 => 6,  63 => 5,  59 => 4,  55 => 2,  51 => 1,  46 => 23,  44 => 18,  41 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CHCookieConsent/form/cookie_consent_theme.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\vendor\\connectholland\\cookie-consent-bundle\\Resources\\views\\form\\cookie_consent_theme.html.twig");
    }
}
