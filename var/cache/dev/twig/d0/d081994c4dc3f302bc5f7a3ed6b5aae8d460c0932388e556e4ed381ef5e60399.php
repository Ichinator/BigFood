<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_f92ce8ca8cca478e22ab2d3767606dc7927601ec601cebc411d5098c37c235f4 extends Twig_Template
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
        $__internal_df4ac004ebdac7095928279ceef4e54205fa931dce42e1a6479b957e669296b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4ac004ebdac7095928279ceef4e54205fa931dce42e1a6479b957e669296b4->enter($__internal_df4ac004ebdac7095928279ceef4e54205fa931dce42e1a6479b957e669296b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_91bfd85de3fc3ba16965e91d1752aa6059cdc3deda47248d2002f8fe1693507e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91bfd85de3fc3ba16965e91d1752aa6059cdc3deda47248d2002f8fe1693507e->enter($__internal_91bfd85de3fc3ba16965e91d1752aa6059cdc3deda47248d2002f8fe1693507e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_df4ac004ebdac7095928279ceef4e54205fa931dce42e1a6479b957e669296b4->leave($__internal_df4ac004ebdac7095928279ceef4e54205fa931dce42e1a6479b957e669296b4_prof);

        
        $__internal_91bfd85de3fc3ba16965e91d1752aa6059cdc3deda47248d2002f8fe1693507e->leave($__internal_91bfd85de3fc3ba16965e91d1752aa6059cdc3deda47248d2002f8fe1693507e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
