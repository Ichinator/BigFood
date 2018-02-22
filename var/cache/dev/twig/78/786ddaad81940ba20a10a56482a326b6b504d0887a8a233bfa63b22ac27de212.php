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
        $__internal_a8b39839db1c50db111e66b49aa065393c181954021b7124eb9a8d4bcf372738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b39839db1c50db111e66b49aa065393c181954021b7124eb9a8d4bcf372738->enter($__internal_a8b39839db1c50db111e66b49aa065393c181954021b7124eb9a8d4bcf372738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_860d2b97f6a218ab2d234db13874f7ffa0729f7358c2ec64ff37a22e495799f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860d2b97f6a218ab2d234db13874f7ffa0729f7358c2ec64ff37a22e495799f7->enter($__internal_860d2b97f6a218ab2d234db13874f7ffa0729f7358c2ec64ff37a22e495799f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_ece66656c6ccf8fa8c19e22c763accb189099399800762b1458a04ab7105b15b"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_ece66656c6ccf8fa8c19e22c763accb189099399800762b1458a04ab7105b15b"] ?? $this->getContext($context, "__internal_ece66656c6ccf8fa8c19e22c763accb189099399800762b1458a04ab7105b15b"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_ece66656c6ccf8fa8c19e22c763accb189099399800762b1458a04ab7105b15b"] ?? $this->getContext($context, "__internal_ece66656c6ccf8fa8c19e22c763accb189099399800762b1458a04ab7105b15b"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b39839db1c50db111e66b49aa065393c181954021b7124eb9a8d4bcf372738->leave($__internal_a8b39839db1c50db111e66b49aa065393c181954021b7124eb9a8d4bcf372738_prof);

        
        $__internal_860d2b97f6a218ab2d234db13874f7ffa0729f7358c2ec64ff37a22e495799f7->leave($__internal_860d2b97f6a218ab2d234db13874f7ffa0729f7358c2ec64ff37a22e495799f7_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_72c192357a4a5562b807e6751847232af43eccbcb859ae1ec0fba46a9b89ee87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c192357a4a5562b807e6751847232af43eccbcb859ae1ec0fba46a9b89ee87->enter($__internal_72c192357a4a5562b807e6751847232af43eccbcb859ae1ec0fba46a9b89ee87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_364e7d44d5bcae3a6b747abe9ccf2b8ec4f233f65d5c072956c3c736fd344cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364e7d44d5bcae3a6b747abe9ccf2b8ec4f233f65d5c072956c3c736fd344cdb->enter($__internal_364e7d44d5bcae3a6b747abe9ccf2b8ec4f233f65d5c072956c3c736fd344cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_364e7d44d5bcae3a6b747abe9ccf2b8ec4f233f65d5c072956c3c736fd344cdb->leave($__internal_364e7d44d5bcae3a6b747abe9ccf2b8ec4f233f65d5c072956c3c736fd344cdb_prof);

        
        $__internal_72c192357a4a5562b807e6751847232af43eccbcb859ae1ec0fba46a9b89ee87->leave($__internal_72c192357a4a5562b807e6751847232af43eccbcb859ae1ec0fba46a9b89ee87_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d0f0f7de32262a64004c6f1a3a22d584a2da7425a110206596c0c6a6dbdf5e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f0f7de32262a64004c6f1a3a22d584a2da7425a110206596c0c6a6dbdf5e7c->enter($__internal_d0f0f7de32262a64004c6f1a3a22d584a2da7425a110206596c0c6a6dbdf5e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_5afc808cff825c5395a5f2739399e24f5052f937bee989abf79f5ab8197b55be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afc808cff825c5395a5f2739399e24f5052f937bee989abf79f5ab8197b55be->enter($__internal_5afc808cff825c5395a5f2739399e24f5052f937bee989abf79f5ab8197b55be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_5afc808cff825c5395a5f2739399e24f5052f937bee989abf79f5ab8197b55be->leave($__internal_5afc808cff825c5395a5f2739399e24f5052f937bee989abf79f5ab8197b55be_prof);

        
        $__internal_d0f0f7de32262a64004c6f1a3a22d584a2da7425a110206596c0c6a6dbdf5e7c->leave($__internal_d0f0f7de32262a64004c6f1a3a22d584a2da7425a110206596c0c6a6dbdf5e7c_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_14579d88eb35d730f011590462212865f0109948008292406fc80b60b124d7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14579d88eb35d730f011590462212865f0109948008292406fc80b60b124d7e1->enter($__internal_14579d88eb35d730f011590462212865f0109948008292406fc80b60b124d7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a296fe16e0771e210094516e8dafc6755e583d754ece8ee98a82777791534787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a296fe16e0771e210094516e8dafc6755e583d754ece8ee98a82777791534787->enter($__internal_a296fe16e0771e210094516e8dafc6755e583d754ece8ee98a82777791534787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_ece66656c6ccf8fa8c19e22c763accb189099399800762b1458a04ab7105b15b"] ?? $this->getContext($context, "__internal_ece66656c6ccf8fa8c19e22c763accb189099399800762b1458a04ab7105b15b")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a296fe16e0771e210094516e8dafc6755e583d754ece8ee98a82777791534787->leave($__internal_a296fe16e0771e210094516e8dafc6755e583d754ece8ee98a82777791534787_prof);

        
        $__internal_14579d88eb35d730f011590462212865f0109948008292406fc80b60b124d7e1->leave($__internal_14579d88eb35d730f011590462212865f0109948008292406fc80b60b124d7e1_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_9ecb5b3b6dfe7b7c0a17ccdb9cc77e3f97742535b3bc195474a266a55ecc1462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecb5b3b6dfe7b7c0a17ccdb9cc77e3f97742535b3bc195474a266a55ecc1462->enter($__internal_9ecb5b3b6dfe7b7c0a17ccdb9cc77e3f97742535b3bc195474a266a55ecc1462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c760861947663f91923da9a1d642497f7709491b4d7e269d4c9e96fa81bd7fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c760861947663f91923da9a1d642497f7709491b4d7e269d4c9e96fa81bd7fea->enter($__internal_c760861947663f91923da9a1d642497f7709491b4d7e269d4c9e96fa81bd7fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_c760861947663f91923da9a1d642497f7709491b4d7e269d4c9e96fa81bd7fea->leave($__internal_c760861947663f91923da9a1d642497f7709491b4d7e269d4c9e96fa81bd7fea_prof);

        
        $__internal_9ecb5b3b6dfe7b7c0a17ccdb9cc77e3f97742535b3bc195474a266a55ecc1462->leave($__internal_9ecb5b3b6dfe7b7c0a17ccdb9cc77e3f97742535b3bc195474a266a55ecc1462_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_4b94aa0c58315bb0ab855312f52048317ceb80101535bfdf1d1fb0afae8a01cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b94aa0c58315bb0ab855312f52048317ceb80101535bfdf1d1fb0afae8a01cd->enter($__internal_4b94aa0c58315bb0ab855312f52048317ceb80101535bfdf1d1fb0afae8a01cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_8f2251988b51882e4852dc6bcfd12baab1c3aa3480ff90a3778339b435af2f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2251988b51882e4852dc6bcfd12baab1c3aa3480ff90a3778339b435af2f8b->enter($__internal_8f2251988b51882e4852dc6bcfd12baab1c3aa3480ff90a3778339b435af2f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_8f2251988b51882e4852dc6bcfd12baab1c3aa3480ff90a3778339b435af2f8b->leave($__internal_8f2251988b51882e4852dc6bcfd12baab1c3aa3480ff90a3778339b435af2f8b_prof);

        
        $__internal_4b94aa0c58315bb0ab855312f52048317ceb80101535bfdf1d1fb0afae8a01cd->leave($__internal_4b94aa0c58315bb0ab855312f52048317ceb80101535bfdf1d1fb0afae8a01cd_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_3a2dc3074c6236c3203d43dab02ed4f9ef231413c955db2510a4a0bcf5108865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2dc3074c6236c3203d43dab02ed4f9ef231413c955db2510a4a0bcf5108865->enter($__internal_3a2dc3074c6236c3203d43dab02ed4f9ef231413c955db2510a4a0bcf5108865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_fe53babb78728b9a29888577b62e4417161ade4243683b868437c290e31d402e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe53babb78728b9a29888577b62e4417161ade4243683b868437c290e31d402e->enter($__internal_fe53babb78728b9a29888577b62e4417161ade4243683b868437c290e31d402e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_fe53babb78728b9a29888577b62e4417161ade4243683b868437c290e31d402e->leave($__internal_fe53babb78728b9a29888577b62e4417161ade4243683b868437c290e31d402e_prof);

        
        $__internal_3a2dc3074c6236c3203d43dab02ed4f9ef231413c955db2510a4a0bcf5108865->leave($__internal_3a2dc3074c6236c3203d43dab02ed4f9ef231413c955db2510a4a0bcf5108865_prof);

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
