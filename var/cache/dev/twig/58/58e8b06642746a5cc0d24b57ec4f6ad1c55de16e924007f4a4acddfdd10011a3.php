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
        $__internal_d8584368bcf61591eb9a1fca658e27494a10bbef289e619893a5edacb2a1cb01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8584368bcf61591eb9a1fca658e27494a10bbef289e619893a5edacb2a1cb01->enter($__internal_d8584368bcf61591eb9a1fca658e27494a10bbef289e619893a5edacb2a1cb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6bb1ae9e185da8d19a272d7f35bdfabcb12722fb3d3d84601111bd90c8938696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb1ae9e185da8d19a272d7f35bdfabcb12722fb3d3d84601111bd90c8938696->enter($__internal_6bb1ae9e185da8d19a272d7f35bdfabcb12722fb3d3d84601111bd90c8938696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8584368bcf61591eb9a1fca658e27494a10bbef289e619893a5edacb2a1cb01->leave($__internal_d8584368bcf61591eb9a1fca658e27494a10bbef289e619893a5edacb2a1cb01_prof);

        
        $__internal_6bb1ae9e185da8d19a272d7f35bdfabcb12722fb3d3d84601111bd90c8938696->leave($__internal_6bb1ae9e185da8d19a272d7f35bdfabcb12722fb3d3d84601111bd90c8938696_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a698fb5c48f060b5d5e3ca3ee03bf61e9b75a65b4b54bba020ab4242e0311c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a698fb5c48f060b5d5e3ca3ee03bf61e9b75a65b4b54bba020ab4242e0311c43->enter($__internal_a698fb5c48f060b5d5e3ca3ee03bf61e9b75a65b4b54bba020ab4242e0311c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82d23ffb0511623a00c9c95d8258d116fddfeab9371f3370ca6546a425364f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d23ffb0511623a00c9c95d8258d116fddfeab9371f3370ca6546a425364f21->enter($__internal_82d23ffb0511623a00c9c95d8258d116fddfeab9371f3370ca6546a425364f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_82d23ffb0511623a00c9c95d8258d116fddfeab9371f3370ca6546a425364f21->leave($__internal_82d23ffb0511623a00c9c95d8258d116fddfeab9371f3370ca6546a425364f21_prof);

        
        $__internal_a698fb5c48f060b5d5e3ca3ee03bf61e9b75a65b4b54bba020ab4242e0311c43->leave($__internal_a698fb5c48f060b5d5e3ca3ee03bf61e9b75a65b4b54bba020ab4242e0311c43_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3a479ac5f5a1331fa543c47d7f40d44bb635a90718880634ba390a407591dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a479ac5f5a1331fa543c47d7f40d44bb635a90718880634ba390a407591dee->enter($__internal_b3a479ac5f5a1331fa543c47d7f40d44bb635a90718880634ba390a407591dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee2a53b817006f473bb2db1983a84c87ef37904ac9b2dcdfaaf9eb5740461136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2a53b817006f473bb2db1983a84c87ef37904ac9b2dcdfaaf9eb5740461136->enter($__internal_ee2a53b817006f473bb2db1983a84c87ef37904ac9b2dcdfaaf9eb5740461136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee2a53b817006f473bb2db1983a84c87ef37904ac9b2dcdfaaf9eb5740461136->leave($__internal_ee2a53b817006f473bb2db1983a84c87ef37904ac9b2dcdfaaf9eb5740461136_prof);

        
        $__internal_b3a479ac5f5a1331fa543c47d7f40d44bb635a90718880634ba390a407591dee->leave($__internal_b3a479ac5f5a1331fa543c47d7f40d44bb635a90718880634ba390a407591dee_prof);

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
