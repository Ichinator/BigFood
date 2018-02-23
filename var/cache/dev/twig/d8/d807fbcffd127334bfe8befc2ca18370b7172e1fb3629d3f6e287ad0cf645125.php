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
        $__internal_f01806cb15220ac3ddb4a8b4b4d4ac7041a2d71b4771a88225f7c348cac4e61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01806cb15220ac3ddb4a8b4b4d4ac7041a2d71b4771a88225f7c348cac4e61a->enter($__internal_f01806cb15220ac3ddb4a8b4b4d4ac7041a2d71b4771a88225f7c348cac4e61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_168b6ee6798d1e036d43242d1cfc8029d64a57c5296fb27a40d2e90dc49dff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168b6ee6798d1e036d43242d1cfc8029d64a57c5296fb27a40d2e90dc49dff8f->enter($__internal_168b6ee6798d1e036d43242d1cfc8029d64a57c5296fb27a40d2e90dc49dff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f01806cb15220ac3ddb4a8b4b4d4ac7041a2d71b4771a88225f7c348cac4e61a->leave($__internal_f01806cb15220ac3ddb4a8b4b4d4ac7041a2d71b4771a88225f7c348cac4e61a_prof);

        
        $__internal_168b6ee6798d1e036d43242d1cfc8029d64a57c5296fb27a40d2e90dc49dff8f->leave($__internal_168b6ee6798d1e036d43242d1cfc8029d64a57c5296fb27a40d2e90dc49dff8f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f09453ee7f970a71c95f00ace8e118d1d98f8a2c752516200985fd3e3a3f4898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09453ee7f970a71c95f00ace8e118d1d98f8a2c752516200985fd3e3a3f4898->enter($__internal_f09453ee7f970a71c95f00ace8e118d1d98f8a2c752516200985fd3e3a3f4898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8cb8ff78eded56b7808d435f098416d8d9a68ef6d38d9c4a47b3b6046d85b0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb8ff78eded56b7808d435f098416d8d9a68ef6d38d9c4a47b3b6046d85b0a2->enter($__internal_8cb8ff78eded56b7808d435f098416d8d9a68ef6d38d9c4a47b3b6046d85b0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8cb8ff78eded56b7808d435f098416d8d9a68ef6d38d9c4a47b3b6046d85b0a2->leave($__internal_8cb8ff78eded56b7808d435f098416d8d9a68ef6d38d9c4a47b3b6046d85b0a2_prof);

        
        $__internal_f09453ee7f970a71c95f00ace8e118d1d98f8a2c752516200985fd3e3a3f4898->leave($__internal_f09453ee7f970a71c95f00ace8e118d1d98f8a2c752516200985fd3e3a3f4898_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc88a53fe27537b044fbfc7b0c58f5864cae445f404cb26db0eedfe4bc1032b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc88a53fe27537b044fbfc7b0c58f5864cae445f404cb26db0eedfe4bc1032b4->enter($__internal_fc88a53fe27537b044fbfc7b0c58f5864cae445f404cb26db0eedfe4bc1032b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ee890c63d3bce6700c24a9e6e6fe361bf77ee0715773f3ed3c2d6ac1d073c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee890c63d3bce6700c24a9e6e6fe361bf77ee0715773f3ed3c2d6ac1d073c98->enter($__internal_1ee890c63d3bce6700c24a9e6e6fe361bf77ee0715773f3ed3c2d6ac1d073c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1ee890c63d3bce6700c24a9e6e6fe361bf77ee0715773f3ed3c2d6ac1d073c98->leave($__internal_1ee890c63d3bce6700c24a9e6e6fe361bf77ee0715773f3ed3c2d6ac1d073c98_prof);

        
        $__internal_fc88a53fe27537b044fbfc7b0c58f5864cae445f404cb26db0eedfe4bc1032b4->leave($__internal_fc88a53fe27537b044fbfc7b0c58f5864cae445f404cb26db0eedfe4bc1032b4_prof);

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
