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
        $__internal_e85a84fe1affec52a25e935698734ad4a37b3f73f3b9fcabf3af44375a4a3c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85a84fe1affec52a25e935698734ad4a37b3f73f3b9fcabf3af44375a4a3c9b->enter($__internal_e85a84fe1affec52a25e935698734ad4a37b3f73f3b9fcabf3af44375a4a3c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_a3580c46250c3ed405dbc0759c296530c6ae306ce8609b48cb9152c743775f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3580c46250c3ed405dbc0759c296530c6ae306ce8609b48cb9152c743775f60->enter($__internal_a3580c46250c3ed405dbc0759c296530c6ae306ce8609b48cb9152c743775f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_e85a84fe1affec52a25e935698734ad4a37b3f73f3b9fcabf3af44375a4a3c9b->leave($__internal_e85a84fe1affec52a25e935698734ad4a37b3f73f3b9fcabf3af44375a4a3c9b_prof);

        
        $__internal_a3580c46250c3ed405dbc0759c296530c6ae306ce8609b48cb9152c743775f60->leave($__internal_a3580c46250c3ed405dbc0759c296530c6ae306ce8609b48cb9152c743775f60_prof);

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
