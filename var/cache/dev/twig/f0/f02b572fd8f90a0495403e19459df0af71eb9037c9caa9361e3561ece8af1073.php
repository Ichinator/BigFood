<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dcfb52367509ec83d59b86f403ed8bb1c671bb8861b74ee7a35504d29722a52f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_666d119cbd191bb79f5986f6067ab651d2d032bc8526074a8656e6fcfa9eb185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666d119cbd191bb79f5986f6067ab651d2d032bc8526074a8656e6fcfa9eb185->enter($__internal_666d119cbd191bb79f5986f6067ab651d2d032bc8526074a8656e6fcfa9eb185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f028072cf5a493caa5082d9e0257ac1b00c7ae8e99afed11917fe1373754761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f028072cf5a493caa5082d9e0257ac1b00c7ae8e99afed11917fe1373754761->enter($__internal_1f028072cf5a493caa5082d9e0257ac1b00c7ae8e99afed11917fe1373754761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666d119cbd191bb79f5986f6067ab651d2d032bc8526074a8656e6fcfa9eb185->leave($__internal_666d119cbd191bb79f5986f6067ab651d2d032bc8526074a8656e6fcfa9eb185_prof);

        
        $__internal_1f028072cf5a493caa5082d9e0257ac1b00c7ae8e99afed11917fe1373754761->leave($__internal_1f028072cf5a493caa5082d9e0257ac1b00c7ae8e99afed11917fe1373754761_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b26810903a1c3bef2603dd2363436473931e9c28187e567338f1c14b6d5c0768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26810903a1c3bef2603dd2363436473931e9c28187e567338f1c14b6d5c0768->enter($__internal_b26810903a1c3bef2603dd2363436473931e9c28187e567338f1c14b6d5c0768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24559884393e26542cf2a12bee7bc1f0e5cff6341c833b1ee8d8925bfd9f1d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24559884393e26542cf2a12bee7bc1f0e5cff6341c833b1ee8d8925bfd9f1d10->enter($__internal_24559884393e26542cf2a12bee7bc1f0e5cff6341c833b1ee8d8925bfd9f1d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_24559884393e26542cf2a12bee7bc1f0e5cff6341c833b1ee8d8925bfd9f1d10->leave($__internal_24559884393e26542cf2a12bee7bc1f0e5cff6341c833b1ee8d8925bfd9f1d10_prof);

        
        $__internal_b26810903a1c3bef2603dd2363436473931e9c28187e567338f1c14b6d5c0768->leave($__internal_b26810903a1c3bef2603dd2363436473931e9c28187e567338f1c14b6d5c0768_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3afc7e5a8f84910e36d4a0b87ec446af06d5739f3eb14cbe133ee178809fb123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afc7e5a8f84910e36d4a0b87ec446af06d5739f3eb14cbe133ee178809fb123->enter($__internal_3afc7e5a8f84910e36d4a0b87ec446af06d5739f3eb14cbe133ee178809fb123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7e90cdcbfbb3b1cbe439738f5bcf0087915ccd137ad07a27b71c7f4aafdf42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e90cdcbfbb3b1cbe439738f5bcf0087915ccd137ad07a27b71c7f4aafdf42e->enter($__internal_e7e90cdcbfbb3b1cbe439738f5bcf0087915ccd137ad07a27b71c7f4aafdf42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e7e90cdcbfbb3b1cbe439738f5bcf0087915ccd137ad07a27b71c7f4aafdf42e->leave($__internal_e7e90cdcbfbb3b1cbe439738f5bcf0087915ccd137ad07a27b71c7f4aafdf42e_prof);

        
        $__internal_3afc7e5a8f84910e36d4a0b87ec446af06d5739f3eb14cbe133ee178809fb123->leave($__internal_3afc7e5a8f84910e36d4a0b87ec446af06d5739f3eb14cbe133ee178809fb123_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf9e9cf1a4b5a76bd32aa5545c1d2117c9e13b9f0743147b6dee66f449af6c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9e9cf1a4b5a76bd32aa5545c1d2117c9e13b9f0743147b6dee66f449af6c92->enter($__internal_bf9e9cf1a4b5a76bd32aa5545c1d2117c9e13b9f0743147b6dee66f449af6c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e66c4a6aa8ebb67f214fa1ae487393f7da86ca47c3c4dcff101af2493bbe44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e66c4a6aa8ebb67f214fa1ae487393f7da86ca47c3c4dcff101af2493bbe44e->enter($__internal_7e66c4a6aa8ebb67f214fa1ae487393f7da86ca47c3c4dcff101af2493bbe44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7e66c4a6aa8ebb67f214fa1ae487393f7da86ca47c3c4dcff101af2493bbe44e->leave($__internal_7e66c4a6aa8ebb67f214fa1ae487393f7da86ca47c3c4dcff101af2493bbe44e_prof);

        
        $__internal_bf9e9cf1a4b5a76bd32aa5545c1d2117c9e13b9f0743147b6dee66f449af6c92->leave($__internal_bf9e9cf1a4b5a76bd32aa5545c1d2117c9e13b9f0743147b6dee66f449af6c92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/home/ichinator/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
