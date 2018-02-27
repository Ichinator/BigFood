<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_c8d9d6ed2133660c974d47debbd0a01ea65dcac6677fe055d4a4499bddd16bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_3d33b7270cff01e3078ac760966d831c85a042c9caf59d01c74ba5095dfdcc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d33b7270cff01e3078ac760966d831c85a042c9caf59d01c74ba5095dfdcc58->enter($__internal_3d33b7270cff01e3078ac760966d831c85a042c9caf59d01c74ba5095dfdcc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_76fec88891865b63fa015800fe763fa2179453652bfa06d19b4453f9f94590e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fec88891865b63fa015800fe763fa2179453652bfa06d19b4453f9f94590e7->enter($__internal_76fec88891865b63fa015800fe763fa2179453652bfa06d19b4453f9f94590e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d33b7270cff01e3078ac760966d831c85a042c9caf59d01c74ba5095dfdcc58->leave($__internal_3d33b7270cff01e3078ac760966d831c85a042c9caf59d01c74ba5095dfdcc58_prof);

        
        $__internal_76fec88891865b63fa015800fe763fa2179453652bfa06d19b4453f9f94590e7->leave($__internal_76fec88891865b63fa015800fe763fa2179453652bfa06d19b4453f9f94590e7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1088ff84f5c395ab340f785203353e34e850720310b115d2c8f9c5ea8f7af9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1088ff84f5c395ab340f785203353e34e850720310b115d2c8f9c5ea8f7af9eb->enter($__internal_1088ff84f5c395ab340f785203353e34e850720310b115d2c8f9c5ea8f7af9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_39a1aafd6b25ea634a740de5ef47209d9de04b022f2a8a0502b711cb8256d6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a1aafd6b25ea634a740de5ef47209d9de04b022f2a8a0502b711cb8256d6d0->enter($__internal_39a1aafd6b25ea634a740de5ef47209d9de04b022f2a8a0502b711cb8256d6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_39a1aafd6b25ea634a740de5ef47209d9de04b022f2a8a0502b711cb8256d6d0->leave($__internal_39a1aafd6b25ea634a740de5ef47209d9de04b022f2a8a0502b711cb8256d6d0_prof);

        
        $__internal_1088ff84f5c395ab340f785203353e34e850720310b115d2c8f9c5ea8f7af9eb->leave($__internal_1088ff84f5c395ab340f785203353e34e850720310b115d2c8f9c5ea8f7af9eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
