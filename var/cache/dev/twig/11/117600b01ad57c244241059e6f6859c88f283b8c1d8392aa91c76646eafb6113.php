<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_6e74d4526d4e94d91214de141de1cc9e1ec57e72517b9607f6b2fd80ba1953fd extends Twig_Template
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
        $__internal_572715f1afca81b936c44885f2bad4ea02c007e3aeaf80f416c86ac73f19cb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572715f1afca81b936c44885f2bad4ea02c007e3aeaf80f416c86ac73f19cb0f->enter($__internal_572715f1afca81b936c44885f2bad4ea02c007e3aeaf80f416c86ac73f19cb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_c673e4099d5d307d153b7a04dc67813bae28b854efe90b3b82c2b095593742f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c673e4099d5d307d153b7a04dc67813bae28b854efe90b3b82c2b095593742f4->enter($__internal_c673e4099d5d307d153b7a04dc67813bae28b854efe90b3b82c2b095593742f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_572715f1afca81b936c44885f2bad4ea02c007e3aeaf80f416c86ac73f19cb0f->leave($__internal_572715f1afca81b936c44885f2bad4ea02c007e3aeaf80f416c86ac73f19cb0f_prof);

        
        $__internal_c673e4099d5d307d153b7a04dc67813bae28b854efe90b3b82c2b095593742f4->leave($__internal_c673e4099d5d307d153b7a04dc67813bae28b854efe90b3b82c2b095593742f4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_float.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
