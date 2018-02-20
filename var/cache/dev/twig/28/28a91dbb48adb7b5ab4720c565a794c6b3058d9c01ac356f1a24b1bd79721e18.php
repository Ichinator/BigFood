<?php

/* :default:index.html.twig */
class __TwigTemplate_e29a7c4ca4ef89c14e7568619072847fec069e3d587e474c61ed7b92e222657a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c2a7195acbc6ecf08229e0eb77f8cc5e62de1e42e126169c48597ae67ffacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c2a7195acbc6ecf08229e0eb77f8cc5e62de1e42e126169c48597ae67ffacf->enter($__internal_a5c2a7195acbc6ecf08229e0eb77f8cc5e62de1e42e126169c48597ae67ffacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_a1372999f51c7ef099d26b9ac667062b7fa0321411e02323b2e7e5e20080cabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1372999f51c7ef099d26b9ac667062b7fa0321411e02323b2e7e5e20080cabb->enter($__internal_a1372999f51c7ef099d26b9ac667062b7fa0321411e02323b2e7e5e20080cabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c2a7195acbc6ecf08229e0eb77f8cc5e62de1e42e126169c48597ae67ffacf->leave($__internal_a5c2a7195acbc6ecf08229e0eb77f8cc5e62de1e42e126169c48597ae67ffacf_prof);

        
        $__internal_a1372999f51c7ef099d26b9ac667062b7fa0321411e02323b2e7e5e20080cabb->leave($__internal_a1372999f51c7ef099d26b9ac667062b7fa0321411e02323b2e7e5e20080cabb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38adc30d84e66e1e21c1a28f4f996abb611b128876308e51597b83bc58fe50c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38adc30d84e66e1e21c1a28f4f996abb611b128876308e51597b83bc58fe50c3->enter($__internal_38adc30d84e66e1e21c1a28f4f996abb611b128876308e51597b83bc58fe50c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eb2c140e9e1707351547db0d39bcd19d86167fb9fd8b9414b33af46387bf062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb2c140e9e1707351547db0d39bcd19d86167fb9fd8b9414b33af46387bf062->enter($__internal_3eb2c140e9e1707351547db0d39bcd19d86167fb9fd8b9414b33af46387bf062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3eb2c140e9e1707351547db0d39bcd19d86167fb9fd8b9414b33af46387bf062->leave($__internal_3eb2c140e9e1707351547db0d39bcd19d86167fb9fd8b9414b33af46387bf062_prof);

        
        $__internal_38adc30d84e66e1e21c1a28f4f996abb611b128876308e51597b83bc58fe50c3->leave($__internal_38adc30d84e66e1e21c1a28f4f996abb611b128876308e51597b83bc58fe50c3_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_015bb05c777225bc6479a37a4bffa85cbce80341d0da277843d441a60c1f3616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015bb05c777225bc6479a37a4bffa85cbce80341d0da277843d441a60c1f3616->enter($__internal_015bb05c777225bc6479a37a4bffa85cbce80341d0da277843d441a60c1f3616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ab65a78258278e0a43c8df85016bce627d42abc1119afc47c4c9cf45e47ca2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab65a78258278e0a43c8df85016bce627d42abc1119afc47c4c9cf45e47ca2fa->enter($__internal_ab65a78258278e0a43c8df85016bce627d42abc1119afc47c4c9cf45e47ca2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ab65a78258278e0a43c8df85016bce627d42abc1119afc47c4c9cf45e47ca2fa->leave($__internal_ab65a78258278e0a43c8df85016bce627d42abc1119afc47c4c9cf45e47ca2fa_prof);

        
        $__internal_015bb05c777225bc6479a37a4bffa85cbce80341d0da277843d441a60c1f3616->leave($__internal_015bb05c777225bc6479a37a4bffa85cbce80341d0da277843d441a60c1f3616_prof);

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
        return array (  87 => 13,  78 => 12,  61 => 7,  58 => 6,  54 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% endblock %}
", ":default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/default/index.html.twig");
    }
}
