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
        $__internal_11f88ce2d09c17216baa1291eb1088be4dae39ad9a9019bd13606f39af2ae1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f88ce2d09c17216baa1291eb1088be4dae39ad9a9019bd13606f39af2ae1fa->enter($__internal_11f88ce2d09c17216baa1291eb1088be4dae39ad9a9019bd13606f39af2ae1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_6514e21ea7ef1f76c66f16ac88aafcfc47b3142f042476e0108ffbb3cf0ac0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6514e21ea7ef1f76c66f16ac88aafcfc47b3142f042476e0108ffbb3cf0ac0e8->enter($__internal_6514e21ea7ef1f76c66f16ac88aafcfc47b3142f042476e0108ffbb3cf0ac0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_c2237ed468b9736d327c76476da310fa5d3d89d908d0968d07eb2d8e60975ee1"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_c2237ed468b9736d327c76476da310fa5d3d89d908d0968d07eb2d8e60975ee1"] ?? $this->getContext($context, "__internal_c2237ed468b9736d327c76476da310fa5d3d89d908d0968d07eb2d8e60975ee1"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_c2237ed468b9736d327c76476da310fa5d3d89d908d0968d07eb2d8e60975ee1"] ?? $this->getContext($context, "__internal_c2237ed468b9736d327c76476da310fa5d3d89d908d0968d07eb2d8e60975ee1"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f88ce2d09c17216baa1291eb1088be4dae39ad9a9019bd13606f39af2ae1fa->leave($__internal_11f88ce2d09c17216baa1291eb1088be4dae39ad9a9019bd13606f39af2ae1fa_prof);

        
        $__internal_6514e21ea7ef1f76c66f16ac88aafcfc47b3142f042476e0108ffbb3cf0ac0e8->leave($__internal_6514e21ea7ef1f76c66f16ac88aafcfc47b3142f042476e0108ffbb3cf0ac0e8_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_50c7e1fd21cb9106d32da7ed948a91f926d1f372f396850b035aa70103ff6f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c7e1fd21cb9106d32da7ed948a91f926d1f372f396850b035aa70103ff6f9c->enter($__internal_50c7e1fd21cb9106d32da7ed948a91f926d1f372f396850b035aa70103ff6f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1e947119cd15aa4a2a0e39df90c956930ec0b111aae3b947efc0d8920b500957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e947119cd15aa4a2a0e39df90c956930ec0b111aae3b947efc0d8920b500957->enter($__internal_1e947119cd15aa4a2a0e39df90c956930ec0b111aae3b947efc0d8920b500957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_1e947119cd15aa4a2a0e39df90c956930ec0b111aae3b947efc0d8920b500957->leave($__internal_1e947119cd15aa4a2a0e39df90c956930ec0b111aae3b947efc0d8920b500957_prof);

        
        $__internal_50c7e1fd21cb9106d32da7ed948a91f926d1f372f396850b035aa70103ff6f9c->leave($__internal_50c7e1fd21cb9106d32da7ed948a91f926d1f372f396850b035aa70103ff6f9c_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6361478dbbac0c439eda93dfe6c17259926119ece30111e8d8cb76363e21bd62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6361478dbbac0c439eda93dfe6c17259926119ece30111e8d8cb76363e21bd62->enter($__internal_6361478dbbac0c439eda93dfe6c17259926119ece30111e8d8cb76363e21bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_561407f4af1d23d74f7fd158686b01368ed50ce15768fcf33c58e25713b8a350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561407f4af1d23d74f7fd158686b01368ed50ce15768fcf33c58e25713b8a350->enter($__internal_561407f4af1d23d74f7fd158686b01368ed50ce15768fcf33c58e25713b8a350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_561407f4af1d23d74f7fd158686b01368ed50ce15768fcf33c58e25713b8a350->leave($__internal_561407f4af1d23d74f7fd158686b01368ed50ce15768fcf33c58e25713b8a350_prof);

        
        $__internal_6361478dbbac0c439eda93dfe6c17259926119ece30111e8d8cb76363e21bd62->leave($__internal_6361478dbbac0c439eda93dfe6c17259926119ece30111e8d8cb76363e21bd62_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4badc99dfbbf9eb040d71024d20778ff35ee21f8acb0b2145ca8d72f616991c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4badc99dfbbf9eb040d71024d20778ff35ee21f8acb0b2145ca8d72f616991c7->enter($__internal_4badc99dfbbf9eb040d71024d20778ff35ee21f8acb0b2145ca8d72f616991c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_550f5b3e03bb9ecaf32f08c4fac0f2acbb9412fdfdb68d064a97fad24402d67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550f5b3e03bb9ecaf32f08c4fac0f2acbb9412fdfdb68d064a97fad24402d67c->enter($__internal_550f5b3e03bb9ecaf32f08c4fac0f2acbb9412fdfdb68d064a97fad24402d67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_c2237ed468b9736d327c76476da310fa5d3d89d908d0968d07eb2d8e60975ee1"] ?? $this->getContext($context, "__internal_c2237ed468b9736d327c76476da310fa5d3d89d908d0968d07eb2d8e60975ee1")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_550f5b3e03bb9ecaf32f08c4fac0f2acbb9412fdfdb68d064a97fad24402d67c->leave($__internal_550f5b3e03bb9ecaf32f08c4fac0f2acbb9412fdfdb68d064a97fad24402d67c_prof);

        
        $__internal_4badc99dfbbf9eb040d71024d20778ff35ee21f8acb0b2145ca8d72f616991c7->leave($__internal_4badc99dfbbf9eb040d71024d20778ff35ee21f8acb0b2145ca8d72f616991c7_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_0802400f3ba44a433012eb53d4fab09603f5ce2bea6b2d1220d941d93273600b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0802400f3ba44a433012eb53d4fab09603f5ce2bea6b2d1220d941d93273600b->enter($__internal_0802400f3ba44a433012eb53d4fab09603f5ce2bea6b2d1220d941d93273600b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8899c63ce71cc8b11aae00b4a8b473ff0755e070958dfba5ff85aa5173776bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8899c63ce71cc8b11aae00b4a8b473ff0755e070958dfba5ff85aa5173776bd0->enter($__internal_8899c63ce71cc8b11aae00b4a8b473ff0755e070958dfba5ff85aa5173776bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_8899c63ce71cc8b11aae00b4a8b473ff0755e070958dfba5ff85aa5173776bd0->leave($__internal_8899c63ce71cc8b11aae00b4a8b473ff0755e070958dfba5ff85aa5173776bd0_prof);

        
        $__internal_0802400f3ba44a433012eb53d4fab09603f5ce2bea6b2d1220d941d93273600b->leave($__internal_0802400f3ba44a433012eb53d4fab09603f5ce2bea6b2d1220d941d93273600b_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_fef0e03e97473735e794822ddf183844d116b8585545b34d11b8190c5345c357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef0e03e97473735e794822ddf183844d116b8585545b34d11b8190c5345c357->enter($__internal_fef0e03e97473735e794822ddf183844d116b8585545b34d11b8190c5345c357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_6744d305a7cc655a3d847f1f741a6a302c31a20168ba3ec6e4a686ae3ccdcfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6744d305a7cc655a3d847f1f741a6a302c31a20168ba3ec6e4a686ae3ccdcfcc->enter($__internal_6744d305a7cc655a3d847f1f741a6a302c31a20168ba3ec6e4a686ae3ccdcfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_6744d305a7cc655a3d847f1f741a6a302c31a20168ba3ec6e4a686ae3ccdcfcc->leave($__internal_6744d305a7cc655a3d847f1f741a6a302c31a20168ba3ec6e4a686ae3ccdcfcc_prof);

        
        $__internal_fef0e03e97473735e794822ddf183844d116b8585545b34d11b8190c5345c357->leave($__internal_fef0e03e97473735e794822ddf183844d116b8585545b34d11b8190c5345c357_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_4dd5a5a5237a80d06174433a4d0de9ccb2d876b60ce8c09e34a7b164703c2c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd5a5a5237a80d06174433a4d0de9ccb2d876b60ce8c09e34a7b164703c2c28->enter($__internal_4dd5a5a5237a80d06174433a4d0de9ccb2d876b60ce8c09e34a7b164703c2c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_5713dd9d2500daaaa5e6965e61f940cbd2192dba48d21f81bff8e3440eba4b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5713dd9d2500daaaa5e6965e61f940cbd2192dba48d21f81bff8e3440eba4b52->enter($__internal_5713dd9d2500daaaa5e6965e61f940cbd2192dba48d21f81bff8e3440eba4b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_5713dd9d2500daaaa5e6965e61f940cbd2192dba48d21f81bff8e3440eba4b52->leave($__internal_5713dd9d2500daaaa5e6965e61f940cbd2192dba48d21f81bff8e3440eba4b52_prof);

        
        $__internal_4dd5a5a5237a80d06174433a4d0de9ccb2d876b60ce8c09e34a7b164703c2c28->leave($__internal_4dd5a5a5237a80d06174433a4d0de9ccb2d876b60ce8c09e34a7b164703c2c28_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_de8a57cad378b5166f486123b6912f026d2a601b124def21085482a4a5e4d85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8a57cad378b5166f486123b6912f026d2a601b124def21085482a4a5e4d85e->enter($__internal_de8a57cad378b5166f486123b6912f026d2a601b124def21085482a4a5e4d85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_ea0473a6a15b14fecbc5a2ffe4fb46cb08b6a44e3e3e3ad6e3ba0b722537d79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0473a6a15b14fecbc5a2ffe4fb46cb08b6a44e3e3e3ad6e3ba0b722537d79f->enter($__internal_ea0473a6a15b14fecbc5a2ffe4fb46cb08b6a44e3e3e3ad6e3ba0b722537d79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_ea0473a6a15b14fecbc5a2ffe4fb46cb08b6a44e3e3e3ad6e3ba0b722537d79f->leave($__internal_ea0473a6a15b14fecbc5a2ffe4fb46cb08b6a44e3e3e3ad6e3ba0b722537d79f_prof);

        
        $__internal_de8a57cad378b5166f486123b6912f026d2a601b124def21085482a4a5e4d85e->leave($__internal_de8a57cad378b5166f486123b6912f026d2a601b124def21085482a4a5e4d85e_prof);

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
