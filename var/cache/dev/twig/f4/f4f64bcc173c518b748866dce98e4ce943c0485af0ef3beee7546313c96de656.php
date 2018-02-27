<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_d27a0a4610acdc6a7e6750efc28ec17430a4d2d455ec19744d117c3d8d874284 extends Twig_Template
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
        $__internal_51bbc08fba6fa3f895c922b2e3ce5e910bf1986b20c15509b66a9ac33ec26a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bbc08fba6fa3f895c922b2e3ce5e910bf1986b20c15509b66a9ac33ec26a82->enter($__internal_51bbc08fba6fa3f895c922b2e3ce5e910bf1986b20c15509b66a9ac33ec26a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_59dfe15dfda538e71005c0925a6042aba840f03ba1ad5aa76103366630e55bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dfe15dfda538e71005c0925a6042aba840f03ba1ad5aa76103366630e55bab->enter($__internal_59dfe15dfda538e71005c0925a6042aba840f03ba1ad5aa76103366630e55bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_51bbc08fba6fa3f895c922b2e3ce5e910bf1986b20c15509b66a9ac33ec26a82->leave($__internal_51bbc08fba6fa3f895c922b2e3ce5e910bf1986b20c15509b66a9ac33ec26a82_prof);

        
        $__internal_59dfe15dfda538e71005c0925a6042aba840f03ba1ad5aa76103366630e55bab->leave($__internal_59dfe15dfda538e71005c0925a6042aba840f03ba1ad5aa76103366630e55bab_prof);

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
