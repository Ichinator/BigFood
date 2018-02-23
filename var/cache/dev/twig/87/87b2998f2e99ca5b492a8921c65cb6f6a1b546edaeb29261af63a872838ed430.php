<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_6dd5d4f20b99aa71032f215d3094d867d22994f0beb04fc595fe466dc87e56a7 extends Twig_Template
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
        $__internal_5843a0dd3ac643feeb4e470f70cde4859ec59d1a6a0971fe2658466bf2d3159b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5843a0dd3ac643feeb4e470f70cde4859ec59d1a6a0971fe2658466bf2d3159b->enter($__internal_5843a0dd3ac643feeb4e470f70cde4859ec59d1a6a0971fe2658466bf2d3159b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_4996924dcab3486493a1eb45c67249de04a25ec8c6a20132fb644dcbd7c08c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4996924dcab3486493a1eb45c67249de04a25ec8c6a20132fb644dcbd7c08c0b->enter($__internal_4996924dcab3486493a1eb45c67249de04a25ec8c6a20132fb644dcbd7c08c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_5843a0dd3ac643feeb4e470f70cde4859ec59d1a6a0971fe2658466bf2d3159b->leave($__internal_5843a0dd3ac643feeb4e470f70cde4859ec59d1a6a0971fe2658466bf2d3159b_prof);

        
        $__internal_4996924dcab3486493a1eb45c67249de04a25ec8c6a20132fb644dcbd7c08c0b->leave($__internal_4996924dcab3486493a1eb45c67249de04a25ec8c6a20132fb644dcbd7c08c0b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_smallint.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
