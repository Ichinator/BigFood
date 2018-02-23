<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9379041a1112eae89415c7a12f007493b309e997f27a5550538457d5cdefa457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4e4f761da1d65446df1a591f9e1fed28a5a0556884de251acf07406a026e6ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4f761da1d65446df1a591f9e1fed28a5a0556884de251acf07406a026e6ae6->enter($__internal_4e4f761da1d65446df1a591f9e1fed28a5a0556884de251acf07406a026e6ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_e46e0e657bd0cdac7a65c53ea31c810d2a1ab0410194043a62a8a62c71f707ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46e0e657bd0cdac7a65c53ea31c810d2a1ab0410194043a62a8a62c71f707ab->enter($__internal_e46e0e657bd0cdac7a65c53ea31c810d2a1ab0410194043a62a8a62c71f707ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e4f761da1d65446df1a591f9e1fed28a5a0556884de251acf07406a026e6ae6->leave($__internal_4e4f761da1d65446df1a591f9e1fed28a5a0556884de251acf07406a026e6ae6_prof);

        
        $__internal_e46e0e657bd0cdac7a65c53ea31c810d2a1ab0410194043a62a8a62c71f707ab->leave($__internal_e46e0e657bd0cdac7a65c53ea31c810d2a1ab0410194043a62a8a62c71f707ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9c9397d326793f31f5bca00b02813cd6172e0614373e6f2cd8612efd2065515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c9397d326793f31f5bca00b02813cd6172e0614373e6f2cd8612efd2065515->enter($__internal_e9c9397d326793f31f5bca00b02813cd6172e0614373e6f2cd8612efd2065515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cc46dc18ef2a75570e905a990b8d831c535bdb378d46e7a66ea66771e436b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc46dc18ef2a75570e905a990b8d831c535bdb378d46e7a66ea66771e436b42->enter($__internal_8cc46dc18ef2a75570e905a990b8d831c535bdb378d46e7a66ea66771e436b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8cc46dc18ef2a75570e905a990b8d831c535bdb378d46e7a66ea66771e436b42->leave($__internal_8cc46dc18ef2a75570e905a990b8d831c535bdb378d46e7a66ea66771e436b42_prof);

        
        $__internal_e9c9397d326793f31f5bca00b02813cd6172e0614373e6f2cd8612efd2065515->leave($__internal_e9c9397d326793f31f5bca00b02813cd6172e0614373e6f2cd8612efd2065515_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
