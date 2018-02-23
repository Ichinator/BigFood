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
        $__internal_567fd22a9ff66d076e14c4429b130fe2dde936809c282f92502a75703a107548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567fd22a9ff66d076e14c4429b130fe2dde936809c282f92502a75703a107548->enter($__internal_567fd22a9ff66d076e14c4429b130fe2dde936809c282f92502a75703a107548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5f994b74eebea0ab893266d6db8f8003d7186c2be4675f0193b8753f9e7b5c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f994b74eebea0ab893266d6db8f8003d7186c2be4675f0193b8753f9e7b5c41->enter($__internal_5f994b74eebea0ab893266d6db8f8003d7186c2be4675f0193b8753f9e7b5c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_567fd22a9ff66d076e14c4429b130fe2dde936809c282f92502a75703a107548->leave($__internal_567fd22a9ff66d076e14c4429b130fe2dde936809c282f92502a75703a107548_prof);

        
        $__internal_5f994b74eebea0ab893266d6db8f8003d7186c2be4675f0193b8753f9e7b5c41->leave($__internal_5f994b74eebea0ab893266d6db8f8003d7186c2be4675f0193b8753f9e7b5c41_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_70d042c2ae1d63009beea21b1ed4ba210fc89370011fa27709b4ac49e6013755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d042c2ae1d63009beea21b1ed4ba210fc89370011fa27709b4ac49e6013755->enter($__internal_70d042c2ae1d63009beea21b1ed4ba210fc89370011fa27709b4ac49e6013755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4e71fe8df7dc17dd558cb74000fa7fec2862e3605f2961c5b8d8fd9b68cb688a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e71fe8df7dc17dd558cb74000fa7fec2862e3605f2961c5b8d8fd9b68cb688a->enter($__internal_4e71fe8df7dc17dd558cb74000fa7fec2862e3605f2961c5b8d8fd9b68cb688a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4e71fe8df7dc17dd558cb74000fa7fec2862e3605f2961c5b8d8fd9b68cb688a->leave($__internal_4e71fe8df7dc17dd558cb74000fa7fec2862e3605f2961c5b8d8fd9b68cb688a_prof);

        
        $__internal_70d042c2ae1d63009beea21b1ed4ba210fc89370011fa27709b4ac49e6013755->leave($__internal_70d042c2ae1d63009beea21b1ed4ba210fc89370011fa27709b4ac49e6013755_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dcc3e27857be17dc6fa3518d44942f39bf38eaf9820fbca5074b330834673c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc3e27857be17dc6fa3518d44942f39bf38eaf9820fbca5074b330834673c3a->enter($__internal_dcc3e27857be17dc6fa3518d44942f39bf38eaf9820fbca5074b330834673c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bb0b67a2b2deda5e80ab00feb0ed1f7ecf0310e09a50020426fc3d8a4d4ff859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0b67a2b2deda5e80ab00feb0ed1f7ecf0310e09a50020426fc3d8a4d4ff859->enter($__internal_bb0b67a2b2deda5e80ab00feb0ed1f7ecf0310e09a50020426fc3d8a4d4ff859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb0b67a2b2deda5e80ab00feb0ed1f7ecf0310e09a50020426fc3d8a4d4ff859->leave($__internal_bb0b67a2b2deda5e80ab00feb0ed1f7ecf0310e09a50020426fc3d8a4d4ff859_prof);

        
        $__internal_dcc3e27857be17dc6fa3518d44942f39bf38eaf9820fbca5074b330834673c3a->leave($__internal_dcc3e27857be17dc6fa3518d44942f39bf38eaf9820fbca5074b330834673c3a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a761c82aa3daecc75b927c39cc87f4dd000bf977ce6a256a6ae0db94909ce15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a761c82aa3daecc75b927c39cc87f4dd000bf977ce6a256a6ae0db94909ce15a->enter($__internal_a761c82aa3daecc75b927c39cc87f4dd000bf977ce6a256a6ae0db94909ce15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_740c22fab7406ad49bbb891c8c404a0108e43956dff02ba2441ce3f8959b4ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740c22fab7406ad49bbb891c8c404a0108e43956dff02ba2441ce3f8959b4ea0->enter($__internal_740c22fab7406ad49bbb891c8c404a0108e43956dff02ba2441ce3f8959b4ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_740c22fab7406ad49bbb891c8c404a0108e43956dff02ba2441ce3f8959b4ea0->leave($__internal_740c22fab7406ad49bbb891c8c404a0108e43956dff02ba2441ce3f8959b4ea0_prof);

        
        $__internal_a761c82aa3daecc75b927c39cc87f4dd000bf977ce6a256a6ae0db94909ce15a->leave($__internal_a761c82aa3daecc75b927c39cc87f4dd000bf977ce6a256a6ae0db94909ce15a_prof);

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
