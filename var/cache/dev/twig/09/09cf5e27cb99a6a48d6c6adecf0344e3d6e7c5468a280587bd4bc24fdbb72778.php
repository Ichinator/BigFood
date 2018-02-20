<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f835580b7c4d7b675a5725d5f214b03e9c63febed859eace5034ea6cc7a0179d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c1d4dae9c5b814cd26859322506bd30523e7761af805552f6d00c5a3e155da25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d4dae9c5b814cd26859322506bd30523e7761af805552f6d00c5a3e155da25->enter($__internal_c1d4dae9c5b814cd26859322506bd30523e7761af805552f6d00c5a3e155da25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_262eb2981145a44a451a6ab2e28fbd875641d4232f4e42c34e2d2e2047734dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262eb2981145a44a451a6ab2e28fbd875641d4232f4e42c34e2d2e2047734dea->enter($__internal_262eb2981145a44a451a6ab2e28fbd875641d4232f4e42c34e2d2e2047734dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d4dae9c5b814cd26859322506bd30523e7761af805552f6d00c5a3e155da25->leave($__internal_c1d4dae9c5b814cd26859322506bd30523e7761af805552f6d00c5a3e155da25_prof);

        
        $__internal_262eb2981145a44a451a6ab2e28fbd875641d4232f4e42c34e2d2e2047734dea->leave($__internal_262eb2981145a44a451a6ab2e28fbd875641d4232f4e42c34e2d2e2047734dea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_630699841ee6ab6771c0ce8b206c64b337e388ceaa00b5d26d4e9c9dca8382f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630699841ee6ab6771c0ce8b206c64b337e388ceaa00b5d26d4e9c9dca8382f6->enter($__internal_630699841ee6ab6771c0ce8b206c64b337e388ceaa00b5d26d4e9c9dca8382f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bbf288812d92da10c1edfa52dc7563dde6f5987234c114da339c82ec8d7b9aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf288812d92da10c1edfa52dc7563dde6f5987234c114da339c82ec8d7b9aef->enter($__internal_bbf288812d92da10c1edfa52dc7563dde6f5987234c114da339c82ec8d7b9aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bbf288812d92da10c1edfa52dc7563dde6f5987234c114da339c82ec8d7b9aef->leave($__internal_bbf288812d92da10c1edfa52dc7563dde6f5987234c114da339c82ec8d7b9aef_prof);

        
        $__internal_630699841ee6ab6771c0ce8b206c64b337e388ceaa00b5d26d4e9c9dca8382f6->leave($__internal_630699841ee6ab6771c0ce8b206c64b337e388ceaa00b5d26d4e9c9dca8382f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
