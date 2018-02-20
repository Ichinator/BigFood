<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_9dc8a29bf46085cc11535d1362240dac98f281895abef141a534cb1771c501b2 extends Twig_Template
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
        $__internal_19f299850fd08268fe63ea0efb5ae4af82ce96ca0875670c52b8aaa1f41b7faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f299850fd08268fe63ea0efb5ae4af82ce96ca0875670c52b8aaa1f41b7faa->enter($__internal_19f299850fd08268fe63ea0efb5ae4af82ce96ca0875670c52b8aaa1f41b7faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_12073c2f584aa7d6bda00f691f81107d5726063e77a86fae929df041f179be72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12073c2f584aa7d6bda00f691f81107d5726063e77a86fae929df041f179be72->enter($__internal_12073c2f584aa7d6bda00f691f81107d5726063e77a86fae929df041f179be72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, ($context["uuid"] ?? $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, ($context["uuid"] ?? $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_19f299850fd08268fe63ea0efb5ae4af82ce96ca0875670c52b8aaa1f41b7faa->leave($__internal_19f299850fd08268fe63ea0efb5ae4af82ce96ca0875670c52b8aaa1f41b7faa_prof);

        
        $__internal_12073c2f584aa7d6bda00f691f81107d5726063e77a86fae929df041f179be72->leave($__internal_12073c2f584aa7d6bda00f691f81107d5726063e77a86fae929df041f179be72_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "EasyAdminBundle:default:field_image.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
