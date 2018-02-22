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
        $__internal_aec6622d243058adf2a7570fc59645ac2c982b563e8462d2c50e3c2de7370e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec6622d243058adf2a7570fc59645ac2c982b563e8462d2c50e3c2de7370e3b->enter($__internal_aec6622d243058adf2a7570fc59645ac2c982b563e8462d2c50e3c2de7370e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_20f827f1846d6b54614e5d269a1fea2054d2961d3315fcdd07a175d617329972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f827f1846d6b54614e5d269a1fea2054d2961d3315fcdd07a175d617329972->enter($__internal_20f827f1846d6b54614e5d269a1fea2054d2961d3315fcdd07a175d617329972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec6622d243058adf2a7570fc59645ac2c982b563e8462d2c50e3c2de7370e3b->leave($__internal_aec6622d243058adf2a7570fc59645ac2c982b563e8462d2c50e3c2de7370e3b_prof);

        
        $__internal_20f827f1846d6b54614e5d269a1fea2054d2961d3315fcdd07a175d617329972->leave($__internal_20f827f1846d6b54614e5d269a1fea2054d2961d3315fcdd07a175d617329972_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bfacbe80c5423b50f4aa2be96d64afa9363746ac8ac4d9462177724df4badb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfacbe80c5423b50f4aa2be96d64afa9363746ac8ac4d9462177724df4badb5->enter($__internal_0bfacbe80c5423b50f4aa2be96d64afa9363746ac8ac4d9462177724df4badb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1d1ae21a39187e700d4565cc2b8729bb6180c14e635a568026923fcd26f5174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d1ae21a39187e700d4565cc2b8729bb6180c14e635a568026923fcd26f5174->enter($__internal_c1d1ae21a39187e700d4565cc2b8729bb6180c14e635a568026923fcd26f5174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c1d1ae21a39187e700d4565cc2b8729bb6180c14e635a568026923fcd26f5174->leave($__internal_c1d1ae21a39187e700d4565cc2b8729bb6180c14e635a568026923fcd26f5174_prof);

        
        $__internal_0bfacbe80c5423b50f4aa2be96d64afa9363746ac8ac4d9462177724df4badb5->leave($__internal_0bfacbe80c5423b50f4aa2be96d64afa9363746ac8ac4d9462177724df4badb5_prof);

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
