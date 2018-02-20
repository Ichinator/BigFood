<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d0ad354f840e5f13926ebece32487270c53749aaaa497e1326a86d13f19d2e06 extends Twig_Template
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
        $__internal_1eaf18d77807d3df5aa4249b0ab8fbb7c3792f41eec3986dbffbe4c4971e3418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eaf18d77807d3df5aa4249b0ab8fbb7c3792f41eec3986dbffbe4c4971e3418->enter($__internal_1eaf18d77807d3df5aa4249b0ab8fbb7c3792f41eec3986dbffbe4c4971e3418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_f90a1f5e0da4424d5ddc7042ed809be0cc5d8968530153d2d8b728a85ca8fc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90a1f5e0da4424d5ddc7042ed809be0cc5d8968530153d2d8b728a85ca8fc9d->enter($__internal_f90a1f5e0da4424d5ddc7042ed809be0cc5d8968530153d2d8b728a85ca8fc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_1eaf18d77807d3df5aa4249b0ab8fbb7c3792f41eec3986dbffbe4c4971e3418->leave($__internal_1eaf18d77807d3df5aa4249b0ab8fbb7c3792f41eec3986dbffbe4c4971e3418_prof);

        
        $__internal_f90a1f5e0da4424d5ddc7042ed809be0cc5d8968530153d2d8b728a85ca8fc9d->leave($__internal_f90a1f5e0da4424d5ddc7042ed809be0cc5d8968530153d2d8b728a85ca8fc9d_prof);

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
