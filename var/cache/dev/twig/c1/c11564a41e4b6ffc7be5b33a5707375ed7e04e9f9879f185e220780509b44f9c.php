<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_7afdf6079b9646092e4352bb62ffb0cab2e22c16cc03f58f820d959a640c9348 extends Twig_Template
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
        $__internal_8c94a668c3357ea4576c732f0135615a3c17684cd56b5ac103f0893d407c9cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c94a668c3357ea4576c732f0135615a3c17684cd56b5ac103f0893d407c9cbf->enter($__internal_8c94a668c3357ea4576c732f0135615a3c17684cd56b5ac103f0893d407c9cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_4857b00da287da97625c9d4e4adbc2c1e41d609844c0dc688d59f36cf38e3e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4857b00da287da97625c9d4e4adbc2c1e41d609844c0dc688d59f36cf38e3e9c->enter($__internal_4857b00da287da97625c9d4e4adbc2c1e41d609844c0dc688d59f36cf38e3e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8c94a668c3357ea4576c732f0135615a3c17684cd56b5ac103f0893d407c9cbf->leave($__internal_8c94a668c3357ea4576c732f0135615a3c17684cd56b5ac103f0893d407c9cbf_prof);

        
        $__internal_4857b00da287da97625c9d4e4adbc2c1e41d609844c0dc688d59f36cf38e3e9c->leave($__internal_4857b00da287da97625c9d4e4adbc2c1e41d609844c0dc688d59f36cf38e3e9c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
