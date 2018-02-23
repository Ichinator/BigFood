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
        $__internal_b1b29b143ee8d5925254bee53eb1c99684bab88f52d8d0e373ad3fe43bcddc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b29b143ee8d5925254bee53eb1c99684bab88f52d8d0e373ad3fe43bcddc1e->enter($__internal_b1b29b143ee8d5925254bee53eb1c99684bab88f52d8d0e373ad3fe43bcddc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_01babb0dcd230c4b41a456f7117efb628f42212670492bbc0f5e3b418ca72cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01babb0dcd230c4b41a456f7117efb628f42212670492bbc0f5e3b418ca72cdf->enter($__internal_01babb0dcd230c4b41a456f7117efb628f42212670492bbc0f5e3b418ca72cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_cf0f7cd62bfdbb8a965d367d99df259b80d189d1695a4b13408d9479169baf19"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_cf0f7cd62bfdbb8a965d367d99df259b80d189d1695a4b13408d9479169baf19"] ?? $this->getContext($context, "__internal_cf0f7cd62bfdbb8a965d367d99df259b80d189d1695a4b13408d9479169baf19"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_cf0f7cd62bfdbb8a965d367d99df259b80d189d1695a4b13408d9479169baf19"] ?? $this->getContext($context, "__internal_cf0f7cd62bfdbb8a965d367d99df259b80d189d1695a4b13408d9479169baf19"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b29b143ee8d5925254bee53eb1c99684bab88f52d8d0e373ad3fe43bcddc1e->leave($__internal_b1b29b143ee8d5925254bee53eb1c99684bab88f52d8d0e373ad3fe43bcddc1e_prof);

        
        $__internal_01babb0dcd230c4b41a456f7117efb628f42212670492bbc0f5e3b418ca72cdf->leave($__internal_01babb0dcd230c4b41a456f7117efb628f42212670492bbc0f5e3b418ca72cdf_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0e305407e98acbf98db20621e17144fccb403fa09ea007f7e7250beb44b8ec44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e305407e98acbf98db20621e17144fccb403fa09ea007f7e7250beb44b8ec44->enter($__internal_0e305407e98acbf98db20621e17144fccb403fa09ea007f7e7250beb44b8ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_b52f31a91c44cfb6ec7ccba7ceed7b15bd3cc61d64c326b74628d15d5d9a428d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52f31a91c44cfb6ec7ccba7ceed7b15bd3cc61d64c326b74628d15d5d9a428d->enter($__internal_b52f31a91c44cfb6ec7ccba7ceed7b15bd3cc61d64c326b74628d15d5d9a428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_b52f31a91c44cfb6ec7ccba7ceed7b15bd3cc61d64c326b74628d15d5d9a428d->leave($__internal_b52f31a91c44cfb6ec7ccba7ceed7b15bd3cc61d64c326b74628d15d5d9a428d_prof);

        
        $__internal_0e305407e98acbf98db20621e17144fccb403fa09ea007f7e7250beb44b8ec44->leave($__internal_0e305407e98acbf98db20621e17144fccb403fa09ea007f7e7250beb44b8ec44_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fc488c8a151c63ce4fd6658c433f97d63c58125daee28856a6de104b21ee033f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc488c8a151c63ce4fd6658c433f97d63c58125daee28856a6de104b21ee033f->enter($__internal_fc488c8a151c63ce4fd6658c433f97d63c58125daee28856a6de104b21ee033f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_47d5e4d152b986cf401b22b57a74eef583ed06335cf9378a76c4dc061fa9746d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d5e4d152b986cf401b22b57a74eef583ed06335cf9378a76c4dc061fa9746d->enter($__internal_47d5e4d152b986cf401b22b57a74eef583ed06335cf9378a76c4dc061fa9746d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_47d5e4d152b986cf401b22b57a74eef583ed06335cf9378a76c4dc061fa9746d->leave($__internal_47d5e4d152b986cf401b22b57a74eef583ed06335cf9378a76c4dc061fa9746d_prof);

        
        $__internal_fc488c8a151c63ce4fd6658c433f97d63c58125daee28856a6de104b21ee033f->leave($__internal_fc488c8a151c63ce4fd6658c433f97d63c58125daee28856a6de104b21ee033f_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_33e8ce267871aafe96c02473b670b63e9218bfcc0ef4f7faeea4d099d8cc000d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e8ce267871aafe96c02473b670b63e9218bfcc0ef4f7faeea4d099d8cc000d->enter($__internal_33e8ce267871aafe96c02473b670b63e9218bfcc0ef4f7faeea4d099d8cc000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_ac7a7e0560a84a1f7a0e1fe93d34d79ad7d774c5e9ff74b6213fdb33bbba51c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7a7e0560a84a1f7a0e1fe93d34d79ad7d774c5e9ff74b6213fdb33bbba51c1->enter($__internal_ac7a7e0560a84a1f7a0e1fe93d34d79ad7d774c5e9ff74b6213fdb33bbba51c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_cf0f7cd62bfdbb8a965d367d99df259b80d189d1695a4b13408d9479169baf19"] ?? $this->getContext($context, "__internal_cf0f7cd62bfdbb8a965d367d99df259b80d189d1695a4b13408d9479169baf19")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ac7a7e0560a84a1f7a0e1fe93d34d79ad7d774c5e9ff74b6213fdb33bbba51c1->leave($__internal_ac7a7e0560a84a1f7a0e1fe93d34d79ad7d774c5e9ff74b6213fdb33bbba51c1_prof);

        
        $__internal_33e8ce267871aafe96c02473b670b63e9218bfcc0ef4f7faeea4d099d8cc000d->leave($__internal_33e8ce267871aafe96c02473b670b63e9218bfcc0ef4f7faeea4d099d8cc000d_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_926063b1062429530e9f6ea60b5201adb7123ecd2c494dffac23564842018818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926063b1062429530e9f6ea60b5201adb7123ecd2c494dffac23564842018818->enter($__internal_926063b1062429530e9f6ea60b5201adb7123ecd2c494dffac23564842018818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_bb9709a5f5c88598d966094c35088e22a76ef31968c817c734284b46bc005a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9709a5f5c88598d966094c35088e22a76ef31968c817c734284b46bc005a3b->enter($__internal_bb9709a5f5c88598d966094c35088e22a76ef31968c817c734284b46bc005a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_bb9709a5f5c88598d966094c35088e22a76ef31968c817c734284b46bc005a3b->leave($__internal_bb9709a5f5c88598d966094c35088e22a76ef31968c817c734284b46bc005a3b_prof);

        
        $__internal_926063b1062429530e9f6ea60b5201adb7123ecd2c494dffac23564842018818->leave($__internal_926063b1062429530e9f6ea60b5201adb7123ecd2c494dffac23564842018818_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_d95d2f7f01118e6f8e141ad84e8cdfce3cf03220e6f47d2fab2fd6fc3b7e3bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95d2f7f01118e6f8e141ad84e8cdfce3cf03220e6f47d2fab2fd6fc3b7e3bb8->enter($__internal_d95d2f7f01118e6f8e141ad84e8cdfce3cf03220e6f47d2fab2fd6fc3b7e3bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_fb5069c56fdd65c9546f29f01f277fc166d712cd9f007cf6fefaf1c76568d334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5069c56fdd65c9546f29f01f277fc166d712cd9f007cf6fefaf1c76568d334->enter($__internal_fb5069c56fdd65c9546f29f01f277fc166d712cd9f007cf6fefaf1c76568d334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_fb5069c56fdd65c9546f29f01f277fc166d712cd9f007cf6fefaf1c76568d334->leave($__internal_fb5069c56fdd65c9546f29f01f277fc166d712cd9f007cf6fefaf1c76568d334_prof);

        
        $__internal_d95d2f7f01118e6f8e141ad84e8cdfce3cf03220e6f47d2fab2fd6fc3b7e3bb8->leave($__internal_d95d2f7f01118e6f8e141ad84e8cdfce3cf03220e6f47d2fab2fd6fc3b7e3bb8_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8eafd4d3f22127851b66ba19894b584502ff0bea09c992fae222881ca200eaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eafd4d3f22127851b66ba19894b584502ff0bea09c992fae222881ca200eaa9->enter($__internal_8eafd4d3f22127851b66ba19894b584502ff0bea09c992fae222881ca200eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_2e3bc1b6c112566d4def1ae36f82313ead2392c8e6c407e63e315f261b857e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3bc1b6c112566d4def1ae36f82313ead2392c8e6c407e63e315f261b857e4f->enter($__internal_2e3bc1b6c112566d4def1ae36f82313ead2392c8e6c407e63e315f261b857e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_2e3bc1b6c112566d4def1ae36f82313ead2392c8e6c407e63e315f261b857e4f->leave($__internal_2e3bc1b6c112566d4def1ae36f82313ead2392c8e6c407e63e315f261b857e4f_prof);

        
        $__internal_8eafd4d3f22127851b66ba19894b584502ff0bea09c992fae222881ca200eaa9->leave($__internal_8eafd4d3f22127851b66ba19894b584502ff0bea09c992fae222881ca200eaa9_prof);

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
