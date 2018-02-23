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
        $__internal_7bb7ae05106d7739d4f3f9c3bfc43ea98dae8f14b27da579f1d12cbe5951482d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb7ae05106d7739d4f3f9c3bfc43ea98dae8f14b27da579f1d12cbe5951482d->enter($__internal_7bb7ae05106d7739d4f3f9c3bfc43ea98dae8f14b27da579f1d12cbe5951482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7481926a51971efb90b08a32b5230fd4e2a939d1dad9ce4b6f7e09647e0ce751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7481926a51971efb90b08a32b5230fd4e2a939d1dad9ce4b6f7e09647e0ce751->enter($__internal_7481926a51971efb90b08a32b5230fd4e2a939d1dad9ce4b6f7e09647e0ce751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb7ae05106d7739d4f3f9c3bfc43ea98dae8f14b27da579f1d12cbe5951482d->leave($__internal_7bb7ae05106d7739d4f3f9c3bfc43ea98dae8f14b27da579f1d12cbe5951482d_prof);

        
        $__internal_7481926a51971efb90b08a32b5230fd4e2a939d1dad9ce4b6f7e09647e0ce751->leave($__internal_7481926a51971efb90b08a32b5230fd4e2a939d1dad9ce4b6f7e09647e0ce751_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2930350f7c2a9e3aa129dbd8b3e74ad9e22359dc7dce9b323ed948e2e73b7219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2930350f7c2a9e3aa129dbd8b3e74ad9e22359dc7dce9b323ed948e2e73b7219->enter($__internal_2930350f7c2a9e3aa129dbd8b3e74ad9e22359dc7dce9b323ed948e2e73b7219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c35ca862316425b61fc6c3128ce3fee96c24c6210049c1250618daea956bf365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35ca862316425b61fc6c3128ce3fee96c24c6210049c1250618daea956bf365->enter($__internal_c35ca862316425b61fc6c3128ce3fee96c24c6210049c1250618daea956bf365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c35ca862316425b61fc6c3128ce3fee96c24c6210049c1250618daea956bf365->leave($__internal_c35ca862316425b61fc6c3128ce3fee96c24c6210049c1250618daea956bf365_prof);

        
        $__internal_2930350f7c2a9e3aa129dbd8b3e74ad9e22359dc7dce9b323ed948e2e73b7219->leave($__internal_2930350f7c2a9e3aa129dbd8b3e74ad9e22359dc7dce9b323ed948e2e73b7219_prof);

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
