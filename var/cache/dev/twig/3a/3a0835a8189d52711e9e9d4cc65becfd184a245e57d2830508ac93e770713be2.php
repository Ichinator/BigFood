<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_de071fd2af70f6ba96d82a296723397ce2eafdc38c905e867d434b359be4dcd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2f1136da7488aef8003b742ccfb078fde507190eadf921de9217330bbb0d590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f1136da7488aef8003b742ccfb078fde507190eadf921de9217330bbb0d590->enter($__internal_d2f1136da7488aef8003b742ccfb078fde507190eadf921de9217330bbb0d590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1cb0f315b52907c40f79d5c061776974a37caf20faa23fc36e8acbb0579fb1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb0f315b52907c40f79d5c061776974a37caf20faa23fc36e8acbb0579fb1ba->enter($__internal_1cb0f315b52907c40f79d5c061776974a37caf20faa23fc36e8acbb0579fb1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f1136da7488aef8003b742ccfb078fde507190eadf921de9217330bbb0d590->leave($__internal_d2f1136da7488aef8003b742ccfb078fde507190eadf921de9217330bbb0d590_prof);

        
        $__internal_1cb0f315b52907c40f79d5c061776974a37caf20faa23fc36e8acbb0579fb1ba->leave($__internal_1cb0f315b52907c40f79d5c061776974a37caf20faa23fc36e8acbb0579fb1ba_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_250d462c5c04888613f5a30c6bae3559b513d5eecaa4b791bb7442f204efd101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250d462c5c04888613f5a30c6bae3559b513d5eecaa4b791bb7442f204efd101->enter($__internal_250d462c5c04888613f5a30c6bae3559b513d5eecaa4b791bb7442f204efd101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb3a88b297ad3ff10f0658218276b7f3c7b5d647be5c0f6e3daf0a4e523c0140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3a88b297ad3ff10f0658218276b7f3c7b5d647be5c0f6e3daf0a4e523c0140->enter($__internal_bb3a88b297ad3ff10f0658218276b7f3c7b5d647be5c0f6e3daf0a4e523c0140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <!--<div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>-->

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
";
        
        $__internal_bb3a88b297ad3ff10f0658218276b7f3c7b5d647be5c0f6e3daf0a4e523c0140->leave($__internal_bb3a88b297ad3ff10f0658218276b7f3c7b5d647be5c0f6e3daf0a4e523c0140_prof);

        
        $__internal_250d462c5c04888613f5a30c6bae3559b513d5eecaa4b791bb7442f204efd101->leave($__internal_250d462c5c04888613f5a30c6bae3559b513d5eecaa4b791bb7442f204efd101_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2308af05da44be77ec4f9447dc8f901055a9bd95416b08f7ba592ea3811bdaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2308af05da44be77ec4f9447dc8f901055a9bd95416b08f7ba592ea3811bdaac->enter($__internal_2308af05da44be77ec4f9447dc8f901055a9bd95416b08f7ba592ea3811bdaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_70a9f618673e81333ce87b73f840128bef2776e97e357583954c7e4520292869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a9f618673e81333ce87b73f840128bef2776e97e357583954c7e4520292869->enter($__internal_70a9f618673e81333ce87b73f840128bef2776e97e357583954c7e4520292869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_70a9f618673e81333ce87b73f840128bef2776e97e357583954c7e4520292869->leave($__internal_70a9f618673e81333ce87b73f840128bef2776e97e357583954c7e4520292869_prof);

        
        $__internal_2308af05da44be77ec4f9447dc8f901055a9bd95416b08f7ba592ea3811bdaac->leave($__internal_2308af05da44be77ec4f9447dc8f901055a9bd95416b08f7ba592ea3811bdaac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 27,  137 => 26,  126 => 28,  124 => 26,  120 => 24,  117 => 23,  111 => 22,  102 => 19,  97 => 18,  92 => 17,  87 => 16,  85 => 15,  81 => 13,  73 => 11,  67 => 8,  63 => 7,  58 => 6,  56 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
        <!--<div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>-->

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
