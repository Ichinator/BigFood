<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_5cf5fefc41c6eaf6ee47aa6d085af102f345b7a7c46468316d699f4c55841905 extends Twig_Template
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
        $__internal_f2141fd9c46892897b606fb6ebfcbadc9bf73fc6eaadc6fed2d3aa21c05f85af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2141fd9c46892897b606fb6ebfcbadc9bf73fc6eaadc6fed2d3aa21c05f85af->enter($__internal_f2141fd9c46892897b606fb6ebfcbadc9bf73fc6eaadc6fed2d3aa21c05f85af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_4b23b00ab30cfb3e62e3038e38d33a687824008aa8b1c6fde7c964063caab840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b23b00ab30cfb3e62e3038e38d33a687824008aa8b1c6fde7c964063caab840->enter($__internal_4b23b00ab30cfb3e62e3038e38d33a687824008aa8b1c6fde7c964063caab840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_f2141fd9c46892897b606fb6ebfcbadc9bf73fc6eaadc6fed2d3aa21c05f85af->leave($__internal_f2141fd9c46892897b606fb6ebfcbadc9bf73fc6eaadc6fed2d3aa21c05f85af_prof);

        
        $__internal_4b23b00ab30cfb3e62e3038e38d33a687824008aa8b1c6fde7c964063caab840->leave($__internal_4b23b00ab30cfb3e62e3038e38d33a687824008aa8b1c6fde7c964063caab840_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
