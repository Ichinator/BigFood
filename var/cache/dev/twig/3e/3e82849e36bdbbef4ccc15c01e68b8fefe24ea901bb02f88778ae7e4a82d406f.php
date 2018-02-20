<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2ac9cebe170a8be91766c477266714e9a15e1a8cc87fd77f2e5f76c17e97e527 extends Twig_Template
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
        $__internal_9dad09657ca1853dc6359a57208017261cbc74c9c7d1e840787fdac42f9918c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dad09657ca1853dc6359a57208017261cbc74c9c7d1e840787fdac42f9918c4->enter($__internal_9dad09657ca1853dc6359a57208017261cbc74c9c7d1e840787fdac42f9918c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a073a329bbf13359b1e20056ac3cd9593c83f0f877b6eac1cbc2899ff70ea62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a073a329bbf13359b1e20056ac3cd9593c83f0f877b6eac1cbc2899ff70ea62a->enter($__internal_a073a329bbf13359b1e20056ac3cd9593c83f0f877b6eac1cbc2899ff70ea62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9dad09657ca1853dc6359a57208017261cbc74c9c7d1e840787fdac42f9918c4->leave($__internal_9dad09657ca1853dc6359a57208017261cbc74c9c7d1e840787fdac42f9918c4_prof);

        
        $__internal_a073a329bbf13359b1e20056ac3cd9593c83f0f877b6eac1cbc2899ff70ea62a->leave($__internal_a073a329bbf13359b1e20056ac3cd9593c83f0f877b6eac1cbc2899ff70ea62a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
