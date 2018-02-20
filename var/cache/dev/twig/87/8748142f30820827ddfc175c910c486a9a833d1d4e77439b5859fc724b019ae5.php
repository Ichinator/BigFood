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
        $__internal_81cfeb3753307e40845161fdb71e8a9e04d96a142121669bd03a33855bb83138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cfeb3753307e40845161fdb71e8a9e04d96a142121669bd03a33855bb83138->enter($__internal_81cfeb3753307e40845161fdb71e8a9e04d96a142121669bd03a33855bb83138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $__internal_8c259ce86f7ffcade548b3c882edb1e37f436d411611b0cdd0e418c42534d3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c259ce86f7ffcade548b3c882edb1e37f436d411611b0cdd0e418c42534d3eb->enter($__internal_8c259ce86f7ffcade548b3c882edb1e37f436d411611b0cdd0e418c42534d3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81cfeb3753307e40845161fdb71e8a9e04d96a142121669bd03a33855bb83138->leave($__internal_81cfeb3753307e40845161fdb71e8a9e04d96a142121669bd03a33855bb83138_prof);

        
        $__internal_8c259ce86f7ffcade548b3c882edb1e37f436d411611b0cdd0e418c42534d3eb->leave($__internal_8c259ce86f7ffcade548b3c882edb1e37f436d411611b0cdd0e418c42534d3eb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_44a95edddab8bbd37caac773cb2b696fbfcc6e4f79c1764df7c3a215146733ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a95edddab8bbd37caac773cb2b696fbfcc6e4f79c1764df7c3a215146733ac->enter($__internal_44a95edddab8bbd37caac773cb2b696fbfcc6e4f79c1764df7c3a215146733ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20a0febb185f9fd7e83ba824237098a9acab6f7cf8b132f783a65ce8806523ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a0febb185f9fd7e83ba824237098a9acab6f7cf8b132f783a65ce8806523ff->enter($__internal_20a0febb185f9fd7e83ba824237098a9acab6f7cf8b132f783a65ce8806523ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20a0febb185f9fd7e83ba824237098a9acab6f7cf8b132f783a65ce8806523ff->leave($__internal_20a0febb185f9fd7e83ba824237098a9acab6f7cf8b132f783a65ce8806523ff_prof);

        
        $__internal_44a95edddab8bbd37caac773cb2b696fbfcc6e4f79c1764df7c3a215146733ac->leave($__internal_44a95edddab8bbd37caac773cb2b696fbfcc6e4f79c1764df7c3a215146733ac_prof);

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
