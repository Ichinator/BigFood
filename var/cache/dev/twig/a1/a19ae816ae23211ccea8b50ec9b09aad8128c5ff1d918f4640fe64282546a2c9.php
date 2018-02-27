<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_25ad474c1c3d9a84d98516912d3bacc55de2dc10dd4986d944ba93decac7e530 extends Twig_Template
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
        $__internal_ec21f2708590985e3ed95e8cbbbde51d692e95321fe979549b72a52fa052f3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec21f2708590985e3ed95e8cbbbde51d692e95321fe979549b72a52fa052f3b5->enter($__internal_ec21f2708590985e3ed95e8cbbbde51d692e95321fe979549b72a52fa052f3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_622415710ffc3638ecc6a4e95046c3ca637a426bb2b4da2233b590ffd93bc118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622415710ffc3638ecc6a4e95046c3ca637a426bb2b4da2233b590ffd93bc118->enter($__internal_622415710ffc3638ecc6a4e95046c3ca637a426bb2b4da2233b590ffd93bc118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec21f2708590985e3ed95e8cbbbde51d692e95321fe979549b72a52fa052f3b5->leave($__internal_ec21f2708590985e3ed95e8cbbbde51d692e95321fe979549b72a52fa052f3b5_prof);

        
        $__internal_622415710ffc3638ecc6a4e95046c3ca637a426bb2b4da2233b590ffd93bc118->leave($__internal_622415710ffc3638ecc6a4e95046c3ca637a426bb2b4da2233b590ffd93bc118_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df5e307753cbf127d46bd531406470af1d5cdf5ea3d0588ef18aefdba4b387ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5e307753cbf127d46bd531406470af1d5cdf5ea3d0588ef18aefdba4b387ec->enter($__internal_df5e307753cbf127d46bd531406470af1d5cdf5ea3d0588ef18aefdba4b387ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db7974442f8245572faa667a4dc33062ad3a85637b81265474acd1bc7ea7c9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7974442f8245572faa667a4dc33062ad3a85637b81265474acd1bc7ea7c9b6->enter($__internal_db7974442f8245572faa667a4dc33062ad3a85637b81265474acd1bc7ea7c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_db7974442f8245572faa667a4dc33062ad3a85637b81265474acd1bc7ea7c9b6->leave($__internal_db7974442f8245572faa667a4dc33062ad3a85637b81265474acd1bc7ea7c9b6_prof);

        
        $__internal_df5e307753cbf127d46bd531406470af1d5cdf5ea3d0588ef18aefdba4b387ec->leave($__internal_df5e307753cbf127d46bd531406470af1d5cdf5ea3d0588ef18aefdba4b387ec_prof);

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
