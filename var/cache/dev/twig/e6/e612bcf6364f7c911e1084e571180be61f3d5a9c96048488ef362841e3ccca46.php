<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c1f4ef0dfcee3df463546768dc8e971a3d5f693e84d2d10c35889702cf29368c extends Twig_Template
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
        $__internal_3abae102b66d988b83f7480dfc01e371f55ba817bf36a1745961abd78269135d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abae102b66d988b83f7480dfc01e371f55ba817bf36a1745961abd78269135d->enter($__internal_3abae102b66d988b83f7480dfc01e371f55ba817bf36a1745961abd78269135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6ff8a7089af8978414e0bcb5326817ebbdf1ab3fe744a3433f5a5730ebd1a890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff8a7089af8978414e0bcb5326817ebbdf1ab3fe744a3433f5a5730ebd1a890->enter($__internal_6ff8a7089af8978414e0bcb5326817ebbdf1ab3fe744a3433f5a5730ebd1a890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3abae102b66d988b83f7480dfc01e371f55ba817bf36a1745961abd78269135d->leave($__internal_3abae102b66d988b83f7480dfc01e371f55ba817bf36a1745961abd78269135d_prof);

        
        $__internal_6ff8a7089af8978414e0bcb5326817ebbdf1ab3fe744a3433f5a5730ebd1a890->leave($__internal_6ff8a7089af8978414e0bcb5326817ebbdf1ab3fe744a3433f5a5730ebd1a890_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddddcae754231941f681b4e6c23b6baf5e880f297ba2a7efb8136bbf1511d4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddddcae754231941f681b4e6c23b6baf5e880f297ba2a7efb8136bbf1511d4ba->enter($__internal_ddddcae754231941f681b4e6c23b6baf5e880f297ba2a7efb8136bbf1511d4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea3f43189538946bdae129efc6b2829f5e652fe352aff163ff8f6a05c9019486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3f43189538946bdae129efc6b2829f5e652fe352aff163ff8f6a05c9019486->enter($__internal_ea3f43189538946bdae129efc6b2829f5e652fe352aff163ff8f6a05c9019486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ea3f43189538946bdae129efc6b2829f5e652fe352aff163ff8f6a05c9019486->leave($__internal_ea3f43189538946bdae129efc6b2829f5e652fe352aff163ff8f6a05c9019486_prof);

        
        $__internal_ddddcae754231941f681b4e6c23b6baf5e880f297ba2a7efb8136bbf1511d4ba->leave($__internal_ddddcae754231941f681b4e6c23b6baf5e880f297ba2a7efb8136bbf1511d4ba_prof);

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
