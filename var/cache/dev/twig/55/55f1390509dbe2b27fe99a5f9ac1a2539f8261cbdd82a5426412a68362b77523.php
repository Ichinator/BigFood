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
        $__internal_a3c94fb328220bbb2af238d88f1f24763937f81306877d6d9ca7bcb4b36177b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c94fb328220bbb2af238d88f1f24763937f81306877d6d9ca7bcb4b36177b9->enter($__internal_a3c94fb328220bbb2af238d88f1f24763937f81306877d6d9ca7bcb4b36177b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_12dc65aa277398e7045303f622823f3a0aa8c1f1cad7f523fca8b92d01620728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12dc65aa277398e7045303f622823f3a0aa8c1f1cad7f523fca8b92d01620728->enter($__internal_12dc65aa277398e7045303f622823f3a0aa8c1f1cad7f523fca8b92d01620728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c94fb328220bbb2af238d88f1f24763937f81306877d6d9ca7bcb4b36177b9->leave($__internal_a3c94fb328220bbb2af238d88f1f24763937f81306877d6d9ca7bcb4b36177b9_prof);

        
        $__internal_12dc65aa277398e7045303f622823f3a0aa8c1f1cad7f523fca8b92d01620728->leave($__internal_12dc65aa277398e7045303f622823f3a0aa8c1f1cad7f523fca8b92d01620728_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4993c1f047868d2310b72ba2527107844406013bb6cec3e842f022589cdd6eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4993c1f047868d2310b72ba2527107844406013bb6cec3e842f022589cdd6eae->enter($__internal_4993c1f047868d2310b72ba2527107844406013bb6cec3e842f022589cdd6eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0ad415c5d2290c39677e236730fe8149e043c0d783dacd6464b8a4790512707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ad415c5d2290c39677e236730fe8149e043c0d783dacd6464b8a4790512707->enter($__internal_b0ad415c5d2290c39677e236730fe8149e043c0d783dacd6464b8a4790512707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b0ad415c5d2290c39677e236730fe8149e043c0d783dacd6464b8a4790512707->leave($__internal_b0ad415c5d2290c39677e236730fe8149e043c0d783dacd6464b8a4790512707_prof);

        
        $__internal_4993c1f047868d2310b72ba2527107844406013bb6cec3e842f022589cdd6eae->leave($__internal_4993c1f047868d2310b72ba2527107844406013bb6cec3e842f022589cdd6eae_prof);

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
