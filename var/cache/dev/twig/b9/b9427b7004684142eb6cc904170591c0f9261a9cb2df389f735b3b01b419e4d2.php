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
        $__internal_456f6c3df557af9d129f74dd5f10a11cabcdc9c6e596fa048e0258f335ccded2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456f6c3df557af9d129f74dd5f10a11cabcdc9c6e596fa048e0258f335ccded2->enter($__internal_456f6c3df557af9d129f74dd5f10a11cabcdc9c6e596fa048e0258f335ccded2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_3e522aee3b2d5e17fbd81ee4467855bce96e6cadad1056cfddd264c8686bec0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e522aee3b2d5e17fbd81ee4467855bce96e6cadad1056cfddd264c8686bec0f->enter($__internal_3e522aee3b2d5e17fbd81ee4467855bce96e6cadad1056cfddd264c8686bec0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_456f6c3df557af9d129f74dd5f10a11cabcdc9c6e596fa048e0258f335ccded2->leave($__internal_456f6c3df557af9d129f74dd5f10a11cabcdc9c6e596fa048e0258f335ccded2_prof);

        
        $__internal_3e522aee3b2d5e17fbd81ee4467855bce96e6cadad1056cfddd264c8686bec0f->leave($__internal_3e522aee3b2d5e17fbd81ee4467855bce96e6cadad1056cfddd264c8686bec0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96d26cfc8688d4ed8f1c636cdaeb5ea399bddfb4539ed0ca7925e195d4ad27f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d26cfc8688d4ed8f1c636cdaeb5ea399bddfb4539ed0ca7925e195d4ad27f4->enter($__internal_96d26cfc8688d4ed8f1c636cdaeb5ea399bddfb4539ed0ca7925e195d4ad27f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e931e75f57cc42d86bbb0ac782976ccf95935304414b1cf2eff222534d5b2a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e931e75f57cc42d86bbb0ac782976ccf95935304414b1cf2eff222534d5b2a41->enter($__internal_e931e75f57cc42d86bbb0ac782976ccf95935304414b1cf2eff222534d5b2a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e931e75f57cc42d86bbb0ac782976ccf95935304414b1cf2eff222534d5b2a41->leave($__internal_e931e75f57cc42d86bbb0ac782976ccf95935304414b1cf2eff222534d5b2a41_prof);

        
        $__internal_96d26cfc8688d4ed8f1c636cdaeb5ea399bddfb4539ed0ca7925e195d4ad27f4->leave($__internal_96d26cfc8688d4ed8f1c636cdaeb5ea399bddfb4539ed0ca7925e195d4ad27f4_prof);

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
