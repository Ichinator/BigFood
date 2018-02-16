<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cc9c1ee6c3b9f6538cd71f2e7f2b1138a2073da6fd20cccd2ae4fb64dc29f7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90f1f2ed34ca83f644ad403997403ee2040e3c4bd12cc45cd97f6a253b75471f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f1f2ed34ca83f644ad403997403ee2040e3c4bd12cc45cd97f6a253b75471f->enter($__internal_90f1f2ed34ca83f644ad403997403ee2040e3c4bd12cc45cd97f6a253b75471f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_64e9675a494e75c7cae74f3768dfa3e9c87da8ecd82e35c8a175ed26c219057a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e9675a494e75c7cae74f3768dfa3e9c87da8ecd82e35c8a175ed26c219057a->enter($__internal_64e9675a494e75c7cae74f3768dfa3e9c87da8ecd82e35c8a175ed26c219057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f1f2ed34ca83f644ad403997403ee2040e3c4bd12cc45cd97f6a253b75471f->leave($__internal_90f1f2ed34ca83f644ad403997403ee2040e3c4bd12cc45cd97f6a253b75471f_prof);

        
        $__internal_64e9675a494e75c7cae74f3768dfa3e9c87da8ecd82e35c8a175ed26c219057a->leave($__internal_64e9675a494e75c7cae74f3768dfa3e9c87da8ecd82e35c8a175ed26c219057a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fddc8b7566e5007a2e2e6322bc518ed1f56e97944d513b223988726ddef90da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddc8b7566e5007a2e2e6322bc518ed1f56e97944d513b223988726ddef90da7->enter($__internal_fddc8b7566e5007a2e2e6322bc518ed1f56e97944d513b223988726ddef90da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d56d3f3fea68b3ec9648a8a7792588064a680d4a55d11780993854709817784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d56d3f3fea68b3ec9648a8a7792588064a680d4a55d11780993854709817784->enter($__internal_1d56d3f3fea68b3ec9648a8a7792588064a680d4a55d11780993854709817784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1d56d3f3fea68b3ec9648a8a7792588064a680d4a55d11780993854709817784->leave($__internal_1d56d3f3fea68b3ec9648a8a7792588064a680d4a55d11780993854709817784_prof);

        
        $__internal_fddc8b7566e5007a2e2e6322bc518ed1f56e97944d513b223988726ddef90da7->leave($__internal_fddc8b7566e5007a2e2e6322bc518ed1f56e97944d513b223988726ddef90da7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ichinator/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
