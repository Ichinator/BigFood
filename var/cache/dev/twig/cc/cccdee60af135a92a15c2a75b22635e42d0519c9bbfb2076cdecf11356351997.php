<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_0ac5f116d875eef33aafa10c53592ea85d9d9dc00082bff33b8f235fc7eef91c extends Twig_Template
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
        $__internal_5b219677fa4a7855145783deab3bbb859082167487e579d9410c6c555c39acf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b219677fa4a7855145783deab3bbb859082167487e579d9410c6c555c39acf2->enter($__internal_5b219677fa4a7855145783deab3bbb859082167487e579d9410c6c555c39acf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_87330e2659999f1442d875415e431448e11078796d381fddc695d0cbd2eb5fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87330e2659999f1442d875415e431448e11078796d381fddc695d0cbd2eb5fc0->enter($__internal_87330e2659999f1442d875415e431448e11078796d381fddc695d0cbd2eb5fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_3ecb81cdac464ff34741b3fd07f6139ab052b31086d3049c1cd8f87b9815984a"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_3ecb81cdac464ff34741b3fd07f6139ab052b31086d3049c1cd8f87b9815984a"] ?? $this->getContext($context, "__internal_3ecb81cdac464ff34741b3fd07f6139ab052b31086d3049c1cd8f87b9815984a"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_3ecb81cdac464ff34741b3fd07f6139ab052b31086d3049c1cd8f87b9815984a"] ?? $this->getContext($context, "__internal_3ecb81cdac464ff34741b3fd07f6139ab052b31086d3049c1cd8f87b9815984a"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b219677fa4a7855145783deab3bbb859082167487e579d9410c6c555c39acf2->leave($__internal_5b219677fa4a7855145783deab3bbb859082167487e579d9410c6c555c39acf2_prof);

        
        $__internal_87330e2659999f1442d875415e431448e11078796d381fddc695d0cbd2eb5fc0->leave($__internal_87330e2659999f1442d875415e431448e11078796d381fddc695d0cbd2eb5fc0_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d058aeb710b4e343321487d8e126defc902fde898d7a5c2ed523f3b35d365268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d058aeb710b4e343321487d8e126defc902fde898d7a5c2ed523f3b35d365268->enter($__internal_d058aeb710b4e343321487d8e126defc902fde898d7a5c2ed523f3b35d365268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_3225a7b8893f86f993023636d91cbd859643d7ae9c163b11da0e3d22468aa04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3225a7b8893f86f993023636d91cbd859643d7ae9c163b11da0e3d22468aa04f->enter($__internal_3225a7b8893f86f993023636d91cbd859643d7ae9c163b11da0e3d22468aa04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_3225a7b8893f86f993023636d91cbd859643d7ae9c163b11da0e3d22468aa04f->leave($__internal_3225a7b8893f86f993023636d91cbd859643d7ae9c163b11da0e3d22468aa04f_prof);

        
        $__internal_d058aeb710b4e343321487d8e126defc902fde898d7a5c2ed523f3b35d365268->leave($__internal_d058aeb710b4e343321487d8e126defc902fde898d7a5c2ed523f3b35d365268_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fd485c60af9b4822eec647b03c612d5fc6479fac83d07fa35c92f1abaed6ec64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd485c60af9b4822eec647b03c612d5fc6479fac83d07fa35c92f1abaed6ec64->enter($__internal_fd485c60af9b4822eec647b03c612d5fc6479fac83d07fa35c92f1abaed6ec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_efaded66c8ddb694b7a42a8cb409fe6cc53bfbfef66ec68c4fd7704d2ce65cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaded66c8ddb694b7a42a8cb409fe6cc53bfbfef66ec68c4fd7704d2ce65cd4->enter($__internal_efaded66c8ddb694b7a42a8cb409fe6cc53bfbfef66ec68c4fd7704d2ce65cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_efaded66c8ddb694b7a42a8cb409fe6cc53bfbfef66ec68c4fd7704d2ce65cd4->leave($__internal_efaded66c8ddb694b7a42a8cb409fe6cc53bfbfef66ec68c4fd7704d2ce65cd4_prof);

        
        $__internal_fd485c60af9b4822eec647b03c612d5fc6479fac83d07fa35c92f1abaed6ec64->leave($__internal_fd485c60af9b4822eec647b03c612d5fc6479fac83d07fa35c92f1abaed6ec64_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_afdc895413668c98e945760d7f3fb394f0efbd1e926183a5bdf47035bdc57de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdc895413668c98e945760d7f3fb394f0efbd1e926183a5bdf47035bdc57de9->enter($__internal_afdc895413668c98e945760d7f3fb394f0efbd1e926183a5bdf47035bdc57de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_4389d2d9170f0a60dac3ee50b4c9ed7a3a0f782b2c181b9fe3f46a9f2cb695d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4389d2d9170f0a60dac3ee50b4c9ed7a3a0f782b2c181b9fe3f46a9f2cb695d1->enter($__internal_4389d2d9170f0a60dac3ee50b4c9ed7a3a0f782b2c181b9fe3f46a9f2cb695d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_3ecb81cdac464ff34741b3fd07f6139ab052b31086d3049c1cd8f87b9815984a"] ?? $this->getContext($context, "__internal_3ecb81cdac464ff34741b3fd07f6139ab052b31086d3049c1cd8f87b9815984a")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4389d2d9170f0a60dac3ee50b4c9ed7a3a0f782b2c181b9fe3f46a9f2cb695d1->leave($__internal_4389d2d9170f0a60dac3ee50b4c9ed7a3a0f782b2c181b9fe3f46a9f2cb695d1_prof);

        
        $__internal_afdc895413668c98e945760d7f3fb394f0efbd1e926183a5bdf47035bdc57de9->leave($__internal_afdc895413668c98e945760d7f3fb394f0efbd1e926183a5bdf47035bdc57de9_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_854eb6ff49095c938e1d3a69880dc85b7ee0e9e94c70e26bb82abda820dca59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854eb6ff49095c938e1d3a69880dc85b7ee0e9e94c70e26bb82abda820dca59c->enter($__internal_854eb6ff49095c938e1d3a69880dc85b7ee0e9e94c70e26bb82abda820dca59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f24d793d119c3b62b78e916d1087aa4ea190d9e78772810535d91e9742ea37ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24d793d119c3b62b78e916d1087aa4ea190d9e78772810535d91e9742ea37ee->enter($__internal_f24d793d119c3b62b78e916d1087aa4ea190d9e78772810535d91e9742ea37ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_f24d793d119c3b62b78e916d1087aa4ea190d9e78772810535d91e9742ea37ee->leave($__internal_f24d793d119c3b62b78e916d1087aa4ea190d9e78772810535d91e9742ea37ee_prof);

        
        $__internal_854eb6ff49095c938e1d3a69880dc85b7ee0e9e94c70e26bb82abda820dca59c->leave($__internal_854eb6ff49095c938e1d3a69880dc85b7ee0e9e94c70e26bb82abda820dca59c_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_25fc74ff0f29acd10b37c549ef75f00020b14b85ac1c7f8590f6087405a8d024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fc74ff0f29acd10b37c549ef75f00020b14b85ac1c7f8590f6087405a8d024->enter($__internal_25fc74ff0f29acd10b37c549ef75f00020b14b85ac1c7f8590f6087405a8d024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_b95a45dd405eed10e4c8608400c0dff014ca7fadb0748972b62206a592fde5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95a45dd405eed10e4c8608400c0dff014ca7fadb0748972b62206a592fde5d2->enter($__internal_b95a45dd405eed10e4c8608400c0dff014ca7fadb0748972b62206a592fde5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_b95a45dd405eed10e4c8608400c0dff014ca7fadb0748972b62206a592fde5d2->leave($__internal_b95a45dd405eed10e4c8608400c0dff014ca7fadb0748972b62206a592fde5d2_prof);

        
        $__internal_25fc74ff0f29acd10b37c549ef75f00020b14b85ac1c7f8590f6087405a8d024->leave($__internal_25fc74ff0f29acd10b37c549ef75f00020b14b85ac1c7f8590f6087405a8d024_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_3725fbb7f27542caaad05a1c7cec9ab51cbc1e131f0b6167cba8487522443697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3725fbb7f27542caaad05a1c7cec9ab51cbc1e131f0b6167cba8487522443697->enter($__internal_3725fbb7f27542caaad05a1c7cec9ab51cbc1e131f0b6167cba8487522443697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_e23aee72ef7581dad6d01dcc1483adbbcb2b41f3bc5beffd7825ff85192e3fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23aee72ef7581dad6d01dcc1483adbbcb2b41f3bc5beffd7825ff85192e3fb0->enter($__internal_e23aee72ef7581dad6d01dcc1483adbbcb2b41f3bc5beffd7825ff85192e3fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_e23aee72ef7581dad6d01dcc1483adbbcb2b41f3bc5beffd7825ff85192e3fb0->leave($__internal_e23aee72ef7581dad6d01dcc1483adbbcb2b41f3bc5beffd7825ff85192e3fb0_prof);

        
        $__internal_3725fbb7f27542caaad05a1c7cec9ab51cbc1e131f0b6167cba8487522443697->leave($__internal_3725fbb7f27542caaad05a1c7cec9ab51cbc1e131f0b6167cba8487522443697_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0227541d30e548c21ffb2e75e8e95f056c430ef7cb05ef12e8751f1efe1005fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0227541d30e548c21ffb2e75e8e95f056c430ef7cb05ef12e8751f1efe1005fb->enter($__internal_0227541d30e548c21ffb2e75e8e95f056c430ef7cb05ef12e8751f1efe1005fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_eb86b7cb39237aac800d895e35306d60dd2d5ca5e035a39b8f7ac4d1619f0afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb86b7cb39237aac800d895e35306d60dd2d5ca5e035a39b8f7ac4d1619f0afc->enter($__internal_eb86b7cb39237aac800d895e35306d60dd2d5ca5e035a39b8f7ac4d1619f0afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_eb86b7cb39237aac800d895e35306d60dd2d5ca5e035a39b8f7ac4d1619f0afc->leave($__internal_eb86b7cb39237aac800d895e35306d60dd2d5ca5e035a39b8f7ac4d1619f0afc_prof);

        
        $__internal_0227541d30e548c21ffb2e75e8e95f056c430ef7cb05ef12e8751f1efe1005fb->leave($__internal_0227541d30e548c21ffb2e75e8e95f056c430ef7cb05ef12e8751f1efe1005fb_prof);

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
