<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_6e274afe5a81b85ebfa98f90ee25114286cbe1c2180a37403f867d73df104c82 extends Twig_Template
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
        $__internal_78cd76810c84675958540edb74b9e75551933ae254cf9473c425ac4dfc5fde81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cd76810c84675958540edb74b9e75551933ae254cf9473c425ac4dfc5fde81->enter($__internal_78cd76810c84675958540edb74b9e75551933ae254cf9473c425ac4dfc5fde81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_ab77672fcf63a6dab3e32e2203443b9b20737b7ced1dbcca7e38d78567b9ea4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab77672fcf63a6dab3e32e2203443b9b20737b7ced1dbcca7e38d78567b9ea4b->enter($__internal_ab77672fcf63a6dab3e32e2203443b9b20737b7ced1dbcca7e38d78567b9ea4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_78cd76810c84675958540edb74b9e75551933ae254cf9473c425ac4dfc5fde81->leave($__internal_78cd76810c84675958540edb74b9e75551933ae254cf9473c425ac4dfc5fde81_prof);

        
        $__internal_ab77672fcf63a6dab3e32e2203443b9b20737b7ced1dbcca7e38d78567b9ea4b->leave($__internal_ab77672fcf63a6dab3e32e2203443b9b20737b7ced1dbcca7e38d78567b9ea4b_prof);

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
