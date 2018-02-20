<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6d0526f767751bf2c379ac18964a3b7b3d6cfc521ff6831c25426bdb5e1750c9 extends Twig_Template
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
        $__internal_1e4fb6ea63345a07678073bb7b482314aa9bcf4b35e5450a6a3482c445105380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4fb6ea63345a07678073bb7b482314aa9bcf4b35e5450a6a3482c445105380->enter($__internal_1e4fb6ea63345a07678073bb7b482314aa9bcf4b35e5450a6a3482c445105380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_38b3d30904e7ff392b4565dfc92770c644b38c7aa7bfc05cc30c983debc3b5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b3d30904e7ff392b4565dfc92770c644b38c7aa7bfc05cc30c983debc3b5de->enter($__internal_38b3d30904e7ff392b4565dfc92770c644b38c7aa7bfc05cc30c983debc3b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4fb6ea63345a07678073bb7b482314aa9bcf4b35e5450a6a3482c445105380->leave($__internal_1e4fb6ea63345a07678073bb7b482314aa9bcf4b35e5450a6a3482c445105380_prof);

        
        $__internal_38b3d30904e7ff392b4565dfc92770c644b38c7aa7bfc05cc30c983debc3b5de->leave($__internal_38b3d30904e7ff392b4565dfc92770c644b38c7aa7bfc05cc30c983debc3b5de_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f5cd7035efdcabd7952b93b6ff5afe6b737dda55f7b9e424d2c22c0496da8ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cd7035efdcabd7952b93b6ff5afe6b737dda55f7b9e424d2c22c0496da8ccd->enter($__internal_f5cd7035efdcabd7952b93b6ff5afe6b737dda55f7b9e424d2c22c0496da8ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b460bee3cb79b60e8b511696636c488f5fc2fccb9da345146cd6d14ade43644c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b460bee3cb79b60e8b511696636c488f5fc2fccb9da345146cd6d14ade43644c->enter($__internal_b460bee3cb79b60e8b511696636c488f5fc2fccb9da345146cd6d14ade43644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b460bee3cb79b60e8b511696636c488f5fc2fccb9da345146cd6d14ade43644c->leave($__internal_b460bee3cb79b60e8b511696636c488f5fc2fccb9da345146cd6d14ade43644c_prof);

        
        $__internal_f5cd7035efdcabd7952b93b6ff5afe6b737dda55f7b9e424d2c22c0496da8ccd->leave($__internal_f5cd7035efdcabd7952b93b6ff5afe6b737dda55f7b9e424d2c22c0496da8ccd_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c75903255dcaa75603abbbc2623f300187cbd228d8e75338aab01c48536b715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c75903255dcaa75603abbbc2623f300187cbd228d8e75338aab01c48536b715->enter($__internal_8c75903255dcaa75603abbbc2623f300187cbd228d8e75338aab01c48536b715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f841bd0ecb2ed65cf19d88253259b7704040ad6f3a99c584ffcbb466ce178e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f841bd0ecb2ed65cf19d88253259b7704040ad6f3a99c584ffcbb466ce178e51->enter($__internal_f841bd0ecb2ed65cf19d88253259b7704040ad6f3a99c584ffcbb466ce178e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f841bd0ecb2ed65cf19d88253259b7704040ad6f3a99c584ffcbb466ce178e51->leave($__internal_f841bd0ecb2ed65cf19d88253259b7704040ad6f3a99c584ffcbb466ce178e51_prof);

        
        $__internal_8c75903255dcaa75603abbbc2623f300187cbd228d8e75338aab01c48536b715->leave($__internal_8c75903255dcaa75603abbbc2623f300187cbd228d8e75338aab01c48536b715_prof);

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
