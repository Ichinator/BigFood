<?php

/* IchinatorCommandBundle:Default:oneBurger.html.twig */
class __TwigTemplate_0428e52e6aaa4c37e9d4d3e0759d327966d64e6ba421df423271fb12b91107c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IchinatorCommandBundle:Default:oneBurger.html.twig", 1);
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
        $__internal_1c03934e6cc26476604176cb29fc9ec0ef125d2d42c3379072bddf6893117577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c03934e6cc26476604176cb29fc9ec0ef125d2d42c3379072bddf6893117577->enter($__internal_1c03934e6cc26476604176cb29fc9ec0ef125d2d42c3379072bddf6893117577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneBurger.html.twig"));

        $__internal_e9406ee61bf9f0e8cc89a8a50ad1066fa1f3c81a6ad9d56496309edc77b584a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9406ee61bf9f0e8cc89a8a50ad1066fa1f3c81a6ad9d56496309edc77b584a5->enter($__internal_e9406ee61bf9f0e8cc89a8a50ad1066fa1f3c81a6ad9d56496309edc77b584a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneBurger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c03934e6cc26476604176cb29fc9ec0ef125d2d42c3379072bddf6893117577->leave($__internal_1c03934e6cc26476604176cb29fc9ec0ef125d2d42c3379072bddf6893117577_prof);

        
        $__internal_e9406ee61bf9f0e8cc89a8a50ad1066fa1f3c81a6ad9d56496309edc77b584a5->leave($__internal_e9406ee61bf9f0e8cc89a8a50ad1066fa1f3c81a6ad9d56496309edc77b584a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb63b27a31f49dc802cd6821012047b9b1d59d7bee23001b397be580fadcb4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb63b27a31f49dc802cd6821012047b9b1d59d7bee23001b397be580fadcb4f1->enter($__internal_bb63b27a31f49dc802cd6821012047b9b1d59d7bee23001b397be580fadcb4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbcaa7d3f4832a8bda8202c1aa733449d7bcd736fbea2f5bdc388c3e840859ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcaa7d3f4832a8bda8202c1aa733449d7bcd736fbea2f5bdc388c3e840859ff->enter($__internal_bbcaa7d3f4832a8bda8202c1aa733449d7bcd736fbea2f5bdc388c3e840859ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneBurger"] ?? $this->getContext($context, "oneBurger")), "name", array()), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["oneBurger"] ?? $this->getContext($context, "oneBurger")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneBurger"] ?? $this->getContext($context, "oneBurger")), "image", array()), "html", null, true);
        echo "\" class=\"center-block\" />
        </div>

        ";
        // line 14
        echo $this->getAttribute(($context["oneBurger"] ?? $this->getContext($context, "oneBurger")), "description", array());
        echo "
        ";
        // line 15
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "            <div class=\"row\">
                <div class=\"col-sm-8\">
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
            echo "\">vous enregistrer</a> ou <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">vous connecter</a></p>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 28
            echo "            <div>
                <p>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "user", array()), "html", null, true);
            echo " a dit:
                </p>
                ";
            // line 32
            echo $this->getAttribute($context["comments"], "content", array());
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>
";
        
        $__internal_bbcaa7d3f4832a8bda8202c1aa733449d7bcd736fbea2f5bdc388c3e840859ff->leave($__internal_bbcaa7d3f4832a8bda8202c1aa733449d7bcd736fbea2f5bdc388c3e840859ff_prof);

        
        $__internal_bb63b27a31f49dc802cd6821012047b9b1d59d7bee23001b397be580fadcb4f1->leave($__internal_bb63b27a31f49dc802cd6821012047b9b1d59d7bee23001b397be580fadcb4f1_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:oneBurger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 35,  121 => 32,  116 => 30,  112 => 28,  108 => 27,  105 => 26,  97 => 24,  90 => 20,  86 => 19,  82 => 18,  78 => 16,  76 => 15,  72 => 14,  64 => 11,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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


    <div class=\"container\">
        <div class=\"text-center\">
            <h1>{{ oneBurger.name }}</h1>
            <img src=\"{{ vich_uploader_asset(oneBurger, 'imageFile') }}\" alt=\"{{ oneBurger.image }}\" class=\"center-block\" />
        </div>

        {{ oneBurger.description|raw }}
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
{% endblock %}", "IchinatorCommandBundle:Default:oneBurger.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/oneBurger.html.twig");
    }
}
