<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_8385646d9c97ac1a951570d99df3952adad2327cb154b6f471bc4072c428bca0 extends Twig_Template
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
        $__internal_4f0cfff6a5b412e98c343b8c7da8d1edc1826cd8e9022b228a0d36142aa9c1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0cfff6a5b412e98c343b8c7da8d1edc1826cd8e9022b228a0d36142aa9c1e9->enter($__internal_4f0cfff6a5b412e98c343b8c7da8d1edc1826cd8e9022b228a0d36142aa9c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_86ebfa9f0e5b8103e8abd1983a54c724374de79acdb048abc027f29da9c287b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ebfa9f0e5b8103e8abd1983a54c724374de79acdb048abc027f29da9c287b7->enter($__internal_86ebfa9f0e5b8103e8abd1983a54c724374de79acdb048abc027f29da9c287b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_4f0cfff6a5b412e98c343b8c7da8d1edc1826cd8e9022b228a0d36142aa9c1e9->leave($__internal_4f0cfff6a5b412e98c343b8c7da8d1edc1826cd8e9022b228a0d36142aa9c1e9_prof);

        
        $__internal_86ebfa9f0e5b8103e8abd1983a54c724374de79acdb048abc027f29da9c287b7->leave($__internal_86ebfa9f0e5b8103e8abd1983a54c724374de79acdb048abc027f29da9c287b7_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
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
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
