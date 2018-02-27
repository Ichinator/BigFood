<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_fa95d2c0136379c0248a02225ce2ae4da3891c5f65cf650a382a2acd16f3b808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_47006b5746766c7437f4122d26ba52f2a0770bb8919fee33d2e01b9db76140a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47006b5746766c7437f4122d26ba52f2a0770bb8919fee33d2e01b9db76140a1->enter($__internal_47006b5746766c7437f4122d26ba52f2a0770bb8919fee33d2e01b9db76140a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_9a8495b0fda54ac1fd6a720df7776b48304728a4113dd1252408f13d52e6464e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8495b0fda54ac1fd6a720df7776b48304728a4113dd1252408f13d52e6464e->enter($__internal_9a8495b0fda54ac1fd6a720df7776b48304728a4113dd1252408f13d52e6464e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47006b5746766c7437f4122d26ba52f2a0770bb8919fee33d2e01b9db76140a1->leave($__internal_47006b5746766c7437f4122d26ba52f2a0770bb8919fee33d2e01b9db76140a1_prof);

        
        $__internal_9a8495b0fda54ac1fd6a720df7776b48304728a4113dd1252408f13d52e6464e->leave($__internal_9a8495b0fda54ac1fd6a720df7776b48304728a4113dd1252408f13d52e6464e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e83d5386eee8fdd1f2e2afd6c7edfc9e193b40ea76c4779891cdef0e906d771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e83d5386eee8fdd1f2e2afd6c7edfc9e193b40ea76c4779891cdef0e906d771->enter($__internal_0e83d5386eee8fdd1f2e2afd6c7edfc9e193b40ea76c4779891cdef0e906d771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_520734f942ef82567acd52ad8b1c03e609f7302eb06f8d6f060c4d0081ee219a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520734f942ef82567acd52ad8b1c03e609f7302eb06f8d6f060c4d0081ee219a->enter($__internal_520734f942ef82567acd52ad8b1c03e609f7302eb06f8d6f060c4d0081ee219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_520734f942ef82567acd52ad8b1c03e609f7302eb06f8d6f060c4d0081ee219a->leave($__internal_520734f942ef82567acd52ad8b1c03e609f7302eb06f8d6f060c4d0081ee219a_prof);

        
        $__internal_0e83d5386eee8fdd1f2e2afd6c7edfc9e193b40ea76c4779891cdef0e906d771->leave($__internal_0e83d5386eee8fdd1f2e2afd6c7edfc9e193b40ea76c4779891cdef0e906d771_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
