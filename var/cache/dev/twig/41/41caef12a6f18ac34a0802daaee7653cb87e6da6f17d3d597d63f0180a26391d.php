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
        $__internal_90350f9abaf311d44168d0ff8513a49e511395932a7a4ca618e498e7533c5b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90350f9abaf311d44168d0ff8513a49e511395932a7a4ca618e498e7533c5b70->enter($__internal_90350f9abaf311d44168d0ff8513a49e511395932a7a4ca618e498e7533c5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0e846e66ba6e26241ccf1d03ff296ddae40ea5b4873b636b5e5a0ffcb060ebda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e846e66ba6e26241ccf1d03ff296ddae40ea5b4873b636b5e5a0ffcb060ebda->enter($__internal_0e846e66ba6e26241ccf1d03ff296ddae40ea5b4873b636b5e5a0ffcb060ebda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_90350f9abaf311d44168d0ff8513a49e511395932a7a4ca618e498e7533c5b70->leave($__internal_90350f9abaf311d44168d0ff8513a49e511395932a7a4ca618e498e7533c5b70_prof);

        
        $__internal_0e846e66ba6e26241ccf1d03ff296ddae40ea5b4873b636b5e5a0ffcb060ebda->leave($__internal_0e846e66ba6e26241ccf1d03ff296ddae40ea5b4873b636b5e5a0ffcb060ebda_prof);

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
