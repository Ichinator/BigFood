<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_650f56b0e4d4d00b83e7d1fbd3c4177881da3281ffbba19a0abbbfab1a33e4c0 extends Twig_Template
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
        $__internal_ac377043b85c722dcf36ea0ce2072936cf58ce92bd417661f7ff4dfae71083fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac377043b85c722dcf36ea0ce2072936cf58ce92bd417661f7ff4dfae71083fa->enter($__internal_ac377043b85c722dcf36ea0ce2072936cf58ce92bd417661f7ff4dfae71083fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_99b7b464d0250f7b0a970120bc4afa6044bc267264e7e57f6da35e707e985508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b7b464d0250f7b0a970120bc4afa6044bc267264e7e57f6da35e707e985508->enter($__internal_99b7b464d0250f7b0a970120bc4afa6044bc267264e7e57f6da35e707e985508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac377043b85c722dcf36ea0ce2072936cf58ce92bd417661f7ff4dfae71083fa->leave($__internal_ac377043b85c722dcf36ea0ce2072936cf58ce92bd417661f7ff4dfae71083fa_prof);

        
        $__internal_99b7b464d0250f7b0a970120bc4afa6044bc267264e7e57f6da35e707e985508->leave($__internal_99b7b464d0250f7b0a970120bc4afa6044bc267264e7e57f6da35e707e985508_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c6dbf74ea8eb84208a3c175dc255d8d53e3b3b8ed3fac8ac687a480f3d8a6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6dbf74ea8eb84208a3c175dc255d8d53e3b3b8ed3fac8ac687a480f3d8a6b9->enter($__internal_3c6dbf74ea8eb84208a3c175dc255d8d53e3b3b8ed3fac8ac687a480f3d8a6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fe020ded01d0c9f1c3224b7f84e66b1ea11b613a632b3861ecee5935ccb53db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe020ded01d0c9f1c3224b7f84e66b1ea11b613a632b3861ecee5935ccb53db->enter($__internal_8fe020ded01d0c9f1c3224b7f84e66b1ea11b613a632b3861ecee5935ccb53db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8fe020ded01d0c9f1c3224b7f84e66b1ea11b613a632b3861ecee5935ccb53db->leave($__internal_8fe020ded01d0c9f1c3224b7f84e66b1ea11b613a632b3861ecee5935ccb53db_prof);

        
        $__internal_3c6dbf74ea8eb84208a3c175dc255d8d53e3b3b8ed3fac8ac687a480f3d8a6b9->leave($__internal_3c6dbf74ea8eb84208a3c175dc255d8d53e3b3b8ed3fac8ac687a480f3d8a6b9_prof);

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
