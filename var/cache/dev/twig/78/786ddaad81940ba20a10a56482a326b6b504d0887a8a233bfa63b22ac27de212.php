<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_ed86286997638c707c0709c36223e5c8aaa11fe181b63984e879d5b9e36f5c93 extends Twig_Template
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
        $__internal_be14e6e5d5cda8131fdfd394c6e68f27fa66ad64914142d63afc00c6d2d18842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be14e6e5d5cda8131fdfd394c6e68f27fa66ad64914142d63afc00c6d2d18842->enter($__internal_be14e6e5d5cda8131fdfd394c6e68f27fa66ad64914142d63afc00c6d2d18842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_af47ab66e38e3a32d48122a8017f543b062012aa95a06bb89137639c694585ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af47ab66e38e3a32d48122a8017f543b062012aa95a06bb89137639c694585ed->enter($__internal_af47ab66e38e3a32d48122a8017f543b062012aa95a06bb89137639c694585ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_39c4c48c5105b4896a3a9c08c6b4331493e7d2758996ddadd91d60397dfa034e"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_39c4c48c5105b4896a3a9c08c6b4331493e7d2758996ddadd91d60397dfa034e"] ?? $this->getContext($context, "__internal_39c4c48c5105b4896a3a9c08c6b4331493e7d2758996ddadd91d60397dfa034e"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_39c4c48c5105b4896a3a9c08c6b4331493e7d2758996ddadd91d60397dfa034e"] ?? $this->getContext($context, "__internal_39c4c48c5105b4896a3a9c08c6b4331493e7d2758996ddadd91d60397dfa034e"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be14e6e5d5cda8131fdfd394c6e68f27fa66ad64914142d63afc00c6d2d18842->leave($__internal_be14e6e5d5cda8131fdfd394c6e68f27fa66ad64914142d63afc00c6d2d18842_prof);

        
        $__internal_af47ab66e38e3a32d48122a8017f543b062012aa95a06bb89137639c694585ed->leave($__internal_af47ab66e38e3a32d48122a8017f543b062012aa95a06bb89137639c694585ed_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_facc6c5bfcdfb627669329497631c5d3b3c3642ef1f5a76e6f26ba9d0059936b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_facc6c5bfcdfb627669329497631c5d3b3c3642ef1f5a76e6f26ba9d0059936b->enter($__internal_facc6c5bfcdfb627669329497631c5d3b3c3642ef1f5a76e6f26ba9d0059936b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_db52eb783fa91feee5b108c37576ea84f402c5b7faf4c5d7f5aee4ac36d13658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db52eb783fa91feee5b108c37576ea84f402c5b7faf4c5d7f5aee4ac36d13658->enter($__internal_db52eb783fa91feee5b108c37576ea84f402c5b7faf4c5d7f5aee4ac36d13658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_db52eb783fa91feee5b108c37576ea84f402c5b7faf4c5d7f5aee4ac36d13658->leave($__internal_db52eb783fa91feee5b108c37576ea84f402c5b7faf4c5d7f5aee4ac36d13658_prof);

        
        $__internal_facc6c5bfcdfb627669329497631c5d3b3c3642ef1f5a76e6f26ba9d0059936b->leave($__internal_facc6c5bfcdfb627669329497631c5d3b3c3642ef1f5a76e6f26ba9d0059936b_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ce4c7f1e8f652d743fa586066a7848432bf8997b708dbabad5843af4ed14831d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4c7f1e8f652d743fa586066a7848432bf8997b708dbabad5843af4ed14831d->enter($__internal_ce4c7f1e8f652d743fa586066a7848432bf8997b708dbabad5843af4ed14831d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_28b64288ce699f63836f6f7ba3b7e94022842f5cb9c6d1e887f72985313f5890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b64288ce699f63836f6f7ba3b7e94022842f5cb9c6d1e887f72985313f5890->enter($__internal_28b64288ce699f63836f6f7ba3b7e94022842f5cb9c6d1e887f72985313f5890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_28b64288ce699f63836f6f7ba3b7e94022842f5cb9c6d1e887f72985313f5890->leave($__internal_28b64288ce699f63836f6f7ba3b7e94022842f5cb9c6d1e887f72985313f5890_prof);

        
        $__internal_ce4c7f1e8f652d743fa586066a7848432bf8997b708dbabad5843af4ed14831d->leave($__internal_ce4c7f1e8f652d743fa586066a7848432bf8997b708dbabad5843af4ed14831d_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e3097505798849a8908f8d1ab120a85b31e971ca60903306af1d2c1ce8ab4621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3097505798849a8908f8d1ab120a85b31e971ca60903306af1d2c1ce8ab4621->enter($__internal_e3097505798849a8908f8d1ab120a85b31e971ca60903306af1d2c1ce8ab4621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_50f223a8242d0d7125f964f60aec8e053d66e56d4cc8b379ffa1818771fbb76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f223a8242d0d7125f964f60aec8e053d66e56d4cc8b379ffa1818771fbb76d->enter($__internal_50f223a8242d0d7125f964f60aec8e053d66e56d4cc8b379ffa1818771fbb76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_39c4c48c5105b4896a3a9c08c6b4331493e7d2758996ddadd91d60397dfa034e"] ?? $this->getContext($context, "__internal_39c4c48c5105b4896a3a9c08c6b4331493e7d2758996ddadd91d60397dfa034e")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_50f223a8242d0d7125f964f60aec8e053d66e56d4cc8b379ffa1818771fbb76d->leave($__internal_50f223a8242d0d7125f964f60aec8e053d66e56d4cc8b379ffa1818771fbb76d_prof);

        
        $__internal_e3097505798849a8908f8d1ab120a85b31e971ca60903306af1d2c1ce8ab4621->leave($__internal_e3097505798849a8908f8d1ab120a85b31e971ca60903306af1d2c1ce8ab4621_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_d3ea887bb8355ab3c67bfa65b482f48a50b00beb354cb013e15d16daaee33eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ea887bb8355ab3c67bfa65b482f48a50b00beb354cb013e15d16daaee33eb5->enter($__internal_d3ea887bb8355ab3c67bfa65b482f48a50b00beb354cb013e15d16daaee33eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0649b050633ec79147b74392c2605d0bc89334cb8b48f807046523cc8095eea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0649b050633ec79147b74392c2605d0bc89334cb8b48f807046523cc8095eea1->enter($__internal_0649b050633ec79147b74392c2605d0bc89334cb8b48f807046523cc8095eea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_0649b050633ec79147b74392c2605d0bc89334cb8b48f807046523cc8095eea1->leave($__internal_0649b050633ec79147b74392c2605d0bc89334cb8b48f807046523cc8095eea1_prof);

        
        $__internal_d3ea887bb8355ab3c67bfa65b482f48a50b00beb354cb013e15d16daaee33eb5->leave($__internal_d3ea887bb8355ab3c67bfa65b482f48a50b00beb354cb013e15d16daaee33eb5_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_c0dca85883c7f62a0228c63b1f4c7ba2d6ef21116cabde4fe7fcbc1fc67c27bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dca85883c7f62a0228c63b1f4c7ba2d6ef21116cabde4fe7fcbc1fc67c27bc->enter($__internal_c0dca85883c7f62a0228c63b1f4c7ba2d6ef21116cabde4fe7fcbc1fc67c27bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_ee091716408294c50f130e2695af5ca17f79bc0c2b6a66a3c6ff037c47059372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee091716408294c50f130e2695af5ca17f79bc0c2b6a66a3c6ff037c47059372->enter($__internal_ee091716408294c50f130e2695af5ca17f79bc0c2b6a66a3c6ff037c47059372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_ee091716408294c50f130e2695af5ca17f79bc0c2b6a66a3c6ff037c47059372->leave($__internal_ee091716408294c50f130e2695af5ca17f79bc0c2b6a66a3c6ff037c47059372_prof);

        
        $__internal_c0dca85883c7f62a0228c63b1f4c7ba2d6ef21116cabde4fe7fcbc1fc67c27bc->leave($__internal_c0dca85883c7f62a0228c63b1f4c7ba2d6ef21116cabde4fe7fcbc1fc67c27bc_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a080d530c5b81c764d04c16d0a88d5cb58666adcb9c0f073d8a4eb885afbcea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a080d530c5b81c764d04c16d0a88d5cb58666adcb9c0f073d8a4eb885afbcea8->enter($__internal_a080d530c5b81c764d04c16d0a88d5cb58666adcb9c0f073d8a4eb885afbcea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_7b0f4070cf5e58beab2f5820a98521bf61fabd973df6fc17bac2be21e019587d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0f4070cf5e58beab2f5820a98521bf61fabd973df6fc17bac2be21e019587d->enter($__internal_7b0f4070cf5e58beab2f5820a98521bf61fabd973df6fc17bac2be21e019587d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_7b0f4070cf5e58beab2f5820a98521bf61fabd973df6fc17bac2be21e019587d->leave($__internal_7b0f4070cf5e58beab2f5820a98521bf61fabd973df6fc17bac2be21e019587d_prof);

        
        $__internal_a080d530c5b81c764d04c16d0a88d5cb58666adcb9c0f073d8a4eb885afbcea8->leave($__internal_a080d530c5b81c764d04c16d0a88d5cb58666adcb9c0f073d8a4eb885afbcea8_prof);

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
