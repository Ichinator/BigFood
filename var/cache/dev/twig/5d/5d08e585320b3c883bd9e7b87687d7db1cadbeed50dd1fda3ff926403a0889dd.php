<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_5cf5fefc41c6eaf6ee47aa6d085af102f345b7a7c46468316d699f4c55841905 extends Twig_Template
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
        $__internal_7f317c48aeb882d4b8a179161228bb1d22384713ab2184ba8a34d0ccfad9855a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f317c48aeb882d4b8a179161228bb1d22384713ab2184ba8a34d0ccfad9855a->enter($__internal_7f317c48aeb882d4b8a179161228bb1d22384713ab2184ba8a34d0ccfad9855a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_58942644c7abe8d482d8c1f2022b2823e3de03a87b9b23d31a4c2128ed7c892b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58942644c7abe8d482d8c1f2022b2823e3de03a87b9b23d31a4c2128ed7c892b->enter($__internal_58942644c7abe8d482d8c1f2022b2823e3de03a87b9b23d31a4c2128ed7c892b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_7f317c48aeb882d4b8a179161228bb1d22384713ab2184ba8a34d0ccfad9855a->leave($__internal_7f317c48aeb882d4b8a179161228bb1d22384713ab2184ba8a34d0ccfad9855a_prof);

        
        $__internal_58942644c7abe8d482d8c1f2022b2823e3de03a87b9b23d31a4c2128ed7c892b->leave($__internal_58942644c7abe8d482d8c1f2022b2823e3de03a87b9b23d31a4c2128ed7c892b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
