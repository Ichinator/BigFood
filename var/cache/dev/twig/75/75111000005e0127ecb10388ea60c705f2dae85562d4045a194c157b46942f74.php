<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_ee21f9805ae431aba7aa377b89190c23536d9f9a5c2a4bae75fd49818789d226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c330f6ba1a405c80558a0e6c000ffde5588b2009297b15e803185e82806ffee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c330f6ba1a405c80558a0e6c000ffde5588b2009297b15e803185e82806ffee->enter($__internal_4c330f6ba1a405c80558a0e6c000ffde5588b2009297b15e803185e82806ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        $__internal_b13e5144be5d57d731943c4b6baba3a2def20b7726780359b86dce7687d5acbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13e5144be5d57d731943c4b6baba3a2def20b7726780359b86dce7687d5acbc->enter($__internal_b13e5144be5d57d731943c4b6baba3a2def20b7726780359b86dce7687d5acbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, ($context["working_dir"] ?? $this->getContext($context, "working_dir")), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, ($context["environment"] ?? $this->getContext($context, "environment")), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_4c330f6ba1a405c80558a0e6c000ffde5588b2009297b15e803185e82806ffee->leave($__internal_4c330f6ba1a405c80558a0e6c000ffde5588b2009297b15e803185e82806ffee_prof);

        
        $__internal_b13e5144be5d57d731943c4b6baba3a2def20b7726780359b86dce7687d5acbc->leave($__internal_b13e5144be5d57d731943c4b6baba3a2def20b7726780359b86dce7687d5acbc_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'coresphere_console.headline.index'|trans }}</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>
        <span class=\"console_env_info\">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
", "CoreSphereConsoleBundle:Console:terminal.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/coresphere/console-bundle/Resources/views/Console/terminal.html.twig");
    }
}
