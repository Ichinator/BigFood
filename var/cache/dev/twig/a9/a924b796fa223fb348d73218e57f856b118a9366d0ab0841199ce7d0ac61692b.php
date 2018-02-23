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
        $__internal_7c810ef83f3f0fbe5d74d3f2212f5bd4e4bed43fc26c38b7c15bbc9d4d1e4ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c810ef83f3f0fbe5d74d3f2212f5bd4e4bed43fc26c38b7c15bbc9d4d1e4ce1->enter($__internal_7c810ef83f3f0fbe5d74d3f2212f5bd4e4bed43fc26c38b7c15bbc9d4d1e4ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e52d60110629783747194b0fc6c50dc818efe19925eef8ef7ca9953e2fe81c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52d60110629783747194b0fc6c50dc818efe19925eef8ef7ca9953e2fe81c00->enter($__internal_e52d60110629783747194b0fc6c50dc818efe19925eef8ef7ca9953e2fe81c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c810ef83f3f0fbe5d74d3f2212f5bd4e4bed43fc26c38b7c15bbc9d4d1e4ce1->leave($__internal_7c810ef83f3f0fbe5d74d3f2212f5bd4e4bed43fc26c38b7c15bbc9d4d1e4ce1_prof);

        
        $__internal_e52d60110629783747194b0fc6c50dc818efe19925eef8ef7ca9953e2fe81c00->leave($__internal_e52d60110629783747194b0fc6c50dc818efe19925eef8ef7ca9953e2fe81c00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efcc3b248a17084e28809b061cd943e621b34f7edf7cdc1d962a55d55b87e61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcc3b248a17084e28809b061cd943e621b34f7edf7cdc1d962a55d55b87e61c->enter($__internal_efcc3b248a17084e28809b061cd943e621b34f7edf7cdc1d962a55d55b87e61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f9dce5f221bfd220354c472e5e0cc0b07fea5e5444f8539b5f6ce6d4f078e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9dce5f221bfd220354c472e5e0cc0b07fea5e5444f8539b5f6ce6d4f078e41->enter($__internal_6f9dce5f221bfd220354c472e5e0cc0b07fea5e5444f8539b5f6ce6d4f078e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6f9dce5f221bfd220354c472e5e0cc0b07fea5e5444f8539b5f6ce6d4f078e41->leave($__internal_6f9dce5f221bfd220354c472e5e0cc0b07fea5e5444f8539b5f6ce6d4f078e41_prof);

        
        $__internal_efcc3b248a17084e28809b061cd943e621b34f7edf7cdc1d962a55d55b87e61c->leave($__internal_efcc3b248a17084e28809b061cd943e621b34f7edf7cdc1d962a55d55b87e61c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72ab48e27de7b8acde25af464f1319d0ab9bdba895eeed340a2a14452dcf234d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ab48e27de7b8acde25af464f1319d0ab9bdba895eeed340a2a14452dcf234d->enter($__internal_72ab48e27de7b8acde25af464f1319d0ab9bdba895eeed340a2a14452dcf234d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c2574fa30a42d64860fa440c15e3f43183d435d772a7a290099ff188ef8181e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2574fa30a42d64860fa440c15e3f43183d435d772a7a290099ff188ef8181e->enter($__internal_4c2574fa30a42d64860fa440c15e3f43183d435d772a7a290099ff188ef8181e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4c2574fa30a42d64860fa440c15e3f43183d435d772a7a290099ff188ef8181e->leave($__internal_4c2574fa30a42d64860fa440c15e3f43183d435d772a7a290099ff188ef8181e_prof);

        
        $__internal_72ab48e27de7b8acde25af464f1319d0ab9bdba895eeed340a2a14452dcf234d->leave($__internal_72ab48e27de7b8acde25af464f1319d0ab9bdba895eeed340a2a14452dcf234d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9ae1b73ead471faec66a122ed3f9a3faad5fa4925fbf16f01de42b00c9b0691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ae1b73ead471faec66a122ed3f9a3faad5fa4925fbf16f01de42b00c9b0691->enter($__internal_e9ae1b73ead471faec66a122ed3f9a3faad5fa4925fbf16f01de42b00c9b0691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb104e9a00a247097265e6cefcf2a508ef7932d3e1cb295e4f4cda98da211360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb104e9a00a247097265e6cefcf2a508ef7932d3e1cb295e4f4cda98da211360->enter($__internal_fb104e9a00a247097265e6cefcf2a508ef7932d3e1cb295e4f4cda98da211360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fb104e9a00a247097265e6cefcf2a508ef7932d3e1cb295e4f4cda98da211360->leave($__internal_fb104e9a00a247097265e6cefcf2a508ef7932d3e1cb295e4f4cda98da211360_prof);

        
        $__internal_e9ae1b73ead471faec66a122ed3f9a3faad5fa4925fbf16f01de42b00c9b0691->leave($__internal_e9ae1b73ead471faec66a122ed3f9a3faad5fa4925fbf16f01de42b00c9b0691_prof);

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
