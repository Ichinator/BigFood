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
        $__internal_84f32cb33b3b82e370e0b28a90e26ad968e7c31679a593ce4728a96ee8ce7eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f32cb33b3b82e370e0b28a90e26ad968e7c31679a593ce4728a96ee8ce7eb4->enter($__internal_84f32cb33b3b82e370e0b28a90e26ad968e7c31679a593ce4728a96ee8ce7eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_f7171402b59149d1bfb7ca9648dc95546bcd7df070f09b4dc2430d807b57ba41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7171402b59149d1bfb7ca9648dc95546bcd7df070f09b4dc2430d807b57ba41->enter($__internal_f7171402b59149d1bfb7ca9648dc95546bcd7df070f09b4dc2430d807b57ba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f32cb33b3b82e370e0b28a90e26ad968e7c31679a593ce4728a96ee8ce7eb4->leave($__internal_84f32cb33b3b82e370e0b28a90e26ad968e7c31679a593ce4728a96ee8ce7eb4_prof);

        
        $__internal_f7171402b59149d1bfb7ca9648dc95546bcd7df070f09b4dc2430d807b57ba41->leave($__internal_f7171402b59149d1bfb7ca9648dc95546bcd7df070f09b4dc2430d807b57ba41_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99b8f9864568c6b5cede2008071cc5389c53497fd0cacfa7423a68acceb50a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b8f9864568c6b5cede2008071cc5389c53497fd0cacfa7423a68acceb50a99->enter($__internal_99b8f9864568c6b5cede2008071cc5389c53497fd0cacfa7423a68acceb50a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fd25a3e410e92858a1009aa33b03dcbd8519ba6829f8e9501036c847f1a9c2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd25a3e410e92858a1009aa33b03dcbd8519ba6829f8e9501036c847f1a9c2c3->enter($__internal_fd25a3e410e92858a1009aa33b03dcbd8519ba6829f8e9501036c847f1a9c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fd25a3e410e92858a1009aa33b03dcbd8519ba6829f8e9501036c847f1a9c2c3->leave($__internal_fd25a3e410e92858a1009aa33b03dcbd8519ba6829f8e9501036c847f1a9c2c3_prof);

        
        $__internal_99b8f9864568c6b5cede2008071cc5389c53497fd0cacfa7423a68acceb50a99->leave($__internal_99b8f9864568c6b5cede2008071cc5389c53497fd0cacfa7423a68acceb50a99_prof);

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
