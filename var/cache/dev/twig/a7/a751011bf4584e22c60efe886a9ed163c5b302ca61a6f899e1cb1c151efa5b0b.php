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
        $__internal_7d7343cc97fd950ff3e3d66041f123bcb6d24957b499f4321e31244f8585bb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7343cc97fd950ff3e3d66041f123bcb6d24957b499f4321e31244f8585bb77->enter($__internal_7d7343cc97fd950ff3e3d66041f123bcb6d24957b499f4321e31244f8585bb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_458ae1926f0019bb7cb4716be33ab988dbdbb10f7107a642d43bdbec9f5cc09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458ae1926f0019bb7cb4716be33ab988dbdbb10f7107a642d43bdbec9f5cc09b->enter($__internal_458ae1926f0019bb7cb4716be33ab988dbdbb10f7107a642d43bdbec9f5cc09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_7d7343cc97fd950ff3e3d66041f123bcb6d24957b499f4321e31244f8585bb77->leave($__internal_7d7343cc97fd950ff3e3d66041f123bcb6d24957b499f4321e31244f8585bb77_prof);

        
        $__internal_458ae1926f0019bb7cb4716be33ab988dbdbb10f7107a642d43bdbec9f5cc09b->leave($__internal_458ae1926f0019bb7cb4716be33ab988dbdbb10f7107a642d43bdbec9f5cc09b_prof);

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
