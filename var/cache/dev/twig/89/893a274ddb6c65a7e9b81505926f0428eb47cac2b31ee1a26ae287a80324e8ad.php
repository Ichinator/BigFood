<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5015aa9d1e54f40b6f0446e962a657a5ff2a74e13843a349eb7a9670f5e18b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1da22f5d15ce764a344f79ea64c54247ba67641f0a9b287e9e940eea58715004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da22f5d15ce764a344f79ea64c54247ba67641f0a9b287e9e940eea58715004->enter($__internal_1da22f5d15ce764a344f79ea64c54247ba67641f0a9b287e9e940eea58715004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_075042329d43c6557f751fe1748ca0f5dbd35c0482061ea39d603b6973c08888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075042329d43c6557f751fe1748ca0f5dbd35c0482061ea39d603b6973c08888->enter($__internal_075042329d43c6557f751fe1748ca0f5dbd35c0482061ea39d603b6973c08888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1da22f5d15ce764a344f79ea64c54247ba67641f0a9b287e9e940eea58715004->leave($__internal_1da22f5d15ce764a344f79ea64c54247ba67641f0a9b287e9e940eea58715004_prof);

        
        $__internal_075042329d43c6557f751fe1748ca0f5dbd35c0482061ea39d603b6973c08888->leave($__internal_075042329d43c6557f751fe1748ca0f5dbd35c0482061ea39d603b6973c08888_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e6cb2c7ab305f9f3203f992e29801cc94ba64c5327c295437a3ee5c595cbc99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6cb2c7ab305f9f3203f992e29801cc94ba64c5327c295437a3ee5c595cbc99->enter($__internal_3e6cb2c7ab305f9f3203f992e29801cc94ba64c5327c295437a3ee5c595cbc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f23fde60f57554d6d79f972335037449c202461f0850fc73b047687a8846bafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23fde60f57554d6d79f972335037449c202461f0850fc73b047687a8846bafb->enter($__internal_f23fde60f57554d6d79f972335037449c202461f0850fc73b047687a8846bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f23fde60f57554d6d79f972335037449c202461f0850fc73b047687a8846bafb->leave($__internal_f23fde60f57554d6d79f972335037449c202461f0850fc73b047687a8846bafb_prof);

        
        $__internal_3e6cb2c7ab305f9f3203f992e29801cc94ba64c5327c295437a3ee5c595cbc99->leave($__internal_3e6cb2c7ab305f9f3203f992e29801cc94ba64c5327c295437a3ee5c595cbc99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ee84433597d7c752c9c7b1d55ef328b576e8fe11ff6098f9f89934c5ff9041f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee84433597d7c752c9c7b1d55ef328b576e8fe11ff6098f9f89934c5ff9041f->enter($__internal_7ee84433597d7c752c9c7b1d55ef328b576e8fe11ff6098f9f89934c5ff9041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c70a0d373044a59ebe17cd24ed4ddb4ff40a23f6392905a3f74cd0e92111f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c70a0d373044a59ebe17cd24ed4ddb4ff40a23f6392905a3f74cd0e92111f38->enter($__internal_8c70a0d373044a59ebe17cd24ed4ddb4ff40a23f6392905a3f74cd0e92111f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8c70a0d373044a59ebe17cd24ed4ddb4ff40a23f6392905a3f74cd0e92111f38->leave($__internal_8c70a0d373044a59ebe17cd24ed4ddb4ff40a23f6392905a3f74cd0e92111f38_prof);

        
        $__internal_7ee84433597d7c752c9c7b1d55ef328b576e8fe11ff6098f9f89934c5ff9041f->leave($__internal_7ee84433597d7c752c9c7b1d55ef328b576e8fe11ff6098f9f89934c5ff9041f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
