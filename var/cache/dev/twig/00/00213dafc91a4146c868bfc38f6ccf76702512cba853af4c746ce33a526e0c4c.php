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
        $__internal_44958f2f2a668de6cfd2397b3d660585ce09d3cef8b1123b6911c9699bd04b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44958f2f2a668de6cfd2397b3d660585ce09d3cef8b1123b6911c9699bd04b07->enter($__internal_44958f2f2a668de6cfd2397b3d660585ce09d3cef8b1123b6911c9699bd04b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_8add2eeba9ecc8e26498c77d7772d6dd7988c466bd676dd5dc4d2f08cc9ff323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8add2eeba9ecc8e26498c77d7772d6dd7988c466bd676dd5dc4d2f08cc9ff323->enter($__internal_8add2eeba9ecc8e26498c77d7772d6dd7988c466bd676dd5dc4d2f08cc9ff323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44958f2f2a668de6cfd2397b3d660585ce09d3cef8b1123b6911c9699bd04b07->leave($__internal_44958f2f2a668de6cfd2397b3d660585ce09d3cef8b1123b6911c9699bd04b07_prof);

        
        $__internal_8add2eeba9ecc8e26498c77d7772d6dd7988c466bd676dd5dc4d2f08cc9ff323->leave($__internal_8add2eeba9ecc8e26498c77d7772d6dd7988c466bd676dd5dc4d2f08cc9ff323_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80a0efb942ff1e72901835b1695d1d24e397f0a227a8a595220dbb957c56d144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a0efb942ff1e72901835b1695d1d24e397f0a227a8a595220dbb957c56d144->enter($__internal_80a0efb942ff1e72901835b1695d1d24e397f0a227a8a595220dbb957c56d144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d8c8404701db134fdc78b92cbdababc77b9c497679175a1e6bc93a4f490f5845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c8404701db134fdc78b92cbdababc77b9c497679175a1e6bc93a4f490f5845->enter($__internal_d8c8404701db134fdc78b92cbdababc77b9c497679175a1e6bc93a4f490f5845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d8c8404701db134fdc78b92cbdababc77b9c497679175a1e6bc93a4f490f5845->leave($__internal_d8c8404701db134fdc78b92cbdababc77b9c497679175a1e6bc93a4f490f5845_prof);

        
        $__internal_80a0efb942ff1e72901835b1695d1d24e397f0a227a8a595220dbb957c56d144->leave($__internal_80a0efb942ff1e72901835b1695d1d24e397f0a227a8a595220dbb957c56d144_prof);

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
