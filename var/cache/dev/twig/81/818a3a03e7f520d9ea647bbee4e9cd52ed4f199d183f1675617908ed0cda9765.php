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
        $__internal_a15a01b57abe3d9df555d61a423576989d4fcbb12f9d7259fab29435a7b16a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15a01b57abe3d9df555d61a423576989d4fcbb12f9d7259fab29435a7b16a93->enter($__internal_a15a01b57abe3d9df555d61a423576989d4fcbb12f9d7259fab29435a7b16a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_f75af4194fa7930a2c1f9340f05406cb6dd24db01aec0ce6b71a94879700666b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75af4194fa7930a2c1f9340f05406cb6dd24db01aec0ce6b71a94879700666b->enter($__internal_f75af4194fa7930a2c1f9340f05406cb6dd24db01aec0ce6b71a94879700666b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_a15a01b57abe3d9df555d61a423576989d4fcbb12f9d7259fab29435a7b16a93->leave($__internal_a15a01b57abe3d9df555d61a423576989d4fcbb12f9d7259fab29435a7b16a93_prof);

        
        $__internal_f75af4194fa7930a2c1f9340f05406cb6dd24db01aec0ce6b71a94879700666b->leave($__internal_f75af4194fa7930a2c1f9340f05406cb6dd24db01aec0ce6b71a94879700666b_prof);

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
