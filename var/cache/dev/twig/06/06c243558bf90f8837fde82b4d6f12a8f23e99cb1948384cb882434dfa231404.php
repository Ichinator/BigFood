<?php

/* KMSFroalaEditorBundle:Form:value.html.twig */
class __TwigTemplate_66fa68331c403b855293ab51f19c769ad9aa0a195ec0133de65145f08cbdd666 extends Twig_Template
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
        $__internal_7d3d253111435b69ea03b9cbed2d7ae3b325e7f46c1e9d560cc26792b4ccb378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3d253111435b69ea03b9cbed2d7ae3b325e7f46c1e9d560cc26792b4ccb378->enter($__internal_7d3d253111435b69ea03b9cbed2d7ae3b325e7f46c1e9d560cc26792b4ccb378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

        $__internal_40523d78b17bc83771f2fefca4b43fa42507a4ce8c7e7400aca906079990a317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40523d78b17bc83771f2fefca4b43fa42507a4ce8c7e7400aca906079990a317->enter($__internal_40523d78b17bc83771f2fefca4b43fa42507a4ce8c7e7400aca906079990a317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

        // line 1
        if (twig_test_iterable(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "JSON.parse( \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_jsonencode_filter(($context["value"] ?? $this->getContext($context, "value"))), "js"), "html", null, true);
            echo "\" ),
";
        } elseif ((        // line 2
($context["value"] ?? $this->getContext($context, "value")) === true)) {
            echo "true,
";
        } elseif ((        // line 3
($context["value"] ?? $this->getContext($context, "value")) === false)) {
            echo "false,
";
        } elseif (preg_match("/^\\d+\$/",         // line 4
($context["value"] ?? $this->getContext($context, "value")))) {
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo ",
";
        } else {
            // line 5
            echo "\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\",
";
        }
        
        $__internal_7d3d253111435b69ea03b9cbed2d7ae3b325e7f46c1e9d560cc26792b4ccb378->leave($__internal_7d3d253111435b69ea03b9cbed2d7ae3b325e7f46c1e9d560cc26792b4ccb378_prof);

        
        $__internal_40523d78b17bc83771f2fefca4b43fa42507a4ce8c7e7400aca906079990a317->leave($__internal_40523d78b17bc83771f2fefca4b43fa42507a4ce8c7e7400aca906079990a317_prof);

    }

    public function getTemplateName()
    {
        return "KMSFroalaEditorBundle:Form:value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 4,  35 => 3,  31 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if value is iterable %}JSON.parse( \"{{ value | json_encode | raw | escape('js')  }}\" ),
{% elseif value is same as(true) %}true,
{% elseif value is same as(false) %}false,
{% elseif value matches '/^\\\\d+\$/' %}{{ value }},
{% else %}\"{{ value }}\",
{% endif %}", "KMSFroalaEditorBundle:Form:value.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/kms/froala-editor-bundle/Resources/views/Form/value.html.twig");
    }
}
