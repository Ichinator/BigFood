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
        $__internal_451d713fc85d1d5a797b5d35fcf764199b6cf54d504a53bb302c6ddf5be2d28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451d713fc85d1d5a797b5d35fcf764199b6cf54d504a53bb302c6ddf5be2d28e->enter($__internal_451d713fc85d1d5a797b5d35fcf764199b6cf54d504a53bb302c6ddf5be2d28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_9201c7404ae715058806a0f0ca3faa3a2800a178a3da97d8d3b4ad951ad1863c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9201c7404ae715058806a0f0ca3faa3a2800a178a3da97d8d3b4ad951ad1863c->enter($__internal_9201c7404ae715058806a0f0ca3faa3a2800a178a3da97d8d3b4ad951ad1863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451d713fc85d1d5a797b5d35fcf764199b6cf54d504a53bb302c6ddf5be2d28e->leave($__internal_451d713fc85d1d5a797b5d35fcf764199b6cf54d504a53bb302c6ddf5be2d28e_prof);

        
        $__internal_9201c7404ae715058806a0f0ca3faa3a2800a178a3da97d8d3b4ad951ad1863c->leave($__internal_9201c7404ae715058806a0f0ca3faa3a2800a178a3da97d8d3b4ad951ad1863c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8ff1e6d8bb459b7cf957c9d4bb860061254b4bf5a2ddf94a4915d962cd6fbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ff1e6d8bb459b7cf957c9d4bb860061254b4bf5a2ddf94a4915d962cd6fbd1->enter($__internal_a8ff1e6d8bb459b7cf957c9d4bb860061254b4bf5a2ddf94a4915d962cd6fbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21da6724c0f41b0401a444a65ac453a23f3d7c201495c698ee8b3fc45b3e0c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21da6724c0f41b0401a444a65ac453a23f3d7c201495c698ee8b3fc45b3e0c8d->enter($__internal_21da6724c0f41b0401a444a65ac453a23f3d7c201495c698ee8b3fc45b3e0c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_21da6724c0f41b0401a444a65ac453a23f3d7c201495c698ee8b3fc45b3e0c8d->leave($__internal_21da6724c0f41b0401a444a65ac453a23f3d7c201495c698ee8b3fc45b3e0c8d_prof);

        
        $__internal_a8ff1e6d8bb459b7cf957c9d4bb860061254b4bf5a2ddf94a4915d962cd6fbd1->leave($__internal_a8ff1e6d8bb459b7cf957c9d4bb860061254b4bf5a2ddf94a4915d962cd6fbd1_prof);

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
