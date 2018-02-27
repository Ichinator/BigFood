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
        $__internal_c1402c1ec3dccc6788ca486cd6fb1602429c9a4b473a338f72165c55b85078ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1402c1ec3dccc6788ca486cd6fb1602429c9a4b473a338f72165c55b85078ae->enter($__internal_c1402c1ec3dccc6788ca486cd6fb1602429c9a4b473a338f72165c55b85078ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f5c91eda84c1b0b90631248506bd02750684b0d05a857a2374a5fe259e66db6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c91eda84c1b0b90631248506bd02750684b0d05a857a2374a5fe259e66db6b->enter($__internal_f5c91eda84c1b0b90631248506bd02750684b0d05a857a2374a5fe259e66db6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1402c1ec3dccc6788ca486cd6fb1602429c9a4b473a338f72165c55b85078ae->leave($__internal_c1402c1ec3dccc6788ca486cd6fb1602429c9a4b473a338f72165c55b85078ae_prof);

        
        $__internal_f5c91eda84c1b0b90631248506bd02750684b0d05a857a2374a5fe259e66db6b->leave($__internal_f5c91eda84c1b0b90631248506bd02750684b0d05a857a2374a5fe259e66db6b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad81a07a15cf4208234fc162eb147ce934fde80047d4923e82dc97cb2b5b61d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad81a07a15cf4208234fc162eb147ce934fde80047d4923e82dc97cb2b5b61d4->enter($__internal_ad81a07a15cf4208234fc162eb147ce934fde80047d4923e82dc97cb2b5b61d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_444cafbdc912de60c8a71b4544c747c09863d1b47c9ed0c141385907d4c1fb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444cafbdc912de60c8a71b4544c747c09863d1b47c9ed0c141385907d4c1fb10->enter($__internal_444cafbdc912de60c8a71b4544c747c09863d1b47c9ed0c141385907d4c1fb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_444cafbdc912de60c8a71b4544c747c09863d1b47c9ed0c141385907d4c1fb10->leave($__internal_444cafbdc912de60c8a71b4544c747c09863d1b47c9ed0c141385907d4c1fb10_prof);

        
        $__internal_ad81a07a15cf4208234fc162eb147ce934fde80047d4923e82dc97cb2b5b61d4->leave($__internal_ad81a07a15cf4208234fc162eb147ce934fde80047d4923e82dc97cb2b5b61d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_133275bbbca348bb4c03695a4f755bca46bb08f0c9278e0840c63f39171216a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133275bbbca348bb4c03695a4f755bca46bb08f0c9278e0840c63f39171216a1->enter($__internal_133275bbbca348bb4c03695a4f755bca46bb08f0c9278e0840c63f39171216a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_287abceca07fb82c0ee533725462bd35a9e3286515bed2c68bf3aece9b8e1624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287abceca07fb82c0ee533725462bd35a9e3286515bed2c68bf3aece9b8e1624->enter($__internal_287abceca07fb82c0ee533725462bd35a9e3286515bed2c68bf3aece9b8e1624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_287abceca07fb82c0ee533725462bd35a9e3286515bed2c68bf3aece9b8e1624->leave($__internal_287abceca07fb82c0ee533725462bd35a9e3286515bed2c68bf3aece9b8e1624_prof);

        
        $__internal_133275bbbca348bb4c03695a4f755bca46bb08f0c9278e0840c63f39171216a1->leave($__internal_133275bbbca348bb4c03695a4f755bca46bb08f0c9278e0840c63f39171216a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03e478a9cf5cd9ece731f5c5b6750793bbac1c0154173b279c07ccab9c27956f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e478a9cf5cd9ece731f5c5b6750793bbac1c0154173b279c07ccab9c27956f->enter($__internal_03e478a9cf5cd9ece731f5c5b6750793bbac1c0154173b279c07ccab9c27956f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f273cc0ba97996c7a74ae756303aa1726d0def18c9c8544bb47b155b97521c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f273cc0ba97996c7a74ae756303aa1726d0def18c9c8544bb47b155b97521c98->enter($__internal_f273cc0ba97996c7a74ae756303aa1726d0def18c9c8544bb47b155b97521c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f273cc0ba97996c7a74ae756303aa1726d0def18c9c8544bb47b155b97521c98->leave($__internal_f273cc0ba97996c7a74ae756303aa1726d0def18c9c8544bb47b155b97521c98_prof);

        
        $__internal_03e478a9cf5cd9ece731f5c5b6750793bbac1c0154173b279c07ccab9c27956f->leave($__internal_03e478a9cf5cd9ece731f5c5b6750793bbac1c0154173b279c07ccab9c27956f_prof);

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
