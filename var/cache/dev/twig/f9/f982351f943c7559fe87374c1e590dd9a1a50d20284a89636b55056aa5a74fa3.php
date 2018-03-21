<?php

/* default/index.html.twig */
class __TwigTemplate_702b00dbe8117a77b3a10c7998fd0a7fc79ee259f5eda8e7ce8f43c37a79295b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_62d12b3ef03a06f22b3224acc12689e1d3543f883c4d9f104bdae4cc3a0714e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d12b3ef03a06f22b3224acc12689e1d3543f883c4d9f104bdae4cc3a0714e9->enter($__internal_62d12b3ef03a06f22b3224acc12689e1d3543f883c4d9f104bdae4cc3a0714e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_9fe0e40b439cf62d2a192d7fdfc35561befba26145db2c81b68b3ff5c59ba8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe0e40b439cf62d2a192d7fdfc35561befba26145db2c81b68b3ff5c59ba8e5->enter($__internal_9fe0e40b439cf62d2a192d7fdfc35561befba26145db2c81b68b3ff5c59ba8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d12b3ef03a06f22b3224acc12689e1d3543f883c4d9f104bdae4cc3a0714e9->leave($__internal_62d12b3ef03a06f22b3224acc12689e1d3543f883c4d9f104bdae4cc3a0714e9_prof);

        
        $__internal_9fe0e40b439cf62d2a192d7fdfc35561befba26145db2c81b68b3ff5c59ba8e5->leave($__internal_9fe0e40b439cf62d2a192d7fdfc35561befba26145db2c81b68b3ff5c59ba8e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b96bbc0c4930002a7fa2627b0167b4a91f6597c270f40d402b24b78ef48b557b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96bbc0c4930002a7fa2627b0167b4a91f6597c270f40d402b24b78ef48b557b->enter($__internal_b96bbc0c4930002a7fa2627b0167b4a91f6597c270f40d402b24b78ef48b557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_869bd0de62a83d4904dc59d6269c327b3e97b55b8cb053cecb5857c194b488e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869bd0de62a83d4904dc59d6269c327b3e97b55b8cb053cecb5857c194b488e6->enter($__internal_869bd0de62a83d4904dc59d6269c327b3e97b55b8cb053cecb5857c194b488e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 13
            echo "

        <div class=\"card\" style=\"width:400px\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"card-body\">
                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["news"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "image", array()), "html", null, true);
            echo "\" class=\"rounded\" />
            </div>
            <div class=\"card-footer\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oneNewsRoute", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir l'article</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
</div>
";
        
        $__internal_869bd0de62a83d4904dc59d6269c327b3e97b55b8cb053cecb5857c194b488e6->leave($__internal_869bd0de62a83d4904dc59d6269c327b3e97b55b8cb053cecb5857c194b488e6_prof);

        
        $__internal_b96bbc0c4930002a7fa2627b0167b4a91f6597c270f40d402b24b78ef48b557b->leave($__internal_b96bbc0c4930002a7fa2627b0167b4a91f6597c270f40d402b24b78ef48b557b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  97 => 23,  89 => 20,  83 => 17,  77 => 13,  73 => 12,  69 => 10,  60 => 7,  57 => 6,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container-fluid\">
    <div class=\"row\">
    {% for news in news %}


        <div class=\"card\" style=\"width:400px\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">{{ news.title }}</h4>
            </div>
            <div class=\"card-body\">
                <img src=\"{{ vich_uploader_asset(news, 'imageFile') }}\" alt=\"{{ news.image }}\" class=\"rounded\" />
            </div>
            <div class=\"card-footer\">
                <a href=\"{{ path('oneNewsRoute', { 'id': news.id }) }}\" class=\"btn btn-primary\">Voir l'article</a>
            </div>
        </div>
    {% endfor %}
    </div>
</div>
{% endblock %}

", "default/index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/default/index.html.twig");
    }
}
