<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8cba37a77c0c63c01746c2c4f9c514801dbee3fe8678fb7a7df9d56d33916e7b extends Twig_Template
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
        $__internal_6ae81ef971143be4a4169aab04361fc46bb40808f2e346d4784c808099f3d912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae81ef971143be4a4169aab04361fc46bb40808f2e346d4784c808099f3d912->enter($__internal_6ae81ef971143be4a4169aab04361fc46bb40808f2e346d4784c808099f3d912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_36a526ec870276b40965a71df94d839a1df897d4751d2696fa2211aa819759a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a526ec870276b40965a71df94d839a1df897d4751d2696fa2211aa819759a8->enter($__internal_36a526ec870276b40965a71df94d839a1df897d4751d2696fa2211aa819759a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6ae81ef971143be4a4169aab04361fc46bb40808f2e346d4784c808099f3d912->leave($__internal_6ae81ef971143be4a4169aab04361fc46bb40808f2e346d4784c808099f3d912_prof);

        
        $__internal_36a526ec870276b40965a71df94d839a1df897d4751d2696fa2211aa819759a8->leave($__internal_36a526ec870276b40965a71df94d839a1df897d4751d2696fa2211aa819759a8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3a623fbe6fc033e47eab41549a0680f6a0e0178f3ef338cee51ee9729a20a859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a623fbe6fc033e47eab41549a0680f6a0e0178f3ef338cee51ee9729a20a859->enter($__internal_3a623fbe6fc033e47eab41549a0680f6a0e0178f3ef338cee51ee9729a20a859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b094d2ad9208d874f55a050c8f152888952cde09eaee260319f90a49fc0506ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b094d2ad9208d874f55a050c8f152888952cde09eaee260319f90a49fc0506ab->enter($__internal_b094d2ad9208d874f55a050c8f152888952cde09eaee260319f90a49fc0506ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b094d2ad9208d874f55a050c8f152888952cde09eaee260319f90a49fc0506ab->leave($__internal_b094d2ad9208d874f55a050c8f152888952cde09eaee260319f90a49fc0506ab_prof);

        
        $__internal_3a623fbe6fc033e47eab41549a0680f6a0e0178f3ef338cee51ee9729a20a859->leave($__internal_3a623fbe6fc033e47eab41549a0680f6a0e0178f3ef338cee51ee9729a20a859_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e5e96b2dae424ef6d9cbc0a0b67498fcb95b5f67e5b27f5ec8a8123c0e3fd379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e96b2dae424ef6d9cbc0a0b67498fcb95b5f67e5b27f5ec8a8123c0e3fd379->enter($__internal_e5e96b2dae424ef6d9cbc0a0b67498fcb95b5f67e5b27f5ec8a8123c0e3fd379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3b34626e3b466e88a89137353997f01ae902832efe5e02fd32cdda82da3605ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b34626e3b466e88a89137353997f01ae902832efe5e02fd32cdda82da3605ce->enter($__internal_3b34626e3b466e88a89137353997f01ae902832efe5e02fd32cdda82da3605ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3b34626e3b466e88a89137353997f01ae902832efe5e02fd32cdda82da3605ce->leave($__internal_3b34626e3b466e88a89137353997f01ae902832efe5e02fd32cdda82da3605ce_prof);

        
        $__internal_e5e96b2dae424ef6d9cbc0a0b67498fcb95b5f67e5b27f5ec8a8123c0e3fd379->leave($__internal_e5e96b2dae424ef6d9cbc0a0b67498fcb95b5f67e5b27f5ec8a8123c0e3fd379_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fb746cf46a82ffb68d96c418600f825334d9f2ea7295e711b0945f674945680f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb746cf46a82ffb68d96c418600f825334d9f2ea7295e711b0945f674945680f->enter($__internal_fb746cf46a82ffb68d96c418600f825334d9f2ea7295e711b0945f674945680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_666e8271318b0fa542d8f90112b6ea4873a3bf189fb423d881a71454e830c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666e8271318b0fa542d8f90112b6ea4873a3bf189fb423d881a71454e830c8b1->enter($__internal_666e8271318b0fa542d8f90112b6ea4873a3bf189fb423d881a71454e830c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_666e8271318b0fa542d8f90112b6ea4873a3bf189fb423d881a71454e830c8b1->leave($__internal_666e8271318b0fa542d8f90112b6ea4873a3bf189fb423d881a71454e830c8b1_prof);

        
        $__internal_fb746cf46a82ffb68d96c418600f825334d9f2ea7295e711b0945f674945680f->leave($__internal_fb746cf46a82ffb68d96c418600f825334d9f2ea7295e711b0945f674945680f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
