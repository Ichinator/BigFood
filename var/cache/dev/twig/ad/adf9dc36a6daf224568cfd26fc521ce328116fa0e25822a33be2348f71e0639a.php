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
        $__internal_f4dbdc39f6df69e79ea681640e89dbede32d4f3f9b67a0158f352223c10d154a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4dbdc39f6df69e79ea681640e89dbede32d4f3f9b67a0158f352223c10d154a->enter($__internal_f4dbdc39f6df69e79ea681640e89dbede32d4f3f9b67a0158f352223c10d154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneBurger.html.twig"));

        $__internal_c67c65939911fa2961061f0ec0302d8baded65df9b6d0e00fb9850a80273d92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67c65939911fa2961061f0ec0302d8baded65df9b6d0e00fb9850a80273d92e->enter($__internal_c67c65939911fa2961061f0ec0302d8baded65df9b6d0e00fb9850a80273d92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneBurger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4dbdc39f6df69e79ea681640e89dbede32d4f3f9b67a0158f352223c10d154a->leave($__internal_f4dbdc39f6df69e79ea681640e89dbede32d4f3f9b67a0158f352223c10d154a_prof);

        
        $__internal_c67c65939911fa2961061f0ec0302d8baded65df9b6d0e00fb9850a80273d92e->leave($__internal_c67c65939911fa2961061f0ec0302d8baded65df9b6d0e00fb9850a80273d92e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0664c2d15166ba173210214d3698219ee7e934a3f4619f2acc436e944e262111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0664c2d15166ba173210214d3698219ee7e934a3f4619f2acc436e944e262111->enter($__internal_0664c2d15166ba173210214d3698219ee7e934a3f4619f2acc436e944e262111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81b77aaebff088e8026cd5a9964bea7e4fd76c08deb1f86b9e1af6875f0ead42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b77aaebff088e8026cd5a9964bea7e4fd76c08deb1f86b9e1af6875f0ead42->enter($__internal_81b77aaebff088e8026cd5a9964bea7e4fd76c08deb1f86b9e1af6875f0ead42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81b77aaebff088e8026cd5a9964bea7e4fd76c08deb1f86b9e1af6875f0ead42->leave($__internal_81b77aaebff088e8026cd5a9964bea7e4fd76c08deb1f86b9e1af6875f0ead42_prof);

        
        $__internal_0664c2d15166ba173210214d3698219ee7e934a3f4619f2acc436e944e262111->leave($__internal_0664c2d15166ba173210214d3698219ee7e934a3f4619f2acc436e944e262111_prof);

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
