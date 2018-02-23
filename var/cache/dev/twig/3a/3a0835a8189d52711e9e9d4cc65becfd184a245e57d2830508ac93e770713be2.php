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
        $__internal_ae6c1f40386c04a0bfa4dcf38cb744329b998fdb24cf4c58a1ad8fbd06ecc4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6c1f40386c04a0bfa4dcf38cb744329b998fdb24cf4c58a1ad8fbd06ecc4bc->enter($__internal_ae6c1f40386c04a0bfa4dcf38cb744329b998fdb24cf4c58a1ad8fbd06ecc4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_90138b8597ac0c28048239e27095754844f364a7ae15eaac43fa7634c7c2f17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90138b8597ac0c28048239e27095754844f364a7ae15eaac43fa7634c7c2f17b->enter($__internal_90138b8597ac0c28048239e27095754844f364a7ae15eaac43fa7634c7c2f17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae6c1f40386c04a0bfa4dcf38cb744329b998fdb24cf4c58a1ad8fbd06ecc4bc->leave($__internal_ae6c1f40386c04a0bfa4dcf38cb744329b998fdb24cf4c58a1ad8fbd06ecc4bc_prof);

        
        $__internal_90138b8597ac0c28048239e27095754844f364a7ae15eaac43fa7634c7c2f17b->leave($__internal_90138b8597ac0c28048239e27095754844f364a7ae15eaac43fa7634c7c2f17b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eae8048f63de595cacb8da349dc13b1535810fbb09fc3707c19d7e1675adc8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae8048f63de595cacb8da349dc13b1535810fbb09fc3707c19d7e1675adc8a2->enter($__internal_eae8048f63de595cacb8da349dc13b1535810fbb09fc3707c19d7e1675adc8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acf6c4c7b54c5842623d27fa97996c40a7f4f52288ce619eddb736ee092bc607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf6c4c7b54c5842623d27fa97996c40a7f4f52288ce619eddb736ee092bc607->enter($__internal_acf6c4c7b54c5842623d27fa97996c40a7f4f52288ce619eddb736ee092bc607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acf6c4c7b54c5842623d27fa97996c40a7f4f52288ce619eddb736ee092bc607->leave($__internal_acf6c4c7b54c5842623d27fa97996c40a7f4f52288ce619eddb736ee092bc607_prof);

        
        $__internal_eae8048f63de595cacb8da349dc13b1535810fbb09fc3707c19d7e1675adc8a2->leave($__internal_eae8048f63de595cacb8da349dc13b1535810fbb09fc3707c19d7e1675adc8a2_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ae1bfdf5984a27039fc3c81c21e711cb5a9fbeec0343229a4668a40840e6dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae1bfdf5984a27039fc3c81c21e711cb5a9fbeec0343229a4668a40840e6dd9->enter($__internal_1ae1bfdf5984a27039fc3c81c21e711cb5a9fbeec0343229a4668a40840e6dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_820d743a1bc13a38db6cef80a4fd826eaa77a11d317b4fd42088ddbf3773a9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820d743a1bc13a38db6cef80a4fd826eaa77a11d317b4fd42088ddbf3773a9b1->enter($__internal_820d743a1bc13a38db6cef80a4fd826eaa77a11d317b4fd42088ddbf3773a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_820d743a1bc13a38db6cef80a4fd826eaa77a11d317b4fd42088ddbf3773a9b1->leave($__internal_820d743a1bc13a38db6cef80a4fd826eaa77a11d317b4fd42088ddbf3773a9b1_prof);

        
        $__internal_1ae1bfdf5984a27039fc3c81c21e711cb5a9fbeec0343229a4668a40840e6dd9->leave($__internal_1ae1bfdf5984a27039fc3c81c21e711cb5a9fbeec0343229a4668a40840e6dd9_prof);

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
