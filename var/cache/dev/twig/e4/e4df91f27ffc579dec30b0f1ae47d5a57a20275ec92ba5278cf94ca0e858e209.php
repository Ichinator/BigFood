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
        $__internal_e7ef0abd1ee4e7ec9b3bc00ef2fb7414b6fe36bdc7e8032ec8636bf19cb19998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ef0abd1ee4e7ec9b3bc00ef2fb7414b6fe36bdc7e8032ec8636bf19cb19998->enter($__internal_e7ef0abd1ee4e7ec9b3bc00ef2fb7414b6fe36bdc7e8032ec8636bf19cb19998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $__internal_e6b635c14523ad3aabe889600dada093b097bb66f565f55f58fb68dde894e3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b635c14523ad3aabe889600dada093b097bb66f565f55f58fb68dde894e3ea->enter($__internal_e6b635c14523ad3aabe889600dada093b097bb66f565f55f58fb68dde894e3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ef0abd1ee4e7ec9b3bc00ef2fb7414b6fe36bdc7e8032ec8636bf19cb19998->leave($__internal_e7ef0abd1ee4e7ec9b3bc00ef2fb7414b6fe36bdc7e8032ec8636bf19cb19998_prof);

        
        $__internal_e6b635c14523ad3aabe889600dada093b097bb66f565f55f58fb68dde894e3ea->leave($__internal_e6b635c14523ad3aabe889600dada093b097bb66f565f55f58fb68dde894e3ea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff3e960f4ec2778f0f0fd202ff64393607638cd16bdaa27b0b3d41c297c0e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff3e960f4ec2778f0f0fd202ff64393607638cd16bdaa27b0b3d41c297c0e34->enter($__internal_1ff3e960f4ec2778f0f0fd202ff64393607638cd16bdaa27b0b3d41c297c0e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82d44f704f316e741b7f9bd7ecbd014d95fe0c9dc575e3661a49571e1b132ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d44f704f316e741b7f9bd7ecbd014d95fe0c9dc575e3661a49571e1b132ce6->enter($__internal_82d44f704f316e741b7f9bd7ecbd014d95fe0c9dc575e3661a49571e1b132ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_82d44f704f316e741b7f9bd7ecbd014d95fe0c9dc575e3661a49571e1b132ce6->leave($__internal_82d44f704f316e741b7f9bd7ecbd014d95fe0c9dc575e3661a49571e1b132ce6_prof);

        
        $__internal_1ff3e960f4ec2778f0f0fd202ff64393607638cd16bdaa27b0b3d41c297c0e34->leave($__internal_1ff3e960f4ec2778f0f0fd202ff64393607638cd16bdaa27b0b3d41c297c0e34_prof);

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
