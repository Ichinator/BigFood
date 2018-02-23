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
        $__internal_1d0dfbba9d14897f43e3067c57e5d3208ed09b7061ae26f9ece4589c6912f9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0dfbba9d14897f43e3067c57e5d3208ed09b7061ae26f9ece4589c6912f9fe->enter($__internal_1d0dfbba9d14897f43e3067c57e5d3208ed09b7061ae26f9ece4589c6912f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_958712a6e226ae45cb6c4e1336e36b796e31d155cb0a0306e7f4b431c57996c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958712a6e226ae45cb6c4e1336e36b796e31d155cb0a0306e7f4b431c57996c6->enter($__internal_958712a6e226ae45cb6c4e1336e36b796e31d155cb0a0306e7f4b431c57996c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_0ac9dd3cda87101b0c90c264605df2b325562ab5b9365944d19875109f26ffee"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_0ac9dd3cda87101b0c90c264605df2b325562ab5b9365944d19875109f26ffee"] ?? $this->getContext($context, "__internal_0ac9dd3cda87101b0c90c264605df2b325562ab5b9365944d19875109f26ffee"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_0ac9dd3cda87101b0c90c264605df2b325562ab5b9365944d19875109f26ffee"] ?? $this->getContext($context, "__internal_0ac9dd3cda87101b0c90c264605df2b325562ab5b9365944d19875109f26ffee"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0dfbba9d14897f43e3067c57e5d3208ed09b7061ae26f9ece4589c6912f9fe->leave($__internal_1d0dfbba9d14897f43e3067c57e5d3208ed09b7061ae26f9ece4589c6912f9fe_prof);

        
        $__internal_958712a6e226ae45cb6c4e1336e36b796e31d155cb0a0306e7f4b431c57996c6->leave($__internal_958712a6e226ae45cb6c4e1336e36b796e31d155cb0a0306e7f4b431c57996c6_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ec8fe8e63466479d87bc6905a3a9689851a50da635aa235c0543642c08024b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8fe8e63466479d87bc6905a3a9689851a50da635aa235c0543642c08024b83->enter($__internal_ec8fe8e63466479d87bc6905a3a9689851a50da635aa235c0543642c08024b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_50321908e53d74423df946d77fec432e96265c83cab1a77aa875a6a5cfcc9178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50321908e53d74423df946d77fec432e96265c83cab1a77aa875a6a5cfcc9178->enter($__internal_50321908e53d74423df946d77fec432e96265c83cab1a77aa875a6a5cfcc9178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_50321908e53d74423df946d77fec432e96265c83cab1a77aa875a6a5cfcc9178->leave($__internal_50321908e53d74423df946d77fec432e96265c83cab1a77aa875a6a5cfcc9178_prof);

        
        $__internal_ec8fe8e63466479d87bc6905a3a9689851a50da635aa235c0543642c08024b83->leave($__internal_ec8fe8e63466479d87bc6905a3a9689851a50da635aa235c0543642c08024b83_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_636df5e57368925334acb15d1199e70e2ca87946b0cc3f45e88b492e8f48546b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636df5e57368925334acb15d1199e70e2ca87946b0cc3f45e88b492e8f48546b->enter($__internal_636df5e57368925334acb15d1199e70e2ca87946b0cc3f45e88b492e8f48546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_98b285a426d7053163f9a08b01ff6f3e34ab26c077591156d561410fb6eeaac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b285a426d7053163f9a08b01ff6f3e34ab26c077591156d561410fb6eeaac7->enter($__internal_98b285a426d7053163f9a08b01ff6f3e34ab26c077591156d561410fb6eeaac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_98b285a426d7053163f9a08b01ff6f3e34ab26c077591156d561410fb6eeaac7->leave($__internal_98b285a426d7053163f9a08b01ff6f3e34ab26c077591156d561410fb6eeaac7_prof);

        
        $__internal_636df5e57368925334acb15d1199e70e2ca87946b0cc3f45e88b492e8f48546b->leave($__internal_636df5e57368925334acb15d1199e70e2ca87946b0cc3f45e88b492e8f48546b_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_411adbdcca744689c011af289f463e8e9256d0590875a7a9d72847fcb40f7e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411adbdcca744689c011af289f463e8e9256d0590875a7a9d72847fcb40f7e5e->enter($__internal_411adbdcca744689c011af289f463e8e9256d0590875a7a9d72847fcb40f7e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_0d35ce2c50deac5a613bb3a6b22214a70a60ae7b183b926671bc88264839d478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d35ce2c50deac5a613bb3a6b22214a70a60ae7b183b926671bc88264839d478->enter($__internal_0d35ce2c50deac5a613bb3a6b22214a70a60ae7b183b926671bc88264839d478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_0ac9dd3cda87101b0c90c264605df2b325562ab5b9365944d19875109f26ffee"] ?? $this->getContext($context, "__internal_0ac9dd3cda87101b0c90c264605df2b325562ab5b9365944d19875109f26ffee")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0d35ce2c50deac5a613bb3a6b22214a70a60ae7b183b926671bc88264839d478->leave($__internal_0d35ce2c50deac5a613bb3a6b22214a70a60ae7b183b926671bc88264839d478_prof);

        
        $__internal_411adbdcca744689c011af289f463e8e9256d0590875a7a9d72847fcb40f7e5e->leave($__internal_411adbdcca744689c011af289f463e8e9256d0590875a7a9d72847fcb40f7e5e_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_3cc6336c363d65cdbbcfb163288157bbf7cf3860d50723cd6dd200f255941b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc6336c363d65cdbbcfb163288157bbf7cf3860d50723cd6dd200f255941b0f->enter($__internal_3cc6336c363d65cdbbcfb163288157bbf7cf3860d50723cd6dd200f255941b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_43f6c993046ff3a0d6184c3d30c154580d07ac376fcae746f59b9a81c8494a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f6c993046ff3a0d6184c3d30c154580d07ac376fcae746f59b9a81c8494a22->enter($__internal_43f6c993046ff3a0d6184c3d30c154580d07ac376fcae746f59b9a81c8494a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_43f6c993046ff3a0d6184c3d30c154580d07ac376fcae746f59b9a81c8494a22->leave($__internal_43f6c993046ff3a0d6184c3d30c154580d07ac376fcae746f59b9a81c8494a22_prof);

        
        $__internal_3cc6336c363d65cdbbcfb163288157bbf7cf3860d50723cd6dd200f255941b0f->leave($__internal_3cc6336c363d65cdbbcfb163288157bbf7cf3860d50723cd6dd200f255941b0f_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_8a747f7ebe156e5a464a90fa50a907fa80eebcff9dfb19ed223a09a418d1af0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a747f7ebe156e5a464a90fa50a907fa80eebcff9dfb19ed223a09a418d1af0a->enter($__internal_8a747f7ebe156e5a464a90fa50a907fa80eebcff9dfb19ed223a09a418d1af0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_4593e79e05e6b20c1979251d88d4ae7da2ba3c6001928c8cc3289068b02ae9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4593e79e05e6b20c1979251d88d4ae7da2ba3c6001928c8cc3289068b02ae9ef->enter($__internal_4593e79e05e6b20c1979251d88d4ae7da2ba3c6001928c8cc3289068b02ae9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_4593e79e05e6b20c1979251d88d4ae7da2ba3c6001928c8cc3289068b02ae9ef->leave($__internal_4593e79e05e6b20c1979251d88d4ae7da2ba3c6001928c8cc3289068b02ae9ef_prof);

        
        $__internal_8a747f7ebe156e5a464a90fa50a907fa80eebcff9dfb19ed223a09a418d1af0a->leave($__internal_8a747f7ebe156e5a464a90fa50a907fa80eebcff9dfb19ed223a09a418d1af0a_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_74d2387f69e4fcdbd985023449110d47b31a5b6de13d079125f61c74c1a0092d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d2387f69e4fcdbd985023449110d47b31a5b6de13d079125f61c74c1a0092d->enter($__internal_74d2387f69e4fcdbd985023449110d47b31a5b6de13d079125f61c74c1a0092d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_07d37305877a5a2c71fdd66916f08118f59b36939631e75574b4fa2358a7d975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d37305877a5a2c71fdd66916f08118f59b36939631e75574b4fa2358a7d975->enter($__internal_07d37305877a5a2c71fdd66916f08118f59b36939631e75574b4fa2358a7d975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_07d37305877a5a2c71fdd66916f08118f59b36939631e75574b4fa2358a7d975->leave($__internal_07d37305877a5a2c71fdd66916f08118f59b36939631e75574b4fa2358a7d975_prof);

        
        $__internal_74d2387f69e4fcdbd985023449110d47b31a5b6de13d079125f61c74c1a0092d->leave($__internal_74d2387f69e4fcdbd985023449110d47b31a5b6de13d079125f61c74c1a0092d_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_5e190575b1da5676a1e83db51d55593fb7807bd39648ca75473f4ffcc055cdf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e190575b1da5676a1e83db51d55593fb7807bd39648ca75473f4ffcc055cdf1->enter($__internal_5e190575b1da5676a1e83db51d55593fb7807bd39648ca75473f4ffcc055cdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_d506444a1bcf3aeb62e4e7317f6fe1db90e800ea426421a64cbd58b4f848bc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d506444a1bcf3aeb62e4e7317f6fe1db90e800ea426421a64cbd58b4f848bc4b->enter($__internal_d506444a1bcf3aeb62e4e7317f6fe1db90e800ea426421a64cbd58b4f848bc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_d506444a1bcf3aeb62e4e7317f6fe1db90e800ea426421a64cbd58b4f848bc4b->leave($__internal_d506444a1bcf3aeb62e4e7317f6fe1db90e800ea426421a64cbd58b4f848bc4b_prof);

        
        $__internal_5e190575b1da5676a1e83db51d55593fb7807bd39648ca75473f4ffcc055cdf1->leave($__internal_5e190575b1da5676a1e83db51d55593fb7807bd39648ca75473f4ffcc055cdf1_prof);

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
