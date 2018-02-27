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
        $__internal_704aea3e1d0bf3bdbc16f225215ee2838ab911fbebcddd79697a0e137ec17077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704aea3e1d0bf3bdbc16f225215ee2838ab911fbebcddd79697a0e137ec17077->enter($__internal_704aea3e1d0bf3bdbc16f225215ee2838ab911fbebcddd79697a0e137ec17077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_67fb310e59bd8b07e52bca83c828a0d27d5c07610e362fd4f876b4e653f0131d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fb310e59bd8b07e52bca83c828a0d27d5c07610e362fd4f876b4e653f0131d->enter($__internal_67fb310e59bd8b07e52bca83c828a0d27d5c07610e362fd4f876b4e653f0131d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_704aea3e1d0bf3bdbc16f225215ee2838ab911fbebcddd79697a0e137ec17077->leave($__internal_704aea3e1d0bf3bdbc16f225215ee2838ab911fbebcddd79697a0e137ec17077_prof);

        
        $__internal_67fb310e59bd8b07e52bca83c828a0d27d5c07610e362fd4f876b4e653f0131d->leave($__internal_67fb310e59bd8b07e52bca83c828a0d27d5c07610e362fd4f876b4e653f0131d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3285c02e9c99f93664cb5711e910071884e8b9de052af98f87feda2affaa7832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3285c02e9c99f93664cb5711e910071884e8b9de052af98f87feda2affaa7832->enter($__internal_3285c02e9c99f93664cb5711e910071884e8b9de052af98f87feda2affaa7832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_499f971fed5c8dac81ae67981e4e9877942244a6e1963524282995f4af677919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499f971fed5c8dac81ae67981e4e9877942244a6e1963524282995f4af677919->enter($__internal_499f971fed5c8dac81ae67981e4e9877942244a6e1963524282995f4af677919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_499f971fed5c8dac81ae67981e4e9877942244a6e1963524282995f4af677919->leave($__internal_499f971fed5c8dac81ae67981e4e9877942244a6e1963524282995f4af677919_prof);

        
        $__internal_3285c02e9c99f93664cb5711e910071884e8b9de052af98f87feda2affaa7832->leave($__internal_3285c02e9c99f93664cb5711e910071884e8b9de052af98f87feda2affaa7832_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf6f04a82fb9ee42de644ecf5c08fb503070e3df36f1adde22fdfa04d334b3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6f04a82fb9ee42de644ecf5c08fb503070e3df36f1adde22fdfa04d334b3b8->enter($__internal_cf6f04a82fb9ee42de644ecf5c08fb503070e3df36f1adde22fdfa04d334b3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85ea91a154d69626fece532a65d8492975ab16292ab7e5c41fd56b5ec82878ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ea91a154d69626fece532a65d8492975ab16292ab7e5c41fd56b5ec82878ea->enter($__internal_85ea91a154d69626fece532a65d8492975ab16292ab7e5c41fd56b5ec82878ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_85ea91a154d69626fece532a65d8492975ab16292ab7e5c41fd56b5ec82878ea->leave($__internal_85ea91a154d69626fece532a65d8492975ab16292ab7e5c41fd56b5ec82878ea_prof);

        
        $__internal_cf6f04a82fb9ee42de644ecf5c08fb503070e3df36f1adde22fdfa04d334b3b8->leave($__internal_cf6f04a82fb9ee42de644ecf5c08fb503070e3df36f1adde22fdfa04d334b3b8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_864eeea8870f8cc7844b63003f6a5e29e343e991f478271967f521f2c85a224d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864eeea8870f8cc7844b63003f6a5e29e343e991f478271967f521f2c85a224d->enter($__internal_864eeea8870f8cc7844b63003f6a5e29e343e991f478271967f521f2c85a224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_545ac3fccf3aa41ef18704d6b0883084d51650590846526b6fb9bd1d9bd65389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545ac3fccf3aa41ef18704d6b0883084d51650590846526b6fb9bd1d9bd65389->enter($__internal_545ac3fccf3aa41ef18704d6b0883084d51650590846526b6fb9bd1d9bd65389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_545ac3fccf3aa41ef18704d6b0883084d51650590846526b6fb9bd1d9bd65389->leave($__internal_545ac3fccf3aa41ef18704d6b0883084d51650590846526b6fb9bd1d9bd65389_prof);

        
        $__internal_864eeea8870f8cc7844b63003f6a5e29e343e991f478271967f521f2c85a224d->leave($__internal_864eeea8870f8cc7844b63003f6a5e29e343e991f478271967f521f2c85a224d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4f9b50dac87b5996f780639d942bf41eb561d03c9e4c34e77a3993bb54df8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f9b50dac87b5996f780639d942bf41eb561d03c9e4c34e77a3993bb54df8ad->enter($__internal_b4f9b50dac87b5996f780639d942bf41eb561d03c9e4c34e77a3993bb54df8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3b416719c1a39d16e75e2b5d48c1de5f76cdb4332b70ef19b6620d85a846b3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b416719c1a39d16e75e2b5d48c1de5f76cdb4332b70ef19b6620d85a846b3eb->enter($__internal_3b416719c1a39d16e75e2b5d48c1de5f76cdb4332b70ef19b6620d85a846b3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3b416719c1a39d16e75e2b5d48c1de5f76cdb4332b70ef19b6620d85a846b3eb->leave($__internal_3b416719c1a39d16e75e2b5d48c1de5f76cdb4332b70ef19b6620d85a846b3eb_prof);

        
        $__internal_b4f9b50dac87b5996f780639d942bf41eb561d03c9e4c34e77a3993bb54df8ad->leave($__internal_b4f9b50dac87b5996f780639d942bf41eb561d03c9e4c34e77a3993bb54df8ad_prof);

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
