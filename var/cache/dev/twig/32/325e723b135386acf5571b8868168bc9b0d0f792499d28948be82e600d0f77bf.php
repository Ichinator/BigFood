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
        $__internal_70c714d3b7830f12448f4045b1a0ecad55d576a348b9398446cb852daef7102b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c714d3b7830f12448f4045b1a0ecad55d576a348b9398446cb852daef7102b->enter($__internal_70c714d3b7830f12448f4045b1a0ecad55d576a348b9398446cb852daef7102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_fa1a7751958e1c2f3885617ee6f1430ce2c8d81397b65d97d07042aab7a855f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1a7751958e1c2f3885617ee6f1430ce2c8d81397b65d97d07042aab7a855f5->enter($__internal_fa1a7751958e1c2f3885617ee6f1430ce2c8d81397b65d97d07042aab7a855f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_70c714d3b7830f12448f4045b1a0ecad55d576a348b9398446cb852daef7102b->leave($__internal_70c714d3b7830f12448f4045b1a0ecad55d576a348b9398446cb852daef7102b_prof);

        
        $__internal_fa1a7751958e1c2f3885617ee6f1430ce2c8d81397b65d97d07042aab7a855f5->leave($__internal_fa1a7751958e1c2f3885617ee6f1430ce2c8d81397b65d97d07042aab7a855f5_prof);

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
