<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_091ac0e66eb4d4a68cb1366bfac36edaef20e46a601373bc03ea7da8553d4928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_aca3049f905b9ae2b11a7994273fe59f582a67ce4ab714f7d110c729e188883a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca3049f905b9ae2b11a7994273fe59f582a67ce4ab714f7d110c729e188883a->enter($__internal_aca3049f905b9ae2b11a7994273fe59f582a67ce4ab714f7d110c729e188883a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_22b163ec11ea602e251ea16081e72080d8bb78054586de934ccd2f6e08faca98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b163ec11ea602e251ea16081e72080d8bb78054586de934ccd2f6e08faca98->enter($__internal_22b163ec11ea602e251ea16081e72080d8bb78054586de934ccd2f6e08faca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca3049f905b9ae2b11a7994273fe59f582a67ce4ab714f7d110c729e188883a->leave($__internal_aca3049f905b9ae2b11a7994273fe59f582a67ce4ab714f7d110c729e188883a_prof);

        
        $__internal_22b163ec11ea602e251ea16081e72080d8bb78054586de934ccd2f6e08faca98->leave($__internal_22b163ec11ea602e251ea16081e72080d8bb78054586de934ccd2f6e08faca98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fd184c265c104dd6b8bd8bbc569d7d06059d38c30bd3e792addab9e3b79f27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd184c265c104dd6b8bd8bbc569d7d06059d38c30bd3e792addab9e3b79f27e->enter($__internal_9fd184c265c104dd6b8bd8bbc569d7d06059d38c30bd3e792addab9e3b79f27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a7e3a750ca5c0ab0800b899889f874b2ba6e13ccb91a18ae4909e7b179b74ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7e3a750ca5c0ab0800b899889f874b2ba6e13ccb91a18ae4909e7b179b74ef->enter($__internal_9a7e3a750ca5c0ab0800b899889f874b2ba6e13ccb91a18ae4909e7b179b74ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9a7e3a750ca5c0ab0800b899889f874b2ba6e13ccb91a18ae4909e7b179b74ef->leave($__internal_9a7e3a750ca5c0ab0800b899889f874b2ba6e13ccb91a18ae4909e7b179b74ef_prof);

        
        $__internal_9fd184c265c104dd6b8bd8bbc569d7d06059d38c30bd3e792addab9e3b79f27e->leave($__internal_9fd184c265c104dd6b8bd8bbc569d7d06059d38c30bd3e792addab9e3b79f27e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
