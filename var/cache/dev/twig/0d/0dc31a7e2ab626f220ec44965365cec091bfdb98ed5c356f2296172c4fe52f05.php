<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8007b86327217cf1b916deeef3a742949926d63a80177d6889dc896a6b70d26a extends Twig_Template
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
        $__internal_3a796469878f7eef7ba9d81a783ee71c4a45a423c758026ca0e8cb74a289e867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a796469878f7eef7ba9d81a783ee71c4a45a423c758026ca0e8cb74a289e867->enter($__internal_3a796469878f7eef7ba9d81a783ee71c4a45a423c758026ca0e8cb74a289e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a02a252b9ca2da1898e089a0faa609b281802a1b1d1b921a8d3c1dbd0042e283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02a252b9ca2da1898e089a0faa609b281802a1b1d1b921a8d3c1dbd0042e283->enter($__internal_a02a252b9ca2da1898e089a0faa609b281802a1b1d1b921a8d3c1dbd0042e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a796469878f7eef7ba9d81a783ee71c4a45a423c758026ca0e8cb74a289e867->leave($__internal_3a796469878f7eef7ba9d81a783ee71c4a45a423c758026ca0e8cb74a289e867_prof);

        
        $__internal_a02a252b9ca2da1898e089a0faa609b281802a1b1d1b921a8d3c1dbd0042e283->leave($__internal_a02a252b9ca2da1898e089a0faa609b281802a1b1d1b921a8d3c1dbd0042e283_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16b8d6d76584bb5b6485e1cb724183246034a9b7b7d1d44eaecef81602321d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b8d6d76584bb5b6485e1cb724183246034a9b7b7d1d44eaecef81602321d56->enter($__internal_16b8d6d76584bb5b6485e1cb724183246034a9b7b7d1d44eaecef81602321d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c19365177a18883b918b6edace3a02127e37ff73f42ca4fbabb58c4a41797e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19365177a18883b918b6edace3a02127e37ff73f42ca4fbabb58c4a41797e4d->enter($__internal_c19365177a18883b918b6edace3a02127e37ff73f42ca4fbabb58c4a41797e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c19365177a18883b918b6edace3a02127e37ff73f42ca4fbabb58c4a41797e4d->leave($__internal_c19365177a18883b918b6edace3a02127e37ff73f42ca4fbabb58c4a41797e4d_prof);

        
        $__internal_16b8d6d76584bb5b6485e1cb724183246034a9b7b7d1d44eaecef81602321d56->leave($__internal_16b8d6d76584bb5b6485e1cb724183246034a9b7b7d1d44eaecef81602321d56_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d34784091662579b4264aa90c871e1ba2498d03c54c3c864015430f9e4cf2965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34784091662579b4264aa90c871e1ba2498d03c54c3c864015430f9e4cf2965->enter($__internal_d34784091662579b4264aa90c871e1ba2498d03c54c3c864015430f9e4cf2965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b76e732bd98ee9131ba1bb8071dd17a381825aad09024535546f2a03e6b77f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76e732bd98ee9131ba1bb8071dd17a381825aad09024535546f2a03e6b77f66->enter($__internal_b76e732bd98ee9131ba1bb8071dd17a381825aad09024535546f2a03e6b77f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b76e732bd98ee9131ba1bb8071dd17a381825aad09024535546f2a03e6b77f66->leave($__internal_b76e732bd98ee9131ba1bb8071dd17a381825aad09024535546f2a03e6b77f66_prof);

        
        $__internal_d34784091662579b4264aa90c871e1ba2498d03c54c3c864015430f9e4cf2965->leave($__internal_d34784091662579b4264aa90c871e1ba2498d03c54c3c864015430f9e4cf2965_prof);

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
