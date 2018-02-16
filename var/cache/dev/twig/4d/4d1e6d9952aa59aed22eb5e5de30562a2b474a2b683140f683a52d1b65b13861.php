<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_71c64659be253b66c81b86c6b5c7fb1f40ffb4e419ec485bab5b096e31b5888c extends Twig_Template
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
        $__internal_92d73dc8f2895d0b9c2a23a35a4d09282d49418422b0f35466b4f7c497650d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d73dc8f2895d0b9c2a23a35a4d09282d49418422b0f35466b4f7c497650d4f->enter($__internal_92d73dc8f2895d0b9c2a23a35a4d09282d49418422b0f35466b4f7c497650d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_262b634d40cf27b9766418198d97004ede54bfc207d9ce24d11bbceb90d33bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262b634d40cf27b9766418198d97004ede54bfc207d9ce24d11bbceb90d33bd1->enter($__internal_262b634d40cf27b9766418198d97004ede54bfc207d9ce24d11bbceb90d33bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d73dc8f2895d0b9c2a23a35a4d09282d49418422b0f35466b4f7c497650d4f->leave($__internal_92d73dc8f2895d0b9c2a23a35a4d09282d49418422b0f35466b4f7c497650d4f_prof);

        
        $__internal_262b634d40cf27b9766418198d97004ede54bfc207d9ce24d11bbceb90d33bd1->leave($__internal_262b634d40cf27b9766418198d97004ede54bfc207d9ce24d11bbceb90d33bd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d86310c86fc2b6827305ee258f4cf8b55fa0cc94f4a36eab8149cf89c6db05a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86310c86fc2b6827305ee258f4cf8b55fa0cc94f4a36eab8149cf89c6db05a4->enter($__internal_d86310c86fc2b6827305ee258f4cf8b55fa0cc94f4a36eab8149cf89c6db05a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d2b9d30e8bb7573c16db1130b3ed3b9bd8140f57eca26574e574a7a5351f233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2b9d30e8bb7573c16db1130b3ed3b9bd8140f57eca26574e574a7a5351f233->enter($__internal_9d2b9d30e8bb7573c16db1130b3ed3b9bd8140f57eca26574e574a7a5351f233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_9d2b9d30e8bb7573c16db1130b3ed3b9bd8140f57eca26574e574a7a5351f233->leave($__internal_9d2b9d30e8bb7573c16db1130b3ed3b9bd8140f57eca26574e574a7a5351f233_prof);

        
        $__internal_d86310c86fc2b6827305ee258f4cf8b55fa0cc94f4a36eab8149cf89c6db05a4->leave($__internal_d86310c86fc2b6827305ee258f4cf8b55fa0cc94f4a36eab8149cf89c6db05a4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_462bdc8bd4821276b3de6236c2666941e13038863de7efef6f975a34482a59fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462bdc8bd4821276b3de6236c2666941e13038863de7efef6f975a34482a59fa->enter($__internal_462bdc8bd4821276b3de6236c2666941e13038863de7efef6f975a34482a59fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4032c3afefe7a868b28232462b675e941dd8a94bcdd2a9e1011a1a6681fb7262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4032c3afefe7a868b28232462b675e941dd8a94bcdd2a9e1011a1a6681fb7262->enter($__internal_4032c3afefe7a868b28232462b675e941dd8a94bcdd2a9e1011a1a6681fb7262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_4032c3afefe7a868b28232462b675e941dd8a94bcdd2a9e1011a1a6681fb7262->leave($__internal_4032c3afefe7a868b28232462b675e941dd8a94bcdd2a9e1011a1a6681fb7262_prof);

        
        $__internal_462bdc8bd4821276b3de6236c2666941e13038863de7efef6f975a34482a59fa->leave($__internal_462bdc8bd4821276b3de6236c2666941e13038863de7efef6f975a34482a59fa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6656481f68ade0a870cb9c12521bba5d71c9124d8bc6d8e54e918a9b4229c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6656481f68ade0a870cb9c12521bba5d71c9124d8bc6d8e54e918a9b4229c3a->enter($__internal_c6656481f68ade0a870cb9c12521bba5d71c9124d8bc6d8e54e918a9b4229c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f496e4eab602b12f8ed0a93d034bb83fc842fd4e3cdab6fe4a1f2930af5dcb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f496e4eab602b12f8ed0a93d034bb83fc842fd4e3cdab6fe4a1f2930af5dcb6a->enter($__internal_f496e4eab602b12f8ed0a93d034bb83fc842fd4e3cdab6fe4a1f2930af5dcb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_f496e4eab602b12f8ed0a93d034bb83fc842fd4e3cdab6fe4a1f2930af5dcb6a->leave($__internal_f496e4eab602b12f8ed0a93d034bb83fc842fd4e3cdab6fe4a1f2930af5dcb6a_prof);

        
        $__internal_c6656481f68ade0a870cb9c12521bba5d71c9124d8bc6d8e54e918a9b4229c3a->leave($__internal_c6656481f68ade0a870cb9c12521bba5d71c9124d8bc6d8e54e918a9b4229c3a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4635b173c9ffe5726d1f27a90806f1a77fbbb73f08718ff3d7520086bfc794cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4635b173c9ffe5726d1f27a90806f1a77fbbb73f08718ff3d7520086bfc794cb->enter($__internal_4635b173c9ffe5726d1f27a90806f1a77fbbb73f08718ff3d7520086bfc794cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a819605e29da692665f7cc054ad4aa00cfc21805d153252c187f5f339fe1f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a819605e29da692665f7cc054ad4aa00cfc21805d153252c187f5f339fe1f32->enter($__internal_5a819605e29da692665f7cc054ad4aa00cfc21805d153252c187f5f339fe1f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5a819605e29da692665f7cc054ad4aa00cfc21805d153252c187f5f339fe1f32->leave($__internal_5a819605e29da692665f7cc054ad4aa00cfc21805d153252c187f5f339fe1f32_prof);

        
        $__internal_4635b173c9ffe5726d1f27a90806f1a77fbbb73f08718ff3d7520086bfc794cb->leave($__internal_4635b173c9ffe5726d1f27a90806f1a77fbbb73f08718ff3d7520086bfc794cb_prof);

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
", "CoreSphereConsoleBundle:Console:console.html.twig", "/home/ichinator/BigFood/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
