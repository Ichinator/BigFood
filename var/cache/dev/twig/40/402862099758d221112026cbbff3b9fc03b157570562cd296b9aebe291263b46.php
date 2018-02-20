<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_c87168ff7a8b9aa176c2be3c388c059d249e0a0f667d34791e2098a92b1ed2b9 extends Twig_Template
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
        $__internal_a11fdc8b7e76c596089ec13c1239b29de178e8f06382874748bdc831177fcc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11fdc8b7e76c596089ec13c1239b29de178e8f06382874748bdc831177fcc73->enter($__internal_a11fdc8b7e76c596089ec13c1239b29de178e8f06382874748bdc831177fcc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_3320c2781be45fc034ba82688749049185a827eb115efc385aa0f8394a0b2857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3320c2781be45fc034ba82688749049185a827eb115efc385aa0f8394a0b2857->enter($__internal_3320c2781be45fc034ba82688749049185a827eb115efc385aa0f8394a0b2857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_a11fdc8b7e76c596089ec13c1239b29de178e8f06382874748bdc831177fcc73->leave($__internal_a11fdc8b7e76c596089ec13c1239b29de178e8f06382874748bdc831177fcc73_prof);

        
        $__internal_3320c2781be45fc034ba82688749049185a827eb115efc385aa0f8394a0b2857->leave($__internal_3320c2781be45fc034ba82688749049185a827eb115efc385aa0f8394a0b2857_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
", "EasyAdminBundle:default:field_smallint.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
