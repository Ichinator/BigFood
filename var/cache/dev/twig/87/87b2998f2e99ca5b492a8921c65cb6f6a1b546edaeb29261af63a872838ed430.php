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
        $__internal_06199417d3d03b1773c4c0789f5ca14ac274a5f69c6345656804d86b7ef2bee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06199417d3d03b1773c4c0789f5ca14ac274a5f69c6345656804d86b7ef2bee4->enter($__internal_06199417d3d03b1773c4c0789f5ca14ac274a5f69c6345656804d86b7ef2bee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_0c0cc0ff043f879e217b5eb6e02736d44e7effe224e7c112856e551b91421fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0cc0ff043f879e217b5eb6e02736d44e7effe224e7c112856e551b91421fc0->enter($__internal_0c0cc0ff043f879e217b5eb6e02736d44e7effe224e7c112856e551b91421fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_06199417d3d03b1773c4c0789f5ca14ac274a5f69c6345656804d86b7ef2bee4->leave($__internal_06199417d3d03b1773c4c0789f5ca14ac274a5f69c6345656804d86b7ef2bee4_prof);

        
        $__internal_0c0cc0ff043f879e217b5eb6e02736d44e7effe224e7c112856e551b91421fc0->leave($__internal_0c0cc0ff043f879e217b5eb6e02736d44e7effe224e7c112856e551b91421fc0_prof);

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
