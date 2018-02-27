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
        $__internal_0be2a552ee581252b9482762a4643a15306954e12a3cb72f2451240a6a71bb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be2a552ee581252b9482762a4643a15306954e12a3cb72f2451240a6a71bb49->enter($__internal_0be2a552ee581252b9482762a4643a15306954e12a3cb72f2451240a6a71bb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $__internal_5d6a1cb1920bf2bf023cb94b6e0371121c8343edc0d405b02898e56e19cc9739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6a1cb1920bf2bf023cb94b6e0371121c8343edc0d405b02898e56e19cc9739->enter($__internal_5d6a1cb1920bf2bf023cb94b6e0371121c8343edc0d405b02898e56e19cc9739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be2a552ee581252b9482762a4643a15306954e12a3cb72f2451240a6a71bb49->leave($__internal_0be2a552ee581252b9482762a4643a15306954e12a3cb72f2451240a6a71bb49_prof);

        
        $__internal_5d6a1cb1920bf2bf023cb94b6e0371121c8343edc0d405b02898e56e19cc9739->leave($__internal_5d6a1cb1920bf2bf023cb94b6e0371121c8343edc0d405b02898e56e19cc9739_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c598e50c67a8f3ca1f5402451aef54fc50d39ff74ceee48c5ea2bf865c7400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c598e50c67a8f3ca1f5402451aef54fc50d39ff74ceee48c5ea2bf865c7400->enter($__internal_73c598e50c67a8f3ca1f5402451aef54fc50d39ff74ceee48c5ea2bf865c7400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f0fcb489adf7052633152f3eb2f284f42adb00ac6e4d3add748313c64697393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0fcb489adf7052633152f3eb2f284f42adb00ac6e4d3add748313c64697393->enter($__internal_3f0fcb489adf7052633152f3eb2f284f42adb00ac6e4d3add748313c64697393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f0fcb489adf7052633152f3eb2f284f42adb00ac6e4d3add748313c64697393->leave($__internal_3f0fcb489adf7052633152f3eb2f284f42adb00ac6e4d3add748313c64697393_prof);

        
        $__internal_73c598e50c67a8f3ca1f5402451aef54fc50d39ff74ceee48c5ea2bf865c7400->leave($__internal_73c598e50c67a8f3ca1f5402451aef54fc50d39ff74ceee48c5ea2bf865c7400_prof);

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
