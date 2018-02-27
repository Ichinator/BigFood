<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8c80bf97cbfd1f6bea24a94a0df4c3613a0787b0865003a365e6d6f8b942c65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_bce21e8f29fc77a09ce906b44953888dbedb4b9585fe156dbbc6b41892dcbce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce21e8f29fc77a09ce906b44953888dbedb4b9585fe156dbbc6b41892dcbce2->enter($__internal_bce21e8f29fc77a09ce906b44953888dbedb4b9585fe156dbbc6b41892dcbce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_51b3991c6af23349383eddee5fbbe27bd9e23b0a59687ac8bdff88f92e674702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b3991c6af23349383eddee5fbbe27bd9e23b0a59687ac8bdff88f92e674702->enter($__internal_51b3991c6af23349383eddee5fbbe27bd9e23b0a59687ac8bdff88f92e674702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce21e8f29fc77a09ce906b44953888dbedb4b9585fe156dbbc6b41892dcbce2->leave($__internal_bce21e8f29fc77a09ce906b44953888dbedb4b9585fe156dbbc6b41892dcbce2_prof);

        
        $__internal_51b3991c6af23349383eddee5fbbe27bd9e23b0a59687ac8bdff88f92e674702->leave($__internal_51b3991c6af23349383eddee5fbbe27bd9e23b0a59687ac8bdff88f92e674702_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_026449a87724e59b58b3ee9de15cbaaebe53a3f7c8feeec0b89f86fa454de528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026449a87724e59b58b3ee9de15cbaaebe53a3f7c8feeec0b89f86fa454de528->enter($__internal_026449a87724e59b58b3ee9de15cbaaebe53a3f7c8feeec0b89f86fa454de528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6949f9bb8f9f20c94a5a095fbe02de7e27cad37560d160654f28611417480fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6949f9bb8f9f20c94a5a095fbe02de7e27cad37560d160654f28611417480fc->enter($__internal_d6949f9bb8f9f20c94a5a095fbe02de7e27cad37560d160654f28611417480fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d6949f9bb8f9f20c94a5a095fbe02de7e27cad37560d160654f28611417480fc->leave($__internal_d6949f9bb8f9f20c94a5a095fbe02de7e27cad37560d160654f28611417480fc_prof);

        
        $__internal_026449a87724e59b58b3ee9de15cbaaebe53a3f7c8feeec0b89f86fa454de528->leave($__internal_026449a87724e59b58b3ee9de15cbaaebe53a3f7c8feeec0b89f86fa454de528_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
