<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_02a39adb71718405569b9a2d2f57c2a6052dedd6e80643d134188bea9807bc30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56f991f4cf53f563c40a8f4d70a16265d642b8760e07d60eda2c73727e53cfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f991f4cf53f563c40a8f4d70a16265d642b8760e07d60eda2c73727e53cfa4->enter($__internal_56f991f4cf53f563c40a8f4d70a16265d642b8760e07d60eda2c73727e53cfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_2e8b0447ccde884d99c316c655ef1c06e202940e443bcf4c46243e5230b1be7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8b0447ccde884d99c316c655ef1c06e202940e443bcf4c46243e5230b1be7c->enter($__internal_2e8b0447ccde884d99c316c655ef1c06e202940e443bcf4c46243e5230b1be7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f991f4cf53f563c40a8f4d70a16265d642b8760e07d60eda2c73727e53cfa4->leave($__internal_56f991f4cf53f563c40a8f4d70a16265d642b8760e07d60eda2c73727e53cfa4_prof);

        
        $__internal_2e8b0447ccde884d99c316c655ef1c06e202940e443bcf4c46243e5230b1be7c->leave($__internal_2e8b0447ccde884d99c316c655ef1c06e202940e443bcf4c46243e5230b1be7c_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8ce52db96c21efe050668da2ec3dd4644a9c8f66b07199f96ac294a3fd7a0a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce52db96c21efe050668da2ec3dd4644a9c8f66b07199f96ac294a3fd7a0a5f->enter($__internal_8ce52db96c21efe050668da2ec3dd4644a9c8f66b07199f96ac294a3fd7a0a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_1c6ac8dbfe3ede1113bf5fbb7275cdaf80f9e82fdd4221c0edb010f38e270b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6ac8dbfe3ede1113bf5fbb7275cdaf80f9e82fdd4221c0edb010f38e270b99->enter($__internal_1c6ac8dbfe3ede1113bf5fbb7275cdaf80f9e82fdd4221c0edb010f38e270b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_1c6ac8dbfe3ede1113bf5fbb7275cdaf80f9e82fdd4221c0edb010f38e270b99->leave($__internal_1c6ac8dbfe3ede1113bf5fbb7275cdaf80f9e82fdd4221c0edb010f38e270b99_prof);

        
        $__internal_8ce52db96c21efe050668da2ec3dd4644a9c8f66b07199f96ac294a3fd7a0a5f->leave($__internal_8ce52db96c21efe050668da2ec3dd4644a9c8f66b07199f96ac294a3fd7a0a5f_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_250ac992c08680368ae36971e63f3c0eae08446ea7c31b2938af2a6b72f72400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250ac992c08680368ae36971e63f3c0eae08446ea7c31b2938af2a6b72f72400->enter($__internal_250ac992c08680368ae36971e63f3c0eae08446ea7c31b2938af2a6b72f72400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_9a66c5a1cfab2eb73fe62d1553eb299cc59b1723598b69dc6a58701169da4d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a66c5a1cfab2eb73fe62d1553eb299cc59b1723598b69dc6a58701169da4d33->enter($__internal_9a66c5a1cfab2eb73fe62d1553eb299cc59b1723598b69dc6a58701169da4d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_9a66c5a1cfab2eb73fe62d1553eb299cc59b1723598b69dc6a58701169da4d33->leave($__internal_9a66c5a1cfab2eb73fe62d1553eb299cc59b1723598b69dc6a58701169da4d33_prof);

        
        $__internal_250ac992c08680368ae36971e63f3c0eae08446ea7c31b2938af2a6b72f72400->leave($__internal_250ac992c08680368ae36971e63f3c0eae08446ea7c31b2938af2a6b72f72400_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f67b80cb4fdb7799221e70212116c01137b8915f2987b9744774b767db5e30e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67b80cb4fdb7799221e70212116c01137b8915f2987b9744774b767db5e30e8->enter($__internal_f67b80cb4fdb7799221e70212116c01137b8915f2987b9744774b767db5e30e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f6a79d10ea8f6451dabef1f2b67778a8a58a99e5f59c963bba52295643ac9918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a79d10ea8f6451dabef1f2b67778a8a58a99e5f59c963bba52295643ac9918->enter($__internal_f6a79d10ea8f6451dabef1f2b67778a8a58a99e5f59c963bba52295643ac9918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_f6a79d10ea8f6451dabef1f2b67778a8a58a99e5f59c963bba52295643ac9918->leave($__internal_f6a79d10ea8f6451dabef1f2b67778a8a58a99e5f59c963bba52295643ac9918_prof);

        
        $__internal_f67b80cb4fdb7799221e70212116c01137b8915f2987b9744774b767db5e30e8->leave($__internal_f67b80cb4fdb7799221e70212116c01137b8915f2987b9744774b767db5e30e8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
