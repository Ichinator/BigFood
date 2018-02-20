<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_0de690ab31be99e5e56a9b99d29b1de517d9dbaf85970c521bd0e02267667f6a extends Twig_Template
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
        $__internal_66a5749b4e338cbd08c05e3dff130271904614ef8d97ce5b8ec1b2a22954376a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a5749b4e338cbd08c05e3dff130271904614ef8d97ce5b8ec1b2a22954376a->enter($__internal_66a5749b4e338cbd08c05e3dff130271904614ef8d97ce5b8ec1b2a22954376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_b1cdee8c0e46edb988333c51f83b26903d59958a2a058f7ac5509862bc37a8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cdee8c0e46edb988333c51f83b26903d59958a2a058f7ac5509862bc37a8d5->enter($__internal_b1cdee8c0e46edb988333c51f83b26903d59958a2a058f7ac5509862bc37a8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_66a5749b4e338cbd08c05e3dff130271904614ef8d97ce5b8ec1b2a22954376a->leave($__internal_66a5749b4e338cbd08c05e3dff130271904614ef8d97ce5b8ec1b2a22954376a_prof);

        
        $__internal_b1cdee8c0e46edb988333c51f83b26903d59958a2a058f7ac5509862bc37a8d5->leave($__internal_b1cdee8c0e46edb988333c51f83b26903d59958a2a058f7ac5509862bc37a8d5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
