<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_5c40bf49052520bc7e90226534622d7126f14b896a5ae89a68410eeaeb0273b7 extends Twig_Template
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
        $__internal_d7b032ad7f66634cf5b38c5b93945ca774e5dcbfc9ce3245b36b94c8062a7b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b032ad7f66634cf5b38c5b93945ca774e5dcbfc9ce3245b36b94c8062a7b76->enter($__internal_d7b032ad7f66634cf5b38c5b93945ca774e5dcbfc9ce3245b36b94c8062a7b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_568a7e46c17e1f9f55a5bd3f9aed7a2153ec86b0ef7bf3650c8f20ffdb4fc862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568a7e46c17e1f9f55a5bd3f9aed7a2153ec86b0ef7bf3650c8f20ffdb4fc862->enter($__internal_568a7e46c17e1f9f55a5bd3f9aed7a2153ec86b0ef7bf3650c8f20ffdb4fc862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_d7b032ad7f66634cf5b38c5b93945ca774e5dcbfc9ce3245b36b94c8062a7b76->leave($__internal_d7b032ad7f66634cf5b38c5b93945ca774e5dcbfc9ce3245b36b94c8062a7b76_prof);

        
        $__internal_568a7e46c17e1f9f55a5bd3f9aed7a2153ec86b0ef7bf3650c8f20ffdb4fc862->leave($__internal_568a7e46c17e1f9f55a5bd3f9aed7a2153ec86b0ef7bf3650c8f20ffdb4fc862_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
