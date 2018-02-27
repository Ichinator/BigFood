<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_0430f040a90417db52a7fc8a6eb5349f5bd527f6f04ab9ce4c572a0b7946eb25 extends Twig_Template
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
        $__internal_fe39deb690c7edc98293a1f3020bc499aa4b6a999d6c13d3ad902236e879692f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe39deb690c7edc98293a1f3020bc499aa4b6a999d6c13d3ad902236e879692f->enter($__internal_fe39deb690c7edc98293a1f3020bc499aa4b6a999d6c13d3ad902236e879692f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_1d7679a99dfd46f63107e3ce39a2844bf540d775cc83c924ab035777ce0c10bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7679a99dfd46f63107e3ce39a2844bf540d775cc83c924ab035777ce0c10bd->enter($__internal_1d7679a99dfd46f63107e3ce39a2844bf540d775cc83c924ab035777ce0c10bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fe39deb690c7edc98293a1f3020bc499aa4b6a999d6c13d3ad902236e879692f->leave($__internal_fe39deb690c7edc98293a1f3020bc499aa4b6a999d6c13d3ad902236e879692f_prof);

        
        $__internal_1d7679a99dfd46f63107e3ce39a2844bf540d775cc83c924ab035777ce0c10bd->leave($__internal_1d7679a99dfd46f63107e3ce39a2844bf540d775cc83c924ab035777ce0c10bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
