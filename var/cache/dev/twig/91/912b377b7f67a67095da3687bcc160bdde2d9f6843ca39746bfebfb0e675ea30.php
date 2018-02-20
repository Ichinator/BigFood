<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_e550838ce2ed0aca6455294bd1756c38f99f65965b3a89f32674b0fa57cf0967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_85af7ee943d105ddbcca5288b3e3184e13529abde34c5a27efb99f017c8817d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85af7ee943d105ddbcca5288b3e3184e13529abde34c5a27efb99f017c8817d6->enter($__internal_85af7ee943d105ddbcca5288b3e3184e13529abde34c5a27efb99f017c8817d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4f5a7e3439e48c5e69b0131ec353d463734a6e7c77b5bd048550fc33687f2729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5a7e3439e48c5e69b0131ec353d463734a6e7c77b5bd048550fc33687f2729->enter($__internal_4f5a7e3439e48c5e69b0131ec353d463734a6e7c77b5bd048550fc33687f2729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85af7ee943d105ddbcca5288b3e3184e13529abde34c5a27efb99f017c8817d6->leave($__internal_85af7ee943d105ddbcca5288b3e3184e13529abde34c5a27efb99f017c8817d6_prof);

        
        $__internal_4f5a7e3439e48c5e69b0131ec353d463734a6e7c77b5bd048550fc33687f2729->leave($__internal_4f5a7e3439e48c5e69b0131ec353d463734a6e7c77b5bd048550fc33687f2729_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c6738fb9013204c7998fa6c97dbf0e69f23d438cf5516573fc7c6682c8d4a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6738fb9013204c7998fa6c97dbf0e69f23d438cf5516573fc7c6682c8d4a0a->enter($__internal_9c6738fb9013204c7998fa6c97dbf0e69f23d438cf5516573fc7c6682c8d4a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4895a599708ed26df3e9269f71262ad34d0069bed294fc5fad829e09720ed46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4895a599708ed26df3e9269f71262ad34d0069bed294fc5fad829e09720ed46c->enter($__internal_4895a599708ed26df3e9269f71262ad34d0069bed294fc5fad829e09720ed46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4895a599708ed26df3e9269f71262ad34d0069bed294fc5fad829e09720ed46c->leave($__internal_4895a599708ed26df3e9269f71262ad34d0069bed294fc5fad829e09720ed46c_prof);

        
        $__internal_9c6738fb9013204c7998fa6c97dbf0e69f23d438cf5516573fc7c6682c8d4a0a->leave($__internal_9c6738fb9013204c7998fa6c97dbf0e69f23d438cf5516573fc7c6682c8d4a0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
