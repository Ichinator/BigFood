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
        $__internal_b200a1c0fe5e47b76e583255849ef14dec34bfa2b234ae7a7eeb2f2efdcd71ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b200a1c0fe5e47b76e583255849ef14dec34bfa2b234ae7a7eeb2f2efdcd71ae->enter($__internal_b200a1c0fe5e47b76e583255849ef14dec34bfa2b234ae7a7eeb2f2efdcd71ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f95ad8228ec66a608d21a58ed4756626831ba70655bdf488650442908a9ee104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95ad8228ec66a608d21a58ed4756626831ba70655bdf488650442908a9ee104->enter($__internal_f95ad8228ec66a608d21a58ed4756626831ba70655bdf488650442908a9ee104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b200a1c0fe5e47b76e583255849ef14dec34bfa2b234ae7a7eeb2f2efdcd71ae->leave($__internal_b200a1c0fe5e47b76e583255849ef14dec34bfa2b234ae7a7eeb2f2efdcd71ae_prof);

        
        $__internal_f95ad8228ec66a608d21a58ed4756626831ba70655bdf488650442908a9ee104->leave($__internal_f95ad8228ec66a608d21a58ed4756626831ba70655bdf488650442908a9ee104_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da2c49df23e4bda816897ce1502d565adfe61493b214e338eaf66ce9bfec5d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2c49df23e4bda816897ce1502d565adfe61493b214e338eaf66ce9bfec5d89->enter($__internal_da2c49df23e4bda816897ce1502d565adfe61493b214e338eaf66ce9bfec5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb18ce4124fb2f6c5939c6e92823909879f26277d76bd940be7fa33913e683d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb18ce4124fb2f6c5939c6e92823909879f26277d76bd940be7fa33913e683d2->enter($__internal_bb18ce4124fb2f6c5939c6e92823909879f26277d76bd940be7fa33913e683d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_bb18ce4124fb2f6c5939c6e92823909879f26277d76bd940be7fa33913e683d2->leave($__internal_bb18ce4124fb2f6c5939c6e92823909879f26277d76bd940be7fa33913e683d2_prof);

        
        $__internal_da2c49df23e4bda816897ce1502d565adfe61493b214e338eaf66ce9bfec5d89->leave($__internal_da2c49df23e4bda816897ce1502d565adfe61493b214e338eaf66ce9bfec5d89_prof);

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
