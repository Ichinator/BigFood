<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_1e0854d0d4dc6ace7202c4d6cfecdc2c5540b955c5ae7b1c6f809dddd7b6440d extends Twig_Template
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
        $__internal_c8405e24e7056e8cd9c1e1f35bdaad50744596903990a0e38ddd925db34c4fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8405e24e7056e8cd9c1e1f35bdaad50744596903990a0e38ddd925db34c4fa5->enter($__internal_c8405e24e7056e8cd9c1e1f35bdaad50744596903990a0e38ddd925db34c4fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_9eef3ab546a736eeb5ff7023dd49cfebfb34aec216d62f34f8ffb3cd40495554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eef3ab546a736eeb5ff7023dd49cfebfb34aec216d62f34f8ffb3cd40495554->enter($__internal_9eef3ab546a736eeb5ff7023dd49cfebfb34aec216d62f34f8ffb3cd40495554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

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
        
        $__internal_c8405e24e7056e8cd9c1e1f35bdaad50744596903990a0e38ddd925db34c4fa5->leave($__internal_c8405e24e7056e8cd9c1e1f35bdaad50744596903990a0e38ddd925db34c4fa5_prof);

        
        $__internal_9eef3ab546a736eeb5ff7023dd49cfebfb34aec216d62f34f8ffb3cd40495554->leave($__internal_9eef3ab546a736eeb5ff7023dd49cfebfb34aec216d62f34f8ffb3cd40495554_prof);

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
