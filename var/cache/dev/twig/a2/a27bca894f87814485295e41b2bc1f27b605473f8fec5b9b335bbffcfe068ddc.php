<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7d48d1840cb248593d1d2625c75c5ae45f4dabf59a1ece144cba98d523b62d4b extends Twig_Template
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
        $__internal_9fde444d7154239d59a571e5f395ecbe7e2220627a828b73b1528a977468a897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fde444d7154239d59a571e5f395ecbe7e2220627a828b73b1528a977468a897->enter($__internal_9fde444d7154239d59a571e5f395ecbe7e2220627a828b73b1528a977468a897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_815db4479a925b5ab1d852b54bc6b41e6724d4075fee7ef56bab8f27b0f7da09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815db4479a925b5ab1d852b54bc6b41e6724d4075fee7ef56bab8f27b0f7da09->enter($__internal_815db4479a925b5ab1d852b54bc6b41e6724d4075fee7ef56bab8f27b0f7da09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
    ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "<p>Vous pouvez vous rediriger vers <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
            echo "\">l'interface d'administration</a> ou bien <a href=\"#\">créer une news</a></p>
    ";
        }
        // line 9
        echo "</div>
";
        
        $__internal_9fde444d7154239d59a571e5f395ecbe7e2220627a828b73b1528a977468a897->leave($__internal_9fde444d7154239d59a571e5f395ecbe7e2220627a828b73b1528a977468a897_prof);

        
        $__internal_815db4479a925b5ab1d852b54bc6b41e6724d4075fee7ef56bab8f27b0f7da09->leave($__internal_815db4479a925b5ab1d852b54bc6b41e6724d4075fee7ef56bab8f27b0f7da09_prof);

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
        return array (  49 => 9,  43 => 7,  41 => 6,  35 => 5,  29 => 4,  25 => 2,);
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
    {% if is_granted('ROLE_ADMIN') -%}
        <p>Vous pouvez vous rediriger vers <a href=\"{{ path('easyadmin') }}\">l'interface d'administration</a> ou bien <a href=\"#\">créer une news</a></p>
    {% endif %}
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
