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
        $__internal_8dd7efcb6ad442c5b637b8d9ff67937c8b404da2367b4827e6b19e835e6dd348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd7efcb6ad442c5b637b8d9ff67937c8b404da2367b4827e6b19e835e6dd348->enter($__internal_8dd7efcb6ad442c5b637b8d9ff67937c8b404da2367b4827e6b19e835e6dd348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_b2a8c1f6a82b55e9cac4332f75edbf609a2267404b6a75ca9c0754655ab47692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a8c1f6a82b55e9cac4332f75edbf609a2267404b6a75ca9c0754655ab47692->enter($__internal_b2a8c1f6a82b55e9cac4332f75edbf609a2267404b6a75ca9c0754655ab47692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_8dd7efcb6ad442c5b637b8d9ff67937c8b404da2367b4827e6b19e835e6dd348->leave($__internal_8dd7efcb6ad442c5b637b8d9ff67937c8b404da2367b4827e6b19e835e6dd348_prof);

        
        $__internal_b2a8c1f6a82b55e9cac4332f75edbf609a2267404b6a75ca9c0754655ab47692->leave($__internal_b2a8c1f6a82b55e9cac4332f75edbf609a2267404b6a75ca9c0754655ab47692_prof);

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
