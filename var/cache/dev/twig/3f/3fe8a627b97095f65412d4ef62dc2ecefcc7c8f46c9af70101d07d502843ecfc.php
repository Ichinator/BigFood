<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_571b0ec08fba3784e4b0ef425719ac09addd89d6e166b16d70cf5c8519735454 extends Twig_Template
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
        $__internal_49302acb50f6f05e06b8efc85e14d29e8f13f734a854f67c8a6007e0e44a81bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49302acb50f6f05e06b8efc85e14d29e8f13f734a854f67c8a6007e0e44a81bf->enter($__internal_49302acb50f6f05e06b8efc85e14d29e8f13f734a854f67c8a6007e0e44a81bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_63b6b95c3512d8848b168d17420de4af441390647acb3a9daa40b277ac04ad5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b6b95c3512d8848b168d17420de4af441390647acb3a9daa40b277ac04ad5a->enter($__internal_63b6b95c3512d8848b168d17420de4af441390647acb3a9daa40b277ac04ad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_49302acb50f6f05e06b8efc85e14d29e8f13f734a854f67c8a6007e0e44a81bf->leave($__internal_49302acb50f6f05e06b8efc85e14d29e8f13f734a854f67c8a6007e0e44a81bf_prof);

        
        $__internal_63b6b95c3512d8848b168d17420de4af441390647acb3a9daa40b277ac04ad5a->leave($__internal_63b6b95c3512d8848b168d17420de4af441390647acb3a9daa40b277ac04ad5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
