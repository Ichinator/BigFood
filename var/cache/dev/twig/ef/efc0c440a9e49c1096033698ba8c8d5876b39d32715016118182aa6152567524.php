<?php

/* IchinatorCommandBundle:Default:command.html.twig */
class __TwigTemplate_cac216efcf767a28df7c20649b38ef304df356c7a65b61ff159e4a499cb2cdb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:command.html.twig", 1);
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
        $__internal_c2bd3c5c8817c0689a06829c97b3567f5fe89da9680f9f9cc43093aceec830b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2bd3c5c8817c0689a06829c97b3567f5fe89da9680f9f9cc43093aceec830b0->enter($__internal_c2bd3c5c8817c0689a06829c97b3567f5fe89da9680f9f9cc43093aceec830b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $__internal_e1ef3157d57327150eb5d1a009065b53525affca65bd2b018af2e2e05e6ca824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ef3157d57327150eb5d1a009065b53525affca65bd2b018af2e2e05e6ca824->enter($__internal_e1ef3157d57327150eb5d1a009065b53525affca65bd2b018af2e2e05e6ca824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2bd3c5c8817c0689a06829c97b3567f5fe89da9680f9f9cc43093aceec830b0->leave($__internal_c2bd3c5c8817c0689a06829c97b3567f5fe89da9680f9f9cc43093aceec830b0_prof);

        
        $__internal_e1ef3157d57327150eb5d1a009065b53525affca65bd2b018af2e2e05e6ca824->leave($__internal_e1ef3157d57327150eb5d1a009065b53525affca65bd2b018af2e2e05e6ca824_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7d819cc95b04c0dbd6f6820cf9f3ba26788d5524ff39b6ec02701ac83e10da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7d819cc95b04c0dbd6f6820cf9f3ba26788d5524ff39b6ec02701ac83e10da->enter($__internal_ca7d819cc95b04c0dbd6f6820cf9f3ba26788d5524ff39b6ec02701ac83e10da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26fb30d0a3a20b7e669a33e6575d2011cc0bb8457b04109be88f7d2c5bc0900d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fb30d0a3a20b7e669a33e6575d2011cc0bb8457b04109be88f7d2c5bc0900d->enter($__internal_26fb30d0a3a20b7e669a33e6575d2011cc0bb8457b04109be88f7d2c5bc0900d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26fb30d0a3a20b7e669a33e6575d2011cc0bb8457b04109be88f7d2c5bc0900d->leave($__internal_26fb30d0a3a20b7e669a33e6575d2011cc0bb8457b04109be88f7d2c5bc0900d_prof);

        
        $__internal_ca7d819cc95b04c0dbd6f6820cf9f3ba26788d5524ff39b6ec02701ac83e10da->leave($__internal_ca7d819cc95b04c0dbd6f6820cf9f3ba26788d5524ff39b6ec02701ac83e10da_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:command.html.twig";
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
{% endblock %}
", "IchinatorCommandBundle:Default:command.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/command.html.twig");
    }
}
