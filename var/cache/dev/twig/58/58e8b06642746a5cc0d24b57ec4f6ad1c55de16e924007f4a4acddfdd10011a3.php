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
        $__internal_935d8dfdcf521565c3edcdc76124917bdbfad81cdf553c14da4d64e72ca153fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935d8dfdcf521565c3edcdc76124917bdbfad81cdf553c14da4d64e72ca153fe->enter($__internal_935d8dfdcf521565c3edcdc76124917bdbfad81cdf553c14da4d64e72ca153fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7f1a9bf5c8b4dc483dbaa52f5cc0876c9880567f17e042cb197e3d2605e8f0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1a9bf5c8b4dc483dbaa52f5cc0876c9880567f17e042cb197e3d2605e8f0c6->enter($__internal_7f1a9bf5c8b4dc483dbaa52f5cc0876c9880567f17e042cb197e3d2605e8f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935d8dfdcf521565c3edcdc76124917bdbfad81cdf553c14da4d64e72ca153fe->leave($__internal_935d8dfdcf521565c3edcdc76124917bdbfad81cdf553c14da4d64e72ca153fe_prof);

        
        $__internal_7f1a9bf5c8b4dc483dbaa52f5cc0876c9880567f17e042cb197e3d2605e8f0c6->leave($__internal_7f1a9bf5c8b4dc483dbaa52f5cc0876c9880567f17e042cb197e3d2605e8f0c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8b52568a01ab4359e70c58b65ebae6be0c4cd98e043f713640aeb4af5c3e334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b52568a01ab4359e70c58b65ebae6be0c4cd98e043f713640aeb4af5c3e334->enter($__internal_e8b52568a01ab4359e70c58b65ebae6be0c4cd98e043f713640aeb4af5c3e334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a3e4cd4ed65f96556ae12a795eaca8cba2a522ddc8e8999b15caf242547d679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3e4cd4ed65f96556ae12a795eaca8cba2a522ddc8e8999b15caf242547d679->enter($__internal_0a3e4cd4ed65f96556ae12a795eaca8cba2a522ddc8e8999b15caf242547d679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0a3e4cd4ed65f96556ae12a795eaca8cba2a522ddc8e8999b15caf242547d679->leave($__internal_0a3e4cd4ed65f96556ae12a795eaca8cba2a522ddc8e8999b15caf242547d679_prof);

        
        $__internal_e8b52568a01ab4359e70c58b65ebae6be0c4cd98e043f713640aeb4af5c3e334->leave($__internal_e8b52568a01ab4359e70c58b65ebae6be0c4cd98e043f713640aeb4af5c3e334_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d7d7dabb989ecbb5d5bc788a59531d1fded55ae7a936cafc6ff49a7cc3e9ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7d7dabb989ecbb5d5bc788a59531d1fded55ae7a936cafc6ff49a7cc3e9ef3->enter($__internal_9d7d7dabb989ecbb5d5bc788a59531d1fded55ae7a936cafc6ff49a7cc3e9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8f42c8dbdc1687e3cb3386fe0b5a90930ebc3908d4b7f10c06b51448594d205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f42c8dbdc1687e3cb3386fe0b5a90930ebc3908d4b7f10c06b51448594d205->enter($__internal_b8f42c8dbdc1687e3cb3386fe0b5a90930ebc3908d4b7f10c06b51448594d205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8f42c8dbdc1687e3cb3386fe0b5a90930ebc3908d4b7f10c06b51448594d205->leave($__internal_b8f42c8dbdc1687e3cb3386fe0b5a90930ebc3908d4b7f10c06b51448594d205_prof);

        
        $__internal_9d7d7dabb989ecbb5d5bc788a59531d1fded55ae7a936cafc6ff49a7cc3e9ef3->leave($__internal_9d7d7dabb989ecbb5d5bc788a59531d1fded55ae7a936cafc6ff49a7cc3e9ef3_prof);

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
