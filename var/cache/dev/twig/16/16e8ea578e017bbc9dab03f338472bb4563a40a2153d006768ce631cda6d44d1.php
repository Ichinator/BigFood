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
        $__internal_6fb095749712e69f759734625a618e337a1d5d73bf682445c7227ed3f938d789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb095749712e69f759734625a618e337a1d5d73bf682445c7227ed3f938d789->enter($__internal_6fb095749712e69f759734625a618e337a1d5d73bf682445c7227ed3f938d789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_46f619619023e33a84cfcf2f8a93c328857d21a5224d61a97a6296acf56e925e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f619619023e33a84cfcf2f8a93c328857d21a5224d61a97a6296acf56e925e->enter($__internal_46f619619023e33a84cfcf2f8a93c328857d21a5224d61a97a6296acf56e925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6fb095749712e69f759734625a618e337a1d5d73bf682445c7227ed3f938d789->leave($__internal_6fb095749712e69f759734625a618e337a1d5d73bf682445c7227ed3f938d789_prof);

        
        $__internal_46f619619023e33a84cfcf2f8a93c328857d21a5224d61a97a6296acf56e925e->leave($__internal_46f619619023e33a84cfcf2f8a93c328857d21a5224d61a97a6296acf56e925e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c8bcdb282b0818ceb38c6c689dbd47ca60e42a9a917ab152ea00c437fcede6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8bcdb282b0818ceb38c6c689dbd47ca60e42a9a917ab152ea00c437fcede6c->enter($__internal_8c8bcdb282b0818ceb38c6c689dbd47ca60e42a9a917ab152ea00c437fcede6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a9086689fbb05bdd40e16b932f47833bce12373b979dac08c985d21edfc375b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9086689fbb05bdd40e16b932f47833bce12373b979dac08c985d21edfc375b5->enter($__internal_a9086689fbb05bdd40e16b932f47833bce12373b979dac08c985d21edfc375b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a9086689fbb05bdd40e16b932f47833bce12373b979dac08c985d21edfc375b5->leave($__internal_a9086689fbb05bdd40e16b932f47833bce12373b979dac08c985d21edfc375b5_prof);

        
        $__internal_8c8bcdb282b0818ceb38c6c689dbd47ca60e42a9a917ab152ea00c437fcede6c->leave($__internal_8c8bcdb282b0818ceb38c6c689dbd47ca60e42a9a917ab152ea00c437fcede6c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6bbbef323290e695f0865c5ef259d2f545e83981846fd6782ba5cf0b3868f675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbbef323290e695f0865c5ef259d2f545e83981846fd6782ba5cf0b3868f675->enter($__internal_6bbbef323290e695f0865c5ef259d2f545e83981846fd6782ba5cf0b3868f675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_51dc7b367bd161e0ec077a671c1fd5b9fab4911433278c64ef2a0af67a827d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dc7b367bd161e0ec077a671c1fd5b9fab4911433278c64ef2a0af67a827d7a->enter($__internal_51dc7b367bd161e0ec077a671c1fd5b9fab4911433278c64ef2a0af67a827d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_51dc7b367bd161e0ec077a671c1fd5b9fab4911433278c64ef2a0af67a827d7a->leave($__internal_51dc7b367bd161e0ec077a671c1fd5b9fab4911433278c64ef2a0af67a827d7a_prof);

        
        $__internal_6bbbef323290e695f0865c5ef259d2f545e83981846fd6782ba5cf0b3868f675->leave($__internal_6bbbef323290e695f0865c5ef259d2f545e83981846fd6782ba5cf0b3868f675_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7025b5ba60b9ce2d5aac9cd09c952d1aee9a08b25200d475e2e0ff33c8e7c310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7025b5ba60b9ce2d5aac9cd09c952d1aee9a08b25200d475e2e0ff33c8e7c310->enter($__internal_7025b5ba60b9ce2d5aac9cd09c952d1aee9a08b25200d475e2e0ff33c8e7c310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_66c79b0b3d3a1c9e0f6d924d4808fdde20cebb33b4b8b9a7b5c23c1688f93ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c79b0b3d3a1c9e0f6d924d4808fdde20cebb33b4b8b9a7b5c23c1688f93ba5->enter($__internal_66c79b0b3d3a1c9e0f6d924d4808fdde20cebb33b4b8b9a7b5c23c1688f93ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_66c79b0b3d3a1c9e0f6d924d4808fdde20cebb33b4b8b9a7b5c23c1688f93ba5->leave($__internal_66c79b0b3d3a1c9e0f6d924d4808fdde20cebb33b4b8b9a7b5c23c1688f93ba5_prof);

        
        $__internal_7025b5ba60b9ce2d5aac9cd09c952d1aee9a08b25200d475e2e0ff33c8e7c310->leave($__internal_7025b5ba60b9ce2d5aac9cd09c952d1aee9a08b25200d475e2e0ff33c8e7c310_prof);

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
