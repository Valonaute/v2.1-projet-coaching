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
class __TwigTemplate_fe641c1cfe5264ab80e8b379ff5c7bef extends Template
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
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@CHCookieConsent/form/cookie_consent_theme.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('script', $context, $blocks);
        // line 6
        echo "
<div class=\"ch-cookie-consent ch-cookie-consent--";
        // line 7
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "-theme ch-cookie-consent--";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo " ";
        if (($context["simplified"] ?? null)) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "ch-cookie-consent__form"]]);
        echo "
        <div class=\"ch-cookie-consent__category-group\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "                ";
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 23), "block_prefixes", [], "any", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) != "button")) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            ";
        // line 31
        if (($context["simplified"] ?? null)) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>

";
    }

    // line 3
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/chcookieconsent/js/cookie_consent.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <h3 class=\"ch-cookie-consent__title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.title", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</h3>
    ";
    }

    // line 12
    public function block_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <p class=\"ch-cookie-consent__intro\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.intro", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</p>
    ";
    }

    // line 16
    public function block_read_more($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        <a class=\"ch-cookie-consent__read-more\" href=\"";
        $this->displayBlock('read_more_link', $context, $blocks);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.read_more", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</a>
    ";
    }

    public function block_read_more_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "/privacy-statement";
    }

    // line 32
    public function block_toggle_details($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  193 => 35,  189 => 34,  186 => 33,  182 => 32,  167 => 17,  163 => 16,  156 => 13,  152 => 12,  145 => 9,  141 => 8,  134 => 4,  130 => 3,  122 => 40,  119 => 39,  116 => 38,  113 => 32,  111 => 31,  107 => 30,  102 => 27,  96 => 26,  90 => 24,  87 => 23,  83 => 22,  78 => 20,  75 => 19,  73 => 16,  70 => 15,  68 => 12,  65 => 11,  63 => 8,  53 => 7,  50 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CHCookieConsent/cookie_consent.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\vendor\\connectholland\\cookie-consent-bundle\\Resources\\views\\cookie_consent.html.twig");
    }
}
