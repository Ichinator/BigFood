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
        $__internal_ecf17210937175bea3a2cb214b415f96cea3d94a598ca03891db14aa88d46740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf17210937175bea3a2cb214b415f96cea3d94a598ca03891db14aa88d46740->enter($__internal_ecf17210937175bea3a2cb214b415f96cea3d94a598ca03891db14aa88d46740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_67f6411ba5b9886a6f11ae0ed1c5297f465630816fe86cbbc33cdfd502904852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f6411ba5b9886a6f11ae0ed1c5297f465630816fe86cbbc33cdfd502904852->enter($__internal_67f6411ba5b9886a6f11ae0ed1c5297f465630816fe86cbbc33cdfd502904852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ecf17210937175bea3a2cb214b415f96cea3d94a598ca03891db14aa88d46740->leave($__internal_ecf17210937175bea3a2cb214b415f96cea3d94a598ca03891db14aa88d46740_prof);

        
        $__internal_67f6411ba5b9886a6f11ae0ed1c5297f465630816fe86cbbc33cdfd502904852->leave($__internal_67f6411ba5b9886a6f11ae0ed1c5297f465630816fe86cbbc33cdfd502904852_prof);

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
