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
        $__internal_2af47b961e1e40598bd7e8b5f12afbafc067edaf0adaf1a292ceb77ec4befd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af47b961e1e40598bd7e8b5f12afbafc067edaf0adaf1a292ceb77ec4befd8d->enter($__internal_2af47b961e1e40598bd7e8b5f12afbafc067edaf0adaf1a292ceb77ec4befd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_057a47d393874ccf4046e380da9649c7f656a2a25db200f35747aa7891246aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057a47d393874ccf4046e380da9649c7f656a2a25db200f35747aa7891246aac->enter($__internal_057a47d393874ccf4046e380da9649c7f656a2a25db200f35747aa7891246aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af47b961e1e40598bd7e8b5f12afbafc067edaf0adaf1a292ceb77ec4befd8d->leave($__internal_2af47b961e1e40598bd7e8b5f12afbafc067edaf0adaf1a292ceb77ec4befd8d_prof);

        
        $__internal_057a47d393874ccf4046e380da9649c7f656a2a25db200f35747aa7891246aac->leave($__internal_057a47d393874ccf4046e380da9649c7f656a2a25db200f35747aa7891246aac_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8867db70986d4364dc00fba4695fa042a4bb5ec1cd70d398ab21dc19bb8998f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8867db70986d4364dc00fba4695fa042a4bb5ec1cd70d398ab21dc19bb8998f8->enter($__internal_8867db70986d4364dc00fba4695fa042a4bb5ec1cd70d398ab21dc19bb8998f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c7310feeeabf9bb2dd74aff14852c01a7c8822412790d0d1339a3cab8def8f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7310feeeabf9bb2dd74aff14852c01a7c8822412790d0d1339a3cab8def8f86->enter($__internal_c7310feeeabf9bb2dd74aff14852c01a7c8822412790d0d1339a3cab8def8f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_c7310feeeabf9bb2dd74aff14852c01a7c8822412790d0d1339a3cab8def8f86->leave($__internal_c7310feeeabf9bb2dd74aff14852c01a7c8822412790d0d1339a3cab8def8f86_prof);

        
        $__internal_8867db70986d4364dc00fba4695fa042a4bb5ec1cd70d398ab21dc19bb8998f8->leave($__internal_8867db70986d4364dc00fba4695fa042a4bb5ec1cd70d398ab21dc19bb8998f8_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dc2d80d08d6ed851b3045707ed93ae0e5726158997a1bc78f82e87bbe66a3f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2d80d08d6ed851b3045707ed93ae0e5726158997a1bc78f82e87bbe66a3f98->enter($__internal_dc2d80d08d6ed851b3045707ed93ae0e5726158997a1bc78f82e87bbe66a3f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_cf526294854e48a7f3d27469649c78f9ca277a789bd5547e16252f0f305ae1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf526294854e48a7f3d27469649c78f9ca277a789bd5547e16252f0f305ae1aa->enter($__internal_cf526294854e48a7f3d27469649c78f9ca277a789bd5547e16252f0f305ae1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_cf526294854e48a7f3d27469649c78f9ca277a789bd5547e16252f0f305ae1aa->leave($__internal_cf526294854e48a7f3d27469649c78f9ca277a789bd5547e16252f0f305ae1aa_prof);

        
        $__internal_dc2d80d08d6ed851b3045707ed93ae0e5726158997a1bc78f82e87bbe66a3f98->leave($__internal_dc2d80d08d6ed851b3045707ed93ae0e5726158997a1bc78f82e87bbe66a3f98_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a1f0a7cf03064510292ae9c2d50fa60d4e4076c9e47ea69b5385cf9f77eb9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1f0a7cf03064510292ae9c2d50fa60d4e4076c9e47ea69b5385cf9f77eb9c9->enter($__internal_5a1f0a7cf03064510292ae9c2d50fa60d4e4076c9e47ea69b5385cf9f77eb9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2420b07b6caaf6e023e1bc87d97ece7d9506496e4a9cdccea303213425ec00df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2420b07b6caaf6e023e1bc87d97ece7d9506496e4a9cdccea303213425ec00df->enter($__internal_2420b07b6caaf6e023e1bc87d97ece7d9506496e4a9cdccea303213425ec00df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2420b07b6caaf6e023e1bc87d97ece7d9506496e4a9cdccea303213425ec00df->leave($__internal_2420b07b6caaf6e023e1bc87d97ece7d9506496e4a9cdccea303213425ec00df_prof);

        
        $__internal_5a1f0a7cf03064510292ae9c2d50fa60d4e4076c9e47ea69b5385cf9f77eb9c9->leave($__internal_5a1f0a7cf03064510292ae9c2d50fa60d4e4076c9e47ea69b5385cf9f77eb9c9_prof);

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
