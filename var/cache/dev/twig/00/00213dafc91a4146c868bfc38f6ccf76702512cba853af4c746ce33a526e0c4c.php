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
        $__internal_2c2a20053e8d648e69f76b14ae7e04327125125967ddb326770b8510b6ed51f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2a20053e8d648e69f76b14ae7e04327125125967ddb326770b8510b6ed51f5->enter($__internal_2c2a20053e8d648e69f76b14ae7e04327125125967ddb326770b8510b6ed51f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_402ba21480bc568cc5fe0cbffc469bde5b0925dc618a28028998f55a6c68d7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402ba21480bc568cc5fe0cbffc469bde5b0925dc618a28028998f55a6c68d7cb->enter($__internal_402ba21480bc568cc5fe0cbffc469bde5b0925dc618a28028998f55a6c68d7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c2a20053e8d648e69f76b14ae7e04327125125967ddb326770b8510b6ed51f5->leave($__internal_2c2a20053e8d648e69f76b14ae7e04327125125967ddb326770b8510b6ed51f5_prof);

        
        $__internal_402ba21480bc568cc5fe0cbffc469bde5b0925dc618a28028998f55a6c68d7cb->leave($__internal_402ba21480bc568cc5fe0cbffc469bde5b0925dc618a28028998f55a6c68d7cb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0567bdc731dc4520208caaa1524d1e176f81dc8a8817c1143fb2b25a0c125ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0567bdc731dc4520208caaa1524d1e176f81dc8a8817c1143fb2b25a0c125ae->enter($__internal_a0567bdc731dc4520208caaa1524d1e176f81dc8a8817c1143fb2b25a0c125ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb6e099376f31adb2f759dabac457d3b4d20caadf584d4bb0c683f529099f7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6e099376f31adb2f759dabac457d3b4d20caadf584d4bb0c683f529099f7c1->enter($__internal_cb6e099376f31adb2f759dabac457d3b4d20caadf584d4bb0c683f529099f7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cb6e099376f31adb2f759dabac457d3b4d20caadf584d4bb0c683f529099f7c1->leave($__internal_cb6e099376f31adb2f759dabac457d3b4d20caadf584d4bb0c683f529099f7c1_prof);

        
        $__internal_a0567bdc731dc4520208caaa1524d1e176f81dc8a8817c1143fb2b25a0c125ae->leave($__internal_a0567bdc731dc4520208caaa1524d1e176f81dc8a8817c1143fb2b25a0c125ae_prof);

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
