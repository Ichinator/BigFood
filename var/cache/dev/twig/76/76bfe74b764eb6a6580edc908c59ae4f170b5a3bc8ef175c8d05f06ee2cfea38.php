<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0a12f1de0d9ecf3f7f0df1b7125af486a157344b82466bf59914361a6c533e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3cb799e18fb3833f6704564852135d51d8e2b7a59acd8f3f3c4552a8d485395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3cb799e18fb3833f6704564852135d51d8e2b7a59acd8f3f3c4552a8d485395->enter($__internal_d3cb799e18fb3833f6704564852135d51d8e2b7a59acd8f3f3c4552a8d485395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_05205572c1ba1e2b26a363465e099ab3d8fdb4ae902ebabe88b6ae3a529ffe1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05205572c1ba1e2b26a363465e099ab3d8fdb4ae902ebabe88b6ae3a529ffe1e->enter($__internal_05205572c1ba1e2b26a363465e099ab3d8fdb4ae902ebabe88b6ae3a529ffe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3cb799e18fb3833f6704564852135d51d8e2b7a59acd8f3f3c4552a8d485395->leave($__internal_d3cb799e18fb3833f6704564852135d51d8e2b7a59acd8f3f3c4552a8d485395_prof);

        
        $__internal_05205572c1ba1e2b26a363465e099ab3d8fdb4ae902ebabe88b6ae3a529ffe1e->leave($__internal_05205572c1ba1e2b26a363465e099ab3d8fdb4ae902ebabe88b6ae3a529ffe1e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddaf075af95d943ff0e6e4aed000e631d248dfd37b5387097abaca65ed516223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddaf075af95d943ff0e6e4aed000e631d248dfd37b5387097abaca65ed516223->enter($__internal_ddaf075af95d943ff0e6e4aed000e631d248dfd37b5387097abaca65ed516223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_93bd3d16468e3e7dce8a64ebc227fb81cd8550a2132039d32c4fd7ab2bcdf81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bd3d16468e3e7dce8a64ebc227fb81cd8550a2132039d32c4fd7ab2bcdf81e->enter($__internal_93bd3d16468e3e7dce8a64ebc227fb81cd8550a2132039d32c4fd7ab2bcdf81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_93bd3d16468e3e7dce8a64ebc227fb81cd8550a2132039d32c4fd7ab2bcdf81e->leave($__internal_93bd3d16468e3e7dce8a64ebc227fb81cd8550a2132039d32c4fd7ab2bcdf81e_prof);

        
        $__internal_ddaf075af95d943ff0e6e4aed000e631d248dfd37b5387097abaca65ed516223->leave($__internal_ddaf075af95d943ff0e6e4aed000e631d248dfd37b5387097abaca65ed516223_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
