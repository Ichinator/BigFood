<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_49f1dc2d5a7b6d4126fc52a7e2cd1e002f0d45161eb2aa6d5a491f7da22f1a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ff332cab0f9be672f9e7298dd2bed98f0eea8e3eb22ae10ee36fa592def5c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff332cab0f9be672f9e7298dd2bed98f0eea8e3eb22ae10ee36fa592def5c38->enter($__internal_2ff332cab0f9be672f9e7298dd2bed98f0eea8e3eb22ae10ee36fa592def5c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_dec8274c4fea6d5829c6c0a65c3cc0dd4f31f38039058b878f0885f772cebf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec8274c4fea6d5829c6c0a65c3cc0dd4f31f38039058b878f0885f772cebf5d->enter($__internal_dec8274c4fea6d5829c6c0a65c3cc0dd4f31f38039058b878f0885f772cebf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff332cab0f9be672f9e7298dd2bed98f0eea8e3eb22ae10ee36fa592def5c38->leave($__internal_2ff332cab0f9be672f9e7298dd2bed98f0eea8e3eb22ae10ee36fa592def5c38_prof);

        
        $__internal_dec8274c4fea6d5829c6c0a65c3cc0dd4f31f38039058b878f0885f772cebf5d->leave($__internal_dec8274c4fea6d5829c6c0a65c3cc0dd4f31f38039058b878f0885f772cebf5d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a3d5233ec6788de77157062d02c0673f7f9e7c1746469d1a10767d08765cb181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d5233ec6788de77157062d02c0673f7f9e7c1746469d1a10767d08765cb181->enter($__internal_a3d5233ec6788de77157062d02c0673f7f9e7c1746469d1a10767d08765cb181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_50058e5bde1c2183d8c0f1b8b200929e2923593bc9c1a2dd684e1bb116b1059a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50058e5bde1c2183d8c0f1b8b200929e2923593bc9c1a2dd684e1bb116b1059a->enter($__internal_50058e5bde1c2183d8c0f1b8b200929e2923593bc9c1a2dd684e1bb116b1059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_50058e5bde1c2183d8c0f1b8b200929e2923593bc9c1a2dd684e1bb116b1059a->leave($__internal_50058e5bde1c2183d8c0f1b8b200929e2923593bc9c1a2dd684e1bb116b1059a_prof);

        
        $__internal_a3d5233ec6788de77157062d02c0673f7f9e7c1746469d1a10767d08765cb181->leave($__internal_a3d5233ec6788de77157062d02c0673f7f9e7c1746469d1a10767d08765cb181_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab3e707e6d011fe8dad21109fdad8c26fc6929c322540086d3c8719b178c2622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3e707e6d011fe8dad21109fdad8c26fc6929c322540086d3c8719b178c2622->enter($__internal_ab3e707e6d011fe8dad21109fdad8c26fc6929c322540086d3c8719b178c2622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4dcf5bab78fa9bb104e60d85922fda2aa39536beb58654f22de98b50f559403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4dcf5bab78fa9bb104e60d85922fda2aa39536beb58654f22de98b50f559403->enter($__internal_b4dcf5bab78fa9bb104e60d85922fda2aa39536beb58654f22de98b50f559403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b4dcf5bab78fa9bb104e60d85922fda2aa39536beb58654f22de98b50f559403->leave($__internal_b4dcf5bab78fa9bb104e60d85922fda2aa39536beb58654f22de98b50f559403_prof);

        
        $__internal_ab3e707e6d011fe8dad21109fdad8c26fc6929c322540086d3c8719b178c2622->leave($__internal_ab3e707e6d011fe8dad21109fdad8c26fc6929c322540086d3c8719b178c2622_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
