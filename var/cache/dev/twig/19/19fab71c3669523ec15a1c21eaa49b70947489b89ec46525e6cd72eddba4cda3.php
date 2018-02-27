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
        $__internal_845d10aef80150f64094c56cba9562c5dca118f1081a62b12d6bd9560de658c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845d10aef80150f64094c56cba9562c5dca118f1081a62b12d6bd9560de658c1->enter($__internal_845d10aef80150f64094c56cba9562c5dca118f1081a62b12d6bd9560de658c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:messageToUser.html.twig"));

        $__internal_7973b2a3ed625b54cb18b154b16da3426c6e547089addbae0be94932547fda23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7973b2a3ed625b54cb18b154b16da3426c6e547089addbae0be94932547fda23->enter($__internal_7973b2a3ed625b54cb18b154b16da3426c6e547089addbae0be94932547fda23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:messageToUser.html.twig"));

        // line 1
        echo "<p>Bonjour ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo ", nous bien reçu votre message et nous y répondrons le plus rapidement possible. Pour rappel voici votre message: </p>
";
        // line 2
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        
        $__internal_845d10aef80150f64094c56cba9562c5dca118f1081a62b12d6bd9560de658c1->leave($__internal_845d10aef80150f64094c56cba9562c5dca118f1081a62b12d6bd9560de658c1_prof);

        
        $__internal_7973b2a3ed625b54cb18b154b16da3426c6e547089addbae0be94932547fda23->leave($__internal_7973b2a3ed625b54cb18b154b16da3426c6e547089addbae0be94932547fda23_prof);

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
