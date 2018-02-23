<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ac2adfda774b9ffc1c8b808b93a2d7f4eac33bedeab6734ad4172701aff6392d extends Twig_Template
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
        $__internal_34c1334985332274e1cdd2ed3c285b5fcfb98ddaea62a9947507ba93078a7e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c1334985332274e1cdd2ed3c285b5fcfb98ddaea62a9947507ba93078a7e09->enter($__internal_34c1334985332274e1cdd2ed3c285b5fcfb98ddaea62a9947507ba93078a7e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7a9780bf2ce166dbafbe855e7799a3b22164ad9f6680a2b2f4b7af254bc3100a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9780bf2ce166dbafbe855e7799a3b22164ad9f6680a2b2f4b7af254bc3100a->enter($__internal_7a9780bf2ce166dbafbe855e7799a3b22164ad9f6680a2b2f4b7af254bc3100a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_34c1334985332274e1cdd2ed3c285b5fcfb98ddaea62a9947507ba93078a7e09->leave($__internal_34c1334985332274e1cdd2ed3c285b5fcfb98ddaea62a9947507ba93078a7e09_prof);

        
        $__internal_7a9780bf2ce166dbafbe855e7799a3b22164ad9f6680a2b2f4b7af254bc3100a->leave($__internal_7a9780bf2ce166dbafbe855e7799a3b22164ad9f6680a2b2f4b7af254bc3100a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
