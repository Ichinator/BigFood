<?php

/* CoreSphereConsoleBundle:Console:result.json.twig */
class __TwigTemplate_e6a7ffa9ebd76c7a36d56ad673bfaf73c0d903599872be5c20dd1577e4f84c93 extends Twig_Template
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
        $__internal_4bd11effaa8e2d04ea3d3f13b57fa373c9cf020ea702f49311fa6c6fbe19493a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd11effaa8e2d04ea3d3f13b57fa373c9cf020ea702f49311fa6c6fbe19493a->enter($__internal_4bd11effaa8e2d04ea3d3f13b57fa373c9cf020ea702f49311fa6c6fbe19493a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:result.json.twig"));

        $__internal_fce84c8b0bd77601cc0e3a74b44ea3bb5cf57f0d7d8be4d7fa3a7a22da63bafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce84c8b0bd77601cc0e3a74b44ea3bb5cf57f0d7d8be4d7fa3a7a22da63bafe->enter($__internal_fce84c8b0bd77601cc0e3a74b44ea3bb5cf57f0d7d8be4d7fa3a7a22da63bafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:result.json.twig"));

        // line 2
        echo "{\"results\" : [
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commands"] ?? $this->getContext($context, "commands")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 4
            echo "{
    \"command\" : ";
            // line 5
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "input", array())));
            echo ",
    \"output\" : ";
            // line 6
            echo twig_jsonencode_filter($this->getAttribute($context["command"], "output", array()));
            echo ",
    \"environment\": ";
            // line 7
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "environment", array())));
            echo ",
    \"error_code\": ";
            // line 8
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "error_code", array())));
            echo "
}";
            // line 9
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "] }
";
        
        $__internal_4bd11effaa8e2d04ea3d3f13b57fa373c9cf020ea702f49311fa6c6fbe19493a->leave($__internal_4bd11effaa8e2d04ea3d3f13b57fa373c9cf020ea702f49311fa6c6fbe19493a_prof);

        
        $__internal_fce84c8b0bd77601cc0e3a74b44ea3bb5cf57f0d7d8be4d7fa3a7a22da63bafe->leave($__internal_fce84c8b0bd77601cc0e3a74b44ea3bb5cf57f0d7d8be4d7fa3a7a22da63bafe_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:result.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  45 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% autoescape false %}
{\"results\" : [
{% for command in commands %}
{
    \"command\" : {{ command.input|escape|json_encode }},
    \"output\" : {{ command.output|json_encode }},
    \"environment\": {{ command.environment|escape|json_encode }},
    \"error_code\": {{ command.error_code|escape|json_encode }}
}{{ loop.last ? '' : ',' }}
{% endfor %}
] }
{% endautoescape %}
", "CoreSphereConsoleBundle:Console:result.json.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/coresphere/console-bundle/Resources/views/Console/result.json.twig");
    }
}
