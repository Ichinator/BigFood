<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_753dd10d5a8e78b9285baf9e087d60572de56f1e3c19a28e4cb2cc1637fd82b7 extends Twig_Template
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
        $__internal_d3dd3e51391c49948552389ea000eca2eaa4174fe409244de7ad8712a313f934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3dd3e51391c49948552389ea000eca2eaa4174fe409244de7ad8712a313f934->enter($__internal_d3dd3e51391c49948552389ea000eca2eaa4174fe409244de7ad8712a313f934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_a113d5222923a22527c9d160c2fb156412049a425e789b1746cabc20139eec91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a113d5222923a22527c9d160c2fb156412049a425e789b1746cabc20139eec91->enter($__internal_a113d5222923a22527c9d160c2fb156412049a425e789b1746cabc20139eec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_d3dd3e51391c49948552389ea000eca2eaa4174fe409244de7ad8712a313f934->leave($__internal_d3dd3e51391c49948552389ea000eca2eaa4174fe409244de7ad8712a313f934_prof);

        
        $__internal_a113d5222923a22527c9d160c2fb156412049a425e789b1746cabc20139eec91->leave($__internal_a113d5222923a22527c9d160c2fb156412049a425e789b1746cabc20139eec91_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
