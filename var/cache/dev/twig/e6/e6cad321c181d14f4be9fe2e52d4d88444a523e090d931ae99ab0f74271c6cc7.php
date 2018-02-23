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
        $__internal_43d7a2101daddf76687feaa9cc2e18551eded007bf2676b26d2bac7df14972cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d7a2101daddf76687feaa9cc2e18551eded007bf2676b26d2bac7df14972cc->enter($__internal_43d7a2101daddf76687feaa9cc2e18551eded007bf2676b26d2bac7df14972cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_74d3edb9db59261c6f7c33ddb24a69ae800b53631d4d71cbb688d5522bbae9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d3edb9db59261c6f7c33ddb24a69ae800b53631d4d71cbb688d5522bbae9dc->enter($__internal_74d3edb9db59261c6f7c33ddb24a69ae800b53631d4d71cbb688d5522bbae9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_ba2fa3ea073fe014488cde17dc77529d276080d037a361350a2bb801bd16e76f"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_ba2fa3ea073fe014488cde17dc77529d276080d037a361350a2bb801bd16e76f"] ?? $this->getContext($context, "__internal_ba2fa3ea073fe014488cde17dc77529d276080d037a361350a2bb801bd16e76f"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_ba2fa3ea073fe014488cde17dc77529d276080d037a361350a2bb801bd16e76f"] ?? $this->getContext($context, "__internal_ba2fa3ea073fe014488cde17dc77529d276080d037a361350a2bb801bd16e76f"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d7a2101daddf76687feaa9cc2e18551eded007bf2676b26d2bac7df14972cc->leave($__internal_43d7a2101daddf76687feaa9cc2e18551eded007bf2676b26d2bac7df14972cc_prof);

        
        $__internal_74d3edb9db59261c6f7c33ddb24a69ae800b53631d4d71cbb688d5522bbae9dc->leave($__internal_74d3edb9db59261c6f7c33ddb24a69ae800b53631d4d71cbb688d5522bbae9dc_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_55bfa097934b29202f011eceaf0afd237aaf4aa68a5bb905a271f815c13f3521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bfa097934b29202f011eceaf0afd237aaf4aa68a5bb905a271f815c13f3521->enter($__internal_55bfa097934b29202f011eceaf0afd237aaf4aa68a5bb905a271f815c13f3521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_a6b594247c4c41556e3e44883943d49c2cbfec4232571c1dc34e7406b0bec506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b594247c4c41556e3e44883943d49c2cbfec4232571c1dc34e7406b0bec506->enter($__internal_a6b594247c4c41556e3e44883943d49c2cbfec4232571c1dc34e7406b0bec506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_a6b594247c4c41556e3e44883943d49c2cbfec4232571c1dc34e7406b0bec506->leave($__internal_a6b594247c4c41556e3e44883943d49c2cbfec4232571c1dc34e7406b0bec506_prof);

        
        $__internal_55bfa097934b29202f011eceaf0afd237aaf4aa68a5bb905a271f815c13f3521->leave($__internal_55bfa097934b29202f011eceaf0afd237aaf4aa68a5bb905a271f815c13f3521_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_406a06e0add46bf4df083b026d236089a4c80964dfb3000f9e216b28604cd4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406a06e0add46bf4df083b026d236089a4c80964dfb3000f9e216b28604cd4c0->enter($__internal_406a06e0add46bf4df083b026d236089a4c80964dfb3000f9e216b28604cd4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_0417d9f76e1375eb1b09b479dcdd25c905abdf8ef6313e4e607ae2a368dcc99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0417d9f76e1375eb1b09b479dcdd25c905abdf8ef6313e4e607ae2a368dcc99e->enter($__internal_0417d9f76e1375eb1b09b479dcdd25c905abdf8ef6313e4e607ae2a368dcc99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_0417d9f76e1375eb1b09b479dcdd25c905abdf8ef6313e4e607ae2a368dcc99e->leave($__internal_0417d9f76e1375eb1b09b479dcdd25c905abdf8ef6313e4e607ae2a368dcc99e_prof);

        
        $__internal_406a06e0add46bf4df083b026d236089a4c80964dfb3000f9e216b28604cd4c0->leave($__internal_406a06e0add46bf4df083b026d236089a4c80964dfb3000f9e216b28604cd4c0_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_67b624473cfa1f07613b97f49b2ea1c3cfc3c054953d57b1e5c915d1987e0c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b624473cfa1f07613b97f49b2ea1c3cfc3c054953d57b1e5c915d1987e0c82->enter($__internal_67b624473cfa1f07613b97f49b2ea1c3cfc3c054953d57b1e5c915d1987e0c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_84feab7a997b9bfd13ee9f9a3fb7d044f5417f07eb31f8463716232b8c10ee67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84feab7a997b9bfd13ee9f9a3fb7d044f5417f07eb31f8463716232b8c10ee67->enter($__internal_84feab7a997b9bfd13ee9f9a3fb7d044f5417f07eb31f8463716232b8c10ee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_ba2fa3ea073fe014488cde17dc77529d276080d037a361350a2bb801bd16e76f"] ?? $this->getContext($context, "__internal_ba2fa3ea073fe014488cde17dc77529d276080d037a361350a2bb801bd16e76f")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_84feab7a997b9bfd13ee9f9a3fb7d044f5417f07eb31f8463716232b8c10ee67->leave($__internal_84feab7a997b9bfd13ee9f9a3fb7d044f5417f07eb31f8463716232b8c10ee67_prof);

        
        $__internal_67b624473cfa1f07613b97f49b2ea1c3cfc3c054953d57b1e5c915d1987e0c82->leave($__internal_67b624473cfa1f07613b97f49b2ea1c3cfc3c054953d57b1e5c915d1987e0c82_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_54e04ad320107abd919bee6219c9fded0eafc0877829950d76318a2ab4370079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e04ad320107abd919bee6219c9fded0eafc0877829950d76318a2ab4370079->enter($__internal_54e04ad320107abd919bee6219c9fded0eafc0877829950d76318a2ab4370079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e8f730b8f255d25ebf1b131e5512847ab0922834dfceb374e6f16565bdc50b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f730b8f255d25ebf1b131e5512847ab0922834dfceb374e6f16565bdc50b0f->enter($__internal_e8f730b8f255d25ebf1b131e5512847ab0922834dfceb374e6f16565bdc50b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_e8f730b8f255d25ebf1b131e5512847ab0922834dfceb374e6f16565bdc50b0f->leave($__internal_e8f730b8f255d25ebf1b131e5512847ab0922834dfceb374e6f16565bdc50b0f_prof);

        
        $__internal_54e04ad320107abd919bee6219c9fded0eafc0877829950d76318a2ab4370079->leave($__internal_54e04ad320107abd919bee6219c9fded0eafc0877829950d76318a2ab4370079_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_d6166ec922e5454841059d8e360816287f957a97e8c329113a9a43deb586c306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6166ec922e5454841059d8e360816287f957a97e8c329113a9a43deb586c306->enter($__internal_d6166ec922e5454841059d8e360816287f957a97e8c329113a9a43deb586c306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_c09691dc434c3ebd1400616bcf1f17fb1681efe49e4db9675068045adb940ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09691dc434c3ebd1400616bcf1f17fb1681efe49e4db9675068045adb940ee6->enter($__internal_c09691dc434c3ebd1400616bcf1f17fb1681efe49e4db9675068045adb940ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_c09691dc434c3ebd1400616bcf1f17fb1681efe49e4db9675068045adb940ee6->leave($__internal_c09691dc434c3ebd1400616bcf1f17fb1681efe49e4db9675068045adb940ee6_prof);

        
        $__internal_d6166ec922e5454841059d8e360816287f957a97e8c329113a9a43deb586c306->leave($__internal_d6166ec922e5454841059d8e360816287f957a97e8c329113a9a43deb586c306_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_4654d7813680ed3dae15b7a535a383a7ca1b012dcf29bf6fb609414918e34657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4654d7813680ed3dae15b7a535a383a7ca1b012dcf29bf6fb609414918e34657->enter($__internal_4654d7813680ed3dae15b7a535a383a7ca1b012dcf29bf6fb609414918e34657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_ce615324120e20d052b3109aee8b74f666e31b79f6cb6cbce9a8c5b225943678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce615324120e20d052b3109aee8b74f666e31b79f6cb6cbce9a8c5b225943678->enter($__internal_ce615324120e20d052b3109aee8b74f666e31b79f6cb6cbce9a8c5b225943678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_ce615324120e20d052b3109aee8b74f666e31b79f6cb6cbce9a8c5b225943678->leave($__internal_ce615324120e20d052b3109aee8b74f666e31b79f6cb6cbce9a8c5b225943678_prof);

        
        $__internal_4654d7813680ed3dae15b7a535a383a7ca1b012dcf29bf6fb609414918e34657->leave($__internal_4654d7813680ed3dae15b7a535a383a7ca1b012dcf29bf6fb609414918e34657_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d50e55effda5187fcdb50ef07d57af891fd33cf850eb30105b324e5f19009e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50e55effda5187fcdb50ef07d57af891fd33cf850eb30105b324e5f19009e49->enter($__internal_d50e55effda5187fcdb50ef07d57af891fd33cf850eb30105b324e5f19009e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_3147b2e9ce20195491aa8c0d3eaf76214a9d458dfc044317db0252058fe4333e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3147b2e9ce20195491aa8c0d3eaf76214a9d458dfc044317db0252058fe4333e->enter($__internal_3147b2e9ce20195491aa8c0d3eaf76214a9d458dfc044317db0252058fe4333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_3147b2e9ce20195491aa8c0d3eaf76214a9d458dfc044317db0252058fe4333e->leave($__internal_3147b2e9ce20195491aa8c0d3eaf76214a9d458dfc044317db0252058fe4333e_prof);

        
        $__internal_d50e55effda5187fcdb50ef07d57af891fd33cf850eb30105b324e5f19009e49->leave($__internal_d50e55effda5187fcdb50ef07d57af891fd33cf850eb30105b324e5f19009e49_prof);

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
