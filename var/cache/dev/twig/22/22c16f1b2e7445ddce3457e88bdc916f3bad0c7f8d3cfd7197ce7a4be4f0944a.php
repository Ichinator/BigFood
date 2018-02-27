<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b289182ae944c6f93f4a98ee383865dc533af430d6ecd880b4568d3798136ee3 extends Twig_Template
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
        $__internal_36ac11480385d046fed13c2084a9c26115dd74cc2b35644066a8fea147175aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ac11480385d046fed13c2084a9c26115dd74cc2b35644066a8fea147175aa3->enter($__internal_36ac11480385d046fed13c2084a9c26115dd74cc2b35644066a8fea147175aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d4c109c6b6474d01c237b3f6da93b4a390dc8de20aa863145deb34bac992381a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c109c6b6474d01c237b3f6da93b4a390dc8de20aa863145deb34bac992381a->enter($__internal_d4c109c6b6474d01c237b3f6da93b4a390dc8de20aa863145deb34bac992381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_36ac11480385d046fed13c2084a9c26115dd74cc2b35644066a8fea147175aa3->leave($__internal_36ac11480385d046fed13c2084a9c26115dd74cc2b35644066a8fea147175aa3_prof);

        
        $__internal_d4c109c6b6474d01c237b3f6da93b4a390dc8de20aa863145deb34bac992381a->leave($__internal_d4c109c6b6474d01c237b3f6da93b4a390dc8de20aa863145deb34bac992381a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
