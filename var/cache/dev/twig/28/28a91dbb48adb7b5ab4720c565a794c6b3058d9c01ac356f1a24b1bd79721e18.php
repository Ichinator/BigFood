<?php

/* default/index.html.twig */
class __TwigTemplate_e29a7c4ca4ef89c14e7568619072847fec069e3d587e474c61ed7b92e222657a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_47d00574ae9301200879b2a8f2e923acc41fab6bf93ba452b0e0fd90f881b5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d00574ae9301200879b2a8f2e923acc41fab6bf93ba452b0e0fd90f881b5e1->enter($__internal_47d00574ae9301200879b2a8f2e923acc41fab6bf93ba452b0e0fd90f881b5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_2b28440b1bae7d16b9a04238c94d59458f79bed7e95f89de89ceb83d8e26be3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b28440b1bae7d16b9a04238c94d59458f79bed7e95f89de89ceb83d8e26be3f->enter($__internal_2b28440b1bae7d16b9a04238c94d59458f79bed7e95f89de89ceb83d8e26be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d00574ae9301200879b2a8f2e923acc41fab6bf93ba452b0e0fd90f881b5e1->leave($__internal_47d00574ae9301200879b2a8f2e923acc41fab6bf93ba452b0e0fd90f881b5e1_prof);

        
        $__internal_2b28440b1bae7d16b9a04238c94d59458f79bed7e95f89de89ceb83d8e26be3f->leave($__internal_2b28440b1bae7d16b9a04238c94d59458f79bed7e95f89de89ceb83d8e26be3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b6317d870ad533a97ca2eac71e3d474e2c4191093bf7a9267ab87dfa181fec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6317d870ad533a97ca2eac71e3d474e2c4191093bf7a9267ab87dfa181fec9->enter($__internal_8b6317d870ad533a97ca2eac71e3d474e2c4191093bf7a9267ab87dfa181fec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf84cd50ccd82ecf7c1b51bab8a7a78d9c7e0aa5e0ed261e6feeb48e1751d50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf84cd50ccd82ecf7c1b51bab8a7a78d9c7e0aa5e0ed261e6feeb48e1751d50f->enter($__internal_cf84cd50ccd82ecf7c1b51bab8a7a78d9c7e0aa5e0ed261e6feeb48e1751d50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf84cd50ccd82ecf7c1b51bab8a7a78d9c7e0aa5e0ed261e6feeb48e1751d50f->leave($__internal_cf84cd50ccd82ecf7c1b51bab8a7a78d9c7e0aa5e0ed261e6feeb48e1751d50f_prof);

        
        $__internal_8b6317d870ad533a97ca2eac71e3d474e2c4191093bf7a9267ab87dfa181fec9->leave($__internal_8b6317d870ad533a97ca2eac71e3d474e2c4191093bf7a9267ab87dfa181fec9_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cab08693b22cd55dec70a25cd55ab9b7628110e4ecce331aad11e65bb17b59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cab08693b22cd55dec70a25cd55ab9b7628110e4ecce331aad11e65bb17b59b->enter($__internal_6cab08693b22cd55dec70a25cd55ab9b7628110e4ecce331aad11e65bb17b59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c0eae501111be0941eae1b4423da1d41f2e6de87ea178e76dd42d40f4e15314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0eae501111be0941eae1b4423da1d41f2e6de87ea178e76dd42d40f4e15314->enter($__internal_5c0eae501111be0941eae1b4423da1d41f2e6de87ea178e76dd42d40f4e15314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5c0eae501111be0941eae1b4423da1d41f2e6de87ea178e76dd42d40f4e15314->leave($__internal_5c0eae501111be0941eae1b4423da1d41f2e6de87ea178e76dd42d40f4e15314_prof);

        
        $__internal_6cab08693b22cd55dec70a25cd55ab9b7628110e4ecce331aad11e65bb17b59b->leave($__internal_6cab08693b22cd55dec70a25cd55ab9b7628110e4ecce331aad11e65bb17b59b_prof);

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
", "default/index.html.twig", "/home/ichinator/BigFood/app/Resources/views/default/index.html.twig");
    }
}
