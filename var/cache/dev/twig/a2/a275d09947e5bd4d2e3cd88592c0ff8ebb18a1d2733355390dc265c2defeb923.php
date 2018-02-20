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
        $__internal_1684949a560470027a81c409a0dd28c18f8594d470336797827229b07be69ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1684949a560470027a81c409a0dd28c18f8594d470336797827229b07be69ec2->enter($__internal_1684949a560470027a81c409a0dd28c18f8594d470336797827229b07be69ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b5f0a65a1faf4fd7ab7366d0fedd546213e547a5ce2eafcd39d9d953f3e76992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f0a65a1faf4fd7ab7366d0fedd546213e547a5ce2eafcd39d9d953f3e76992->enter($__internal_b5f0a65a1faf4fd7ab7366d0fedd546213e547a5ce2eafcd39d9d953f3e76992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1684949a560470027a81c409a0dd28c18f8594d470336797827229b07be69ec2->leave($__internal_1684949a560470027a81c409a0dd28c18f8594d470336797827229b07be69ec2_prof);

        
        $__internal_b5f0a65a1faf4fd7ab7366d0fedd546213e547a5ce2eafcd39d9d953f3e76992->leave($__internal_b5f0a65a1faf4fd7ab7366d0fedd546213e547a5ce2eafcd39d9d953f3e76992_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d7e177dec479ca3b1ff5eaf188ca5e39992ff68dc402ed4905a68fe684b7bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7e177dec479ca3b1ff5eaf188ca5e39992ff68dc402ed4905a68fe684b7bc5->enter($__internal_7d7e177dec479ca3b1ff5eaf188ca5e39992ff68dc402ed4905a68fe684b7bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_721e306749505ec9604c6ac85b5a40050f59373c5913d09e83886c544150a690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721e306749505ec9604c6ac85b5a40050f59373c5913d09e83886c544150a690->enter($__internal_721e306749505ec9604c6ac85b5a40050f59373c5913d09e83886c544150a690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_721e306749505ec9604c6ac85b5a40050f59373c5913d09e83886c544150a690->leave($__internal_721e306749505ec9604c6ac85b5a40050f59373c5913d09e83886c544150a690_prof);

        
        $__internal_7d7e177dec479ca3b1ff5eaf188ca5e39992ff68dc402ed4905a68fe684b7bc5->leave($__internal_7d7e177dec479ca3b1ff5eaf188ca5e39992ff68dc402ed4905a68fe684b7bc5_prof);

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
