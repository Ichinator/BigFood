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
        $__internal_e93a16e33730d89a8ec221010b54ca009f0bb8786eff3c90d84cd9520eeb28c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93a16e33730d89a8ec221010b54ca009f0bb8786eff3c90d84cd9520eeb28c7->enter($__internal_e93a16e33730d89a8ec221010b54ca009f0bb8786eff3c90d84cd9520eeb28c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_fcfdedce0c8ce312dca299272e06967eb2ab23bc2fe84ca87fed2720131dc86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfdedce0c8ce312dca299272e06967eb2ab23bc2fe84ca87fed2720131dc86f->enter($__internal_fcfdedce0c8ce312dca299272e06967eb2ab23bc2fe84ca87fed2720131dc86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e93a16e33730d89a8ec221010b54ca009f0bb8786eff3c90d84cd9520eeb28c7->leave($__internal_e93a16e33730d89a8ec221010b54ca009f0bb8786eff3c90d84cd9520eeb28c7_prof);

        
        $__internal_fcfdedce0c8ce312dca299272e06967eb2ab23bc2fe84ca87fed2720131dc86f->leave($__internal_fcfdedce0c8ce312dca299272e06967eb2ab23bc2fe84ca87fed2720131dc86f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_077e3115a26ee294c08766a92b2dc49cec28acf836e38569f3f8f2df9e4f170d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077e3115a26ee294c08766a92b2dc49cec28acf836e38569f3f8f2df9e4f170d->enter($__internal_077e3115a26ee294c08766a92b2dc49cec28acf836e38569f3f8f2df9e4f170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a7ea3285c92e3d59252379a49e95a7ea972662aba0d607b8281c9e7d20e321ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ea3285c92e3d59252379a49e95a7ea972662aba0d607b8281c9e7d20e321ad->enter($__internal_a7ea3285c92e3d59252379a49e95a7ea972662aba0d607b8281c9e7d20e321ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a7ea3285c92e3d59252379a49e95a7ea972662aba0d607b8281c9e7d20e321ad->leave($__internal_a7ea3285c92e3d59252379a49e95a7ea972662aba0d607b8281c9e7d20e321ad_prof);

        
        $__internal_077e3115a26ee294c08766a92b2dc49cec28acf836e38569f3f8f2df9e4f170d->leave($__internal_077e3115a26ee294c08766a92b2dc49cec28acf836e38569f3f8f2df9e4f170d_prof);

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
