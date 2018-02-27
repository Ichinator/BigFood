<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_37651f15fd01554cf49d98d00b60242a3f8d82d2a76de666ac3f65f0647d9ed9 extends Twig_Template
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
        $__internal_76d3999a102d5b8259d133480336b7503dca9ac24b4902de260fb4ad004440d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d3999a102d5b8259d133480336b7503dca9ac24b4902de260fb4ad004440d1->enter($__internal_76d3999a102d5b8259d133480336b7503dca9ac24b4902de260fb4ad004440d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_84434a96d7c69f8869ee0442198090ad5b5a2ac95af2142e03bba948cd9d600d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84434a96d7c69f8869ee0442198090ad5b5a2ac95af2142e03bba948cd9d600d->enter($__internal_84434a96d7c69f8869ee0442198090ad5b5a2ac95af2142e03bba948cd9d600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_76d3999a102d5b8259d133480336b7503dca9ac24b4902de260fb4ad004440d1->leave($__internal_76d3999a102d5b8259d133480336b7503dca9ac24b4902de260fb4ad004440d1_prof);

        
        $__internal_84434a96d7c69f8869ee0442198090ad5b5a2ac95af2142e03bba948cd9d600d->leave($__internal_84434a96d7c69f8869ee0442198090ad5b5a2ac95af2142e03bba948cd9d600d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
