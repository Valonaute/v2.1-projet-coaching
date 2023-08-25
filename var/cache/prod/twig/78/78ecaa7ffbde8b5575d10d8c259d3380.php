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

/* @KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig */
class __TwigTemplate_cae01ee102637201d7c8192c89d0048f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'karser_recaptcha3_widget' => [$this, 'block_karser_recaptcha3_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('karser_recaptcha3_widget', $context, $blocks);
    }

    public function block_karser_recaptcha3_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        ob_start(function () { return ''; });
        // line 3
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "enabled", [], "any", false, false, false, 6)) {
            // line 7
            $context["validJsId"] = twig_replace_filter(($context["id"] ?? null), ["-" => "_"]);
            // line 8
            echo "            <script type=\"text/javascript\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 8), "script_nonce_csp", [], "any", true, true, false, 8)) {
                echo "nonce=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 8), "script_nonce_csp", [], "any", false, false, false, 8), "html", null, true);
                echo "\"";
            }
            echo ">
                var recaptchaCallback_";
            // line 9
            echo twig_escape_filter($this->env, ($context["validJsId"] ?? null), "html", null, true);
            echo " = function() {
                    grecaptcha.execute('";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 10), "site_key", [], "any", false, false, false, 10), "html", null, true);
            echo "', {action: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 10), "action_name", [], "any", false, false, false, 10), "html", null, true);
            echo "'}).then(function(token) {
                        document.getElementById('";
            // line 11
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').value = token;
                    });
                    setTimeout(recaptchaCallback_";
            // line 13
            echo twig_escape_filter($this->env, ($context["validJsId"] ?? null), "html", null, true);
            echo ", 100000);
                };
            </script>
            <script type=\"text/javascript\" src=\"https://";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 16), "host", [], "any", false, false, false, 16), "html", null, true);
            echo "/recaptcha/api.js?render=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 16), "site_key", [], "any", false, false, false, 16), "html", null, true);
            echo "&hl=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16), "html", null, true);
            echo "&onload=recaptchaCallback_";
            echo twig_escape_filter($this->env, ($context["validJsId"] ?? null), "html", null, true);
            echo "\" async defer";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 16), "script_nonce_csp", [], "any", true, true, false, 16)) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 16), "script_nonce_csp", [], "any", false, false, false, 16), "html", null, true);
                echo "\"";
            }
            echo "></script>";
        }
        // line 18
        echo "    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 2,  105 => 18,  89 => 16,  83 => 13,  78 => 11,  72 => 10,  68 => 9,  59 => 8,  57 => 7,  55 => 6,  50 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig", "C:\\Users\\formation\\Desktop\\2.6.1 projet-coaching prod\\vendor\\karser\\karser-recaptcha3-bundle\\Resources\\views\\Form\\karser_recaptcha3_widget.html.twig");
    }
}
