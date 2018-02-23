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
        $__internal_85e0ac98f1c1244d6df0129ffcda3ac7cd9d26e4d89a608e536e7b9feae71128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e0ac98f1c1244d6df0129ffcda3ac7cd9d26e4d89a608e536e7b9feae71128->enter($__internal_85e0ac98f1c1244d6df0129ffcda3ac7cd9d26e4d89a608e536e7b9feae71128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_e4dfa722edc3f0ab7a0f5984b9129fa6bd8f6fd30e5db112981816281dddd3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4dfa722edc3f0ab7a0f5984b9129fa6bd8f6fd30e5db112981816281dddd3b7->enter($__internal_e4dfa722edc3f0ab7a0f5984b9129fa6bd8f6fd30e5db112981816281dddd3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_85e0ac98f1c1244d6df0129ffcda3ac7cd9d26e4d89a608e536e7b9feae71128->leave($__internal_85e0ac98f1c1244d6df0129ffcda3ac7cd9d26e4d89a608e536e7b9feae71128_prof);

        
        $__internal_e4dfa722edc3f0ab7a0f5984b9129fa6bd8f6fd30e5db112981816281dddd3b7->leave($__internal_e4dfa722edc3f0ab7a0f5984b9129fa6bd8f6fd30e5db112981816281dddd3b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a4c3a207f12bf30e7f31dec821589f99bfc7ea0056d4dc3791c33026c57b3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4c3a207f12bf30e7f31dec821589f99bfc7ea0056d4dc3791c33026c57b3fb->enter($__internal_4a4c3a207f12bf30e7f31dec821589f99bfc7ea0056d4dc3791c33026c57b3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63ed9e854b46cd016cc56572e63d3570f2fc693a19be1eb5f023137b8df97828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ed9e854b46cd016cc56572e63d3570f2fc693a19be1eb5f023137b8df97828->enter($__internal_63ed9e854b46cd016cc56572e63d3570f2fc693a19be1eb5f023137b8df97828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_63ed9e854b46cd016cc56572e63d3570f2fc693a19be1eb5f023137b8df97828->leave($__internal_63ed9e854b46cd016cc56572e63d3570f2fc693a19be1eb5f023137b8df97828_prof);

        
        $__internal_4a4c3a207f12bf30e7f31dec821589f99bfc7ea0056d4dc3791c33026c57b3fb->leave($__internal_4a4c3a207f12bf30e7f31dec821589f99bfc7ea0056d4dc3791c33026c57b3fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe70dbdb1de507541d7c331dfa0a9fcc00e9a8db7dcd3fb74277be2153fe3ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe70dbdb1de507541d7c331dfa0a9fcc00e9a8db7dcd3fb74277be2153fe3ff3->enter($__internal_fe70dbdb1de507541d7c331dfa0a9fcc00e9a8db7dcd3fb74277be2153fe3ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_25ac4abf5c94f86137b2c86c88d9882174aed6b972ed0195ca53954a8f2cc600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ac4abf5c94f86137b2c86c88d9882174aed6b972ed0195ca53954a8f2cc600->enter($__internal_25ac4abf5c94f86137b2c86c88d9882174aed6b972ed0195ca53954a8f2cc600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_25ac4abf5c94f86137b2c86c88d9882174aed6b972ed0195ca53954a8f2cc600->leave($__internal_25ac4abf5c94f86137b2c86c88d9882174aed6b972ed0195ca53954a8f2cc600_prof);

        
        $__internal_fe70dbdb1de507541d7c331dfa0a9fcc00e9a8db7dcd3fb74277be2153fe3ff3->leave($__internal_fe70dbdb1de507541d7c331dfa0a9fcc00e9a8db7dcd3fb74277be2153fe3ff3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cba275ebc38dc115467c2e940750a654d78c59d0a85a4b2d75303f0a99888135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba275ebc38dc115467c2e940750a654d78c59d0a85a4b2d75303f0a99888135->enter($__internal_cba275ebc38dc115467c2e940750a654d78c59d0a85a4b2d75303f0a99888135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75c328b48edc9b448e38528db8bf8c16dcadf6efd4f95c4b0e660e40e8236744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c328b48edc9b448e38528db8bf8c16dcadf6efd4f95c4b0e660e40e8236744->enter($__internal_75c328b48edc9b448e38528db8bf8c16dcadf6efd4f95c4b0e660e40e8236744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_75c328b48edc9b448e38528db8bf8c16dcadf6efd4f95c4b0e660e40e8236744->leave($__internal_75c328b48edc9b448e38528db8bf8c16dcadf6efd4f95c4b0e660e40e8236744_prof);

        
        $__internal_cba275ebc38dc115467c2e940750a654d78c59d0a85a4b2d75303f0a99888135->leave($__internal_cba275ebc38dc115467c2e940750a654d78c59d0a85a4b2d75303f0a99888135_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a079f66b3687e448b2c999eaea5c315d20f032c031282627317ce71c774e519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a079f66b3687e448b2c999eaea5c315d20f032c031282627317ce71c774e519->enter($__internal_6a079f66b3687e448b2c999eaea5c315d20f032c031282627317ce71c774e519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cb4aa12e351c09db907bd6e213cef59d83511b821d156a6b7896174a09ff543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb4aa12e351c09db907bd6e213cef59d83511b821d156a6b7896174a09ff543->enter($__internal_4cb4aa12e351c09db907bd6e213cef59d83511b821d156a6b7896174a09ff543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4cb4aa12e351c09db907bd6e213cef59d83511b821d156a6b7896174a09ff543->leave($__internal_4cb4aa12e351c09db907bd6e213cef59d83511b821d156a6b7896174a09ff543_prof);

        
        $__internal_6a079f66b3687e448b2c999eaea5c315d20f032c031282627317ce71c774e519->leave($__internal_6a079f66b3687e448b2c999eaea5c315d20f032c031282627317ce71c774e519_prof);

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
