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
        $__internal_df93cd1f88418f439d6ef3b08f31710fe21c31d6e50ecb157d6fd866a2900c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df93cd1f88418f439d6ef3b08f31710fe21c31d6e50ecb157d6fd866a2900c0f->enter($__internal_df93cd1f88418f439d6ef3b08f31710fe21c31d6e50ecb157d6fd866a2900c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_67f44399e201b77ace52585a31929922285291f8e687fbb28a676c403b749103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f44399e201b77ace52585a31929922285291f8e687fbb28a676c403b749103->enter($__internal_67f44399e201b77ace52585a31929922285291f8e687fbb28a676c403b749103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df93cd1f88418f439d6ef3b08f31710fe21c31d6e50ecb157d6fd866a2900c0f->leave($__internal_df93cd1f88418f439d6ef3b08f31710fe21c31d6e50ecb157d6fd866a2900c0f_prof);

        
        $__internal_67f44399e201b77ace52585a31929922285291f8e687fbb28a676c403b749103->leave($__internal_67f44399e201b77ace52585a31929922285291f8e687fbb28a676c403b749103_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db3c461aade5ba94f54f5988500b00a02d442194ee2834edab334b2ef9f00bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3c461aade5ba94f54f5988500b00a02d442194ee2834edab334b2ef9f00bdd->enter($__internal_db3c461aade5ba94f54f5988500b00a02d442194ee2834edab334b2ef9f00bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb042be92840a1cb0832b67f2cd250edce8050cd0a1e00cb56ca1ad0969dbe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb042be92840a1cb0832b67f2cd250edce8050cd0a1e00cb56ca1ad0969dbe9e->enter($__internal_cb042be92840a1cb0832b67f2cd250edce8050cd0a1e00cb56ca1ad0969dbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cb042be92840a1cb0832b67f2cd250edce8050cd0a1e00cb56ca1ad0969dbe9e->leave($__internal_cb042be92840a1cb0832b67f2cd250edce8050cd0a1e00cb56ca1ad0969dbe9e_prof);

        
        $__internal_db3c461aade5ba94f54f5988500b00a02d442194ee2834edab334b2ef9f00bdd->leave($__internal_db3c461aade5ba94f54f5988500b00a02d442194ee2834edab334b2ef9f00bdd_prof);

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
