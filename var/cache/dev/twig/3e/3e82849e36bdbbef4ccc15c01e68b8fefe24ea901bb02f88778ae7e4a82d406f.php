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
        $__internal_e033e8178b8fcf107a01ff3a72e8ebb6a0e59811f54040b7fa9c1c72f50dcc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e033e8178b8fcf107a01ff3a72e8ebb6a0e59811f54040b7fa9c1c72f50dcc63->enter($__internal_e033e8178b8fcf107a01ff3a72e8ebb6a0e59811f54040b7fa9c1c72f50dcc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f52392a5593433412ff56568722ad6b70ae324e7903996fdadef70b0ef12ec1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52392a5593433412ff56568722ad6b70ae324e7903996fdadef70b0ef12ec1b->enter($__internal_f52392a5593433412ff56568722ad6b70ae324e7903996fdadef70b0ef12ec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e033e8178b8fcf107a01ff3a72e8ebb6a0e59811f54040b7fa9c1c72f50dcc63->leave($__internal_e033e8178b8fcf107a01ff3a72e8ebb6a0e59811f54040b7fa9c1c72f50dcc63_prof);

        
        $__internal_f52392a5593433412ff56568722ad6b70ae324e7903996fdadef70b0ef12ec1b->leave($__internal_f52392a5593433412ff56568722ad6b70ae324e7903996fdadef70b0ef12ec1b_prof);

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
