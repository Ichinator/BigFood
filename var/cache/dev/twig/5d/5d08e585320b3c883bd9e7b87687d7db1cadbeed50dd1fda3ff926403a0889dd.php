<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_5cf5fefc41c6eaf6ee47aa6d085af102f345b7a7c46468316d699f4c55841905 extends Twig_Template
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
        $__internal_166a444cd063428dd4b473f16c6076aa077e3d14fdf88e428a3b068e448c60ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166a444cd063428dd4b473f16c6076aa077e3d14fdf88e428a3b068e448c60ec->enter($__internal_166a444cd063428dd4b473f16c6076aa077e3d14fdf88e428a3b068e448c60ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_59c368d084642d361d6b4483e727f77136e48de0988a653b71d7a832ee7a9515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c368d084642d361d6b4483e727f77136e48de0988a653b71d7a832ee7a9515->enter($__internal_59c368d084642d361d6b4483e727f77136e48de0988a653b71d7a832ee7a9515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_166a444cd063428dd4b473f16c6076aa077e3d14fdf88e428a3b068e448c60ec->leave($__internal_166a444cd063428dd4b473f16c6076aa077e3d14fdf88e428a3b068e448c60ec_prof);

        
        $__internal_59c368d084642d361d6b4483e727f77136e48de0988a653b71d7a832ee7a9515->leave($__internal_59c368d084642d361d6b4483e727f77136e48de0988a653b71d7a832ee7a9515_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
