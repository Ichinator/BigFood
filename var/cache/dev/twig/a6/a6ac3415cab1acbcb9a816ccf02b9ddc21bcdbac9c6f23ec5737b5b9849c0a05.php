<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_11fd57251128d183709b7fc2a99255515561e759218f8d50d4672a36c84e1a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61afea4fdf2b6415feeb1d1d15efccfd0439b8b8020da7f6fd3a54e92fc75807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61afea4fdf2b6415feeb1d1d15efccfd0439b8b8020da7f6fd3a54e92fc75807->enter($__internal_61afea4fdf2b6415feeb1d1d15efccfd0439b8b8020da7f6fd3a54e92fc75807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d999bb1d64afb86522ba4595cafc6218226f824290928403aecb287d9e01eb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d999bb1d64afb86522ba4595cafc6218226f824290928403aecb287d9e01eb57->enter($__internal_d999bb1d64afb86522ba4595cafc6218226f824290928403aecb287d9e01eb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61afea4fdf2b6415feeb1d1d15efccfd0439b8b8020da7f6fd3a54e92fc75807->leave($__internal_61afea4fdf2b6415feeb1d1d15efccfd0439b8b8020da7f6fd3a54e92fc75807_prof);

        
        $__internal_d999bb1d64afb86522ba4595cafc6218226f824290928403aecb287d9e01eb57->leave($__internal_d999bb1d64afb86522ba4595cafc6218226f824290928403aecb287d9e01eb57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ecb3323afd31f2dc8f3b349ae777648b3def924feadcb734e2fee146eb59902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecb3323afd31f2dc8f3b349ae777648b3def924feadcb734e2fee146eb59902->enter($__internal_1ecb3323afd31f2dc8f3b349ae777648b3def924feadcb734e2fee146eb59902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a33202ebaf3bb055c6728d233a6925dee333e17c6ca5373d5cc88098224a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a33202ebaf3bb055c6728d233a6925dee333e17c6ca5373d5cc88098224a325->enter($__internal_3a33202ebaf3bb055c6728d233a6925dee333e17c6ca5373d5cc88098224a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3a33202ebaf3bb055c6728d233a6925dee333e17c6ca5373d5cc88098224a325->leave($__internal_3a33202ebaf3bb055c6728d233a6925dee333e17c6ca5373d5cc88098224a325_prof);

        
        $__internal_1ecb3323afd31f2dc8f3b349ae777648b3def924feadcb734e2fee146eb59902->leave($__internal_1ecb3323afd31f2dc8f3b349ae777648b3def924feadcb734e2fee146eb59902_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_df43945816155f9245415fb0c9fd19723270df91c2045aa5a2e358de92854aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df43945816155f9245415fb0c9fd19723270df91c2045aa5a2e358de92854aea->enter($__internal_df43945816155f9245415fb0c9fd19723270df91c2045aa5a2e358de92854aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6387541d4f1348ff3fc0f9278b4d26340ad56492dd63c7ceced611e3ff19d365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6387541d4f1348ff3fc0f9278b4d26340ad56492dd63c7ceced611e3ff19d365->enter($__internal_6387541d4f1348ff3fc0f9278b4d26340ad56492dd63c7ceced611e3ff19d365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6387541d4f1348ff3fc0f9278b4d26340ad56492dd63c7ceced611e3ff19d365->leave($__internal_6387541d4f1348ff3fc0f9278b4d26340ad56492dd63c7ceced611e3ff19d365_prof);

        
        $__internal_df43945816155f9245415fb0c9fd19723270df91c2045aa5a2e358de92854aea->leave($__internal_df43945816155f9245415fb0c9fd19723270df91c2045aa5a2e358de92854aea_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ebf6575dbe4661bccec9b283aa72ee92602fb40599f4ad9bae806ec5d3b7310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebf6575dbe4661bccec9b283aa72ee92602fb40599f4ad9bae806ec5d3b7310->enter($__internal_2ebf6575dbe4661bccec9b283aa72ee92602fb40599f4ad9bae806ec5d3b7310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83047bc3d81da245a3abb2969e8646f9dfd1d2e2b1d36ec74c06a9f94ce7548f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83047bc3d81da245a3abb2969e8646f9dfd1d2e2b1d36ec74c06a9f94ce7548f->enter($__internal_83047bc3d81da245a3abb2969e8646f9dfd1d2e2b1d36ec74c06a9f94ce7548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_83047bc3d81da245a3abb2969e8646f9dfd1d2e2b1d36ec74c06a9f94ce7548f->leave($__internal_83047bc3d81da245a3abb2969e8646f9dfd1d2e2b1d36ec74c06a9f94ce7548f_prof);

        
        $__internal_2ebf6575dbe4661bccec9b283aa72ee92602fb40599f4ad9bae806ec5d3b7310->leave($__internal_2ebf6575dbe4661bccec9b283aa72ee92602fb40599f4ad9bae806ec5d3b7310_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
