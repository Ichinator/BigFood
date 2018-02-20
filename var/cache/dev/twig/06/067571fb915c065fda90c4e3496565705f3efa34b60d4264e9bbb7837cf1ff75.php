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
        $__internal_fda65000488e38d5b8edee011d5b5f08a42aec64bb583e4e89c65d2b70eb6aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda65000488e38d5b8edee011d5b5f08a42aec64bb583e4e89c65d2b70eb6aca->enter($__internal_fda65000488e38d5b8edee011d5b5f08a42aec64bb583e4e89c65d2b70eb6aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a211e6869690ebdb795cceec65c2f00db340e3b8176ad4b13a3787842046a82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a211e6869690ebdb795cceec65c2f00db340e3b8176ad4b13a3787842046a82f->enter($__internal_a211e6869690ebdb795cceec65c2f00db340e3b8176ad4b13a3787842046a82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_fda65000488e38d5b8edee011d5b5f08a42aec64bb583e4e89c65d2b70eb6aca->leave($__internal_fda65000488e38d5b8edee011d5b5f08a42aec64bb583e4e89c65d2b70eb6aca_prof);

        
        $__internal_a211e6869690ebdb795cceec65c2f00db340e3b8176ad4b13a3787842046a82f->leave($__internal_a211e6869690ebdb795cceec65c2f00db340e3b8176ad4b13a3787842046a82f_prof);

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
