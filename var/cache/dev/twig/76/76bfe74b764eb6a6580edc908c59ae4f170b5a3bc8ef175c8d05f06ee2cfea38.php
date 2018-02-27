<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0a12f1de0d9ecf3f7f0df1b7125af486a157344b82466bf59914361a6c533e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26a4fe672a410a664930b1b1db61a0dcd4af9f286f37f33decd9b7d433fc6f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a4fe672a410a664930b1b1db61a0dcd4af9f286f37f33decd9b7d433fc6f7f->enter($__internal_26a4fe672a410a664930b1b1db61a0dcd4af9f286f37f33decd9b7d433fc6f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_872ddeef224f18b46f7d44a63c658f06a4cfea06bafdeb934b9dd0ecfcb07df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872ddeef224f18b46f7d44a63c658f06a4cfea06bafdeb934b9dd0ecfcb07df9->enter($__internal_872ddeef224f18b46f7d44a63c658f06a4cfea06bafdeb934b9dd0ecfcb07df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a4fe672a410a664930b1b1db61a0dcd4af9f286f37f33decd9b7d433fc6f7f->leave($__internal_26a4fe672a410a664930b1b1db61a0dcd4af9f286f37f33decd9b7d433fc6f7f_prof);

        
        $__internal_872ddeef224f18b46f7d44a63c658f06a4cfea06bafdeb934b9dd0ecfcb07df9->leave($__internal_872ddeef224f18b46f7d44a63c658f06a4cfea06bafdeb934b9dd0ecfcb07df9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf823107dde1055fb0031a3e3a72f3cd94fba68912728ed347b56a380459fd68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf823107dde1055fb0031a3e3a72f3cd94fba68912728ed347b56a380459fd68->enter($__internal_cf823107dde1055fb0031a3e3a72f3cd94fba68912728ed347b56a380459fd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bacca6d9aa510901292611e20b36562b1fb5870c8976455fd59cd23c95541746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacca6d9aa510901292611e20b36562b1fb5870c8976455fd59cd23c95541746->enter($__internal_bacca6d9aa510901292611e20b36562b1fb5870c8976455fd59cd23c95541746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_bacca6d9aa510901292611e20b36562b1fb5870c8976455fd59cd23c95541746->leave($__internal_bacca6d9aa510901292611e20b36562b1fb5870c8976455fd59cd23c95541746_prof);

        
        $__internal_cf823107dde1055fb0031a3e3a72f3cd94fba68912728ed347b56a380459fd68->leave($__internal_cf823107dde1055fb0031a3e3a72f3cd94fba68912728ed347b56a380459fd68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
