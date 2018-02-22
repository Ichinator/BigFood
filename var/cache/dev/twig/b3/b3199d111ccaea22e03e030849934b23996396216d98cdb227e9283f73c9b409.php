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
        $__internal_291ef7795378a6e260bdb8eb76c9fb93b4ab7e53a4c331dd0cad4ff6f7c02db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291ef7795378a6e260bdb8eb76c9fb93b4ab7e53a4c331dd0cad4ff6f7c02db5->enter($__internal_291ef7795378a6e260bdb8eb76c9fb93b4ab7e53a4c331dd0cad4ff6f7c02db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_cb723c4dfa939b37dbf50ddbf7fe0cb59c20be4902eca2b34d34308e54a9eb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb723c4dfa939b37dbf50ddbf7fe0cb59c20be4902eca2b34d34308e54a9eb64->enter($__internal_cb723c4dfa939b37dbf50ddbf7fe0cb59c20be4902eca2b34d34308e54a9eb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291ef7795378a6e260bdb8eb76c9fb93b4ab7e53a4c331dd0cad4ff6f7c02db5->leave($__internal_291ef7795378a6e260bdb8eb76c9fb93b4ab7e53a4c331dd0cad4ff6f7c02db5_prof);

        
        $__internal_cb723c4dfa939b37dbf50ddbf7fe0cb59c20be4902eca2b34d34308e54a9eb64->leave($__internal_cb723c4dfa939b37dbf50ddbf7fe0cb59c20be4902eca2b34d34308e54a9eb64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e4697c12fe9d116a298e0694d611cf22d4e00dc8fda3d4292600ce47f23dcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4697c12fe9d116a298e0694d611cf22d4e00dc8fda3d4292600ce47f23dcc3->enter($__internal_4e4697c12fe9d116a298e0694d611cf22d4e00dc8fda3d4292600ce47f23dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc7755d91e9e8c6481ac083ffaf729aab3ec6dadfb123a662759fcdb30cc1f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7755d91e9e8c6481ac083ffaf729aab3ec6dadfb123a662759fcdb30cc1f2d->enter($__internal_bc7755d91e9e8c6481ac083ffaf729aab3ec6dadfb123a662759fcdb30cc1f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_bc7755d91e9e8c6481ac083ffaf729aab3ec6dadfb123a662759fcdb30cc1f2d->leave($__internal_bc7755d91e9e8c6481ac083ffaf729aab3ec6dadfb123a662759fcdb30cc1f2d_prof);

        
        $__internal_4e4697c12fe9d116a298e0694d611cf22d4e00dc8fda3d4292600ce47f23dcc3->leave($__internal_4e4697c12fe9d116a298e0694d611cf22d4e00dc8fda3d4292600ce47f23dcc3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1ed9808d48fec9440550eda3ee7eddbba23c039ac41f862ff9eb15825eea138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ed9808d48fec9440550eda3ee7eddbba23c039ac41f862ff9eb15825eea138->enter($__internal_c1ed9808d48fec9440550eda3ee7eddbba23c039ac41f862ff9eb15825eea138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_11540380967ea2e61d1e6bfc9dc63f51daaf99174e7fa8e7ff5dce692027abae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11540380967ea2e61d1e6bfc9dc63f51daaf99174e7fa8e7ff5dce692027abae->enter($__internal_11540380967ea2e61d1e6bfc9dc63f51daaf99174e7fa8e7ff5dce692027abae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_11540380967ea2e61d1e6bfc9dc63f51daaf99174e7fa8e7ff5dce692027abae->leave($__internal_11540380967ea2e61d1e6bfc9dc63f51daaf99174e7fa8e7ff5dce692027abae_prof);

        
        $__internal_c1ed9808d48fec9440550eda3ee7eddbba23c039ac41f862ff9eb15825eea138->leave($__internal_c1ed9808d48fec9440550eda3ee7eddbba23c039ac41f862ff9eb15825eea138_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaedbfd30a1169afe341e6204d717f59f451131294af9aa7160ae2fff0dc7c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaedbfd30a1169afe341e6204d717f59f451131294af9aa7160ae2fff0dc7c1a->enter($__internal_eaedbfd30a1169afe341e6204d717f59f451131294af9aa7160ae2fff0dc7c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b255c875272c1b80c04242523fadbabb2cdc5fe5f12735bb407ae795b913e3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b255c875272c1b80c04242523fadbabb2cdc5fe5f12735bb407ae795b913e3b8->enter($__internal_b255c875272c1b80c04242523fadbabb2cdc5fe5f12735bb407ae795b913e3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_b255c875272c1b80c04242523fadbabb2cdc5fe5f12735bb407ae795b913e3b8->leave($__internal_b255c875272c1b80c04242523fadbabb2cdc5fe5f12735bb407ae795b913e3b8_prof);

        
        $__internal_eaedbfd30a1169afe341e6204d717f59f451131294af9aa7160ae2fff0dc7c1a->leave($__internal_eaedbfd30a1169afe341e6204d717f59f451131294af9aa7160ae2fff0dc7c1a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81e741264542e3354be05a052328611d973120475039c99e0b85f61e79618136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e741264542e3354be05a052328611d973120475039c99e0b85f61e79618136->enter($__internal_81e741264542e3354be05a052328611d973120475039c99e0b85f61e79618136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61c0136b9076726b494040c159f972335a42b9399a2a4ed31ba81708e3359112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c0136b9076726b494040c159f972335a42b9399a2a4ed31ba81708e3359112->enter($__internal_61c0136b9076726b494040c159f972335a42b9399a2a4ed31ba81708e3359112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_61c0136b9076726b494040c159f972335a42b9399a2a4ed31ba81708e3359112->leave($__internal_61c0136b9076726b494040c159f972335a42b9399a2a4ed31ba81708e3359112_prof);

        
        $__internal_81e741264542e3354be05a052328611d973120475039c99e0b85f61e79618136->leave($__internal_81e741264542e3354be05a052328611d973120475039c99e0b85f61e79618136_prof);

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
