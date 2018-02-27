<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_79c6f89e82adf73f09fc033834dfc903aa6c6aadfcceb1c8b742ba5304a5515f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae494ea7511d9d22260000566f0447341fdc8667a70bad63852a8e19c650ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae494ea7511d9d22260000566f0447341fdc8667a70bad63852a8e19c650ef8->enter($__internal_9ae494ea7511d9d22260000566f0447341fdc8667a70bad63852a8e19c650ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_8b7818b3303a471975d3def15fbc2add7ac74196067277ef0953b5a0ab861818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7818b3303a471975d3def15fbc2add7ac74196067277ef0953b5a0ab861818->enter($__internal_8b7818b3303a471975d3def15fbc2add7ac74196067277ef0953b5a0ab861818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9ae494ea7511d9d22260000566f0447341fdc8667a70bad63852a8e19c650ef8->leave($__internal_9ae494ea7511d9d22260000566f0447341fdc8667a70bad63852a8e19c650ef8_prof);

        
        $__internal_8b7818b3303a471975d3def15fbc2add7ac74196067277ef0953b5a0ab861818->leave($__internal_8b7818b3303a471975d3def15fbc2add7ac74196067277ef0953b5a0ab861818_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e9b7bd2d42376c008af266982e11b68055300cb8251feacaf12fc8eb8be0774a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b7bd2d42376c008af266982e11b68055300cb8251feacaf12fc8eb8be0774a->enter($__internal_e9b7bd2d42376c008af266982e11b68055300cb8251feacaf12fc8eb8be0774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_154efc742d5626e77216f1cb1f4d5bc59b11723c370fe89121f2692d5b1dcce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154efc742d5626e77216f1cb1f4d5bc59b11723c370fe89121f2692d5b1dcce0->enter($__internal_154efc742d5626e77216f1cb1f4d5bc59b11723c370fe89121f2692d5b1dcce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_154efc742d5626e77216f1cb1f4d5bc59b11723c370fe89121f2692d5b1dcce0->leave($__internal_154efc742d5626e77216f1cb1f4d5bc59b11723c370fe89121f2692d5b1dcce0_prof);

        
        $__internal_e9b7bd2d42376c008af266982e11b68055300cb8251feacaf12fc8eb8be0774a->leave($__internal_e9b7bd2d42376c008af266982e11b68055300cb8251feacaf12fc8eb8be0774a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_57f8131f962ad9487f47001ead33c72abedc782fea19a883b51792f07915ca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f8131f962ad9487f47001ead33c72abedc782fea19a883b51792f07915ca93->enter($__internal_57f8131f962ad9487f47001ead33c72abedc782fea19a883b51792f07915ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c5c97937267da518f1d99e8c64f01f6f34ae37ecff45a5d854e9f9245d2b19bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c97937267da518f1d99e8c64f01f6f34ae37ecff45a5d854e9f9245d2b19bb->enter($__internal_c5c97937267da518f1d99e8c64f01f6f34ae37ecff45a5d854e9f9245d2b19bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c5c97937267da518f1d99e8c64f01f6f34ae37ecff45a5d854e9f9245d2b19bb->leave($__internal_c5c97937267da518f1d99e8c64f01f6f34ae37ecff45a5d854e9f9245d2b19bb_prof);

        
        $__internal_57f8131f962ad9487f47001ead33c72abedc782fea19a883b51792f07915ca93->leave($__internal_57f8131f962ad9487f47001ead33c72abedc782fea19a883b51792f07915ca93_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_98678f422e4e5cf8545e91e5ad28c63ea4f63aa7dbb97d569dea94f3c0ad7440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98678f422e4e5cf8545e91e5ad28c63ea4f63aa7dbb97d569dea94f3c0ad7440->enter($__internal_98678f422e4e5cf8545e91e5ad28c63ea4f63aa7dbb97d569dea94f3c0ad7440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1be5db50dcef3c2afcd5709b92db6ed86e5b0ecfea3c7e093c3b9c1db2ab7be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be5db50dcef3c2afcd5709b92db6ed86e5b0ecfea3c7e093c3b9c1db2ab7be1->enter($__internal_1be5db50dcef3c2afcd5709b92db6ed86e5b0ecfea3c7e093c3b9c1db2ab7be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1be5db50dcef3c2afcd5709b92db6ed86e5b0ecfea3c7e093c3b9c1db2ab7be1->leave($__internal_1be5db50dcef3c2afcd5709b92db6ed86e5b0ecfea3c7e093c3b9c1db2ab7be1_prof);

        
        $__internal_98678f422e4e5cf8545e91e5ad28c63ea4f63aa7dbb97d569dea94f3c0ad7440->leave($__internal_98678f422e4e5cf8545e91e5ad28c63ea4f63aa7dbb97d569dea94f3c0ad7440_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
