<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_72b9876e7b37ffd2a2995fbda212a667e66fd6617038b41848f66d46bc7ce4af extends Twig_Template
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
        $__internal_b258bf61e04604e4763cdf2f16b971ac713868f9e18727851f4ef18ca262440a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b258bf61e04604e4763cdf2f16b971ac713868f9e18727851f4ef18ca262440a->enter($__internal_b258bf61e04604e4763cdf2f16b971ac713868f9e18727851f4ef18ca262440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_262a9c8f13eaa5ff1da51368a0b3fcc02a8ecd11d92b5826da5338d1d2456e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262a9c8f13eaa5ff1da51368a0b3fcc02a8ecd11d92b5826da5338d1d2456e56->enter($__internal_262a9c8f13eaa5ff1da51368a0b3fcc02a8ecd11d92b5826da5338d1d2456e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b258bf61e04604e4763cdf2f16b971ac713868f9e18727851f4ef18ca262440a->leave($__internal_b258bf61e04604e4763cdf2f16b971ac713868f9e18727851f4ef18ca262440a_prof);

        
        $__internal_262a9c8f13eaa5ff1da51368a0b3fcc02a8ecd11d92b5826da5338d1d2456e56->leave($__internal_262a9c8f13eaa5ff1da51368a0b3fcc02a8ecd11d92b5826da5338d1d2456e56_prof);

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
