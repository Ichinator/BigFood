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
        $__internal_c057c0e6c226ca3b59719397f35d64d454561e2b9a5572b9612fcf66cfcbbbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c057c0e6c226ca3b59719397f35d64d454561e2b9a5572b9612fcf66cfcbbbfd->enter($__internal_c057c0e6c226ca3b59719397f35d64d454561e2b9a5572b9612fcf66cfcbbbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $__internal_8c42fd31bd67940f97eae1d1ebfdecc1b5d59b31a5d51724ddb83922e0387e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c42fd31bd67940f97eae1d1ebfdecc1b5d59b31a5d51724ddb83922e0387e77->enter($__internal_8c42fd31bd67940f97eae1d1ebfdecc1b5d59b31a5d51724ddb83922e0387e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c057c0e6c226ca3b59719397f35d64d454561e2b9a5572b9612fcf66cfcbbbfd->leave($__internal_c057c0e6c226ca3b59719397f35d64d454561e2b9a5572b9612fcf66cfcbbbfd_prof);

        
        $__internal_8c42fd31bd67940f97eae1d1ebfdecc1b5d59b31a5d51724ddb83922e0387e77->leave($__internal_8c42fd31bd67940f97eae1d1ebfdecc1b5d59b31a5d51724ddb83922e0387e77_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_62018532d5a2c094992b7967b1b2c1e575033980786ae400998e4aa8e03bf92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62018532d5a2c094992b7967b1b2c1e575033980786ae400998e4aa8e03bf92b->enter($__internal_62018532d5a2c094992b7967b1b2c1e575033980786ae400998e4aa8e03bf92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef5d345ac4d105af4b78b13aa86a31d8e5b8eeedea417d67a437c9dc2ece73bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5d345ac4d105af4b78b13aa86a31d8e5b8eeedea417d67a437c9dc2ece73bb->enter($__internal_ef5d345ac4d105af4b78b13aa86a31d8e5b8eeedea417d67a437c9dc2ece73bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef5d345ac4d105af4b78b13aa86a31d8e5b8eeedea417d67a437c9dc2ece73bb->leave($__internal_ef5d345ac4d105af4b78b13aa86a31d8e5b8eeedea417d67a437c9dc2ece73bb_prof);

        
        $__internal_62018532d5a2c094992b7967b1b2c1e575033980786ae400998e4aa8e03bf92b->leave($__internal_62018532d5a2c094992b7967b1b2c1e575033980786ae400998e4aa8e03bf92b_prof);

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
