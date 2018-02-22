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
        $__internal_6607c855d35759d0b76c9680025620a7d5cb90ea4ae521f658da2ee45c88cdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6607c855d35759d0b76c9680025620a7d5cb90ea4ae521f658da2ee45c88cdb6->enter($__internal_6607c855d35759d0b76c9680025620a7d5cb90ea4ae521f658da2ee45c88cdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_a33cd2e8bf978ed3ecb3cf385392992efafc829c6bb0a7aa72d483a9a0344f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33cd2e8bf978ed3ecb3cf385392992efafc829c6bb0a7aa72d483a9a0344f34->enter($__internal_a33cd2e8bf978ed3ecb3cf385392992efafc829c6bb0a7aa72d483a9a0344f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6607c855d35759d0b76c9680025620a7d5cb90ea4ae521f658da2ee45c88cdb6->leave($__internal_6607c855d35759d0b76c9680025620a7d5cb90ea4ae521f658da2ee45c88cdb6_prof);

        
        $__internal_a33cd2e8bf978ed3ecb3cf385392992efafc829c6bb0a7aa72d483a9a0344f34->leave($__internal_a33cd2e8bf978ed3ecb3cf385392992efafc829c6bb0a7aa72d483a9a0344f34_prof);

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
