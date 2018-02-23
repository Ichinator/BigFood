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
        $__internal_aa52afe028e56ebcd09656d7852b51d18599ed16dd2acd0f239cd75c0cefdc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa52afe028e56ebcd09656d7852b51d18599ed16dd2acd0f239cd75c0cefdc63->enter($__internal_aa52afe028e56ebcd09656d7852b51d18599ed16dd2acd0f239cd75c0cefdc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_f9062025527fc777d1139302bacea455381ae412238693af56714b63b24a7974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9062025527fc777d1139302bacea455381ae412238693af56714b63b24a7974->enter($__internal_f9062025527fc777d1139302bacea455381ae412238693af56714b63b24a7974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa52afe028e56ebcd09656d7852b51d18599ed16dd2acd0f239cd75c0cefdc63->leave($__internal_aa52afe028e56ebcd09656d7852b51d18599ed16dd2acd0f239cd75c0cefdc63_prof);

        
        $__internal_f9062025527fc777d1139302bacea455381ae412238693af56714b63b24a7974->leave($__internal_f9062025527fc777d1139302bacea455381ae412238693af56714b63b24a7974_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4cd326f4bf9cf06b636c5fb949ee742c763d3347881524a41efeb2e731d06362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd326f4bf9cf06b636c5fb949ee742c763d3347881524a41efeb2e731d06362->enter($__internal_4cd326f4bf9cf06b636c5fb949ee742c763d3347881524a41efeb2e731d06362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3c0f783270f26ccdbae0ecfdd062861871977b6e5a2bf355f349facf66b05789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0f783270f26ccdbae0ecfdd062861871977b6e5a2bf355f349facf66b05789->enter($__internal_3c0f783270f26ccdbae0ecfdd062861871977b6e5a2bf355f349facf66b05789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_3c0f783270f26ccdbae0ecfdd062861871977b6e5a2bf355f349facf66b05789->leave($__internal_3c0f783270f26ccdbae0ecfdd062861871977b6e5a2bf355f349facf66b05789_prof);

        
        $__internal_4cd326f4bf9cf06b636c5fb949ee742c763d3347881524a41efeb2e731d06362->leave($__internal_4cd326f4bf9cf06b636c5fb949ee742c763d3347881524a41efeb2e731d06362_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_45a7706ba64136ceda0cb56fd70d042f836a8fb4c8da3404ceec9065bf127a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a7706ba64136ceda0cb56fd70d042f836a8fb4c8da3404ceec9065bf127a66->enter($__internal_45a7706ba64136ceda0cb56fd70d042f836a8fb4c8da3404ceec9065bf127a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_c83b32e766b5c5a1c1be063d875892eb710e611720c95e0de6fd11579273b1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83b32e766b5c5a1c1be063d875892eb710e611720c95e0de6fd11579273b1e7->enter($__internal_c83b32e766b5c5a1c1be063d875892eb710e611720c95e0de6fd11579273b1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_c83b32e766b5c5a1c1be063d875892eb710e611720c95e0de6fd11579273b1e7->leave($__internal_c83b32e766b5c5a1c1be063d875892eb710e611720c95e0de6fd11579273b1e7_prof);

        
        $__internal_45a7706ba64136ceda0cb56fd70d042f836a8fb4c8da3404ceec9065bf127a66->leave($__internal_45a7706ba64136ceda0cb56fd70d042f836a8fb4c8da3404ceec9065bf127a66_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b4f195f6a321679f5613807f3caf775223f212dd91c050907bd909787bb8dde1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f195f6a321679f5613807f3caf775223f212dd91c050907bd909787bb8dde1->enter($__internal_b4f195f6a321679f5613807f3caf775223f212dd91c050907bd909787bb8dde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e818394e84368ac497e5cb4c0876ddb532c2580f985a1890dc0e8befa80989b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e818394e84368ac497e5cb4c0876ddb532c2580f985a1890dc0e8befa80989b0->enter($__internal_e818394e84368ac497e5cb4c0876ddb532c2580f985a1890dc0e8befa80989b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e818394e84368ac497e5cb4c0876ddb532c2580f985a1890dc0e8befa80989b0->leave($__internal_e818394e84368ac497e5cb4c0876ddb532c2580f985a1890dc0e8befa80989b0_prof);

        
        $__internal_b4f195f6a321679f5613807f3caf775223f212dd91c050907bd909787bb8dde1->leave($__internal_b4f195f6a321679f5613807f3caf775223f212dd91c050907bd909787bb8dde1_prof);

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
