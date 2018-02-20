<?php

/* IchinatorNewsBundle:Default:oneNews.html.twig */
class __TwigTemplate_c8ca0df1627f9be5886a3787ea80812d217610ac034f76c7d04792c8efcb99d4 extends Twig_Template
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
        $__internal_cc7109ef7abcd50faf9bcfc90781da38007060ac62874b53fffa490e7d8392e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7109ef7abcd50faf9bcfc90781da38007060ac62874b53fffa490e7d8392e9->enter($__internal_cc7109ef7abcd50faf9bcfc90781da38007060ac62874b53fffa490e7d8392e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:oneNews.html.twig"));

        $__internal_69b7172aa544cc185fe4b11a682eb522e52687726bdf3d9e43528f89b3dec9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b7172aa544cc185fe4b11a682eb522e52687726bdf3d9e43528f89b3dec9d6->enter($__internal_69b7172aa544cc185fe4b11a682eb522e52687726bdf3d9e43528f89b3dec9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:oneNews.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "title", array()), "html", null, true);
        echo "
";
        // line 2
        echo $this->getAttribute(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "content", array());
        echo "
Publié le ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "date", array()), "m/d/Y", "Europe/Paris"), "html", null, true);
        
        $__internal_cc7109ef7abcd50faf9bcfc90781da38007060ac62874b53fffa490e7d8392e9->leave($__internal_cc7109ef7abcd50faf9bcfc90781da38007060ac62874b53fffa490e7d8392e9_prof);

        
        $__internal_69b7172aa544cc185fe4b11a682eb522e52687726bdf3d9e43528f89b3dec9d6->leave($__internal_69b7172aa544cc185fe4b11a682eb522e52687726bdf3d9e43528f89b3dec9d6_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorNewsBundle:Default:oneNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ oneNews.title }}
{{ oneNews.content|raw }}
Publié le {{ oneNews.date|date(\"m/d/Y\", \"Europe/Paris\") }}", "IchinatorNewsBundle:Default:oneNews.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/NewsBundle/Resources/views/Default/oneNews.html.twig");
    }
}
