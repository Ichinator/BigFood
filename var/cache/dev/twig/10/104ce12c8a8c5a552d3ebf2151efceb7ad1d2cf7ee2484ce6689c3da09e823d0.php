<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ff814e272b328f95dd8a1b1f31e70e401a3cd615a0980d8e67516c61b402dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb898233ffcee0f206aeee0a98d0cf943a7c1e7cd2943244b7138497d66cfc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb898233ffcee0f206aeee0a98d0cf943a7c1e7cd2943244b7138497d66cfc21->enter($__internal_bb898233ffcee0f206aeee0a98d0cf943a7c1e7cd2943244b7138497d66cfc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b42f06d0894b62ce46c906e4b9c07b1243e203b25952b9799e24151a1f0fba26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42f06d0894b62ce46c906e4b9c07b1243e203b25952b9799e24151a1f0fba26->enter($__internal_b42f06d0894b62ce46c906e4b9c07b1243e203b25952b9799e24151a1f0fba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bb898233ffcee0f206aeee0a98d0cf943a7c1e7cd2943244b7138497d66cfc21->leave($__internal_bb898233ffcee0f206aeee0a98d0cf943a7c1e7cd2943244b7138497d66cfc21_prof);

        
        $__internal_b42f06d0894b62ce46c906e4b9c07b1243e203b25952b9799e24151a1f0fba26->leave($__internal_b42f06d0894b62ce46c906e4b9c07b1243e203b25952b9799e24151a1f0fba26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25a1c0f5ba71dd39dfa4d620de9e3026d40af61fe7c339f39191dda08357b84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a1c0f5ba71dd39dfa4d620de9e3026d40af61fe7c339f39191dda08357b84c->enter($__internal_25a1c0f5ba71dd39dfa4d620de9e3026d40af61fe7c339f39191dda08357b84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40f89c3172870a7051f7fbe63b62e539024237a90623e43ad2515e713365f71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f89c3172870a7051f7fbe63b62e539024237a90623e43ad2515e713365f71d->enter($__internal_40f89c3172870a7051f7fbe63b62e539024237a90623e43ad2515e713365f71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_40f89c3172870a7051f7fbe63b62e539024237a90623e43ad2515e713365f71d->leave($__internal_40f89c3172870a7051f7fbe63b62e539024237a90623e43ad2515e713365f71d_prof);

        
        $__internal_25a1c0f5ba71dd39dfa4d620de9e3026d40af61fe7c339f39191dda08357b84c->leave($__internal_25a1c0f5ba71dd39dfa4d620de9e3026d40af61fe7c339f39191dda08357b84c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b57b7d2147006612c516d88d7b9904024f1f4ceec70382814edfc0b90e242004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57b7d2147006612c516d88d7b9904024f1f4ceec70382814edfc0b90e242004->enter($__internal_b57b7d2147006612c516d88d7b9904024f1f4ceec70382814edfc0b90e242004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d92a963105355e3b43e48412a951389b89500ca22df4501b9f39c7b657cfcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d92a963105355e3b43e48412a951389b89500ca22df4501b9f39c7b657cfcd9->enter($__internal_1d92a963105355e3b43e48412a951389b89500ca22df4501b9f39c7b657cfcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1d92a963105355e3b43e48412a951389b89500ca22df4501b9f39c7b657cfcd9->leave($__internal_1d92a963105355e3b43e48412a951389b89500ca22df4501b9f39c7b657cfcd9_prof);

        
        $__internal_b57b7d2147006612c516d88d7b9904024f1f4ceec70382814edfc0b90e242004->leave($__internal_b57b7d2147006612c516d88d7b9904024f1f4ceec70382814edfc0b90e242004_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b5f4c5b040603091b65fd9aa825f91b24178d68ea7fa8ca63aea26df05207eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5f4c5b040603091b65fd9aa825f91b24178d68ea7fa8ca63aea26df05207eb->enter($__internal_9b5f4c5b040603091b65fd9aa825f91b24178d68ea7fa8ca63aea26df05207eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d158e961e77056ef525f67eb7497d73eb7fb653f102b464fec18224e904c4058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d158e961e77056ef525f67eb7497d73eb7fb653f102b464fec18224e904c4058->enter($__internal_d158e961e77056ef525f67eb7497d73eb7fb653f102b464fec18224e904c4058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d158e961e77056ef525f67eb7497d73eb7fb653f102b464fec18224e904c4058->leave($__internal_d158e961e77056ef525f67eb7497d73eb7fb653f102b464fec18224e904c4058_prof);

        
        $__internal_9b5f4c5b040603091b65fd9aa825f91b24178d68ea7fa8ca63aea26df05207eb->leave($__internal_9b5f4c5b040603091b65fd9aa825f91b24178d68ea7fa8ca63aea26df05207eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
