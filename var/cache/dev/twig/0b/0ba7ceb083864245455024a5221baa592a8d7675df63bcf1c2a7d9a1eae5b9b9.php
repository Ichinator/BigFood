<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_07cec45e1c5dc30230e1ccb6ef4b0e1d6c6ee767d43ce8ee16c5d16625783439 extends Twig_Template
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
        $__internal_41ad942f4b012c7ca7b79039f549619c8c8181301ec0d4bdbe8a20d10f4f31a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ad942f4b012c7ca7b79039f549619c8c8181301ec0d4bdbe8a20d10f4f31a0->enter($__internal_41ad942f4b012c7ca7b79039f549619c8c8181301ec0d4bdbe8a20d10f4f31a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c60ab113b2e7d68664c5ede8933619cb638d848faccc4229bf7f7dc5cd838b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60ab113b2e7d68664c5ede8933619cb638d848faccc4229bf7f7dc5cd838b11->enter($__internal_c60ab113b2e7d68664c5ede8933619cb638d848faccc4229bf7f7dc5cd838b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_41ad942f4b012c7ca7b79039f549619c8c8181301ec0d4bdbe8a20d10f4f31a0->leave($__internal_41ad942f4b012c7ca7b79039f549619c8c8181301ec0d4bdbe8a20d10f4f31a0_prof);

        
        $__internal_c60ab113b2e7d68664c5ede8933619cb638d848faccc4229bf7f7dc5cd838b11->leave($__internal_c60ab113b2e7d68664c5ede8933619cb638d848faccc4229bf7f7dc5cd838b11_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
