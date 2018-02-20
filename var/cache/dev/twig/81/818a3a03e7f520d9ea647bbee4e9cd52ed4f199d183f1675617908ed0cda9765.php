<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_9ae66571271ba363f2209e68addff826c114e392ae6b7770c39565ac15f3b1f0 extends Twig_Template
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
        $__internal_b92e960e8a3ce6140bc7a7b013ba0389c9353e2660ed1dd2721007a239404704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92e960e8a3ce6140bc7a7b013ba0389c9353e2660ed1dd2721007a239404704->enter($__internal_b92e960e8a3ce6140bc7a7b013ba0389c9353e2660ed1dd2721007a239404704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_1209399b3d3f13b06348dd9842455bb5222ab9df36ee708fb0e94cd4d9f65b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1209399b3d3f13b06348dd9842455bb5222ab9df36ee708fb0e94cd4d9f65b99->enter($__internal_1209399b3d3f13b06348dd9842455bb5222ab9df36ee708fb0e94cd4d9f65b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_b92e960e8a3ce6140bc7a7b013ba0389c9353e2660ed1dd2721007a239404704->leave($__internal_b92e960e8a3ce6140bc7a7b013ba0389c9353e2660ed1dd2721007a239404704_prof);

        
        $__internal_1209399b3d3f13b06348dd9842455bb5222ab9df36ee708fb0e94cd4d9f65b99->leave($__internal_1209399b3d3f13b06348dd9842455bb5222ab9df36ee708fb0e94cd4d9f65b99_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
