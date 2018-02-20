<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3a366df40b31eba87dd46fe7a94c9caac5639b6831f6f45d11f1cc1e3fde1228 extends Twig_Template
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
        $__internal_a7726b5c8d44ca2378ba83b99a38ed9fa335796d70932db5a43e9caab2f8d681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7726b5c8d44ca2378ba83b99a38ed9fa335796d70932db5a43e9caab2f8d681->enter($__internal_a7726b5c8d44ca2378ba83b99a38ed9fa335796d70932db5a43e9caab2f8d681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_542112c6cdc9759051cc6d456c98c682d363e5285db046c0d793657e86f2e83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542112c6cdc9759051cc6d456c98c682d363e5285db046c0d793657e86f2e83b->enter($__internal_542112c6cdc9759051cc6d456c98c682d363e5285db046c0d793657e86f2e83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7726b5c8d44ca2378ba83b99a38ed9fa335796d70932db5a43e9caab2f8d681->leave($__internal_a7726b5c8d44ca2378ba83b99a38ed9fa335796d70932db5a43e9caab2f8d681_prof);

        
        $__internal_542112c6cdc9759051cc6d456c98c682d363e5285db046c0d793657e86f2e83b->leave($__internal_542112c6cdc9759051cc6d456c98c682d363e5285db046c0d793657e86f2e83b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dc3b9ae0cd314e2731600f3e14f3af1ae97e8727780742afc0834104133fb28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc3b9ae0cd314e2731600f3e14f3af1ae97e8727780742afc0834104133fb28->enter($__internal_3dc3b9ae0cd314e2731600f3e14f3af1ae97e8727780742afc0834104133fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_177800024e683a1b53918029060643d6807d0f6923b6580bb898d91f20fcb90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177800024e683a1b53918029060643d6807d0f6923b6580bb898d91f20fcb90d->enter($__internal_177800024e683a1b53918029060643d6807d0f6923b6580bb898d91f20fcb90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_177800024e683a1b53918029060643d6807d0f6923b6580bb898d91f20fcb90d->leave($__internal_177800024e683a1b53918029060643d6807d0f6923b6580bb898d91f20fcb90d_prof);

        
        $__internal_3dc3b9ae0cd314e2731600f3e14f3af1ae97e8727780742afc0834104133fb28->leave($__internal_3dc3b9ae0cd314e2731600f3e14f3af1ae97e8727780742afc0834104133fb28_prof);

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
