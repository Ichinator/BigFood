<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_adba99105025079b217708d412407db08f3748a06d0ec327b272c584d685b137 extends Twig_Template
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
        $__internal_fc068843492d49dfc7921a3c012c2a89160d4cf2f08d1575d5fb22ad29019aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc068843492d49dfc7921a3c012c2a89160d4cf2f08d1575d5fb22ad29019aa0->enter($__internal_fc068843492d49dfc7921a3c012c2a89160d4cf2f08d1575d5fb22ad29019aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5c07d4c496cd5fd3c76b9e7e795f1b6aae962935db9c480c712e445a1af07b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c07d4c496cd5fd3c76b9e7e795f1b6aae962935db9c480c712e445a1af07b18->enter($__internal_5c07d4c496cd5fd3c76b9e7e795f1b6aae962935db9c480c712e445a1af07b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fc068843492d49dfc7921a3c012c2a89160d4cf2f08d1575d5fb22ad29019aa0->leave($__internal_fc068843492d49dfc7921a3c012c2a89160d4cf2f08d1575d5fb22ad29019aa0_prof);

        
        $__internal_5c07d4c496cd5fd3c76b9e7e795f1b6aae962935db9c480c712e445a1af07b18->leave($__internal_5c07d4c496cd5fd3c76b9e7e795f1b6aae962935db9c480c712e445a1af07b18_prof);

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
