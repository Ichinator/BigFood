<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_239e1ed1199c315e307c0dcffe8e500831ca724be279a268ea3b39867108a9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d9c9204d4c3fc697b6a0862d1159fc549f974ebb51bb8d186ce7c3ac83b4f806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c9204d4c3fc697b6a0862d1159fc549f974ebb51bb8d186ce7c3ac83b4f806->enter($__internal_d9c9204d4c3fc697b6a0862d1159fc549f974ebb51bb8d186ce7c3ac83b4f806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_0bf33464a714b4f9188f2722734570b1f4b00c09f634a997f3345465987a1724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf33464a714b4f9188f2722734570b1f4b00c09f634a997f3345465987a1724->enter($__internal_0bf33464a714b4f9188f2722734570b1f4b00c09f634a997f3345465987a1724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9c9204d4c3fc697b6a0862d1159fc549f974ebb51bb8d186ce7c3ac83b4f806->leave($__internal_d9c9204d4c3fc697b6a0862d1159fc549f974ebb51bb8d186ce7c3ac83b4f806_prof);

        
        $__internal_0bf33464a714b4f9188f2722734570b1f4b00c09f634a997f3345465987a1724->leave($__internal_0bf33464a714b4f9188f2722734570b1f4b00c09f634a997f3345465987a1724_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9632aadedcd9fd213697ee74bce0e1653e0c70f4288fa6426b1baf84856d0c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9632aadedcd9fd213697ee74bce0e1653e0c70f4288fa6426b1baf84856d0c46->enter($__internal_9632aadedcd9fd213697ee74bce0e1653e0c70f4288fa6426b1baf84856d0c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e60b43aaff810ebeac9c0086b691345a89e8645611aabdaff367ee05f4956f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60b43aaff810ebeac9c0086b691345a89e8645611aabdaff367ee05f4956f7c->enter($__internal_e60b43aaff810ebeac9c0086b691345a89e8645611aabdaff367ee05f4956f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e60b43aaff810ebeac9c0086b691345a89e8645611aabdaff367ee05f4956f7c->leave($__internal_e60b43aaff810ebeac9c0086b691345a89e8645611aabdaff367ee05f4956f7c_prof);

        
        $__internal_9632aadedcd9fd213697ee74bce0e1653e0c70f4288fa6426b1baf84856d0c46->leave($__internal_9632aadedcd9fd213697ee74bce0e1653e0c70f4288fa6426b1baf84856d0c46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
