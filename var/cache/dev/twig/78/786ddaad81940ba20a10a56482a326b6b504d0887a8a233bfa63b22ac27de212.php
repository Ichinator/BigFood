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
        $__internal_5a2f29e6f16e5de9e4ed132abb00fb13077dcf802fe80cb5f5ab6cc1bef48eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2f29e6f16e5de9e4ed132abb00fb13077dcf802fe80cb5f5ab6cc1bef48eb0->enter($__internal_5a2f29e6f16e5de9e4ed132abb00fb13077dcf802fe80cb5f5ab6cc1bef48eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_220789f62c821804bfee008ff55384d2be7f18f57a18bb79fd6276c07d116baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220789f62c821804bfee008ff55384d2be7f18f57a18bb79fd6276c07d116baf->enter($__internal_220789f62c821804bfee008ff55384d2be7f18f57a18bb79fd6276c07d116baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_6fd58cb61e78b6ced92e8d5b5c4c6d2aac68a94dddf07985570455567779c13e"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_6fd58cb61e78b6ced92e8d5b5c4c6d2aac68a94dddf07985570455567779c13e"] ?? $this->getContext($context, "__internal_6fd58cb61e78b6ced92e8d5b5c4c6d2aac68a94dddf07985570455567779c13e"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_6fd58cb61e78b6ced92e8d5b5c4c6d2aac68a94dddf07985570455567779c13e"] ?? $this->getContext($context, "__internal_6fd58cb61e78b6ced92e8d5b5c4c6d2aac68a94dddf07985570455567779c13e"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2f29e6f16e5de9e4ed132abb00fb13077dcf802fe80cb5f5ab6cc1bef48eb0->leave($__internal_5a2f29e6f16e5de9e4ed132abb00fb13077dcf802fe80cb5f5ab6cc1bef48eb0_prof);

        
        $__internal_220789f62c821804bfee008ff55384d2be7f18f57a18bb79fd6276c07d116baf->leave($__internal_220789f62c821804bfee008ff55384d2be7f18f57a18bb79fd6276c07d116baf_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_561a25c6ed586e5c681fe9dd5c1c3d1ba2757e1443eaa465b299efe177203b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561a25c6ed586e5c681fe9dd5c1c3d1ba2757e1443eaa465b299efe177203b43->enter($__internal_561a25c6ed586e5c681fe9dd5c1c3d1ba2757e1443eaa465b299efe177203b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f2fe624972e3bc66c42a5fdf9f5257b3e02e5f9416bbb989319998266862db3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fe624972e3bc66c42a5fdf9f5257b3e02e5f9416bbb989319998266862db3e->enter($__internal_f2fe624972e3bc66c42a5fdf9f5257b3e02e5f9416bbb989319998266862db3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_f2fe624972e3bc66c42a5fdf9f5257b3e02e5f9416bbb989319998266862db3e->leave($__internal_f2fe624972e3bc66c42a5fdf9f5257b3e02e5f9416bbb989319998266862db3e_prof);

        
        $__internal_561a25c6ed586e5c681fe9dd5c1c3d1ba2757e1443eaa465b299efe177203b43->leave($__internal_561a25c6ed586e5c681fe9dd5c1c3d1ba2757e1443eaa465b299efe177203b43_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_bd6d24c4f3802f0e79b0ad683d9227ec9619ceb435905a50d28962271af55f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6d24c4f3802f0e79b0ad683d9227ec9619ceb435905a50d28962271af55f16->enter($__internal_bd6d24c4f3802f0e79b0ad683d9227ec9619ceb435905a50d28962271af55f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_61247fc4821e35c006b23e3afdc09dea95a93794b0eb953946ec351ed7bacbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61247fc4821e35c006b23e3afdc09dea95a93794b0eb953946ec351ed7bacbc9->enter($__internal_61247fc4821e35c006b23e3afdc09dea95a93794b0eb953946ec351ed7bacbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_61247fc4821e35c006b23e3afdc09dea95a93794b0eb953946ec351ed7bacbc9->leave($__internal_61247fc4821e35c006b23e3afdc09dea95a93794b0eb953946ec351ed7bacbc9_prof);

        
        $__internal_bd6d24c4f3802f0e79b0ad683d9227ec9619ceb435905a50d28962271af55f16->leave($__internal_bd6d24c4f3802f0e79b0ad683d9227ec9619ceb435905a50d28962271af55f16_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4266ff080d824c93e2db3112eb5e84ff605d07f64e678eaf78f43350266c3377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4266ff080d824c93e2db3112eb5e84ff605d07f64e678eaf78f43350266c3377->enter($__internal_4266ff080d824c93e2db3112eb5e84ff605d07f64e678eaf78f43350266c3377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_5b313df0bc161c91174eab02d0de55106c085aff459b37dbffc56d495c32cbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b313df0bc161c91174eab02d0de55106c085aff459b37dbffc56d495c32cbb7->enter($__internal_5b313df0bc161c91174eab02d0de55106c085aff459b37dbffc56d495c32cbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_6fd58cb61e78b6ced92e8d5b5c4c6d2aac68a94dddf07985570455567779c13e"] ?? $this->getContext($context, "__internal_6fd58cb61e78b6ced92e8d5b5c4c6d2aac68a94dddf07985570455567779c13e")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5b313df0bc161c91174eab02d0de55106c085aff459b37dbffc56d495c32cbb7->leave($__internal_5b313df0bc161c91174eab02d0de55106c085aff459b37dbffc56d495c32cbb7_prof);

        
        $__internal_4266ff080d824c93e2db3112eb5e84ff605d07f64e678eaf78f43350266c3377->leave($__internal_4266ff080d824c93e2db3112eb5e84ff605d07f64e678eaf78f43350266c3377_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_ea719d9d17f30d083f23a746caeeb48f84f21d918274fb508bb3c58f6f02866b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea719d9d17f30d083f23a746caeeb48f84f21d918274fb508bb3c58f6f02866b->enter($__internal_ea719d9d17f30d083f23a746caeeb48f84f21d918274fb508bb3c58f6f02866b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_85d5b0b62454fcdea374eebd3206c7a1c1037b5ba195c14e5dd85c6c2a08a523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d5b0b62454fcdea374eebd3206c7a1c1037b5ba195c14e5dd85c6c2a08a523->enter($__internal_85d5b0b62454fcdea374eebd3206c7a1c1037b5ba195c14e5dd85c6c2a08a523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_85d5b0b62454fcdea374eebd3206c7a1c1037b5ba195c14e5dd85c6c2a08a523->leave($__internal_85d5b0b62454fcdea374eebd3206c7a1c1037b5ba195c14e5dd85c6c2a08a523_prof);

        
        $__internal_ea719d9d17f30d083f23a746caeeb48f84f21d918274fb508bb3c58f6f02866b->leave($__internal_ea719d9d17f30d083f23a746caeeb48f84f21d918274fb508bb3c58f6f02866b_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_f4164ed96061c33177d593aac08cac4a40155eee2090ba8b944419ef6f95d08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4164ed96061c33177d593aac08cac4a40155eee2090ba8b944419ef6f95d08d->enter($__internal_f4164ed96061c33177d593aac08cac4a40155eee2090ba8b944419ef6f95d08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_684dc36fefd3a6327787bcd0b95f80446801f795935e08c41d942738adf039d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684dc36fefd3a6327787bcd0b95f80446801f795935e08c41d942738adf039d5->enter($__internal_684dc36fefd3a6327787bcd0b95f80446801f795935e08c41d942738adf039d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_684dc36fefd3a6327787bcd0b95f80446801f795935e08c41d942738adf039d5->leave($__internal_684dc36fefd3a6327787bcd0b95f80446801f795935e08c41d942738adf039d5_prof);

        
        $__internal_f4164ed96061c33177d593aac08cac4a40155eee2090ba8b944419ef6f95d08d->leave($__internal_f4164ed96061c33177d593aac08cac4a40155eee2090ba8b944419ef6f95d08d_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a2dd7fb476dbdbc50caff2079918ef9e9ebd952f4244e98e31595765fb1752c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2dd7fb476dbdbc50caff2079918ef9e9ebd952f4244e98e31595765fb1752c0->enter($__internal_a2dd7fb476dbdbc50caff2079918ef9e9ebd952f4244e98e31595765fb1752c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_19320408038c22dd08ac43015be440c268953e0c3481c3b2d2788eb6e9b7b05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19320408038c22dd08ac43015be440c268953e0c3481c3b2d2788eb6e9b7b05e->enter($__internal_19320408038c22dd08ac43015be440c268953e0c3481c3b2d2788eb6e9b7b05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_19320408038c22dd08ac43015be440c268953e0c3481c3b2d2788eb6e9b7b05e->leave($__internal_19320408038c22dd08ac43015be440c268953e0c3481c3b2d2788eb6e9b7b05e_prof);

        
        $__internal_a2dd7fb476dbdbc50caff2079918ef9e9ebd952f4244e98e31595765fb1752c0->leave($__internal_a2dd7fb476dbdbc50caff2079918ef9e9ebd952f4244e98e31595765fb1752c0_prof);

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
