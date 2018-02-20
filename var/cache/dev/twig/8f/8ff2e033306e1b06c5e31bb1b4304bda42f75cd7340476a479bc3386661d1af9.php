<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6fd2f426a6fd288cababec72a0168cf81c6ea94f51c4dacd33fab85fe55d76fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a38e71d64ee652d0d56d64b9719e59902271efbc16d19a00ec62334f9ada0c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38e71d64ee652d0d56d64b9719e59902271efbc16d19a00ec62334f9ada0c49->enter($__internal_a38e71d64ee652d0d56d64b9719e59902271efbc16d19a00ec62334f9ada0c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3d6e4a7a1d11d37585f54668b12693023b69904e82a384bceb52461c1a30083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6e4a7a1d11d37585f54668b12693023b69904e82a384bceb52461c1a30083d->enter($__internal_3d6e4a7a1d11d37585f54668b12693023b69904e82a384bceb52461c1a30083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38e71d64ee652d0d56d64b9719e59902271efbc16d19a00ec62334f9ada0c49->leave($__internal_a38e71d64ee652d0d56d64b9719e59902271efbc16d19a00ec62334f9ada0c49_prof);

        
        $__internal_3d6e4a7a1d11d37585f54668b12693023b69904e82a384bceb52461c1a30083d->leave($__internal_3d6e4a7a1d11d37585f54668b12693023b69904e82a384bceb52461c1a30083d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c40e0f74e9a422dda391daf43e1e4d24cb159875860fa6d3184e0560ede8d30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40e0f74e9a422dda391daf43e1e4d24cb159875860fa6d3184e0560ede8d30c->enter($__internal_c40e0f74e9a422dda391daf43e1e4d24cb159875860fa6d3184e0560ede8d30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5f1c43c6f5c65917bc1537cc52bc71a4db5482e64b66134849f8470e7d1388e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f1c43c6f5c65917bc1537cc52bc71a4db5482e64b66134849f8470e7d1388e->enter($__internal_f5f1c43c6f5c65917bc1537cc52bc71a4db5482e64b66134849f8470e7d1388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f5f1c43c6f5c65917bc1537cc52bc71a4db5482e64b66134849f8470e7d1388e->leave($__internal_f5f1c43c6f5c65917bc1537cc52bc71a4db5482e64b66134849f8470e7d1388e_prof);

        
        $__internal_c40e0f74e9a422dda391daf43e1e4d24cb159875860fa6d3184e0560ede8d30c->leave($__internal_c40e0f74e9a422dda391daf43e1e4d24cb159875860fa6d3184e0560ede8d30c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
