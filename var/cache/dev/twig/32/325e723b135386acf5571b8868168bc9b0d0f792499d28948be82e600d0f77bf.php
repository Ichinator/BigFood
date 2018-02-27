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
        $__internal_523a759edc5ba353149d47b69665f4963221698aa09da2179eea31e79416baec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523a759edc5ba353149d47b69665f4963221698aa09da2179eea31e79416baec->enter($__internal_523a759edc5ba353149d47b69665f4963221698aa09da2179eea31e79416baec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_ad773c5e9319bfa7b3bb7946d50da46525648ba7c5ceb2eb52ca365c8d9331cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad773c5e9319bfa7b3bb7946d50da46525648ba7c5ceb2eb52ca365c8d9331cb->enter($__internal_ad773c5e9319bfa7b3bb7946d50da46525648ba7c5ceb2eb52ca365c8d9331cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_523a759edc5ba353149d47b69665f4963221698aa09da2179eea31e79416baec->leave($__internal_523a759edc5ba353149d47b69665f4963221698aa09da2179eea31e79416baec_prof);

        
        $__internal_ad773c5e9319bfa7b3bb7946d50da46525648ba7c5ceb2eb52ca365c8d9331cb->leave($__internal_ad773c5e9319bfa7b3bb7946d50da46525648ba7c5ceb2eb52ca365c8d9331cb_prof);

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
