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
        $__internal_f1a451d521cedd494c611900035129815f3d1feb322075b26d2f4ce895aa221f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a451d521cedd494c611900035129815f3d1feb322075b26d2f4ce895aa221f->enter($__internal_f1a451d521cedd494c611900035129815f3d1feb322075b26d2f4ce895aa221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5ced857c30f7a3bbdb6aa593039a6846ffd33deae1143ede9821f3fcd2d2bb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ced857c30f7a3bbdb6aa593039a6846ffd33deae1143ede9821f3fcd2d2bb4a->enter($__internal_5ced857c30f7a3bbdb6aa593039a6846ffd33deae1143ede9821f3fcd2d2bb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a451d521cedd494c611900035129815f3d1feb322075b26d2f4ce895aa221f->leave($__internal_f1a451d521cedd494c611900035129815f3d1feb322075b26d2f4ce895aa221f_prof);

        
        $__internal_5ced857c30f7a3bbdb6aa593039a6846ffd33deae1143ede9821f3fcd2d2bb4a->leave($__internal_5ced857c30f7a3bbdb6aa593039a6846ffd33deae1143ede9821f3fcd2d2bb4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d7926b0d3ba91d2c52ad7cb8e33107896d2d51983287e5beffde9c7f45e4d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7926b0d3ba91d2c52ad7cb8e33107896d2d51983287e5beffde9c7f45e4d33->enter($__internal_4d7926b0d3ba91d2c52ad7cb8e33107896d2d51983287e5beffde9c7f45e4d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_914f0f35a829812f13082795187a3b1f404f5776229299f557194f6ad0595cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914f0f35a829812f13082795187a3b1f404f5776229299f557194f6ad0595cbd->enter($__internal_914f0f35a829812f13082795187a3b1f404f5776229299f557194f6ad0595cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_914f0f35a829812f13082795187a3b1f404f5776229299f557194f6ad0595cbd->leave($__internal_914f0f35a829812f13082795187a3b1f404f5776229299f557194f6ad0595cbd_prof);

        
        $__internal_4d7926b0d3ba91d2c52ad7cb8e33107896d2d51983287e5beffde9c7f45e4d33->leave($__internal_4d7926b0d3ba91d2c52ad7cb8e33107896d2d51983287e5beffde9c7f45e4d33_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf8cb899ee234058d6e5735faa83517c7338717fd286c209530928bade4928e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf8cb899ee234058d6e5735faa83517c7338717fd286c209530928bade4928e->enter($__internal_9cf8cb899ee234058d6e5735faa83517c7338717fd286c209530928bade4928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d95e1a1ddd3ac60e28776132130d189a7f4384b119434185705f3802653b2888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95e1a1ddd3ac60e28776132130d189a7f4384b119434185705f3802653b2888->enter($__internal_d95e1a1ddd3ac60e28776132130d189a7f4384b119434185705f3802653b2888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d95e1a1ddd3ac60e28776132130d189a7f4384b119434185705f3802653b2888->leave($__internal_d95e1a1ddd3ac60e28776132130d189a7f4384b119434185705f3802653b2888_prof);

        
        $__internal_9cf8cb899ee234058d6e5735faa83517c7338717fd286c209530928bade4928e->leave($__internal_9cf8cb899ee234058d6e5735faa83517c7338717fd286c209530928bade4928e_prof);

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
