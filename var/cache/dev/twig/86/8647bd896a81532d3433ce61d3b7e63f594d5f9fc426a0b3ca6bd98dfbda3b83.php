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
        $__internal_8eafeb55072637fc56d7b04e306e11c9b14ff383438e19c3c924769b3af6448f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eafeb55072637fc56d7b04e306e11c9b14ff383438e19c3c924769b3af6448f->enter($__internal_8eafeb55072637fc56d7b04e306e11c9b14ff383438e19c3c924769b3af6448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_058fa5ca2b8faca85d4196cf908188d35a881984d155bf02c2e32745b6b76e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058fa5ca2b8faca85d4196cf908188d35a881984d155bf02c2e32745b6b76e4e->enter($__internal_058fa5ca2b8faca85d4196cf908188d35a881984d155bf02c2e32745b6b76e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eafeb55072637fc56d7b04e306e11c9b14ff383438e19c3c924769b3af6448f->leave($__internal_8eafeb55072637fc56d7b04e306e11c9b14ff383438e19c3c924769b3af6448f_prof);

        
        $__internal_058fa5ca2b8faca85d4196cf908188d35a881984d155bf02c2e32745b6b76e4e->leave($__internal_058fa5ca2b8faca85d4196cf908188d35a881984d155bf02c2e32745b6b76e4e_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_025870eeb7f5391fa2689db1dd81148bd55c74a4a22b0650e65c5edfd99b10a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025870eeb7f5391fa2689db1dd81148bd55c74a4a22b0650e65c5edfd99b10a5->enter($__internal_025870eeb7f5391fa2689db1dd81148bd55c74a4a22b0650e65c5edfd99b10a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c8f551547023d8a5d574f0289a6f8db002cdcda4576f63250ae828f1a8a8f94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f551547023d8a5d574f0289a6f8db002cdcda4576f63250ae828f1a8a8f94c->enter($__internal_c8f551547023d8a5d574f0289a6f8db002cdcda4576f63250ae828f1a8a8f94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_c8f551547023d8a5d574f0289a6f8db002cdcda4576f63250ae828f1a8a8f94c->leave($__internal_c8f551547023d8a5d574f0289a6f8db002cdcda4576f63250ae828f1a8a8f94c_prof);

        
        $__internal_025870eeb7f5391fa2689db1dd81148bd55c74a4a22b0650e65c5edfd99b10a5->leave($__internal_025870eeb7f5391fa2689db1dd81148bd55c74a4a22b0650e65c5edfd99b10a5_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fff29723da5766cdd40f4bcba0fdbf0902fab723a3e157cb58702d2e3446a86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff29723da5766cdd40f4bcba0fdbf0902fab723a3e157cb58702d2e3446a86c->enter($__internal_fff29723da5766cdd40f4bcba0fdbf0902fab723a3e157cb58702d2e3446a86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_557d8b3ebc36cc6cf4b2ca823fa5051ab3f31d1a5bb28f31d911a02fe9e3fc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557d8b3ebc36cc6cf4b2ca823fa5051ab3f31d1a5bb28f31d911a02fe9e3fc0f->enter($__internal_557d8b3ebc36cc6cf4b2ca823fa5051ab3f31d1a5bb28f31d911a02fe9e3fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_557d8b3ebc36cc6cf4b2ca823fa5051ab3f31d1a5bb28f31d911a02fe9e3fc0f->leave($__internal_557d8b3ebc36cc6cf4b2ca823fa5051ab3f31d1a5bb28f31d911a02fe9e3fc0f_prof);

        
        $__internal_fff29723da5766cdd40f4bcba0fdbf0902fab723a3e157cb58702d2e3446a86c->leave($__internal_fff29723da5766cdd40f4bcba0fdbf0902fab723a3e157cb58702d2e3446a86c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_df53fb9deca1789da7acda5ecf16572a172129f368bab16f4bc2dba63b715001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df53fb9deca1789da7acda5ecf16572a172129f368bab16f4bc2dba63b715001->enter($__internal_df53fb9deca1789da7acda5ecf16572a172129f368bab16f4bc2dba63b715001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_555deb389ed30413f15e759a1254d965575ab422b60b9e965a684f85c20ae358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555deb389ed30413f15e759a1254d965575ab422b60b9e965a684f85c20ae358->enter($__internal_555deb389ed30413f15e759a1254d965575ab422b60b9e965a684f85c20ae358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_555deb389ed30413f15e759a1254d965575ab422b60b9e965a684f85c20ae358->leave($__internal_555deb389ed30413f15e759a1254d965575ab422b60b9e965a684f85c20ae358_prof);

        
        $__internal_df53fb9deca1789da7acda5ecf16572a172129f368bab16f4bc2dba63b715001->leave($__internal_df53fb9deca1789da7acda5ecf16572a172129f368bab16f4bc2dba63b715001_prof);

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
