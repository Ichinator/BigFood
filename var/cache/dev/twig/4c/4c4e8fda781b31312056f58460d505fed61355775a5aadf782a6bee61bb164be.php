<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_132cf483813d0853c2b9d6fbc3fd731c221752e01a6429b2e10fe0a9cdcb937f extends Twig_Template
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
        $__internal_c9ebff8b65a733cbd43a7a9206de7d8071b59c250ca1a6002104ef73c148dc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ebff8b65a733cbd43a7a9206de7d8071b59c250ca1a6002104ef73c148dc4f->enter($__internal_c9ebff8b65a733cbd43a7a9206de7d8071b59c250ca1a6002104ef73c148dc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_18542124062f7cf1076c27f66b554f7cb70030d2b0cacf824d7991c05b30d58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18542124062f7cf1076c27f66b554f7cb70030d2b0cacf824d7991c05b30d58c->enter($__internal_18542124062f7cf1076c27f66b554f7cb70030d2b0cacf824d7991c05b30d58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_c9ebff8b65a733cbd43a7a9206de7d8071b59c250ca1a6002104ef73c148dc4f->leave($__internal_c9ebff8b65a733cbd43a7a9206de7d8071b59c250ca1a6002104ef73c148dc4f_prof);

        
        $__internal_18542124062f7cf1076c27f66b554f7cb70030d2b0cacf824d7991c05b30d58c->leave($__internal_18542124062f7cf1076c27f66b554f7cb70030d2b0cacf824d7991c05b30d58c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
