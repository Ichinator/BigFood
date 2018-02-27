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
        $__internal_f5fa89d9c91a3248352a50960bb88a2adf0fa737e501141d5453a063c94090fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5fa89d9c91a3248352a50960bb88a2adf0fa737e501141d5453a063c94090fb->enter($__internal_f5fa89d9c91a3248352a50960bb88a2adf0fa737e501141d5453a063c94090fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7a153139bdbb6f0ff74478e07a7da04dbc88def1b417bca8eeabd2f36c71cb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a153139bdbb6f0ff74478e07a7da04dbc88def1b417bca8eeabd2f36c71cb39->enter($__internal_7a153139bdbb6f0ff74478e07a7da04dbc88def1b417bca8eeabd2f36c71cb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5fa89d9c91a3248352a50960bb88a2adf0fa737e501141d5453a063c94090fb->leave($__internal_f5fa89d9c91a3248352a50960bb88a2adf0fa737e501141d5453a063c94090fb_prof);

        
        $__internal_7a153139bdbb6f0ff74478e07a7da04dbc88def1b417bca8eeabd2f36c71cb39->leave($__internal_7a153139bdbb6f0ff74478e07a7da04dbc88def1b417bca8eeabd2f36c71cb39_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4ee23291f2aed2a6c7e88632646309ebdd7fc148a7b729add1423ec3adb9d38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee23291f2aed2a6c7e88632646309ebdd7fc148a7b729add1423ec3adb9d38d->enter($__internal_4ee23291f2aed2a6c7e88632646309ebdd7fc148a7b729add1423ec3adb9d38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9a9e5ed3710a7e58a6199aefa2ff994fa9d76eb035bdf5be11c28becd38d0fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9e5ed3710a7e58a6199aefa2ff994fa9d76eb035bdf5be11c28becd38d0fa4->enter($__internal_9a9e5ed3710a7e58a6199aefa2ff994fa9d76eb035bdf5be11c28becd38d0fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9a9e5ed3710a7e58a6199aefa2ff994fa9d76eb035bdf5be11c28becd38d0fa4->leave($__internal_9a9e5ed3710a7e58a6199aefa2ff994fa9d76eb035bdf5be11c28becd38d0fa4_prof);

        
        $__internal_4ee23291f2aed2a6c7e88632646309ebdd7fc148a7b729add1423ec3adb9d38d->leave($__internal_4ee23291f2aed2a6c7e88632646309ebdd7fc148a7b729add1423ec3adb9d38d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33bdf3d1f19dc69c4bdb1384ab603c74acefd1658d3caa5f30dbe11be035435c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bdf3d1f19dc69c4bdb1384ab603c74acefd1658d3caa5f30dbe11be035435c->enter($__internal_33bdf3d1f19dc69c4bdb1384ab603c74acefd1658d3caa5f30dbe11be035435c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_19b5f165e33b2c6e3f330a9b74a32df37a1a7daba66d1c0727ee4472257e3878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b5f165e33b2c6e3f330a9b74a32df37a1a7daba66d1c0727ee4472257e3878->enter($__internal_19b5f165e33b2c6e3f330a9b74a32df37a1a7daba66d1c0727ee4472257e3878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_19b5f165e33b2c6e3f330a9b74a32df37a1a7daba66d1c0727ee4472257e3878->leave($__internal_19b5f165e33b2c6e3f330a9b74a32df37a1a7daba66d1c0727ee4472257e3878_prof);

        
        $__internal_33bdf3d1f19dc69c4bdb1384ab603c74acefd1658d3caa5f30dbe11be035435c->leave($__internal_33bdf3d1f19dc69c4bdb1384ab603c74acefd1658d3caa5f30dbe11be035435c_prof);

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
