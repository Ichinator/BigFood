<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_091ac0e66eb4d4a68cb1366bfac36edaef20e46a601373bc03ea7da8553d4928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ed08a3d083ba3a094a4d90e08f69394a83ce7707f88a1b0516bdbbeb8078d053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed08a3d083ba3a094a4d90e08f69394a83ce7707f88a1b0516bdbbeb8078d053->enter($__internal_ed08a3d083ba3a094a4d90e08f69394a83ce7707f88a1b0516bdbbeb8078d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_a26d648d0606cc79d5740fddf62aacef4a4557a2e586f3a9238de2c4c47ee252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26d648d0606cc79d5740fddf62aacef4a4557a2e586f3a9238de2c4c47ee252->enter($__internal_a26d648d0606cc79d5740fddf62aacef4a4557a2e586f3a9238de2c4c47ee252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed08a3d083ba3a094a4d90e08f69394a83ce7707f88a1b0516bdbbeb8078d053->leave($__internal_ed08a3d083ba3a094a4d90e08f69394a83ce7707f88a1b0516bdbbeb8078d053_prof);

        
        $__internal_a26d648d0606cc79d5740fddf62aacef4a4557a2e586f3a9238de2c4c47ee252->leave($__internal_a26d648d0606cc79d5740fddf62aacef4a4557a2e586f3a9238de2c4c47ee252_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b73cea1002edf710cb932687e7dce2f51c4c7231454dd496050f8c9ea38a7acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73cea1002edf710cb932687e7dce2f51c4c7231454dd496050f8c9ea38a7acc->enter($__internal_b73cea1002edf710cb932687e7dce2f51c4c7231454dd496050f8c9ea38a7acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_683655dcf9145fb7e32efb06bf95ee1e43e879f8124603b8c5b79704926bbbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683655dcf9145fb7e32efb06bf95ee1e43e879f8124603b8c5b79704926bbbb5->enter($__internal_683655dcf9145fb7e32efb06bf95ee1e43e879f8124603b8c5b79704926bbbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_683655dcf9145fb7e32efb06bf95ee1e43e879f8124603b8c5b79704926bbbb5->leave($__internal_683655dcf9145fb7e32efb06bf95ee1e43e879f8124603b8c5b79704926bbbb5_prof);

        
        $__internal_b73cea1002edf710cb932687e7dce2f51c4c7231454dd496050f8c9ea38a7acc->leave($__internal_b73cea1002edf710cb932687e7dce2f51c4c7231454dd496050f8c9ea38a7acc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
