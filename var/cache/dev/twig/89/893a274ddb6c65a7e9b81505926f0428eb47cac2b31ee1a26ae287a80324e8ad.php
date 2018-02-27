<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5015aa9d1e54f40b6f0446e962a657a5ff2a74e13843a349eb7a9670f5e18b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0569f2639c6b8e1521012627fd4c0b586c969c2d4a88105d095d0c51d6939949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0569f2639c6b8e1521012627fd4c0b586c969c2d4a88105d095d0c51d6939949->enter($__internal_0569f2639c6b8e1521012627fd4c0b586c969c2d4a88105d095d0c51d6939949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e903c9b6dfba6703ca697d3a1f129adb122504136adcbf529e24cbcf68dab210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e903c9b6dfba6703ca697d3a1f129adb122504136adcbf529e24cbcf68dab210->enter($__internal_e903c9b6dfba6703ca697d3a1f129adb122504136adcbf529e24cbcf68dab210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0569f2639c6b8e1521012627fd4c0b586c969c2d4a88105d095d0c51d6939949->leave($__internal_0569f2639c6b8e1521012627fd4c0b586c969c2d4a88105d095d0c51d6939949_prof);

        
        $__internal_e903c9b6dfba6703ca697d3a1f129adb122504136adcbf529e24cbcf68dab210->leave($__internal_e903c9b6dfba6703ca697d3a1f129adb122504136adcbf529e24cbcf68dab210_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c87f45ef955cc1a132efe310ea525c0f53ee1f226d86d4661645d254e0715f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87f45ef955cc1a132efe310ea525c0f53ee1f226d86d4661645d254e0715f51->enter($__internal_c87f45ef955cc1a132efe310ea525c0f53ee1f226d86d4661645d254e0715f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0305b40b695a24265d2dabf8d7a826599548b44c001e4144d6c1ac11e94b8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0305b40b695a24265d2dabf8d7a826599548b44c001e4144d6c1ac11e94b8e1->enter($__internal_b0305b40b695a24265d2dabf8d7a826599548b44c001e4144d6c1ac11e94b8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b0305b40b695a24265d2dabf8d7a826599548b44c001e4144d6c1ac11e94b8e1->leave($__internal_b0305b40b695a24265d2dabf8d7a826599548b44c001e4144d6c1ac11e94b8e1_prof);

        
        $__internal_c87f45ef955cc1a132efe310ea525c0f53ee1f226d86d4661645d254e0715f51->leave($__internal_c87f45ef955cc1a132efe310ea525c0f53ee1f226d86d4661645d254e0715f51_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2ec143e43f1196c76355442fc00d3ad480b64ad1b37f6e0260e50dd6f4191f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ec143e43f1196c76355442fc00d3ad480b64ad1b37f6e0260e50dd6f4191f0->enter($__internal_b2ec143e43f1196c76355442fc00d3ad480b64ad1b37f6e0260e50dd6f4191f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3105ef13e24b5804ea3fe49e07f9ab16e62175aa77afbe5d88e93ba13bfd9a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3105ef13e24b5804ea3fe49e07f9ab16e62175aa77afbe5d88e93ba13bfd9a69->enter($__internal_3105ef13e24b5804ea3fe49e07f9ab16e62175aa77afbe5d88e93ba13bfd9a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3105ef13e24b5804ea3fe49e07f9ab16e62175aa77afbe5d88e93ba13bfd9a69->leave($__internal_3105ef13e24b5804ea3fe49e07f9ab16e62175aa77afbe5d88e93ba13bfd9a69_prof);

        
        $__internal_b2ec143e43f1196c76355442fc00d3ad480b64ad1b37f6e0260e50dd6f4191f0->leave($__internal_b2ec143e43f1196c76355442fc00d3ad480b64ad1b37f6e0260e50dd6f4191f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
