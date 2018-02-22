<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1bfeef9400831d63f750db96a0e971a601f624e0301616671fdab2a1ba52b1e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f34856410a7a2c3a69f4aae190ef3b68918d0693be674c6f2607344bd804f66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34856410a7a2c3a69f4aae190ef3b68918d0693be674c6f2607344bd804f66b->enter($__internal_f34856410a7a2c3a69f4aae190ef3b68918d0693be674c6f2607344bd804f66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f22b8a9c1ccb3d659ac13324707fcd8d56fe66972c5056ef4d13a35fe529358c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22b8a9c1ccb3d659ac13324707fcd8d56fe66972c5056ef4d13a35fe529358c->enter($__internal_f22b8a9c1ccb3d659ac13324707fcd8d56fe66972c5056ef4d13a35fe529358c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f34856410a7a2c3a69f4aae190ef3b68918d0693be674c6f2607344bd804f66b->leave($__internal_f34856410a7a2c3a69f4aae190ef3b68918d0693be674c6f2607344bd804f66b_prof);

        
        $__internal_f22b8a9c1ccb3d659ac13324707fcd8d56fe66972c5056ef4d13a35fe529358c->leave($__internal_f22b8a9c1ccb3d659ac13324707fcd8d56fe66972c5056ef4d13a35fe529358c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bcef48e71493e7e74b2bb691a6d0cef635629e0dfed2fc2a04c6a134f19ea7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcef48e71493e7e74b2bb691a6d0cef635629e0dfed2fc2a04c6a134f19ea7a6->enter($__internal_bcef48e71493e7e74b2bb691a6d0cef635629e0dfed2fc2a04c6a134f19ea7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5604f31cf21a408dab40f7576ba6f705dd1861858e5f21e70612cf05a2a9f1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5604f31cf21a408dab40f7576ba6f705dd1861858e5f21e70612cf05a2a9f1e3->enter($__internal_5604f31cf21a408dab40f7576ba6f705dd1861858e5f21e70612cf05a2a9f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5604f31cf21a408dab40f7576ba6f705dd1861858e5f21e70612cf05a2a9f1e3->leave($__internal_5604f31cf21a408dab40f7576ba6f705dd1861858e5f21e70612cf05a2a9f1e3_prof);

        
        $__internal_bcef48e71493e7e74b2bb691a6d0cef635629e0dfed2fc2a04c6a134f19ea7a6->leave($__internal_bcef48e71493e7e74b2bb691a6d0cef635629e0dfed2fc2a04c6a134f19ea7a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad0b4fd0da57ec95daa51d4b9f14371b2fc3e324814716fb8b8f945e7c7c2230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0b4fd0da57ec95daa51d4b9f14371b2fc3e324814716fb8b8f945e7c7c2230->enter($__internal_ad0b4fd0da57ec95daa51d4b9f14371b2fc3e324814716fb8b8f945e7c7c2230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb12b2d3d4914404855aaf423f9dc6df2fb48f6c46d86c26eab2d5381fb3ec2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb12b2d3d4914404855aaf423f9dc6df2fb48f6c46d86c26eab2d5381fb3ec2e->enter($__internal_fb12b2d3d4914404855aaf423f9dc6df2fb48f6c46d86c26eab2d5381fb3ec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb12b2d3d4914404855aaf423f9dc6df2fb48f6c46d86c26eab2d5381fb3ec2e->leave($__internal_fb12b2d3d4914404855aaf423f9dc6df2fb48f6c46d86c26eab2d5381fb3ec2e_prof);

        
        $__internal_ad0b4fd0da57ec95daa51d4b9f14371b2fc3e324814716fb8b8f945e7c7c2230->leave($__internal_ad0b4fd0da57ec95daa51d4b9f14371b2fc3e324814716fb8b8f945e7c7c2230_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_418d438b846b3394d1ab82804c2c1e7d9d7987fbe2827c9bbce78309385dd0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418d438b846b3394d1ab82804c2c1e7d9d7987fbe2827c9bbce78309385dd0a4->enter($__internal_418d438b846b3394d1ab82804c2c1e7d9d7987fbe2827c9bbce78309385dd0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e90ce2cf3ecbf8f5257c1c5618c7fe16b90dabdb9164e3563c04ab779fc824ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90ce2cf3ecbf8f5257c1c5618c7fe16b90dabdb9164e3563c04ab779fc824ff->enter($__internal_e90ce2cf3ecbf8f5257c1c5618c7fe16b90dabdb9164e3563c04ab779fc824ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e90ce2cf3ecbf8f5257c1c5618c7fe16b90dabdb9164e3563c04ab779fc824ff->leave($__internal_e90ce2cf3ecbf8f5257c1c5618c7fe16b90dabdb9164e3563c04ab779fc824ff_prof);

        
        $__internal_418d438b846b3394d1ab82804c2c1e7d9d7987fbe2827c9bbce78309385dd0a4->leave($__internal_418d438b846b3394d1ab82804c2c1e7d9d7987fbe2827c9bbce78309385dd0a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
