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
        $__internal_ed9d637d6c16fb79a4d3c87a81afa3bc00dcbf01938d85f35f8e777f53c0cbc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9d637d6c16fb79a4d3c87a81afa3bc00dcbf01938d85f35f8e777f53c0cbc2->enter($__internal_ed9d637d6c16fb79a4d3c87a81afa3bc00dcbf01938d85f35f8e777f53c0cbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1834d5821d0e9707db618ad814e68693506aa59cbadc30535b8f183941c86016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1834d5821d0e9707db618ad814e68693506aa59cbadc30535b8f183941c86016->enter($__internal_1834d5821d0e9707db618ad814e68693506aa59cbadc30535b8f183941c86016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ed9d637d6c16fb79a4d3c87a81afa3bc00dcbf01938d85f35f8e777f53c0cbc2->leave($__internal_ed9d637d6c16fb79a4d3c87a81afa3bc00dcbf01938d85f35f8e777f53c0cbc2_prof);

        
        $__internal_1834d5821d0e9707db618ad814e68693506aa59cbadc30535b8f183941c86016->leave($__internal_1834d5821d0e9707db618ad814e68693506aa59cbadc30535b8f183941c86016_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f0e99450b2810ce0d36cff93b58655d7179a8d46a1da0907383740063a9d453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0e99450b2810ce0d36cff93b58655d7179a8d46a1da0907383740063a9d453->enter($__internal_7f0e99450b2810ce0d36cff93b58655d7179a8d46a1da0907383740063a9d453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d928632fb47b1279a89ab4185c91e6a82e65f44131fb024e60bd48946557712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d928632fb47b1279a89ab4185c91e6a82e65f44131fb024e60bd48946557712->enter($__internal_9d928632fb47b1279a89ab4185c91e6a82e65f44131fb024e60bd48946557712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9d928632fb47b1279a89ab4185c91e6a82e65f44131fb024e60bd48946557712->leave($__internal_9d928632fb47b1279a89ab4185c91e6a82e65f44131fb024e60bd48946557712_prof);

        
        $__internal_7f0e99450b2810ce0d36cff93b58655d7179a8d46a1da0907383740063a9d453->leave($__internal_7f0e99450b2810ce0d36cff93b58655d7179a8d46a1da0907383740063a9d453_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_499064554fe58d2de654958d52b41ff0115763fca51d06dd2d9c2c28d8385615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499064554fe58d2de654958d52b41ff0115763fca51d06dd2d9c2c28d8385615->enter($__internal_499064554fe58d2de654958d52b41ff0115763fca51d06dd2d9c2c28d8385615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f515f07107f87388b8139e894546be7ab071d94a97fdc5a61415e2cff1e9bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f515f07107f87388b8139e894546be7ab071d94a97fdc5a61415e2cff1e9bea->enter($__internal_9f515f07107f87388b8139e894546be7ab071d94a97fdc5a61415e2cff1e9bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9f515f07107f87388b8139e894546be7ab071d94a97fdc5a61415e2cff1e9bea->leave($__internal_9f515f07107f87388b8139e894546be7ab071d94a97fdc5a61415e2cff1e9bea_prof);

        
        $__internal_499064554fe58d2de654958d52b41ff0115763fca51d06dd2d9c2c28d8385615->leave($__internal_499064554fe58d2de654958d52b41ff0115763fca51d06dd2d9c2c28d8385615_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f00846ded0ad64292ebaad87de8c1b678290fd46099fbca40ed578b2c59b80c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00846ded0ad64292ebaad87de8c1b678290fd46099fbca40ed578b2c59b80c0->enter($__internal_f00846ded0ad64292ebaad87de8c1b678290fd46099fbca40ed578b2c59b80c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0387f36f925c5d63013f554872959029e85273d9952b1ccfa24d8c7e21509c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0387f36f925c5d63013f554872959029e85273d9952b1ccfa24d8c7e21509c49->enter($__internal_0387f36f925c5d63013f554872959029e85273d9952b1ccfa24d8c7e21509c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0387f36f925c5d63013f554872959029e85273d9952b1ccfa24d8c7e21509c49->leave($__internal_0387f36f925c5d63013f554872959029e85273d9952b1ccfa24d8c7e21509c49_prof);

        
        $__internal_f00846ded0ad64292ebaad87de8c1b678290fd46099fbca40ed578b2c59b80c0->leave($__internal_f00846ded0ad64292ebaad87de8c1b678290fd46099fbca40ed578b2c59b80c0_prof);

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
