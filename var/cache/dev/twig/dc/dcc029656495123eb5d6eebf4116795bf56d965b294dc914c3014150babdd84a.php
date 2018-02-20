<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_dd91a35d35abf75881995f0c4bb683842281d9c64a7f4f7cc114e31ec58bd14d extends Twig_Template
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
        $__internal_83304fc02bfc16b17ec5f2fca931beb130d293f940545071e9f5c5b346ee4447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83304fc02bfc16b17ec5f2fca931beb130d293f940545071e9f5c5b346ee4447->enter($__internal_83304fc02bfc16b17ec5f2fca931beb130d293f940545071e9f5c5b346ee4447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_4f7c67d26e6288da6c1e2e23074f1a2104e46c660c1dfc1942b3e8c89239323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7c67d26e6288da6c1e2e23074f1a2104e46c660c1dfc1942b3e8c89239323c->enter($__internal_4f7c67d26e6288da6c1e2e23074f1a2104e46c660c1dfc1942b3e8c89239323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_83304fc02bfc16b17ec5f2fca931beb130d293f940545071e9f5c5b346ee4447->leave($__internal_83304fc02bfc16b17ec5f2fca931beb130d293f940545071e9f5c5b346ee4447_prof);

        
        $__internal_4f7c67d26e6288da6c1e2e23074f1a2104e46c660c1dfc1942b3e8c89239323c->leave($__internal_4f7c67d26e6288da6c1e2e23074f1a2104e46c660c1dfc1942b3e8c89239323c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
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

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
