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
        $__internal_1458113e551f9ca3810023e662a456b5061610ce780e3fc03c20c6f30be9d9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1458113e551f9ca3810023e662a456b5061610ce780e3fc03c20c6f30be9d9db->enter($__internal_1458113e551f9ca3810023e662a456b5061610ce780e3fc03c20c6f30be9d9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8eb5d3dcf6c3390ccca6f3fd366842765971a51d815759e638a0eab1656207db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb5d3dcf6c3390ccca6f3fd366842765971a51d815759e638a0eab1656207db->enter($__internal_8eb5d3dcf6c3390ccca6f3fd366842765971a51d815759e638a0eab1656207db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1458113e551f9ca3810023e662a456b5061610ce780e3fc03c20c6f30be9d9db->leave($__internal_1458113e551f9ca3810023e662a456b5061610ce780e3fc03c20c6f30be9d9db_prof);

        
        $__internal_8eb5d3dcf6c3390ccca6f3fd366842765971a51d815759e638a0eab1656207db->leave($__internal_8eb5d3dcf6c3390ccca6f3fd366842765971a51d815759e638a0eab1656207db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4c8c9d4afaf59898dc8e1357506c8da438df1828aa8ba83e1f8e54bdd7b6f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c8c9d4afaf59898dc8e1357506c8da438df1828aa8ba83e1f8e54bdd7b6f3d->enter($__internal_e4c8c9d4afaf59898dc8e1357506c8da438df1828aa8ba83e1f8e54bdd7b6f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_312708ab0c7d6645b3bcfad973706617b75d11858077b7df10296c0ff3ec91e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312708ab0c7d6645b3bcfad973706617b75d11858077b7df10296c0ff3ec91e9->enter($__internal_312708ab0c7d6645b3bcfad973706617b75d11858077b7df10296c0ff3ec91e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_312708ab0c7d6645b3bcfad973706617b75d11858077b7df10296c0ff3ec91e9->leave($__internal_312708ab0c7d6645b3bcfad973706617b75d11858077b7df10296c0ff3ec91e9_prof);

        
        $__internal_e4c8c9d4afaf59898dc8e1357506c8da438df1828aa8ba83e1f8e54bdd7b6f3d->leave($__internal_e4c8c9d4afaf59898dc8e1357506c8da438df1828aa8ba83e1f8e54bdd7b6f3d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_28c66d7364c31f8821962658ef120dcf56e299b773cbffd5ddf461b6078ec747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c66d7364c31f8821962658ef120dcf56e299b773cbffd5ddf461b6078ec747->enter($__internal_28c66d7364c31f8821962658ef120dcf56e299b773cbffd5ddf461b6078ec747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66bbe780ef9bf9a384c6217e2ccf2efb34667bdc04e455839111ea8b5acd09ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bbe780ef9bf9a384c6217e2ccf2efb34667bdc04e455839111ea8b5acd09ff->enter($__internal_66bbe780ef9bf9a384c6217e2ccf2efb34667bdc04e455839111ea8b5acd09ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66bbe780ef9bf9a384c6217e2ccf2efb34667bdc04e455839111ea8b5acd09ff->leave($__internal_66bbe780ef9bf9a384c6217e2ccf2efb34667bdc04e455839111ea8b5acd09ff_prof);

        
        $__internal_28c66d7364c31f8821962658ef120dcf56e299b773cbffd5ddf461b6078ec747->leave($__internal_28c66d7364c31f8821962658ef120dcf56e299b773cbffd5ddf461b6078ec747_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b699e1604e82e30b9622f68bd4bc7d9fe4c89ad1f7a1d317705007904dc88b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b699e1604e82e30b9622f68bd4bc7d9fe4c89ad1f7a1d317705007904dc88b0->enter($__internal_9b699e1604e82e30b9622f68bd4bc7d9fe4c89ad1f7a1d317705007904dc88b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b558a44d0b5db9a0743cd0b52d4fddd40391d196fd6cdc6a7640a6947be7fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b558a44d0b5db9a0743cd0b52d4fddd40391d196fd6cdc6a7640a6947be7fee->enter($__internal_6b558a44d0b5db9a0743cd0b52d4fddd40391d196fd6cdc6a7640a6947be7fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6b558a44d0b5db9a0743cd0b52d4fddd40391d196fd6cdc6a7640a6947be7fee->leave($__internal_6b558a44d0b5db9a0743cd0b52d4fddd40391d196fd6cdc6a7640a6947be7fee_prof);

        
        $__internal_9b699e1604e82e30b9622f68bd4bc7d9fe4c89ad1f7a1d317705007904dc88b0->leave($__internal_9b699e1604e82e30b9622f68bd4bc7d9fe4c89ad1f7a1d317705007904dc88b0_prof);

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
