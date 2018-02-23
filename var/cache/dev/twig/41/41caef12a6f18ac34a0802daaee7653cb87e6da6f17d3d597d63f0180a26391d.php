<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ee3b06e68ec4ae02413c9c3328e87212f2f80bd1e3576ecb9c8959a5a66ecac1 extends Twig_Template
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
        $__internal_1e961c0e7442c5a58802d2aa81eb35f0b5494ceef08c30d813da4a1db5966975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e961c0e7442c5a58802d2aa81eb35f0b5494ceef08c30d813da4a1db5966975->enter($__internal_1e961c0e7442c5a58802d2aa81eb35f0b5494ceef08c30d813da4a1db5966975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a0e754d28ba3c491a4be9a6e5b5c05589266c4507bc08d4a35ad26168ddd9154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e754d28ba3c491a4be9a6e5b5c05589266c4507bc08d4a35ad26168ddd9154->enter($__internal_a0e754d28ba3c491a4be9a6e5b5c05589266c4507bc08d4a35ad26168ddd9154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1e961c0e7442c5a58802d2aa81eb35f0b5494ceef08c30d813da4a1db5966975->leave($__internal_1e961c0e7442c5a58802d2aa81eb35f0b5494ceef08c30d813da4a1db5966975_prof);

        
        $__internal_a0e754d28ba3c491a4be9a6e5b5c05589266c4507bc08d4a35ad26168ddd9154->leave($__internal_a0e754d28ba3c491a4be9a6e5b5c05589266c4507bc08d4a35ad26168ddd9154_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
