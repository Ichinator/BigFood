<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d05eb67e712b81a956c5f72467b14f8f6f71894ba1dfb240b453652d7580f052 extends Twig_Template
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
        $__internal_720102945db9cd40ee0047ab59a3daf9c841e95e93ab27b37e270a5dec773ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720102945db9cd40ee0047ab59a3daf9c841e95e93ab27b37e270a5dec773ed6->enter($__internal_720102945db9cd40ee0047ab59a3daf9c841e95e93ab27b37e270a5dec773ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_83e5843b21beaea320bc0ae1543eb28fdee638cd57bf936ccd5e56f1b8fa3f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e5843b21beaea320bc0ae1543eb28fdee638cd57bf936ccd5e56f1b8fa3f1d->enter($__internal_83e5843b21beaea320bc0ae1543eb28fdee638cd57bf936ccd5e56f1b8fa3f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720102945db9cd40ee0047ab59a3daf9c841e95e93ab27b37e270a5dec773ed6->leave($__internal_720102945db9cd40ee0047ab59a3daf9c841e95e93ab27b37e270a5dec773ed6_prof);

        
        $__internal_83e5843b21beaea320bc0ae1543eb28fdee638cd57bf936ccd5e56f1b8fa3f1d->leave($__internal_83e5843b21beaea320bc0ae1543eb28fdee638cd57bf936ccd5e56f1b8fa3f1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cdacde66edb020b0014ca63cf4f2535986c6c3b4b8a9ed54d18fb0818d6f739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cdacde66edb020b0014ca63cf4f2535986c6c3b4b8a9ed54d18fb0818d6f739->enter($__internal_7cdacde66edb020b0014ca63cf4f2535986c6c3b4b8a9ed54d18fb0818d6f739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f2bd24af8fd369cf55f2d139e9e1ec93a2c206cfb7b3f2acf528f643bd306bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bd24af8fd369cf55f2d139e9e1ec93a2c206cfb7b3f2acf528f643bd306bf2->enter($__internal_f2bd24af8fd369cf55f2d139e9e1ec93a2c206cfb7b3f2acf528f643bd306bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f2bd24af8fd369cf55f2d139e9e1ec93a2c206cfb7b3f2acf528f643bd306bf2->leave($__internal_f2bd24af8fd369cf55f2d139e9e1ec93a2c206cfb7b3f2acf528f643bd306bf2_prof);

        
        $__internal_7cdacde66edb020b0014ca63cf4f2535986c6c3b4b8a9ed54d18fb0818d6f739->leave($__internal_7cdacde66edb020b0014ca63cf4f2535986c6c3b4b8a9ed54d18fb0818d6f739_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5f215fc9871fabfb64d84814773b78ebe1c6441c669c4038188a223cf83dd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f215fc9871fabfb64d84814773b78ebe1c6441c669c4038188a223cf83dd92->enter($__internal_c5f215fc9871fabfb64d84814773b78ebe1c6441c669c4038188a223cf83dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9aaeceb71a6fb2677ead0df168eb16c6999201be294d3639b759e4b2afaec1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aaeceb71a6fb2677ead0df168eb16c6999201be294d3639b759e4b2afaec1d4->enter($__internal_9aaeceb71a6fb2677ead0df168eb16c6999201be294d3639b759e4b2afaec1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9aaeceb71a6fb2677ead0df168eb16c6999201be294d3639b759e4b2afaec1d4->leave($__internal_9aaeceb71a6fb2677ead0df168eb16c6999201be294d3639b759e4b2afaec1d4_prof);

        
        $__internal_c5f215fc9871fabfb64d84814773b78ebe1c6441c669c4038188a223cf83dd92->leave($__internal_c5f215fc9871fabfb64d84814773b78ebe1c6441c669c4038188a223cf83dd92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a57660c16da90b0bec62083a5cedb4a57561ed530d621188cb0d86d9fec219b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57660c16da90b0bec62083a5cedb4a57561ed530d621188cb0d86d9fec219b7->enter($__internal_a57660c16da90b0bec62083a5cedb4a57561ed530d621188cb0d86d9fec219b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20d7d8839e8f5b936a7dfc98c8a9f04e964a69f25a26bc114a00145f9420b1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d7d8839e8f5b936a7dfc98c8a9f04e964a69f25a26bc114a00145f9420b1a2->enter($__internal_20d7d8839e8f5b936a7dfc98c8a9f04e964a69f25a26bc114a00145f9420b1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20d7d8839e8f5b936a7dfc98c8a9f04e964a69f25a26bc114a00145f9420b1a2->leave($__internal_20d7d8839e8f5b936a7dfc98c8a9f04e964a69f25a26bc114a00145f9420b1a2_prof);

        
        $__internal_a57660c16da90b0bec62083a5cedb4a57561ed530d621188cb0d86d9fec219b7->leave($__internal_a57660c16da90b0bec62083a5cedb4a57561ed530d621188cb0d86d9fec219b7_prof);

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
