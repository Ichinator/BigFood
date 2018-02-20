<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a67fba8df9869499da2afafad7ead5db4b26f2ee6b712b1867dd38d0d9e41f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8dcc5cd3bf66f8c72080dbaa7e8abb18b7bff3a1c9f250f95b2828477bf6dcd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcc5cd3bf66f8c72080dbaa7e8abb18b7bff3a1c9f250f95b2828477bf6dcd6->enter($__internal_8dcc5cd3bf66f8c72080dbaa7e8abb18b7bff3a1c9f250f95b2828477bf6dcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_fa808dd0e55e2c895e8ca0ce6b9d7be829a3c55c85314e08b90b639aa9f7a987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa808dd0e55e2c895e8ca0ce6b9d7be829a3c55c85314e08b90b639aa9f7a987->enter($__internal_fa808dd0e55e2c895e8ca0ce6b9d7be829a3c55c85314e08b90b639aa9f7a987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcc5cd3bf66f8c72080dbaa7e8abb18b7bff3a1c9f250f95b2828477bf6dcd6->leave($__internal_8dcc5cd3bf66f8c72080dbaa7e8abb18b7bff3a1c9f250f95b2828477bf6dcd6_prof);

        
        $__internal_fa808dd0e55e2c895e8ca0ce6b9d7be829a3c55c85314e08b90b639aa9f7a987->leave($__internal_fa808dd0e55e2c895e8ca0ce6b9d7be829a3c55c85314e08b90b639aa9f7a987_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c1a9c1dcb5eb34b82e2be3994f367f20ba9c2562d891fbce524271345ea0900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1a9c1dcb5eb34b82e2be3994f367f20ba9c2562d891fbce524271345ea0900->enter($__internal_3c1a9c1dcb5eb34b82e2be3994f367f20ba9c2562d891fbce524271345ea0900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7169ac65c44f9ef2987ac0e08e2ae234ced5320d11a18cfac8bb4512269a8b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7169ac65c44f9ef2987ac0e08e2ae234ced5320d11a18cfac8bb4512269a8b0c->enter($__internal_7169ac65c44f9ef2987ac0e08e2ae234ced5320d11a18cfac8bb4512269a8b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7169ac65c44f9ef2987ac0e08e2ae234ced5320d11a18cfac8bb4512269a8b0c->leave($__internal_7169ac65c44f9ef2987ac0e08e2ae234ced5320d11a18cfac8bb4512269a8b0c_prof);

        
        $__internal_3c1a9c1dcb5eb34b82e2be3994f367f20ba9c2562d891fbce524271345ea0900->leave($__internal_3c1a9c1dcb5eb34b82e2be3994f367f20ba9c2562d891fbce524271345ea0900_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
