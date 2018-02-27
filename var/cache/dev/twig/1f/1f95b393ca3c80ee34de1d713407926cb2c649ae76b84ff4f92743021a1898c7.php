<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a4e38a5eb5bba3c930676aabe5ca92ed8c354d462aba47576c7e7ab85b8dc601 extends Twig_Template
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
        $__internal_e658f73e174a1ffc822cb0dfadf3e298589e0ef577a70adc1281883be92f49ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e658f73e174a1ffc822cb0dfadf3e298589e0ef577a70adc1281883be92f49ba->enter($__internal_e658f73e174a1ffc822cb0dfadf3e298589e0ef577a70adc1281883be92f49ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_2bc7bac8693e4dc29b427df1ae4418d2f346dc5f8b091af2718b5b4f5ca84c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc7bac8693e4dc29b427df1ae4418d2f346dc5f8b091af2718b5b4f5ca84c23->enter($__internal_2bc7bac8693e4dc29b427df1ae4418d2f346dc5f8b091af2718b5b4f5ca84c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_e658f73e174a1ffc822cb0dfadf3e298589e0ef577a70adc1281883be92f49ba->leave($__internal_e658f73e174a1ffc822cb0dfadf3e298589e0ef577a70adc1281883be92f49ba_prof);

        
        $__internal_2bc7bac8693e4dc29b427df1ae4418d2f346dc5f8b091af2718b5b4f5ca84c23->leave($__internal_2bc7bac8693e4dc29b427df1ae4418d2f346dc5f8b091af2718b5b4f5ca84c23_prof);

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
