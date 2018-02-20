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
        $__internal_1b9ab0a8f23ae46e1144a04705f144a99f392466b83ee2bb93d0a0a1c84051ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9ab0a8f23ae46e1144a04705f144a99f392466b83ee2bb93d0a0a1c84051ed->enter($__internal_1b9ab0a8f23ae46e1144a04705f144a99f392466b83ee2bb93d0a0a1c84051ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0e8efd844646b784bae55a0f45a91ac4a31304eeb05f698402e84a4adbf1a967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8efd844646b784bae55a0f45a91ac4a31304eeb05f698402e84a4adbf1a967->enter($__internal_0e8efd844646b784bae55a0f45a91ac4a31304eeb05f698402e84a4adbf1a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b9ab0a8f23ae46e1144a04705f144a99f392466b83ee2bb93d0a0a1c84051ed->leave($__internal_1b9ab0a8f23ae46e1144a04705f144a99f392466b83ee2bb93d0a0a1c84051ed_prof);

        
        $__internal_0e8efd844646b784bae55a0f45a91ac4a31304eeb05f698402e84a4adbf1a967->leave($__internal_0e8efd844646b784bae55a0f45a91ac4a31304eeb05f698402e84a4adbf1a967_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f33e7e2e9ba9ce9221b65c383b2996854b136532f85be6704190763376df7142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33e7e2e9ba9ce9221b65c383b2996854b136532f85be6704190763376df7142->enter($__internal_f33e7e2e9ba9ce9221b65c383b2996854b136532f85be6704190763376df7142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ddee0fc5f2a292efacbaa8f262afd670ac3d5a54f16c452579b3c732f22f34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddee0fc5f2a292efacbaa8f262afd670ac3d5a54f16c452579b3c732f22f34b->enter($__internal_1ddee0fc5f2a292efacbaa8f262afd670ac3d5a54f16c452579b3c732f22f34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1ddee0fc5f2a292efacbaa8f262afd670ac3d5a54f16c452579b3c732f22f34b->leave($__internal_1ddee0fc5f2a292efacbaa8f262afd670ac3d5a54f16c452579b3c732f22f34b_prof);

        
        $__internal_f33e7e2e9ba9ce9221b65c383b2996854b136532f85be6704190763376df7142->leave($__internal_f33e7e2e9ba9ce9221b65c383b2996854b136532f85be6704190763376df7142_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c0a2387e602e52ae9ec4e3d1d4976e6d543f2c94f8e7cb726a3375bfc8e4fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0a2387e602e52ae9ec4e3d1d4976e6d543f2c94f8e7cb726a3375bfc8e4fea->enter($__internal_4c0a2387e602e52ae9ec4e3d1d4976e6d543f2c94f8e7cb726a3375bfc8e4fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b182856120826c5fa0b6144ed567d65dbb3c1aad7a7ffa0bde9693bd12049a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b182856120826c5fa0b6144ed567d65dbb3c1aad7a7ffa0bde9693bd12049a89->enter($__internal_b182856120826c5fa0b6144ed567d65dbb3c1aad7a7ffa0bde9693bd12049a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b182856120826c5fa0b6144ed567d65dbb3c1aad7a7ffa0bde9693bd12049a89->leave($__internal_b182856120826c5fa0b6144ed567d65dbb3c1aad7a7ffa0bde9693bd12049a89_prof);

        
        $__internal_4c0a2387e602e52ae9ec4e3d1d4976e6d543f2c94f8e7cb726a3375bfc8e4fea->leave($__internal_4c0a2387e602e52ae9ec4e3d1d4976e6d543f2c94f8e7cb726a3375bfc8e4fea_prof);

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
