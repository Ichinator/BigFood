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
        $__internal_40cbad36eb6223853b48d4a2415fca8c5b38ebff7f2a0a739ffffb472123fba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cbad36eb6223853b48d4a2415fca8c5b38ebff7f2a0a739ffffb472123fba4->enter($__internal_40cbad36eb6223853b48d4a2415fca8c5b38ebff7f2a0a739ffffb472123fba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_6bdfc9450feea2eba686f95c460200c71da54844606df20e9f6f4486d0efe198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdfc9450feea2eba686f95c460200c71da54844606df20e9f6f4486d0efe198->enter($__internal_6bdfc9450feea2eba686f95c460200c71da54844606df20e9f6f4486d0efe198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_40cbad36eb6223853b48d4a2415fca8c5b38ebff7f2a0a739ffffb472123fba4->leave($__internal_40cbad36eb6223853b48d4a2415fca8c5b38ebff7f2a0a739ffffb472123fba4_prof);

        
        $__internal_6bdfc9450feea2eba686f95c460200c71da54844606df20e9f6f4486d0efe198->leave($__internal_6bdfc9450feea2eba686f95c460200c71da54844606df20e9f6f4486d0efe198_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9141e1a38f9a39e636e905c547eabaf679044fba5a6fd9f71d03e644eb8fd3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9141e1a38f9a39e636e905c547eabaf679044fba5a6fd9f71d03e644eb8fd3ae->enter($__internal_9141e1a38f9a39e636e905c547eabaf679044fba5a6fd9f71d03e644eb8fd3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0a530da7447564e2331c3d1d62ef1f1605ce475866288ae508e9af3016b5b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a530da7447564e2331c3d1d62ef1f1605ce475866288ae508e9af3016b5b64->enter($__internal_f0a530da7447564e2331c3d1d62ef1f1605ce475866288ae508e9af3016b5b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_f0a530da7447564e2331c3d1d62ef1f1605ce475866288ae508e9af3016b5b64->leave($__internal_f0a530da7447564e2331c3d1d62ef1f1605ce475866288ae508e9af3016b5b64_prof);

        
        $__internal_9141e1a38f9a39e636e905c547eabaf679044fba5a6fd9f71d03e644eb8fd3ae->leave($__internal_9141e1a38f9a39e636e905c547eabaf679044fba5a6fd9f71d03e644eb8fd3ae_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ef0837a438b0aa82e3782508c7efad852f6fd2a1d91468cf315f639f34bb27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef0837a438b0aa82e3782508c7efad852f6fd2a1d91468cf315f639f34bb27f->enter($__internal_8ef0837a438b0aa82e3782508c7efad852f6fd2a1d91468cf315f639f34bb27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a45c4bd11851a4defda2d1b3dd46b7951387807ac1c47c805575f38624241ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a45c4bd11851a4defda2d1b3dd46b7951387807ac1c47c805575f38624241ab->enter($__internal_6a45c4bd11851a4defda2d1b3dd46b7951387807ac1c47c805575f38624241ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_6a45c4bd11851a4defda2d1b3dd46b7951387807ac1c47c805575f38624241ab->leave($__internal_6a45c4bd11851a4defda2d1b3dd46b7951387807ac1c47c805575f38624241ab_prof);

        
        $__internal_8ef0837a438b0aa82e3782508c7efad852f6fd2a1d91468cf315f639f34bb27f->leave($__internal_8ef0837a438b0aa82e3782508c7efad852f6fd2a1d91468cf315f639f34bb27f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f4e2a0d0ffee64a233cba96c916c1c1fdab1ce1099e099c7b45028287960f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4e2a0d0ffee64a233cba96c916c1c1fdab1ce1099e099c7b45028287960f3c->enter($__internal_3f4e2a0d0ffee64a233cba96c916c1c1fdab1ce1099e099c7b45028287960f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0e2deaba0398527d7d5bfe95b4f8250a9f57d0b6273eb50d648a5dc40129bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e2deaba0398527d7d5bfe95b4f8250a9f57d0b6273eb50d648a5dc40129bff->enter($__internal_c0e2deaba0398527d7d5bfe95b4f8250a9f57d0b6273eb50d648a5dc40129bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_c0e2deaba0398527d7d5bfe95b4f8250a9f57d0b6273eb50d648a5dc40129bff->leave($__internal_c0e2deaba0398527d7d5bfe95b4f8250a9f57d0b6273eb50d648a5dc40129bff_prof);

        
        $__internal_3f4e2a0d0ffee64a233cba96c916c1c1fdab1ce1099e099c7b45028287960f3c->leave($__internal_3f4e2a0d0ffee64a233cba96c916c1c1fdab1ce1099e099c7b45028287960f3c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5b7b76c77a3e2162aee891f8542782e1c15e8476d4e3e407e1904542efa3351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b7b76c77a3e2162aee891f8542782e1c15e8476d4e3e407e1904542efa3351->enter($__internal_c5b7b76c77a3e2162aee891f8542782e1c15e8476d4e3e407e1904542efa3351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e7c6f84bb308755a00f2eeb5d0e7f3bc50fd9ae6058963ca743b7e5357c991f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c6f84bb308755a00f2eeb5d0e7f3bc50fd9ae6058963ca743b7e5357c991f8->enter($__internal_e7c6f84bb308755a00f2eeb5d0e7f3bc50fd9ae6058963ca743b7e5357c991f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e7c6f84bb308755a00f2eeb5d0e7f3bc50fd9ae6058963ca743b7e5357c991f8->leave($__internal_e7c6f84bb308755a00f2eeb5d0e7f3bc50fd9ae6058963ca743b7e5357c991f8_prof);

        
        $__internal_c5b7b76c77a3e2162aee891f8542782e1c15e8476d4e3e407e1904542efa3351->leave($__internal_c5b7b76c77a3e2162aee891f8542782e1c15e8476d4e3e407e1904542efa3351_prof);

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
