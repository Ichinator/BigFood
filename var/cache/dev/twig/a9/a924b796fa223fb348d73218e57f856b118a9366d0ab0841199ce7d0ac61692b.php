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
        $__internal_dc58da0672f513392aa7b1512a551bf39c19fb78cf24af15738e349386f4661f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc58da0672f513392aa7b1512a551bf39c19fb78cf24af15738e349386f4661f->enter($__internal_dc58da0672f513392aa7b1512a551bf39c19fb78cf24af15738e349386f4661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_75abad51eb9c455c0aec6496e22462a360c60079d9f05577cb964ab554341933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75abad51eb9c455c0aec6496e22462a360c60079d9f05577cb964ab554341933->enter($__internal_75abad51eb9c455c0aec6496e22462a360c60079d9f05577cb964ab554341933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc58da0672f513392aa7b1512a551bf39c19fb78cf24af15738e349386f4661f->leave($__internal_dc58da0672f513392aa7b1512a551bf39c19fb78cf24af15738e349386f4661f_prof);

        
        $__internal_75abad51eb9c455c0aec6496e22462a360c60079d9f05577cb964ab554341933->leave($__internal_75abad51eb9c455c0aec6496e22462a360c60079d9f05577cb964ab554341933_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f529a752e2a313fc18de8b885a9e160516c0ef429a383beb286c975adc73147d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f529a752e2a313fc18de8b885a9e160516c0ef429a383beb286c975adc73147d->enter($__internal_f529a752e2a313fc18de8b885a9e160516c0ef429a383beb286c975adc73147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0197fd10444b6d2cdb04a9642840435512b5c2afed5d66aedc029b0d8ce80db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0197fd10444b6d2cdb04a9642840435512b5c2afed5d66aedc029b0d8ce80db1->enter($__internal_0197fd10444b6d2cdb04a9642840435512b5c2afed5d66aedc029b0d8ce80db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0197fd10444b6d2cdb04a9642840435512b5c2afed5d66aedc029b0d8ce80db1->leave($__internal_0197fd10444b6d2cdb04a9642840435512b5c2afed5d66aedc029b0d8ce80db1_prof);

        
        $__internal_f529a752e2a313fc18de8b885a9e160516c0ef429a383beb286c975adc73147d->leave($__internal_f529a752e2a313fc18de8b885a9e160516c0ef429a383beb286c975adc73147d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cd26a648b16f677f292b126b7cd1c9b7b24738519f176a878535bf56e2ef240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd26a648b16f677f292b126b7cd1c9b7b24738519f176a878535bf56e2ef240->enter($__internal_8cd26a648b16f677f292b126b7cd1c9b7b24738519f176a878535bf56e2ef240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88f53db5d8063225b9ec138f041628c39b3ba9046dd2ce2856c26297ce02bd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f53db5d8063225b9ec138f041628c39b3ba9046dd2ce2856c26297ce02bd4b->enter($__internal_88f53db5d8063225b9ec138f041628c39b3ba9046dd2ce2856c26297ce02bd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_88f53db5d8063225b9ec138f041628c39b3ba9046dd2ce2856c26297ce02bd4b->leave($__internal_88f53db5d8063225b9ec138f041628c39b3ba9046dd2ce2856c26297ce02bd4b_prof);

        
        $__internal_8cd26a648b16f677f292b126b7cd1c9b7b24738519f176a878535bf56e2ef240->leave($__internal_8cd26a648b16f677f292b126b7cd1c9b7b24738519f176a878535bf56e2ef240_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5d385073be7428acc47bc5a08495616d7e4338b12fc898bbb9a78bd4705e86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d385073be7428acc47bc5a08495616d7e4338b12fc898bbb9a78bd4705e86d->enter($__internal_f5d385073be7428acc47bc5a08495616d7e4338b12fc898bbb9a78bd4705e86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4a8c1e2061238395b957015955a4172d16578a78b16be0e3c16e61f0981f454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a8c1e2061238395b957015955a4172d16578a78b16be0e3c16e61f0981f454->enter($__internal_a4a8c1e2061238395b957015955a4172d16578a78b16be0e3c16e61f0981f454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a4a8c1e2061238395b957015955a4172d16578a78b16be0e3c16e61f0981f454->leave($__internal_a4a8c1e2061238395b957015955a4172d16578a78b16be0e3c16e61f0981f454_prof);

        
        $__internal_f5d385073be7428acc47bc5a08495616d7e4338b12fc898bbb9a78bd4705e86d->leave($__internal_f5d385073be7428acc47bc5a08495616d7e4338b12fc898bbb9a78bd4705e86d_prof);

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
