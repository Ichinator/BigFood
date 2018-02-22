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
        $__internal_620129b2b2096bd6f5285291ea9640dea30c6ab7a5635ee5029b2057f993d762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620129b2b2096bd6f5285291ea9640dea30c6ab7a5635ee5029b2057f993d762->enter($__internal_620129b2b2096bd6f5285291ea9640dea30c6ab7a5635ee5029b2057f993d762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_304845e9fb9e2ccdc5d549734f881800f06721a6dc57b131431d30074d9e1271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304845e9fb9e2ccdc5d549734f881800f06721a6dc57b131431d30074d9e1271->enter($__internal_304845e9fb9e2ccdc5d549734f881800f06721a6dc57b131431d30074d9e1271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620129b2b2096bd6f5285291ea9640dea30c6ab7a5635ee5029b2057f993d762->leave($__internal_620129b2b2096bd6f5285291ea9640dea30c6ab7a5635ee5029b2057f993d762_prof);

        
        $__internal_304845e9fb9e2ccdc5d549734f881800f06721a6dc57b131431d30074d9e1271->leave($__internal_304845e9fb9e2ccdc5d549734f881800f06721a6dc57b131431d30074d9e1271_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3b957f135e7a74a9f49c14edfa89b539570c1ca7472f0337c34e9a6dfd41aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b957f135e7a74a9f49c14edfa89b539570c1ca7472f0337c34e9a6dfd41aa6->enter($__internal_e3b957f135e7a74a9f49c14edfa89b539570c1ca7472f0337c34e9a6dfd41aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ba197420163a76f4634968d5424d99a36b7d8ffba0433ce8c0e71578ed0123b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba197420163a76f4634968d5424d99a36b7d8ffba0433ce8c0e71578ed0123b->enter($__internal_1ba197420163a76f4634968d5424d99a36b7d8ffba0433ce8c0e71578ed0123b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1ba197420163a76f4634968d5424d99a36b7d8ffba0433ce8c0e71578ed0123b->leave($__internal_1ba197420163a76f4634968d5424d99a36b7d8ffba0433ce8c0e71578ed0123b_prof);

        
        $__internal_e3b957f135e7a74a9f49c14edfa89b539570c1ca7472f0337c34e9a6dfd41aa6->leave($__internal_e3b957f135e7a74a9f49c14edfa89b539570c1ca7472f0337c34e9a6dfd41aa6_prof);

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
