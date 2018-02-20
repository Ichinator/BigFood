<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f5a0a4e2eed47d5cfd03e0b0e8fdd72e5042d2b3a27e568c57a1be3fbcea759a extends Twig_Template
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
        $__internal_0149cd764e27633c80051fe871f83f4257bdcfeeb903ef88e4937ce75080e037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0149cd764e27633c80051fe871f83f4257bdcfeeb903ef88e4937ce75080e037->enter($__internal_0149cd764e27633c80051fe871f83f4257bdcfeeb903ef88e4937ce75080e037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c33f5a4cf3a6d236503b6071a9c2f03cfcd16820c4ed709b1371f880b1151f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33f5a4cf3a6d236503b6071a9c2f03cfcd16820c4ed709b1371f880b1151f0d->enter($__internal_c33f5a4cf3a6d236503b6071a9c2f03cfcd16820c4ed709b1371f880b1151f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0149cd764e27633c80051fe871f83f4257bdcfeeb903ef88e4937ce75080e037->leave($__internal_0149cd764e27633c80051fe871f83f4257bdcfeeb903ef88e4937ce75080e037_prof);

        
        $__internal_c33f5a4cf3a6d236503b6071a9c2f03cfcd16820c4ed709b1371f880b1151f0d->leave($__internal_c33f5a4cf3a6d236503b6071a9c2f03cfcd16820c4ed709b1371f880b1151f0d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9e3655a1eb43a232e9e0640d31bd1911892b9ac159e7f438e572b239798cec20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3655a1eb43a232e9e0640d31bd1911892b9ac159e7f438e572b239798cec20->enter($__internal_9e3655a1eb43a232e9e0640d31bd1911892b9ac159e7f438e572b239798cec20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ccb300207657bc8ed0619cdf68d2829ad2d1f632650a07aa06c4abc027c63c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb300207657bc8ed0619cdf68d2829ad2d1f632650a07aa06c4abc027c63c34->enter($__internal_ccb300207657bc8ed0619cdf68d2829ad2d1f632650a07aa06c4abc027c63c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ccb300207657bc8ed0619cdf68d2829ad2d1f632650a07aa06c4abc027c63c34->leave($__internal_ccb300207657bc8ed0619cdf68d2829ad2d1f632650a07aa06c4abc027c63c34_prof);

        
        $__internal_9e3655a1eb43a232e9e0640d31bd1911892b9ac159e7f438e572b239798cec20->leave($__internal_9e3655a1eb43a232e9e0640d31bd1911892b9ac159e7f438e572b239798cec20_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_04a64b6ef1feb9ba4d1053ea12323b177d593294f9654502534cc2213cda6cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a64b6ef1feb9ba4d1053ea12323b177d593294f9654502534cc2213cda6cef->enter($__internal_04a64b6ef1feb9ba4d1053ea12323b177d593294f9654502534cc2213cda6cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_85b81f6696c810e2715afb7de83a957d66cd641625dd5b4cb2a5fa45f4a97655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b81f6696c810e2715afb7de83a957d66cd641625dd5b4cb2a5fa45f4a97655->enter($__internal_85b81f6696c810e2715afb7de83a957d66cd641625dd5b4cb2a5fa45f4a97655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_85b81f6696c810e2715afb7de83a957d66cd641625dd5b4cb2a5fa45f4a97655->leave($__internal_85b81f6696c810e2715afb7de83a957d66cd641625dd5b4cb2a5fa45f4a97655_prof);

        
        $__internal_04a64b6ef1feb9ba4d1053ea12323b177d593294f9654502534cc2213cda6cef->leave($__internal_04a64b6ef1feb9ba4d1053ea12323b177d593294f9654502534cc2213cda6cef_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3e175ae475d1feb9f61950a0caef4235441986b2f07d49dee0408550596332a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e175ae475d1feb9f61950a0caef4235441986b2f07d49dee0408550596332a7->enter($__internal_3e175ae475d1feb9f61950a0caef4235441986b2f07d49dee0408550596332a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_09895893b129ca1750f9d9cde5c941166c277b988df1b99c930d9f303437fdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09895893b129ca1750f9d9cde5c941166c277b988df1b99c930d9f303437fdc2->enter($__internal_09895893b129ca1750f9d9cde5c941166c277b988df1b99c930d9f303437fdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_09895893b129ca1750f9d9cde5c941166c277b988df1b99c930d9f303437fdc2->leave($__internal_09895893b129ca1750f9d9cde5c941166c277b988df1b99c930d9f303437fdc2_prof);

        
        $__internal_3e175ae475d1feb9f61950a0caef4235441986b2f07d49dee0408550596332a7->leave($__internal_3e175ae475d1feb9f61950a0caef4235441986b2f07d49dee0408550596332a7_prof);

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
