<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c3ad4b0e21699b7dc3aa14e2cf99fb274873452e9a3c8b1581745581e9f11c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e1edd367a215461cb4cf52fa0f2a5e8cf51ef0fd3890e85575e1859cd54a00df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1edd367a215461cb4cf52fa0f2a5e8cf51ef0fd3890e85575e1859cd54a00df->enter($__internal_e1edd367a215461cb4cf52fa0f2a5e8cf51ef0fd3890e85575e1859cd54a00df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_2a7dd2015b9aa2cb0341c8d2ad9166454a56a88443bee92667020be634d06fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7dd2015b9aa2cb0341c8d2ad9166454a56a88443bee92667020be634d06fa5->enter($__internal_2a7dd2015b9aa2cb0341c8d2ad9166454a56a88443bee92667020be634d06fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1edd367a215461cb4cf52fa0f2a5e8cf51ef0fd3890e85575e1859cd54a00df->leave($__internal_e1edd367a215461cb4cf52fa0f2a5e8cf51ef0fd3890e85575e1859cd54a00df_prof);

        
        $__internal_2a7dd2015b9aa2cb0341c8d2ad9166454a56a88443bee92667020be634d06fa5->leave($__internal_2a7dd2015b9aa2cb0341c8d2ad9166454a56a88443bee92667020be634d06fa5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d59edaf33045b67425d459679ed39e9f881d27d0ea52ec6315148561fe07008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d59edaf33045b67425d459679ed39e9f881d27d0ea52ec6315148561fe07008->enter($__internal_7d59edaf33045b67425d459679ed39e9f881d27d0ea52ec6315148561fe07008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ff54351a6f1bc88e2635de48a6359e6b08f83f185930e593e445f459436dcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff54351a6f1bc88e2635de48a6359e6b08f83f185930e593e445f459436dcf4->enter($__internal_3ff54351a6f1bc88e2635de48a6359e6b08f83f185930e593e445f459436dcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3ff54351a6f1bc88e2635de48a6359e6b08f83f185930e593e445f459436dcf4->leave($__internal_3ff54351a6f1bc88e2635de48a6359e6b08f83f185930e593e445f459436dcf4_prof);

        
        $__internal_7d59edaf33045b67425d459679ed39e9f881d27d0ea52ec6315148561fe07008->leave($__internal_7d59edaf33045b67425d459679ed39e9f881d27d0ea52ec6315148561fe07008_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
