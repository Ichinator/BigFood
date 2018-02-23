<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_2a08e1abb223b28a55ebc779a675048f12f948afefe3da49301e0caba263c5e9 extends Twig_Template
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
        $__internal_6b59a53bf82b07a0ab2e92f769f3c81310bc5efadcad5f9a9ed649fc4d97eb2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b59a53bf82b07a0ab2e92f769f3c81310bc5efadcad5f9a9ed649fc4d97eb2e->enter($__internal_6b59a53bf82b07a0ab2e92f769f3c81310bc5efadcad5f9a9ed649fc4d97eb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_8aefcbedcb6c292da2ee028f7d468f516830cadf305b8fc0ea4778c6c7e80963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aefcbedcb6c292da2ee028f7d468f516830cadf305b8fc0ea4778c6c7e80963->enter($__internal_8aefcbedcb6c292da2ee028f7d468f516830cadf305b8fc0ea4778c6c7e80963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_6b59a53bf82b07a0ab2e92f769f3c81310bc5efadcad5f9a9ed649fc4d97eb2e->leave($__internal_6b59a53bf82b07a0ab2e92f769f3c81310bc5efadcad5f9a9ed649fc4d97eb2e_prof);

        
        $__internal_8aefcbedcb6c292da2ee028f7d468f516830cadf305b8fc0ea4778c6c7e80963->leave($__internal_8aefcbedcb6c292da2ee028f7d468f516830cadf305b8fc0ea4778c6c7e80963_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
