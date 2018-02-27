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
        $__internal_539641a5ca65a260fdf359f129f1c6a33488277ef869b9bcccb757bce1334d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539641a5ca65a260fdf359f129f1c6a33488277ef869b9bcccb757bce1334d1c->enter($__internal_539641a5ca65a260fdf359f129f1c6a33488277ef869b9bcccb757bce1334d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2c2f4d262e6f47ee8de1d6dd9db2e64a843b34cbe8f4b7cf5d428375b50be9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2f4d262e6f47ee8de1d6dd9db2e64a843b34cbe8f4b7cf5d428375b50be9a6->enter($__internal_2c2f4d262e6f47ee8de1d6dd9db2e64a843b34cbe8f4b7cf5d428375b50be9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_539641a5ca65a260fdf359f129f1c6a33488277ef869b9bcccb757bce1334d1c->leave($__internal_539641a5ca65a260fdf359f129f1c6a33488277ef869b9bcccb757bce1334d1c_prof);

        
        $__internal_2c2f4d262e6f47ee8de1d6dd9db2e64a843b34cbe8f4b7cf5d428375b50be9a6->leave($__internal_2c2f4d262e6f47ee8de1d6dd9db2e64a843b34cbe8f4b7cf5d428375b50be9a6_prof);

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
