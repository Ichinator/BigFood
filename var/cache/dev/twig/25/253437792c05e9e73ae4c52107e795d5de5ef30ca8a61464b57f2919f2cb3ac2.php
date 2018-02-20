<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_3eeb021b7e5ab677010bd0a67c2cc9c4190d8fe9b7d2633cd5c31a08bcd9bdf9 extends Twig_Template
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
        $__internal_e8268c8f9247daf99a51a6e55bde5737b82db76ae7816e6fc7ed9e5c30faa2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8268c8f9247daf99a51a6e55bde5737b82db76ae7816e6fc7ed9e5c30faa2a4->enter($__internal_e8268c8f9247daf99a51a6e55bde5737b82db76ae7816e6fc7ed9e5c30faa2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_aa32e68aaa4a8d20d9c515b9dc97dce3d5649ab2e1088ac1cc481de71ede9874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa32e68aaa4a8d20d9c515b9dc97dce3d5649ab2e1088ac1cc481de71ede9874->enter($__internal_aa32e68aaa4a8d20d9c515b9dc97dce3d5649ab2e1088ac1cc481de71ede9874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e8268c8f9247daf99a51a6e55bde5737b82db76ae7816e6fc7ed9e5c30faa2a4->leave($__internal_e8268c8f9247daf99a51a6e55bde5737b82db76ae7816e6fc7ed9e5c30faa2a4_prof);

        
        $__internal_aa32e68aaa4a8d20d9c515b9dc97dce3d5649ab2e1088ac1cc481de71ede9874->leave($__internal_aa32e68aaa4a8d20d9c515b9dc97dce3d5649ab2e1088ac1cc481de71ede9874_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
