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
        $__internal_985a0ec5e9e4f6b569d2500d8648203c433770c44d1dc5a6130e602a4f9fed96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985a0ec5e9e4f6b569d2500d8648203c433770c44d1dc5a6130e602a4f9fed96->enter($__internal_985a0ec5e9e4f6b569d2500d8648203c433770c44d1dc5a6130e602a4f9fed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_abec06246328aa00235136fbbe8273abf7d312529cd111d085415611c010b9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abec06246328aa00235136fbbe8273abf7d312529cd111d085415611c010b9ab->enter($__internal_abec06246328aa00235136fbbe8273abf7d312529cd111d085415611c010b9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_985a0ec5e9e4f6b569d2500d8648203c433770c44d1dc5a6130e602a4f9fed96->leave($__internal_985a0ec5e9e4f6b569d2500d8648203c433770c44d1dc5a6130e602a4f9fed96_prof);

        
        $__internal_abec06246328aa00235136fbbe8273abf7d312529cd111d085415611c010b9ab->leave($__internal_abec06246328aa00235136fbbe8273abf7d312529cd111d085415611c010b9ab_prof);

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
