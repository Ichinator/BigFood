<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_78374c87aae8ee589f6e437dbf1248c2e75d893fb04bfb10e3f2f94b29eda4a1 extends Twig_Template
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
        $__internal_a422b9ff7990d1093c7c1cbe3a7e064df1aeb1806dd60c31bd81e1f0739d3702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a422b9ff7990d1093c7c1cbe3a7e064df1aeb1806dd60c31bd81e1f0739d3702->enter($__internal_a422b9ff7990d1093c7c1cbe3a7e064df1aeb1806dd60c31bd81e1f0739d3702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_5bcca62bb0f921357114d914a2a370ae5c0b6b8d67bb10aa3a1462484ba29e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcca62bb0f921357114d914a2a370ae5c0b6b8d67bb10aa3a1462484ba29e13->enter($__internal_5bcca62bb0f921357114d914a2a370ae5c0b6b8d67bb10aa3a1462484ba29e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a422b9ff7990d1093c7c1cbe3a7e064df1aeb1806dd60c31bd81e1f0739d3702->leave($__internal_a422b9ff7990d1093c7c1cbe3a7e064df1aeb1806dd60c31bd81e1f0739d3702_prof);

        
        $__internal_5bcca62bb0f921357114d914a2a370ae5c0b6b8d67bb10aa3a1462484ba29e13->leave($__internal_5bcca62bb0f921357114d914a2a370ae5c0b6b8d67bb10aa3a1462484ba29e13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
