<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d05eb67e712b81a956c5f72467b14f8f6f71894ba1dfb240b453652d7580f052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb8f8fb91313bf70f8b7764684895caff038982032c8ecf7aac3783c208dc551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8f8fb91313bf70f8b7764684895caff038982032c8ecf7aac3783c208dc551->enter($__internal_cb8f8fb91313bf70f8b7764684895caff038982032c8ecf7aac3783c208dc551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_76e55ac91e93fcd75921431c3ba61db953cafb61868616d4dd7d4d3d96e929f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e55ac91e93fcd75921431c3ba61db953cafb61868616d4dd7d4d3d96e929f2->enter($__internal_76e55ac91e93fcd75921431c3ba61db953cafb61868616d4dd7d4d3d96e929f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb8f8fb91313bf70f8b7764684895caff038982032c8ecf7aac3783c208dc551->leave($__internal_cb8f8fb91313bf70f8b7764684895caff038982032c8ecf7aac3783c208dc551_prof);

        
        $__internal_76e55ac91e93fcd75921431c3ba61db953cafb61868616d4dd7d4d3d96e929f2->leave($__internal_76e55ac91e93fcd75921431c3ba61db953cafb61868616d4dd7d4d3d96e929f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6be3fb504fc6f4e072f49000e12fc78ad6e3ccf4c90e6e359758c951eeb499a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6be3fb504fc6f4e072f49000e12fc78ad6e3ccf4c90e6e359758c951eeb499a->enter($__internal_f6be3fb504fc6f4e072f49000e12fc78ad6e3ccf4c90e6e359758c951eeb499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd3ab6fdca2530b987fb3ef9e78f3eeffd939e6d367d8593b5e616073b2fb034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3ab6fdca2530b987fb3ef9e78f3eeffd939e6d367d8593b5e616073b2fb034->enter($__internal_cd3ab6fdca2530b987fb3ef9e78f3eeffd939e6d367d8593b5e616073b2fb034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd3ab6fdca2530b987fb3ef9e78f3eeffd939e6d367d8593b5e616073b2fb034->leave($__internal_cd3ab6fdca2530b987fb3ef9e78f3eeffd939e6d367d8593b5e616073b2fb034_prof);

        
        $__internal_f6be3fb504fc6f4e072f49000e12fc78ad6e3ccf4c90e6e359758c951eeb499a->leave($__internal_f6be3fb504fc6f4e072f49000e12fc78ad6e3ccf4c90e6e359758c951eeb499a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78cf76a687cb373f6831d45c6dd1f709de7551ecc8ae53c31798c61cf5743962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cf76a687cb373f6831d45c6dd1f709de7551ecc8ae53c31798c61cf5743962->enter($__internal_78cf76a687cb373f6831d45c6dd1f709de7551ecc8ae53c31798c61cf5743962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8323c7ec5bcd8c82460ea580198566648694c41bd0d207b339452c513dbb4d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8323c7ec5bcd8c82460ea580198566648694c41bd0d207b339452c513dbb4d71->enter($__internal_8323c7ec5bcd8c82460ea580198566648694c41bd0d207b339452c513dbb4d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8323c7ec5bcd8c82460ea580198566648694c41bd0d207b339452c513dbb4d71->leave($__internal_8323c7ec5bcd8c82460ea580198566648694c41bd0d207b339452c513dbb4d71_prof);

        
        $__internal_78cf76a687cb373f6831d45c6dd1f709de7551ecc8ae53c31798c61cf5743962->leave($__internal_78cf76a687cb373f6831d45c6dd1f709de7551ecc8ae53c31798c61cf5743962_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fba24c4be10ebe4ff5b3e02495945b3db2b1a44939c8407b657e69a8a6c2923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fba24c4be10ebe4ff5b3e02495945b3db2b1a44939c8407b657e69a8a6c2923->enter($__internal_8fba24c4be10ebe4ff5b3e02495945b3db2b1a44939c8407b657e69a8a6c2923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_58e85d945c72542128d04ffc24f69be5d6e2944e4e4f87db6c92ade77cc364fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e85d945c72542128d04ffc24f69be5d6e2944e4e4f87db6c92ade77cc364fc->enter($__internal_58e85d945c72542128d04ffc24f69be5d6e2944e4e4f87db6c92ade77cc364fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58e85d945c72542128d04ffc24f69be5d6e2944e4e4f87db6c92ade77cc364fc->leave($__internal_58e85d945c72542128d04ffc24f69be5d6e2944e4e4f87db6c92ade77cc364fc_prof);

        
        $__internal_8fba24c4be10ebe4ff5b3e02495945b3db2b1a44939c8407b657e69a8a6c2923->leave($__internal_8fba24c4be10ebe4ff5b3e02495945b3db2b1a44939c8407b657e69a8a6c2923_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ichinator/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
