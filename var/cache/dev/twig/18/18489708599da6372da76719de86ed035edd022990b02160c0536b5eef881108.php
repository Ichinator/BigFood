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
        $__internal_b81d3d85aca74aaf84a7401aecfdc0d71d951dc981a23b193705ec2574c719df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81d3d85aca74aaf84a7401aecfdc0d71d951dc981a23b193705ec2574c719df->enter($__internal_b81d3d85aca74aaf84a7401aecfdc0d71d951dc981a23b193705ec2574c719df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2b7130217ce7601933daec4925a1e54a9fb6a9da1e34bc647fc76aadf114e3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7130217ce7601933daec4925a1e54a9fb6a9da1e34bc647fc76aadf114e3f9->enter($__internal_2b7130217ce7601933daec4925a1e54a9fb6a9da1e34bc647fc76aadf114e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b81d3d85aca74aaf84a7401aecfdc0d71d951dc981a23b193705ec2574c719df->leave($__internal_b81d3d85aca74aaf84a7401aecfdc0d71d951dc981a23b193705ec2574c719df_prof);

        
        $__internal_2b7130217ce7601933daec4925a1e54a9fb6a9da1e34bc647fc76aadf114e3f9->leave($__internal_2b7130217ce7601933daec4925a1e54a9fb6a9da1e34bc647fc76aadf114e3f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d22efd82c86b278130d6c2b4481f0d499fcd11b9d221a1617b86ebe966690708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22efd82c86b278130d6c2b4481f0d499fcd11b9d221a1617b86ebe966690708->enter($__internal_d22efd82c86b278130d6c2b4481f0d499fcd11b9d221a1617b86ebe966690708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_66e21eca4cef2bdde164497dd363f9849bb996399a4635554460727d60980f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e21eca4cef2bdde164497dd363f9849bb996399a4635554460727d60980f9f->enter($__internal_66e21eca4cef2bdde164497dd363f9849bb996399a4635554460727d60980f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_66e21eca4cef2bdde164497dd363f9849bb996399a4635554460727d60980f9f->leave($__internal_66e21eca4cef2bdde164497dd363f9849bb996399a4635554460727d60980f9f_prof);

        
        $__internal_d22efd82c86b278130d6c2b4481f0d499fcd11b9d221a1617b86ebe966690708->leave($__internal_d22efd82c86b278130d6c2b4481f0d499fcd11b9d221a1617b86ebe966690708_prof);

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
