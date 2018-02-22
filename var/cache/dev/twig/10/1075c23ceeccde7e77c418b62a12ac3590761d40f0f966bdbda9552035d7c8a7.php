<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c3ad4b0e21699b7dc3aa14e2cf99fb274873452e9a3c8b1581745581e9f11c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0f35a5e87e31ec142b3298c21dfe7c4cd5afd8e14d8119a2bbafff7c83f37c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f35a5e87e31ec142b3298c21dfe7c4cd5afd8e14d8119a2bbafff7c83f37c30->enter($__internal_0f35a5e87e31ec142b3298c21dfe7c4cd5afd8e14d8119a2bbafff7c83f37c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f7489e5e174f59d838b0bf569c8b20485c7441bf4e20802079a776b57753d2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7489e5e174f59d838b0bf569c8b20485c7441bf4e20802079a776b57753d2ab->enter($__internal_f7489e5e174f59d838b0bf569c8b20485c7441bf4e20802079a776b57753d2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f35a5e87e31ec142b3298c21dfe7c4cd5afd8e14d8119a2bbafff7c83f37c30->leave($__internal_0f35a5e87e31ec142b3298c21dfe7c4cd5afd8e14d8119a2bbafff7c83f37c30_prof);

        
        $__internal_f7489e5e174f59d838b0bf569c8b20485c7441bf4e20802079a776b57753d2ab->leave($__internal_f7489e5e174f59d838b0bf569c8b20485c7441bf4e20802079a776b57753d2ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06e6648a9ae6c6312618815aa46ba9dd3b301e085c5dd1213559e79e75a7091a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e6648a9ae6c6312618815aa46ba9dd3b301e085c5dd1213559e79e75a7091a->enter($__internal_06e6648a9ae6c6312618815aa46ba9dd3b301e085c5dd1213559e79e75a7091a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f442f1565a783a5f6dccd3495ae9fd3df9c3903825bfe486c57f855d461b8625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f442f1565a783a5f6dccd3495ae9fd3df9c3903825bfe486c57f855d461b8625->enter($__internal_f442f1565a783a5f6dccd3495ae9fd3df9c3903825bfe486c57f855d461b8625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f442f1565a783a5f6dccd3495ae9fd3df9c3903825bfe486c57f855d461b8625->leave($__internal_f442f1565a783a5f6dccd3495ae9fd3df9c3903825bfe486c57f855d461b8625_prof);

        
        $__internal_06e6648a9ae6c6312618815aa46ba9dd3b301e085c5dd1213559e79e75a7091a->leave($__internal_06e6648a9ae6c6312618815aa46ba9dd3b301e085c5dd1213559e79e75a7091a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
