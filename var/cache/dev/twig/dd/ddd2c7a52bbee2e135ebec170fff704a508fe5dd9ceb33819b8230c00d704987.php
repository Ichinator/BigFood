<?php

/* IchinatorNewsBundle:Default:oneNews.html.twig */
class __TwigTemplate_c8ca0df1627f9be5886a3787ea80812d217610ac034f76c7d04792c8efcb99d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorNewsBundle:Default:oneNews.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fb77c1dd213dd77972571cba98e5e81e62edb565536c9418daf45d6d1e0b839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb77c1dd213dd77972571cba98e5e81e62edb565536c9418daf45d6d1e0b839->enter($__internal_8fb77c1dd213dd77972571cba98e5e81e62edb565536c9418daf45d6d1e0b839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:oneNews.html.twig"));

        $__internal_111a39f03801ead88ad8c6ed19ec14bc2ca0f63ee1f730ce466c5063cbd3e06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111a39f03801ead88ad8c6ed19ec14bc2ca0f63ee1f730ce466c5063cbd3e06a->enter($__internal_111a39f03801ead88ad8c6ed19ec14bc2ca0f63ee1f730ce466c5063cbd3e06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:oneNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fb77c1dd213dd77972571cba98e5e81e62edb565536c9418daf45d6d1e0b839->leave($__internal_8fb77c1dd213dd77972571cba98e5e81e62edb565536c9418daf45d6d1e0b839_prof);

        
        $__internal_111a39f03801ead88ad8c6ed19ec14bc2ca0f63ee1f730ce466c5063cbd3e06a->leave($__internal_111a39f03801ead88ad8c6ed19ec14bc2ca0f63ee1f730ce466c5063cbd3e06a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c13972a12c9dcae281b54609f1520d09d0e978b92ee2b29b7cd274ac3e0c5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c13972a12c9dcae281b54609f1520d09d0e978b92ee2b29b7cd274ac3e0c5bc->enter($__internal_6c13972a12c9dcae281b54609f1520d09d0e978b92ee2b29b7cd274ac3e0c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b4c9d7bb9409db25c0145b84ed6a458d21fa4db3d89e026e60cb7afec7f3fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4c9d7bb9409db25c0145b84ed6a458d21fa4db3d89e026e60cb7afec7f3fc6->enter($__internal_6b4c9d7bb9409db25c0145b84ed6a458d21fa4db3d89e026e60cb7afec7f3fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "


    <div class=\"container\">
        <div class=\"text-center\">
            <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "title", array()), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "image", array()), "html", null, true);
        echo "\" class=\"center-block\" />
        </div>

    ";
        // line 14
        echo $this->getAttribute(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "content", array());
        echo "
    Publié le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["oneNews"] ?? $this->getContext($context, "oneNews")), "date", array()), "m/d/Y", "Europe/Paris"), "html", null, true);
        echo "
";
        // line 16
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 17
            echo "    <div class=\"row\">
        <div class=\"col-sm-8\">
            ";
            // line 19
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
            ";
            // line 20
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 21
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
        </div>
    </div>
";
        } else {
            // line 25
            echo "    <p>Pour commenter vous devez <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">vous enregistrer</a> ou <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">vous connecter</a></p>
";
        }
        // line 27
        echo "
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 29
            echo "        <div>
        <p>
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "user", array()), "html", null, true);
            echo " a dit:
        </p>
        ";
            // line 33
            echo $this->getAttribute($context["comments"], "content", array());
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
";
        
        $__internal_6b4c9d7bb9409db25c0145b84ed6a458d21fa4db3d89e026e60cb7afec7f3fc6->leave($__internal_6b4c9d7bb9409db25c0145b84ed6a458d21fa4db3d89e026e60cb7afec7f3fc6_prof);

        
        $__internal_6c13972a12c9dcae281b54609f1520d09d0e978b92ee2b29b7cd274ac3e0c5bc->leave($__internal_6c13972a12c9dcae281b54609f1520d09d0e978b92ee2b29b7cd274ac3e0c5bc_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorNewsBundle:Default:oneNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  125 => 33,  120 => 31,  116 => 29,  112 => 28,  109 => 27,  101 => 25,  94 => 21,  90 => 20,  86 => 19,  82 => 17,  80 => 16,  76 => 15,  72 => 14,  64 => 11,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    {{ parent() }}


    <div class=\"container\">
        <div class=\"text-center\">
            <h1>{{ oneNews.title }}</h1>
            <img src=\"{{ vich_uploader_asset(oneNews, 'imageFile') }}\" alt=\"{{ oneNews.image }}\" class=\"center-block\" />
        </div>

    {{ oneNews.content|raw }}
    Publié le {{ oneNews.date|date(\"m/d/Y\", \"Europe/Paris\") }}
{% if app.user %}
    <div class=\"row\">
        <div class=\"col-sm-8\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    </div>
{% else %}
    <p>Pour commenter vous devez <a href=\"{{ path('fos_user_registration_register') }}\">vous enregistrer</a> ou <a href=\"{{ path('fos_user_security_login') }}\">vous connecter</a></p>
{% endif %}

        {% for comments in comments %}
        <div>
        <p>
        {{ comments.user }} a dit:
        </p>
        {{ comments.content|raw}}
        </div>
    {% endfor %}
    </div>
{% endblock %}", "IchinatorNewsBundle:Default:oneNews.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/NewsBundle/Resources/views/Default/oneNews.html.twig");
    }
}
