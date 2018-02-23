<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3aad7571cf8e70695af493d180ae240343afcc50bd50cbb244a369fe654fd996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_735eab99b582ff52790f24c997d7fea3d8b7b7dd2d59551a57db2a2e9e187520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735eab99b582ff52790f24c997d7fea3d8b7b7dd2d59551a57db2a2e9e187520->enter($__internal_735eab99b582ff52790f24c997d7fea3d8b7b7dd2d59551a57db2a2e9e187520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2b1e68dd6e59e59345e54f8f68534a8cb7544074daf3c2953a5328c8f9a72cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1e68dd6e59e59345e54f8f68534a8cb7544074daf3c2953a5328c8f9a72cf7->enter($__internal_2b1e68dd6e59e59345e54f8f68534a8cb7544074daf3c2953a5328c8f9a72cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735eab99b582ff52790f24c997d7fea3d8b7b7dd2d59551a57db2a2e9e187520->leave($__internal_735eab99b582ff52790f24c997d7fea3d8b7b7dd2d59551a57db2a2e9e187520_prof);

        
        $__internal_2b1e68dd6e59e59345e54f8f68534a8cb7544074daf3c2953a5328c8f9a72cf7->leave($__internal_2b1e68dd6e59e59345e54f8f68534a8cb7544074daf3c2953a5328c8f9a72cf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfe32f1867b7a57d5bb2f094904d6cafd5aea9aae4e5f3cedc309feded837879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe32f1867b7a57d5bb2f094904d6cafd5aea9aae4e5f3cedc309feded837879->enter($__internal_dfe32f1867b7a57d5bb2f094904d6cafd5aea9aae4e5f3cedc309feded837879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44c9012e6d26f603e4efbdd4576fb77f2b901b01e65f10d221a687edba4b9dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c9012e6d26f603e4efbdd4576fb77f2b901b01e65f10d221a687edba4b9dff->enter($__internal_44c9012e6d26f603e4efbdd4576fb77f2b901b01e65f10d221a687edba4b9dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_44c9012e6d26f603e4efbdd4576fb77f2b901b01e65f10d221a687edba4b9dff->leave($__internal_44c9012e6d26f603e4efbdd4576fb77f2b901b01e65f10d221a687edba4b9dff_prof);

        
        $__internal_dfe32f1867b7a57d5bb2f094904d6cafd5aea9aae4e5f3cedc309feded837879->leave($__internal_dfe32f1867b7a57d5bb2f094904d6cafd5aea9aae4e5f3cedc309feded837879_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_903b2ad9f59599e573ca2a145b394332552229e57931c167ed176cb40a5d0af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903b2ad9f59599e573ca2a145b394332552229e57931c167ed176cb40a5d0af0->enter($__internal_903b2ad9f59599e573ca2a145b394332552229e57931c167ed176cb40a5d0af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0613dcb421c8afc3e69c8829211c6527a70086a3f425f98167f196e73f4ecc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0613dcb421c8afc3e69c8829211c6527a70086a3f425f98167f196e73f4ecc6a->enter($__internal_0613dcb421c8afc3e69c8829211c6527a70086a3f425f98167f196e73f4ecc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0613dcb421c8afc3e69c8829211c6527a70086a3f425f98167f196e73f4ecc6a->leave($__internal_0613dcb421c8afc3e69c8829211c6527a70086a3f425f98167f196e73f4ecc6a_prof);

        
        $__internal_903b2ad9f59599e573ca2a145b394332552229e57931c167ed176cb40a5d0af0->leave($__internal_903b2ad9f59599e573ca2a145b394332552229e57931c167ed176cb40a5d0af0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
