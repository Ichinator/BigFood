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
        $__internal_d6db895f807aae3ffa7cc2c50356638133e302db14d95709876dea45a3879232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6db895f807aae3ffa7cc2c50356638133e302db14d95709876dea45a3879232->enter($__internal_d6db895f807aae3ffa7cc2c50356638133e302db14d95709876dea45a3879232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a7bee5b5a48dc8a1d97294fdd8322ae7b8e71d2c4702a9e004506885b776cb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bee5b5a48dc8a1d97294fdd8322ae7b8e71d2c4702a9e004506885b776cb98->enter($__internal_a7bee5b5a48dc8a1d97294fdd8322ae7b8e71d2c4702a9e004506885b776cb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d6db895f807aae3ffa7cc2c50356638133e302db14d95709876dea45a3879232->leave($__internal_d6db895f807aae3ffa7cc2c50356638133e302db14d95709876dea45a3879232_prof);

        
        $__internal_a7bee5b5a48dc8a1d97294fdd8322ae7b8e71d2c4702a9e004506885b776cb98->leave($__internal_a7bee5b5a48dc8a1d97294fdd8322ae7b8e71d2c4702a9e004506885b776cb98_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_035ee27ee5953b26b955d7b8d2cc9f332c06aa47e591adc55fa63c1f6f313970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035ee27ee5953b26b955d7b8d2cc9f332c06aa47e591adc55fa63c1f6f313970->enter($__internal_035ee27ee5953b26b955d7b8d2cc9f332c06aa47e591adc55fa63c1f6f313970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5cbd45dbed76a8b24fb890e6e5c5d0bbcb206e60348875355caa686258be8f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbd45dbed76a8b24fb890e6e5c5d0bbcb206e60348875355caa686258be8f7e->enter($__internal_5cbd45dbed76a8b24fb890e6e5c5d0bbcb206e60348875355caa686258be8f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5cbd45dbed76a8b24fb890e6e5c5d0bbcb206e60348875355caa686258be8f7e->leave($__internal_5cbd45dbed76a8b24fb890e6e5c5d0bbcb206e60348875355caa686258be8f7e_prof);

        
        $__internal_035ee27ee5953b26b955d7b8d2cc9f332c06aa47e591adc55fa63c1f6f313970->leave($__internal_035ee27ee5953b26b955d7b8d2cc9f332c06aa47e591adc55fa63c1f6f313970_prof);

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
