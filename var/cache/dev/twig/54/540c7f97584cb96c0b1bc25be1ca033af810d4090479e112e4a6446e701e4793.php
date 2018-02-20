<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_1410211fa3d9bb7e07441adb11febc52a02987b77faa084d321b9c8edfc228e7 extends Twig_Template
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
        $__internal_c6ac4e3948ab243977922b670490bb11e4af4b32a967c0ef9ada03834bb55024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ac4e3948ab243977922b670490bb11e4af4b32a967c0ef9ada03834bb55024->enter($__internal_c6ac4e3948ab243977922b670490bb11e4af4b32a967c0ef9ada03834bb55024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_a778d866b56323bfeaa20d63778592a9edda15d3d24b2866d69bb26f736c0115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a778d866b56323bfeaa20d63778592a9edda15d3d24b2866d69bb26f736c0115->enter($__internal_a778d866b56323bfeaa20d63778592a9edda15d3d24b2866d69bb26f736c0115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_c6ac4e3948ab243977922b670490bb11e4af4b32a967c0ef9ada03834bb55024->leave($__internal_c6ac4e3948ab243977922b670490bb11e4af4b32a967c0ef9ada03834bb55024_prof);

        
        $__internal_a778d866b56323bfeaa20d63778592a9edda15d3d24b2866d69bb26f736c0115->leave($__internal_a778d866b56323bfeaa20d63778592a9edda15d3d24b2866d69bb26f736c0115_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
