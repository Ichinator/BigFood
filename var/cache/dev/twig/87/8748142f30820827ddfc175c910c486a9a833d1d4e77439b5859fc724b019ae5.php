<?php

/* IchinatorContactBundle:Default:index.html.twig */
class __TwigTemplate_8675b7f438861c0318bc85a0b269632294f26cf3ba8157bb4421a4da8db3af09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorContactBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe012f29a41cda38c4615601a10714a8ae91c3cfb6860a5aa66f95045c7e96ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe012f29a41cda38c4615601a10714a8ae91c3cfb6860a5aa66f95045c7e96ec->enter($__internal_fe012f29a41cda38c4615601a10714a8ae91c3cfb6860a5aa66f95045c7e96ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $__internal_59220ea29e3c1f60f4a648720948e960b99b86c148adb5b859c128131d3f5597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59220ea29e3c1f60f4a648720948e960b99b86c148adb5b859c128131d3f5597->enter($__internal_59220ea29e3c1f60f4a648720948e960b99b86c148adb5b859c128131d3f5597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe012f29a41cda38c4615601a10714a8ae91c3cfb6860a5aa66f95045c7e96ec->leave($__internal_fe012f29a41cda38c4615601a10714a8ae91c3cfb6860a5aa66f95045c7e96ec_prof);

        
        $__internal_59220ea29e3c1f60f4a648720948e960b99b86c148adb5b859c128131d3f5597->leave($__internal_59220ea29e3c1f60f4a648720948e960b99b86c148adb5b859c128131d3f5597_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_490109bf8ba0d592a49af9f26c6d8d13119b31d12324752c9f277f311e571c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490109bf8ba0d592a49af9f26c6d8d13119b31d12324752c9f277f311e571c83->enter($__internal_490109bf8ba0d592a49af9f26c6d8d13119b31d12324752c9f277f311e571c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a05bad55fea5e91121891e00c42a02c4d73378eb35be2c141bd2aa16da351f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05bad55fea5e91121891e00c42a02c4d73378eb35be2c141bd2aa16da351f60->enter($__internal_a05bad55fea5e91121891e00c42a02c4d73378eb35be2c141bd2aa16da351f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a05bad55fea5e91121891e00c42a02c4d73378eb35be2c141bd2aa16da351f60->leave($__internal_a05bad55fea5e91121891e00c42a02c4d73378eb35be2c141bd2aa16da351f60_prof);

        
        $__internal_490109bf8ba0d592a49af9f26c6d8d13119b31d12324752c9f277f311e571c83->leave($__internal_490109bf8ba0d592a49af9f26c6d8d13119b31d12324752c9f277f311e571c83_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorContactBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    {{ parent() }}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "IchinatorContactBundle:Default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/ContactBundle/Resources/views/Default/index.html.twig");
    }
}
