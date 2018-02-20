<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_1c34a49d5bc785d49584b4110883d0d89e4829b657f43adde58f678e07eb3928 extends Twig_Template
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
        $__internal_860b7f348abd1f1014b4887351ce4ff5ad8b45862f477f13fe2abeaf50ec6ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860b7f348abd1f1014b4887351ce4ff5ad8b45862f477f13fe2abeaf50ec6ae9->enter($__internal_860b7f348abd1f1014b4887351ce4ff5ad8b45862f477f13fe2abeaf50ec6ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_5906290822d696a00e4798864aeb125535ddad8366455fbbfa98058dda6a8f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5906290822d696a00e4798864aeb125535ddad8366455fbbfa98058dda6a8f91->enter($__internal_5906290822d696a00e4798864aeb125535ddad8366455fbbfa98058dda6a8f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_860b7f348abd1f1014b4887351ce4ff5ad8b45862f477f13fe2abeaf50ec6ae9->leave($__internal_860b7f348abd1f1014b4887351ce4ff5ad8b45862f477f13fe2abeaf50ec6ae9_prof);

        
        $__internal_5906290822d696a00e4798864aeb125535ddad8366455fbbfa98058dda6a8f91->leave($__internal_5906290822d696a00e4798864aeb125535ddad8366455fbbfa98058dda6a8f91_prof);

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
