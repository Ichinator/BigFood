<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_d6f49a3ee11f3b0b5f52a4babc1d920af29fa0972542a3cda9294faa0cb3fe5b extends Twig_Template
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
        $__internal_0dec24129d6fe19318e79a82405d8afb8f4d916a5e17af3a4f8ab84bd0bca90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dec24129d6fe19318e79a82405d8afb8f4d916a5e17af3a4f8ab84bd0bca90d->enter($__internal_0dec24129d6fe19318e79a82405d8afb8f4d916a5e17af3a4f8ab84bd0bca90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_fd04bfb1a004a86eec813160ec78baaa09a413bd8d245551681c562e7b616f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd04bfb1a004a86eec813160ec78baaa09a413bd8d245551681c562e7b616f2a->enter($__internal_fd04bfb1a004a86eec813160ec78baaa09a413bd8d245551681c562e7b616f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

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
        
        $__internal_0dec24129d6fe19318e79a82405d8afb8f4d916a5e17af3a4f8ab84bd0bca90d->leave($__internal_0dec24129d6fe19318e79a82405d8afb8f4d916a5e17af3a4f8ab84bd0bca90d_prof);

        
        $__internal_fd04bfb1a004a86eec813160ec78baaa09a413bd8d245551681c562e7b616f2a->leave($__internal_fd04bfb1a004a86eec813160ec78baaa09a413bd8d245551681c562e7b616f2a_prof);

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
