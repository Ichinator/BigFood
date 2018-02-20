<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_b1fa8b635050a9a943e8aa65f3b9fa21bbe8d76dbe8e06d27543558310ad9e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_18b3f66fcf353df73474634f2821d13765da7bd826d39fe754c590e3178b7647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b3f66fcf353df73474634f2821d13765da7bd826d39fe754c590e3178b7647->enter($__internal_18b3f66fcf353df73474634f2821d13765da7bd826d39fe754c590e3178b7647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a9ab5c05fba17e8237ab4b10f4fc0fe61a1d9fe76ea46a13cb72b3861c76a9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ab5c05fba17e8237ab4b10f4fc0fe61a1d9fe76ea46a13cb72b3861c76a9e6->enter($__internal_a9ab5c05fba17e8237ab4b10f4fc0fe61a1d9fe76ea46a13cb72b3861c76a9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b3f66fcf353df73474634f2821d13765da7bd826d39fe754c590e3178b7647->leave($__internal_18b3f66fcf353df73474634f2821d13765da7bd826d39fe754c590e3178b7647_prof);

        
        $__internal_a9ab5c05fba17e8237ab4b10f4fc0fe61a1d9fe76ea46a13cb72b3861c76a9e6->leave($__internal_a9ab5c05fba17e8237ab4b10f4fc0fe61a1d9fe76ea46a13cb72b3861c76a9e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_715b3a9217fd3047b1865be48f5279c57e029e83f72396bd81125d740b224cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715b3a9217fd3047b1865be48f5279c57e029e83f72396bd81125d740b224cc9->enter($__internal_715b3a9217fd3047b1865be48f5279c57e029e83f72396bd81125d740b224cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5ed10a395d8b2e3d771880e15cd7cac3b7aee08f7f111db75e514d18af958e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed10a395d8b2e3d771880e15cd7cac3b7aee08f7f111db75e514d18af958e96->enter($__internal_5ed10a395d8b2e3d771880e15cd7cac3b7aee08f7f111db75e514d18af958e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5ed10a395d8b2e3d771880e15cd7cac3b7aee08f7f111db75e514d18af958e96->leave($__internal_5ed10a395d8b2e3d771880e15cd7cac3b7aee08f7f111db75e514d18af958e96_prof);

        
        $__internal_715b3a9217fd3047b1865be48f5279c57e029e83f72396bd81125d740b224cc9->leave($__internal_715b3a9217fd3047b1865be48f5279c57e029e83f72396bd81125d740b224cc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
