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
        $__internal_41b19ffa070aaf9871014a9b36965cee9d987043e2887b48c63b30a803dc7618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b19ffa070aaf9871014a9b36965cee9d987043e2887b48c63b30a803dc7618->enter($__internal_41b19ffa070aaf9871014a9b36965cee9d987043e2887b48c63b30a803dc7618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b40482c41791aed4b4419148b67d025f2bfe085fabbcabd85171259355caac0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40482c41791aed4b4419148b67d025f2bfe085fabbcabd85171259355caac0b->enter($__internal_b40482c41791aed4b4419148b67d025f2bfe085fabbcabd85171259355caac0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41b19ffa070aaf9871014a9b36965cee9d987043e2887b48c63b30a803dc7618->leave($__internal_41b19ffa070aaf9871014a9b36965cee9d987043e2887b48c63b30a803dc7618_prof);

        
        $__internal_b40482c41791aed4b4419148b67d025f2bfe085fabbcabd85171259355caac0b->leave($__internal_b40482c41791aed4b4419148b67d025f2bfe085fabbcabd85171259355caac0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_459ca9def8c662d3cdd84d62d4d14d713caa452957c4bb19930e693f3752fc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459ca9def8c662d3cdd84d62d4d14d713caa452957c4bb19930e693f3752fc45->enter($__internal_459ca9def8c662d3cdd84d62d4d14d713caa452957c4bb19930e693f3752fc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df8b6b191b926c852cc237d4a3f205ebace159954d4137752b07ee57d3b81681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8b6b191b926c852cc237d4a3f205ebace159954d4137752b07ee57d3b81681->enter($__internal_df8b6b191b926c852cc237d4a3f205ebace159954d4137752b07ee57d3b81681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_df8b6b191b926c852cc237d4a3f205ebace159954d4137752b07ee57d3b81681->leave($__internal_df8b6b191b926c852cc237d4a3f205ebace159954d4137752b07ee57d3b81681_prof);

        
        $__internal_459ca9def8c662d3cdd84d62d4d14d713caa452957c4bb19930e693f3752fc45->leave($__internal_459ca9def8c662d3cdd84d62d4d14d713caa452957c4bb19930e693f3752fc45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dfeb9e858064203ccd257e4eeb6ccb36e5f43f4917a82aae98a2da31194d625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dfeb9e858064203ccd257e4eeb6ccb36e5f43f4917a82aae98a2da31194d625->enter($__internal_1dfeb9e858064203ccd257e4eeb6ccb36e5f43f4917a82aae98a2da31194d625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f7a455aeef57819bea1b2e6878d6b00438bf62cea3df72380594bfb248648f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7a455aeef57819bea1b2e6878d6b00438bf62cea3df72380594bfb248648f9->enter($__internal_8f7a455aeef57819bea1b2e6878d6b00438bf62cea3df72380594bfb248648f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8f7a455aeef57819bea1b2e6878d6b00438bf62cea3df72380594bfb248648f9->leave($__internal_8f7a455aeef57819bea1b2e6878d6b00438bf62cea3df72380594bfb248648f9_prof);

        
        $__internal_1dfeb9e858064203ccd257e4eeb6ccb36e5f43f4917a82aae98a2da31194d625->leave($__internal_1dfeb9e858064203ccd257e4eeb6ccb36e5f43f4917a82aae98a2da31194d625_prof);

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
