<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_542328918a9c52ca10dbf77e9bf4222838d73d9430379dffe506322545ba2d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b26ef8e080f2b1ae32976a5948004fbc4d2d37bd40b7205b841b106a0826be41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26ef8e080f2b1ae32976a5948004fbc4d2d37bd40b7205b841b106a0826be41->enter($__internal_b26ef8e080f2b1ae32976a5948004fbc4d2d37bd40b7205b841b106a0826be41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_c3c437e424d47bcb5571204cbcf8c7acd78045ac6ec9ca5944cc76c264e0a7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c437e424d47bcb5571204cbcf8c7acd78045ac6ec9ca5944cc76c264e0a7b4->enter($__internal_c3c437e424d47bcb5571204cbcf8c7acd78045ac6ec9ca5944cc76c264e0a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b26ef8e080f2b1ae32976a5948004fbc4d2d37bd40b7205b841b106a0826be41->leave($__internal_b26ef8e080f2b1ae32976a5948004fbc4d2d37bd40b7205b841b106a0826be41_prof);

        
        $__internal_c3c437e424d47bcb5571204cbcf8c7acd78045ac6ec9ca5944cc76c264e0a7b4->leave($__internal_c3c437e424d47bcb5571204cbcf8c7acd78045ac6ec9ca5944cc76c264e0a7b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e239d8205f44d8fd38043dc14328a0213640e19792e148814b8ab8d294645a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e239d8205f44d8fd38043dc14328a0213640e19792e148814b8ab8d294645a3->enter($__internal_1e239d8205f44d8fd38043dc14328a0213640e19792e148814b8ab8d294645a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e6807760a3558cd9c396a5f2d6a0f3e6f209477d436fba0fd561b76d6bb37a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6807760a3558cd9c396a5f2d6a0f3e6f209477d436fba0fd561b76d6bb37a80->enter($__internal_e6807760a3558cd9c396a5f2d6a0f3e6f209477d436fba0fd561b76d6bb37a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e6807760a3558cd9c396a5f2d6a0f3e6f209477d436fba0fd561b76d6bb37a80->leave($__internal_e6807760a3558cd9c396a5f2d6a0f3e6f209477d436fba0fd561b76d6bb37a80_prof);

        
        $__internal_1e239d8205f44d8fd38043dc14328a0213640e19792e148814b8ab8d294645a3->leave($__internal_1e239d8205f44d8fd38043dc14328a0213640e19792e148814b8ab8d294645a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
