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
        $__internal_d107bf49692645c9453e087f13beef5da31f940a4c4aab74dae69d9c1bb4880f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d107bf49692645c9453e087f13beef5da31f940a4c4aab74dae69d9c1bb4880f->enter($__internal_d107bf49692645c9453e087f13beef5da31f940a4c4aab74dae69d9c1bb4880f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_18daf3562640571347f4e44249796e739f8f2348fddce542a0ca7a735ad15099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18daf3562640571347f4e44249796e739f8f2348fddce542a0ca7a735ad15099->enter($__internal_18daf3562640571347f4e44249796e739f8f2348fddce542a0ca7a735ad15099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d107bf49692645c9453e087f13beef5da31f940a4c4aab74dae69d9c1bb4880f->leave($__internal_d107bf49692645c9453e087f13beef5da31f940a4c4aab74dae69d9c1bb4880f_prof);

        
        $__internal_18daf3562640571347f4e44249796e739f8f2348fddce542a0ca7a735ad15099->leave($__internal_18daf3562640571347f4e44249796e739f8f2348fddce542a0ca7a735ad15099_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efe5f0a34bd962ef2fd216d85960c0c3d0085693aea7503579a9e5284f616200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe5f0a34bd962ef2fd216d85960c0c3d0085693aea7503579a9e5284f616200->enter($__internal_efe5f0a34bd962ef2fd216d85960c0c3d0085693aea7503579a9e5284f616200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_450d323857f43133304273d0f055a80f8ac7d3773b2a2a6cc7cec9dd7640b90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450d323857f43133304273d0f055a80f8ac7d3773b2a2a6cc7cec9dd7640b90c->enter($__internal_450d323857f43133304273d0f055a80f8ac7d3773b2a2a6cc7cec9dd7640b90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_450d323857f43133304273d0f055a80f8ac7d3773b2a2a6cc7cec9dd7640b90c->leave($__internal_450d323857f43133304273d0f055a80f8ac7d3773b2a2a6cc7cec9dd7640b90c_prof);

        
        $__internal_efe5f0a34bd962ef2fd216d85960c0c3d0085693aea7503579a9e5284f616200->leave($__internal_efe5f0a34bd962ef2fd216d85960c0c3d0085693aea7503579a9e5284f616200_prof);

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
