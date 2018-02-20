<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5cee1b471fe610fca70b5e025cce2c1250bcfe92abf99d380a8f214b88136b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3888c8829c4bf8f6249bd3cd4d8a288505e2fcc67173ea2f9d114a18b53a7a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3888c8829c4bf8f6249bd3cd4d8a288505e2fcc67173ea2f9d114a18b53a7a08->enter($__internal_3888c8829c4bf8f6249bd3cd4d8a288505e2fcc67173ea2f9d114a18b53a7a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_0626db2771b064871032c68d846d9a76fc7042069c4ff95e9eddbb3fb44b1450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0626db2771b064871032c68d846d9a76fc7042069c4ff95e9eddbb3fb44b1450->enter($__internal_0626db2771b064871032c68d846d9a76fc7042069c4ff95e9eddbb3fb44b1450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3888c8829c4bf8f6249bd3cd4d8a288505e2fcc67173ea2f9d114a18b53a7a08->leave($__internal_3888c8829c4bf8f6249bd3cd4d8a288505e2fcc67173ea2f9d114a18b53a7a08_prof);

        
        $__internal_0626db2771b064871032c68d846d9a76fc7042069c4ff95e9eddbb3fb44b1450->leave($__internal_0626db2771b064871032c68d846d9a76fc7042069c4ff95e9eddbb3fb44b1450_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
