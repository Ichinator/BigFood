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
        $__internal_a4565bc2135f89c4187cdab5d0a584682cb8982ffb102ebc2bc6db35e6282dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4565bc2135f89c4187cdab5d0a584682cb8982ffb102ebc2bc6db35e6282dce->enter($__internal_a4565bc2135f89c4187cdab5d0a584682cb8982ffb102ebc2bc6db35e6282dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $__internal_4c96066b6f0c5c5b41ba44878130afc46b9241138bdd9be2679ca9c78a2a08ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c96066b6f0c5c5b41ba44878130afc46b9241138bdd9be2679ca9c78a2a08ba->enter($__internal_4c96066b6f0c5c5b41ba44878130afc46b9241138bdd9be2679ca9c78a2a08ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4565bc2135f89c4187cdab5d0a584682cb8982ffb102ebc2bc6db35e6282dce->leave($__internal_a4565bc2135f89c4187cdab5d0a584682cb8982ffb102ebc2bc6db35e6282dce_prof);

        
        $__internal_4c96066b6f0c5c5b41ba44878130afc46b9241138bdd9be2679ca9c78a2a08ba->leave($__internal_4c96066b6f0c5c5b41ba44878130afc46b9241138bdd9be2679ca9c78a2a08ba_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc4597fad7b084e700b4505372c24acd99e7469d0a757f59013bf1a7f49e8858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4597fad7b084e700b4505372c24acd99e7469d0a757f59013bf1a7f49e8858->enter($__internal_bc4597fad7b084e700b4505372c24acd99e7469d0a757f59013bf1a7f49e8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0ac1e3b235e604ffd7f2be011a6087274cf40a56d96e2ecce41bb4139a906fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ac1e3b235e604ffd7f2be011a6087274cf40a56d96e2ecce41bb4139a906fd->enter($__internal_b0ac1e3b235e604ffd7f2be011a6087274cf40a56d96e2ecce41bb4139a906fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b0ac1e3b235e604ffd7f2be011a6087274cf40a56d96e2ecce41bb4139a906fd->leave($__internal_b0ac1e3b235e604ffd7f2be011a6087274cf40a56d96e2ecce41bb4139a906fd_prof);

        
        $__internal_bc4597fad7b084e700b4505372c24acd99e7469d0a757f59013bf1a7f49e8858->leave($__internal_bc4597fad7b084e700b4505372c24acd99e7469d0a757f59013bf1a7f49e8858_prof);

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
