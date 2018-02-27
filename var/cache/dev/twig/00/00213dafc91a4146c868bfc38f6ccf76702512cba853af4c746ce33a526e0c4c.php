<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_c8d9d6ed2133660c974d47debbd0a01ea65dcac6677fe055d4a4499bddd16bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6eb41350f97875c58ec70c9bfc35e3ba179b8886be141e5f9dbb198afc8e6569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb41350f97875c58ec70c9bfc35e3ba179b8886be141e5f9dbb198afc8e6569->enter($__internal_6eb41350f97875c58ec70c9bfc35e3ba179b8886be141e5f9dbb198afc8e6569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_9d5f75ba57f418e1a11da79e477a71e74c890830d4392dcdb3f7fd2652608f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5f75ba57f418e1a11da79e477a71e74c890830d4392dcdb3f7fd2652608f64->enter($__internal_9d5f75ba57f418e1a11da79e477a71e74c890830d4392dcdb3f7fd2652608f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb41350f97875c58ec70c9bfc35e3ba179b8886be141e5f9dbb198afc8e6569->leave($__internal_6eb41350f97875c58ec70c9bfc35e3ba179b8886be141e5f9dbb198afc8e6569_prof);

        
        $__internal_9d5f75ba57f418e1a11da79e477a71e74c890830d4392dcdb3f7fd2652608f64->leave($__internal_9d5f75ba57f418e1a11da79e477a71e74c890830d4392dcdb3f7fd2652608f64_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e8d659f636ccceb12d02aff3366493335d104cfc04612ef180ace9634cdd652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8d659f636ccceb12d02aff3366493335d104cfc04612ef180ace9634cdd652->enter($__internal_8e8d659f636ccceb12d02aff3366493335d104cfc04612ef180ace9634cdd652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1fe9432febae46b5801bf7727e3a3c592bce9d43537b0575af814ed6fd632e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe9432febae46b5801bf7727e3a3c592bce9d43537b0575af814ed6fd632e5c->enter($__internal_1fe9432febae46b5801bf7727e3a3c592bce9d43537b0575af814ed6fd632e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1fe9432febae46b5801bf7727e3a3c592bce9d43537b0575af814ed6fd632e5c->leave($__internal_1fe9432febae46b5801bf7727e3a3c592bce9d43537b0575af814ed6fd632e5c_prof);

        
        $__internal_8e8d659f636ccceb12d02aff3366493335d104cfc04612ef180ace9634cdd652->leave($__internal_8e8d659f636ccceb12d02aff3366493335d104cfc04612ef180ace9634cdd652_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
