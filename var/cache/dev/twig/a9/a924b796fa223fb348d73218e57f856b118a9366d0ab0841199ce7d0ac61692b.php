<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_12525f9367d6afdf88eb480df5622bbc9c42de1f792e17cb1dc43efa40feeba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2e32625dec3be8721d01fb7d7c26071e85b2de228efb5456165ac9b64e669aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e32625dec3be8721d01fb7d7c26071e85b2de228efb5456165ac9b64e669aa0->enter($__internal_2e32625dec3be8721d01fb7d7c26071e85b2de228efb5456165ac9b64e669aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5cb34250cb4b8aac3226da29bb50dc4c1fafcf11291d8a744ef27d08ecb1be12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb34250cb4b8aac3226da29bb50dc4c1fafcf11291d8a744ef27d08ecb1be12->enter($__internal_5cb34250cb4b8aac3226da29bb50dc4c1fafcf11291d8a744ef27d08ecb1be12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e32625dec3be8721d01fb7d7c26071e85b2de228efb5456165ac9b64e669aa0->leave($__internal_2e32625dec3be8721d01fb7d7c26071e85b2de228efb5456165ac9b64e669aa0_prof);

        
        $__internal_5cb34250cb4b8aac3226da29bb50dc4c1fafcf11291d8a744ef27d08ecb1be12->leave($__internal_5cb34250cb4b8aac3226da29bb50dc4c1fafcf11291d8a744ef27d08ecb1be12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f759321a15835f46636a5605c1da4491bfb8c72962ec9ec3ff9083b499f00c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f759321a15835f46636a5605c1da4491bfb8c72962ec9ec3ff9083b499f00c57->enter($__internal_f759321a15835f46636a5605c1da4491bfb8c72962ec9ec3ff9083b499f00c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4480aa1a21d98a5b9395f2531d03dfbdb6c699c4c91628aff8266e2ba8890516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4480aa1a21d98a5b9395f2531d03dfbdb6c699c4c91628aff8266e2ba8890516->enter($__internal_4480aa1a21d98a5b9395f2531d03dfbdb6c699c4c91628aff8266e2ba8890516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4480aa1a21d98a5b9395f2531d03dfbdb6c699c4c91628aff8266e2ba8890516->leave($__internal_4480aa1a21d98a5b9395f2531d03dfbdb6c699c4c91628aff8266e2ba8890516_prof);

        
        $__internal_f759321a15835f46636a5605c1da4491bfb8c72962ec9ec3ff9083b499f00c57->leave($__internal_f759321a15835f46636a5605c1da4491bfb8c72962ec9ec3ff9083b499f00c57_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c59f5b4bc3881d496dfee80464facde15213b69c6e7dfc122027ad57d6d0d73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59f5b4bc3881d496dfee80464facde15213b69c6e7dfc122027ad57d6d0d73a->enter($__internal_c59f5b4bc3881d496dfee80464facde15213b69c6e7dfc122027ad57d6d0d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9caa44debbf0dc10a2d0d53bbf76617c2321046115e2d3d07afe14410ebef297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caa44debbf0dc10a2d0d53bbf76617c2321046115e2d3d07afe14410ebef297->enter($__internal_9caa44debbf0dc10a2d0d53bbf76617c2321046115e2d3d07afe14410ebef297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9caa44debbf0dc10a2d0d53bbf76617c2321046115e2d3d07afe14410ebef297->leave($__internal_9caa44debbf0dc10a2d0d53bbf76617c2321046115e2d3d07afe14410ebef297_prof);

        
        $__internal_c59f5b4bc3881d496dfee80464facde15213b69c6e7dfc122027ad57d6d0d73a->leave($__internal_c59f5b4bc3881d496dfee80464facde15213b69c6e7dfc122027ad57d6d0d73a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fad5b35e08264b7142dfd4ae62022cdb4e45ef6cd0e401557f569208df0f0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fad5b35e08264b7142dfd4ae62022cdb4e45ef6cd0e401557f569208df0f0ae->enter($__internal_0fad5b35e08264b7142dfd4ae62022cdb4e45ef6cd0e401557f569208df0f0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e58abc8c6d61b5e47856c4286867ba0f222042f5878437fc5b97785e3a812471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58abc8c6d61b5e47856c4286867ba0f222042f5878437fc5b97785e3a812471->enter($__internal_e58abc8c6d61b5e47856c4286867ba0f222042f5878437fc5b97785e3a812471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e58abc8c6d61b5e47856c4286867ba0f222042f5878437fc5b97785e3a812471->leave($__internal_e58abc8c6d61b5e47856c4286867ba0f222042f5878437fc5b97785e3a812471_prof);

        
        $__internal_0fad5b35e08264b7142dfd4ae62022cdb4e45ef6cd0e401557f569208df0f0ae->leave($__internal_0fad5b35e08264b7142dfd4ae62022cdb4e45ef6cd0e401557f569208df0f0ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
