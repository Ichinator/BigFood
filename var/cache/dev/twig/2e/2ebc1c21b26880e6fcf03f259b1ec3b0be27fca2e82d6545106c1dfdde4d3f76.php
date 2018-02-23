<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_5ab4507938e0444721be0badcd808ae4ae3dee585c25c5f16a0190b2e8e7d44e extends Twig_Template
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
        $__internal_f2b4e687d060f7fe12a8d84f8b7f3f57efdc08556154615fd4deb88d12d531bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b4e687d060f7fe12a8d84f8b7f3f57efdc08556154615fd4deb88d12d531bc->enter($__internal_f2b4e687d060f7fe12a8d84f8b7f3f57efdc08556154615fd4deb88d12d531bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_0a39bcca71072820d78d36a59be7f5eda564907339e64d00010ae6c2932ea9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a39bcca71072820d78d36a59be7f5eda564907339e64d00010ae6c2932ea9ba->enter($__internal_0a39bcca71072820d78d36a59be7f5eda564907339e64d00010ae6c2932ea9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_f2b4e687d060f7fe12a8d84f8b7f3f57efdc08556154615fd4deb88d12d531bc->leave($__internal_f2b4e687d060f7fe12a8d84f8b7f3f57efdc08556154615fd4deb88d12d531bc_prof);

        
        $__internal_0a39bcca71072820d78d36a59be7f5eda564907339e64d00010ae6c2932ea9ba->leave($__internal_0a39bcca71072820d78d36a59be7f5eda564907339e64d00010ae6c2932ea9ba_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
