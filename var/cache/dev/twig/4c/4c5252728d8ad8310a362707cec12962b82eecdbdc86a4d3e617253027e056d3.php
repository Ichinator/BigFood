<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_96e180f1a3b439921bc4406369127424f34ccd7584afe0d404fb9ec1350f064a extends Twig_Template
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
        $__internal_a76b9867a04fca4960f53f2564f049d98c541f785d1c01e21feba18791db41fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76b9867a04fca4960f53f2564f049d98c541f785d1c01e21feba18791db41fb->enter($__internal_a76b9867a04fca4960f53f2564f049d98c541f785d1c01e21feba18791db41fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5064045b7fd48f206662456ea00d39b4204c4c500cf3f525ec058f173bb1a483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5064045b7fd48f206662456ea00d39b4204c4c500cf3f525ec058f173bb1a483->enter($__internal_5064045b7fd48f206662456ea00d39b4204c4c500cf3f525ec058f173bb1a483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a76b9867a04fca4960f53f2564f049d98c541f785d1c01e21feba18791db41fb->leave($__internal_a76b9867a04fca4960f53f2564f049d98c541f785d1c01e21feba18791db41fb_prof);

        
        $__internal_5064045b7fd48f206662456ea00d39b4204c4c500cf3f525ec058f173bb1a483->leave($__internal_5064045b7fd48f206662456ea00d39b4204c4c500cf3f525ec058f173bb1a483_prof);

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
