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
        $__internal_f1f6374cd2a11018362b0d771b75464e6a13b1076bb0cf4738d0228b5887b2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f6374cd2a11018362b0d771b75464e6a13b1076bb0cf4738d0228b5887b2db->enter($__internal_f1f6374cd2a11018362b0d771b75464e6a13b1076bb0cf4738d0228b5887b2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_a53abb8057c73f21f5fdbf4a4b4887ea60bb5b84891356d3f18d0ac02f456e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53abb8057c73f21f5fdbf4a4b4887ea60bb5b84891356d3f18d0ac02f456e6b->enter($__internal_a53abb8057c73f21f5fdbf4a4b4887ea60bb5b84891356d3f18d0ac02f456e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_f1f6374cd2a11018362b0d771b75464e6a13b1076bb0cf4738d0228b5887b2db->leave($__internal_f1f6374cd2a11018362b0d771b75464e6a13b1076bb0cf4738d0228b5887b2db_prof);

        
        $__internal_a53abb8057c73f21f5fdbf4a4b4887ea60bb5b84891356d3f18d0ac02f456e6b->leave($__internal_a53abb8057c73f21f5fdbf4a4b4887ea60bb5b84891356d3f18d0ac02f456e6b_prof);

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
