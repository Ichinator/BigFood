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
        $__internal_c9b5be14b35a15a23ce395a941d6c942b4b7fd98539d678f0f04212e9e27426a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b5be14b35a15a23ce395a941d6c942b4b7fd98539d678f0f04212e9e27426a->enter($__internal_c9b5be14b35a15a23ce395a941d6c942b4b7fd98539d678f0f04212e9e27426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_2b924d1268f599bd566f68a210582292e419845ff3ded2870f31514bda5bb4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b924d1268f599bd566f68a210582292e419845ff3ded2870f31514bda5bb4ca->enter($__internal_2b924d1268f599bd566f68a210582292e419845ff3ded2870f31514bda5bb4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b5be14b35a15a23ce395a941d6c942b4b7fd98539d678f0f04212e9e27426a->leave($__internal_c9b5be14b35a15a23ce395a941d6c942b4b7fd98539d678f0f04212e9e27426a_prof);

        
        $__internal_2b924d1268f599bd566f68a210582292e419845ff3ded2870f31514bda5bb4ca->leave($__internal_2b924d1268f599bd566f68a210582292e419845ff3ded2870f31514bda5bb4ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7982e17249414fcbd18deb7ec50b8fc4517759f051ba6179c962978fa7764da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7982e17249414fcbd18deb7ec50b8fc4517759f051ba6179c962978fa7764da2->enter($__internal_7982e17249414fcbd18deb7ec50b8fc4517759f051ba6179c962978fa7764da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f86a3b67db2ec7fc4613fa1c1821ec59b9e7ff3dedcfd3740a7af0d2b05bb6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86a3b67db2ec7fc4613fa1c1821ec59b9e7ff3dedcfd3740a7af0d2b05bb6c7->enter($__internal_f86a3b67db2ec7fc4613fa1c1821ec59b9e7ff3dedcfd3740a7af0d2b05bb6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f86a3b67db2ec7fc4613fa1c1821ec59b9e7ff3dedcfd3740a7af0d2b05bb6c7->leave($__internal_f86a3b67db2ec7fc4613fa1c1821ec59b9e7ff3dedcfd3740a7af0d2b05bb6c7_prof);

        
        $__internal_7982e17249414fcbd18deb7ec50b8fc4517759f051ba6179c962978fa7764da2->leave($__internal_7982e17249414fcbd18deb7ec50b8fc4517759f051ba6179c962978fa7764da2_prof);

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
