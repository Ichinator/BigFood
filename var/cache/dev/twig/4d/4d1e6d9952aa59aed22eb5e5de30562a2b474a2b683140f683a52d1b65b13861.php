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
        $__internal_f4b443591702c7c27705627165e8dc10edff458a3e7092fb496fc59e2a04a163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b443591702c7c27705627165e8dc10edff458a3e7092fb496fc59e2a04a163->enter($__internal_f4b443591702c7c27705627165e8dc10edff458a3e7092fb496fc59e2a04a163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_4da9ba9c102336ef167a8daadcc8299148d37ca673c2bf7d572c5b14ab9487b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da9ba9c102336ef167a8daadcc8299148d37ca673c2bf7d572c5b14ab9487b5->enter($__internal_4da9ba9c102336ef167a8daadcc8299148d37ca673c2bf7d572c5b14ab9487b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b443591702c7c27705627165e8dc10edff458a3e7092fb496fc59e2a04a163->leave($__internal_f4b443591702c7c27705627165e8dc10edff458a3e7092fb496fc59e2a04a163_prof);

        
        $__internal_4da9ba9c102336ef167a8daadcc8299148d37ca673c2bf7d572c5b14ab9487b5->leave($__internal_4da9ba9c102336ef167a8daadcc8299148d37ca673c2bf7d572c5b14ab9487b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f47837f7e9240484ab18cf8670db5355363a6bb52ac3a8428ee63f4ea604668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f47837f7e9240484ab18cf8670db5355363a6bb52ac3a8428ee63f4ea604668->enter($__internal_8f47837f7e9240484ab18cf8670db5355363a6bb52ac3a8428ee63f4ea604668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_756221655d522f23db7f6532b79d6bcbf72a7a43234b147ebac37a07c2125cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756221655d522f23db7f6532b79d6bcbf72a7a43234b147ebac37a07c2125cb2->enter($__internal_756221655d522f23db7f6532b79d6bcbf72a7a43234b147ebac37a07c2125cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_756221655d522f23db7f6532b79d6bcbf72a7a43234b147ebac37a07c2125cb2->leave($__internal_756221655d522f23db7f6532b79d6bcbf72a7a43234b147ebac37a07c2125cb2_prof);

        
        $__internal_8f47837f7e9240484ab18cf8670db5355363a6bb52ac3a8428ee63f4ea604668->leave($__internal_8f47837f7e9240484ab18cf8670db5355363a6bb52ac3a8428ee63f4ea604668_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d61c4d54d6547f951ac37b0fb5a2727920eb9eeaa31b5b50b4280aa00ab6cd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61c4d54d6547f951ac37b0fb5a2727920eb9eeaa31b5b50b4280aa00ab6cd59->enter($__internal_d61c4d54d6547f951ac37b0fb5a2727920eb9eeaa31b5b50b4280aa00ab6cd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f45939ad9cd8468ab67ee0554e52fbd43a5ceb91e0d9125aacc5af0d0197dfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45939ad9cd8468ab67ee0554e52fbd43a5ceb91e0d9125aacc5af0d0197dfba->enter($__internal_f45939ad9cd8468ab67ee0554e52fbd43a5ceb91e0d9125aacc5af0d0197dfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_f45939ad9cd8468ab67ee0554e52fbd43a5ceb91e0d9125aacc5af0d0197dfba->leave($__internal_f45939ad9cd8468ab67ee0554e52fbd43a5ceb91e0d9125aacc5af0d0197dfba_prof);

        
        $__internal_d61c4d54d6547f951ac37b0fb5a2727920eb9eeaa31b5b50b4280aa00ab6cd59->leave($__internal_d61c4d54d6547f951ac37b0fb5a2727920eb9eeaa31b5b50b4280aa00ab6cd59_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_14a3b47a3691122e7f348872d7aa610c1372eb67afed05e155bf78fd35d7c175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a3b47a3691122e7f348872d7aa610c1372eb67afed05e155bf78fd35d7c175->enter($__internal_14a3b47a3691122e7f348872d7aa610c1372eb67afed05e155bf78fd35d7c175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac8832b40a130a288e689e8740956226e409c9d4ef944fbe5a23a7179a892c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8832b40a130a288e689e8740956226e409c9d4ef944fbe5a23a7179a892c21->enter($__internal_ac8832b40a130a288e689e8740956226e409c9d4ef944fbe5a23a7179a892c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_ac8832b40a130a288e689e8740956226e409c9d4ef944fbe5a23a7179a892c21->leave($__internal_ac8832b40a130a288e689e8740956226e409c9d4ef944fbe5a23a7179a892c21_prof);

        
        $__internal_14a3b47a3691122e7f348872d7aa610c1372eb67afed05e155bf78fd35d7c175->leave($__internal_14a3b47a3691122e7f348872d7aa610c1372eb67afed05e155bf78fd35d7c175_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d27c5bbe4783f5e914ccc5b0ac069331d4e980778eef8bd01b5c76d6dd19a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d27c5bbe4783f5e914ccc5b0ac069331d4e980778eef8bd01b5c76d6dd19a3e->enter($__internal_5d27c5bbe4783f5e914ccc5b0ac069331d4e980778eef8bd01b5c76d6dd19a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_064c58d5cc284da3a11502a9f48c5dc4f0b70c68136395a5a021f3a80fe5276c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064c58d5cc284da3a11502a9f48c5dc4f0b70c68136395a5a021f3a80fe5276c->enter($__internal_064c58d5cc284da3a11502a9f48c5dc4f0b70c68136395a5a021f3a80fe5276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_064c58d5cc284da3a11502a9f48c5dc4f0b70c68136395a5a021f3a80fe5276c->leave($__internal_064c58d5cc284da3a11502a9f48c5dc4f0b70c68136395a5a021f3a80fe5276c_prof);

        
        $__internal_5d27c5bbe4783f5e914ccc5b0ac069331d4e980778eef8bd01b5c76d6dd19a3e->leave($__internal_5d27c5bbe4783f5e914ccc5b0ac069331d4e980778eef8bd01b5c76d6dd19a3e_prof);

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
