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
        $__internal_beefc53e4e1095194f8a104f410d1c1cd0127b7f61a0b3566ae7601efae1e25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beefc53e4e1095194f8a104f410d1c1cd0127b7f61a0b3566ae7601efae1e25b->enter($__internal_beefc53e4e1095194f8a104f410d1c1cd0127b7f61a0b3566ae7601efae1e25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_39c9cea3acc1197e5dc4e443ac55c8ed1d6b8ee3556050bbfd60d093800940b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c9cea3acc1197e5dc4e443ac55c8ed1d6b8ee3556050bbfd60d093800940b6->enter($__internal_39c9cea3acc1197e5dc4e443ac55c8ed1d6b8ee3556050bbfd60d093800940b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_beefc53e4e1095194f8a104f410d1c1cd0127b7f61a0b3566ae7601efae1e25b->leave($__internal_beefc53e4e1095194f8a104f410d1c1cd0127b7f61a0b3566ae7601efae1e25b_prof);

        
        $__internal_39c9cea3acc1197e5dc4e443ac55c8ed1d6b8ee3556050bbfd60d093800940b6->leave($__internal_39c9cea3acc1197e5dc4e443ac55c8ed1d6b8ee3556050bbfd60d093800940b6_prof);

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
