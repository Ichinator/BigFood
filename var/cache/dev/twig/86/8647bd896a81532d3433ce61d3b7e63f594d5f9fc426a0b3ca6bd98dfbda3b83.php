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
        $__internal_12d99aee76a0aed064bb5b7b3f39ff490e8a7c5e4e881335f69e857caaec2dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d99aee76a0aed064bb5b7b3f39ff490e8a7c5e4e881335f69e857caaec2dc7->enter($__internal_12d99aee76a0aed064bb5b7b3f39ff490e8a7c5e4e881335f69e857caaec2dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_f88dc4ffad160cd05d53db7dcd7e8d6408d1ee79e8ef6eef27e1dd2cdbbc82a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88dc4ffad160cd05d53db7dcd7e8d6408d1ee79e8ef6eef27e1dd2cdbbc82a6->enter($__internal_f88dc4ffad160cd05d53db7dcd7e8d6408d1ee79e8ef6eef27e1dd2cdbbc82a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d99aee76a0aed064bb5b7b3f39ff490e8a7c5e4e881335f69e857caaec2dc7->leave($__internal_12d99aee76a0aed064bb5b7b3f39ff490e8a7c5e4e881335f69e857caaec2dc7_prof);

        
        $__internal_f88dc4ffad160cd05d53db7dcd7e8d6408d1ee79e8ef6eef27e1dd2cdbbc82a6->leave($__internal_f88dc4ffad160cd05d53db7dcd7e8d6408d1ee79e8ef6eef27e1dd2cdbbc82a6_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5c1aaea951012a0fe579c389425e7f4849a8e10efe051ef51bbb3f93ab55d53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1aaea951012a0fe579c389425e7f4849a8e10efe051ef51bbb3f93ab55d53f->enter($__internal_5c1aaea951012a0fe579c389425e7f4849a8e10efe051ef51bbb3f93ab55d53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_ff658c4cf6fef7fd7b5f1b5a88a340ae8ed25a3c6465c9023c15874ece23a101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff658c4cf6fef7fd7b5f1b5a88a340ae8ed25a3c6465c9023c15874ece23a101->enter($__internal_ff658c4cf6fef7fd7b5f1b5a88a340ae8ed25a3c6465c9023c15874ece23a101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_ff658c4cf6fef7fd7b5f1b5a88a340ae8ed25a3c6465c9023c15874ece23a101->leave($__internal_ff658c4cf6fef7fd7b5f1b5a88a340ae8ed25a3c6465c9023c15874ece23a101_prof);

        
        $__internal_5c1aaea951012a0fe579c389425e7f4849a8e10efe051ef51bbb3f93ab55d53f->leave($__internal_5c1aaea951012a0fe579c389425e7f4849a8e10efe051ef51bbb3f93ab55d53f_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fe59a52520c464cbaf8ff92175cf783088053bdcdd4f5997cc919a8be40a2536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe59a52520c464cbaf8ff92175cf783088053bdcdd4f5997cc919a8be40a2536->enter($__internal_fe59a52520c464cbaf8ff92175cf783088053bdcdd4f5997cc919a8be40a2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_08115d6839573de6545d2b9516d197cd907b4d38f80031f8a58c82f0e7187c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08115d6839573de6545d2b9516d197cd907b4d38f80031f8a58c82f0e7187c5e->enter($__internal_08115d6839573de6545d2b9516d197cd907b4d38f80031f8a58c82f0e7187c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_08115d6839573de6545d2b9516d197cd907b4d38f80031f8a58c82f0e7187c5e->leave($__internal_08115d6839573de6545d2b9516d197cd907b4d38f80031f8a58c82f0e7187c5e_prof);

        
        $__internal_fe59a52520c464cbaf8ff92175cf783088053bdcdd4f5997cc919a8be40a2536->leave($__internal_fe59a52520c464cbaf8ff92175cf783088053bdcdd4f5997cc919a8be40a2536_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3cab504d36d981c37e8a410a42002395fcadd793f14257db01771ed0af8c5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cab504d36d981c37e8a410a42002395fcadd793f14257db01771ed0af8c5e8->enter($__internal_a3cab504d36d981c37e8a410a42002395fcadd793f14257db01771ed0af8c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_09383a600950ee64723f9813dbb3ff3873c6cbdca88599276f05d62f04d6d458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09383a600950ee64723f9813dbb3ff3873c6cbdca88599276f05d62f04d6d458->enter($__internal_09383a600950ee64723f9813dbb3ff3873c6cbdca88599276f05d62f04d6d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_09383a600950ee64723f9813dbb3ff3873c6cbdca88599276f05d62f04d6d458->leave($__internal_09383a600950ee64723f9813dbb3ff3873c6cbdca88599276f05d62f04d6d458_prof);

        
        $__internal_a3cab504d36d981c37e8a410a42002395fcadd793f14257db01771ed0af8c5e8->leave($__internal_a3cab504d36d981c37e8a410a42002395fcadd793f14257db01771ed0af8c5e8_prof);

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
