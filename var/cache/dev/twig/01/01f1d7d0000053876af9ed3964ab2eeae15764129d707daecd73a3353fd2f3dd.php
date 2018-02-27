<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_741ede8a5cf430724cbcaab1d8e8431a07d6535bf4e33759df82e709cd8eb615 extends Twig_Template
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
        $__internal_0e53debc59a5146e0639394e32cd0ab84ae647584d3af6fd52fb072192698672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e53debc59a5146e0639394e32cd0ab84ae647584d3af6fd52fb072192698672->enter($__internal_0e53debc59a5146e0639394e32cd0ab84ae647584d3af6fd52fb072192698672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_89810498808a1e4b11dc2f0ecbea038964fe33038ad93024b4e15d1f002cb407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89810498808a1e4b11dc2f0ecbea038964fe33038ad93024b4e15d1f002cb407->enter($__internal_89810498808a1e4b11dc2f0ecbea038964fe33038ad93024b4e15d1f002cb407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0e53debc59a5146e0639394e32cd0ab84ae647584d3af6fd52fb072192698672->leave($__internal_0e53debc59a5146e0639394e32cd0ab84ae647584d3af6fd52fb072192698672_prof);

        
        $__internal_89810498808a1e4b11dc2f0ecbea038964fe33038ad93024b4e15d1f002cb407->leave($__internal_89810498808a1e4b11dc2f0ecbea038964fe33038ad93024b4e15d1f002cb407_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
