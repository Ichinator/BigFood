<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_85b2e4e7d72765b8915cba401fdcde110e2c269b5bf8e0db747f707004d0a373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_43e3e3571b5ac423deaae4f5ab6947ec889460377b98d3bb7464ce89a6a68f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e3e3571b5ac423deaae4f5ab6947ec889460377b98d3bb7464ce89a6a68f2e->enter($__internal_43e3e3571b5ac423deaae4f5ab6947ec889460377b98d3bb7464ce89a6a68f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_cde6ae59cccd25c313a09c14d4b359f70187e5c6a58ced5418b5ba9f3216c442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde6ae59cccd25c313a09c14d4b359f70187e5c6a58ced5418b5ba9f3216c442->enter($__internal_cde6ae59cccd25c313a09c14d4b359f70187e5c6a58ced5418b5ba9f3216c442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e3e3571b5ac423deaae4f5ab6947ec889460377b98d3bb7464ce89a6a68f2e->leave($__internal_43e3e3571b5ac423deaae4f5ab6947ec889460377b98d3bb7464ce89a6a68f2e_prof);

        
        $__internal_cde6ae59cccd25c313a09c14d4b359f70187e5c6a58ced5418b5ba9f3216c442->leave($__internal_cde6ae59cccd25c313a09c14d4b359f70187e5c6a58ced5418b5ba9f3216c442_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f33559ff69e42134cc20efa685aad2fd0c1861df09fe52367f63f46e20c9b9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33559ff69e42134cc20efa685aad2fd0c1861df09fe52367f63f46e20c9b9e1->enter($__internal_f33559ff69e42134cc20efa685aad2fd0c1861df09fe52367f63f46e20c9b9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_83e767ab0fa75903adc33d3a8bf823d5e8bca83a3758435a5651b684d7baa93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e767ab0fa75903adc33d3a8bf823d5e8bca83a3758435a5651b684d7baa93b->enter($__internal_83e767ab0fa75903adc33d3a8bf823d5e8bca83a3758435a5651b684d7baa93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_83e767ab0fa75903adc33d3a8bf823d5e8bca83a3758435a5651b684d7baa93b->leave($__internal_83e767ab0fa75903adc33d3a8bf823d5e8bca83a3758435a5651b684d7baa93b_prof);

        
        $__internal_f33559ff69e42134cc20efa685aad2fd0c1861df09fe52367f63f46e20c9b9e1->leave($__internal_f33559ff69e42134cc20efa685aad2fd0c1861df09fe52367f63f46e20c9b9e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
