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
        $__internal_72d79276fa068eae4724c7f76bab63397dadbd4487bc2c2efd9337b9e8606cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d79276fa068eae4724c7f76bab63397dadbd4487bc2c2efd9337b9e8606cb8->enter($__internal_72d79276fa068eae4724c7f76bab63397dadbd4487bc2c2efd9337b9e8606cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_3a2989df063460d35b229da95fb2507ac7ebb9442c816dd72181da0d2e6d4f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2989df063460d35b229da95fb2507ac7ebb9442c816dd72181da0d2e6d4f8d->enter($__internal_3a2989df063460d35b229da95fb2507ac7ebb9442c816dd72181da0d2e6d4f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_be3162313de7867ee6b12b654186bb535aea7d1337c488631b6c2537000f30b6"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_be3162313de7867ee6b12b654186bb535aea7d1337c488631b6c2537000f30b6"] ?? $this->getContext($context, "__internal_be3162313de7867ee6b12b654186bb535aea7d1337c488631b6c2537000f30b6"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_be3162313de7867ee6b12b654186bb535aea7d1337c488631b6c2537000f30b6"] ?? $this->getContext($context, "__internal_be3162313de7867ee6b12b654186bb535aea7d1337c488631b6c2537000f30b6"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d79276fa068eae4724c7f76bab63397dadbd4487bc2c2efd9337b9e8606cb8->leave($__internal_72d79276fa068eae4724c7f76bab63397dadbd4487bc2c2efd9337b9e8606cb8_prof);

        
        $__internal_3a2989df063460d35b229da95fb2507ac7ebb9442c816dd72181da0d2e6d4f8d->leave($__internal_3a2989df063460d35b229da95fb2507ac7ebb9442c816dd72181da0d2e6d4f8d_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_dbbdbc974373ee8de2edb888d842f5c4f39292c7643e899450ee56a71b12b26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbdbc974373ee8de2edb888d842f5c4f39292c7643e899450ee56a71b12b26e->enter($__internal_dbbdbc974373ee8de2edb888d842f5c4f39292c7643e899450ee56a71b12b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_bf0046f3eff47a94b95ebb89d096d0f1a4afa4e086b0cd38ffd99c9a504ae724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0046f3eff47a94b95ebb89d096d0f1a4afa4e086b0cd38ffd99c9a504ae724->enter($__internal_bf0046f3eff47a94b95ebb89d096d0f1a4afa4e086b0cd38ffd99c9a504ae724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_bf0046f3eff47a94b95ebb89d096d0f1a4afa4e086b0cd38ffd99c9a504ae724->leave($__internal_bf0046f3eff47a94b95ebb89d096d0f1a4afa4e086b0cd38ffd99c9a504ae724_prof);

        
        $__internal_dbbdbc974373ee8de2edb888d842f5c4f39292c7643e899450ee56a71b12b26e->leave($__internal_dbbdbc974373ee8de2edb888d842f5c4f39292c7643e899450ee56a71b12b26e_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_adeae8557359d9fc28f361c3bf19f2ee1206197f45fab49c3b7a0d17a5b24e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adeae8557359d9fc28f361c3bf19f2ee1206197f45fab49c3b7a0d17a5b24e8c->enter($__internal_adeae8557359d9fc28f361c3bf19f2ee1206197f45fab49c3b7a0d17a5b24e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_b5488c75b0df567ce020c537bd617d558830263ece7a7a4235906df28942e011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5488c75b0df567ce020c537bd617d558830263ece7a7a4235906df28942e011->enter($__internal_b5488c75b0df567ce020c537bd617d558830263ece7a7a4235906df28942e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b5488c75b0df567ce020c537bd617d558830263ece7a7a4235906df28942e011->leave($__internal_b5488c75b0df567ce020c537bd617d558830263ece7a7a4235906df28942e011_prof);

        
        $__internal_adeae8557359d9fc28f361c3bf19f2ee1206197f45fab49c3b7a0d17a5b24e8c->leave($__internal_adeae8557359d9fc28f361c3bf19f2ee1206197f45fab49c3b7a0d17a5b24e8c_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8c26eaef73b87a5e86f58b23414ce57deeea0e8e85bd0219d8fb333ea7dc1136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c26eaef73b87a5e86f58b23414ce57deeea0e8e85bd0219d8fb333ea7dc1136->enter($__internal_8c26eaef73b87a5e86f58b23414ce57deeea0e8e85bd0219d8fb333ea7dc1136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a37ddc7cfe00ca49eb6ef6541a8f84c278cb2ac26db70c4fa92251639341275f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37ddc7cfe00ca49eb6ef6541a8f84c278cb2ac26db70c4fa92251639341275f->enter($__internal_a37ddc7cfe00ca49eb6ef6541a8f84c278cb2ac26db70c4fa92251639341275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_be3162313de7867ee6b12b654186bb535aea7d1337c488631b6c2537000f30b6"] ?? $this->getContext($context, "__internal_be3162313de7867ee6b12b654186bb535aea7d1337c488631b6c2537000f30b6")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a37ddc7cfe00ca49eb6ef6541a8f84c278cb2ac26db70c4fa92251639341275f->leave($__internal_a37ddc7cfe00ca49eb6ef6541a8f84c278cb2ac26db70c4fa92251639341275f_prof);

        
        $__internal_8c26eaef73b87a5e86f58b23414ce57deeea0e8e85bd0219d8fb333ea7dc1136->leave($__internal_8c26eaef73b87a5e86f58b23414ce57deeea0e8e85bd0219d8fb333ea7dc1136_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_b06fe357b6298619a917671a55c38ccb17f0d5cbad06a585d9fed2319caedc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06fe357b6298619a917671a55c38ccb17f0d5cbad06a585d9fed2319caedc62->enter($__internal_b06fe357b6298619a917671a55c38ccb17f0d5cbad06a585d9fed2319caedc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_81f8ade380c2ce121ffbd4bb4ada5b2c27073cea3714b2b1f8a353f2831689e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f8ade380c2ce121ffbd4bb4ada5b2c27073cea3714b2b1f8a353f2831689e4->enter($__internal_81f8ade380c2ce121ffbd4bb4ada5b2c27073cea3714b2b1f8a353f2831689e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_81f8ade380c2ce121ffbd4bb4ada5b2c27073cea3714b2b1f8a353f2831689e4->leave($__internal_81f8ade380c2ce121ffbd4bb4ada5b2c27073cea3714b2b1f8a353f2831689e4_prof);

        
        $__internal_b06fe357b6298619a917671a55c38ccb17f0d5cbad06a585d9fed2319caedc62->leave($__internal_b06fe357b6298619a917671a55c38ccb17f0d5cbad06a585d9fed2319caedc62_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_53fabac79949de6e4c2cb1a557e96e2272acfd9fda01c4f6d85cd36da716405b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fabac79949de6e4c2cb1a557e96e2272acfd9fda01c4f6d85cd36da716405b->enter($__internal_53fabac79949de6e4c2cb1a557e96e2272acfd9fda01c4f6d85cd36da716405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_89a3be6864ac0170936070ecda5d071e0f305fc56d0cb748e98de31062d17d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a3be6864ac0170936070ecda5d071e0f305fc56d0cb748e98de31062d17d87->enter($__internal_89a3be6864ac0170936070ecda5d071e0f305fc56d0cb748e98de31062d17d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_89a3be6864ac0170936070ecda5d071e0f305fc56d0cb748e98de31062d17d87->leave($__internal_89a3be6864ac0170936070ecda5d071e0f305fc56d0cb748e98de31062d17d87_prof);

        
        $__internal_53fabac79949de6e4c2cb1a557e96e2272acfd9fda01c4f6d85cd36da716405b->leave($__internal_53fabac79949de6e4c2cb1a557e96e2272acfd9fda01c4f6d85cd36da716405b_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_e52f849cb8ac12781ad375d57d88061e0ffb48d875fcd9e02515aa0982986c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52f849cb8ac12781ad375d57d88061e0ffb48d875fcd9e02515aa0982986c9b->enter($__internal_e52f849cb8ac12781ad375d57d88061e0ffb48d875fcd9e02515aa0982986c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_055637bc9e552d283a799d3e329b6d32c7acf8cd7a13a76877340abfdfbeb4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055637bc9e552d283a799d3e329b6d32c7acf8cd7a13a76877340abfdfbeb4b2->enter($__internal_055637bc9e552d283a799d3e329b6d32c7acf8cd7a13a76877340abfdfbeb4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_055637bc9e552d283a799d3e329b6d32c7acf8cd7a13a76877340abfdfbeb4b2->leave($__internal_055637bc9e552d283a799d3e329b6d32c7acf8cd7a13a76877340abfdfbeb4b2_prof);

        
        $__internal_e52f849cb8ac12781ad375d57d88061e0ffb48d875fcd9e02515aa0982986c9b->leave($__internal_e52f849cb8ac12781ad375d57d88061e0ffb48d875fcd9e02515aa0982986c9b_prof);

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
