<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_893ca70875f2dd7bbfeab0012366833af043d95c6dbb006c1b360956f5fd0bcc extends Twig_Template
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
        $__internal_2d970d2590f1a0c7d21fbcb41a27d93ec0b9d69d8489cd279089813b9855077e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d970d2590f1a0c7d21fbcb41a27d93ec0b9d69d8489cd279089813b9855077e->enter($__internal_2d970d2590f1a0c7d21fbcb41a27d93ec0b9d69d8489cd279089813b9855077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_0e37ede709a4f7ce3c704a8d8a24047ca2d0d40242fe9fcfb602a95b0aef249e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e37ede709a4f7ce3c704a8d8a24047ca2d0d40242fe9fcfb602a95b0aef249e->enter($__internal_0e37ede709a4f7ce3c704a8d8a24047ca2d0d40242fe9fcfb602a95b0aef249e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_2d970d2590f1a0c7d21fbcb41a27d93ec0b9d69d8489cd279089813b9855077e->leave($__internal_2d970d2590f1a0c7d21fbcb41a27d93ec0b9d69d8489cd279089813b9855077e_prof);

        
        $__internal_0e37ede709a4f7ce3c704a8d8a24047ca2d0d40242fe9fcfb602a95b0aef249e->leave($__internal_0e37ede709a4f7ce3c704a8d8a24047ca2d0d40242fe9fcfb602a95b0aef249e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
", "EasyAdminBundle:default:field_integer.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
