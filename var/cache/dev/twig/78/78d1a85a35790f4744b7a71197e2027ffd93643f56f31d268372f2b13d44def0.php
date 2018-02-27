<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fd62065edde32b8aba09bead03299008407c17e9d5fbdf9d18446a0454172d76 extends Twig_Template
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
        $__internal_88ea2331eb90dc69803a2c36d473566c30a87259e1173bf47a06dc261b12d1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ea2331eb90dc69803a2c36d473566c30a87259e1173bf47a06dc261b12d1b3->enter($__internal_88ea2331eb90dc69803a2c36d473566c30a87259e1173bf47a06dc261b12d1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_1fe7a183b8745081207ca937be6cc17a4e83650d8f3027ce22a446aa795e76dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe7a183b8745081207ca937be6cc17a4e83650d8f3027ce22a446aa795e76dc->enter($__internal_1fe7a183b8745081207ca937be6cc17a4e83650d8f3027ce22a446aa795e76dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ea2331eb90dc69803a2c36d473566c30a87259e1173bf47a06dc261b12d1b3->leave($__internal_88ea2331eb90dc69803a2c36d473566c30a87259e1173bf47a06dc261b12d1b3_prof);

        
        $__internal_1fe7a183b8745081207ca937be6cc17a4e83650d8f3027ce22a446aa795e76dc->leave($__internal_1fe7a183b8745081207ca937be6cc17a4e83650d8f3027ce22a446aa795e76dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b08bff12c63f6cadd8b9a9eedd782e0f0874c881d411f807827912d470ef4eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08bff12c63f6cadd8b9a9eedd782e0f0874c881d411f807827912d470ef4eac->enter($__internal_b08bff12c63f6cadd8b9a9eedd782e0f0874c881d411f807827912d470ef4eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e72e11a174821c0153adc6973d06425a2093c4896b69813abe3677175aac56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e72e11a174821c0153adc6973d06425a2093c4896b69813abe3677175aac56f->enter($__internal_2e72e11a174821c0153adc6973d06425a2093c4896b69813abe3677175aac56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2e72e11a174821c0153adc6973d06425a2093c4896b69813abe3677175aac56f->leave($__internal_2e72e11a174821c0153adc6973d06425a2093c4896b69813abe3677175aac56f_prof);

        
        $__internal_b08bff12c63f6cadd8b9a9eedd782e0f0874c881d411f807827912d470ef4eac->leave($__internal_b08bff12c63f6cadd8b9a9eedd782e0f0874c881d411f807827912d470ef4eac_prof);

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
