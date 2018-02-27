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
        $__internal_b2bde854dcabe8a33a62b463d76f269ce75574a34d3254474af0e30e69b0eb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bde854dcabe8a33a62b463d76f269ce75574a34d3254474af0e30e69b0eb16->enter($__internal_b2bde854dcabe8a33a62b463d76f269ce75574a34d3254474af0e30e69b0eb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4c7b149c6b6ca633f92c8f5090c640180c169cd86f59a7d7f99819c48341c1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7b149c6b6ca633f92c8f5090c640180c169cd86f59a7d7f99819c48341c1ee->enter($__internal_4c7b149c6b6ca633f92c8f5090c640180c169cd86f59a7d7f99819c48341c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2bde854dcabe8a33a62b463d76f269ce75574a34d3254474af0e30e69b0eb16->leave($__internal_b2bde854dcabe8a33a62b463d76f269ce75574a34d3254474af0e30e69b0eb16_prof);

        
        $__internal_4c7b149c6b6ca633f92c8f5090c640180c169cd86f59a7d7f99819c48341c1ee->leave($__internal_4c7b149c6b6ca633f92c8f5090c640180c169cd86f59a7d7f99819c48341c1ee_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_533d5efeec683044e04735dbc2ef1a63b73d2fe995074ad3be0fe21c6758ff15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533d5efeec683044e04735dbc2ef1a63b73d2fe995074ad3be0fe21c6758ff15->enter($__internal_533d5efeec683044e04735dbc2ef1a63b73d2fe995074ad3be0fe21c6758ff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2c8721a07bc739fcfbc3c9ce4347fdfc90e0e96c8254f869895c3b3314deea33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8721a07bc739fcfbc3c9ce4347fdfc90e0e96c8254f869895c3b3314deea33->enter($__internal_2c8721a07bc739fcfbc3c9ce4347fdfc90e0e96c8254f869895c3b3314deea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2c8721a07bc739fcfbc3c9ce4347fdfc90e0e96c8254f869895c3b3314deea33->leave($__internal_2c8721a07bc739fcfbc3c9ce4347fdfc90e0e96c8254f869895c3b3314deea33_prof);

        
        $__internal_533d5efeec683044e04735dbc2ef1a63b73d2fe995074ad3be0fe21c6758ff15->leave($__internal_533d5efeec683044e04735dbc2ef1a63b73d2fe995074ad3be0fe21c6758ff15_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1582e7fa82846f5950b257bdc33bb947a26a91ce2e114e2d2a2f5ff218235d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1582e7fa82846f5950b257bdc33bb947a26a91ce2e114e2d2a2f5ff218235d3f->enter($__internal_1582e7fa82846f5950b257bdc33bb947a26a91ce2e114e2d2a2f5ff218235d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e751c1657d772d2a78423aa6d5d2f9286caca8a70e00b1e648a57d00ac54c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e751c1657d772d2a78423aa6d5d2f9286caca8a70e00b1e648a57d00ac54c5f->enter($__internal_1e751c1657d772d2a78423aa6d5d2f9286caca8a70e00b1e648a57d00ac54c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1e751c1657d772d2a78423aa6d5d2f9286caca8a70e00b1e648a57d00ac54c5f->leave($__internal_1e751c1657d772d2a78423aa6d5d2f9286caca8a70e00b1e648a57d00ac54c5f_prof);

        
        $__internal_1582e7fa82846f5950b257bdc33bb947a26a91ce2e114e2d2a2f5ff218235d3f->leave($__internal_1582e7fa82846f5950b257bdc33bb947a26a91ce2e114e2d2a2f5ff218235d3f_prof);

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
