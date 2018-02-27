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
        $__internal_bd8294621b51e6bcb4b914e8525ecad266bb12e6b6ef73e40baa96155619d870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8294621b51e6bcb4b914e8525ecad266bb12e6b6ef73e40baa96155619d870->enter($__internal_bd8294621b51e6bcb4b914e8525ecad266bb12e6b6ef73e40baa96155619d870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:onePlat.html.twig"));

        $__internal_4011198552246dc30dfef53a943b3c5597e3eeb6a754bddb2a0de0953cffcd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4011198552246dc30dfef53a943b3c5597e3eeb6a754bddb2a0de0953cffcd73->enter($__internal_4011198552246dc30dfef53a943b3c5597e3eeb6a754bddb2a0de0953cffcd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:onePlat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd8294621b51e6bcb4b914e8525ecad266bb12e6b6ef73e40baa96155619d870->leave($__internal_bd8294621b51e6bcb4b914e8525ecad266bb12e6b6ef73e40baa96155619d870_prof);

        
        $__internal_4011198552246dc30dfef53a943b3c5597e3eeb6a754bddb2a0de0953cffcd73->leave($__internal_4011198552246dc30dfef53a943b3c5597e3eeb6a754bddb2a0de0953cffcd73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75544178085ad050f06ffd67b2470a5657d6b38bc1f764aacc1825afb2ea494a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75544178085ad050f06ffd67b2470a5657d6b38bc1f764aacc1825afb2ea494a->enter($__internal_75544178085ad050f06ffd67b2470a5657d6b38bc1f764aacc1825afb2ea494a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9313295e2b462b4614136451964bd70c1513d5803b45932926fa7591e8e21f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9313295e2b462b4614136451964bd70c1513d5803b45932926fa7591e8e21f8->enter($__internal_c9313295e2b462b4614136451964bd70c1513d5803b45932926fa7591e8e21f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "name", array()), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "image", array()), "html", null, true);
        echo "\" class=\"center-block\" />
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
        
        $__internal_c9313295e2b462b4614136451964bd70c1513d5803b45932926fa7591e8e21f8->leave($__internal_c9313295e2b462b4614136451964bd70c1513d5803b45932926fa7591e8e21f8_prof);

        
        $__internal_75544178085ad050f06ffd67b2470a5657d6b38bc1f764aacc1825afb2ea494a->leave($__internal_75544178085ad050f06ffd67b2470a5657d6b38bc1f764aacc1825afb2ea494a_prof);

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
            <h1>{{ onePlat.name }}</h1>
            <img src=\"{{ vich_uploader_asset(onePlat, 'imageFile') }}\" alt=\"{{ onePlat.image }}\" class=\"center-block\" />
        </div>

        {{ onePlat.description|raw }}
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
{% endblock %}", "IchinatorCommandBundle:Default:onePlat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/onePlat.html.twig");
    }
}
