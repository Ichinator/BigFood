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
        $__internal_9685c9480d027cf3b37bf1858d4c5001445ecc82f0a967ea92346b724b05a799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9685c9480d027cf3b37bf1858d4c5001445ecc82f0a967ea92346b724b05a799->enter($__internal_9685c9480d027cf3b37bf1858d4c5001445ecc82f0a967ea92346b724b05a799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_515c495db15fe07f1756c153bdacfa488336b534d636b5c775ed93aca9216fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515c495db15fe07f1756c153bdacfa488336b534d636b5c775ed93aca9216fd4->enter($__internal_515c495db15fe07f1756c153bdacfa488336b534d636b5c775ed93aca9216fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9685c9480d027cf3b37bf1858d4c5001445ecc82f0a967ea92346b724b05a799->leave($__internal_9685c9480d027cf3b37bf1858d4c5001445ecc82f0a967ea92346b724b05a799_prof);

        
        $__internal_515c495db15fe07f1756c153bdacfa488336b534d636b5c775ed93aca9216fd4->leave($__internal_515c495db15fe07f1756c153bdacfa488336b534d636b5c775ed93aca9216fd4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8925751d2bd0aeb10c85285f2498ec4d92d3c83f42f6bc96e1a305e10b1dbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8925751d2bd0aeb10c85285f2498ec4d92d3c83f42f6bc96e1a305e10b1dbb1->enter($__internal_a8925751d2bd0aeb10c85285f2498ec4d92d3c83f42f6bc96e1a305e10b1dbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc6629af304880222dc0c0c0ad1f7aa2ca8ab4141c4e470547e7089bcc8cbadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6629af304880222dc0c0c0ad1f7aa2ca8ab4141c4e470547e7089bcc8cbadf->enter($__internal_fc6629af304880222dc0c0c0ad1f7aa2ca8ab4141c4e470547e7089bcc8cbadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc6629af304880222dc0c0c0ad1f7aa2ca8ab4141c4e470547e7089bcc8cbadf->leave($__internal_fc6629af304880222dc0c0c0ad1f7aa2ca8ab4141c4e470547e7089bcc8cbadf_prof);

        
        $__internal_a8925751d2bd0aeb10c85285f2498ec4d92d3c83f42f6bc96e1a305e10b1dbb1->leave($__internal_a8925751d2bd0aeb10c85285f2498ec4d92d3c83f42f6bc96e1a305e10b1dbb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_58a602415b78802ed1de8f8cbd99e953cdcc8417b166b469867bb37a61ebd3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a602415b78802ed1de8f8cbd99e953cdcc8417b166b469867bb37a61ebd3e2->enter($__internal_58a602415b78802ed1de8f8cbd99e953cdcc8417b166b469867bb37a61ebd3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ab52e1b78131c4049749928e9a032dc38453cf52ddc005c3a87b842c62fe9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab52e1b78131c4049749928e9a032dc38453cf52ddc005c3a87b842c62fe9c2->enter($__internal_0ab52e1b78131c4049749928e9a032dc38453cf52ddc005c3a87b842c62fe9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ab52e1b78131c4049749928e9a032dc38453cf52ddc005c3a87b842c62fe9c2->leave($__internal_0ab52e1b78131c4049749928e9a032dc38453cf52ddc005c3a87b842c62fe9c2_prof);

        
        $__internal_58a602415b78802ed1de8f8cbd99e953cdcc8417b166b469867bb37a61ebd3e2->leave($__internal_58a602415b78802ed1de8f8cbd99e953cdcc8417b166b469867bb37a61ebd3e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92bd0bd67a6d40d4055b35851886ead7df76c29d9211a63e2322287548529f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bd0bd67a6d40d4055b35851886ead7df76c29d9211a63e2322287548529f6c->enter($__internal_92bd0bd67a6d40d4055b35851886ead7df76c29d9211a63e2322287548529f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08acb98422afb949aef6acf8629ac1243db6242cec472c2eeaba3cd7c4d7476f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08acb98422afb949aef6acf8629ac1243db6242cec472c2eeaba3cd7c4d7476f->enter($__internal_08acb98422afb949aef6acf8629ac1243db6242cec472c2eeaba3cd7c4d7476f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08acb98422afb949aef6acf8629ac1243db6242cec472c2eeaba3cd7c4d7476f->leave($__internal_08acb98422afb949aef6acf8629ac1243db6242cec472c2eeaba3cd7c4d7476f_prof);

        
        $__internal_92bd0bd67a6d40d4055b35851886ead7df76c29d9211a63e2322287548529f6c->leave($__internal_92bd0bd67a6d40d4055b35851886ead7df76c29d9211a63e2322287548529f6c_prof);

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
