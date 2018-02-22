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
        $__internal_f39ee1f829054906d6daa8394daa35f7a44f5f2f0e7571793c0e622666f83642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39ee1f829054906d6daa8394daa35f7a44f5f2f0e7571793c0e622666f83642->enter($__internal_f39ee1f829054906d6daa8394daa35f7a44f5f2f0e7571793c0e622666f83642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_280ee89f8f754b8d2d6268ee8fcbea3b650be446ed54886388835884ba09c4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280ee89f8f754b8d2d6268ee8fcbea3b650be446ed54886388835884ba09c4a9->enter($__internal_280ee89f8f754b8d2d6268ee8fcbea3b650be446ed54886388835884ba09c4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39ee1f829054906d6daa8394daa35f7a44f5f2f0e7571793c0e622666f83642->leave($__internal_f39ee1f829054906d6daa8394daa35f7a44f5f2f0e7571793c0e622666f83642_prof);

        
        $__internal_280ee89f8f754b8d2d6268ee8fcbea3b650be446ed54886388835884ba09c4a9->leave($__internal_280ee89f8f754b8d2d6268ee8fcbea3b650be446ed54886388835884ba09c4a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ec9bc3b0a49186851bd25e73299500a90e5d24c891ca2ad3ef5834689c9bc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec9bc3b0a49186851bd25e73299500a90e5d24c891ca2ad3ef5834689c9bc26->enter($__internal_8ec9bc3b0a49186851bd25e73299500a90e5d24c891ca2ad3ef5834689c9bc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a9cb73ab36e55fa88a0013dd01932a042713e15f8025bbe6c4055115e625c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9cb73ab36e55fa88a0013dd01932a042713e15f8025bbe6c4055115e625c33->enter($__internal_3a9cb73ab36e55fa88a0013dd01932a042713e15f8025bbe6c4055115e625c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_3a9cb73ab36e55fa88a0013dd01932a042713e15f8025bbe6c4055115e625c33->leave($__internal_3a9cb73ab36e55fa88a0013dd01932a042713e15f8025bbe6c4055115e625c33_prof);

        
        $__internal_8ec9bc3b0a49186851bd25e73299500a90e5d24c891ca2ad3ef5834689c9bc26->leave($__internal_8ec9bc3b0a49186851bd25e73299500a90e5d24c891ca2ad3ef5834689c9bc26_prof);

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
