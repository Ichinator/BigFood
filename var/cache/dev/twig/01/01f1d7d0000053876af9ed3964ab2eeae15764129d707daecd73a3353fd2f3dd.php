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
        $__internal_4001166078f94ad3e79194d5a6a22f9a8820e385182d61d67acf7c5ff0cc1e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4001166078f94ad3e79194d5a6a22f9a8820e385182d61d67acf7c5ff0cc1e39->enter($__internal_4001166078f94ad3e79194d5a6a22f9a8820e385182d61d67acf7c5ff0cc1e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4a8fc19115ea75c735681805d9c500ffbdd791e763548d533ed5c4e76d0a6921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8fc19115ea75c735681805d9c500ffbdd791e763548d533ed5c4e76d0a6921->enter($__internal_4a8fc19115ea75c735681805d9c500ffbdd791e763548d533ed5c4e76d0a6921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4001166078f94ad3e79194d5a6a22f9a8820e385182d61d67acf7c5ff0cc1e39->leave($__internal_4001166078f94ad3e79194d5a6a22f9a8820e385182d61d67acf7c5ff0cc1e39_prof);

        
        $__internal_4a8fc19115ea75c735681805d9c500ffbdd791e763548d533ed5c4e76d0a6921->leave($__internal_4a8fc19115ea75c735681805d9c500ffbdd791e763548d533ed5c4e76d0a6921_prof);

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
