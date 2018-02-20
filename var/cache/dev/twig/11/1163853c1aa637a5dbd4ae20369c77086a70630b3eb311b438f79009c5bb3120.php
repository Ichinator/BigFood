<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_60925b70f7c2ca58dcf877344e5a15cb5ebb804ab073bf36e8ac51be7cfb6d12 extends Twig_Template
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
        $__internal_35aa95ee6694a804cd55924d46ff1c7aacb2e1c287f9f8dea096ce55ba2bb1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35aa95ee6694a804cd55924d46ff1c7aacb2e1c287f9f8dea096ce55ba2bb1c8->enter($__internal_35aa95ee6694a804cd55924d46ff1c7aacb2e1c287f9f8dea096ce55ba2bb1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_a9a67e7c91209f3e0668a0f853701a1814dbcfb3e13ef2c39e407f9ce82a651e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a67e7c91209f3e0668a0f853701a1814dbcfb3e13ef2c39e407f9ce82a651e->enter($__internal_a9a67e7c91209f3e0668a0f853701a1814dbcfb3e13ef2c39e407f9ce82a651e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_35aa95ee6694a804cd55924d46ff1c7aacb2e1c287f9f8dea096ce55ba2bb1c8->leave($__internal_35aa95ee6694a804cd55924d46ff1c7aacb2e1c287f9f8dea096ce55ba2bb1c8_prof);

        
        $__internal_a9a67e7c91209f3e0668a0f853701a1814dbcfb3e13ef2c39e407f9ce82a651e->leave($__internal_a9a67e7c91209f3e0668a0f853701a1814dbcfb3e13ef2c39e407f9ce82a651e_prof);

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
