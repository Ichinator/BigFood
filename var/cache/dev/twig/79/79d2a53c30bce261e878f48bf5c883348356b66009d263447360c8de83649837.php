<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_5c40bf49052520bc7e90226534622d7126f14b896a5ae89a68410eeaeb0273b7 extends Twig_Template
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
        $__internal_097aba6b7b3f5a0b999560322245255fb397ca40b3deadc48b1646678e796b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097aba6b7b3f5a0b999560322245255fb397ca40b3deadc48b1646678e796b7f->enter($__internal_097aba6b7b3f5a0b999560322245255fb397ca40b3deadc48b1646678e796b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_5d667de7c2a2627ffeb14182e270249f88f1790309f8f8aa8e6d34ab7682e872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d667de7c2a2627ffeb14182e270249f88f1790309f8f8aa8e6d34ab7682e872->enter($__internal_5d667de7c2a2627ffeb14182e270249f88f1790309f8f8aa8e6d34ab7682e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_097aba6b7b3f5a0b999560322245255fb397ca40b3deadc48b1646678e796b7f->leave($__internal_097aba6b7b3f5a0b999560322245255fb397ca40b3deadc48b1646678e796b7f_prof);

        
        $__internal_5d667de7c2a2627ffeb14182e270249f88f1790309f8f8aa8e6d34ab7682e872->leave($__internal_5d667de7c2a2627ffeb14182e270249f88f1790309f8f8aa8e6d34ab7682e872_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
