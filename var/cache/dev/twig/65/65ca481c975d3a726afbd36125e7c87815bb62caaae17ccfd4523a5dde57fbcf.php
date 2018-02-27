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
        $__internal_c9721af673439a51eaa4fac3d20b4017f5504154c751aa141fd324b15e58b4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9721af673439a51eaa4fac3d20b4017f5504154c751aa141fd324b15e58b4ed->enter($__internal_c9721af673439a51eaa4fac3d20b4017f5504154c751aa141fd324b15e58b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_871ba5090b7e628a87df4e38256d39e8b0e07ce1a7e47d0d5c2baf81c7d6f64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871ba5090b7e628a87df4e38256d39e8b0e07ce1a7e47d0d5c2baf81c7d6f64c->enter($__internal_871ba5090b7e628a87df4e38256d39e8b0e07ce1a7e47d0d5c2baf81c7d6f64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c9721af673439a51eaa4fac3d20b4017f5504154c751aa141fd324b15e58b4ed->leave($__internal_c9721af673439a51eaa4fac3d20b4017f5504154c751aa141fd324b15e58b4ed_prof);

        
        $__internal_871ba5090b7e628a87df4e38256d39e8b0e07ce1a7e47d0d5c2baf81c7d6f64c->leave($__internal_871ba5090b7e628a87df4e38256d39e8b0e07ce1a7e47d0d5c2baf81c7d6f64c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4ca81beba1c8b5f83d87991b2d73694cd5fa0a76207a1f2d763083f0ef8c03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ca81beba1c8b5f83d87991b2d73694cd5fa0a76207a1f2d763083f0ef8c03e->enter($__internal_f4ca81beba1c8b5f83d87991b2d73694cd5fa0a76207a1f2d763083f0ef8c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_454ec73d312ca741aaaae2e76bc2884f53f869d2c856b877349740e866cf9176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454ec73d312ca741aaaae2e76bc2884f53f869d2c856b877349740e866cf9176->enter($__internal_454ec73d312ca741aaaae2e76bc2884f53f869d2c856b877349740e866cf9176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_454ec73d312ca741aaaae2e76bc2884f53f869d2c856b877349740e866cf9176->leave($__internal_454ec73d312ca741aaaae2e76bc2884f53f869d2c856b877349740e866cf9176_prof);

        
        $__internal_f4ca81beba1c8b5f83d87991b2d73694cd5fa0a76207a1f2d763083f0ef8c03e->leave($__internal_f4ca81beba1c8b5f83d87991b2d73694cd5fa0a76207a1f2d763083f0ef8c03e_prof);

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
