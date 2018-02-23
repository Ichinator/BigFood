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
        $__internal_d912232b6c7355dfdce48ae1eb3c75df7d9ed2d7ae7b6d3ef73e16aca294dad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d912232b6c7355dfdce48ae1eb3c75df7d9ed2d7ae7b6d3ef73e16aca294dad0->enter($__internal_d912232b6c7355dfdce48ae1eb3c75df7d9ed2d7ae7b6d3ef73e16aca294dad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_2a8e72f9ff7642ccc9db8116bfac83fc0a6cd32d9e2366bbfd5d98f26f29678e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8e72f9ff7642ccc9db8116bfac83fc0a6cd32d9e2366bbfd5d98f26f29678e->enter($__internal_2a8e72f9ff7642ccc9db8116bfac83fc0a6cd32d9e2366bbfd5d98f26f29678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d912232b6c7355dfdce48ae1eb3c75df7d9ed2d7ae7b6d3ef73e16aca294dad0->leave($__internal_d912232b6c7355dfdce48ae1eb3c75df7d9ed2d7ae7b6d3ef73e16aca294dad0_prof);

        
        $__internal_2a8e72f9ff7642ccc9db8116bfac83fc0a6cd32d9e2366bbfd5d98f26f29678e->leave($__internal_2a8e72f9ff7642ccc9db8116bfac83fc0a6cd32d9e2366bbfd5d98f26f29678e_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d5ce50801a68adfcc345b892ea65ad76862d55c8a5accb0a1cc8b97a88c08667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ce50801a68adfcc345b892ea65ad76862d55c8a5accb0a1cc8b97a88c08667->enter($__internal_d5ce50801a68adfcc345b892ea65ad76862d55c8a5accb0a1cc8b97a88c08667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f63d67902472347dd5ea6588ec7219cfd03becac3657dcd71ff3ecdfa74ff2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63d67902472347dd5ea6588ec7219cfd03becac3657dcd71ff3ecdfa74ff2ca->enter($__internal_f63d67902472347dd5ea6588ec7219cfd03becac3657dcd71ff3ecdfa74ff2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_f63d67902472347dd5ea6588ec7219cfd03becac3657dcd71ff3ecdfa74ff2ca->leave($__internal_f63d67902472347dd5ea6588ec7219cfd03becac3657dcd71ff3ecdfa74ff2ca_prof);

        
        $__internal_d5ce50801a68adfcc345b892ea65ad76862d55c8a5accb0a1cc8b97a88c08667->leave($__internal_d5ce50801a68adfcc345b892ea65ad76862d55c8a5accb0a1cc8b97a88c08667_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c560e2cad84766ebca1760142b6184426b4f3cf9263c4c32d84c31383b1647e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c560e2cad84766ebca1760142b6184426b4f3cf9263c4c32d84c31383b1647e9->enter($__internal_c560e2cad84766ebca1760142b6184426b4f3cf9263c4c32d84c31383b1647e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e37bfbee0ac6f3e0153883dfe0f7979772fafa24162a1aa40e15b66adf4cc329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37bfbee0ac6f3e0153883dfe0f7979772fafa24162a1aa40e15b66adf4cc329->enter($__internal_e37bfbee0ac6f3e0153883dfe0f7979772fafa24162a1aa40e15b66adf4cc329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_e37bfbee0ac6f3e0153883dfe0f7979772fafa24162a1aa40e15b66adf4cc329->leave($__internal_e37bfbee0ac6f3e0153883dfe0f7979772fafa24162a1aa40e15b66adf4cc329_prof);

        
        $__internal_c560e2cad84766ebca1760142b6184426b4f3cf9263c4c32d84c31383b1647e9->leave($__internal_c560e2cad84766ebca1760142b6184426b4f3cf9263c4c32d84c31383b1647e9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3066e7912722a3fcc5dfc5f5a12866278f16cffaa622f49aee14755f0446631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3066e7912722a3fcc5dfc5f5a12866278f16cffaa622f49aee14755f0446631->enter($__internal_c3066e7912722a3fcc5dfc5f5a12866278f16cffaa622f49aee14755f0446631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9bcf5fcb61998e83a749800a7288114179007f233eddeb43af71ed2db00e8770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcf5fcb61998e83a749800a7288114179007f233eddeb43af71ed2db00e8770->enter($__internal_9bcf5fcb61998e83a749800a7288114179007f233eddeb43af71ed2db00e8770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9bcf5fcb61998e83a749800a7288114179007f233eddeb43af71ed2db00e8770->leave($__internal_9bcf5fcb61998e83a749800a7288114179007f233eddeb43af71ed2db00e8770_prof);

        
        $__internal_c3066e7912722a3fcc5dfc5f5a12866278f16cffaa622f49aee14755f0446631->leave($__internal_c3066e7912722a3fcc5dfc5f5a12866278f16cffaa622f49aee14755f0446631_prof);

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
