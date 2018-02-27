<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_77e0a5fac8dfa0a27e010094c59b1d2d5377006dde206d918c6dbb0b04c0cffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_510f6de4a97f6cb32a4205ad67feb9baf7175fce17bf93b353354281ca98f30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510f6de4a97f6cb32a4205ad67feb9baf7175fce17bf93b353354281ca98f30e->enter($__internal_510f6de4a97f6cb32a4205ad67feb9baf7175fce17bf93b353354281ca98f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1a1d92c6fa78761f07967c2a6207138a840e0bd84c9e625ef0987f618255b0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1d92c6fa78761f07967c2a6207138a840e0bd84c9e625ef0987f618255b0f6->enter($__internal_1a1d92c6fa78761f07967c2a6207138a840e0bd84c9e625ef0987f618255b0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_510f6de4a97f6cb32a4205ad67feb9baf7175fce17bf93b353354281ca98f30e->leave($__internal_510f6de4a97f6cb32a4205ad67feb9baf7175fce17bf93b353354281ca98f30e_prof);

        
        $__internal_1a1d92c6fa78761f07967c2a6207138a840e0bd84c9e625ef0987f618255b0f6->leave($__internal_1a1d92c6fa78761f07967c2a6207138a840e0bd84c9e625ef0987f618255b0f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b34e2cdc6bc6a83bb9072e7de35f766f71e5496ff67d8b8ef7a24ef227fd657f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34e2cdc6bc6a83bb9072e7de35f766f71e5496ff67d8b8ef7a24ef227fd657f->enter($__internal_b34e2cdc6bc6a83bb9072e7de35f766f71e5496ff67d8b8ef7a24ef227fd657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27a2c057c08650fe2a57d83fbb9af4c924c4e614149cea420b7808e7697f5fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a2c057c08650fe2a57d83fbb9af4c924c4e614149cea420b7808e7697f5fe2->enter($__internal_27a2c057c08650fe2a57d83fbb9af4c924c4e614149cea420b7808e7697f5fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27a2c057c08650fe2a57d83fbb9af4c924c4e614149cea420b7808e7697f5fe2->leave($__internal_27a2c057c08650fe2a57d83fbb9af4c924c4e614149cea420b7808e7697f5fe2_prof);

        
        $__internal_b34e2cdc6bc6a83bb9072e7de35f766f71e5496ff67d8b8ef7a24ef227fd657f->leave($__internal_b34e2cdc6bc6a83bb9072e7de35f766f71e5496ff67d8b8ef7a24ef227fd657f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
