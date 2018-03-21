<?php

/* IchinatorCommandBundle:Default:onePlat.html.twig */
class __TwigTemplate_495584093d51c9d860bec4dd54d22fbf03d6778eab71acf9eda85044d5aba787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IchinatorCommandBundle:Default:onePlat.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72370af050a4921f2c2c5370ba902b307ceea68057eac235e5b1aa33d332e654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72370af050a4921f2c2c5370ba902b307ceea68057eac235e5b1aa33d332e654->enter($__internal_72370af050a4921f2c2c5370ba902b307ceea68057eac235e5b1aa33d332e654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:onePlat.html.twig"));

        $__internal_ca5a8296280e4d9ba1aa4ff01a5279033ae0bad28d1c4f8a066d41ad4b18692b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5a8296280e4d9ba1aa4ff01a5279033ae0bad28d1c4f8a066d41ad4b18692b->enter($__internal_ca5a8296280e4d9ba1aa4ff01a5279033ae0bad28d1c4f8a066d41ad4b18692b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:onePlat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72370af050a4921f2c2c5370ba902b307ceea68057eac235e5b1aa33d332e654->leave($__internal_72370af050a4921f2c2c5370ba902b307ceea68057eac235e5b1aa33d332e654_prof);

        
        $__internal_ca5a8296280e4d9ba1aa4ff01a5279033ae0bad28d1c4f8a066d41ad4b18692b->leave($__internal_ca5a8296280e4d9ba1aa4ff01a5279033ae0bad28d1c4f8a066d41ad4b18692b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55859aa4c4dc32f64ae844e2422b53acf487a568c7d9151950b8437abaa48f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55859aa4c4dc32f64ae844e2422b53acf487a568c7d9151950b8437abaa48f86->enter($__internal_55859aa4c4dc32f64ae844e2422b53acf487a568c7d9151950b8437abaa48f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d309a0284a5d58b887c6df7393cedc5fa982237054defc87dbef54a2c589b0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d309a0284a5d58b887c6df7393cedc5fa982237054defc87dbef54a2c589b0f9->enter($__internal_d309a0284a5d58b887c6df7393cedc5fa982237054defc87dbef54a2c589b0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "


    <div class=\"container-fluid\">
        <div class=\"text-center\">
            <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "name", array()), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "image", array()), "html", null, true);
        echo "\" class=\"center-block\"/>
        </div>

        ";
        // line 14
        echo $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "description", array());
        echo "
        ";
        // line 15
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
                    ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 24
            echo "            <p>Pour commenter vous devez <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">vous enregistrer</a> ou
                <a href=\"";
            // line 25
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
            echo "            <div>
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
        
        $__internal_d309a0284a5d58b887c6df7393cedc5fa982237054defc87dbef54a2c589b0f9->leave($__internal_d309a0284a5d58b887c6df7393cedc5fa982237054defc87dbef54a2c589b0f9_prof);

        
        $__internal_55859aa4c4dc32f64ae844e2422b53acf487a568c7d9151950b8437abaa48f86->leave($__internal_55859aa4c4dc32f64ae844e2422b53acf487a568c7d9151950b8437abaa48f86_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:onePlat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  123 => 33,  118 => 31,  114 => 29,  110 => 28,  107 => 27,  102 => 25,  97 => 24,  90 => 20,  86 => 19,  82 => 18,  78 => 16,  76 => 15,  72 => 14,  64 => 11,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

    {{ parent() }}


    <div class=\"container-fluid\">
        <div class=\"text-center\">
            <h1>{{ onePlat.name }}</h1>
            <img src=\"{{ vich_uploader_asset(onePlat, 'imageFile') }}\" alt=\"{{ onePlat.image }}\" class=\"center-block\"/>
        </div>

        {{ onePlat.description|raw }}
        {% if app.user %}
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    {{ form_end(form) }}
                </div>
            </div>
        {% else %}
            <p>Pour commenter vous devez <a href=\"{{ path('fos_user_registration_register') }}\">vous enregistrer</a> ou
                <a href=\"{{ path('fos_user_security_login') }}\">vous connecter</a></p>
        {% endif %}

        {% for comments in comments %}
            <div>
                <p>
                    {{ comments.user }} a dit:
                </p>
                {{ comments.content|raw }}
            </div>
        {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:onePlat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/onePlat.html.twig");
    }
}
