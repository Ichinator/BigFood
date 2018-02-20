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
        $__internal_2621124a1d72ac3885504c2825caf64462c273665088a320f8620668b0471990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2621124a1d72ac3885504c2825caf64462c273665088a320f8620668b0471990->enter($__internal_2621124a1d72ac3885504c2825caf64462c273665088a320f8620668b0471990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_0a4d3856cb86bc2539456e88d0007109c0319e563836cad83a625708d01fe297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4d3856cb86bc2539456e88d0007109c0319e563836cad83a625708d01fe297->enter($__internal_0a4d3856cb86bc2539456e88d0007109c0319e563836cad83a625708d01fe297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2621124a1d72ac3885504c2825caf64462c273665088a320f8620668b0471990->leave($__internal_2621124a1d72ac3885504c2825caf64462c273665088a320f8620668b0471990_prof);

        
        $__internal_0a4d3856cb86bc2539456e88d0007109c0319e563836cad83a625708d01fe297->leave($__internal_0a4d3856cb86bc2539456e88d0007109c0319e563836cad83a625708d01fe297_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c99743af1556ee779fa7bdcc16f12db0195632ccf2098464daefbc8efbeff9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99743af1556ee779fa7bdcc16f12db0195632ccf2098464daefbc8efbeff9cf->enter($__internal_c99743af1556ee779fa7bdcc16f12db0195632ccf2098464daefbc8efbeff9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3409c806f0cc445948b55b20180e2127922d5dae5f4ecd0a145a0597d19be056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3409c806f0cc445948b55b20180e2127922d5dae5f4ecd0a145a0597d19be056->enter($__internal_3409c806f0cc445948b55b20180e2127922d5dae5f4ecd0a145a0597d19be056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_3409c806f0cc445948b55b20180e2127922d5dae5f4ecd0a145a0597d19be056->leave($__internal_3409c806f0cc445948b55b20180e2127922d5dae5f4ecd0a145a0597d19be056_prof);

        
        $__internal_c99743af1556ee779fa7bdcc16f12db0195632ccf2098464daefbc8efbeff9cf->leave($__internal_c99743af1556ee779fa7bdcc16f12db0195632ccf2098464daefbc8efbeff9cf_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef8995e2d26809eaa00ccba4421ca176b09f8251a1a8c63ba7596e46e9f49f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8995e2d26809eaa00ccba4421ca176b09f8251a1a8c63ba7596e46e9f49f11->enter($__internal_ef8995e2d26809eaa00ccba4421ca176b09f8251a1a8c63ba7596e46e9f49f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08082f6ed0d3f32317b41efaa8e2173f084d969c70308e6e90f7fe2d186dea5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08082f6ed0d3f32317b41efaa8e2173f084d969c70308e6e90f7fe2d186dea5f->enter($__internal_08082f6ed0d3f32317b41efaa8e2173f084d969c70308e6e90f7fe2d186dea5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_08082f6ed0d3f32317b41efaa8e2173f084d969c70308e6e90f7fe2d186dea5f->leave($__internal_08082f6ed0d3f32317b41efaa8e2173f084d969c70308e6e90f7fe2d186dea5f_prof);

        
        $__internal_ef8995e2d26809eaa00ccba4421ca176b09f8251a1a8c63ba7596e46e9f49f11->leave($__internal_ef8995e2d26809eaa00ccba4421ca176b09f8251a1a8c63ba7596e46e9f49f11_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_89a36395dbe1c260f188f565f4237d75767106d99cd9be3d1c386712cc01dc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a36395dbe1c260f188f565f4237d75767106d99cd9be3d1c386712cc01dc4e->enter($__internal_89a36395dbe1c260f188f565f4237d75767106d99cd9be3d1c386712cc01dc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0658b4367bebae9a9dfb5070b3a28e99bb55ed60c764816101f7b23c401bf49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0658b4367bebae9a9dfb5070b3a28e99bb55ed60c764816101f7b23c401bf49c->enter($__internal_0658b4367bebae9a9dfb5070b3a28e99bb55ed60c764816101f7b23c401bf49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_0658b4367bebae9a9dfb5070b3a28e99bb55ed60c764816101f7b23c401bf49c->leave($__internal_0658b4367bebae9a9dfb5070b3a28e99bb55ed60c764816101f7b23c401bf49c_prof);

        
        $__internal_89a36395dbe1c260f188f565f4237d75767106d99cd9be3d1c386712cc01dc4e->leave($__internal_89a36395dbe1c260f188f565f4237d75767106d99cd9be3d1c386712cc01dc4e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3643efa84f5384d04da23634314d1df4e03157d5c8a226f447032c34f85422d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3643efa84f5384d04da23634314d1df4e03157d5c8a226f447032c34f85422d5->enter($__internal_3643efa84f5384d04da23634314d1df4e03157d5c8a226f447032c34f85422d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b89c8da399a08f76527b223f1d5525c9a00d8c963789cb78e101f0aef6b4ba93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89c8da399a08f76527b223f1d5525c9a00d8c963789cb78e101f0aef6b4ba93->enter($__internal_b89c8da399a08f76527b223f1d5525c9a00d8c963789cb78e101f0aef6b4ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b89c8da399a08f76527b223f1d5525c9a00d8c963789cb78e101f0aef6b4ba93->leave($__internal_b89c8da399a08f76527b223f1d5525c9a00d8c963789cb78e101f0aef6b4ba93_prof);

        
        $__internal_3643efa84f5384d04da23634314d1df4e03157d5c8a226f447032c34f85422d5->leave($__internal_3643efa84f5384d04da23634314d1df4e03157d5c8a226f447032c34f85422d5_prof);

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
