<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_9ae66571271ba363f2209e68addff826c114e392ae6b7770c39565ac15f3b1f0 extends Twig_Template
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
        $__internal_b6f5f2937eb78fd4a41cf1a75d6fe0696c1e1a3be4da02e767ddd514ca635fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f5f2937eb78fd4a41cf1a75d6fe0696c1e1a3be4da02e767ddd514ca635fed->enter($__internal_b6f5f2937eb78fd4a41cf1a75d6fe0696c1e1a3be4da02e767ddd514ca635fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_a709ebd42ab18e7be4f3161dfbf36dcf0341efc9e37ea7721c3cd95562db4c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a709ebd42ab18e7be4f3161dfbf36dcf0341efc9e37ea7721c3cd95562db4c03->enter($__internal_a709ebd42ab18e7be4f3161dfbf36dcf0341efc9e37ea7721c3cd95562db4c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_b6f5f2937eb78fd4a41cf1a75d6fe0696c1e1a3be4da02e767ddd514ca635fed->leave($__internal_b6f5f2937eb78fd4a41cf1a75d6fe0696c1e1a3be4da02e767ddd514ca635fed_prof);

        
        $__internal_a709ebd42ab18e7be4f3161dfbf36dcf0341efc9e37ea7721c3cd95562db4c03->leave($__internal_a709ebd42ab18e7be4f3161dfbf36dcf0341efc9e37ea7721c3cd95562db4c03_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
