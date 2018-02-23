<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8cba37a77c0c63c01746c2c4f9c514801dbee3fe8678fb7a7df9d56d33916e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4ee431728bb4f82750202ac2a628ee72355dba643ce327b0093eeb5895c78b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ee431728bb4f82750202ac2a628ee72355dba643ce327b0093eeb5895c78b4->enter($__internal_d4ee431728bb4f82750202ac2a628ee72355dba643ce327b0093eeb5895c78b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_48ea98f89f725fbc5d621e89a4253b4f48750ab28236d66dbbe748659c794f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ea98f89f725fbc5d621e89a4253b4f48750ab28236d66dbbe748659c794f54->enter($__internal_48ea98f89f725fbc5d621e89a4253b4f48750ab28236d66dbbe748659c794f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d4ee431728bb4f82750202ac2a628ee72355dba643ce327b0093eeb5895c78b4->leave($__internal_d4ee431728bb4f82750202ac2a628ee72355dba643ce327b0093eeb5895c78b4_prof);

        
        $__internal_48ea98f89f725fbc5d621e89a4253b4f48750ab28236d66dbbe748659c794f54->leave($__internal_48ea98f89f725fbc5d621e89a4253b4f48750ab28236d66dbbe748659c794f54_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_80399884842c144d338ca53a067f2a86b6569bd2ddaca4eeea69c14232570cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80399884842c144d338ca53a067f2a86b6569bd2ddaca4eeea69c14232570cad->enter($__internal_80399884842c144d338ca53a067f2a86b6569bd2ddaca4eeea69c14232570cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2e9d7fbc7af3d27d9c83865dd863859e32660bedddd7dce7eb29af6d37bf98f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9d7fbc7af3d27d9c83865dd863859e32660bedddd7dce7eb29af6d37bf98f3->enter($__internal_2e9d7fbc7af3d27d9c83865dd863859e32660bedddd7dce7eb29af6d37bf98f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2e9d7fbc7af3d27d9c83865dd863859e32660bedddd7dce7eb29af6d37bf98f3->leave($__internal_2e9d7fbc7af3d27d9c83865dd863859e32660bedddd7dce7eb29af6d37bf98f3_prof);

        
        $__internal_80399884842c144d338ca53a067f2a86b6569bd2ddaca4eeea69c14232570cad->leave($__internal_80399884842c144d338ca53a067f2a86b6569bd2ddaca4eeea69c14232570cad_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_433b40c04f9336ca1e98935fd8ba52f76b2c17c045fd24ce7f1e27cc8d3218b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433b40c04f9336ca1e98935fd8ba52f76b2c17c045fd24ce7f1e27cc8d3218b5->enter($__internal_433b40c04f9336ca1e98935fd8ba52f76b2c17c045fd24ce7f1e27cc8d3218b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_112cff5b22fe6f154ffc201e5255d9e4a72216314d571065336f0acca8eb1f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112cff5b22fe6f154ffc201e5255d9e4a72216314d571065336f0acca8eb1f04->enter($__internal_112cff5b22fe6f154ffc201e5255d9e4a72216314d571065336f0acca8eb1f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_112cff5b22fe6f154ffc201e5255d9e4a72216314d571065336f0acca8eb1f04->leave($__internal_112cff5b22fe6f154ffc201e5255d9e4a72216314d571065336f0acca8eb1f04_prof);

        
        $__internal_433b40c04f9336ca1e98935fd8ba52f76b2c17c045fd24ce7f1e27cc8d3218b5->leave($__internal_433b40c04f9336ca1e98935fd8ba52f76b2c17c045fd24ce7f1e27cc8d3218b5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_817037d7dda2dab51cc67f613e45c92b2b3cf8cdf0e9350395502d134268df61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817037d7dda2dab51cc67f613e45c92b2b3cf8cdf0e9350395502d134268df61->enter($__internal_817037d7dda2dab51cc67f613e45c92b2b3cf8cdf0e9350395502d134268df61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f8954936090c10ce1f6b1ffdf3ae3b92ae41a84618ed67a7fcf528116b5f4c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8954936090c10ce1f6b1ffdf3ae3b92ae41a84618ed67a7fcf528116b5f4c1d->enter($__internal_f8954936090c10ce1f6b1ffdf3ae3b92ae41a84618ed67a7fcf528116b5f4c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f8954936090c10ce1f6b1ffdf3ae3b92ae41a84618ed67a7fcf528116b5f4c1d->leave($__internal_f8954936090c10ce1f6b1ffdf3ae3b92ae41a84618ed67a7fcf528116b5f4c1d_prof);

        
        $__internal_817037d7dda2dab51cc67f613e45c92b2b3cf8cdf0e9350395502d134268df61->leave($__internal_817037d7dda2dab51cc67f613e45c92b2b3cf8cdf0e9350395502d134268df61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
