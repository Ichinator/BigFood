<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_aa7e7d29f2affa3b663187910a914ee56eb89751c0f5c35b3ad2d611c622d356 extends Twig_Template
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
        $__internal_5e15735ff89facfaf4180d85c0dd163b935a0c40f084400f413b6e5e3fc7ef40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e15735ff89facfaf4180d85c0dd163b935a0c40f084400f413b6e5e3fc7ef40->enter($__internal_5e15735ff89facfaf4180d85c0dd163b935a0c40f084400f413b6e5e3fc7ef40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_2cec0d88951a8ec99323982625375955e50e23bc8956e8ece37aed099d5e895c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cec0d88951a8ec99323982625375955e50e23bc8956e8ece37aed099d5e895c->enter($__internal_2cec0d88951a8ec99323982625375955e50e23bc8956e8ece37aed099d5e895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5e15735ff89facfaf4180d85c0dd163b935a0c40f084400f413b6e5e3fc7ef40->leave($__internal_5e15735ff89facfaf4180d85c0dd163b935a0c40f084400f413b6e5e3fc7ef40_prof);

        
        $__internal_2cec0d88951a8ec99323982625375955e50e23bc8956e8ece37aed099d5e895c->leave($__internal_2cec0d88951a8ec99323982625375955e50e23bc8956e8ece37aed099d5e895c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
