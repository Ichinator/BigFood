<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_42461b569a915ba3d36e773704f6e07aa4ccfc39a3eb4d0558612b5d844114d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3c94cec5ba604b9ea6046bec0fbf7d8c0184e28325b9b8bb387ea3df37fc1e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c94cec5ba604b9ea6046bec0fbf7d8c0184e28325b9b8bb387ea3df37fc1e47->enter($__internal_3c94cec5ba604b9ea6046bec0fbf7d8c0184e28325b9b8bb387ea3df37fc1e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6bfea45abcff72ce140f3655217d604c5be2a785985abe073e3b45980247c1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfea45abcff72ce140f3655217d604c5be2a785985abe073e3b45980247c1a0->enter($__internal_6bfea45abcff72ce140f3655217d604c5be2a785985abe073e3b45980247c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c94cec5ba604b9ea6046bec0fbf7d8c0184e28325b9b8bb387ea3df37fc1e47->leave($__internal_3c94cec5ba604b9ea6046bec0fbf7d8c0184e28325b9b8bb387ea3df37fc1e47_prof);

        
        $__internal_6bfea45abcff72ce140f3655217d604c5be2a785985abe073e3b45980247c1a0->leave($__internal_6bfea45abcff72ce140f3655217d604c5be2a785985abe073e3b45980247c1a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42711b34402218bfd0ee3d59c32371a439ed4c24603cabbb6a80ec84b2c53c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42711b34402218bfd0ee3d59c32371a439ed4c24603cabbb6a80ec84b2c53c2c->enter($__internal_42711b34402218bfd0ee3d59c32371a439ed4c24603cabbb6a80ec84b2c53c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84b2f625893bc99d3265847addf195c79a5dfddf5cd3f58c023819a045808d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b2f625893bc99d3265847addf195c79a5dfddf5cd3f58c023819a045808d61->enter($__internal_84b2f625893bc99d3265847addf195c79a5dfddf5cd3f58c023819a045808d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_84b2f625893bc99d3265847addf195c79a5dfddf5cd3f58c023819a045808d61->leave($__internal_84b2f625893bc99d3265847addf195c79a5dfddf5cd3f58c023819a045808d61_prof);

        
        $__internal_42711b34402218bfd0ee3d59c32371a439ed4c24603cabbb6a80ec84b2c53c2c->leave($__internal_42711b34402218bfd0ee3d59c32371a439ed4c24603cabbb6a80ec84b2c53c2c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
