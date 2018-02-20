<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_5e3eff844f76eb066b4941eb1824785f8df05d60c5aee3410a6a8c33bebee366 extends Twig_Template
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
        $__internal_d3709f8a1c0d5cfb003a0dff22c1509706434ed9facbd759cad3046a46ac2e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3709f8a1c0d5cfb003a0dff22c1509706434ed9facbd759cad3046a46ac2e4c->enter($__internal_d3709f8a1c0d5cfb003a0dff22c1509706434ed9facbd759cad3046a46ac2e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_7ebe5c651b958bd14e6036efb3ca1cfc85b2f8902c13d930ea83518531439f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebe5c651b958bd14e6036efb3ca1cfc85b2f8902c13d930ea83518531439f13->enter($__internal_7ebe5c651b958bd14e6036efb3ca1cfc85b2f8902c13d930ea83518531439f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_d3709f8a1c0d5cfb003a0dff22c1509706434ed9facbd759cad3046a46ac2e4c->leave($__internal_d3709f8a1c0d5cfb003a0dff22c1509706434ed9facbd759cad3046a46ac2e4c_prof);

        
        $__internal_7ebe5c651b958bd14e6036efb3ca1cfc85b2f8902c13d930ea83518531439f13->leave($__internal_7ebe5c651b958bd14e6036efb3ca1cfc85b2f8902c13d930ea83518531439f13_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
