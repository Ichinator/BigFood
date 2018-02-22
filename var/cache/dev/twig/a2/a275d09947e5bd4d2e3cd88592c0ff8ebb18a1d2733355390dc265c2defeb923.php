<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_239e1ed1199c315e307c0dcffe8e500831ca724be279a268ea3b39867108a9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4549f7e99373dd537839b673d232a418a6a1debb54255b965430b6747ca09891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4549f7e99373dd537839b673d232a418a6a1debb54255b965430b6747ca09891->enter($__internal_4549f7e99373dd537839b673d232a418a6a1debb54255b965430b6747ca09891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_833edce92e3b7cf8e95ff2f6073def1f071602d0d5885e3a25c66090d7ef6767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833edce92e3b7cf8e95ff2f6073def1f071602d0d5885e3a25c66090d7ef6767->enter($__internal_833edce92e3b7cf8e95ff2f6073def1f071602d0d5885e3a25c66090d7ef6767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4549f7e99373dd537839b673d232a418a6a1debb54255b965430b6747ca09891->leave($__internal_4549f7e99373dd537839b673d232a418a6a1debb54255b965430b6747ca09891_prof);

        
        $__internal_833edce92e3b7cf8e95ff2f6073def1f071602d0d5885e3a25c66090d7ef6767->leave($__internal_833edce92e3b7cf8e95ff2f6073def1f071602d0d5885e3a25c66090d7ef6767_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d2ff8364063b56be35f66be778bb6877a469e58e2eccbe2881bcf3097a5cc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2ff8364063b56be35f66be778bb6877a469e58e2eccbe2881bcf3097a5cc6b->enter($__internal_6d2ff8364063b56be35f66be778bb6877a469e58e2eccbe2881bcf3097a5cc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4627c263ea88ed71f38bf12df7b1790cf0d2c62a23fa8edec14b0f5adf08d36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4627c263ea88ed71f38bf12df7b1790cf0d2c62a23fa8edec14b0f5adf08d36f->enter($__internal_4627c263ea88ed71f38bf12df7b1790cf0d2c62a23fa8edec14b0f5adf08d36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4627c263ea88ed71f38bf12df7b1790cf0d2c62a23fa8edec14b0f5adf08d36f->leave($__internal_4627c263ea88ed71f38bf12df7b1790cf0d2c62a23fa8edec14b0f5adf08d36f_prof);

        
        $__internal_6d2ff8364063b56be35f66be778bb6877a469e58e2eccbe2881bcf3097a5cc6b->leave($__internal_6d2ff8364063b56be35f66be778bb6877a469e58e2eccbe2881bcf3097a5cc6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
