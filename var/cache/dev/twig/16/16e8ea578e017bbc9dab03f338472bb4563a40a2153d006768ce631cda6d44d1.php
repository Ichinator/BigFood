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
        $__internal_9775f09d2c2b5d8d803c956c49b080d1e0b9f0f9846f57ff30872e2fa7c50459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9775f09d2c2b5d8d803c956c49b080d1e0b9f0f9846f57ff30872e2fa7c50459->enter($__internal_9775f09d2c2b5d8d803c956c49b080d1e0b9f0f9846f57ff30872e2fa7c50459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_20eefc9aa472e224247f8d498c98acb62f68ca404c3ad42a8f9c8000b8b480a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20eefc9aa472e224247f8d498c98acb62f68ca404c3ad42a8f9c8000b8b480a9->enter($__internal_20eefc9aa472e224247f8d498c98acb62f68ca404c3ad42a8f9c8000b8b480a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9775f09d2c2b5d8d803c956c49b080d1e0b9f0f9846f57ff30872e2fa7c50459->leave($__internal_9775f09d2c2b5d8d803c956c49b080d1e0b9f0f9846f57ff30872e2fa7c50459_prof);

        
        $__internal_20eefc9aa472e224247f8d498c98acb62f68ca404c3ad42a8f9c8000b8b480a9->leave($__internal_20eefc9aa472e224247f8d498c98acb62f68ca404c3ad42a8f9c8000b8b480a9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a73c7ac6330bfd8b9592ff74d4f09c4d13d8ddc2b41d046a96a0f7baa34db19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73c7ac6330bfd8b9592ff74d4f09c4d13d8ddc2b41d046a96a0f7baa34db19b->enter($__internal_a73c7ac6330bfd8b9592ff74d4f09c4d13d8ddc2b41d046a96a0f7baa34db19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0dac7a1a7451c5d88a43cbce75e1f5c6d07fa42b051ac138e1f8cff14f46be37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dac7a1a7451c5d88a43cbce75e1f5c6d07fa42b051ac138e1f8cff14f46be37->enter($__internal_0dac7a1a7451c5d88a43cbce75e1f5c6d07fa42b051ac138e1f8cff14f46be37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0dac7a1a7451c5d88a43cbce75e1f5c6d07fa42b051ac138e1f8cff14f46be37->leave($__internal_0dac7a1a7451c5d88a43cbce75e1f5c6d07fa42b051ac138e1f8cff14f46be37_prof);

        
        $__internal_a73c7ac6330bfd8b9592ff74d4f09c4d13d8ddc2b41d046a96a0f7baa34db19b->leave($__internal_a73c7ac6330bfd8b9592ff74d4f09c4d13d8ddc2b41d046a96a0f7baa34db19b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c075b13749e28426e7d2aa2ab3fa0aac6b5785072eef04af8e00be416db4e6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c075b13749e28426e7d2aa2ab3fa0aac6b5785072eef04af8e00be416db4e6e7->enter($__internal_c075b13749e28426e7d2aa2ab3fa0aac6b5785072eef04af8e00be416db4e6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_77a4b30d1fb6de6202b11a28a33ef49ecb81f61e26468905ebab5ccc6a474480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a4b30d1fb6de6202b11a28a33ef49ecb81f61e26468905ebab5ccc6a474480->enter($__internal_77a4b30d1fb6de6202b11a28a33ef49ecb81f61e26468905ebab5ccc6a474480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77a4b30d1fb6de6202b11a28a33ef49ecb81f61e26468905ebab5ccc6a474480->leave($__internal_77a4b30d1fb6de6202b11a28a33ef49ecb81f61e26468905ebab5ccc6a474480_prof);

        
        $__internal_c075b13749e28426e7d2aa2ab3fa0aac6b5785072eef04af8e00be416db4e6e7->leave($__internal_c075b13749e28426e7d2aa2ab3fa0aac6b5785072eef04af8e00be416db4e6e7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_848e4dce56c6617f3f38c5a6be29f2e58fa77c5b51e8dbbbe02a8438b80b262a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848e4dce56c6617f3f38c5a6be29f2e58fa77c5b51e8dbbbe02a8438b80b262a->enter($__internal_848e4dce56c6617f3f38c5a6be29f2e58fa77c5b51e8dbbbe02a8438b80b262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ac1461a78a801b4da9d445b3876b825953e662cb45ffaa6a6d98ce60f9f36380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1461a78a801b4da9d445b3876b825953e662cb45ffaa6a6d98ce60f9f36380->enter($__internal_ac1461a78a801b4da9d445b3876b825953e662cb45ffaa6a6d98ce60f9f36380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ac1461a78a801b4da9d445b3876b825953e662cb45ffaa6a6d98ce60f9f36380->leave($__internal_ac1461a78a801b4da9d445b3876b825953e662cb45ffaa6a6d98ce60f9f36380_prof);

        
        $__internal_848e4dce56c6617f3f38c5a6be29f2e58fa77c5b51e8dbbbe02a8438b80b262a->leave($__internal_848e4dce56c6617f3f38c5a6be29f2e58fa77c5b51e8dbbbe02a8438b80b262a_prof);

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
