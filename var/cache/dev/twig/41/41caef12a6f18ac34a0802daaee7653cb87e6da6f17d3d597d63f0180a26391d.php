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
        $__internal_895337c47a8cc4e6d4628ae9fbcd3a67396ef5c556724c037dfee2d1f5f41a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895337c47a8cc4e6d4628ae9fbcd3a67396ef5c556724c037dfee2d1f5f41a96->enter($__internal_895337c47a8cc4e6d4628ae9fbcd3a67396ef5c556724c037dfee2d1f5f41a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_aff62e363da7774b9aa7d511fda474e3454b3e32a7e121bb1396708752388d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff62e363da7774b9aa7d511fda474e3454b3e32a7e121bb1396708752388d40->enter($__internal_aff62e363da7774b9aa7d511fda474e3454b3e32a7e121bb1396708752388d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_895337c47a8cc4e6d4628ae9fbcd3a67396ef5c556724c037dfee2d1f5f41a96->leave($__internal_895337c47a8cc4e6d4628ae9fbcd3a67396ef5c556724c037dfee2d1f5f41a96_prof);

        
        $__internal_aff62e363da7774b9aa7d511fda474e3454b3e32a7e121bb1396708752388d40->leave($__internal_aff62e363da7774b9aa7d511fda474e3454b3e32a7e121bb1396708752388d40_prof);

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
