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
        $__internal_f967c48808ba2920e3b42c5e39abc2e3d0e58508aafd4fdb6741d8e5c2b4e180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f967c48808ba2920e3b42c5e39abc2e3d0e58508aafd4fdb6741d8e5c2b4e180->enter($__internal_f967c48808ba2920e3b42c5e39abc2e3d0e58508aafd4fdb6741d8e5c2b4e180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $__internal_95a7cb58f6cccd7402fccc2813823ee012109fafdd7702ddcfc08f8ee326d5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a7cb58f6cccd7402fccc2813823ee012109fafdd7702ddcfc08f8ee326d5f2->enter($__internal_95a7cb58f6cccd7402fccc2813823ee012109fafdd7702ddcfc08f8ee326d5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f967c48808ba2920e3b42c5e39abc2e3d0e58508aafd4fdb6741d8e5c2b4e180->leave($__internal_f967c48808ba2920e3b42c5e39abc2e3d0e58508aafd4fdb6741d8e5c2b4e180_prof);

        
        $__internal_95a7cb58f6cccd7402fccc2813823ee012109fafdd7702ddcfc08f8ee326d5f2->leave($__internal_95a7cb58f6cccd7402fccc2813823ee012109fafdd7702ddcfc08f8ee326d5f2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfefc50262a35e27975128d2eba4caa9d881db3287411710cc8bc053184e8aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfefc50262a35e27975128d2eba4caa9d881db3287411710cc8bc053184e8aab->enter($__internal_bfefc50262a35e27975128d2eba4caa9d881db3287411710cc8bc053184e8aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c32f4408ab48a4ea6e54e331416a9a1b5a8340013a54f639a845947da153873f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32f4408ab48a4ea6e54e331416a9a1b5a8340013a54f639a845947da153873f->enter($__internal_c32f4408ab48a4ea6e54e331416a9a1b5a8340013a54f639a845947da153873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c32f4408ab48a4ea6e54e331416a9a1b5a8340013a54f639a845947da153873f->leave($__internal_c32f4408ab48a4ea6e54e331416a9a1b5a8340013a54f639a845947da153873f_prof);

        
        $__internal_bfefc50262a35e27975128d2eba4caa9d881db3287411710cc8bc053184e8aab->leave($__internal_bfefc50262a35e27975128d2eba4caa9d881db3287411710cc8bc053184e8aab_prof);

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
