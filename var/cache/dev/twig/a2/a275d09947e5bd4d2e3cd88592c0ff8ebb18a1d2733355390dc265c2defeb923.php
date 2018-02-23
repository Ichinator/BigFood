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
        $__internal_26d2919a30bdff1fc4aa975c8a226f0ef2abd19c164017bf189715fdd1e0695b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d2919a30bdff1fc4aa975c8a226f0ef2abd19c164017bf189715fdd1e0695b->enter($__internal_26d2919a30bdff1fc4aa975c8a226f0ef2abd19c164017bf189715fdd1e0695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_953fec117d40dba681ae1d1b657cdd02c0560c9235a502cbb0ff50b7cd5635cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953fec117d40dba681ae1d1b657cdd02c0560c9235a502cbb0ff50b7cd5635cf->enter($__internal_953fec117d40dba681ae1d1b657cdd02c0560c9235a502cbb0ff50b7cd5635cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d2919a30bdff1fc4aa975c8a226f0ef2abd19c164017bf189715fdd1e0695b->leave($__internal_26d2919a30bdff1fc4aa975c8a226f0ef2abd19c164017bf189715fdd1e0695b_prof);

        
        $__internal_953fec117d40dba681ae1d1b657cdd02c0560c9235a502cbb0ff50b7cd5635cf->leave($__internal_953fec117d40dba681ae1d1b657cdd02c0560c9235a502cbb0ff50b7cd5635cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cafd1571dd551efc4b7d4e51ef5813adf9dae05ac41809d69effae04e5c2f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cafd1571dd551efc4b7d4e51ef5813adf9dae05ac41809d69effae04e5c2f65->enter($__internal_6cafd1571dd551efc4b7d4e51ef5813adf9dae05ac41809d69effae04e5c2f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d31479515d50c24799465ac48f7d5f738c5f4b59af7cbda817bef9b298afef12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31479515d50c24799465ac48f7d5f738c5f4b59af7cbda817bef9b298afef12->enter($__internal_d31479515d50c24799465ac48f7d5f738c5f4b59af7cbda817bef9b298afef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d31479515d50c24799465ac48f7d5f738c5f4b59af7cbda817bef9b298afef12->leave($__internal_d31479515d50c24799465ac48f7d5f738c5f4b59af7cbda817bef9b298afef12_prof);

        
        $__internal_6cafd1571dd551efc4b7d4e51ef5813adf9dae05ac41809d69effae04e5c2f65->leave($__internal_6cafd1571dd551efc4b7d4e51ef5813adf9dae05ac41809d69effae04e5c2f65_prof);

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
