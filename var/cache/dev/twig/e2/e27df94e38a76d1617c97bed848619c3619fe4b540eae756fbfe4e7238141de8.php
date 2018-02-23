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
        $__internal_35f264b15fad6be65465d3fc61762c9ddb9130219d2c2bf30cafc033ccd8e323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f264b15fad6be65465d3fc61762c9ddb9130219d2c2bf30cafc033ccd8e323->enter($__internal_35f264b15fad6be65465d3fc61762c9ddb9130219d2c2bf30cafc033ccd8e323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_99656d0dd4c2a55011927da67f2958b4e66c770eedcde53775a2292f4e32f7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99656d0dd4c2a55011927da67f2958b4e66c770eedcde53775a2292f4e32f7d3->enter($__internal_99656d0dd4c2a55011927da67f2958b4e66c770eedcde53775a2292f4e32f7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f264b15fad6be65465d3fc61762c9ddb9130219d2c2bf30cafc033ccd8e323->leave($__internal_35f264b15fad6be65465d3fc61762c9ddb9130219d2c2bf30cafc033ccd8e323_prof);

        
        $__internal_99656d0dd4c2a55011927da67f2958b4e66c770eedcde53775a2292f4e32f7d3->leave($__internal_99656d0dd4c2a55011927da67f2958b4e66c770eedcde53775a2292f4e32f7d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_164090e7f461a92f02272d19a58b4efc61e2a23e12042dd10d41d386083b16b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164090e7f461a92f02272d19a58b4efc61e2a23e12042dd10d41d386083b16b4->enter($__internal_164090e7f461a92f02272d19a58b4efc61e2a23e12042dd10d41d386083b16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_14028a1e71065b850f6dcf0559857101adf8b75ad9f0e466b044b24e687d7d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14028a1e71065b850f6dcf0559857101adf8b75ad9f0e466b044b24e687d7d6b->enter($__internal_14028a1e71065b850f6dcf0559857101adf8b75ad9f0e466b044b24e687d7d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_14028a1e71065b850f6dcf0559857101adf8b75ad9f0e466b044b24e687d7d6b->leave($__internal_14028a1e71065b850f6dcf0559857101adf8b75ad9f0e466b044b24e687d7d6b_prof);

        
        $__internal_164090e7f461a92f02272d19a58b4efc61e2a23e12042dd10d41d386083b16b4->leave($__internal_164090e7f461a92f02272d19a58b4efc61e2a23e12042dd10d41d386083b16b4_prof);

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
