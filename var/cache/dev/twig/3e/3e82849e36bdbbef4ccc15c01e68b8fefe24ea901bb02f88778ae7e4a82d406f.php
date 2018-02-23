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
        $__internal_d61bae2ac99bd5707553c6726be18a90c7c3e44e29f827b8fcac0573d2643125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61bae2ac99bd5707553c6726be18a90c7c3e44e29f827b8fcac0573d2643125->enter($__internal_d61bae2ac99bd5707553c6726be18a90c7c3e44e29f827b8fcac0573d2643125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ec03aec6e7e0e796450cef541aa80cf49338cc42f72842642e59323a7fd90b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec03aec6e7e0e796450cef541aa80cf49338cc42f72842642e59323a7fd90b26->enter($__internal_ec03aec6e7e0e796450cef541aa80cf49338cc42f72842642e59323a7fd90b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d61bae2ac99bd5707553c6726be18a90c7c3e44e29f827b8fcac0573d2643125->leave($__internal_d61bae2ac99bd5707553c6726be18a90c7c3e44e29f827b8fcac0573d2643125_prof);

        
        $__internal_ec03aec6e7e0e796450cef541aa80cf49338cc42f72842642e59323a7fd90b26->leave($__internal_ec03aec6e7e0e796450cef541aa80cf49338cc42f72842642e59323a7fd90b26_prof);

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
