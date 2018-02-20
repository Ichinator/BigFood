<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4b5c335cb5bbc0ca1ded863487b1c646f62e9779921d7f31edfad4b22ffbd476 extends Twig_Template
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
        $__internal_faf874d7e832f8967040c1f7ca8176e0f3d04a60a2322060515722d849eae399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf874d7e832f8967040c1f7ca8176e0f3d04a60a2322060515722d849eae399->enter($__internal_faf874d7e832f8967040c1f7ca8176e0f3d04a60a2322060515722d849eae399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ee34445802bae4016896e351f0c6f184bb63ea8c87102319ac6a046977fc9aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee34445802bae4016896e351f0c6f184bb63ea8c87102319ac6a046977fc9aa3->enter($__internal_ee34445802bae4016896e351f0c6f184bb63ea8c87102319ac6a046977fc9aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_faf874d7e832f8967040c1f7ca8176e0f3d04a60a2322060515722d849eae399->leave($__internal_faf874d7e832f8967040c1f7ca8176e0f3d04a60a2322060515722d849eae399_prof);

        
        $__internal_ee34445802bae4016896e351f0c6f184bb63ea8c87102319ac6a046977fc9aa3->leave($__internal_ee34445802bae4016896e351f0c6f184bb63ea8c87102319ac6a046977fc9aa3_prof);

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
