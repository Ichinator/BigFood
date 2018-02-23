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
        $__internal_307c87165018e55996a5673f769c499f3b2e4d54980c9c7000884a41ee9c260c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307c87165018e55996a5673f769c499f3b2e4d54980c9c7000884a41ee9c260c->enter($__internal_307c87165018e55996a5673f769c499f3b2e4d54980c9c7000884a41ee9c260c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_1afafeb5f29472f2c6582ef4e5f2ad69eeaf551c3a315b19cbc4370d448fb491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afafeb5f29472f2c6582ef4e5f2ad69eeaf551c3a315b19cbc4370d448fb491->enter($__internal_1afafeb5f29472f2c6582ef4e5f2ad69eeaf551c3a315b19cbc4370d448fb491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_578bc0737b9bd28af20531ec37e0565f496ccc9396dc4b4d279ac8495ff1aaa2"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_578bc0737b9bd28af20531ec37e0565f496ccc9396dc4b4d279ac8495ff1aaa2"] ?? $this->getContext($context, "__internal_578bc0737b9bd28af20531ec37e0565f496ccc9396dc4b4d279ac8495ff1aaa2"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_578bc0737b9bd28af20531ec37e0565f496ccc9396dc4b4d279ac8495ff1aaa2"] ?? $this->getContext($context, "__internal_578bc0737b9bd28af20531ec37e0565f496ccc9396dc4b4d279ac8495ff1aaa2"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_307c87165018e55996a5673f769c499f3b2e4d54980c9c7000884a41ee9c260c->leave($__internal_307c87165018e55996a5673f769c499f3b2e4d54980c9c7000884a41ee9c260c_prof);

        
        $__internal_1afafeb5f29472f2c6582ef4e5f2ad69eeaf551c3a315b19cbc4370d448fb491->leave($__internal_1afafeb5f29472f2c6582ef4e5f2ad69eeaf551c3a315b19cbc4370d448fb491_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b7beb196fb6936da090e02c5a4eb30e2e0d69d4f28972e53069e737db8ee6950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7beb196fb6936da090e02c5a4eb30e2e0d69d4f28972e53069e737db8ee6950->enter($__internal_b7beb196fb6936da090e02c5a4eb30e2e0d69d4f28972e53069e737db8ee6950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2fbf8c183cf0dd52e706072c507b21bbb665ba246a5c4bf91e006e9f96efa0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbf8c183cf0dd52e706072c507b21bbb665ba246a5c4bf91e006e9f96efa0ad->enter($__internal_2fbf8c183cf0dd52e706072c507b21bbb665ba246a5c4bf91e006e9f96efa0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_2fbf8c183cf0dd52e706072c507b21bbb665ba246a5c4bf91e006e9f96efa0ad->leave($__internal_2fbf8c183cf0dd52e706072c507b21bbb665ba246a5c4bf91e006e9f96efa0ad_prof);

        
        $__internal_b7beb196fb6936da090e02c5a4eb30e2e0d69d4f28972e53069e737db8ee6950->leave($__internal_b7beb196fb6936da090e02c5a4eb30e2e0d69d4f28972e53069e737db8ee6950_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b2b29b29be63fd933c34fc01428ec899779958a199ce027e823fc9d5c99d77f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b29b29be63fd933c34fc01428ec899779958a199ce027e823fc9d5c99d77f7->enter($__internal_b2b29b29be63fd933c34fc01428ec899779958a199ce027e823fc9d5c99d77f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e899e969830144de3b52295c2b777d004e7ae1fca4a71233488fbd5a018013d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e899e969830144de3b52295c2b777d004e7ae1fca4a71233488fbd5a018013d5->enter($__internal_e899e969830144de3b52295c2b777d004e7ae1fca4a71233488fbd5a018013d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_e899e969830144de3b52295c2b777d004e7ae1fca4a71233488fbd5a018013d5->leave($__internal_e899e969830144de3b52295c2b777d004e7ae1fca4a71233488fbd5a018013d5_prof);

        
        $__internal_b2b29b29be63fd933c34fc01428ec899779958a199ce027e823fc9d5c99d77f7->leave($__internal_b2b29b29be63fd933c34fc01428ec899779958a199ce027e823fc9d5c99d77f7_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_58dabeea472bfb57d9150d2fb81b605e06da47b91239b2b4538f1f1822b0dc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58dabeea472bfb57d9150d2fb81b605e06da47b91239b2b4538f1f1822b0dc09->enter($__internal_58dabeea472bfb57d9150d2fb81b605e06da47b91239b2b4538f1f1822b0dc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_ed21f7ef9714f193f9bc3731e9704e2fbcdad4cd7ba02a27cdbcfd4a3841d4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed21f7ef9714f193f9bc3731e9704e2fbcdad4cd7ba02a27cdbcfd4a3841d4b9->enter($__internal_ed21f7ef9714f193f9bc3731e9704e2fbcdad4cd7ba02a27cdbcfd4a3841d4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_578bc0737b9bd28af20531ec37e0565f496ccc9396dc4b4d279ac8495ff1aaa2"] ?? $this->getContext($context, "__internal_578bc0737b9bd28af20531ec37e0565f496ccc9396dc4b4d279ac8495ff1aaa2")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ed21f7ef9714f193f9bc3731e9704e2fbcdad4cd7ba02a27cdbcfd4a3841d4b9->leave($__internal_ed21f7ef9714f193f9bc3731e9704e2fbcdad4cd7ba02a27cdbcfd4a3841d4b9_prof);

        
        $__internal_58dabeea472bfb57d9150d2fb81b605e06da47b91239b2b4538f1f1822b0dc09->leave($__internal_58dabeea472bfb57d9150d2fb81b605e06da47b91239b2b4538f1f1822b0dc09_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f6c9b4c5d92cd11675676a0c92c729aca986e5e1a9676147ba000d20713903d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6c9b4c5d92cd11675676a0c92c729aca986e5e1a9676147ba000d20713903d->enter($__internal_9f6c9b4c5d92cd11675676a0c92c729aca986e5e1a9676147ba000d20713903d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9c34af4d7e5208b6b8e3cce1e94b4a33992a5db97822fa0dadad6fe02d003875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c34af4d7e5208b6b8e3cce1e94b4a33992a5db97822fa0dadad6fe02d003875->enter($__internal_9c34af4d7e5208b6b8e3cce1e94b4a33992a5db97822fa0dadad6fe02d003875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_9c34af4d7e5208b6b8e3cce1e94b4a33992a5db97822fa0dadad6fe02d003875->leave($__internal_9c34af4d7e5208b6b8e3cce1e94b4a33992a5db97822fa0dadad6fe02d003875_prof);

        
        $__internal_9f6c9b4c5d92cd11675676a0c92c729aca986e5e1a9676147ba000d20713903d->leave($__internal_9f6c9b4c5d92cd11675676a0c92c729aca986e5e1a9676147ba000d20713903d_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_369db7c543d0feb5468999ef7a890aca28c366ceb6d5c1936da055c65b79c518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369db7c543d0feb5468999ef7a890aca28c366ceb6d5c1936da055c65b79c518->enter($__internal_369db7c543d0feb5468999ef7a890aca28c366ceb6d5c1936da055c65b79c518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_1ef207b5600b1ef29c3ad8f8b7f10ff6473ae05500d19c028c9d9fb3c769bea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef207b5600b1ef29c3ad8f8b7f10ff6473ae05500d19c028c9d9fb3c769bea3->enter($__internal_1ef207b5600b1ef29c3ad8f8b7f10ff6473ae05500d19c028c9d9fb3c769bea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_1ef207b5600b1ef29c3ad8f8b7f10ff6473ae05500d19c028c9d9fb3c769bea3->leave($__internal_1ef207b5600b1ef29c3ad8f8b7f10ff6473ae05500d19c028c9d9fb3c769bea3_prof);

        
        $__internal_369db7c543d0feb5468999ef7a890aca28c366ceb6d5c1936da055c65b79c518->leave($__internal_369db7c543d0feb5468999ef7a890aca28c366ceb6d5c1936da055c65b79c518_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_22261e0a5ed4204d3b72865f4b3504242d9ea8b9316d1e846d202ea2eb189c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22261e0a5ed4204d3b72865f4b3504242d9ea8b9316d1e846d202ea2eb189c2a->enter($__internal_22261e0a5ed4204d3b72865f4b3504242d9ea8b9316d1e846d202ea2eb189c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_98f5234fe641ee6c1a205db50d62fc09938f1ef24155adaf7fb0f4e7f13455dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f5234fe641ee6c1a205db50d62fc09938f1ef24155adaf7fb0f4e7f13455dc->enter($__internal_98f5234fe641ee6c1a205db50d62fc09938f1ef24155adaf7fb0f4e7f13455dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_98f5234fe641ee6c1a205db50d62fc09938f1ef24155adaf7fb0f4e7f13455dc->leave($__internal_98f5234fe641ee6c1a205db50d62fc09938f1ef24155adaf7fb0f4e7f13455dc_prof);

        
        $__internal_22261e0a5ed4204d3b72865f4b3504242d9ea8b9316d1e846d202ea2eb189c2a->leave($__internal_22261e0a5ed4204d3b72865f4b3504242d9ea8b9316d1e846d202ea2eb189c2a_prof);

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
