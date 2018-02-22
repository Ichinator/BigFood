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
        $__internal_13c2126cb68ef4c8dfc459ec14f7822d5c68eac4d93c0f0e3818f4ad5311218c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c2126cb68ef4c8dfc459ec14f7822d5c68eac4d93c0f0e3818f4ad5311218c->enter($__internal_13c2126cb68ef4c8dfc459ec14f7822d5c68eac4d93c0f0e3818f4ad5311218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_c4cc5f15e76edd8391a2cd8ca93d53cbc473236b242df3d6e0f542a061a7a4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cc5f15e76edd8391a2cd8ca93d53cbc473236b242df3d6e0f542a061a7a4f6->enter($__internal_c4cc5f15e76edd8391a2cd8ca93d53cbc473236b242df3d6e0f542a061a7a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_13c2126cb68ef4c8dfc459ec14f7822d5c68eac4d93c0f0e3818f4ad5311218c->leave($__internal_13c2126cb68ef4c8dfc459ec14f7822d5c68eac4d93c0f0e3818f4ad5311218c_prof);

        
        $__internal_c4cc5f15e76edd8391a2cd8ca93d53cbc473236b242df3d6e0f542a061a7a4f6->leave($__internal_c4cc5f15e76edd8391a2cd8ca93d53cbc473236b242df3d6e0f542a061a7a4f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9768e741b62c670ec06a95223c2ff2f7c0f142bbaaf16774b277cc478c63aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9768e741b62c670ec06a95223c2ff2f7c0f142bbaaf16774b277cc478c63aed->enter($__internal_d9768e741b62c670ec06a95223c2ff2f7c0f142bbaaf16774b277cc478c63aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_deca8e7ea544de4dfe05baa8738cc493b9a99e75b7cf9a40e05765e1e83040bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deca8e7ea544de4dfe05baa8738cc493b9a99e75b7cf9a40e05765e1e83040bd->enter($__internal_deca8e7ea544de4dfe05baa8738cc493b9a99e75b7cf9a40e05765e1e83040bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_deca8e7ea544de4dfe05baa8738cc493b9a99e75b7cf9a40e05765e1e83040bd->leave($__internal_deca8e7ea544de4dfe05baa8738cc493b9a99e75b7cf9a40e05765e1e83040bd_prof);

        
        $__internal_d9768e741b62c670ec06a95223c2ff2f7c0f142bbaaf16774b277cc478c63aed->leave($__internal_d9768e741b62c670ec06a95223c2ff2f7c0f142bbaaf16774b277cc478c63aed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_749fe825245a8caf9fa4ed78991f6e344a043c5a227be0f7dd1dc75029ff26c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749fe825245a8caf9fa4ed78991f6e344a043c5a227be0f7dd1dc75029ff26c0->enter($__internal_749fe825245a8caf9fa4ed78991f6e344a043c5a227be0f7dd1dc75029ff26c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bfdd90bb3f21b23787f31ee6535065b4d7144bcd9277785d6c9bc203430c4b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdd90bb3f21b23787f31ee6535065b4d7144bcd9277785d6c9bc203430c4b05->enter($__internal_bfdd90bb3f21b23787f31ee6535065b4d7144bcd9277785d6c9bc203430c4b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_bfdd90bb3f21b23787f31ee6535065b4d7144bcd9277785d6c9bc203430c4b05->leave($__internal_bfdd90bb3f21b23787f31ee6535065b4d7144bcd9277785d6c9bc203430c4b05_prof);

        
        $__internal_749fe825245a8caf9fa4ed78991f6e344a043c5a227be0f7dd1dc75029ff26c0->leave($__internal_749fe825245a8caf9fa4ed78991f6e344a043c5a227be0f7dd1dc75029ff26c0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c51ee71f45dca95ccccbf2797c14dee7fd0a874ee9bd93c5413f87873fc74101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51ee71f45dca95ccccbf2797c14dee7fd0a874ee9bd93c5413f87873fc74101->enter($__internal_c51ee71f45dca95ccccbf2797c14dee7fd0a874ee9bd93c5413f87873fc74101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc1b0e916207778fd30814a408d0eb8477bf8df8e55de86d81703178d3c882c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1b0e916207778fd30814a408d0eb8477bf8df8e55de86d81703178d3c882c1->enter($__internal_bc1b0e916207778fd30814a408d0eb8477bf8df8e55de86d81703178d3c882c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_bc1b0e916207778fd30814a408d0eb8477bf8df8e55de86d81703178d3c882c1->leave($__internal_bc1b0e916207778fd30814a408d0eb8477bf8df8e55de86d81703178d3c882c1_prof);

        
        $__internal_c51ee71f45dca95ccccbf2797c14dee7fd0a874ee9bd93c5413f87873fc74101->leave($__internal_c51ee71f45dca95ccccbf2797c14dee7fd0a874ee9bd93c5413f87873fc74101_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fee0239fa4c2623d51d2f46f4292b9d3fe281c0596d507cdd832f57936a0a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fee0239fa4c2623d51d2f46f4292b9d3fe281c0596d507cdd832f57936a0a88->enter($__internal_2fee0239fa4c2623d51d2f46f4292b9d3fe281c0596d507cdd832f57936a0a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd936f514718b381034f25a4538421de7a0b1e5027145f1c324bf41f09137a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd936f514718b381034f25a4538421de7a0b1e5027145f1c324bf41f09137a4d->enter($__internal_dd936f514718b381034f25a4538421de7a0b1e5027145f1c324bf41f09137a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dd936f514718b381034f25a4538421de7a0b1e5027145f1c324bf41f09137a4d->leave($__internal_dd936f514718b381034f25a4538421de7a0b1e5027145f1c324bf41f09137a4d_prof);

        
        $__internal_2fee0239fa4c2623d51d2f46f4292b9d3fe281c0596d507cdd832f57936a0a88->leave($__internal_2fee0239fa4c2623d51d2f46f4292b9d3fe281c0596d507cdd832f57936a0a88_prof);

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
