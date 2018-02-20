<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_cc9c1ee6c3b9f6538cd71f2e7f2b1138a2073da6fd20cccd2ae4fb64dc29f7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_493b59153f8bbff254123514ddcb1d8e8f82bcc8cd4404df4b1d8ed3023dc587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493b59153f8bbff254123514ddcb1d8e8f82bcc8cd4404df4b1d8ed3023dc587->enter($__internal_493b59153f8bbff254123514ddcb1d8e8f82bcc8cd4404df4b1d8ed3023dc587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_976f80169aa49e06ca8a6427d3877e4ef64ec492e693f2cdafac13866b6a6e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976f80169aa49e06ca8a6427d3877e4ef64ec492e693f2cdafac13866b6a6e42->enter($__internal_976f80169aa49e06ca8a6427d3877e4ef64ec492e693f2cdafac13866b6a6e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_493b59153f8bbff254123514ddcb1d8e8f82bcc8cd4404df4b1d8ed3023dc587->leave($__internal_493b59153f8bbff254123514ddcb1d8e8f82bcc8cd4404df4b1d8ed3023dc587_prof);

        
        $__internal_976f80169aa49e06ca8a6427d3877e4ef64ec492e693f2cdafac13866b6a6e42->leave($__internal_976f80169aa49e06ca8a6427d3877e4ef64ec492e693f2cdafac13866b6a6e42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c38193f2794434b1ef20dbef036188d4a7e51a21d33b862d7d2c9ccf850f5249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38193f2794434b1ef20dbef036188d4a7e51a21d33b862d7d2c9ccf850f5249->enter($__internal_c38193f2794434b1ef20dbef036188d4a7e51a21d33b862d7d2c9ccf850f5249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f30c5302d6184d4563dfce283d5349b5b08248d23e90aac985b7b18cedd1d1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30c5302d6184d4563dfce283d5349b5b08248d23e90aac985b7b18cedd1d1a6->enter($__internal_f30c5302d6184d4563dfce283d5349b5b08248d23e90aac985b7b18cedd1d1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f30c5302d6184d4563dfce283d5349b5b08248d23e90aac985b7b18cedd1d1a6->leave($__internal_f30c5302d6184d4563dfce283d5349b5b08248d23e90aac985b7b18cedd1d1a6_prof);

        
        $__internal_c38193f2794434b1ef20dbef036188d4a7e51a21d33b862d7d2c9ccf850f5249->leave($__internal_c38193f2794434b1ef20dbef036188d4a7e51a21d33b862d7d2c9ccf850f5249_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
