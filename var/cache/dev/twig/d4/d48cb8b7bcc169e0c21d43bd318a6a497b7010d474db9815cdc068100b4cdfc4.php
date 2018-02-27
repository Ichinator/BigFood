<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3b336d554070b3ecd313059e04093c942aa73c673092a737bbe38f64dc7d8ac6 extends Twig_Template
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
        $__internal_a86283ec1def5e897fbe20e3b5cf3e5e07cc41eea029ba20a5eee55a242b45b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86283ec1def5e897fbe20e3b5cf3e5e07cc41eea029ba20a5eee55a242b45b5->enter($__internal_a86283ec1def5e897fbe20e3b5cf3e5e07cc41eea029ba20a5eee55a242b45b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_75358f0f429ecb8747bfacd02508c916a05efc154c50e451994c4b059ffc0da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75358f0f429ecb8747bfacd02508c916a05efc154c50e451994c4b059ffc0da7->enter($__internal_75358f0f429ecb8747bfacd02508c916a05efc154c50e451994c4b059ffc0da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a86283ec1def5e897fbe20e3b5cf3e5e07cc41eea029ba20a5eee55a242b45b5->leave($__internal_a86283ec1def5e897fbe20e3b5cf3e5e07cc41eea029ba20a5eee55a242b45b5_prof);

        
        $__internal_75358f0f429ecb8747bfacd02508c916a05efc154c50e451994c4b059ffc0da7->leave($__internal_75358f0f429ecb8747bfacd02508c916a05efc154c50e451994c4b059ffc0da7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
