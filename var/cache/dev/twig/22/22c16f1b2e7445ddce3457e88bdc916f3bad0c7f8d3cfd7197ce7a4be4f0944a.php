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
        $__internal_131100aba8c78090511a801e2cec0985abcf575c32ab5c57c089c43a515a0e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131100aba8c78090511a801e2cec0985abcf575c32ab5c57c089c43a515a0e7e->enter($__internal_131100aba8c78090511a801e2cec0985abcf575c32ab5c57c089c43a515a0e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_93cb3fe4bcd52519be577a2ab9948afc517accbac0469836c7c411079c992643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cb3fe4bcd52519be577a2ab9948afc517accbac0469836c7c411079c992643->enter($__internal_93cb3fe4bcd52519be577a2ab9948afc517accbac0469836c7c411079c992643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_131100aba8c78090511a801e2cec0985abcf575c32ab5c57c089c43a515a0e7e->leave($__internal_131100aba8c78090511a801e2cec0985abcf575c32ab5c57c089c43a515a0e7e_prof);

        
        $__internal_93cb3fe4bcd52519be577a2ab9948afc517accbac0469836c7c411079c992643->leave($__internal_93cb3fe4bcd52519be577a2ab9948afc517accbac0469836c7c411079c992643_prof);

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
