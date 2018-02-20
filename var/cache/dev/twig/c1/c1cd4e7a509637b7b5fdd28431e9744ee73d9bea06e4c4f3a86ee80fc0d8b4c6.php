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
        $__internal_b507cad06e8f609283555e31ce8e0eeb8942d55b2c5c7d96e61a906dde402db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b507cad06e8f609283555e31ce8e0eeb8942d55b2c5c7d96e61a906dde402db5->enter($__internal_b507cad06e8f609283555e31ce8e0eeb8942d55b2c5c7d96e61a906dde402db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_d41f1bae1f627a9b301b02f6cfd0af6d0d8f586979fe707b5e1238770181f05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41f1bae1f627a9b301b02f6cfd0af6d0d8f586979fe707b5e1238770181f05b->enter($__internal_d41f1bae1f627a9b301b02f6cfd0af6d0d8f586979fe707b5e1238770181f05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b507cad06e8f609283555e31ce8e0eeb8942d55b2c5c7d96e61a906dde402db5->leave($__internal_b507cad06e8f609283555e31ce8e0eeb8942d55b2c5c7d96e61a906dde402db5_prof);

        
        $__internal_d41f1bae1f627a9b301b02f6cfd0af6d0d8f586979fe707b5e1238770181f05b->leave($__internal_d41f1bae1f627a9b301b02f6cfd0af6d0d8f586979fe707b5e1238770181f05b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_63dc17b1acb4739b413a819d3bc943c2e7bc6e08a110a98e20b8ee6fc713ea9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63dc17b1acb4739b413a819d3bc943c2e7bc6e08a110a98e20b8ee6fc713ea9a->enter($__internal_63dc17b1acb4739b413a819d3bc943c2e7bc6e08a110a98e20b8ee6fc713ea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ce3b60106922a529bc17c3e7028f689855e1c32c891d0cbfa5c70333968ea23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3b60106922a529bc17c3e7028f689855e1c32c891d0cbfa5c70333968ea23f->enter($__internal_ce3b60106922a529bc17c3e7028f689855e1c32c891d0cbfa5c70333968ea23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ce3b60106922a529bc17c3e7028f689855e1c32c891d0cbfa5c70333968ea23f->leave($__internal_ce3b60106922a529bc17c3e7028f689855e1c32c891d0cbfa5c70333968ea23f_prof);

        
        $__internal_63dc17b1acb4739b413a819d3bc943c2e7bc6e08a110a98e20b8ee6fc713ea9a->leave($__internal_63dc17b1acb4739b413a819d3bc943c2e7bc6e08a110a98e20b8ee6fc713ea9a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e568dbea23ce3dbd3f946d01f2d8ecb32add8f6556f9350339a04994605eb268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e568dbea23ce3dbd3f946d01f2d8ecb32add8f6556f9350339a04994605eb268->enter($__internal_e568dbea23ce3dbd3f946d01f2d8ecb32add8f6556f9350339a04994605eb268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_91ba16da3fcd447a54b846cfaee9687817adcf36b0915a9729669b1c61f2e0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ba16da3fcd447a54b846cfaee9687817adcf36b0915a9729669b1c61f2e0c9->enter($__internal_91ba16da3fcd447a54b846cfaee9687817adcf36b0915a9729669b1c61f2e0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_91ba16da3fcd447a54b846cfaee9687817adcf36b0915a9729669b1c61f2e0c9->leave($__internal_91ba16da3fcd447a54b846cfaee9687817adcf36b0915a9729669b1c61f2e0c9_prof);

        
        $__internal_e568dbea23ce3dbd3f946d01f2d8ecb32add8f6556f9350339a04994605eb268->leave($__internal_e568dbea23ce3dbd3f946d01f2d8ecb32add8f6556f9350339a04994605eb268_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a557ec867cfdb7852ab54caf454995da1ff4585260f1634062d07118378863ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a557ec867cfdb7852ab54caf454995da1ff4585260f1634062d07118378863ac->enter($__internal_a557ec867cfdb7852ab54caf454995da1ff4585260f1634062d07118378863ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1319703298a0e7a022d91f48c6c05bb4edfd26a96d5f14e78e20d93644af6419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1319703298a0e7a022d91f48c6c05bb4edfd26a96d5f14e78e20d93644af6419->enter($__internal_1319703298a0e7a022d91f48c6c05bb4edfd26a96d5f14e78e20d93644af6419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1319703298a0e7a022d91f48c6c05bb4edfd26a96d5f14e78e20d93644af6419->leave($__internal_1319703298a0e7a022d91f48c6c05bb4edfd26a96d5f14e78e20d93644af6419_prof);

        
        $__internal_a557ec867cfdb7852ab54caf454995da1ff4585260f1634062d07118378863ac->leave($__internal_a557ec867cfdb7852ab54caf454995da1ff4585260f1634062d07118378863ac_prof);

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
