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
        $__internal_14027d4ee2c43a815ba5bc18f14242210933c5b2149caa21289753a927509eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14027d4ee2c43a815ba5bc18f14242210933c5b2149caa21289753a927509eda->enter($__internal_14027d4ee2c43a815ba5bc18f14242210933c5b2149caa21289753a927509eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b441183424d73f9ef5c37f3a3c8d3fe86e59834db72b366604b84c167fcd2a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b441183424d73f9ef5c37f3a3c8d3fe86e59834db72b366604b84c167fcd2a0f->enter($__internal_b441183424d73f9ef5c37f3a3c8d3fe86e59834db72b366604b84c167fcd2a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_14027d4ee2c43a815ba5bc18f14242210933c5b2149caa21289753a927509eda->leave($__internal_14027d4ee2c43a815ba5bc18f14242210933c5b2149caa21289753a927509eda_prof);

        
        $__internal_b441183424d73f9ef5c37f3a3c8d3fe86e59834db72b366604b84c167fcd2a0f->leave($__internal_b441183424d73f9ef5c37f3a3c8d3fe86e59834db72b366604b84c167fcd2a0f_prof);

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
