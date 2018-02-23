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
        $__internal_190dca5c0d8adb6fa2160315900730a278e37789caef34acc50899f8b029bebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190dca5c0d8adb6fa2160315900730a278e37789caef34acc50899f8b029bebd->enter($__internal_190dca5c0d8adb6fa2160315900730a278e37789caef34acc50899f8b029bebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_8dc56046c7918ad828dc53bf15630e2cf8f192371c5b442f32567cd826e5faae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc56046c7918ad828dc53bf15630e2cf8f192371c5b442f32567cd826e5faae->enter($__internal_8dc56046c7918ad828dc53bf15630e2cf8f192371c5b442f32567cd826e5faae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190dca5c0d8adb6fa2160315900730a278e37789caef34acc50899f8b029bebd->leave($__internal_190dca5c0d8adb6fa2160315900730a278e37789caef34acc50899f8b029bebd_prof);

        
        $__internal_8dc56046c7918ad828dc53bf15630e2cf8f192371c5b442f32567cd826e5faae->leave($__internal_8dc56046c7918ad828dc53bf15630e2cf8f192371c5b442f32567cd826e5faae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cfc25ba5997055f57d85fb212d85098a970effd43f40b0645293f07c2b1fc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfc25ba5997055f57d85fb212d85098a970effd43f40b0645293f07c2b1fc6e->enter($__internal_0cfc25ba5997055f57d85fb212d85098a970effd43f40b0645293f07c2b1fc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5afc5305133dd22fdb7f642d31ea38da25a7d1b3d797cdb7d82d30d42fef3547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afc5305133dd22fdb7f642d31ea38da25a7d1b3d797cdb7d82d30d42fef3547->enter($__internal_5afc5305133dd22fdb7f642d31ea38da25a7d1b3d797cdb7d82d30d42fef3547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5afc5305133dd22fdb7f642d31ea38da25a7d1b3d797cdb7d82d30d42fef3547->leave($__internal_5afc5305133dd22fdb7f642d31ea38da25a7d1b3d797cdb7d82d30d42fef3547_prof);

        
        $__internal_0cfc25ba5997055f57d85fb212d85098a970effd43f40b0645293f07c2b1fc6e->leave($__internal_0cfc25ba5997055f57d85fb212d85098a970effd43f40b0645293f07c2b1fc6e_prof);

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
