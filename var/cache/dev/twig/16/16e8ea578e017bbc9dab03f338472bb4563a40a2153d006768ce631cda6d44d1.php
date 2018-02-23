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
        $__internal_991a27fae3f89919c797a66cc2f16c5b2aa1cff47a53bcf30018e4b9184ea95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991a27fae3f89919c797a66cc2f16c5b2aa1cff47a53bcf30018e4b9184ea95d->enter($__internal_991a27fae3f89919c797a66cc2f16c5b2aa1cff47a53bcf30018e4b9184ea95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_97647bdc8975cb294ff2d902c7aff766e1ec0232a548e29e6c97fca619bb02e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97647bdc8975cb294ff2d902c7aff766e1ec0232a548e29e6c97fca619bb02e7->enter($__internal_97647bdc8975cb294ff2d902c7aff766e1ec0232a548e29e6c97fca619bb02e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_991a27fae3f89919c797a66cc2f16c5b2aa1cff47a53bcf30018e4b9184ea95d->leave($__internal_991a27fae3f89919c797a66cc2f16c5b2aa1cff47a53bcf30018e4b9184ea95d_prof);

        
        $__internal_97647bdc8975cb294ff2d902c7aff766e1ec0232a548e29e6c97fca619bb02e7->leave($__internal_97647bdc8975cb294ff2d902c7aff766e1ec0232a548e29e6c97fca619bb02e7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d68cb199a38f3fadbb2aff6eba51e2767a7d734885d0870ba315eaafbf227d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d68cb199a38f3fadbb2aff6eba51e2767a7d734885d0870ba315eaafbf227d5->enter($__internal_2d68cb199a38f3fadbb2aff6eba51e2767a7d734885d0870ba315eaafbf227d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c1d3385d20a79d07ffb0c00bdbe4c53fee5c936549e8a3270fcefd249ff4d049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d3385d20a79d07ffb0c00bdbe4c53fee5c936549e8a3270fcefd249ff4d049->enter($__internal_c1d3385d20a79d07ffb0c00bdbe4c53fee5c936549e8a3270fcefd249ff4d049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c1d3385d20a79d07ffb0c00bdbe4c53fee5c936549e8a3270fcefd249ff4d049->leave($__internal_c1d3385d20a79d07ffb0c00bdbe4c53fee5c936549e8a3270fcefd249ff4d049_prof);

        
        $__internal_2d68cb199a38f3fadbb2aff6eba51e2767a7d734885d0870ba315eaafbf227d5->leave($__internal_2d68cb199a38f3fadbb2aff6eba51e2767a7d734885d0870ba315eaafbf227d5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_321ef2d146af1da266d5548fc56c8bcc90f7250612b8032a2dae06d52c632c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321ef2d146af1da266d5548fc56c8bcc90f7250612b8032a2dae06d52c632c9c->enter($__internal_321ef2d146af1da266d5548fc56c8bcc90f7250612b8032a2dae06d52c632c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_08ac79c7b2599ea8d2fdee451aaa87ec31593df3a6ebffaaa631fdfa0312a446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ac79c7b2599ea8d2fdee451aaa87ec31593df3a6ebffaaa631fdfa0312a446->enter($__internal_08ac79c7b2599ea8d2fdee451aaa87ec31593df3a6ebffaaa631fdfa0312a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_08ac79c7b2599ea8d2fdee451aaa87ec31593df3a6ebffaaa631fdfa0312a446->leave($__internal_08ac79c7b2599ea8d2fdee451aaa87ec31593df3a6ebffaaa631fdfa0312a446_prof);

        
        $__internal_321ef2d146af1da266d5548fc56c8bcc90f7250612b8032a2dae06d52c632c9c->leave($__internal_321ef2d146af1da266d5548fc56c8bcc90f7250612b8032a2dae06d52c632c9c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3482a7e223ffbc2d54283ee5e66ab2b4c0f2325644ee1c7ae57e00a052a937cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3482a7e223ffbc2d54283ee5e66ab2b4c0f2325644ee1c7ae57e00a052a937cf->enter($__internal_3482a7e223ffbc2d54283ee5e66ab2b4c0f2325644ee1c7ae57e00a052a937cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e226ee8f914118b144295a5c772041a74ccd2652bf3a116e6ae1477e6da4f4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e226ee8f914118b144295a5c772041a74ccd2652bf3a116e6ae1477e6da4f4bf->enter($__internal_e226ee8f914118b144295a5c772041a74ccd2652bf3a116e6ae1477e6da4f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e226ee8f914118b144295a5c772041a74ccd2652bf3a116e6ae1477e6da4f4bf->leave($__internal_e226ee8f914118b144295a5c772041a74ccd2652bf3a116e6ae1477e6da4f4bf_prof);

        
        $__internal_3482a7e223ffbc2d54283ee5e66ab2b4c0f2325644ee1c7ae57e00a052a937cf->leave($__internal_3482a7e223ffbc2d54283ee5e66ab2b4c0f2325644ee1c7ae57e00a052a937cf_prof);

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
