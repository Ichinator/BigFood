<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6d92038ffdadf9613118affdef254a472dc596981820f453d65d5693e1e16142 extends Twig_Template
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
        $__internal_1283892c196a76da9a81713238b246c1c20f5d7c658cfbacc06d3a7b86c74003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1283892c196a76da9a81713238b246c1c20f5d7c658cfbacc06d3a7b86c74003->enter($__internal_1283892c196a76da9a81713238b246c1c20f5d7c658cfbacc06d3a7b86c74003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_db6c0921f04a90886057d6c256f59b53bc5fb9278f316479eba77f57f6eef57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6c0921f04a90886057d6c256f59b53bc5fb9278f316479eba77f57f6eef57e->enter($__internal_db6c0921f04a90886057d6c256f59b53bc5fb9278f316479eba77f57f6eef57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1283892c196a76da9a81713238b246c1c20f5d7c658cfbacc06d3a7b86c74003->leave($__internal_1283892c196a76da9a81713238b246c1c20f5d7c658cfbacc06d3a7b86c74003_prof);

        
        $__internal_db6c0921f04a90886057d6c256f59b53bc5fb9278f316479eba77f57f6eef57e->leave($__internal_db6c0921f04a90886057d6c256f59b53bc5fb9278f316479eba77f57f6eef57e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5b144fb735282c33bf4516b1221e554503e0c713f8a772546223958efe4d8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b144fb735282c33bf4516b1221e554503e0c713f8a772546223958efe4d8a7->enter($__internal_d5b144fb735282c33bf4516b1221e554503e0c713f8a772546223958efe4d8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca52b5f6ffbb09263ed16c58323af9c66e90648de00f461abf8dd867a2d94114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca52b5f6ffbb09263ed16c58323af9c66e90648de00f461abf8dd867a2d94114->enter($__internal_ca52b5f6ffbb09263ed16c58323af9c66e90648de00f461abf8dd867a2d94114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ca52b5f6ffbb09263ed16c58323af9c66e90648de00f461abf8dd867a2d94114->leave($__internal_ca52b5f6ffbb09263ed16c58323af9c66e90648de00f461abf8dd867a2d94114_prof);

        
        $__internal_d5b144fb735282c33bf4516b1221e554503e0c713f8a772546223958efe4d8a7->leave($__internal_d5b144fb735282c33bf4516b1221e554503e0c713f8a772546223958efe4d8a7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b7a04504eec7d4ebdfa4cbc9df836ad526db78d1300f4f245129c0a92e7af1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7a04504eec7d4ebdfa4cbc9df836ad526db78d1300f4f245129c0a92e7af1b->enter($__internal_1b7a04504eec7d4ebdfa4cbc9df836ad526db78d1300f4f245129c0a92e7af1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2283da4d43a49172e23659b8e1483b59ad6ee9f07547c48340560a443f334e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2283da4d43a49172e23659b8e1483b59ad6ee9f07547c48340560a443f334e2c->enter($__internal_2283da4d43a49172e23659b8e1483b59ad6ee9f07547c48340560a443f334e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2283da4d43a49172e23659b8e1483b59ad6ee9f07547c48340560a443f334e2c->leave($__internal_2283da4d43a49172e23659b8e1483b59ad6ee9f07547c48340560a443f334e2c_prof);

        
        $__internal_1b7a04504eec7d4ebdfa4cbc9df836ad526db78d1300f4f245129c0a92e7af1b->leave($__internal_1b7a04504eec7d4ebdfa4cbc9df836ad526db78d1300f4f245129c0a92e7af1b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf41c5a23e04e70ece8d81185c834d5596f47f9ac15ec6cc83551c9264d1b9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf41c5a23e04e70ece8d81185c834d5596f47f9ac15ec6cc83551c9264d1b9ff->enter($__internal_bf41c5a23e04e70ece8d81185c834d5596f47f9ac15ec6cc83551c9264d1b9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc40ca3f710939e723490cce00e2fecb0246cd718e034ea90ab3e010dd290ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc40ca3f710939e723490cce00e2fecb0246cd718e034ea90ab3e010dd290ea5->enter($__internal_cc40ca3f710939e723490cce00e2fecb0246cd718e034ea90ab3e010dd290ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_cc40ca3f710939e723490cce00e2fecb0246cd718e034ea90ab3e010dd290ea5->leave($__internal_cc40ca3f710939e723490cce00e2fecb0246cd718e034ea90ab3e010dd290ea5_prof);

        
        $__internal_bf41c5a23e04e70ece8d81185c834d5596f47f9ac15ec6cc83551c9264d1b9ff->leave($__internal_bf41c5a23e04e70ece8d81185c834d5596f47f9ac15ec6cc83551c9264d1b9ff_prof);

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
