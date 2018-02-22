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
        $__internal_fc4ff3100eec90947a99f09d21bc0bd70eec22d0be43062d589809086643ad17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4ff3100eec90947a99f09d21bc0bd70eec22d0be43062d589809086643ad17->enter($__internal_fc4ff3100eec90947a99f09d21bc0bd70eec22d0be43062d589809086643ad17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_400b749288b4f8c1f3c8079c375cd2783f3a057660b1b4392846b26fe82cc278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400b749288b4f8c1f3c8079c375cd2783f3a057660b1b4392846b26fe82cc278->enter($__internal_400b749288b4f8c1f3c8079c375cd2783f3a057660b1b4392846b26fe82cc278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc4ff3100eec90947a99f09d21bc0bd70eec22d0be43062d589809086643ad17->leave($__internal_fc4ff3100eec90947a99f09d21bc0bd70eec22d0be43062d589809086643ad17_prof);

        
        $__internal_400b749288b4f8c1f3c8079c375cd2783f3a057660b1b4392846b26fe82cc278->leave($__internal_400b749288b4f8c1f3c8079c375cd2783f3a057660b1b4392846b26fe82cc278_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33adaffcc5ca29b4dd87b668f1ab5a21131c2bb6c413814fc0fedb64a1fb5529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33adaffcc5ca29b4dd87b668f1ab5a21131c2bb6c413814fc0fedb64a1fb5529->enter($__internal_33adaffcc5ca29b4dd87b668f1ab5a21131c2bb6c413814fc0fedb64a1fb5529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_13bec5fe7c2dcf8e2996d388dc890a4ded38e5305d014ecfdaa973979540461d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bec5fe7c2dcf8e2996d388dc890a4ded38e5305d014ecfdaa973979540461d->enter($__internal_13bec5fe7c2dcf8e2996d388dc890a4ded38e5305d014ecfdaa973979540461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_13bec5fe7c2dcf8e2996d388dc890a4ded38e5305d014ecfdaa973979540461d->leave($__internal_13bec5fe7c2dcf8e2996d388dc890a4ded38e5305d014ecfdaa973979540461d_prof);

        
        $__internal_33adaffcc5ca29b4dd87b668f1ab5a21131c2bb6c413814fc0fedb64a1fb5529->leave($__internal_33adaffcc5ca29b4dd87b668f1ab5a21131c2bb6c413814fc0fedb64a1fb5529_prof);

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
