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
        $__internal_5a5696e9b45e7f658831c0cd9bccd33532025aee2456a3a8d64b1ddac5306f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5696e9b45e7f658831c0cd9bccd33532025aee2456a3a8d64b1ddac5306f8e->enter($__internal_5a5696e9b45e7f658831c0cd9bccd33532025aee2456a3a8d64b1ddac5306f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_4e94911abe21bebe4b1587827ae51cc2c92de124f47d7faeb1e152dbc667a388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e94911abe21bebe4b1587827ae51cc2c92de124f47d7faeb1e152dbc667a388->enter($__internal_4e94911abe21bebe4b1587827ae51cc2c92de124f47d7faeb1e152dbc667a388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5696e9b45e7f658831c0cd9bccd33532025aee2456a3a8d64b1ddac5306f8e->leave($__internal_5a5696e9b45e7f658831c0cd9bccd33532025aee2456a3a8d64b1ddac5306f8e_prof);

        
        $__internal_4e94911abe21bebe4b1587827ae51cc2c92de124f47d7faeb1e152dbc667a388->leave($__internal_4e94911abe21bebe4b1587827ae51cc2c92de124f47d7faeb1e152dbc667a388_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a45b168e40664c2f0736498ee2bf5c77cd4858349eafd3f4b4fede7f04f30f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45b168e40664c2f0736498ee2bf5c77cd4858349eafd3f4b4fede7f04f30f0c->enter($__internal_a45b168e40664c2f0736498ee2bf5c77cd4858349eafd3f4b4fede7f04f30f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_543dc69603769b0ce5370e08461da8b0effa2edc61f3c2d6c8a885978f7cbf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543dc69603769b0ce5370e08461da8b0effa2edc61f3c2d6c8a885978f7cbf99->enter($__internal_543dc69603769b0ce5370e08461da8b0effa2edc61f3c2d6c8a885978f7cbf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        <div class=\"row\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 14
            echo "        <div class=\"card\" style=\"width:400px\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"card-body\">
                <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["news"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "image", array()), "html", null, true);
            echo "\" class=\"rounded\" />
            </div>
            <div class=\"card-footer\">
                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oneNewsRoute", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir l'article</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
";
        
        $__internal_543dc69603769b0ce5370e08461da8b0effa2edc61f3c2d6c8a885978f7cbf99->leave($__internal_543dc69603769b0ce5370e08461da8b0effa2edc61f3c2d6c8a885978f7cbf99_prof);

        
        $__internal_a45b168e40664c2f0736498ee2bf5c77cd4858349eafd3f4b4fede7f04f30f0c->leave($__internal_a45b168e40664c2f0736498ee2bf5c77cd4858349eafd3f4b4fede7f04f30f0c_prof);

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
        return array (  106 => 26,  96 => 22,  88 => 19,  82 => 16,  78 => 14,  74 => 13,  71 => 12,  60 => 7,  57 => 6,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

        <div class=\"row\">
    {% endfor %}

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
{% endblock %}

", ":default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/default/index.html.twig");
    }
}
