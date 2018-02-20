<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_973178d1f8b0c6f4fb6be9d3ae1f88e90e9b50a423518e4b9e4dc14c702ccc3b extends Twig_Template
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
        $__internal_fc4df30d871061cb5629ba6ddcfb2aa4c256a8e7e826e873c39f411c45a22078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4df30d871061cb5629ba6ddcfb2aa4c256a8e7e826e873c39f411c45a22078->enter($__internal_fc4df30d871061cb5629ba6ddcfb2aa4c256a8e7e826e873c39f411c45a22078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_d975989ed2155a6850dcb73553103d3561135ccdd6fbc1587b25c7e139bb493a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d975989ed2155a6850dcb73553103d3561135ccdd6fbc1587b25c7e139bb493a->enter($__internal_d975989ed2155a6850dcb73553103d3561135ccdd6fbc1587b25c7e139bb493a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_fc4df30d871061cb5629ba6ddcfb2aa4c256a8e7e826e873c39f411c45a22078->leave($__internal_fc4df30d871061cb5629ba6ddcfb2aa4c256a8e7e826e873c39f411c45a22078_prof);

        
        $__internal_d975989ed2155a6850dcb73553103d3561135ccdd6fbc1587b25c7e139bb493a->leave($__internal_d975989ed2155a6850dcb73553103d3561135ccdd6fbc1587b25c7e139bb493a_prof);

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
