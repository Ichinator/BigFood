<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e1e7e88b34659ddb6e43951c652bdfd98e84c777b06d2c04c1948548c9d88c9a extends Twig_Template
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
        $__internal_d5888c81c4ca1d18383e35d3568ee90fe0d9d067d4bdc161ee926507f3069eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5888c81c4ca1d18383e35d3568ee90fe0d9d067d4bdc161ee926507f3069eb0->enter($__internal_d5888c81c4ca1d18383e35d3568ee90fe0d9d067d4bdc161ee926507f3069eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b546b54f2eae36c3c3e3731f980d6d2c7190743ff0f90f72a80e1997822f6306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b546b54f2eae36c3c3e3731f980d6d2c7190743ff0f90f72a80e1997822f6306->enter($__internal_b546b54f2eae36c3c3e3731f980d6d2c7190743ff0f90f72a80e1997822f6306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5888c81c4ca1d18383e35d3568ee90fe0d9d067d4bdc161ee926507f3069eb0->leave($__internal_d5888c81c4ca1d18383e35d3568ee90fe0d9d067d4bdc161ee926507f3069eb0_prof);

        
        $__internal_b546b54f2eae36c3c3e3731f980d6d2c7190743ff0f90f72a80e1997822f6306->leave($__internal_b546b54f2eae36c3c3e3731f980d6d2c7190743ff0f90f72a80e1997822f6306_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f913377097b24d016ad93fc4cdcd7b575b5370b204d8da23f7856c9beeb76a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f913377097b24d016ad93fc4cdcd7b575b5370b204d8da23f7856c9beeb76a2->enter($__internal_1f913377097b24d016ad93fc4cdcd7b575b5370b204d8da23f7856c9beeb76a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d43726e1cad8d72281ad23df021433b38273bb7a1b4ceadad85686476945563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d43726e1cad8d72281ad23df021433b38273bb7a1b4ceadad85686476945563->enter($__internal_9d43726e1cad8d72281ad23df021433b38273bb7a1b4ceadad85686476945563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d43726e1cad8d72281ad23df021433b38273bb7a1b4ceadad85686476945563->leave($__internal_9d43726e1cad8d72281ad23df021433b38273bb7a1b4ceadad85686476945563_prof);

        
        $__internal_1f913377097b24d016ad93fc4cdcd7b575b5370b204d8da23f7856c9beeb76a2->leave($__internal_1f913377097b24d016ad93fc4cdcd7b575b5370b204d8da23f7856c9beeb76a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6d103a6fbbb8c90c1bf8a364a79b6d3b8e8b895f325a72b057a36b758ddaeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d103a6fbbb8c90c1bf8a364a79b6d3b8e8b895f325a72b057a36b758ddaeb7->enter($__internal_d6d103a6fbbb8c90c1bf8a364a79b6d3b8e8b895f325a72b057a36b758ddaeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_796d2c15083f450d44976caa72c55b120b7d019870cdf43ee30ead60dc01567a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796d2c15083f450d44976caa72c55b120b7d019870cdf43ee30ead60dc01567a->enter($__internal_796d2c15083f450d44976caa72c55b120b7d019870cdf43ee30ead60dc01567a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_796d2c15083f450d44976caa72c55b120b7d019870cdf43ee30ead60dc01567a->leave($__internal_796d2c15083f450d44976caa72c55b120b7d019870cdf43ee30ead60dc01567a_prof);

        
        $__internal_d6d103a6fbbb8c90c1bf8a364a79b6d3b8e8b895f325a72b057a36b758ddaeb7->leave($__internal_d6d103a6fbbb8c90c1bf8a364a79b6d3b8e8b895f325a72b057a36b758ddaeb7_prof);

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
