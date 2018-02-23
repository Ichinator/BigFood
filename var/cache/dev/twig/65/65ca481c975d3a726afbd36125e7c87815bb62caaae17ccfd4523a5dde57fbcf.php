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
        $__internal_309ee0fb6b035c899b796779cbf0142c696bf2ddf13b3241f62647824d0c1238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309ee0fb6b035c899b796779cbf0142c696bf2ddf13b3241f62647824d0c1238->enter($__internal_309ee0fb6b035c899b796779cbf0142c696bf2ddf13b3241f62647824d0c1238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_adff6e63f950745b187e57a334b42ff8a65979b8540d638ee82c05d476355149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adff6e63f950745b187e57a334b42ff8a65979b8540d638ee82c05d476355149->enter($__internal_adff6e63f950745b187e57a334b42ff8a65979b8540d638ee82c05d476355149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_309ee0fb6b035c899b796779cbf0142c696bf2ddf13b3241f62647824d0c1238->leave($__internal_309ee0fb6b035c899b796779cbf0142c696bf2ddf13b3241f62647824d0c1238_prof);

        
        $__internal_adff6e63f950745b187e57a334b42ff8a65979b8540d638ee82c05d476355149->leave($__internal_adff6e63f950745b187e57a334b42ff8a65979b8540d638ee82c05d476355149_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2b0fdab3849ad23bac0289cd363f19a25ef7da1d7a1c1a4fb5b6a90a293acdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b0fdab3849ad23bac0289cd363f19a25ef7da1d7a1c1a4fb5b6a90a293acdf->enter($__internal_d2b0fdab3849ad23bac0289cd363f19a25ef7da1d7a1c1a4fb5b6a90a293acdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b8413d3cfbde761b07b6ace1e64c5b93ea9e6fb4fe197c390982a7502592b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8413d3cfbde761b07b6ace1e64c5b93ea9e6fb4fe197c390982a7502592b25->enter($__internal_5b8413d3cfbde761b07b6ace1e64c5b93ea9e6fb4fe197c390982a7502592b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b8413d3cfbde761b07b6ace1e64c5b93ea9e6fb4fe197c390982a7502592b25->leave($__internal_5b8413d3cfbde761b07b6ace1e64c5b93ea9e6fb4fe197c390982a7502592b25_prof);

        
        $__internal_d2b0fdab3849ad23bac0289cd363f19a25ef7da1d7a1c1a4fb5b6a90a293acdf->leave($__internal_d2b0fdab3849ad23bac0289cd363f19a25ef7da1d7a1c1a4fb5b6a90a293acdf_prof);

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
