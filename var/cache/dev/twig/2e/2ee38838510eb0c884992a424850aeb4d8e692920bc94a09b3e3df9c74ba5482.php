<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_805d0b0509df73b98aba5feaf2337aaf9d57e92d1d2b0be7a094112a51e8be9d extends Twig_Template
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
        $__internal_1bcab55d6d92936fa531463a0cc51220072c9c55073025b01c819c2bc89ce56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bcab55d6d92936fa531463a0cc51220072c9c55073025b01c819c2bc89ce56b->enter($__internal_1bcab55d6d92936fa531463a0cc51220072c9c55073025b01c819c2bc89ce56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_820bde077ff68d8ead83490e9c249a44aea3fc683cf5b596ec0bea4b72ea8ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820bde077ff68d8ead83490e9c249a44aea3fc683cf5b596ec0bea4b72ea8ffe->enter($__internal_820bde077ff68d8ead83490e9c249a44aea3fc683cf5b596ec0bea4b72ea8ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_1bcab55d6d92936fa531463a0cc51220072c9c55073025b01c819c2bc89ce56b->leave($__internal_1bcab55d6d92936fa531463a0cc51220072c9c55073025b01c819c2bc89ce56b_prof);

        
        $__internal_820bde077ff68d8ead83490e9c249a44aea3fc683cf5b596ec0bea4b72ea8ffe->leave($__internal_820bde077ff68d8ead83490e9c249a44aea3fc683cf5b596ec0bea4b72ea8ffe_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
