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
        $__internal_221a8af3b79e4b6b89ebb789d84c29724a15e69b902115304604b86c3c02201f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221a8af3b79e4b6b89ebb789d84c29724a15e69b902115304604b86c3c02201f->enter($__internal_221a8af3b79e4b6b89ebb789d84c29724a15e69b902115304604b86c3c02201f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_5f1eb0e0d2e93cbf8c72984795249a7b6fbeabec5b3d42033b927807edf3ffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1eb0e0d2e93cbf8c72984795249a7b6fbeabec5b3d42033b927807edf3ffac->enter($__internal_5f1eb0e0d2e93cbf8c72984795249a7b6fbeabec5b3d42033b927807edf3ffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221a8af3b79e4b6b89ebb789d84c29724a15e69b902115304604b86c3c02201f->leave($__internal_221a8af3b79e4b6b89ebb789d84c29724a15e69b902115304604b86c3c02201f_prof);

        
        $__internal_5f1eb0e0d2e93cbf8c72984795249a7b6fbeabec5b3d42033b927807edf3ffac->leave($__internal_5f1eb0e0d2e93cbf8c72984795249a7b6fbeabec5b3d42033b927807edf3ffac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_761941637e4d44184cffd1300f1dfb60836d00b16059a3c8c2d9502596c93fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761941637e4d44184cffd1300f1dfb60836d00b16059a3c8c2d9502596c93fe5->enter($__internal_761941637e4d44184cffd1300f1dfb60836d00b16059a3c8c2d9502596c93fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3cc69549fde26705f09381af4b1fe6b5e5bc2b0fe156bac65a828ddf093e2bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc69549fde26705f09381af4b1fe6b5e5bc2b0fe156bac65a828ddf093e2bb9->enter($__internal_3cc69549fde26705f09381af4b1fe6b5e5bc2b0fe156bac65a828ddf093e2bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3cc69549fde26705f09381af4b1fe6b5e5bc2b0fe156bac65a828ddf093e2bb9->leave($__internal_3cc69549fde26705f09381af4b1fe6b5e5bc2b0fe156bac65a828ddf093e2bb9_prof);

        
        $__internal_761941637e4d44184cffd1300f1dfb60836d00b16059a3c8c2d9502596c93fe5->leave($__internal_761941637e4d44184cffd1300f1dfb60836d00b16059a3c8c2d9502596c93fe5_prof);

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
