<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_ded361a32bb6fad4a6ab9eb359e4a0df1baf47be9646511da06ef7ecda7df17e extends Twig_Template
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
        $__internal_2969840b069f71786c7e5d90d85774a7fd6aef2772eeb24338bf019fe47c8860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2969840b069f71786c7e5d90d85774a7fd6aef2772eeb24338bf019fe47c8860->enter($__internal_2969840b069f71786c7e5d90d85774a7fd6aef2772eeb24338bf019fe47c8860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_52f9d952d0cc500003c83580dcc2466c56317401f7282d936f9aba9ec70219c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f9d952d0cc500003c83580dcc2466c56317401f7282d936f9aba9ec70219c5->enter($__internal_52f9d952d0cc500003c83580dcc2466c56317401f7282d936f9aba9ec70219c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_2969840b069f71786c7e5d90d85774a7fd6aef2772eeb24338bf019fe47c8860->leave($__internal_2969840b069f71786c7e5d90d85774a7fd6aef2772eeb24338bf019fe47c8860_prof);

        
        $__internal_52f9d952d0cc500003c83580dcc2466c56317401f7282d936f9aba9ec70219c5->leave($__internal_52f9d952d0cc500003c83580dcc2466c56317401f7282d936f9aba9ec70219c5_prof);

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
