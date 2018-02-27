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
        $__internal_2f0bbad63cb2d03d057ea58968e357bbd0b7156953b452adfc6eca4e4533bc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0bbad63cb2d03d057ea58968e357bbd0b7156953b452adfc6eca4e4533bc37->enter($__internal_2f0bbad63cb2d03d057ea58968e357bbd0b7156953b452adfc6eca4e4533bc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d9b277390a326a03d6ca71e9b7f8bfcb71ac09cd592ab8ae2252bbf7a955ea8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b277390a326a03d6ca71e9b7f8bfcb71ac09cd592ab8ae2252bbf7a955ea8b->enter($__internal_d9b277390a326a03d6ca71e9b7f8bfcb71ac09cd592ab8ae2252bbf7a955ea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0bbad63cb2d03d057ea58968e357bbd0b7156953b452adfc6eca4e4533bc37->leave($__internal_2f0bbad63cb2d03d057ea58968e357bbd0b7156953b452adfc6eca4e4533bc37_prof);

        
        $__internal_d9b277390a326a03d6ca71e9b7f8bfcb71ac09cd592ab8ae2252bbf7a955ea8b->leave($__internal_d9b277390a326a03d6ca71e9b7f8bfcb71ac09cd592ab8ae2252bbf7a955ea8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70f116c7c0e67ab8950ea8ef17f571bb1a29b1d80845ad03ef26e01378655b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f116c7c0e67ab8950ea8ef17f571bb1a29b1d80845ad03ef26e01378655b38->enter($__internal_70f116c7c0e67ab8950ea8ef17f571bb1a29b1d80845ad03ef26e01378655b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e101c9287f0d67e0c5675a652756de5c97af34eb0fd2c790b258f343350af85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e101c9287f0d67e0c5675a652756de5c97af34eb0fd2c790b258f343350af85->enter($__internal_3e101c9287f0d67e0c5675a652756de5c97af34eb0fd2c790b258f343350af85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3e101c9287f0d67e0c5675a652756de5c97af34eb0fd2c790b258f343350af85->leave($__internal_3e101c9287f0d67e0c5675a652756de5c97af34eb0fd2c790b258f343350af85_prof);

        
        $__internal_70f116c7c0e67ab8950ea8ef17f571bb1a29b1d80845ad03ef26e01378655b38->leave($__internal_70f116c7c0e67ab8950ea8ef17f571bb1a29b1d80845ad03ef26e01378655b38_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_893d0866e3b25b347932c8c29cd39dddbefe7ae284a171271b404ac3c65f239c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893d0866e3b25b347932c8c29cd39dddbefe7ae284a171271b404ac3c65f239c->enter($__internal_893d0866e3b25b347932c8c29cd39dddbefe7ae284a171271b404ac3c65f239c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_642519e7134963d7d0bbb1d6fb57f33b07452c0f26f2f3569c4aed6671f8bffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642519e7134963d7d0bbb1d6fb57f33b07452c0f26f2f3569c4aed6671f8bffd->enter($__internal_642519e7134963d7d0bbb1d6fb57f33b07452c0f26f2f3569c4aed6671f8bffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_642519e7134963d7d0bbb1d6fb57f33b07452c0f26f2f3569c4aed6671f8bffd->leave($__internal_642519e7134963d7d0bbb1d6fb57f33b07452c0f26f2f3569c4aed6671f8bffd_prof);

        
        $__internal_893d0866e3b25b347932c8c29cd39dddbefe7ae284a171271b404ac3c65f239c->leave($__internal_893d0866e3b25b347932c8c29cd39dddbefe7ae284a171271b404ac3c65f239c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36e68eaaf59cba0f732fd72e7542791e2c8c1e97281d611e858b4a9e8d03e0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e68eaaf59cba0f732fd72e7542791e2c8c1e97281d611e858b4a9e8d03e0fe->enter($__internal_36e68eaaf59cba0f732fd72e7542791e2c8c1e97281d611e858b4a9e8d03e0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0191a13c7ef706452133f1e0e3515eb1257a24119d8862cff38f02951af60e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0191a13c7ef706452133f1e0e3515eb1257a24119d8862cff38f02951af60e8->enter($__internal_d0191a13c7ef706452133f1e0e3515eb1257a24119d8862cff38f02951af60e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d0191a13c7ef706452133f1e0e3515eb1257a24119d8862cff38f02951af60e8->leave($__internal_d0191a13c7ef706452133f1e0e3515eb1257a24119d8862cff38f02951af60e8_prof);

        
        $__internal_36e68eaaf59cba0f732fd72e7542791e2c8c1e97281d611e858b4a9e8d03e0fe->leave($__internal_36e68eaaf59cba0f732fd72e7542791e2c8c1e97281d611e858b4a9e8d03e0fe_prof);

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
