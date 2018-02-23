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
        $__internal_d29a91ce09077e8a14c127cbfbdd8e795ed0b8effabe5d2fbaf924c1774438d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29a91ce09077e8a14c127cbfbdd8e795ed0b8effabe5d2fbaf924c1774438d8->enter($__internal_d29a91ce09077e8a14c127cbfbdd8e795ed0b8effabe5d2fbaf924c1774438d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ffdc86d0daf1cd2bb12c6c3969cd440febdb62d27b70556a2221efa4352d9e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdc86d0daf1cd2bb12c6c3969cd440febdb62d27b70556a2221efa4352d9e19->enter($__internal_ffdc86d0daf1cd2bb12c6c3969cd440febdb62d27b70556a2221efa4352d9e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29a91ce09077e8a14c127cbfbdd8e795ed0b8effabe5d2fbaf924c1774438d8->leave($__internal_d29a91ce09077e8a14c127cbfbdd8e795ed0b8effabe5d2fbaf924c1774438d8_prof);

        
        $__internal_ffdc86d0daf1cd2bb12c6c3969cd440febdb62d27b70556a2221efa4352d9e19->leave($__internal_ffdc86d0daf1cd2bb12c6c3969cd440febdb62d27b70556a2221efa4352d9e19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c62c26af13ad7d432c3281e351930f84f84e776b3a2a3f5277fe9047bba07f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62c26af13ad7d432c3281e351930f84f84e776b3a2a3f5277fe9047bba07f15->enter($__internal_c62c26af13ad7d432c3281e351930f84f84e776b3a2a3f5277fe9047bba07f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0605c89d2782cfc5ced8c74b9b6bb9440a85a2a1c61ba79e61f353caecc3b81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0605c89d2782cfc5ced8c74b9b6bb9440a85a2a1c61ba79e61f353caecc3b81d->enter($__internal_0605c89d2782cfc5ced8c74b9b6bb9440a85a2a1c61ba79e61f353caecc3b81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0605c89d2782cfc5ced8c74b9b6bb9440a85a2a1c61ba79e61f353caecc3b81d->leave($__internal_0605c89d2782cfc5ced8c74b9b6bb9440a85a2a1c61ba79e61f353caecc3b81d_prof);

        
        $__internal_c62c26af13ad7d432c3281e351930f84f84e776b3a2a3f5277fe9047bba07f15->leave($__internal_c62c26af13ad7d432c3281e351930f84f84e776b3a2a3f5277fe9047bba07f15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f4d96c631a3b65630241093d77c19f18f8b2885e828ef33c33944a6c86052f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4d96c631a3b65630241093d77c19f18f8b2885e828ef33c33944a6c86052f3->enter($__internal_5f4d96c631a3b65630241093d77c19f18f8b2885e828ef33c33944a6c86052f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef872b5cb9e801a277bcd01973aab5db3b24df6a138bfb9adb320c05bb779677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef872b5cb9e801a277bcd01973aab5db3b24df6a138bfb9adb320c05bb779677->enter($__internal_ef872b5cb9e801a277bcd01973aab5db3b24df6a138bfb9adb320c05bb779677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ef872b5cb9e801a277bcd01973aab5db3b24df6a138bfb9adb320c05bb779677->leave($__internal_ef872b5cb9e801a277bcd01973aab5db3b24df6a138bfb9adb320c05bb779677_prof);

        
        $__internal_5f4d96c631a3b65630241093d77c19f18f8b2885e828ef33c33944a6c86052f3->leave($__internal_5f4d96c631a3b65630241093d77c19f18f8b2885e828ef33c33944a6c86052f3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3157b6275e3ce0909007224f9135579e57062d769764880f5d52d134189a92c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3157b6275e3ce0909007224f9135579e57062d769764880f5d52d134189a92c0->enter($__internal_3157b6275e3ce0909007224f9135579e57062d769764880f5d52d134189a92c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_053f8c41fb7b807df9ab907913c5c676e6af7515a353a9f3376a2b2888d7cd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053f8c41fb7b807df9ab907913c5c676e6af7515a353a9f3376a2b2888d7cd7c->enter($__internal_053f8c41fb7b807df9ab907913c5c676e6af7515a353a9f3376a2b2888d7cd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_053f8c41fb7b807df9ab907913c5c676e6af7515a353a9f3376a2b2888d7cd7c->leave($__internal_053f8c41fb7b807df9ab907913c5c676e6af7515a353a9f3376a2b2888d7cd7c_prof);

        
        $__internal_3157b6275e3ce0909007224f9135579e57062d769764880f5d52d134189a92c0->leave($__internal_3157b6275e3ce0909007224f9135579e57062d769764880f5d52d134189a92c0_prof);

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
