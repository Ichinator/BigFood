<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_d0c4b7690bc0d28b7a0cf8e7f73f9e0797aa98654159f6fd3c733579f55074f4 extends Twig_Template
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
        $__internal_855813623b28151d6ce6c9b18ed8b9eebba992c7ff668c43582ff595e16c421b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855813623b28151d6ce6c9b18ed8b9eebba992c7ff668c43582ff595e16c421b->enter($__internal_855813623b28151d6ce6c9b18ed8b9eebba992c7ff668c43582ff595e16c421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_4f912af205e17e0ed1f52d95e7745b501468e2b85c312d5115e82ed018bbf49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f912af205e17e0ed1f52d95e7745b501468e2b85c312d5115e82ed018bbf49c->enter($__internal_4f912af205e17e0ed1f52d95e7745b501468e2b85c312d5115e82ed018bbf49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_855813623b28151d6ce6c9b18ed8b9eebba992c7ff668c43582ff595e16c421b->leave($__internal_855813623b28151d6ce6c9b18ed8b9eebba992c7ff668c43582ff595e16c421b_prof);

        
        $__internal_4f912af205e17e0ed1f52d95e7745b501468e2b85c312d5115e82ed018bbf49c->leave($__internal_4f912af205e17e0ed1f52d95e7745b501468e2b85c312d5115e82ed018bbf49c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
