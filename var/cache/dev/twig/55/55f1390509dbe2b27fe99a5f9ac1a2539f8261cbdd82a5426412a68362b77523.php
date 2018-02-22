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
        $__internal_bda702b40208cbc6dd3ab24e29c6a386aa79c963d5115f0f6a84d466c322255d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda702b40208cbc6dd3ab24e29c6a386aa79c963d5115f0f6a84d466c322255d->enter($__internal_bda702b40208cbc6dd3ab24e29c6a386aa79c963d5115f0f6a84d466c322255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_0344a88f43c5fc17721a04a8288071930fc0766b262ccdbb7dce33983d323fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0344a88f43c5fc17721a04a8288071930fc0766b262ccdbb7dce33983d323fef->enter($__internal_0344a88f43c5fc17721a04a8288071930fc0766b262ccdbb7dce33983d323fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda702b40208cbc6dd3ab24e29c6a386aa79c963d5115f0f6a84d466c322255d->leave($__internal_bda702b40208cbc6dd3ab24e29c6a386aa79c963d5115f0f6a84d466c322255d_prof);

        
        $__internal_0344a88f43c5fc17721a04a8288071930fc0766b262ccdbb7dce33983d323fef->leave($__internal_0344a88f43c5fc17721a04a8288071930fc0766b262ccdbb7dce33983d323fef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a80f150e053bc57f13e48ed6232273b6cbb34775030b2109e7dc15148b48601a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80f150e053bc57f13e48ed6232273b6cbb34775030b2109e7dc15148b48601a->enter($__internal_a80f150e053bc57f13e48ed6232273b6cbb34775030b2109e7dc15148b48601a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e64100562f722f183ede04acb958e6b3b9ad067d5be7e115d8e4eb307186eac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64100562f722f183ede04acb958e6b3b9ad067d5be7e115d8e4eb307186eac4->enter($__internal_e64100562f722f183ede04acb958e6b3b9ad067d5be7e115d8e4eb307186eac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e64100562f722f183ede04acb958e6b3b9ad067d5be7e115d8e4eb307186eac4->leave($__internal_e64100562f722f183ede04acb958e6b3b9ad067d5be7e115d8e4eb307186eac4_prof);

        
        $__internal_a80f150e053bc57f13e48ed6232273b6cbb34775030b2109e7dc15148b48601a->leave($__internal_a80f150e053bc57f13e48ed6232273b6cbb34775030b2109e7dc15148b48601a_prof);

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
