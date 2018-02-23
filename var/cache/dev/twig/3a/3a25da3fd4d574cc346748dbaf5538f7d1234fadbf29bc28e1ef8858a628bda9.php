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
        $__internal_07f194fd1093652d1a9f444d8400a9fd3b08b8082bcc1f27715382cc40413c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f194fd1093652d1a9f444d8400a9fd3b08b8082bcc1f27715382cc40413c59->enter($__internal_07f194fd1093652d1a9f444d8400a9fd3b08b8082bcc1f27715382cc40413c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_33cb541282654f5c3142220ce9de1f53856108edcf431b2ebfdf0c83f7e14d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cb541282654f5c3142220ce9de1f53856108edcf431b2ebfdf0c83f7e14d40->enter($__internal_33cb541282654f5c3142220ce9de1f53856108edcf431b2ebfdf0c83f7e14d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_07f194fd1093652d1a9f444d8400a9fd3b08b8082bcc1f27715382cc40413c59->leave($__internal_07f194fd1093652d1a9f444d8400a9fd3b08b8082bcc1f27715382cc40413c59_prof);

        
        $__internal_33cb541282654f5c3142220ce9de1f53856108edcf431b2ebfdf0c83f7e14d40->leave($__internal_33cb541282654f5c3142220ce9de1f53856108edcf431b2ebfdf0c83f7e14d40_prof);

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
