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
        $__internal_793b2d1ec832dbae12d37f2828115065f2beecdd42d74a1833ac106b78d21021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793b2d1ec832dbae12d37f2828115065f2beecdd42d74a1833ac106b78d21021->enter($__internal_793b2d1ec832dbae12d37f2828115065f2beecdd42d74a1833ac106b78d21021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3994fe33165d40bc612e6ef1605824b99c03e0d75cfb1aa2f63ef4481e91717d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3994fe33165d40bc612e6ef1605824b99c03e0d75cfb1aa2f63ef4481e91717d->enter($__internal_3994fe33165d40bc612e6ef1605824b99c03e0d75cfb1aa2f63ef4481e91717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_793b2d1ec832dbae12d37f2828115065f2beecdd42d74a1833ac106b78d21021->leave($__internal_793b2d1ec832dbae12d37f2828115065f2beecdd42d74a1833ac106b78d21021_prof);

        
        $__internal_3994fe33165d40bc612e6ef1605824b99c03e0d75cfb1aa2f63ef4481e91717d->leave($__internal_3994fe33165d40bc612e6ef1605824b99c03e0d75cfb1aa2f63ef4481e91717d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccaa9524e6a8fe25533d52b84f825e85c0f82fd05def0c3823d56a7113995c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccaa9524e6a8fe25533d52b84f825e85c0f82fd05def0c3823d56a7113995c1d->enter($__internal_ccaa9524e6a8fe25533d52b84f825e85c0f82fd05def0c3823d56a7113995c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4f21f6bc05e3f6adf21a060e44920b9c4d8a927f3714d2d40dfbb4a651f9f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f21f6bc05e3f6adf21a060e44920b9c4d8a927f3714d2d40dfbb4a651f9f16->enter($__internal_c4f21f6bc05e3f6adf21a060e44920b9c4d8a927f3714d2d40dfbb4a651f9f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c4f21f6bc05e3f6adf21a060e44920b9c4d8a927f3714d2d40dfbb4a651f9f16->leave($__internal_c4f21f6bc05e3f6adf21a060e44920b9c4d8a927f3714d2d40dfbb4a651f9f16_prof);

        
        $__internal_ccaa9524e6a8fe25533d52b84f825e85c0f82fd05def0c3823d56a7113995c1d->leave($__internal_ccaa9524e6a8fe25533d52b84f825e85c0f82fd05def0c3823d56a7113995c1d_prof);

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
