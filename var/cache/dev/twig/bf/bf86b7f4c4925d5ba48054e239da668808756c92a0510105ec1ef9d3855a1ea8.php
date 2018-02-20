<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8cd2cbf91131fd103168f4c5cec654f27a87f0e39cec3faf55dbe8dc902574b5 extends Twig_Template
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
        $__internal_96a53f5fa22a1cd59449d9c995bbb1b64d3b9760ba5eb2f57b6cd1cb9463f491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a53f5fa22a1cd59449d9c995bbb1b64d3b9760ba5eb2f57b6cd1cb9463f491->enter($__internal_96a53f5fa22a1cd59449d9c995bbb1b64d3b9760ba5eb2f57b6cd1cb9463f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_232358f35687dbfa52b64ba554b836c237213f7485d59ec484d0ff4674b67826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232358f35687dbfa52b64ba554b836c237213f7485d59ec484d0ff4674b67826->enter($__internal_232358f35687dbfa52b64ba554b836c237213f7485d59ec484d0ff4674b67826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a53f5fa22a1cd59449d9c995bbb1b64d3b9760ba5eb2f57b6cd1cb9463f491->leave($__internal_96a53f5fa22a1cd59449d9c995bbb1b64d3b9760ba5eb2f57b6cd1cb9463f491_prof);

        
        $__internal_232358f35687dbfa52b64ba554b836c237213f7485d59ec484d0ff4674b67826->leave($__internal_232358f35687dbfa52b64ba554b836c237213f7485d59ec484d0ff4674b67826_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f69db9dbf801b1f55e01bdcb7966aeaf36cda7e7f91e9c73cf7e5d69ca5e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f69db9dbf801b1f55e01bdcb7966aeaf36cda7e7f91e9c73cf7e5d69ca5e22->enter($__internal_36f69db9dbf801b1f55e01bdcb7966aeaf36cda7e7f91e9c73cf7e5d69ca5e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1753d32b0840b1a964f241c8f091e78e6d3f6e6a2cb7e077d30a090d50c0b1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1753d32b0840b1a964f241c8f091e78e6d3f6e6a2cb7e077d30a090d50c0b1f5->enter($__internal_1753d32b0840b1a964f241c8f091e78e6d3f6e6a2cb7e077d30a090d50c0b1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1753d32b0840b1a964f241c8f091e78e6d3f6e6a2cb7e077d30a090d50c0b1f5->leave($__internal_1753d32b0840b1a964f241c8f091e78e6d3f6e6a2cb7e077d30a090d50c0b1f5_prof);

        
        $__internal_36f69db9dbf801b1f55e01bdcb7966aeaf36cda7e7f91e9c73cf7e5d69ca5e22->leave($__internal_36f69db9dbf801b1f55e01bdcb7966aeaf36cda7e7f91e9c73cf7e5d69ca5e22_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_465c5b57296168a7db115c3c44e027d050baa9dd1865a985dc3b798124bf2b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465c5b57296168a7db115c3c44e027d050baa9dd1865a985dc3b798124bf2b64->enter($__internal_465c5b57296168a7db115c3c44e027d050baa9dd1865a985dc3b798124bf2b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e3f9f0f41d30e1a6119d3b19b746b1ba5910e9d264ca8fd9e4cb85d13cf4087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3f9f0f41d30e1a6119d3b19b746b1ba5910e9d264ca8fd9e4cb85d13cf4087->enter($__internal_8e3f9f0f41d30e1a6119d3b19b746b1ba5910e9d264ca8fd9e4cb85d13cf4087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_8e3f9f0f41d30e1a6119d3b19b746b1ba5910e9d264ca8fd9e4cb85d13cf4087->leave($__internal_8e3f9f0f41d30e1a6119d3b19b746b1ba5910e9d264ca8fd9e4cb85d13cf4087_prof);

        
        $__internal_465c5b57296168a7db115c3c44e027d050baa9dd1865a985dc3b798124bf2b64->leave($__internal_465c5b57296168a7db115c3c44e027d050baa9dd1865a985dc3b798124bf2b64_prof);

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
