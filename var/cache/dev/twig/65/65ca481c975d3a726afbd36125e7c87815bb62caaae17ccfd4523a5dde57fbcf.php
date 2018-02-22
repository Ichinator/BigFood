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
        $__internal_a4c69285cdfa39a66fe0268f1acc45601c5d47c9e855ee85fdd158973e53d51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c69285cdfa39a66fe0268f1acc45601c5d47c9e855ee85fdd158973e53d51e->enter($__internal_a4c69285cdfa39a66fe0268f1acc45601c5d47c9e855ee85fdd158973e53d51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_49252d911ee41786574d21e5ad5b1fb27ea9d3ab556c8a7c544824e4110ae774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49252d911ee41786574d21e5ad5b1fb27ea9d3ab556c8a7c544824e4110ae774->enter($__internal_49252d911ee41786574d21e5ad5b1fb27ea9d3ab556c8a7c544824e4110ae774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a4c69285cdfa39a66fe0268f1acc45601c5d47c9e855ee85fdd158973e53d51e->leave($__internal_a4c69285cdfa39a66fe0268f1acc45601c5d47c9e855ee85fdd158973e53d51e_prof);

        
        $__internal_49252d911ee41786574d21e5ad5b1fb27ea9d3ab556c8a7c544824e4110ae774->leave($__internal_49252d911ee41786574d21e5ad5b1fb27ea9d3ab556c8a7c544824e4110ae774_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_118fc9e12c23082980b19f61d09d39fca8eea82604f8a64c813fbe3b7a217ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118fc9e12c23082980b19f61d09d39fca8eea82604f8a64c813fbe3b7a217ebe->enter($__internal_118fc9e12c23082980b19f61d09d39fca8eea82604f8a64c813fbe3b7a217ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4172ab321892343197daa0e1611496ec20d7e2e591a2c62122328d0814a09dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4172ab321892343197daa0e1611496ec20d7e2e591a2c62122328d0814a09dc5->enter($__internal_4172ab321892343197daa0e1611496ec20d7e2e591a2c62122328d0814a09dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4172ab321892343197daa0e1611496ec20d7e2e591a2c62122328d0814a09dc5->leave($__internal_4172ab321892343197daa0e1611496ec20d7e2e591a2c62122328d0814a09dc5_prof);

        
        $__internal_118fc9e12c23082980b19f61d09d39fca8eea82604f8a64c813fbe3b7a217ebe->leave($__internal_118fc9e12c23082980b19f61d09d39fca8eea82604f8a64c813fbe3b7a217ebe_prof);

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
