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
        $__internal_93d2f44e752679cd66c49fff8f40da7bb4d837c98ec5259dac24e6fbba44c0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d2f44e752679cd66c49fff8f40da7bb4d837c98ec5259dac24e6fbba44c0c5->enter($__internal_93d2f44e752679cd66c49fff8f40da7bb4d837c98ec5259dac24e6fbba44c0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b1f2be6e2af4054cfa119564654a6b537734ac522d0a1f94a22f08a459ec67a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f2be6e2af4054cfa119564654a6b537734ac522d0a1f94a22f08a459ec67a5->enter($__internal_b1f2be6e2af4054cfa119564654a6b537734ac522d0a1f94a22f08a459ec67a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_93d2f44e752679cd66c49fff8f40da7bb4d837c98ec5259dac24e6fbba44c0c5->leave($__internal_93d2f44e752679cd66c49fff8f40da7bb4d837c98ec5259dac24e6fbba44c0c5_prof);

        
        $__internal_b1f2be6e2af4054cfa119564654a6b537734ac522d0a1f94a22f08a459ec67a5->leave($__internal_b1f2be6e2af4054cfa119564654a6b537734ac522d0a1f94a22f08a459ec67a5_prof);

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
