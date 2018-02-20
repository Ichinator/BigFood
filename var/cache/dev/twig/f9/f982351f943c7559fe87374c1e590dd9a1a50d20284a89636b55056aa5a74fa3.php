<?php

/* :default:index.html.twig */
class __TwigTemplate_702b00dbe8117a77b3a10c7998fd0a7fc79ee259f5eda8e7ce8f43c37a79295b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd7f6d3a6fe3292065b5d6869c2ceec80d8ff76804f818b0aa845e153ec10c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7f6d3a6fe3292065b5d6869c2ceec80d8ff76804f818b0aa845e153ec10c91->enter($__internal_dd7f6d3a6fe3292065b5d6869c2ceec80d8ff76804f818b0aa845e153ec10c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_a824b093298604dd27cb59ae60c7d24259977794df5497d2f795251900ef37bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a824b093298604dd27cb59ae60c7d24259977794df5497d2f795251900ef37bc->enter($__internal_a824b093298604dd27cb59ae60c7d24259977794df5497d2f795251900ef37bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd7f6d3a6fe3292065b5d6869c2ceec80d8ff76804f818b0aa845e153ec10c91->leave($__internal_dd7f6d3a6fe3292065b5d6869c2ceec80d8ff76804f818b0aa845e153ec10c91_prof);

        
        $__internal_a824b093298604dd27cb59ae60c7d24259977794df5497d2f795251900ef37bc->leave($__internal_a824b093298604dd27cb59ae60c7d24259977794df5497d2f795251900ef37bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9dd823add64961e2f288ea7f0d008f4639b95e2ea2a79fadde7ccfb35276739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9dd823add64961e2f288ea7f0d008f4639b95e2ea2a79fadde7ccfb35276739->enter($__internal_a9dd823add64961e2f288ea7f0d008f4639b95e2ea2a79fadde7ccfb35276739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d46fcaf7820ecbe5ac5aa53f5e4eddb340fe4b2f2f87787ee5baf13693a56e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46fcaf7820ecbe5ac5aa53f5e4eddb340fe4b2f2f87787ee5baf13693a56e62->enter($__internal_d46fcaf7820ecbe5ac5aa53f5e4eddb340fe4b2f2f87787ee5baf13693a56e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <div class=\"flash-notice\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 12
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d46fcaf7820ecbe5ac5aa53f5e4eddb340fe4b2f2f87787ee5baf13693a56e62->leave($__internal_d46fcaf7820ecbe5ac5aa53f5e4eddb340fe4b2f2f87787ee5baf13693a56e62_prof);

        
        $__internal_a9dd823add64961e2f288ea7f0d008f4639b95e2ea2a79fadde7ccfb35276739->leave($__internal_a9dd823add64961e2f288ea7f0d008f4639b95e2ea2a79fadde7ccfb35276739_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  72 => 11,  69 => 10,  60 => 7,  57 => 6,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
{{ parent() }}
    {% for message in app.flashes('success') %}
        <div class=\"flash-notice\">
            {{ message }}
        </div>
    {% endfor %}

    {% for news in news %}
        <p>{{ news.title }}</p>
    {% endfor %}
{% endblock %}

", ":default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/default/index.html.twig");
    }
}
