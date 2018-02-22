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
        $__internal_2c8ad3a34fb39014e5e97722c11c9dc3b316a85c2f2cbd8c665a79a0883ff79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8ad3a34fb39014e5e97722c11c9dc3b316a85c2f2cbd8c665a79a0883ff79f->enter($__internal_2c8ad3a34fb39014e5e97722c11c9dc3b316a85c2f2cbd8c665a79a0883ff79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_384c4f9f0f88994f256e23fa033f63c2d982a700243b0935b8e34ebc6199e034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384c4f9f0f88994f256e23fa033f63c2d982a700243b0935b8e34ebc6199e034->enter($__internal_384c4f9f0f88994f256e23fa033f63c2d982a700243b0935b8e34ebc6199e034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8ad3a34fb39014e5e97722c11c9dc3b316a85c2f2cbd8c665a79a0883ff79f->leave($__internal_2c8ad3a34fb39014e5e97722c11c9dc3b316a85c2f2cbd8c665a79a0883ff79f_prof);

        
        $__internal_384c4f9f0f88994f256e23fa033f63c2d982a700243b0935b8e34ebc6199e034->leave($__internal_384c4f9f0f88994f256e23fa033f63c2d982a700243b0935b8e34ebc6199e034_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d2e88db68a1eb66dcd9b4e643aff04cba2b1d7816b86811bffeb37f8d58bb95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2e88db68a1eb66dcd9b4e643aff04cba2b1d7816b86811bffeb37f8d58bb95->enter($__internal_6d2e88db68a1eb66dcd9b4e643aff04cba2b1d7816b86811bffeb37f8d58bb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab560be8e5753c869dfa9351c9b6c7843154d4f55a25d9040460e834b4591435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab560be8e5753c869dfa9351c9b6c7843154d4f55a25d9040460e834b4591435->enter($__internal_ab560be8e5753c869dfa9351c9b6c7843154d4f55a25d9040460e834b4591435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ab560be8e5753c869dfa9351c9b6c7843154d4f55a25d9040460e834b4591435->leave($__internal_ab560be8e5753c869dfa9351c9b6c7843154d4f55a25d9040460e834b4591435_prof);

        
        $__internal_6d2e88db68a1eb66dcd9b4e643aff04cba2b1d7816b86811bffeb37f8d58bb95->leave($__internal_6d2e88db68a1eb66dcd9b4e643aff04cba2b1d7816b86811bffeb37f8d58bb95_prof);

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
