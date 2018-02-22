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
        $__internal_d30d1726f378fa0edb5d045f11fc197b99f3611cd5d8f15c554583fcb43019f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30d1726f378fa0edb5d045f11fc197b99f3611cd5d8f15c554583fcb43019f9->enter($__internal_d30d1726f378fa0edb5d045f11fc197b99f3611cd5d8f15c554583fcb43019f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_f50d0fdbd2b6768b7a510195c7ec0f41e2294fcdbbe6c23f25c25068b577340e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50d0fdbd2b6768b7a510195c7ec0f41e2294fcdbbe6c23f25c25068b577340e->enter($__internal_f50d0fdbd2b6768b7a510195c7ec0f41e2294fcdbbe6c23f25c25068b577340e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_d30d1726f378fa0edb5d045f11fc197b99f3611cd5d8f15c554583fcb43019f9->leave($__internal_d30d1726f378fa0edb5d045f11fc197b99f3611cd5d8f15c554583fcb43019f9_prof);

        
        $__internal_f50d0fdbd2b6768b7a510195c7ec0f41e2294fcdbbe6c23f25c25068b577340e->leave($__internal_f50d0fdbd2b6768b7a510195c7ec0f41e2294fcdbbe6c23f25c25068b577340e_prof);

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