<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_ce64080bbb84bea7ac51316c191e1933a8d4244ce6b5f89650e44e5ba78bfe55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28a5c3c5518b0268d81129c7e4042d24294d906facf619b076563ba325b8ca33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a5c3c5518b0268d81129c7e4042d24294d906facf619b076563ba325b8ca33->enter($__internal_28a5c3c5518b0268d81129c7e4042d24294d906facf619b076563ba325b8ca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_e66cb4d727338ab8749f0fa6f91eaa7a5452b7b6415f1602bcdb7174b009bfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66cb4d727338ab8749f0fa6f91eaa7a5452b7b6415f1602bcdb7174b009bfc4->enter($__internal_e66cb4d727338ab8749f0fa6f91eaa7a5452b7b6415f1602bcdb7174b009bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_28a5c3c5518b0268d81129c7e4042d24294d906facf619b076563ba325b8ca33->leave($__internal_28a5c3c5518b0268d81129c7e4042d24294d906facf619b076563ba325b8ca33_prof);

        
        $__internal_e66cb4d727338ab8749f0fa6f91eaa7a5452b7b6415f1602bcdb7174b009bfc4->leave($__internal_e66cb4d727338ab8749f0fa6f91eaa7a5452b7b6415f1602bcdb7174b009bfc4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61d174e0e8509b435ea7a87fe8bc497c61cee91e85b6240f8a04bf5f09dc761f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d174e0e8509b435ea7a87fe8bc497c61cee91e85b6240f8a04bf5f09dc761f->enter($__internal_61d174e0e8509b435ea7a87fe8bc497c61cee91e85b6240f8a04bf5f09dc761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aab866e7b28e2d5ec585938daba019e9287a7e698503534a18300bd98c69f3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab866e7b28e2d5ec585938daba019e9287a7e698503534a18300bd98c69f3e4->enter($__internal_aab866e7b28e2d5ec585938daba019e9287a7e698503534a18300bd98c69f3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_aab866e7b28e2d5ec585938daba019e9287a7e698503534a18300bd98c69f3e4->leave($__internal_aab866e7b28e2d5ec585938daba019e9287a7e698503534a18300bd98c69f3e4_prof);

        
        $__internal_61d174e0e8509b435ea7a87fe8bc497c61cee91e85b6240f8a04bf5f09dc761f->leave($__internal_61d174e0e8509b435ea7a87fe8bc497c61cee91e85b6240f8a04bf5f09dc761f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dab17869e68ca6a93dc3230c1bbfd4f3ad4b99b4d446a38b54d74259d0866b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab17869e68ca6a93dc3230c1bbfd4f3ad4b99b4d446a38b54d74259d0866b41->enter($__internal_dab17869e68ca6a93dc3230c1bbfd4f3ad4b99b4d446a38b54d74259d0866b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c578ef64864ba695f1a9db6adfafa5df8a412c8cb7a1e6efbd89acec6b6174ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c578ef64864ba695f1a9db6adfafa5df8a412c8cb7a1e6efbd89acec6b6174ee->enter($__internal_c578ef64864ba695f1a9db6adfafa5df8a412c8cb7a1e6efbd89acec6b6174ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_c578ef64864ba695f1a9db6adfafa5df8a412c8cb7a1e6efbd89acec6b6174ee->leave($__internal_c578ef64864ba695f1a9db6adfafa5df8a412c8cb7a1e6efbd89acec6b6174ee_prof);

        
        $__internal_dab17869e68ca6a93dc3230c1bbfd4f3ad4b99b4d446a38b54d74259d0866b41->leave($__internal_dab17869e68ca6a93dc3230c1bbfd4f3ad4b99b4d446a38b54d74259d0866b41_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_91c1d935adb7091cc1d2b21d1773a734f6b0da88118264f2604f5bf8206bbfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c1d935adb7091cc1d2b21d1773a734f6b0da88118264f2604f5bf8206bbfef->enter($__internal_91c1d935adb7091cc1d2b21d1773a734f6b0da88118264f2604f5bf8206bbfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1ec6bb59281093304dfcf493c914e26c6dfd5a04f049d892e4da22612c46732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ec6bb59281093304dfcf493c914e26c6dfd5a04f049d892e4da22612c46732->enter($__internal_d1ec6bb59281093304dfcf493c914e26c6dfd5a04f049d892e4da22612c46732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_d1ec6bb59281093304dfcf493c914e26c6dfd5a04f049d892e4da22612c46732->leave($__internal_d1ec6bb59281093304dfcf493c914e26c6dfd5a04f049d892e4da22612c46732_prof);

        
        $__internal_91c1d935adb7091cc1d2b21d1773a734f6b0da88118264f2604f5bf8206bbfef->leave($__internal_91c1d935adb7091cc1d2b21d1773a734f6b0da88118264f2604f5bf8206bbfef_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95a8e370cc4f2830fd6acba7b7cfe0970228e333c619cfabc89a5930904d2e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a8e370cc4f2830fd6acba7b7cfe0970228e333c619cfabc89a5930904d2e92->enter($__internal_95a8e370cc4f2830fd6acba7b7cfe0970228e333c619cfabc89a5930904d2e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5842113e010ad9e3f9eb84c7b186041dc65adc8e8863bb18b8d5c81cdab3475a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5842113e010ad9e3f9eb84c7b186041dc65adc8e8863bb18b8d5c81cdab3475a->enter($__internal_5842113e010ad9e3f9eb84c7b186041dc65adc8e8863bb18b8d5c81cdab3475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_5842113e010ad9e3f9eb84c7b186041dc65adc8e8863bb18b8d5c81cdab3475a->leave($__internal_5842113e010ad9e3f9eb84c7b186041dc65adc8e8863bb18b8d5c81cdab3475a_prof);

        
        $__internal_95a8e370cc4f2830fd6acba7b7cfe0970228e333c619cfabc89a5930904d2e92->leave($__internal_95a8e370cc4f2830fd6acba7b7cfe0970228e333c619cfabc89a5930904d2e92_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
