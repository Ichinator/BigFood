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
        $__internal_edf2c587435304032a650e9329b5a8b0f9ea27be9898b2ca15270f23dc703be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf2c587435304032a650e9329b5a8b0f9ea27be9898b2ca15270f23dc703be1->enter($__internal_edf2c587435304032a650e9329b5a8b0f9ea27be9898b2ca15270f23dc703be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $__internal_ae257ad9608c308e1dff964f5f4e1a7ae60df2c6f88995da4af7d2acaed560d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae257ad9608c308e1dff964f5f4e1a7ae60df2c6f88995da4af7d2acaed560d9->enter($__internal_ae257ad9608c308e1dff964f5f4e1a7ae60df2c6f88995da4af7d2acaed560d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf2c587435304032a650e9329b5a8b0f9ea27be9898b2ca15270f23dc703be1->leave($__internal_edf2c587435304032a650e9329b5a8b0f9ea27be9898b2ca15270f23dc703be1_prof);

        
        $__internal_ae257ad9608c308e1dff964f5f4e1a7ae60df2c6f88995da4af7d2acaed560d9->leave($__internal_ae257ad9608c308e1dff964f5f4e1a7ae60df2c6f88995da4af7d2acaed560d9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f576259320eab3e58c81a42bdaad99a3643e0158a7ff3d72c3d23ad45fa9ae9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f576259320eab3e58c81a42bdaad99a3643e0158a7ff3d72c3d23ad45fa9ae9d->enter($__internal_f576259320eab3e58c81a42bdaad99a3643e0158a7ff3d72c3d23ad45fa9ae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5dc9271450487ce00f0e94976ffac113ac857fdb3199917ede9cb537a58df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dc9271450487ce00f0e94976ffac113ac857fdb3199917ede9cb537a58df53->enter($__internal_e5dc9271450487ce00f0e94976ffac113ac857fdb3199917ede9cb537a58df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5dc9271450487ce00f0e94976ffac113ac857fdb3199917ede9cb537a58df53->leave($__internal_e5dc9271450487ce00f0e94976ffac113ac857fdb3199917ede9cb537a58df53_prof);

        
        $__internal_f576259320eab3e58c81a42bdaad99a3643e0158a7ff3d72c3d23ad45fa9ae9d->leave($__internal_f576259320eab3e58c81a42bdaad99a3643e0158a7ff3d72c3d23ad45fa9ae9d_prof);

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
