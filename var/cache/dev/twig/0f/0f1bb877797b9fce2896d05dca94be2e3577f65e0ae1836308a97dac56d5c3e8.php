<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_7b21b2e9d343561ced426f441a8c003310dc2c1cb9de60acb901fc87813cdd8e extends Twig_Template
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
        $__internal_eb94669f1b60fc19b709ece88b143ba873252dda8485b67cbb135ad8e2cf1c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb94669f1b60fc19b709ece88b143ba873252dda8485b67cbb135ad8e2cf1c1e->enter($__internal_eb94669f1b60fc19b709ece88b143ba873252dda8485b67cbb135ad8e2cf1c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_782005ca9701f2646c139603495b6b03ad879d9e4915f354876ba02d9c84437b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782005ca9701f2646c139603495b6b03ad879d9e4915f354876ba02d9c84437b->enter($__internal_782005ca9701f2646c139603495b6b03ad879d9e4915f354876ba02d9c84437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_eb94669f1b60fc19b709ece88b143ba873252dda8485b67cbb135ad8e2cf1c1e->leave($__internal_eb94669f1b60fc19b709ece88b143ba873252dda8485b67cbb135ad8e2cf1c1e_prof);

        
        $__internal_782005ca9701f2646c139603495b6b03ad879d9e4915f354876ba02d9c84437b->leave($__internal_782005ca9701f2646c139603495b6b03ad879d9e4915f354876ba02d9c84437b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9720325f8c92b22db15702092048f1c94d8623ecb7da85f87a2297296f58bb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9720325f8c92b22db15702092048f1c94d8623ecb7da85f87a2297296f58bb6f->enter($__internal_9720325f8c92b22db15702092048f1c94d8623ecb7da85f87a2297296f58bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e854517870c020f7f95b366fb6df6697ce1e91f2fe80a4033e371e5366406f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e854517870c020f7f95b366fb6df6697ce1e91f2fe80a4033e371e5366406f8->enter($__internal_0e854517870c020f7f95b366fb6df6697ce1e91f2fe80a4033e371e5366406f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_0e854517870c020f7f95b366fb6df6697ce1e91f2fe80a4033e371e5366406f8->leave($__internal_0e854517870c020f7f95b366fb6df6697ce1e91f2fe80a4033e371e5366406f8_prof);

        
        $__internal_9720325f8c92b22db15702092048f1c94d8623ecb7da85f87a2297296f58bb6f->leave($__internal_9720325f8c92b22db15702092048f1c94d8623ecb7da85f87a2297296f58bb6f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b25aa4f3b5122ab5e4f8c6635430f546d42daf3d841d746a556d21677a8c74f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25aa4f3b5122ab5e4f8c6635430f546d42daf3d841d746a556d21677a8c74f1->enter($__internal_b25aa4f3b5122ab5e4f8c6635430f546d42daf3d841d746a556d21677a8c74f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a1bf7807828e3eba4629e2555b66968cdf655a99ccd77f38eaeea2d61def741c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bf7807828e3eba4629e2555b66968cdf655a99ccd77f38eaeea2d61def741c->enter($__internal_a1bf7807828e3eba4629e2555b66968cdf655a99ccd77f38eaeea2d61def741c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_a1bf7807828e3eba4629e2555b66968cdf655a99ccd77f38eaeea2d61def741c->leave($__internal_a1bf7807828e3eba4629e2555b66968cdf655a99ccd77f38eaeea2d61def741c_prof);

        
        $__internal_b25aa4f3b5122ab5e4f8c6635430f546d42daf3d841d746a556d21677a8c74f1->leave($__internal_b25aa4f3b5122ab5e4f8c6635430f546d42daf3d841d746a556d21677a8c74f1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae9df252d1d0c4a8ec9bbaa40c9d3a15a6cdfae3b450269a7f3f89a2d1638bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9df252d1d0c4a8ec9bbaa40c9d3a15a6cdfae3b450269a7f3f89a2d1638bb0->enter($__internal_ae9df252d1d0c4a8ec9bbaa40c9d3a15a6cdfae3b450269a7f3f89a2d1638bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_927d44b3d4d8f42f93bb9a43e32033e2bdaedd1cbcce8098a32ff10be5d95bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927d44b3d4d8f42f93bb9a43e32033e2bdaedd1cbcce8098a32ff10be5d95bb6->enter($__internal_927d44b3d4d8f42f93bb9a43e32033e2bdaedd1cbcce8098a32ff10be5d95bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_927d44b3d4d8f42f93bb9a43e32033e2bdaedd1cbcce8098a32ff10be5d95bb6->leave($__internal_927d44b3d4d8f42f93bb9a43e32033e2bdaedd1cbcce8098a32ff10be5d95bb6_prof);

        
        $__internal_ae9df252d1d0c4a8ec9bbaa40c9d3a15a6cdfae3b450269a7f3f89a2d1638bb0->leave($__internal_ae9df252d1d0c4a8ec9bbaa40c9d3a15a6cdfae3b450269a7f3f89a2d1638bb0_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81595f978a848453d938b0d67e7ac1fd05be9948b0a78596821ce6b16699a6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81595f978a848453d938b0d67e7ac1fd05be9948b0a78596821ce6b16699a6cd->enter($__internal_81595f978a848453d938b0d67e7ac1fd05be9948b0a78596821ce6b16699a6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b2cc0de42cbf748bb88b404551a699c2f14a43e4cda8c056e3741fea6e3a4718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cc0de42cbf748bb88b404551a699c2f14a43e4cda8c056e3741fea6e3a4718->enter($__internal_b2cc0de42cbf748bb88b404551a699c2f14a43e4cda8c056e3741fea6e3a4718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b2cc0de42cbf748bb88b404551a699c2f14a43e4cda8c056e3741fea6e3a4718->leave($__internal_b2cc0de42cbf748bb88b404551a699c2f14a43e4cda8c056e3741fea6e3a4718_prof);

        
        $__internal_81595f978a848453d938b0d67e7ac1fd05be9948b0a78596821ce6b16699a6cd->leave($__internal_81595f978a848453d938b0d67e7ac1fd05be9948b0a78596821ce6b16699a6cd_prof);

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
", "CoreSphereConsoleBundle::base.html.twig", "/home/ichinator/BigFood/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
