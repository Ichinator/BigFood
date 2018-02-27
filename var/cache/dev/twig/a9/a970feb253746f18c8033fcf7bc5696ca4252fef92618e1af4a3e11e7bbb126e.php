<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_23bb25799a37689c1ed8b0b2023f96354fbed7e6fad8bd5cf57caf4cf85b6435 extends Twig_Template
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
        $__internal_c38ce09054901a768d4ae713f94233ec753db155d1e28740cd0f61294e840982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38ce09054901a768d4ae713f94233ec753db155d1e28740cd0f61294e840982->enter($__internal_c38ce09054901a768d4ae713f94233ec753db155d1e28740cd0f61294e840982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_38b665adf482f6f0f89d50d59330f4ff57d0caa10ba9fa6c4172280fd49b5ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b665adf482f6f0f89d50d59330f4ff57d0caa10ba9fa6c4172280fd49b5ef2->enter($__internal_38b665adf482f6f0f89d50d59330f4ff57d0caa10ba9fa6c4172280fd49b5ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c38ce09054901a768d4ae713f94233ec753db155d1e28740cd0f61294e840982->leave($__internal_c38ce09054901a768d4ae713f94233ec753db155d1e28740cd0f61294e840982_prof);

        
        $__internal_38b665adf482f6f0f89d50d59330f4ff57d0caa10ba9fa6c4172280fd49b5ef2->leave($__internal_38b665adf482f6f0f89d50d59330f4ff57d0caa10ba9fa6c4172280fd49b5ef2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
