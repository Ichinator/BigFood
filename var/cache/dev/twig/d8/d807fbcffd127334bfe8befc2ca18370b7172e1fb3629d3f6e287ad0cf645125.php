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
        $__internal_f2c884b69ef7693589d2a049cebebe48390f123a07a3af60883274a93f12f63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c884b69ef7693589d2a049cebebe48390f123a07a3af60883274a93f12f63b->enter($__internal_f2c884b69ef7693589d2a049cebebe48390f123a07a3af60883274a93f12f63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3e6036d69e38dd0e978b69281423f3e7749fd66108f2d5dac292086b173b7948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6036d69e38dd0e978b69281423f3e7749fd66108f2d5dac292086b173b7948->enter($__internal_3e6036d69e38dd0e978b69281423f3e7749fd66108f2d5dac292086b173b7948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c884b69ef7693589d2a049cebebe48390f123a07a3af60883274a93f12f63b->leave($__internal_f2c884b69ef7693589d2a049cebebe48390f123a07a3af60883274a93f12f63b_prof);

        
        $__internal_3e6036d69e38dd0e978b69281423f3e7749fd66108f2d5dac292086b173b7948->leave($__internal_3e6036d69e38dd0e978b69281423f3e7749fd66108f2d5dac292086b173b7948_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1dbbdee0fa0bde848479a9425e9b7fd22fc4b643c33123bb351c88354f5acf56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbbdee0fa0bde848479a9425e9b7fd22fc4b643c33123bb351c88354f5acf56->enter($__internal_1dbbdee0fa0bde848479a9425e9b7fd22fc4b643c33123bb351c88354f5acf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e51bb186b81a4589ff24e3e9ae591b9107e633a33ee4a7a05706574e6af0d492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51bb186b81a4589ff24e3e9ae591b9107e633a33ee4a7a05706574e6af0d492->enter($__internal_e51bb186b81a4589ff24e3e9ae591b9107e633a33ee4a7a05706574e6af0d492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e51bb186b81a4589ff24e3e9ae591b9107e633a33ee4a7a05706574e6af0d492->leave($__internal_e51bb186b81a4589ff24e3e9ae591b9107e633a33ee4a7a05706574e6af0d492_prof);

        
        $__internal_1dbbdee0fa0bde848479a9425e9b7fd22fc4b643c33123bb351c88354f5acf56->leave($__internal_1dbbdee0fa0bde848479a9425e9b7fd22fc4b643c33123bb351c88354f5acf56_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb4044126b5ff368c9144a58d3679404fdb9f424c574c075cc80e8e5a9580314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4044126b5ff368c9144a58d3679404fdb9f424c574c075cc80e8e5a9580314->enter($__internal_eb4044126b5ff368c9144a58d3679404fdb9f424c574c075cc80e8e5a9580314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77c13d10c9c4fee3040d121027c2e0c74998e63b179e49eda100b15da60fd988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c13d10c9c4fee3040d121027c2e0c74998e63b179e49eda100b15da60fd988->enter($__internal_77c13d10c9c4fee3040d121027c2e0c74998e63b179e49eda100b15da60fd988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_77c13d10c9c4fee3040d121027c2e0c74998e63b179e49eda100b15da60fd988->leave($__internal_77c13d10c9c4fee3040d121027c2e0c74998e63b179e49eda100b15da60fd988_prof);

        
        $__internal_eb4044126b5ff368c9144a58d3679404fdb9f424c574c075cc80e8e5a9580314->leave($__internal_eb4044126b5ff368c9144a58d3679404fdb9f424c574c075cc80e8e5a9580314_prof);

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
