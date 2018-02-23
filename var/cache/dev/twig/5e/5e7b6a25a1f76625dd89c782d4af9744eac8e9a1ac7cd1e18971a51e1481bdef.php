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
        $__internal_d9f2e8f1140ef76cdbfc0530105507086ded07211001f876f262033d2532e49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f2e8f1140ef76cdbfc0530105507086ded07211001f876f262033d2532e49d->enter($__internal_d9f2e8f1140ef76cdbfc0530105507086ded07211001f876f262033d2532e49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_cb7d4c9d79c055b4559c6b71e479cd7654ec8904bdf7ebb2192c2e145226638f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7d4c9d79c055b4559c6b71e479cd7654ec8904bdf7ebb2192c2e145226638f->enter($__internal_cb7d4c9d79c055b4559c6b71e479cd7654ec8904bdf7ebb2192c2e145226638f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

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
        
        $__internal_d9f2e8f1140ef76cdbfc0530105507086ded07211001f876f262033d2532e49d->leave($__internal_d9f2e8f1140ef76cdbfc0530105507086ded07211001f876f262033d2532e49d_prof);

        
        $__internal_cb7d4c9d79c055b4559c6b71e479cd7654ec8904bdf7ebb2192c2e145226638f->leave($__internal_cb7d4c9d79c055b4559c6b71e479cd7654ec8904bdf7ebb2192c2e145226638f_prof);

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
