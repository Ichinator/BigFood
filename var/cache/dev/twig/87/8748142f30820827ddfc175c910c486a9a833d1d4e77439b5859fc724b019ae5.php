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
        $__internal_d8b4a0a393191cd022b56687e05bcea3ab7b1beca3d4190f3408d98f9746030c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b4a0a393191cd022b56687e05bcea3ab7b1beca3d4190f3408d98f9746030c->enter($__internal_d8b4a0a393191cd022b56687e05bcea3ab7b1beca3d4190f3408d98f9746030c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $__internal_61c8ec360f48c75ee432a16357da6192ef68fb6f5ec54da2c8a2947f22d4e72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c8ec360f48c75ee432a16357da6192ef68fb6f5ec54da2c8a2947f22d4e72d->enter($__internal_61c8ec360f48c75ee432a16357da6192ef68fb6f5ec54da2c8a2947f22d4e72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8b4a0a393191cd022b56687e05bcea3ab7b1beca3d4190f3408d98f9746030c->leave($__internal_d8b4a0a393191cd022b56687e05bcea3ab7b1beca3d4190f3408d98f9746030c_prof);

        
        $__internal_61c8ec360f48c75ee432a16357da6192ef68fb6f5ec54da2c8a2947f22d4e72d->leave($__internal_61c8ec360f48c75ee432a16357da6192ef68fb6f5ec54da2c8a2947f22d4e72d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_83294ec803329a194b8e6f3c7c69e696a855b1e64fb1d1e3b1467f4719a04ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83294ec803329a194b8e6f3c7c69e696a855b1e64fb1d1e3b1467f4719a04ab5->enter($__internal_83294ec803329a194b8e6f3c7c69e696a855b1e64fb1d1e3b1467f4719a04ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c8cd03b01b33897e00789d25b119dc0e06cea82460022915be72997588ff0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8cd03b01b33897e00789d25b119dc0e06cea82460022915be72997588ff0e9->enter($__internal_9c8cd03b01b33897e00789d25b119dc0e06cea82460022915be72997588ff0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c8cd03b01b33897e00789d25b119dc0e06cea82460022915be72997588ff0e9->leave($__internal_9c8cd03b01b33897e00789d25b119dc0e06cea82460022915be72997588ff0e9_prof);

        
        $__internal_83294ec803329a194b8e6f3c7c69e696a855b1e64fb1d1e3b1467f4719a04ab5->leave($__internal_83294ec803329a194b8e6f3c7c69e696a855b1e64fb1d1e3b1467f4719a04ab5_prof);

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
