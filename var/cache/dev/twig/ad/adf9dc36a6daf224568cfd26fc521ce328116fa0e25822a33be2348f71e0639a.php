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
        $__internal_766952fec2a2b15a34361d754ed52060417bc4e1998bb8f20f96ed271d5880bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766952fec2a2b15a34361d754ed52060417bc4e1998bb8f20f96ed271d5880bb->enter($__internal_766952fec2a2b15a34361d754ed52060417bc4e1998bb8f20f96ed271d5880bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneBurger.html.twig"));

        $__internal_a35fd009e0e94f8fde67262078343cd32f11c90d9bf0cef65eba2d75ceb4a299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35fd009e0e94f8fde67262078343cd32f11c90d9bf0cef65eba2d75ceb4a299->enter($__internal_a35fd009e0e94f8fde67262078343cd32f11c90d9bf0cef65eba2d75ceb4a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneBurger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_766952fec2a2b15a34361d754ed52060417bc4e1998bb8f20f96ed271d5880bb->leave($__internal_766952fec2a2b15a34361d754ed52060417bc4e1998bb8f20f96ed271d5880bb_prof);

        
        $__internal_a35fd009e0e94f8fde67262078343cd32f11c90d9bf0cef65eba2d75ceb4a299->leave($__internal_a35fd009e0e94f8fde67262078343cd32f11c90d9bf0cef65eba2d75ceb4a299_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81245f76d8565e1690e257976919236a4dc6090afb542d4ec8ac170cd04a1c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81245f76d8565e1690e257976919236a4dc6090afb542d4ec8ac170cd04a1c17->enter($__internal_81245f76d8565e1690e257976919236a4dc6090afb542d4ec8ac170cd04a1c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90d14e61c0a9b40ccbbd820d083bcb8b194100ed4067d0793bdb545171c59d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d14e61c0a9b40ccbbd820d083bcb8b194100ed4067d0793bdb545171c59d98->enter($__internal_90d14e61c0a9b40ccbbd820d083bcb8b194100ed4067d0793bdb545171c59d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90d14e61c0a9b40ccbbd820d083bcb8b194100ed4067d0793bdb545171c59d98->leave($__internal_90d14e61c0a9b40ccbbd820d083bcb8b194100ed4067d0793bdb545171c59d98_prof);

        
        $__internal_81245f76d8565e1690e257976919236a4dc6090afb542d4ec8ac170cd04a1c17->leave($__internal_81245f76d8565e1690e257976919236a4dc6090afb542d4ec8ac170cd04a1c17_prof);

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


    <div class=\"container-fluid\">
        <div class=\"text-center\">
            <h1>{{ oneBurger.name }}</h1>
            <img src=\"{{ vich_uploader_asset(oneBurger, 'imageFile') }}\" alt=\"{{ oneBurger.image }}\" class=\"center-block\" />
        </div>

        {{ oneBurger.description|raw }}
        {% if app.user %}
            <div class=\"row\">
                <div class=\"col-sm-12\">
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
