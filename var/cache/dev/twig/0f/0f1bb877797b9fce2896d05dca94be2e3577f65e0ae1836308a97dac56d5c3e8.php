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
        $__internal_b2281839647c364a5074ae65fc8f582c6635cf3a4d193f75cd92070a9d15e12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2281839647c364a5074ae65fc8f582c6635cf3a4d193f75cd92070a9d15e12e->enter($__internal_b2281839647c364a5074ae65fc8f582c6635cf3a4d193f75cd92070a9d15e12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_cdcd0606511ff001e533388a9a95c41955c1db2702d43b5c14ae95cd046d142b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcd0606511ff001e533388a9a95c41955c1db2702d43b5c14ae95cd046d142b->enter($__internal_cdcd0606511ff001e533388a9a95c41955c1db2702d43b5c14ae95cd046d142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_b2281839647c364a5074ae65fc8f582c6635cf3a4d193f75cd92070a9d15e12e->leave($__internal_b2281839647c364a5074ae65fc8f582c6635cf3a4d193f75cd92070a9d15e12e_prof);

        
        $__internal_cdcd0606511ff001e533388a9a95c41955c1db2702d43b5c14ae95cd046d142b->leave($__internal_cdcd0606511ff001e533388a9a95c41955c1db2702d43b5c14ae95cd046d142b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ea27401b6bd8a0fd4a678b3201f5c9e6c9d193b3bae6304d2d09792ac2ade16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea27401b6bd8a0fd4a678b3201f5c9e6c9d193b3bae6304d2d09792ac2ade16->enter($__internal_4ea27401b6bd8a0fd4a678b3201f5c9e6c9d193b3bae6304d2d09792ac2ade16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8666ac168847c624bb6b79b56abfabbbac42a44338d0eb47f29a18d159b0a466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8666ac168847c624bb6b79b56abfabbbac42a44338d0eb47f29a18d159b0a466->enter($__internal_8666ac168847c624bb6b79b56abfabbbac42a44338d0eb47f29a18d159b0a466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_8666ac168847c624bb6b79b56abfabbbac42a44338d0eb47f29a18d159b0a466->leave($__internal_8666ac168847c624bb6b79b56abfabbbac42a44338d0eb47f29a18d159b0a466_prof);

        
        $__internal_4ea27401b6bd8a0fd4a678b3201f5c9e6c9d193b3bae6304d2d09792ac2ade16->leave($__internal_4ea27401b6bd8a0fd4a678b3201f5c9e6c9d193b3bae6304d2d09792ac2ade16_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54acf327172dd715446223d572cc585ef37805fc5476ac3893934c841f6d9043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54acf327172dd715446223d572cc585ef37805fc5476ac3893934c841f6d9043->enter($__internal_54acf327172dd715446223d572cc585ef37805fc5476ac3893934c841f6d9043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3417be3c16bffb5131da2a9b4861b7fb400f17bb0ac2a8c5972d82bf017b82e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3417be3c16bffb5131da2a9b4861b7fb400f17bb0ac2a8c5972d82bf017b82e4->enter($__internal_3417be3c16bffb5131da2a9b4861b7fb400f17bb0ac2a8c5972d82bf017b82e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_3417be3c16bffb5131da2a9b4861b7fb400f17bb0ac2a8c5972d82bf017b82e4->leave($__internal_3417be3c16bffb5131da2a9b4861b7fb400f17bb0ac2a8c5972d82bf017b82e4_prof);

        
        $__internal_54acf327172dd715446223d572cc585ef37805fc5476ac3893934c841f6d9043->leave($__internal_54acf327172dd715446223d572cc585ef37805fc5476ac3893934c841f6d9043_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_69344b58403958b566b439bb89161bc1757622af71aa9e0e641a11a05160b1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69344b58403958b566b439bb89161bc1757622af71aa9e0e641a11a05160b1a7->enter($__internal_69344b58403958b566b439bb89161bc1757622af71aa9e0e641a11a05160b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d155589edc8e0fdc436b8eafa360b8319952f424ef2192fb999d9084786a11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d155589edc8e0fdc436b8eafa360b8319952f424ef2192fb999d9084786a11e->enter($__internal_9d155589edc8e0fdc436b8eafa360b8319952f424ef2192fb999d9084786a11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_9d155589edc8e0fdc436b8eafa360b8319952f424ef2192fb999d9084786a11e->leave($__internal_9d155589edc8e0fdc436b8eafa360b8319952f424ef2192fb999d9084786a11e_prof);

        
        $__internal_69344b58403958b566b439bb89161bc1757622af71aa9e0e641a11a05160b1a7->leave($__internal_69344b58403958b566b439bb89161bc1757622af71aa9e0e641a11a05160b1a7_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4af6c796b6c4e82a41056d57cee455ef72b17252fd37921a8f90f64c195dce77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af6c796b6c4e82a41056d57cee455ef72b17252fd37921a8f90f64c195dce77->enter($__internal_4af6c796b6c4e82a41056d57cee455ef72b17252fd37921a8f90f64c195dce77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c570de8870168a570aefb071236b1880b6a0f658dfd174265cfa5fc08557b711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c570de8870168a570aefb071236b1880b6a0f658dfd174265cfa5fc08557b711->enter($__internal_c570de8870168a570aefb071236b1880b6a0f658dfd174265cfa5fc08557b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c570de8870168a570aefb071236b1880b6a0f658dfd174265cfa5fc08557b711->leave($__internal_c570de8870168a570aefb071236b1880b6a0f658dfd174265cfa5fc08557b711_prof);

        
        $__internal_4af6c796b6c4e82a41056d57cee455ef72b17252fd37921a8f90f64c195dce77->leave($__internal_4af6c796b6c4e82a41056d57cee455ef72b17252fd37921a8f90f64c195dce77_prof);

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
