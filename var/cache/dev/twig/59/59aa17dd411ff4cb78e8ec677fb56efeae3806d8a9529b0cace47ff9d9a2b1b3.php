<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_1283fb16300890cd40f55a35cad9e2897a754c77560c8bf66aaf03ec69323399 extends Twig_Template
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
        $__internal_3849d34a61b51db2acfb20c040033b1763f8b3e713e31c85ee156170065c4be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3849d34a61b51db2acfb20c040033b1763f8b3e713e31c85ee156170065c4be3->enter($__internal_3849d34a61b51db2acfb20c040033b1763f8b3e713e31c85ee156170065c4be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_72e64fde7932f272a2298cbf59e236bdc009f78b90747fe63fcc2fb1b9bb0925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e64fde7932f272a2298cbf59e236bdc009f78b90747fe63fcc2fb1b9bb0925->enter($__internal_72e64fde7932f272a2298cbf59e236bdc009f78b90747fe63fcc2fb1b9bb0925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_3849d34a61b51db2acfb20c040033b1763f8b3e713e31c85ee156170065c4be3->leave($__internal_3849d34a61b51db2acfb20c040033b1763f8b3e713e31c85ee156170065c4be3_prof);

        
        $__internal_72e64fde7932f272a2298cbf59e236bdc009f78b90747fe63fcc2fb1b9bb0925->leave($__internal_72e64fde7932f272a2298cbf59e236bdc009f78b90747fe63fcc2fb1b9bb0925_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_date.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
