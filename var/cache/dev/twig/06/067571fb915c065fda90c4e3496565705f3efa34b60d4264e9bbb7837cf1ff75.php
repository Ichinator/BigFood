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
        $__internal_537c4c15cc51936f7bcb4ce5d2f4cef3dd746da40788876e2dd37608b4b53d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537c4c15cc51936f7bcb4ce5d2f4cef3dd746da40788876e2dd37608b4b53d9e->enter($__internal_537c4c15cc51936f7bcb4ce5d2f4cef3dd746da40788876e2dd37608b4b53d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b48f3c9394425f85d445229dee93b5c0302b8c004ff6eb3ba9e6cfcd39792d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48f3c9394425f85d445229dee93b5c0302b8c004ff6eb3ba9e6cfcd39792d42->enter($__internal_b48f3c9394425f85d445229dee93b5c0302b8c004ff6eb3ba9e6cfcd39792d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_537c4c15cc51936f7bcb4ce5d2f4cef3dd746da40788876e2dd37608b4b53d9e->leave($__internal_537c4c15cc51936f7bcb4ce5d2f4cef3dd746da40788876e2dd37608b4b53d9e_prof);

        
        $__internal_b48f3c9394425f85d445229dee93b5c0302b8c004ff6eb3ba9e6cfcd39792d42->leave($__internal_b48f3c9394425f85d445229dee93b5c0302b8c004ff6eb3ba9e6cfcd39792d42_prof);

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
