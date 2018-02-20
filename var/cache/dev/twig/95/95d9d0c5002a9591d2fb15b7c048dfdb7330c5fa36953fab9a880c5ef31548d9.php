<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_5f889337940dcc7a62887cfe1ea5c77c22f390ee9c92d04882b97c4bcdc00d0b extends Twig_Template
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
        $__internal_399148635ee3742abb4193b96fad82a42994caf0ff6a0a35bcca546a68ee401d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399148635ee3742abb4193b96fad82a42994caf0ff6a0a35bcca546a68ee401d->enter($__internal_399148635ee3742abb4193b96fad82a42994caf0ff6a0a35bcca546a68ee401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_e4801ded171f27fc8dcd823d468453218bb042822616607c17effc3f1d060e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4801ded171f27fc8dcd823d468453218bb042822616607c17effc3f1d060e44->enter($__internal_e4801ded171f27fc8dcd823d468453218bb042822616607c17effc3f1d060e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_399148635ee3742abb4193b96fad82a42994caf0ff6a0a35bcca546a68ee401d->leave($__internal_399148635ee3742abb4193b96fad82a42994caf0ff6a0a35bcca546a68ee401d_prof);

        
        $__internal_e4801ded171f27fc8dcd823d468453218bb042822616607c17effc3f1d060e44->leave($__internal_e4801ded171f27fc8dcd823d468453218bb042822616607c17effc3f1d060e44_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
