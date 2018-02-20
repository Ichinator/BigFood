<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_527bf97d05fdc98ec81b7502b28c17d9bf2560e5c1263ab06ef5c4e7bb346662 extends Twig_Template
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
        $__internal_5554a9aed82a868a5efec2cb4f51c9e85209ab68daa775ecdb33e59d3334df2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5554a9aed82a868a5efec2cb4f51c9e85209ab68daa775ecdb33e59d3334df2a->enter($__internal_5554a9aed82a868a5efec2cb4f51c9e85209ab68daa775ecdb33e59d3334df2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_2e3b3542bfb02aa7fdb03d4c6a0635072634b4ef1f696ecceb046e19902144d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3b3542bfb02aa7fdb03d4c6a0635072634b4ef1f696ecceb046e19902144d4->enter($__internal_2e3b3542bfb02aa7fdb03d4c6a0635072634b4ef1f696ecceb046e19902144d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5554a9aed82a868a5efec2cb4f51c9e85209ab68daa775ecdb33e59d3334df2a->leave($__internal_5554a9aed82a868a5efec2cb4f51c9e85209ab68daa775ecdb33e59d3334df2a_prof);

        
        $__internal_2e3b3542bfb02aa7fdb03d4c6a0635072634b4ef1f696ecceb046e19902144d4->leave($__internal_2e3b3542bfb02aa7fdb03d4c6a0635072634b4ef1f696ecceb046e19902144d4_prof);

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
