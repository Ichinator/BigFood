<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cd470fff2f009a3e49d11430c39bbefae896f0ac323680cc2f6ce5c4b4dd4ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e00894c134e3a7d9307fe79752ab3802a2ae8f39bc224e1c3e8ef6a403cfcca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00894c134e3a7d9307fe79752ab3802a2ae8f39bc224e1c3e8ef6a403cfcca7->enter($__internal_e00894c134e3a7d9307fe79752ab3802a2ae8f39bc224e1c3e8ef6a403cfcca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_dbd2d532bc859be4d5d109aedefa3db667e445a2822a0362d09c94020ae4d528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd2d532bc859be4d5d109aedefa3db667e445a2822a0362d09c94020ae4d528->enter($__internal_dbd2d532bc859be4d5d109aedefa3db667e445a2822a0362d09c94020ae4d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00894c134e3a7d9307fe79752ab3802a2ae8f39bc224e1c3e8ef6a403cfcca7->leave($__internal_e00894c134e3a7d9307fe79752ab3802a2ae8f39bc224e1c3e8ef6a403cfcca7_prof);

        
        $__internal_dbd2d532bc859be4d5d109aedefa3db667e445a2822a0362d09c94020ae4d528->leave($__internal_dbd2d532bc859be4d5d109aedefa3db667e445a2822a0362d09c94020ae4d528_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b54506afaeac215715d674f41ad778a1058caae810d21773e1ab3a5823c7f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b54506afaeac215715d674f41ad778a1058caae810d21773e1ab3a5823c7f06->enter($__internal_1b54506afaeac215715d674f41ad778a1058caae810d21773e1ab3a5823c7f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_374a79bb8d3e32a6ed169df56d39e8f1eaac286350bf0e36aefbc03779040869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374a79bb8d3e32a6ed169df56d39e8f1eaac286350bf0e36aefbc03779040869->enter($__internal_374a79bb8d3e32a6ed169df56d39e8f1eaac286350bf0e36aefbc03779040869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_374a79bb8d3e32a6ed169df56d39e8f1eaac286350bf0e36aefbc03779040869->leave($__internal_374a79bb8d3e32a6ed169df56d39e8f1eaac286350bf0e36aefbc03779040869_prof);

        
        $__internal_1b54506afaeac215715d674f41ad778a1058caae810d21773e1ab3a5823c7f06->leave($__internal_1b54506afaeac215715d674f41ad778a1058caae810d21773e1ab3a5823c7f06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
