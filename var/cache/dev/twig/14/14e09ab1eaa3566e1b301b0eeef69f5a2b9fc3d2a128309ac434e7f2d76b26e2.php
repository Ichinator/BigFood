<?php

/* IchinatorCommandBundle:Default:oneDessert.html.twig */
class __TwigTemplate_ebb7286717c67213df8190870cdf69f8f598745d119818d786e5967cfd621705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IchinatorCommandBundle:Default:oneDessert.html.twig", 1);
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
        $__internal_3990365c20be466d7437bcddbe014c6043c1ee3cad945db5e489069980324d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3990365c20be466d7437bcddbe014c6043c1ee3cad945db5e489069980324d95->enter($__internal_3990365c20be466d7437bcddbe014c6043c1ee3cad945db5e489069980324d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneDessert.html.twig"));

        $__internal_8ec90462532e9bd3e1e57ef3a907a62850361ad4f890ed9c15919dc0e97690dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec90462532e9bd3e1e57ef3a907a62850361ad4f890ed9c15919dc0e97690dd->enter($__internal_8ec90462532e9bd3e1e57ef3a907a62850361ad4f890ed9c15919dc0e97690dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:oneDessert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3990365c20be466d7437bcddbe014c6043c1ee3cad945db5e489069980324d95->leave($__internal_3990365c20be466d7437bcddbe014c6043c1ee3cad945db5e489069980324d95_prof);

        
        $__internal_8ec90462532e9bd3e1e57ef3a907a62850361ad4f890ed9c15919dc0e97690dd->leave($__internal_8ec90462532e9bd3e1e57ef3a907a62850361ad4f890ed9c15919dc0e97690dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d4ed996efb48f99236fec4f7c06793975c62efecb2a371db65634f9dfa17011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4ed996efb48f99236fec4f7c06793975c62efecb2a371db65634f9dfa17011->enter($__internal_2d4ed996efb48f99236fec4f7c06793975c62efecb2a371db65634f9dfa17011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df8c98964bd0291b658a122f05af3be992fb638afc0e98047e7e5486e0fc513e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8c98964bd0291b658a122f05af3be992fb638afc0e98047e7e5486e0fc513e->enter($__internal_df8c98964bd0291b658a122f05af3be992fb638afc0e98047e7e5486e0fc513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"text-center\">
            <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "name", array()), "html", null, true);
        echo "</h1>
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "image", array()), "html", null, true);
        echo "\" class=\"center-block\" />
        </div>

        ";
        // line 13
        echo $this->getAttribute(($context["oneDessert"] ?? $this->getContext($context, "oneDessert")), "description", array());
        echo "
        ";
        // line 14
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 15
            echo "            <div class=\"row\">
                <div class=\"col-sm-8\">
                    ";
            // line 17
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                    ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
                    ";
            // line 19
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 23
            echo "            <p>Pour commenter vous devez <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">vous enregistrer</a> ou <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">vous connecter</a></p>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 27
            echo "            <div>
                <p>
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "user", array()), "html", null, true);
            echo " a dit:
                </p>
                ";
            // line 31
            echo $this->getAttribute($context["comments"], "content", array());
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
";
        
        $__internal_df8c98964bd0291b658a122f05af3be992fb638afc0e98047e7e5486e0fc513e->leave($__internal_df8c98964bd0291b658a122f05af3be992fb638afc0e98047e7e5486e0fc513e_prof);

        
        $__internal_2d4ed996efb48f99236fec4f7c06793975c62efecb2a371db65634f9dfa17011->leave($__internal_2d4ed996efb48f99236fec4f7c06793975c62efecb2a371db65634f9dfa17011_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:oneDessert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  120 => 31,  115 => 29,  111 => 27,  107 => 26,  104 => 25,  96 => 23,  89 => 19,  85 => 18,  81 => 17,  77 => 15,  75 => 14,  71 => 13,  63 => 10,  59 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
            <h1>{{ oneDessert.name }}</h1>
            <img src=\"{{ vich_uploader_asset(oneDessert, 'imageFile') }}\" alt=\"{{ oneDessert.image }}\" class=\"center-block\" />
        </div>

        {{ oneDessert.description|raw }}
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
{% endblock %}", "IchinatorCommandBundle:Default:oneDessert.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/oneDessert.html.twig");
    }
}
