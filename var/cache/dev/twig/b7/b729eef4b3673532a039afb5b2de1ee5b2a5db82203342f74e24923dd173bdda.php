<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_034f4f564bac62f23fb7fa9b75d3ad75af6e7fbc635f4dd493ef74cdc7799405 extends Twig_Template
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
        $__internal_008edb0334e5bd3b804bd09d28d1976f29b6a2dfc3f193372d703295894be4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008edb0334e5bd3b804bd09d28d1976f29b6a2dfc3f193372d703295894be4c1->enter($__internal_008edb0334e5bd3b804bd09d28d1976f29b6a2dfc3f193372d703295894be4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_30ee1a41186954d394a8330b36aacfad46a8d5701afaa1fad2a87141e52cf85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ee1a41186954d394a8330b36aacfad46a8d5701afaa1fad2a87141e52cf85b->enter($__internal_30ee1a41186954d394a8330b36aacfad46a8d5701afaa1fad2a87141e52cf85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_008edb0334e5bd3b804bd09d28d1976f29b6a2dfc3f193372d703295894be4c1->leave($__internal_008edb0334e5bd3b804bd09d28d1976f29b6a2dfc3f193372d703295894be4c1_prof);

        
        $__internal_30ee1a41186954d394a8330b36aacfad46a8d5701afaa1fad2a87141e52cf85b->leave($__internal_30ee1a41186954d394a8330b36aacfad46a8d5701afaa1fad2a87141e52cf85b_prof);

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
