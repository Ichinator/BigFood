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
        $__internal_1a8af8e2fdef3be853b9515a5e66b3f4244860621d88529c2861b7e8373ea80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8af8e2fdef3be853b9515a5e66b3f4244860621d88529c2861b7e8373ea80d->enter($__internal_1a8af8e2fdef3be853b9515a5e66b3f4244860621d88529c2861b7e8373ea80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_70b82d2703e7b8878688900a2f127c2e71f8035be4b5ca2b3a1ec4865dbb30c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b82d2703e7b8878688900a2f127c2e71f8035be4b5ca2b3a1ec4865dbb30c1->enter($__internal_70b82d2703e7b8878688900a2f127c2e71f8035be4b5ca2b3a1ec4865dbb30c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a8af8e2fdef3be853b9515a5e66b3f4244860621d88529c2861b7e8373ea80d->leave($__internal_1a8af8e2fdef3be853b9515a5e66b3f4244860621d88529c2861b7e8373ea80d_prof);

        
        $__internal_70b82d2703e7b8878688900a2f127c2e71f8035be4b5ca2b3a1ec4865dbb30c1->leave($__internal_70b82d2703e7b8878688900a2f127c2e71f8035be4b5ca2b3a1ec4865dbb30c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06eb967ac6706898a7462b4dfe16ca606a02321d0a42bb6d5682f17c40e08d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06eb967ac6706898a7462b4dfe16ca606a02321d0a42bb6d5682f17c40e08d54->enter($__internal_06eb967ac6706898a7462b4dfe16ca606a02321d0a42bb6d5682f17c40e08d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b76467939725126ae67f4d2f5e17d930481ef9b46f006d777d252f6c97b7fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b76467939725126ae67f4d2f5e17d930481ef9b46f006d777d252f6c97b7fce->enter($__internal_0b76467939725126ae67f4d2f5e17d930481ef9b46f006d777d252f6c97b7fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0b76467939725126ae67f4d2f5e17d930481ef9b46f006d777d252f6c97b7fce->leave($__internal_0b76467939725126ae67f4d2f5e17d930481ef9b46f006d777d252f6c97b7fce_prof);

        
        $__internal_06eb967ac6706898a7462b4dfe16ca606a02321d0a42bb6d5682f17c40e08d54->leave($__internal_06eb967ac6706898a7462b4dfe16ca606a02321d0a42bb6d5682f17c40e08d54_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3277d91574caab2846e13032722273c6f724c51f3cf67bb1618ccdd6e060db36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3277d91574caab2846e13032722273c6f724c51f3cf67bb1618ccdd6e060db36->enter($__internal_3277d91574caab2846e13032722273c6f724c51f3cf67bb1618ccdd6e060db36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efeefd91c3d965f2efcc0cd4c66178418bb592d399a8bd86e54f6a6e7a31aef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efeefd91c3d965f2efcc0cd4c66178418bb592d399a8bd86e54f6a6e7a31aef0->enter($__internal_efeefd91c3d965f2efcc0cd4c66178418bb592d399a8bd86e54f6a6e7a31aef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efeefd91c3d965f2efcc0cd4c66178418bb592d399a8bd86e54f6a6e7a31aef0->leave($__internal_efeefd91c3d965f2efcc0cd4c66178418bb592d399a8bd86e54f6a6e7a31aef0_prof);

        
        $__internal_3277d91574caab2846e13032722273c6f724c51f3cf67bb1618ccdd6e060db36->leave($__internal_3277d91574caab2846e13032722273c6f724c51f3cf67bb1618ccdd6e060db36_prof);

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
