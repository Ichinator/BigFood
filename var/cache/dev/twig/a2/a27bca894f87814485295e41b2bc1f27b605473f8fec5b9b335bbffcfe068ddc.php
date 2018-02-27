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
        $__internal_b05827915551854fb34daea1e0422606bc7e2759b6d6f41102ba62d2ffdf910d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05827915551854fb34daea1e0422606bc7e2759b6d6f41102ba62d2ffdf910d->enter($__internal_b05827915551854fb34daea1e0422606bc7e2759b6d6f41102ba62d2ffdf910d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_c1075d6174e8503d9d30e42bfff0733c6bca332e214fc7f0758c6e55569e41a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1075d6174e8503d9d30e42bfff0733c6bca332e214fc7f0758c6e55569e41a9->enter($__internal_c1075d6174e8503d9d30e42bfff0733c6bca332e214fc7f0758c6e55569e41a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>Voici vos données :</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "<p>Vous pouvez vous rediriger vers <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
            echo "\">l'interface d'administration</a> ou bien <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_news_homepage");
            echo "\">créer une news</a></p>
    ";
        }
        // line 10
        echo "</div>
";
        
        $__internal_b05827915551854fb34daea1e0422606bc7e2759b6d6f41102ba62d2ffdf910d->leave($__internal_b05827915551854fb34daea1e0422606bc7e2759b6d6f41102ba62d2ffdf910d_prof);

        
        $__internal_c1075d6174e8503d9d30e42bfff0733c6bca332e214fc7f0758c6e55569e41a9->leave($__internal_c1075d6174e8503d9d30e42bfff0733c6bca332e214fc7f0758c6e55569e41a9_prof);

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
        return array (  52 => 10,  44 => 8,  42 => 7,  36 => 6,  30 => 5,  25 => 2,);
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
    <p>Voici vos données :</p>
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    {% if is_granted('ROLE_ADMIN') -%}
        <p>Vous pouvez vous rediriger vers <a href=\"{{ path('easyadmin') }}\">l'interface d'administration</a> ou bien <a href=\"{{ path('ichinator_news_homepage') }}\">créer une news</a></p>
    {% endif %}
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
