<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_07add19d7233e1d699f2c74df14601e244252a3bc1c4986568d40acb9e7239df extends Twig_Template
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
        $__internal_eda7cf7b4303f188284b97938483138de3c12c297512a51f9a3d0dfeea3f8b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda7cf7b4303f188284b97938483138de3c12c297512a51f9a3d0dfeea3f8b35->enter($__internal_eda7cf7b4303f188284b97938483138de3c12c297512a51f9a3d0dfeea3f8b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f4c0af4aecf07416807de5372b52eb0178f12b4298b72698cd1702752215685e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c0af4aecf07416807de5372b52eb0178f12b4298b72698cd1702752215685e->enter($__internal_f4c0af4aecf07416807de5372b52eb0178f12b4298b72698cd1702752215685e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_eda7cf7b4303f188284b97938483138de3c12c297512a51f9a3d0dfeea3f8b35->leave($__internal_eda7cf7b4303f188284b97938483138de3c12c297512a51f9a3d0dfeea3f8b35_prof);

        
        $__internal_f4c0af4aecf07416807de5372b52eb0178f12b4298b72698cd1702752215685e->leave($__internal_f4c0af4aecf07416807de5372b52eb0178f12b4298b72698cd1702752215685e_prof);

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
