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
        $__internal_a988861770ccbfc19e061aae4fa3132d9361af5c57638569ee48af32b818cf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a988861770ccbfc19e061aae4fa3132d9361af5c57638569ee48af32b818cf7b->enter($__internal_a988861770ccbfc19e061aae4fa3132d9361af5c57638569ee48af32b818cf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_994df7137c064cbdd8e07b0f97836e799c17af78e64f3734590ca729f0ce2f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994df7137c064cbdd8e07b0f97836e799c17af78e64f3734590ca729f0ce2f5d->enter($__internal_994df7137c064cbdd8e07b0f97836e799c17af78e64f3734590ca729f0ce2f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

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
        
        $__internal_a988861770ccbfc19e061aae4fa3132d9361af5c57638569ee48af32b818cf7b->leave($__internal_a988861770ccbfc19e061aae4fa3132d9361af5c57638569ee48af32b818cf7b_prof);

        
        $__internal_994df7137c064cbdd8e07b0f97836e799c17af78e64f3734590ca729f0ce2f5d->leave($__internal_994df7137c064cbdd8e07b0f97836e799c17af78e64f3734590ca729f0ce2f5d_prof);

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
