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
        $__internal_dd145e0cdb4fc8694dbd2503591ffa09bc9dbb95d72d8076d93df29ff69821fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd145e0cdb4fc8694dbd2503591ffa09bc9dbb95d72d8076d93df29ff69821fa->enter($__internal_dd145e0cdb4fc8694dbd2503591ffa09bc9dbb95d72d8076d93df29ff69821fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_3e7db9159e5d2864d52322dae3a3d0dcea86054606cef973ef662806a56b9c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7db9159e5d2864d52322dae3a3d0dcea86054606cef973ef662806a56b9c6c->enter($__internal_3e7db9159e5d2864d52322dae3a3d0dcea86054606cef973ef662806a56b9c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dd145e0cdb4fc8694dbd2503591ffa09bc9dbb95d72d8076d93df29ff69821fa->leave($__internal_dd145e0cdb4fc8694dbd2503591ffa09bc9dbb95d72d8076d93df29ff69821fa_prof);

        
        $__internal_3e7db9159e5d2864d52322dae3a3d0dcea86054606cef973ef662806a56b9c6c->leave($__internal_3e7db9159e5d2864d52322dae3a3d0dcea86054606cef973ef662806a56b9c6c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4cb6bcf44b61af4e8a8ccb2b63adb78f6a7679f37ec0a2376a44d6b41b9f6cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb6bcf44b61af4e8a8ccb2b63adb78f6a7679f37ec0a2376a44d6b41b9f6cbc->enter($__internal_4cb6bcf44b61af4e8a8ccb2b63adb78f6a7679f37ec0a2376a44d6b41b9f6cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7d6cef6e83c939af57fc1856f3db60cec688149108b29915840479a4e2d449f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6cef6e83c939af57fc1856f3db60cec688149108b29915840479a4e2d449f0->enter($__internal_7d6cef6e83c939af57fc1856f3db60cec688149108b29915840479a4e2d449f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_7d6cef6e83c939af57fc1856f3db60cec688149108b29915840479a4e2d449f0->leave($__internal_7d6cef6e83c939af57fc1856f3db60cec688149108b29915840479a4e2d449f0_prof);

        
        $__internal_4cb6bcf44b61af4e8a8ccb2b63adb78f6a7679f37ec0a2376a44d6b41b9f6cbc->leave($__internal_4cb6bcf44b61af4e8a8ccb2b63adb78f6a7679f37ec0a2376a44d6b41b9f6cbc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4693af3e45636503e3924d78d4226f272ffe5a10e7547c2514582d4c1f07c8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4693af3e45636503e3924d78d4226f272ffe5a10e7547c2514582d4c1f07c8e1->enter($__internal_4693af3e45636503e3924d78d4226f272ffe5a10e7547c2514582d4c1f07c8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_334066f980f6ae7ab276d83fc2be0f07822f13056b73fb03fa9ce7e03b1fefe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334066f980f6ae7ab276d83fc2be0f07822f13056b73fb03fa9ce7e03b1fefe5->enter($__internal_334066f980f6ae7ab276d83fc2be0f07822f13056b73fb03fa9ce7e03b1fefe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_334066f980f6ae7ab276d83fc2be0f07822f13056b73fb03fa9ce7e03b1fefe5->leave($__internal_334066f980f6ae7ab276d83fc2be0f07822f13056b73fb03fa9ce7e03b1fefe5_prof);

        
        $__internal_4693af3e45636503e3924d78d4226f272ffe5a10e7547c2514582d4c1f07c8e1->leave($__internal_4693af3e45636503e3924d78d4226f272ffe5a10e7547c2514582d4c1f07c8e1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d97ca97a9efbb810aa4fc6e45872a477585be2ee904e6c2accfed83d23ec707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d97ca97a9efbb810aa4fc6e45872a477585be2ee904e6c2accfed83d23ec707->enter($__internal_3d97ca97a9efbb810aa4fc6e45872a477585be2ee904e6c2accfed83d23ec707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5a491c4ed11543949fe54a137a20587dc50ca7da9a2300a612b66d6cb3f0172b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a491c4ed11543949fe54a137a20587dc50ca7da9a2300a612b66d6cb3f0172b->enter($__internal_5a491c4ed11543949fe54a137a20587dc50ca7da9a2300a612b66d6cb3f0172b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5a491c4ed11543949fe54a137a20587dc50ca7da9a2300a612b66d6cb3f0172b->leave($__internal_5a491c4ed11543949fe54a137a20587dc50ca7da9a2300a612b66d6cb3f0172b_prof);

        
        $__internal_3d97ca97a9efbb810aa4fc6e45872a477585be2ee904e6c2accfed83d23ec707->leave($__internal_3d97ca97a9efbb810aa4fc6e45872a477585be2ee904e6c2accfed83d23ec707_prof);

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
