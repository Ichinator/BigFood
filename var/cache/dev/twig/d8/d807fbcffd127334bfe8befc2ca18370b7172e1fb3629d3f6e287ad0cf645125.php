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
        $__internal_1506ed03e44f13baf39df54a9e5e2a9ad0fbc4e4e7a37a59c40f70c72561c5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1506ed03e44f13baf39df54a9e5e2a9ad0fbc4e4e7a37a59c40f70c72561c5dd->enter($__internal_1506ed03e44f13baf39df54a9e5e2a9ad0fbc4e4e7a37a59c40f70c72561c5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_443ac080dfac4227887fb004d0c0fff2f904bec170c7e36351499a04d0a4adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443ac080dfac4227887fb004d0c0fff2f904bec170c7e36351499a04d0a4adb5->enter($__internal_443ac080dfac4227887fb004d0c0fff2f904bec170c7e36351499a04d0a4adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1506ed03e44f13baf39df54a9e5e2a9ad0fbc4e4e7a37a59c40f70c72561c5dd->leave($__internal_1506ed03e44f13baf39df54a9e5e2a9ad0fbc4e4e7a37a59c40f70c72561c5dd_prof);

        
        $__internal_443ac080dfac4227887fb004d0c0fff2f904bec170c7e36351499a04d0a4adb5->leave($__internal_443ac080dfac4227887fb004d0c0fff2f904bec170c7e36351499a04d0a4adb5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_844eea212260b44e5bea54dd09c14ac3a823a6bfda7ab6788743dc55491d43c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844eea212260b44e5bea54dd09c14ac3a823a6bfda7ab6788743dc55491d43c8->enter($__internal_844eea212260b44e5bea54dd09c14ac3a823a6bfda7ab6788743dc55491d43c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_32b11a1a4bd9688df189c57a027dd6cb858cebd25eb6c027c85da1195597a1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b11a1a4bd9688df189c57a027dd6cb858cebd25eb6c027c85da1195597a1eb->enter($__internal_32b11a1a4bd9688df189c57a027dd6cb858cebd25eb6c027c85da1195597a1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_32b11a1a4bd9688df189c57a027dd6cb858cebd25eb6c027c85da1195597a1eb->leave($__internal_32b11a1a4bd9688df189c57a027dd6cb858cebd25eb6c027c85da1195597a1eb_prof);

        
        $__internal_844eea212260b44e5bea54dd09c14ac3a823a6bfda7ab6788743dc55491d43c8->leave($__internal_844eea212260b44e5bea54dd09c14ac3a823a6bfda7ab6788743dc55491d43c8_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b87a97cd744174bd2bf688d480b8ffe490a865eaa70ca5468fb41ed4e2c50ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87a97cd744174bd2bf688d480b8ffe490a865eaa70ca5468fb41ed4e2c50ce5->enter($__internal_b87a97cd744174bd2bf688d480b8ffe490a865eaa70ca5468fb41ed4e2c50ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45699414d414197fb0adc14330ec39e98d0c344c29028b6f90a40f0b8c40d2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45699414d414197fb0adc14330ec39e98d0c344c29028b6f90a40f0b8c40d2b3->enter($__internal_45699414d414197fb0adc14330ec39e98d0c344c29028b6f90a40f0b8c40d2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_45699414d414197fb0adc14330ec39e98d0c344c29028b6f90a40f0b8c40d2b3->leave($__internal_45699414d414197fb0adc14330ec39e98d0c344c29028b6f90a40f0b8c40d2b3_prof);

        
        $__internal_b87a97cd744174bd2bf688d480b8ffe490a865eaa70ca5468fb41ed4e2c50ce5->leave($__internal_b87a97cd744174bd2bf688d480b8ffe490a865eaa70ca5468fb41ed4e2c50ce5_prof);

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
