<?php

/* :default:messageToUser.html.twig */
class __TwigTemplate_fb8bb2f9adc9ad8b246ee5730db88e8e88272624bece12d79ab831e0034c0c69 extends Twig_Template
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
        $__internal_c38d64dad5d37314636b4064171f0874d221d8851c7c664f95c9bb615b27f665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38d64dad5d37314636b4064171f0874d221d8851c7c664f95c9bb615b27f665->enter($__internal_c38d64dad5d37314636b4064171f0874d221d8851c7c664f95c9bb615b27f665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:messageToUser.html.twig"));

        $__internal_3a91049c00c6d55db401ee61054c2015586b7024bd5d297c05471001a4d27174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a91049c00c6d55db401ee61054c2015586b7024bd5d297c05471001a4d27174->enter($__internal_3a91049c00c6d55db401ee61054c2015586b7024bd5d297c05471001a4d27174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:messageToUser.html.twig"));

        // line 1
        echo "<p>Bonjour ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo ", nous bien reçu votre message et nous y répondrons le plus rapidement possible. Pour rappel voici votre message: </p>
";
        // line 2
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        
        $__internal_c38d64dad5d37314636b4064171f0874d221d8851c7c664f95c9bb615b27f665->leave($__internal_c38d64dad5d37314636b4064171f0874d221d8851c7c664f95c9bb615b27f665_prof);

        
        $__internal_3a91049c00c6d55db401ee61054c2015586b7024bd5d297c05471001a4d27174->leave($__internal_3a91049c00c6d55db401ee61054c2015586b7024bd5d297c05471001a4d27174_prof);

    }

    public function getTemplateName()
    {
        return ":default:messageToUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Bonjour {{ name }}, nous bien reçu votre message et nous y répondrons le plus rapidement possible. Pour rappel voici votre message: </p>
{{ message }}", ":default:messageToUser.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/default/messageToUser.html.twig");
    }
}
