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
        $__internal_db0abd290a128aed4103747c1197b3a96fc6686d8ee755db14032743db8065a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0abd290a128aed4103747c1197b3a96fc6686d8ee755db14032743db8065a0->enter($__internal_db0abd290a128aed4103747c1197b3a96fc6686d8ee755db14032743db8065a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_8a00bc66b466b55fb0260383f5d59d51a7bb17554b1f891d6b0da0b672b70ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a00bc66b466b55fb0260383f5d59d51a7bb17554b1f891d6b0da0b672b70ac1->enter($__internal_8a00bc66b466b55fb0260383f5d59d51a7bb17554b1f891d6b0da0b672b70ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db0abd290a128aed4103747c1197b3a96fc6686d8ee755db14032743db8065a0->leave($__internal_db0abd290a128aed4103747c1197b3a96fc6686d8ee755db14032743db8065a0_prof);

        
        $__internal_8a00bc66b466b55fb0260383f5d59d51a7bb17554b1f891d6b0da0b672b70ac1->leave($__internal_8a00bc66b466b55fb0260383f5d59d51a7bb17554b1f891d6b0da0b672b70ac1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_089f1e08d3b961e33cd05ccad591fe103b64fa958a407ab78b0e3cde58cef975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089f1e08d3b961e33cd05ccad591fe103b64fa958a407ab78b0e3cde58cef975->enter($__internal_089f1e08d3b961e33cd05ccad591fe103b64fa958a407ab78b0e3cde58cef975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_398787d509b544d6b01947fcc22e5ccd71b57c40b5cf59308f12e2e3470ea667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398787d509b544d6b01947fcc22e5ccd71b57c40b5cf59308f12e2e3470ea667->enter($__internal_398787d509b544d6b01947fcc22e5ccd71b57c40b5cf59308f12e2e3470ea667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_398787d509b544d6b01947fcc22e5ccd71b57c40b5cf59308f12e2e3470ea667->leave($__internal_398787d509b544d6b01947fcc22e5ccd71b57c40b5cf59308f12e2e3470ea667_prof);

        
        $__internal_089f1e08d3b961e33cd05ccad591fe103b64fa958a407ab78b0e3cde58cef975->leave($__internal_089f1e08d3b961e33cd05ccad591fe103b64fa958a407ab78b0e3cde58cef975_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e6bbd0129bf92a5b77986848a92ac8316f7863e63f5398c8bf844722be4478b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6bbd0129bf92a5b77986848a92ac8316f7863e63f5398c8bf844722be4478b->enter($__internal_3e6bbd0129bf92a5b77986848a92ac8316f7863e63f5398c8bf844722be4478b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f496a465c99545dc5ba077b3c1215cc79e863bc5e322777229c74e0292769fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f496a465c99545dc5ba077b3c1215cc79e863bc5e322777229c74e0292769fc0->enter($__internal_f496a465c99545dc5ba077b3c1215cc79e863bc5e322777229c74e0292769fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_f496a465c99545dc5ba077b3c1215cc79e863bc5e322777229c74e0292769fc0->leave($__internal_f496a465c99545dc5ba077b3c1215cc79e863bc5e322777229c74e0292769fc0_prof);

        
        $__internal_3e6bbd0129bf92a5b77986848a92ac8316f7863e63f5398c8bf844722be4478b->leave($__internal_3e6bbd0129bf92a5b77986848a92ac8316f7863e63f5398c8bf844722be4478b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a215eafb73d703ab4b685297d9c589740d3f5908dc3e86461a51f6f6461e4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a215eafb73d703ab4b685297d9c589740d3f5908dc3e86461a51f6f6461e4a6->enter($__internal_8a215eafb73d703ab4b685297d9c589740d3f5908dc3e86461a51f6f6461e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23f75d8f195a59aa92437bff4ba01133e3ab6bfb32e8c338ab5e9f5dfca6797b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f75d8f195a59aa92437bff4ba01133e3ab6bfb32e8c338ab5e9f5dfca6797b->enter($__internal_23f75d8f195a59aa92437bff4ba01133e3ab6bfb32e8c338ab5e9f5dfca6797b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_23f75d8f195a59aa92437bff4ba01133e3ab6bfb32e8c338ab5e9f5dfca6797b->leave($__internal_23f75d8f195a59aa92437bff4ba01133e3ab6bfb32e8c338ab5e9f5dfca6797b_prof);

        
        $__internal_8a215eafb73d703ab4b685297d9c589740d3f5908dc3e86461a51f6f6461e4a6->leave($__internal_8a215eafb73d703ab4b685297d9c589740d3f5908dc3e86461a51f6f6461e4a6_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0ef7bdd6a6e4acde3c153b4886c91fb1d03d34b66b9206e91223778e03bcc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ef7bdd6a6e4acde3c153b4886c91fb1d03d34b66b9206e91223778e03bcc18->enter($__internal_a0ef7bdd6a6e4acde3c153b4886c91fb1d03d34b66b9206e91223778e03bcc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0441cde86ce27654a0a317c251b8cd1f04eb68f98135fbebafc671504055ca79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0441cde86ce27654a0a317c251b8cd1f04eb68f98135fbebafc671504055ca79->enter($__internal_0441cde86ce27654a0a317c251b8cd1f04eb68f98135fbebafc671504055ca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0441cde86ce27654a0a317c251b8cd1f04eb68f98135fbebafc671504055ca79->leave($__internal_0441cde86ce27654a0a317c251b8cd1f04eb68f98135fbebafc671504055ca79_prof);

        
        $__internal_a0ef7bdd6a6e4acde3c153b4886c91fb1d03d34b66b9206e91223778e03bcc18->leave($__internal_a0ef7bdd6a6e4acde3c153b4886c91fb1d03d34b66b9206e91223778e03bcc18_prof);

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
