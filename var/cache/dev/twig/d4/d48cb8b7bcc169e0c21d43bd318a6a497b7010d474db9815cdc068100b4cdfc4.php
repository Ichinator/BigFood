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
        $__internal_1e86af993dc964d4be0c26f60925910df36a783818c5584b3bc0498ab81144db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e86af993dc964d4be0c26f60925910df36a783818c5584b3bc0498ab81144db->enter($__internal_1e86af993dc964d4be0c26f60925910df36a783818c5584b3bc0498ab81144db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ff5246d85e1ed1f5213c8a1a564166aa803f53d0e861ad0789d1c26dea940e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5246d85e1ed1f5213c8a1a564166aa803f53d0e861ad0789d1c26dea940e7e->enter($__internal_ff5246d85e1ed1f5213c8a1a564166aa803f53d0e861ad0789d1c26dea940e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1e86af993dc964d4be0c26f60925910df36a783818c5584b3bc0498ab81144db->leave($__internal_1e86af993dc964d4be0c26f60925910df36a783818c5584b3bc0498ab81144db_prof);

        
        $__internal_ff5246d85e1ed1f5213c8a1a564166aa803f53d0e861ad0789d1c26dea940e7e->leave($__internal_ff5246d85e1ed1f5213c8a1a564166aa803f53d0e861ad0789d1c26dea940e7e_prof);

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
