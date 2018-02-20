<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_8e3e716e3304e88e922233571db8c907787e4ea323b51ec645ab72934afad93c extends Twig_Template
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
        $__internal_e1600687e838ef811dedc7a3743600f8a7095a054cdbc8757668d0ffea5a5ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1600687e838ef811dedc7a3743600f8a7095a054cdbc8757668d0ffea5a5ebf->enter($__internal_e1600687e838ef811dedc7a3743600f8a7095a054cdbc8757668d0ffea5a5ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_26a4f2d1cb65ef009c6c1693e7a01077d952a1968cb2bc15c70cb756071ecb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a4f2d1cb65ef009c6c1693e7a01077d952a1968cb2bc15c70cb756071ecb03->enter($__internal_26a4f2d1cb65ef009c6c1693e7a01077d952a1968cb2bc15c70cb756071ecb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_e1600687e838ef811dedc7a3743600f8a7095a054cdbc8757668d0ffea5a5ebf->leave($__internal_e1600687e838ef811dedc7a3743600f8a7095a054cdbc8757668d0ffea5a5ebf_prof);

        
        $__internal_26a4f2d1cb65ef009c6c1693e7a01077d952a1968cb2bc15c70cb756071ecb03->leave($__internal_26a4f2d1cb65ef009c6c1693e7a01077d952a1968cb2bc15c70cb756071ecb03_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
