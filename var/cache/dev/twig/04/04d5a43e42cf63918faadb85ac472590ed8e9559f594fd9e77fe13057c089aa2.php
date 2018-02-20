<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_042e888a5706d4bd825d44826d1f175d7b9e9d228f19fe963d280c5ca2a79797 extends Twig_Template
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
        $__internal_75b88216d9ce43f0d70230670596352e4fa55bc52281f71e557f0884884ffc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b88216d9ce43f0d70230670596352e4fa55bc52281f71e557f0884884ffc22->enter($__internal_75b88216d9ce43f0d70230670596352e4fa55bc52281f71e557f0884884ffc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_b48648e2848be8a55384eeb28d807ef888e881c4da7043a8a6384e22d9cdb589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48648e2848be8a55384eeb28d807ef888e881c4da7043a8a6384e22d9cdb589->enter($__internal_b48648e2848be8a55384eeb28d807ef888e881c4da7043a8a6384e22d9cdb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

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
        
        $__internal_75b88216d9ce43f0d70230670596352e4fa55bc52281f71e557f0884884ffc22->leave($__internal_75b88216d9ce43f0d70230670596352e4fa55bc52281f71e557f0884884ffc22_prof);

        
        $__internal_b48648e2848be8a55384eeb28d807ef888e881c4da7043a8a6384e22d9cdb589->leave($__internal_b48648e2848be8a55384eeb28d807ef888e881c4da7043a8a6384e22d9cdb589_prof);

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
