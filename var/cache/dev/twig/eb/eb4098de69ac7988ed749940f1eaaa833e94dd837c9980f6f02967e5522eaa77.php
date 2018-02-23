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
        $__internal_566e59f1a75ab2d78f19ebf4ff69a9d5e8a7d2a33bd61edef57728c5fb9e256e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566e59f1a75ab2d78f19ebf4ff69a9d5e8a7d2a33bd61edef57728c5fb9e256e->enter($__internal_566e59f1a75ab2d78f19ebf4ff69a9d5e8a7d2a33bd61edef57728c5fb9e256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_fcd8374b099e8101eab548b362c9923c038b7dd4b02407a2f0e7b0abcbd638e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd8374b099e8101eab548b362c9923c038b7dd4b02407a2f0e7b0abcbd638e0->enter($__internal_fcd8374b099e8101eab548b362c9923c038b7dd4b02407a2f0e7b0abcbd638e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_566e59f1a75ab2d78f19ebf4ff69a9d5e8a7d2a33bd61edef57728c5fb9e256e->leave($__internal_566e59f1a75ab2d78f19ebf4ff69a9d5e8a7d2a33bd61edef57728c5fb9e256e_prof);

        
        $__internal_fcd8374b099e8101eab548b362c9923c038b7dd4b02407a2f0e7b0abcbd638e0->leave($__internal_fcd8374b099e8101eab548b362c9923c038b7dd4b02407a2f0e7b0abcbd638e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27be15d58ea67f50f65b39e6aacbd5a66f05b0489bb4815a7d0aac9f2c500ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27be15d58ea67f50f65b39e6aacbd5a66f05b0489bb4815a7d0aac9f2c500ce0->enter($__internal_27be15d58ea67f50f65b39e6aacbd5a66f05b0489bb4815a7d0aac9f2c500ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92d59081dc546edd79cd28ff426f802ad755ff0160730da3cd622ccb850e2ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d59081dc546edd79cd28ff426f802ad755ff0160730da3cd622ccb850e2ecb->enter($__internal_92d59081dc546edd79cd28ff426f802ad755ff0160730da3cd622ccb850e2ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_92d59081dc546edd79cd28ff426f802ad755ff0160730da3cd622ccb850e2ecb->leave($__internal_92d59081dc546edd79cd28ff426f802ad755ff0160730da3cd622ccb850e2ecb_prof);

        
        $__internal_27be15d58ea67f50f65b39e6aacbd5a66f05b0489bb4815a7d0aac9f2c500ce0->leave($__internal_27be15d58ea67f50f65b39e6aacbd5a66f05b0489bb4815a7d0aac9f2c500ce0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34e87539ae7d2195c252313850f662d3e77acc474ed23854ed10cdbb6a88ebfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e87539ae7d2195c252313850f662d3e77acc474ed23854ed10cdbb6a88ebfe->enter($__internal_34e87539ae7d2195c252313850f662d3e77acc474ed23854ed10cdbb6a88ebfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0643a57afc11b97642e2a5ce72628942af1568752f4d7cf467d31128fa0941ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0643a57afc11b97642e2a5ce72628942af1568752f4d7cf467d31128fa0941ce->enter($__internal_0643a57afc11b97642e2a5ce72628942af1568752f4d7cf467d31128fa0941ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_0643a57afc11b97642e2a5ce72628942af1568752f4d7cf467d31128fa0941ce->leave($__internal_0643a57afc11b97642e2a5ce72628942af1568752f4d7cf467d31128fa0941ce_prof);

        
        $__internal_34e87539ae7d2195c252313850f662d3e77acc474ed23854ed10cdbb6a88ebfe->leave($__internal_34e87539ae7d2195c252313850f662d3e77acc474ed23854ed10cdbb6a88ebfe_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b905107f0e3852a036957b7e46f685bf3a6ddb33eef88c53d5c8fa2f0e657e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b905107f0e3852a036957b7e46f685bf3a6ddb33eef88c53d5c8fa2f0e657e0->enter($__internal_0b905107f0e3852a036957b7e46f685bf3a6ddb33eef88c53d5c8fa2f0e657e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93f80d8220ca4dc44ca14f44c918c74ab8b40432a9cbe2c3931955bca2f51411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f80d8220ca4dc44ca14f44c918c74ab8b40432a9cbe2c3931955bca2f51411->enter($__internal_93f80d8220ca4dc44ca14f44c918c74ab8b40432a9cbe2c3931955bca2f51411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_93f80d8220ca4dc44ca14f44c918c74ab8b40432a9cbe2c3931955bca2f51411->leave($__internal_93f80d8220ca4dc44ca14f44c918c74ab8b40432a9cbe2c3931955bca2f51411_prof);

        
        $__internal_0b905107f0e3852a036957b7e46f685bf3a6ddb33eef88c53d5c8fa2f0e657e0->leave($__internal_0b905107f0e3852a036957b7e46f685bf3a6ddb33eef88c53d5c8fa2f0e657e0_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_234376db470eff01eb3ff3cc23450336303f668c23fc1ae0ed33b1746f393524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234376db470eff01eb3ff3cc23450336303f668c23fc1ae0ed33b1746f393524->enter($__internal_234376db470eff01eb3ff3cc23450336303f668c23fc1ae0ed33b1746f393524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68b001e010b1daf2a6248812f09b3619635e032073d26e8bd597935650a8d4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b001e010b1daf2a6248812f09b3619635e032073d26e8bd597935650a8d4a8->enter($__internal_68b001e010b1daf2a6248812f09b3619635e032073d26e8bd597935650a8d4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_68b001e010b1daf2a6248812f09b3619635e032073d26e8bd597935650a8d4a8->leave($__internal_68b001e010b1daf2a6248812f09b3619635e032073d26e8bd597935650a8d4a8_prof);

        
        $__internal_234376db470eff01eb3ff3cc23450336303f668c23fc1ae0ed33b1746f393524->leave($__internal_234376db470eff01eb3ff3cc23450336303f668c23fc1ae0ed33b1746f393524_prof);

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
