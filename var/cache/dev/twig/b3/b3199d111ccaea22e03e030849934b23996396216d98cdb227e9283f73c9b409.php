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
        $__internal_d6bf768e81f760d43aa92fdf2055d2f256b8b580c34f44f833457c990764e05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6bf768e81f760d43aa92fdf2055d2f256b8b580c34f44f833457c990764e05e->enter($__internal_d6bf768e81f760d43aa92fdf2055d2f256b8b580c34f44f833457c990764e05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_367591234f036e08e9c1ae5bda8be0391901632862b5b28b984eb57567d8365e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367591234f036e08e9c1ae5bda8be0391901632862b5b28b984eb57567d8365e->enter($__internal_367591234f036e08e9c1ae5bda8be0391901632862b5b28b984eb57567d8365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6bf768e81f760d43aa92fdf2055d2f256b8b580c34f44f833457c990764e05e->leave($__internal_d6bf768e81f760d43aa92fdf2055d2f256b8b580c34f44f833457c990764e05e_prof);

        
        $__internal_367591234f036e08e9c1ae5bda8be0391901632862b5b28b984eb57567d8365e->leave($__internal_367591234f036e08e9c1ae5bda8be0391901632862b5b28b984eb57567d8365e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3f34648e312f7c8b8d3ed8d89363addf8db06031e2d275c62bdf767362ee6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f34648e312f7c8b8d3ed8d89363addf8db06031e2d275c62bdf767362ee6da->enter($__internal_a3f34648e312f7c8b8d3ed8d89363addf8db06031e2d275c62bdf767362ee6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a964168051c86dc5ac6ae4caaeb6c5c00704e077bda3ac8040e238facdd60352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a964168051c86dc5ac6ae4caaeb6c5c00704e077bda3ac8040e238facdd60352->enter($__internal_a964168051c86dc5ac6ae4caaeb6c5c00704e077bda3ac8040e238facdd60352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_a964168051c86dc5ac6ae4caaeb6c5c00704e077bda3ac8040e238facdd60352->leave($__internal_a964168051c86dc5ac6ae4caaeb6c5c00704e077bda3ac8040e238facdd60352_prof);

        
        $__internal_a3f34648e312f7c8b8d3ed8d89363addf8db06031e2d275c62bdf767362ee6da->leave($__internal_a3f34648e312f7c8b8d3ed8d89363addf8db06031e2d275c62bdf767362ee6da_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b6ec4b9db443c8bae0b6d682a43a58258295b50e5adae4005491fc695053c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6ec4b9db443c8bae0b6d682a43a58258295b50e5adae4005491fc695053c76->enter($__internal_1b6ec4b9db443c8bae0b6d682a43a58258295b50e5adae4005491fc695053c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8109ecb25f301f95e715840658a5d14a28f1437f3361f5f82a263b08bb657ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8109ecb25f301f95e715840658a5d14a28f1437f3361f5f82a263b08bb657ecb->enter($__internal_8109ecb25f301f95e715840658a5d14a28f1437f3361f5f82a263b08bb657ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_8109ecb25f301f95e715840658a5d14a28f1437f3361f5f82a263b08bb657ecb->leave($__internal_8109ecb25f301f95e715840658a5d14a28f1437f3361f5f82a263b08bb657ecb_prof);

        
        $__internal_1b6ec4b9db443c8bae0b6d682a43a58258295b50e5adae4005491fc695053c76->leave($__internal_1b6ec4b9db443c8bae0b6d682a43a58258295b50e5adae4005491fc695053c76_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b48513969b8737ab9385654db9ac51b251e50a6d64dc2a63ecbc9513f83ca7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48513969b8737ab9385654db9ac51b251e50a6d64dc2a63ecbc9513f83ca7e3->enter($__internal_b48513969b8737ab9385654db9ac51b251e50a6d64dc2a63ecbc9513f83ca7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e9dd02eb8580c0880db6954c75cf64f812c896b206832009f4de4187d3cce9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9dd02eb8580c0880db6954c75cf64f812c896b206832009f4de4187d3cce9c->enter($__internal_7e9dd02eb8580c0880db6954c75cf64f812c896b206832009f4de4187d3cce9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_7e9dd02eb8580c0880db6954c75cf64f812c896b206832009f4de4187d3cce9c->leave($__internal_7e9dd02eb8580c0880db6954c75cf64f812c896b206832009f4de4187d3cce9c_prof);

        
        $__internal_b48513969b8737ab9385654db9ac51b251e50a6d64dc2a63ecbc9513f83ca7e3->leave($__internal_b48513969b8737ab9385654db9ac51b251e50a6d64dc2a63ecbc9513f83ca7e3_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df2082300f987376ed00c814173f4e46c8729a9b599c08216e7f22662751b728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2082300f987376ed00c814173f4e46c8729a9b599c08216e7f22662751b728->enter($__internal_df2082300f987376ed00c814173f4e46c8729a9b599c08216e7f22662751b728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_394841d6f5e87c5e45d59bfdab061116b53a5df26963d3a9619b211d935d4cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394841d6f5e87c5e45d59bfdab061116b53a5df26963d3a9619b211d935d4cdb->enter($__internal_394841d6f5e87c5e45d59bfdab061116b53a5df26963d3a9619b211d935d4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_394841d6f5e87c5e45d59bfdab061116b53a5df26963d3a9619b211d935d4cdb->leave($__internal_394841d6f5e87c5e45d59bfdab061116b53a5df26963d3a9619b211d935d4cdb_prof);

        
        $__internal_df2082300f987376ed00c814173f4e46c8729a9b599c08216e7f22662751b728->leave($__internal_df2082300f987376ed00c814173f4e46c8729a9b599c08216e7f22662751b728_prof);

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
