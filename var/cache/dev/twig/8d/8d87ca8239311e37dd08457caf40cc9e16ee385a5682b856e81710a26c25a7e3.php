<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1bfeef9400831d63f750db96a0e971a601f624e0301616671fdab2a1ba52b1e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c5bda0b24ca6643f5ec2e900e5774e413e995cf7e594c7d1a112988551f0f81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bda0b24ca6643f5ec2e900e5774e413e995cf7e594c7d1a112988551f0f81b->enter($__internal_c5bda0b24ca6643f5ec2e900e5774e413e995cf7e594c7d1a112988551f0f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d97aaae4f095056cd92c1e107b5332a279c6767ec3a3dd9d267aa1a51ac95250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97aaae4f095056cd92c1e107b5332a279c6767ec3a3dd9d267aa1a51ac95250->enter($__internal_d97aaae4f095056cd92c1e107b5332a279c6767ec3a3dd9d267aa1a51ac95250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5bda0b24ca6643f5ec2e900e5774e413e995cf7e594c7d1a112988551f0f81b->leave($__internal_c5bda0b24ca6643f5ec2e900e5774e413e995cf7e594c7d1a112988551f0f81b_prof);

        
        $__internal_d97aaae4f095056cd92c1e107b5332a279c6767ec3a3dd9d267aa1a51ac95250->leave($__internal_d97aaae4f095056cd92c1e107b5332a279c6767ec3a3dd9d267aa1a51ac95250_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5f3ca69732dc690cf731697f94769ab26cdaa0e9e42746b56a9efddf3b087f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f3ca69732dc690cf731697f94769ab26cdaa0e9e42746b56a9efddf3b087f7->enter($__internal_a5f3ca69732dc690cf731697f94769ab26cdaa0e9e42746b56a9efddf3b087f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8cd49db790ffa96d4cf33cf7f1eaa37affbd6d8c769d33d5e11f7f0df1d49d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cd49db790ffa96d4cf33cf7f1eaa37affbd6d8c769d33d5e11f7f0df1d49d9->enter($__internal_a8cd49db790ffa96d4cf33cf7f1eaa37affbd6d8c769d33d5e11f7f0df1d49d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8cd49db790ffa96d4cf33cf7f1eaa37affbd6d8c769d33d5e11f7f0df1d49d9->leave($__internal_a8cd49db790ffa96d4cf33cf7f1eaa37affbd6d8c769d33d5e11f7f0df1d49d9_prof);

        
        $__internal_a5f3ca69732dc690cf731697f94769ab26cdaa0e9e42746b56a9efddf3b087f7->leave($__internal_a5f3ca69732dc690cf731697f94769ab26cdaa0e9e42746b56a9efddf3b087f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ddd77588907493fdc91859d42061904f383547ce4cf16d15b64979240081f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ddd77588907493fdc91859d42061904f383547ce4cf16d15b64979240081f4b->enter($__internal_2ddd77588907493fdc91859d42061904f383547ce4cf16d15b64979240081f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7beab915e0c55a9275718d5c062f6d99979a10cd1b32dcaf1f9304acb13599b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7beab915e0c55a9275718d5c062f6d99979a10cd1b32dcaf1f9304acb13599b4->enter($__internal_7beab915e0c55a9275718d5c062f6d99979a10cd1b32dcaf1f9304acb13599b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7beab915e0c55a9275718d5c062f6d99979a10cd1b32dcaf1f9304acb13599b4->leave($__internal_7beab915e0c55a9275718d5c062f6d99979a10cd1b32dcaf1f9304acb13599b4_prof);

        
        $__internal_2ddd77588907493fdc91859d42061904f383547ce4cf16d15b64979240081f4b->leave($__internal_2ddd77588907493fdc91859d42061904f383547ce4cf16d15b64979240081f4b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_beeaa819adc5c1fdcd67c3266a4ffbd546b44fd3a562fdf6cb0e82d3749e5437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beeaa819adc5c1fdcd67c3266a4ffbd546b44fd3a562fdf6cb0e82d3749e5437->enter($__internal_beeaa819adc5c1fdcd67c3266a4ffbd546b44fd3a562fdf6cb0e82d3749e5437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b0fb8d8cd8c427b447d997d8f7178e93978e139b687480c88069f85d1bef7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0fb8d8cd8c427b447d997d8f7178e93978e139b687480c88069f85d1bef7f0->enter($__internal_2b0fb8d8cd8c427b447d997d8f7178e93978e139b687480c88069f85d1bef7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b0fb8d8cd8c427b447d997d8f7178e93978e139b687480c88069f85d1bef7f0->leave($__internal_2b0fb8d8cd8c427b447d997d8f7178e93978e139b687480c88069f85d1bef7f0_prof);

        
        $__internal_beeaa819adc5c1fdcd67c3266a4ffbd546b44fd3a562fdf6cb0e82d3749e5437->leave($__internal_beeaa819adc5c1fdcd67c3266a4ffbd546b44fd3a562fdf6cb0e82d3749e5437_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
