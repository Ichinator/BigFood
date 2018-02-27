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
        $__internal_7a85f62ea181744b9a1373f42109cd3722aaeca9e7da1f65f28a5bc4edf1f08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a85f62ea181744b9a1373f42109cd3722aaeca9e7da1f65f28a5bc4edf1f08c->enter($__internal_7a85f62ea181744b9a1373f42109cd3722aaeca9e7da1f65f28a5bc4edf1f08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ac645a419a643857f5d070c958cd64fd64a11593523b6f88af9ff66138c8cd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac645a419a643857f5d070c958cd64fd64a11593523b6f88af9ff66138c8cd90->enter($__internal_ac645a419a643857f5d070c958cd64fd64a11593523b6f88af9ff66138c8cd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a85f62ea181744b9a1373f42109cd3722aaeca9e7da1f65f28a5bc4edf1f08c->leave($__internal_7a85f62ea181744b9a1373f42109cd3722aaeca9e7da1f65f28a5bc4edf1f08c_prof);

        
        $__internal_ac645a419a643857f5d070c958cd64fd64a11593523b6f88af9ff66138c8cd90->leave($__internal_ac645a419a643857f5d070c958cd64fd64a11593523b6f88af9ff66138c8cd90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57494d05a6b7ad3217ab88b637bc2a48049b360bac771536a75d04a5d3d56be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57494d05a6b7ad3217ab88b637bc2a48049b360bac771536a75d04a5d3d56be1->enter($__internal_57494d05a6b7ad3217ab88b637bc2a48049b360bac771536a75d04a5d3d56be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb47f4f8141ad43ca8b5ea72f7767ffe441aabb1cb6e690ccb9be4cf6c171f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb47f4f8141ad43ca8b5ea72f7767ffe441aabb1cb6e690ccb9be4cf6c171f3c->enter($__internal_eb47f4f8141ad43ca8b5ea72f7767ffe441aabb1cb6e690ccb9be4cf6c171f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_eb47f4f8141ad43ca8b5ea72f7767ffe441aabb1cb6e690ccb9be4cf6c171f3c->leave($__internal_eb47f4f8141ad43ca8b5ea72f7767ffe441aabb1cb6e690ccb9be4cf6c171f3c_prof);

        
        $__internal_57494d05a6b7ad3217ab88b637bc2a48049b360bac771536a75d04a5d3d56be1->leave($__internal_57494d05a6b7ad3217ab88b637bc2a48049b360bac771536a75d04a5d3d56be1_prof);

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
