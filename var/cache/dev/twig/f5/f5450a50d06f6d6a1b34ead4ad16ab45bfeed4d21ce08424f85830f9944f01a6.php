<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_c8c20e4dff4f2baf0c5be6b742d8d0997707b0d4f5f010d93cad88601ace34a0 extends Twig_Template
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
        $__internal_beb98a61689ac641abe11ff27b2ce1ef40bc0ff27015bc72976ed52a8b3d7047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb98a61689ac641abe11ff27b2ce1ef40bc0ff27015bc72976ed52a8b3d7047->enter($__internal_beb98a61689ac641abe11ff27b2ce1ef40bc0ff27015bc72976ed52a8b3d7047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_bc790fb49405d2ea9691cba4f8e886e7adf1f0e0de6e9f7cd4a5743be123a6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc790fb49405d2ea9691cba4f8e886e7adf1f0e0de6e9f7cd4a5743be123a6c4->enter($__internal_bc790fb49405d2ea9691cba4f8e886e7adf1f0e0de6e9f7cd4a5743be123a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_beb98a61689ac641abe11ff27b2ce1ef40bc0ff27015bc72976ed52a8b3d7047->leave($__internal_beb98a61689ac641abe11ff27b2ce1ef40bc0ff27015bc72976ed52a8b3d7047_prof);

        
        $__internal_bc790fb49405d2ea9691cba4f8e886e7adf1f0e0de6e9f7cd4a5743be123a6c4->leave($__internal_bc790fb49405d2ea9691cba4f8e886e7adf1f0e0de6e9f7cd4a5743be123a6c4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_float.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
