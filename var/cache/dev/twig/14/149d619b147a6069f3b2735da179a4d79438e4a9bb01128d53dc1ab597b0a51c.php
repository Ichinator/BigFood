<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_9405b8b32e0f0e8e4cb3024dede94d6fd95c377fa6e303ebf00c48de7fc14f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_613b9a74369605abf07ffec58ec90bdca48227f669c4c0f877028a6ef4f1fd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613b9a74369605abf07ffec58ec90bdca48227f669c4c0f877028a6ef4f1fd3a->enter($__internal_613b9a74369605abf07ffec58ec90bdca48227f669c4c0f877028a6ef4f1fd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_062ac009caab83cfc685ad243ccabd03f2559322a7130074810b850d797d7d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062ac009caab83cfc685ad243ccabd03f2559322a7130074810b850d797d7d9e->enter($__internal_062ac009caab83cfc685ad243ccabd03f2559322a7130074810b850d797d7d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_1f4c79e233a45479eb27c3caa856f5fe4b5fa577d929c056f8103047ea6b2057"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_1f4c79e233a45479eb27c3caa856f5fe4b5fa577d929c056f8103047ea6b2057"] ?? $this->getContext($context, "__internal_1f4c79e233a45479eb27c3caa856f5fe4b5fa577d929c056f8103047ea6b2057"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_1f4c79e233a45479eb27c3caa856f5fe4b5fa577d929c056f8103047ea6b2057"] ?? $this->getContext($context, "__internal_1f4c79e233a45479eb27c3caa856f5fe4b5fa577d929c056f8103047ea6b2057"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_613b9a74369605abf07ffec58ec90bdca48227f669c4c0f877028a6ef4f1fd3a->leave($__internal_613b9a74369605abf07ffec58ec90bdca48227f669c4c0f877028a6ef4f1fd3a_prof);

        
        $__internal_062ac009caab83cfc685ad243ccabd03f2559322a7130074810b850d797d7d9e->leave($__internal_062ac009caab83cfc685ad243ccabd03f2559322a7130074810b850d797d7d9e_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1faad50400c27f46ba6c1ec09c5edf1159c8bb4d8ffb5b851f6005ba2d808641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1faad50400c27f46ba6c1ec09c5edf1159c8bb4d8ffb5b851f6005ba2d808641->enter($__internal_1faad50400c27f46ba6c1ec09c5edf1159c8bb4d8ffb5b851f6005ba2d808641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_8d575e217f63fd20231e4ddbefc6f60d5706ba45794cc1a2147ad3a54bbc7905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d575e217f63fd20231e4ddbefc6f60d5706ba45794cc1a2147ad3a54bbc7905->enter($__internal_8d575e217f63fd20231e4ddbefc6f60d5706ba45794cc1a2147ad3a54bbc7905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_8d575e217f63fd20231e4ddbefc6f60d5706ba45794cc1a2147ad3a54bbc7905->leave($__internal_8d575e217f63fd20231e4ddbefc6f60d5706ba45794cc1a2147ad3a54bbc7905_prof);

        
        $__internal_1faad50400c27f46ba6c1ec09c5edf1159c8bb4d8ffb5b851f6005ba2d808641->leave($__internal_1faad50400c27f46ba6c1ec09c5edf1159c8bb4d8ffb5b851f6005ba2d808641_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c3914b33797d6e361e5df31595b78d29ef3708f1e25729a5df1767fb0b7b331a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3914b33797d6e361e5df31595b78d29ef3708f1e25729a5df1767fb0b7b331a->enter($__internal_c3914b33797d6e361e5df31595b78d29ef3708f1e25729a5df1767fb0b7b331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2b63a49abb2f06db3606ddb07ad24832b74f5f7d711c3bef9df174e8a7fe588e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b63a49abb2f06db3606ddb07ad24832b74f5f7d711c3bef9df174e8a7fe588e->enter($__internal_2b63a49abb2f06db3606ddb07ad24832b74f5f7d711c3bef9df174e8a7fe588e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_2b63a49abb2f06db3606ddb07ad24832b74f5f7d711c3bef9df174e8a7fe588e->leave($__internal_2b63a49abb2f06db3606ddb07ad24832b74f5f7d711c3bef9df174e8a7fe588e_prof);

        
        $__internal_c3914b33797d6e361e5df31595b78d29ef3708f1e25729a5df1767fb0b7b331a->leave($__internal_c3914b33797d6e361e5df31595b78d29ef3708f1e25729a5df1767fb0b7b331a_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_85c99d2efff58aece17cd09ba44637b99433b5d904f10027215558b3a266c682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c99d2efff58aece17cd09ba44637b99433b5d904f10027215558b3a266c682->enter($__internal_85c99d2efff58aece17cd09ba44637b99433b5d904f10027215558b3a266c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_9221235be3b6b5b8cfabb1cd9c26c4698d40d2d4833009658d00872cb31265aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9221235be3b6b5b8cfabb1cd9c26c4698d40d2d4833009658d00872cb31265aa->enter($__internal_9221235be3b6b5b8cfabb1cd9c26c4698d40d2d4833009658d00872cb31265aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_1f4c79e233a45479eb27c3caa856f5fe4b5fa577d929c056f8103047ea6b2057"] ?? $this->getContext($context, "__internal_1f4c79e233a45479eb27c3caa856f5fe4b5fa577d929c056f8103047ea6b2057")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9221235be3b6b5b8cfabb1cd9c26c4698d40d2d4833009658d00872cb31265aa->leave($__internal_9221235be3b6b5b8cfabb1cd9c26c4698d40d2d4833009658d00872cb31265aa_prof);

        
        $__internal_85c99d2efff58aece17cd09ba44637b99433b5d904f10027215558b3a266c682->leave($__internal_85c99d2efff58aece17cd09ba44637b99433b5d904f10027215558b3a266c682_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_9973a3f4fd00dde160edcc2a3cbea03c3bdecee017c1597794d31d839f171218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9973a3f4fd00dde160edcc2a3cbea03c3bdecee017c1597794d31d839f171218->enter($__internal_9973a3f4fd00dde160edcc2a3cbea03c3bdecee017c1597794d31d839f171218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4778fe92542c158d3fa0c61a1fec770dfd9d7d6065c49f0a72523ff694048533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4778fe92542c158d3fa0c61a1fec770dfd9d7d6065c49f0a72523ff694048533->enter($__internal_4778fe92542c158d3fa0c61a1fec770dfd9d7d6065c49f0a72523ff694048533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_4778fe92542c158d3fa0c61a1fec770dfd9d7d6065c49f0a72523ff694048533->leave($__internal_4778fe92542c158d3fa0c61a1fec770dfd9d7d6065c49f0a72523ff694048533_prof);

        
        $__internal_9973a3f4fd00dde160edcc2a3cbea03c3bdecee017c1597794d31d839f171218->leave($__internal_9973a3f4fd00dde160edcc2a3cbea03c3bdecee017c1597794d31d839f171218_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_9760ee9db9fe2ef4bc06930fd7939599c9ca955b358af4385737b03e46a0073d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9760ee9db9fe2ef4bc06930fd7939599c9ca955b358af4385737b03e46a0073d->enter($__internal_9760ee9db9fe2ef4bc06930fd7939599c9ca955b358af4385737b03e46a0073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_ce544a73a029e4a7ded9563fe9b2610f67ecb8f352a4a031865f62c3663497b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce544a73a029e4a7ded9563fe9b2610f67ecb8f352a4a031865f62c3663497b3->enter($__internal_ce544a73a029e4a7ded9563fe9b2610f67ecb8f352a4a031865f62c3663497b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_ce544a73a029e4a7ded9563fe9b2610f67ecb8f352a4a031865f62c3663497b3->leave($__internal_ce544a73a029e4a7ded9563fe9b2610f67ecb8f352a4a031865f62c3663497b3_prof);

        
        $__internal_9760ee9db9fe2ef4bc06930fd7939599c9ca955b358af4385737b03e46a0073d->leave($__internal_9760ee9db9fe2ef4bc06930fd7939599c9ca955b358af4385737b03e46a0073d_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_cb637424807c4c4c55e4e4178ad31e29f8e9c0e97f99fb1e708634903d603532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb637424807c4c4c55e4e4178ad31e29f8e9c0e97f99fb1e708634903d603532->enter($__internal_cb637424807c4c4c55e4e4178ad31e29f8e9c0e97f99fb1e708634903d603532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_2c2881494a2f9da9043cdce001a83d205059e635ec898a9ab8d45d6bfbf224d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2881494a2f9da9043cdce001a83d205059e635ec898a9ab8d45d6bfbf224d2->enter($__internal_2c2881494a2f9da9043cdce001a83d205059e635ec898a9ab8d45d6bfbf224d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_2c2881494a2f9da9043cdce001a83d205059e635ec898a9ab8d45d6bfbf224d2->leave($__internal_2c2881494a2f9da9043cdce001a83d205059e635ec898a9ab8d45d6bfbf224d2_prof);

        
        $__internal_cb637424807c4c4c55e4e4178ad31e29f8e9c0e97f99fb1e708634903d603532->leave($__internal_cb637424807c4c4c55e4e4178ad31e29f8e9c0e97f99fb1e708634903d603532_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
