<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a5c79ecc3dc0a78c8be61e93261a0458230904081d96025c43c78a322794cdbd extends Twig_Template
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
        $__internal_23e224261d4d7c4bd13ba758aa5040b2753217dd7204a0c58017447d54d4cdf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e224261d4d7c4bd13ba758aa5040b2753217dd7204a0c58017447d54d4cdf7->enter($__internal_23e224261d4d7c4bd13ba758aa5040b2753217dd7204a0c58017447d54d4cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6b44d55acfa4e0ca86ad44707a3131f8cd7f8d3fafc276d16fa5b64bf2d81de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b44d55acfa4e0ca86ad44707a3131f8cd7f8d3fafc276d16fa5b64bf2d81de3->enter($__internal_6b44d55acfa4e0ca86ad44707a3131f8cd7f8d3fafc276d16fa5b64bf2d81de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_23e224261d4d7c4bd13ba758aa5040b2753217dd7204a0c58017447d54d4cdf7->leave($__internal_23e224261d4d7c4bd13ba758aa5040b2753217dd7204a0c58017447d54d4cdf7_prof);

        
        $__internal_6b44d55acfa4e0ca86ad44707a3131f8cd7f8d3fafc276d16fa5b64bf2d81de3->leave($__internal_6b44d55acfa4e0ca86ad44707a3131f8cd7f8d3fafc276d16fa5b64bf2d81de3_prof);

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
