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
        $__internal_b9330b5bf5819973bd7e826821a6b66d9dc4836609a7643e6db05a87023e8a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9330b5bf5819973bd7e826821a6b66d9dc4836609a7643e6db05a87023e8a20->enter($__internal_b9330b5bf5819973bd7e826821a6b66d9dc4836609a7643e6db05a87023e8a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_a8acb56ed8c5f5c75a89c13e5e26c74776c7b65b4913836e0ea8c48d86c5348b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8acb56ed8c5f5c75a89c13e5e26c74776c7b65b4913836e0ea8c48d86c5348b->enter($__internal_a8acb56ed8c5f5c75a89c13e5e26c74776c7b65b4913836e0ea8c48d86c5348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_b9330b5bf5819973bd7e826821a6b66d9dc4836609a7643e6db05a87023e8a20->leave($__internal_b9330b5bf5819973bd7e826821a6b66d9dc4836609a7643e6db05a87023e8a20_prof);

        
        $__internal_a8acb56ed8c5f5c75a89c13e5e26c74776c7b65b4913836e0ea8c48d86c5348b->leave($__internal_a8acb56ed8c5f5c75a89c13e5e26c74776c7b65b4913836e0ea8c48d86c5348b_prof);

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
