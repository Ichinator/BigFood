<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cd470fff2f009a3e49d11430c39bbefae896f0ac323680cc2f6ce5c4b4dd4ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dca8a9537fd6351c2fdba8bfbf893330ba2f9a5cc8c47d98e3adeff522ef73bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca8a9537fd6351c2fdba8bfbf893330ba2f9a5cc8c47d98e3adeff522ef73bf->enter($__internal_dca8a9537fd6351c2fdba8bfbf893330ba2f9a5cc8c47d98e3adeff522ef73bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_f4982a92592dd4315c206739f30d31455c357de418d83eb614c3323237cf207e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4982a92592dd4315c206739f30d31455c357de418d83eb614c3323237cf207e->enter($__internal_f4982a92592dd4315c206739f30d31455c357de418d83eb614c3323237cf207e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dca8a9537fd6351c2fdba8bfbf893330ba2f9a5cc8c47d98e3adeff522ef73bf->leave($__internal_dca8a9537fd6351c2fdba8bfbf893330ba2f9a5cc8c47d98e3adeff522ef73bf_prof);

        
        $__internal_f4982a92592dd4315c206739f30d31455c357de418d83eb614c3323237cf207e->leave($__internal_f4982a92592dd4315c206739f30d31455c357de418d83eb614c3323237cf207e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2a7503a105b408de346f33444cd4939a22a6876796f59dd2bf748c1da0dd067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a7503a105b408de346f33444cd4939a22a6876796f59dd2bf748c1da0dd067->enter($__internal_e2a7503a105b408de346f33444cd4939a22a6876796f59dd2bf748c1da0dd067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e46394b279323b4ff94c8b1761889e02643b19202538483c9bcc603456f3007b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46394b279323b4ff94c8b1761889e02643b19202538483c9bcc603456f3007b->enter($__internal_e46394b279323b4ff94c8b1761889e02643b19202538483c9bcc603456f3007b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e46394b279323b4ff94c8b1761889e02643b19202538483c9bcc603456f3007b->leave($__internal_e46394b279323b4ff94c8b1761889e02643b19202538483c9bcc603456f3007b_prof);

        
        $__internal_e2a7503a105b408de346f33444cd4939a22a6876796f59dd2bf748c1da0dd067->leave($__internal_e2a7503a105b408de346f33444cd4939a22a6876796f59dd2bf748c1da0dd067_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
