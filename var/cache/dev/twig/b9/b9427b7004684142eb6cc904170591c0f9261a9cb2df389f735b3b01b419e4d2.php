<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9379041a1112eae89415c7a12f007493b309e997f27a5550538457d5cdefa457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ee196b1c59b749aae8f51e7fb44873046b59d50acfad7445fe451756a03e90c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee196b1c59b749aae8f51e7fb44873046b59d50acfad7445fe451756a03e90c2->enter($__internal_ee196b1c59b749aae8f51e7fb44873046b59d50acfad7445fe451756a03e90c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_904e22daf4462d4a95c4af2473392e86a8d694c082e0b39370a56327ac3d8b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904e22daf4462d4a95c4af2473392e86a8d694c082e0b39370a56327ac3d8b81->enter($__internal_904e22daf4462d4a95c4af2473392e86a8d694c082e0b39370a56327ac3d8b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee196b1c59b749aae8f51e7fb44873046b59d50acfad7445fe451756a03e90c2->leave($__internal_ee196b1c59b749aae8f51e7fb44873046b59d50acfad7445fe451756a03e90c2_prof);

        
        $__internal_904e22daf4462d4a95c4af2473392e86a8d694c082e0b39370a56327ac3d8b81->leave($__internal_904e22daf4462d4a95c4af2473392e86a8d694c082e0b39370a56327ac3d8b81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45bda08e236a3addd252f9a95b5915a693b1e61b495b1d39a383975b18d65f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bda08e236a3addd252f9a95b5915a693b1e61b495b1d39a383975b18d65f88->enter($__internal_45bda08e236a3addd252f9a95b5915a693b1e61b495b1d39a383975b18d65f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ab45dbbd4b9f5d6e576ec8c897f866592caf22283bfd4116a6c6674e1502126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab45dbbd4b9f5d6e576ec8c897f866592caf22283bfd4116a6c6674e1502126->enter($__internal_1ab45dbbd4b9f5d6e576ec8c897f866592caf22283bfd4116a6c6674e1502126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1ab45dbbd4b9f5d6e576ec8c897f866592caf22283bfd4116a6c6674e1502126->leave($__internal_1ab45dbbd4b9f5d6e576ec8c897f866592caf22283bfd4116a6c6674e1502126_prof);

        
        $__internal_45bda08e236a3addd252f9a95b5915a693b1e61b495b1d39a383975b18d65f88->leave($__internal_45bda08e236a3addd252f9a95b5915a693b1e61b495b1d39a383975b18d65f88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
