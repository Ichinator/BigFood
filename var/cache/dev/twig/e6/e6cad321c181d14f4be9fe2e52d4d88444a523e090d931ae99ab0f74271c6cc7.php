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
        $__internal_cb7ee6b0e3dc830aadd0e503db359d3dc9778d3194bc53ef976f1b190dbe6154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7ee6b0e3dc830aadd0e503db359d3dc9778d3194bc53ef976f1b190dbe6154->enter($__internal_cb7ee6b0e3dc830aadd0e503db359d3dc9778d3194bc53ef976f1b190dbe6154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_b583c6c4f7903fe271237e647f35de380e1e79866894172f0ba32013c5fa5819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b583c6c4f7903fe271237e647f35de380e1e79866894172f0ba32013c5fa5819->enter($__internal_b583c6c4f7903fe271237e647f35de380e1e79866894172f0ba32013c5fa5819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_a15a32610e0e2ecb54ff8664e8e0c0752be0877236dba605d8cc7e81a730c573"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_a15a32610e0e2ecb54ff8664e8e0c0752be0877236dba605d8cc7e81a730c573"] ?? $this->getContext($context, "__internal_a15a32610e0e2ecb54ff8664e8e0c0752be0877236dba605d8cc7e81a730c573"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_a15a32610e0e2ecb54ff8664e8e0c0752be0877236dba605d8cc7e81a730c573"] ?? $this->getContext($context, "__internal_a15a32610e0e2ecb54ff8664e8e0c0752be0877236dba605d8cc7e81a730c573"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7ee6b0e3dc830aadd0e503db359d3dc9778d3194bc53ef976f1b190dbe6154->leave($__internal_cb7ee6b0e3dc830aadd0e503db359d3dc9778d3194bc53ef976f1b190dbe6154_prof);

        
        $__internal_b583c6c4f7903fe271237e647f35de380e1e79866894172f0ba32013c5fa5819->leave($__internal_b583c6c4f7903fe271237e647f35de380e1e79866894172f0ba32013c5fa5819_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6ae5044e0f32e3a84f397cec7ce7fb79d1df4bc9fedc5bdcd0e707cf9f53612b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae5044e0f32e3a84f397cec7ce7fb79d1df4bc9fedc5bdcd0e707cf9f53612b->enter($__internal_6ae5044e0f32e3a84f397cec7ce7fb79d1df4bc9fedc5bdcd0e707cf9f53612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_9d3177f034cd81a924753f4fef57c7b273d08d9e5b6daa43aec23610be9460a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3177f034cd81a924753f4fef57c7b273d08d9e5b6daa43aec23610be9460a7->enter($__internal_9d3177f034cd81a924753f4fef57c7b273d08d9e5b6daa43aec23610be9460a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_9d3177f034cd81a924753f4fef57c7b273d08d9e5b6daa43aec23610be9460a7->leave($__internal_9d3177f034cd81a924753f4fef57c7b273d08d9e5b6daa43aec23610be9460a7_prof);

        
        $__internal_6ae5044e0f32e3a84f397cec7ce7fb79d1df4bc9fedc5bdcd0e707cf9f53612b->leave($__internal_6ae5044e0f32e3a84f397cec7ce7fb79d1df4bc9fedc5bdcd0e707cf9f53612b_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_59d23ea37a8af067409bdd1a5f1dad55fe976f3f8c28b514107073450b1843f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d23ea37a8af067409bdd1a5f1dad55fe976f3f8c28b514107073450b1843f3->enter($__internal_59d23ea37a8af067409bdd1a5f1dad55fe976f3f8c28b514107073450b1843f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_412fe19e38314c4bb93402c395aa84da01485730b5461e59b2d8074048b00483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412fe19e38314c4bb93402c395aa84da01485730b5461e59b2d8074048b00483->enter($__internal_412fe19e38314c4bb93402c395aa84da01485730b5461e59b2d8074048b00483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_412fe19e38314c4bb93402c395aa84da01485730b5461e59b2d8074048b00483->leave($__internal_412fe19e38314c4bb93402c395aa84da01485730b5461e59b2d8074048b00483_prof);

        
        $__internal_59d23ea37a8af067409bdd1a5f1dad55fe976f3f8c28b514107073450b1843f3->leave($__internal_59d23ea37a8af067409bdd1a5f1dad55fe976f3f8c28b514107073450b1843f3_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f313f430ef979fccc1556272443bafb29fc56697adf02f16f470541ffb46a86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f313f430ef979fccc1556272443bafb29fc56697adf02f16f470541ffb46a86e->enter($__internal_f313f430ef979fccc1556272443bafb29fc56697adf02f16f470541ffb46a86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6bd71985ba5fef9ff77425f18e1bde809dd3cbb1b5896b282ab6680545898815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd71985ba5fef9ff77425f18e1bde809dd3cbb1b5896b282ab6680545898815->enter($__internal_6bd71985ba5fef9ff77425f18e1bde809dd3cbb1b5896b282ab6680545898815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_a15a32610e0e2ecb54ff8664e8e0c0752be0877236dba605d8cc7e81a730c573"] ?? $this->getContext($context, "__internal_a15a32610e0e2ecb54ff8664e8e0c0752be0877236dba605d8cc7e81a730c573")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6bd71985ba5fef9ff77425f18e1bde809dd3cbb1b5896b282ab6680545898815->leave($__internal_6bd71985ba5fef9ff77425f18e1bde809dd3cbb1b5896b282ab6680545898815_prof);

        
        $__internal_f313f430ef979fccc1556272443bafb29fc56697adf02f16f470541ffb46a86e->leave($__internal_f313f430ef979fccc1556272443bafb29fc56697adf02f16f470541ffb46a86e_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c89562b3f11698eaa3a6a8dc34158ec9ce231fb63edb344639512668a3e3a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c89562b3f11698eaa3a6a8dc34158ec9ce231fb63edb344639512668a3e3a86->enter($__internal_7c89562b3f11698eaa3a6a8dc34158ec9ce231fb63edb344639512668a3e3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_08f7649a13db1cae269a265ba749391b1b47bb741a9c6f1b6a656e600867718f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f7649a13db1cae269a265ba749391b1b47bb741a9c6f1b6a656e600867718f->enter($__internal_08f7649a13db1cae269a265ba749391b1b47bb741a9c6f1b6a656e600867718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_08f7649a13db1cae269a265ba749391b1b47bb741a9c6f1b6a656e600867718f->leave($__internal_08f7649a13db1cae269a265ba749391b1b47bb741a9c6f1b6a656e600867718f_prof);

        
        $__internal_7c89562b3f11698eaa3a6a8dc34158ec9ce231fb63edb344639512668a3e3a86->leave($__internal_7c89562b3f11698eaa3a6a8dc34158ec9ce231fb63edb344639512668a3e3a86_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_179b74419b6aa2ce5f03c2723597adee111b235a4e24e375da48dba4d836202a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179b74419b6aa2ce5f03c2723597adee111b235a4e24e375da48dba4d836202a->enter($__internal_179b74419b6aa2ce5f03c2723597adee111b235a4e24e375da48dba4d836202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_8b4cb32ba6507505ae86fd9f386c2cf8eb31b0642a2540a020b23b4ee0835c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4cb32ba6507505ae86fd9f386c2cf8eb31b0642a2540a020b23b4ee0835c33->enter($__internal_8b4cb32ba6507505ae86fd9f386c2cf8eb31b0642a2540a020b23b4ee0835c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_8b4cb32ba6507505ae86fd9f386c2cf8eb31b0642a2540a020b23b4ee0835c33->leave($__internal_8b4cb32ba6507505ae86fd9f386c2cf8eb31b0642a2540a020b23b4ee0835c33_prof);

        
        $__internal_179b74419b6aa2ce5f03c2723597adee111b235a4e24e375da48dba4d836202a->leave($__internal_179b74419b6aa2ce5f03c2723597adee111b235a4e24e375da48dba4d836202a_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_2cd7cb958b2f7c33151accec26ac5d4eae9aa6a2caa5f4943ed274f5ffdd03bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd7cb958b2f7c33151accec26ac5d4eae9aa6a2caa5f4943ed274f5ffdd03bf->enter($__internal_2cd7cb958b2f7c33151accec26ac5d4eae9aa6a2caa5f4943ed274f5ffdd03bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_56e332c7ff436584cffda743810dfa4c85819ad060bc95f3a30e8dcd1f45407f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e332c7ff436584cffda743810dfa4c85819ad060bc95f3a30e8dcd1f45407f->enter($__internal_56e332c7ff436584cffda743810dfa4c85819ad060bc95f3a30e8dcd1f45407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_56e332c7ff436584cffda743810dfa4c85819ad060bc95f3a30e8dcd1f45407f->leave($__internal_56e332c7ff436584cffda743810dfa4c85819ad060bc95f3a30e8dcd1f45407f_prof);

        
        $__internal_2cd7cb958b2f7c33151accec26ac5d4eae9aa6a2caa5f4943ed274f5ffdd03bf->leave($__internal_2cd7cb958b2f7c33151accec26ac5d4eae9aa6a2caa5f4943ed274f5ffdd03bf_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c44d88e23d4eeef0894a09898d72e23e6107c9067f5866fbac07e75b2924b9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44d88e23d4eeef0894a09898d72e23e6107c9067f5866fbac07e75b2924b9bb->enter($__internal_c44d88e23d4eeef0894a09898d72e23e6107c9067f5866fbac07e75b2924b9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_5f5cb95f5d451de6ee5f7ff42e71d5995b8626b787f1d91f68eb1ff945314336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5cb95f5d451de6ee5f7ff42e71d5995b8626b787f1d91f68eb1ff945314336->enter($__internal_5f5cb95f5d451de6ee5f7ff42e71d5995b8626b787f1d91f68eb1ff945314336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_5f5cb95f5d451de6ee5f7ff42e71d5995b8626b787f1d91f68eb1ff945314336->leave($__internal_5f5cb95f5d451de6ee5f7ff42e71d5995b8626b787f1d91f68eb1ff945314336_prof);

        
        $__internal_c44d88e23d4eeef0894a09898d72e23e6107c9067f5866fbac07e75b2924b9bb->leave($__internal_c44d88e23d4eeef0894a09898d72e23e6107c9067f5866fbac07e75b2924b9bb_prof);

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
