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
        $__internal_b3029a2d771bfea2f18d149d40262a8c37fab8309c23d324828a235a8bcbee95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3029a2d771bfea2f18d149d40262a8c37fab8309c23d324828a235a8bcbee95->enter($__internal_b3029a2d771bfea2f18d149d40262a8c37fab8309c23d324828a235a8bcbee95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_c010a1bbfd2d6fabd9b7d97efb7c193f95d41af9ff1db33b9da7f7ff28edb3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c010a1bbfd2d6fabd9b7d97efb7c193f95d41af9ff1db33b9da7f7ff28edb3a6->enter($__internal_c010a1bbfd2d6fabd9b7d97efb7c193f95d41af9ff1db33b9da7f7ff28edb3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3029a2d771bfea2f18d149d40262a8c37fab8309c23d324828a235a8bcbee95->leave($__internal_b3029a2d771bfea2f18d149d40262a8c37fab8309c23d324828a235a8bcbee95_prof);

        
        $__internal_c010a1bbfd2d6fabd9b7d97efb7c193f95d41af9ff1db33b9da7f7ff28edb3a6->leave($__internal_c010a1bbfd2d6fabd9b7d97efb7c193f95d41af9ff1db33b9da7f7ff28edb3a6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_982458b67f25c427c4e4026dc3addeeb32254ef2f9c5ffe61908f56efd780571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982458b67f25c427c4e4026dc3addeeb32254ef2f9c5ffe61908f56efd780571->enter($__internal_982458b67f25c427c4e4026dc3addeeb32254ef2f9c5ffe61908f56efd780571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3c0005d703c48ad03e03afba2a24c256936d204d97ad88aa9ad6328514f3c87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0005d703c48ad03e03afba2a24c256936d204d97ad88aa9ad6328514f3c87f->enter($__internal_3c0005d703c48ad03e03afba2a24c256936d204d97ad88aa9ad6328514f3c87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3c0005d703c48ad03e03afba2a24c256936d204d97ad88aa9ad6328514f3c87f->leave($__internal_3c0005d703c48ad03e03afba2a24c256936d204d97ad88aa9ad6328514f3c87f_prof);

        
        $__internal_982458b67f25c427c4e4026dc3addeeb32254ef2f9c5ffe61908f56efd780571->leave($__internal_982458b67f25c427c4e4026dc3addeeb32254ef2f9c5ffe61908f56efd780571_prof);

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
