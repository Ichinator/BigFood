<?php

/* IchinatorCommandBundle:Default:command.html.twig */
class __TwigTemplate_b272e3fff614014c6d57528067f102e9313ea72ecc78b4948a20d9e526460e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:command.html.twig", 1);
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
        $__internal_808a1452452c8026a83b7312e6248a917c314059c0552ec15821e1ac16e89132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808a1452452c8026a83b7312e6248a917c314059c0552ec15821e1ac16e89132->enter($__internal_808a1452452c8026a83b7312e6248a917c314059c0552ec15821e1ac16e89132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $__internal_58eeadc2a121059289ec9f58b55cedd62bb3a13b39c1c34be8c9787d69b0c576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58eeadc2a121059289ec9f58b55cedd62bb3a13b39c1c34be8c9787d69b0c576->enter($__internal_58eeadc2a121059289ec9f58b55cedd62bb3a13b39c1c34be8c9787d69b0c576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808a1452452c8026a83b7312e6248a917c314059c0552ec15821e1ac16e89132->leave($__internal_808a1452452c8026a83b7312e6248a917c314059c0552ec15821e1ac16e89132_prof);

        
        $__internal_58eeadc2a121059289ec9f58b55cedd62bb3a13b39c1c34be8c9787d69b0c576->leave($__internal_58eeadc2a121059289ec9f58b55cedd62bb3a13b39c1c34be8c9787d69b0c576_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d64e7ff04cda4ab669e50394ff3231b5e7a46639b0d089a92263ec497a885e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d64e7ff04cda4ab669e50394ff3231b5e7a46639b0d089a92263ec497a885e7->enter($__internal_1d64e7ff04cda4ab669e50394ff3231b5e7a46639b0d089a92263ec497a885e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6c21f6428f55896bfa7cc5ef6bc34d06c6cfea068c62a18a375654062f1025d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c21f6428f55896bfa7cc5ef6bc34d06c6cfea068c62a18a375654062f1025d3->enter($__internal_6c21f6428f55896bfa7cc5ef6bc34d06c6cfea068c62a18a375654062f1025d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6c21f6428f55896bfa7cc5ef6bc34d06c6cfea068c62a18a375654062f1025d3->leave($__internal_6c21f6428f55896bfa7cc5ef6bc34d06c6cfea068c62a18a375654062f1025d3_prof);

        
        $__internal_1d64e7ff04cda4ab669e50394ff3231b5e7a46639b0d089a92263ec497a885e7->leave($__internal_1d64e7ff04cda4ab669e50394ff3231b5e7a46639b0d089a92263ec497a885e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65f10230764385a9e2cc14dc41a8ff17d80598f44a8dda6ab4cc846f1969b80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f10230764385a9e2cc14dc41a8ff17d80598f44a8dda6ab4cc846f1969b80a->enter($__internal_65f10230764385a9e2cc14dc41a8ff17d80598f44a8dda6ab4cc846f1969b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4019ca9dc6e7bacfcde953f21096d18839956d6649c4030952b92419e8caeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4019ca9dc6e7bacfcde953f21096d18839956d6649c4030952b92419e8caeeb->enter($__internal_b4019ca9dc6e7bacfcde953f21096d18839956d6649c4030952b92419e8caeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <p>Page de commande</p>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b4019ca9dc6e7bacfcde953f21096d18839956d6649c4030952b92419e8caeeb->leave($__internal_b4019ca9dc6e7bacfcde953f21096d18839956d6649c4030952b92419e8caeeb_prof);

        
        $__internal_65f10230764385a9e2cc14dc41a8ff17d80598f44a8dda6ab4cc846f1969b80a->leave($__internal_65f10230764385a9e2cc14dc41a8ff17d80598f44a8dda6ab4cc846f1969b80a_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1744d62a9dd7b4a496fab2232646c5d96336171f1bdb0ca113bfe080705b92c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1744d62a9dd7b4a496fab2232646c5d96336171f1bdb0ca113bfe080705b92c1->enter($__internal_1744d62a9dd7b4a496fab2232646c5d96336171f1bdb0ca113bfe080705b92c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c46ffb93813702ee36d71dba2a99b5d8bb0a6840bba36fd0196638f41a20ffff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46ffb93813702ee36d71dba2a99b5d8bb0a6840bba36fd0196638f41a20ffff->enter($__internal_c46ffb93813702ee36d71dba2a99b5d8bb0a6840bba36fd0196638f41a20ffff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c46ffb93813702ee36d71dba2a99b5d8bb0a6840bba36fd0196638f41a20ffff->leave($__internal_c46ffb93813702ee36d71dba2a99b5d8bb0a6840bba36fd0196638f41a20ffff_prof);

        
        $__internal_1744d62a9dd7b4a496fab2232646c5d96336171f1bdb0ca113bfe080705b92c1->leave($__internal_1744d62a9dd7b4a496fab2232646c5d96336171f1bdb0ca113bfe080705b92c1_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:command.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 13,  99 => 12,  87 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
    {{ parent() }}
    <p>Page de commande</p>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "IchinatorCommandBundle:Default:command.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/command.html.twig");
    }
}
