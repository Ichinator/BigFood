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
        $__internal_b1ba6a41af25e5d3f0e731bb09d874d29d7250a136ea8e1747000515e86cf9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ba6a41af25e5d3f0e731bb09d874d29d7250a136ea8e1747000515e86cf9aa->enter($__internal_b1ba6a41af25e5d3f0e731bb09d874d29d7250a136ea8e1747000515e86cf9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9a65290f4f96bc884f0f881fbaf8cf064d2a72e9398de28670e9312467959ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a65290f4f96bc884f0f881fbaf8cf064d2a72e9398de28670e9312467959ae7->enter($__internal_9a65290f4f96bc884f0f881fbaf8cf064d2a72e9398de28670e9312467959ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ba6a41af25e5d3f0e731bb09d874d29d7250a136ea8e1747000515e86cf9aa->leave($__internal_b1ba6a41af25e5d3f0e731bb09d874d29d7250a136ea8e1747000515e86cf9aa_prof);

        
        $__internal_9a65290f4f96bc884f0f881fbaf8cf064d2a72e9398de28670e9312467959ae7->leave($__internal_9a65290f4f96bc884f0f881fbaf8cf064d2a72e9398de28670e9312467959ae7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_160b6fd2883c8c8071680c04dc98dfd38fdb4432a02238e3d400b7790a50db6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160b6fd2883c8c8071680c04dc98dfd38fdb4432a02238e3d400b7790a50db6c->enter($__internal_160b6fd2883c8c8071680c04dc98dfd38fdb4432a02238e3d400b7790a50db6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af1c9298f7b4c8cf913ba504455537cbd3d1f7a687e92c6e881e25e6bb15a592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1c9298f7b4c8cf913ba504455537cbd3d1f7a687e92c6e881e25e6bb15a592->enter($__internal_af1c9298f7b4c8cf913ba504455537cbd3d1f7a687e92c6e881e25e6bb15a592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_af1c9298f7b4c8cf913ba504455537cbd3d1f7a687e92c6e881e25e6bb15a592->leave($__internal_af1c9298f7b4c8cf913ba504455537cbd3d1f7a687e92c6e881e25e6bb15a592_prof);

        
        $__internal_160b6fd2883c8c8071680c04dc98dfd38fdb4432a02238e3d400b7790a50db6c->leave($__internal_160b6fd2883c8c8071680c04dc98dfd38fdb4432a02238e3d400b7790a50db6c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7053a2b0f67ac886feb4607f090ecb8a2f21674bce2b52fa0be0a170c304c8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7053a2b0f67ac886feb4607f090ecb8a2f21674bce2b52fa0be0a170c304c8f3->enter($__internal_7053a2b0f67ac886feb4607f090ecb8a2f21674bce2b52fa0be0a170c304c8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b3b39781de80ae726fc42c4c73615ffcd6290b3afa38945398cee515cb5b6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3b39781de80ae726fc42c4c73615ffcd6290b3afa38945398cee515cb5b6fb->enter($__internal_9b3b39781de80ae726fc42c4c73615ffcd6290b3afa38945398cee515cb5b6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b3b39781de80ae726fc42c4c73615ffcd6290b3afa38945398cee515cb5b6fb->leave($__internal_9b3b39781de80ae726fc42c4c73615ffcd6290b3afa38945398cee515cb5b6fb_prof);

        
        $__internal_7053a2b0f67ac886feb4607f090ecb8a2f21674bce2b52fa0be0a170c304c8f3->leave($__internal_7053a2b0f67ac886feb4607f090ecb8a2f21674bce2b52fa0be0a170c304c8f3_prof);

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
