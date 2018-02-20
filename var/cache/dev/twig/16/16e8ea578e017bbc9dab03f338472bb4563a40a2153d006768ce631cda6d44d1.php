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
        $__internal_6fd86f5fbc593e7317af607948ab0f6a8d0f5aaf7e19548f1bc85d2248c720ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd86f5fbc593e7317af607948ab0f6a8d0f5aaf7e19548f1bc85d2248c720ec->enter($__internal_6fd86f5fbc593e7317af607948ab0f6a8d0f5aaf7e19548f1bc85d2248c720ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_fd90a836d896419bec42a0f87accad4a5625415b0fdab2ddcfbdf507501ff824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd90a836d896419bec42a0f87accad4a5625415b0fdab2ddcfbdf507501ff824->enter($__internal_fd90a836d896419bec42a0f87accad4a5625415b0fdab2ddcfbdf507501ff824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6fd86f5fbc593e7317af607948ab0f6a8d0f5aaf7e19548f1bc85d2248c720ec->leave($__internal_6fd86f5fbc593e7317af607948ab0f6a8d0f5aaf7e19548f1bc85d2248c720ec_prof);

        
        $__internal_fd90a836d896419bec42a0f87accad4a5625415b0fdab2ddcfbdf507501ff824->leave($__internal_fd90a836d896419bec42a0f87accad4a5625415b0fdab2ddcfbdf507501ff824_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_27f6c3ff81cabf93171cef3c1f23234cca0c28fff971b095479c59ca7ef5fad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f6c3ff81cabf93171cef3c1f23234cca0c28fff971b095479c59ca7ef5fad3->enter($__internal_27f6c3ff81cabf93171cef3c1f23234cca0c28fff971b095479c59ca7ef5fad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_18eee37325703d5e1612f512b8eb037ddedbe32212582cf3bb4f53b9d51aa497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18eee37325703d5e1612f512b8eb037ddedbe32212582cf3bb4f53b9d51aa497->enter($__internal_18eee37325703d5e1612f512b8eb037ddedbe32212582cf3bb4f53b9d51aa497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_18eee37325703d5e1612f512b8eb037ddedbe32212582cf3bb4f53b9d51aa497->leave($__internal_18eee37325703d5e1612f512b8eb037ddedbe32212582cf3bb4f53b9d51aa497_prof);

        
        $__internal_27f6c3ff81cabf93171cef3c1f23234cca0c28fff971b095479c59ca7ef5fad3->leave($__internal_27f6c3ff81cabf93171cef3c1f23234cca0c28fff971b095479c59ca7ef5fad3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_29666ed822aa61502da6d1f1a1936e82754ed9b1bef64e9f46537d0f31af473e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29666ed822aa61502da6d1f1a1936e82754ed9b1bef64e9f46537d0f31af473e->enter($__internal_29666ed822aa61502da6d1f1a1936e82754ed9b1bef64e9f46537d0f31af473e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2258145ffeb6261667fa7fa3e4e1c10ea36e528b61cdc136ff16a74974ec9bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2258145ffeb6261667fa7fa3e4e1c10ea36e528b61cdc136ff16a74974ec9bfb->enter($__internal_2258145ffeb6261667fa7fa3e4e1c10ea36e528b61cdc136ff16a74974ec9bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2258145ffeb6261667fa7fa3e4e1c10ea36e528b61cdc136ff16a74974ec9bfb->leave($__internal_2258145ffeb6261667fa7fa3e4e1c10ea36e528b61cdc136ff16a74974ec9bfb_prof);

        
        $__internal_29666ed822aa61502da6d1f1a1936e82754ed9b1bef64e9f46537d0f31af473e->leave($__internal_29666ed822aa61502da6d1f1a1936e82754ed9b1bef64e9f46537d0f31af473e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_72bc006e47fce39881570f91ac9b7af763575f8ec7fefc3d9686b789ec22ed14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bc006e47fce39881570f91ac9b7af763575f8ec7fefc3d9686b789ec22ed14->enter($__internal_72bc006e47fce39881570f91ac9b7af763575f8ec7fefc3d9686b789ec22ed14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c0be790d329fb307599533bf7f0a24d37bd6a1611c2cfd203481758c67a2bf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0be790d329fb307599533bf7f0a24d37bd6a1611c2cfd203481758c67a2bf7e->enter($__internal_c0be790d329fb307599533bf7f0a24d37bd6a1611c2cfd203481758c67a2bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c0be790d329fb307599533bf7f0a24d37bd6a1611c2cfd203481758c67a2bf7e->leave($__internal_c0be790d329fb307599533bf7f0a24d37bd6a1611c2cfd203481758c67a2bf7e_prof);

        
        $__internal_72bc006e47fce39881570f91ac9b7af763575f8ec7fefc3d9686b789ec22ed14->leave($__internal_72bc006e47fce39881570f91ac9b7af763575f8ec7fefc3d9686b789ec22ed14_prof);

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
