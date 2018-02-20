<?php

/* EasyAdminBundle:default:field_toggle.html.twig */
class __TwigTemplate_b3f5a86c200db4a70de5933563ea3da1bd0ed7cfc9f19d6593d405bef683c948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89184dd816fe8971bed4f7a7a49d5a3f7cd63b7183175657d606c3e616f424a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89184dd816fe8971bed4f7a7a49d5a3f7cd63b7183175657d606c3e616f424a->enter($__internal_a89184dd816fe8971bed4f7a7a49d5a3f7cd63b7183175657d606c3e616f424a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        $__internal_ec1703f0fe71ba34127e4bef57e8b3038ea5b18851479a2352e867b27a9fe291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1703f0fe71ba34127e4bef57e8b3038ea5b18851479a2352e867b27a9fe291->enter($__internal_ec1703f0fe71ba34127e4bef57e8b3038ea5b18851479a2352e867b27a9fe291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((($context["view"] ?? $this->getContext($context, "view")) == "show") || twig_in_filter("edit", $this->getAttribute(($context["backend_config"] ?? $this->getContext($context, "backend_config")), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo (((($context["value"] ?? $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_a89184dd816fe8971bed4f7a7a49d5a3f7cd63b7183175657d606c3e616f424a->leave($__internal_a89184dd816fe8971bed4f7a7a49d5a3f7cd63b7183175657d606c3e616f424a_prof);

        
        $__internal_ec1703f0fe71ba34127e4bef57e8b3038ea5b18851479a2352e867b27a9fe291->leave($__internal_ec1703f0fe71ba34127e4bef57e8b3038ea5b18851479a2352e867b27a9fe291_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "EasyAdminBundle:default:field_toggle.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}
