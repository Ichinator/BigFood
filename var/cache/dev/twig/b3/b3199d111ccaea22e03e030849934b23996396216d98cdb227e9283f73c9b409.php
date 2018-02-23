<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_d2cdfccdd0f52c4f8214eb1bcf419dd5972b1e1451ecfd2bd0d3ce5e42f72a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de17d47daac0815899eae8e7bcc6af3ce2427171e3ce8b4dcd9fd465c2088cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de17d47daac0815899eae8e7bcc6af3ce2427171e3ce8b4dcd9fd465c2088cf->enter($__internal_2de17d47daac0815899eae8e7bcc6af3ce2427171e3ce8b4dcd9fd465c2088cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_567fcbe469bc59526db0ca98c425df9b5d057735c52c1beb9078738ff2ef3276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567fcbe469bc59526db0ca98c425df9b5d057735c52c1beb9078738ff2ef3276->enter($__internal_567fcbe469bc59526db0ca98c425df9b5d057735c52c1beb9078738ff2ef3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de17d47daac0815899eae8e7bcc6af3ce2427171e3ce8b4dcd9fd465c2088cf->leave($__internal_2de17d47daac0815899eae8e7bcc6af3ce2427171e3ce8b4dcd9fd465c2088cf_prof);

        
        $__internal_567fcbe469bc59526db0ca98c425df9b5d057735c52c1beb9078738ff2ef3276->leave($__internal_567fcbe469bc59526db0ca98c425df9b5d057735c52c1beb9078738ff2ef3276_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a08ec263e5ec275bf789fee7dc2b0b638ea9edf5c666c26620a524c3769ba93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08ec263e5ec275bf789fee7dc2b0b638ea9edf5c666c26620a524c3769ba93c->enter($__internal_a08ec263e5ec275bf789fee7dc2b0b638ea9edf5c666c26620a524c3769ba93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0c9dcb60278e678a7c9012c69ea2b6b010579e9f33f3d13bbfa26e99a04717a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c9dcb60278e678a7c9012c69ea2b6b010579e9f33f3d13bbfa26e99a04717a->enter($__internal_b0c9dcb60278e678a7c9012c69ea2b6b010579e9f33f3d13bbfa26e99a04717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_b0c9dcb60278e678a7c9012c69ea2b6b010579e9f33f3d13bbfa26e99a04717a->leave($__internal_b0c9dcb60278e678a7c9012c69ea2b6b010579e9f33f3d13bbfa26e99a04717a_prof);

        
        $__internal_a08ec263e5ec275bf789fee7dc2b0b638ea9edf5c666c26620a524c3769ba93c->leave($__internal_a08ec263e5ec275bf789fee7dc2b0b638ea9edf5c666c26620a524c3769ba93c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09199d034974f804175943fadd6f313c9ebbc6f68b6797c9845b659e5cfea330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09199d034974f804175943fadd6f313c9ebbc6f68b6797c9845b659e5cfea330->enter($__internal_09199d034974f804175943fadd6f313c9ebbc6f68b6797c9845b659e5cfea330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a7d200b970d2e0c4f0719b9a96e71c1c3a890a80977df96096093ced7c8f6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7d200b970d2e0c4f0719b9a96e71c1c3a890a80977df96096093ced7c8f6c0->enter($__internal_6a7d200b970d2e0c4f0719b9a96e71c1c3a890a80977df96096093ced7c8f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_6a7d200b970d2e0c4f0719b9a96e71c1c3a890a80977df96096093ced7c8f6c0->leave($__internal_6a7d200b970d2e0c4f0719b9a96e71c1c3a890a80977df96096093ced7c8f6c0_prof);

        
        $__internal_09199d034974f804175943fadd6f313c9ebbc6f68b6797c9845b659e5cfea330->leave($__internal_09199d034974f804175943fadd6f313c9ebbc6f68b6797c9845b659e5cfea330_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_44a153a858618cf5558381af6bc2f21e8e5a602da7e595dcf9966275ed17020b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a153a858618cf5558381af6bc2f21e8e5a602da7e595dcf9966275ed17020b->enter($__internal_44a153a858618cf5558381af6bc2f21e8e5a602da7e595dcf9966275ed17020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f2d2a69a48ee1c8ee71c016fe907580028d5d65d44bbf7818b930b78f872d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2d2a69a48ee1c8ee71c016fe907580028d5d65d44bbf7818b930b78f872d2c->enter($__internal_0f2d2a69a48ee1c8ee71c016fe907580028d5d65d44bbf7818b930b78f872d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_0f2d2a69a48ee1c8ee71c016fe907580028d5d65d44bbf7818b930b78f872d2c->leave($__internal_0f2d2a69a48ee1c8ee71c016fe907580028d5d65d44bbf7818b930b78f872d2c_prof);

        
        $__internal_44a153a858618cf5558381af6bc2f21e8e5a602da7e595dcf9966275ed17020b->leave($__internal_44a153a858618cf5558381af6bc2f21e8e5a602da7e595dcf9966275ed17020b_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4375df938b6a6866923dac352d71417e00cfe5679b07efc2156767e36df85843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4375df938b6a6866923dac352d71417e00cfe5679b07efc2156767e36df85843->enter($__internal_4375df938b6a6866923dac352d71417e00cfe5679b07efc2156767e36df85843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6de9e49f74e699e2789a75a04a24f56fa856c1aa9a688ae81786d512c6e08d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de9e49f74e699e2789a75a04a24f56fa856c1aa9a688ae81786d512c6e08d17->enter($__internal_6de9e49f74e699e2789a75a04a24f56fa856c1aa9a688ae81786d512c6e08d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter(($context["commands"] ?? $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, ($context["environment"] ?? $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_6de9e49f74e699e2789a75a04a24f56fa856c1aa9a688ae81786d512c6e08d17->leave($__internal_6de9e49f74e699e2789a75a04a24f56fa856c1aa9a688ae81786d512c6e08d17_prof);

        
        $__internal_4375df938b6a6866923dac352d71417e00cfe5679b07efc2156767e36df85843->leave($__internal_4375df938b6a6866923dac352d71417e00cfe5679b07efc2156767e36df85843_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "CoreSphereConsoleBundle:Console:console.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
