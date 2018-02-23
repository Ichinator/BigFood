<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_48c1efbe31c264100e9163d5836d043050a61b95c4b56abfd05cee0e44632209 extends Twig_Template
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
        $__internal_a9f479f5a5b8cc504befdf6099f12ec3e5932240eb056caf42a39b550b6d9b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f479f5a5b8cc504befdf6099f12ec3e5932240eb056caf42a39b550b6d9b0c->enter($__internal_a9f479f5a5b8cc504befdf6099f12ec3e5932240eb056caf42a39b550b6d9b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_0754c5bf9246dc15cbc5aefcabc13ac100807901d753bd9c3728ebfe9043004c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0754c5bf9246dc15cbc5aefcabc13ac100807901d753bd9c3728ebfe9043004c->enter($__internal_0754c5bf9246dc15cbc5aefcabc13ac100807901d753bd9c3728ebfe9043004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

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
        
        $__internal_a9f479f5a5b8cc504befdf6099f12ec3e5932240eb056caf42a39b550b6d9b0c->leave($__internal_a9f479f5a5b8cc504befdf6099f12ec3e5932240eb056caf42a39b550b6d9b0c_prof);

        
        $__internal_0754c5bf9246dc15cbc5aefcabc13ac100807901d753bd9c3728ebfe9043004c->leave($__internal_0754c5bf9246dc15cbc5aefcabc13ac100807901d753bd9c3728ebfe9043004c_prof);

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
