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
        $__internal_121f29befaec13ad5b80a22d81f46ea9a02b715c2b8f3f616d5580332543fa9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121f29befaec13ad5b80a22d81f46ea9a02b715c2b8f3f616d5580332543fa9c->enter($__internal_121f29befaec13ad5b80a22d81f46ea9a02b715c2b8f3f616d5580332543fa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_62f13a788f5d5b1bc1a4164dcb0455545a6235d94b56418e2c5b3dc077f0f590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f13a788f5d5b1bc1a4164dcb0455545a6235d94b56418e2c5b3dc077f0f590->enter($__internal_62f13a788f5d5b1bc1a4164dcb0455545a6235d94b56418e2c5b3dc077f0f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121f29befaec13ad5b80a22d81f46ea9a02b715c2b8f3f616d5580332543fa9c->leave($__internal_121f29befaec13ad5b80a22d81f46ea9a02b715c2b8f3f616d5580332543fa9c_prof);

        
        $__internal_62f13a788f5d5b1bc1a4164dcb0455545a6235d94b56418e2c5b3dc077f0f590->leave($__internal_62f13a788f5d5b1bc1a4164dcb0455545a6235d94b56418e2c5b3dc077f0f590_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c27bc646bb71fb8e66de963ff562464f2b2d3352806eff5778fdedbbc13c1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c27bc646bb71fb8e66de963ff562464f2b2d3352806eff5778fdedbbc13c1af->enter($__internal_9c27bc646bb71fb8e66de963ff562464f2b2d3352806eff5778fdedbbc13c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c8260b42908db8d8d0527ecf42b75773735922db9efb5e1b8f2adf1c9553e318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8260b42908db8d8d0527ecf42b75773735922db9efb5e1b8f2adf1c9553e318->enter($__internal_c8260b42908db8d8d0527ecf42b75773735922db9efb5e1b8f2adf1c9553e318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c8260b42908db8d8d0527ecf42b75773735922db9efb5e1b8f2adf1c9553e318->leave($__internal_c8260b42908db8d8d0527ecf42b75773735922db9efb5e1b8f2adf1c9553e318_prof);

        
        $__internal_9c27bc646bb71fb8e66de963ff562464f2b2d3352806eff5778fdedbbc13c1af->leave($__internal_9c27bc646bb71fb8e66de963ff562464f2b2d3352806eff5778fdedbbc13c1af_prof);

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
