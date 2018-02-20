<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f82d30dfbd36014184fb87ebcdd0395f09cfce5eab1ecfc9f6a9076791200e5b extends Twig_Template
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
        $__internal_801d8c032d85e68327431bd92f74263eeef95c02f712892858a374e3c95645cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801d8c032d85e68327431bd92f74263eeef95c02f712892858a374e3c95645cb->enter($__internal_801d8c032d85e68327431bd92f74263eeef95c02f712892858a374e3c95645cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_afaa70c1087c9ee9b987d469d3ba2f59be1a18f95b332c5b9bd67aab18b0d3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afaa70c1087c9ee9b987d469d3ba2f59be1a18f95b332c5b9bd67aab18b0d3dc->enter($__internal_afaa70c1087c9ee9b987d469d3ba2f59be1a18f95b332c5b9bd67aab18b0d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_801d8c032d85e68327431bd92f74263eeef95c02f712892858a374e3c95645cb->leave($__internal_801d8c032d85e68327431bd92f74263eeef95c02f712892858a374e3c95645cb_prof);

        
        $__internal_afaa70c1087c9ee9b987d469d3ba2f59be1a18f95b332c5b9bd67aab18b0d3dc->leave($__internal_afaa70c1087c9ee9b987d469d3ba2f59be1a18f95b332c5b9bd67aab18b0d3dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
