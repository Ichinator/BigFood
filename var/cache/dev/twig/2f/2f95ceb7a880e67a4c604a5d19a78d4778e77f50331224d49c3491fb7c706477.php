<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_2a08e1abb223b28a55ebc779a675048f12f948afefe3da49301e0caba263c5e9 extends Twig_Template
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
        $__internal_9c97e13e26d1a32f5abf6912a452e7bf73eb3d1c55daf5f1f307bf92e177c18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c97e13e26d1a32f5abf6912a452e7bf73eb3d1c55daf5f1f307bf92e177c18c->enter($__internal_9c97e13e26d1a32f5abf6912a452e7bf73eb3d1c55daf5f1f307bf92e177c18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_09d0bc7fb8a1644204927166edc42d7192e938d736e9a8b4e95bb30956c189ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d0bc7fb8a1644204927166edc42d7192e938d736e9a8b4e95bb30956c189ba->enter($__internal_09d0bc7fb8a1644204927166edc42d7192e938d736e9a8b4e95bb30956c189ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

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
        
        $__internal_9c97e13e26d1a32f5abf6912a452e7bf73eb3d1c55daf5f1f307bf92e177c18c->leave($__internal_9c97e13e26d1a32f5abf6912a452e7bf73eb3d1c55daf5f1f307bf92e177c18c_prof);

        
        $__internal_09d0bc7fb8a1644204927166edc42d7192e938d736e9a8b4e95bb30956c189ba->leave($__internal_09d0bc7fb8a1644204927166edc42d7192e938d736e9a8b4e95bb30956c189ba_prof);

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
