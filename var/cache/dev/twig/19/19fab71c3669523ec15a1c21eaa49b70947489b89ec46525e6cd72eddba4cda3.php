<?php

/* :default:messageToUser.html.twig */
class __TwigTemplate_b4964dedb05731d52734a25575a058179281c0589aec69262ed1a419230897db extends Twig_Template
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
        $__internal_5717d68c370e94f075151a5427bc21851ed8e19412ce2bdfd5c7c9706990fbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5717d68c370e94f075151a5427bc21851ed8e19412ce2bdfd5c7c9706990fbad->enter($__internal_5717d68c370e94f075151a5427bc21851ed8e19412ce2bdfd5c7c9706990fbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:messageToUser.html.twig"));

        $__internal_787505505de2bad766c042ad0251689b94183d798406bbba353299e355c57887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787505505de2bad766c042ad0251689b94183d798406bbba353299e355c57887->enter($__internal_787505505de2bad766c042ad0251689b94183d798406bbba353299e355c57887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:messageToUser.html.twig"));

        // line 1
        echo "<p>Bonjour ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo ", nous bien reçu votre message et nous y répondrons le plus rapidement possible. Pour rappel voici votre message: </p>
";
        // line 2
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        
        $__internal_5717d68c370e94f075151a5427bc21851ed8e19412ce2bdfd5c7c9706990fbad->leave($__internal_5717d68c370e94f075151a5427bc21851ed8e19412ce2bdfd5c7c9706990fbad_prof);

        
        $__internal_787505505de2bad766c042ad0251689b94183d798406bbba353299e355c57887->leave($__internal_787505505de2bad766c042ad0251689b94183d798406bbba353299e355c57887_prof);

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
