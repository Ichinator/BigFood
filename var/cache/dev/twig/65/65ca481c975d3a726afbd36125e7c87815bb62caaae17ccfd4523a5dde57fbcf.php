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
        $__internal_6c430a9d364e1f35473bce44037f07c39853adb5b701e9a00103b6d621ea6883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c430a9d364e1f35473bce44037f07c39853adb5b701e9a00103b6d621ea6883->enter($__internal_6c430a9d364e1f35473bce44037f07c39853adb5b701e9a00103b6d621ea6883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d1d08177f855f5f6109c71910bfbdce256f2d37bdaa3051fa3300f919ed457e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d08177f855f5f6109c71910bfbdce256f2d37bdaa3051fa3300f919ed457e7->enter($__internal_d1d08177f855f5f6109c71910bfbdce256f2d37bdaa3051fa3300f919ed457e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6c430a9d364e1f35473bce44037f07c39853adb5b701e9a00103b6d621ea6883->leave($__internal_6c430a9d364e1f35473bce44037f07c39853adb5b701e9a00103b6d621ea6883_prof);

        
        $__internal_d1d08177f855f5f6109c71910bfbdce256f2d37bdaa3051fa3300f919ed457e7->leave($__internal_d1d08177f855f5f6109c71910bfbdce256f2d37bdaa3051fa3300f919ed457e7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_91d5764ca8d21bce60cb790eb4f42a13ebe684d93c6c87bfa973e6c338c8fd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d5764ca8d21bce60cb790eb4f42a13ebe684d93c6c87bfa973e6c338c8fd07->enter($__internal_91d5764ca8d21bce60cb790eb4f42a13ebe684d93c6c87bfa973e6c338c8fd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3ecaa06721f6b2bdc699f94d3d27e555a0afad335d56289afa813de0655d041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ecaa06721f6b2bdc699f94d3d27e555a0afad335d56289afa813de0655d041->enter($__internal_e3ecaa06721f6b2bdc699f94d3d27e555a0afad335d56289afa813de0655d041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e3ecaa06721f6b2bdc699f94d3d27e555a0afad335d56289afa813de0655d041->leave($__internal_e3ecaa06721f6b2bdc699f94d3d27e555a0afad335d56289afa813de0655d041_prof);

        
        $__internal_91d5764ca8d21bce60cb790eb4f42a13ebe684d93c6c87bfa973e6c338c8fd07->leave($__internal_91d5764ca8d21bce60cb790eb4f42a13ebe684d93c6c87bfa973e6c338c8fd07_prof);

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
