<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5f8a51345fb75861daf26eccfb8fc965e64f49c6853e099a8dc021bdfa9a8bcb extends Twig_Template
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
        $__internal_0dba4f57ce3c55c154258557054fd8460ee83e590c2fc8b3aeec7c29c58dfe66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dba4f57ce3c55c154258557054fd8460ee83e590c2fc8b3aeec7c29c58dfe66->enter($__internal_0dba4f57ce3c55c154258557054fd8460ee83e590c2fc8b3aeec7c29c58dfe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_08e8252f044e211f633edea4b8569a6365597288f570db60e159f16f7090d728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e8252f044e211f633edea4b8569a6365597288f570db60e159f16f7090d728->enter($__internal_08e8252f044e211f633edea4b8569a6365597288f570db60e159f16f7090d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0dba4f57ce3c55c154258557054fd8460ee83e590c2fc8b3aeec7c29c58dfe66->leave($__internal_0dba4f57ce3c55c154258557054fd8460ee83e590c2fc8b3aeec7c29c58dfe66_prof);

        
        $__internal_08e8252f044e211f633edea4b8569a6365597288f570db60e159f16f7090d728->leave($__internal_08e8252f044e211f633edea4b8569a6365597288f570db60e159f16f7090d728_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
