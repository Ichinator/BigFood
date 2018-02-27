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
        $__internal_b461cd0ba59b1ee5c05ced2dcb11be6f5622ee4dd0dfe20bbb1763e3d5e84f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b461cd0ba59b1ee5c05ced2dcb11be6f5622ee4dd0dfe20bbb1763e3d5e84f2e->enter($__internal_b461cd0ba59b1ee5c05ced2dcb11be6f5622ee4dd0dfe20bbb1763e3d5e84f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:onePlat.html.twig"));

        $__internal_1d83eed4a357815539436c990c1e1de646a55b101f9b34af2a66a0a13ebb9096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d83eed4a357815539436c990c1e1de646a55b101f9b34af2a66a0a13ebb9096->enter($__internal_1d83eed4a357815539436c990c1e1de646a55b101f9b34af2a66a0a13ebb9096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:onePlat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b461cd0ba59b1ee5c05ced2dcb11be6f5622ee4dd0dfe20bbb1763e3d5e84f2e->leave($__internal_b461cd0ba59b1ee5c05ced2dcb11be6f5622ee4dd0dfe20bbb1763e3d5e84f2e_prof);

        
        $__internal_1d83eed4a357815539436c990c1e1de646a55b101f9b34af2a66a0a13ebb9096->leave($__internal_1d83eed4a357815539436c990c1e1de646a55b101f9b34af2a66a0a13ebb9096_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73e1c58e465cb0e1e2894d23b304c2ef5b2c58b140398fa0fd44e4e92b3ff9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e1c58e465cb0e1e2894d23b304c2ef5b2c58b140398fa0fd44e4e92b3ff9e5->enter($__internal_73e1c58e465cb0e1e2894d23b304c2ef5b2c58b140398fa0fd44e4e92b3ff9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea1bffc0f90b4d5c745f8e48aae0c91e2b88c72a94238be7df1d62b6e29719bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1bffc0f90b4d5c745f8e48aae0c91e2b88c72a94238be7df1d62b6e29719bd->enter($__internal_ea1bffc0f90b4d5c745f8e48aae0c91e2b88c72a94238be7df1d62b6e29719bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea1bffc0f90b4d5c745f8e48aae0c91e2b88c72a94238be7df1d62b6e29719bd->leave($__internal_ea1bffc0f90b4d5c745f8e48aae0c91e2b88c72a94238be7df1d62b6e29719bd_prof);

        
        $__internal_73e1c58e465cb0e1e2894d23b304c2ef5b2c58b140398fa0fd44e4e92b3ff9e5->leave($__internal_73e1c58e465cb0e1e2894d23b304c2ef5b2c58b140398fa0fd44e4e92b3ff9e5_prof);

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
