<?php

/* IchinatorNewsBundle:Default:news.html.twig */
class __TwigTemplate_53d5520c5d2aa2eb8becd14ff3a8fda10c158ebc1ffe1c7bbc68b2a96e6d33a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorNewsBundle:Default:news.html.twig", 1);
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
        $__internal_522e61159c23ee5d0a5c28a7065962708e270ecd170b53c7fccfbda64e6e8294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522e61159c23ee5d0a5c28a7065962708e270ecd170b53c7fccfbda64e6e8294->enter($__internal_522e61159c23ee5d0a5c28a7065962708e270ecd170b53c7fccfbda64e6e8294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $__internal_61c69cd6b41b387a1218a64237e58786856abc0c3b5be909b1cacf7ba3289890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c69cd6b41b387a1218a64237e58786856abc0c3b5be909b1cacf7ba3289890->enter($__internal_61c69cd6b41b387a1218a64237e58786856abc0c3b5be909b1cacf7ba3289890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522e61159c23ee5d0a5c28a7065962708e270ecd170b53c7fccfbda64e6e8294->leave($__internal_522e61159c23ee5d0a5c28a7065962708e270ecd170b53c7fccfbda64e6e8294_prof);

        
        $__internal_61c69cd6b41b387a1218a64237e58786856abc0c3b5be909b1cacf7ba3289890->leave($__internal_61c69cd6b41b387a1218a64237e58786856abc0c3b5be909b1cacf7ba3289890_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc4830d9a31d790838a51442d7f1fd889f20e251a1e83fc339f138d496d32760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4830d9a31d790838a51442d7f1fd889f20e251a1e83fc339f138d496d32760->enter($__internal_dc4830d9a31d790838a51442d7f1fd889f20e251a1e83fc339f138d496d32760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dbdb9548d0274a836b067deac0d887db6f174a84c6cc78255c6109fb2316899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbdb9548d0274a836b067deac0d887db6f174a84c6cc78255c6109fb2316899->enter($__internal_3dbdb9548d0274a836b067deac0d887db6f174a84c6cc78255c6109fb2316899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-8\">
            ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_3dbdb9548d0274a836b067deac0d887db6f174a84c6cc78255c6109fb2316899->leave($__internal_3dbdb9548d0274a836b067deac0d887db6f174a84c6cc78255c6109fb2316899_prof);

        
        $__internal_dc4830d9a31d790838a51442d7f1fd889f20e251a1e83fc339f138d496d32760->leave($__internal_dc4830d9a31d790838a51442d7f1fd889f20e251a1e83fc339f138d496d32760_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorNewsBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    {{ parent() }}
    <div class=\"row\">
        <div class=\"col-sm-8\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "IchinatorNewsBundle:Default:news.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/NewsBundle/Resources/views/Default/news.html.twig");
    }
}
