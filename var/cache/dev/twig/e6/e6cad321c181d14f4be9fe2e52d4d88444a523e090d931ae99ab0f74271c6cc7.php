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
        $__internal_ae584fc92208e229fcd594a4718266adfcb4f8921caf14ec51a37baa889a3d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae584fc92208e229fcd594a4718266adfcb4f8921caf14ec51a37baa889a3d2f->enter($__internal_ae584fc92208e229fcd594a4718266adfcb4f8921caf14ec51a37baa889a3d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_f15c69f6d2a3bb3ba8ca4e37fd0b60295c54c54bf2a1debf7f4562e707f6e75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15c69f6d2a3bb3ba8ca4e37fd0b60295c54c54bf2a1debf7f4562e707f6e75c->enter($__internal_f15c69f6d2a3bb3ba8ca4e37fd0b60295c54c54bf2a1debf7f4562e707f6e75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_f884544728fb48a0954ff48741ca819a155c6cf5a5048e16406ebd2f6f58b671"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_f884544728fb48a0954ff48741ca819a155c6cf5a5048e16406ebd2f6f58b671"] ?? $this->getContext($context, "__internal_f884544728fb48a0954ff48741ca819a155c6cf5a5048e16406ebd2f6f58b671"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_f884544728fb48a0954ff48741ca819a155c6cf5a5048e16406ebd2f6f58b671"] ?? $this->getContext($context, "__internal_f884544728fb48a0954ff48741ca819a155c6cf5a5048e16406ebd2f6f58b671"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae584fc92208e229fcd594a4718266adfcb4f8921caf14ec51a37baa889a3d2f->leave($__internal_ae584fc92208e229fcd594a4718266adfcb4f8921caf14ec51a37baa889a3d2f_prof);

        
        $__internal_f15c69f6d2a3bb3ba8ca4e37fd0b60295c54c54bf2a1debf7f4562e707f6e75c->leave($__internal_f15c69f6d2a3bb3ba8ca4e37fd0b60295c54c54bf2a1debf7f4562e707f6e75c_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f05d6e1ef5e1fa2d35ad8e7bce2094419b9cb76e3749f9fe4685d335530f2796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05d6e1ef5e1fa2d35ad8e7bce2094419b9cb76e3749f9fe4685d335530f2796->enter($__internal_f05d6e1ef5e1fa2d35ad8e7bce2094419b9cb76e3749f9fe4685d335530f2796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2fdf88fea381bde76336bffa96a22b3cf6e6fb1d0ca269a4632ad1aaaee50b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdf88fea381bde76336bffa96a22b3cf6e6fb1d0ca269a4632ad1aaaee50b39->enter($__internal_2fdf88fea381bde76336bffa96a22b3cf6e6fb1d0ca269a4632ad1aaaee50b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_2fdf88fea381bde76336bffa96a22b3cf6e6fb1d0ca269a4632ad1aaaee50b39->leave($__internal_2fdf88fea381bde76336bffa96a22b3cf6e6fb1d0ca269a4632ad1aaaee50b39_prof);

        
        $__internal_f05d6e1ef5e1fa2d35ad8e7bce2094419b9cb76e3749f9fe4685d335530f2796->leave($__internal_f05d6e1ef5e1fa2d35ad8e7bce2094419b9cb76e3749f9fe4685d335530f2796_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a76dcfaae25c454414c91b35c65d7b6fa46a86d6e02fdd2ef77591ff49d2e931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76dcfaae25c454414c91b35c65d7b6fa46a86d6e02fdd2ef77591ff49d2e931->enter($__internal_a76dcfaae25c454414c91b35c65d7b6fa46a86d6e02fdd2ef77591ff49d2e931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_0f9c10af29b2e159c5d5275d71cfaf2c27f16891553eb0ca0634baa54088246d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9c10af29b2e159c5d5275d71cfaf2c27f16891553eb0ca0634baa54088246d->enter($__internal_0f9c10af29b2e159c5d5275d71cfaf2c27f16891553eb0ca0634baa54088246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_0f9c10af29b2e159c5d5275d71cfaf2c27f16891553eb0ca0634baa54088246d->leave($__internal_0f9c10af29b2e159c5d5275d71cfaf2c27f16891553eb0ca0634baa54088246d_prof);

        
        $__internal_a76dcfaae25c454414c91b35c65d7b6fa46a86d6e02fdd2ef77591ff49d2e931->leave($__internal_a76dcfaae25c454414c91b35c65d7b6fa46a86d6e02fdd2ef77591ff49d2e931_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_63f0c118d7b07175c4eb9b89d6e464496fb18713c56edee7f8df66e5b9981f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f0c118d7b07175c4eb9b89d6e464496fb18713c56edee7f8df66e5b9981f93->enter($__internal_63f0c118d7b07175c4eb9b89d6e464496fb18713c56edee7f8df66e5b9981f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_fe194986e906b047195f95bd2f5d3866c0bd062c796d9867e86be013077f1169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe194986e906b047195f95bd2f5d3866c0bd062c796d9867e86be013077f1169->enter($__internal_fe194986e906b047195f95bd2f5d3866c0bd062c796d9867e86be013077f1169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_f884544728fb48a0954ff48741ca819a155c6cf5a5048e16406ebd2f6f58b671"] ?? $this->getContext($context, "__internal_f884544728fb48a0954ff48741ca819a155c6cf5a5048e16406ebd2f6f58b671")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fe194986e906b047195f95bd2f5d3866c0bd062c796d9867e86be013077f1169->leave($__internal_fe194986e906b047195f95bd2f5d3866c0bd062c796d9867e86be013077f1169_prof);

        
        $__internal_63f0c118d7b07175c4eb9b89d6e464496fb18713c56edee7f8df66e5b9981f93->leave($__internal_63f0c118d7b07175c4eb9b89d6e464496fb18713c56edee7f8df66e5b9981f93_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_7680a520dd12a7f14eafcedb4a094f39a7b695ef92b755d64ed70510604c3f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7680a520dd12a7f14eafcedb4a094f39a7b695ef92b755d64ed70510604c3f88->enter($__internal_7680a520dd12a7f14eafcedb4a094f39a7b695ef92b755d64ed70510604c3f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_821564b727d0313ed79a276f187b6cff48e88f098701f52e8dc16bc837b3ccdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821564b727d0313ed79a276f187b6cff48e88f098701f52e8dc16bc837b3ccdd->enter($__internal_821564b727d0313ed79a276f187b6cff48e88f098701f52e8dc16bc837b3ccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_821564b727d0313ed79a276f187b6cff48e88f098701f52e8dc16bc837b3ccdd->leave($__internal_821564b727d0313ed79a276f187b6cff48e88f098701f52e8dc16bc837b3ccdd_prof);

        
        $__internal_7680a520dd12a7f14eafcedb4a094f39a7b695ef92b755d64ed70510604c3f88->leave($__internal_7680a520dd12a7f14eafcedb4a094f39a7b695ef92b755d64ed70510604c3f88_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_a444f898565cdb95722831b4b89a4146682727853e9430843caaf49f416be207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a444f898565cdb95722831b4b89a4146682727853e9430843caaf49f416be207->enter($__internal_a444f898565cdb95722831b4b89a4146682727853e9430843caaf49f416be207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_155559d8144bf103d15a08e68ff7ddd1e29f24bff5e0f9b35c5d36e157e3c10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155559d8144bf103d15a08e68ff7ddd1e29f24bff5e0f9b35c5d36e157e3c10c->enter($__internal_155559d8144bf103d15a08e68ff7ddd1e29f24bff5e0f9b35c5d36e157e3c10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_155559d8144bf103d15a08e68ff7ddd1e29f24bff5e0f9b35c5d36e157e3c10c->leave($__internal_155559d8144bf103d15a08e68ff7ddd1e29f24bff5e0f9b35c5d36e157e3c10c_prof);

        
        $__internal_a444f898565cdb95722831b4b89a4146682727853e9430843caaf49f416be207->leave($__internal_a444f898565cdb95722831b4b89a4146682727853e9430843caaf49f416be207_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_d8ac075f63644b31248733b135383d5a114c79c5b964c15eca5852853bd72fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ac075f63644b31248733b135383d5a114c79c5b964c15eca5852853bd72fce->enter($__internal_d8ac075f63644b31248733b135383d5a114c79c5b964c15eca5852853bd72fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_2fa74ea273c39525db5c5f192a035789256e8157ca2a4e0c097668b704b89d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa74ea273c39525db5c5f192a035789256e8157ca2a4e0c097668b704b89d49->enter($__internal_2fa74ea273c39525db5c5f192a035789256e8157ca2a4e0c097668b704b89d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_2fa74ea273c39525db5c5f192a035789256e8157ca2a4e0c097668b704b89d49->leave($__internal_2fa74ea273c39525db5c5f192a035789256e8157ca2a4e0c097668b704b89d49_prof);

        
        $__internal_d8ac075f63644b31248733b135383d5a114c79c5b964c15eca5852853bd72fce->leave($__internal_d8ac075f63644b31248733b135383d5a114c79c5b964c15eca5852853bd72fce_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_9f8ae92c2293436df22460ddf4e1e19b8c730c83326d86daeea5e4e7e4b53d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8ae92c2293436df22460ddf4e1e19b8c730c83326d86daeea5e4e7e4b53d67->enter($__internal_9f8ae92c2293436df22460ddf4e1e19b8c730c83326d86daeea5e4e7e4b53d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_6709e8f1a7fb23b42d09b92874b0f56db525afcc88716a56d02d69024fc16ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6709e8f1a7fb23b42d09b92874b0f56db525afcc88716a56d02d69024fc16ed1->enter($__internal_6709e8f1a7fb23b42d09b92874b0f56db525afcc88716a56d02d69024fc16ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_6709e8f1a7fb23b42d09b92874b0f56db525afcc88716a56d02d69024fc16ed1->leave($__internal_6709e8f1a7fb23b42d09b92874b0f56db525afcc88716a56d02d69024fc16ed1_prof);

        
        $__internal_9f8ae92c2293436df22460ddf4e1e19b8c730c83326d86daeea5e4e7e4b53d67->leave($__internal_9f8ae92c2293436df22460ddf4e1e19b8c730c83326d86daeea5e4e7e4b53d67_prof);

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
