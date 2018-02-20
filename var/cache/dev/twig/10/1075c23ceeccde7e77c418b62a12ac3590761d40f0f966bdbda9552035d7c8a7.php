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
        $__internal_4c2f9aa63d5cb42a8bab67475dfc6453340aa0c4de454a425303ef6f6b35a78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2f9aa63d5cb42a8bab67475dfc6453340aa0c4de454a425303ef6f6b35a78c->enter($__internal_4c2f9aa63d5cb42a8bab67475dfc6453340aa0c4de454a425303ef6f6b35a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d67b1ea726b5ad3666d68250696a9c9416572bc3d124a7a4ec63b8e230ea8a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67b1ea726b5ad3666d68250696a9c9416572bc3d124a7a4ec63b8e230ea8a6c->enter($__internal_d67b1ea726b5ad3666d68250696a9c9416572bc3d124a7a4ec63b8e230ea8a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2f9aa63d5cb42a8bab67475dfc6453340aa0c4de454a425303ef6f6b35a78c->leave($__internal_4c2f9aa63d5cb42a8bab67475dfc6453340aa0c4de454a425303ef6f6b35a78c_prof);

        
        $__internal_d67b1ea726b5ad3666d68250696a9c9416572bc3d124a7a4ec63b8e230ea8a6c->leave($__internal_d67b1ea726b5ad3666d68250696a9c9416572bc3d124a7a4ec63b8e230ea8a6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d0bb8810551c81dadc16047d5fa382b029103e7447de8533920a03ce0b0e3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0bb8810551c81dadc16047d5fa382b029103e7447de8533920a03ce0b0e3e8->enter($__internal_4d0bb8810551c81dadc16047d5fa382b029103e7447de8533920a03ce0b0e3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4d60ab99c5701a5aaf8d8e7d2fd633e020faa4c2d75d67a723e8228404abdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d60ab99c5701a5aaf8d8e7d2fd633e020faa4c2d75d67a723e8228404abdef->enter($__internal_c4d60ab99c5701a5aaf8d8e7d2fd633e020faa4c2d75d67a723e8228404abdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c4d60ab99c5701a5aaf8d8e7d2fd633e020faa4c2d75d67a723e8228404abdef->leave($__internal_c4d60ab99c5701a5aaf8d8e7d2fd633e020faa4c2d75d67a723e8228404abdef_prof);

        
        $__internal_4d0bb8810551c81dadc16047d5fa382b029103e7447de8533920a03ce0b0e3e8->leave($__internal_4d0bb8810551c81dadc16047d5fa382b029103e7447de8533920a03ce0b0e3e8_prof);

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
