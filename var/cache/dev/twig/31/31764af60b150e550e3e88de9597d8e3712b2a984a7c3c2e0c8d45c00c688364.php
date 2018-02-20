<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_bdb063ef3f77952b96e220a3e05097e01f873c92d3d207381e2f3f29823f5fc2 extends Twig_Template
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
        $__internal_36f27cd6e4aaca4e3c3a615f35deb8d1b9c8f58aae03710f0a41772de26494d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f27cd6e4aaca4e3c3a615f35deb8d1b9c8f58aae03710f0a41772de26494d3->enter($__internal_36f27cd6e4aaca4e3c3a615f35deb8d1b9c8f58aae03710f0a41772de26494d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_d2bd1c1fbbae24717ccab3337bd2ef0c051387a3eff74c7f44dfb92d50389ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bd1c1fbbae24717ccab3337bd2ef0c051387a3eff74c7f44dfb92d50389ff4->enter($__internal_d2bd1c1fbbae24717ccab3337bd2ef0c051387a3eff74c7f44dfb92d50389ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["filename"] ?? $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_36f27cd6e4aaca4e3c3a615f35deb8d1b9c8f58aae03710f0a41772de26494d3->leave($__internal_36f27cd6e4aaca4e3c3a615f35deb8d1b9c8f58aae03710f0a41772de26494d3_prof);

        
        $__internal_d2bd1c1fbbae24717ccab3337bd2ef0c051387a3eff74c7f44dfb92d50389ff4->leave($__internal_d2bd1c1fbbae24717ccab3337bd2ef0c051387a3eff74c7f44dfb92d50389ff4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
