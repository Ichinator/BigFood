<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_53d83570fa654d77b16ecf646718b336e260a5dc758aa51f6495fbd9df73105f extends Twig_Template
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
        $__internal_6cee464bb7d4e342f30155b2fb460f63c81ea832efb1064c6daadf7f255fbbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cee464bb7d4e342f30155b2fb460f63c81ea832efb1064c6daadf7f255fbbc0->enter($__internal_6cee464bb7d4e342f30155b2fb460f63c81ea832efb1064c6daadf7f255fbbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_813e7306e11e5893a467d2f1d747677c11c7e285d9be910639fe8b790aaaf70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813e7306e11e5893a467d2f1d747677c11c7e285d9be910639fe8b790aaaf70a->enter($__internal_813e7306e11e5893a467d2f1d747677c11c7e285d9be910639fe8b790aaaf70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6cee464bb7d4e342f30155b2fb460f63c81ea832efb1064c6daadf7f255fbbc0->leave($__internal_6cee464bb7d4e342f30155b2fb460f63c81ea832efb1064c6daadf7f255fbbc0_prof);

        
        $__internal_813e7306e11e5893a467d2f1d747677c11c7e285d9be910639fe8b790aaaf70a->leave($__internal_813e7306e11e5893a467d2f1d747677c11c7e285d9be910639fe8b790aaaf70a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
