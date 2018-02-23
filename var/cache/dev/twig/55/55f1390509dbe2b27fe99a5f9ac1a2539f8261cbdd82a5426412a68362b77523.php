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
        $__internal_305aad2db38a9b67d7d3785d8329d84f3df8a3f46f7217a1efeff01c47f649ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305aad2db38a9b67d7d3785d8329d84f3df8a3f46f7217a1efeff01c47f649ab->enter($__internal_305aad2db38a9b67d7d3785d8329d84f3df8a3f46f7217a1efeff01c47f649ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1fe67e02077b6734d2fde28e9453beb4de5501255d40e12276ab656a061e675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe67e02077b6734d2fde28e9453beb4de5501255d40e12276ab656a061e675f->enter($__internal_1fe67e02077b6734d2fde28e9453beb4de5501255d40e12276ab656a061e675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305aad2db38a9b67d7d3785d8329d84f3df8a3f46f7217a1efeff01c47f649ab->leave($__internal_305aad2db38a9b67d7d3785d8329d84f3df8a3f46f7217a1efeff01c47f649ab_prof);

        
        $__internal_1fe67e02077b6734d2fde28e9453beb4de5501255d40e12276ab656a061e675f->leave($__internal_1fe67e02077b6734d2fde28e9453beb4de5501255d40e12276ab656a061e675f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c690a9467e0e8f58f6dfeaa30c7fde9bd31166677ec1c72edc7b811ad8969a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c690a9467e0e8f58f6dfeaa30c7fde9bd31166677ec1c72edc7b811ad8969a3->enter($__internal_2c690a9467e0e8f58f6dfeaa30c7fde9bd31166677ec1c72edc7b811ad8969a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6043e510d870d8561c89a9138521b9a63f469cac64ee22121f42c7824109c277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6043e510d870d8561c89a9138521b9a63f469cac64ee22121f42c7824109c277->enter($__internal_6043e510d870d8561c89a9138521b9a63f469cac64ee22121f42c7824109c277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6043e510d870d8561c89a9138521b9a63f469cac64ee22121f42c7824109c277->leave($__internal_6043e510d870d8561c89a9138521b9a63f469cac64ee22121f42c7824109c277_prof);

        
        $__internal_2c690a9467e0e8f58f6dfeaa30c7fde9bd31166677ec1c72edc7b811ad8969a3->leave($__internal_2c690a9467e0e8f58f6dfeaa30c7fde9bd31166677ec1c72edc7b811ad8969a3_prof);

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
