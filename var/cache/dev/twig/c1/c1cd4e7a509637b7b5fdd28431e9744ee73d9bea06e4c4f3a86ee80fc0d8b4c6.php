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
        $__internal_58685258fcf0eef615d71521e6f161c99e599c1e2eee92ff71b1c1840cd95e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58685258fcf0eef615d71521e6f161c99e599c1e2eee92ff71b1c1840cd95e0e->enter($__internal_58685258fcf0eef615d71521e6f161c99e599c1e2eee92ff71b1c1840cd95e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_db69acf4d42cfc891433933f340c6dacc2c153f689d75c3f8047e5c1b29c2109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db69acf4d42cfc891433933f340c6dacc2c153f689d75c3f8047e5c1b29c2109->enter($__internal_db69acf4d42cfc891433933f340c6dacc2c153f689d75c3f8047e5c1b29c2109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_58685258fcf0eef615d71521e6f161c99e599c1e2eee92ff71b1c1840cd95e0e->leave($__internal_58685258fcf0eef615d71521e6f161c99e599c1e2eee92ff71b1c1840cd95e0e_prof);

        
        $__internal_db69acf4d42cfc891433933f340c6dacc2c153f689d75c3f8047e5c1b29c2109->leave($__internal_db69acf4d42cfc891433933f340c6dacc2c153f689d75c3f8047e5c1b29c2109_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cd7942f7dcfeae5a1be199ec313e0592fe91ff87d559fba78fe62d31b1c6a294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7942f7dcfeae5a1be199ec313e0592fe91ff87d559fba78fe62d31b1c6a294->enter($__internal_cd7942f7dcfeae5a1be199ec313e0592fe91ff87d559fba78fe62d31b1c6a294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_931dfa869850e93a58d4261bef2f0a0e078b36fadd3423340e612117ca214010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931dfa869850e93a58d4261bef2f0a0e078b36fadd3423340e612117ca214010->enter($__internal_931dfa869850e93a58d4261bef2f0a0e078b36fadd3423340e612117ca214010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_931dfa869850e93a58d4261bef2f0a0e078b36fadd3423340e612117ca214010->leave($__internal_931dfa869850e93a58d4261bef2f0a0e078b36fadd3423340e612117ca214010_prof);

        
        $__internal_cd7942f7dcfeae5a1be199ec313e0592fe91ff87d559fba78fe62d31b1c6a294->leave($__internal_cd7942f7dcfeae5a1be199ec313e0592fe91ff87d559fba78fe62d31b1c6a294_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bf06e79e125710f6704994f8f9da56934c281343e32e4e38bf0c258e019ed509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf06e79e125710f6704994f8f9da56934c281343e32e4e38bf0c258e019ed509->enter($__internal_bf06e79e125710f6704994f8f9da56934c281343e32e4e38bf0c258e019ed509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_09f2ad70ada9bd15b6b2b18b729262b79605344b8a79ae9d90e5d2dc82e29912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f2ad70ada9bd15b6b2b18b729262b79605344b8a79ae9d90e5d2dc82e29912->enter($__internal_09f2ad70ada9bd15b6b2b18b729262b79605344b8a79ae9d90e5d2dc82e29912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_09f2ad70ada9bd15b6b2b18b729262b79605344b8a79ae9d90e5d2dc82e29912->leave($__internal_09f2ad70ada9bd15b6b2b18b729262b79605344b8a79ae9d90e5d2dc82e29912_prof);

        
        $__internal_bf06e79e125710f6704994f8f9da56934c281343e32e4e38bf0c258e019ed509->leave($__internal_bf06e79e125710f6704994f8f9da56934c281343e32e4e38bf0c258e019ed509_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_22faad98939f5e0fc1ed0ab7c045edc847ec678c06bf72350c9b3f231baf6d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22faad98939f5e0fc1ed0ab7c045edc847ec678c06bf72350c9b3f231baf6d8b->enter($__internal_22faad98939f5e0fc1ed0ab7c045edc847ec678c06bf72350c9b3f231baf6d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_24adef3c2c78d364ffcf84ca500217dfbdb9aeffb36a658a96a9dd70b9624b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24adef3c2c78d364ffcf84ca500217dfbdb9aeffb36a658a96a9dd70b9624b3a->enter($__internal_24adef3c2c78d364ffcf84ca500217dfbdb9aeffb36a658a96a9dd70b9624b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_24adef3c2c78d364ffcf84ca500217dfbdb9aeffb36a658a96a9dd70b9624b3a->leave($__internal_24adef3c2c78d364ffcf84ca500217dfbdb9aeffb36a658a96a9dd70b9624b3a_prof);

        
        $__internal_22faad98939f5e0fc1ed0ab7c045edc847ec678c06bf72350c9b3f231baf6d8b->leave($__internal_22faad98939f5e0fc1ed0ab7c045edc847ec678c06bf72350c9b3f231baf6d8b_prof);

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
