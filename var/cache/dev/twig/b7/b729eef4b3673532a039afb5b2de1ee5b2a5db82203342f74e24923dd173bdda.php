<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_034f4f564bac62f23fb7fa9b75d3ad75af6e7fbc635f4dd493ef74cdc7799405 extends Twig_Template
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
        $__internal_077b9d85f78142419b17abc3863edf12c8f2668fe89dfe90d5beb29c4b4c41fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077b9d85f78142419b17abc3863edf12c8f2668fe89dfe90d5beb29c4b4c41fb->enter($__internal_077b9d85f78142419b17abc3863edf12c8f2668fe89dfe90d5beb29c4b4c41fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c35a914916bcdeb9f3e3680678e5f33d8e63f3e2359f412cd64681290e8d68f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35a914916bcdeb9f3e3680678e5f33d8e63f3e2359f412cd64681290e8d68f4->enter($__internal_c35a914916bcdeb9f3e3680678e5f33d8e63f3e2359f412cd64681290e8d68f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_077b9d85f78142419b17abc3863edf12c8f2668fe89dfe90d5beb29c4b4c41fb->leave($__internal_077b9d85f78142419b17abc3863edf12c8f2668fe89dfe90d5beb29c4b4c41fb_prof);

        
        $__internal_c35a914916bcdeb9f3e3680678e5f33d8e63f3e2359f412cd64681290e8d68f4->leave($__internal_c35a914916bcdeb9f3e3680678e5f33d8e63f3e2359f412cd64681290e8d68f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
