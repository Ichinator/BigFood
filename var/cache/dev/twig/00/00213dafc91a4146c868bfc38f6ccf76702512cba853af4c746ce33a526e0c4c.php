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
        $__internal_3eb62ef159e9dbb19cf095a72b6c0ac8737de0041eff126161cd3012315e348c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb62ef159e9dbb19cf095a72b6c0ac8737de0041eff126161cd3012315e348c->enter($__internal_3eb62ef159e9dbb19cf095a72b6c0ac8737de0041eff126161cd3012315e348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f1f55f6b8cf82dd3692cae9580c9173027b73deed803f8170a3e66c3f2dd1df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f55f6b8cf82dd3692cae9580c9173027b73deed803f8170a3e66c3f2dd1df3->enter($__internal_f1f55f6b8cf82dd3692cae9580c9173027b73deed803f8170a3e66c3f2dd1df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb62ef159e9dbb19cf095a72b6c0ac8737de0041eff126161cd3012315e348c->leave($__internal_3eb62ef159e9dbb19cf095a72b6c0ac8737de0041eff126161cd3012315e348c_prof);

        
        $__internal_f1f55f6b8cf82dd3692cae9580c9173027b73deed803f8170a3e66c3f2dd1df3->leave($__internal_f1f55f6b8cf82dd3692cae9580c9173027b73deed803f8170a3e66c3f2dd1df3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43df63f0e47d6e19626a1db7754efe99d5bc7b8abe4388edcb7357e795a31611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43df63f0e47d6e19626a1db7754efe99d5bc7b8abe4388edcb7357e795a31611->enter($__internal_43df63f0e47d6e19626a1db7754efe99d5bc7b8abe4388edcb7357e795a31611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5c203664ca433dcb2cc3a49a44b4d2a82ec7d4ccce8b87f1d24726413084b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c203664ca433dcb2cc3a49a44b4d2a82ec7d4ccce8b87f1d24726413084b1c->enter($__internal_f5c203664ca433dcb2cc3a49a44b4d2a82ec7d4ccce8b87f1d24726413084b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f5c203664ca433dcb2cc3a49a44b4d2a82ec7d4ccce8b87f1d24726413084b1c->leave($__internal_f5c203664ca433dcb2cc3a49a44b4d2a82ec7d4ccce8b87f1d24726413084b1c_prof);

        
        $__internal_43df63f0e47d6e19626a1db7754efe99d5bc7b8abe4388edcb7357e795a31611->leave($__internal_43df63f0e47d6e19626a1db7754efe99d5bc7b8abe4388edcb7357e795a31611_prof);

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
