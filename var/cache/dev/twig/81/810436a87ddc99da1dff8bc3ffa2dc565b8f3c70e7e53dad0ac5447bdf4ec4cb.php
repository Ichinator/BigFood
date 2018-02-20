<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_685f322f8e9b7410e92fac0eec204064a85dbcafda220f2cd219788078dadc96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2c9c5073b82c6ce32084b9032e32702e3f1bc1c5c8e9db068ba608a02e888efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9c5073b82c6ce32084b9032e32702e3f1bc1c5c8e9db068ba608a02e888efa->enter($__internal_2c9c5073b82c6ce32084b9032e32702e3f1bc1c5c8e9db068ba608a02e888efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ad9fbdd97df75b60bf1dee514a8217d20546278efb7063719a0faf1344ddb2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9fbdd97df75b60bf1dee514a8217d20546278efb7063719a0faf1344ddb2be->enter($__internal_ad9fbdd97df75b60bf1dee514a8217d20546278efb7063719a0faf1344ddb2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9c5073b82c6ce32084b9032e32702e3f1bc1c5c8e9db068ba608a02e888efa->leave($__internal_2c9c5073b82c6ce32084b9032e32702e3f1bc1c5c8e9db068ba608a02e888efa_prof);

        
        $__internal_ad9fbdd97df75b60bf1dee514a8217d20546278efb7063719a0faf1344ddb2be->leave($__internal_ad9fbdd97df75b60bf1dee514a8217d20546278efb7063719a0faf1344ddb2be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c72ef36335860b7b23e1c49f7659472ae6dccb065d288f3f9f334d61e8e5e3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72ef36335860b7b23e1c49f7659472ae6dccb065d288f3f9f334d61e8e5e3cc->enter($__internal_c72ef36335860b7b23e1c49f7659472ae6dccb065d288f3f9f334d61e8e5e3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77a211d3df9a33f17dc105529f7f5edae283cee1a587526d0cf7652a52dfa904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a211d3df9a33f17dc105529f7f5edae283cee1a587526d0cf7652a52dfa904->enter($__internal_77a211d3df9a33f17dc105529f7f5edae283cee1a587526d0cf7652a52dfa904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_77a211d3df9a33f17dc105529f7f5edae283cee1a587526d0cf7652a52dfa904->leave($__internal_77a211d3df9a33f17dc105529f7f5edae283cee1a587526d0cf7652a52dfa904_prof);

        
        $__internal_c72ef36335860b7b23e1c49f7659472ae6dccb065d288f3f9f334d61e8e5e3cc->leave($__internal_c72ef36335860b7b23e1c49f7659472ae6dccb065d288f3f9f334d61e8e5e3cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
