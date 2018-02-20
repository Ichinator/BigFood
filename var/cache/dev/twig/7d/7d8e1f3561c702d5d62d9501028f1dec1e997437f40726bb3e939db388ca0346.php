<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8ddb55231350846f8d020c7f04bfae996cba556995b948ff2a2ff8fb5ce18eca extends Twig_Template
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
        $__internal_22c8281f6a0acf8df8fb2e1e384f28f20fecca0debf6e1213e955ac190bca0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c8281f6a0acf8df8fb2e1e384f28f20fecca0debf6e1213e955ac190bca0e6->enter($__internal_22c8281f6a0acf8df8fb2e1e384f28f20fecca0debf6e1213e955ac190bca0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7faa8b563c5a8ac185038365827245195a8526a0319d5cd912d6521bfb405511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7faa8b563c5a8ac185038365827245195a8526a0319d5cd912d6521bfb405511->enter($__internal_7faa8b563c5a8ac185038365827245195a8526a0319d5cd912d6521bfb405511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_22c8281f6a0acf8df8fb2e1e384f28f20fecca0debf6e1213e955ac190bca0e6->leave($__internal_22c8281f6a0acf8df8fb2e1e384f28f20fecca0debf6e1213e955ac190bca0e6_prof);

        
        $__internal_7faa8b563c5a8ac185038365827245195a8526a0319d5cd912d6521bfb405511->leave($__internal_7faa8b563c5a8ac185038365827245195a8526a0319d5cd912d6521bfb405511_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c042145bbb9093a88d3e72e439c8ec52be2e69f809e7d72dbbaf065200adb250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c042145bbb9093a88d3e72e439c8ec52be2e69f809e7d72dbbaf065200adb250->enter($__internal_c042145bbb9093a88d3e72e439c8ec52be2e69f809e7d72dbbaf065200adb250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_087f1cf7156aa774b00c6ea4ada012065aeaf0446486ab2f6da0839c774ff09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087f1cf7156aa774b00c6ea4ada012065aeaf0446486ab2f6da0839c774ff09d->enter($__internal_087f1cf7156aa774b00c6ea4ada012065aeaf0446486ab2f6da0839c774ff09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_087f1cf7156aa774b00c6ea4ada012065aeaf0446486ab2f6da0839c774ff09d->leave($__internal_087f1cf7156aa774b00c6ea4ada012065aeaf0446486ab2f6da0839c774ff09d_prof);

        
        $__internal_c042145bbb9093a88d3e72e439c8ec52be2e69f809e7d72dbbaf065200adb250->leave($__internal_c042145bbb9093a88d3e72e439c8ec52be2e69f809e7d72dbbaf065200adb250_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f0871536cc3bafbbca4d0dd2340139dec5a97863bb6cea0d40a9fb544a5f8298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0871536cc3bafbbca4d0dd2340139dec5a97863bb6cea0d40a9fb544a5f8298->enter($__internal_f0871536cc3bafbbca4d0dd2340139dec5a97863bb6cea0d40a9fb544a5f8298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_35133b7035b9379ce3d1aebc4540d40414ad7cf4510cc3d165996f5d1082b6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35133b7035b9379ce3d1aebc4540d40414ad7cf4510cc3d165996f5d1082b6b5->enter($__internal_35133b7035b9379ce3d1aebc4540d40414ad7cf4510cc3d165996f5d1082b6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_35133b7035b9379ce3d1aebc4540d40414ad7cf4510cc3d165996f5d1082b6b5->leave($__internal_35133b7035b9379ce3d1aebc4540d40414ad7cf4510cc3d165996f5d1082b6b5_prof);

        
        $__internal_f0871536cc3bafbbca4d0dd2340139dec5a97863bb6cea0d40a9fb544a5f8298->leave($__internal_f0871536cc3bafbbca4d0dd2340139dec5a97863bb6cea0d40a9fb544a5f8298_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a9f4cd159e384e393b39e926a039a442e8f1c696fca95ba593a1d2dd63a2e416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f4cd159e384e393b39e926a039a442e8f1c696fca95ba593a1d2dd63a2e416->enter($__internal_a9f4cd159e384e393b39e926a039a442e8f1c696fca95ba593a1d2dd63a2e416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1a9912e0ecae9c8a75a986d372ab4bd2f6f22e5c31cb92757a7b50c7e1193825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9912e0ecae9c8a75a986d372ab4bd2f6f22e5c31cb92757a7b50c7e1193825->enter($__internal_1a9912e0ecae9c8a75a986d372ab4bd2f6f22e5c31cb92757a7b50c7e1193825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1a9912e0ecae9c8a75a986d372ab4bd2f6f22e5c31cb92757a7b50c7e1193825->leave($__internal_1a9912e0ecae9c8a75a986d372ab4bd2f6f22e5c31cb92757a7b50c7e1193825_prof);

        
        $__internal_a9f4cd159e384e393b39e926a039a442e8f1c696fca95ba593a1d2dd63a2e416->leave($__internal_a9f4cd159e384e393b39e926a039a442e8f1c696fca95ba593a1d2dd63a2e416_prof);

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
