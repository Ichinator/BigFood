<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_a01c9538c3db1b7166bfca9443021afe5c7b0eade71186a086d24bdad83e3b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55836f0423619abbd2e92f12b5d2222bae4671a10ff6ad4a14f0f2651494eacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55836f0423619abbd2e92f12b5d2222bae4671a10ff6ad4a14f0f2651494eacf->enter($__internal_55836f0423619abbd2e92f12b5d2222bae4671a10ff6ad4a14f0f2651494eacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_9fda77728bba17bd9ddeed6a5fd8031c1489a34da6d3843fb3d79155a84a88d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fda77728bba17bd9ddeed6a5fd8031c1489a34da6d3843fb3d79155a84a88d5->enter($__internal_9fda77728bba17bd9ddeed6a5fd8031c1489a34da6d3843fb3d79155a84a88d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55836f0423619abbd2e92f12b5d2222bae4671a10ff6ad4a14f0f2651494eacf->leave($__internal_55836f0423619abbd2e92f12b5d2222bae4671a10ff6ad4a14f0f2651494eacf_prof);

        
        $__internal_9fda77728bba17bd9ddeed6a5fd8031c1489a34da6d3843fb3d79155a84a88d5->leave($__internal_9fda77728bba17bd9ddeed6a5fd8031c1489a34da6d3843fb3d79155a84a88d5_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_303ce8da6e960339528c2291d4290447e061154c18c763936ff211b7180f1c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303ce8da6e960339528c2291d4290447e061154c18c763936ff211b7180f1c90->enter($__internal_303ce8da6e960339528c2291d4290447e061154c18c763936ff211b7180f1c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_9dec29279872bc92f2c6559bbe44a7b16567cb926a790da4a41355ffb11b0a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dec29279872bc92f2c6559bbe44a7b16567cb926a790da4a41355ffb11b0a87->enter($__internal_9dec29279872bc92f2c6559bbe44a7b16567cb926a790da4a41355ffb11b0a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_9dec29279872bc92f2c6559bbe44a7b16567cb926a790da4a41355ffb11b0a87->leave($__internal_9dec29279872bc92f2c6559bbe44a7b16567cb926a790da4a41355ffb11b0a87_prof);

        
        $__internal_303ce8da6e960339528c2291d4290447e061154c18c763936ff211b7180f1c90->leave($__internal_303ce8da6e960339528c2291d4290447e061154c18c763936ff211b7180f1c90_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_43355fd8bf5676f296a84f4ea73855636f2fe09819d5b0edee6d15792ae2707e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43355fd8bf5676f296a84f4ea73855636f2fe09819d5b0edee6d15792ae2707e->enter($__internal_43355fd8bf5676f296a84f4ea73855636f2fe09819d5b0edee6d15792ae2707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3b22ce4fd6491682c59642471208949145e285a7b9a23fe5e32f78af103dc40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b22ce4fd6491682c59642471208949145e285a7b9a23fe5e32f78af103dc40a->enter($__internal_3b22ce4fd6491682c59642471208949145e285a7b9a23fe5e32f78af103dc40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_3b22ce4fd6491682c59642471208949145e285a7b9a23fe5e32f78af103dc40a->leave($__internal_3b22ce4fd6491682c59642471208949145e285a7b9a23fe5e32f78af103dc40a_prof);

        
        $__internal_43355fd8bf5676f296a84f4ea73855636f2fe09819d5b0edee6d15792ae2707e->leave($__internal_43355fd8bf5676f296a84f4ea73855636f2fe09819d5b0edee6d15792ae2707e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_62d829170cd8b0e8a51583b1205b3d6194b5e677c0d847fe3310b2798c16bf00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d829170cd8b0e8a51583b1205b3d6194b5e677c0d847fe3310b2798c16bf00->enter($__internal_62d829170cd8b0e8a51583b1205b3d6194b5e677c0d847fe3310b2798c16bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b50ccc3a7dbf86ccb9d91661a00c173f32fe9e14a8d9248e0f246b7884ca42da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50ccc3a7dbf86ccb9d91661a00c173f32fe9e14a8d9248e0f246b7884ca42da->enter($__internal_b50ccc3a7dbf86ccb9d91661a00c173f32fe9e14a8d9248e0f246b7884ca42da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_b50ccc3a7dbf86ccb9d91661a00c173f32fe9e14a8d9248e0f246b7884ca42da->leave($__internal_b50ccc3a7dbf86ccb9d91661a00c173f32fe9e14a8d9248e0f246b7884ca42da_prof);

        
        $__internal_62d829170cd8b0e8a51583b1205b3d6194b5e677c0d847fe3310b2798c16bf00->leave($__internal_62d829170cd8b0e8a51583b1205b3d6194b5e677c0d847fe3310b2798c16bf00_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
