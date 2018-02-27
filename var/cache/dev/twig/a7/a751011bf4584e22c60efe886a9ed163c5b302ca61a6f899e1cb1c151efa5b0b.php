<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_22c7e7c2cc769ab9838c133fed92db033bb870a8fd692a40ec0652c9d20b00d0 extends Twig_Template
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
        $__internal_49e25e1c8242150720bedee5718e46291d678ed5b1cd6332d119448629e9bca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e25e1c8242150720bedee5718e46291d678ed5b1cd6332d119448629e9bca0->enter($__internal_49e25e1c8242150720bedee5718e46291d678ed5b1cd6332d119448629e9bca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_e5e4a479d7e4ee8dd345c0a90b55e0b7de83029bdf1e12fafc08b22e77ba6b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e4a479d7e4ee8dd345c0a90b55e0b7de83029bdf1e12fafc08b22e77ba6b37->enter($__internal_e5e4a479d7e4ee8dd345c0a90b55e0b7de83029bdf1e12fafc08b22e77ba6b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_49e25e1c8242150720bedee5718e46291d678ed5b1cd6332d119448629e9bca0->leave($__internal_49e25e1c8242150720bedee5718e46291d678ed5b1cd6332d119448629e9bca0_prof);

        
        $__internal_e5e4a479d7e4ee8dd345c0a90b55e0b7de83029bdf1e12fafc08b22e77ba6b37->leave($__internal_e5e4a479d7e4ee8dd345c0a90b55e0b7de83029bdf1e12fafc08b22e77ba6b37_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
