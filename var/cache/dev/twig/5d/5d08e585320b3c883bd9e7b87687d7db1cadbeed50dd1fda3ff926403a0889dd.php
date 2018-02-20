<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_5cf5fefc41c6eaf6ee47aa6d085af102f345b7a7c46468316d699f4c55841905 extends Twig_Template
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
        $__internal_88858f520203ae8222a3b2a6e62a00a98e07f59a360d65fc0196f9b3f0c61cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88858f520203ae8222a3b2a6e62a00a98e07f59a360d65fc0196f9b3f0c61cbe->enter($__internal_88858f520203ae8222a3b2a6e62a00a98e07f59a360d65fc0196f9b3f0c61cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_382fa2ce39694df8f316daf7a98f56cfc92fb0fea8bbff61827df034b77bacaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382fa2ce39694df8f316daf7a98f56cfc92fb0fea8bbff61827df034b77bacaa->enter($__internal_382fa2ce39694df8f316daf7a98f56cfc92fb0fea8bbff61827df034b77bacaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_88858f520203ae8222a3b2a6e62a00a98e07f59a360d65fc0196f9b3f0c61cbe->leave($__internal_88858f520203ae8222a3b2a6e62a00a98e07f59a360d65fc0196f9b3f0c61cbe_prof);

        
        $__internal_382fa2ce39694df8f316daf7a98f56cfc92fb0fea8bbff61827df034b77bacaa->leave($__internal_382fa2ce39694df8f316daf7a98f56cfc92fb0fea8bbff61827df034b77bacaa_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
