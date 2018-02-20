<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_7960dc55ca434a3bc47a3020ada32be25a73085820d837d1068af5f498982cd6 extends Twig_Template
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
        $__internal_a6de718f316475b52f5f9d816e34eae572656fff9739a776ac56919daf253e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6de718f316475b52f5f9d816e34eae572656fff9739a776ac56919daf253e2f->enter($__internal_a6de718f316475b52f5f9d816e34eae572656fff9739a776ac56919daf253e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_b05e9ce52841e72aef4171cd9479aefcc9dd7806566b68f940e4ef0fa3076bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05e9ce52841e72aef4171cd9479aefcc9dd7806566b68f940e4ef0fa3076bde->enter($__internal_b05e9ce52841e72aef4171cd9479aefcc9dd7806566b68f940e4ef0fa3076bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a6de718f316475b52f5f9d816e34eae572656fff9739a776ac56919daf253e2f->leave($__internal_a6de718f316475b52f5f9d816e34eae572656fff9739a776ac56919daf253e2f_prof);

        
        $__internal_b05e9ce52841e72aef4171cd9479aefcc9dd7806566b68f940e4ef0fa3076bde->leave($__internal_b05e9ce52841e72aef4171cd9479aefcc9dd7806566b68f940e4ef0fa3076bde_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
", "EasyAdminBundle:default:field_time.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
