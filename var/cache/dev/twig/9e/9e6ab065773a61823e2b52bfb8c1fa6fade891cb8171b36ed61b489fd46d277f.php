<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cd470fff2f009a3e49d11430c39bbefae896f0ac323680cc2f6ce5c4b4dd4ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_12dd78b48c0085b4e925a074cd650b6c2a57ba7405d13d9534b155019ad82958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dd78b48c0085b4e925a074cd650b6c2a57ba7405d13d9534b155019ad82958->enter($__internal_12dd78b48c0085b4e925a074cd650b6c2a57ba7405d13d9534b155019ad82958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_7317938efa4840e45eb3a08d0317d07900fc728fd3b44ef8d35620084f1eb221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7317938efa4840e45eb3a08d0317d07900fc728fd3b44ef8d35620084f1eb221->enter($__internal_7317938efa4840e45eb3a08d0317d07900fc728fd3b44ef8d35620084f1eb221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12dd78b48c0085b4e925a074cd650b6c2a57ba7405d13d9534b155019ad82958->leave($__internal_12dd78b48c0085b4e925a074cd650b6c2a57ba7405d13d9534b155019ad82958_prof);

        
        $__internal_7317938efa4840e45eb3a08d0317d07900fc728fd3b44ef8d35620084f1eb221->leave($__internal_7317938efa4840e45eb3a08d0317d07900fc728fd3b44ef8d35620084f1eb221_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e82ca3b2684e779cda02069694d0854af93552b2476b89cd9234016b59d9d133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82ca3b2684e779cda02069694d0854af93552b2476b89cd9234016b59d9d133->enter($__internal_e82ca3b2684e779cda02069694d0854af93552b2476b89cd9234016b59d9d133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_475aa5ecc5cc5e25cd1c84421776efb280eaf7c66f1f2e96f7f0266b5e43034e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475aa5ecc5cc5e25cd1c84421776efb280eaf7c66f1f2e96f7f0266b5e43034e->enter($__internal_475aa5ecc5cc5e25cd1c84421776efb280eaf7c66f1f2e96f7f0266b5e43034e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_475aa5ecc5cc5e25cd1c84421776efb280eaf7c66f1f2e96f7f0266b5e43034e->leave($__internal_475aa5ecc5cc5e25cd1c84421776efb280eaf7c66f1f2e96f7f0266b5e43034e_prof);

        
        $__internal_e82ca3b2684e779cda02069694d0854af93552b2476b89cd9234016b59d9d133->leave($__internal_e82ca3b2684e779cda02069694d0854af93552b2476b89cd9234016b59d9d133_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
