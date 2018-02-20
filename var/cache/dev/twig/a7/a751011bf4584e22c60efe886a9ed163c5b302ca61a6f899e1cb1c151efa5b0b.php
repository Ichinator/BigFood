<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_22c7e7c2cc769ab9838c133fed92db033bb870a8fd692a40ec0652c9d20b00d0 extends Twig_Template
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
        $__internal_f838156db6a5853601f77a2da643a7fd4ed34068b08860bcc105f4b62ece754c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f838156db6a5853601f77a2da643a7fd4ed34068b08860bcc105f4b62ece754c->enter($__internal_f838156db6a5853601f77a2da643a7fd4ed34068b08860bcc105f4b62ece754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_5f7ba8de4a1a93b9d58d35feb10f965e21128773b6cec76715e0ff72a1359830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7ba8de4a1a93b9d58d35feb10f965e21128773b6cec76715e0ff72a1359830->enter($__internal_5f7ba8de4a1a93b9d58d35feb10f965e21128773b6cec76715e0ff72a1359830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_f838156db6a5853601f77a2da643a7fd4ed34068b08860bcc105f4b62ece754c->leave($__internal_f838156db6a5853601f77a2da643a7fd4ed34068b08860bcc105f4b62ece754c_prof);

        
        $__internal_5f7ba8de4a1a93b9d58d35feb10f965e21128773b6cec76715e0ff72a1359830->leave($__internal_5f7ba8de4a1a93b9d58d35feb10f965e21128773b6cec76715e0ff72a1359830_prof);

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
