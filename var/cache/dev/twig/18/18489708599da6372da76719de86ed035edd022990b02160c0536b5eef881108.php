<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_42461b569a915ba3d36e773704f6e07aa4ccfc39a3eb4d0558612b5d844114d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_48a5c6f9e53ac7fb37e40756fd34024019ab5408e6387e6aec639a65bdfcbd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a5c6f9e53ac7fb37e40756fd34024019ab5408e6387e6aec639a65bdfcbd19->enter($__internal_48a5c6f9e53ac7fb37e40756fd34024019ab5408e6387e6aec639a65bdfcbd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_4a4fcccaea1af66d6fb04b532c04d45f010c43afa5946533ad2ce19ce36139d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4fcccaea1af66d6fb04b532c04d45f010c43afa5946533ad2ce19ce36139d9->enter($__internal_4a4fcccaea1af66d6fb04b532c04d45f010c43afa5946533ad2ce19ce36139d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a5c6f9e53ac7fb37e40756fd34024019ab5408e6387e6aec639a65bdfcbd19->leave($__internal_48a5c6f9e53ac7fb37e40756fd34024019ab5408e6387e6aec639a65bdfcbd19_prof);

        
        $__internal_4a4fcccaea1af66d6fb04b532c04d45f010c43afa5946533ad2ce19ce36139d9->leave($__internal_4a4fcccaea1af66d6fb04b532c04d45f010c43afa5946533ad2ce19ce36139d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e374271501fe8093720ab25f176e168ee67efdaa75642fd04958615367dfa275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e374271501fe8093720ab25f176e168ee67efdaa75642fd04958615367dfa275->enter($__internal_e374271501fe8093720ab25f176e168ee67efdaa75642fd04958615367dfa275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ceb512dbb7196a3d51a2f53b7e19aa8d927982853e36367b2ab9cb35a458f8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb512dbb7196a3d51a2f53b7e19aa8d927982853e36367b2ab9cb35a458f8ce->enter($__internal_ceb512dbb7196a3d51a2f53b7e19aa8d927982853e36367b2ab9cb35a458f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ceb512dbb7196a3d51a2f53b7e19aa8d927982853e36367b2ab9cb35a458f8ce->leave($__internal_ceb512dbb7196a3d51a2f53b7e19aa8d927982853e36367b2ab9cb35a458f8ce_prof);

        
        $__internal_e374271501fe8093720ab25f176e168ee67efdaa75642fd04958615367dfa275->leave($__internal_e374271501fe8093720ab25f176e168ee67efdaa75642fd04958615367dfa275_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
