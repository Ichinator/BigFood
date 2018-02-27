<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3aad7571cf8e70695af493d180ae240343afcc50bd50cbb244a369fe654fd996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_969fde7c8476d32aad7e18c4f9bfb78d334562a7ebde15a736a2e1185f719680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969fde7c8476d32aad7e18c4f9bfb78d334562a7ebde15a736a2e1185f719680->enter($__internal_969fde7c8476d32aad7e18c4f9bfb78d334562a7ebde15a736a2e1185f719680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_831c60f33219ec4aa5bad90fa41f1940d4f1debf45635902ec67855dfc9234c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831c60f33219ec4aa5bad90fa41f1940d4f1debf45635902ec67855dfc9234c6->enter($__internal_831c60f33219ec4aa5bad90fa41f1940d4f1debf45635902ec67855dfc9234c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969fde7c8476d32aad7e18c4f9bfb78d334562a7ebde15a736a2e1185f719680->leave($__internal_969fde7c8476d32aad7e18c4f9bfb78d334562a7ebde15a736a2e1185f719680_prof);

        
        $__internal_831c60f33219ec4aa5bad90fa41f1940d4f1debf45635902ec67855dfc9234c6->leave($__internal_831c60f33219ec4aa5bad90fa41f1940d4f1debf45635902ec67855dfc9234c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb86dae2c81bb1418f56d2d923ae13db91ad23704dae9d740a60e1907cd2aebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb86dae2c81bb1418f56d2d923ae13db91ad23704dae9d740a60e1907cd2aebd->enter($__internal_eb86dae2c81bb1418f56d2d923ae13db91ad23704dae9d740a60e1907cd2aebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_691b49eadf892d6fd5b9770fdcc8e33b5359ffff04b1059d65a6a17c470316d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691b49eadf892d6fd5b9770fdcc8e33b5359ffff04b1059d65a6a17c470316d2->enter($__internal_691b49eadf892d6fd5b9770fdcc8e33b5359ffff04b1059d65a6a17c470316d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_691b49eadf892d6fd5b9770fdcc8e33b5359ffff04b1059d65a6a17c470316d2->leave($__internal_691b49eadf892d6fd5b9770fdcc8e33b5359ffff04b1059d65a6a17c470316d2_prof);

        
        $__internal_eb86dae2c81bb1418f56d2d923ae13db91ad23704dae9d740a60e1907cd2aebd->leave($__internal_eb86dae2c81bb1418f56d2d923ae13db91ad23704dae9d740a60e1907cd2aebd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c39ffd0af87cbcf6466c2f237c4008d4a269483a85675db33e791a4dd672ce49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39ffd0af87cbcf6466c2f237c4008d4a269483a85675db33e791a4dd672ce49->enter($__internal_c39ffd0af87cbcf6466c2f237c4008d4a269483a85675db33e791a4dd672ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce14fac49fe1772d685e5aba913f349570e17a6e1de7224da88ba8f45da248e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce14fac49fe1772d685e5aba913f349570e17a6e1de7224da88ba8f45da248e0->enter($__internal_ce14fac49fe1772d685e5aba913f349570e17a6e1de7224da88ba8f45da248e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ce14fac49fe1772d685e5aba913f349570e17a6e1de7224da88ba8f45da248e0->leave($__internal_ce14fac49fe1772d685e5aba913f349570e17a6e1de7224da88ba8f45da248e0_prof);

        
        $__internal_c39ffd0af87cbcf6466c2f237c4008d4a269483a85675db33e791a4dd672ce49->leave($__internal_c39ffd0af87cbcf6466c2f237c4008d4a269483a85675db33e791a4dd672ce49_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
