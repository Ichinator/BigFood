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
        $__internal_882cd48fd7c9e293b3162608d2c154540aadb3fde425c67ba3e5ed726b215061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882cd48fd7c9e293b3162608d2c154540aadb3fde425c67ba3e5ed726b215061->enter($__internal_882cd48fd7c9e293b3162608d2c154540aadb3fde425c67ba3e5ed726b215061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_9e1c6774d7b7215b07434ab215dafca065048c5fe46d6d0bed4de08c85bc41cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1c6774d7b7215b07434ab215dafca065048c5fe46d6d0bed4de08c85bc41cb->enter($__internal_9e1c6774d7b7215b07434ab215dafca065048c5fe46d6d0bed4de08c85bc41cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

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
        
        $__internal_882cd48fd7c9e293b3162608d2c154540aadb3fde425c67ba3e5ed726b215061->leave($__internal_882cd48fd7c9e293b3162608d2c154540aadb3fde425c67ba3e5ed726b215061_prof);

        
        $__internal_9e1c6774d7b7215b07434ab215dafca065048c5fe46d6d0bed4de08c85bc41cb->leave($__internal_9e1c6774d7b7215b07434ab215dafca065048c5fe46d6d0bed4de08c85bc41cb_prof);

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
