<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0a12f1de0d9ecf3f7f0df1b7125af486a157344b82466bf59914361a6c533e24 extends Twig_Template
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
        $__internal_a272c1e790d2bbad25c457f4f140acfe673c6fcadb1c32acedbb36e09d7f1e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a272c1e790d2bbad25c457f4f140acfe673c6fcadb1c32acedbb36e09d7f1e1b->enter($__internal_a272c1e790d2bbad25c457f4f140acfe673c6fcadb1c32acedbb36e09d7f1e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_71510cf22d7b55b80dfb4dc2e28045c61f9867dd278a72c4b16c3623e4dc3206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71510cf22d7b55b80dfb4dc2e28045c61f9867dd278a72c4b16c3623e4dc3206->enter($__internal_71510cf22d7b55b80dfb4dc2e28045c61f9867dd278a72c4b16c3623e4dc3206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a272c1e790d2bbad25c457f4f140acfe673c6fcadb1c32acedbb36e09d7f1e1b->leave($__internal_a272c1e790d2bbad25c457f4f140acfe673c6fcadb1c32acedbb36e09d7f1e1b_prof);

        
        $__internal_71510cf22d7b55b80dfb4dc2e28045c61f9867dd278a72c4b16c3623e4dc3206->leave($__internal_71510cf22d7b55b80dfb4dc2e28045c61f9867dd278a72c4b16c3623e4dc3206_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34ed563183217c8c175090ef806c04c5797b0b895cfaa7d0f2c0e48cd2ef4c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ed563183217c8c175090ef806c04c5797b0b895cfaa7d0f2c0e48cd2ef4c42->enter($__internal_34ed563183217c8c175090ef806c04c5797b0b895cfaa7d0f2c0e48cd2ef4c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eccccb21eaa74906df964173e35f1e8d31448e8a39d28bb95e0ae2324a01d77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccccb21eaa74906df964173e35f1e8d31448e8a39d28bb95e0ae2324a01d77e->enter($__internal_eccccb21eaa74906df964173e35f1e8d31448e8a39d28bb95e0ae2324a01d77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_eccccb21eaa74906df964173e35f1e8d31448e8a39d28bb95e0ae2324a01d77e->leave($__internal_eccccb21eaa74906df964173e35f1e8d31448e8a39d28bb95e0ae2324a01d77e_prof);

        
        $__internal_34ed563183217c8c175090ef806c04c5797b0b895cfaa7d0f2c0e48cd2ef4c42->leave($__internal_34ed563183217c8c175090ef806c04c5797b0b895cfaa7d0f2c0e48cd2ef4c42_prof);

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
