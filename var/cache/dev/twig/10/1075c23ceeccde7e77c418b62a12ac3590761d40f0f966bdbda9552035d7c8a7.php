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
        $__internal_e74da00c6bb135e012fc9857d0a03eb37703196c1c55e51072463e46ba06ce0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74da00c6bb135e012fc9857d0a03eb37703196c1c55e51072463e46ba06ce0a->enter($__internal_e74da00c6bb135e012fc9857d0a03eb37703196c1c55e51072463e46ba06ce0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_399aa1bc46520511c89d62335b644af2f34267e3fd28486947129d770da89855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399aa1bc46520511c89d62335b644af2f34267e3fd28486947129d770da89855->enter($__internal_399aa1bc46520511c89d62335b644af2f34267e3fd28486947129d770da89855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74da00c6bb135e012fc9857d0a03eb37703196c1c55e51072463e46ba06ce0a->leave($__internal_e74da00c6bb135e012fc9857d0a03eb37703196c1c55e51072463e46ba06ce0a_prof);

        
        $__internal_399aa1bc46520511c89d62335b644af2f34267e3fd28486947129d770da89855->leave($__internal_399aa1bc46520511c89d62335b644af2f34267e3fd28486947129d770da89855_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d60504d375b067db4c8f49947a11a319a0db0816fc80f9d502b23e67fabfd321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60504d375b067db4c8f49947a11a319a0db0816fc80f9d502b23e67fabfd321->enter($__internal_d60504d375b067db4c8f49947a11a319a0db0816fc80f9d502b23e67fabfd321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_825ad1758c5b7daab429823dcd93ffd6a2195f82e6d7b667febe1414b7e17384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825ad1758c5b7daab429823dcd93ffd6a2195f82e6d7b667febe1414b7e17384->enter($__internal_825ad1758c5b7daab429823dcd93ffd6a2195f82e6d7b667febe1414b7e17384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_825ad1758c5b7daab429823dcd93ffd6a2195f82e6d7b667febe1414b7e17384->leave($__internal_825ad1758c5b7daab429823dcd93ffd6a2195f82e6d7b667febe1414b7e17384_prof);

        
        $__internal_d60504d375b067db4c8f49947a11a319a0db0816fc80f9d502b23e67fabfd321->leave($__internal_d60504d375b067db4c8f49947a11a319a0db0816fc80f9d502b23e67fabfd321_prof);

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
