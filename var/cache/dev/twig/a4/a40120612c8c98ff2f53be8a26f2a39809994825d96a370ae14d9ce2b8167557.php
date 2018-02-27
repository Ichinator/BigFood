<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_fe629194d0c463766617a9c400834e139a8435ec776b96faef8bf9df370681df extends Twig_Template
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
        $__internal_ee7edc34bd44d7f4380d73b07d29a243386d553108e6cd6d3eaee1d5cd3a5441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7edc34bd44d7f4380d73b07d29a243386d553108e6cd6d3eaee1d5cd3a5441->enter($__internal_ee7edc34bd44d7f4380d73b07d29a243386d553108e6cd6d3eaee1d5cd3a5441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_f72c0abda22a960b0aee9b820dba25db4888e7e0e86e3413fb2991eacccb3c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72c0abda22a960b0aee9b820dba25db4888e7e0e86e3413fb2991eacccb3c60->enter($__internal_f72c0abda22a960b0aee9b820dba25db4888e7e0e86e3413fb2991eacccb3c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ee7edc34bd44d7f4380d73b07d29a243386d553108e6cd6d3eaee1d5cd3a5441->leave($__internal_ee7edc34bd44d7f4380d73b07d29a243386d553108e6cd6d3eaee1d5cd3a5441_prof);

        
        $__internal_f72c0abda22a960b0aee9b820dba25db4888e7e0e86e3413fb2991eacccb3c60->leave($__internal_f72c0abda22a960b0aee9b820dba25db4888e7e0e86e3413fb2991eacccb3c60_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
