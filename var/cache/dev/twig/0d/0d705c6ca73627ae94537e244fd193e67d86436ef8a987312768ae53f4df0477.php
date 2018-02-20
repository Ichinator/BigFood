<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0a5bac2696f3ceaec238aa48490fbbbf69576a0bc5c7bad78d41bd732c5d75dd extends Twig_Template
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
        $__internal_0f190872ea5bc54e45d2f8962e763175ffe04a5e83762583be88832bb09f095b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f190872ea5bc54e45d2f8962e763175ffe04a5e83762583be88832bb09f095b->enter($__internal_0f190872ea5bc54e45d2f8962e763175ffe04a5e83762583be88832bb09f095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9b26c78657de79c5f4c0fd9268c9d119e3394648ce609b5847b10767a7c72998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b26c78657de79c5f4c0fd9268c9d119e3394648ce609b5847b10767a7c72998->enter($__internal_9b26c78657de79c5f4c0fd9268c9d119e3394648ce609b5847b10767a7c72998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0f190872ea5bc54e45d2f8962e763175ffe04a5e83762583be88832bb09f095b->leave($__internal_0f190872ea5bc54e45d2f8962e763175ffe04a5e83762583be88832bb09f095b_prof);

        
        $__internal_9b26c78657de79c5f4c0fd9268c9d119e3394648ce609b5847b10767a7c72998->leave($__internal_9b26c78657de79c5f4c0fd9268c9d119e3394648ce609b5847b10767a7c72998_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
