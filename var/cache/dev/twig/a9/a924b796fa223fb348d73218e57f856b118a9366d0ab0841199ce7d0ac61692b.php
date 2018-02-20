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
        $__internal_2ffddfabdffd8cadee293782103630d3cc8ef205f40bc456214d364f62c2bad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffddfabdffd8cadee293782103630d3cc8ef205f40bc456214d364f62c2bad7->enter($__internal_2ffddfabdffd8cadee293782103630d3cc8ef205f40bc456214d364f62c2bad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2d34f6a146cd57e68e509eef5cf1c4a6cfe26899a09bb1737924c46de3daa46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d34f6a146cd57e68e509eef5cf1c4a6cfe26899a09bb1737924c46de3daa46f->enter($__internal_2d34f6a146cd57e68e509eef5cf1c4a6cfe26899a09bb1737924c46de3daa46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ffddfabdffd8cadee293782103630d3cc8ef205f40bc456214d364f62c2bad7->leave($__internal_2ffddfabdffd8cadee293782103630d3cc8ef205f40bc456214d364f62c2bad7_prof);

        
        $__internal_2d34f6a146cd57e68e509eef5cf1c4a6cfe26899a09bb1737924c46de3daa46f->leave($__internal_2d34f6a146cd57e68e509eef5cf1c4a6cfe26899a09bb1737924c46de3daa46f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa1c2af317e065babf5be9107d2adf3028373eaa8667c400e3bf4a49e25646f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1c2af317e065babf5be9107d2adf3028373eaa8667c400e3bf4a49e25646f9->enter($__internal_aa1c2af317e065babf5be9107d2adf3028373eaa8667c400e3bf4a49e25646f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b5d2defa7ae89d8f5a21dac8b2194f508de4de0f8546e27c3ee862bd9b8dec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5d2defa7ae89d8f5a21dac8b2194f508de4de0f8546e27c3ee862bd9b8dec1->enter($__internal_4b5d2defa7ae89d8f5a21dac8b2194f508de4de0f8546e27c3ee862bd9b8dec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4b5d2defa7ae89d8f5a21dac8b2194f508de4de0f8546e27c3ee862bd9b8dec1->leave($__internal_4b5d2defa7ae89d8f5a21dac8b2194f508de4de0f8546e27c3ee862bd9b8dec1_prof);

        
        $__internal_aa1c2af317e065babf5be9107d2adf3028373eaa8667c400e3bf4a49e25646f9->leave($__internal_aa1c2af317e065babf5be9107d2adf3028373eaa8667c400e3bf4a49e25646f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9bdf2a16abe1d1299984edc3fd267b70d9d69c450df9b4d13d23cf941bdbe9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bdf2a16abe1d1299984edc3fd267b70d9d69c450df9b4d13d23cf941bdbe9b->enter($__internal_d9bdf2a16abe1d1299984edc3fd267b70d9d69c450df9b4d13d23cf941bdbe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bfd2b849b8542ba9884140057cd4bcff7a34ae8099c0ac601472c7ebe8c3c022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd2b849b8542ba9884140057cd4bcff7a34ae8099c0ac601472c7ebe8c3c022->enter($__internal_bfd2b849b8542ba9884140057cd4bcff7a34ae8099c0ac601472c7ebe8c3c022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bfd2b849b8542ba9884140057cd4bcff7a34ae8099c0ac601472c7ebe8c3c022->leave($__internal_bfd2b849b8542ba9884140057cd4bcff7a34ae8099c0ac601472c7ebe8c3c022_prof);

        
        $__internal_d9bdf2a16abe1d1299984edc3fd267b70d9d69c450df9b4d13d23cf941bdbe9b->leave($__internal_d9bdf2a16abe1d1299984edc3fd267b70d9d69c450df9b4d13d23cf941bdbe9b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57c73d209365962693406fb77a7f0a839b3b859454119c1edcb08ed637f6bf97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c73d209365962693406fb77a7f0a839b3b859454119c1edcb08ed637f6bf97->enter($__internal_57c73d209365962693406fb77a7f0a839b3b859454119c1edcb08ed637f6bf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5828a81e1c3e8d679373f76c78e88215f120a659dbd4387bbf40de8031580c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5828a81e1c3e8d679373f76c78e88215f120a659dbd4387bbf40de8031580c7->enter($__internal_d5828a81e1c3e8d679373f76c78e88215f120a659dbd4387bbf40de8031580c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d5828a81e1c3e8d679373f76c78e88215f120a659dbd4387bbf40de8031580c7->leave($__internal_d5828a81e1c3e8d679373f76c78e88215f120a659dbd4387bbf40de8031580c7_prof);

        
        $__internal_57c73d209365962693406fb77a7f0a839b3b859454119c1edcb08ed637f6bf97->leave($__internal_57c73d209365962693406fb77a7f0a839b3b859454119c1edcb08ed637f6bf97_prof);

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
