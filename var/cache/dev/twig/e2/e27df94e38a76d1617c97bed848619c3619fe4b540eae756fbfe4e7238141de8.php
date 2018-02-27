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
        $__internal_6c6aa068beb89e47d32de93254ce5d9131503fcc8801ca54b48dc2f1232635cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6aa068beb89e47d32de93254ce5d9131503fcc8801ca54b48dc2f1232635cd->enter($__internal_6c6aa068beb89e47d32de93254ce5d9131503fcc8801ca54b48dc2f1232635cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_df14d7c839407de369dd982b0b8eab7bdcd22295da520a4fe4d9c3f314cd0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df14d7c839407de369dd982b0b8eab7bdcd22295da520a4fe4d9c3f314cd0782->enter($__internal_df14d7c839407de369dd982b0b8eab7bdcd22295da520a4fe4d9c3f314cd0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6aa068beb89e47d32de93254ce5d9131503fcc8801ca54b48dc2f1232635cd->leave($__internal_6c6aa068beb89e47d32de93254ce5d9131503fcc8801ca54b48dc2f1232635cd_prof);

        
        $__internal_df14d7c839407de369dd982b0b8eab7bdcd22295da520a4fe4d9c3f314cd0782->leave($__internal_df14d7c839407de369dd982b0b8eab7bdcd22295da520a4fe4d9c3f314cd0782_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4becae58be529cbb971d48671ba46c7d70f52d8bb32bf533090cef1afe735bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4becae58be529cbb971d48671ba46c7d70f52d8bb32bf533090cef1afe735bcd->enter($__internal_4becae58be529cbb971d48671ba46c7d70f52d8bb32bf533090cef1afe735bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d8cb6bd8ae18c5294436f5b638f9db7f4720f0c2ab9d9679bd24d4fafdbcffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8cb6bd8ae18c5294436f5b638f9db7f4720f0c2ab9d9679bd24d4fafdbcffc->enter($__internal_8d8cb6bd8ae18c5294436f5b638f9db7f4720f0c2ab9d9679bd24d4fafdbcffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8d8cb6bd8ae18c5294436f5b638f9db7f4720f0c2ab9d9679bd24d4fafdbcffc->leave($__internal_8d8cb6bd8ae18c5294436f5b638f9db7f4720f0c2ab9d9679bd24d4fafdbcffc_prof);

        
        $__internal_4becae58be529cbb971d48671ba46c7d70f52d8bb32bf533090cef1afe735bcd->leave($__internal_4becae58be529cbb971d48671ba46c7d70f52d8bb32bf533090cef1afe735bcd_prof);

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
