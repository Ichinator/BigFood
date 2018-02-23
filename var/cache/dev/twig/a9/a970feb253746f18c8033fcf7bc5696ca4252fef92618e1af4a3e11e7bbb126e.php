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
        $__internal_03571db1739d7205ecaa751ec6ba3af34e11ebac18f24147e5e3b00f512b7696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03571db1739d7205ecaa751ec6ba3af34e11ebac18f24147e5e3b00f512b7696->enter($__internal_03571db1739d7205ecaa751ec6ba3af34e11ebac18f24147e5e3b00f512b7696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_8062faedc6e1815a323664cf5b21f2e80e5aa78259d4bf0d06e3e6412a1efcba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8062faedc6e1815a323664cf5b21f2e80e5aa78259d4bf0d06e3e6412a1efcba->enter($__internal_8062faedc6e1815a323664cf5b21f2e80e5aa78259d4bf0d06e3e6412a1efcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_03571db1739d7205ecaa751ec6ba3af34e11ebac18f24147e5e3b00f512b7696->leave($__internal_03571db1739d7205ecaa751ec6ba3af34e11ebac18f24147e5e3b00f512b7696_prof);

        
        $__internal_8062faedc6e1815a323664cf5b21f2e80e5aa78259d4bf0d06e3e6412a1efcba->leave($__internal_8062faedc6e1815a323664cf5b21f2e80e5aa78259d4bf0d06e3e6412a1efcba_prof);

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
