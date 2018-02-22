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
        $__internal_454f30c23414a97a1bd4a2df0baa8c65a7d2ce08e72fc0231ee29260ed475d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454f30c23414a97a1bd4a2df0baa8c65a7d2ce08e72fc0231ee29260ed475d9e->enter($__internal_454f30c23414a97a1bd4a2df0baa8c65a7d2ce08e72fc0231ee29260ed475d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_58d689b0282afeeed3d745f0851017aebec863714bd5838549668038c94da137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d689b0282afeeed3d745f0851017aebec863714bd5838549668038c94da137->enter($__internal_58d689b0282afeeed3d745f0851017aebec863714bd5838549668038c94da137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454f30c23414a97a1bd4a2df0baa8c65a7d2ce08e72fc0231ee29260ed475d9e->leave($__internal_454f30c23414a97a1bd4a2df0baa8c65a7d2ce08e72fc0231ee29260ed475d9e_prof);

        
        $__internal_58d689b0282afeeed3d745f0851017aebec863714bd5838549668038c94da137->leave($__internal_58d689b0282afeeed3d745f0851017aebec863714bd5838549668038c94da137_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cee9fe8aa15724d7d2facedc076539f9b2d3ab0b6b6288837321bd9eedfe8694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee9fe8aa15724d7d2facedc076539f9b2d3ab0b6b6288837321bd9eedfe8694->enter($__internal_cee9fe8aa15724d7d2facedc076539f9b2d3ab0b6b6288837321bd9eedfe8694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3e625d2efa212d9dea9424b8709aa5b1b12363424d77186d6dc0f98e514bc9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e625d2efa212d9dea9424b8709aa5b1b12363424d77186d6dc0f98e514bc9d9->enter($__internal_3e625d2efa212d9dea9424b8709aa5b1b12363424d77186d6dc0f98e514bc9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3e625d2efa212d9dea9424b8709aa5b1b12363424d77186d6dc0f98e514bc9d9->leave($__internal_3e625d2efa212d9dea9424b8709aa5b1b12363424d77186d6dc0f98e514bc9d9_prof);

        
        $__internal_cee9fe8aa15724d7d2facedc076539f9b2d3ab0b6b6288837321bd9eedfe8694->leave($__internal_cee9fe8aa15724d7d2facedc076539f9b2d3ab0b6b6288837321bd9eedfe8694_prof);

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
