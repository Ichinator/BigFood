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
        $__internal_895cfbe7446da8a09b2a5d429cc1e8f8f9063ef2d3a9aaed8a6a721c6636bea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895cfbe7446da8a09b2a5d429cc1e8f8f9063ef2d3a9aaed8a6a721c6636bea8->enter($__internal_895cfbe7446da8a09b2a5d429cc1e8f8f9063ef2d3a9aaed8a6a721c6636bea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_e7ce3025f3eac154759cc83451c3620c3ac1c40f814ccde90cd3155f5865d82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ce3025f3eac154759cc83451c3620c3ac1c40f814ccde90cd3155f5865d82f->enter($__internal_e7ce3025f3eac154759cc83451c3620c3ac1c40f814ccde90cd3155f5865d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_895cfbe7446da8a09b2a5d429cc1e8f8f9063ef2d3a9aaed8a6a721c6636bea8->leave($__internal_895cfbe7446da8a09b2a5d429cc1e8f8f9063ef2d3a9aaed8a6a721c6636bea8_prof);

        
        $__internal_e7ce3025f3eac154759cc83451c3620c3ac1c40f814ccde90cd3155f5865d82f->leave($__internal_e7ce3025f3eac154759cc83451c3620c3ac1c40f814ccde90cd3155f5865d82f_prof);

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