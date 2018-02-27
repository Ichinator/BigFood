<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_5ab4507938e0444721be0badcd808ae4ae3dee585c25c5f16a0190b2e8e7d44e extends Twig_Template
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
        $__internal_a00ea3b0123f7144c070a2c3c3fec1dfc9d8a5596351b3c5090765f1b3909eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00ea3b0123f7144c070a2c3c3fec1dfc9d8a5596351b3c5090765f1b3909eda->enter($__internal_a00ea3b0123f7144c070a2c3c3fec1dfc9d8a5596351b3c5090765f1b3909eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_7a1891ef05be0b3ac7974e2e398d4dd672963410657dbcbacdff5f934f0be353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1891ef05be0b3ac7974e2e398d4dd672963410657dbcbacdff5f934f0be353->enter($__internal_7a1891ef05be0b3ac7974e2e398d4dd672963410657dbcbacdff5f934f0be353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_a00ea3b0123f7144c070a2c3c3fec1dfc9d8a5596351b3c5090765f1b3909eda->leave($__internal_a00ea3b0123f7144c070a2c3c3fec1dfc9d8a5596351b3c5090765f1b3909eda_prof);

        
        $__internal_7a1891ef05be0b3ac7974e2e398d4dd672963410657dbcbacdff5f934f0be353->leave($__internal_7a1891ef05be0b3ac7974e2e398d4dd672963410657dbcbacdff5f934f0be353_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
