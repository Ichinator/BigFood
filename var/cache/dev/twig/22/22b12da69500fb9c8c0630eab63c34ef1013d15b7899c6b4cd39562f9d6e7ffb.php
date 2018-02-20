<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_8ff9432df805f149af4c11d08242d29b89e11274a2b9f349183a11add3e76709 extends Twig_Template
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
        $__internal_cad57eea89e96b3dd30010ebd0a4f62441a01b3b063de2dcd9540270bd2ec7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad57eea89e96b3dd30010ebd0a4f62441a01b3b063de2dcd9540270bd2ec7db->enter($__internal_cad57eea89e96b3dd30010ebd0a4f62441a01b3b063de2dcd9540270bd2ec7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_4ad0b6fc9bf118ba87bca015a913115004a507de8351eb0367c228a7b1bdc841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad0b6fc9bf118ba87bca015a913115004a507de8351eb0367c228a7b1bdc841->enter($__internal_4ad0b6fc9bf118ba87bca015a913115004a507de8351eb0367c228a7b1bdc841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_cad57eea89e96b3dd30010ebd0a4f62441a01b3b063de2dcd9540270bd2ec7db->leave($__internal_cad57eea89e96b3dd30010ebd0a4f62441a01b3b063de2dcd9540270bd2ec7db_prof);

        
        $__internal_4ad0b6fc9bf118ba87bca015a913115004a507de8351eb0367c228a7b1bdc841->leave($__internal_4ad0b6fc9bf118ba87bca015a913115004a507de8351eb0367c228a7b1bdc841_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
