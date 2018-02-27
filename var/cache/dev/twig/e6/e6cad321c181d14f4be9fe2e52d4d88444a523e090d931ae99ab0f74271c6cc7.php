<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_54a67d0d6c361c679e4103ba478389245ce237d7f8c03e03af4e576643ddd95a extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b5842de3e4be71cd5c505a6b41575fd208f1fe5cf88d1b16d2e5030e52c987e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5842de3e4be71cd5c505a6b41575fd208f1fe5cf88d1b16d2e5030e52c987e->enter($__internal_5b5842de3e4be71cd5c505a6b41575fd208f1fe5cf88d1b16d2e5030e52c987e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_c18aaf6366443a0c8381dbdd6562e51e7772cacee000fd909a62fbc8f3b65f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18aaf6366443a0c8381dbdd6562e51e7772cacee000fd909a62fbc8f3b65f96->enter($__internal_c18aaf6366443a0c8381dbdd6562e51e7772cacee000fd909a62fbc8f3b65f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_4b8321aeaac80459091a1101a673d4fb12af73bca6bcfd3dcd1255b68d4f7769"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_4b8321aeaac80459091a1101a673d4fb12af73bca6bcfd3dcd1255b68d4f7769"] ?? $this->getContext($context, "__internal_4b8321aeaac80459091a1101a673d4fb12af73bca6bcfd3dcd1255b68d4f7769"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_4b8321aeaac80459091a1101a673d4fb12af73bca6bcfd3dcd1255b68d4f7769"] ?? $this->getContext($context, "__internal_4b8321aeaac80459091a1101a673d4fb12af73bca6bcfd3dcd1255b68d4f7769"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b5842de3e4be71cd5c505a6b41575fd208f1fe5cf88d1b16d2e5030e52c987e->leave($__internal_5b5842de3e4be71cd5c505a6b41575fd208f1fe5cf88d1b16d2e5030e52c987e_prof);

        
        $__internal_c18aaf6366443a0c8381dbdd6562e51e7772cacee000fd909a62fbc8f3b65f96->leave($__internal_c18aaf6366443a0c8381dbdd6562e51e7772cacee000fd909a62fbc8f3b65f96_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8b7dec44db764b2704b4c432918a53307cfef9d61bcdc97be7ab75117eb6bb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7dec44db764b2704b4c432918a53307cfef9d61bcdc97be7ab75117eb6bb42->enter($__internal_8b7dec44db764b2704b4c432918a53307cfef9d61bcdc97be7ab75117eb6bb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f41a60403225c228a8c8324356e639686e3ca945c7660874375438c7c7b74708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41a60403225c228a8c8324356e639686e3ca945c7660874375438c7c7b74708->enter($__internal_f41a60403225c228a8c8324356e639686e3ca945c7660874375438c7c7b74708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_f41a60403225c228a8c8324356e639686e3ca945c7660874375438c7c7b74708->leave($__internal_f41a60403225c228a8c8324356e639686e3ca945c7660874375438c7c7b74708_prof);

        
        $__internal_8b7dec44db764b2704b4c432918a53307cfef9d61bcdc97be7ab75117eb6bb42->leave($__internal_8b7dec44db764b2704b4c432918a53307cfef9d61bcdc97be7ab75117eb6bb42_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_48ea4cea8d409852cb32919ddc34ebdaf445acf4dc0007b73bbdf712f7cbe9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ea4cea8d409852cb32919ddc34ebdaf445acf4dc0007b73bbdf712f7cbe9d4->enter($__internal_48ea4cea8d409852cb32919ddc34ebdaf445acf4dc0007b73bbdf712f7cbe9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_01123d2089b1bfcabbd6494b7cdbaab42cab1d17864dd5c77443f9e2f8ddebac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01123d2089b1bfcabbd6494b7cdbaab42cab1d17864dd5c77443f9e2f8ddebac->enter($__internal_01123d2089b1bfcabbd6494b7cdbaab42cab1d17864dd5c77443f9e2f8ddebac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_01123d2089b1bfcabbd6494b7cdbaab42cab1d17864dd5c77443f9e2f8ddebac->leave($__internal_01123d2089b1bfcabbd6494b7cdbaab42cab1d17864dd5c77443f9e2f8ddebac_prof);

        
        $__internal_48ea4cea8d409852cb32919ddc34ebdaf445acf4dc0007b73bbdf712f7cbe9d4->leave($__internal_48ea4cea8d409852cb32919ddc34ebdaf445acf4dc0007b73bbdf712f7cbe9d4_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_bc56b72965bb5555f84980f0b57b76c1f4ed6725775bb5b0015634801f9d5cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc56b72965bb5555f84980f0b57b76c1f4ed6725775bb5b0015634801f9d5cef->enter($__internal_bc56b72965bb5555f84980f0b57b76c1f4ed6725775bb5b0015634801f9d5cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_d078d7ae2dccda177109aca61a62909e673e4e63c881e3ba369199b3d22a0a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d078d7ae2dccda177109aca61a62909e673e4e63c881e3ba369199b3d22a0a95->enter($__internal_d078d7ae2dccda177109aca61a62909e673e4e63c881e3ba369199b3d22a0a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_4b8321aeaac80459091a1101a673d4fb12af73bca6bcfd3dcd1255b68d4f7769"] ?? $this->getContext($context, "__internal_4b8321aeaac80459091a1101a673d4fb12af73bca6bcfd3dcd1255b68d4f7769")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d078d7ae2dccda177109aca61a62909e673e4e63c881e3ba369199b3d22a0a95->leave($__internal_d078d7ae2dccda177109aca61a62909e673e4e63c881e3ba369199b3d22a0a95_prof);

        
        $__internal_bc56b72965bb5555f84980f0b57b76c1f4ed6725775bb5b0015634801f9d5cef->leave($__internal_bc56b72965bb5555f84980f0b57b76c1f4ed6725775bb5b0015634801f9d5cef_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_5a512a2791420741b88470bae126cf941c61543253f0837843dce45962a35bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a512a2791420741b88470bae126cf941c61543253f0837843dce45962a35bed->enter($__internal_5a512a2791420741b88470bae126cf941c61543253f0837843dce45962a35bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_aa269ec4f5a5b42b9ec0e271bd720f5f0245a655c3c505f9dc5e49da6d17a553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa269ec4f5a5b42b9ec0e271bd720f5f0245a655c3c505f9dc5e49da6d17a553->enter($__internal_aa269ec4f5a5b42b9ec0e271bd720f5f0245a655c3c505f9dc5e49da6d17a553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_aa269ec4f5a5b42b9ec0e271bd720f5f0245a655c3c505f9dc5e49da6d17a553->leave($__internal_aa269ec4f5a5b42b9ec0e271bd720f5f0245a655c3c505f9dc5e49da6d17a553_prof);

        
        $__internal_5a512a2791420741b88470bae126cf941c61543253f0837843dce45962a35bed->leave($__internal_5a512a2791420741b88470bae126cf941c61543253f0837843dce45962a35bed_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_071f91c3fd509bdb7c176ff84064e894ade9162f8304cbaeb37d0376d392bb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071f91c3fd509bdb7c176ff84064e894ade9162f8304cbaeb37d0376d392bb6e->enter($__internal_071f91c3fd509bdb7c176ff84064e894ade9162f8304cbaeb37d0376d392bb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_e56c4025db49d949cf167c67bef33fee7b8da28263ec7cc8feb830ad02f3826d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56c4025db49d949cf167c67bef33fee7b8da28263ec7cc8feb830ad02f3826d->enter($__internal_e56c4025db49d949cf167c67bef33fee7b8da28263ec7cc8feb830ad02f3826d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_e56c4025db49d949cf167c67bef33fee7b8da28263ec7cc8feb830ad02f3826d->leave($__internal_e56c4025db49d949cf167c67bef33fee7b8da28263ec7cc8feb830ad02f3826d_prof);

        
        $__internal_071f91c3fd509bdb7c176ff84064e894ade9162f8304cbaeb37d0376d392bb6e->leave($__internal_071f91c3fd509bdb7c176ff84064e894ade9162f8304cbaeb37d0376d392bb6e_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_c6da55d6342cb779304cc9c16674affeb431893b58c2fb16b57049bb647f05ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6da55d6342cb779304cc9c16674affeb431893b58c2fb16b57049bb647f05ef->enter($__internal_c6da55d6342cb779304cc9c16674affeb431893b58c2fb16b57049bb647f05ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_656c2eee478dbf7f12b4217440a74b0c533bb78777f4f61c4a5d1037365b70fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656c2eee478dbf7f12b4217440a74b0c533bb78777f4f61c4a5d1037365b70fc->enter($__internal_656c2eee478dbf7f12b4217440a74b0c533bb78777f4f61c4a5d1037365b70fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_656c2eee478dbf7f12b4217440a74b0c533bb78777f4f61c4a5d1037365b70fc->leave($__internal_656c2eee478dbf7f12b4217440a74b0c533bb78777f4f61c4a5d1037365b70fc_prof);

        
        $__internal_c6da55d6342cb779304cc9c16674affeb431893b58c2fb16b57049bb647f05ef->leave($__internal_c6da55d6342cb779304cc9c16674affeb431893b58c2fb16b57049bb647f05ef_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_226a0031f780e6f5b9856976b58fc14dff4a136edc284b9e6101869455a15445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226a0031f780e6f5b9856976b58fc14dff4a136edc284b9e6101869455a15445->enter($__internal_226a0031f780e6f5b9856976b58fc14dff4a136edc284b9e6101869455a15445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_f5ba5740a5f33c0db0387ec452a5929e102dcd520219b39e6c7964893ef71306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ba5740a5f33c0db0387ec452a5929e102dcd520219b39e6c7964893ef71306->enter($__internal_f5ba5740a5f33c0db0387ec452a5929e102dcd520219b39e6c7964893ef71306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_f5ba5740a5f33c0db0387ec452a5929e102dcd520219b39e6c7964893ef71306->leave($__internal_f5ba5740a5f33c0db0387ec452a5929e102dcd520219b39e6c7964893ef71306_prof);

        
        $__internal_226a0031f780e6f5b9856976b58fc14dff4a136edc284b9e6101869455a15445->leave($__internal_226a0031f780e6f5b9856976b58fc14dff4a136edc284b9e6101869455a15445_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
