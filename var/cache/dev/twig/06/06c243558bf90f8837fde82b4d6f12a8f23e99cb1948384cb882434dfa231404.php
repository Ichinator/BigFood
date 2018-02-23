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
        $__internal_5c2e0c58f95b0ff31a34751371d1dd80170e8981be3f6f6b34a42599ba1c72d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2e0c58f95b0ff31a34751371d1dd80170e8981be3f6f6b34a42599ba1c72d9->enter($__internal_5c2e0c58f95b0ff31a34751371d1dd80170e8981be3f6f6b34a42599ba1c72d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

        $__internal_d04de767f9d2621611bd627f6d9ec60026dbdf5fd484b0b89bd7152c5921bc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04de767f9d2621611bd627f6d9ec60026dbdf5fd484b0b89bd7152c5921bc79->enter($__internal_d04de767f9d2621611bd627f6d9ec60026dbdf5fd484b0b89bd7152c5921bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

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
        
        $__internal_5c2e0c58f95b0ff31a34751371d1dd80170e8981be3f6f6b34a42599ba1c72d9->leave($__internal_5c2e0c58f95b0ff31a34751371d1dd80170e8981be3f6f6b34a42599ba1c72d9_prof);

        
        $__internal_d04de767f9d2621611bd627f6d9ec60026dbdf5fd484b0b89bd7152c5921bc79->leave($__internal_d04de767f9d2621611bd627f6d9ec60026dbdf5fd484b0b89bd7152c5921bc79_prof);

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
