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
        $__internal_54b160afa16ad63951daa84b47d76ca872fb257fa2d5116be37b0ffcffa009e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b160afa16ad63951daa84b47d76ca872fb257fa2d5116be37b0ffcffa009e2->enter($__internal_54b160afa16ad63951daa84b47d76ca872fb257fa2d5116be37b0ffcffa009e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_82e568edf733580108e41b975be197c19549529974cb30c6c805a92741291603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e568edf733580108e41b975be197c19549529974cb30c6c805a92741291603->enter($__internal_82e568edf733580108e41b975be197c19549529974cb30c6c805a92741291603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b160afa16ad63951daa84b47d76ca872fb257fa2d5116be37b0ffcffa009e2->leave($__internal_54b160afa16ad63951daa84b47d76ca872fb257fa2d5116be37b0ffcffa009e2_prof);

        
        $__internal_82e568edf733580108e41b975be197c19549529974cb30c6c805a92741291603->leave($__internal_82e568edf733580108e41b975be197c19549529974cb30c6c805a92741291603_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afedffc12202cbdf9babe4398cb42c9faf2102cc79da3b431a64064f6ad5fe59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afedffc12202cbdf9babe4398cb42c9faf2102cc79da3b431a64064f6ad5fe59->enter($__internal_afedffc12202cbdf9babe4398cb42c9faf2102cc79da3b431a64064f6ad5fe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c11bd127ea1ed352dab2a413891f931f96deca19d1efceda1a2abdfff683af5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11bd127ea1ed352dab2a413891f931f96deca19d1efceda1a2abdfff683af5a->enter($__internal_c11bd127ea1ed352dab2a413891f931f96deca19d1efceda1a2abdfff683af5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
";
        
        $__internal_c11bd127ea1ed352dab2a413891f931f96deca19d1efceda1a2abdfff683af5a->leave($__internal_c11bd127ea1ed352dab2a413891f931f96deca19d1efceda1a2abdfff683af5a_prof);

        
        $__internal_afedffc12202cbdf9babe4398cb42c9faf2102cc79da3b431a64064f6ad5fe59->leave($__internal_afedffc12202cbdf9babe4398cb42c9faf2102cc79da3b431a64064f6ad5fe59_prof);

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
{% endblock %}

", ":default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/default/index.html.twig");
    }
}
