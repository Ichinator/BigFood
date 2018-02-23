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
        $__internal_cc46cfb3fc482d45deccde7333d8daad84f439ccff2ddad156c65f7e5ba553f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc46cfb3fc482d45deccde7333d8daad84f439ccff2ddad156c65f7e5ba553f3->enter($__internal_cc46cfb3fc482d45deccde7333d8daad84f439ccff2ddad156c65f7e5ba553f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_56c1456c0474d1a4181c70112f8cc6c56d520aba478d2469f7c55559a9810cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c1456c0474d1a4181c70112f8cc6c56d520aba478d2469f7c55559a9810cf9->enter($__internal_56c1456c0474d1a4181c70112f8cc6c56d520aba478d2469f7c55559a9810cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc46cfb3fc482d45deccde7333d8daad84f439ccff2ddad156c65f7e5ba553f3->leave($__internal_cc46cfb3fc482d45deccde7333d8daad84f439ccff2ddad156c65f7e5ba553f3_prof);

        
        $__internal_56c1456c0474d1a4181c70112f8cc6c56d520aba478d2469f7c55559a9810cf9->leave($__internal_56c1456c0474d1a4181c70112f8cc6c56d520aba478d2469f7c55559a9810cf9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1077cdcc9b649fbf1162f58aea3fbee3b6693a40a25096546a01aa1749625f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1077cdcc9b649fbf1162f58aea3fbee3b6693a40a25096546a01aa1749625f2c->enter($__internal_1077cdcc9b649fbf1162f58aea3fbee3b6693a40a25096546a01aa1749625f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_866ea54ea9ba9513db2aed7bc961455f76ee36fcc5452ca2a49682fc283f07cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866ea54ea9ba9513db2aed7bc961455f76ee36fcc5452ca2a49682fc283f07cb->enter($__internal_866ea54ea9ba9513db2aed7bc961455f76ee36fcc5452ca2a49682fc283f07cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_866ea54ea9ba9513db2aed7bc961455f76ee36fcc5452ca2a49682fc283f07cb->leave($__internal_866ea54ea9ba9513db2aed7bc961455f76ee36fcc5452ca2a49682fc283f07cb_prof);

        
        $__internal_1077cdcc9b649fbf1162f58aea3fbee3b6693a40a25096546a01aa1749625f2c->leave($__internal_1077cdcc9b649fbf1162f58aea3fbee3b6693a40a25096546a01aa1749625f2c_prof);

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
