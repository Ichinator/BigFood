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
        $__internal_5810f4bb46735ecf12d399be5c3fea55d7231da76712cf5e0890f78dbca68418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5810f4bb46735ecf12d399be5c3fea55d7231da76712cf5e0890f78dbca68418->enter($__internal_5810f4bb46735ecf12d399be5c3fea55d7231da76712cf5e0890f78dbca68418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_93ee09302ef0f70a6acbe82295246729a8aba8a710612fe6e8ceeabd58cd4636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ee09302ef0f70a6acbe82295246729a8aba8a710612fe6e8ceeabd58cd4636->enter($__internal_93ee09302ef0f70a6acbe82295246729a8aba8a710612fe6e8ceeabd58cd4636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_5810f4bb46735ecf12d399be5c3fea55d7231da76712cf5e0890f78dbca68418->leave($__internal_5810f4bb46735ecf12d399be5c3fea55d7231da76712cf5e0890f78dbca68418_prof);

        
        $__internal_93ee09302ef0f70a6acbe82295246729a8aba8a710612fe6e8ceeabd58cd4636->leave($__internal_93ee09302ef0f70a6acbe82295246729a8aba8a710612fe6e8ceeabd58cd4636_prof);

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
