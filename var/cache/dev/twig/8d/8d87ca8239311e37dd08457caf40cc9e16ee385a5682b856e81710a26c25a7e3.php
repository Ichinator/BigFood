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
        $__internal_b4321aa459e87da845b37fc5e281670a2ca26f51ec0c4b457a8557b9cdffb471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4321aa459e87da845b37fc5e281670a2ca26f51ec0c4b457a8557b9cdffb471->enter($__internal_b4321aa459e87da845b37fc5e281670a2ca26f51ec0c4b457a8557b9cdffb471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_57374bd8a703cd98ddb0dff28d2a40b7aea5c12cda5983cedd26c9a336c1e390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57374bd8a703cd98ddb0dff28d2a40b7aea5c12cda5983cedd26c9a336c1e390->enter($__internal_57374bd8a703cd98ddb0dff28d2a40b7aea5c12cda5983cedd26c9a336c1e390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4321aa459e87da845b37fc5e281670a2ca26f51ec0c4b457a8557b9cdffb471->leave($__internal_b4321aa459e87da845b37fc5e281670a2ca26f51ec0c4b457a8557b9cdffb471_prof);

        
        $__internal_57374bd8a703cd98ddb0dff28d2a40b7aea5c12cda5983cedd26c9a336c1e390->leave($__internal_57374bd8a703cd98ddb0dff28d2a40b7aea5c12cda5983cedd26c9a336c1e390_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_879b60127077fe6da7c7010e9294cf3b66e49a73cf554ccc31ed348d5f1bb6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879b60127077fe6da7c7010e9294cf3b66e49a73cf554ccc31ed348d5f1bb6cf->enter($__internal_879b60127077fe6da7c7010e9294cf3b66e49a73cf554ccc31ed348d5f1bb6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e38047be2062bdf4e8e082f3364ee3681e3d80ccfcfc86da1b6a1fe3eec04ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38047be2062bdf4e8e082f3364ee3681e3d80ccfcfc86da1b6a1fe3eec04ed5->enter($__internal_e38047be2062bdf4e8e082f3364ee3681e3d80ccfcfc86da1b6a1fe3eec04ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e38047be2062bdf4e8e082f3364ee3681e3d80ccfcfc86da1b6a1fe3eec04ed5->leave($__internal_e38047be2062bdf4e8e082f3364ee3681e3d80ccfcfc86da1b6a1fe3eec04ed5_prof);

        
        $__internal_879b60127077fe6da7c7010e9294cf3b66e49a73cf554ccc31ed348d5f1bb6cf->leave($__internal_879b60127077fe6da7c7010e9294cf3b66e49a73cf554ccc31ed348d5f1bb6cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de2901d9ce7a20af1bf9bf10c3940790b713100f4f8be007fba0f60b8bfc792b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2901d9ce7a20af1bf9bf10c3940790b713100f4f8be007fba0f60b8bfc792b->enter($__internal_de2901d9ce7a20af1bf9bf10c3940790b713100f4f8be007fba0f60b8bfc792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_feeaaa59fd1e47459fcf82d18bb86546d92114dcf719cc5a1a1d20fd8d18ae1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feeaaa59fd1e47459fcf82d18bb86546d92114dcf719cc5a1a1d20fd8d18ae1a->enter($__internal_feeaaa59fd1e47459fcf82d18bb86546d92114dcf719cc5a1a1d20fd8d18ae1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_feeaaa59fd1e47459fcf82d18bb86546d92114dcf719cc5a1a1d20fd8d18ae1a->leave($__internal_feeaaa59fd1e47459fcf82d18bb86546d92114dcf719cc5a1a1d20fd8d18ae1a_prof);

        
        $__internal_de2901d9ce7a20af1bf9bf10c3940790b713100f4f8be007fba0f60b8bfc792b->leave($__internal_de2901d9ce7a20af1bf9bf10c3940790b713100f4f8be007fba0f60b8bfc792b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b79f91aa03b1b7241eade82a0b866768742baeda1af485f0c5ed1e28fa7978d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b79f91aa03b1b7241eade82a0b866768742baeda1af485f0c5ed1e28fa7978d->enter($__internal_5b79f91aa03b1b7241eade82a0b866768742baeda1af485f0c5ed1e28fa7978d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66fffb17a54a0676e123d4ea5eaaa2f87592d35506abf73479c39d2a646a04b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fffb17a54a0676e123d4ea5eaaa2f87592d35506abf73479c39d2a646a04b1->enter($__internal_66fffb17a54a0676e123d4ea5eaaa2f87592d35506abf73479c39d2a646a04b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66fffb17a54a0676e123d4ea5eaaa2f87592d35506abf73479c39d2a646a04b1->leave($__internal_66fffb17a54a0676e123d4ea5eaaa2f87592d35506abf73479c39d2a646a04b1_prof);

        
        $__internal_5b79f91aa03b1b7241eade82a0b866768742baeda1af485f0c5ed1e28fa7978d->leave($__internal_5b79f91aa03b1b7241eade82a0b866768742baeda1af485f0c5ed1e28fa7978d_prof);

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
