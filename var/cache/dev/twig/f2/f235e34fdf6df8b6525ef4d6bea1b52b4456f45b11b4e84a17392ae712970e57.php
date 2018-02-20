<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_de285574bd980eb609e3c7ca1adc0dec4033583a738a1817316d49b465d892e5 extends Twig_Template
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
        $__internal_48cf88570b7f05833d8a4035180db14fcc962ec69f0efa93cab567c8ffe75dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cf88570b7f05833d8a4035180db14fcc962ec69f0efa93cab567c8ffe75dc5->enter($__internal_48cf88570b7f05833d8a4035180db14fcc962ec69f0efa93cab567c8ffe75dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_9902dd0a6a2eea6ee9a7bbde5f9253ceb2626bd71cafc2603bb345d687d3aa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9902dd0a6a2eea6ee9a7bbde5f9253ceb2626bd71cafc2603bb345d687d3aa1a->enter($__internal_9902dd0a6a2eea6ee9a7bbde5f9253ceb2626bd71cafc2603bb345d687d3aa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48cf88570b7f05833d8a4035180db14fcc962ec69f0efa93cab567c8ffe75dc5->leave($__internal_48cf88570b7f05833d8a4035180db14fcc962ec69f0efa93cab567c8ffe75dc5_prof);

        
        $__internal_9902dd0a6a2eea6ee9a7bbde5f9253ceb2626bd71cafc2603bb345d687d3aa1a->leave($__internal_9902dd0a6a2eea6ee9a7bbde5f9253ceb2626bd71cafc2603bb345d687d3aa1a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_378de024837002af7938a66fae945e2d10d07a702318c0b6b3e848b2085c24c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378de024837002af7938a66fae945e2d10d07a702318c0b6b3e848b2085c24c5->enter($__internal_378de024837002af7938a66fae945e2d10d07a702318c0b6b3e848b2085c24c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_89fbc9e607c1c50122ad8653031ace76c7aed67addadc5cd04531697e7a58a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fbc9e607c1c50122ad8653031ace76c7aed67addadc5cd04531697e7a58a92->enter($__internal_89fbc9e607c1c50122ad8653031ace76c7aed67addadc5cd04531697e7a58a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_89fbc9e607c1c50122ad8653031ace76c7aed67addadc5cd04531697e7a58a92->leave($__internal_89fbc9e607c1c50122ad8653031ace76c7aed67addadc5cd04531697e7a58a92_prof);

        
        $__internal_378de024837002af7938a66fae945e2d10d07a702318c0b6b3e848b2085c24c5->leave($__internal_378de024837002af7938a66fae945e2d10d07a702318c0b6b3e848b2085c24c5_prof);

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
