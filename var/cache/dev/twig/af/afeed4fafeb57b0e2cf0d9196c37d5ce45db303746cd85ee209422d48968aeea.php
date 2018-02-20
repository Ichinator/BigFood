<?php

/* IchinatorContactBundle:Default:index.html.twig */
class __TwigTemplate_216902d6004943098e012a4014afa39ff60f89ae3ed2a39c22af5bc16242067d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorContactBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f150a96bb027aab16c9f0825afb15abfba6d5f45bc8774324b3f9f98a1d8bd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f150a96bb027aab16c9f0825afb15abfba6d5f45bc8774324b3f9f98a1d8bd92->enter($__internal_f150a96bb027aab16c9f0825afb15abfba6d5f45bc8774324b3f9f98a1d8bd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $__internal_a8cbabf121acc8c1b58351f5d0eaaa96fa9bfc1daa8b92dc6915d560b4de27d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cbabf121acc8c1b58351f5d0eaaa96fa9bfc1daa8b92dc6915d560b4de27d5->enter($__internal_a8cbabf121acc8c1b58351f5d0eaaa96fa9bfc1daa8b92dc6915d560b4de27d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f150a96bb027aab16c9f0825afb15abfba6d5f45bc8774324b3f9f98a1d8bd92->leave($__internal_f150a96bb027aab16c9f0825afb15abfba6d5f45bc8774324b3f9f98a1d8bd92_prof);

        
        $__internal_a8cbabf121acc8c1b58351f5d0eaaa96fa9bfc1daa8b92dc6915d560b4de27d5->leave($__internal_a8cbabf121acc8c1b58351f5d0eaaa96fa9bfc1daa8b92dc6915d560b4de27d5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f075bca0c9ce5f7c2934c49b4b9450d2593d50cedbdb2f085995a99cdc14f902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f075bca0c9ce5f7c2934c49b4b9450d2593d50cedbdb2f085995a99cdc14f902->enter($__internal_f075bca0c9ce5f7c2934c49b4b9450d2593d50cedbdb2f085995a99cdc14f902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_205be9442eed138f37444b53680d4cb3d8021d650321a02f6e281aeee21af8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205be9442eed138f37444b53680d4cb3d8021d650321a02f6e281aeee21af8f0->enter($__internal_205be9442eed138f37444b53680d4cb3d8021d650321a02f6e281aeee21af8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_205be9442eed138f37444b53680d4cb3d8021d650321a02f6e281aeee21af8f0->leave($__internal_205be9442eed138f37444b53680d4cb3d8021d650321a02f6e281aeee21af8f0_prof);

        
        $__internal_f075bca0c9ce5f7c2934c49b4b9450d2593d50cedbdb2f085995a99cdc14f902->leave($__internal_f075bca0c9ce5f7c2934c49b4b9450d2593d50cedbdb2f085995a99cdc14f902_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cb994b832e966ab6bcc76daccecde987c124385f55fadf856f9fc1fbbbfc621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb994b832e966ab6bcc76daccecde987c124385f55fadf856f9fc1fbbbfc621->enter($__internal_8cb994b832e966ab6bcc76daccecde987c124385f55fadf856f9fc1fbbbfc621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fed34695bb15b9a30c082a53ecbf44e5a1bc3b4d2ecd296f1650bdf058f5e27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed34695bb15b9a30c082a53ecbf44e5a1bc3b4d2ecd296f1650bdf058f5e27a->enter($__internal_fed34695bb15b9a30c082a53ecbf44e5a1bc3b4d2ecd296f1650bdf058f5e27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <p>Page de contact</p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_fed34695bb15b9a30c082a53ecbf44e5a1bc3b4d2ecd296f1650bdf058f5e27a->leave($__internal_fed34695bb15b9a30c082a53ecbf44e5a1bc3b4d2ecd296f1650bdf058f5e27a_prof);

        
        $__internal_8cb994b832e966ab6bcc76daccecde987c124385f55fadf856f9fc1fbbbfc621->leave($__internal_8cb994b832e966ab6bcc76daccecde987c124385f55fadf856f9fc1fbbbfc621_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f3a09e329ef15990470b12bd6c79c44d88e2ede9603b85ce08a2b5d8aebc760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3a09e329ef15990470b12bd6c79c44d88e2ede9603b85ce08a2b5d8aebc760->enter($__internal_3f3a09e329ef15990470b12bd6c79c44d88e2ede9603b85ce08a2b5d8aebc760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7a1bec7f6f607d08aa6ac03fc17ea43abd6b4e99ab3e739edd055bbf6eb055c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a1bec7f6f607d08aa6ac03fc17ea43abd6b4e99ab3e739edd055bbf6eb055c->enter($__internal_d7a1bec7f6f607d08aa6ac03fc17ea43abd6b4e99ab3e739edd055bbf6eb055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d7a1bec7f6f607d08aa6ac03fc17ea43abd6b4e99ab3e739edd055bbf6eb055c->leave($__internal_d7a1bec7f6f607d08aa6ac03fc17ea43abd6b4e99ab3e739edd055bbf6eb055c_prof);

        
        $__internal_3f3a09e329ef15990470b12bd6c79c44d88e2ede9603b85ce08a2b5d8aebc760->leave($__internal_3f3a09e329ef15990470b12bd6c79c44d88e2ede9603b85ce08a2b5d8aebc760_prof);

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
        return array (  108 => 14,  99 => 13,  87 => 11,  83 => 10,  79 => 9,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
    {{ parent() }}
    <p>Page de contact</p>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "IchinatorContactBundle:Default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/ContactBundle/Resources/views/Default/index.html.twig");
    }
}
