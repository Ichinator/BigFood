<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3b336d554070b3ecd313059e04093c942aa73c673092a737bbe38f64dc7d8ac6 extends Twig_Template
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
        $__internal_133a2fb38648cbcd718fb4a39791b30341da21f8977b4bd5cde0c98fd63ac974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133a2fb38648cbcd718fb4a39791b30341da21f8977b4bd5cde0c98fd63ac974->enter($__internal_133a2fb38648cbcd718fb4a39791b30341da21f8977b4bd5cde0c98fd63ac974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_44e4043a11e5679dc1611b0ddd83df09879d1eba607d7d96df365bf6ab645be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e4043a11e5679dc1611b0ddd83df09879d1eba607d7d96df365bf6ab645be6->enter($__internal_44e4043a11e5679dc1611b0ddd83df09879d1eba607d7d96df365bf6ab645be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_133a2fb38648cbcd718fb4a39791b30341da21f8977b4bd5cde0c98fd63ac974->leave($__internal_133a2fb38648cbcd718fb4a39791b30341da21f8977b4bd5cde0c98fd63ac974_prof);

        
        $__internal_44e4043a11e5679dc1611b0ddd83df09879d1eba607d7d96df365bf6ab645be6->leave($__internal_44e4043a11e5679dc1611b0ddd83df09879d1eba607d7d96df365bf6ab645be6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
