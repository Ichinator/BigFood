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
        $__internal_0a320c0e7e58429837c14f04b004f253c5f041c3c0c83d5c444bc405cccbf896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a320c0e7e58429837c14f04b004f253c5f041c3c0c83d5c444bc405cccbf896->enter($__internal_0a320c0e7e58429837c14f04b004f253c5f041c3c0c83d5c444bc405cccbf896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_19cda5332b1535de5d258dd08aeb4296489d5d49ddabeb134ad825ab0091cf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cda5332b1535de5d258dd08aeb4296489d5d49ddabeb134ad825ab0091cf06->enter($__internal_19cda5332b1535de5d258dd08aeb4296489d5d49ddabeb134ad825ab0091cf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_0a320c0e7e58429837c14f04b004f253c5f041c3c0c83d5c444bc405cccbf896->leave($__internal_0a320c0e7e58429837c14f04b004f253c5f041c3c0c83d5c444bc405cccbf896_prof);

        
        $__internal_19cda5332b1535de5d258dd08aeb4296489d5d49ddabeb134ad825ab0091cf06->leave($__internal_19cda5332b1535de5d258dd08aeb4296489d5d49ddabeb134ad825ab0091cf06_prof);

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
